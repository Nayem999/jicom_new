<script>
    function paymenttype(n) {
        if (n == 1 || n == 3) {
            return 'In';
        } else {
            return 'Out';
        }
    }

    $(document).ready(function() {

        $('#CuData').dataTable({

            "aLengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, '<?= lang('all'); ?>']
            ],

            "aaSorting": [
                [0, "desc"]
            ],
            "iDisplayLength": <?= $Settings->rows_per_page ?>,

            'bProcessing': true,
            'bServerSide': true,

            'sAjaxSource': '<?= site_url($path) ?>',

            'fnServerData': function(sSource, aoData, fnCallback) {

                aoData.push({

                    "name": "<?= $this->security->get_csrf_token_name() ?>",

                    "value": "<?= $this->security->get_csrf_hash() ?>"

                });

                $.ajax({
                    'dataType': 'json',
                    'type': 'POST',
                    'url': sSource,
                    'data': aoData,
                    'success': fnCallback
                });

            },

            "aoColumns": [{
                "mRender": hrld
            }, null, null, null, {
                "mRender": paymenttype
            }, null, null, null, null, {
                "bSortable": false,
                "bSearchable": false
            }]

        });

    });
</script>

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-header">

                    <h3 class="box-title"><?= lang('list_results'); ?> </h3>

                </div>

                <div class="box-body">
                    <!-- <ul class="nav nav-tabs">
                            <li class="<?php if ($active == 1) {
                                            echo 'active';
                                        } ?>"><a href="<?php echo base_url($tabPath . '/1') ?>"  >Cash in</a></li>
                            <li class="<?php if ($active == 0) {
                                            echo 'active';
                                        } ?>"><a href="<?php echo base_url($tabPath . '/0') ?>"  >Cash Out</a></li>
                      </ul> -->

                    <div id="form" class="panel panel-warning">

                        <div class="panel-body">

                            <?= form_open("bank/allTransaction/".$account_id); ?>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label" for="start_date"><?= lang("start_date"); ?></label>
                                        <?= form_input('start_date', $start_date, 'class="form-control datepicker" id="start_date"'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-4">
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




                    <br /><br />

                    <div class="table-responsive">


                        <table id="CuData" class="table table-bordered table-hover table-striped">

                            <thead>

                                <tr>

                                    <th><?php echo 'Date' ?></th>

                                    <th><?php echo 'Bank Name'; ?></th>

                                    <th><?php echo 'Account Name'; ?></th>

                                    <th><?php echo 'Cheque No'; ?></th>

                                    <th><?php echo 'Transaction Type'; ?></th>

                                    <th><?php echo 'Supplier'; ?></th>

                                    <th><?php echo 'Customer'; ?></th>

                                    <th><?php echo 'Amount'; ?></th>

                                    <th><?php echo 'Type'; ?></th>

                                    <th style="width:100px;"><?php echo $this->lang->line("actions"); ?></th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td colspan="6" class="dataTables_empty"><?= lang('loading_data_from_server') ?></td>

                                </tr>

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

    $(function () {

        $('.datepicker').datetimepicker({

            format: 'YYYY-MM-DD'

        });

    });

</script>