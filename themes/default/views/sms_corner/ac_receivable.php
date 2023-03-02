<?php
$cid ='';
 ?>
<style type="text/css">
    .td-center{
        text-align: center;
    }
</style>

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title"><?= lang('list_results'); ?></h3>
                    <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm toggle_form pull-right" id="daily_sales">Print report</button>
                    <?php if($this->session->userdata('group_id') == 2){

                        $u_id = $this->session->userdata('user_id') ;
                        }else{
                            $u_id = NULL;
                         }; ?>

                </div>
                <div class="box-body" > 
                 <div id="form" class="panel panel-warning">

                    <div class="panel-body">                       

                        <?= form_open("smscorner/receivablelist");?> 

                        <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                            <?php // print_r($acrcv); ?>
                                <label class="control-label" for="customer"><?= lang("customer"); ?></label>
                                <?php
                                $customers = $this->sales_model->getAllCustomer();
                                $cu[0] = lang("select")." ".lang("customer");

                                    foreach($customers as $customer){
                                        $storeName = $this->site->getDataByElement('stores','id',$customer->store_id);  
                                        $storeName = $storeName[0]->name; 
                                        $cu[$customer->id] = $customer->name.'( '.$storeName.' )';
                                     }

                                echo form_dropdown('customer', $cu, set_value('customer'), 'class="form-control select2" style="width:100%" id="customer"');  
                                ?>
                            </div>
                            </div>

                            <div class="col-sm-12">

                                <button type="submit" class="btn btn-primary"><?= lang("submit"); ?></button>

                            </div>

                        </div>

                        <?= form_close();?>

                    </div>

                </div>  
                <div class="table-responsive" >
                <div class="clearfix"></div>          
                  <div class="col-xs-6">
                    <table class="table table-bordered">
                        <tbody>
                          <tr>
                          <?php foreach ($cID as $key => $cIDgetby) {
                              $cIDgetby->customer_id;

                            }
                            $linkID = base_url('merge/salepucrchaslist').'/'.$cIDgetby->marge_id;
                            $cids ='';
                            $cids = $_POST['customer'];
                                if($cids !='') {
                                $cnames = $this->sales_model->acReceivable($cids);
                                foreach ($cnames as $key => $cnam) {
                                    # code...
                                } 
                            }
                            ?>
                            
                            <?php if($cIDgetby->customer_id !=''){
                                echo '<th class="col-xs-3">'.$cnam->customer_name.'</th>';
                                echo '<th class="col-xs-3">
                                    <a target="_blank" href="'.$linkID.'">View</a></th>';
                            } else { ?>
                            <?php if($cnam->customer_name) 
                                { echo '<th class="col-xs-2">'.$cnam->customer_name.'</th>
                                        <th class="col-xs-2">'.$tDue.'</th>
                                        <th class="col-xs-2"><a href='.site_url('customers/customer_laser').'/'.$cids.' target="_blank">Report</a> &nbsp;&nbsp;&nbsp;
                                        <a data-toggle="modal" onclick="sendSms('.$cids.' )" data-target="#myModal" href="javscript:void(0)" class="tip btn btn-primary btn-xs"><i class="fa fa-paper-plane"></i></a>
                                        </th>
                                        ';
                            } } ?>
                          </tr>  
                                             
                        </tbody>
                      </table>
                     </div>
                    </div>
                    <?php 
                        $ord = $_GET['order'];
                        if($recivabl !=''){
                           foreach ($recivabl as $key => $part) {
                                   $sort[$key] = $part['due']; 
                              }
                            if($ord =='desc'){
                                array_multisort($sort, SORT_DESC, $recivabl); 
                            } else if($ord =='asc'){
                               array_multisort($sort, SORT_ASC, $recivabl);                                
                            } else{
                              array_multisort($sort, SORT_DESC, $recivabl);   
                            }
                            } 
                        ?>
                     <div class="table-responsive" id="page_content"> 
                        <table class="table table-striped table-bordered table-condensed table-hover" style="margin-bottom:5px;">

                            <thead>

                            <tr class="active">
                                
                                <th class="col-xs-2">Customer Name</th>

                                <th class="col-xs-2">Store Name</th>

                                <th class="col-xs-3">Grand total</th>

                                <th class="col-xs-2">Paid</th>


                                <th class="col-xs-2">Balance <a title="Descending " href="?order=desc"><span>&#8593;</span> </a>
                                
                                <th class="col-xs-2">Last Sms Date</th>
                                <a title="Ascending" href="?order=asc"><span>&#8595;</span> </a></th>
                                <th class="col-xs-2">Action</th>

                            </tr>

                            </thead>

                            <tbody>
                                <?php
                                 foreach ($recivabl as $key => $recabl) { ?>
                                <tr>
                                    <td class="td-center"><?= $recabl['cname']; ?></td>
                                    <td class="td-center"><?= $this->site->findeNameByID('stores','id',$recabl['store_id'])->name  ?></td>
                                    <td class="td-center"><?= $recabl['gtotal']; ?></td>
                                    <?php   
                                    $laser_url = site_url('customers/customer_laser').'/'.$recabl['id'];
                                    if($recabl['marge_id'] !='') {
                                    $linkID = base_url('merge/salepucrchaslist').'/'.$recabl['marge_id']; ?>
                                    <td class="td-center"><a target="_blank" href="<?php echo $linkID; ?>">View</a></td>
                                    <td class="td-center"><a target="_blank" href="<?php echo $linkID; ?>">View</a></td>
                                    <td class="td-center"><a target="_blank" href="<?php echo $linkID; ?>">View</a></td>
                                    
                                    <?php } else { ?>
                                    <td class="td-center"><?= $this->tec->formatMoney($recabl['tpaid']) ?></td>
                                    <td class="td-center"><?= $this->tec->formatMoney($recabl['due']) ?></td>
                                    <td>
                                    <?=
                                    //    
                                       $this->reports_model->last_sms(1, $recabl['id']) ? date_format(date_create($this->reports_model->last_sms(1, $recabl['id'])),"D d M Y h:i A") : 'N/A'
                                    ?>
                                    </td>
                                    <td class="td-center">
                                        <a target="_blank" href="<?php echo $laser_url; ?>" class="tip btn btn-primary btn-xs"><i class='fa fa-file-text-o'></i></a>
                                        <a data-toggle="modal" onclick="sendSms(<?= $recabl['id'] ?>)" data-target="#myModal" href="javscript:void(0)" class="tip btn btn-primary btn-xs"><i class='fa fa-paper-plane'></i></a>
                                    </td>
                                    <?php } ?>

                                </tr>
                                <?php  } ?>
                            </tbody>

                        </table>

                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Send Sms</h4>
      </div>
        <form action="<?=base_url()?>smscorner/sms_send">
        <div class="modal-body">
                <div class="form-group">
                    <label for="">Customer Name</label>
                    <input type="text" name="customer_name" class="form-control" id="customerName">
                    <input type="hidden" name="customer_id" class="form-control" id="customerId">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <small>&nbsp;&nbsp;(NB: Must use Country Code & (,) comma seperator for multiple number.[ex. +8801XXXXXXXXX,+8801XXXXXXXXX])</small>
                    <input type="tel" name="phone" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea name="message" class="form-control" id="message" ></textarea>
                    
                </div>
                <!-- <div class="form-group">
                    <input type="submit" value="Send Sms" class="btn btn-primary">
                </div> -->
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send Sms</button>
      </div>
            </form>
    </div>
  </div>
</div>
<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/moment.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script type="text/javascript">

    $(function () {

        $('.datepicker').datetimepicker({

            format: 'YYYY-MM-DD'

        });

    });

 $("#daily_sales").click(function () {        
    $(".dataTables_info").css("display", "none"); 
    $(".dataTables_length, .dataTables_filter ").css("display", "none");
    $(".dataTables_paginate ").css("display", "none");
    $("#fileData_filter ").css("display", "none");
     var content = "<html> <br><p style='text-align:center'> <b class='box-title'>Account Receivable List | <?= $this->Settings->site_name ?> </b><br><b class='box-title'><p><style> table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td, th {border: 1px solid #dddddd;text-align: left;padding: 2px;} tr:nth-child(even) {background-color: #dddddd;} </style>";
     content += document.getElementById("page_content").innerHTML;
     content += "</body>";
     content += "</html>";
     var printWin = window.open('','','left=20,top=40,width=700,height=550 '); 
     printWin.document.write(content);     
     printWin.focus();
     printWin.print();
     printWin.close();  
     $(".dataTables_info").css("display", "block"); 
    $(".dataTables_length, .dataTables_filter ").css("display", "block");
    $(".dataTables_paginate ").css("display", "block");
    $("#fileData_filter ").css("display", "block"); 
  });

  function sendSms(customer_id,name){
    var customerId = customer_id;
    //   alert(customer_id);
    $.ajax({
               type:'get',
               url:'<?=base_url()?>smscorner/openmodalcustomer',
               headers: {'X-Requested-With': 'XMLHttpRequest'},
               data:{customer_id : customerId},
               dataType : "json",
               success:function(data) {
                  // $("#msg").html(data.msg);
                //   console.log(data);
                $('#customerName').val(data.customer_name);
                $('#phone').val(data.phone);
                $('#message').val(data.message);
                $('#customerId').val(data.customer_id);
                //   console.log(data.supplier_name);
               }
            });
    //   $('#customerName').val(name);
  }

</script>