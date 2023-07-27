<?php defined('BASEPATH') or exit('No direct script access allowed');

class Transfers_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function getTransfersByID($id)
    {

        $q = $this->db->get_where('transfers', array('id' => $id), 1);

        if ($q->num_rows() > 0) {

            return $q->row();
        }

        return FALSE;
    }


    public function getProductNames($term, $limit = 10)
    {

        $store_id = $this->session->userdata('from_warehouse');

        $store_info = $this->site->findeNameByID('stores', 'id', $store_id);

        if ($store_info->store_type == 1) {
            $this->db->select('products.id,products.name,products.code,products.cost, product_store_qty.quantity as store_qty ');
            $this->db->where("(name LIKE '%" . $term . "%' OR code LIKE '%" . $term . "%' OR  concat(name, ' (', code, ')') LIKE '%" . $term . "%') and product_store_qty.store_id=" . $store_id . " and product_store_qty.quantity > 0 ");
            $this->db->join('product_store_qty', 'product_store_qty.product_id = products.id');
            //$this->db->group_by("product_store_qty.pro_id");
            $this->db->limit($limit);
        } else {
            $this->db->select('products.id,products.name,products.code, mf_finished_good_stock.quantity as store_qty, mf_finished_good_stock.cost ');
            $this->db->where("(name LIKE '%" . $term . "%' OR code LIKE '%" . $term . "%' OR  concat(name, ' (', code, ')') LIKE '%" . $term . "%') and mf_finished_good_stock.store_id=" . $store_id . " and mf_finished_good_stock.quantity > 0 ");
            $this->db->join('mf_finished_good_stock', 'mf_finished_good_stock.product_id = products.id ');
            $this->db->limit($limit);
        }

        $q = $this->db->get('products');

        if ($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return FALSE;
    }

    public function getProductStock($item_id, $store_type)
    {

        $store_id = $this->session->userdata('from_warehouse');
        if ($store_type == 1) {
            $this->db->select('product_store_qty.quantity as store_qty ');
            $this->db->where("product_store_qty.store_id=" . $store_id . " and product_store_qty.product_id=" . $item_id . " and product_store_qty.quantity > 0 ");
            $this->db->where('product_store_qty.product_id', $item_id);
            $q = $this->db->get('product_store_qty');

        } else {
            $this->db->select(' mf_finished_good_stock.quantity as store_qty ');
            $this->db->where(" mf_finished_good_stock.store_id=" . $store_id . " and mf_finished_good_stock.product_id=" . $item_id . " and mf_finished_good_stock.quantity > 0 ");
            $q = $this->db->get('mf_finished_good_stock');
        }


        if ($q->num_rows() > 0) {
            $data = $q->row();
            return $data->store_qty;
        }

        return 0;
    }

    public function getProductStoreQtyByPidAndStoreId($store_id, $product_id)
    {

        $this->db->where("product_id = '" . $product_id . "' AND store_id = " . $store_id);

        $q = $this->db->get('product_store_qty');

        if ($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {

                $data[] = $row;
                return $row;
            }
        }
    }

    public function upadteProductQtyById($id, $data = array())
    {

        if ($this->db->update('product_store_qty', $data, array('id' => $id))) {

            return true;
        }

        return false;
    }

    public function addtransfers($data, $items,$packing)
    {

        if ($this->db->insert('transfers', $data)) {
            $transfers_id = $this->db->insert_id();
            $store_id=$this->session->userdata('from_warehouse');
            foreach ($items as $item) {
                $item['transfers_id'] = $transfers_id;
                if ($this->db->insert('transfers_items', $item));
            }
            foreach ($packing as $packing_item) {
                $packing_item['transfers_id'] = $transfers_id;
                $this->db->insert('tec_mf_transfers_packaging', $packing_item);
            }
            $this->session->unset_userdata('from_warehouse');
            return $transfers_id;
            return true;
        }

        return false;
    }


    public function UpdateTransfers($id, $data, $products, $fromwarehouse, $towarehouse,$packing)
    {
         
        if ($this->db->update('transfers', $data, array('id' => $id))) {

           /*  $idem_pr = $this->db->get_where('transfers_items', array('transfers_id' => $id));
            $results = $idem_pr->result();
            foreach ($results as $key => $result) {
                $this->storeProQtyDelete($result->product_id, $result->quantity, $towarehouse);
                $this->storeProQtyUpdate($result->product_id, $result->quantity, $fromwarehouse);
            } */

            $this->db->delete('transfers_items', array('transfers_id' => $id));
            foreach ($products as $product) {
                $this->db->insert('transfers_items', $product);
                // $this->storeProQtyDelete($product['product_id'], $product['quantity'], $fromwarehouse);
                // $this->storeProQtyUpdate($product['product_id'], $product['quantity'], $towarehouse);
            }
            $this->db->where('transfers_id',$id)->update('mf_transfers_packaging',['active_status'=>0]);
            $store_id=$fromwarehouse;

            foreach ($packing as $packing_item) {
                $packing_item['transfers_id'] = $id;
                $this->db->insert('tec_mf_transfers_packaging', $packing_item);
            }
            return TRUE;
        }
        return FALSE;
    }

    public function  Delete($id)
    {
        if($this->db->delete('transfers', array('id' => $id)) && $this->db->delete('transfers_items', array('transfers_id' => $id)) && $this->db->where('transfers_id',$id)->update('mf_transfers_packaging',['active_status'=>0]))
        {
            return TRUE;
        }
        return FALSE;
    }

    public function AddPackagingStock($id)
    {
        $transfers_dtls = $this->db->select("from_warehouse_id")->from("transfers")->where('id',$id)->get()->row();
        $store_id=$transfers_dtls->from_warehouse_id;
        $prv_data_adjust=$this->getTransferPackagingDtlsByID($id);
        if(is_array($prv_data_adjust) && count($prv_data_adjust) > 0){
            foreach ($prv_data_adjust as $key=>$value){
                $packingIds=$value->packaging_id;
                $product_id=$value->product_id;

                $product_packaging_stock = $this->db->select("*")->from("mf_product_packaging_stock")->where('packaging_id',$packingIds)->where('product_id',$product_id)->where('store_id',$store_id)->get()->row();
                if($product_packaging_stock)
                {
                    $packingQts=$value->quantity;
                    $product_packaging_new_stock = $product_packaging_stock->quantity + $packingQts;
                    $this->db->where('id',$product_packaging_stock->id)->update('mf_product_packaging_stock',['quantity'=>$product_packaging_new_stock]);
                }
            }            
        }
    }

    public function DeletePackagingStock($id)
    {
        $transfers_dtls = $this->db->select("from_warehouse_id")->from("transfers")->where('id',$id)->get()->row();
        $store_id=$transfers_dtls->from_warehouse_id;
        $prv_data_adjust=$this->getTransferPackagingDtlsByID($id);
        if(is_array($prv_data_adjust) && count($prv_data_adjust) > 0){
            foreach ($prv_data_adjust as $key=>$value){
                $packingIds=$value->packaging_id;
                $product_id=$value->product_id;
                $packingQts=$value->quantity;

                $product_packaging_stock = $this->db->select("*")->from("mf_product_packaging_stock")->where('packaging_id',$packingIds)->where('product_id',$product_id)->where('store_id',$store_id)->get()->row();
                if($product_packaging_stock)
                {
                    $product_packaging_new_stock = $product_packaging_stock->quantity - $packingQts;
                    $this->db->where('id',$product_packaging_stock->id)->update('mf_product_packaging_stock',['quantity'=>$product_packaging_new_stock]);
                } 
            }            
        }
    }

    public function getTransferPackagingDtlsByID($id) {

        $this->db->select('mf_transfers_packaging.* , mf_material_packaging.name');
        $this->db->join('mf_material_packaging','mf_material_packaging.id=mf_transfers_packaging.packaging_id');
        $q = $this->db->get_where('mf_transfers_packaging', array('mf_transfers_packaging.transfers_id' => $id,'mf_transfers_packaging.active_status'=>1));
        // echo 
        if( $q->num_rows() > 0 ) {
            foreach (($q->result()) as $row){  
                $data[] = $row;  
            }
            return $data;
        }
        return FALSE;

    }

    public function getTransferPackagingDtlsWithStock($id,$store_id) {
        $this->db->select('mf_transfers_packaging.* , mf_product_packaging_stock.quantity as stock_qty');   
        $this->db->join('mf_product_packaging_stock',"mf_product_packaging_stock.packaging_id=mf_transfers_packaging.packaging_id and mf_product_packaging_stock.product_id=mf_transfers_packaging.product_id and mf_product_packaging_stock.store_id=$store_id");
        $q = $this->db->get_where('mf_transfers_packaging', array('mf_transfers_packaging.transfers_id' => $id,'mf_transfers_packaging.active_status'=>1));
        // echo 
        $data=array();
        if( $q->num_rows() > 0 ) {
            foreach (($q->result()) as $row){  
                $data[] = $row;  
            }
        }
        return $data;
    }

    public function getSroteByID($id)
    {
        $q = $this->db->get_where('stores', array('id' => $id), 1);
        if ($q->num_rows() > 0) {
            return $q->row();
        }
        return FALSE;
    }

    public function getSequence($id, $store_id)
    {
        $this->db->from('pro_sequence');
        if ($id != '') {
            $this->db->where('pro_id', $id);
        }
        if ($store_id != '') {
            $this->db->where('store_id', $store_id);
        }
        $query = $this->db->get();
        $results = $query->result();
        return $results;
    }

    public function getAllTransfersItems($transfers_id)
    {

        $this->db->select('transfers_items.*, products.code as product_code, products.name as product_name,  mf_finished_good_stock.quantity as store_qty')

            ->join('products', 'products.id=transfers_items.product_id', 'left')
            ->join('transfers', 'transfers.id=transfers_items.transfers_id', 'left')
            ->join('stores', 'transfers.from_warehouse_id =stores.id', 'left')
            ->join('mf_finished_good_stock', 'mf_finished_good_stock.store_id=stores.id and products.id=mf_finished_good_stock.product_id', 'left')

            ->group_by('transfers_items.id')

            ->order_by('id', 'asc');

        $q = $this->db->get_where('transfers_items', array('transfers_id' => $transfers_id));

        if ($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {
                $data[] = $row;
            }

            return $data;
        }

        return FALSE;
    }

    public function getAllTransfers($startDate = null, $endDate=null)
    {

        $this->db->select('transfers.*')->order_by('id', 'desc');
            
        if($startDate || $endDate){

            $this->db->where('date >=', $startDate ." 00:00:00");

            $this->db->where('date <=', $endDate ." 23:59:59");
        }

        $q = $this->db->get('transfers');

        if ($q->num_rows() > 0) {
            foreach (($q->result()) as $row) {
                $data[] = $row;
            }
            return $data;
        }

        return array();
    }

    function storeProQtyDelete($item_id, $item_quantity, $store_id)
    {

        $q = $this->db->get_where('product_store_qty', array('product_id' => $item_id, 'store_id' => $store_id), 1);

        $value =  $q->row();

        $quantityOld = $value->quantity;

        $dbQty  = $quantityOld - $item_quantity;

        $data  = array('quantity' => $dbQty);

        if ($this->db->update('product_store_qty', $data, array('product_id' => $item_id, 'store_id' => $store_id))) {
            return true;
        }
        return false;
    }

    function storeProQtyUpdate($item_id, $item_quantity, $store_id)
    {
        $q = $this->db->get_where('product_store_qty', array('product_id' => $item_id, 'store_id' => $store_id), 1);
        if ($q->num_rows() > 0) {
            $value =  $q->row();
            $quantityOld = $value->quantity;
            $dbQty  = $quantityOld + $item_quantity;
            $data  = array('quantity' => $dbQty);
            if ($this->db->update('product_store_qty', $data, array('product_id' => $item_id, 'store_id' => $store_id))) {
                return true;
            }
            return false;
        } else {

            $sqdata = array(
                'product_id' => $item_id,
                'store_id' => $store_id,
                'quantity' => $item_quantity
            );
            $this->db->insert('product_store_qty', $sqdata);
        }
    }

    function getSequenceByPrpID($id)
    {

        $from_warehouse = $this->session->userdata('from_warehouse');

        $q = $this->db->get_where('pro_sequence', array('pro_id' => $id, 'store_id' => $from_warehouse, 'status' => 0));
        if ($q->num_rows() > 0) {
            return $result = $q->result();
        }

        return FALSE;
    }

    public function updateStatusApprove($id,$dataAppr,$data,$products,$sales_data,$sales_products) {

        if($this->db->update('transfers', $dataAppr, array('id' => $id)) ) {

            if($this->db->insert('purchases', $data))
            {
                $purchase_id = $this->db->insert_id();
                foreach ($products as $item) {
    
                    $item['purchase_id'] = $purchase_id;
                    $item['store_id'] = $data['store_id'];
    
                    if ($this->db->insert('purchase_items', $item)) {
    
                        $incstoreqty = $this->getProductStoreQtyByPidAndStoreId($data['store_id'], $item['product_id']);
    
                        if ($incstoreqty) {
                            $upqtyinc = $incstoreqty->quantity + $item['quantity'];
    
                            $incdata = array(
                                'quantity' => $upqtyinc,
                            );
                            $this->upadteProductQtyById($incstoreqty->id, $incdata);
                        } else {
    
                            $insertdata = array(
                                'product_id' => $item['product_id'],
                                'quantity' => $item['quantity'],
                                'store_id' => $data['store_id']
                            );
    
                            $this->db->insert('product_store_qty', $insertdata);
                        }
    
                        $product = $this->site->getProductByID($item['product_id']);
    
                        $old_cost = $product->cost;
                        $old_quantity = $product->quantity;
    
                        $new_cost = $item['cost'];
                        $new_qty = $item['quantity'];
    
                        if ($old_quantity > 0) {
                            $oldTPrice = $old_cost * $old_quantity;
                            $newTPrice = $new_cost * $new_qty;
                            $TotalPrice = $oldTPrice + $newTPrice;
                            $TotalQty = $old_quantity + $new_qty;
                            $coust_amount = $TotalPrice / $TotalQty;
                        } else {
                            $coust_amount = $new_cost;
                        }
    
                        $this->db->update('products', array('cost' => $coust_amount, 'quantity' => ($product->quantity + $item['quantity'])), array('id' => $product->id));
                    }
    
                }
            }

            if($this->db->insert('sales', $sales_data)) { 
            
                $sale_id = $this->db->insert_id();
                $sales_data['type'] = 'insert';
                $sales_data['sale_id'] = $sale_id;
                $this->db->insert('sales_log', $sales_data);
                $sale_log_id = $this->db->insert_id(); 
    
                foreach ($sales_products as $item) {
        
                    $item['sale_id'] = $sale_id;
                    $item['store_id'] = $sales_data['store_id'];

                    if($this->db->insert('sale_items', $item)) {
                        $item['sale_log_id'] = $sale_log_id;
                        $this->db->insert('sale_items_log', $item);

                        $finished_goods = $this->site->getWhereDataByElement('mf_finished_good_stock', 'store_id', 'product_id', $sales_data['store_id'], $item['product_id']);
                       

                        $this->db->update('mf_finished_good_stock', array('quantity' => ($finished_goods[0]->quantity-$item['quantity'])), array('id' => $finished_goods[0]->id));
                    }
                }
    
            }

            $this->DeletePackagingStock($id);
            return true;
        }
        
        return false;	
    }

    public function packagingStock($prod_id=0)
    {
        $store_id = $this->session->userdata('from_warehouse');

        $this->db->select('mf_material_packaging.name, mf_product_packaging_stock.*');
        $this->db->where("mf_product_packaging_stock.product_id",$prod_id);
        $this->db->where("mf_product_packaging_stock.store_id",$store_id);
        $this->db->join('mf_material_packaging', 'mf_material_packaging.id = mf_product_packaging_stock.packaging_id');
        $q = $this->db->get('mf_product_packaging_stock');

        if ($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return FALSE;
    }

    public function packagingStock_edit($trans_id,$prod_id,$store_id=0)
    {
        if($store_id==0)
        {
            $store_id = $this->session->userdata('from_warehouse');
        }
        $this->db->select('mf_transfers_packaging.*');
        $prv_data_result = $this->db->get_where('mf_transfers_packaging', array('mf_transfers_packaging.transfers_id' => $trans_id,'mf_transfers_packaging.product_id'=>$prod_id,'mf_transfers_packaging.active_status'=>1))->result();
        $prv_data=array();
        foreach ($prv_data_result as $key=>$value){
            $prv_data[$value->packaging_id]=$value->quantity;
        }

        $this->db->select('mf_material_packaging.name, mf_product_packaging_stock.*');
        $this->db->where("mf_product_packaging_stock.product_id",$prod_id);
        $this->db->where("mf_product_packaging_stock.store_id",$store_id);
        $this->db->join('mf_material_packaging', 'mf_material_packaging.id = mf_product_packaging_stock.packaging_id');
        $q = $this->db->get('mf_product_packaging_stock');

        if ($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {
                if(array_key_exists($row->packaging_id,$prv_data)){
                    $row->quantity=$row->quantity+$prv_data[$row->packaging_id];
                }

                $data[] = $row;
            }

            return $data;
        }

        return FALSE;
    }

    public function getPakProductByID($trns_id=0,$prod_id=0)
    {

        $this->db->select('tec_mf_transfers_packaging.*');
        $this->db->where("tec_mf_transfers_packaging.transfers_id",$trns_id);
        $this->db->where("tec_mf_transfers_packaging.product_id",$prod_id);
        $q = $this->db->get('tec_mf_transfers_packaging');

        if ($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {
                $data[$row->packaging_id] = $row->quantity;
            }

            return $data;
        }

        return FALSE;
    }

}
