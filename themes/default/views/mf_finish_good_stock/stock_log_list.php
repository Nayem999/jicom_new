

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
                                $setValue =  isset($_GET['store'])?$_GET['store']:'';
                                ?>
                                <?= form_dropdown('factory_id', $fw,$setValue, 'class="form-control select2 tip" id="factory_id" required="required" style="width:100%;"'); ?>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <table class="table table-bordered" id="stockLogList">
                                <thead>
                                    <tr>
                                        <th class="text-center"> Date</th>      
                                        <th class="text-center"> Store</th>      
                                        <th class="text-center"> Name</th>      
                                        <th class="text-center"> Reason</th>          
                                        <th class="text-center"> Adj. Qty Type</th>
                                        <th class="text-center"> Adj. Qty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <?php
                                    foreach ($finish_goods_stock_adjust_list as $key => $result) {
                                        ?>
                                        <tr>
                                            <td><?= date("d-m-Y" , strtotime($result->created_at)) ?></td>
                                            <td><?=$result->product_name; ?></td>
                                            <td><?=$result->note; ?></td>
                                            <td><?=($result->adjust_type==1)?'Increase':'Decrease'; ?></td>
                                            <td><?=$result->quantity; ?></td>
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

    let defaultUrl =  '<?= site_url('mf_finish_good_stock/get_adjustment_log') ?>';

    $(document).ready(function() {
        
        let storeId = "<?= isset($_GET['store'])?$_GET['store']:'' ?>";

        tableData(defaultUrl+'/'+storeId);
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

            "aoColumns": [null, null,  null,null,{"mRender":reason},null]

        });
    }

    function reason(n){
        if(n == 1){
            return "Increase";
        }else{
            return "Decrease"
        }
    }


    $(document).on("change","#factory_id",function(){
        let newUrl = '<?= site_url('mf_finish_good_stock/adjust_log_list') ?>?store='+$(this).val();
        window.location = newUrl;
    })

</script>