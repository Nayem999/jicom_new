<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mf_payment extends MY_Controller
{
    
    function __construct() {
        
        parent::__construct();
        
        if (!$this->loggedIn) {            
          redirect('login');            
        }
        if(!$this->site->permission('mf_payment'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }
        
        $this->load->library('form_validation');        
        $this->load->model('mf_payment_model');
        $this->load->model('mf_suppliers_model');
        $this->load->model('purchases_model');
        $this->load->model('suppliers_model');
        $this->load->model('bank_model');


        $this->allowed_types = 'gif|jpg|png|pdf|doc|docx|xls|xlsx|zip';
        
        $ses_unset=array('error'=>'error','success'=>'success','message'=>'message');
        $this->session->unset_userdata($ses_unset);
        
    }
    function getSupplierByStore($id){
      return $id;
    }

    public function add() { 
      if(!$this->site->route_permission('mf_payment_add')) {
        $this->session->set_flashdata('error', lang('access_denied'));
        redirect();
      }

        $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));
        //$suid = $this->getSupplierByStore();
            
        $this->data['suppliers'] = $this->site->getAllMfSuppliers();

        $this->data['warehouses'] = $this->site->getAllStores();
        
        $this->data['page_title'] = 'Raw Material Payment';
        
        $bc = array(
            array(
                'link' => '#',
                'page' => 'Raw Material Payment'
            )
        );
        
        $meta = array(
            'page_title' => 'Raw Material Payment',
            'bc' => $bc
        );
        
        $this->page_construct('mf_payment/add', $this->data, $meta);
    }
    public function supplierInfo($id){

      $suppliers = $this->mf_payment_model->getSupplierByID($id);
      $SupPro = $this->mf_suppliers_model->getSupplierByID($id);         
      
      $today = date("Y-m-d");
      $total = $deu = $paid = 0;

      $todayTotalPurchases = $this->mf_payment_model->purchasesAmount('total',$id,$today);
      $todayPaidpurchases = $this->mf_payment_model->purchasesAmount('paid',$id,$today);
      $todayDeupurchases = $this->mf_payment_model->purchasesAmount('deu',$id,$today);
      $todayAdAmount = $this->mf_payment_model->advPayAmount('adv_amount',$id,$today);
      $totalAdAmount = $this->mf_payment_model->advPayAmount('adv_amount',$id);

      $total = $deu = $paid = 0;
      if(is_array($suppliers))
      {
        foreach ($suppliers as $key => $value) {
            $total = $total+ $value->total;
            $deu = $deu+ $value->deu;
            $paid = $paid+ $value->paid;
        }
      }
      $tpaid = $paid + $totalAdAmount;

      $todpuPaid = $todayPaidpurchases+$todayAdAmount;

      $returnData = '';
      $returnData .= '<div class="col-xs-10">
            <div class="box-header"><p class="box-title" >Supplier information ('.$SupPro->name.')</p><br><br>
            <p>Today Supplier information</p>
            <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td class="col-xs-8">Today Purchases  Amount</td>
                    <?= $today; ?>
                    <td class="col-xs-4">'.$this->tec->formatMoney($todayTotalPurchases).'</td>
                  </tr>
                  <tr>
                    <td class="col-xs-8">Today Purchases Paid Amount</td>
                    <td class="col-xs-4">'.$this->tec->formatMoney(($todpuPaid)).'</td>
                  </tr>
                  <tr>
                    <td class="col-xs-8">Today Balance</td>
                    <td class="col-xs-4">'.$this->tec->formatMoney(($todayTotalPurchases-$todpuPaid)).'</td>
                  </tr>
                </tbody>
            </table>
            </div>
            <div class="col-xs-10">';

      $returnData .= '<p>Total Supplier information</p>
        <table class="table table-bordered">
            <tbody>
              <tr>
                <td class="col-xs-8">Total Purchases  Amount</td>
                <td class="col-xs-4">'.$this->tec->formatMoney($total).'</td>
              </tr>
              <tr>
                <td class="col-xs-8">Total Purchases Paid Amount</td>
                <td class="col-xs-4">'.$this->tec->formatMoney($tpaid).'</td>
              </tr>
              <tr>
                <td class="col-xs-8">Total Balance</td>
                <td class="col-xs-4">'.$this->tec->formatMoney(($total-$tpaid)).'</td>
              </tr>
            </tbody>
        </table>
        </div>
        </div>';

      echo $returnData;
    }

    public function bankInfo($type,$sid){  
      // $suppliers = $this->mf_suppliers_model->getSupplierByID($sid);    
      $banks=array();
      /* if(is_array($suppliers)){
        foreach ($suppliers as $key => $supplier)  
          $banks = $this->site->getAllBanks($supplier->store_id);	
        } */
        $banks = $this->site->getAllBanks();	

    	if($type=='Cheque' || $type=='TT'){
    	  $output= '<div class="form-group">
                  <label>Bank information</label> 
	               <select class="form-control select2" name="bank" required="required" id="type">
						<option value="">Select</option>';

						foreach ($banks as $key => $bank) {
							$output .='<option value="'.$bank->bank_account_id.'">'.$bank->bank_name .' ('.$bank->account_name.' ) ( '.$bank->account_no.')</option>';
						}
						 		if($type=='Cheque'){	

                   $output .='</select></div>
                             <div class="form-group">
                             <label>Cheque No </label>
                         <input type="text" name="cheque_no" class="form-control" required="required">
                             </div>'; 
                }

                if($type=='TT')
                {
                      $output .='</select></div>
                      <div class="form-group">
                      <label>TT No </label>
                  <input type="text" name="cheque_no" class="form-control" required="required">
                      </div>'; 
                }	
	          echo $output;
      }

    }

    public function today_payment(){
    	$bankID='';
    	$cheque_no='';
      $paidamount = $this->input->post('paidamount');
      $supplierid = $this->input->post('supplier');
      $note       = $this->input->post('note');
      $type       = $this->input->post('type'); 
      $bankID		  = $this->input->post('bank');
      $cheque_no	= $this->input->post('cheque_no');
      $getSupplierID = $this->mf_payment_model->getSupplierByID($supplierid);

      

      foreach ($getSupplierID as $key => $SupplierID);
        $supplierStore_id = $SupplierID->store_id; 

        if($type=='Cheque' || $type=='TT'){
          if(($bankID=='')||($cheque_no=='')){
            $this->session->set_flashdata('error', lang('Bank or Cheque no empty'));
            redirect('mf_payment/purchase_payment');
          } else { 
          }
        }     
        $date       = date('Y-m-d');
        $total      = 0;
        $deu        = 0;
        $paid       = 0;
        $totalDeu 	= 0;
        $suppliers = $this->mf_payment_model->getSupplierDeu($supplierid);
        foreach ($suppliers as $key => $value) {
            $totalDeu = $totalDeu + $value->deu;
          }
       
        $payPaymentdata = array(
                        'payment_date' => date('Y-m-d H:i:s'),
                        'payment_amount' => $this->input->post('paidamount'),
                        'supplier_id' => $supplierid,
                        'payment_note' => $this->input->post('note'),
                        'type'			=> $type,
                        'cheque_no'	=> $cheque_no,
                        'store_id'  => $supplierStore_id,
                        );
        $todayPurchasePayment = $this->mf_payment_model->payPayment($payPaymentdata);

        foreach ($suppliers as $key => $value) {
           $total = $value->total;
           $paid = $value->paid; 
           if(($total > $paid) && ($paidamount  > 0) ){
                if($paidamount < $value->deu ){                   
                    $payAmount = $paidamount;
                    $newpaid = $value->paid+$paidamount;
                    $newDeu = $value->deu - $paidamount;
                    $data  = array(
                        'paid' => $newpaid,
                        'deu' => $newDeu, 
                        );
                    $this->mf_payment_model->UpdateSupplierDeu($data,$value->id);
                    $addPayData = array(
                        'date' => date('Y-m-d H:i'),
                        'mf_purchases_id' => $value->id,
                        'supplier_id' => $this->input->post('supplier'),
                        'paid_by' => $type,
                        'cheque_no' => $cheque_no,
                        'amount' => $paidamount,
                        'created_by' => $this->session->userdata('user_id'),
                        'store_id'        => $supplierStore_id,
                        'todayP_Payment' => $todayPurchasePayment,
                        );
                    $this->mf_payment_model->addPayment($addPayData);
                    
                    $paidamount = 0;                   
                } else {                   
                   $payAmount = $value->deu;
                   $bigAmount = $paidamount - $value->deu;
                   $odlNewPaid = $value->paid + $value->deu;
                   
                   $data  = array(
                        'paid' => $odlNewPaid,
                        'deu' => '0');
                   $this->mf_payment_model->UpdateSupplierDeu($data,$value->id);
                   $addPayData = array(
                        'date' => date('Y-m-d H:i'),
                        'mf_purchases_id' => $value->id,
                        'supplier_id' => $this->input->post('supplier'),
                        'paid_by' => $type, 
                        'cheque_no' => $cheque_no,
                        'amount' => $value->deu,
                        'created_by' => $this->session->userdata('user_id'),
                        'store_id'       => $supplierStore_id,
                        'todayP_Payment' => $todayPurchasePayment,
                        );   
                             
                   $this->mf_payment_model->addPayment($addPayData);                  
                   $paidamount = $bigAmount;
                      
                }        

            }
                    
        } 
        $advData = array(
        	'suppliers_id'  => $this->input->post('supplier'),
        	'adv_amount'    => $paidamount,
        	'total_payment' => $this->input->post('paidamount'),
        	'add_date'      => date('Y-m-d H:i:s'),
        	'mf_payment_id' => $todayPurchasePayment,
        	'note'		    => $this->input->post('note'),
          'store_id'    => $supplierStore_id,
        	);        
        $this->mf_payment_model->addAdvPayment($advData);
        $odlNewPaid = $value->paid + $value->deu;
        $total      = 0;
        if($type=='Cheque'){
	        $bankPending = array(
	        	'supplier_id'  => $this->input->post('supplier'),
	        	'amount'  	   => $this->input->post('paidamount'),
	        	'bank_id'      => $this->input->post('bank'),
	        	'cheque_no'    => $this->input->post('cheque_no'),
	        	'insert_date'  => date('Y-m-d H:i:s'),
	        	'type' 		     => 'pending',
	        	'todayP_Payment' => $todayPurchasePayment,
            'store_id'       => $supplierStore_id,
            'payment_type' =>  6,
	        	);
	        $this->bank_model->bankPendingTranjection($bankPending);
    		}

        $expens_cat=$this->site->whereRow('expens_category','name','Raw Material Payment');
        if($expens_cat)
        {
          $expens_category=$expens_cat->cat_id;
        }
        else
        {
          $add_expens_category = array('code' => 'RMP', 'name' => 'Raw Material Payment');
          $expens_category=$this->site->insertQuery('expens_category',$add_expens_category);
        }
        $expenses_data = array(                
          'date' => date('Y-m-d H:i:s'),   
          'paid_by' => $type,               
          'amount' => $this->input->post('paidamount'),                
          'created_by' => $this->session->userdata('user_id'),
          'c_id'  => $expens_category,
          'store_id'  =>$supplierStore_id ,
          'mf_payment_id'=> $todayPurchasePayment,
      );
      $this->site->insertQuery('expenses',$expenses_data);
      $this->session->set_flashdata('message', lang('Purchases Payment submited successfully'));
      $this->add();
    }

    public function todayPurchaseslist(){
        if (!$this->Admin) {            
            $this->session->set_flashdata('error', lang('access_denied'));            
            redirect('pos');            
        }
        $this->load->library('datatables');
        
        $this->datatables->select($this->db->dbprefix('today_purchase_payment') . ".today_payment_id as id, " . 
          $this->db->dbprefix('suppliers') . ".name as name, " .
         $this->db->dbprefix('today_purchase_payment') . ".payment_date as payment_date ,  " . $this->db->dbprefix('today_purchase_payment') . ".payment_amount, " . $this->db->dbprefix('today_purchase_payment') . ".payment_note", FALSE);        
        $this->datatables->join('suppliers', 'suppliers.id=today_purchase_payment.supplier_id');        
        $this->datatables->from('today_purchase_payment');        
        $this->datatables->group_by('today_collect_id');        
        if ($today != NULL) {            
            $this->datatables->like('date', $today);            
        }        
        $this->datatables->unset_column('id');        
        echo $this->datatables->generate();             
    }

    public function todayPurchases() {

       if (!$this->Admin) {            
            $this->session->set_flashdata('error', lang('access_denied'));            
            redirect('pos');            
        }        
       $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));        
       $this->data['page_title'] = 'Collection';        
        $bc = array(
            array(
                'link' => '#',
                'page' => 'Collection'
            )
        );        
        $meta = array(
            'page_title' => 'Collection',
            'bc' => $bc
        );    
        $this->page_construct('mf_payment/todayPurchaseslist', $this->data, $meta);
    }

    public function paymentlist(){ 

        $supplier = $this->input->get('supplier') ? $this->input->get('supplier') : NULL;
        $start_date = $this->input->get('start_date') ? $this->input->get('start_date').' 00:00:00' : NULL;
        $end_date = $this->input->get('end_date') ? $this->input->get('end_date').' 23:59:59' : NULL;                
        $this->load->library('datatables');
        
        $this->datatables->select($this->db->dbprefix('mf_payment') . ".id as id, " . 
        	$this->db->dbprefix('mf_suppliers') . ".name as name, " .  
        	$this->db->dbprefix('mf_payment') . ".payment_date as payment_date ,  " . 
        	$this->db->dbprefix('mf_payment') . ".payment_amount, " .
        	$this->db->dbprefix('mf_payment') . ".type, " .
        	$this->db->dbprefix('mf_payment') . ".cheque_no, " . 
        	$this->db->dbprefix('mf_payment') . ".payment_note", FALSE);        
        $this->datatables->join('mf_suppliers', 'mf_suppliers.id=mf_payment.supplier_id');
        $this->datatables->join('stores', 'mf_suppliers.store_id=stores.id');  

        if(!$this->Admin){
          $this->datatables->where('mf_payment.store_id',$this->session->userdata('store_id'));
        }

        $this->datatables->add_column("Actions", "<div class='text-center'><div class='btn-group'>
                
         <a href='" . site_url('mf_payment/delete/$1') . "' onClick=\"return confirm('". lang('You are going to delete payment , please click ok to delete') ."')\" title='".lang("delete_payment")."' class='tip btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a></div></div>", "id"); 
        
        $this->datatables->from('mf_payment'); 

        if($supplier) { $this->datatables->where('supplier_id', $supplier); }
        if($start_date) { $this->datatables->where('payment_date >=', $start_date); }
        if($end_date) { $this->datatables->where('payment_date <= ', $end_date); }       
        
        /* if ($today != NULL) {            
            $this->datatables->like('payment_date', $today);            
        }  */       
        $this->datatables->unset_column('id');        
        echo $this->datatables->generate(); 
	  }

    public function index() { 
      if(!$this->site->route_permission('mf_payment_view')) {
        $this->session->set_flashdata('error', lang('access_denied'));
        redirect();
      }

       $start_date = $this->input->post('start_date') ? $this->input->post('start_date') : NULL;
       $end_date = $this->input->post('end_date') ? $this->input->post('end_date') : NULL;
       $supplier = $this->input->post('Supplier') ? $this->input->post('Supplier') : NULL;

       $this->data['suppliers'] = $this->site->getAllMfSuppliers();      
       $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));        
       $this->data['page_title'] = 'Raw Material Payment List';        
        $bc = array(
            array(
                'link' => '#',
                'page' => 'Raw Material Payment List'
            )
        );        
        $meta = array(
            'page_title' => 'Raw Material Payment List',
            'bc' => $bc
        );    
        $this->page_construct('mf_payment/index', $this->data, $meta);
    }

    public function delete($id = null){
       
      $getSalesIdfpaytb = $this->mf_payment_model->getAllpaymentID($id);

      foreach ($getSalesIdfpaytb as $key => $value) {
         $saleAmountptb = $value->amount ;
        
         $getSalesIdfSaltb = $this->mf_payment_model->getPurchaseByID($value->mf_purchases_id);

         $newPaid = $getSalesIdfSaltb->paid - $saleAmountptb; 
         $newDue = $getSalesIdfSaltb->deu + $saleAmountptb; 

         $dataUpdate  = array(
                        'paid' => $newPaid,
                        'deu'  => $newDue,
                        );
         $this->mf_payment_model->UpdateSupplierDeu($dataUpdate,$getSalesIdfSaltb->id); 
         $this->mf_payment_model->deletePaymentForPurchase($id);
         $this->mf_payment_model->deleteTodayPurPay($id);
         
         $newPaid = 0;
         $newDue = 0;

         $this->session->set_flashdata('message', lang('Purchases delete successfully'));         
      } 
      $this->mf_payment_model->deleteAdvSupPay($id);
      $this->mf_payment_model->deleteExp($id);
      $this->index();
    }
}