<style type="text/css">.table td:nth-child(3) { text-align: right; }</style>

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-body">  

                    <div class="panel-body">
                        <!-- <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button> -->
                        <button type="button" style="width:120px; float:right; display:none;" class="btn btn-default btn-sm toggle_form pull-right" id="printWindow">Print</button>


                    <div class="table-responsive">

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


