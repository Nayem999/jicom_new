<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mf_report extends MY_Controller
{

    function __construct() {
        parent::__construct();

        if ( ! $this->loggedIn) {
            redirect('login');
        }
        if(!$this->site->permission('mf_report'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }
        $this->load->model('mf_report_model');
        $this->load->library('form_validation');
        // $this->load->helper('update_helper');
 
    }
    
    function index() {

        $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));

        $start_date = $this->input->post('start_date') ? $this->input->post('start_date') : date('Y-m-d');  

        $end_date = $this->input->post('end_date') ? $this->input->post('end_date') : date('Y-m-d');  

        $this->data['start_date'] = $start_date;

        $this->data['end_date'] = $end_date;

        $results = array(); 

        $this->data['results'] = $results; 

        $this->data['page_title'] = $this->lang->line("daily_sales");

        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('daily_sales')));

        $meta = array('page_title' => lang('Master Sales Report'), 'bc' => $bc);
       
        $this->page_construct('reports/sales', $this->data, $meta);
    }


    public function raw_material()
    {
        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('raw_material_report')));

        $meta = array('page_title' => lang('Raw material Report'), 'bc' => $bc);

        $this->data['end_date'] = $start_date = $this->input->post('start_date') ? $this->input->post('start_date') : date('Y-m-d');  

        $this->data['start_date'] =  $end_date = $this->input->post('end_date') ? $this->input->post('end_date') : date('Y-m-d');

        // all branch name query here
        $this->data["brands"] = $this->db->select("id,name")->from('mf_brands')->get()->result();

        $brandId = '';

        $factoryId = '';

        if($this->input->server('REQUEST_METHOD') === "POST"){

            $brandId = $this->input->post('brand_id');

            $factoryId = $this->input->post('factory_id');

        }

        $mfReportModal = new Mf_report_model();

        $this->data["materials"] = $brandId || $factoryId ? $mfReportModal::getMaterialData($brandId,$factoryId) : $mfReportModal::getMaterialData();

        $this->page_construct('mf_report/raw_material',$this->data, $meta);
    }


    public function exp_material_report($brandId=null)  {

        $fields = array('SL', 'NAME', 'BRAND','STORE','QTY');

        $fileName = "raw_material_report_" . date('Y-m-d_h_i_s') . ".xls"; 

        $excelData = implode("\t", array_values($fields)) . "\n"; 

        $mfReportModal = new Mf_report_model();

        $items = $brandId?$mfReportModal::getMaterialData($brandId): $mfReportModal::getMaterialData();

     /*    if($brandId){
            if(isset($_GET['brand_name'])):
            $excelData .= implode("\t", array_values([$_GET['brand_name']])) . "\n"; 
            endif;
        } */

        if(count($items) > 0 ):
            $i = 0;
            foreach ($items as $key => $item):

                $lineData = 
                [
                    ++$i,
                    $item->name,
                    $item->brand_name,
                    $item->store_name,
                    $item->qty . ' ' . @$item->unit,
                ];

                $excelData .= implode("\t", array_values($lineData)) . "\n"; 

            endforeach;

        endif;

        header("Content-Type: application/vnd.ms-excel"); 

        header("Content-Disposition: attachment; filename=\"$fileName\""); 

        echo $excelData;

    }

    public function raw_material_purchase()
    {
        // $this->load->model("mf_purchases_model");

        // $this->data['items'] = 
        
       

        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('raw_material_purchase_report')));

        $meta = array('page_title' => lang('Raw material Purchase Report'), 'bc' => $bc);

        $this->data['end_date'] =  $this->input->post('end_date') ? $this->input->post('end_date') : date('Y-m-d');

        $this->data['start_date'] =  $this->input->post('start_date') ? $this->input->post('start_date') : date('Y-m-d');  

        $mfPurchaseReportModal = new Mf_report_model();

        $factoryId = $this->input->post('factory_id') ? $this->input->post('factory_id') : '';

        $this->data["materials"] = $mfPurchaseReportModal::getPurchaseData($this->data['start_date'],$this->data['end_date'],$factoryId);

        $this->page_construct('mf_report/raw_material_purchase',$this->data, $meta);

    }

    public function exp_material_purchase_report($stDate=null, $endDate=null, $factoryId = null)  {

        $this->load->model('mf_purchases_model');

        $purchaseModel =  new mf_purchases_model();

        $fields = array('SL','DATE', 'MATERIAL NAME', 'SUPPLIER Name ', 'STORE NAME','TOTAL','PAID AMOUNT','DUE AMOUNT');

        $start_date = $stDate ? $stDate : date('Y-m-d');  

        $end_date = $endDate ? $endDate : date('Y-m-d');

        $fileName = "raw_material_purchase_report_" . date('Y-m-d_h_i_s') . ".xls"; 

        $excelData = implode("\t", array_values($fields)) . "\n"; 

        $mfPurchaseReportModal = new Mf_report_model();

        $items = $mfPurchaseReportModal::getPurchaseData($start_date, $end_date, $factoryId);

        if(count($items) > 0 ):
            $i = 0;
            foreach ($items as $key => $item):

                $productsName =  $purchaseModel->getAllPurchaseItems($item->id);

                $names = '';
                
                if(count($productsName) > 0):

                    foreach ($productsName as $key => $pname):

                        $names .=$pname->product_name .', ';

                    endforeach;
                endif;

                $lineData = 
                [
                    ++$i,
                    date("d-m-Y", strtotime($item->date)),
                    substr($names, 0, -2),
                    $item->supplier_name,
                    $item->store_name,
                    $item->total,
                    $item->paid,
                    $item->deu,
                ];

                $excelData .= implode("\t", array_values($lineData)) . "\n"; 

            endforeach;

        endif;

        header("Content-Type: application/vnd.ms-excel"); 

        header("Content-Disposition: attachment; filename=\"$fileName\""); 

        echo $excelData;

    }

    public function raw_material_stock()
    {
        $this->load->model('Mf_material_stock_model');

        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('raw_material_stock_report')));

        $meta = array('page_title' => lang('Raw material Stock Report'), 'bc' => $bc);

        $brandId = '';
        if($this->input->server('REQUEST_METHOD') === "POST"){
            $brandId = $this->input->post('brand_id');
        }

        $stockModel = new Mf_material_stock_model();

        $factoryId = $this->input->post('factory_id') ? $this->input->post('factory_id') : '';

        $this->data['matarial_items'] = $stockModel->getStockList($brandId , $factoryId); 

        $this->data["brands"] = $this->db->select("id,name")->from('mf_brands')->get()->result();

        $this->page_construct('mf_report/raw_material_stock',$this->data, $meta);
    }


    public function raw_material_production()
    {

        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('production_report')));
        
        $meta = array('page_title' => lang('Production Report'), 'bc' => $bc);

        $this->data['start_date'] = $this->input->post('start_date') ? $this->input->post('start_date') : date('Y-m-d');  

        $this->data['end_date'] =  $this->input->post('end_date') ? $this->input->post('end_date') : date('Y-m-d');

        $factoryId = $this->input->post('factory_id') ? $this->input->post('factory_id') : '';

        $mfReportModal = new Mf_report_model();

        $this->data["materials"] = $mfReportModal::getProductionData($this->data['start_date'], $this->data['end_date'] , $factoryId);

        $this->page_construct('mf_report/raw_material_production',$this->data, $meta);

    }

    public function exp_material_production_report($stDate=null, $endDate=null,$factoryId = null)  
    {
        $fields = array('SL', 'BATCH NO', 'RECIPE NAME','PRODUCT','CATEGORY','STATUS','TARGET QTY', 'ACTUAL QTY', 'TOTAL COST');

        $start_date = $stDate ? $stDate : date('Y-m-d');  

        $end_date = $endDate ? $endDate : date('Y-m-d');

        $fileName = "raw_material_production_report_" . date('Y-m-d_h_i_s') . ".xls"; 

        $excelData = implode("\t", array_values($fields)) . "\n"; 

        $mfPurchaseReportModal = new Mf_report_model();

        $items = $mfPurchaseReportModal::getProductionData($start_date, $end_date, $factoryId);

        if(count($items) > 0 ):
            $i = 0;
            foreach ($items as $key => $item):

                $lineData = 
                [
                    ++$i,
                    $item->batch_no,
                    $item->recipe_name,
                    $item->product_name,
                    $item->cat_name,
                    $item->status,
                    $item->target_qty .' '. $item->unit_name,
                    $item->actual_output .' '. $item->unit_name,
                    $item->total_cost,
                ];

                $excelData .= implode("\t", array_values($lineData)) . "\n"; 

            endforeach;

        endif;

        header("Content-Type: application/vnd.ms-excel"); 

        header("Content-Disposition: attachment; filename=\"$fileName\""); 

        echo $excelData;
    }


    public function finish_goods_stock()
    {
        $this->load->model('mf_finish_good_stock_model');

        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('finish_goods_stock_report')));
        
        $meta = array('page_title' => lang('Finish Goods Stock Report'), 'bc' => $bc);

        $factory_id = $this->input->post('factory_id') ? $this->input->post('factory_id') : ''; 

        $this->data['finish_good_list'] = $this->mf_finish_good_stock_model->getFinishStockList($factory_id);

        $this->page_construct('mf_report/finish_goods_stock',$this->data, $meta);
    }

    public function exp_finish_goods_stock_report($factory_id = null)
    {
        $this->load->model('mf_finish_good_stock_model');

        $fields = array('SL', 'PRODUCT Name ', 'QUANTITY');

        $fileName = "finish_goods_stock_report_" . date('Y-m-d_h_i_s') . ".xls"; 

        $excelData = implode("\t", array_values($fields)) . "\n"; 

        $items = $this->mf_finish_good_stock_model->getFinishStockList($factory_id);

        if(count($items) > 0 ):

            $i = 0;

            foreach ($items as $key => $item):

                $lineData = 
                [
                    ++$i,

                    $item->product_name,

                    $item->qty
                ];

                $excelData .= implode("\t", array_values($lineData)) . "\n"; 

            endforeach;

        endif;

        header("Content-Type: application/vnd.ms-excel"); 

        header("Content-Disposition: attachment; filename=\"$fileName\""); 

        echo $excelData;
    }


    public function raw_material_expense()
    {

        // $this->data['categories'] = $this->employee_model->getAllCategories();

        $start_date = $this->input->post('start_date') ? $this->input->post('start_date') : date('Y-m-d');  

        $end_date = $this->input->post('end_date') ? $this->input->post('end_date') : date('Y-m-d');  
        
        $store_id = $this->input->post('factory_id') ? $this->input->post('factory_id') : 0;  

        $mfPurchaseReportModal = new Mf_report_model();

        $this->data["items"] = $mfPurchaseReportModal::getAllExpense($start_date, $end_date, $store_id);

        $this->data["start_date"] = $start_date;

        $this->data["end_date"] = $end_date;

        $this->data['page_title'] = $this->lang->line("Expenses Report");

        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('Expenses Report')));

        $meta = array('page_title' => lang('Expenses Report'), 'bc' => $bc);

        $this->page_construct('mf_report/raw_material_expense',$this->data, $meta);


    }

    public function exp_expense_report($start_date = null , $end_date= null , $storeId = null)
    {
        $fields = array('SL', 'DATE ', 'REFERENCE','AMOUNT', 'CATEGORY', 'PAID BY');

        $fileName = "expense_report_" . date('Y-m-d_h_i_s') . ".xls"; 

        $excelData = implode("\t", array_values($fields)) . "\n"; 

        $mfPurchaseReportModal = new Mf_report_model();

        $items =  $mfPurchaseReportModal::getAllExpense($start_date, $end_date, $storeId);

        if(count($items) > 0 ):

            $i = 0;

            foreach ($items as $key => $item):

                $lineData = 
                [
                    ++$i,

                    $item->date,

                    $item->ref,

                    $item->amount,

                    $item->cat_name,

                    $item->paid_by,

                ];

                $excelData .= implode("\t", array_values($lineData)) . "\n"; 

            endforeach;

        else:
            $excelData = implode("\t", array_values(["No data found"])) . "\n"; 
        endif;

        header("Content-Type: application/vnd.ms-excel"); 

        header("Content-Disposition: attachment; filename=\"$fileName\""); 

        echo $excelData;
    }


    public function raw_material_transfer()
    {

        $this->load->model("transfers_model");

        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('raw_material_transfer')));

        $this->data['start_date'] = $this->input->post('start_date') ? $this->input->post('start_date') : date('Y-m-d');  

        $this->data['end_date'] =  $this->input->post('end_date') ? $this->input->post('end_date') : date('Y-m-d');
        
        $meta = array('page_title' => lang('Raw Material Transfer Report'), 'bc' => $bc);

        $this->data['transfer_list'] = $this->transfers_model->getAllTransfers($this->data['start_date'],$this->data['end_date']);

        $this->page_construct('mf_report/raw_material_transfer',$this->data, $meta);

    }


    public function exp_material_transfer_report($startDate = null, $endDate = null)
    {
        $this->load->model('transfers_model');

        $fields = array('SL', 'DATE ', 'FROM WAREHOUSE NAME','TO WAREHOUSE NAME', 'TOTAL', 'NOTE', 'STATUS');

        $fileName = "material_transfer_report_" . date('Y-m-d_h_i_s') . ".xls"; 

        $excelData = implode("\t", array_values($fields)) . "\n"; 

        $items =  $this->transfers_model->getAllTransfers($startDate,$endDate);

        if(count($items) > 0 ):

            $i = 0;

            foreach ($items as $key => $item):

                $lineData = 
                [
                    ++$i,
                    $item->date,
                    $item->from_warehouse_name,
                    $item->to_warehouse_name,
                    $item->total,
                    $item->note,
                    $item->status,

                ];

                $excelData .= implode("\t", array_values($lineData)) . "\n"; 

            endforeach;

        else:
            $excelData = implode("\t", array_values(["No data found"])) . "\n"; 
        endif;

        header("Content-Type: application/vnd.ms-excel"); 

        header("Content-Disposition: attachment; filename=\"$fileName\""); 

        echo $excelData;
    }

    public function collection_rpt()
    {        
        $this->data['start_date'] = $this->input->post('start_date') ? $this->input->post('start_date') : date('Y-m-d');  
        $this->data['end_date'] =  $this->input->post('end_date') ? $this->input->post('end_date') : date('Y-m-d');

        $this->data['collection_list'] = $this->mf_report_model->getCollection($this->data['start_date'],$this->data['end_date']);

        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('collection_rpt')));
        $meta = array('page_title' => lang('Collection Report'), 'bc' => $bc);

        $this->page_construct('mf_report/collection_rpt',$this->data, $meta);
    }


    public function exp_collection_rpt($startDate = null, $endDate = null)
    {

        $fields = array( 'Start Date ',$startDate,'End Date', $endDate );
        $excelData = implode("\t", array_values($fields)) . "\n";  

        $fields = array( 'DATE ', 'CUSTOMER NAME','STORE NAME', 'AMOUNT', 'NOTE', 'PAID BY');

        $fileName = "maufacture_collection_report_" . date('Y-m-d_h_i_s') . ".xls"; 
        
        $excelData .= implode("\t", array_values($fields)) . "\n"; 

        $collection_list = $this->mf_report_model->getCollection($startDate,$endDate);

        if(count($collection_list) > 0 ):
            foreach ($collection_list as $key => $val):

                $lineData = 
                [
                    $this->tec->hrsd($val->payment_date),  $val->customer_name, $val->store_name, $val->payment_amount, $val->payment_note, $val->paid_by

                ];

                $excelData .= implode("\t", array_values($lineData)) . "\n"; 

            endforeach;

        else:
            $excelData = implode("\t", array_values(["No data found"])) . "\n"; 
        endif;

        header("Content-Type: application/vnd.ms-excel"); 

        header("Content-Disposition: attachment; filename=\"$fileName\""); 

        echo $excelData;
    }

    public function profit_n_loss_rpt()
    {        
        $this->data['profit_n_loss'] = $this->mf_report_model->profit_n_loss();

        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('profit_n_loss')));

        $meta = array('page_title' => lang('Profit and Loss Report'), 'bc' => $bc);

        $this->page_construct('mf_report/profit_n_loss',$this->data, $meta);
    }

    public function suppliers_payment()
    {
       
        $allSuppliers = $this->site->getAllMfSuppliers();

        if(isset($_GET['supplier']) && $_GET['supplier']){

            $supplierId = $_GET["supplier"];

            foreach ($allSuppliers as $key => $value) {

                if($value->id == $supplierId){

                    $this->data['suppliers'][] = $value;
                }

            }
           
        }else{
            $this->data['suppliers'] = $this->site->getAllMfSuppliers();
        }

        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('suppliers_payment')));
        
        $meta = array('page_title' => lang('Supplier Payment Report'), 'bc' => $bc);

        $this->page_construct('mf_report/suppliers_payment',$this->data, $meta);
    }

    public function packaging_material()
    {

        $pkLogItems = [];

        if(isset($_GET['select_material']) && $_GET['select_month'] && $_GET['select_year']){

            $materialId = $_GET["select_material"];
            $select_month = $_GET["select_month"];
            $select_year = $_GET["select_year"];
            
            $numDays = cal_days_in_month(CAL_GREGORIAN, $select_month, $select_year);

            $monthFormatting =strlen($select_month) > 1?$select_month:'0'.$select_month;

            if($select_year.'-'.$monthFormatting == date("Y-m")){
                $numDays = number_format(date("d"));
            }

            $prevLog = '';
            $found = false;

            for ($i=1; $i < $numDays+1; $i++) {

                $dateFormatting =strlen($i) > 1?$i:'0'.$i;

                $date = $select_year.'-'.$monthFormatting.'-'.$dateFormatting;
                $getData = $this->db->select('*')->from('mf_packaging_material_log')->where(["material_id"=>$materialId,'date'=>$date])->order_by('created_at', 'desc')->limit(1)->get()->row();

                if ($getData){
                    $pkLogItems[$i] =  array_merge_recursive((array) $getData, ['carry'=>false ]);
                    $prevLog = $getData;
                    $found = true;
                }else{
                    if($found)
                    $pkLogItems[$i] = array_merge_recursive((array) $prevLog, ['carry'=>true ]);
                }
            }
        }

        $this->data["packaging_log"] = $pkLogItems;

        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('Packaging Material Report')));

        $this->data["packaging_materials"] = $this->db->select("*")->from("mf_material_packaging")->get()->result();
        
        $meta = array('page_title' => lang('Packaging Material Report'), 'bc' => $bc);

        $this->page_construct('mf_report/packaging_material',$this->data, $meta);
    }



    public function exp_packaging_material()
    {
        $pkLogItems = [];

        $fields = array( 'DATE ', 'ADD','B/F', 'TOTAL', 'TO SALE', 'BALANCE');

        $fileName = "packaging_material_report_" . date('Y-m-d_h_i_s') . ".xls"; 
        
        $excelData = implode("\t", array_values($fields)) . "\n"; 

        if(isset($_GET['select_material']) && $_GET['select_month'] && $_GET['select_year']){

            $materialId = $_GET["select_material"];
            $select_month = $_GET["select_month"];
            $select_year = $_GET["select_year"];

            $getPkMaterial = $this->db->select("*")->from("mf_material_packaging")->where("id",$materialId)->get()->row();

            // $excelData = implode("\t", array_values([$getPkMaterial->name . " - " . $select_year .' - '.$select_month])) . "\n";
            
            $numDays = cal_days_in_month(CAL_GREGORIAN, $select_month, $select_year);

            $monthFormatting =strlen($select_month) > 1?$select_month:'0'.$select_month;

            if($select_year.'-'.$monthFormatting == date("Y-m")){
                $numDays = number_format(date("d"));
            }

            $prevLog = '';
            $found = false;

            for ($i=1; $i < $numDays+1; $i++) {

                $dateFormatting =strlen($i) > 1?$i:'0'.$i;

                $date = $select_year.'-'.$monthFormatting.'-'.$dateFormatting;
                $getData = $this->db->select('*')->from('mf_packaging_material_log')->where(["material_id"=>$materialId,'date'=>$date])->order_by('created_at', 'desc')->limit(1)->get()->row();

                if ($getData){
                    $pkLogItems[$i] =  array_merge_recursive((array) $getData, ['carry'=>false ]);
                    $prevLog = $getData;
                    $found = true;
                }else{
                    if($found)
                    $pkLogItems[$i] = array_merge_recursive((array) $prevLog, ['carry'=>true ]);
                }
            }

            if($pkLogItems):

                foreach ($pkLogItems as $key => $value) {
                    $lineData = 
                    [
                        $key,
    
                        $value["carry"]? '' :  $value["add_qty"],
    
                        $value["from_qty"],
    
                        $value["from_qty"],
    
                        $value["carry"]? '' : $value["to_sale"],
    
                        $value["balance"],
    
                    ];
    
                    $excelData .= implode("\t", array_values($lineData)) . "\n"; 
                }

            else:

                $excelData = implode("\t", array_values(["No data found"])) . "\n"; 
    
            endif;
    
            header("Content-Type: application/vnd.ms-excel"); 
    
            header("Content-Disposition: attachment; filename=\"$fileName\""); 
    
            echo $excelData;
        }
    }
    public function exp_supplier_payment_report($supplierId)
    {
        $this->load->model('mf_payment_model');

        $payModel = new Mf_payment_model();

        $today = date('d-m-Y');

        $fields = array( 'NAME ', 'PHONE','TODAY PURCHASE', 'TODAY PAID', 'TOTAL PURCHASE', 'TOTAL PAID', 'TOTAL BALANCE');

        $fileName = "supplier_payment_report_" . date('Y-m-d_h_i_s') . ".xls"; 
        
        $excelData = implode("\t", array_values($fields)) . "\n"; 

        $allSuppliers = $this->site->getAllMfSuppliers();

        if($supplierId){

            foreach ($allSuppliers as $key => $value) {

                if($value->id == $supplierId){

                    $this->data['suppliers'][] = $value;
                }

            }
           
        }else{
            $this->data['suppliers'] = $this->site->getAllMfSuppliers();
        }

        if($this->data['suppliers']):

            foreach ($this->data['suppliers'] as $key => $supplier):

                $id = $supplier->id;

                $todayTotalPurchases = $payModel->purchasesAmount('total',$id,$today);

                $todayPaidpurchases = $payModel->purchasesAmount('paid',$id,$today);

                $todayDeupurchases = $payModel->purchasesAmount('deu',$id,$today);

                $todayAdAmount = $payModel->advPayAmount('adv_amount',$id,$today);

                $totalAdAmount = $payModel->advPayAmount('adv_amount',$id);

                $total = $deu = $paid = 0;

                $suppliersDetails = $payModel->getSupplierByID($id);
                
                if(is_array($suppliersDetails)):

                    foreach ($suppliersDetails as $key => $value):

                        $total = $total+ $value->total;

                        $deu = $deu+ $value->deu;

                        $paid = $paid+ $value->paid;

                    endforeach;

                endif;

                $tpaid = $paid + $totalAdAmount;

                $todpuPaid = $todayPaidpurchases+$todayAdAmount;

                $lineData = 
                [
                    $supplier->name,

                    $supplier->phone,

                    $todayTotalPurchases,

                    $todpuPaid,

                    $total,

                    $tpaid,

                    $total-$tpaid

                ];

                $excelData .= implode("\t", array_values($lineData)) . "\n"; 


            endforeach;

        else:

            $excelData = implode("\t", array_values(["No data found"])) . "\n"; 

        endif;

        header("Content-Type: application/vnd.ms-excel"); 

        header("Content-Disposition: attachment; filename=\"$fileName\""); 

        echo $excelData;


    }

}
