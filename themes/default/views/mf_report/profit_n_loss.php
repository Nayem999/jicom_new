<style type="text/css">.table td:nth-child(3) { text-align: right; }</style>

<section class="content">

    <div class="row">

    <div class="col-12 p-5" style="padding: 15px;">
        <button type="button" style="width:120px; float:right;margin-bottom: 10px;" class="btn btn-default btn-sm toggle_form pull-right" id="printWindow">Print</button>
    </div>
    

        <div class="col-xs-12">
        
            <div class="box box-primary">

                <div class="box-body">  

                    <div class="panel-body">
                        <!-- <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button> -->
                        


                    <div class="table-responsive" id="print_content">

                        <table id="purData" class="table table-striped table-bordered table-condensed table-hover" style="margin-bottom:5px;">

                            <thead>

                            <tr class="active">

                                <th class="col-xs-2">Total Collection</th>

                                <th><?=$profit_n_loss['collection'];?></th>
                                
                            </tr>
                            <tr class="active">

                                <th class="col-xs-2">Total Expenses</th>

                                <th><?=$profit_n_loss['expenses'];?></th>
                                
                            </tr>
                            <tr class="active">

                                <th class="col-xs-2">Balance</th>

                                <th><?=$profit_n_loss['collection']-$profit_n_loss['expenses'];?></th>
                                
                            </tr>

                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>

</section>

<script>
    $("#printWindow").click(function() {
        $(".dataTables_info").css("display", "none");
        $(".dataTables_length, .dataTables_filter ").css("display", "none");

        $(".dataTables_paginate ").css("display", "none");
        $("#fileData_filter ").css("display", "none");
        var content = "<html> <br><img width='800px' src='<?= base_url('themes/default/assets/images/chalan.png'); ?>'><br><p style='text-align:center'>Profit and Loss Report  | <?php echo $this->Settings->site_name; ?> </p><style> table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td, th {border: 1px solid #dddddd;text-align: left;padding: 2px;} tr:nth-child(even) {background-color: #dddddd;} </style>";
        content += document.getElementById("print_content").innerHTML;
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
</script>

