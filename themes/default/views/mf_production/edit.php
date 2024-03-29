<?php (defined('BASEPATH')) or exit('No direct script access allowed'); ?>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><?= lang('update_info'); ?></h3>
                </div>
                <div class="box-body">
                    <div class="col-lg-12">
                        <?php echo form_open_multipart("mf_production/edit/" . $production_mst->id, 'class="validation edit-po-form"'); ?>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <?= lang('batch_no', 'batch_no'); ?>
                                    <?= form_input('batch_no', set_value('batch_no', $production_mst->batch_no), 'class="form-control tip" id="batch_no" required="required" readonly'); ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <?= lang('recipe', 'recipe'); ?>
                                    <?= form_input('recipe_name', set_value('recipe_name', $production_mst->recipe_name), 'class="form-control tip" id="recipe_name" required="required" readonly'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Target Quantity</label>
                                    <?php
                                    $ur[''] = lang("Select");
                                    foreach ($all_uom as $all_uom_arr) {
                                        $ur[$all_uom_arr->id] = $all_uom_arr->name;
                                    }
                                    ?><br>
                                    <?= form_input('target_qty', set_value('target_qty', $production_mst->target_qty), 'class="form-control tip" id="target_qty" required="required" readonly style="width:60%;display:inline;" onkeyup="fn_cal()"'); ?>
                                    <?= form_dropdown('uom_name', $ur, set_value('uom_name', $production_mst->uom_id), 'class="form-control uom_name" required="required"  style="width:30%;display:inline;" disabled'); ?>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="poTable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="active">
                                                <th class="col-xs-1">SL</th>
                                                <th class="col-xs-3">Matrial Name</th>
                                                <th class="col-xs-2">Brand Name</th>
                                                <th class="col-xs-2">In Stock</th>
                                                <th class="col-xs-2">Quantity</th>
                                                <th class="col-xs-2">Cost</th>
                                            </tr>
                                        </thead>
                                        <tbody id="recipe_html">
                                            <?php
                                            $i = 0;
                                            $sl = 1;
                                            foreach ($production_dtls as $key => $val) {

                                            ?>
                                                <tr>
                                                    <td><?= $sl; ?></td>
                                                    <td><?= $val->name ?></td>
                                                    <td><?= $val->brand_name ?></td>
                                                    <td><?= $val->stock_qty . ' ' . $val->unit_name ?></td>
                                                    <td><input type="text" name="qty[]" id="qty_<?= $i; ?>" value="<?= $val->quantity ?>" readonly></td>
                                                    <td><input type="text" name="cost[]" id="cost_<?= $i; ?>" value="<?= $val->cost ?>" readonly></td>
                                                    <input type="hidden" name="material_id[]" id="material_id_<?= $i; ?>" value="<?= $val->material_id ?>">
                                                    <input type="hidden" name="material_stock_id[]" id="material_stock_id_<?= $i; ?>" value="<?= $val->material_stock_id ?>">
                                                    <input type="hidden" name="recipe_dtls_id[]" id="recipe_dtls_id_<?= $i; ?>" value="<?= $val->recipe_dtls_id ?>">
                                                    <input type="hidden" name="hidden_qty[]" id="hidden_qty_<?= $i; ?>" value="<?= $val->qty ?>" readonly>
                                                    <input type="hidden" name="hidden_cost[]" id="hidden_cost_<?= $i; ?>" value="<?= $val->stock_cost * $val->qty ?>" readonly>
                                                    <input type="hidden" name="recipe_id[]" id="recipe_id_<?= $i; ?>" value="<?= $val->recipe_id ?>" readonly>

                                                </tr>
                                            <?php
                                                $i++;
                                                $sl++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-5"> </div>
                            <div class="col-md-3">Actual Output </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <?= form_input('actual_output', set_value('actual_output', $production_mst->actual_output), 'class="form-control tip" id="actual_output" '); ?>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <?= form_dropdown('uom_name', $ur, set_value('uom_name', $production_mst->uom_id), 'class="form-control uom_name" required="required"  style="width:100%;" disabled'); ?>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-5"> </div>
                            <div class="col-md-3">Wasted </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <?= form_input('wasted', set_value('wasted', $production_mst->wasted), 'class="form-control tip" id="wasted"'); ?>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <?= form_dropdown('uom_name', $ur, set_value('uom_name', $production_mst->uom_id), 'class="form-control uom_name" required="required"  style="width:100%;" disabled'); ?>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-5"> </div>
                            <div class="col-md-3">Notes </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <?= form_input('notes', set_value('notes', $production_mst->notes), 'class="form-control tip" id="notes"'); ?>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-5"> </div>
                            <div class="col-md-3">Product & Packaging</div>
                            <div class="col-md-4" id="addMore">
                                <?php
                                $pk[''] = lang("select") . " " . lang("Packaging");
                                $pk_cp = array();
                                foreach ($packaging_items as $k => $v) {
                                    $pk[$v->id] = $v->name;
                                    $pk_cp[$v->id] = $v->capacity;
                                }
                                $pk_cp_arr = json_encode($pk_cp);

                                $prod[''] = lang("select") . " " . lang("Product");
                                    foreach ($all_product as $k => $v) {
                                        $prod[$v->id] = $v->name;
                                    }
                                $i=1;
                                foreach ($packaging_dtls as $k => $v) {
                                ?>

                                    <div class="input-group mb-3" style="display:flex;margin-bottom: 5vh; gap: 1rem;">

                                        <?= form_dropdown('product[]',$prod, set_value('product[]',$v->product_id), 'class="form-control" style="width:100%;" '); ?>
                                        <input type="text" class="form-control prod_qty" name="prod_quantity[]" aria-describedby="basic-addon3" placeholder="Enter Quantity" required value="<?=$v->prod_quantity;?>">
                                        <?= form_dropdown('packaging_material[]',$pk, set_value('packaging_material[]',$v->material_packaging_id), 'class="form-control pk_id" style="width:100%;" '); ?>
                                        <input type="text" class="form-control pk_qty" name="pk_quantity[]" placeholder="Enter Quantity" value="<?=$v->quantity;?>" >
                                        <a href='javascript:void(0)' data-target="#myModal"><i onclick="onClickAdd()" class="fa fa-2x fa-plus-circle"></i></a>
                                        <a href='javascript:void(0)' class="removeItem"><i class="fa fa-2x fa-minus-circle"></i></a>
                                    </div>

                                <?php
                                $i++;
                                }
                                ?>
                            </div>

                        </div>

                        <div class="form-group">
                            <?= form_submit('edit_production', lang('edit_production'), 'class="btn btn-primary" id="edit_production"'); ?>
                            <button type="button" id="reset" class="btn btn-danger"><?= lang('reset'); ?></button>
                        </div>

                        <?php echo form_close(); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?= $assets ?>plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script>

    function fn_cal() {
        var target_qty = $("#target_qty").val();
        $('table > tbody  > tr').each(function(index, tr) {
            var hidden_qty = $("#hidden_qty_" + index).val() * target_qty * 1;
            var hidden_cost = $("#hidden_cost_" + index).val() * target_qty * 1;
            $("#qty_" + index).val(hidden_qty);
            $("#cost_" + index).val(hidden_cost);
        });
    }

    $(document).ready(function() {
        var actual_output, target_qty
        $(document).on('keyup', '#actual_output, #target_qty', function() {
            target_qty = $("#target_qty").val();
            actual_output = $("#actual_output").val();
            $("#wasted").val(target_qty - actual_output);

        })
    })


    var row = $("#addMore div").html();
    var new_row =`<div class="input-group mb-3" style="display:flex;margin-bottom: 5vh; gap: 1rem;">${row}</div>`
    // row.wrap(`<div class="input-group mb-3" style="display:flex;margin-bottom: 5vh; gap: 1rem;"></div>`);
    function checkItems() {
        let minusSelector = document.getElementsByClassName("fa-minus-circle");
        $('.fa-minus-circle').each(function(i, obj) {
            if (i === 0) {
                $(this).addClass("remove_item_" + i);
            }
            $(this).attr("data-id", i);
        });

        $(".addMoreItems").each(function(i, obj) {
            $(this).addClass("current_item_" + i);
        });

        

        $(".prod_qty").each(function(i, obj) {
            var attributeValue = `prod_qty_${i}`;
            $(this).attr("id", attributeValue);
        });
        $(".pk_qty").each(function(i, obj) {
            var attributeValue = `pk_qty_${i}`;
            $(this).attr("id", attributeValue);
        });
        $(".pk_id").each(function(i, obj) {
            var attributeValue = `fn_pk_cng(${i})`;
            $(this).attr("onchange", attributeValue);
            var attributeValue = `pk_id_${i}`;
            $(this).attr("id", attributeValue);
        });

    }

    const pk_cp_arr = JSON.parse('<?= $pk_cp_arr ?>');
    function fn_pk_cng(row_id) {
        var prod_qty = parseInt($("#prod_qty_" + row_id).val());
        var pk_id = $("#pk_id_" + row_id).val();
        if(pk_id>0 && prod_qty>0)
        {
            var capacity_val = pk_cp_arr[pk_id];
            if(capacity_val>0)
            {
                var pk_value = Math.ceil(prod_qty/capacity_val);
                $("#pk_qty_" + row_id).val(pk_value);
            }
        }  
    }

    checkItems();

    function onClickAdd() {
        console.log(new_row)
        $("#addMore").append(new_row);
        checkItems();
    }

    function onClickRemove(t) {
        $(".current_item_" + t.data("id")).remove();
    }

    $(document).on("click", ".removeItem", function() {
        $(this).parent("div").remove()
    })
</script>

<style>
    .remove_item_0 {
        display: none;
    }
</style>