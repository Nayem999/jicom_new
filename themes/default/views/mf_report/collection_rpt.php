<style type="text/css">.table td:nth-child(3) { text-align: right; }</style>

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-body">  

                    <div class="panel-body">
                        <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button>
                        <button type="button" style="width:120px; float:right;" class="btn btn-default btn-sm toggle_form pull-right" id="printWindow">Print</button>
                        <?= form_open(""); ?>
                        <div class="row">
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

                        <table id="purData" class="table table-striped table-bordered table-condensed table-hover" style="margin-bottom:5px;">

                            <thead>

                            <tr class="active">

                                <th class="col-xs-2"><?= lang('date'); ?></th>

                                <th>Customer Name</th>
                                
                                <th>Store Name</th>

                                <th class="col-xs-1">Amount</th> 

                                <th><?= lang('note'); ?></th>

                                <th >Paid By</th>


                            </tr>

                            </thead>

                            <tbody>

                                <?php
                                    foreach($collection_list as $key=>$val)
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo $this->tec->hrsd($val->payment_date);?></td>
                                                <td><?php echo $val->customer_name;?></td>
                                                <td><?php echo $val->store_name;?></td>
                                                <td><?php echo $val->payment_amount;?></td>
                                                <td><?php echo $val->payment_note;?></td>
                                                <td><?php echo $val->paid_by;?></td>
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

    $("#excelWindow").click(function() {
        let stDate = $("#start_date").val();
        let endDate = $("#end_date").val();
        var url = '<?= site_url('mf_report/exp_collection_rpt/'); ?>' + '/' + stDate + '/'+ endDate;
        location.replace(url);
    });


    $("#printWindow").click(function () {        
        $(".dataTables_info").css("display", "none"); 
        $(".dataTables_length, .dataTables_filter ").css("display", "none");
        $(".dataTables_paginate ").css("display", "none");
        $("#fileData_filter ").css("display", "none");
        var content = "<html> <br><p style='text-align:center'> <b class='box-title'>Collection list | <?= $this->Settings->site_name ?></b><br><b class='box-title'><p><style> table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td, th {border: 1px solid #dddddd;text-align: left;padding: 2px;} tr:nth-child(even) {background-color: #dddddd;} </style>";
        content += document.getElementById("print_content").innerHTML;
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

<!-- <script>
    $(document).ready(function() {
        $('#purData').dataTable({
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, '<?= lang('all'); ?>']],
            "aaSorting": [[ 2, "desc" ]],
            "iDisplayLength": <?= $Settings->rows_per_page ?>,
            'bProcessing': false,
        });
    });
</script> -->

