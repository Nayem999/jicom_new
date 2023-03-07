<script>
    let defaultDataUrl = "<?= site_url('mf_production/get_production') ?>";
    $(document).ready(function() {

        if (get('recipe_items')) {
            if (get('recipe_items')) {
                remove('recipe_items');
            }
            remove('recipe_items');
        }

        let storeId = "<?= isset($_GET['store'])?$_GET['store']:'' ?>";
        console.log(defaultDataUrl +'/'+ storeId);
        
        createTable(defaultDataUrl +'/'+ storeId);

    });

    $(document).on("change","#factory_id",function(){
        let newUrl = '<?= site_url('mf_production') ?>?store='+$(this).val();
        window.location = newUrl;
    })

    function createTable(url){

        $('#purData').dataTable({

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

        'sAjaxSource': url ,

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

        "aoColumns": [null, null, null, null,null,null, null, {
            "bSortable": false,
            "bSearchable": false
        }]

        });
    }
</script>

<style type="text/css">
    .table td:nth-child(3) {
        text-align: right;
    }
</style>



<section class="content">

    <div class="row">

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

            <div class="box box-primary">

                <div class="box-header">

                    <h3 class="box-title"><?= lang('list_results'); ?></h3>

                </div>

                <div class="box-body">
                    <div class="table-responsive" id="page_content">
                        <table id="purData" class="table table-striped table-bordered table-condensed table-hover" style="margin-bottom:5px;">

                            <thead>
                                <tr class="active">
                                    <th class="col-xs-2">Batch No</th>
                                    <th class="col-xs-2">Store Name</th>
                                    <th class="col-xs-2">Recipe Name</th>
                                    <th class="col-xs-3">Product</th>
                                    <th class="col-xs-3">Output</th>
                                    <th class="col-xs-3">Total Cost</th>
                                    <th class="col-xs-2">Status</th>
                                    <th class="col-xs-2">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>

                                    <td colspan="6" class="dataTables_empty"><?= lang('loading_data_from_server'); ?></td>

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