<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="panel-body">
                        <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button>
                    </div>
                    <div class="table-responsive" id="print_content">
                        <div class="col-xs-12">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>

                                        <th class="text-center">SL</th>

                                        <th class="text-center"> Product Name</th>    

                                        <th class="text-center"> Quantity</th>

                                    </tr>
                                    <?php
                                    $i =0 ;
                                    foreach ($finish_good_list as $key => $result) {
                                        ?>
                                        <tr>
                                            <td><?= ++$i ?></td>

                                            <td><?=$result->product_name; ?></td>

                                            <td><?=$result->qty; ?></td>
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
<script type="text/javascript">

    $("#excelWindow").click(function() {
        var url = '<?= site_url('mf_report/exp_finish_goods_stock_report/'); ?>';
        location.replace(url);
    });
</script>