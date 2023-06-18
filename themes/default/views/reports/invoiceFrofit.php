  <script>
      $(document).ready(function() {

          function image(n) {

              if (n !== null) {

                  return '<div style="width:32px; margin: 0 auto;"><a href="<?= base_url(); ?>uploads/' + n + '" class="open-image"><img src="<?= base_url(); ?>uploads/thumbs/' + n + '" alt="" class="img-responsive"></a></div>';

              }

              return '';

          }

          function method(n) {

              return (n == 0) ? '<span class="label label-primary"><?= lang('inclusive'); ?></span>' : '<span class="label label-warning"><?= lang('exclusive'); ?></span>';

          }

          $('#SLData').dataTable({
              "aaSorting": [
                  [2, "asc"]
              ],
              "iDisplayLength": <?= $Settings->rows_per_page ?>,
          });

      });
  </script>
  <script type="text/javascript">
      $(document).ready(function() {

          /* $('#form').hide();

          $('.toggle_form').click(function(){

              $("#form").slideToggle();

              return false;

          }); */

      });
  </script>
  <style type="text/css">
      .dataTables_length {
          display: none !important;
      }

      /*#fileData_length {
    display: none !important;*/
  </style>

  <section class="content">

      <div class="row">

          <div class="col-xs-12">

              <div class="box box-primary">

                  <div class="box-header">

                      <h3 class="box-title"><?= lang('list_results'); ?></h3>
                      <!-- <a href="<?= site_url('reports/excel_invoiceProfit'); ?>" style="width:120px; float:right" class="btn btn-default btn-sm toggle_form pull-right" id="excelWindow">Download Report</a>  -->
                      <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="excelWindow">Download Report</button>
                      <button type="button" style="width:120px; float:right" class="btn btn-default btn-sm pull-right" id="printWindow">Print</button>

                      <?php if ($this->Admin) : ?>
                          <?= form_open(""); ?>
                          <div class="row">
                              <div class="col-sm-3">
                                  <div class="form-group">
                                      <?= lang('Store', 'Store'); ?>
                                      <?php
                                        $wr[0] = lang("select") . " " . lang("Store");
                                        foreach ($stores as $store) {
                                            $wr[$store->id] = $store->name;
                                        }
                                        ?>
                                      <?= form_dropdown('store_id', $wr, set_value('store_id'), 'class="form-control select2 tip" id="store_id" required="required" style="width:100%;"'); ?>
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <div class="form-group">
                                      <label class="control-label" for="start_date"><?= lang("start_date"); ?></label>
                                      <?= form_input('start_date', set_value('start_date'), 'class="form-control datepicker" id="start_date"'); ?>
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <div class="form-group">
                                      <label class="control-label" for="end_date"><?= lang("end_date"); ?></label>
                                      <?= form_input('end_date', set_value('end_date'), 'class="form-control datepicker" id="end_date"'); ?>
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <button type="submit" class="btn btn-primary"><?= lang("submit"); ?></button>
                              </div>
                          </div>
                          <?= form_close(); ?>
                      <?php endif; ?>

                  </div>
                  <?php if ($this->session->userdata('group_id') == 2) {

                        $u_id = $this->session->userdata('user_id');
                    } else {
                        $u_id = NULL;
                    }; ?>

                  <div class="box-body">
                      <div class="table-responsive" id="print_content">

                          <table id="SLData" class="table table-striped table-bordered table-condensed table-hover">

                              <thead>

                                  <tr class="active">
                                      <th style="width: 150px;"><?php echo $this->lang->line("date"); ?></th>
                                      <th>Store Name</th>
                                      <th>Inv NO </th>
                                      <th>Quentity</th>
                                      <th><?php echo $this->lang->line("Customer Name"); ?></th>
                                      <th><?php echo $this->lang->line("grand_total"); ?></th>
                                      <th><?php echo $this->lang->line("Cost Price"); ?></th>
                                      <th><?php echo $this->lang->line("Profit"); ?></th>
                                      <th><?php echo $this->lang->line("Action"); ?></th>

                                  </tr>

                              </thead>

                              <tbody>
                                  <?php foreach ($results as $key => $result) { ?>
                                      <tr>
                                          <td><?php echo $this->tec->hrld($result['date']); ?></td>
                                          <?php $storeName = $this->site->getDataByElement('stores', 'id', $result['store_id']); ?>
                                          <td><?php echo $storeName[0]->name; ?></td>
                                          <td><?php echo $result['id']; ?></td>
                                          <td><?php echo $result['qty']; ?></td>
                                          <td><?php echo $result['customer_name']; ?></td>
                                          <td><?php echo $result['total']; ?></td>
                                          <td><?php echo number_format($result['cost_price'], 2, '.', ''); ?></td>
                                          <td><?php echo ($result['total'] - $result['cost_price']); ?></td>
                                          <?php
                                            $actdata = "<a href='#' onClick=\"MyWindow=window.open('" . site_url('pos/view/' . $result['id'] . '/1') . "', 'MyWindow','toolbar=no,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,resizable=yes,width=350,height=600'); return false;\" title='" . lang("view_invoice") . "' class='tip btn btn-primary btn-xs'><i class='fa fa-list'></i></a>";

                                            ?>
                                          <td><?php echo $actdata; ?> </td>
                                      </tr>

                                  <?php } ?>

                              </tbody>

                          </table>
                      </div>

                      <div class="clearfix"></div>

                  </div>

              </div>

          </div>

      </div>

  </section>
  <script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/moment.min.js" type="text/javascript"></script>
  <script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
  <script>
      $(function() {

          $('.datepicker').datetimepicker({

              format: 'YYYY-MM-DD'

          });

      });

      $("#excelWindow").click(function() {
          var data = $("#store_id").val()+'__'+$("#start_date").val()+'__'+$("#end_date").val();
          var url = '<?= site_url('reports/excel_invoiceProfit/'); ?>' + '/' + data;
          location.replace(url);
      });

      $("#printWindow").click(function() {
          $(".dataTables_info").css("display", "none");
          $(".dataTables_length, .dataTables_filter ").css("display", "none");

          $(".dataTables_paginate ").css("display", "none");
          $("#fileData_filter ").css("display", "none");
          var content = "<html> <br><img width='800px' src='<?= base_url('themes/default/assets/images/chalan.png'); ?>'><br><p style='text-align:center'> Invoice Profit  | <?php echo $this->Settings->site_name; ?> </p><style> table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td, th {border: 1px solid #dddddd;text-align: left;padding: 2px;} tr:nth-child(even) {background-color: #dddddd;} </style>";
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