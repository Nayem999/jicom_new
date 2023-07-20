<style type="text/css">
    .error {
        color: red;
    }
</style>
<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="posModal" data-easein="flipYIn" class="modal posModal in" style="display: block; padding-left: 17px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><?php echo $title; ?></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group" id="some_div" >
                            <?php
                            $errorCount = 0;
                            $i = 0;
                            // print_r($packaging_info);die();
                            foreach ($packaging_info as $key => $value) {
                                if ($value->quantity > 0) {
                                    $i++;
                                    echo '<div class="form-group"><label class="control-label"> ' . $value->name . ' (' . $value->quantity . ') :  </label>';
                                    echo '<input type="text" id="id_' . $prod_id . '_' . $value->packaging_id . '" onkeyup="checkDB('.$value->packaging_id.','.$prod_id.')"  name="prod_id_' . $prod_id . '[]" >
                                    <input type="hidden" name="packaging_id[]" value="' . $value->packaging_id . '">
                                    <input type="hidden" id="stock_qty_'.$value->packaging_id.'" value="' . $value->quantity . '">
                                    <a id="erro_' . $i . '" class="error"></a><br>';
                                    echo '</div>';
                                }
                            }

                            ?>
                            <input type="hidden" id="arry" name="arry" value="">
                            <input type="hidden" id="prod_id" name="prod_id" value="<?= $prod_id ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p id="erro_all"></p>
                        <input type="submit" id="submit" class="btn btn-primary" onclick="set_package('<?php echo $prod_id ?>')" value="Save" name="add_payment">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var prod_id = $("#prod_id").val();

    function set_package(prod_id) {
        var package_id = '';
        var arry = {};

        $('input[name^="prod_id_' + prod_id + '"]').each(function(index) {
            // package_id = $('input[name="packaging_id\\[' + index + '\\]"]').val();
            var package_id = $(this).siblings('input[name^="packaging_id"]').val();
            arry[package_id] = $(this).val();
            // console.log('package_id',package_id)
        });
        $("#pak_qty_" + prod_id).val(JSON.stringify(arry));
        $(".posModal").hide();
    }

    function checkDB(id,prod_id) {
        var stock_qty=parseInt($("#stock_qty_" + id).val());
        var current_qty=parseInt($("#id_"+prod_id+"_"+id).val());
        if(current_qty>stock_qty)
        {
            alert("Current Quantity Over Stock Quantity");
            $("#submit").hide();
        }
        else
        {
            $("#submit").show();
        }
    }

    $(document).ready(function() {
        var prv_info = $("#pak_qty_" + prod_id).val();
        try {
            prv_info = JSON.parse(prv_info);
            console.log(prv_info);
        } catch (error) {
            console.error("Error parsing JSON: " + error);
        }

        for (var key in prv_info) {
            if (prv_info.hasOwnProperty(key)) {
                // console.log(key + " : " + prv_info[key]);
                $("#id_"+prod_id+"_"+key).val(prv_info[key]);
            }
        }
    });
</script>