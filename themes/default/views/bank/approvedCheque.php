
<script>

    function paymenttype(n) {
        if(n==1){
            return 'Customer Collection';
        }else if(n==2){
            return 'Supplier Payment';
        }else{
            return '';
        }
    }

    $(document).ready(function () {

        $('#CuData').dataTable({

            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, '<?= lang('all'); ?>']],

            "aaSorting": [[ 0, "desc" ]], "iDisplayLength": <?= $Settings->rows_per_page ?>,

            'bProcessing': true, 'bServerSide': true,

            'sAjaxSource': '<?= site_url('bank/get_approvedCheque') ?>',

            'fnServerData': function (sSource, aoData, fnCallback) {

                aoData.push({

                    "name": "<?= $this->security->get_csrf_token_name() ?>",

                    "value": "<?= $this->security->get_csrf_hash() ?>"

                });

                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});

            },

             "aoColumns": [{"mRender":hrld},null,null, null, {"mRender": paymenttype}, null, null,null,null, {"bSortable":false, "bSearchable": false}]

        });

    });

</script>

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-header">

                    <h3 class="box-title"><?= lang('list_results'); ?></h3>

                </div>

                <div class="box-body">

                    <div class="table-responsive">

                    <table id="CuData" class="table table-bordered table-hover table-striped">

                        <thead>

                        <tr>
                             <th><?php echo 'Date & Time' ; ?></th>        
                            <th><?php echo 'Bank Name'; ?></th>
                            <th><?php echo 'Account Name'; ?></th>
                            <th><?php echo 'Cheque No'; ?></th>                            
                            <th><?php echo 'Payment Type'; ?></th>                            
                            <th><?php echo 'Supplier Name'; ?></th>                            
                            <th><?php echo 'Customer Name'; ?></th>                            
                            <th><?php echo 'Amount' ?></th>
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



