
<script>
    $(document).ready(function () {
        $('#stockTable').dataTable({
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, '<?= lang('all'); ?>']],
            "aaSorting": [[ 0, "desc" ]], "iDisplayLength": <?= $Settings->rows_per_page ?>,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': '<?= site_url('mf_material_stock_packaging/get_all_material_stock') ?>?action=1',
            'fnServerData': function (sSource, aoData, fnCallback) {
                aoData.push({
                    "name": "<?= $this->security->get_csrf_token_name() ?>",
                    "value": "<?= $this->security->get_csrf_hash() ?>"
                });
                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
            },
            // "aoColumns": [null, null, null,null,null,null]
            "aoColumns": [null, null, null,null, null,null,{"bSortable":false, "bSearchable": false}]
        });
    });
</script>

<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="table-responsive" id="print_content">
                        <div class="col-xs-12">
                            <table class="table table-bordered" id="stockTable">
                                <thead>
                                    <tr>
                                        <th class="text-center"> Name</th>      
                                        <th class="text-center"> Brand</th>      
                                        <th class="text-center"> Store</th>      
                                        <th class="text-center"> Quantity</th>
                                        <th class="text-center"> Unit Cost</th>
                                        <th class="text-center"> Unit</th>
                                        <th class="text-center"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
                                    /* foreach ($matarial_list as $key => $result) {
                                        ?>
                                        <tr>
                                            <td><?=$result->material_name; ?></td>
                                            <td><?=$result->brand_name; ?></td>
                                            <td><?=$result->store_name; ?></td>
                                            <td><?=$result->quantity.' '.$result->unit_name; ?></td>
                                            <!-- <td><?php //$result->reason ?></td> -->
                                            <td><a href='javascript:;' onClick="stockAdjustPackaging(<?=$result->id;?>)" title='Adjust' class='tip btn btn-primary btn-xs'><i class='fa fa-edit'></i></a></td>
                                        </tr>
                                        <?php
                                    } */
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
