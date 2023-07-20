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

                        <?php echo form_open_multipart("transfers/edit/" . $transfer->id, 'class="validation edit-po-form"'); ?>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <?= lang('date', 'date'); ?>
                                    <?= form_input('date', set_value('date', $transfer->date), 'class="form-control tip" id="date"  required="required" readonly'); ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <?= lang('reference', 'reference'); ?>
                                    <?= form_input('reference', set_value('reference', $transfer->reference), ' class="form-control tip" id="reference"'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="transferTable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="active">
                                                <th class="col-xs-3"><?= lang('product'); ?></th>
                                                <th class="col-xs-1">Packaging</th>
                                                <th class="col-xs-2"><?= lang('quantity'); ?></th>
                                                <th class="col-xs-2">Display Cost</th>
                                                <th class="col-xs-2">Sale Cost</th>
                                                <th class="col-xs-1"><?= lang('subtotal'); ?></th>
                                                <th style="width:25px;"><i class="fa fa-trash-o"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="6"><?= lang('add_product_by_searching_above_field'); ?></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="active">
                                                <th class="col-xs-3"><?= lang('total'); ?></th>
                                                <th class="col-xs-2"></th>
                                                <th class="col-xs-2"><span id="prqty">0</span></th>
                                                <th class="col-xs-2"></th>
                                                <th class="col-xs-1"></th>
                                                <th class="col-xs-1 text-right"><span id="gtotal">0.00</span></th>
                                                <th style="width:25px;"></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <?= lang("note", 'note'); ?>
                            <?= form_textarea('note', $transfer->note, 'class="form-control redactor" id="note"'); ?>
                            <input type="hidden" name="to_warehouse_id" value="<?php echo $transfer->to_warehouse_id; ?>">
                            <input type="hidden" name="from_warehouse_id" value="<?php echo $transfer->from_warehouse_id; ?>">
                        </div>

                        <div class="form-group">
                            <?= form_submit('edit_transfers', 'Edit transfers', 'class="btn btn-primary" id="edit_transfers"'); ?>
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

<script type="text/javascript">
    var tspoitems = {};
    var lang = new Array();
    lang['code_error'] = '<?= lang('code_error'); ?>';
    lang['r_u_sure'] = '<?= lang('r_u_sure'); ?>';
    lang['no_match_found'] = '<?= lang('no_match_found'); ?>';

    $(document).ready(function() {
        store('tspoitems', JSON.stringify(<?= $items; ?>));
    });
    $(window).bind('beforeunload', function(e) {
        localStorage.setItem('remove_spo', true);
        var message = "You will loss data!";
        return message;

    });
    $('#reset').click(function(e) {
        $(window).unbind('beforeunload');
    });
    $('#edit_transfers').click(function() {


        $(window).unbind('beforeunload');
        $('form.edit-po-form').submit();
    });
</script>
<script src="<?= $assets ?>dist/js/jquery-ui.min.js" type="text/javascript"></script>

<script src="<?= $assets ?>plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>

<script src="<?= $assets ?>plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<!-- <script src="<?= $assets ?>dist/js/pages/tranfer.js" type="text/javascript"></script> -->
<script>
    function fn_packing(prod_id) {
        var trans_id =<?php echo $transfer->id; ?>;
        var store_id =<?php echo $transfer->from_warehouse_id; ?>;
        var site_url = "<?php echo site_url('transfers/packaging_stock_edit'); ?>/" + trans_id + "/" + prod_id + "/" + store_id; //append id at end
        //alert(site_url);
        $("#paySalary").load(site_url);
    }

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
                var product_id = item.row.id,
                    store_qty = item.row.store_qty,
                    item_cost = item.row.cost,
                    display_item_cost = item.row.display_cost,
                    item_qty = item.row.qty,
                    item_code = item.row.code,
                    pak_dtls = item.row.pak_info,
                    item_name = item.row.name.replace(/"/g, "&#034;").replace(/'/g, "&#039;");
                if (item_qty > store_qty) {
                    item_qty = 0;
                }
                var row_no = (new Date).getTime();
                //var sequence = $('#sequence').val();

                var sqetitle = 'PR';
                var newTr = $('<tr id="' + row_no + '" class="' + item_id + '" data-item-id="' + item_id + '"></tr>');
                tr_html = '<td style="min-width:100px;"><input name="product_id[]" type="hidden" class="rid" value="' + product_id + '"><span class="sname" id="name_' + row_no + '">' + item_name + ' (' + item_code + ') Qty ' + store_qty + '</span>';

                tr_html += `<td class="text-center"><a href="javascript:;" onClick="fn_packing(${item_id});" class=""><i class="fa fa-barcode tip pointer spodel" ><input name="pak_qty[]" value='${pak_dtls}' type="hidden" id="pak_qty_${item_id}" > <i></a></td>`;
                // tr_html += '<td class="text-center"><a href="javascript:;" onClick="fn_packing(' + item_id + ');" class=""><i class="fa fa-barcode tip pointer spodel" ><input name="pak_qty[]" value="'+pak_dtls+'" type="hidden" id="pak_qty_' + item_id + '" > <i></a></td>';

                tr_html += '<td style="padding:2px;"><input class="form-control input-sm kb-pad text-center rquantity" name="quantity[]" type="text" value="' + item_qty + '" data-id="' + row_no + '" data-item="' + item_id + '" id="quantity_' + row_no + '" onClick="this.select();"></td>';
                tr_html += '<td style="padding:2px; min-width:80px;"><input class="form-control input-sm kb-pad text-center rcost" name="display_cost[]" type="text" value="' + display_item_cost + '" data-id="' + row_no + '" data-item="' + item_id + '" id="display_cost_' + row_no + '" onClick="this.select();" readonly></td>';
                tr_html += '<td style="padding:2px; min-width:80px;"><input class="form-control input-sm kb-pad text-center rcost" name="cost[]" type="text" value="' + item_cost + '" data-id="' + row_no + '" data-item="' + item_id + '" id="cost_' + row_no + '" onClick="this.select();" ></td>';

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



    var row = $("#addMoreBlank").html();

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
    .remove_item_0,
    .d-none {
        display: none;
    }
</style>