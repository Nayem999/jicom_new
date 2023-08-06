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
                        <?php
                        $from_warehouseID =  $this->session->userdata('from_warehouse');
                        $from_warehouseInfo =  $this->site->findeNameByID('stores', 'id', $from_warehouseID);
                        echo form_open_multipart("transfers/add"); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?= lang('date', 'date'); ?>
                                    <?= form_input('date', set_value('date', date('Y-m-d H:i')), 'class="form-control tip" id="date"  required="required"'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?= lang('reference', 'reference'); ?>
                                    <?= form_input('reference', set_value('reference'), ' class="form-control tip" id="reference"'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="<?= lang('search_product_by_name_code'); ?>" id="add_item" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="transferTable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="active">
                                                <th class="col-xs-3"><?= lang('product'); ?></th>
                                                <th class="col-xs-1">Packaging</th>
                                                <th class="col-xs-1"><?= lang('quantity'); ?></th>
                                                <th class="col-xs-2"><?= lang('unit_cost'); ?></th>
                                                <th class="col-xs-2">Sale Cost</th>
                                                <th class="col-xs-1"><?= lang('subtotal'); ?></th>
                                                <th style="width:15px;"><i class="fa fa-trash-o"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="6"><?= lang('add_product_by_searching_above_field'); ?></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="active">
                                                <th><?= lang('total'); ?></th>
                                                <th class="col-xs-1"></th>
                                                <th class="col-xs-2"><span id="prqty">0</span></th>
                                                <th class="col-xs-1"></th>
                                                <th class="col-xs-1"></th>
                                                <th class="col-xs-1 text-right"><span id="gtotal">0.00</span></th>
                                                <th style="width:25px;"></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--  <div class="col-md-4">
                                <div class="form-group">
                                    <?= lang('Shipping', 'Shipping'); ?>
                                    <?= form_input('shipping', set_value('shipping'), 'class="form-control tip" id="shipping"'); ?>
                                </div>
                            </div> -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <?= lang('Form Warehouse', 'Form Warehouse'); ?>
                                    <p><?php echo $from_warehouseInfo->name; ?></p>
                                    <a href="javascript:;" onclick="productsTransfer()">Change Warehouse</a>
                                    <input type="hidden" name="customer_id" id="customer_id" value="0">

                                </div>
                            </div>
                            <!-- <div class="col-md-3">
                                <div class="form-group">
                                    <?= lang('customer', 'customer'); ?>
                                    <?php
                                    $cr[''] = lang("select") . " " . lang("customer");
                                    foreach ($customers as $customer_arr) {
                                        $cr[$customer_arr->id] = $customer_arr->name;
                                    }
                                    ?>
                                    <?= form_dropdown('customer_id', $cr, set_value('customer_id'), 'class="form-control select2" id="customer_id" style="width:100%;" required="required"'); ?>
                                </div>
                            </div> -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <?= lang('To Warehouse', 'To Warehouse'); ?>
                                    <?php
                                    $wr[''] = lang("select") . " " . lang("warehouse");
                                    foreach ($outlet_stores as $warehouse) {
                                        $wr[$warehouse->id] = $warehouse->name;
                                    }
                                    ?>
                                    <?= form_dropdown('towarehouse', $wr, set_value('towarehouse'), 'class="form-control select2 tip" id="towarehouse" style="width:100%;" required="required"'); ?>
                                    <input type="hidden" name="supplier_id" id="supplier_id" value="0">
                                </div>
                            </div>

                            <!-- <div class="col-md-3" id="supplierInfo">
                                <div class="form-group">
                                    <?= lang('Supplier', 'Supplier'); ?>
                                    <?php
                                    $sr[''] = lang("select") . " " . lang("Supplier");
                                    ?>
                                    <?= form_dropdown('supplier_id', $sr, set_value('supplier_id'), 'class="form-control" id="supplier_id" style="width:100%;" required="required"'); ?>
                                </div>
                            </div> -->
                            <div class="col-md-3">
                                <div class="form-group">
                                <?= lang('Extra Packaging Name', 'Extra Packaging Name'); ?>
                                    <?php
                                    $pk[0] = lang("select") . " " . lang("Packaging");
                                    foreach ($packaging_items as $k => $v) {
                                        $pk[$v->id] = $v->name . " (" . $v->quantity . ' ' . $v->unit . ") ";
                                    }
                                    ?>
                                    <?= form_dropdown('extra_packaging_id', $pk, '', 'class="form-control" style="width:100%;" id="extra_packaging_id"'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <?= lang('Extra Packaging Quantity', 'Extra Packaging Quantity'); ?>
                                <input type="text" class="form-control" id="extra_packaging_qty" name="extra_packaging_qty" aria-describedby="basic-addon3" placeholder="Enter Quantity" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">

                            <?= lang("note", 'note'); ?>

                            <?= form_textarea('note', set_value('note'), 'class="form-control redactor" id="note"'); ?>

                        </div>

                        <!-- <div id="addMore">
                            <div class="input-group mb-3" style="display:flex;margin-bottom: 5vh; gap: 1rem;">
                                <?php
                                $pk[''] = lang("select") . " " . lang("Packaging ");
                                foreach ($packaging_items as $k => $v) {
                                    $pk[$v->id] = $v->name . " (" . $v->quantity . ' ' . $v->unit . ") ";
                                }
                                ?>
                                <?= form_dropdown('packaging_material[]', $pk, '', 'class="form-control" id="packagingMaterial" style="width:100%;" required="required"'); ?>
                                <input type="text" class="form-control" name="pk_quantity[]" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter Quantity" required>
                                <a href='javascript:void(0)' data-target="#myModal"><i onclick="onClickAdd()" class="fa fa-2x fa-plus-circle"></i></a> 
                                <a href='javascript:void(0)'  class="removeItem"><i class="fa fa-2x fa-minus-circle"  ></i></a>
                            </div>
                        </div> -->

                        <div class="form-group">

                            <?= form_submit('add_transfers', lang('Add Transfers'), 'class="btn btn-primary" id="add_transfers"'); ?>

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

<script src="<?= $assets ?>dist/js/jquery-ui.min.js" type="text/javascript"></script>

<script src="<?= $assets ?>plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>

<script src="<?= $assets ?>plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>

<!-- <script src="<?= $assets ?>dist/js/pages/tranfer.js" type="text/javascript"></script> -->
<script type="text/javascript">
    $(document).ready(function() {
        $("#to-warehouse").change(function() {
            var whto = $(this).val();
            var empty = '';
            var whfrom = "<?php echo $this->session->userdata('from_warehouse'); ?>";
            if (whto == whfrom) {
                $('#to-warehouse').val(empty);
                alert('This store selected in From Warehouse');
                return false;

            }
        });
    });

    /* $(function(){
     $("#towarehouse").change(function(){
         var tostore = this.value;
         var url = '<?php echo base_url('transfers/fn_supplierInfo') ?>'+'/'+tostore;
         $('#supplierInfo').load(url);         
        });
    }); */


    function fn_packing(id) {
        var site_url = "<?php echo site_url('transfers/packaging_stock'); ?>/" + id; //append id at end
        //alert(site_url);
        $("#paySalary").load(site_url);
    }
</script>

<script type="text/javascript">
    var tspoitems = {};

    var lang = new Array();

    lang['code_error'] = '<?= lang('code_error'); ?>';

    lang['r_u_sure'] = '<?= lang('r_u_sure'); ?>';

    lang['no_match_found'] = '<?= lang('no_match_found'); ?>';

    function sqTransfer(row_no, item_id, item_qty) {
        var whfrom = "<?php echo $this->session->userdata('from_warehouse'); ?>";
        if (whfrom == '') alert('Please select from warehouse');
        var whto = $('#to-warehouse').val();
        if (whto == '') alert('Please select to warehouse');
        var sequence = $('#getsequence-' + row_no).val();
        if ((whfrom != '') && (whto != '')) {
            var site_url = "<?php echo site_url('transfers/squenceOut'); ?>/" + row_no + '/' + item_id + '/' + item_qty + '/' + whfrom + '/' + sequence;
            // alert(site_url);
        } else {
            return false;
        }
        $("#paySalary").load(site_url);
    }
</script>


<script>
    $(document).ready(function() {

        var trnsid = '';
        loadItems(trnsid);
        $("#date").inputmask("yyyy-mm-dd hh:mm", {
            "placeholder": "yyyy-mm-dd hh:mm"
        });
        $("#add_item").autocomplete({
            source: base_url + 'transfers/suggestions',
            minLength: 1,
            autoFocus: false,
            delay: 200,
            response: function(event, ui) {
                if ($(this).val().length >= 16 && ui.content[0].id == 0) {
                    bootbox.alert(lang.no_match_found, function() {
                        $('#add_item').focus();
                    });
                    $(this).val('');
                } else if (ui.content.length == 1 && ui.content[0].id != 0) {
                    ui.item = ui.content[0];
                    $(this).data('ui-autocomplete')._trigger('select', 'autocompleteselect', ui);
                    $(this).autocomplete('close');
                } else if (ui.content.length == 1 && ui.content[0].id == 0) {
                    bootbox.alert(lang.no_match_found, function() {
                        $('#add_item').focus();
                    });
                    $(this).val('');
                }
            },
            select: function(event, ui) {
                event.preventDefault();
                if (ui.item.id !== 0) {
                    var row = add_order_item(ui.item);
                    if (row)
                        $(this).val('');
                } else {
                    bootbox.alert(lang.no_match_found);
                }
            }
        });

        $('#add_item').bind('keypress', function(e) {
            if ($('#to-warehouse').val() == '') {
                alert('to warehouse not select');
                e.preventDefault();
            }
            if (e.keyCode == 13) {
                e.preventDefault();
                $(this).autocomplete("search");
            }
        });

        $('#add_item').focus();
        $('#reset').click(function(e) {
            bootbox.confirm(lang.r_u_sure, function(result) {
                if (result) {
                    if (get('tspoitems')) {
                        remove('tspoitems');
                    }

                    window.location.reload();
                }
            });
        });

        $(document).on("change", '.rquantity', function() {
            var row = $(this).closest('tr');
            var new_qty = parseFloat($(this).val());
            item_id = row.attr('data-item-id');
            tspoitems[item_id].row.qty = new_qty;
            store('tspoitems', JSON.stringify(tspoitems));
            trnsid = '';
            loadItems(trnsid);
        });


        $(document).on("change", '.rcost', function() {
            var row = $(this).closest('tr');
            var new_cost = parseFloat($(this).val()),

                item_id = row.attr('data-item-id');
            tspoitems[item_id].row.cost = new_cost;
            store('tspoitems', JSON.stringify(tspoitems));
            trnsid = '';
            loadItems(trnsid);
        });

    });

    function loadItems(trnsid) {

        if (get('tspoitems')) {
            total = 0;
            tqty = 0;

            $("#transferTable tbody").empty();

            tspoitems = JSON.parse(get('tspoitems'));

            //console.log(spoitems);

            $.each(tspoitems, function() {

                var item = this;

                //alert(item);
                var item_id = Settings.item_addition == 1 ? item.item_id : item.id;
                tspoitems[item_id] = item;

                // SeqCount = item.row.SeqCount,
                //     SeqAll = item.row.SeqAll,
                //     sqtrans = item.row.sqtrans,

                var product_id = item.row.id,
                    store_qty = item.row.store_qty,
                    item_cost = item.row.cost,
                    display_item_cost = item.row.display_cost,
                    item_qty = item.row.qty,
                    item_code = item.row.code,
                    item_name = item.row.name.replace(/"/g, "&#034;").replace(/'/g, "&#039;");
                if (item_qty > store_qty) {
                    item_qty = 0;
                }
                var row_no = (new Date).getTime();
                //var sequence = $('#sequence').val();

                var sqetitle = 'PR';
                /* if (trnsid != '' && trnsid == item_id)
                    var newTr = $('<tr id="' + row_no + '" class="' + item_id + ' newprrow" data-item-id="' + item_id + '"></tr>');
                else
                    var sqtransHtml = '<td class="text-right"><input type="hidden" name="sqtrans[]" id="proSqOut' + row_no + '" class="form-control input-sm kb-pad text-center "></td>';
                if (SeqAll != '') {
                    sqtransHtml = '<td class="text-right"><input type="hidden" name="sqtrans[]" id="proSqOut' + row_no + '" value="' + sqtrans + '" class="form-control input-sm kb-pad text-center psquence"><a href="javascript:;"><span id="sqout-' + row_no + '"></span><span onClick="sqTransfer(' + parseFloat(row_no) + ',' + item_id + ',' + item_qty + ')" ><i class="fa fa-2x fa-plus-circle" id="addIcon"></i></span></a></td>';
                } else {
                    sqtransHtml = '<td class="text-right"><input type="hidden" name="sqtrans[]" id="proSqOut' + row_no + '" value="' + sqtrans + '" class="form-control input-sm kb-pad text-center psquence"><a href="javascript:;"><span id="sqout-' + row_no + '"></span><span>Sequence not found </span></a></td>';
                } */
                var newTr = $('<tr id="' + row_no + '" class="' + item_id + '" data-item-id="' + item_id + '"></tr>');
                tr_html = '<td style="min-width:100px;"><input name="product_id[]" type="hidden" class="rid" value="' + product_id + '"><span class="sname" id="name_' + row_no + '">' + item_name + ' (' + item_code + ') Qty ' + store_qty + '</span>';
                // tr_html += '<input name="getsequence[]" type="hidden" class="rid" value="' + sqtrans + '" id="getsequence-' + row_no + '"></td>';
                tr_html += '<td class="text-center"><a href="javascript:;" onClick="fn_packing(' + item_id + ');" class=""><i class="fa fa-barcode tip pointer spodel" ><input name="pak_qty[]" value="" type="hidden" id="pak_qty_' + item_id + '" > <i></a></td>';

                tr_html += '<td style="padding:2px;"><input class="form-control input-sm kb-pad text-center rquantity" name="quantity[]" type="text" value="' + item_qty + '" data-id="' + row_no + '" data-item="' + item_id + '" id="quantity_' + row_no + '" onClick="this.select();"></td>';
                tr_html += '<td style="padding:2px; min-width:80px;"><input class="form-control input-sm kb-pad text-center rcost" name="display_cost[]" type="text" value="' + display_item_cost + '" data-id="' + row_no + '" data-item="' + item_id + '" id="display_cost_' + row_no + '" onClick="this.select();" readonly></td>';
                tr_html += '<td style="padding:2px; min-width:80px;"><input class="form-control input-sm kb-pad text-center rcost" name="cost[]" type="text" value="' + item_cost + '" data-id="' + row_no + '" data-item="' + item_id + '" id="cost_' + row_no + '" onClick="this.select();" ></td>';
                // tr_html += sqtransHtml;
                tr_html += '<td class="text-right"><span class="text-right ssubtotal" id="subtotal_' + row_no + '">' + formatMoney(parseFloat(item_cost) * parseFloat(item_qty)) + '</span></td>';
                tr_html += '<td class="text-center"><a href="javascript:;" onClick="pRemove(' + parseFloat(row_no) + ',' + item_id + ',' + item_qty + ')" class=""><i class="fa fa-trash-o tip pointer spodel"><i></a></td>';
                newTr.html(tr_html);
                newTr.prependTo("#transferTable");
                total += (parseFloat(item_cost) * parseFloat(item_qty));
                tqty += parseFloat(item_qty);
                if (store_qty < item_qty) {
                    $('#' + row_no).addClass('sequence-match');
                    $('#add_transfers').attr('disabled', true);
                } else {
                    $('#' + row_no).removeClass("sequence-match");
                    $('#add_transfers').removeAttr('disabled', true);
                }
                /* if (SeqAll != '') {

                    var sqtrans2 = sqtrans;
                    if (sqtrans2 != '') {
                        var sqtransArray2 = sqtrans2.split(",");
                        var sqtransCount2 = sqtransArray2.length;
                    } else {
                        var sqtransCount2 = 0;
                    }

                    if (sqtransCount2 != item_qty) {
                        $('#' + row_no).addClass('sequence-match');
                        $('#add_transfers').attr('disabled', true);
                    } else {
                        $('#' + row_no).removeClass("sequence-match");
                        $('#add_transfers').removeAttr('disabled', true);
                    }
                } */



            });

            grand_total = formatMoney(total);
            $("#gtotal").text(grand_total);
            $("#prqty").text(tqty);
            $('#add_item').focus();
        }
    }

    function add_order_item(item) {
        var item_id = Settings.item_addition == 1 ? item.item_id : item.id;

        if (tspoitems[item_id]) {
            tspoitems[item_id].row.qty = parseFloat(tspoitems[item_id].row.qty) + 1;
        } else {
            tspoitems[item_id] = item;
            tspoitems[item_id].row.sqtrans = '';
        }

        store('tspoitems', JSON.stringify(tspoitems));

        loadItems(item_id);
        return true;
    }

    function pRemove(id, arindexid, pqtyval) {
        //console.log(spoitems);
        //alert(pqtyval);
        var curqty = $("#prqty").text();
        curqty = curqty - pqtyval;

        $("#prqty").text(curqty);
        //alert($('#subtotal_'+id).text());
        //alert($('#gtotal').text());
        //spoitems.splice(2,1);
        $.removeElementFromCollection(tspoitems, arindexid);
        var subtotal = $('#subtotal_' + id).text();
        subtotal = subtotal.split(',').join('');
        //
        //$('#subtotal_'+id).text().replace(",", "");
        var gtotal = $('#gtotal').text();
        gtotal = gtotal.split(',').join('');

        //alert(parseFloat(gtotal));
        //alert(parseFloat(subtotal));

        var total = formatMoney((parseFloat(gtotal) - parseFloat(subtotal)));
        //alert(total);
        $("#" + id).remove();
        $('#gtotal').html(total);
    }

    (function($, global, undefined) {
        $.removeElementFromCollection = function(collection, key) {
            // if the collections is an array
            if (collection instanceof Array) {
                // use jquery's `inArray` method because ie8 
                // doesn't support the `indexOf` method
                if ($.inArray(key, collection) != -1) {
                    collection.splice($.inArray(key, collection), 1);
                }
            }
            // it's an object
            else if (collection.hasOwnProperty(key)) {
                delete collection[key];
            }

            return collection;
        };
    })(jQuery, window);



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