<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="posModal" data-easein="flipYIn" class="modal posModal in" style="display: block; padding-left: 17px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php //print_r($info); 
            ?>
            <div class="modal-header">
                <button type="button" onclick="hide()" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i> </button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $title; ?></h4>
            </div>
            <?php echo form_open('transfers/approve/' . $id); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-8">

                        <div class="form-group">
                            <label>Status:</label> <br>
                            <input id="paid_by" name="status" type="radio" checked='checked' value='Approved' />
                            <label for="paid_by" class="">Approved</label>



                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Save" name="add_status">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php echo form_close(); ?>
</div>