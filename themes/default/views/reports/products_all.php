<?php (defined('BASEPATH')) OR exit('No direct script access allowed'); ?>

<?php
    $v = "?v=1";
    if ($this->input->post('store_id')) {
        $v .= "&store_id=" . $this->input->post('store_id');
        $store_id = $this->input->post('store_id');
    }

?>

<script type="text/javascript">

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

            'sAjaxSource': '<?= site_url('reports/get_products_all/'.$v) ?>',

            'fnServerData': function (sSource, aoData, fnCallback) {

                aoData.push({

                    "name": "<?= $this->security->get_csrf_token_name() ?>",

                    "value": "<?= $this->security->get_csrf_hash() ?>"

                });

                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});

            },

            "aoColumns": [ null, null, null, null, null, null ]

        });

        //{"data":"tax_method","render":method},





    });



</script>

<style type="text/css">

    .table td:first-child { padding: 1px; }

    .table td:nth-child(6), .table td:nth-child(7), .table td:nth-child(8) { text-align: center; }

    .table td:nth-child(9)<?= $Admin ? ', .table td:nth-child(10)' : ''; ?> { text-align: right; }

</style>

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-header">

                    <h3 class="box-title"><?= lang('list_results'); ?></h3>
                    <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button> <button type="button" onclick="printIt()" style="width:120px; float:right; display:none;" class="btn btn-default btn-sm toggle_form pull-right" id="daily_sales">Print report</button>

                    <?= form_open(""); ?>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <?= lang('Store', 'Store'); ?>
                                    <?php
                                    $wr[0] = lang("select") . " " . lang("Store");
                                    foreach ($stores as $store) {
                                        $wr[$store->id] = $store->name;
                                    }
                                    ?>
                                    <?= form_dropdown('store_id', $wr, set_value('store_id'), 'class="form-control select2 tip" id="store_id" required="required" style="width:100%;"'); ?>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary"><?= lang("submit"); ?></button>
                            </div>
                        </div>
                    <?= form_close(); ?>
                </div>

                <div class="box-body">
						<div class="table-responsive" id="page_content">
                        <div class="row">
                        <div class="col-xs-6">
                	<table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th class="col-xs-5">Total Quantity</th>
                            <th class="col-xs-7"><?php  echo  $quantity ?></th>
                          </tr>
                          <tr>
                            <th class="col-xs-5">Total Cost</th>
                            <th class="col-xs-7"><?php  echo  $cost ?></th>
                          </tr>
                        
                        </tbody>
                      </table>
                     </div>
                     </div>
                        <table id="fileData" class="table table-striped table-bordered table-hover" style="margin-bottom:5px;">

                            <thead>

                            <tr class="active">
                            
                                <th class="col-xs-2"><?= lang("name"); ?></th>
                                
                                <th class="col-xs-1"><?= lang("category"); ?></th>

                                <th class="col-xs-1"><?= lang("code"); ?></th>
                                
                                <th class="col-xs-1"><?= lang("quantity"); ?></th>
                                
                                <th class="col-xs-1"> Cost </th>

                                <th class="col-xs-1"> Sale price</th>

                            </tr>

                            </thead>

                            <tbody>

                            <tr>

                                <td colspan="10" class="dataTables_empty"><?= lang('loading_data_from_server'); ?></td>

                            </tr>

                            </tbody>

                        </table>

                        </div>



                        <div class="modal fade" id="picModal" tabindex="-1" role="dialog" aria-labelledby="picModalLabel" aria-hidden="true">

                            <div class="modal-dialog">

                                <div class="modal-content">

                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>

                                        <h4 class="modal-title" id="myModalLabel">title</h4>

                                    </div>

                                    <div class="modal-body text-center">

                                        <img id="product_image" src="" alt="" />

                                    </div>

                                </div>

                            </div>

                        </div>



                    <div class="clearfix"></div>

                </div>

            </div>

        </div>

    </div>

</section>


<script>

 $("#daily_sales").click(function () {
	 
	$(".text-center a ").css("display", "none");
	
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

    $("#excelWindow").click(function() {
        var data = $("#store_id").val();
        var url = '<?= site_url('reports/get_excel_products_all/'); ?>' + '/' + data;
        location.replace(url);
    });

</script>