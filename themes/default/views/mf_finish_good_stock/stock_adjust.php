
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="table-responsive" id="print_content">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <?= lang('Factory', 'Factory'); ?>
                                <?php
                                $fw[0] = lang("select") . " " . lang("Factory Name");
                                foreach ($factory_stores as $factory) {
                                    $fw[$factory->id] = $factory->name;
                                }
                                $setValue = isset($_GET['store'])?$_GET['store']:'';
                                ?>
                                <?= form_dropdown('factory_id', $fw, $setValue, 'class="form-control select2 tip" id="factory_id" style="width:100%;"'); ?>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <table class="table table-bordered" id="stockLogList">
                                <thead>
                                    <tr>
                                        <th class="text-center"> Product Name</th>           
                                        <th class="text-center"> Store Name</th>           
                                        <th class="text-center"> Quantity</th>
                                        <th class="text-center"> Cost</th>
                                        <th class="text-center"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
                                    foreach ($finish_good_list as $key => $result) {
                                        ?>
                                        <tr>
                                            <td><?=$result->product_name; ?></td>
                                            <td><?=$result->store_name; ?></td>
                                            <td><?=$result->qty; ?></td>
                                            <td><a href='javascript:;' onClick="finishGoodStockAdjust(<?=$result->id;?>)" title='Adjust' class='tip btn btn-primary btn-xs'><i class='fa fa-edit'></i></a></td>
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

    let defaultUrl =  '<?= site_url('mf_finish_good_stock/get_stock_adjust_data') ?>';

    $(document).ready(function() {
        
        let storeId = "<?= isset($_GET['store'])?$_GET['store']:'' ?>";

        tableData(defaultUrl+'/1/'+storeId);
    })


    function tableData(url)  {
        $('#stockLogList').dataTable( {

            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, '<?= lang('all'); ?>']],

            "aaSorting": [[ 1, "asc" ]], "iDisplayLength": <?= $Settings->rows_per_page ?>,

            'bProcessing': true, 'bServerSide': true,

            'sAjaxSource': url,

            'fnServerData': function (sSource, aoData, fnCallback) {

                aoData.push({

                    "name": "<?= $this->security->get_csrf_token_name() ?>",

                    "value": "<?= $this->security->get_csrf_hash() ?>"

                });

                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});

            },

            "aoColumns": [null, null,  null,null,{"bSortable":false, "bSearchable": false}]

        });
    }

    $(document).on("change","#factory_id",function(){
        let newUrl = '<?= site_url('mf_finish_good_stock/stock_adjust') ?>?store='+$(this).val();
        window.location = newUrl;
    })

</script>
