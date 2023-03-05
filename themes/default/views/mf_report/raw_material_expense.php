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
                        <div class="col-xs-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="active">

                                        <th> SL </th>

                                        <th> Date </th>

                                        <th> Reference  </th>

                                        <th> Amount  </th>

                                        <th> Note  </th>

                                        <th> Category </th>

                                        <th> Paid By </th>	

                                    </tr>
                                </thead>
                                </tbody>
                                    <?php
                                    
                                        if(count($items) > 0):
                                        $i=0;
                                        foreach ($items as $key => $material):
                                        ?>
                                            <tr style="">

                                                <td><?= ++$i ?></td>

                                                <td><?= $material->date; ?></td>

                                                <td><?= $material->ref; ?></td>

                                                <td><?= $material->amount; ?></td>

                                                <td><?= $material->note ?> </td>

                                                <td><?= $material->cat_name ?> </td>

                                                <td><?= $material->paid_by ?> </td>

                                            </tr>
                                    <?php
                                        endforeach;
                                        endif;
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
        let stDate = $("#start_date").val();
        let endDate = $("#end_date").val();
        let factoryId = $("#factory_id").val();
        var url = '<?= site_url('mf_report/exp_material_purchase_report/'); ?>' + '/' + stDate + '/'+ endDate + '/' + factoryId;
        location.replace(url);
    });
</script>