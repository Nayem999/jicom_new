
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="panel-body">
                        <!-- <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button> -->
                    </div>
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
                                <?= form_dropdown('factory_id', $fw, $setValue, 'class="form-control select2 tip" id="factory_id" required="required" style="width:100%;"'); ?>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <table class="table table-bordered" id="finishGoods">
                                <thead>
                                    <tr>         
                                        <th class="text-center"> Product Name</th>           
                                        <th class="text-center"> Store Name</th>           
                                        <th class="text-center"> Quantity</th>
                                        <th class="text-center"> Packaging Stock</th>
                                        <th class="text-center"> Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <?php
                                    $i = 0;
                                    foreach ($finish_good_list as $key => $result) {
                                        ?>
                                        <tr> 
                                            <td><?=$result->product_name; ?></td>
                                            <td><?=$result->store_name; ?></td>
                                            <td><?=$result->qty; ?></td>
                                            <td><?=$result->packaging_details; ?></td>
                                            <td><?=$result->cost; ?></td>
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

<!-- <script>
    $("#excelWindow").click(function() {
        var url = '<?= site_url('mf_material_stock/excel_stock_list/'); ?>';
        location.replace(url);
    });
</script> -->


<script>
    let defaultUrl =  '<?= site_url('mf_finish_good_stock/get_stock_adjust_data/0') ?>';


    $(document).ready(function() {
        
        let storeId = "<?= isset($_GET['store'])?$_GET['store']:'' ?>";

        tableData(defaultUrl+'/'+storeId);
    })

    function tableData(url)  {
        $('#finishGoods').dataTable( {

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

            "aoColumns": [null, null,  null,null,null]

        });
    }

    $(document).on("change","#factory_id",function(){
        let newUrl = '<?= site_url('mf_finish_good_stock') ?>?store='+$(this).val();
        window.location = newUrl;
    })

</script>