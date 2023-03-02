<?php
$v = "?v=1";
if (isset($_POST['start_date'])) {
    $v .= "&start_date=" . $this->input->post('start_date');
    $start_date = $this->input->post('start_date');
}
// $previousBanance=$handcash->amount;
?>
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="panel-body">
                        <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button>
                        <button type="button" style="width:120px; float:right; display:none;" class="btn btn-default btn-sm toggle_form pull-right" id="printWindow">Print</button>
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
                    <div class="table-responsive" id="print_content">
                        <div class="col-xs-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> SL</th>       
                                        <th> Date</th>
                                        <th> V. No</th>
                                        <th> Customer</th>
                                        <th> Cash</th>
                                        <th> Chq/TT</th>
                                        <th> Bank</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=1;$total_cash=$total_bank=$total_bank_tt=0; $ck='';
                                        foreach($creditCollection as $key=>$row)
                                        {
                                            ?>
                                                <tr>
                                                    <td><?=$i++;?></td>
                                                    <td><?=date("d-M-Y",strtotime($row->payments_date));?></td>
                                                    <td><a href='#' onClick="MyWindow=window.open('<?php echo site_url("collection/view/".$row->collection_id."/1"); ?> ', 'MyWindow','toolbar=no,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,resizable=yes,width=350,height=600'); return false;" title='<?=lang("view collection")?>' class='tip btn btn-primary btn-xs'><i class='fa fa-list'></i></a></td>
                                                    <td><?=$row->customers_name;?></td>
                                                    <td>
                                                        <?php
                                                        if($row->paid_by == "cash")
                                                        {
                                                            echo $row->payment_amount;
                                                            $total_cash+=$row->payment_amount;
                                                        }                                                    
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if($row->paid_by != "cash")
                                                        {
                                                            echo $row->payment_amount;
                                                            $total_bank+=$row->payment_amount;
                                                        }                                                    
                                                        ?>
                                                    </td>
                                                    <td><?=$row->bank_name;?></td>
                                                </tr>
                                            <?php
                                            if($row->paid_by == "TT")
                                            {
                                                $total_bank_tt+=$row->payment_amount;
                                            }

                                        }
                                    ?>

                                </tbody>
                                   
                                <tfoot>
                                    <tr>
                                        <th class="text-center" colspan="4">Grand Total</th>
                                        <th class="text-center"><?=$total_cash;?></th>
                                        <th class="text-center"><?=$total_bank;?></th>
                                        <th class="text-center"></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="col-xs-3">
                            <br>
                            <table class="table table-bordered">
                                <?php
                                    $cash_amount = $expense_amount = $cah_bill = 0;
                                    if(isset($cashCollection->cash_amount)){ $cash_amount=$cashCollection->cash_amount; }
                                    $sub_total= $total_cash+$total_bank+$cash_amount;
                                    if(isset($expensesCollection->expense_amount)){ $expense_amount=$expensesCollection->expense_amount; }
                                    $cah_bill = $sub_total - $total_bank_tt;
                                    $gand_total = $cah_bill - $expense_amount;
                                ?>
                                <tbody>
                                        <tr>
                                            <td>Cash Sale</td>
                                            <td><?php echo $cash_amount;?></td>
                                        </tr>
                                        <tr>
                                            <td>(+) CR Col</td>
                                            <td><?php echo $total_cash+$total_bank;?></td>
                                        </tr>
                                        <tr>
                                            <td>Sub Total</td>
                                            <td><?php echo $sub_total;?></td>
                                        </tr>
                                        <tr>
                                            <td>(-) TT</td>
                                            <td><?php echo $total_bank_tt;?></td>
                                        </tr>
                                        <tr>
                                            <td>CASH BILL</td>
                                            <td><?php echo $cah_bill; ?></td>
                                        </tr>
                                        <tr>
                                            <td>EXPENSES</td>
                                            <td><?php echo $expense_amount;?></td>
                                        </tr>
                                        <tr>
                                            <td>GRAND TOTAL</td>
                                            <td><?php echo $gand_total;?></td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
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
</script>
<script>
    $("#printWindow").click(function() {
        $(".dataTables_info").css("display", "none");
        $(".dataTables_length, .dataTables_filter ").css("display", "none");

        $(".dataTables_paginate ").css("display", "none");
        $("#fileData_filter ").css("display", "none");
        var content = "<html> <br><img width='800px' src='<?= base_url('themes/default/assets/images/chalan.png'); ?>'><br><p style='text-align:center'>Daily Statement | <?php echo $this->Settings->site_name; ?> </p><style> table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td, th {border: 1px solid #dddddd;text-align: left;padding: 2px;} tr:nth-child(even) {background-color: #dddddd;} </style>";
        content += document.getElementById("print_content").innerHTML;
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
    });
    $("#excelWindow").click(function() {
        var data = $("#start_date").val() + '_' + $("#end_date").val()+ '_' + $("#store_id").val();;
        var url = '<?= site_url('reports/excel_credit_collection_rpt/'); ?>' + '/' + data;
        location.replace(url);
    });
</script>