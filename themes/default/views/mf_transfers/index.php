<script>

    $(document).ready(function() {

        if (get('remove_spo')) {

            if (get('mf_tspoitems')) {

                remove('mf_tspoitems');

            }

            remove('remove_spo');

        }

        <?php if($this->session->userdata('remove_spo')) { ?>

        if (get('mf_tspoitems')) {

            remove('mf_tspoitems');

        }

        <?php $this->tec->unset_data('remove_spo'); } ?>

        /* function attach(x) {

            if(x !== null) {

                return '<a href="<?=base_url();?>uploads/'+x+'" target="_blank" class="btn btn-primary btn-block btn-xs"><i class="fa fa-chain"></i></a>';

            }

            return '';

        }

        $('#purData').dataTable({

            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, '<?= lang('all'); ?>']],

            "aaSorting": [[ 0, "desc" ]], "iDisplayLength": <?= $Settings->rows_per_page ?>,

            'bProcessing': true, 'bServerSide': true,

            'sAjaxSource': '<?= site_url('transfers/get_transfers') ?>',

            'fnServerData': function (sSource, aoData, fnCallback) {

                aoData.push({

                    "name": "<?= $this->security->get_csrf_token_name() ?>",

                    "value": "<?= $this->security->get_csrf_hash() ?>"

                });

                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});

            },

            "aoColumns": [{"mRender":hrld}, null,  null, {"mRender":currencyFormat}, null, {"mRender":attach, "bSortable":false, "bSearchable": false},{"bSortable":false, "bSearchable": false}]

        }); */

    });

</script>

<style type="text/css">.table td:nth-child(3) { text-align: right; }</style>

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-header">

                    <h3 class="box-title"><?= lang('list_results'); ?></h3>

                </div>

                <div class="box-body">  
                    <div class="table-responsive">

                        <table id="purData" class="table table-striped table-bordered table-condensed table-hover" style="margin-bottom:5px;">

                            <thead>
                                <tr class="active">
                                    <th ><?= lang('date'); ?></th>
                                    <!-- <th >Material Name</th> -->
                                    <th>From Factory</th>                                
                                    <th>To Factory</th>
                                    <!-- <th >QTY</th>  -->
                                    <th >Action</th> 
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    foreach($transfer_list as $key=>$val)
                                    {
                                        ?>
                                            <tr>
                                                <td><?= $this->tec->hrld($val->date) ?></td>
                                                <!-- <td><?php //$val->material_name ?></td> -->
                                                <td><?= $val->from_factory_name ?></td>
                                                <td><?= $val->to_factory_name ?></td>
                                                <!-- <td><?php //= $val->qty ?> <?= $val->unit_name ? "( " .$val->unit_name ." )" :'' ?></td> -->
                                                <td><?php echo "<a href='#' onClick=\"MyWindow=window.open('" . site_url('mf_transfers/view/'.$val->id.'/'.$val->from .'/'.$val->to) . "', 'MyWindow','toolbar=no,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,resizable=yes,width=350,height=600'); return false;\" title='View Transfer' class='tip btn btn-primary btn-xs'><i class='fa fa-list'></i></a>" ?></td>
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

