<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pos_model extends CI_Model

{



	public function __construct()

	{

		parent::__construct();

	}

	public function getProductNames($term, $limit = 10) {

       // $this->db->where("(name LIKE '%" . $term . "%' OR code LIKE '%" . $term . "%' OR  concat(name, ' (', code, ')') LIKE '%" . $term . "%') ");

        //$store_id = $this->session->userdata('store_id'); 
        if(!$this->Admin)
        {
            $store_id = $this->session->userdata('store_id') ;
        }else{
            $store_id = $this->session->userdata('store_id_pos') ;
        }

            // sQty

        $this->db->select("products.* , product_store_qty.quantity as sQuantity");
		$this->db->where("(name LIKE '%" . $term . "%' OR code LIKE '%" . $term . "%' OR  concat(name, ' (', code, ')') LIKE '%" . $term . "%') and product_store_qty.store_id=".$store_id );        

        $this->db->join('product_store_qty', 'product_store_qty.product_id = products.id');
        $this->db->group_by("products.id");
        $this->db->limit($limit);

        $q = $this->db->get('products');

        if ($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {

               $q2 = $this->db->get_where('pro_sequence', array('pro_id' => $row->id,'store_id' => $store_id, 'status' => 0));

               $sQty =  $q2->num_rows();

               $row->sQty = $sQty;

               $data[] = $row;

            }

            return $data;

        }

        return FALSE;

    }

    public function getReturnSaleByID($sale_id) {
        $q = $this->db->get_where('payments', array('sale_id' => $sale_id), 1);

          if( $q->num_rows() > 0 ) {

            return $q->row();

          }

          return FALSE;

    }

    public function getTodaySales() {

        $date = date('Y-m-d 00:00:00');

        $this->db->select('SUM( COALESCE( total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid', FALSE)

            ->join('sales', 'sales.id=payments.sale_id', 'left')

            ->where('payments.date >', $date);



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }

    public function getTodayCCSales() {

        $date = date('Y-m-d 00:00:00');

        $this->db->select('COUNT(' . $this->db->dbprefix('payments') . '.id) as total_cc_slips, SUM( COALESCE( total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid', FALSE)

            ->join('sales', 'sales.id=payments.sale_id', 'left')

            ->where('payments.date >', $date)->where("{$this->db->dbprefix('payments')}.paid_by", 'CC');



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }

    public function getTodayCashSales() {

        $date = date('Y-m-d 00:00:00');

        $this->db->select('SUM( COALESCE( total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid', FALSE)

            ->join('sales', 'sales.id=payments.sale_id', 'left')

            ->where('payments.date >', $date)->where("{$this->db->dbprefix('payments')}.paid_by", 'cash');



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }

    public function getTodayRefunds() {

        $date = date('Y-m-d 00:00:00');

        $this->db->select('SUM( COALESCE( total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS returned', FALSE)

            ->join('return_sales', 'return_sales.id=payments.return_id', 'left')

            ->where('type', 'returned')->where('payments.date >', $date);



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }

    public function getTodayExpenses() {

        $date = date('Y-m-d 00:00:00');

        $this->db->select('SUM( COALESCE( amount, 0 ) ) AS total', FALSE)

            ->where('date >', $date);



        $q = $this->db->get('expenses');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }

    public function getTodayCashRefunds()  {

        $date = date('Y-m-d 00:00:00');

        $this->db->select('SUM( COALESCE( total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS returned', FALSE)

            ->join('return_sales', 'return_sales.id=payments.return_id', 'left')

            ->where('type', 'returned')->where('payments.date >', $date)->where("{$this->db->dbprefix('payments')}.paid_by", 'cash');



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }

    public function getTodayChSales() {

        $date = date('Y-m-d 00:00:00');

        $this->db->select('COUNT(' . $this->db->dbprefix('payments') . '.id) as total_cheques, SUM( COALESCE( total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid', FALSE)

            ->join('sales', 'sales.id=payments.sale_id', 'left')

            ->where('payments.date >', $date)->where("{$this->db->dbprefix('payments')}.paid_by", 'Cheque');



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }

    public function getTodayStripeSales() {

        $date = date('Y-m-d 00:00:00');

        $this->db->select('COUNT(' . $this->db->dbprefix('payments') . '.id) as total_cheques, SUM( COALESCE( total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid', FALSE)

            ->join('sales', 'sales.id=payments.sale_id', 'left')

            ->where('payments.date >', $date)->where("{$this->db->dbprefix('payments')}.paid_by", 'stripe');



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }

    public function getRegisterSales($date, $user_id = NULL) {

        if (!$date) {

            $date = $this->session->userdata('register_open_time');

        }

        if (!$user_id) {

            $user_id = $this->session->userdata('user_id');
        }
        print_r($date);

        $this->db->select('SUM( COALESCE( grand_total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid', FALSE)

            ->join('sales', 'sales.id=payments.sale_id', 'left')

            ->where('payments.date >', $date);

        $this->db->where('payments.created_by', $user_id);



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }

    public function getRegisterCCSales($date, $user_id = NULL) {

        if (!$date) {

            $date = $this->session->userdata('register_open_time');

        }

        if (!$user_id) {

            $user_id = $this->session->userdata('user_id');

        }

        $this->db->select('COUNT(' . $this->db->dbprefix('payments') . '.id) as total_cc_slips, SUM( COALESCE( grand_total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid', FALSE)

            ->join('sales', 'sales.id=payments.sale_id', 'left')

            ->where('payments.date >', $date)->where("{$this->db->dbprefix('payments')}.paid_by", 'CC');

        $this->db->where('payments.created_by', $user_id);



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }

    public function getRegisterCashSales($date, $user_id = NULL) {

        if (!$date) {
            $date = $this->session->userdata('register_open_time');
        }

        if (!$user_id) {
            $user_id = $this->session->userdata('user_id');
        }

        $this->db->select('SUM( COALESCE( amount, 0 ) ) AS paid', FALSE)

            ->where('payments.date >', $date)->where("{$this->db->dbprefix('payments')}.paid_by", 'cash');

        $this->db->where('payments.created_by', $user_id);

        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {
            return $q->row();
        }

        return false;
   
    }

    public function getRegisterTotalSales($date, $user_id = NULL){
       if (!$date) {
            $date = $this->session->userdata('register_open_time');
        }

        if (!$user_id) {
            $user_id = $this->session->userdata('user_id');
        }
        print_r($date);

        $this->db->select('SUM( COALESCE( grand_total, 0 ) ) AS total', FALSE);

        $this->db->where('date >', $date);
        $this->db->where('sales_type', 'sale');

        $this->db->where('created_by', $user_id);

        $q = $this->db->get('sales');

        if ($q->num_rows() > 0) {
            return $q->row();
        }

        return false; 
    
    }

    public function getRegisterRefunds($date, $user_id = NULL) {

        if (!$date) {

            $date = $this->session->userdata('register_open_time');

        }

        if (!$user_id) {

            $user_id = $this->session->userdata('user_id');

        }

        $this->db->select('SUM( COALESCE( grand_total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS returned', FALSE)

            ->join('return_sales', 'return_sales.id=payments.return_id', 'left')

            ->where('type', 'returned')->where('payments.date >', $date);

        $this->db->where('payments.created_by', $user_id);



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }



    public function getRegisterCashRefunds($date, $user_id = NULL)

    {

        if (!$date) {

            $date = $this->session->userdata('register_open_time');

        }

        if (!$user_id) {

            $user_id = $this->session->userdata('user_id');

        }

        $this->db->select('SUM( COALESCE( grand_total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS returned', FALSE)

            ->join('return_sales', 'return_sales.id=payments.return_id', 'left')

            ->where('type', 'returned')->where('payments.date >', $date)->where("{$this->db->dbprefix('payments')}.paid_by", 'cash');

        $this->db->where('payments.created_by', $user_id);



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }



    public function getRegisterExpenses($date, $user_id = NULL)

    {

        if (!$date) {

            $date = $this->session->userdata('register_open_time');

        }

        if (!$user_id) {

            $user_id = $this->session->userdata('user_id');

        }

        $this->db->select('SUM( COALESCE( amount, 0 ) ) AS total', FALSE)

            ->where('date >', $date);

        $this->db->where('created_by', $user_id);



        $q = $this->db->get('expenses');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }



    public function getRegisterChSales($date, $user_id = NULL)

    {

        if (!$date) {

            $date = $this->session->userdata('register_open_time');

        }

        if (!$user_id) {

            $user_id = $this->session->userdata('user_id');

        }

        $this->db->select('COUNT(' . $this->db->dbprefix('payments') . '.id) as total_cheques, SUM( COALESCE( grand_total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid', FALSE)

            ->join('sales', 'sales.id=payments.sale_id', 'left')

            ->where('payments.date >', $date)->where("{$this->db->dbprefix('payments')}.paid_by", 'Cheque');

        $this->db->where('payments.created_by', $user_id);



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }



    public function getRegisterStripeSales($date, $user_id = NULL)

    {

        if (!$date) {

            $date = $this->session->userdata('register_open_time');

        }

        if (!$user_id) {

            $user_id = $this->session->userdata('user_id');

        }

        $this->db->select('COUNT(' . $this->db->dbprefix('payments') . '.id) as total_cheques, SUM( COALESCE( grand_total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid', FALSE)

            ->join('sales', 'sales.id=payments.sale_id', 'left')

            ->where('payments.date >', $date)->where("{$this->db->dbprefix('payments')}.paid_by", 'stripe');

        $this->db->where('payments.created_by', $user_id);



        $q = $this->db->get('payments');

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return false;

    }



    public function products_count($category_id) {

    	$this->db->where('category_id', $category_id)->from('products');

    	return $this->db->count_all_results();

    }



    public function fetch_products($category_id, $limit, $start) {

    	$this->db->limit($limit, $start);
         
        if(!$this->Admin){
                $store_id = $this->session->userdata('store_id') ;
            }else{
                $store_id = $this->session->userdata('store_id_pos') ;
            }
        $this->db->select("products.* , product_store_qty.quantity as sQuantity"); 
        $this->db->join('product_store_qty', 'product_store_qty.product_id = products.id');         

    	$this->db->where('category_id', $category_id);

        $this->db->where('product_store_qty.store_id', $store_id);

    	$this->db->order_by("products.code", "asc");

    	$query = $this->db->get("products"); 

    	if ($query->num_rows() > 0) {

    		foreach ($query->result() as $row) {  

    			$data[] = $row;

    		}

    		return $data;

    	}

    	return false;

    }



    public function registerData($user_id)

    {

        if (!$user_id) {

            $user_id = $this->session->userdata('user_id');

        }

        $q = $this->db->get_where('registers', array('user_id' => $user_id, 'status' => 'open'), 1);

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return FALSE;

    }



    public function openRegister($data)

    {

        if ($this->db->insert('registers', $data)) {

            return true;

        }

        return FALSE;

    }



    public function getOpenRegisters()

    {

        $this->db->select("date, user_id, cash_in_hand, CONCAT(" . $this->db->dbprefix('users') . ".first_name, ' ', " . $this->db->dbprefix('users') . ".last_name, ' - ', " . $this->db->dbprefix('users') . ".email) as user", FALSE)

            ->join('users', 'users.id=pos_register.user_id', 'left');

        $q = $this->db->get_where('registers', array('status' => 'open'));

        if ($q->num_rows() > 0) {

            foreach ($q->result() as $row) {

                $data[] = $row;

            }

            return $data;

        }

        return FALSE;



    }



    public function closeRegister($rid, $user_id, $data)

    {

        if (!$rid) {

            $rid = $this->session->userdata('register_id');

        }

        if (!$user_id) {

            $user_id = $this->session->userdata('user_id');

        }

        if ($data['transfer_opened_bills'] == -1) {

            $this->db->delete('suspended_sales', array('created_by' => $user_id));

        } elseif ($data['transfer_opened_bills'] != 0) {

            $this->db->update('suspended_sales', array('created_by' => $data['transfer_opened_bills']), array('created_by' => $user_id));

        }

        if ($this->db->update('registers', $data, array('id' => $rid, 'user_id' => $user_id))) {

            return true;

        }

        return FALSE;

    }



    public function getCustomerByID($id)

    {

        $q = $this->db->get_where('customers', array('id' => $id), 1);

          if( $q->num_rows() > 0 ) {

            return $q->row();

          }

          return FALSE;

    }



    public function getProductByCode($code)

    {
         if(!$this->Admin){
                $store_id = $this->session->userdata('store_id') ;
            }else{
                $store_id = $this->session->userdata('store_id_pos') ;
            }
        $this->db->select("products.* , product_store_qty.quantity as sQuantity");
        $this->db->where('products.code', $code);
        $this->db->join('product_store_qty', 'product_store_qty.product_id = products.id and product_store_qty.store_id = '.$store_id);
         
        $q = $this->db->get('products');

          if( $q->num_rows() > 0 )  { 

            foreach (($q->result()) as $row) {

               $q2 = $this->db->get_where('pro_sequence', array('pro_id' => $row->id,'store_id' => $store_id, 'status' => 0));

               $sQty =  $q2->num_rows();

               $row->sQty = $sQty ;

               $data = $row;

            }            

            return $data;

            //return $q->row();

          }

          return FALSE;

    }



    public function addSale($data, $items, $payment = array(), $did = NULL) {

        if($this->db->insert('sales', $data)) { 
            
            $sale_id = $this->db->insert_id();
            $data['type'] = 'insert';
            $data['sale_id'] = $sale_id;
            $this->db->insert('sales_log', $data);
            $sale_log_id = $this->db->insert_id(); 

            foreach ($items as $item) {

                if(!$this->Admin){
                    $store_id = $this->session->userdata('store_id') ;
                }else{
                    $store_id = $this->session->userdata('store_id_pos') ;
                }

                $item['sale_id'] = $sale_id;
                $item['store_id'] = $store_id;

                if($this->db->insert('sale_items', $item)) {
                    $this->storeProQtyUpdate($item['product_id'],$item['quantity']);
                    $item['sale_log_id'] = $sale_log_id;
                    $this->db->insert('sale_items_log', $item);
                    $product = $this->site->getProductByID($item['product_id']);
                    if ($product->type == 'standard') {
                        $this->db->update('products', array('quantity' => ($product->quantity-$item['quantity'])), array('id' => $product->id));

                    } elseif ($product->type == 'combo') {

                        $combo_items = $this->getComboItemsByPID($product->id);

                        foreach ($combo_items as $combo_item) {

                            $cpr = $this->site->getProductByID($combo_item->id);

                            if($cpr->type == 'standard') {

                                $qty = $combo_item->qty * $item['quantity'];

                                $this->db->update('products', array('quantity' => ($cpr->quantity-$qty)), array('id' => $cpr->id));

                            }

                        }

                    }

                }

            }

            if($did) {

                $this->db->delete('suspended_sales', array('id' => $did));

                $this->db->delete('suspended_items', array('suspend_id' => $did));

            }

            $msg = array();

            if(! empty($payment)) {

                if ($payment['paid_by'] == 'stripe') {

                    $card_info = array("number" => $payment['cc_no'], "exp_month" => $payment['cc_month'], "exp_year" => $payment['cc_year'], "cvc" => $payment['cc_cvv2'], 'type' => $payment['cc_type']);

                    $result = $this->stripe($payment['amount'], $card_info);

                    if (!isset($result['error'])) {

                        $payment['transaction_id'] = $result['transaction_id'];

                        $payment['date'] = $result['created_at'];

                        $payment['amount'] = $result['amount'];

                        $payment['currency'] = $result['currency'];

                        unset($payment['cc_cvv2']);

                        $payment['sale_id'] = $sale_id;

                        $this->db->insert('payments', $payment); 

                    } else {

                        $msg[] = lang('payment_failed');

                        $msg[] = '<p class="text-danger">' . $result['code'] . ': ' . $result['message'] . '</p>';

                    }

                } else {

                    if ($payment['paid_by'] == 'gift_card') {

                        $gc = $this->getGiftCardByNO($payment['gc_no']);

                        $this->db->update('gift_cards', array('balance' => ($gc->balance-$payment['amount'])), array('card_no' => $payment['gc_no']));

                    }

                    unset($payment['cc_cvv2']);

                    $payment['sale_id'] = $sale_id;

                    $this->db->insert('payments', $payment);

                }

            }



            return array('sale_id' => $sale_id, 'message' => $msg);

        }



        return false;

    }



    function stripe($amount = 0, $card_info = array(), $desc = '')

    {

        $this->load->model('stripe_payments');

        // $card_info = array( "number" => "4242424242424242", "exp_month" => 1, "exp_year" => 2016, "cvc" => "314" );

        // $amount = $amount ? $amount*100 : 3000;

        $amount = $amount * 100;

        if ($amount && !empty($card_info)) {

            $token_info = $this->stripe_payments->create_card_token($card_info);

            if (!isset($token_info['error'])) {

                $token = $token_info->id;

                $data = $this->stripe_payments->insert($token, $desc, $amount, $this->Settings->currency_prefix);

                if (!isset($data['error'])) {

                    $result = array('transaction_id' => $data->id,

                        'created_at' => date('Y-m-d H:i:s', $data->created),

                        'amount' => ($data->amount / 100),

                        'currency' => strtoupper($data->currency)

                    );

                    return $result;

                } else {

                    return $data;

                }

            } else {

                return $token_info;

            }

        }

        return false;

    }



    public function updateSale($id, $data, $items)

    {

        $oitems = $this->getAllSaleItems($id);

        foreach ($oitems as $oitem) {

            $product = $this->site->getProductByID($oitem->product_id);

            if ($product->type == 'standard') {

                $this->db->update('products', array('quantity' => ($product->quantity+$oitem->quantity)), array('id' => $product->id));

            } elseif ($product->type == 'combo') {

                $combo_items = $this->getComboItemsByPID($product->id);

                foreach ($combo_items as $combo_item) {

                    $cpr = $this->site->getProductByID($combo_item->id);

                    if($cpr->type == 'standard') {

                        $qty = $combo_item->qty * $oitem->quantity;

                        $this->db->update('products', array('quantity' => ($cpr->quantity+$qty)), array('id' => $cpr->id));

                    }

                }

            }

        }


        $idem_pr = $this->db->get_where('sale_items', array('sale_id' => $id));

        $results = $idem_pr->result() ; 

        foreach ($results as $key => $result) {
          $this->storeProQtyDelete($result->product_id,$result->quantity);
        }

        if($this->db->update('sales', $data, array('id' => $id)) && $this->db->delete('sale_items', array('sale_id' => $id))) {
            $data['type'] = 'edit';
            $data['sale_id'] = $id;
            $data['date'] = date('Y-m-d h:i:s');
            $this->db->insert('sales_log', $data);
            $sale_log_id = $this->db->insert_id(); 
            foreach ($items as $item) { 
                $this->storeProQtyUpdate($item['product_id'],$item['quantity']);
                $item['sale_id'] = $id;
                if($this->db->insert('sale_items', $item)) { 
                    $item['sale_log_id'] = $sale_log_id;
                    $this->db->insert('sale_items_log', $item);
                    $product = $this->site->getProductByID($item['product_id']);

                    if ($product->type == 'standard') {

                        $this->db->update('products', array('quantity' => ($product->quantity-$item['quantity'])), array('id' => $product->id));

                    } elseif ($product->type == 'combo') {

                        $combo_items = $this->getComboItemsByPID($product->id);

                        foreach ($combo_items as $combo_item) {

                            $cpr = $this->site->getProductByID($combo_item->id);

                            if($cpr->type == 'standard') {

                                $qty = $combo_item->qty * $item['quantity'];

                                $this->db->update('products', array('quantity' => ($cpr->quantity-$qty)), array('id' => $cpr->id));

                            }

                        }

                    }
                }
            } 

            return TRUE;

            }



        return false;

    }



    public function suspendSale($data, $items, $did = NULL)

    {



        if($did) {



            if($this->db->update('suspended_sales', $data, array('id' => $did)) && $this->db->delete('suspended_items', array('suspend_id' => $did))) {

                foreach ($items as $item) {

					unset($item['cost']);

                    $item['suspend_id'] = $did;

                    $this->db->insert('suspended_items', $item);

                }

                return TRUE;

            }



        } else {



            if($this->db->insert('suspended_sales', $data)) {

                $suspend_id = $this->db->insert_id();

                foreach ($items as $item) {

					unset($item['cost']);

                    $item['suspend_id'] = $suspend_id;

                    $this->db->insert('suspended_items', $item);

                }

                return $suspend_id;

            }

        }

        return false;

    }



    public function getSaleByID($sale_id)

    {

        $q = $this->db->get_where('sales', array('id' => $sale_id), 1);

          if( $q->num_rows() > 0 ) {

            return $q->row();

          }

          return FALSE;

    }



    public function getAllSaleItems($sale_id, $product = NULL) {
        $this->db->select('sale_items.*, products.name as product_name, products.code as product_code, products.tax_method as tax_method, product_store_qty.quantity as sQuantity')

        ->join('products', 'products.id=sale_items.product_id')

        ->order_by('sale_items.id');


        //$this->db->select("products.* , product_store_qty.quantity as sQuantity");
        $this->db->join('product_store_qty', 'product_store_qty.product_id = products.id and sale_items.store_id=product_store_qty.store_id','left');



       if($product !=NULL){
          $this->db->where('product_id', $product );  
        }

        $q = $this->db->get_where('sale_items', array('sale_id' => $sale_id));
        // echo $this->db->last_query();die;
        if($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {

                $product_id =  $row->product_id ; 

                    $qSequence = $this->db->get_where('pro_sequence', array('pro_id' => $product_id, 'sales_id' =>$sale_id ));
                    $seq =  ''; $SequenceRow='';
                    if($qSequence->num_rows() > 0) {
                        $SequenceRow = $qSequence->result() ;
                        foreach ($SequenceRow as $key => $value) {
                            
                           $seq .=  $value->sequence_id .',';
                        }
                    }
                $seq = trim($seq,',');
                $row->seq =  $seq ;     
                $row->sequence =  $SequenceRow ;  
                $data[] = $row;

            }

            return $data;

        }

        return FALSE;

    }

    public function getAllSaleLogItems($sale_id, $product = NULL) {
        $this->db->select('sale_items_log.*, products.name as product_name, products.code as product_code, products.tax_method as tax_method') 
        ->join('products', 'products.id=sale_items_log.product_id') 
        ->order_by('sale_items_log.sale_log_id'); 
        if($product !=NULL){
          $this->db->where('product_id', $product );  
        } 
        $q = $this->db->get_where('sale_items_log', array('sale_log_id' => $sale_id)); 
         
        if($q->num_rows() > 0) { 
            foreach (($q->result()) as $row) {
                $product_id =  $row->product_id ; 
                    $qSequence = $this->db->get_where('pro_sequence', array('pro_id' => $product_id, 'sales_id' =>$sale_id ));
                    $seq =  '';
                    if($qSequence->num_rows() > 0) {
                        $SequenceRow = $qSequence->result() ;
                        foreach ($SequenceRow as $key => $value) {                            
                           $seq .=  $value->sequence_id .',';
                        }
                    }
                $seq = trim($seq,',');
                // $row->seq =  $seq ;     
                // $row->sequence =  $SequenceRow ;  
                $data[] = $row;

            }

            return $data;

        }

        return FALSE;

    }



    public function getAllSalePayments($sale_id)

    {

        $q = $this->db->get_where('payments', array('sale_id' => $sale_id));

        if($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {

                $data[] = $row;

            }

            return $data;

        }

        return FALSE;

    }



    public function getSuspendedSaleByID($id)

    {

        $q = $this->db->get_where('suspended_sales', array('id' => $id), 1);

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return FALSE;

    }

	public function warranty($warranty, $id){
		
		  //print_r($warranty);
		  
		 // echo $id;
	
			$this->db->where('id', $id);

			if($this->db->update('sales', $warranty)) {

				return true;

			}
	}

    public function getSuspendedSaleItems($id)

    {

        $q = $this->db->get_where('suspended_items', array('suspend_id' => $id));

        if ($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {

                $data[] = $row;

            }

            return $data;

        }

        return FALSE;

    }



    public function getSuspendedSales($user_id = NULL)

    {

        if (!$user_id) {

            $user_id = $this->session->userdata('user_id');

        }

        $this->db->order_by('date', 'desc');

        $q = $this->db->get_where('suspended_sales', array('created_by' => $user_id));

        if ($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {

                $data[] = $row;

            }

            return $data;

        }

        return FALSE;

    }



    public function getGiftCardByNO($no)

    {

        $q = $this->db->get_where('gift_cards', array('card_no' => $no), 1);

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return FALSE;

    }



    public function getComboItemsByPID($product_id) {

        $this->db->select($this->db->dbprefix('products') . '.id as id, ' . $this->db->dbprefix('products') . '.code as code, ' . $this->db->dbprefix('combo_items') . '.quantity as qty, ' . $this->db->dbprefix('products') . '.name as name, ' . $this->db->dbprefix('products') . '.quantity as quantity')

        ->join('products', 'products.code=combo_items.item_code', 'left')

        ->group_by('combo_items.id');

        $q = $this->db->get_where('combo_items', array('product_id' => $product_id));

        if ($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {

                $data[] = $row;

            }

            return $data;

        }

        return FALSE;

    }
public function customer_info($customer_id) {
	
        $q = $this->db->get_where('tec_customers', array('id' => $customer_id), 1);

        if ($q->num_rows() > 0) {

            return $q->row();

        }

        return FALSE;
	
	}
public function checkProductQty($product_id) {

        if($this->session->userdata('store_id') !=0){
            $store_id = $this->session->userdata('store_id');
        }else{
            $store_id = $this->session->userdata('store_id_pos'); 
        } 
      
    
        $q = $this->db->get_where('pro_sequence', array('pro_id' => $product_id,'store_id' => $store_id, 'status' => 0));


            return $q->num_rows();

    
    }

    public function customerInstore($store_id) {
    
        $q = $this->db->get_where('customers', array('store_id' => $store_id));

        if ($q->num_rows() > 0) {

           foreach (($q->result()) as $row) {
                $data[] = $row;
            }
            return $data;

        }

        return FALSE;
    
    }
 function sequenceUpdate($id,$sale_id){

    $data  = array('status' => 1,
                   'sales_id'=>$sale_id
                  );



    if($this->db->update('pro_sequence', $data, array('sequence_id' => $id))) {

            return true;

        }

        return false;

   }

 function sequenceUpdateInSale($sale_id){

    $data  = array('status' => 0,
                   'sales_id'=>0
                  );

    if($this->db->update('pro_sequence', $data, array('sales_id' => $sale_id))) {

            return true;

        }

        return false;

   }



    function storeProQtyDelete($item_id,$item_quantity){


        if($this->session->userdata('store_id') !=0){
            $store_id = $this->session->userdata('store_id');
        }else{
            $store_id = $this->session->userdata('store_id_pos'); 
        } 
      

        $q = $this->db->get_where('product_store_qty', array('product_id' => $item_id , 'store_id' => $store_id ), 1);

        $value =  $q->row();

        $quantityOld = $value->quantity ;

        $dbQty  = $quantityOld + $item_quantity ;

        $data  = array('quantity' => $dbQty );

        if($this->db->update('product_store_qty', $data, array('product_id' => $item_id,'store_id' => $store_id ))) {

                return true;

         }

        return false; 

 }
   

  function storeProQtyUpdate($item_id,$item_quantity){


        if($this->session->userdata('store_id') !=0){
            $store_id = $this->session->userdata('store_id');
        }else{
            $store_id = $this->session->userdata('store_id_pos'); 
        } 
      

        $q = $this->db->get_where('product_store_qty', array('product_id' => $item_id , 'store_id' => $store_id ), 1);

        $value =  $q->row();

        $quantityOld = $value->quantity ;

        $dbQty  = $quantityOld - $item_quantity ;

        $data  = array('quantity' => $dbQty );

        if($this->db->update('product_store_qty', $data, array('product_id' => $item_id,'store_id' => $store_id ))) {

                return true;

         }

        return false; 

 }
    public function payment_by_customer($id=null)
    {
        $total=0;
        if($id){
            /* $this->db->select('payments.amount');    
            $this->db->from('payments');    
            $q = $this->db->where('customer_id', $id )->get(); 
            if($q->num_rows() > 0) {    
                foreach (($q->result()) as $row) {    
                    $total += $row->amount;    
                }    
            } */
            $this->db->select("sum(if((paid_by='TT' || paid_by='Cheque') && type='Approved',today_collection.payment_amount,0)) as chk_amount, sum(if( (paid_by='Cash' || paid_by='Adjustment' || paid_by='Deposit' || paid_by='Credit'), today_collection.payment_amount ,0)) as other_amount ");
            $this->db->from('today_collection');
            $this->db->join('bank_pending',"today_collection.today_collect_id=bank_pending.collection_id and bank_pending.customer_id =$id",'left');
            $this->db->where('today_collection.customer_id', $id);
            $q =$this->db->get();
            
            if( $q->num_rows() > 0 ) {
                foreach (($q->result()) as $row) {    
                    $total += $row->chk_amount + $row->other_amount;    
                }
            }
        }
        return $total;
    }

  /* function storeProQtyUpdateEdit($eid,$item_id,$item_quantity){

        if($this->session->userdata('store_id') !=0){
            $store_id = $this->session->userdata('store_id');
        }else{
            $store_id = $this->session->userdata('store_id_pos'); 
        } 

        $product_store_qty = $this->db->get_where('product_store_qty', array('product_id' => $item_id , 'store_id' => $store_id ), 1);

        $value =  $product_store_qty->row();

        $StoreQtyOld = $value->quantity ;

        $SaleItems = $this->getAllSaleItems($eid,$item_id);

        $selsQtyOld = $SaleItems[0]->quantity ;

        $newQty  = $item_quantity - $selsQtyOld  ;

        $data  = array('quantity' => $StoreQtyOld - $newQty );

        if($this->db->update('product_store_qty', $data, array('product_id' => $item_id,'store_id' => $store_id ))) {

                return true;

         }

        return false; 

 }*/

public function getAllCustomers() {
        if($this->Admin){
           $this->db->where('store_id', $this->session->userdata('store_id_pos'));   
        } else {
           $this->db->where('store_id', $this->session->userdata('store_id'));    
        }    
        $q = $this->db->get('customers');
        
        if($q->num_rows() > 0) {
            foreach (($q->result()) as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }


/*

	public function getProductByName($name)

	{

		$q = $this->db->get_where('products', array('name' => $name), 1);

		  if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }



		  return FALSE;

	} 
	public function getCustomerByID($id)

	{



		$q = $this->db->get_where('customers', array('id' => $id), 1);

		  if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }



		  return FALSE;



	}



	public function getAllProducts()

	{

		$q = $this->db->query('SELECT * FROM products ORDER BY id');

		if($q->num_rows() > 0) {

			foreach (($q->result()) as $row) {

				$data[] = $row;

			}



			return $data;

		}

	}



	public function getProductByID($id)

	{



		$q = $this->db->get_where('products', array('id' => $id), 1);

		  if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }



		  return FALSE;



	}



	public function getAllTaxRates()

	{

		$q = $this->db->get('tax_rates');

		if($q->num_rows() > 0) {

			foreach (($q->result()) as $row) {

				$data[] = $row;

			}



			return $data;

		}

	}



	public function getTaxRateByID($id)

	{



		$q = $this->db->get_where('tax_rates', array('id' => $id), 1);

		  if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }



		  return FALSE;



	}







	function getSetting()

	{



		$q = $this->db->get_where('settings', array('setting_id' => 1));

		  if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }



		  return FALSE;



	}









   public function categories_count() {

        return $this->db->count_all("categories");

    }



    public function fetch_categories($limit, $start) {

        $this->db->limit($limit, $start);

		$this->db->order_by("id", "asc");

        $query = $this->db->get("categories");



        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;

            }

            return $data;

        }

        return false;

   }



   public function bills_count() {

        return $this->db->count_all("suspended_sales");

    }



    public function fetch_bills($limit, $start) {

        $this->db->limit($limit, $start);

		$this->db->order_by("id", "asc");

        $query = $this->db->get("suspended_sales");



        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;

            }

            return $data;

        }

        return false;

   }



	public function getAllCategories()

	{

		$q = $this->db->get('categories');

		if($q->num_rows() > 0) {

			foreach (($q->result()) as $row) {

				$data[] = $row;

			}



			return $data;

		}

	}



	public function getCustomerBill($id)

	{



		$q = $this->db->get_where('customer_bill', array('customer_id' => $id));

		  if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }



		  return FALSE;



	}



	public function updateCustomerBill($bID, $saleData, $count, $tax, $total)

	{

		// bill data

		$billData = array(

			'customer_id'		=> $bID,

			'sale_data'			=> $saleData,

			'count'		=> $count,

			'tax' 	=> $tax,

			'total'	=> $total



		);



		if(!$this->getCustomerBill($bID)) {

			if( $this->db->insert('customer_bill', $billData) ) {

				return true;

			}

		} else {

			$this->db->where('customer_id', $bID);

			if($this->db->update('customer_bill', $billData)) {

				return true;

			}

		}



		  return FALSE;



	}



	public function getTodaySales()

	{

		$date = date('Y-m-d');



		$myQuery = "SELECT DATE_FORMAT( date,  '%W, %D %M %Y' ) AS date, SUM( COALESCE( total, 0 ) ) AS total

			FROM sales

			WHERE DATE(date) LIKE '{$date}'";

		$q = $this->db->query($myQuery, false);

		if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }

	}



	public function getTodayCCSales()

	{

		$date = date('Y-m-d');

		$myQuery = "SELECT SUM( COALESCE( total, 0 ) ) AS total

			FROM sales

			WHERE DATE(date) =  '{$date}' AND paid_by = 'CC'

			GROUP BY date";

		$q = $this->db->query($myQuery, false);

		if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }

	}



	public function getTodayCashSales()

	{

		$date = date('Y-m-d');

		$myQuery = "SELECT SUM( COALESCE( total, 0 ) ) AS total

			FROM sales

			WHERE DATE(date) =  '{$date}' AND paid_by = 'cash'

			GROUP BY date";

		$q = $this->db->query($myQuery, false);

		if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }

	}

	public function getTodayChSales()

	{

		$date = date('Y-m-d');

		$myQuery = "SELECT SUM( COALESCE( total, 0 ) ) AS total

			FROM sales

			WHERE DATE(date) =  '{$date}' AND paid_by = 'Cheque'

			GROUP BY date";

		$q = $this->db->query($myQuery, false);

		if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }

	}



	public function getTodaySale()

	{

		$date = date('Y-m-d');

		$myQuery = "SELECT

					(select sum(total) FROM sales WHERE date LIKE '{$date}%') total,

					(select sum(total) FROM sales WHERE paid_by = 'cash' AND date LIKE '{$date}%') ca,

					(select sum(total) FROM sales WHERE paid_by = 'CC' AND date LIKE '{$date}%') cc,

					(select sum(total) FROM sales WHERE paid_by = 'Cheque' AND date LIKE '{$date}%') ch";

		$q = $this->db->query($myQuery, false);

		if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }

	}







	public function getInvoiceBySaleID($sale_id)

	{



		$q = $this->db->get_where('sales', array('id' => $sale_id), 1);

		  if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }



		  return FALSE;



	}



	public function getAllSuspendedItems($suspend_id)

	{

		$this->db->order_by('id');

		$q = $this->db->get_where('suspended_items', array('suspend_id' => $suspend_id));

		if($q->num_rows() > 0) {

			foreach (($q->result()) as $row) {

				$data[] = $row;

			}



			return $data;

		}

	}



	public function getSuspendedSaleByID($suspend_id)

	{



		$q = $this->db->get_where('suspended_sales', array('id' => $suspend_id), 1);

		  if( $q->num_rows() > 0 )

		  {

			return $q->row();

		  }



		  return FALSE;



	}



	public function addCustomer($data)

	{



		if($this->db->insert('customers', $data)) {

			return $this->db->insert_id();

		}

		return false;

	}

	*/

}

