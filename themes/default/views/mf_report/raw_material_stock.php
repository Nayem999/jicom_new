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
                                    <?= lang('Brand', 'Brand'); ?>
                                    <?php
                                    $wr[0] = lang("select") . " " . lang("Material Brand");
                                    foreach ($brands as $brand) {
                                        $wr[$brand->id] = $brand->name;
                                    }
                                    ?>
                                    <?= form_dropdown('brand_id', $wr, set_value('brand_id'), 'class="form-control select2 tip" id="brand_id" required="required" style="width:100%;"'); ?>
                                </div>
                            </div>

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
                            <table class="table table-bordered" id="purData">
                                <thead>
                                    <tr>
                                        <th class="text-center"> Name</th>      
                                        <th class="text-center"> Brand</th>      
                                        <th class="text-center"> Store</th>      
                                        <th class="text-center"> Quantity</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    <?php
                                    foreach ($matarial_items as $key => $result) {
                                        ?>
                                        <tr>
                                            <td><?=$result->material_name; ?></td>
                                            <td><?=$result->brand_name; ?></td>
                                            <td><?=$result->store_name; ?></td>
                                            <td><?=$result->quantity.' '.$result->unit_name; ?></td>
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
        let brandId = $("#brand_id").val();
        let factoryId = $("#factory_id").val();
        var url = '<?= site_url('mf_material_stock/excel_stock_list/'); ?>'+ '/'+brandId + '/' + factoryId;
        location.replace(url);
        location.replace(url);
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