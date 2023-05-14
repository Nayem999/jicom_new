<style type="text/css">.table td:nth-child(3) { text-align: right; }</style>

<section class="content">

    <div class="row">
        <form>
            <div class="col-sm-3">
                <div class="form-group">
                    <?= lang('Packaging Material', 'Packaging Material'); ?>
                    <?php
                        $fw[0] = lang("select") . " " . lang("Packaging Materials");
                        foreach ($packaging_materials as $pk_material) {
                            $fw[$pk_material->id] = $pk_material->name;
                        }
                        $selectMaterial = isset($_GET['select_material'])?$_GET['select_material']:'';
                    ?>
                    <?= form_dropdown('select_material', $fw, $selectMaterial, 'class="form-control select2 tip" id="select_material" required="required" style="width:100%;"'); ?>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <?= lang('Choose Month', 'Choose Month'); ?>
                    <?php
                        $get_month = isset($_GET['select_month'])?$_GET['select_month']:'';
                    ?>
                    <?= form_dropdown('select_month', $all_month, $get_month, 'class="form-control select2 tip" id="select_month" required="required" style="width:100%;"'); ?>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <?= lang('Choose Year', 'Choose Year'); ?>
                    <?php
                        $get_year = isset($_GET['select_year'])?$_GET['select_year']:'';

                        $years = [];
                        foreach ($year_range as $key => $value) {
                            $years[$value] = $value;
                        }

                    ?>
                    <?= form_dropdown('select_year', $years, $get_year, 'class="form-control select2 tip" id="select_year" required="required" style="width:100%;"'); ?>
                </div>
            </div>
            
            <div class="col-sm-3">
                <label for=""></label>
                <div class="form-group">
                    <?= form_submit('submit', lang('Submit'), 'class="btn btn-primary" id="submit"'); ?>
                </div>
            </div>


        </form>
        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-body">  

                    <div class="panel-body">
                        <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button>
                        <!-- <button type="button" style="width:120px; float:right;" class="btn btn-default btn-sm toggle_form pull-right" id="printWindow">Print</button> -->
                    </div>

                    <div class="table-responsive" id="print_content">

                    <table class="table table-bordered">
                            <thead>

                            <tr class="active">

                                <th class="col-xs-2">Date</th>

                                <th class="col-xs-2">Add</th>

                                <th class="col-xs-2">B/F</th>

                                <th class="col-xs-2">Total</th>

                                <th class="col-xs-2">To Sale </th>

                                <th class="col-xs-2"> Balance </th>
                                
                            </tr>

                            </thead>

                            <tbody>

                            <?php
                            if(count($packaging_log)>0):
                             foreach ($packaging_log as $key => $value): ?>

                                <tr>
                                    <td><?=$key?></td>

                                    <td><?= $value["carry"]? '' :  $value["add_qty"] ?></td>

                                    <td><?=$value["from_qty"]?></td>

                                    <td><?=$value["from_qty"]?></td>

                                    <td><?= $value["carry"]? '' : $value["to_sale"] ?></td>

                                    <td><?=$value["balance"]?></td>

                                </tr>

                            <?php
                            endforeach;
                            else:  
                             
                             ?>
                                <tr>
                                    <td collapse="5" >    
                                        No data found
                                    </td>
                                </tr>
                             <?php endif;?>

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

        let selectMaterial = $("#select_material").val();
        let selectMonth = $("#select_month").val();
        let selectYear = $("#select_year").val();

        if(selectMaterial == false || selectMonth == '' || selectYear == ''){
            alert("Please Choose All Option");
            return false;
        }

        var url = '<?= site_url('mf_report/exp_packaging_material/'); ?>?select_material='+ selectMaterial +"&select_month="+selectMonth + "&select_year=" + selectYear;

        location.replace(url);

    });

    $(document).on("change","#download_report",function(){

        let newUrl = '<?= site_url('mf_report/exc_packaging_material') ?>?supplier='+$(this).val();

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



