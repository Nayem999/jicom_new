<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mf_production_model extends CI_Model
{

    public function __construct() {
        parent::__construct();

    }

    public function update_recipe($id, $data = NULL) {
        if ($this->db->update('mf_production_mst', $data, array('id' => $id))) {
            return true;
        }
        return false;
    }

    public function get_all_recipe() {
        $this->db->from('mf_production_mst');
        $query = $this->db->get();        
        $results = $query->result();     
        return $results ; 
    }

    public function get_recipe_by_id($id) {
        $q = $this->db->get_where('mf_production_mst', array('id' => $id));
            if ($q->num_rows() > 0) {
                return $q->result();
            }
        return FALSE;
    }

    public function get_max_id() {
        $this->db->select('max(id) as id');
        $q = $this->db->get('mf_production_mst');
            if ($q->num_rows() > 0) {
                $res= $q->result();
                return $res[0]->id;
            }
        return 0;
    }

    public function get_raw_material_info($term, $limit = 10) {

        $this->db->select(" mf_material.id as material_id, mf_material.name as name, mf_material_store_qty.id as material_stock_id, mf_brands.name as brand_name, mf_unit.name as unit_name");
        $this->db->from('mf_material');
        $this->db->join('mf_material_store_qty','mf_material_store_qty.material_id=mf_material.id');
        $this->db->join('mf_brands','mf_material_store_qty.brand_id=mf_brands.id','left');
        $this->db->join('mf_unit','mf_material.uom_id=mf_unit.id','left');

        $this->db->where(" (tec_mf_material.name LIKE '%" . $term . "%' )");

        $this->db->limit($limit);
        $q = $this->db->get();
        // echo $this->db->last_query();die;
        if ($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {

                $data[] = $row;

            }

            return $data;

        }

        return FALSE;

    }

    public function add_production($data, $items,$packing) {  

        if ($this->db->insert('mf_production_mst', $data)) {
            $production_id = $this->db->insert_id();
            $store_id=$data["store_id"];
            $product_id=$data["product_id"];
            foreach ($items as $item) {

                $item['production_id'] = $production_id;
                $this->db->insert('mf_production_dtls', $item);

            }
            foreach ($packing as $item) {

                $item['production_id'] = $production_id;
                $this->db->insert('mf_production_material_packaging', $item);

                $materialIds = $item["material_packaging_id"];
                $materialQts = $item["quantity"];

                $findPkMaterial = $this->db->select("*")->from("mf_material_packaging")->where('id',$materialIds)->get()->row();
                $findPkMaterial_by_store = $this->db->select("*")->from("mf_material_packaging_store_qty")->where('material_id',$materialIds)->where('store_id',$store_id)->get()->row();

                if($findPkMaterial){
                    $currentQty = $findPkMaterial->quantity;
                    $currentQty_by_store = $findPkMaterial_by_store->quantity;

                    if($materialQts > 0){
                        $newQty = $currentQty - $materialQts;
                        $newQty_by_store = $currentQty_by_store - $materialQts;

                        // decrease pk material qty
                        $decreaseQty_by_store = $this->db->where('material_id',$materialIds)->where('store_id',$store_id)->update('mf_material_packaging_store_qty',['quantity'=>$newQty_by_store]);
                        $decreaseQtyFromPackaging = $this->db->where('id',$materialIds)->update('mf_material_packaging',['quantity'=>$newQty]);
                        
                        // increase pk material qty
                        $product_packaging_stock = $this->db->select("*")->from("mf_product_packaging_stock")->where('packaging_id',$materialIds)->where('product_id',$product_id)->where('store_id',$store_id)->get()->row();
                        if($product_packaging_stock){
                            $product_packaging_new_stock = $materialQts + $product_packaging_stock->quantity;
                            $this->db->where('id',$product_packaging_stock->id)->update('mf_product_packaging_stock',['quantity'=>$product_packaging_new_stock]);
                        } else {     
                            $insertdata = array(
                                'packaging_id' => $materialIds,
                                'product_id' => $product_id,
                                'store_id' => $store_id,
                                'quantity' => $materialQts
                            );     
                            $this->db->insert('mf_product_packaging_stock', $insertdata);
                        } 

                        $pkLogData = [];
                        $pkLogData["material_id"] =$materialIds;
                        $pkLogData["to_sale"] = $materialQts;
                        $pkLogData["from_qty"] = $currentQty;
                        $pkLogData["to_qty"] = $newQty;
                        $pkLogData["balance"] = $newQty;
                        $pkLogData["type"] = 3;
                        $pkLogData["comment"] = "Production with packaging material";
                        $pkLogData["date"] = date("Y-m-d");

                        $this->db->insert("mf_packaging_material_log",$pkLogData);
                        // insert data into material adjust log
                    }
                    
                }

            }
            return true;
        }
        return false;

    }

    public function getProductionByID($id) {

        $this->db->select('mf_production_mst.*, mf_production_mst.batch_no, mf_recipe_mst.name as recipe_name, products.name as products_name, mf_unit.name as uom_name ');
        $this->db->join('mf_recipe_mst','mf_production_mst.recipe_id=mf_recipe_mst.id');
        $this->db->join('products','mf_production_mst.product_id=products.id'); 
        $this->db->join('mf_unit','mf_production_mst.uom_id=mf_unit.id','left');
        $q = $this->db->get_where('mf_production_mst', array('mf_production_mst.id' => $id,'mf_production_mst.active_status'=>1), 1);

        if( $q->num_rows() > 0 ) {
            return $q->row();
        }

        return FALSE;

    }

    public function getProductionDtlsByID($id) {

        $this->db->select('mf_production_dtls.* , mf_material.name, mf_brands.name as brand_name, mf_unit.name as unit_name, mf_recipe_dtls.quantity as qty, mf_material_store_qty.quantity as stock_qty, mf_material_store_qty.cost as stock_cost');
        $this->db->join('mf_material','mf_production_dtls.material_id=mf_material.id');
        $this->db->join('mf_material_store_qty','mf_production_dtls.material_stock_id=mf_material_store_qty.id');
        $this->db->join('mf_recipe_dtls','mf_production_dtls.recipe_dtls_id=mf_recipe_dtls.id');
        $this->db->join('mf_brands','mf_material_store_qty.brand_id=mf_brands.id','left');
        $this->db->join('mf_unit','mf_material.uom_id=mf_unit.id','left');

        $q = $this->db->get_where('mf_production_dtls', array('mf_production_dtls.production_id' => $id,'mf_production_dtls.active_status'=>1));
        // echo 
        if( $q->num_rows() > 0 ) {
            foreach (($q->result()) as $row){  
                $data[] = $row;  
            }
            return $data;
        }

        return FALSE;

    }

    public function getProductionPackagingDtlsByID($id) {

        $this->db->select('mf_production_material_packaging.* , mf_material_packaging.name');
        $this->db->join('mf_material_packaging','mf_material_packaging.id=mf_production_material_packaging.material_packaging_id');
        $q = $this->db->get_where('mf_production_material_packaging', array('mf_production_material_packaging.production_id' => $id,'mf_production_material_packaging.active_status'=>1));
        // echo 
        if( $q->num_rows() > 0 ) {
            foreach (($q->result()) as $row){  
                $data[] = $row;  
            }
            return $data;
        }

        return FALSE;

    }

    public function updateProduction($id, $data = NULL, $items = array(), $packing = array()) {

        $old_mst_data=$this->getProductionByID($id);
        $store_id=$old_mst_data->store_id;
        $product_id=$old_mst_data->product_id;

        $old_data_adjust=$this->getProductionPackagingDtlsByID($id);
        if(is_array($old_data_adjust) && count($old_data_adjust) > 0){
            
            foreach($old_data_adjust as $key=>$val){
                $materialIds = $val->material_packaging_id ;
                $materialQts = $val->quantity;
                $findPkMaterial = $this->db->select("*")->from("mf_material_packaging")->where('id',$materialIds)->get()->row();
                $findPkMaterial_by_store = $this->db->select("*")->from("mf_material_packaging_store_qty")->where('material_id',$materialIds)->where('store_id',$store_id)->get()->row();

                if($findPkMaterial){
                    $currentQty = $findPkMaterial->quantity;
                    $currentQty_by_store = $findPkMaterial_by_store->quantity;

                    if($materialQts > 0){
                        $newQty = $currentQty + $materialQts;
                        $newQty_by_store = $currentQty_by_store + $materialQts;

                        // increase pk material qty
                        $decreaseQty_by_store = $this->db->where('material_id',$materialIds)->where('store_id',$store_id)->update('mf_material_packaging_store_qty',['quantity'=>$newQty_by_store]);
                        $decreaseQtyFromPackaging = $this->db->where('id',$materialIds)->update('mf_material_packaging',['quantity'=>$newQty]);
                        
                        // decrease pk material qty
                        $product_packaging_stock = $this->db->select("*")->from("mf_product_packaging_stock")->where('packaging_id',$materialIds)->where('product_id',$product_id)->where('store_id',$store_id)->get()->row();
                        if($product_packaging_stock){
                            $product_packaging_new_stock = $product_packaging_stock->quantity - $materialQts;
                            $this->db->where('id',$product_packaging_stock->id)->update('mf_product_packaging_stock',['quantity'=>$product_packaging_new_stock]);
                        }

                        $pkLogData = [];
                        $pkLogData["material_id"] =$materialIds;
                        $pkLogData["to_sale"] = $materialQts;
                        $pkLogData["from_qty"] = $currentQty;
                        $pkLogData["to_qty"] = $newQty;
                        $pkLogData["balance"] = $newQty;
                        $pkLogData["type"] = 5;
                        $pkLogData["comment"] = "Production with packaging material";
                        $pkLogData["date"] = date("Y-m-d");

                        $this->db->insert("mf_packaging_material_log",$pkLogData);
                        // insert data into material adjust log
                    }
                    
                }
            }
        }

        if ($this->db->update('mf_production_mst', $data, array('id' => $id)) && $this->db->update('mf_production_dtls', array('active_status'=>0), array('production_id' => $id)) && $this->db->update('mf_production_material_packaging', array('active_status'=>0), array('production_id' => $id))) {

            foreach ($items as $item) {
                $item['production_id'] = $id;
                $this->db->insert('mf_production_dtls', $item);
            }
            foreach ($packing as $item) {
                $item['production_id'] = $id;
                $this->db->insert('mf_production_material_packaging', $item);

                $materialIds = $item["material_packaging_id"];
                $materialQts = $item["quantity"];

                $findPkMaterial = $this->db->select("*")->from("mf_material_packaging")->where('id',$materialIds)->get()->row();
                $findPkMaterial_by_store = $this->db->select("*")->from("mf_material_packaging_store_qty")->where('material_id',$materialIds)->where('store_id',$store_id)->get()->row();

                if($findPkMaterial){
                    $currentQty = $findPkMaterial->quantity;
                    $currentQty_by_store = $findPkMaterial_by_store->quantity;

                    if($materialQts > 0){
                        $newQty = $currentQty - $materialQts;
                        $newQty_by_store = $currentQty_by_store - $materialQts;

                        // decrease pk material qty
                        $decreaseQty_by_store = $this->db->where('material_id',$materialIds)->where('store_id',$store_id)->update('mf_material_packaging_store_qty',['quantity'=>$newQty_by_store]);
                        $decreaseQtyFromPackaging = $this->db->where('id',$materialIds)->update('mf_material_packaging',['quantity'=>$newQty]);
                        
                        // increase pk material qty
                        $product_packaging_stock = $this->db->select("*")->from("mf_product_packaging_stock")->where('packaging_id',$materialIds)->where('product_id',$product_id)->where('store_id',$store_id)->get()->row();
                        if($product_packaging_stock){
                            $product_packaging_new_stock = $materialQts + $product_packaging_stock->quantity;
                            $this->db->where('id',$product_packaging_stock->id)->update('mf_product_packaging_stock',['quantity'=>$product_packaging_new_stock]);
                        } else {     
                            $insertdata = array(
                                'packaging_id' => $materialIds,
                                'product_id' => $product_id,
                                'store_id' => $store_id,
                                'quantity' => $materialQts
                            );     
                            $this->db->insert('mf_product_packaging_stock', $insertdata);
                        } 

                        $pkLogData = [];
                        $pkLogData["material_id"] =$materialIds;
                        $pkLogData["to_sale"] = $materialQts;
                        $pkLogData["from_qty"] = $currentQty;
                        $pkLogData["to_qty"] = $newQty;
                        $pkLogData["balance"] = $newQty;
                        $pkLogData["type"] = 2;
                        $pkLogData["comment"] = "Production with packaging material";
                        $pkLogData["date"] = date("Y-m-d");

                        $this->db->insert("mf_packaging_material_log",$pkLogData);
                        // insert data into material adjust log
                    }
                    
                }
            }

            return true;

        }

        return false;

    }

    public function deleteProduction($id,$data,$data2) {
        $old_mst_data=$this->getProductionByID($id);
        $store_id=$old_mst_data->store_id;
        $product_id=$old_mst_data->product_id;

        $old_data_adjust=$this->getProductionPackagingDtlsByID($id);
        if(is_array($old_data_adjust) && count($old_data_adjust) > 0){
            
            foreach($old_data_adjust as $key=>$val){
                $materialIds = $val->material_packaging_id ;
                $materialQts = $val->quantity;
                $findPkMaterial = $this->db->select("*")->from("mf_material_packaging")->where('id',$materialIds)->get()->row();
                $findPkMaterial_by_store = $this->db->select("*")->from("mf_material_packaging_store_qty")->where('material_id',$materialIds)->where('store_id',$store_id)->get()->row();

                if($findPkMaterial){
                    $currentQty = $findPkMaterial->quantity;
                    $currentQty_by_store = $findPkMaterial_by_store->quantity;

                    if($materialQts > 0){
                        $newQty = $currentQty + $materialQts;
                        $newQty_by_store = $currentQty_by_store + $materialQts;

                        // increase pk material qty
                        $decreaseQty_by_store = $this->db->where('material_id',$materialIds)->where('store_id',$store_id)->update('mf_material_packaging_store_qty',['quantity'=>$newQty_by_store]);
                        $decreaseQtyFromPackaging = $this->db->where('id',$materialIds)->update('mf_material_packaging',['quantity'=>$newQty]);
                        
                        // decrease pk material qty
                        $product_packaging_stock = $this->db->select("*")->from("mf_product_packaging_stock")->where('packaging_id',$materialIds)->where('product_id',$product_id)->where('store_id',$store_id)->get()->row();
                        if($product_packaging_stock){
                            $product_packaging_new_stock = $product_packaging_stock->quantity - $materialQts;
                            $this->db->where('id',$product_packaging_stock->id)->update('mf_product_packaging_stock',['quantity'=>$product_packaging_new_stock]);
                        }

                        $pkLogData = [];
                        $pkLogData["material_id"] =$materialIds;
                        $pkLogData["to_sale"] = $materialQts;
                        $pkLogData["from_qty"] = $currentQty;
                        $pkLogData["to_qty"] = $newQty;
                        $pkLogData["balance"] = $newQty;
                        $pkLogData["type"] = 5;
                        $pkLogData["comment"] = "Production with packaging material";
                        $pkLogData["date"] = date("Y-m-d");

                        $this->db->insert("mf_packaging_material_log",$pkLogData);
                        // insert data into material adjust log
                    }
                    
                }
            }
        }

        if ($this->db->update('mf_production_mst', $data, array('id' => $id)) && $this->db->update('mf_production_dtls', $data2, array('production_id' => $id)) && $this->db->update('mf_production_material_packaging', $data2, array('production_id' => $id))) {
            return true;
        }
        return false;

    }

    public function updateStatusApprove($id,$dataAppr,$data,$info,$status) {

        $q = $this->db->get_where('mf_finished_good_stock', array('mf_finished_good_stock.product_id' => $info->product_id,'mf_finished_good_stock.store_id' => $info->store_id), 1);

        if( $q->num_rows() > 0 ) {
            $finished_good_stock = $q->row();
            if($status=='Approved')
            {
                $oldTPrice = $finished_good_stock->cost*$finished_good_stock->quantity;
                $newTPrice = $info->total_cost;
                $TotalPrice = $oldTPrice+$newTPrice;
                $TotalQty = $finished_good_stock->quantity+$info->actual_output;
                $coust_amount = $TotalPrice/$TotalQty;

                $this->db->update('mf_finished_good_stock',array('quantity' => $TotalQty,'cost' => $coust_amount), array('product_id' => $info->product_id));
            }
            else
            {
                $new_qty= $finished_good_stock->quantity-$info->actual_output;
                $oldTPrice = $finished_good_stock->cost*$finished_good_stock->quantity;
                $newTPrice = $info->total_cost;
                $TotalPrice = $oldTPrice-$newTPrice;
                $TotalQty = $finished_good_stock->quantity-$info->actual_output;
                $coust_amount = $TotalPrice/$TotalQty;

                $this->db->update('mf_finished_good_stock', array('quantity' => $new_qty,'cost' => $coust_amount), array('product_id' => $info->product_id));
            }
        }
        else
        {
            $coust_amount = $info->total_cost/$info->actual_output;
            $finished_good_data=array(
                'store_id' => $info->store_id,
                'product_id' => $info->product_id,
                'quantity' => $info->actual_output,
                'cost' => $coust_amount
            );
            $this->db->insert('mf_finished_good_stock',$finished_good_data );
        }

        $q = $this->db->get_where('mf_production_dtls', array('mf_production_dtls.production_id'=>$id, 'mf_production_dtls.active_status'=>1));

        if( $q->num_rows() > 0 ) {
            $finished_good_stock_arr = $q->result();
            foreach($finished_good_stock_arr as $key=>$val)
            {
                $material_store_qty=$this->db->get_where('mf_material_store_qty', array('mf_material_store_qty.id'=>$val->material_stock_id))->row();
                if($status=='Approved')
                {
                    $TotalQty = $material_store_qty->quantity-$val->quantity;
                    $this->db->update('mf_material_store_qty',array('quantity' => $TotalQty), array('id' => $val->material_stock_id));
                }
                else
                {
                    $TotalQty = $material_store_qty->quantity+$val->quantity;    
                    $this->db->update('mf_material_store_qty', array('quantity' => $TotalQty), array('id' => $val->material_stock_id));
                }
            }
            
        }

        if($this->db->update('mf_production_mst', $dataAppr, array('id' => $id)) && $this->db->insert('mf_finished_good_stock_log', $data)) {
            return true;
        }
        return false;	
    }

}
