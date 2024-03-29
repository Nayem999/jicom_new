<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="posModal" 
data-easein="flipYIn" class="modal posModal in" style="display: block; padding-left: 17px;">
<div class="modal-dialog modal-lg">


    <div class="modal-content" >
		

        <div class="modal-header">

            <button aria-hidden="true" onclick="hide()" data-dismiss="modal" class="close" type="button"><i class="fa fa-times"></i></button>

            <h4 id="myModalLabel" class="modal-title">Transaction
             ( <?php echo $bank_info->bank_name.', '.$bank_info->account_name.', '.$bank_info->account_no  ?>)</h4>

        </div>

        <div class="modal-body">

            <div class="table-responsive">
           				 <!-- <ul class="nav nav-tabs">
                            <li id="cashIn" class="active"><a href="javascript:;" onclick="cashIn()" >Cash in</a></li>
                            <li id="cashOut"><a href="javascript:;" onclick="cashOut()" >Cash Out</a></li>
                            
                        </ul> -->

                <table cellspacing="0" cellpadding="0" border="0" class="table table-bordered table-hover table-striped" id="CompTable">

                    <thead>

                    <tr>
                        <th>Date</th>
                        <th >Bank Name</th>
                        <th >Account Name</th>
                        <th >Cheque No</th>
                        <th >Store name</th>
                        <th >Transaction Type</th>
                        <th >Supplier name</th>
                        <th >Customer name</th>
                        <th >Amount</th>
                        <th >Action</th>
                    </tr>

                    </thead>

                    <tbody>
                    <?php if(isset($list) && (count($list) > 0) ){ 
                            $i=0;
							foreach($list as $value){
							$i++;
							?>

                            <!-- <tr class="row<?php echo $i ; if($value->tran_type ==0){ echo ' Cash_Out displyOut' ; }else{ echo ' Cash_In ';}  ?>"> -->
                            <tr class="row<?php echo $i ?>">
                            
                                <td><?= date("d-m-Y" ,strtotime($value->tran_date)) ?></td>

                                <td><?= $value->b_name ?></td>

                                <td><?= $value->ac_name ?></td>

                                <td><?= $value->cheque_no ?></td>

                                <td><?= $value->store_name ?></td>

                                <td><?php if($value->payment_type==1 || $value->payment_type==3){echo "In";}else{echo "Out";} ?></td>
                                <td><?= $value->supplier ?></td>

                                <td><?= $value->customer ?></td>

                                <td><?= $value->amount ?></td>
                                
                                <td>
                                <a class="tip" data-toggle="ajax" onclick="editTransaction(<?php echo $value->tid ; ?>)" href="javascript:;">
                                	<i class="fa fa-edit"></i>
                                </a>
                                <a class="tip" onclick="return confirm('You are going to delete Transaction, please click ok to delete.')" href="<?php echo site_url('bank/deleteTransaction/'.$value->tid); ?>" title="Delete Transaction">
                                <i class="fa fa-trash-o"></i>
                                </a>
                                
                                </td>

                            </tr>
                            
							<?php 
							 }
							}?>
                        
                    </tbody>

                </table>
                <?php if(isset($list) && (count($list) > 0) ){ ?>
                <div class="modal-footer">
                	<a class="btn btn-primary" 
                    href="<?php echo base_url('bank/allTransaction/'.$bank_info->bank_account_id) ; ?>" >All Transaction</a>
                </div>
				<?php } ?>
            </div>

        </div>

    </div>

</div>

</div>
</div>
<script>
function cashIn(){
	$( "#cashIn" ).addClass( "active" );
	$( "#cashOut" ).removeClass( "active" );
	$( ".Cash_Out" ).addClass( "displyOut" );
	$( ".Cash_In" ).removeClass( "displyOut" );
	
	}
function cashOut(){
	$( "#cashOut" ).addClass( "active" );
	$( "#cashIn" ).removeClass( "active" );
	$( ".Cash_In" ).addClass( "displyOut" );
	$( ".Cash_Out" ).removeClass( "displyOut" );
	
	}
</script>
<style>
 
  .displyOut {
	 display:none;
	}
</style>
