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
              <strong><?= 'Production # ' . $production_mst->id; ?></strong>
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
                          <td class="col-xs-2"><strong>Batch No</strong></td>
                          <td class="col-xs-4"><?= $production_mst->batch_no; ?></td>
                          <td class="col-xs-2"><strong>Recipe Name</strong></td>
                          <td class="col-xs-4"><?= $production_mst->recipe_name; ?></td>
                        </tr>
                        <tr>
                          <td class="col-xs-2"><strong>Target Quantity</strong></td>
                          <td class="col-xs-4"><?= $production_mst->target_qty.' '.$production_mst->uom_name; ?></td>
                          <td class="col-xs-2"><strong>Actual Output</strong></td>
                          <td class="col-xs-4"><?= $production_mst->actual_output; ?></td>
                        </tr>
                        <tr>
                          <!-- <td class="col-xs-2"><strong>Product</strong></td>
                          <td class="col-xs-4"><?= $production_mst->products_name; ?></td> -->
                          <td class="col-xs-2"><strong><?= lang('date'); ?></strong></td>
                          <td class="col-xs-4"><?= $this->tec->hrld($production_mst->date); ?></td>
                        </tr>
        
                      </tbody>
                    </table>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered">
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
                        <tbody>
                          <?php

                          if ($production_dtls) {
                            $tc = 0;
                            $sl=1;
                            foreach ($production_dtls as $key => $val) {
                              ?>
                              <tr>
                              <td class=" text-center"><?=$sl;?></td> 
                              <td class=" text-center"><?=$val->name?></td> 
                              <td class=" text-center"><?=$val->brand_name?></td> 
                              <td class=" text-center"><?=$val->stock_qty.' '.$val->unit_name?></td> 
                              <td class=" text-center"><?=$val->quantity?></td> 
                              <td class=" text-center"><?=$val->cost?></td> 
                              </tr>
                              <?php
                              $sl++;
                              $tc += $val->cost;

                            }
                            ?>
                            <tr>
                              <td class="text-right" colspan="5">Grand Total</td>
                              <td class=" text-center" ><?= number_format($tc, 2)?></td>
                            </tr>

                            <?php

                          }

                          ?>
                        </tbody>

                      </table>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                          <tr class="active">
                            <th class="col-xs-1">SL</th>
                            <th class="col-xs-3">Product Name</th>
                            <th class="col-xs-2">Product Quantity</th>
                            <th class="col-xs-3">Packaging Name</th>
                            <th class="col-xs-1">Quantity</th>
                          </tr>
                        </thead>
                      <tbody>
                        <?php 
                        $i=1;
                        foreach($packaging_dtls as $key=>$val){
                          ?>
                          <tr>
                            <td class="col-xs-1 text-center"><?=$i++;?></td>
                            <td class="col-xs-3 text-center" ><?= $val->product_name; ?></td>
                            <td class="col-xs-2 text-center"><?= $val->prod_quantity; ?></td>
                            <td class="col-xs-3 text-center" ><?= $val->name; ?></td>
                            <td class="col-xs-1 text-center"><?= $val->quantity; ?></td>
                          </tr>
                          <?php
                         }
                        ?>
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