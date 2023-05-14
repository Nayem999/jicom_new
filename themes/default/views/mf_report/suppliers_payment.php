<style type="text/css">.table td:nth-child(3) { text-align: right; }</style>

<section class="content">

    <div class="row">

        <div class="col-sm-3">
            <div class="form-group">
                <?= lang('Supplier', 'Supplier'); ?>
                <?php
                    $fw[0] = lang("select") . " " . lang("Supplier");
                    foreach ($suppliers as $supplier) {
                        $fw[$supplier->id] = $supplier->name;
                    }
                    $selectSupplier = isset($_GET['supplier'])?$_GET['supplier']:'';
                ?>
                <?= form_dropdown('supplier_id', $fw, $selectSupplier, 'class="form-control select2 tip" id="supplier_id" required="required" style="width:100%;"'); ?>
            </div>
        </div>

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-body">  

                    <div class="panel-body">
                        <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button>
                        <button type="button" style="width:120px; float:right;" class="btn btn-default btn-sm toggle_form pull-right" id="printWindow">Print</button>
                    </div>

                    <div class="table-responsive" id="print_content">

                    <table class="table table-bordered">
                            <thead>

                            <tr class="active">

                                <th class="col-xs-2">Name</th>

                                <th class="col-xs-2">Phone</th>

                                <th class="col-xs-2">Today Purchases</th>

                                <th class="col-xs-2">Today Paid </th>

                                <th class="col-xs-2">Total Purchases </th>

                                <th class="col-xs-2">Total Paid </th>

                                <th class="col-xs-2">Total Balance </th>
                                
                            </tr>

                            </thead>

                            <?php 

                                $CI =& get_instance();

                                $CI->load->model('mf_payment_model');

                                $payModel = new mf_payment_model();
                                
                                $today = date("y-m-d");
                            ?>

                            <tbody>
                            <?php
                                if($suppliers):

                                if(count($suppliers) > 0):

                                foreach ($suppliers as $key => $supplier):

                                    $id = $supplier->id;

                                    $todayTotalPurchases = $payModel->purchasesAmount('total',$id,$today);

                                    $todayPaidpurchases = $payModel->purchasesAmount('paid',$id,$today);

                                    $todayDeupurchases = $payModel->purchasesAmount('deu',$id,$today);

                                    $todayAdAmount = $payModel->advPayAmount('adv_amount',$id,$today);

                                    $totalAdAmount = $payModel->advPayAmount('adv_amount',$id);

                                    $total = $deu = $paid = 0;

                                    $suppliersDetails = $payModel->getSupplierByID($id);
                                    
                                    if(is_array($suppliersDetails)):

                                        foreach ($suppliersDetails as $key => $value):

                                            $total = $total+ $value->total;

                                            $deu = $deu+ $value->deu;

                                            $paid = $paid+ $value->paid;

                                        endforeach;

                                    endif;

                                    $tpaid = $paid + $totalAdAmount;

                                    $todpuPaid = $todayPaidpurchases+$todayAdAmount;
                            ?>

                                <tr>
                                    <td><?=$supplier->name?></td>

                                    <td><?=$supplier->phone?></td>

                                    <td><?= $todayTotalPurchases ?></td>

                                    <td><?= $todpuPaid; ?></td>

                                    <td><?= $total ?></td>

                                    <td><?= $tpaid ?></td>

                                    <td><?= $total-$tpaid ?></td>

                                </tr>
                            <?php
                                endforeach;
                                else:
                            ?>
                                    <tr>No data found</tr>
                            <?php
                                endif;
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

</section>

<script type="text/javascript">

    $("#excelWindow").click(function() {

        let selectSupplier = "<?= isset($_GET['supplier'])?$_GET['supplier']:''; ?>"

        var url = '<?= site_url('mf_report/exp_supplier_payment_report/'); ?>/'+ selectSupplier;

        location.replace(url);

    });

    $(document).on("change","#supplier_id",function(){

        let newUrl = '<?= site_url('mf_report/suppliers_payment') ?>?supplier='+$(this).val();

        window.location = newUrl;
    })


    $("#printWindow").click(function () {        
        $(".dataTables_info").css("display", "none"); 
        $(".dataTables_length, .dataTables_filter ").css("display", "none");
        $(".dataTables_paginate ").css("display", "none");
        $("#fileData_filter ").css("display", "none");
        var content = "<html> <br><p style='text-align:center'> <b class='box-title'>Suppliers Payment list | <?= $this->Settings->site_name ?></b><br><b class='box-title'><p><style> table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td, th {border: 1px solid #dddddd;text-align: left;padding: 2px;} tr:nth-child(even) {background-color: #dddddd;} </style>";
        content += document.getElementById("print_content").innerHTML;
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



