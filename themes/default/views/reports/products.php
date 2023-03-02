<?php

$v = "?v=1";

    if($this->input->post('product')){

        $v .= "&product=".$this->input->post('product');
 
    }

    if($this->input->post('store_id')){

        $v .= "&store_id=".$this->input->post('store_id');

    }

    if($this->input->post('start_date')){

        $v .= "&start_date=".$this->input->post('start_date');

    }

    if($this->input->post('customer')){

        $v .= "&customer=".$this->input->post('customer');

    }

    if($this->input->post('end_date')) {

        $v .= "&end_date=".$this->input->post('end_date');

    }
?>



<script>

    $(document).ready(function() {

        function image(n) {

            if(n !== null) {

                return '<div style="width:32px; margin: 0 auto;"><a href="<?=base_url();?>uploads/'+n+'" class="open-image"><img src="<?=base_url();?>uploads/thumbs/'+n+'" alt="" class="img-responsive"></a></div>';

            }

            return '';

        }

        function method(n) {

            return (n == 0) ? '<span class="label label-primary"><?= lang('inclusive'); ?></span>' : '<span class="label label-warning"><?= lang('exclusive'); ?></span>';

        }

        $('#fileData').dataTable( {

            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, '<?= lang('all'); ?>']],

            "aaSorting": [[ 1, "asc" ]], "iDisplayLength": <?= $Settings->rows_per_page ?>,

            'bProcessing': true, 'bServerSide': true,

            'sAjaxSource': '<?= site_url('reports/get_products/'. $v) ?>',

            'fnServerData': function (sSource, aoData, fnCallback) {

                aoData.push({

                    "name": "<?= $this->security->get_csrf_token_name() ?>",

                    "value": "<?= $this->security->get_csrf_hash() ?>"

                });

                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});

            },

            "aoColumns": [null, null,null, {"bSearchable": false},{"mRender":currencyFormat, "bSearchable": false},{"mRender":currencyFormat, "bSearchable": false}, {"mRender":currencyFormat, "bSearchable": false}, {"mRender":currencyFormat, "bSearchable": false},]

        });



});



</script>



<script type="text/javascript">

    $(document).ready(function(){

        $('#form').hide();

        $('.toggle_form').click(function(){

            $("#form").slideToggle();

            return false;

        });

    });

</script>



<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-header">
                
                	<button type="button" onclick="printIt()" style="width:120px; float:right;display:none;" class="btn bg-navy btn-block btn-flat" id="daily_sales">Print report</button>
                    <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button>

                    <a href="#" class="btn btn-default btn-sm toggle_form pull-right"><?= lang("show_hide"); ?></a>

                    <h3 class="box-title"><?= lang('customize_report'); ?></h3>

                </div>

                <div class="box-body">

                    <div id="form" class="panel panel-warning">

                        <div class="panel-body">

                        <?= form_open("reports/products");?>
                       <?php if($this->Admin){ ?>
                            <div class="col-sm-3">
                                <div class="form-group">
                                     <?= lang('Store','Store'); ?>
                                    <?php
                                    $wr[''] = lang("select")." ".lang("Store");
                                    foreach($stores as $store) {
                                        $wr[$store->id] = $store->name;
                                    }
                                    ?>
                                    <?= form_dropdown('store_id', $wr, set_value('store_id'), 'class="form-control select2 tip" id="store_id" style="width:100%;"'); ?> 
                                </div>
                            </div> 
                       <?php } ?>

                        <div class="row">

                            <div class="col-xs-2">

                                <div class="form-group">

                                    <label class="control-label" for="product"><?= lang("product"); ?></label>

                                    <?php

                                    $pr[0] = lang("select")." ".lang("product");

                                    foreach($products as $product){

                                        $pr[$product->id] = $product->name;

                                    }

                                    echo form_dropdown('product', $pr, set_value('product'), 'class="form-control select2" style="width:100%" id="product"');

                                    ?>

                                </div>

                            </div>

                            <div class="col-xs-2">

                                <div class="form-group">

                                    <label class="control-label" for="customer"><?= lang("customer"); ?></label>

                                    <?php

                                    $cu[0] = lang("select")." ".lang("customer");
                                    foreach($customers as $customer){
                                        $cu[$customer->id] = $customer->name;
                                    }
                                    echo form_dropdown('customer', $cu, set_value('customer'), 'class="form-control select2" style="width:100%" id="customer"'); 

                                    ?>

                                </div>

                            </div>

                            <div class="col-xs-2">

                                <div class="form-group">

                                    <label class="control-label" for="start_date"><?= lang("start_date"); ?></label>

                                    <?= form_input('start_date', set_value('start_date'), 'class="form-control datetimepicker" id="start_date"');?>

                                </div>

                            </div>

                            <div class="col-xs-2">

                                <div class="form-group">

                                    <label class="control-label" for="end_date"><?= lang("end_date"); ?></label>

                                    <?= form_input('end_date', set_value('end_date'), 'class="form-control datetimepicker" id="end_date"');?>

                                </div>

                            </div>

                            <div class="col-xs-12">

                                <button type="submit" class="btn btn-primary"><?= lang("submit"); ?></button>

                            </div>

                        </div>

                        <?= form_close();?>

                    </div>

                    </div>

                    <div class="clearfix"></div>


                    <?php 
                        if($this->input->post('customer'))
                        {
                            $customer_Info= $this->customers_model->getCustomerByID($this->input->post('customer'));
                            ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive" id="page_content">
                                        <table class="table table-striped table-bordered table-hover" style="margin-bottom:5px;">
                                            <thead>
                                                <tr class="active">
                                                    <td>Total Product Wise Sale For <b><?=$customer_Info->name;?></b></td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        else
                        {
                            ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive" id="page_content">
                                        <table class="table table-striped table-bordered table-hover" style="margin-bottom:5px;">
                                            <thead>
                                                <tr class="active">
                                                    <td>Total Product Wise Sale For All Customer</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>

                    <div class="row">

                        <div class="col-xs-12">

                            <div class="table-responsive" id="page_content">

                                <table id="fileData" class="table table-striped table-bordered table-hover" style="margin-bottom:5px;">

                                    <thead>

                                        <tr class="active">

                                            <th><?= lang("name"); ?></th>

                                            <th><?= lang("store_name"); ?></th>

                                            <th class="col-xs-2"><?= lang("code"); ?></th>

                                            <th class="col-xs-1"><?= lang("sold"); ?></th> 

                                            <th class="col-xs-1"><?= lang("tax"); ?></th>

                                            <th class="col-xs-1"><?= lang("cost"); ?></th>

                                            <th class="col-xs-1"><?= lang("income"); ?></th>

                                            <th class="col-xs-1"><?= lang("profit"); ?></th>
                                            
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td colspan="10" class="dataTables_empty"><?= lang('loading_data_from_server'); ?></td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div> 
                    
                </div>

            </div>

        </div>

    </div>

</section>
<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/moment.min.js" type="text/javascript"></script>

<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script type="text/javascript">

    $(function () {

        $('.datetimepicker').datetimepicker({

            format: 'YYYY-MM-DD'

        });

    });

</script>
<script>

 $("#daily_sales").click(function () {
	 
	$(".text-center a ").css("display", "none"); 
    $(".dataTables_length ").css("display", "none");
    $(".dataTables_paginate ").css("display", "none");
    $("#fileData_filter ").css("display", "none");  
	
	 var content = "<html> <br> <h2 style='text-align:center'> Products Report <br></h2>";
	 content += document.getElementById("page_content").innerHTML ;
     content += "</body>";
     content += "</html>";
	 var printWin = window.open('','','left=20,top=40,width=700,height=550,toolbar=0,scrollbars=0,status =0');
	 printWin.document.write('<link rel="stylesheet" href="http://localhost/spos-new/themes/default/assets/bootstrap/css/bootstrap.min.css" type="text/css" />');

     printWin.document.write(content);
     
	 printWin.focus();
     printWin.print();
	 printWin.close();
   
    // window.print();            
            
  });
  $("#excelWindow").click(function () {  
        var data=$("#product").val()+'_'+$("#warehouse").val()+'_'+$("#start_date").val()+'_'+$("#end_date").val()+'_'+$("#customer").val();    
        var url='<?=site_url('reports/get_excel_products/');?>'+'/'+data;
        location.replace(url);

    }); 
</script>

