<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Customers_model extends CI_Model

{

	

	public function __construct() {

		parent::__construct();

	}

	

	public function getCustomerByID($id) 

	{

		$q = $this->db->get_where('customers', array('id' => $id), 1); 

		if( $q->num_rows() > 0 ) {

			return $q->row();

		} 

		return FALSE;

	}

	

	public function addCustomer($data = array())

	{
		

		if($this->db->insert('customers', $data)) {
			
			

			return $this->db->insert_id();
			
		

		}

		return false;

	}

	

	public function updateCustomer($id, $data = array())

	{

		if($this->db->update('customers', $data, array('id' => $id))) {

			return true;

		}

		return false;

	}

	

	public function deleteCustomer($id) 

	{

		if($this->db->delete('customers', array('id' => $id))) {

			return true;

		}

		return FALSE;

	}

public function getCustomerLaserByCid($cusromer,$start_date,$end_date){

        $addArarr = array();
        $salesid = array();
        $purchsesid = array();

        $this->db->select('SUM(opening_blance) as opening_blance');
        $this->db->where('opening_blance !=', '0'); 
        $q = $this->db->get_where('customers', array('id' => $cusromer));
            if($q->num_rows() > 0) {
                foreach (($q->result()) as $row) {
                    $rows['datetime'] = '' ;
                    $rows['total'] = $row->opening_blance ;
                    $rows['pgtotal'] = $row->opening_blance ;
                    $rows['type'] = 'Opening balance';
                    $rows['id'] = '';
                    if($row->opening_blance !=''){
                    $results[] = $rows ; 
                    }
                }  
            }
        $this->db->select('*'); 
        if($start_date!=NULL && $end_date!=NULL) {
            $this->db->where('date_submit >=', $start_date);
            $this->db->where('date_submit <=', $end_date);
        }
        $qs = $this->db->get_where('salesreturn', array('customer_id' => $cusromer));
            if($qs->num_rows() > 0) {
                foreach (($qs->result()) as $row) {  
                    $this->db->select('sale_id,return_amount as return_amount'); 
                    $this->db->where('return_amount !=', '0'); 
                    
                     $ritem = $this->db->get_where('sreturn_items', array('sreturn_id' => $row->sreturn_id));
                        if($ritem->num_rows() > 0) {
                            foreach (($ritem->result()) as $ritems) { 
                                $rows['datetime'] = $row->date_submit;
                                $rows['total'] = $ritems->return_amount;
                                $rows['pgtotal'] = $ritems->return_amount;
                                $rows['type'] = 'Sales Return Amount'; 
                                $rows['id'] = $row->sreturn_id;
                                $rows['invoice_id'] = $ritems->sale_id;
                                if($ritems->return_amount !=''){
                                $results[] = $rows ; 
                                }
                            }  
                        } 
                    }
                } 
         $this->db->select('*'); 
        if($start_date!=NULL && $end_date!=NULL) {
            $this->db->where('date_submit >=', $start_date);
            $this->db->where('date_submit <=', $end_date);
        }
        $qs = $this->db->get_where('salesreturn', array('customer_id' => $cusromer));
            if($qs->num_rows() > 0) {
                foreach (($qs->result()) as $row) {  
                    $this->db->select('sale_id,(real_unit_price * return_qty) as returnamount'); 
                    //$this->db->where('return_amount !=', '0'); 
                    $ritem = $this->db->get_where('sreturn_items', array('sreturn_id' => $row->sreturn_id));
                        if($ritem->num_rows() > 0) {
                            foreach (($ritem->result()) as $ritems) { 
                                $rows['datetime'] = $row->date_submit;
                                $rows['total'] = $ritems->returnamount;
                                $rows['pgtotal'] = $ritems->returnamount;
                                $rows['id'] = $row->sreturn_id;
                                $rows['invoice_id'] = $ritems->sale_id;
                                $rows['type'] = 'Sales Return'; 
                                if($ritems->returnamount !=''){
                                $results[] = $rows ; 
                                }
                            }  
                        } 
                    }
                } 
  
        $this->db->select('sales.id, sales.date as datetime, sales.grand_total, sales.collection_id, bank_pending.cheque_no as cheque_number ');
        
        $this->db->from('sales');
        
        $this->db->join('bank_pending','bank_pending.collection_id=sales.collection_id','left');
        if($start_date!=NULL && $end_date!=NULL) {
            $this->db->where('date >=', $start_date);
            $this->db->where('date <=', $end_date);
        }
        $this->db->where(['sales.customer_id'=>$cusromer,'sales.sales_type'=>'sale']);
        
        $q = $this->db->get()->result();

        if( count($q) > 0) {
            foreach (($q) as $row) {
                $rows['datetime'] = $row->datetime ;
                $rows['total'] = $row->grand_total ;
                $rows['sgtotal'] = $row->grand_total ;
                $rows['collection_id'] = $row->collection_id ;
                $rows['sale'] = '0.00' ;
                $rows['type'] = 'sale' ;
                $rows['cheque_number'] = $row->cheque_number ;
                $rows['id'] = $row->id;
                $results[] = $rows ;
                $salesid[] = $row->id ;
            }          
        } 
        $this->db->select('sales.id, sales.date as datetime, sales.grand_total');
        if($start_date!=NULL && $end_date!=NULL) {
            $this->db->where('date >=', $start_date);
            $this->db->where('date <=', $end_date);
        }
        $q = $this->db->get_where('sales', array('customer_id' => $cusromer,'sales_type'=>'service'));
        if($q->num_rows() > 0) {
            foreach (($q->result()) as $row) {
                $rows['datetime'] = $row->datetime ;
                $rows['total'] = $row->grand_total ;
                $rows['sgtotal'] = $row->grand_total ;
                $rows['sale'] = '0.00' ;
                $rows['type'] = 'service' ;
                $rows['id'] = $row->id;
                $results[] = $rows ;
                $salesid[] = $row->id ;
            }          
        } 

        //else return 'No data pound';  (coment this line by sahin 20-02-19)
        /* $this->db->select('today_collection.today_collect_id, today_collection.payment_date as datetime, payment_amount as amount');
        $this->db->order_by("today_collect_id","DESC");    
        $this->db->join("today_collect_id","DESC");    
        $q = $this->db->get_where('today_collection', array('customer_id' => $cusromer,)); */
  
        $this->db->select("today_collection.today_collect_id, today_collection.paid_by as paid_by, today_collection.payment_date as datetime, if((paid_by='TT' ||paid_by='Cheque') && type='Approved',today_collection.payment_amount,0) as chk_amount, if( paid_by='Cash' || paid_by='Adjustment' || paid_by='Deposit', today_collection.payment_amount ,0) as other_amount ");     
        $this->db->join("bank_pending","bank_pending.collection_id=today_collection.today_collect_id and bank_pending.customer_id=$cusromer and bank_pending.payment_type=1 and bank_pending.type='Approved'",'left');    
        $this->db->order_by("today_collect_id","DESC"); 
        if($start_date!=NULL && $end_date!=NULL) {
            $this->db->where('payment_date >=', $start_date);
            $this->db->where('payment_date <=', $end_date);
        } 
        $q = $this->db->get_where('today_collection', array('today_collection.customer_id' => $cusromer,));
        // echo $this->db->last_query();die;

        if($q->num_rows() > 0) {
            foreach (($q->result()) as $row) {
                if($row->chk_amount>0 || $row->other_amount>0)
                {
                    $rows['datetime'] = $row->datetime ;
                    $rows['total'] = $row->other_amount + $row->chk_amount;
                    $rows['sgtotal'] = $row->other_amount + $row->chk_amount;
                    $rows['sale'] = '0.00' ;
                    $rows['type'] = 'collection' ;
                    $rows['paid_type'] = $row->paid_by ;
                    $rows['id'] = $row->today_collect_id ;
                    $results[] = $rows ;
                }
            } 

        }  
        return $results; 
    }

    public function get_bank_pending($collection_id)
    {
        try {
            $findData =  $this->db->select('*')->from('bank_pending')->where('collection_id',$collection_id)->get()->row();
            if($findData){
                return $findData;
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
       
    }

}

