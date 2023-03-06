<style type="text/css">.table td:nth-child(3) { text-align: right; }</style>

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-body">  

                    <div class="panel-body">
                        <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button>
                        <button type="button" style="width:120px; float:right; display:none;" class="btn btn-default btn-sm toggle_form pull-right" id="printWindow">Print</button>
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

                    <div class="table-responsive">

                        <table id="purData" class="table table-striped table-bordered table-condensed table-hover" style="margin-bottom:5px;">

                            <thead>

                            <tr class="active">

                                <th class="col-xs-2"><?= lang('date'); ?></th>

                                <th>From warehouse name</th>
                                
                                <th>To warehouse name</th>

                                <th class="col-xs-1"><?= lang('total'); ?></th> 

                                <th><?= lang('note'); ?></th>

                                <th >Status</th>


                            </tr>

                            </thead>

                            <tbody>

                                <?php
                                    foreach($transfer_list as $key=>$val)
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo $val->date?></td>
                                                <td><?php echo $val->from_warehouse_name?></td>
                                                <td><?php echo $val->to_warehouse_name?></td>
                                                <td><?php echo $val->total?></td>
                                                <td><?php echo $val->note?></td>
                                                <td><?php echo $val->status?></td>
                                            </tr>
                                        <?php
                                    }
                                ?>

                                <!-- <tr>
                                    <td colspan="6" class="dataTables_empty"><?= lang('loading_data_from_server'); ?></td>
                                </tr> -->

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
        var url = '<?= site_url('mf_report/exp_material_transfer_report/'); ?>' + '/' + stDate + '/'+ endDate;
        location.replace(url);
    });

</script>

