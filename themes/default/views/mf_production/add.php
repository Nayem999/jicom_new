<?php (defined('BASEPATH')) or exit('No direct script access allowed'); ?>

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box box-primary">

                <div class="box-header">

                    <h3 class="box-title"><?= lang('enter_info'); ?></h3>

                </div>

                <div class="box-body">

                    <div class="col-lg-12">

                        <?php echo form_open("mf_production/add"); ?>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <?= lang('date', 'date'); ?>
                                    <?= form_input('date', set_value('date', date('Y-m-d H:i')), 'class="form-control tip" id="date"  required="required" readonly'); ?>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <?= lang('batch_no', 'batch_no'); ?>
                                    <?= form_input('batch_no', set_value('batch_no', $batch_no), 'class="form-control tip" id="batch_no"  required="required" readonly'); ?>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <?= lang('Warehouse', 'Warehouse'); ?>
                                    <?php
                                    // $sr[''] = lang("Select") . " " . lang("Store");
                                    foreach ($factory_stores as $factory_store_arr) {
                                        $sr[$factory_store_arr->id] = $factory_store_arr->name;
                                    }
                                    ?>
                                    <?= form_dropdown('store_id', $sr, set_value('store_id'), 'class="form-control" required="required" id="store_id" style="width:100%;" '); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <?= lang('Recipe', 'Recipe'); ?>
                                    <?php
                                    $pr[''] = lang("Select") . " " . lang("Recipe");
                                    foreach ($all_recipe as $all_recipe_arr) {
                                        $pr[$all_recipe_arr->id] = $all_recipe_arr->name;
                                    }
                                    ?>
                                    <?= form_dropdown('recipe_id', $pr, set_value('recipe_id'), 'class="form-control select2 tip" required="required" id="recipe_id" style="width:100%;" onchange="fn_load_tbl()"'); ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Target Quantity</label>
                                    <?php
                                    $ur[''] = lang("Select");
                                    foreach ($all_uom as $all_uom_arr) {
                                        $ur[$all_uom_arr->id] = $all_uom_arr->name;
                                    }
                                    ?><br>
                                    <?= form_input('target_qty_h', set_value('target_qty', 1), 'class="form-control tip target_qty" id="target_qty" required="required" style="width:60%;display:inline;" onkeyup="fn_cal()" disabled'); ?>
                                    <input type="hidden" name="target_qty" class="target_qty">

                                    <?= form_dropdown('uom_name', $ur, set_value('uom_name'), 'class="form-control uom_name" required="required"  style="width:30%;display:inline;" disabled'); ?>
                                    <!-- <input type="hidden" name="product_id" id="product_id"> -->
                                    <input type="hidden" name="uom_id" id="uom_id">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="prdTable" class="table table-striped table-bordered">
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
                                        <tbody id="recipe_html"></tbody>
                                    </table>
                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-5"> </div>
                            <div class="col-md-2">Actual Output </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <?= form_input('actual_output', set_value('actual_output'), 'class="form-control tip" id="actual_output" required="required" '); ?>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <?= form_dropdown('uom_name', $ur, set_value('uom_name'), 'class="form-control uom_name" required="required"  style="width:100%;" disabled'); ?>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-5"> </div>
                            <div class="col-md-2">Wasted </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <?= form_input('wasted', set_value('wasted'), 'class="form-control tip" id="wasted" readonly'); ?>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <?= form_dropdown('uom_name', $ur, set_value('uom_name'), 'class="form-control uom_name" required="required"  style="width:100%;" disabled'); ?>
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-md-5"> </div>
                            <div class="col-md-2">Notes </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <?= form_input('notes', set_value('notes'), 'class="form-control tip" id="notes"'); ?>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-5"> </div>
                            <div class="col-md-2">Product & Packaging</div>
                            <div class="col-md-5" id="addMore">
                                <div class="input-group mb-3" style="display:flex;margin-bottom: 5vh; gap: 1rem;">
                                    <?php
                                    $prod[''] = lang("select") . " " . lang("Product");
                                    foreach ($all_product as $k => $v) {
                                        $prod[$v->id] = $v->name;
                                    }
                                    ?>
                                    <?= form_dropdown('product[]', $prod, '', 'class="form-control" id="product" style="width:100%;" required="required"'); ?>
                                    <input type="text" class="form-control prod_qty" name="prod_quantity[]" aria-describedby="basic-addon3" placeholder="Enter Quantity" required>
                                    <?php
                                    $pk[''] = lang("select") . " " . lang("Packaging");
                                    $pk_cp = array();
                                    foreach ($packaging_items as $k => $v) {
                                        $pk[$v->id] = $v->name . " (" . $v->quantity . ' ' . $v->unit . ") ";
                                        $pk_cp[$v->id] = $v->capacity;
                                    }
                                    $pk_cp_arr = json_encode($pk_cp);
                                    ?>

                                    <?= form_dropdown('packaging_material[]', $pk, '', 'class="form-control pk_id" style="width:100%;" required="required"'); ?>
                                    <input type="text" class="form-control pk_qty" name="pk_quantity[]" aria-describedby="basic-addon3" placeholder="Enter Quantity" required>
                                    <a href='javascript:void(0)' data-target="#myModal"><i onclick="onClickAdd()" class="fa fa-2x fa-plus-circle"></i></a>
                                    <a href='javascript:void(0)' class="removeItem"><i class="fa fa-2x fa-minus-circle"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <?= form_submit('add_production', lang('add_production'), 'class="btn btn-primary" id="add_production"'); ?>
                            <button type="button" id="reset" class="btn btn-danger sqcount"><?= lang('reset'); ?></button>
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
    function fn_load_tbl() {
        var recipe_id = $("#recipe_id").val();
        $.ajax({
            url: "<?php echo base_url('mf_production/load_recipe'); ?>",
            data: {
                recipe_id: recipe_id
            },
            dataType: 'text',
            type: "GET",
            success: function(result) {
                var data = $.parseJSON(result);
                // console.log(data)
                var html = sl = '';
                if (data) {
                    $(".target_qty").val(data[0].target_qty);
                    for (var i = 0; i < data.length; i++) {
                        sl = i + 1;
                        html += '<tr><td>' + sl + '</td> <td>' + data[i].name + '</td> <td>';
                        if (data[i].brand_name != null) {
                            html += data[i].brand_name;
                        }
                        html += '</td> <td>' + data[i].stock_qty + ' ' + data[i].unit_name + '</td> <td><input type="text" name="qty[]" id="qty_' + i + '" value="' + data[i].qty + '" readonly></td> <td><input type="text" name="cost[]" id="cost_' + i + '" value="' + data[i].cost * data[i].qty + '" readonly></td> <input type="hidden" name="material_id[]" id="material_id_' + i + '" value="' + data[i].material_id + '"> <input type="hidden" name="material_stock_id[]" id="material_stock_id_' + i + '" value="' + data[i].material_stock_id + '"> <input type="hidden" name="recipe_dtls_id[]" id="recipe_dtls_id_' + i + '" value="' + data[i].recipe_dtls_id + '"> <input type="hidden" name="hidden_qty[]" id="hidden_qty_' + i + '" value="' + data[i].qty + '" readonly> <input type="hidden" name="hidden_cost[]" id="hidden_cost_' + i + '" value="' + data[i].cost * data[i].qty + '" readonly> </tr>';

                        if (sl == 1) {
                            $(".uom_name").val(data[i].uom_id);
                            $("#uom_id").val(data[i].uom_id);
                            // $("#product_id").val(data[i].product_id);
                        }
                    }
                    $("#recipe_html").html(html);
                } else {
                    $("#recipe_html").html('');
                    $("#uom_name").val('');
                }
            }

        });
    }

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
    var row = $("#addMore").html();

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
        $("#addMore").append(row);
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