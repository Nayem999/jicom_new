<style type="text/css">
    .td-center {
        text-align: center;
    }
</style>

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title"><?= lang('list_results'); ?></h3>
                    <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button>
                    <!-- <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="daily_sales">Print</button> -->


                </div>
                <div class="box-body">
                    <div id="form" class="panel panel-warning">

                        <div class="panel-body">

                            <?= form_open("reports/supplier_payment_adjustment"); ?>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label" for="store_id"><?= lang("Store Name"); ?></label>
                                        <?php

                                        $su[0] = lang("select") . " " . lang("Store");
                                        foreach ($stores as $key => $sname) {
                                            $su[$sname->id] = $sname->name;
                                        }
                                        echo form_dropdown('store_id', $su, set_value('store_id'), 'class="form-control select2" style="width:100%" id="store_id"');
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label" for="supplier_id"><?= lang("Customer Name"); ?></label>
                                        <?php

                                        $cu[0] = lang("select") . " " . lang("Supplier");
                                        foreach ($supplier_arr as $key => $sname) {
                                            $cu[$sname->id] = $sname->name;
                                        }
                                        echo form_dropdown('supplier_id', $cu, set_value('supplier_id'), 'class="form-control select2" style="width:100%" id="supplier_id"');
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label" for="start_date"><?= lang("start_date"); ?></label>
                                        <?= form_input('start_date', $start_date, 'class="form-control datepicker" id="start_date"'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label" for="end_date"><?= lang("end_date"); ?></label>
                                        <?= form_input('end_date', $end_date, 'class="form-control datepicker" id="end_date"'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary"><?= lang("submit"); ?></button>
                                </div>

                            </div>


                            <?= form_close(); ?>

                        </div>

                    </div>
                    <div class="table-responsive">
                        <div class="clearfix"></div>
                        <div class="col-xs-6">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>


                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="table-responsive" id="page_content">
                        <table class="table table-striped table-bordered table-condensed table-hover" style="margin-bottom:5px;">

                            <thead>

                                <tr class="active">

                                    <th class="col-xs-1">ID</th>
                                    <th class="col-xs-3">Supplier Name</th>
                                    <th class="col-xs-3">Store Name</th>
                                    <th class="col-xs-2">Date and Time</th>
                                    <th class="col-xs-1">Amount</th>
                                    <th class="col-xs-2">Note</th>
                                </tr>

                            </thead>

                            <tbody>

                                <?php
                                $total_balance = 0;
                                foreach ($result_arr as $key => $val) {
                                ?>
                                    <tr>
                                        <td><?= $val->payment_id; ?></td>
                                        <td><?= $val->supplier_name; ?></td>
                                        <td><?= $val->store_name; ?></td>
                                        <td><?= $val->payments_date; ?></td>
                                        <td><?= $val->payment_amount; ?></td>
                                        <td><?= $val->payment_note; ?></td>
                                        
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>

                        </table>

                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>

        </div>

    </div>

</section>
<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/moment.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {

        $('.datepicker').datetimepicker({

            format: 'YYYY-MM-DD'

        });

    });
    /* $("#daily_sales").click(function() {
        $(".dataTables_info").css("display", "none");
        $(".dataTables_length, .dataTables_filter ").css("display", "none");
        $(".dataTables_paginate ").css("display", "none");
        $("#fileData_filter ").css("display", "none");
        var content = "<html> <br><p style='text-align:center'> <b class='box-title'>Bank Balance | <?= $this->Settings->site_name ?></b><br><b class='box-title'><p><style> table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td, th {border: 1px solid #dddddd;text-align: left;padding: 2px;} tr:nth-child(even) {background-color: #dddddd;} </style>";
        content += document.getElementById("page_content").innerHTML;
        content += "</body>";
        content += "</html>";
        var printWin = window.open('', '', 'left=20,top=40,width=700,height=550 ');
        printWin.document.write(content);
        printWin.focus();
        printWin.print();
        printWin.close();
        $(".dataTables_info").css("display", "block");
        $(".dataTables_length, .dataTables_filter ").css("display", "block");
        $(".dataTables_paginate ").css("display", "block");
        $("#fileData_filter ").css("display", "block");
    }); */
    $("#excelWindow").click(function() {
        var data = $("#store_id").val()+'__'+$("#supplier_id").val()+'__'+$("#start_date").val()+'__'+$("#end_date").val();
        var url = '<?= site_url('reports/excel_supplier_payment_adjustment/'); ?>' + '/' + data;
        location.replace(url);
    });
</script>