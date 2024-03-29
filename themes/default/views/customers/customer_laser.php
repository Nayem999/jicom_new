<style type="text/css">
    .center {
        text-align: center;
    }
</style>

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title"><?= lang('list_results'); ?></h3><br><br>
                    <b class="box-title">Name : <?php echo $customer[0]->name; ?></b><br>
                    <b class="box-title">Phone : <?php echo $customer[0]->phone; ?></b>
                    <div class="padding">
                        <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button>
                        <button type="button" onclick="printIt()" style="width:120px; float:right; " class="btn btn-default btn-sm toggle_form pull-right" id="daily_sales">Print report</button>
                    </div>
                </div>
                <div class="box-body">

                    <div id="form" class="panel panel-warning">
                        <div class="panel-body">
                            <?= form_open("customers/customer_laser/".$customer_id); ?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label" for="start_date"><?= lang("start_date"); ?></label>

                                        <?= form_input('start_date', $start_date, 'class="form-control datepicker" id="start_date"'); ?>

                                    </div>

                                </div>

                                <div class="col-sm-3">

                                    <div class="form-group">

                                        <label class="control-label" for="end_date"><?= lang("end_date"); ?></label>

                                        <?= form_input('end_date', $end_date, 'class="form-control datepicker" id="end_date"'); ?>

                                    </div>

                                </div>

                                <div class="col-sm-3">
                                    <br>
                                    <button type="submit" class="btn btn-primary"><?= lang("submit"); ?></button>
                                </div>

                            </div>

                            <?= form_close(); ?>

                        </div>

                    </div>









                    <div class="table-responsive">
                        <div class="clearfix"></div>
                    </div>
                    <?php
                    $emptyvalue = 0;
                    $gtotal = 0;
                    $pgtotal = 0;
                    $sgtotal = 0;
                    $i = 0;
                    if ($results != '') {
                        foreach ($results as $key => $part) {
                            $sort[$key] = strtotime($part['datetime']);
                        }
                        array_multisort($sort, SORT_ASC, $results);

                    ?>
                        <div class="table-responsive table" id="page_content">
                            <table id="purData" class="table table-striped table-bordered table-condensed table-hover" style="margin-bottom:5px;">

                                <thead>

                                    <tr class="active">

                                        <th class="col-xs-1">Sl. No</th>
                                        <th class="col-xs-2">Date </th>
                                        <th class="col-xs-2">Description </th>
                                        <th class="col-xs-1">Type</th>
                                        <!-- <th class="col-xs-1">Cheque Number</th>                                     -->
                                        <th class="col-xs-2">Dr</th>
                                        <th class="col-xs-2">Cr</th>
                                        <th class="col-xs-2">Balance</th>
                                        <th class="col-xs-1">Cheque Number</th>

                                    </tr>

                                </thead>

                                <?php //$url = base_url('merge/mergereport'); 
                                ?>

                                <tbody>

                                    <?php
                                    $sales_collection_id = array();
                                    foreach ($results as $key => $value) {
                                        if (($value['type'] == 'sale')) {
                                            if (isset($value['collection_id'])) {
                                                $sales_collection_id[$value['collection_id']] = $value['id'];
                                            }
                                        }
                                    }
                                    // print_r($sales_collection_id);
                                    foreach ($results as $key => $value) {
                                        $i++;
                                        // $this->tec->hrld($value['datetime'])
                                        $gtotal = $gtotal;
                                        echo '<tr>';
                                        echo '<td class="center">' . $i . '</td>';
                                        echo '<td class="center">' . $this->tec->hrld($value['datetime']) . '</td>';
                                        if (($value['type'] == 'sale')) {
                                            echo '<td class="center"> INVOICE NO: ' . $value['id'] . '</td>';
                                        } else {
                                            if (($value['type'] == 'collection')) {
                                                if (array_key_exists($value['id'], $sales_collection_id)) {
                                                    echo '<td class="center"> INVOICE NO: ' . $sales_collection_id[$value['id']] . '</td>';
                                                } else if($value['paid_type']=='Adjustment'){
                                                    echo '<td class="center">'.$value['paid_type'].'</td>';
                                                }else{
                                                    echo '<td class="center"> DC</td>';
                                                }
                                            } else if($value['type'] == 'Sales Return' || $value['type'] == 'Sales Return Amount'){
                                                echo '<td class="center"> INVOICE NO: ' . $value['invoice_id'] . '</td>';
                                            } else {
                                                echo '<td class="center"> </td>';
                                            }
                                        }

                                        if (($value['type'] == 'collection') || ($value['type'] == 'Advance Collection') || ($value['type'] == 'Advance Payment') || $value['type'] == 'Sales Return' || $value['type'] == 'Sales Return Amount') {
                                            if (($value['type'] == 'collection')) {
                                                $url = base_url('collection/view');
                                                if(array_key_exists($value['id'], $sales_collection_id))
                                                {
                                                    echo "<td class=\"center\">
                                                    <a onclick=\"window.open('" . $url . '/' . $value['id'] . "', 'pos_popup', 'scrollbars=yes,status=no,resizable=yes,screenx=0,screeny=0'); return false;\" href='#'>Sales " . $value['type'].'/'.$value['paid_type'] . '</a>
                                                    </td>';
                                                }
                                                else if($value['paid_type']=='Adjustment')
                                                {
                                                    echo "<td class=\"center\">
                                                    <a onclick=\"window.open('" . $url . '/' . $value['id'] . "', 'pos_popup', 'scrollbars=yes,status=no,resizable=yes,screenx=0,screeny=0'); return false;\" href='#'>" . $value['type'].'/'.$value['paid_type'] . '</a>
                                                    </td>';
                                                }
                                                else{
                                                    echo "<td class=\"center\">
                                                <a onclick=\"window.open('" . $url . '/' . $value['id'] . "', 'pos_popup', 'scrollbars=yes,status=no,resizable=yes,screenx=0,screeny=0'); return false;\" href='#'>Due " . $value['type'].'/'.$value['paid_type'] . '</a>
                                                </td>';
                                                }
                                            } else if (($value['type'] == 'Sales Return') || ($value['type'] == 'Sales Return Amount')) {
                                                $url = base_url('salereturn/view');
                                                echo "<td class=\"center\">
                                            <a onclick=\"window.open('" . $url . '/' . $value['id'] . "/1', 'pos_popup', 'scrollbars=yes,status=no,resizable=yes,screenx=0,screeny=0'); return false;\" href='#'>" . $value['type'].'</a>
                                            </td>';
                                            } else {
                                                echo "<td class=\"center\">" . $value['type'] . '</td>';
                                            }
                                        } else {
                                            $url = base_url('pos/view');
                                            echo "<td class=\"center\">
                                            <a onclick=\"window.open('" . $url . '/' . $value['id'] . "', 'pos_popup', 'scrollbars=yes,status=no,resizable=yes,screenx=0,screeny=0'); return false;\" href='#'>" . $value['type'] . '</a>
                                            </td>';
                                            /* echo "<td class=\"center\">
                                            <a onclick=\"window.open('" . $url.'/'.$value['type'].'/'.$value['id'] . "', 'pos_popup', 'scrollbars=yes,status=no,resizable=yes,screenx=0,screeny=0'); return false;\" href='#'>".$value['type'] .'</a>
                                            </td>' ; */
                                        }

                                        if (($value['type'] == 'collection') || ($value['type'] == 'Advance Collection') || ($value['type'] == 'Sales Return')) {;
                                            echo '<td class="center">' . $emptyvalue . '</td>';
                                            $pgtotal = $pgtotal + $value['total'];
                                        }

                                        if (($value['type'] == 'Opening balance') && (1 > $value['total'])) {
                                            echo '<td class="center">' . $emptyvalue . '</td>';
                                        } else {
                                            echo '<td class="center">' .number_format($value['total']). '</td>';
                                        }


                                        if (($value['type'] == 'sale') || ($value['type'] == 'service') || ($value['type'] == 'Opening balance') || ($value['type'] == 'Sales Return Amount')) {
                                            //echo '<td class="center">'.$emptyvalue.'</td>' ;
                                            if (($value['type'] == 'Opening balance') && (1 > $value['total'])) {
                                                echo '<td class="center">' . abs($value['total']) . '</td>';
                                            } else {
                                                echo '<td class="center">' . $emptyvalue . '</td>';
                                            }
                                            $sgtotal = $sgtotal + $value['total'];
                                        }

                                        $gtotal = $sgtotal - $pgtotal;

                                        echo '<td class="center">' . $gtotal . '</td>';

                                        if (isset($value["cheque_number"])) :

                                            echo "<td>" . $value["cheque_number"] . "</td>";

                                        else :
                                            echo "<td></td>";
                                        endif;


                                        echo '</tr>';
                                    }

                                    ?>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td class="center"><?php echo $sgtotal; ?></td>
                                        <td class="center"><?php echo $pgtotal; ?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    <?php } ?>

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
<script>
    $("#daily_sales").click(function() {
        $(".dataTables_info").css("display", "none");
        $(".dataTables_length, .dataTables_filter ").css("display", "none");
        $(".dataTables_paginate ").css("display", "none");
        $("#fileData_filter ").css("display", "none");
        var url = '<?= base_url() ?>';
        var imgurl = url + "/themes/default/assets/images/chalan.png";
        var content = "<html> <br><p style='text-align:center'><div class='inv-logo'> <img src=" + imgurl + " /></div><b class='box-title'>Name : <?= $customer[0]->name; ?></b><br><b class='box-title'>Address : </b><?= $customer[0]->cf1; ?><br><b class='box-title'>Phone : </b><?= $customer[0]->phone; ?><br><b style='text-align:center; font-size: 20px'> Customer Ledger</b><p><style> table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td, th {border: 1px solid #dddddd;text-align: left;padding: 2px;} tr:nth-child(even) {background-color: #dddddd;} </style>";
        content += document.getElementById("page_content").innerHTML;
        content += "</body>";
        content += "</html>";
        var printWin = window.open('', '', 'left=20,top=40,width=700,height=550 ');
        printWin.document.write(content);
        printWin.focus();
        printWin.print();
        printWin.close();
        $(".dataTables_info").css("display", "block");
        $(".dataTables_length, .dataTables_filter ").css("display", "block");
        $(".dataTables_paginate ").css("display", "block");
        $("#fileData_filter ").css("display", "block");
    });

    $("#excelWindow").click(function() {
        var data = '<?= $customer[0]->id; ?>'+'__'+$("#start_date").val()+'__'+$("#end_date").val();
        var url = '<?= site_url('customers/excel_customer_laser/'); ?>' + '/' + data;
        location.replace(url);
    });
</script>