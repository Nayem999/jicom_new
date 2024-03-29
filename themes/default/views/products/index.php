<?php (defined('BASEPATH')) OR exit('No direct script access allowed'); ?>



<script type="text/javascript">

    $(document).ready(function() {

        function image(n) {

            if(n !== null) {

                // return '<div style="width:32px; margin: 0 auto;" class="noprint"><a href="<?=base_url();?>uploads/'+n+'" class="open-image"><img src="<?=base_url();?>uploads/thumbs/'+n+'" alt="" class="img-responsive"></a></div>';
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

            'sAjaxSource': '<?= site_url('products/get_products') ?>',

            'fnServerData': function (sSource, aoData, fnCallback) {

                aoData.push({

                    "name": "<?= $this->security->get_csrf_token_name() ?>",

                    "value": "<?= $this->security->get_csrf_hash() ?>"

                });

                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});

            },

            "aoColumns": [  null, null, null, null,  null, {"mRender":method}, <?= $Admin ? '{"mRender":currencyFormat},' : ''; ?> {"mRender":currencyFormat}, {"bSortable":false, "bSearchable": false}]

        });

        //{"data":"tax_method","render":method},

        $('#fileData').on('click', '.image', function() {

            var a_href = $(this).attr('href');

            var code = $(this).attr('id');

            $('#myModalLabel').text(code);

            $('#product_image').attr('src',a_href);

            $('#picModal').modal();

            return false;

        });

        $('#fileData').on('click', '.barcode', function() {

            var a_href = $(this).attr('href');

            var code = $(this).attr('id');

            $('#myModalLabel').text(code);

            $('#product_image').attr('src',a_href);

            $('#picModal').modal();

            return false;

        });

        $('#fileData').on('click', '.open-image', function() {

            var a_href = $(this).attr('href');

            var code = $(this).closest('tr').find('.image').attr('id');

            $('#myModalLabel').text(code);

            $('#product_image').attr('src',a_href);

            $('#picModal').modal();

            return false;

        });
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
                    <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm toggle_form pull-right" id="printWindow">Print report</button>

                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-3 sequence-search-area" style="float: right; padding:0 27px 10px 10px">
                            Search for Sequence <input  id="SequenceSearch" name="SequSearch">
                        <div id="SequenceResult"></div>
                        </div>
                    </div>

                        <div class="table-responsive" id="page_content">

                        <table id="fileData" class="table table-striped table-bordered table-hover" style="margin-bottom:5px;">

                            <thead>

                            <tr class="active"> 

                                <th class="col-xs-1"><?= lang("code"); ?></th>

                                <th><?= lang("name"); ?></th>

                                <th class="col-xs-1"><?= lang("type"); ?></th>

                                <th class="col-xs-1"><?= lang("category"); ?></th>

                                <!-- <th class="col-xs-1"><?= lang("quantity"); ?></th> -->

                                <th class="col-xs-1"><?= lang("tax"); ?></th>

                                <th class="col-xs-1"><?= lang("method"); ?></th>

                                <?php if($Admin) { ?>

                                <th class="col-xs-1"><?= lang("cost"); ?></th>

                                <?php } ?>

                                <th class="col-xs-1"><?= lang("price"); ?></th>

                                <th style="width:145px;"><?= lang("actions"); ?></th>

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
    $("#printWindow").click(function () {        
    $(".dataTables_info").css("display", "none"); 
    $(".dataTables_length, .dataTables_filter ").css("display", "none");
    $(".dataTables_paginate ").css("display", "none");
    $("#fileData_filter ").css("display", "none"); 
    var content = "<html> <body><br><p style='text-align:center'>Products List | <?= $this->Settings->site_name ?></p><style> table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td, th {border: 1px solid #dddddd; text-align: left;padding: 2px;} tr:nth-child(even) {background-color: #dddddd;} </style>";
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
</script> 
