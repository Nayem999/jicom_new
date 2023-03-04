<script>

    $(document).ready(function() {

        if (get('remove_spo')) {

            if (get('tspoitems')) {

                remove('tspoitems');

            }

            remove('remove_spo');

        }

        <?php if($this->session->userdata('remove_spo')) { ?>

        if (get('tspoitems')) {

            remove('tspoitems');

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
                                    <th class="col-xs-2"><?= lang('date'); ?></th>
                                    <th>From warehouse name</th>                                
                                    <th>To warehouse name</th>
                                    <th class="col-xs-1"><?= lang('total'); ?></th> 
                                    <th><?= lang('note'); ?></th>
                                    <th >Status</th>
                                    <th style="width:150px;"><?= lang('actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    foreach($transfer_list as $key=>$val)
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo $val->date?></td>
                                                <td><?php echo $val->to_warehouse_name?></td>
                                                <td><?php echo $val->from_warehouse_name?></td>
                                                <td><?php echo number_format($val->total,2)?></td>
                                                <td><?php echo $val->note?></td>
                                                <td><?php echo $val->status?></td>
                                                <td><?php 
                                                    if($val->status=="Pending")
                                                    {
                                                        echo "
                                                        <a href='javascript:;' onClick='approveTransfer(".$val->id.")' title='Status Change' class='tip btn btn-primary btn-xs'><i class='fa fa-university'></i></a>

                                                        <a href='#' onClick=\"MyWindow=window.open('" . site_url('transfers/view/'.$val->id) . "', 'MyWindow','toolbar=no,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,resizable=yes,width=350,height=600'); return false;\" title='View Transfer' class='tip btn btn-primary btn-xs'><i class='fa fa-list'></i></a>

                                                        <a href='#' onClick=\"MyWindow=window.open('" . site_url('transfers/chalan/'.$val->id) . "', 'MyWindow','toolbar=no,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,resizable=yes,width=350,height=600'); return false;\" title='Chalan Transfer' class='tip btn btn-primary btn-xs'><i class='fa fa-list'></i></a>

                                                        <a href='" . site_url('transfers/edit/'.$val->id) . "' title='Edit Transfer' class='tip btn btn-warning btn-xs'><i class='fa fa-file-text-o'></i></a>  

                                                        <a href='" . site_url('transfers/delete/'.$val->id) . "' onClick=\"return confirm('" . lang('alert_x_transfer') . "')\" title='Delete Transfer' class='tip btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a>";

                                                    }
                                                    else
                                                    {
                                                        echo "<a href='#' onClick=\"MyWindow=window.open('" . site_url('transfers/view/'.$val->id) . "', 'MyWindow','toolbar=no,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,resizable=yes,width=350,height=600'); return false;\" title='View Transfer' class='tip btn btn-primary btn-xs'><i class='fa fa-list'></i></a>

                                                        <a href='#' onClick=\"MyWindow=window.open('" . site_url('transfers/chalan/'.$val->id) . "', 'MyWindow','toolbar=no,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,resizable=yes,width=350,height=600'); return false;\" title='Chalan Transfer' class='tip btn btn-primary btn-xs'><i class='fa fa-list'></i></a>";
                                                    }
                                                ?></td>
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

