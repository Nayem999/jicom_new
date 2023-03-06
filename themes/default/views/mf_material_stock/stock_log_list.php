
<!-- <script>
    $(document).ready(function () {
        $('#adjustmentTable').dataTable({
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, '<?= lang('all'); ?>']],
            "aaSorting": [[ 0, "desc" ]], "iDisplayLength": <?= $Settings->rows_per_page ?>,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': '<?= site_url('mf_material_stock/get_adjustment_log') ?>',
            'fnServerData': function (sSource, aoData, fnCallback) {
                aoData.push({
                    "name": "<?= $this->security->get_csrf_token_name() ?>",
                    "value": "<?= $this->security->get_csrf_hash() ?>"
                });
                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
            },
            "aoColumns": [null, null, null, {"bSortable":false, "bSearchable": false}]
        });
    });
</script> -->


<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="panel-body">
                        <!-- <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button> -->
                    </div>
                    <div class="table-responsive" id="print_content">
                        <div class="col-xs-12">
                            <table class="table table-bordered" id="adjustmentTable">
                                <thead>
                                    <tr>
                                        <th class="text-center"> Name</th>      
                                        <th class="text-center"> Brand</th>      
                                        <th class="text-center"> Store</th>      
                                        <th class="text-center"> Adj. Qty</th>
                                        <th class="text-center"> Reason</th>
                                        <th class="text-center"> Adj. Qty Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
                                    foreach ($matarial_list as $key => $result) {
                                        ?>
                                        <tr>
                                            <td><?=$result->material_name; ?></td>
                                            <td><?=$result->brand_name; ?></td>
                                            <td><?=$result->store_name; ?></td>
                                            <td><?=$result->adjust_qty.' '.$result->unit_name; ?></td>
                                            <td><?=$result->reason; ?></td>
                                            <td><?=($result->adjust_type==1)?'Increase':'Decrease'; ?></td>
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
<script>
    $("#excelWindow").click(function() {
        var url = '<?= site_url('mf_material_stock/excel_stock_log_list/'); ?>';
        location.replace(url);
    });
</script>