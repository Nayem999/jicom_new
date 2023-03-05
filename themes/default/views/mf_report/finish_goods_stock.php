<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="panel-body">
                        <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button>
                        <?= form_open(""); ?>
                        <div class="row">

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <?= lang('Factory', 'Factory'); ?>
                                    <?php
                                    $fw[0] = lang("select") . " " . lang("Factory Name");
                                    foreach ($factory_stores as $factory) {
                                        $fw[$factory->id] = $factory->name;
                                    }
                                    ?>
                                    <?= form_dropdown('factory_id', $fw, set_value('factory_id'), 'class="form-control select2 tip" id="factory_id" required="required" style="width:100%;"'); ?>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary"><?= lang("submit"); ?></button>
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>
                    <div class="table-responsive" id="print_content">
                        <div class="col-xs-12">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>

                                        <th class="text-center">SL</th>

                                        <th class="text-center"> Product Name</th>   

                                        <th class="text-center"> Store Name</th>    

                                        <th class="text-center"> Quantity</th>

                                    </tr>
                                    <?php
                                    $i =0 ;
                                    foreach ($finish_good_list as $key => $result) {
                                        ?>
                                        <tr>
                                            <td><?= ++$i ?></td>

                                            <td><?=$result->product_name; ?></td>

                                            <td><?=$result->store_name; ?></td>

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
        let factoryId = $("#factory_id").val();
        var url = '<?= site_url('mf_report/exp_finish_goods_stock_report/'); ?>/'+ factoryId ;
        location.replace(url);
    });
</script>