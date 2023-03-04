<?php (defined('BASEPATH')) or exit('No direct script access allowed'); ?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <title>
    <?= $page_title . ' | ' . $Settings->site_name; ?>
  </title>
  <link rel="shortcut icon" href="<?= $assets ?>img/icon.png" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?= $assets ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= $assets ?>plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="<?= $assets ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
    body {
      background-color: #ecf0f5;
    }

    .table th {
      text-align: center;
    }

    .inv-logo {
      text-align: center;
    }

    .inv-logo img {
      width: 100%;
    }
  </style>
</head>

<body>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="inv-logo">
          <img src="<?= base_url('themes/default/assets/images/chalan.png') ?>" height="200px;" alt="<?= $Settings->site_name ?>" />
        </div>
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">
              <strong><?= 'Chalan # ' . $transfers_mst->id; ?></strong>
            </h3>
          </div>
          <div class="box-body">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <tbody>

                        <tr>
                          <td class="col-xs-2"><strong><?= lang('date'); ?></strong></td>
                          <td class="col-xs-10"><?= $this->tec->hrld($transfers_mst->date); ?></td>
                        </tr>
                        <tr>
                          <td class="col-xs-2"><strong>Form Store</strong></td>
                          <td class="col-xs-10"><?= $transfers_mst->from_warehouse_name; ?></td>
                        </tr>
                        <tr>
                          <td class="col-xs-2"><strong>To Store</strong></td>
                          <td class="col-xs-10"><?= $transfers_mst->to_warehouse_name ; ?></td>
                        </tr>
                        <tr>
                          <td class="col-xs-2"><strong>Status</strong></td>
                          <td class="col-xs-10"><?= $transfers_mst->status; ?></td>
                        </tr>
                        <tr>
                          <td class="col-xs-2"><strong>Reference</strong></td>
                          <td class="col-xs-10"><?= $transfers_mst->reference; ?></td>
                        </tr>
        
                      </tbody>
                    </table>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr class="active">
                            <th class="col-xs-1">SL</th>
                            <th class="col-xs-5">Product Name</th>
                            <th class="col-xs-2">Quantity</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $grand_total=0;
                          if ($transfers_dtls) {
                            $sl=1;
                            foreach ($transfers_dtls as $key => $val) {
                              ?>
                              <tr>
                                <td class="text-center"><?=$sl;?></td> 
                                <td class="text-center"><?=$val->product_name." ( ".$val->product_code." )";?></td> 
                                <td class="text-center"><?=$val->quantity;?></td> 
                              </tr>
                              <?php
                              $sl++;
                              $grand_total+=$val->subtotal;

                            }
                          }

                          ?>
                        </tbody>
                      </table>
                    </div>
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td class="col-xs-2"><strong>Note</strong></td>
                          <td class="col-xs-10"><?= $transfers_mst->note; ?></td>
                        </tr>        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>