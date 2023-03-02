

<?php

$v = "?v=1";

    if($this->input->post('Supplier')){

        $v .= "&supplier=".$this->input->post('Supplier');

    }

    if($this->input->post('start_date')){

        $v .= "&start_date=".$this->input->post('start_date');

    }

    if($this->input->post('end_date')) {

        $v .= "&end_date=".$this->input->post('end_date');

    }
    
?>
<script>
    /* $(document).ready(function() {
        if (get('remove_spo')) {
            if (get('spoitems')) {
                remove('spoitems');
            }
            remove('remove_spo');
        }

        <?php if($this->session->userdata('remove_spo')) { ?>
        if (get('spoitems')) {
            remove('spoitems');
        }

        <?php $this->tec->unset_data('remove_spo'); } ?>
        function attach(x) {
            if(x !== null) {
                return '<a href="<?=base_url();?>uploads/'+x+'" target="_blank" class="btn btn-primary btn-block btn-xs"><i class="fa fa-chain"></i></a>';
            }

            return '';
        }

        $('#purData').dataTable({
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, '<?= lang('all'); ?>']],
            "aaSorting": [[ 2, "desc" ]], "iDisplayLength": <?= $Settings->rows_per_page ?>,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': '<?= site_url('smscorner/purchasesPaymentlist/'. $v) ?>',
            'fnServerData': function (sSource, aoData, fnCallback) {

                aoData.push({
                    "name": "<?= $this->security->get_csrf_token_name() ?>",
                    "value": "<?= $this->security->get_csrf_hash() ?>"
                });

                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});

            },
            "aoColumns": [ null,{"mRender":hrld}, null, null, null, null, null]

        });

    }); */

</script>

<style type="text/css">.table td:nth-child(3) { text-align: right; }</style>

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title"><?= lang('list_results'); ?></h3>
                    <?php if($this->session->userdata('group_id') == 2){

                        $u_id = $this->session->userdata('user_id') ;
                        }else{
                            $u_id = NULL;
                         }; ?>
                    <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm toggle_form pull-right" id="printWindow">Print report</button>
                </div>

                <div class="box-body"> 
                <div id="form" class="panel panel-warning">

                        <div class="panel-body">

                        <?= form_open("smscorner/paymentList");?>

                        <div class="row">

                            <div class="col-sm-4">

                                <div class="form-group">

                                    <label class="control-label" for="customer"><?= lang("Suppliers"); ?></label>

                                    <?php

                                    $cu[0] = lang("select")." ".lang("supplier");

                                    foreach($suppliers as $supplier){

                                        $cu[$supplier->id] = $supplier->name;

                                    }

                                    echo form_dropdown('Supplier', $cu, set_value('Supplier'), 'class="form-control select2" style="width:100%" id="supplier"'); ?>

                                </div>

                            </div>

                            <div class="col-sm-4">

                                <div class="form-group">

                                    <label class="control-label" for="start_date"><?= lang("start_date"); ?></label>

                                    <?= form_input('start_date', set_value('start_date'), 'class="form-control datepicker" id="start_date"');?>

                                </div>

                            </div>

                            <div class="col-sm-4">

                                <div class="form-group">

                                    <label class="control-label" for="end_date"><?= lang("end_date"); ?></label>

                                    <?= form_input('end_date', set_value('end_date'), 'class="form-control datepicker" id="end_date"');?>

                                </div>

                            </div>

                            <div class="col-sm-12">

                                <button type="submit" class="btn btn-primary"><?= lang("submit"); ?></button>

                            </div>

                        </div>

                        <?= form_close();?>

                    </div>

                    </div>
                <div class="table-responsive">
                    <div class="clearfix"></div>
                    </div>
                    <div class="table-responsive"  id="page_content">
                        <table id="purData" class="table table-striped table-bordered table-condensed table-hover" style="margin-bottom:5px;">

                            <thead>

                            <tr class="active">

                                <th class="col-xs-2">Supplier Name</th> 

                                <th class="col-xs-3">Date and Time</th>
                                
                                <th class="col-xs-1">Amount</th>

                                <th class="col-xs-1">Paid Type</th>

                                <th class="col-xs-1">Cheque No</th>

                                <th class="col-xs-1">Note</th> 

                                <th class="col-xs-1">Action</th>

                            </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td colspan="6" class="dataTables_empty"><?= lang('loading_data_from_server'); ?></td>

                                </tr>

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
        <form action="<?=base_url()?>smscorner/sms_send_supplier">
        <div class="modal-body">
        <!--<div class="row " style="font-weight:bold">-->
                                    <!--<div class="col-md-3">Last Sms send date</div>-->
                                    <!--<div class="last-sms col-md-6"></div>-->
        <!--</div>-->
                <div class="form-group">
                    <label for="">Supplier Name</label>
                    <input type="text" name="supplier_name" class="form-control" id="supplierName">
                    <input type="hidden" name="supplier_id" class="form-control" id="supplierId">
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

</script>

<script>
    $("#printWindow").click(function () {        
    $(".dataTables_info").css("display", "none"); 
    $(".dataTables_length, .dataTables_filter ").css("display", "none");
    $(".dataTables_paginate ").css("display", "none");
    $("#fileData_filter ").css("display", "none"); 
    var content = "<html> <br><p style='text-align:center'>Suppliers Payemnt List | <?= $this->Settings->site_name ?></p><style> table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;} td, th {border: 1px solid #dddddd;text-align: center ;padding: 2px;} tr:nth-child(even) {background-color: #dddddd;} </style>";
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

    function sendSms(today_payment_id){
        var id = today_payment_id;
    //   alert(today_payment_id);
    $.ajax({
               type:'get',
               url:'<?=base_url()?>smscorner/openmodal',
               headers: {'X-Requested-With': 'XMLHttpRequest'},
               data:{today_payment_id : id},
               dataType : "json",
               success:function(data) {
                  // $("#msg").html(data.msg);
                  console.log(data);
                $('#supplierName').val(data.supplier_name);
                $('#phone').val(data.phone);
                $('#message').val(data.message);
                $('#supplierId').val(data.supplier_id);
                $('.last-sms').text(data.last_sms);
                  console.log(data.supplier_name);
               }
            });
    }
</script>  