
<section class="content">

	<div class="row">

		<div class="col-xs-12">

			<div class="box box-primary">

				<div class="box-header">

					<h3 class="box-title"><?= lang('enter_info'); ?></h3>

				</div>

				<div class="box-body">

					<?php echo form_open($action);?>

					<div class="col-md-6">
						<?php if($this->session->userdata('store_id')==0){ ?>
						<div class="form-group">
	                        <?= lang('From Warehouse','From Warehouse'); ?>
	                        <?php
	                        $wr[''] = lang("select")." ".lang("warehouse");
	                        foreach($warehouses as $warehouse) {
	                            $wr[$warehouse->id] = $warehouse->name;
	                        }
	                        ?>
	                        <?= form_dropdown('warehouse', $wr, isset($bank)?$bank->store_id:0, 'class="form-control select2 tip" id="from-warehouse" required="required" style="width:100%;"'); ?> 
						</div>
						<?php } ?>
                     
                        <div class="form-group">

							<label class="control-label" for="bank_name">Bank Name</label>

							<?= form_input('bank_name', set_value('bank_name',isset($bank)?$bank->bank_name:null), 'class="form-control input-sm" id="bank_name"'); ?>

						</div>
                        
                        
                        <div class="form-group">

							<label class="control-label" for="bank_name">Account Name</label>

							<?= form_input('account_name', set_value('account_name',isset($bank)?$bank->account_name:null), 'class="form-control input-sm" id="account_name"'); ?>

						</div>

                        
                        
                        <div class="form-group">

							<label class="control-label" for="account_no">Account No</label>

							<?= form_input('account_no', set_value('account_no', isset($bank)?$bank->account_no:null), 'class="form-control input-sm" id="account_no"'); ?>

						</div>


						<div class="form-group">

							<label class="control-label" for="current_amount">Current Amount</label>
							<?php isset($bank)? $disabled='disabled':$disabled='';?>
							<?= form_input('current_amount', set_value('current_amount' , isset($bank)?$bank->current_amount:0), "class='form-control input-sm' id='current_amount' $disabled");?>

						</div>




						<div class="form-group">

							<?php echo form_submit('add_bank','Save', 'class="btn btn-primary"');?>

						</div>

					</div>

					<?php echo form_close();?>

				</div>

			</div>

		</div>

	</div>

</section>

<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/moment.min.js" type="text/javascript"></script>

<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

<script type="text/javascript">

    $(function () {

        $('.datetimepicker').datetimepicker({

            format: 'YYYY-MM-DD'

        });

    });


</script>