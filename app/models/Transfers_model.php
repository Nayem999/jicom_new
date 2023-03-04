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

    public function addtransfers($data, $items, $towarehouse, $fromwarehouse, $from_store_type)
    {

        if ($this->db->insert('transfers', $data)) {
            $transfers_id = $this->db->insert_id();

            foreach ($items as $item) {
                $item['transfers_id'] = $transfers_id;
                if ($this->db->insert('transfers_items', $item));

                /* $this->storeProQtyDelete($item['product_id'], $item['quantity'], $fromwarehouse);
                $this->storeProQtyUpdate($item['product_id'], $item['quantity'], $towarehouse); */
            }
            $this->session->unset_userdata('from_warehouse');

            return true;
        }

        return false;
    }


    public function UpdateTransfers($id, $data, $products, $fromwarehouse, $towarehouse)
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
            return TRUE;
        }
        return FALSE;
    }

    public function  Delete($id)
    {
        if($this->db->delete('transfers', array('id' => $id)) && $this->db->delete('transfers_items', array('transfers_id' => $id)))
        {
            return TRUE;
        }
        return FALSE;
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

    public function updateStatusApprove($id,$dataAppr,$data,$products) {

        if($this->db->update('transfers', $dataAppr, array('id' => $id)) ) {

            $this->db->insert('purchases', $data);
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
            return true;
        }
        
        return false;	
    }

}
