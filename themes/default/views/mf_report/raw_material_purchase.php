<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="panel-body">
                        <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button>
                        <button type="button" style="width:120px; float:right;" class="btn btn-default btn-sm toggle_form pull-right" id="daily_sales">Print</button>
                        <?= form_open(""); ?>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <?= lang('Factory', 'Factory'); ?>
                                    <?php
                                    $fw[0] = lang("select") . " " . lang("Factory Name");
                                    foreach ($factory_stores as $factory) {
                                        $fw[$factory->id] = $factory->name;
                                    }
                                    ?>
                                    <?= form_dropdown('factory_id', $fw, set_value('factory_id'), 'class="form-control select2 tip" id="factory_id" required="required" style="width:100%;"'); ?>
                                </div>
                            </div>

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

                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary"><?= lang("submit"); ?></button>
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>

                    <?php
                        $CI =& get_instance();

                        $CI->load->model('mf_purchases_model');

                        $purchaseModel =  new mf_purchases_model();

                        
                    ?>

                    <div class="table-responsive" id="page_content">
                        <div class="col-xs-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="active">

                                        <th> SL </th>

                                        <th> Date </th>

                                        <th> Material Name </th>

                                        <th> S.Name </th>

                                        <th> Store Name </th>

                                        <th> Total </th>

                                        <th> Paid Amount </th>	

                                        <th> Due Amount </th>

                                    </tr>
                                </thead>
                                </tbody>
                                    <?php
                                    
                                        if(count($materials) > 0):
                                        $i=0;
                                        foreach ($materials as $key => $material):

                                            $productsName =  $purchaseModel->getAllPurchaseItems($material->id);

                                            $names = '';
                                            
                                            if(count($productsName) > 0):

                                                foreach ($productsName as $key => $pname):

                                                    $names .=$pname->product_name .', ';

                                                endforeach;
                                            endif;
                                        ?>
                                            <tr style="">

                                                 <td><?= ++$i ?></td>

                                                <td><?= date("d-m-Y", strtotime($material->date)) ?></td>

                                                <td><?= substr($names, 0, -2); ?></td>
                                                
                                                <td><?= $material->supplier_name; ?></td>

                                                <td><?= $material->store_name; ?></td>

                                                <td><?= $material->total; ?></td>

                                                <td><?= $material->paid ?> </td>

                                                <td><?= $material->deu ?> </td>

                                            </tr>
                                    <?php
                                        endforeach;
                                        endif;
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
<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $('.datepicker').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
</script>
<script type="text/javascript">

    $("#excelWindow").click(function() {
        let stDate = $("#start_date").val();
        let endDate = $("#end_date").val();
        let factoryId = $("#factory_id").val();
        var url = '<?= site_url('mf_report/exp_material_purchase_report/'); ?>' + '/' + stDate + '/'+ endDate + '/' + factoryId;
        location.replace(url);
    });

    $("#daily_sales").click(function () {        
        $(".dataTables_info").css("display", "none"); 
        $(".dataTables_length, .dataTables_filter ").css("display", "none");
        $(".dataTables_paginate ").css("display", "none");
        $("#fileData_filter ").css("display", "none");
        var content = "<html> <br><p style='text-align:center'> <b class='box-title'>Raw Material Purchase list | <?= $this->Settings->site_name ?></b><br><b class='box-title'><p><style> table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td, th {border: 1px solid #dddddd;text-align: left;padding: 2px;} tr:nth-child(even) {background-color: #dddddd;} </style>";
        content += document.getElementById("page_content").innerHTML;
        content += "</body>";
        content += "</html>";
        var printWin = window.open('','','left=20,top=40,width=700,height=550 '); 
        printWin.document.write(content);     
        printWin.focus();
        printWin.print();
        printWin.close();
        $(".dataTables_info").css("display", "block"); 
        $(".dataTables_length, .dataTables_filter ").css("display", "block");
        $(".dataTables_paginate ").css("display", "block");
        $("#fileData_filter ").css("display", "block");   
    });

</script>