<?php  (defined('BASEPATH')) OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<style>

  .bootstrap-datetimepicker-widget.dropdown-menu {
    /* background: green !important; */
    color: green !important;
  }

  .datepicker table tr td.active:active, 
  .datepicker table tr td.active.highlighted:active, 
  .datepicker table tr td.active.active, 
  .datepicker table tr td.active.highlighted.active {
    background-color: green;
    color: white !important;
  }


</style>

<html>
<head>
<meta charset="UTF-8">
<title>
<?= $page_title.' | '.$Settings->site_name; ?>
</title>
<link rel="shortcut icon" href="<?= $assets ?>img/icon.png"/>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link href="<?= $assets ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?= $assets ?>plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?= $assets ?>plugins/iCheck/square/green.css" rel="stylesheet" type="text/css" />
<link href="<?= $assets ?>plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
<link href="<?= $assets ?>plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?= $assets ?>plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<link href="<?= $assets ?>plugins/redactor/redactor.css" rel="stylesheet" type="text/css" />
<link href="<?= $assets ?>dist/css/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="<?= $assets ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<link href="<?= $assets ?>dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
<link href="<?= $assets ?>dist/css/custom.css" rel="stylesheet" type="text/css" />
<link href="<?= $assets ?>dist/css/jquery.ultraselect.css" rel="stylesheet" type="text/css" />
<script src="<?= $assets ?>plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>

</head>


<body class="skin-green sidebar-collapse sidebar-mini pos">

<div class="wrapper">
  <header class="main-header"> <a href="<?= site_url(); ?>" class="logo"> <span class="logo-mini">POS</span> <span class="logo-lg">
    <?= $Settings->site_name == 'SimplePOS' ? 'Simple<b>POS</b>' : '<img src="'.base_url('assets/uplaods/'.$Settings->logo).'" alt="'.$Settings->site_name.'" />'; ?>
    </span> </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <ul class="nav navbar-nav pull-left">
        <li class="dropdown"> 
          
            <a href="<?= base_url(); ?>" title= "All Menu List" class="sidebar-toggle" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
          
        </li>
      </ul>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li><a href="#" class="clock"></a></li>
          <li><a href="<?= site_url(); ?>"><i class="fa fa-dashboard"></i></a></li>
          <?php if($Admin) { ?>
          <li><a href="<?= site_url('settings'); ?>"><i class="fa fa-cogs"></i></a></li>
          <?php } ?>
          <!-- <li><a href="<?= site_url('pos/view_bill'); ?>" target="_blank"><i class="fa fa-file-text-o"></i></a></li> -->
          <li><a href="<?= site_url('pos/shortcuts'); ?>" data-toggle="ajax"><i class="fa fa-key"></i></a></li>
          <li><a href="<?= site_url('pos/register_details'); ?>" data-toggle="ajax">
            <?= lang('register_details'); ?>
            </a></li>
          <?php if($Admin) { ?>
          <li><a href="<?= site_url('pos/today_sale'); ?>" data-toggle="ajax">
            <?= lang('today_sale'); ?>
            </a></li>
          <?php } ?>
          <li><a href="<?= site_url('pos/close_register'); ?>" data-toggle="ajax">
            <?= lang('close_register'); ?>
            </a></li>
          <?php if($suspended_sales) { ?>
          <li class="dropdown notifications-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="label label-warning">
            <?=sizeof($suspended_sales);?>
            </span> </a>
            <ul class="dropdown-menu">
              <li class="header">
                <?=lang('recent_suspended_sales');?>
              </li>
              <li>
                <ul class="menu">
                  <li>
                    <?php
				                foreach ($suspended_sales as $ss) {
				                    echo '<a href="'.site_url('pos/?hold='.$ss->id).'" class="load_suspended">'.$this->tec->hrld($ss->date).' ('.$ss->customer_name.')<br><strong>'.$ss->hold_ref.'</strong></a>';
				                }
				                ?>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="<?= site_url('sales/opened'); ?>">
                <?= lang('view_all'); ?>
                </a></li>
            </ul>
          </li>
          <?php } ?>
          <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?= base_url('uploads/avatars/thumbs/'.($this->session->userdata('avatar') ? $this->session->userdata('avatar') : $this->session->userdata('gender').'.png')) ?>" class="user-image" alt="Avatar" /> <span>
            <?= $this->session->userdata('first_name').' '.$this->session->userdata('last_name'); ?>
            </span> </a>
            <ul class="dropdown-menu">
              <li class="user-header"> <img src="<?= base_url('uploads/avatars/'.($this->session->userdata('avatar') ? $this->session->userdata('avatar') : $this->session->userdata('gender').'.png')) ?>" class="img-circle" alt="Avatar" />
                <p>
                  <?= $this->session->userdata('email'); ?>
                  <small>
                  <?= lang('member_since').' '.$this->session->userdata('created_on'); ?>
                  </small> </p>
              </li>
              <li class="user-footer">
                <div class="pull-left"> <a href="<?= site_url('users/profile/'.$this->session->userdata('user_id')); ?>" class="btn btn-default btn-flat">
                  <?= lang('profile'); ?>
                  </a> </div>
                <div class="pull-right"> <a href="<?= site_url('logout'); ?>" class="btn btn-default btn-flat">
                  <?= lang('sing_out'); ?>
                  </a> </div>
              </li>
            </ul>
          </li>
          <li> <a href="#" data-toggle="control-sidebar" class="sidebar-icon"><i class="fa fa-folder sidebar-icon"></i></a> </li>
        </ul>
      </div>
    </nav>
  </header>
 <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        
        <!-- <li class="header"><?= lang('mian_navigation'); ?></li> -->
        
        <li class="mm_welcome"><a href="<?= site_url(); ?>"><i class="fa fa-dashboard"></i> <span>
          <?= lang('dashboard'); ?>
          </span></a></li>
        <li class="mm_pos"><a href="<?= site_url('pos'); ?>"><i class="fa fa-th"></i> <span>
          <?= lang('pos'); ?>
          </span></a></li>
        <?php if($Admin) { ?>
        <li class="treeview mm_products"> <a href="#"> <i class="fa fa-barcode"></i> <span>
          <?= lang('products'); ?>
          </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li id="products_index"><a href="<?= site_url('products'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('list_products'); ?>
              </a></li>
            <li id="products_add"><a href="<?= site_url('products/add'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('add_product'); ?>
              </a></li>
            <li id="products_import"><a href="<?= site_url('products/import'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('import_products'); ?>
              </a></li>
            <li id="products_print_barcodes"><a onclick="window.open('<?= site_url('products/print_barcodes'); ?>', 'pos_popup', 'width=900,height=600,menubar=yes,scrollbars=yes,status=no,resizable=yes,screenx=0,screeny=0'); return false;" href="#"><i class="fa fa-circle-o"></i>
              <?= lang('print_barcodes'); ?>
              </a></li>
            <li id="products_print_labels"><a onclick="window.open('<?= site_url('products/print_labels'); ?>', 'pos_popup', 'width=900,height=600,menubar=yes,scrollbars=yes,status=no,resizable=yes,screenx=0,screeny=0'); return false;" href="#"><i class="fa fa-circle-o"></i>
              <?= lang('print_labels'); ?>
              </a></li>
          </ul>
        </li>
        <li class="treeview mm_categories"> <a href="#"> <i class="fa fa-folder"></i> <span>
          <?= lang('categories'); ?>
          </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li id="categories_index"><a href="<?= site_url('categories'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('list_categories'); ?>
              </a></li>
              <li id="categories_index"><a href="<?= site_url('categories/available_cat'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('Available Cat Qty'); ?>
            </a></li>
            <li id="categories_add"><a href="<?= site_url('categories/add'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('add_category'); ?>
              </a></li>
            <li id="categories_import"><a href="<?= site_url('categories/import'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('import_categories'); ?>
              </a></li>
          </ul>
        </li>
        <li class="treeview mm_sales"> <a href="#"> <i class="fa fa-shopping-cart"></i> <span>
          <?= lang('sales'); ?>
          </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li id="sales_today"><a href="<?= site_url('sales/today'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Today sales'); ?>
              </a></li>
              <li id="sales_index"><a href="<?= site_url('sales'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('list_sales'); ?>
              </a></li>
            <li id="sales_opened"><a href="<?= site_url('sales/opened'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('list_opened_bills'); ?>
              </a></li>
          </ul>
        </li>
        <!-- <li class="treeview mm_service"> <a href="#"><i class="fa fa-tree" aria-hidden="true"></i><span>Service</span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li id="sales_index"><a href="<?= site_url('service'); ?>"><i class="fa fa-circle-o"></i> List Service</a></li>
            <li id="sales_opened"><a href="javascript:;" onClick="servicePage('Service')"><i class="fa fa-circle-o"></i> Add Service</a></li>
          </ul>
        </li> -->
        <li class="treeview mm_purchases"> <a href="#"> <i class="fa fa-plus"></i> <span>
          <?= lang('Product purchases'); ?>
          </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li id="purchases_today"><a href="<?= site_url('purchases/today'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Today\'s Purchases'); ?>
              </a></li>
            <li id="purchases_index"><a href="<?= site_url('purchases'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('list_purchases'); ?>
              </a></li>
            <li id="purchases_add"><a href="<?= site_url('purchases/add'); ?>"><i class="fa fa-circle-o"></i>
                <?= lang('add_purchase'); ?>
                </a></li>
            <li class="divider"></li>         
          </ul>
        </li>
       <li class="treeview mm_supplierpayment"> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>
          <?= lang('Supplier\'s payments'); ?>
          </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li id="supplierpayment_purchase_payment"><a href="<?= site_url('supplierpayment/purchase_payment'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Add Payments'); ?>
              </a></li>
            <li id="supplierpayment_paymentList"><a href="<?= site_url('supplierpayment/paymentList'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Payments list'); ?>
              </a></li>
            <li class="divider"></li>         
          </ul>
        </li>
        <li class="treeview mm_expenses"> <a href="#"><i class="fa fa-delicious" aria-hidden="true"></i>
          <span>
          <?= lang('Expenses'); ?>
          </span> <i class="fa fa-angle-left pull-right"></i> </a>
           <ul class="treeview-menu">
           <li id="expenses_add_category"><a href="<?= site_url('expenses/add_category'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('Add category'); ?>
            </a></li>
            <li id="expenses_listcategory"><a href="<?= site_url('expenses/listcategory'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('Category list'); ?>
            </a></li>
            <li id="expenses_index"><a href="<?= site_url('expenses'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('list_expenses'); ?>
            </a></li>
          <li id="expenses_add_expense"><a href="<?= site_url('expenses/add_expense'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('add_expense'); ?>
            </a></li>
        </ul>
        </li>
        <li class="treeview mm_collection"> <a href="#"><i class="fa fa-reply" aria-hidden="true"></i>
          <span>
          <?= lang('Collections'); ?>
          </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li id="gift_cards_index"><a href="<?= site_url('collection'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Collections list'); ?>
              </a></li>
            <li id="gift_cards_add"><a href="<?= site_url('collection/collectionpayment'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Add Collections'); ?>
              </a></li>
          </ul>
        </li>
        <li class="treeview mm_reports"> <a href="#"> <i class="fa fa-bar-chart-o"></i> <span>
          <?= lang('reports'); ?>
          </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li id="reports_daily_statement"><a href="<?= site_url('reports/daily_statement'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Daily Statement'); ?>
              </a></li>
            <li id="reports_todayhighlight"><a href="<?= site_url('reports/todayhighlight'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Today\'s Highlights'); ?>
              </a></li>
              <!-- <li id="reports_pettycash"><a href="<?= site_url('reports/pettycash'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Petty Cash'); ?></a></li>
              <li id="reports_pettycashlist"><a href="<?= site_url('reports/pettycashlist'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Petty Cash list'); ?></a></li> -->
              <li id="reports_payablelist"><a href="<?= site_url('reports/payablelist'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Account Payable'); ?></a></li>
              <li id="reports_receivablelist"><a href="<?= site_url('reports/receivablelist'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Acount Receivable'); ?>
              </a></li>
              <li id="reports_netprofit"><a href="<?= site_url('reports/netprofit'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Net Profit'); ?>
              </a></li>
            <li id="reports_daily_sales"><a href="<?= site_url('reports/daily_sales'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('daily_sales'); ?>
              </a></li>
            <li id="reports_monthly_sales"><a href="<?= site_url('reports/monthly_sales'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('monthly_sales'); ?>
              </a></li>
            <li id="reports_index"><a href="<?= site_url('reports'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('sales_report'); ?>
              </a></li>
            <li class="divider"></li>
            <li id="reports_payments"><a href="<?= site_url('reports/payments'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('payments_report'); ?>
              </a></li>
            <li class="divider"></li>
            <li id="reports_registers"><a href="<?= site_url('reports/registers'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('registers_report'); ?>
              </a></li>
            <li class="divider"></li>
            <li id="reports_top_products"><a href="<?= site_url('reports/top_products'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('top_products'); ?>
              </a></li>
            <li id="reports_products"><a href="<?= site_url('reports/products'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('products_report'); ?>
              </a></li>
            <li id="reports_products_staff"><a href="<?= site_url('reports/products_staff'); ?>"><i class="fa fa-circle-o"> </i>Products list (Staff) </a></li>
            <li id="reports_products_all"><a href="<?= site_url('reports/products_all'); ?>"><i class="fa fa-circle-o"> </i>Products list (All) </a></li>
            <li id="reports_product_stock"><a href="<?= site_url('reports/product_stock'); ?>"><i class="fa fa-circle-o"> </i>Products Stock </a></li>

            <li id="reports_store_product_stock"><a href="<?= site_url('reports/store_product_stock'); ?>"><i class="fa fa-circle-o"> </i>Store Stock Product </a></li>
            <li id="reports_invoiceProfit"><a href="<?= site_url('reports/invoiceProfit'); ?>"><i class="fa fa-circle-o"> </i>Invoice Profit</a></li>
            <li id="reports_salaryReport"><a href="<?= site_url('reports/salaryReport'); ?>"><i class="fa fa-circle-o"> </i>Salary Report</a></li>
            <li id="reports_expensesReport"><a href="<?= site_url('reports/expenses_rpt'); ?>"><i class="fa fa-circle-o"> </i>Expenses Report</a></li>
            <li id="reports_creditCollectionReport"><a href="<?= site_url('reports/credit_collection_rpt'); ?>"><i class="fa fa-circle-o"> </i>Credit Collection</a></li>
            <li id="reports_aging_Report"><a href="<?= site_url('reports/aging_rpt'); ?>"><i class="fa fa-circle-o"> </i>Aging Report</a></li>


          </ul>
        </li>

        <!-- <li class="treeview mm_merge"> <a href="#"><i class="fa fa-exchange"></i>
           <span>
            <?= lang('Merge'); ?>
           </span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
            <li id="merge_index"><a href="<?= site_url('merge'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Merge list'); ?>
              </a></li>
              <li id="merge_add_merge"><a href="<?= site_url('merge/add_merge'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Add merge'); ?>
              </a></li>
            <li id="merge_laser"><a href="<?= site_url('merge/laser'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('Laser list'); ?>
              </a></li>
          </ul>
        </li> -->

        <!-- <li class="treeview mm_gift_cards"> <a href="#"> <i class="fa fa-credit-card"></i> <span>
          <?= lang('gift_cards'); ?>
          </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li id="gift_cards_index"><a href="<?= site_url('gift_cards'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('list_gift_cards'); ?>
              </a></li>
            <li id="gift_cards_add"><a href="<?= site_url('gift_cards/add'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('add_gift_card'); ?>
              </a></li>
          </ul>
        </li> -->
        <li class="treeview mm_gift_cards"> <a href="#"><i class="fa fa-university" aria-hidden="true"></i>
          <span>Bank Account</span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li id="gift_cards_index"><a href="<?= site_url('bank'); ?>"><i class="fa fa-circle-o"></i>List Bank Account</a></li>
            <li id="gift_cards_add"><a href="<?= site_url('bank/add'); ?>"><i class="fa fa-circle-o"></i>New Bank Account</a></li>
          </ul>
        </li>
        <li class="treeview mm_auth mm_customers mm_suppliers"> <a href="#"> <i class="fa fa-users"></i> <span>
          <?= lang('people'); ?>
          </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li id="auth_users"><a href="<?= site_url('users'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('list_users'); ?>
              </a></li>
            <li id="auth_add"><a href="<?= site_url('users/add'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('add_user'); ?>
              </a></li>
            <li class="divider"></li>
            <li id="auth_users"><a href="<?= site_url('employee'); ?>"><i class="fa fa-circle-o"></i> List Employee</a></li>
            <li id="auth_add"><a href="<?= site_url('employee/add'); ?>"><i class="fa fa-circle-o"></i> Add Employee </a></li>
            <li class="divider"></li>
            <li id="customers_index"><a href="<?= site_url('customers'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('list_customers'); ?>
              </a></li>
            <li id="customers_add"><a href="<?= site_url('customers/add'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('add_customer'); ?>
              </a></li>
            <li class="divider"></li>
            <li id="suppliers_index"><a href="<?= site_url('suppliers'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('list_suppliers'); ?>
              </a></li>
            <li id="suppliers_add"><a href="<?= site_url('suppliers/add'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('add_supplier'); ?>
              </a></li>
          </ul>
        </li>
        <li class="treeview mm_settings"> <a href="#"> <i class="fa fa-cogs"></i> <span>
          <?= lang('settings'); ?>
          </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li id="settings_index"><a href="<?= site_url('settings'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('settings'); ?>
              </a></li>
            
              <li id="settings_backups"><a href="<?= site_url('settings/backups'); ?>"><i class="fa fa-circle-o"></i> <?= lang('backups'); ?></a></li>   
            
            <!--   <li id="settings_updates"><a href="<?= site_url('settings/updates'); ?>"><i class="fa fa-circle-o"></i> <?= lang('updates'); ?></a></li>  -->
            
          </ul>
        </li>
        
        <?php } else { 

          // Staffs right Access parmition 

          ?>
        <li class="treeview mm_products"> <a href="#"> <i class="fa fa-barcode"></i> <span>
        <?= lang('products'); ?>
        </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li id="products_index"><a href="<?= site_url('products'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('list_products'); ?>
            </a></li>
          <li id="products_add"><a href="<?= site_url('products/add'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('add_product'); ?>
            </a></li>
          <li id="products_import"><a href="<?= site_url('products/import'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('import_products'); ?>
            </a></li>
          <li id="products_print_barcodes"><a onclick="window.open('<?= site_url('products/print_barcodes'); ?>', 'pos_popup', 'width=900,height=600,menubar=yes,scrollbars=yes,status=no,resizable=yes,screenx=0,screeny=0'); return false;" href="#"><i class="fa fa-circle-o"></i>
            <?= lang('print_barcodes'); ?>
            </a></li>
          <li id="products_print_labels"><a onclick="window.open('<?= site_url('products/print_labels'); ?>', 'pos_popup', 'width=900,height=600,menubar=yes,scrollbars=yes,status=no,resizable=yes,screenx=0,screeny=0'); return false;" href="#"><i class="fa fa-circle-o"></i>
            <?= lang('print_labels'); ?>
            </a></li>
        </ul>
      </li>
       <li class="treeview mm_categories"> <a href="#"> <i class="fa fa-folder"></i> <span>
        <?= lang('categories'); ?>
        </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li id="categories_index"><a href="<?= site_url('categories'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('list_categories'); ?>
            </a></li>         
          <li id="categories_add"><a href="<?= site_url('categories/add'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('add_category'); ?>
            </a></li>          
        </ul>
      </li>
        </span></a></li>
      <li class="treeview mm_purchases"> <a href="#"> <i class="fa fa-plus"></i> <span>
        <?= lang('Product purchases'); ?>
        </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li id="purchases_index"><a href="<?= site_url('purchases/today'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('Today\'s Purchases'); ?>
            </a></li>
          <li id="purchases_index"><a href="<?= site_url('purchases'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('list_purchases'); ?>
            </a></li>
          <li id="purchases_add"><a href="<?= site_url('purchases/add'); ?>"><i class="fa fa-circle-o"></i>
              <?= lang('add_purchase'); ?>
              </a></li>
          <li class="divider"></li>         
        </ul>
      </li>
      <li class="treeview mm_sales"> <a href="#"> <i class="fa fa-shopping-cart"></i> <span>
        <?= lang('sales'); ?>
        </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
        <li id="sales_index"><a href="<?= site_url('sales/today'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('Today sales'); ?>
          <li id="sales_index"><a href="<?= site_url('sales'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('list_sales'); ?>
            </a></li>
          <li id="sales_opened"><a href="<?= site_url('sales/opened'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('list_opened_bills'); ?>
            </a></li>
        </ul>
      </li>
      <li class="treeview mm_collection"> <a href="#"><i class="fa fa-reply" aria-hidden="true"></i>
<span>
        <?= lang('Collections'); ?>
        </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li id="gift_cards_index"><a href="<?= site_url('collection'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('Collections list'); ?>
            </a></li>
          <li id="gift_cards_add"><a href="<?= site_url('collection/collectionpayment'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('Add Collections'); ?>
            </a></li>
        </ul>
      </li>
       <li class="treeview mm_supplierpayment"> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>
        <?= lang('Supplier\'s payments'); ?>
        </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li id="supplierpayment_payment"><a href="<?= site_url('supplierpayment/purchase_payment'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('Add Payments'); ?>
            </a></li>
          <li id="supplierpayment_paymentList"><a href="<?= site_url('supplierpayment/paymentList'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('Payments list'); ?>
            </a></li>
          <li class="divider"></li>         
        </ul>
      </li>
      <li class="treeview mm_expenses"> <a href="#"><i class="fa fa-delicious" aria-hidden="true"></i>
<span>
        <?= lang('Expenses'); ?>
        </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
        <li id="expenses_add_category"><a href="<?= site_url('expenses/add_category'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('Add category'); ?>
            </a></li>
            <li id="expenses_listcategory"><a href="<?= site_url('expenses/listcategory'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('Category list'); ?>
            </a></li>
            <li id="expenses_index"><a href="<?= site_url('expenses'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('list_expenses'); ?>
            </a></li>
          <li id="expenses_add_expense"><a href="<?= site_url('expenses/add_expense'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('add_expense'); ?>
            </a></li>
        </ul>
      </li>
      
      <li class="treeview mm_customers"> <a href="#"> <i class="fa fa-users"></i> <span>
        <?= lang('customers'); ?>
        </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li id="customers_index"><a href="<?= site_url('customers'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('list_customers'); ?>
            </a></li>
          <li id="customers_add"><a href="<?= site_url('customers/add'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('add_customer'); ?>
            </a></li>
        </ul>
      </li>
      <li class="treeview mm_suppliers"> <a href="#"> <i class="fa fa-users"></i> <span>
        <?= lang('suppliers'); ?>
        </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li id="suppliers_index"><a href="<?= site_url('suppliers'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('list_suppliers'); ?>
            </a></li>
          <li id="suppliers_add"><a href="<?= site_url('suppliers/add'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('add_supplier'); ?>
            </a></li>
        </ul>
      </li>
      <li class="treeview mm_reports"> <a href="#"> <i class="fa fa-bar-chart-o"></i> <span>
        <?= lang('reports'); ?>
        </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu"> 
            </a></li>
            <li id="reports_pettycash"><a href="<?= site_url('reports/pettycash'); ?>"><i class="fa fa-circle-o"></i>
            <?= lang('Petty Cash'); ?> 
          <li id="reports_products_staff"><a href="<?= site_url('reports/products_staff'); ?>"><i class="fa fa-circle-o"> </i>Products list (Staff) </a></li>  
        </ul>
      </li>
      <li class="treeview mm_settings"> <a href="#"> <i class="fa fa-cogs"></i> <span>
        <?= lang('settings'); ?>
        </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">          
          
            <li id="settings_backups"><a href="<?= site_url('settings/backups'); ?>"><i class="fa fa-circle-o"></i> <?= lang('backups'); ?></a></li> 
          
        </ul>
      </li>
        <?php } ?>
      </ul>
    </section>
</aside>
  <div class="content-wrapper">
    <div class="col-lg-12 alerts">
      <?php if($error)  { ?>
      <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4><i class="icon fa fa-ban"></i>
          <?= lang('error'); ?>
        </h4>
        <?= $error; ?>
      </div>
      <?php } if($message) { ?>
      <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4><i class="icon fa fa-check"></i>
          <?= lang('Success'); ?>
        </h4>
        <?= $message; ?>
      </div>
      <?php } ?>
    </div>
    <table style="width:100%;" class="layout-table">
      <tr>
        <td style="width: 660px;"><div id="pos">
            <?= form_open('pos', 'id="pos-sale-form"'); ?>
            <div class="well well-sm" id="leftdiv">
             
             <!--  select store  -->
                <?php if ($this->Admin ==1)
                 {
              $resultStore =  $this->site->findeNameByID('stores', 'id' ,$this->session->userdata('store_id_pos'));
            //   $resultStore =  $this->site->findeNameByID('stores', 'id' ,'1');
            //   echo "<pre>";print_r($resultStore);exit;
              $storeName = $resultStore->name ;
                ?>
                <div id="lefttop" style="margin-bottom:5px; ">
                <div class="form-group" style="margin-bottom:5px;">
                  <div class="input-group" >
                    <input type="" name="" readonly="" class="form-control" value="<?php echo $storeName ?>">
                    <div class="input-group-addon no-print" style="padding: 2px 5px;"> <a onclick="changeStpre()"  class="external" ><i class="fa fa-pencil-square" ></i></a></div>
                  </div>
                  <div style="clear:both;"></div>
                </div>
              </div>
                <?php }else{ ?>
                <input type="hidden" name="store_id" value="<?php echo $this->session->userdata('store_id')  ?>">

                <?php  } ?>
               <!--  Select coutomer  -->
              <div id="lefttop" style="margin-bottom:5px;">
                <div class="form-group" style="margin-bottom:5px;">
                  <!-- <div class="input-group" > -->
                    <samp id="customerDropdown">
                    <?php 
                    $cus=array(0=>"Select customer");
                    if(is_array($customers))
                    {
                      foreach($customers as $customer){ 
                        if($customer->phone){
                          $cPhone = ' ('.$customer->phone .')'; 
                        } else  {
                          $cPhone ='';
                        }
                        $cus[$customer->id] = $customer->name.$cPhone; 
                        } 
                    }
                      ?>

                      <!-- set_value('customer_id', $Settings->default_customer) -->
                    <?= form_dropdown('customer_id', $cus,'' , 'id="spos_customer" data-placeholder="' . lang("select") . ' ' . lang("customer") . '" required="required" class="form-control select2" style="width:100%;"'); ?>
                    </samp>
                    <div class="input-group-addon no-print" style="padding: 2px 5px; display:none;"> <a href="#" id="add-customer" class="external" data-toggle="modal" data-target="#myModal"><i class="fa fa-2x fa-plus-circle" id="addIcon"></i></a> </div>
                  <!-- </div> -->


                  <div style="clear:both;"></div>
                </div>


                <div class="form-group" style="margin-bottom:5px;">
                  <input type="text" name="code" id="add_item" class="form-control" placeholder="<?=lang('search__scan')?>" />
                </div>
              </div>

              <div id="printhead" class="print">
                <?= $Settings->header; ?>
                <p>Date:
                  <?=date($Settings->dateformat)?>
                </p>
              </div>
              <div id="print">
                <div id="list-table-div">
                  <table id="posTable" class="table table-striped table-condensed table-hover list-table" style="margin:0;">
                    <thead>
                      <tr class="success">
                        <th><?=lang('product')?></th>
                        <th style="width: 15%;text-align:center;"><?=lang('price')?></th>
                        <th style="width: 15%;text-align:center;"><?=lang('qty')?></th>
                        <th style="width: 10%;text-align:center;display:none;"><?=lang('Sequence')?></th>
                        <th style="width: 10%;text-align:center;display:none;">Warranty</th>
                        <th style="width: 15%;text-align:center;"><?=lang('subtotal')?></th>
                        <th style="width: 10%;" class="satu"><i class="fa fa-trash-o"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                  </table>
                </div>
                <div style="clear:both;"></div>
                <div id="totaldiv">
                  <table id="totaltbl" class="table table-condensed totals" style="margin-bottom:10px;">
                    <tbody>
                      <tr class="info">
                        <td width="25%"><?=lang('total_items')?></td>
                        <td class="text-right" style="padding-right:10px;"><span id="count">0</span></td>
                        <td width="25%"><?=lang('total')?></td>
                        <td class="text-right" colspan="3"><span id="total">0</span></td>
                      </tr>
                      <tr class="info">
                        <td width="25%"><a href="#" id="add_discount">
                          <?=lang('discount')?>
                          </a></td>
                        <td class="text-right" style="padding-right:10px;"><span id="ds_con">0</span></td>
                        <td width="25%"><a href="#" id="add_tax">
                          <?=lang('order_vat')?>
                          </a></td>
                        <td class="text-right"><span id="ts_con">0</span></td>
                      </tr>
                      <tr class="success">
                        <td colspan="2" style="font-weight:bold;"><?=lang('total_payable')?></td>
                        <td class="text-right" colspan="2" style="font-weight:bold;"><span id="total-payable">0</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="botbuttons" class="col-xs-12 text-center">
                <div class="row">
                  <div class="col-xs-4" style="padding: 0;">
                    <div class="btn-group-vertical btn-block">
                      <button type="button" class="btn btn-warning btn-block btn-flat"



														id="suspend">
                      <?= lang('hold'); ?>
                      </button>
                      <button type="button" class="btn btn-danger btn-block btn-flat"



														id="reset">
                      <?= lang('cancel'); ?>
                      </button>
                    </div>
                  </div>
                  <div class="col-xs-4" style="padding: 0 5px;">
                    <div class="btn-group-vertical btn-block">
                      <button type="button" class="btn bg-purple btn-block btn-flat" id="print_order">
                      <?= lang('print_order'); ?>
                      </button>
                      <button type="button" class="btn bg-navy btn-block btn-flat" id="print_bill">
                      <?= lang('print_bill'); ?>
                      </button>
                    </div>
                  </div>
                  <div class="col-xs-4" style="padding: 0;">
                    <button type="button" class="btn btn-success btn-block btn-flat" id="<?= $eid ? 'submit-sale' : 'payment'; ?>" style="height:67px;">
                    <?= $eid ? lang('submit') : lang('payment'); ?>
                    </button>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <span id="hidesuspend"></span>
              <input type="hidden" name="spos_note" value="" id="spos_note">
              <div id="payment-con">
                <input type="hidden" name="amount" id="amount_val" value="<?= $eid ? $sale->paid : ''; ?>"/>
                <input type="hidden" name="balance_amount" id="balance_val" value=""/>
                <input type="hidden" name="paid_by" id="paid_by_val" value="cash"/>
                <input type="hidden" name="delivery_date" id="delivery_date_val" value="<?=date('Y-m-d')?>"/>
                <input type="hidden" name="aging_day" id="aging_day_val" value="<?php echo $Settings->aging_day;?>"/>
                <input type="hidden" name="cc_no" id="cc_no_val" value=""/>
                <input type="hidden" name="paying_gift_card_no" id="paying_gift_card_no_val" value=""/>
                <input type="hidden" name="cc_holder" id="cc_holder_val" value=""/>
                <input type="hidden" name="cheque_no" id="cheque_no_val" value=""/>
                <input type="hidden" name="cheque_date" id="cheque_date_val" value=""/>
                <input type="hidden" name="tt_no" id="tt_no_val" value=""/>
                <input type="hidden" name="bank_id" id="bank_id_val" value="0"/>
                <input type="hidden" name="cc_month" id="cc_month_val" value=""/>
                <input type="hidden" name="cc_year" id="cc_year_val" value=""/>
                <input type="hidden" name="cc_type" id="cc_type_val" value=""/>
                <input type="hidden" name="cc_cvv2" id="cc_cvv2_val" value=""/>
                <input type="hidden" name="balance" id="balance_val" value=""/>
                <input type="hidden" name="payment_note" id="payment_note_val" value=""/>
              </div>
              <input type="hidden" name="customer" id="customer" value="<?=$Settings->default_customer?>" />
              <input type="hidden" name="order_tax" id="tax_val" value="" />
              <input type="hidden" name="order_discount" id="discount_val" value="" />
              <input type="hidden" name="count" id="total_item" value="" />
              <input type="hidden" name="did" id="is_delete" value="<?=$sid;?>" />
              <input type="hidden" name="eid" id="is_delete" value="<?=$eid;?>" />
              <input type="hidden" name="hold_ref" id="hold_ref" value="" />
              <input type="hidden" name="total_items" id="total_items" value="0" />
              <input type="hidden" name="total_quantity" id="total_quantity" value="0" />
              <input type="submit" id="submit" value="Submit Sale" style="display: none;" />
            </div>
            <?=form_close();?>
          </div></td>
        <td><div class="contents" id="right-col">
            <div id="item-list">
              <div class="items"> <?php echo $products; ?> </div>
            </div>
            <!-- <div class="product-nav">
              <div class="btn-group btn-group-justified">
                <div class="btn-group">
                  <button style="z-index:10002;" class="btn btn-warning pos-tip btn-flat" type="button" id="previous"><i class="fa fa-chevron-left"></i></button>
                </div>
                <div class="btn-group">
                  <button style="z-index:10003;" class="btn btn-success pos-tip btn-flat" type="button" id="sellGiftCard"><i class="fa fa-credit-card" id="addIcon"></i>
                  <?= lang('sell_gift_card') ?>
                  </button>
                </div>
                <div class="btn-group">
                  <button style="z-index:10004;" class="btn btn-warning pos-tip btn-flat" type="button" id="next"><i class="fa fa-chevron-right"></i></button>
                </div>
              </div>
            </div> -->
          </div>
        </td>
      </tr>
    </table>
  </div>
</div>
<div id="paySalary"></div>
<aside class="control-sidebar control-sidebar-dark" id="categories-list">
  <div class="tab-content">
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <ul class="control-sidebar-menu">
        <?php
							foreach($categories as $category) {

								echo '<li><a href="#" class="category'.($category->id == $Settings->default_category ? ' active' : '').'" id="'.$category->id.'">';

								if($category->image) {

									echo '<div class="menu-icon"><img src="'.base_url('uploads/thumbs/'.$category->image).'" alt="" class="img-thumbnail img-circle img-responsive"></div>';

								} else {

									echo '<i class="menu-icon fa fa-folder-open bg-red"></i>';

								}

								echo '<div class="menu-info"><h4 class="control-sidebar-subheading">'.$category->code.'</h4><p>'.$category->name.'</p></div>

							</a></li>';

						}

						?>
      </ul>
    </div>
  </div>
</aside>
<div class="control-sidebar-bg"></div>
</div>
</div>
<div id="order_tbl" style="display:none;"><span id="order_span"></span>
  <table id="order-table" class="prT table table-striped table-condensed" style="width:100%;margin-bottom:0;">
  </table>
</div>
<div id="bill_tbl" style="display:none;"><span id="bill_span"></span>
  <table id="bill-table" width="100%" class="prT table table-striped table-condensed" style="width:100%;margin-bottom:0;">
  </table>
  <table id="bill-total-table" width="100%" class="prT table table-striped table-condensed" style="width:100%;margin-bottom:0;">
  </table>
</div>
<div class="modal" data-easein="flipYIn" id="posModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
<div class="modal" data-easein="flipYIn" id="posModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true"></div>
<div id="ajaxCall"><i class="fa fa-spinner fa-pulse"></i></div>
<div class="modal" data-easein="flipYIn" id="gcModal" tabindex="-1" role="dialog" aria-labelledby="mModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title" id="myModalLabel">
          <?= lang('sell_gift_card'); ?>
        </h4>
      </div>
      <div class="modal-body">
        <p>
          <?= lang('enter_info'); ?>
        </p>
        <div class="alert alert-danger gcerror-con" style="display: none;">
          <button data-dismiss="alert" class="close" type="button">×</button>
          <span id="gcerror"></span> </div>
        <div class="form-group">
          <?= lang("card_no", "gccard_no"); ?>
          *
          <div class="input-group"> <?php echo form_input('gccard_no', '', 'class="form-control" id="gccard_no"'); ?>
            <div class="input-group-addon" style="padding-left: 10px; padding-right: 10px;"><a href="#" id="genNo"><i class="fa fa-cogs"></i></a></div>
          </div>
        </div>
        <input type="hidden" name="gcname" value="<?= lang('gift_card') ?>" id="gcname"/>
        <div class="form-group">
          <?= lang("value", "gcvalue"); ?>
          * <?php echo form_input('gcvalue', '', 'class="form-control" id="gcvalue"'); ?> </div>
        <div class="form-group">
          <?= lang("price", "gcprice"); ?>
          * <?php echo form_input('gcprice', '', 'class="form-control" id="gcprice"'); ?> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
        <?=lang('close')?>
        </button>
        <button type="button" id="addGiftCard" class="btn btn-primary">
        <?= lang('sell_gift_card') ?>
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal" data-easein="flipYIn" id="dsModal" tabindex="-1" role="dialog" aria-labelledby="dsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title" id="dsModalLabel">
          <?= lang('discount_title'); ?>
        </h4>
      </div>
      <div class="modal-body">
        <input type='text' class='form-control input-sm kb-pad' id='get_ds' onClick='this.select();' value=''>
        <label class="checkbox" for="apply_to_order">
          <input type="radio" name="apply_to" value="order" id="apply_to_order" checked="checked"/>
          <?= lang('apply_to_order') ?>
        </label>
        <label class="checkbox" for="apply_to_products">
          <input type="radio" name="apply_to" value="products" id="apply_to_products"/>
          <?= lang('apply_to_products') ?>
        </label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">
        <?=lang('close')?>
        </button>
        <button type="button" id="updateDiscount" class="btn btn-primary btn-sm">
        <?= lang('update') ?>
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal" data-easein="flipYIn" id="tsModal" tabindex="-1" role="dialog" aria-labelledby="tsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title" id="tsModalLabel">
          <?= lang('vat_title'); ?>
        </h4>
      </div>
      <div class="modal-body">
        <input type='text' class='form-control input-sm kb-pad' id='get_ts' onClick='this.select();' value=''>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">
        <?=lang('close')?>
        </button>
        <button type="button" id="updateTax" class="btn btn-primary btn-sm">
        <?= lang('update') ?>
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal" data-easein="flipYIn" id="proModal" tabindex="-1" role="dialog" aria-labelledby="proModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-primary">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title" id="proModalLabel">
          <?=lang('payment')?>
        </h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-striped">
          <tr>
            <th style="width:25%;"><?= lang('net_unit_price'); ?></th>
            <th style="width:25%;"><span id="net_price"></span></th>
            <th style="width:25%;"><?= lang('product_tax'); ?></th>
            <th style="width:25%;"><span id="pro_tax"></span> <span id="pro_tax_method"></span></th>
          </tr>
        </table>
        <input type="hidden" id="row_id" />
        <input type="hidden" id="item_id" />
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <?=lang('unit_price', 'nPrice')?>
              <input type="text" class="form-control input-sm kb-pad" id="nPrice" onClick="this.select();" placeholder="<?=lang('new_price')?>">
            </div>
            <div class="form-group">
              <?=lang('discount', 'nDiscount')?>
              <input type="text" class="form-control input-sm kb-pad" id="nDiscount" onClick="this.select();" placeholder="<?=lang('discount')?>">
            </div>
            <div class="form-group">
              <?=lang('per_type_qnty', 'per_type_qnty')?>
              <input type="text" class="form-control input-sm kb-pad" id="per_type_qnty" placeholder="<?=lang('per_type_qnty')?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <?=lang('quantity', 'nQuantity')?>
              <input type="text" class="form-control input-sm kb-pad" id="nQuantity" onClick="this.select();" placeholder="<?=lang('current_quantity')?>">
            </div>

            <div class="form-group">
              <?= lang("qnty_type", "qnty_type"); ?>
              <select id="qnty_type" class="form-control qnty_type" style="width:100%;">
                <option value="0">Select</option>
                <option value="1">BUCKET</option>
                <option value="2">CARTON</option>
                <option value="3">CP CARTON</option>               
                <option value="4">CP BAG</option>                
              </select>
            </div>

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
        <?=lang('close')?>
        </button>
        <button class="btn btn-success" id="editItem">
        <?=lang('update')?>
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal" data-easein="flipYIn" id="susModal" tabindex="-1" role="dialog" aria-labelledby="susModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title" id="susModalLabel">
          <?= lang('suspend_sale'); ?>
        </h4>
      </div>
      <div class="modal-body">
        <p>
          <?= lang('type_reference_note'); ?>
        </p>
        <div class="form-group">
          <?= lang("reference_note", "reference_note"); ?>
          <?php echo form_input('reference_note', $reference_note, 'class="form-control kb-text" id="reference_note"'); ?> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
        <?=lang('close')?>
        </button>
        <button type="button" id="suspend_sale" class="btn btn-primary">
        <?= lang('submit') ?>
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal" data-easein="flipYIn" id="saleModal" tabindex="-1" role="dialog" aria-labelledby="saleModalLabel" aria-hidden="true"></div>
<div class="modal" data-easein="flipYIn" id="opModal" tabindex="-1" role="dialog" aria-labelledby="opModalLabel" aria-hidden="true"></div>
<div class="modal" data-easein="flipYIn" id="payModal" tabindex="-1" role="dialog" aria-labelledby="payModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-success">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title" id="payModalLabel">
          <?=lang('payment')?>
        </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-9">
            <div class="font16">
              <table class="table table-bordered table-condensed" style="margin-bottom: 0;">
                <tbody>
                  <tr>
                    <td width="25%" style="border-right-color: #FFF !important;"><?= lang("total_items"); ?></td>
                    <td width="25%" class="text-right"><span id="item_count">0.00</span></td>
                    <td width="25%" style="border-right-color: #FFF !important;"><?= lang("total_payable"); ?></td>
                    <td width="25%" class="text-right"><span id="twt">0.00</span></td>
                  </tr>
                  <tr>
                    <td style="border-right-color: #FFF !important;"><?= lang("total_paying"); ?></td>
                    <td class="text-right"><span id="total_paying">0.00</span></td>
                    <td style="border-right-color: #FFF !important;"><?= lang("balance"); ?></td>
                    <td class="text-right"><span id="balance">0.00</span></td>
                  </tr>
                </tbody>
              </table>
              <div class="clearfix"></div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="form-group">
                  <?= lang('note', 'note'); ?>
                  <textarea name="note" id="note" class="pa form-control kb-text"></textarea>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <?= lang("paying_by", "paid_by"); ?>
                  <select id="paid_by" class="form-control paid_by select2" style="width:100%;">
                    <option value="Cash">
                    <?= lang("cash"); ?>
                    </option>
                    <!-- <option value="CC">
                    <?= lang("cc"); ?>
                    </option> -->
                    <option value="Cheque">
                    <?= lang("cheque"); ?>
                    </option>
                    <option value="TT">
                    <?= lang("tt"); ?>
                    </option>
                    <option value="Credit">Credit</option>                    
                     
                  </select>
                </div>

              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <?= lang("amount", "amount"); ?>
                  <input name="amount[]" type="text" id="amount" 
									class="pa form-control kb-pad amount" />
                </div>

              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="control-label" for="delivery_date"><?= lang("delivery_date"); ?></label>
                  <input name="delivery_date[]" type="text" id="delivery_date" class="pa form-control kb-pad datepicker" />
                </div>

              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <?= lang("Aging Day", "Aging Day"); ?>
                  <input name="aging_day[]" type="text" id="aging_day" class="pa form-control" value="<?php echo $Settings->aging_day;?>" />
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="form-group gc" style="display: none;">
                  <?= lang("gift_card_no", "gift_card_no"); ?>
                  <input type="text" id="gift_card_no"



									class="pa form-control kb-pad gift_card_no gift_card_input"/>
                  <div id="gc_details"></div>
                </div>
                <div class="pcc" style="display:none;">
                  
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="form-group">
                        <input type="text" id="pcc_no" class="form-control kb-pad" placeholder="<?= lang('cc_no') ?>"/>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="form-group">
                        <input type="text" id="pcc_holder" class="form-control kb-text" placeholder="<?= lang('cc_holder') ?>"/>
                      </div>
                    </div>
                  
                    
                  </div>
                </div>
                <div class="pcheque" style="display:none;">
                  <div class="ccheque" style="display:none;">


                      
                    <div class="form-group">
                      <?= lang("cheque_no", "cheque_no"); ?>
                      <input type="text" id="cheque_no"class="form-control cheque_no  kb-text"/>
                    </div>

                    <div class="form-group">
                      <label class="control-label" for="cheque_date"><?= lang("cheque_date"); ?></label>
                      <input style="width:45%;" type="text" id="cheque_date" class="pa form-control kb-pad datepicker" />
                    </div>
                    <!-- <div class="clearfix"></div> -->
                  </div>
                  <div class="tcheque" style="display:none;">
                    <div class="form-group">
                      <?= lang("tt_no", "tt_no"); ?>
                      <input type="text" id="tt_no"class="form-control tt_no  kb-text"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <?= lang("Select Bank", "bank"); ?>*
                    <?php  
                    $barr[0]="Select Bank";
                    foreach ($banks as $key => $bank) {
                       $barr[$bank->bank_account_id] = $bank->bank_name.' ( '. $bank->store_name .' - '.$bank->account_no.' )';
                    }
                    ?>
                    <?= form_dropdown('bank', $barr, set_value('bank'), 'class="form-control" id="bank"') ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-3 text-center"> 
            
            <!-- <span style="font-size: 1.2em; font-weight: bold;"><?= lang('quick_cash'); ?></span> -->
            
            <div class="btn-group btn-group-vertical" style="width:100%;">
              <button type="button" class="btn btn-info btn-block quick-cash" id="quick-payable">0.00 </button>
              <?php



						foreach (lang('quick_cash_notes') as $cash_note_amount) {



							echo '<button type="button" class="btn btn-block btn-warning quick-cash">' . $cash_note_amount . '</button>';



						}



						?>
              <button type="button" class="btn btn-block btn-danger"



						id="clear-cash-notes">
              <?= lang('clear'); ?>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
        <?=lang('close')?>
        </button>
        <button class="btn btn-primary" id="<?= $eid ? '' : 'submit-sale'; ?>">
        <?=lang('submit')?>
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal" data-easein="flipYIn" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="cModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-primary">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-remove"></i></button>
        <h4 class="modal-title" id="cModalLabel">
          <?=lang('add_customer')?>
        </h4>
      </div>
      <?= form_open('pos/add_customer', 'id="customer-form"'); ?>
      <div class="modal-body">
        <div id="c-alert" class="alert alert-danger" style="display:none;"></div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label class="control-label" for="code">
                <?= lang("name"); ?>*
              </label>
              <?= form_input('name', '', 'class="form-control input-sm kb-text" id="cname"'); ?>
            </div>
          </div>
        </div>

         <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <!-- <label class="control-label" for="code">
                <?= lang("name"); ?>
              </label>
              <?= form_input('name', '', 'class="form-control input-sm kb-text" id="cname"'); ?> -->
             
               <?php if ($this->Admin ==1)
                 {
                ?>
                <input type="hidden" name="warehouse" value="<?php echo $this->session->userdata('store_id_pos')  ?>">
                <?php }else{ ?>
                <input type="hidden" name="warehouse" value="<?php echo $this->session->userdata('store_id')  ?>">
                <?php  } ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <div class="form-group">
              <label class="control-label" for="cemail">
                <?= lang("email_address"); ?>*
              </label>
              <?= form_input('email', '', 'class="form-control input-sm kb-text" id="cemail"'); ?>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              <label class="control-label" for="phone">
                <?= lang("phone"); ?>*
              </label>
              <?= form_input('phone', '', 'class="form-control input-sm kb-pad" id="cphone"');?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <div class="form-group">
              <label class="control-label" for="cf1">
                <?= lang("cf1"); ?>
              </label>
              <?= form_input('cf1', '', 'class="form-control input-sm kb-text" id="cf1"'); ?>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              <label class="control-label" for="cf2">
                <?= lang("cf2"); ?>
              </label>
              <?= form_input('cf2', '', 'class="form-control input-sm kb-text" id="cf2"');?>
              <input type="hidden" name="opening_blance" id="opening_blance">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <div class="form-group">
              <label class="control-label" for="credit_limit">
                <?= lang("credit_limit"); ?>
              </label>
              <?= form_input('credit_limit', '', 'class="form-control input-sm kb-text" id="credit_limit"'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer" style="margin-top:0;">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
        <?=lang('close')?>
        </button>
        <button type="submit" class="btn btn-primary" id="add_customer">
        <?=lang('add_customer')?>
        </button>
      </div>
      <?= form_close(); ?>
    </div>
  </div>
</div>
<script src="<?= $assets ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="<?= $assets ?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script> 
<script src="<?= $assets ?>plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script> 
<script src="<?= $assets ?>plugins/fastclick/fastclick.min.js" type="text/javascript"></script> 
<script src="<?= $assets ?>plugins/redactor/redactor.min.js" type="text/javascript"></script> 
<script src="<?= $assets ?>plugins/iCheck/icheck.min.js" type="text/javascript"></script> 
<script src="<?= $assets ?>plugins/select2/select2.min.js" type="text/javascript"></script> 
<script src="<?= $assets ?>plugins/formvalidation/js/formValidation.popular.min.js" type="text/javascript"></script> 
<script src="<?= $assets ?>plugins/formvalidation/js/framework/bootstrap.min.js" type="text/javascript"></script> 
<script src="<?= $assets ?>dist/js/common-libs.js" type="text/javascript"></script> 
<script src="<?= $assets ?>dist/js/jquery-ui.min.js" type="text/javascript"></script> 
<script src="<?= $assets ?>dist/js/app.js" type="text/javascript"></script> 
<script src="<?= $assets ?>dist/js/pages/all.js" type="text/javascript"></script> 
<script src="<?= $assets ?>dist/js/custom.js" type="text/javascript"></script> 
<script src="<?= $assets ?>plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script> 
<script src="<?= $assets ?>plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script> 
<script src="<?= $assets ?>plugins/velocity/velocity.min.js" type="text/javascript"></script> 
<script src="<?= $assets ?>plugins/velocity/velocity.ui.min.js" type="text/javascript"></script> 
<script src="<?= $assets ?>dist/js/parse-track-data.js" type="text/javascript"></script>
<?php if($Settings->java_applet) { ?>
<script type="text/javascript" src="<?= $assets ?>plugins/qz/js/deployJava.js"></script> 
<script type="text/javascript" src="<?= $assets ?>plugins/qz/qz-functions.js"></script> 
<script type="text/javascript">



    deployQZ('themes/<?=$Settings->theme?>/assets/plugins/qz/qz-print.jar', '<?= $assets ?>plugins/qz/qz-print_jnlp.jnlp');



    function printBill(bill) {



        usePrinter("<?= $Settings->receipt_printer; ?>");



        printData(bill);



    }



    <?php



    $printers = json_encode(explode('|', $Settings->pos_printers));



    echo 'var printer = '.$printers.';



    ';



    ?>



    function printOrder(order) {



        for (index = 0; index < printers.length; index++) {



            usePrinter(printers[index]);



            printData(order);



        }



    }



</script>
<?php } ?>
<script src="<?= $assets ?>dist/js/pos.js" type="text/javascript"></script> 
<script src="<?= $assets ?>dist/js/jquery.ultraselect.js" type="text/javascript"></script> 
<script type="text/javascript">

	var base_url = '<?=base_url();?>', assets = '<?= $assets ?>';



	var dateformat = '<?=$Settings->dateformat;?>', timeformat = '<?= $Settings->timeformat ?>';



	<?php unset($Settings->protocol, $Settings->smtp_host, $Settings->smtp_user, $Settings->smtp_pass, $Settings->smtp_port, $Settings->smtp_crypto, $Settings->mailpath, $Settings->timezone, $Settings->setting_id, $Settings->default_email, $Settings->version, $Settings->stripe, $Settings->stripe_secret_key, $Settings->stripe_publishable_key); ?>



	var Settings = <?= json_encode($Settings); ?>;



	var sid = false, username = '<?=$this->session->userdata('username');?>', spositems = {};



	$(window).load(function () {



		$('#mm_<?=$m?>').addClass('active');



		$('#<?=$m?>_<?=$v?>').addClass('active');



	});



	var pro_limit = <?=$Settings->pro_limit?>, java_applet = 0, count = 1, total = 0, an = 1, p_page = 0, page = 0, cat_id = <?=$Settings->default_category?>, tcp = <?=$tcp?>;



	var gtotal = 0, order_discount = 0, order_tax = 0, protect_delete = <?= ($Admin) ? 0 : ($Settings->pin_code ? 1 : 0); ?>;



	var order_data = '', bill_data = '';



	var lang = new Array();



	lang['code_error'] = '<?= lang('code_error'); ?>';



	lang['r_u_sure'] = '<?= lang('r_u_sure'); ?>';



	lang['please_add_product'] = '<?= lang('please_add_product'); ?>';



	lang['paid_less_than_amount'] = '<?= lang('paid_less_than_amount'); ?>';



	lang['x_suspend'] = '<?= lang('x_suspend'); ?>';



	lang['discount_title'] = '<?= lang('discount_title'); ?>';



	lang['update'] = '<?= lang('update'); ?>';



	lang['tax_title'] = '<?= lang('tax_title'); ?>';



	lang['leave_alert'] = '<?= lang('leave_alert'); ?>';



	lang['close'] = '<?= lang('close'); ?>';



	lang['delete'] = '<?= lang('delete'); ?>';



	lang['no_match_found'] = '<?= lang('no_match_found'); ?>';



	lang['wrong_pin'] = '<?= lang('wrong_pin'); ?>';



	lang['file_required_fields'] = '<?= lang('file_required_fields'); ?>';



	lang['enter_pin_code'] = '<?= lang('enter_pin_code'); ?>';



	lang['incorrect_gift_card'] = '<?= lang('incorrect_gift_card'); ?>';



	lang['card_no'] = '<?= lang('card_no'); ?>';



	lang['value'] = '<?= lang('value'); ?>';



	lang['balance'] = '<?= lang('balance'); ?>';



	lang['unexpected_value'] = '<?= lang('unexpected_value'); ?>';



	lang['inclusive'] = '<?= lang('inclusive'); ?>';



	lang['exclusive'] = '<?= lang('exclusive'); ?>';



	lang['total'] = '<?= lang('total'); ?>';



	lang['total_items'] = '<?= lang('total_items'); ?>';



	lang['order_tax'] = '<?= lang('order_tax'); ?>';



	lang['order_discount'] = '<?= lang('order_discount'); ?>';



	lang['total_payable'] = '<?= lang('total_payable'); ?>';



	lang['rounding'] = '<?= lang('rounding'); ?>';



	lang['grand_total'] = '<?= lang('grand_total'); ?>';
 

	$(document).ready(function() {



		posScreen();

    if (get('spositems')) { remove('spositems'); }

		<?php if($this->session->userdata('rmspos')) { ?>


		if (get('spos_discount')) { remove('spos_discount'); }



		if (get('spos_tax')) { remove('spos_tax'); }



		if (get('spos_note')) { remove('spos_note'); }



		if (get('spos_customer')) { remove('spos_customer'); }



		if (get('amount')) { remove('amount'); }



		<?php $this->tec->unset_data('rmspos'); } ?>
 

		if(get('rmspos')) {



			if (get('spositems')) { remove('spositems'); }



			if (get('spos_discount')) { remove('spos_discount'); }



			if (get('spos_tax')) { remove('spos_tax'); }



			if (get('spos_note')) { remove('spos_note'); }



			if (get('spos_customer')) { remove('spos_customer'); }



			if (get('amount')) { remove('amount'); }



			remove('rmspos');



		}



		<?php if($sid) { ?> 

			store('spositems', JSON.stringify(<?=$items;?>));



			store('spos_discount', '<?=$suspend_sale->order_discount_id;?>');



			store('spos_tax', '<?=$suspend_sale->order_tax_id;?>');



			store('spos_customer', '<?=$suspend_sale->customer_id;?>');



			$('#spos_customer').select2('val', '<?=$suspend_sale->customer_id;?>');



			store('rmspos', '1');



			$('#tax_val').val('<?=$suspend_sale->order_tax_id;?>');



			$('#discount_val').val('<?=$suspend_sale->order_discount_id;?>');



		<?php } elseif($eid) { ?>
 


			store('spositems', JSON.stringify(<?=$items;?>));



			store('spos_discount', '<?=$sale->order_discount_id;?>');



			store('spos_tax', '<?=$sale->order_tax_id;?>');



			store('spos_customer', '<?=$sale->customer_id;?>');



			$('#spos_customer').select2('val', '<?=$sale->customer_id;?>');



			store('rmspos', '1');



			$('#tax_val').val('<?=$sale->order_tax_id;?>');



			$('#discount_val').val('<?=$sale->order_discount_id;?>');



		<?php } else { ?>



			if(! get('spos_discount')) {



				store('spos_discount', '<?=$Settings->default_discount;?>');



				$('#discount_val').val('<?=$Settings->default_discount;?>');



			}



			if(! get('spos_tax')) {



				store('spos_tax', '<?=$Settings->default_tax_rate;?>');



				$('#tax_val').val('<?=$Settings->default_tax_rate;?>');



			}



		<?php } ?>

		if (ots = get('spos_tax')) {



		    $('#tax_val').val(ots);



		}



		if (ods = get('spos_discount')) {



		    $('#discount_val').val(ods);



		}



		if(Settings.display_kb == 1) { display_keyboards(); }



		nav_pointer();



		loadItems();



		read_card();



		bootbox.addLocale('bl',{OK:'<?= lang('ok'); ?>',CANCEL:'<?= lang('no'); ?>',CONFIRM:'<?= lang('yes'); ?>'});



		bootbox.setDefaults({closeButton:false,locale:"bl"});



		<?php if($eid) { ?>



			$('#suspend').attr('disabled', true);



			$('#print_order').attr('disabled', true);



			$('#print_bill').attr('disabled', true);



		<?php } ?>



	});

	

	   function addPay(id) {

	 var dataString = 'id='+ id ;

	 var site_url = "<?php echo site_url('employee/paySalary'); ?>/" +id; //append id at end

	 $("#paySalary").load(site_url);

	}



	

	function editPay(id) {

	 var dataString = 'id='+ id ;

	 var site_url = "<?php echo site_url('employee/paySalaryEtdit'); ?>/" +id; //append id at end

	 $("#paySalary").load(site_url);

	}

	

	function payLisy(id) {

	 var dataString = 'id='+ id ;

	 var site_url = "<?php echo site_url('employee/payLisy'); ?>/" +id; //append id at end

	 $("#paySalary").load(site_url);

	}

	

	function addParPay(id) {

	 var dataString = 'id='+ id ;

	 var site_url = "<?php echo site_url('purchases/add_payment'); ?>/" +id; //append id at end

	 $("#paySalary").load(site_url);

	}

	

	function addSarvicePay(id) {

	 var dataString = 'id='+ id ;

	 var site_url = "<?php echo site_url('service/add_payment'); ?>/" +id; //append id at end

	 $("#paySalary").load(site_url);

	}

	

	

	function editParPay(id) {

	 var dataString = 'id='+ id ;

	 var site_url = "<?php echo site_url('purchases/edit_payment'); ?>/" +id; //append id at end

	 $("#paySalary").load(site_url);

	}

	

	function listParPay(id) {

	 var dataString = 'id='+ id ;

	 var site_url = "<?php echo site_url('purchases/listParPay'); ?>/" +id; //append id at end

	 $("#paySalary").load(site_url);

	}

	

	function sarvicePayments(id) {

	 var dataString = 'id='+ id ;

	 var site_url = "<?php echo site_url('service/paymentsList'); ?>/" +id; //append id at end

	 $("#paySalary").load(site_url);

	}

	

	function editSarvicePay(id) {

	 var dataString = 'id='+ id ;

	 var site_url = "<?php echo site_url('service/editSarvicePay'); ?>/" +id; //append id at end

	 $("#paySalary").load(site_url);

	}

	

	function servicePage(id) {

	 var site_url = "<?php echo site_url('service/selectInvoice'); ?>/"; //append id at end

	 $("#paySalary").load(site_url);

	}

	   

	function hide() {

	  $( ".posModal" ).hide();

	  // $( ".posModal" ).style.display = "none";

	} 

    function sqOut(row_no,item_id,item_qty){ 

     var type  = '<?php  if($eid){ echo  $eid ; }else{ echo "" ;} ; ?>' ;

     var  squenceVal =  $('#sequence_'+row_no).val() ;


     var site_url = "<?php echo site_url('pos/squenceOut'); ?>/" +row_no+'/'+item_id+'/'+item_qty+'/'+squenceVal+'/'+type;  


     $("#paySalary").load(site_url);
  }

  function quantityFild(product_id , row_no){
    var qty = $("#quantity_"+row_no).val();
    var qty = $("#quantity_"+row_no).val();
    var site_url = "<?php echo site_url('pos/checkProductQty'); ?>/"+product_id; 
    $("#allqty_"+row_no).load(site_url, function(e){
     
  });
}


$( "#spos_store" ).change(function() {
 var store =  $(this).val();
  var site_url = "<?php echo site_url('pos/customerInstore'); ?>/"+store; 
    $("#customerDropdown").load(site_url, function(e){
     });

})
function changeStpre(){
  bootbox.confirm('Change store and remove cach product and customer ', function (result) {
            if (result) {
                if (get('spositems')) {
                    remove('spositems');
                }
                if (get('spos_tax')) {
                    remove('spos_tax');
                }
                if (get('spos_discount')) {
                    remove('spos_discount');
                }
                if (get('spos_customer')) {
                    remove('spos_customer');
                }

                //window.location.href = base_url+"pos";
            }
       });
 var site_url = "<?php echo site_url('pos/store'); ?>/"; //   append id at end
 $("#paySalary").load(site_url);
}

  function posSquOut(row){ 
          var sequence = $('#posarry').val();
          //alert(sequence);
         // $('#proSqOut'+row).val(sequence); 
          $('#qout-'+row).val(sequence); 
          var row = $('#sequence_'+row).closest('tr');
          var new_seq = sequence,
              item_id = row.attr('data-item-id');
              spositems[item_id].row.seq = new_seq;
              localStorage.setItem('spositems', JSON.stringify(spositems));
              loadItems();
          $( ".posModal" ).hide();         
        }  


</script>

</body>
</html>
<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/moment.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('.datepicker').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        get('spos_note') && remove('spos_note');
        $(".kb-text").val(' ')
        $(".kb-text").html(' ')
    });
</script>