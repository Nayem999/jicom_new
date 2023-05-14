#
# TABLE STRUCTURE FOR: tec_adv_collection
#

DROP TABLE IF EXISTS `tec_adv_collection`;

CREATE TABLE `tec_adv_collection` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `adv_collection` int(11) NOT NULL,
  `total_collection` int(11) NOT NULL,
  `today_collect_id` int(11) DEFAULT NULL,
  `add_date` datetime NOT NULL,
  `note` varchar(255) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `paid_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_adv_payment
#

DROP TABLE IF EXISTS `tec_adv_payment`;

CREATE TABLE `tec_adv_payment` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `suppliers_id` int(11) NOT NULL,
  `adv_amount` int(11) NOT NULL,
  `total_payment` int(11) NOT NULL,
  `add_date` datetime NOT NULL,
  `today_payment_id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `paid_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tec_attachment
#

DROP TABLE IF EXISTS `tec_attachment`;

CREATE TABLE `tec_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `persons_id` int(11) DEFAULT NULL,
  `note_category_id` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL COMMENT 'receive/pay',
  `attachment` varchar(255) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_attachment_log
#

DROP TABLE IF EXISTS `tec_attachment_log`;

CREATE TABLE `tec_attachment_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `persons_id` int(11) DEFAULT NULL,
  `note_category_id` int(11) NOT NULL,
  `note_category` varchar(100) DEFAULT NULL,
  `persons` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL COMMENT 'receive/pay',
  `attachment` varchar(255) NOT NULL,
  `note` text DEFAULT NULL,
  `attachment_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_bank_account
#

DROP TABLE IF EXISTS `tec_bank_account`;

CREATE TABLE `tec_bank_account` (
  `bank_account_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `current_amount` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `store_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`bank_account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tec_bank_account` (`bank_account_id`, `bank_name`, `account_name`, `account_no`, `current_amount`, `create_date`, `status`, `store_id`) VALUES ('1', 'DBBL', 'Name', '123', '400', '2023-03-12', '1', '3');


#
# TABLE STRUCTURE FOR: tec_bank_pending
#

DROP TABLE IF EXISTS `tec_bank_pending`;

CREATE TABLE `tec_bank_pending` (
  `pending_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `cheque_no` varchar(255) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `insert_date` datetime NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'pending',
  `payment_type` tinyint(4) DEFAULT NULL COMMENT '1=Customer Collection/2=Supplier Payment/3=Bank Opening/4=Expense Payment/5=Salary Payment/6=Raw Material Payment',
  `todayP_Payment` int(11) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `other_exp_id` int(11) DEFAULT NULL,
  `cheque_date` date DEFAULT NULL,
  PRIMARY KEY (`pending_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('1', '200', '1', '123', NULL, '1', '2023-03-12 16:20:13', 'Approved', '1', NULL, '3', '3', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('2', '200', '1', '12', NULL, '1', '2023-03-12 16:20:56', 'Approved', '1', NULL, '4', '3', NULL, '2023-03-12');


#
# TABLE STRUCTURE FOR: tec_bank_pending_donations
#

DROP TABLE IF EXISTS `tec_bank_pending_donations`;

CREATE TABLE `tec_bank_pending_donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donations_persons_id` int(11) DEFAULT NULL,
  `donations_pay_id` int(11) DEFAULT NULL,
  `payment_type` varchar(20) DEFAULT NULL COMMENT 'card/cheque',
  `type` varchar(20) DEFAULT NULL COMMENT 'receive/pay',
  `bank_id` int(11) DEFAULT NULL,
  `bank_status` varchar(20) DEFAULT NULL COMMENT 'Approved/Pending',
  `cheque_or_card_no` varchar(100) DEFAULT NULL,
  `amount` double(25,2) DEFAULT NULL,
  `transactions_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_bank_pending_expenses
#

DROP TABLE IF EXISTS `tec_bank_pending_expenses`;

CREATE TABLE `tec_bank_pending_expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expenses_id` int(11) DEFAULT NULL,
  `expens_category_id` int(11) DEFAULT NULL,
  `transactions_id` int(11) DEFAULT 0,
  `payment_type` varchar(20) DEFAULT NULL COMMENT 'card/cheque',
  `type` varchar(20) DEFAULT NULL COMMENT 'receive/pay',
  `bank_id` int(11) DEFAULT NULL,
  `bank_status` varchar(20) DEFAULT NULL COMMENT 'Approved/Pending',
  `cheque_or_card_no` varchar(100) DEFAULT NULL,
  `amount` double(25,2) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_bank_pending_loan
#

DROP TABLE IF EXISTS `tec_bank_pending_loan`;

CREATE TABLE `tec_bank_pending_loan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_id` int(11) DEFAULT NULL,
  `loner_id` int(11) DEFAULT NULL,
  `payment_type` varchar(20) DEFAULT NULL COMMENT 'card/cheque',
  `type` varchar(20) DEFAULT NULL COMMENT 'receive/pay',
  `bank_id` int(11) DEFAULT NULL,
  `bank_status` varchar(20) DEFAULT NULL COMMENT 'Approved/Pending',
  `cheque_or_card_no` varchar(100) DEFAULT NULL,
  `amount` double(25,2) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_bank_pending_salary
#

DROP TABLE IF EXISTS `tec_bank_pending_salary`;

CREATE TABLE `tec_bank_pending_salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paysalary_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `transactions_id` int(11) DEFAULT 0,
  `payment_type` varchar(20) DEFAULT NULL COMMENT 'card/cheque',
  `type` varchar(20) DEFAULT NULL COMMENT 'receive/pay',
  `bank_id` int(11) DEFAULT NULL,
  `bank_status` varchar(20) DEFAULT NULL COMMENT 'Approved/Pending',
  `cheque_or_card_no` varchar(100) DEFAULT NULL,
  `amount` double(25,2) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_brands
#

DROP TABLE IF EXISTS `tec_brands`;

CREATE TABLE `tec_brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(55) NOT NULL,
  `image` varchar(100) DEFAULT 'no_image.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_brands` (`id`, `code`, `name`, `image`) VALUES ('1', '00', 'T', 'no_image.png');


#
# TABLE STRUCTURE FOR: tec_categories
#

DROP TABLE IF EXISTS `tec_categories`;

CREATE TABLE `tec_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `name` varchar(55) NOT NULL,
  `parent_id` varchar(10) NOT NULL DEFAULT '',
  `image` varchar(100) DEFAULT 'no_image.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_categories` (`id`, `code`, `name`, `parent_id`, `image`) VALUES ('1', '00', 'TEST PRODUCT', '0', 'no_image.png');


#
# TABLE STRUCTURE FOR: tec_combo_items
#

DROP TABLE IF EXISTS `tec_combo_items`;

CREATE TABLE `tec_combo_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `item_code` varchar(20) NOT NULL,
  `quantity` decimal(12,4) NOT NULL,
  `price` decimal(25,2) DEFAULT NULL,
  `cost` decimal(25,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_customers
#

DROP TABLE IF EXISTS `tec_customers`;

CREATE TABLE `tec_customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `cf1` varchar(255) DEFAULT NULL,
  `cf2` varchar(255) DEFAULT NULL,
  `phone` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `store_id` int(11) DEFAULT NULL,
  `opening_blance` int(11) DEFAULT 0,
  `credit_limit` int(255) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('1', 'test customer', '', '', '1111', '121212@gmil.com', '3', '0', '1000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('2', 'cust', '', '', '0170000001', 'test@example.com', '2', '0', '0');


#
# TABLE STRUCTURE FOR: tec_designation
#

DROP TABLE IF EXISTS `tec_designation`;

CREATE TABLE `tec_designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tec_donations_pay
#

DROP TABLE IF EXISTS `tec_donations_pay`;

CREATE TABLE `tec_donations_pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,0) NOT NULL,
  `donations_persons_id` int(11) NOT NULL,
  `entry_date` datetime DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `payment_type` varchar(20) DEFAULT NULL COMMENT 'cash/bank',
  `bankname` text DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `cheque_or_card_no` varchar(100) DEFAULT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_donations_persons
#

DROP TABLE IF EXISTS `tec_donations_persons`;

CREATE TABLE `tec_donations_persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `cf1` varchar(255) NOT NULL,
  `cf2` varchar(255) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `opening_balance` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_employee
#

DROP TABLE IF EXISTS `tec_employee`;

CREATE TABLE `tec_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `father_name` varchar(50) NOT NULL DEFAULT '',
  `mather_name` varchar(50) NOT NULL DEFAULT '',
  `date_of_birth` varchar(20) NOT NULL DEFAULT '',
  `position` varchar(20) NOT NULL DEFAULT '',
  `address` text NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `basic_salary` varchar(10) NOT NULL DEFAULT '',
  `join_date` varchar(20) NOT NULL DEFAULT '',
  `satus` int(1) NOT NULL DEFAULT 1,
  `entry_date` varchar(20) NOT NULL DEFAULT '',
  `update_date` varchar(50) NOT NULL DEFAULT '',
  `store_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_expens_category
#

DROP TABLE IF EXISTS `tec_expens_category`;

CREATE TABLE `tec_expens_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'no_image.png',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tec_expenses
#

DROP TABLE IF EXISTS `tec_expenses`;

CREATE TABLE `tec_expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `reference` varchar(50) DEFAULT NULL,
  `amount` decimal(25,2) NOT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `created_by` varchar(55) NOT NULL,
  `attachment` varchar(55) DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 1,
  `emp_pay_id` int(11) DEFAULT NULL,
  `partner_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `sale_return_id` int(11) DEFAULT NULL,
  `purhases_return_id` int(11) DEFAULT NULL,
  `paid_by` varchar(50) NOT NULL DEFAULT 'cash',
  `employee_id` int(11) DEFAULT 0,
  `mf_payment_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_gift_cards
#

DROP TABLE IF EXISTS `tec_gift_cards`;

CREATE TABLE `tec_gift_cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `card_no` varchar(20) NOT NULL,
  `value` decimal(25,2) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `balance` decimal(25,2) NOT NULL,
  `expiry` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `card_no` (`card_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_groups
#

DROP TABLE IF EXISTS `tec_groups`;

CREATE TABLE `tec_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_groups` (`id`, `name`, `description`) VALUES ('1', 'admin', 'Administrator');
INSERT INTO `tec_groups` (`id`, `name`, `description`) VALUES ('2', 'manager', 'Manager');
INSERT INTO `tec_groups` (`id`, `name`, `description`) VALUES ('3', 'staff', 'Staff');


#
# TABLE STRUCTURE FOR: tec_handcash
#

DROP TABLE IF EXISTS `tec_handcash`;

CREATE TABLE `tec_handcash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tec_liftprofit
#

DROP TABLE IF EXISTS `tec_liftprofit`;

CREATE TABLE `tec_liftprofit` (
  `liftprofit_id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_id` int(11) NOT NULL,
  `month_id` varchar(2) NOT NULL,
  `year` year(4) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `commission` varchar(10) NOT NULL,
  `note` text NOT NULL,
  `pay_date` datetime NOT NULL,
  PRIMARY KEY (`liftprofit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_loaner
#

DROP TABLE IF EXISTS `tec_loaner`;

CREATE TABLE `tec_loaner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `organization` text DEFAULT NULL,
  `cf1` text NOT NULL,
  `cf2` text NOT NULL,
  `phone` text DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_login_attempts
#

DROP TABLE IF EXISTS `tec_login_attempts`;

CREATE TABLE `tec_login_attempts` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_marge
#

DROP TABLE IF EXISTS `tec_marge`;

CREATE TABLE `tec_marge` (
  `marge_id` int(11) NOT NULL AUTO_INCREMENT,
  `marge_title` varchar(255) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `mage_date` datetime NOT NULL,
  PRIMARY KEY (`marge_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tec_marge_laser
#

DROP TABLE IF EXISTS `tec_marge_laser`;

CREATE TABLE `tec_marge_laser` (
  `laser_id` int(11) NOT NULL AUTO_INCREMENT,
  `laser_date` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `laser_note` varchar(255) NOT NULL,
  PRIMARY KEY (`laser_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tec_mf_adv_payment
#

DROP TABLE IF EXISTS `tec_mf_adv_payment`;

CREATE TABLE `tec_mf_adv_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suppliers_id` int(11) NOT NULL,
  `adv_amount` int(11) NOT NULL,
  `total_payment` int(11) NOT NULL,
  `add_date` datetime NOT NULL,
  `mf_payment_id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `paid_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tec_mf_brands
#

DROP TABLE IF EXISTS `tec_mf_brands`;

CREATE TABLE `tec_mf_brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(55) NOT NULL,
  `image` varchar(100) DEFAULT 'no_image.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_brands` (`id`, `code`, `name`, `image`) VALUES ('1', '100', 'Jicom', 'no_image.png');


#
# TABLE STRUCTURE FOR: tec_mf_categories
#

DROP TABLE IF EXISTS `tec_mf_categories`;

CREATE TABLE `tec_mf_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `name` varchar(55) NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `image` varchar(100) DEFAULT 'no_image.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_categories` (`id`, `code`, `name`, `parent_id`, `image`) VALUES ('1', '100', 'Oil', '0', 'no_image.png');
INSERT INTO `tec_mf_categories` (`id`, `code`, `name`, `parent_id`, `image`) VALUES ('2', '101', 'Others', '0', 'no_image.png');


#
# TABLE STRUCTURE FOR: tec_mf_expens_category
#

DROP TABLE IF EXISTS `tec_mf_expens_category`;

CREATE TABLE `tec_mf_expens_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'no_image.png',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tec_mf_finished_good_stock
#

DROP TABLE IF EXISTS `tec_mf_finished_good_stock`;

CREATE TABLE `tec_mf_finished_good_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `store_id` int(11) DEFAULT 0,
  `quantity` int(11) NOT NULL,
  `cost` decimal(25,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_mf_finished_good_stock_log
#

DROP TABLE IF EXISTS `tec_mf_finished_good_stock_log`;

CREATE TABLE `tec_mf_finished_good_stock_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `production_id` int(11) DEFAULT 0,
  `store_id` int(11) DEFAULT 0,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `adjust_type` varchar(50) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_mf_material
#

DROP TABLE IF EXISTS `tec_mf_material`;

CREATE TABLE `tec_mf_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `uom_id` int(3) DEFAULT 0,
  `descriptions` varchar(255) DEFAULT NULL,
  `cost` decimal(25,2) DEFAULT 0.00,
  `quantity` decimal(25,2) DEFAULT 0.00,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('1', 'Oil', '1', '1', '', '200.00', '50.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('2', 'flour', '2', '1', '', '75.00', '200.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('3', 'Sugar', '2', '1', '', '120.00', '100.00');


#
# TABLE STRUCTURE FOR: tec_mf_material_adjust
#

DROP TABLE IF EXISTS `tec_mf_material_adjust`;

CREATE TABLE `tec_mf_material_adjust` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_id` int(11) NOT NULL,
  `material_stock_id` int(11) NOT NULL,
  `adjust_type` int(11) NOT NULL COMMENT '1=''Increase'', 2=''Decrease''',
  `adjust_qty` decimal(12,2) NOT NULL DEFAULT 0.00,
  `from_qty` decimal(12,2) NOT NULL DEFAULT 0.00,
  `new_qty` decimal(12,2) NOT NULL DEFAULT 0.00,
  `adjust_reason` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `from_factory` int(11) DEFAULT NULL,
  `to_factory` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('1', '3', '3', '2', '2.00', '100.00', '98.00', 'Lost', '1', NULL, NULL, '2023-03-13 09:10:19');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('2', '3', '3', '2', '1.00', '98.00', '97.00', 'Lost', '1', NULL, NULL, '2023-03-13 09:10:32');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('3', '3', '3', '2', '10.00', '99.00', '89.00', 'Lost', '1', NULL, NULL, '2023-03-13 09:11:15');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('4', '3', '3', '2', '1.00', '90.00', '89.00', 'Lost', '1', NULL, NULL, '2023-03-13 09:11:42');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('5', '3', '3', '2', '99.00', '99.00', '0.00', 'Lost', '1', NULL, NULL, '2023-03-13 09:13:05');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('6', '3', '3', '2', '1.00', '1.00', '0.00', 'Lost', '1', NULL, NULL, '2023-03-13 09:13:15');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('7', '3', '3', '1', '1.00', '99.00', '100.00', '4', '1', NULL, NULL, '2023-03-13 09:52:28');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('8', '3', '3', '2', '1.00', '100.00', '99.00', 'test', '1', NULL, NULL, '2023-03-13 09:52:38');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('9', '3', '3', '2', '1.00', '99.00', '98.00', 'ssss', '1', NULL, NULL, '2023-03-13 09:52:51');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('10', '3', '3', '1', '4.00', '98.00', '102.00', 'rtere', '1', NULL, NULL, '2023-03-13 09:53:00');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('11', '3', '3', '2', '10.00', '102.00', '92.00', 'Lost', '1', NULL, NULL, '2023-03-13 10:50:02');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('12', '3', '3', '2', '2.00', '92.00', '90.00', 'lost', '1', NULL, NULL, '2023-03-13 10:50:12');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('13', '3', '3', '2', '1.00', '90.00', '89.00', 'Lost', '1', NULL, NULL, '2023-03-13 10:50:23');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`) VALUES ('14', '2', '2', '2', '5.00', '200.00', '195.00', 'Material transfer', '1', '2', '4', '2023-03-16 12:10:57');


#
# TABLE STRUCTURE FOR: tec_mf_material_store_qty
#

DROP TABLE IF EXISTS `tec_mf_material_store_qty`;

CREATE TABLE `tec_mf_material_store_qty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `quantity` decimal(12,2) NOT NULL DEFAULT 0.00,
  `cost` decimal(25,2) DEFAULT 0.00,
  PRIMARY KEY (`id`),
  KEY `material_id` (`material_id`),
  KEY `store_id` (`store_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('1', '1', '1', '2', '50.00', '200.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('2', '2', '1', '2', '195.00', '75.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('3', '3', '1', '2', '89.00', '120.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('4', '2', '1', '4', '5.00', '75.00');


#
# TABLE STRUCTURE FOR: tec_mf_payment
#

DROP TABLE IF EXISTS `tec_mf_payment`;

CREATE TABLE `tec_mf_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_date` datetime NOT NULL,
  `payment_amount` varchar(255) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'cash',
  `cheque_no` int(255) DEFAULT NULL,
  `payment_note` varchar(255) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tec_mf_production_dtls
#

DROP TABLE IF EXISTS `tec_mf_production_dtls`;

CREATE TABLE `tec_mf_production_dtls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `production_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `recipe_dtls_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `material_stock_id` decimal(12,2) NOT NULL,
  `quantity` decimal(12,2) NOT NULL DEFAULT 0.00,
  `cost` decimal(12,2) NOT NULL DEFAULT 0.00,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_status` int(11) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_mf_production_mst
#

DROP TABLE IF EXISTS `tec_mf_production_mst`;

CREATE TABLE `tec_mf_production_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_no` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `store_id` int(11) DEFAULT 0,
  `product_id` int(11) NOT NULL,
  `target_qty` decimal(12,2) DEFAULT NULL,
  `uom_id` int(11) NOT NULL,
  `actual_output` decimal(12,2) DEFAULT NULL,
  `wasted` decimal(12,2) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `total_cost` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `active_status` int(11) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_mf_purchase_material
#

DROP TABLE IF EXISTS `tec_mf_purchase_material`;

CREATE TABLE `tec_mf_purchase_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `quantity` decimal(15,2) NOT NULL,
  `cost` decimal(25,2) NOT NULL,
  `subtotal` decimal(25,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`, `subtotal`) VALUES ('1', '1', '1', '1', '2', '50.00', '200.00', '10000.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`, `subtotal`) VALUES ('2', '1', '2', '1', '2', '200.00', '75.00', '15000.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`, `subtotal`) VALUES ('3', '1', '3', '1', '2', '100.00', '120.00', '12000.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`, `subtotal`) VALUES ('4', '2', '2', '1', '4', '5.00', '75.00', '375.00');


#
# TABLE STRUCTURE FOR: tec_mf_purchase_payments
#

DROP TABLE IF EXISTS `tec_mf_purchase_payments`;

CREATE TABLE `tec_mf_purchase_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `mf_purchases_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `paid_by` varchar(20) NOT NULL,
  `cheque_no` varchar(20) DEFAULT NULL,
  `amount` decimal(25,2) NOT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `attachment` varchar(55) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `reference` varchar(50) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 1,
  `todayP_Payment` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_mf_purchases
#

DROP TABLE IF EXISTS `tec_mf_purchases`;

CREATE TABLE `tec_mf_purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` decimal(25,2) NOT NULL,
  `paid` decimal(25,2) DEFAULT 0.00,
  `deu` decimal(25,2) DEFAULT 0.00,
  `transport_cost` int(25) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_purchases` (`id`, `date`, `total`, `paid`, `deu`, `transport_cost`, `supplier_id`, `store_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES ('1', '2023-03-13 09:08:00', '37500.00', '0.00', '37500.00', '500', '1', '2', '1', '0', '2023-03-13 09:09:48', '2023-03-13 11:09:48');
INSERT INTO `tec_mf_purchases` (`id`, `date`, `total`, `paid`, `deu`, `transport_cost`, `supplier_id`, `store_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES ('2', '2023-03-16 10:10:00', '375.00', '0.00', '375.00', '0', '2', '4', '1', '0', '2023-03-16 10:10:57', '2023-03-16 12:10:57');


#
# TABLE STRUCTURE FOR: tec_mf_recipe_dtls
#

DROP TABLE IF EXISTS `tec_mf_recipe_dtls`;

CREATE TABLE `tec_mf_recipe_dtls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `material_stock_id` decimal(12,2) NOT NULL,
  `quantity` decimal(12,2) NOT NULL DEFAULT 0.00,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `active_status` int(11) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_mf_recipe_mst
#

DROP TABLE IF EXISTS `tec_mf_recipe_mst`;

CREATE TABLE `tec_mf_recipe_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `uom_id` int(11) NOT NULL DEFAULT 0,
  `target_qty` int(11) NOT NULL DEFAULT 1,
  `description` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `active_status` int(11) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_mf_suppliers
#

DROP TABLE IF EXISTS `tec_mf_suppliers`;

CREATE TABLE `tec_mf_suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `phone` varchar(150) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_suppliers` (`id`, `name`, `store_id`, `phone`, `email`, `address`, `descriptions`) VALUES ('1', 'Raw-Supplyer', '2', '21423423', '', 'add', '');
INSERT INTO `tec_mf_suppliers` (`id`, `name`, `store_id`, `phone`, `email`, `address`, `descriptions`) VALUES ('2', 'sup2', '4', '0170000001', '', 'Addr', '');


#
# TABLE STRUCTURE FOR: tec_mf_unit
#

DROP TABLE IF EXISTS `tec_mf_unit`;

CREATE TABLE `tec_mf_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_unit` (`id`, `name`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES ('1', 'kg', 'Kilogram', '1', '0', '2023-03-13 09:07:16', '2023-03-13 11:07:16');


#
# TABLE STRUCTURE FOR: tec_module_routes
#

DROP TABLE IF EXISTS `tec_module_routes`;

CREATE TABLE `tec_module_routes` (
  `module_routes_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `pos_view` tinyint(1) DEFAULT 0,
  `pos_add` tinyint(1) DEFAULT 0,
  `pos_edit` tinyint(1) DEFAULT 0,
  `pos_delete` tinyint(1) DEFAULT 0,
  `products_view` tinyint(1) DEFAULT 0,
  `products_add` tinyint(1) DEFAULT 0,
  `products_edit` tinyint(1) DEFAULT 0,
  `products_delete` tinyint(1) DEFAULT 0,
  `categories_view` tinyint(1) DEFAULT 0,
  `categories_add` tinyint(1) DEFAULT 0,
  `categories_edit` tinyint(1) DEFAULT 0,
  `categories_delete` tinyint(1) DEFAULT 0,
  `brands_view` tinyint(1) DEFAULT 0,
  `brands_add` tinyint(1) DEFAULT 0,
  `brands_edit` tinyint(1) DEFAULT 0,
  `brands_delete` tinyint(1) DEFAULT 0,
  `sales_view` tinyint(1) DEFAULT 0,
  `salereturn_view` tinyint(1) DEFAULT 0,
  `salereturn_add` tinyint(1) DEFAULT 0,
  `salereturn_delete` tinyint(1) DEFAULT 0,
  `purchases_view` tinyint(1) DEFAULT 0,
  `purchases_add` tinyint(1) DEFAULT 0,
  `purchases_edit` tinyint(1) DEFAULT 0,
  `purchases_delete` tinyint(1) DEFAULT 0,
  `supplierpayment_view` tinyint(1) DEFAULT 0,
  `supplierpayment_add` tinyint(1) DEFAULT 0,
  `supplierpayment_edit` tinyint(1) DEFAULT 0,
  `supplierpayment_delete` tinyint(1) DEFAULT 0,
  `expenses_view` tinyint(1) DEFAULT 0,
  `expenses_add` tinyint(1) DEFAULT 0,
  `expenses_edit` tinyint(1) DEFAULT 0,
  `expenses_delete` tinyint(1) DEFAULT 0,
  `collection_view` tinyint(1) DEFAULT 0,
  `collection_add` tinyint(1) DEFAULT 0,
  `collection_edit` tinyint(1) DEFAULT 0,
  `collection_delete` tinyint(1) DEFAULT 0,
  `bank_view` tinyint(1) DEFAULT 0,
  `bank_add` tinyint(1) DEFAULT 0,
  `bank_edit` tinyint(1) DEFAULT 0,
  `bank_delete` tinyint(1) DEFAULT 0,
  `user_view` tinyint(1) DEFAULT 0,
  `user_add` tinyint(1) DEFAULT 0,
  `user_edit` tinyint(1) DEFAULT 0,
  `user_delete` tinyint(1) DEFAULT 0,
  `employee_view` tinyint(1) DEFAULT 0,
  `employee_add` tinyint(1) DEFAULT 0,
  `employee_edit` tinyint(1) DEFAULT 0,
  `employee_delete` tinyint(1) DEFAULT 0,
  `customers_view` tinyint(1) DEFAULT 0,
  `customers_add` tinyint(1) DEFAULT 0,
  `customers_edit` tinyint(1) DEFAULT 0,
  `customers_delete` tinyint(1) DEFAULT 0,
  `suppliers_view` tinyint(1) DEFAULT 0,
  `suppliers_add` tinyint(1) DEFAULT 0,
  `suppliers_edit` tinyint(1) DEFAULT 0,
  `suppliers_delete` tinyint(1) DEFAULT 0,
  `store_view` tinyint(1) DEFAULT 0,
  `store_add` tinyint(1) DEFAULT 0,
  `store_edit` tinyint(1) DEFAULT 0,
  `store_delete` tinyint(1) DEFAULT 0,
  `group_view` tinyint(1) DEFAULT 0,
  `group_add` tinyint(1) DEFAULT 0,
  `group_edit` tinyint(1) DEFAULT 0,
  `group_delete` tinyint(1) DEFAULT 0,
  `permission_view` tinyint(1) DEFAULT 0,
  `permission_edit` tinyint(1) DEFAULT 0,
  `settings_view` tinyint(1) DEFAULT 0,
  `settings_edit` tinyint(1) DEFAULT 0,
  `reports_view` tinyint(1) DEFAULT 0,
  `mf_categories_view` tinyint(1) DEFAULT 0,
  `mf_categories_add` tinyint(1) DEFAULT 0,
  `mf_categories_edit` tinyint(1) DEFAULT 0,
  `mf_categories_delete` tinyint(1) DEFAULT 0,
  `mf_unit_view` tinyint(1) DEFAULT 0,
  `mf_unit_add` tinyint(1) DEFAULT 0,
  `mf_unit_edit` tinyint(1) DEFAULT 0,
  `mf_unit_delete` tinyint(1) DEFAULT 0,
  `mf_material_view` tinyint(1) DEFAULT 0,
  `mf_material_add` tinyint(1) DEFAULT 0,
  `mf_material_edit` tinyint(1) DEFAULT 0,
  `mf_material_delete` tinyint(1) DEFAULT 0,
  `mf_brands_view` tinyint(1) DEFAULT 0,
  `mf_brands_add` tinyint(1) DEFAULT 0,
  `mf_brands_edit` tinyint(1) DEFAULT 0,
  `mf_brands_delete` tinyint(1) DEFAULT 0,
  `mf_suppliers_view` tinyint(1) DEFAULT 0,
  `mf_suppliers_add` tinyint(1) DEFAULT 0,
  `mf_suppliers_edit` tinyint(1) DEFAULT 0,
  `mf_suppliers_delete` tinyint(1) DEFAULT 0,
  `mf_purchases_view` tinyint(1) DEFAULT 0,
  `mf_purchases_add` tinyint(1) DEFAULT 0,
  `mf_purchases_edit` tinyint(1) DEFAULT 0,
  `mf_purchases_delete` tinyint(1) DEFAULT 0,
  `mf_material_stock_view` tinyint(1) DEFAULT 0,
  `mf_material_stock_add` tinyint(1) DEFAULT 0,
  `mf_recipe_view` tinyint(1) DEFAULT 0,
  `mf_recipe_add` tinyint(1) DEFAULT 0,
  `mf_recipe_edit` tinyint(1) DEFAULT 0,
  `mf_recipe_delete` tinyint(1) DEFAULT 0,
  `mf_production_view` tinyint(1) DEFAULT 0,
  `mf_production_add` tinyint(1) DEFAULT 0,
  `mf_production_edit` tinyint(1) DEFAULT 0,
  `mf_production_delete` tinyint(1) DEFAULT 0,
  `mf_finish_good_stock_view` tinyint(4) DEFAULT 0,
  `mf_finish_good_stock_edit` tinyint(4) DEFAULT 0,
  `transfers_view` tinyint(1) DEFAULT 0,
  `transfers_add` tinyint(1) DEFAULT 0,
  `transfers_edit` tinyint(1) DEFAULT 0,
  `transfers_delete` tinyint(1) DEFAULT 0,
  `mf_payment_view` tinyint(1) DEFAULT 0,
  `mf_payment_add` tinyint(1) DEFAULT 0,
  `mf_payment_edit` tinyint(1) DEFAULT 0,
  `mf_payment_delete` tinyint(1) DEFAULT 0,
  `mf_report_view` tinyint(1) DEFAULT 0,
  `mf_transfers_view` tinyint(1) NOT NULL DEFAULT 0,
  `mf_transfers_add` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`module_routes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_module_routes` (`module_routes_id`, `group_id`, `pos_view`, `pos_add`, `pos_edit`, `pos_delete`, `products_view`, `products_add`, `products_edit`, `products_delete`, `categories_view`, `categories_add`, `categories_edit`, `categories_delete`, `brands_view`, `brands_add`, `brands_edit`, `brands_delete`, `sales_view`, `salereturn_view`, `salereturn_add`, `salereturn_delete`, `purchases_view`, `purchases_add`, `purchases_edit`, `purchases_delete`, `supplierpayment_view`, `supplierpayment_add`, `supplierpayment_edit`, `supplierpayment_delete`, `expenses_view`, `expenses_add`, `expenses_edit`, `expenses_delete`, `collection_view`, `collection_add`, `collection_edit`, `collection_delete`, `bank_view`, `bank_add`, `bank_edit`, `bank_delete`, `user_view`, `user_add`, `user_edit`, `user_delete`, `employee_view`, `employee_add`, `employee_edit`, `employee_delete`, `customers_view`, `customers_add`, `customers_edit`, `customers_delete`, `suppliers_view`, `suppliers_add`, `suppliers_edit`, `suppliers_delete`, `store_view`, `store_add`, `store_edit`, `store_delete`, `group_view`, `group_add`, `group_edit`, `group_delete`, `permission_view`, `permission_edit`, `settings_view`, `settings_edit`, `reports_view`, `mf_categories_view`, `mf_categories_add`, `mf_categories_edit`, `mf_categories_delete`, `mf_unit_view`, `mf_unit_add`, `mf_unit_edit`, `mf_unit_delete`, `mf_material_view`, `mf_material_add`, `mf_material_edit`, `mf_material_delete`, `mf_brands_view`, `mf_brands_add`, `mf_brands_edit`, `mf_brands_delete`, `mf_suppliers_view`, `mf_suppliers_add`, `mf_suppliers_edit`, `mf_suppliers_delete`, `mf_purchases_view`, `mf_purchases_add`, `mf_purchases_edit`, `mf_purchases_delete`, `mf_material_stock_view`, `mf_material_stock_add`, `mf_recipe_view`, `mf_recipe_add`, `mf_recipe_edit`, `mf_recipe_delete`, `mf_production_view`, `mf_production_add`, `mf_production_edit`, `mf_production_delete`, `mf_finish_good_stock_view`, `mf_finish_good_stock_edit`, `transfers_view`, `transfers_add`, `transfers_edit`, `transfers_delete`, `mf_payment_view`, `mf_payment_add`, `mf_payment_edit`, `mf_payment_delete`, `mf_report_view`, `mf_transfers_view`, `mf_transfers_add`) VALUES ('1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `tec_module_routes` (`module_routes_id`, `group_id`, `pos_view`, `pos_add`, `pos_edit`, `pos_delete`, `products_view`, `products_add`, `products_edit`, `products_delete`, `categories_view`, `categories_add`, `categories_edit`, `categories_delete`, `brands_view`, `brands_add`, `brands_edit`, `brands_delete`, `sales_view`, `salereturn_view`, `salereturn_add`, `salereturn_delete`, `purchases_view`, `purchases_add`, `purchases_edit`, `purchases_delete`, `supplierpayment_view`, `supplierpayment_add`, `supplierpayment_edit`, `supplierpayment_delete`, `expenses_view`, `expenses_add`, `expenses_edit`, `expenses_delete`, `collection_view`, `collection_add`, `collection_edit`, `collection_delete`, `bank_view`, `bank_add`, `bank_edit`, `bank_delete`, `user_view`, `user_add`, `user_edit`, `user_delete`, `employee_view`, `employee_add`, `employee_edit`, `employee_delete`, `customers_view`, `customers_add`, `customers_edit`, `customers_delete`, `suppliers_view`, `suppliers_add`, `suppliers_edit`, `suppliers_delete`, `store_view`, `store_add`, `store_edit`, `store_delete`, `group_view`, `group_add`, `group_edit`, `group_delete`, `permission_view`, `permission_edit`, `settings_view`, `settings_edit`, `reports_view`, `mf_categories_view`, `mf_categories_add`, `mf_categories_edit`, `mf_categories_delete`, `mf_unit_view`, `mf_unit_add`, `mf_unit_edit`, `mf_unit_delete`, `mf_material_view`, `mf_material_add`, `mf_material_edit`, `mf_material_delete`, `mf_brands_view`, `mf_brands_add`, `mf_brands_edit`, `mf_brands_delete`, `mf_suppliers_view`, `mf_suppliers_add`, `mf_suppliers_edit`, `mf_suppliers_delete`, `mf_purchases_view`, `mf_purchases_add`, `mf_purchases_edit`, `mf_purchases_delete`, `mf_material_stock_view`, `mf_material_stock_add`, `mf_recipe_view`, `mf_recipe_add`, `mf_recipe_edit`, `mf_recipe_delete`, `mf_production_view`, `mf_production_add`, `mf_production_edit`, `mf_production_delete`, `mf_finish_good_stock_view`, `mf_finish_good_stock_edit`, `transfers_view`, `transfers_add`, `transfers_edit`, `transfers_delete`, `mf_payment_view`, `mf_payment_add`, `mf_payment_edit`, `mf_payment_delete`, `mf_report_view`, `mf_transfers_view`, `mf_transfers_add`) VALUES ('2', '2', '1', '1', NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', '1', NULL, NULL, '1', NULL, NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0');
INSERT INTO `tec_module_routes` (`module_routes_id`, `group_id`, `pos_view`, `pos_add`, `pos_edit`, `pos_delete`, `products_view`, `products_add`, `products_edit`, `products_delete`, `categories_view`, `categories_add`, `categories_edit`, `categories_delete`, `brands_view`, `brands_add`, `brands_edit`, `brands_delete`, `sales_view`, `salereturn_view`, `salereturn_add`, `salereturn_delete`, `purchases_view`, `purchases_add`, `purchases_edit`, `purchases_delete`, `supplierpayment_view`, `supplierpayment_add`, `supplierpayment_edit`, `supplierpayment_delete`, `expenses_view`, `expenses_add`, `expenses_edit`, `expenses_delete`, `collection_view`, `collection_add`, `collection_edit`, `collection_delete`, `bank_view`, `bank_add`, `bank_edit`, `bank_delete`, `user_view`, `user_add`, `user_edit`, `user_delete`, `employee_view`, `employee_add`, `employee_edit`, `employee_delete`, `customers_view`, `customers_add`, `customers_edit`, `customers_delete`, `suppliers_view`, `suppliers_add`, `suppliers_edit`, `suppliers_delete`, `store_view`, `store_add`, `store_edit`, `store_delete`, `group_view`, `group_add`, `group_edit`, `group_delete`, `permission_view`, `permission_edit`, `settings_view`, `settings_edit`, `reports_view`, `mf_categories_view`, `mf_categories_add`, `mf_categories_edit`, `mf_categories_delete`, `mf_unit_view`, `mf_unit_add`, `mf_unit_edit`, `mf_unit_delete`, `mf_material_view`, `mf_material_add`, `mf_material_edit`, `mf_material_delete`, `mf_brands_view`, `mf_brands_add`, `mf_brands_edit`, `mf_brands_delete`, `mf_suppliers_view`, `mf_suppliers_add`, `mf_suppliers_edit`, `mf_suppliers_delete`, `mf_purchases_view`, `mf_purchases_add`, `mf_purchases_edit`, `mf_purchases_delete`, `mf_material_stock_view`, `mf_material_stock_add`, `mf_recipe_view`, `mf_recipe_add`, `mf_recipe_edit`, `mf_recipe_delete`, `mf_production_view`, `mf_production_add`, `mf_production_edit`, `mf_production_delete`, `mf_finish_good_stock_view`, `mf_finish_good_stock_edit`, `transfers_view`, `transfers_add`, `transfers_edit`, `transfers_delete`, `mf_payment_view`, `mf_payment_add`, `mf_payment_edit`, `mf_payment_delete`, `mf_report_view`, `mf_transfers_view`, `mf_transfers_add`) VALUES ('3', '3', '1', '1', NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0');


#
# TABLE STRUCTURE FOR: tec_note_category
#

DROP TABLE IF EXISTS `tec_note_category`;

CREATE TABLE `tec_note_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_partner
#

DROP TABLE IF EXISTS `tec_partner`;

CREATE TABLE `tec_partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mather_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `position` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `partner_part` varchar(10) NOT NULL,
  `join_date` date NOT NULL,
  `satus` int(11) NOT NULL DEFAULT 1,
  `entry_date` int(11) NOT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_payloaner
#

DROP TABLE IF EXISTS `tec_payloaner`;

CREATE TABLE `tec_payloaner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,0) NOT NULL,
  `loaner_id` int(11) NOT NULL,
  `entry_date` datetime DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `payment_type` varchar(20) DEFAULT NULL COMMENT 'cash/bank',
  `bankname` text DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `cheque_or_card_no` varchar(100) DEFAULT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_payments
#

DROP TABLE IF EXISTS `tec_payments`;

CREATE TABLE `tec_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `sale_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `transaction_id` varchar(50) DEFAULT NULL,
  `paid_by` varchar(20) NOT NULL,
  `cheque_no` varchar(20) DEFAULT NULL,
  `cc_no` varchar(20) DEFAULT NULL,
  `cc_holder` varchar(25) DEFAULT NULL,
  `cc_month` varchar(2) DEFAULT NULL,
  `cc_year` varchar(4) DEFAULT NULL,
  `cc_type` varchar(20) DEFAULT NULL,
  `amount` decimal(25,2) NOT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `attachment` varchar(55) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `pos_paid` decimal(25,2) DEFAULT 0.00,
  `pos_balance` decimal(25,2) DEFAULT 0.00,
  `gc_no` varchar(20) DEFAULT NULL,
  `reference` varchar(50) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 1,
  `payment_type` varchar(20) NOT NULL DEFAULT 'sale',
  `service_id` int(11) DEFAULT NULL,
  `collect_id` int(11) DEFAULT NULL,
  `tt_no` varchar(20) DEFAULT NULL,
  `cheque_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('1', '2023-03-12 10:56:59', '1', '1', NULL, 'Cash', '', '', '', '', '', '', '200.00', NULL, '43', NULL, '', '200.00', '0.00', '', NULL, NULL, NULL, '3', 'sale', NULL, '1', '', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('2', '2023-03-12 16:18:00', '2', '1', NULL, 'cash', '', '', '', '', '', '', '400.00', NULL, '1', NULL, '', '400.00', '0.00', '', NULL, NULL, NULL, '3', 'sale', NULL, '2', '', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('3', '2023-03-12 16:20:14', '3', '1', NULL, 'TT', '', '', '', '', '', '', '200.00', NULL, '1', NULL, '', '200.00', '0.00', '', NULL, NULL, NULL, '3', 'sale', NULL, '3', '123', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('4', '2023-03-12 16:20:57', '4', '1', NULL, 'Cheque', '12', '', '', '', '', '', '200.00', NULL, '1', NULL, '', '200.00', '0.00', '', NULL, NULL, NULL, '3', 'sale', NULL, '4', '', '2023-03-12');


#
# TABLE STRUCTURE FOR: tec_paysalary
#

DROP TABLE IF EXISTS `tec_paysalary`;

CREATE TABLE `tec_paysalary` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `month_id` varchar(2) NOT NULL,
  `year` year(4) NOT NULL,
  `paid_by` varchar(50) DEFAULT NULL,
  `amount` varchar(10) NOT NULL,
  `commission` varchar(10) NOT NULL,
  `note` text NOT NULL,
  `pay_date` datetime NOT NULL,
  `store_id` int(11) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_permissions
#

DROP TABLE IF EXISTS `tec_permissions`;

CREATE TABLE `tec_permissions` (
  `permissions_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `pos` tinyint(1) DEFAULT 0,
  `products` tinyint(1) DEFAULT 0,
  `categories` tinyint(1) DEFAULT 0,
  `brands` tinyint(1) DEFAULT 0,
  `sales` tinyint(1) DEFAULT 0,
  `salereturn` tinyint(1) DEFAULT 0,
  `purchases` tinyint(1) DEFAULT 0,
  `supplierpayment` tinyint(1) DEFAULT 0,
  `expenses` tinyint(1) DEFAULT 0,
  `collection` tinyint(1) DEFAULT 0,
  `bank` tinyint(1) DEFAULT 0,
  `user` tinyint(1) DEFAULT 0,
  `employee` tinyint(1) DEFAULT 0,
  `customers` tinyint(1) DEFAULT 0,
  `suppliers` tinyint(1) DEFAULT 0,
  `store` tinyint(1) DEFAULT 0,
  `group` tinyint(1) DEFAULT 0,
  `permission` tinyint(1) DEFAULT 0,
  `settings` tinyint(1) DEFAULT 0,
  `reports` tinyint(1) DEFAULT 0,
  `mf_categories` tinyint(1) DEFAULT 0,
  `mf_unit` tinyint(1) DEFAULT 0,
  `mf_material` tinyint(1) DEFAULT 0,
  `mf_brands` tinyint(1) DEFAULT 0,
  `mf_suppliers` tinyint(1) DEFAULT 0,
  `mf_purchases` tinyint(1) DEFAULT 0,
  `mf_material_stock` tinyint(1) DEFAULT 0,
  `mf_recipe` tinyint(1) DEFAULT 0,
  `mf_production` tinyint(1) DEFAULT 0,
  `mf_finish_good_stock` tinyint(4) DEFAULT 0,
  `transfers` tinyint(1) DEFAULT 0,
  `mf_payment` tinyint(1) DEFAULT 0,
  `mf_report` tinyint(1) DEFAULT 0,
  `mf_transfers` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`permissions_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_permissions` (`permissions_id`, `group_id`, `pos`, `products`, `categories`, `brands`, `sales`, `salereturn`, `purchases`, `supplierpayment`, `expenses`, `collection`, `bank`, `user`, `employee`, `customers`, `suppliers`, `store`, `group`, `permission`, `settings`, `reports`, `mf_categories`, `mf_unit`, `mf_material`, `mf_brands`, `mf_suppliers`, `mf_purchases`, `mf_material_stock`, `mf_recipe`, `mf_production`, `mf_finish_good_stock`, `transfers`, `mf_payment`, `mf_report`, `mf_transfers`) VALUES ('1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `tec_permissions` (`permissions_id`, `group_id`, `pos`, `products`, `categories`, `brands`, `sales`, `salereturn`, `purchases`, `supplierpayment`, `expenses`, `collection`, `bank`, `user`, `employee`, `customers`, `suppliers`, `store`, `group`, `permission`, `settings`, `reports`, `mf_categories`, `mf_unit`, `mf_material`, `mf_brands`, `mf_suppliers`, `mf_purchases`, `mf_material_stock`, `mf_recipe`, `mf_production`, `mf_finish_good_stock`, `transfers`, `mf_payment`, `mf_report`, `mf_transfers`) VALUES ('2', '2', '1', '1', '1', NULL, '1', NULL, '1', '1', '1', '1', '1', NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0');
INSERT INTO `tec_permissions` (`permissions_id`, `group_id`, `pos`, `products`, `categories`, `brands`, `sales`, `salereturn`, `purchases`, `supplierpayment`, `expenses`, `collection`, `bank`, `user`, `employee`, `customers`, `suppliers`, `store`, `group`, `permission`, `settings`, `reports`, `mf_categories`, `mf_unit`, `mf_material`, `mf_brands`, `mf_suppliers`, `mf_purchases`, `mf_material_stock`, `mf_recipe`, `mf_production`, `mf_finish_good_stock`, `transfers`, `mf_payment`, `mf_report`, `mf_transfers`) VALUES ('3', '3', '1', '1', '1', '1', '1', NULL, NULL, NULL, '1', '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0');


#
# TABLE STRUCTURE FOR: tec_persons
#

DROP TABLE IF EXISTS `tec_persons`;

CREATE TABLE `tec_persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `cf1` varchar(255) NOT NULL,
  `cf2` varchar(255) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_pettycash
#

DROP TABLE IF EXISTS `tec_pettycash`;

CREATE TABLE `tec_pettycash` (
  `pettycash_id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_date` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`pettycash_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tec_pro_sequence
#

DROP TABLE IF EXISTS `tec_pro_sequence`;

CREATE TABLE `tec_pro_sequence` (
  `sequence_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `purchases_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `sequence` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 0,
  `entry_date` datetime NOT NULL,
  PRIMARY KEY (`sequence_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_product_store_qty
#

DROP TABLE IF EXISTS `tec_product_store_qty`;

CREATE TABLE `tec_product_store_qty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `quantity` decimal(12,2) NOT NULL DEFAULT 0.00,
  `price` decimal(25,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `store_id` (`store_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('1', '1', '3', '5.00', NULL);


#
# TABLE STRUCTURE FOR: tec_products
#

DROP TABLE IF EXISTS `tec_products`;

CREATE TABLE `tec_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `name` char(255) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 1,
  `brands_id` int(11) NOT NULL,
  `price` decimal(25,2) NOT NULL,
  `image` varchar(255) DEFAULT 'no_image.png',
  `tax` varchar(20) DEFAULT NULL,
  `cost` decimal(25,2) DEFAULT NULL,
  `tax_method` tinyint(1) DEFAULT 1,
  `quantity` decimal(15,2) DEFAULT 0.00,
  `barcode_symbology` varchar(20) NOT NULL DEFAULT 'code39',
  `type` varchar(20) NOT NULL DEFAULT 'standard',
  `details` text DEFAULT NULL,
  `alert_quantity` decimal(10,2) DEFAULT 0.00,
  `sequence` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_products` (`id`, `code`, `name`, `category_id`, `brands_id`, `price`, `image`, `tax`, `cost`, `tax_method`, `quantity`, `barcode_symbology`, `type`, `details`, `alert_quantity`, `sequence`) VALUES ('1', '00', 'TEST1', '1', '1', '200.00', 'no_image.png', '0', '0.00', '0', '5.00', 'code39', 'standard', '', '0.00', NULL);


#
# TABLE STRUCTURE FOR: tec_purchase_items
#

DROP TABLE IF EXISTS `tec_purchase_items`;

CREATE TABLE `tec_purchase_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` decimal(15,2) NOT NULL,
  `cost` decimal(25,2) NOT NULL,
  `foreign_cost` decimal(10,0) DEFAULT NULL,
  `subtotal` decimal(25,2) NOT NULL,
  `store_id` int(11) NOT NULL,
  `expiry_year` varchar(20) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('1', '1', '1', '10.00', '0.00', NULL, '0.00', '3', '', NULL);


#
# TABLE STRUCTURE FOR: tec_purchase_payments
#

DROP TABLE IF EXISTS `tec_purchase_payments`;

CREATE TABLE `tec_purchase_payments` (
  `p_pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `purchases_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `transaction_id` varchar(50) DEFAULT NULL,
  `paid_by` varchar(20) NOT NULL,
  `cheque_no` varchar(20) DEFAULT NULL,
  `cc_no` varchar(20) DEFAULT NULL,
  `cc_holder` varchar(25) DEFAULT NULL,
  `cc_month` varchar(2) DEFAULT NULL,
  `cc_year` varchar(4) DEFAULT NULL,
  `cc_type` varchar(20) DEFAULT NULL,
  `amount` decimal(25,2) NOT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `attachment` varchar(55) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `pos_paid` decimal(25,2) DEFAULT 0.00,
  `pos_balance` decimal(25,2) DEFAULT 0.00,
  `gc_no` varchar(20) DEFAULT NULL,
  `reference` varchar(50) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 1,
  `todayP_Payment` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_pay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_purchases
#

DROP TABLE IF EXISTS `tec_purchases`;

CREATE TABLE `tec_purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(55) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `note` varchar(1000) NOT NULL,
  `total` decimal(25,2) NOT NULL,
  `paid` varchar(255) NOT NULL DEFAULT '0',
  `deu` varchar(255) NOT NULL DEFAULT '0',
  `attachment` varchar(255) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `received` tinyint(1) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 1,
  `purchase_type` tinyint(1) NOT NULL DEFAULT 1,
  `transfer_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('1', '', '2023-03-12 10:54:00', '', '0.00', '0', '0', NULL, '1', '1', '35', '3', '1', '0');


#
# TABLE STRUCTURE FOR: tec_quotation
#

DROP TABLE IF EXISTS `tec_quotation`;

CREATE TABLE `tec_quotation` (
  `quotation_id` int(11) NOT NULL AUTO_INCREMENT,
  `quotation_title` varchar(255) NOT NULL,
  `quotation_date` datetime NOT NULL,
  `quotation_details` text NOT NULL,
  `quotation_mail` varchar(255) NOT NULL,
  PRIMARY KEY (`quotation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_registers
#

DROP TABLE IF EXISTS `tec_registers`;

CREATE TABLE `tec_registers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` varchar(11) NOT NULL DEFAULT '',
  `cash_in_hand` varchar(20) NOT NULL DEFAULT '',
  `status` varchar(10) NOT NULL DEFAULT '',
  `total_cash` decimal(25,2) DEFAULT NULL,
  `total_cheques` int(11) DEFAULT NULL,
  `total_cc_slips` int(11) DEFAULT NULL,
  `total_cash_submitted` varchar(20) DEFAULT '',
  `total_cheques_submitted` varchar(11) NOT NULL DEFAULT '',
  `total_cc_slips_submitted` varchar(11) NOT NULL DEFAULT '',
  `note` text DEFAULT NULL,
  `closed_at` timestamp NULL DEFAULT NULL,
  `transfer_opened_bills` varchar(50) DEFAULT NULL,
  `closed_by` int(11) DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_registers` (`id`, `date`, `user_id`, `cash_in_hand`, `status`, `total_cash`, `total_cheques`, `total_cc_slips`, `total_cash_submitted`, `total_cheques_submitted`, `total_cc_slips_submitted`, `note`, `closed_at`, `transfer_opened_bills`, `closed_by`, `store_id`) VALUES ('1', '2023-03-12 10:49:52', '43', '0', 'open', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '3');
INSERT INTO `tec_registers` (`id`, `date`, `user_id`, `cash_in_hand`, `status`, `total_cash`, `total_cheques`, `total_cc_slips`, `total_cash_submitted`, `total_cheques_submitted`, `total_cc_slips_submitted`, `note`, `closed_at`, `transfer_opened_bills`, `closed_by`, `store_id`) VALUES ('2', '2023-03-12 16:17:19', '1', '0', 'open', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '0');
INSERT INTO `tec_registers` (`id`, `date`, `user_id`, `cash_in_hand`, `status`, `total_cash`, `total_cheques`, `total_cc_slips`, `total_cash_submitted`, `total_cheques_submitted`, `total_cc_slips_submitted`, `note`, `closed_at`, `transfer_opened_bills`, `closed_by`, `store_id`) VALUES ('3', '2023-03-14 12:04:06', '35', '0', 'open', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '0');


#
# TABLE STRUCTURE FOR: tec_sale_items
#

DROP TABLE IF EXISTS `tec_sale_items`;

CREATE TABLE `tec_sale_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` decimal(15,2) NOT NULL,
  `unit_price` decimal(25,2) NOT NULL,
  `net_unit_price` decimal(25,2) NOT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `item_discount` decimal(25,2) DEFAULT NULL,
  `tax` int(20) DEFAULT NULL,
  `item_tax` decimal(25,2) DEFAULT NULL,
  `subtotal` decimal(25,2) NOT NULL,
  `real_unit_price` decimal(25,2) DEFAULT NULL,
  `cost` decimal(25,2) DEFAULT 0.00,
  `store_id` int(11) NOT NULL,
  `warranty_year` varchar(255) DEFAULT NULL,
  `warranty_date` date DEFAULT NULL,
  `return_item_id` int(11) DEFAULT NULL,
  `qnty_type` int(11) DEFAULT 0 COMMENT '1=>"Bucket", 2=>"Carton", 3=>"Bag 10", 4=>"Bag 25"',
  `per_type_qnty` decimal(25,2) DEFAULT 0.00,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('1', '1', '1', '1.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '200.00', '200.00', '0.00', '3', '', NULL, NULL, '0', '0.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('2', '2', '1', '2.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '400.00', '200.00', '0.00', '3', '', NULL, NULL, '0', '0.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('3', '3', '1', '1.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '200.00', '200.00', '0.00', '3', '', NULL, NULL, '0', '0.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('4', '4', '1', '1.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '200.00', '200.00', '0.00', '3', '', NULL, NULL, '0', '0.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('5', '5', '2', '5.00', '75.00', '75.00', NULL, NULL, NULL, NULL, '375.00', '75.00', '75.00', '2', NULL, NULL, NULL, '0', '0.00');


#
# TABLE STRUCTURE FOR: tec_sale_items_log
#

DROP TABLE IF EXISTS `tec_sale_items_log`;

CREATE TABLE `tec_sale_items_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_id` int(11) NOT NULL,
  `sale_log_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` decimal(15,2) NOT NULL,
  `unit_price` decimal(25,2) NOT NULL,
  `net_unit_price` decimal(25,2) NOT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `item_discount` decimal(25,2) DEFAULT NULL,
  `tax` int(20) DEFAULT NULL,
  `item_tax` decimal(25,2) DEFAULT NULL,
  `subtotal` decimal(25,2) NOT NULL,
  `real_unit_price` decimal(25,2) DEFAULT NULL,
  `cost` decimal(25,2) DEFAULT 0.00,
  `store_id` int(11) NOT NULL,
  `warranty_year` varchar(255) DEFAULT NULL,
  `warranty_date` date DEFAULT NULL,
  `return_item_id` int(11) DEFAULT NULL,
  `qnty_type` int(3) DEFAULT 0,
  `per_type_qnty` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('1', '1', '1', '1', '1.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '200.00', '200.00', '0.00', '3', '', NULL, NULL, '0', '0');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('2', '2', '2', '1', '2.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '400.00', '200.00', '0.00', '3', '', NULL, NULL, '0', '0');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('3', '3', '3', '1', '1.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '200.00', '200.00', '0.00', '3', '', NULL, NULL, '0', '0');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('4', '4', '4', '1', '1.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '200.00', '200.00', '0.00', '3', '', NULL, NULL, '0', '0');


#
# TABLE STRUCTURE FOR: tec_sales
#

DROP TABLE IF EXISTS `tec_sales`;

CREATE TABLE `tec_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(55) NOT NULL,
  `total` decimal(25,2) NOT NULL,
  `product_discount` decimal(25,2) DEFAULT NULL,
  `order_discount_id` varchar(20) DEFAULT NULL,
  `order_discount` decimal(25,2) DEFAULT NULL,
  `total_discount` decimal(25,2) DEFAULT NULL,
  `product_tax` decimal(25,2) DEFAULT NULL,
  `order_tax_id` varchar(20) DEFAULT NULL,
  `order_tax` decimal(25,2) DEFAULT NULL,
  `total_tax` decimal(25,2) DEFAULT NULL,
  `grand_total` decimal(25,2) NOT NULL,
  `total_items` int(11) DEFAULT NULL,
  `total_quantity` decimal(15,2) DEFAULT NULL,
  `paid` decimal(25,2) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `rounding` decimal(8,2) DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 1,
  `sales_type` varchar(20) NOT NULL DEFAULT 'sale',
  `service_id` int(11) DEFAULT NULL,
  `warranty` varchar(35) NOT NULL DEFAULT 'Not',
  `paid_by` varchar(255) NOT NULL,
  `return_id` int(11) DEFAULT NULL,
  `invno` int(11) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `aging_day` int(11) DEFAULT 0,
  `aging_status` int(11) DEFAULT 0,
  `delivery_date` date DEFAULT NULL,
  `payment_status` int(3) DEFAULT 0 COMMENT '1=>''paid'',2=>''partial'',3=>''due''',
  `sale_type` tinyint(1) NOT NULL DEFAULT 1,
  `transfer_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('1', '2023-03-12 10:56:58', '1', 'test customer', '200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '200.00', '1', '1.00', '200.00', '43', NULL, NULL, '', 'paid', '0.00', '3', 'sale', NULL, 'Not', 'Cash', NULL, NULL, '1', '0', '0', '2023-03-12', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('2', '2023-03-12 16:17:59', '1', 'test customer', '400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '400.00', '1', '2.00', '400.00', '1', NULL, NULL, '', 'paid', '0.00', '3', 'sale', NULL, 'Not', 'cash', NULL, NULL, '2', '0', '0', '2023-03-12', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('3', '2023-03-12 16:20:13', '1', 'test customer', '200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '200.00', '1', '1.00', '200.00', '1', NULL, NULL, '', 'paid', '0.00', '3', 'sale', NULL, 'Not', 'TT', NULL, NULL, '3', '0', '0', '2023-03-12', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('4', '2023-03-12 16:20:56', '1', 'test customer', '200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '200.00', '1', '1.00', '200.00', '1', NULL, NULL, '', 'paid', '0.00', '3', 'sale', NULL, 'Not', 'Cheque', NULL, NULL, '4', '0', '0', '2023-03-12', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('5', '2023-03-16 10:10:57', '2', 'cust', '375.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '375.00', '1', '5.00', '0.00', '1', NULL, NULL, NULL, 'due', NULL, '2', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-16', '3', '3', '0');


#
# TABLE STRUCTURE FOR: tec_sales_log
#

DROP TABLE IF EXISTS `tec_sales_log`;

CREATE TABLE `tec_sales_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(55) NOT NULL,
  `total` decimal(25,2) NOT NULL,
  `product_discount` decimal(25,2) DEFAULT NULL,
  `order_discount_id` varchar(20) DEFAULT NULL,
  `order_discount` decimal(25,2) DEFAULT NULL,
  `total_discount` decimal(25,2) DEFAULT NULL,
  `product_tax` decimal(25,2) DEFAULT NULL,
  `order_tax_id` varchar(20) DEFAULT NULL,
  `order_tax` decimal(25,2) DEFAULT NULL,
  `total_tax` decimal(25,2) DEFAULT NULL,
  `grand_total` decimal(25,2) NOT NULL,
  `total_items` int(11) DEFAULT NULL,
  `total_quantity` decimal(15,2) DEFAULT NULL,
  `paid` decimal(25,2) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `rounding` decimal(8,2) DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 1,
  `sales_type` varchar(20) NOT NULL DEFAULT 'sale',
  `type` varchar(20) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `warranty` varchar(35) NOT NULL DEFAULT 'Not',
  `paid_by` varchar(255) NOT NULL,
  `expenses_id` int(11) DEFAULT NULL,
  `return_id` int(11) DEFAULT NULL,
  `collection_id` int(255) DEFAULT NULL,
  `aging_day` int(11) DEFAULT 0,
  `aging_status` int(11) DEFAULT 0,
  `delivery_date` date DEFAULT NULL,
  `payment_status` int(3) DEFAULT NULL COMMENT '1=>''paid'', 2=>''partial'', 3=>''due''',
  `sale_type` tinyint(1) NOT NULL DEFAULT 1,
  `transfer_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('1', '1', '2023-03-12 10:56:58', '1', 'test customer', '200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '200.00', '1', '1.00', '200.00', '43', NULL, NULL, '', 'paid', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Cash', NULL, NULL, '1', '0', '0', '2023-03-12', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('2', '2', '2023-03-12 16:17:59', '1', 'test customer', '400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '400.00', '1', '2.00', '400.00', '1', NULL, NULL, '', 'paid', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'cash', NULL, NULL, '2', '0', '0', '2023-03-12', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('3', '3', '2023-03-12 16:20:13', '1', 'test customer', '200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '200.00', '1', '1.00', '200.00', '1', NULL, NULL, '', 'paid', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '3', '0', '0', '2023-03-12', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('4', '4', '2023-03-12 16:20:56', '1', 'test customer', '200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '200.00', '1', '1.00', '200.00', '1', NULL, NULL, '', 'paid', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Cheque', NULL, NULL, '4', '0', '0', '2023-03-12', '1', '1', '0');


#
# TABLE STRUCTURE FOR: tec_salesreturn
#

DROP TABLE IF EXISTS `tec_salesreturn`;

CREATE TABLE `tec_salesreturn` (
  `sreturn_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_submit` datetime NOT NULL,
  `sale_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `total` varchar(20) DEFAULT NULL,
  `paid` varchar(20) DEFAULT NULL,
  `total_items` int(11) DEFAULT NULL,
  `total_quantity` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `status` varchar(100) DEFAULT 'returned',
  `updated_at` datetime DEFAULT NULL,
  `store_id` int(11) NOT NULL,
  PRIMARY KEY (`sreturn_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_service
#

DROP TABLE IF EXISTS `tec_service`;

CREATE TABLE `tec_service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_submit` datetime NOT NULL,
  `sale_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `total` varchar(20) DEFAULT NULL,
  `paid` varchar(20) DEFAULT NULL,
  `total_items` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_service_parts
#

DROP TABLE IF EXISTS `tec_service_parts`;

CREATE TABLE `tec_service_parts` (
  `parts_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `parts_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_cost` varchar(25) NOT NULL,
  `subtotal` varchar(25) NOT NULL,
  PRIMARY KEY (`parts_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_service_promlem
#

DROP TABLE IF EXISTS `tec_service_promlem`;

CREATE TABLE `tec_service_promlem` (
  `problem_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `item_id` varchar(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `problem` text NOT NULL,
  `suspect` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`problem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_sessions
#

DROP TABLE IF EXISTS `tec_sessions`;

CREATE TABLE `tec_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('22ki8qsbto76b7ea249164d0io', '203.95.220.28', '1678603287', '__ci_last_regenerate|i:1678603170;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678592879\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('24rpp9spnpao1budlq0dnu56c3', '203.95.220.28', '1678701469', '__ci_last_regenerate|i:1678700894;error|s:68:\"<p>You have 3 failed login attempts. Please try after 10 minutes</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2u355br5n2q0o27nkdnsjkr7nt', '203.95.220.28', '1678700330', '__ci_last_regenerate|i:1678700323;error|s:37:\"<p>Login Failed, Please try again</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4e35ceps18jab3v1fl4ot4gfkb', '203.95.220.28', '1678763164', '__ci_last_regenerate|i:1678763164;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4ujvnsp2i3b2pn32o5ar4pi6k3', '203.95.220.28', '1678940482', '__ci_last_regenerate|i:1678939726;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678884078\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}from_warehouse|s:1:\"2\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4vas7ja3qa6a3fj33q6crfo5it', '45.248.151.243', '1678558672', '__ci_last_regenerate|i:1678558661;error|s:41:\"<p>You can\'t login before 10:00:00 am</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('55ivofdeefl0v9cut3cj2i8cpc', '45.248.151.243', '1678628894', '__ci_last_regenerate|i:1678628838;identity|s:21:\"abircoleman@gmail.com\";username|s:13:\"staff_rafique\";email|s:21:\"abircoleman@gmail.com\";user_id|s:2:\"43\";first_name|s:10:\"MD RAFIQUL\";last_name|s:5:\"ISLAM\";created_on|s:24:\"Sun 12 Mar 2023 10:43 AM\";old_last_login|s:10:\"1678597265\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"3\";store_id|s:1:\"3\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"1\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 10:49:52\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6grhri403opek0fgt8glfpl3mf', '45.248.151.243', '1678597276', '__ci_last_regenerate|i:1678597271;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1678596725\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;message|s:38:\"<p>You are successfully logged in.</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6qq1fbo0a3vpidk708tcbqtjf1', '203.95.220.28', '1678687055', '__ci_last_regenerate|i:1678687054;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8qnsoo295eoe1prcq7bd5psfrc', '203.95.220.28', '1678592925', '__ci_last_regenerate|i:1678592172;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678591650\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('984gibf20gh8r1v756up6qf6kk', '45.248.151.243', '1678508287', '__ci_last_regenerate|i:1678507725;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678450440\";last_ip|s:14:\"103.87.138.109\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9vl6a1ka7p50kg1aq9sl9ludfe', '203.95.220.28', '1678884925', '__ci_last_regenerate|i:1678883783;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678773284\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bh29og2j9qhj4pd018tbfggjo0', '203.95.220.28', '1678617810', '__ci_last_regenerate|i:1678617810;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bq24tcb6mfl18qslr3um623lg3', '203.95.220.28', '1678684438', '__ci_last_regenerate|i:1678684437;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c54btelmtgvkala5bvjapgv1sg', '203.95.220.28', '1678621166', '__ci_last_regenerate|i:1678621166;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678616945\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('cqoud94c2rue7ea15fulju3glb', '203.95.220.28', '1678696864', '__ci_last_regenerate|i:1678696164;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('enun945qtnfvmakva3hqfqstnu', '203.95.220.28', '1678784559', '__ci_last_regenerate|i:1678783515;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fmv9v3apbr9417b34042j6n1et', '203.95.220.28', '1678679707', '__ci_last_regenerate|i:1678679275;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678679052\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('iq3ji2pkfb85gu1n9tiq0bi7hj', '203.95.220.28', '1678701600', '__ci_last_regenerate|i:1678701326;error|s:68:\"<p>You have 3 failed login attempts. Please try after 10 minutes</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('j5dsj16sn5ei514ac7nuqrjcpj', '45.248.151.243', '1678703389', '__ci_last_regenerate|i:1678703389;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('l9n71eqqp9m3a5b6mun2u80195', '203.95.220.28', '1678687069', '__ci_last_regenerate|i:1678687069;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678679277\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}from_warehouse|s:1:\"2\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('m232m38165mflblrg3p5n7et38', '203.95.220.28', '1678771026', '__ci_last_regenerate|i:1678771023;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678700872\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;message|s:38:\"<p>You are successfully logged in.</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('msqjhfe36sotd2ahhgf4v2r566', '203.95.220.28', '1678855011', '__ci_last_regenerate|i:1678855011;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('n6bmuhp0uphncs6hkseuf42no5', '203.95.220.28', '1678884105', '__ci_last_regenerate|i:1678884071;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678883792\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('o68j8qficplpi6c5kg554es6hr', '203.95.220.28', '1678591766', '__ci_last_regenerate|i:1678591646;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678591378\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ol1kqk87u8ieo11j944rqefvfi', '45.248.151.243', '1678858034', '__ci_last_regenerate|i:1678858034;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('po56o6nd2hkkq4g9r22l0kt4jg', '203.95.220.28', '1678616962', '__ci_last_regenerate|i:1678616938;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678616159\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"new\";}register_id|s:1:\"2\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 16:17:19\";store_id_pos|s:1:\"3\";error|s:11:\"Credit Over\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('r286phf02mj7hoff44mhrjpaj0', '203.95.220.28', '1678682954', '__ci_last_regenerate|i:1678682954;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678617824\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('t5eqp12i5f8ar3f21n0rqcridb', '203.95.220.28', '1678616390', '__ci_last_regenerate|i:1678614976;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678603176\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('tvbk5q01mcmuo7h9m8ldcqs6f6', '103.87.138.109', '1678450447', '__ci_last_regenerate|i:1678450317;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678373092\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('u1rgtcikii2dpip7q0pt2mi1av', '203.95.220.28', '1678942260', '__ci_last_regenerate|i:1678941205;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678939733\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('u4ccqouusnfahnovv00vt8l9d1', '45.248.151.243', '1678860159', '__ci_last_regenerate|i:1678858035;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1678777922\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}from_warehouse|s:1:\"2\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('u7cl4qm53d99iqclpk3ls1num5', '59.153.102.247', '1678777449', '__ci_last_regenerate|i:1678777449;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1678773775\";last_ip|s:14:\"59.153.102.247\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('u8kpjj0dovmt9e9u1vju92og8g', '203.95.220.28', '1678773297', '__ci_last_regenerate|i:1678773282;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678771026\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ub6fjvf4bjulp09j0rhqsco6dq', '45.248.151.243', '1678778227', '__ci_last_regenerate|i:1678778220;identity|s:21:\"abircoleman@gmail.com\";username|s:13:\"staff_rafique\";email|s:21:\"abircoleman@gmail.com\";user_id|s:2:\"43\";first_name|s:10:\"MD RAFIQUL\";last_name|s:5:\"ISLAM\";created_on|s:24:\"Sun 12 Mar 2023 10:43 AM\";old_last_login|s:10:\"1678773906\";last_ip|s:14:\"59.153.102.247\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"3\";store_id|s:1:\"3\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"1\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 10:49:52\";');


#
# TABLE STRUCTURE FOR: tec_settings
#

DROP TABLE IF EXISTS `tec_settings`;

CREATE TABLE `tec_settings` (
  `setting_id` int(1) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `site_name` varchar(55) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `dateformat` varchar(20) DEFAULT NULL,
  `timeformat` varchar(20) DEFAULT NULL,
  `default_email` varchar(100) NOT NULL,
  `language` varchar(20) NOT NULL,
  `version` varchar(5) NOT NULL DEFAULT '1.0',
  `theme` varchar(20) NOT NULL,
  `timezone` varchar(255) NOT NULL DEFAULT '0',
  `protocol` varchar(20) NOT NULL DEFAULT 'mail',
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(100) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(10) DEFAULT '25',
  `smtp_crypto` varchar(5) DEFAULT NULL,
  `mmode` tinyint(1) NOT NULL,
  `captcha` tinyint(1) NOT NULL DEFAULT 1,
  `mailpath` varchar(55) DEFAULT NULL,
  `currency_prefix` varchar(3) NOT NULL,
  `default_customer` int(11) NOT NULL,
  `default_tax_rate` varchar(20) NOT NULL,
  `rows_per_page` int(2) NOT NULL,
  `total_rows` int(2) NOT NULL,
  `header` varchar(1000) NOT NULL,
  `footer` varchar(1000) NOT NULL,
  `warranty` text NOT NULL,
  `bsty` tinyint(4) NOT NULL,
  `display_kb` tinyint(4) NOT NULL,
  `default_category` int(11) NOT NULL,
  `default_discount` varchar(20) NOT NULL,
  `item_addition` tinyint(1) NOT NULL,
  `barcode_symbology` varchar(55) DEFAULT NULL,
  `pro_limit` tinyint(4) NOT NULL,
  `decimals` tinyint(1) NOT NULL DEFAULT 2,
  `thousands_sep` varchar(2) NOT NULL DEFAULT ',',
  `decimals_sep` varchar(2) NOT NULL DEFAULT '.',
  `focus_add_item` varchar(55) DEFAULT NULL,
  `add_customer` varchar(55) DEFAULT NULL,
  `toggle_category_slider` varchar(55) DEFAULT NULL,
  `cancel_sale` varchar(55) DEFAULT NULL,
  `suspend_sale` varchar(55) DEFAULT NULL,
  `print_order` varchar(55) DEFAULT NULL,
  `print_bill` varchar(55) DEFAULT NULL,
  `finalize_sale` varchar(55) DEFAULT NULL,
  `today_sale` varchar(55) DEFAULT NULL,
  `open_hold_bills` varchar(55) DEFAULT NULL,
  `close_register` varchar(55) DEFAULT NULL,
  `java_applet` tinyint(1) NOT NULL,
  `receipt_printer` varchar(55) DEFAULT NULL,
  `pos_printers` varchar(255) DEFAULT NULL,
  `cash_drawer_codes` varchar(55) DEFAULT NULL,
  `char_per_line` tinyint(4) DEFAULT 42,
  `rounding` tinyint(1) DEFAULT 0,
  `pin_code` varchar(20) DEFAULT NULL,
  `stripe` tinyint(1) DEFAULT NULL,
  `stripe_secret_key` varchar(100) DEFAULT NULL,
  `stripe_publishable_key` varchar(100) DEFAULT NULL,
  `purchase_code` varchar(100) DEFAULT NULL,
  `envato_username` varchar(50) DEFAULT NULL,
  `theme_style` varchar(25) DEFAULT 'green',
  `after_sale_page` tinyint(1) DEFAULT NULL,
  `overselling` tinyint(1) DEFAULT 1,
  `multi_store` tinyint(1) DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `sarvice_info` text NOT NULL,
  `uniqcode` varchar(255) NOT NULL,
  `p_count` int(11) NOT NULL,
  `api_key` varchar(255) DEFAULT NULL,
  `sender_id` varchar(255) DEFAULT NULL,
  `supplier_sms` text DEFAULT NULL,
  `customer_sms` text DEFAULT NULL,
  `bin_number` varchar(255) DEFAULT NULL,
  `aging_day` int(3) DEFAULT 0,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_settings` (`setting_id`, `logo`, `site_name`, `tel`, `dateformat`, `timeformat`, `default_email`, `language`, `version`, `theme`, `timezone`, `protocol`, `smtp_host`, `smtp_user`, `smtp_pass`, `smtp_port`, `smtp_crypto`, `mmode`, `captcha`, `mailpath`, `currency_prefix`, `default_customer`, `default_tax_rate`, `rows_per_page`, `total_rows`, `header`, `footer`, `warranty`, `bsty`, `display_kb`, `default_category`, `default_discount`, `item_addition`, `barcode_symbology`, `pro_limit`, `decimals`, `thousands_sep`, `decimals_sep`, `focus_add_item`, `add_customer`, `toggle_category_slider`, `cancel_sale`, `suspend_sale`, `print_order`, `print_bill`, `finalize_sale`, `today_sale`, `open_hold_bills`, `close_register`, `java_applet`, `receipt_printer`, `pos_printers`, `cash_drawer_codes`, `char_per_line`, `rounding`, `pin_code`, `stripe`, `stripe_secret_key`, `stripe_publishable_key`, `purchase_code`, `envato_username`, `theme_style`, `after_sale_page`, `overselling`, `multi_store`, `position`, `sarvice_info`, `uniqcode`, `p_count`, `api_key`, `sender_id`, `supplier_sms`, `customer_sms`, `bin_number`, `aging_day`) VALUES ('1', 'icon1.png', 'Jicom', '00000', 'D j M Y', 'h:i A', 'corporate.sharafat@gmail.com', 'english', '4.0.5', 'default', 'Asia/Kuala_Lumpur', 'mail', 'pop.gmail.com', 'noreply@spos.tecdiary.my', '', '25', '', '0', '0', NULL, 'BDT', '1', '0', '50', '30', '<p>JIcom, Room no. 37 (G/F) 145 Airport Road Super Market, Tejgaon, Dhaka<br></p>\r\n', 'Thanks for being with <strong>  JIcom</strong><br>\r\n', '<p><br></p>', '3', '0', '1', '0', '1', NULL, '20', '2', ',', '.', 'ALT+F1', 'ALT+F2', 'ALT+F10', 'ALT+F5', 'ALT+F6', 'ALT+F11', 'ALT+F12', 'ALT+F8', 'Ctrl+F1', 'Ctrl+F2', 'ALT+F7', '0', '', '', '', '42', '1', '2122', '1', 'sk_test_jHf4cEzAYtgcXvgWPCsQAn50', 'pk_test_beat8SWPORb0OVdF2H77A7uG', '9cefb35d-62de-4e01-940e-217f6fe947e5', 'wedothewebs', 'green', NULL, '1', NULL, 'Sales manager, Staff', '<p><br></p>', '1854098', '1', 'C20070235fc5d89dc52509.77444942', 'CCT', 'Dear {name} , Tk. {paid_balance}/= has been paid. Remaining Balance - Tk. {remaining_balance}/= Regards, JIcom, Room no. 37 (G/F) 145 Airport Road Super Market, Tejgaon, Dhaka\r\n', 'Dear Valued Customer, Your due Balance Tk. {remaining_balance}/=.You\'re requested to pay the remaining balance ASAP. Regards, JIcom, Room no. 37 (G/F) 145 Airport Road Super Market, Tejgaon, Dhaka\r\n', '123456', '0');


#
# TABLE STRUCTURE FOR: tec_sms_corner
#

DROP TABLE IF EXISTS `tec_sms_corner`;

CREATE TABLE `tec_sms_corner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL COMMENT '1 for customer/ 2 for supplier',
  `user_id` int(11) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# TABLE STRUCTURE FOR: tec_sreturn_items
#

DROP TABLE IF EXISTS `tec_sreturn_items`;

CREATE TABLE `tec_sreturn_items` (
  `sreturn_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `sreturn_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` decimal(15,2) NOT NULL,
  `unit_price` decimal(25,2) NOT NULL,
  `net_unit_price` decimal(25,2) NOT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `item_discount` decimal(25,2) DEFAULT NULL,
  `tax` int(20) DEFAULT NULL,
  `item_tax` decimal(25,2) DEFAULT NULL,
  `subtotal` decimal(25,2) NOT NULL,
  `real_unit_price` decimal(25,2) DEFAULT NULL,
  `cost` decimal(25,2) DEFAULT 0.00,
  `store_id` int(11) NOT NULL,
  `return_amount` int(11) NOT NULL,
  `return_qty` int(11) NOT NULL,
  `sale_item_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `sequence_id` varchar(255) NOT NULL,
  PRIMARY KEY (`sreturn_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_stores
#

DROP TABLE IF EXISTS `tec_stores`;

CREATE TABLE `tec_stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `store_type` int(3) DEFAULT 1,
  `code` varchar(20) DEFAULT NULL,
  `logo` varchar(255) DEFAULT 'logo.png',
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `address1` varchar(50) DEFAULT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `postal_code` varchar(8) DEFAULT NULL,
  `country` varchar(25) DEFAULT NULL,
  `currency_code` varchar(3) DEFAULT NULL,
  `receipt_header` text DEFAULT NULL,
  `receipt_footer` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_stores` (`id`, `name`, `store_type`, `code`, `logo`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `postal_code`, `country`, `currency_code`, `receipt_header`, `receipt_footer`) VALUES ('1', 'SALES CENTER', '1', NULL, 'logo.png', 'CONTACT@JICOMBD.COM', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tec_stores` (`id`, `name`, `store_type`, `code`, `logo`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `postal_code`, `country`, `currency_code`, `receipt_header`, `receipt_footer`) VALUES ('2', 'JICOM FACTORY (F1)', '2', NULL, 'logo.png', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tec_stores` (`id`, `name`, `store_type`, `code`, `logo`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `postal_code`, `country`, `currency_code`, `receipt_header`, `receipt_footer`) VALUES ('3', 'MOULAVIBAZAR', '1', NULL, 'logo.png', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tec_stores` (`id`, `name`, `store_type`, `code`, `logo`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `postal_code`, `country`, `currency_code`, `receipt_header`, `receipt_footer`) VALUES ('4', 'FACTORY 2 (F2)', '2', NULL, 'logo.png', '111@GMAIL.COM', '111', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: tec_suppliers
#

DROP TABLE IF EXISTS `tec_suppliers`;

CREATE TABLE `tec_suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `cf1` varchar(255) NOT NULL,
  `cf2` varchar(255) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `store_id` int(255) NOT NULL,
  `opening_blance` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_suppliers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`) VALUES ('1', 'SUPPLIER', '', '', '121', '1223@GMAIL.COM', '3', '0');


#
# TABLE STRUCTURE FOR: tec_suspended_items
#

DROP TABLE IF EXISTS `tec_suspended_items`;

CREATE TABLE `tec_suspended_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suspend_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` decimal(15,2) NOT NULL,
  `unit_price` decimal(25,2) NOT NULL,
  `net_unit_price` decimal(25,2) NOT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `item_discount` decimal(25,2) DEFAULT NULL,
  `tax` int(20) DEFAULT NULL,
  `item_tax` decimal(25,2) DEFAULT NULL,
  `subtotal` decimal(25,2) NOT NULL,
  `real_unit_price` decimal(25,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_suspended_sales
#

DROP TABLE IF EXISTS `tec_suspended_sales`;

CREATE TABLE `tec_suspended_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(55) NOT NULL,
  `total` decimal(25,2) NOT NULL,
  `product_discount` decimal(25,2) DEFAULT NULL,
  `order_discount_id` varchar(20) DEFAULT NULL,
  `order_discount` decimal(25,2) DEFAULT NULL,
  `total_discount` decimal(25,2) DEFAULT NULL,
  `product_tax` decimal(25,2) DEFAULT NULL,
  `order_tax_id` varchar(20) DEFAULT NULL,
  `order_tax` decimal(25,2) DEFAULT NULL,
  `total_tax` decimal(25,2) DEFAULT NULL,
  `grand_total` decimal(25,2) NOT NULL,
  `total_items` int(11) DEFAULT NULL,
  `total_quantity` decimal(15,2) DEFAULT NULL,
  `paid` decimal(25,2) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `hold_ref` varchar(255) DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_today_collection
#

DROP TABLE IF EXISTS `tec_today_collection`;

CREATE TABLE `tec_today_collection` (
  `today_collect_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_date` datetime NOT NULL,
  `payment_amount` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_note` varchar(255) NOT NULL,
  `store_id` int(11) DEFAULT 0,
  `payment_status` varchar(255) DEFAULT 'Pending',
  `paid_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`today_collect_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`) VALUES ('1', '2023-03-12 10:56:59', '200', '1', '', '3', 'Pending', 'Cash');
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`) VALUES ('2', '2023-03-12 16:18:00', '400', '1', '', '3', 'Pending', 'cash');
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`) VALUES ('3', '2023-03-12 16:20:14', '200', '1', '', '3', 'Pending', 'TT');
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`) VALUES ('4', '2023-03-12 16:20:57', '200', '1', '', '3', 'Pending', 'Cheque');
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`) VALUES ('6', '2023-03-14 12:07:43', '200', '0', '', '3', 'Pending', 'Cash');


#
# TABLE STRUCTURE FOR: tec_today_purchase_payment
#

DROP TABLE IF EXISTS `tec_today_purchase_payment`;

CREATE TABLE `tec_today_purchase_payment` (
  `today_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_date` datetime NOT NULL,
  `payment_amount` varchar(10) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'cash',
  `cheque_no` varchar(20) DEFAULT '',
  `payment_note` text NOT NULL DEFAULT '',
  `store_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`today_payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: tec_tranjiction
#

DROP TABLE IF EXISTS `tec_tranjiction`;

CREATE TABLE `tec_tranjiction` (
  `tranjiction_id` int(11) NOT NULL AUTO_INCREMENT,
  `tran_amount` varchar(25) NOT NULL,
  `bank_account_id` int(11) NOT NULL,
  `tran_date` datetime NOT NULL,
  `tran_type` int(11) DEFAULT NULL,
  `pettytobankt` varchar(255) DEFAULT NULL,
  `pedding_cheque` int(11) DEFAULT NULL,
  `loan_pending_id` int(11) DEFAULT NULL,
  `tran_note` text DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`tranjiction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('1', '200', '1', '2023-03-12 16:22:48', '1', NULL, '2', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('2', '200', '1', '2023-03-12 16:22:53', '1', NULL, '1', NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: tec_transfers
#

DROP TABLE IF EXISTS `tec_transfers`;

CREATE TABLE `tec_transfers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `from_warehouse_id` int(11) NOT NULL,
  `from_warehouse_name` varchar(255) NOT NULL,
  `to_warehouse_id` int(11) NOT NULL,
  `to_warehouse_name` varchar(255) NOT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `total` decimal(25,4) DEFAULT NULL,
  `grand_total` decimal(25,4) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'pending',
  `shipping` decimal(25,4) NOT NULL DEFAULT 0.0000,
  `attachment` varchar(55) DEFAULT NULL,
  `reference` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `supplier_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_transfers_items
#

DROP TABLE IF EXISTS `tec_transfers_items`;

CREATE TABLE `tec_transfers_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transfers_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` decimal(10,0) NOT NULL,
  `display_cost` decimal(10,0) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `sequence` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_user_logins
#

DROP TABLE IF EXISTS `tec_user_logins`;

CREATE TABLE `tec_user_logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('1', '1', NULL, '103.87.138.109', 'info@goldeninfotech.com.bd', '2023-03-10 20:14:00');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('2', '1', NULL, '45.248.151.243', 'info@goldeninfotech.com.bd', '2023-03-11 12:08:47');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('3', '1', NULL, '45.248.151.243', 'info@goldeninfotech.com.bd', '2023-03-12 01:56:14');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('4', '1', NULL, '45.248.151.243', 'info@goldeninfotech.com.bd', '2023-03-12 02:00:21');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('5', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-12 02:01:54');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('6', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-12 02:15:01');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('7', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-12 11:22:58');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('8', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-12 11:27:30');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('9', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-12 11:47:59');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('10', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-12 12:35:17');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('11', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-12 12:36:54');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('12', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-12 12:37:11');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('13', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-12 12:38:13');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('14', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-12 12:45:57');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('15', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-12 12:46:45');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('16', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-12 12:47:24');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('17', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-12 12:47:57');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('18', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-12 12:50:35');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('19', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-12 12:52:05');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('20', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-12 12:55:44');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('21', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-12 12:56:28');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('22', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-12 13:00:30');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('23', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-12 13:01:05');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('24', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-12 13:01:16');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('25', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-12 14:39:36');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('26', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-12 17:56:19');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('27', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-12 18:15:59');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('28', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-12 18:29:05');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('29', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-12 18:43:44');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('30', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-12 21:46:07');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('31', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-12 21:47:23');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('32', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-13 11:05:10');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('33', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-13 11:44:12');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('34', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-13 11:47:57');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('35', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-13 12:49:34');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('36', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-13 17:37:56');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('37', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-13 17:47:52');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('38', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-14 13:17:06');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('39', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-14 13:54:44');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('40', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-03-14 14:02:55');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('41', '43', NULL, '59.153.102.247', 'abircoleman@gmail.com', '2023-03-14 14:05:06');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('42', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-03-14 14:08:09');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('43', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-14 15:04:11');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('44', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-14 15:11:39');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('45', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-14 15:12:02');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('46', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-14 15:17:06');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('47', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-15 13:27:22');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('48', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-15 20:36:32');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('49', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-15 20:41:18');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('50', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-16 12:08:53');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('51', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-16 12:33:28');


#
# TABLE STRUCTURE FOR: tec_users
#

DROP TABLE IF EXISTS `tec_users`;

CREATE TABLE `tec_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `last_ip_address` varbinary(45) DEFAULT NULL,
  `ip_address` varbinary(45) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `avatar` varchar(55) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `group_id` int(11) unsigned NOT NULL DEFAULT 2,
  `store_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_users` (`id`, `last_ip_address`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `avatar`, `gender`, `group_id`, `store_id`) VALUES ('1', '203.95.220.28', '127.0.0.1', 'admin', '71820aec2f0cbfe7229b8c726871fd8c0f105ae1', NULL, 'info@goldeninfotech.com.bd', NULL, NULL, NULL, NULL, '1435204774', '1678941208', '1', 'it', 'admin', 'Electrolife', '+88018XXXXXXXX', NULL, 'male', '1', '0');
INSERT INTO `tec_users` (`id`, `last_ip_address`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `avatar`, `gender`, `group_id`, `store_id`) VALUES ('35', '45.248.151.243', '103.60.175.142', 'shahariarabir', '504abef6533611de7391df2271c0f15d19fbfb3e', NULL, 'abirshahariar97@gmail.com', NULL, NULL, NULL, NULL, '1672553737', '1678858042', '1', 'Abir', 'Shahariar', NULL, '01781125179', NULL, 'male', '1', '0');
INSERT INTO `tec_users` (`id`, `last_ip_address`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `avatar`, `gender`, `group_id`, `store_id`) VALUES ('42', '45.248.151.243', '45.248.151.243', 'arif_man', '37faefb3d7299eab7bb0a5238772cd0f0e8eeada', NULL, 'arifur7704@gmail.com', NULL, NULL, NULL, NULL, '1678558232', '1678777899', '1', 'ARIFUR ', 'RAHMAN', NULL, '01710535268', NULL, 'male', '2', '1');
INSERT INTO `tec_users` (`id`, `last_ip_address`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `avatar`, `gender`, `group_id`, `store_id`) VALUES ('43', '45.248.151.243', '45.248.151.243', 'staff_rafique', 'a0b3d25dc7d612fc3c232f5bc3b6878a51b58612', NULL, 'abircoleman@gmail.com', NULL, NULL, NULL, NULL, '1678596201', '1678778226', '1', 'MD RAFIQUL', 'ISLAM', NULL, '017777771717', NULL, 'male', '3', '3');


