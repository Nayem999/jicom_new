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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('3', '45', '100000', '100000', '9', '2023-03-19 19:09:52', '', '1', 'TT');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('4', '62', '121860', '121860', '10', '2023-03-19 19:21:40', '', '1', 'TT');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('5', '32', '50000', '50000', '11', '2023-03-19 19:30:02', '', '1', 'TT');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('6', '8', '0', '30000', '12', '2023-03-19 19:30:52', '', '1', 'TT');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('7', '63', '80000', '80000', '13', '2023-03-19 19:31:43', '', '1', 'TT');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('8', '61', '50000', '50000', '14', '2023-03-19 19:36:43', '', '1', 'Cheque');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('9', '67', '28322', '28322', '15', '2023-03-19 19:37:24', '', '1', 'Cheque');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('10', '8', '35540', '50000', '17', '2023-03-20 22:58:13', '', '1', 'TT');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('11', '44', '18180', '18180', '18', '2023-03-20 22:59:23', '', '1', 'TT');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('12', '30', '13195', '13195', '19', '2023-03-20 23:00:04', '', '1', 'Cash');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('13', '67', '27440', '27440', '25', '2023-03-24 21:46:15', '', '1', 'TT');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('14', '8', '0', '45000', '26', '2023-03-24 21:47:03', '', '1', 'Deposit');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('15', '8', '0', '50000', '27', '2023-03-24 21:52:09', '', '1', 'Deposit');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('16', '13', '90000', '90000', '28', '2023-03-26 14:03:19', '', '1', 'Deposit');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('17', '48', '200000', '200000', '29', '2023-03-26 14:08:18', '', '1', 'Deposit');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('19', '8', '35730', '70000', '31', '2023-03-30 15:02:52', '', '1', 'Deposit');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('20', '13', '10000', '85800', '32', '2023-03-30 15:03:28', '', '1', 'Cheque');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('21', '67', '0', '39494', '36', '2023-03-30 16:01:20', '', '1', 'Deposit');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('22', '23', '0', '230000', '37', '2023-04-01 11:25:14', '', '1', 'Cheque');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('23', '8', '0', '25000', '38', '2023-04-01 11:32:09', '', '1', 'Deposit');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('24', '24', '0', '70000', '39', '2023-04-01 12:03:11', '', '1', 'Cheque');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('25', '8', '0', '100000', '42', '2023-04-06 11:37:04', '', '1', 'Deposit');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('26', '64', '468800', '468800', '43', '2023-04-06 11:48:55', '', '1', 'Deposit');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('28', '58', '1399000', '2664000', '45', '2023-04-06 12:22:43', '', '1', 'Cheque');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('29', '67', '0', '186192', '46', '2023-04-06 12:37:46', '', '1', 'Cheque');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('30', '38', '80000', '80000', '47', '2023-04-06 12:41:28', '', '1', 'Deposit');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('31', '65', '222494', '222494', '48', '2023-04-06 12:44:11', '', '1', 'Deposit');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('32', '17', '0', '125000', '49', '2023-04-06 12:59:07', '', '1', 'Cash');
INSERT INTO `tec_adv_collection` (`adv_id`, `customer_id`, `adv_collection`, `total_collection`, `today_collect_id`, `add_date`, `note`, `store_id`, `paid_by`) VALUES ('34', '8', '0', '40000', '51', '2023-04-08 17:00:25', '', '1', 'TT');


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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tec_bank_account` (`bank_account_id`, `bank_name`, `account_name`, `account_no`, `current_amount`, `create_date`, `status`, `store_id`) VALUES ('2', 'IFIC BANK', 'NASHAKA INTERNATIONAL', '12121', '0', '2023-03-16', '1', '3');
INSERT INTO `tec_bank_account` (`bank_account_id`, `bank_name`, `account_name`, `account_no`, `current_amount`, `create_date`, `status`, `store_id`) VALUES ('3', 'PUBALI BANBK', 'NASHAKA INTERNATIONAL', '1111', '5158563.5', '2023-03-18', '1', '3');
INSERT INTO `tec_bank_account` (`bank_account_id`, `bank_name`, `account_name`, `account_no`, `current_amount`, `create_date`, `status`, `store_id`) VALUES ('4', 'IBBL', 'JICOM', '539', '2760510', '2023-03-18', '1', '1');
INSERT INTO `tec_bank_account` (`bank_account_id`, `bank_name`, `account_name`, `account_no`, `current_amount`, `create_date`, `status`, `store_id`) VALUES ('5', 'UBL', 'JICOM', '323', '8457128.22', '2023-03-18', '1', '1');
INSERT INTO `tec_bank_account` (`bank_account_id`, `bank_name`, `account_name`, `account_no`, `current_amount`, `create_date`, `status`, `store_id`) VALUES ('6', 'NATIONAL BANK LTD', 'JICOM', '1111', '3059319', '2023-03-19', '1', '1');
INSERT INTO `tec_bank_account` (`bank_account_id`, `bank_name`, `account_name`, `account_no`, `current_amount`, `create_date`, `status`, `store_id`) VALUES ('7', 'PUBALI BANK LTD', 'JICOM', '1111', '12746284', '2023-03-19', '1', '1');
INSERT INTO `tec_bank_account` (`bank_account_id`, `bank_name`, `account_name`, `account_no`, `current_amount`, `create_date`, `status`, `store_id`) VALUES ('8', 'DBBL', 'JICOM', '1', '45750', '2023-03-21', '1', '1');


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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('1', '200', '1', '123', NULL, '1', '2023-03-12 16:20:13', 'Approved', '1', NULL, '3', '3', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('2', '200', '1', '12', NULL, '1', '2023-03-12 16:20:56', 'Approved', '1', NULL, '4', '3', NULL, '2023-03-12');
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('3', '54000', '4', 'NA', NULL, '20', '2023-03-18 21:40:02', 'Approved', '1', NULL, '7', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('4', '100000', '6', 'na', NULL, '45', '2023-03-19 19:09:52', 'Approved', '1', NULL, '9', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('5', '121860', '7', 'NA', NULL, '62', '2023-03-19 19:21:40', 'Approved', '1', NULL, '10', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('6', '50000', '7', 'NA', NULL, '32', '2023-03-19 19:30:02', 'Approved', '1', NULL, '11', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('7', '30000', '7', 'NA', NULL, '8', '2023-03-19 19:30:52', 'Approved', '1', NULL, '12', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('8', '80000', '6', 'NA', NULL, '63', '2023-03-19 19:31:43', 'Approved', '1', NULL, '13', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('9', '50000', '5', '00', NULL, '61', '2023-03-19 19:36:43', 'Approved', '1', NULL, '14', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('10', '28322', '5', '212', NULL, '67', '2023-03-19 19:37:24', 'Approved', '1', NULL, '15', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('11', '22590', '4', 'NA', NULL, '71', '2023-03-19 20:20:53', 'Approved', '1', NULL, '16', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('12', '50000', '7', 'NA', NULL, '8', '2023-03-20 22:58:13', 'Approved', '1', NULL, '17', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('13', '18180', '7', 'NA', NULL, '44', '2023-03-20 22:59:23', 'Approved', '1', NULL, '18', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('14', '159200', '7', 'NA', NULL, '22', '2023-03-20 23:20:15', 'Approved', '1', NULL, '20', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('15', '27270', '5', 'NA', NULL, '12', '2023-03-20 23:24:03', 'Approved', '1', NULL, '21', '1', NULL, '2023-03-21');
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('16', '47880', '7', 'NA', NULL, '73', '2023-03-20 23:30:13', 'Approved', '1', NULL, '22', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('17', '45750', '8', 'NA', NULL, '16', '2023-03-21 17:32:13', 'Approved', '1', NULL, '23', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('18', '45000', '4', 'NA', NULL, '27', '2023-03-21 17:33:50', 'Approved', '1', NULL, '24', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('19', '27440', '5', 'na', NULL, '67', '2023-03-24 21:46:15', 'Approved', '1', NULL, '25', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('20', '45000', '3', 'na', NULL, '8', '2023-03-24 21:47:03', 'Approved', '1', NULL, '26', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('21', '50000', '7', 'NA', NULL, '8', '2023-03-24 21:52:09', 'Approved', '1', NULL, '27', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('22', '90000', '5', 'NA', NULL, '13', '2023-03-26 14:03:19', 'Approved', '1', NULL, '28', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('23', '200000', '4', 'NA', NULL, '48', '2023-03-26 14:08:18', 'Approved', '1', NULL, '29', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('24', '1', '4', '146574', NULL, '1', '2023-03-28 14:47:17', 'Approved', '1', NULL, '30', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('25', '70000', '7', 'na', NULL, '8', '2023-03-30 15:02:52', 'Approved', '1', NULL, '31', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('26', '85800', '5', '11', NULL, '13', '2023-03-30 15:03:28', 'Approved', '1', NULL, '32', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('27', '48320', '7', 'NA', NULL, '29', '2023-03-30 15:32:33', 'Approved', '1', NULL, '33', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('28', '59280', '7', 'NA', NULL, '62', '2023-03-30 15:36:16', 'Approved', '1', NULL, '34', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('29', '54000', '4', 'NA', NULL, '20', '2023-03-30 15:40:18', 'Approved', '1', NULL, '35', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('30', '39494', '5', 'NA', NULL, '67', '2023-03-30 16:01:20', 'Approved', '1', NULL, '36', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('31', '230000', '5', 'NA', NULL, '23', '2023-04-01 11:25:14', 'Approved', '1', NULL, '37', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('32', '25000', '7', 'NA', NULL, '8', '2023-04-01 11:32:09', 'Approved', '1', NULL, '38', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('33', '70000', '4', 'NA', NULL, '24', '2023-04-01 12:03:11', 'Approved', '1', NULL, '39', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('34', '99360', '7', 'na', NULL, '62', '2023-04-03 15:15:54', 'Approved', '1', NULL, '40', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('35', '54000', '4', 'na', NULL, '20', '2023-04-03 15:19:18', 'Approved', '1', NULL, '41', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('36', '100000', '7', 'na', NULL, '8', '2023-04-06 11:37:04', 'Approved', '1', NULL, '42', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('37', '468800', '7', 'NA', NULL, '64', '2023-04-06 11:48:55', 'Approved', '1', NULL, '43', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('38', '2664000', '5', 'na', NULL, '58', '2023-04-06 12:16:17', 'Approved', '1', NULL, '44', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('39', '2664000', '5', 'na', NULL, '58', '2023-04-06 12:22:43', 'Approved', '1', NULL, '45', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('40', '186192', '5', 'na', NULL, '67', '2023-04-06 12:37:46', 'Approved', '1', NULL, '46', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('41', '80000', '4', 'NA', NULL, '38', '2023-04-06 12:41:28', 'Approved', '1', NULL, '47', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('42', '222494', '4', 'na', NULL, '65', '2023-04-06 12:44:11', 'Approved', '1', NULL, '48', '1', NULL, NULL);
INSERT INTO `tec_bank_pending` (`pending_id`, `amount`, `bank_id`, `cheque_no`, `supplier_id`, `customer_id`, `insert_date`, `type`, `payment_type`, `todayP_Payment`, `collection_id`, `store_id`, `other_exp_id`, `cheque_date`) VALUES ('43', '40000', '7', 'NA', NULL, '8', '2023-04-08 17:00:25', 'Approved', '1', NULL, '51', '1', NULL, NULL);


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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_brands` (`id`, `code`, `name`, `image`) VALUES ('1', '00', 'T', 'no_image.png');
INSERT INTO `tec_brands` (`id`, `code`, `name`, `image`) VALUES ('2', '1', 'JICOM', 'no_image.png');


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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_categories` (`id`, `code`, `name`, `parent_id`, `image`) VALUES ('1', '00', 'TEST PRODUCT', '0', 'no_image.png');
INSERT INTO `tec_categories` (`id`, `code`, `name`, `parent_id`, `image`) VALUES ('2', '1', 'GEL', '0', 'no_image.png');
INSERT INTO `tec_categories` (`id`, `code`, `name`, `parent_id`, `image`) VALUES ('3', '03', 'POWDER', '0', 'no_image.png');


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
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('1', 'test customer', '', '', '1111', '121212@gmil.com', '3', '0', '1000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('3', 'MADARIPUR STORE', '', '', '000', 'NA@GMAIL.COM', '3', '0', '2000000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('4', 'ESHAR UDDIN BROTHER', '', '', '000', 'NA@GMAIL.COM', '3', '0', '2000000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('5', 'AKBORIA BEKARY', 'Thana Road, Bogra CitY, Bogura', 'থানা রোড, বগুড়া', '01743447781', '1223@GMAIL.COM', '1', '0', '111000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('6', 'AKIJ BAKERS LTD', 'Shilmun, Tongi, Gazipur', 'শিলমুন, টঙ্গী, গাজীপুর', '1212', '1223@GMAIL.COM', '1', '0', '2296000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('7', 'AL MADANI STORE', 'No. 3 Bundil Road, Chittagong', '3 নং বান্ডিল রোড, চট্টগ্রাম', '01191580791, 01628785562', '111@GMAIL.COM', '1', '107940', '118980');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('8', 'AL MONIR CHEMICAL', 'No. 3 Bundil Road, Chittagong', ' 3 নং বান্ডিল রোড, চট্টগ্রাম', '01815067813', '1223@GMAIL.COM', '1', '244082', '360000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('9', 'AL AIN FOOD', 'Mirpur, Dhaka', 'মিরপুর, ঢাকা', '01841919015', '1223@GMAIL.COM', '1', '107500', '107500');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('10', 'ALIN FOOD PRODUCTS LTD', 'Central warehouse export, 124/1 Lakshmipur, Bhairab, Kishoregoanj', 'কেন্দ্রীয় গুদাম রপ্তানি, 124/1 লক্ষ্মীপুর, ভৈরব, কিশোরগঞ্জ', '01841919015', '1223@GMAIL.COM', '1', '1047900', '1885750');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('11', 'ALLAHR DAAN CHITTAGONG', 'Asadganj, Chittagong', 'আসাদগঞ্জ, চট্টগ্রাম', '01811656587', '1223@GMAIL.COM', '1', '125608', '125608');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('12', 'AMJAD SHAHEB', 'Sarkar Khaddo Bhandar, Magura', 'সরকার খাদ্দো ভান্ডার, মাগুরা', '01716853057', '1223@GMAIL.COM', '1', '0', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('13', 'ASLAM SHAHEB', 'Agrabad, Chittagong', 'আগ্রাবাদ, চট্টগ্রাম', '01934990590', '1223@GMAIL.COM', '1', '159600', '159600');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('14', 'ATAUR RAHMAN', 'Mahajan patti, Sylhet', 'মহাজন পট্রি, সিলেট', '01715072272, 01675787181', '1223@GMAIL.COM', '1', '90600', '169200');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('15', 'BADOL SHAHA', 'Nicha Bazar, Natore', 'নিচা বাজার, নাটোর', '01840785035', '1223@GMAIL.COM', '1', '0', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('16', 'BASUDEB DOTTO', 'Raja bazar, Bogra', 'রাজা বাজার, বগুড়া', '01715636204', '1223@GMAIL.COM', '1', '42750', '42750');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('17', 'COCOLA FOOD PRODUCTS LTD', '942, Mouchak, Gazipur', '৯৪২, মৌচাক, গাজীপুর', 'NA', 'NA@GMAIL.COM', '1', '375000', '630000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('18', 'DESHI FOOD', 'Kumar para, Sylhet', 'কুমার পাড়া, সিলেট', '01911587450', 'NA@GMAIL.COM', '1', '36450', '37000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('19', 'DOTTO STORE', 'Raja Bazar, Bogra', 'রাজা বাজার, বগুড়া', '01718640317, 01715002153', 'NA@GMAIL.COM', '1', '0', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('20', 'MR DULAL', 'Boro bazar, kishoreganj', 'বড় বাজার, কিশোরগঞ্জ', '01911247785', 'NA@GMAIL.COM', '1', '81800', '92200');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('21', 'EJAB GROUP', 'Charbagh Madrasa, Ashulia', 'চারবাগ মাদ্রাসা, আশুলিয়া', 'NA', 'NA@GMAIL.COM', '1', '456500', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('22', 'FARID RAXIN', 'Kamala Potti, Feni Bazar', 'কমলা পোট্টি, ফেনী বাজার', '01924423242', 'NA@GMAIL.COM', '1', '-90', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('23', 'FUWANG FOOD', 'Hotapara, Gazipur', 'হোতাপাড়া, গাজীপুর', 'NA', 'NA@GMAIL.COM', '1', '460000', '695000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('24', 'GLOBE BISCUIT', 'Darbeshpur, Maijdi Road, Begumganj, Noakhali', 'দরবেশপুর, মাইজদী রোড, বেগমগঞ্জ, নোয়াখালী', '01755586287', 'NA@GMAIL.COM', '1', '542000', '763500');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('25', 'HYES ENTERPRISE', 'DHAKA', 'ঢাকা', '01722422343', 'NA@GMAIL.COM', '1', '0', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('26', 'HIRA BISCUIT', 'C-75,76 Bisik industrial rajjo, cheripur, feni', 'C75,76 বিসিক শিল্প রাজ্য, চেরিপুর, ফেনী', '01993329043', 'NA@GMAIL.COM', '1', '817400', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('27', 'JIHAD STORE', 'Sylhet', 'সিলেট', '01715513542', 'NA@GMAIL.COM', '1', '44995', '45000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('28', 'JOY GURU STORE', 'Matlab Bazar, Chadpur', 'মতলব বাজার, চাদপুর', '01735523123, 01811161472', 'NA@GMAIL.COM', '1', '36360', '36400');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('29', 'JUBAER STORE', 'Sylhet', 'সিলেট', '01711449345', 'NA@GMAIL.COM', '1', '-60', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('30', 'LAXMI BREAD', 'Ulipur, Kurigram', 'উলিপুর, কুড়িগ্রাম', '01715009169, 01714009169', 'NA@GMAIL.COM', '1', '13195', '24950');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('31', 'LEADERS FOOD', '67/1 Palashnagar, Mirpur 11, Dhaka', '৬৭/১ পলাশনগর, মিরপুর ১১, ঢাকা', '01912974709, 01949421979', 'NA@GMAIL.COM', '1', '28000', '28000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('32', 'MAMONI BREAD', 'Sonaimuri, Noakhali', 'সোনাইমুড়ি, নোয়াখালী', '01720354516', 'NA@GMAIL.COM', '1', '66350', '80000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('33', 'MARKET VAIN', 'Mirpur, Dhaka', 'মিরপুর, ঢাকা', 'NA', 'NA@GMAIL.COM', '1', '0', '22500');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('34', 'MASHUD FOOD', '221 Gultaj Plaza, Khantunganj, Chittagong', '221 গুলতাজ প্লাজা, খানতুনগঞ্জ, চট্টগ্রাম', '01844480019', 'NA@GMAIL.COM', '1', '88000', '88000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('35', 'MASTER STORE', 'Matipatti, Narsingdi', 'মাটিপট্টি, নরসিংদী', '01712281616, 01673091433', 'NA@GMAIL.COM', '1', '36240', '33960');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('36', 'MEGHNA NOODLES AND BISCUIT FACTORY LTD', 'MNBL Plant, Meghnaghat, Sonargaon 1440', 'এমএনবিএল প্ল্যান্ট, মেঘনাঘাট, সোনারগাঁও ১৪৪০', 'NA', 'NA@GMAIL.COM', '1', '0', '580000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('37', 'MILON STORE', 'Chakbazar, Dinajpur', 'চকবাজার, দিনাজপুর', '01616230290', 'NA@GMAIL.COM', '1', '-350', '42750');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('38', 'MODHUBON BREAD', '384 Hathajari Road, Muradpur, Chittagong', '৩৮৪ হাটহাজারী রোড, মুরাদপুর, চট্টগ্রাম', '01960900900', 'NA@GMAIL.COM', '1', '381450', '417950');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('39', 'MODHUBON OVIJAT', 'Rajview complex, shondhani ghat, sylhet uposhoho', 'রাজভিউ কমপ্লেক্স, সন্ধানী ঘাট, উপশহর সিলেট', '01818741944', 'NA@GMAIL.COM', '1', '55450', '125450');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('40', 'MOKKA PERFUME', 'DHAKA', 'ঢাকা', 'NA', 'NA@GMAIL.COM', '1', '99146', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('41', 'MONJUR TRADING', 'Kalibazar, Narayanganj', 'কালিবাজার, নারায়ণগঞ্জ', '01819923910', 'NA@GMAIL.COM', '1', '84900', '157800');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('42', 'MUSLIM TRADERS', 'Showaganj Bazar, Sadar South, Cumilla', 'শোয়াগঞ্জ বাজার, সদর দক্ষিণ, কুমিল্লা', '01971602973', 'NA@GMAIL.COM', '1', '-890', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('43', 'NABISCO BISCUITS', '77 Shaheed Tajuddin Ahmad, Tejgaon', '৭৭ শহীদ তাজউদ্দীন আহমদ, তেজগাঁও', '01815249213', 'NA@GMAIL.COM', '1', '94000', '130000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('44', 'NACHIM PERFUMERY', 'Syedpur', 'সৈয়দপুর', '01714256650', 'NA@GMAIL.COM', '1', '-2310', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('45', 'NION ENTERPRISE', 'Boro bazar, kishorganj', 'বড় বাজার, কিশোরগঞ্জ', '01988219651', 'NA@GMAIL.COM', '1', '115568', '141500');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('46', 'NIFAZ FOOD', 'DHAKA', 'ঢাকা', 'NA', 'NA@GMAIL.COM', '1', '24500', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('47', 'NIZAM ENTERPRISE', 'DHAKA ', 'ঢাকা', 'NA', 'NA@GMAIL.COM', '1', '47092', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('48', 'NURJAHAN PERFUMERY', 'Khatunganj, Chittagong', 'খাতুনগঞ্জ, চট্টগ্রাম', '01843760013', 'NA@GMAIL.COM', '1', '213371', '300000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('49', 'OLYMPIYA BAKERY', 'DHAKA', 'ঢাকা', 'NA', 'NA@GMAIL.COM', '1', '98160', '150000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('50', 'ORANGE PERFUMERY', 'Khatunganj, Chittagong', 'খাতুনগঞ্জ, চট্টগ্রাম', '01815810777', 'NA@GMAIL.COM', '1', '570225', '700000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('51', 'OSHIM STORE', 'Jhinadah', 'ঝিনাইদাহ', '01822861355', 'NA@GMAIL.COM', '1', '16980', '16980');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('52', 'PARAGON AGRO LTD', 'Ashulia Savar, Dhaka', 'আশুলিয়া সাভার, ঢাকা', 'NA', 'NA@GMAIL.COM', '1', '117500', '259000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('53', 'PRAN DAIRY LTD', 'Ghorasal, Narsingdhi', 'ঘোরসাল, নরসিংদী', 'NA ', 'NA@GMAIL.COM', '1', '0', '400000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('54', 'PRIME PUSTI LTD', 'Uttara Mominpur, Rangpur sadar, Rangpur', 'উত্তরা মমিনপুর, রংপুর সদর, রংপুর', 'NA', 'NA@GMAIL.COM', '1', '58800', '100000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('55', 'PRODIP SAHA', 'Cumilla', 'কুমিল্লা', '01711348943', 'NA@GMAIL.COM', '1', '92250', '150000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('56', 'RANI FOOD INDUSTRIES LTD', '505, Bahadurpur, Mirzapur, Gazipur', '৫০৫, বাহাদুরপুর, মির্জাপুর, গাজীপুর', 'NA', 'NA@GMAIL.COM', '1', '840000', '1680000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('57', 'RANKS BAKERY', '590 Ibrahimpur, Kafrul, Dhaka', '590 ইব্রাহিমপুর, কাফরুল, ঢাকা', '01716371239', 'NA@GMAIL.COM', '1', '13520', '13500');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('58', 'REEDISHA FOOD AND BEVERAGE LTD', 'Tejgaon Industrial Area', 'তেজগাঁও শিল্প এলাকা', 'NA', 'NA@GMAIL.COM', '1', '2415000', '3590000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('59', 'S & B Nice Foods Valley Limited', '1163, Jer Kacher, National Highway - 01,Feni Shadar, Feni', ' 1163, জের কাছার, জাতীয় সড়ক - 01, ফেনী শদর, ফেনীফেনী শাদর, ফেনী', '01404402026', 'NA@GMAIL.COM', '1', '0', '575000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('60', 'SAIFUL DISTRIBUTION', 'DHAKA', ' ঢাকা', 'NA', 'NA@GMAIL.COM', '1', '0', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('61', 'SATKHIRA PERFUMERY ', 'Baro bazar, Khulna', 'বড়বাজার,  খুলনা ', '01712523385', 'NA@GMAIL.COM', '1', '8360', '35000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('62', 'SELIM PERFUMERY  ', 'No. 3 Bundil Road, Chittagong', '3 নং বান্ডিল রোড, চট্টগ্রাম', '01819941456', 'NA@GMAIL.COM', '1', '417130', '458730');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('63', 'SELINA PERFUMERY', 'Natore', 'নাটোর', '01714081242', 'NA@GMAIL.COM', '1', '10934', '87000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('64', 'SHAHAJALAL PERFUME', '3 no bundil road, Chittagong', '3 নং ব্যান্ডেল রোড, চট্টগ্রাম', '01815332990', 'NA@GMAIL.COM', '1', '110400', '110400');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('65', 'SHAHED AND BROTHERS', 'Kalibazar, Laxmipur', 'শাহেদ এন্ড ব্রাদার্স কালিবাজার ,লক্ষ্মীপুর', '01740614220', 'NA@GMAIL.COM', '1', '222494', '260435');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('66', 'SOTOTA PERFUME', 'Munshi Super Market, Jhenaidah', 'মুন্সী সুপার মার্কেট, ঝিনাইদহ', ' 01712256456', 'NA@GMAIL.COM', '1', '-1290', '17100');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('67', 'TK FOOD PRODUCTS DISTRIBUTION LTD', 'Village: Balushair. Union: Mahi shoshur, Narsingdi', 'গ্রাম:বালুশাইর, ইউনিয়ন :মাহি শশুর, নরসিংদী', 'NA', 'NA@GMAIL.COM', '1', '407435', '740000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('68', 'WELL FOOD AND BEVERAGE COMPANY LTD', 'Baniyar Chala, Bhavanipur, Mirzapur, Gazipur', 'বানিয়ার চালা, ভবানীপুর, মির্জাপুর, গাজীপুর', '01914731645', 'NA@GMAIL.COM', '1', '85500', '207000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('69', 'BARISAL STORE', '', '', 'NA', 'NA@GMAIL.COM', '3', '0', '2000000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('70', 'JS CORPORATION', '', '', 'NA', 'NA@GMAIL.COM', '3', '0', '2000000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('71', 'ALLAHR DAAN', 'Ramganj', ' রামগঞ্জ, লক্ষীপুর', '01748948327', 'NA@GMAIL.COM', '1', '0', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('72', 'RAMJAN ALI STORE', '', '', 'NA', 'NA@GMAIL.COM', '3', '0', '2000000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('73', 'NOJOR ALI', 'Jinaidah', 'ঝিনাইদাহ', '01825489871', 'NA@GMAIL.COM', '1', '0', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('74', 'DIVINE TRADE LINK', '', '', 'NA', 'NA@GMAIL.COM', '3', '0', '2000000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('75', 'AL AMIN STORE', '', '', 'NA', 'NA@GMAIL.COM', '3', '0', '2000000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('76', 'HAMID & BROTHERS', '', '', 'NA', 'NA@GMAIL.COM', '3', '0', '2000000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('77', 'AFSHIN ENTERPRISE', '', '', 'NA', 'NA@GMAIL.COM', '3', '0', '2000000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('78', 'SELIM & BROTHERS', '', '', 'NA', 'NA@GMAIL.COM', '3', '0', '2000000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('79', 'ABED STORE', '', '', 'NA', 'NA@GMAIL.COM', '3', '0', '2000000');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('80', 'TEST', '', '', 'NA', 'NA@GMAIL.COM', '2', '0', '0');
INSERT INTO `tec_customers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`, `credit_limit`) VALUES ('81', 'DEKKO FOOD', 'Bisik industrial estate, bibariya', 'বিসিক ইন্ডাস্ট্রিয়াল এস্টেট, বি বাড়িয়া', 'NA', 'NA@GMAIL.COM', '1', '0', '4900');


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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tec_employee` (`id`, `name`, `father_name`, `mather_name`, `date_of_birth`, `position`, `address`, `phone`, `email`, `basic_salary`, `join_date`, `satus`, `entry_date`, `update_date`, `store_id`) VALUES ('1', 'MD ARIFUR RAHMAN', 'NA', 'NA', '1980 -01-01', 'GENERAL MANAGER', 'NA', 'NA', 'Arifur7704@gmail.com', '12500', '2015-01-01', '1', '', '', '1');


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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tec_expens_category` (`cat_id`, `code`, `name`, `image`) VALUES ('2', '01', 'CONVEYANCE', 'no_image.png');
INSERT INTO `tec_expens_category` (`cat_id`, `code`, `name`, `image`) VALUES ('3', '02 ', 'TIFFIN', 'no_image.png');
INSERT INTO `tec_expens_category` (`cat_id`, `code`, `name`, `image`) VALUES ('4', '03', 'DELIVERY EXPENSE', 'no_image.png');
INSERT INTO `tec_expens_category` (`cat_id`, `code`, `name`, `image`) VALUES ('5', '04', 'STATIONARY', 'no_image.png');
INSERT INTO `tec_expens_category` (`cat_id`, `code`, `name`, `image`) VALUES ('6', '05', 'MISCELLANEOUS', 'no_image.png');
INSERT INTO `tec_expens_category` (`cat_id`, `code`, `name`, `image`) VALUES ('7', '06', 'MAINTENANCE/UTILITY BILL', 'no_image.png');
INSERT INTO `tec_expens_category` (`cat_id`, `code`, `name`, `image`) VALUES ('8', '07', 'VAN PURPOSE', 'no_image.png');
INSERT INTO `tec_expens_category` (`cat_id`, `code`, `name`, `image`) VALUES ('9', '08', 'COMMISSION', 'no_image.png');


#
# TABLE STRUCTURE FOR: tec_expenses
#

DROP TABLE IF EXISTS `tec_expenses`;

CREATE TABLE `tec_expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `reference` varchar(50) DEFAULT NULL,
  `amount` decimal(25,2) NOT NULL,
  `expense_for` varchar(255) DEFAULT NULL,
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
  `expense_type` int(11) DEFAULT NULL COMMENT '[\r\n1 for material, 2 for packaging material\r\n\r\n]',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_categories` (`id`, `code`, `name`, `parent_id`, `image`) VALUES ('3', '01', 'POWDER', '0', 'no_image.png');
INSERT INTO `tec_mf_categories` (`id`, `code`, `name`, `parent_id`, `image`) VALUES ('4', '02', 'LIQUID', '0', 'no_image.png');
INSERT INTO `tec_mf_categories` (`id`, `code`, `name`, `parent_id`, `image`) VALUES ('5', '03', 'BEAD', '0', 'no_image.png');


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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_finished_good_stock` (`id`, `product_id`, `store_id`, `quantity`, `cost`) VALUES ('1', '1', '2', '91', '0.00');


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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_finished_good_stock_log` (`id`, `production_id`, `store_id`, `product_id`, `quantity`, `status`, `note`, `adjust_type`, `type`, `created_by`, `created_at`) VALUES ('1', '1', '2', '1', '95', 'Approved', NULL, NULL, '1', '1', '2023-03-22 10:09:31');
INSERT INTO `tec_mf_finished_good_stock_log` (`id`, `production_id`, `store_id`, `product_id`, `quantity`, `status`, `note`, `adjust_type`, `type`, `created_by`, `created_at`) VALUES ('2', '0', '2', '1', '2', NULL, 'lost', '2', '2', '1', '2023-03-22 10:10:26');
INSERT INTO `tec_mf_finished_good_stock_log` (`id`, `production_id`, `store_id`, `product_id`, `quantity`, `status`, `note`, `adjust_type`, `type`, `created_by`, `created_at`) VALUES ('3', '0', '2', '1', '2', NULL, 'lost', '1', '2', '1', '2023-03-22 10:10:35');
INSERT INTO `tec_mf_finished_good_stock_log` (`id`, `production_id`, `store_id`, `product_id`, `quantity`, `status`, `note`, `adjust_type`, `type`, `created_by`, `created_at`) VALUES ('4', '0', '2', '1', '2', NULL, 'lost', '2', '2', '1', '2023-03-22 10:10:43');
INSERT INTO `tec_mf_finished_good_stock_log` (`id`, `production_id`, `store_id`, `product_id`, `quantity`, `status`, `note`, `adjust_type`, `type`, `created_by`, `created_at`) VALUES ('5', '0', '2', '1', '2', NULL, 'lost', '2', '2', '1', '2023-03-22 10:10:51');


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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('4', 't', '0', '1', '', '0.00', '0.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('5', 'GA505', '3', '1', '', '0.00', '1000.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('6', 'BEAD', '0', '1', '', '0.00', '0.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('7', 'EKOMUL', '5', '0', '', '0.00', '1000.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('8', 'EKOLITE', '5', '1', '', '0.00', '1000.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('9', 'MYV', '3', '1', '', '0.00', '1000.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('10', 'PALSG', '5', '1', '', '0.00', '1000.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('11', 'DMG', '4', '1', '', '0.00', '1000.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('12', 'PGE', '4', '1', '', '0.00', '1000.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('13', 'EMF', '3', '1', '', '0.00', '1000.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('14', 'PG', '4', '1', '', '0.00', '1000.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('15', 'SORBITOL', '4', '1', '', '0.00', '1000.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('16', 'PS409', '3', '1', '', '0.00', '1000.00');
INSERT INTO `tec_mf_material` (`id`, `name`, `category_id`, `uom_id`, `descriptions`, `cost`, `quantity`) VALUES ('17', 'PS', '3', '1', '', '0.00', '1000.00');


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
  `mf_tr_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('1', '3', '3', '2', '2.00', '100.00', '98.00', 'Lost', '1', NULL, NULL, '2023-03-13 09:10:19', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('2', '3', '3', '2', '1.00', '98.00', '97.00', 'Lost', '1', NULL, NULL, '2023-03-13 09:10:32', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('3', '3', '3', '2', '10.00', '99.00', '89.00', 'Lost', '1', NULL, NULL, '2023-03-13 09:11:15', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('4', '3', '3', '2', '1.00', '90.00', '89.00', 'Lost', '1', NULL, NULL, '2023-03-13 09:11:42', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('5', '3', '3', '2', '99.00', '99.00', '0.00', 'Lost', '1', NULL, NULL, '2023-03-13 09:13:05', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('6', '3', '3', '2', '1.00', '1.00', '0.00', 'Lost', '1', NULL, NULL, '2023-03-13 09:13:15', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('7', '3', '3', '1', '1.00', '99.00', '100.00', '4', '1', NULL, NULL, '2023-03-13 09:52:28', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('8', '3', '3', '2', '1.00', '100.00', '99.00', 'test', '1', NULL, NULL, '2023-03-13 09:52:38', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('9', '3', '3', '2', '1.00', '99.00', '98.00', 'ssss', '1', NULL, NULL, '2023-03-13 09:52:51', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('10', '3', '3', '1', '4.00', '98.00', '102.00', 'rtere', '1', NULL, NULL, '2023-03-13 09:53:00', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('11', '3', '3', '2', '10.00', '102.00', '92.00', 'Lost', '1', NULL, NULL, '2023-03-13 10:50:02', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('12', '3', '3', '2', '2.00', '92.00', '90.00', 'lost', '1', NULL, NULL, '2023-03-13 10:50:12', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('13', '3', '3', '2', '1.00', '90.00', '89.00', 'Lost', '1', NULL, NULL, '2023-03-13 10:50:23', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('14', '2', '2', '2', '5.00', '200.00', '195.00', 'Material transfer', '1', '2', '4', '2023-03-16 12:10:57', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('15', '3', '3', '2', '1.00', '89.00', '88.00', 'Material transfer', '1', '2', '4', '2023-03-16 17:45:00', '1');
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('16', '17', '17', '2', '2.00', '1000.00', '998.00', 'Lost', '1', NULL, NULL, '2023-03-21 15:48:03', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('17', '17', '17', '2', '2.00', '998.00', '996.00', 'Lost', '1', NULL, NULL, '2023-03-21 15:48:15', NULL);
INSERT INTO `tec_mf_material_adjust` (`id`, `material_id`, `material_stock_id`, `adjust_type`, `adjust_qty`, `from_qty`, `new_qty`, `adjust_reason`, `created_by`, `from_factory`, `to_factory`, `created_at`, `mf_tr_id`) VALUES ('18', '17', '17', '2', '2.00', '996.00', '994.00', 'Lost', '1', NULL, NULL, '2023-03-21 15:48:30', NULL);


#
# TABLE STRUCTURE FOR: tec_mf_material_packaging
#

DROP TABLE IF EXISTS `tec_mf_material_packaging`;

CREATE TABLE `tec_mf_material_packaging` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `uom_id` int(3) DEFAULT 0 COMMENT '\r\n',
  `cost` decimal(25,2) DEFAULT NULL,
  `quantity` decimal(25,2) NOT NULL DEFAULT 0.00,
  `descriptions` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_mf_material_packaging_adjust
#

DROP TABLE IF EXISTS `tec_mf_material_packaging_adjust`;

CREATE TABLE `tec_mf_material_packaging_adjust` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_id` int(11) NOT NULL,
  `material_stock_id` int(11) NOT NULL,
  `adjust_type` int(11) NOT NULL COMMENT '1=''Increase'', 2=''Decrease'' 	',
  `adjust_qty` decimal(12,2) NOT NULL DEFAULT 0.00,
  `from_qty` decimal(12,2) NOT NULL DEFAULT 0.00,
  `new_qty` decimal(25,2) DEFAULT 0.00,
  `adjust_reason` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `from_factory` int(11) DEFAULT NULL,
  `to_factory` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `mf_tr_id` int(11) DEFAULT NULL,
  `transfers_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# TABLE STRUCTURE FOR: tec_mf_material_packaging_store_qty
#

DROP TABLE IF EXISTS `tec_mf_material_packaging_store_qty`;

CREATE TABLE `tec_mf_material_packaging_store_qty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `quantity` decimal(12,2) NOT NULL DEFAULT 0.00,
  `cost` decimal(25,2) DEFAULT 0.00,
  PRIMARY KEY (`id`),
  KEY `material_id` (`material_id`),
  KEY `store_id` (`store_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('1', '1', '1', '2', '50.00', '200.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('2', '2', '1', '2', '195.00', '75.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('3', '3', '1', '2', '88.00', '120.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('4', '2', '1', '4', '5.00', '75.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('5', '3', '1', '4', '1.00', '120.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('6', '5', '1', '2', '1000.00', '0.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('7', '7', '1', '2', '1000.00', '0.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('8', '8', '1', '2', '1000.00', '0.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('9', '9', '1', '2', '1000.00', '0.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('10', '10', '1', '2', '900.00', '0.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('11', '11', '1', '2', '1000.00', '0.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('12', '12', '1', '2', '1000.00', '0.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('13', '13', '1', '2', '1000.00', '0.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('14', '14', '1', '2', '1000.00', '0.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('15', '15', '1', '2', '1000.00', '0.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('16', '16', '1', '2', '1000.00', '0.00');
INSERT INTO `tec_mf_material_store_qty` (`id`, `material_id`, `brand_id`, `store_id`, `quantity`, `cost`) VALUES ('17', '17', '1', '2', '994.00', '0.00');


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
# TABLE STRUCTURE FOR: tec_mf_payment_packaging
#

DROP TABLE IF EXISTS `tec_mf_payment_packaging`;

CREATE TABLE `tec_mf_payment_packaging` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_production_dtls` (`id`, `production_id`, `recipe_id`, `recipe_dtls_id`, `material_id`, `material_stock_id`, `quantity`, `cost`, `created_by`, `created_at`, `active_status`) VALUES ('1', '1', '1', '1', '10', '10.00', '100.00', '0.00', '1', '2023-03-22 10:09:25', '1');


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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_production_mst` (`id`, `batch_no`, `recipe_id`, `store_id`, `product_id`, `target_qty`, `uom_id`, `actual_output`, `wasted`, `notes`, `total_cost`, `date`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`, `active_status`) VALUES ('1', '2023032201', '1', '2', '1', '100.00', '1', '95.00', '5.00', 'note', '0', '2023-03-22 10:08:00', 'Approved', '1', '2023-03-22 10:09:25', '0', '2023-03-22 12:09:25', '1');


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
  `mf_tr_id` int(11) DEFAULT NULL,
  `quantity` decimal(15,2) NOT NULL,
  `cost` decimal(25,2) NOT NULL,
  `subtotal` decimal(25,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('1', '1', '1', '1', '2', NULL, '50.00', '200.00', '10000.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('2', '1', '2', '1', '2', NULL, '200.00', '75.00', '15000.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('3', '1', '3', '1', '2', NULL, '100.00', '120.00', '12000.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('4', '2', '2', '1', '4', NULL, '5.00', '75.00', '375.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('5', '3', '3', '1', '4', '1', '1.00', '120.00', '120.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('6', '4', '5', '1', '2', NULL, '1000.00', '0.00', '0.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('7', '4', '7', '1', '2', NULL, '1000.00', '0.00', '0.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('8', '4', '8', '1', '2', NULL, '1000.00', '0.00', '0.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('9', '4', '9', '1', '2', NULL, '1000.00', '0.00', '0.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('10', '4', '10', '1', '2', NULL, '1000.00', '0.00', '0.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('11', '4', '11', '1', '2', NULL, '1000.00', '0.00', '0.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('12', '4', '12', '1', '2', NULL, '1000.00', '0.00', '0.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('13', '4', '13', '1', '2', NULL, '1000.00', '0.00', '0.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('14', '4', '14', '1', '2', NULL, '1000.00', '0.00', '0.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('15', '4', '15', '1', '2', NULL, '1000.00', '0.00', '0.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('16', '4', '16', '1', '2', NULL, '1000.00', '0.00', '0.00');
INSERT INTO `tec_mf_purchase_material` (`id`, `purchase_id`, `material_id`, `brand_id`, `store_id`, `mf_tr_id`, `quantity`, `cost`, `subtotal`) VALUES ('17', '4', '17', '1', '2', NULL, '1000.00', '0.00', '0.00');


#
# TABLE STRUCTURE FOR: tec_mf_purchase_packaging_material
#

DROP TABLE IF EXISTS `tec_mf_purchase_packaging_material`;

CREATE TABLE `tec_mf_purchase_packaging_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `mf_tr_id` int(11) DEFAULT NULL,
  `quantity` decimal(15,2) NOT NULL,
  `cost` decimal(25,2) NOT NULL,
  `subtotal` decimal(25,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `mf_tr_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_purchases` (`id`, `date`, `total`, `paid`, `deu`, `transport_cost`, `supplier_id`, `store_id`, `created_by`, `updated_by`, `created_at`, `updated_at`, `mf_tr_id`) VALUES ('1', '2023-03-13 09:08:00', '37500.00', '0.00', '37500.00', '500', '1', '2', '1', '0', '2023-03-13 09:09:48', '2023-03-13 11:09:48', NULL);
INSERT INTO `tec_mf_purchases` (`id`, `date`, `total`, `paid`, `deu`, `transport_cost`, `supplier_id`, `store_id`, `created_by`, `updated_by`, `created_at`, `updated_at`, `mf_tr_id`) VALUES ('2', '2023-03-16 10:10:00', '375.00', '0.00', '375.00', '0', '2', '4', '1', '0', '2023-03-16 10:10:57', '2023-03-16 12:10:57', NULL);
INSERT INTO `tec_mf_purchases` (`id`, `date`, `total`, `paid`, `deu`, `transport_cost`, `supplier_id`, `store_id`, `created_by`, `updated_by`, `created_at`, `updated_at`, `mf_tr_id`) VALUES ('3', '2023-03-16 17:45:00', '120.00', '0.00', '120.00', '0', '2', '4', '1', '0', '2023-03-16 17:45:21', '2023-03-16 19:45:21', '1');
INSERT INTO `tec_mf_purchases` (`id`, `date`, `total`, `paid`, `deu`, `transport_cost`, `supplier_id`, `store_id`, `created_by`, `updated_by`, `created_at`, `updated_at`, `mf_tr_id`) VALUES ('4', '2023-03-21 14:22:00', '0.00', '0.00', '0.00', '0', '3', '2', '35', '0', '2023-03-21 14:27:43', '2023-03-21 16:27:43', NULL);


#
# TABLE STRUCTURE FOR: tec_mf_purchases_packaging
#

DROP TABLE IF EXISTS `tec_mf_purchases_packaging`;

CREATE TABLE `tec_mf_purchases_packaging` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` decimal(25,2) NOT NULL,
  `paid` decimal(25,2) DEFAULT 0.00,
  `deu` decimal(25,2) DEFAULT 0.00,
  `transport_cost` int(25) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `mf_tr_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_recipe_dtls` (`id`, `recipe_id`, `material_id`, `material_stock_id`, `quantity`, `created_by`, `created_at`, `updated_by`, `updated_at`, `active_status`) VALUES ('1', '1', '10', '10.00', '100.00', '1', '2023-03-22 09:44:49', '0', '2023-03-22 11:44:49', '1');


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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_recipe_mst` (`id`, `code`, `name`, `product_id`, `uom_id`, `target_qty`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`, `active_status`) VALUES ('1', '01', 'Test', '1', '1', '100', '', '1', '2023-03-22 09:44:49', '0', '2023-03-22 11:44:49', '1');


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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_mf_suppliers` (`id`, `name`, `store_id`, `phone`, `email`, `address`, `descriptions`) VALUES ('2', 'sup2', '4', '0170000001', '', 'Addr', '');
INSERT INTO `tec_mf_suppliers` (`id`, `name`, `store_id`, `phone`, `email`, `address`, `descriptions`) VALUES ('3', 'LC', '2', 'NA', 'NA@GMAIL.COM', 'NA', '');


#
# TABLE STRUCTURE FOR: tec_mf_transfer
#

DROP TABLE IF EXISTS `tec_mf_transfer`;

CREATE TABLE `tec_mf_transfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tec_mf_transfer` (`id`, `note`, `created_at`, `updated_at`) VALUES ('1', '<p>ggggggg<br></p>', '2023-03-16 17:45:21', '2023-03-16 19:45:21');


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
  `sales_add` tinyint(1) DEFAULT 0,
  `sales_edit` tinyint(1) DEFAULT 0,
  `sales_delete` tinyint(1) DEFAULT 0,
  `salereturn_view` tinyint(1) DEFAULT 0,
  `salereturn_add` tinyint(1) DEFAULT 0,
  `salereturn_edit` tinyint(1) DEFAULT 0,
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
  `mf_material_stock_edit` tinyint(1) DEFAULT 0,
  `mf_material_stock_delete` tinyint(1) DEFAULT 0,
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
  `mf_transfers_view` int(11) DEFAULT 0,
  `mf_transfers_add` int(11) DEFAULT 0,
  `mf_material_packaging_view` int(11) DEFAULT 0,
  `mf_purchases_packaging_view` int(11) DEFAULT 0,
  `mf_purchases_packaging_add` int(11) DEFAULT 0,
  `mf_purchases_packaging_edit` int(11) DEFAULT 0,
  `mf_purchases_packaging_delete` int(11) DEFAULT 0,
  `mf_material_packaging_add` int(11) DEFAULT 0,
  `mf_material_packaging_edit` int(11) DEFAULT 0,
  `mf_material_packaging_delete` int(11) DEFAULT 0,
  `mf_material_stock_packaging_view` tinyint(1) DEFAULT 0,
  `mf_payment_packaging_view` tinyint(1) DEFAULT 0,
  `mf_payment_packaging_add` tinyint(1) DEFAULT 0,
  `mf_payment_packaging_edit` tinyint(1) DEFAULT 0,
  `mf_payment_packaging_delete` tinyint(1) DEFAULT 0,
  `mf_material_stock_packaging_add` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`module_routes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tec_module_routes` (`module_routes_id`, `group_id`, `pos_view`, `pos_add`, `pos_edit`, `pos_delete`, `products_view`, `products_add`, `products_edit`, `products_delete`, `categories_view`, `categories_add`, `categories_edit`, `categories_delete`, `brands_view`, `brands_add`, `brands_edit`, `brands_delete`, `sales_view`, `sales_add`, `sales_edit`, `sales_delete`, `salereturn_view`, `salereturn_add`, `salereturn_edit`, `salereturn_delete`, `purchases_view`, `purchases_add`, `purchases_edit`, `purchases_delete`, `supplierpayment_view`, `supplierpayment_add`, `supplierpayment_edit`, `supplierpayment_delete`, `expenses_view`, `expenses_add`, `expenses_edit`, `expenses_delete`, `collection_view`, `collection_add`, `collection_edit`, `collection_delete`, `bank_view`, `bank_add`, `bank_edit`, `bank_delete`, `user_view`, `user_add`, `user_edit`, `user_delete`, `employee_view`, `employee_add`, `employee_edit`, `employee_delete`, `customers_view`, `customers_add`, `customers_edit`, `customers_delete`, `suppliers_view`, `suppliers_add`, `suppliers_edit`, `suppliers_delete`, `store_view`, `store_add`, `store_edit`, `store_delete`, `group_view`, `group_add`, `group_edit`, `group_delete`, `permission_view`, `permission_edit`, `settings_view`, `settings_edit`, `reports_view`, `mf_categories_view`, `mf_categories_add`, `mf_categories_edit`, `mf_categories_delete`, `mf_unit_view`, `mf_unit_add`, `mf_unit_edit`, `mf_unit_delete`, `mf_material_view`, `mf_material_add`, `mf_material_edit`, `mf_material_delete`, `mf_brands_view`, `mf_brands_add`, `mf_brands_edit`, `mf_brands_delete`, `mf_suppliers_view`, `mf_suppliers_add`, `mf_suppliers_edit`, `mf_suppliers_delete`, `mf_purchases_view`, `mf_purchases_add`, `mf_purchases_edit`, `mf_purchases_delete`, `mf_material_stock_view`, `mf_material_stock_add`, `mf_material_stock_edit`, `mf_material_stock_delete`, `mf_recipe_view`, `mf_recipe_add`, `mf_recipe_edit`, `mf_recipe_delete`, `mf_production_view`, `mf_production_add`, `mf_production_edit`, `mf_production_delete`, `mf_finish_good_stock_view`, `mf_finish_good_stock_edit`, `transfers_view`, `transfers_add`, `transfers_edit`, `transfers_delete`, `mf_payment_view`, `mf_payment_add`, `mf_payment_edit`, `mf_payment_delete`, `mf_report_view`, `mf_transfers_view`, `mf_transfers_add`, `mf_material_packaging_view`, `mf_purchases_packaging_view`, `mf_purchases_packaging_add`, `mf_purchases_packaging_edit`, `mf_purchases_packaging_delete`, `mf_material_packaging_add`, `mf_material_packaging_edit`, `mf_material_packaging_delete`, `mf_material_stock_packaging_view`, `mf_payment_packaging_view`, `mf_payment_packaging_add`, `mf_payment_packaging_edit`, `mf_payment_packaging_delete`, `mf_material_stock_packaging_add`) VALUES ('1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `tec_module_routes` (`module_routes_id`, `group_id`, `pos_view`, `pos_add`, `pos_edit`, `pos_delete`, `products_view`, `products_add`, `products_edit`, `products_delete`, `categories_view`, `categories_add`, `categories_edit`, `categories_delete`, `brands_view`, `brands_add`, `brands_edit`, `brands_delete`, `sales_view`, `sales_add`, `sales_edit`, `sales_delete`, `salereturn_view`, `salereturn_add`, `salereturn_edit`, `salereturn_delete`, `purchases_view`, `purchases_add`, `purchases_edit`, `purchases_delete`, `supplierpayment_view`, `supplierpayment_add`, `supplierpayment_edit`, `supplierpayment_delete`, `expenses_view`, `expenses_add`, `expenses_edit`, `expenses_delete`, `collection_view`, `collection_add`, `collection_edit`, `collection_delete`, `bank_view`, `bank_add`, `bank_edit`, `bank_delete`, `user_view`, `user_add`, `user_edit`, `user_delete`, `employee_view`, `employee_add`, `employee_edit`, `employee_delete`, `customers_view`, `customers_add`, `customers_edit`, `customers_delete`, `suppliers_view`, `suppliers_add`, `suppliers_edit`, `suppliers_delete`, `store_view`, `store_add`, `store_edit`, `store_delete`, `group_view`, `group_add`, `group_edit`, `group_delete`, `permission_view`, `permission_edit`, `settings_view`, `settings_edit`, `reports_view`, `mf_categories_view`, `mf_categories_add`, `mf_categories_edit`, `mf_categories_delete`, `mf_unit_view`, `mf_unit_add`, `mf_unit_edit`, `mf_unit_delete`, `mf_material_view`, `mf_material_add`, `mf_material_edit`, `mf_material_delete`, `mf_brands_view`, `mf_brands_add`, `mf_brands_edit`, `mf_brands_delete`, `mf_suppliers_view`, `mf_suppliers_add`, `mf_suppliers_edit`, `mf_suppliers_delete`, `mf_purchases_view`, `mf_purchases_add`, `mf_purchases_edit`, `mf_purchases_delete`, `mf_material_stock_view`, `mf_material_stock_add`, `mf_material_stock_edit`, `mf_material_stock_delete`, `mf_recipe_view`, `mf_recipe_add`, `mf_recipe_edit`, `mf_recipe_delete`, `mf_production_view`, `mf_production_add`, `mf_production_edit`, `mf_production_delete`, `mf_finish_good_stock_view`, `mf_finish_good_stock_edit`, `transfers_view`, `transfers_add`, `transfers_edit`, `transfers_delete`, `mf_payment_view`, `mf_payment_add`, `mf_payment_edit`, `mf_payment_delete`, `mf_report_view`, `mf_transfers_view`, `mf_transfers_add`, `mf_material_packaging_view`, `mf_purchases_packaging_view`, `mf_purchases_packaging_add`, `mf_purchases_packaging_edit`, `mf_purchases_packaging_delete`, `mf_material_packaging_add`, `mf_material_packaging_edit`, `mf_material_packaging_delete`, `mf_material_stock_packaging_view`, `mf_payment_packaging_view`, `mf_payment_packaging_add`, `mf_payment_packaging_edit`, `mf_payment_packaging_delete`, `mf_material_stock_packaging_add`) VALUES ('3', '2', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, '1', '1', NULL, NULL, NULL, NULL, '0', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tec_module_routes` (`module_routes_id`, `group_id`, `pos_view`, `pos_add`, `pos_edit`, `pos_delete`, `products_view`, `products_add`, `products_edit`, `products_delete`, `categories_view`, `categories_add`, `categories_edit`, `categories_delete`, `brands_view`, `brands_add`, `brands_edit`, `brands_delete`, `sales_view`, `sales_add`, `sales_edit`, `sales_delete`, `salereturn_view`, `salereturn_add`, `salereturn_edit`, `salereturn_delete`, `purchases_view`, `purchases_add`, `purchases_edit`, `purchases_delete`, `supplierpayment_view`, `supplierpayment_add`, `supplierpayment_edit`, `supplierpayment_delete`, `expenses_view`, `expenses_add`, `expenses_edit`, `expenses_delete`, `collection_view`, `collection_add`, `collection_edit`, `collection_delete`, `bank_view`, `bank_add`, `bank_edit`, `bank_delete`, `user_view`, `user_add`, `user_edit`, `user_delete`, `employee_view`, `employee_add`, `employee_edit`, `employee_delete`, `customers_view`, `customers_add`, `customers_edit`, `customers_delete`, `suppliers_view`, `suppliers_add`, `suppliers_edit`, `suppliers_delete`, `store_view`, `store_add`, `store_edit`, `store_delete`, `group_view`, `group_add`, `group_edit`, `group_delete`, `permission_view`, `permission_edit`, `settings_view`, `settings_edit`, `reports_view`, `mf_categories_view`, `mf_categories_add`, `mf_categories_edit`, `mf_categories_delete`, `mf_unit_view`, `mf_unit_add`, `mf_unit_edit`, `mf_unit_delete`, `mf_material_view`, `mf_material_add`, `mf_material_edit`, `mf_material_delete`, `mf_brands_view`, `mf_brands_add`, `mf_brands_edit`, `mf_brands_delete`, `mf_suppliers_view`, `mf_suppliers_add`, `mf_suppliers_edit`, `mf_suppliers_delete`, `mf_purchases_view`, `mf_purchases_add`, `mf_purchases_edit`, `mf_purchases_delete`, `mf_material_stock_view`, `mf_material_stock_add`, `mf_material_stock_edit`, `mf_material_stock_delete`, `mf_recipe_view`, `mf_recipe_add`, `mf_recipe_edit`, `mf_recipe_delete`, `mf_production_view`, `mf_production_add`, `mf_production_edit`, `mf_production_delete`, `mf_finish_good_stock_view`, `mf_finish_good_stock_edit`, `transfers_view`, `transfers_add`, `transfers_edit`, `transfers_delete`, `mf_payment_view`, `mf_payment_add`, `mf_payment_edit`, `mf_payment_delete`, `mf_report_view`, `mf_transfers_view`, `mf_transfers_add`, `mf_material_packaging_view`, `mf_purchases_packaging_view`, `mf_purchases_packaging_add`, `mf_purchases_packaging_edit`, `mf_purchases_packaging_delete`, `mf_material_packaging_add`, `mf_material_packaging_edit`, `mf_material_packaging_delete`, `mf_material_stock_packaging_view`, `mf_payment_packaging_view`, `mf_payment_packaging_add`, `mf_payment_packaging_edit`, `mf_payment_packaging_delete`, `mf_material_stock_packaging_add`) VALUES ('5', '3', '1', '1', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', '0', '0', '1', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL, '1', '1', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: tec_module_routes_ex
#

DROP TABLE IF EXISTS `tec_module_routes_ex`;

CREATE TABLE `tec_module_routes_ex` (
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
  `mf_transfers_view` tinyint(1) DEFAULT NULL,
  `mf_transfers_add` tinyint(1) DEFAULT NULL,
  `mf_material_packaging_view` int(11) NOT NULL DEFAULT 0,
  `mf_purchases_packaging_view` int(11) NOT NULL DEFAULT 0,
  `mf_purchases_packaging_add` int(11) NOT NULL DEFAULT 0,
  `mf_purchases_packaging_edit` int(11) NOT NULL DEFAULT 0,
  `mf_purchases_packaging_delete` int(11) NOT NULL DEFAULT 0,
  `mf_material_packaging_add` int(11) NOT NULL DEFAULT 0,
  `mf_material_packaging_edit` int(11) NOT NULL DEFAULT 0,
  `mf_material_packaging_delete` int(11) NOT NULL DEFAULT 0,
  `mf_material_stock_packaging_view` tinyint(1) DEFAULT 0,
  `mf_material_stock_packaging_add` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`module_routes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_module_routes_ex` (`module_routes_id`, `group_id`, `pos_view`, `pos_add`, `pos_edit`, `pos_delete`, `products_view`, `products_add`, `products_edit`, `products_delete`, `categories_view`, `categories_add`, `categories_edit`, `categories_delete`, `brands_view`, `brands_add`, `brands_edit`, `brands_delete`, `sales_view`, `salereturn_view`, `salereturn_add`, `salereturn_delete`, `purchases_view`, `purchases_add`, `purchases_edit`, `purchases_delete`, `supplierpayment_view`, `supplierpayment_add`, `supplierpayment_edit`, `supplierpayment_delete`, `expenses_view`, `expenses_add`, `expenses_edit`, `expenses_delete`, `collection_view`, `collection_add`, `collection_edit`, `collection_delete`, `bank_view`, `bank_add`, `bank_edit`, `bank_delete`, `user_view`, `user_add`, `user_edit`, `user_delete`, `employee_view`, `employee_add`, `employee_edit`, `employee_delete`, `customers_view`, `customers_add`, `customers_edit`, `customers_delete`, `suppliers_view`, `suppliers_add`, `suppliers_edit`, `suppliers_delete`, `store_view`, `store_add`, `store_edit`, `store_delete`, `group_view`, `group_add`, `group_edit`, `group_delete`, `permission_view`, `permission_edit`, `settings_view`, `settings_edit`, `reports_view`, `mf_categories_view`, `mf_categories_add`, `mf_categories_edit`, `mf_categories_delete`, `mf_unit_view`, `mf_unit_add`, `mf_unit_edit`, `mf_unit_delete`, `mf_material_view`, `mf_material_add`, `mf_material_edit`, `mf_material_delete`, `mf_brands_view`, `mf_brands_add`, `mf_brands_edit`, `mf_brands_delete`, `mf_suppliers_view`, `mf_suppliers_add`, `mf_suppliers_edit`, `mf_suppliers_delete`, `mf_purchases_view`, `mf_purchases_add`, `mf_purchases_edit`, `mf_purchases_delete`, `mf_material_stock_view`, `mf_material_stock_add`, `mf_recipe_view`, `mf_recipe_add`, `mf_recipe_edit`, `mf_recipe_delete`, `mf_production_view`, `mf_production_add`, `mf_production_edit`, `mf_production_delete`, `mf_finish_good_stock_view`, `mf_finish_good_stock_edit`, `transfers_view`, `transfers_add`, `transfers_edit`, `transfers_delete`, `mf_payment_view`, `mf_payment_add`, `mf_payment_edit`, `mf_payment_delete`, `mf_report_view`, `mf_transfers_view`, `mf_transfers_add`, `mf_material_packaging_view`, `mf_purchases_packaging_view`, `mf_purchases_packaging_add`, `mf_purchases_packaging_edit`, `mf_purchases_packaging_delete`, `mf_material_packaging_add`, `mf_material_packaging_edit`, `mf_material_packaging_delete`, `mf_material_stock_packaging_view`, `mf_material_stock_packaging_add`) VALUES ('1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `tec_module_routes_ex` (`module_routes_id`, `group_id`, `pos_view`, `pos_add`, `pos_edit`, `pos_delete`, `products_view`, `products_add`, `products_edit`, `products_delete`, `categories_view`, `categories_add`, `categories_edit`, `categories_delete`, `brands_view`, `brands_add`, `brands_edit`, `brands_delete`, `sales_view`, `salereturn_view`, `salereturn_add`, `salereturn_delete`, `purchases_view`, `purchases_add`, `purchases_edit`, `purchases_delete`, `supplierpayment_view`, `supplierpayment_add`, `supplierpayment_edit`, `supplierpayment_delete`, `expenses_view`, `expenses_add`, `expenses_edit`, `expenses_delete`, `collection_view`, `collection_add`, `collection_edit`, `collection_delete`, `bank_view`, `bank_add`, `bank_edit`, `bank_delete`, `user_view`, `user_add`, `user_edit`, `user_delete`, `employee_view`, `employee_add`, `employee_edit`, `employee_delete`, `customers_view`, `customers_add`, `customers_edit`, `customers_delete`, `suppliers_view`, `suppliers_add`, `suppliers_edit`, `suppliers_delete`, `store_view`, `store_add`, `store_edit`, `store_delete`, `group_view`, `group_add`, `group_edit`, `group_delete`, `permission_view`, `permission_edit`, `settings_view`, `settings_edit`, `reports_view`, `mf_categories_view`, `mf_categories_add`, `mf_categories_edit`, `mf_categories_delete`, `mf_unit_view`, `mf_unit_add`, `mf_unit_edit`, `mf_unit_delete`, `mf_material_view`, `mf_material_add`, `mf_material_edit`, `mf_material_delete`, `mf_brands_view`, `mf_brands_add`, `mf_brands_edit`, `mf_brands_delete`, `mf_suppliers_view`, `mf_suppliers_add`, `mf_suppliers_edit`, `mf_suppliers_delete`, `mf_purchases_view`, `mf_purchases_add`, `mf_purchases_edit`, `mf_purchases_delete`, `mf_material_stock_view`, `mf_material_stock_add`, `mf_recipe_view`, `mf_recipe_add`, `mf_recipe_edit`, `mf_recipe_delete`, `mf_production_view`, `mf_production_add`, `mf_production_edit`, `mf_production_delete`, `mf_finish_good_stock_view`, `mf_finish_good_stock_edit`, `transfers_view`, `transfers_add`, `transfers_edit`, `transfers_delete`, `mf_payment_view`, `mf_payment_add`, `mf_payment_edit`, `mf_payment_delete`, `mf_report_view`, `mf_transfers_view`, `mf_transfers_add`, `mf_material_packaging_view`, `mf_purchases_packaging_view`, `mf_purchases_packaging_add`, `mf_purchases_packaging_edit`, `mf_purchases_packaging_delete`, `mf_material_packaging_add`, `mf_material_packaging_edit`, `mf_material_packaging_delete`, `mf_material_stock_packaging_view`, `mf_material_stock_packaging_add`) VALUES ('2', '2', '1', '1', NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', '1', NULL, NULL, '1', '1', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `tec_module_routes_ex` (`module_routes_id`, `group_id`, `pos_view`, `pos_add`, `pos_edit`, `pos_delete`, `products_view`, `products_add`, `products_edit`, `products_delete`, `categories_view`, `categories_add`, `categories_edit`, `categories_delete`, `brands_view`, `brands_add`, `brands_edit`, `brands_delete`, `sales_view`, `salereturn_view`, `salereturn_add`, `salereturn_delete`, `purchases_view`, `purchases_add`, `purchases_edit`, `purchases_delete`, `supplierpayment_view`, `supplierpayment_add`, `supplierpayment_edit`, `supplierpayment_delete`, `expenses_view`, `expenses_add`, `expenses_edit`, `expenses_delete`, `collection_view`, `collection_add`, `collection_edit`, `collection_delete`, `bank_view`, `bank_add`, `bank_edit`, `bank_delete`, `user_view`, `user_add`, `user_edit`, `user_delete`, `employee_view`, `employee_add`, `employee_edit`, `employee_delete`, `customers_view`, `customers_add`, `customers_edit`, `customers_delete`, `suppliers_view`, `suppliers_add`, `suppliers_edit`, `suppliers_delete`, `store_view`, `store_add`, `store_edit`, `store_delete`, `group_view`, `group_add`, `group_edit`, `group_delete`, `permission_view`, `permission_edit`, `settings_view`, `settings_edit`, `reports_view`, `mf_categories_view`, `mf_categories_add`, `mf_categories_edit`, `mf_categories_delete`, `mf_unit_view`, `mf_unit_add`, `mf_unit_edit`, `mf_unit_delete`, `mf_material_view`, `mf_material_add`, `mf_material_edit`, `mf_material_delete`, `mf_brands_view`, `mf_brands_add`, `mf_brands_edit`, `mf_brands_delete`, `mf_suppliers_view`, `mf_suppliers_add`, `mf_suppliers_edit`, `mf_suppliers_delete`, `mf_purchases_view`, `mf_purchases_add`, `mf_purchases_edit`, `mf_purchases_delete`, `mf_material_stock_view`, `mf_material_stock_add`, `mf_recipe_view`, `mf_recipe_add`, `mf_recipe_edit`, `mf_recipe_delete`, `mf_production_view`, `mf_production_add`, `mf_production_edit`, `mf_production_delete`, `mf_finish_good_stock_view`, `mf_finish_good_stock_edit`, `transfers_view`, `transfers_add`, `transfers_edit`, `transfers_delete`, `mf_payment_view`, `mf_payment_add`, `mf_payment_edit`, `mf_payment_delete`, `mf_report_view`, `mf_transfers_view`, `mf_transfers_add`, `mf_material_packaging_view`, `mf_purchases_packaging_view`, `mf_purchases_packaging_add`, `mf_purchases_packaging_edit`, `mf_purchases_packaging_delete`, `mf_material_packaging_add`, `mf_material_packaging_edit`, `mf_material_packaging_delete`, `mf_material_stock_packaging_view`, `mf_material_stock_packaging_add`) VALUES ('3', '3', '1', '1', NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');


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
# TABLE STRUCTURE FOR: tec_packaging_adv_payment
#

DROP TABLE IF EXISTS `tec_packaging_adv_payment`;

CREATE TABLE `tec_packaging_adv_payment` (
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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('1', '2023-03-12 10:56:59', '1', '1', NULL, 'Cash', '', '', '', '', '', '', '200.00', NULL, '43', NULL, '', '200.00', '0.00', '', NULL, NULL, NULL, '3', 'sale', NULL, '1', '', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('2', '2023-03-12 16:18:00', '2', '1', NULL, 'cash', '', '', '', '', '', '', '400.00', NULL, '1', NULL, '', '400.00', '0.00', '', NULL, NULL, NULL, '3', 'sale', NULL, '2', '', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('3', '2023-03-12 16:20:14', '3', '1', NULL, 'TT', '', '', '', '', '', '', '200.00', NULL, '1', NULL, '', '200.00', '0.00', '', NULL, NULL, NULL, '3', 'sale', NULL, '3', '123', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('4', '2023-03-12 16:20:57', '4', '1', NULL, 'Cheque', '12', '', '', '', '', '', '200.00', NULL, '1', NULL, '', '200.00', '0.00', '', NULL, NULL, NULL, '3', 'sale', NULL, '4', '', '2023-03-12');
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('5', '2023-03-18 21:40:03', '9', '20', NULL, 'TT', '', '', '', '', '', '', '54000.00', NULL, '35', NULL, '', '54000.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '7', 'NA', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('6', '2023-03-19 19:30:00', '14', '8', NULL, 'TT', NULL, NULL, NULL, NULL, NULL, NULL, '30000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '12', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('7', '2023-03-19 20:20:54', '24', '71', NULL, 'TT', '', '', '', '', '', '', '22590.00', NULL, '35', NULL, '', '22590.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '16', 'NA', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('8', '2023-03-20 22:58:00', '14', '8', NULL, 'TT', NULL, NULL, NULL, NULL, NULL, NULL, '14460.00', NULL, '42', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '17', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('9', '2023-03-20 23:20:16', '28', '22', NULL, 'TT', '', '', '', '', '', '', '159200.00', NULL, '42', NULL, '', '159200.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '20', 'NA', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('10', '2023-03-20 23:24:04', '29', '12', NULL, 'Cheque', 'NA', '', '', '', '', '', '27270.00', NULL, '42', NULL, '', '27270.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '21', '', '2023-03-21');
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('11', '2023-03-20 23:30:14', '31', '73', NULL, 'TT', '', '', '', '', '', '', '47880.00', NULL, '42', NULL, '', '47880.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '22', 'NA', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('12', '2023-03-21 17:32:14', '41', '16', NULL, 'TT', '', '', '', '', '', '', '45750.00', NULL, '42', NULL, '', '45750.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '23', 'NA', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('13', '2023-03-21 17:33:51', '42', '27', NULL, 'TT', '', '', '', '', '', '', '45000.00', NULL, '42', NULL, '', '45000.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '24', 'NA', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('14', '2023-03-24 21:47:00', '30', '8', NULL, 'Deposit', NULL, NULL, NULL, NULL, NULL, NULL, '45000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '26', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('15', '2023-03-24 21:52:00', '30', '8', NULL, 'Deposit', NULL, NULL, NULL, NULL, NULL, NULL, '39810.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '27', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('16', '2023-03-24 21:52:00', '46', '8', NULL, 'Deposit', NULL, NULL, NULL, NULL, NULL, NULL, '10190.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '27', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('17', '2023-03-30 15:02:00', '46', '8', NULL, 'Deposit', NULL, NULL, NULL, NULL, NULL, NULL, '34270.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '31', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('18', '2023-03-30 15:03:00', '48', '13', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '75800.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '32', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('19', '2023-03-30 15:32:34', '54', '29', NULL, 'TT', '', '', '', '', '', '', '48320.00', NULL, '42', NULL, '', '48320.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '33', 'NA', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('20', '2023-03-30 15:36:17', '56', '62', NULL, 'TT', '', '', '', '', '', '', '59280.00', NULL, '42', NULL, '', '59280.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '34', 'NA', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('21', '2023-03-30 15:40:19', '58', '20', NULL, 'TT', '', '', '', '', '', '', '54000.00', NULL, '42', NULL, '', '54000.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '35', 'NA', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('22', '2023-03-30 16:01:00', '61', '67', NULL, 'Deposit', NULL, NULL, NULL, NULL, NULL, NULL, '28175.00', NULL, '42', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '36', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('23', '2023-03-30 16:01:00', '62', '67', NULL, 'Deposit', NULL, NULL, NULL, NULL, NULL, NULL, '11319.00', NULL, '42', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '36', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('24', '2023-04-01 11:25:00', '17', '23', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '230000.00', NULL, '42', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '37', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('25', '2023-04-01 11:32:00', '55', '8', NULL, 'Deposit', NULL, NULL, NULL, NULL, NULL, NULL, '25000.00', NULL, '42', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '38', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('26', '2023-04-01 12:03:00', '10', '24', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '70000.00', NULL, '42', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '39', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('27', '2023-04-03 15:15:55', '75', '62', NULL, 'TT', '', '', '', '', '', '', '99360.00', NULL, '42', NULL, '', '99360.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '40', 'na', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('28', '2023-04-03 15:19:19', '76', '20', NULL, 'TT', '', '', '', '', '', '', '54000.00', NULL, '42', NULL, '', '54000.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '41', 'na', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('29', '2023-04-06 11:37:00', '55', '8', NULL, 'Deposit', NULL, NULL, NULL, NULL, NULL, NULL, '57240.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '42', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('30', '2023-04-06 11:37:00', '68', '8', NULL, 'Deposit', NULL, NULL, NULL, NULL, NULL, NULL, '42760.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '42', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('42', '2023-04-06 12:22:00', '18', '58', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '115000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '45', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('43', '2023-04-06 12:22:00', '25', '58', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '115000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '45', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('44', '2023-04-06 12:22:00', '34', '58', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '115000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '45', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('45', '2023-04-06 12:22:00', '43', '58', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '115000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '45', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('46', '2023-04-06 12:22:00', '47', '58', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '115000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '45', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('47', '2023-04-06 12:22:00', '50', '58', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '115000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '45', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('48', '2023-04-06 12:22:00', '57', '58', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '115000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '45', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('49', '2023-04-06 12:22:00', '60', '58', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '115000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '45', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('50', '2023-04-06 12:22:00', '65', '58', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '115000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '45', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('51', '2023-04-06 12:22:00', '67', '58', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '115000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '45', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('52', '2023-04-06 12:22:00', '77', '58', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '115000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '45', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('53', '2023-04-06 12:37:00', '62', '67', NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '186192.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '46', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('54', '2023-04-06 12:59:00', '45', '17', NULL, 'Cash', NULL, NULL, NULL, NULL, NULL, NULL, '125000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '49', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('55', '2023-04-08 17:00:00', '68', '8', NULL, 'TT', NULL, NULL, NULL, NULL, NULL, NULL, '40000.00', NULL, '35', NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, '1', 'sale', NULL, '51', NULL, NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('56', '2023-04-08 17:15:40', '103', '18', NULL, 'Cash', '', '', '', '', '', '', '36450.00', NULL, '35', NULL, '', '36450.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '52', '', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('57', '2023-04-08 17:20:35', '104', '81', NULL, 'cash', '', '', '', '', '', '', '4900.00', NULL, '35', NULL, '', '4900.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '53', '', NULL);
INSERT INTO `tec_payments` (`id`, `date`, `sale_id`, `customer_id`, `transaction_id`, `paid_by`, `cheque_no`, `cc_no`, `cc_holder`, `cc_month`, `cc_year`, `cc_type`, `amount`, `currency`, `created_by`, `attachment`, `note`, `pos_paid`, `pos_balance`, `gc_no`, `reference`, `updated_by`, `updated_at`, `store_id`, `payment_type`, `service_id`, `collect_id`, `tt_no`, `cheque_date`) VALUES ('58', '2023-04-08 17:27:37', '106', '43', NULL, 'cash', '', '', '', '', '', '', '47000.00', NULL, '35', NULL, '', '47000.00', '0.00', '', NULL, NULL, NULL, '1', 'sale', NULL, '56', '', NULL);


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
  `mf_material_packaging` int(11) DEFAULT 0,
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
  `mf_transfers` tinyint(1) DEFAULT NULL,
  `mf_purchases_packaging` tinyint(1) DEFAULT 0,
  `mf_material_stock_packaging` tinyint(1) DEFAULT 0,
  `mf_payment_packaging` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`permissions_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_permissions` (`permissions_id`, `group_id`, `pos`, `products`, `categories`, `brands`, `sales`, `salereturn`, `purchases`, `supplierpayment`, `expenses`, `collection`, `bank`, `user`, `employee`, `customers`, `suppliers`, `store`, `group`, `permission`, `settings`, `reports`, `mf_categories`, `mf_unit`, `mf_material`, `mf_material_packaging`, `mf_brands`, `mf_suppliers`, `mf_purchases`, `mf_material_stock`, `mf_recipe`, `mf_production`, `mf_finish_good_stock`, `transfers`, `mf_payment`, `mf_report`, `mf_transfers`, `mf_purchases_packaging`, `mf_material_stock_packaging`, `mf_payment_packaging`) VALUES ('1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `tec_permissions` (`permissions_id`, `group_id`, `pos`, `products`, `categories`, `brands`, `sales`, `salereturn`, `purchases`, `supplierpayment`, `expenses`, `collection`, `bank`, `user`, `employee`, `customers`, `suppliers`, `store`, `group`, `permission`, `settings`, `reports`, `mf_categories`, `mf_unit`, `mf_material`, `mf_material_packaging`, `mf_brands`, `mf_suppliers`, `mf_purchases`, `mf_material_stock`, `mf_recipe`, `mf_production`, `mf_finish_good_stock`, `transfers`, `mf_payment`, `mf_report`, `mf_transfers`, `mf_purchases_packaging`, `mf_material_stock_packaging`, `mf_payment_packaging`) VALUES ('2', '2', '1', '1', NULL, NULL, '1', NULL, '1', '1', '1', '1', '1', NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tec_permissions` (`permissions_id`, `group_id`, `pos`, `products`, `categories`, `brands`, `sales`, `salereturn`, `purchases`, `supplierpayment`, `expenses`, `collection`, `bank`, `user`, `employee`, `customers`, `suppliers`, `store`, `group`, `permission`, `settings`, `reports`, `mf_categories`, `mf_unit`, `mf_material`, `mf_material_packaging`, `mf_brands`, `mf_suppliers`, `mf_purchases`, `mf_material_stock`, `mf_recipe`, `mf_production`, `mf_finish_good_stock`, `transfers`, `mf_payment`, `mf_report`, `mf_transfers`, `mf_purchases_packaging`, `mf_material_stock_packaging`, `mf_payment_packaging`) VALUES ('3', '3', '1', '1', NULL, NULL, '1', '1', NULL, NULL, '1', '1', '1', NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);


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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('1', '1', '3', '0.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('2', '3', '2', '0.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('3', '2', '2', '0.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('4', '2', '3', '420.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('5', '2', '1', '570.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('6', '3', '1', '0.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('7', '4', '1', '0.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('8', '5', '1', '200.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('9', '7', '1', '0.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('10', '4', '3', '0.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('11', '5', '3', '0.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('12', '8', '1', '0.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('13', '3', '3', '100.00', NULL);
INSERT INTO `tec_product_store_qty` (`id`, `product_id`, `store_id`, `quantity`, `price`) VALUES ('14', '10', '1', '0.00', NULL);


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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_products` (`id`, `code`, `name`, `category_id`, `brands_id`, `price`, `image`, `tax`, `cost`, `tax_method`, `quantity`, `barcode_symbology`, `type`, `details`, `alert_quantity`, `sequence`) VALUES ('1', '00', 'TEST1', '1', '1', '200.00', 'no_image.png', '0', '0.00', '0', '0.00', 'code39', 'standard', '', '0.00', NULL);
INSERT INTO `tec_products` (`id`, `code`, `name`, `category_id`, `brands_id`, `price`, `image`, `tax`, `cost`, `tax_method`, `quantity`, `barcode_symbology`, `type`, `details`, `alert_quantity`, `sequence`) VALUES ('2', '01', 'GATODAN GEL (BATI)', '2', '2', '305.00', 'no_image.png', '0', '0.00', '0', '-1565.00', 'code39', 'standard', '', '0.00', NULL);
INSERT INTO `tec_products` (`id`, `code`, `name`, `category_id`, `brands_id`, `price`, `image`, `tax`, `cost`, `tax_method`, `quantity`, `barcode_symbology`, `type`, `details`, `alert_quantity`, `sequence`) VALUES ('3', '02', 'GATODAN GEL (BUCKET)', '2', '2', '305.00', 'no_image.png', '0', '0.00', '0', '-801.00', 'code39', 'standard', '', '0.00', NULL);
INSERT INTO `tec_products` (`id`, `code`, `name`, `category_id`, `brands_id`, `price`, `image`, `tax`, `cost`, `tax_method`, `quantity`, `barcode_symbology`, `type`, `details`, `alert_quantity`, `sequence`) VALUES ('4', '03', 'KK GEL (BATI)', '2', '2', '247.00', 'no_image.png', '0', '64.55', '0', '0.00', 'code39', 'standard', '', '0.00', NULL);
INSERT INTO `tec_products` (`id`, `code`, `name`, `category_id`, `brands_id`, `price`, `image`, `tax`, `cost`, `tax_method`, `quantity`, `barcode_symbology`, `type`, `details`, `alert_quantity`, `sequence`) VALUES ('5', '04', 'KK GEL (BUCKET)', '2', '2', '247.00', 'no_image.png', '0', '0.00', '0', '200.00', 'code39', 'standard', '', '0.00', NULL);
INSERT INTO `tec_products` (`id`, `code`, `name`, `category_id`, `brands_id`, `price`, `image`, `tax`, `cost`, `tax_method`, `quantity`, `barcode_symbology`, `type`, `details`, `alert_quantity`, `sequence`) VALUES ('6', '05', 'NOVA GEL (BATI)', '2', '2', '225.00', 'no_image.png', '0', '0.00', '0', '0.00', 'code39', 'standard', '', '0.00', NULL);
INSERT INTO `tec_products` (`id`, `code`, `name`, `category_id`, `brands_id`, `price`, `image`, `tax`, `cost`, `tax_method`, `quantity`, `barcode_symbology`, `type`, `details`, `alert_quantity`, `sequence`) VALUES ('7', '06', 'NOVA GEL (BUCKET)', '2', '2', '225.00', 'no_image.png', '0', '0.00', '0', '0.00', 'code39', 'standard', '', '0.00', NULL);
INSERT INTO `tec_products` (`id`, `code`, `name`, `category_id`, `brands_id`, `price`, `image`, `tax`, `cost`, `tax_method`, `quantity`, `barcode_symbology`, `type`, `details`, `alert_quantity`, `sequence`) VALUES ('8', '07', 'CALPRONA (10KG)', '3', '2', '230.00', 'no_image.png', '0', '0.00', '0', '0.00', 'code39', 'standard', '', '0.00', NULL);
INSERT INTO `tec_products` (`id`, `code`, `name`, `category_id`, `brands_id`, `price`, `image`, `tax`, `cost`, `tax_method`, `quantity`, `barcode_symbology`, `type`, `details`, `alert_quantity`, `sequence`) VALUES ('9', '08', 'CALPRONA (25KG)', '3', '2', '230.00', 'no_image.png', '0', '0.00', '0', '0.00', 'code39', 'standard', '', '0.00', NULL);
INSERT INTO `tec_products` (`id`, `code`, `name`, `category_id`, `brands_id`, `price`, `image`, `tax`, `cost`, `tax_method`, `quantity`, `barcode_symbology`, `type`, `details`, `alert_quantity`, `sequence`) VALUES ('10', '09', 'BREAD IMPROVER (10KG)', '3', '2', '260.00', 'no_image.png', '0', '0.00', '0', '0.00', 'code39', 'standard', '', '0.00', NULL);


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
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('2', '2', '2', '1020.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('3', '3', '2', '120.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('4', '3', '3', '360.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('5', '4', '2', '240.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('6', '5', '2', '630.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('7', '5', '3', '300.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('8', '5', '4', '360.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('9', '5', '5', '1220.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('10', '5', '7', '500.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('11', '6', '2', '810.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('12', '6', '4', '1230.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('13', '7', '2', '1020.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('14', '7', '4', '1290.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('15', '7', '5', '700.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('16', '8', '2', '30.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('17', '8', '3', '20.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('18', '8', '4', '30.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('19', '8', '7', '500.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('25', '10', '2', '270.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('26', '10', '4', '270.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('27', '10', '5', '520.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('28', '10', '7', '800.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('29', '11', '8', '10.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('32', '13', '2', '630.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('33', '13', '4', '510.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('34', '13', '5', '300.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('35', '14', '2', '150.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('36', '14', '7', '700.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('41', '17', '2', '600.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('42', '18', '7', '500.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('43', '19', '4', '180.00', '100.00', NULL, '18000.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('44', '19', '7', '1000.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('45', '20', '2', '150.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('46', '20', '3', '300.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('47', '20', '4', '180.00', '100.00', NULL, '18000.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('48', '20', '5', '100.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('49', '21', '4', '300.00', '100.00', NULL, '30000.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('50', '21', '7', '600.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('51', '21', '10', '140.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('52', '22', '2', '360.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('53', '22', '3', '2700.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('54', '22', '4', '240.00', '100.00', NULL, '24000.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('55', '22', '5', '200.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('56', '22', '7', '1900.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('57', '22', '8', '250.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('58', '23', '8', '150.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('59', '24', '2', '600.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('60', '24', '3', '40.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('61', '24', '5', '700.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('62', '25', '2', '2550.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('63', '25', '3', '900.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('64', '25', '4', '2100.00', '100.00', NULL, '210000.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('65', '25', '5', '700.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('73', '28', '4', '180.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('74', '28', '7', '500.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('75', '29', '2', '720.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('76', '29', '7', '1700.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('77', '30', '4', '540.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('78', '31', '7', '500.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('79', '32', '3', '20.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('80', '32', '4', '150.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('81', '33', '2', '2640.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('82', '33', '3', '1420.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('83', '33', '4', '240.00', '64.55', NULL, '15492.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('84', '33', '5', '1400.00', '0.00', NULL, '0.00', '3', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('85', '34', '3', '320.00', '0.00', NULL, '0.00', '1', '', NULL);
INSERT INTO `tec_purchase_items` (`id`, `purchase_id`, `product_id`, `quantity`, `cost`, `foreign_cost`, `subtotal`, `store_id`, `expiry_year`, `expiry_date`) VALUES ('86', '35', '8', '50.00', '0.00', NULL, '0.00', '1', '', NULL);


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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('2', '', '2023-03-16 21:49:00', '', '0.00', '0', '0', NULL, '1', '1', '35', '3', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('3', '', '2023-03-18 21:34:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('4', '', '2023-03-18 21:47:00', '', '0.00', '0', '0', NULL, '1', '1', '35', '3', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('5', '', '2023-03-19 18:47:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('6', '', '2023-03-19 19:47:00', '', '0.00', '0', '0', NULL, '1', '1', '35', '3', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('7', '', '2023-03-19 19:50:00', '', '0.00', '0', '0', NULL, '1', '1', '35', '3', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('8', '', '2023-03-19 20:13:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('10', '', '2023-03-20 23:15:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('11', '', '2023-03-20 23:33:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('13', '', '2023-03-21 16:46:00', '', '0.00', '0', '0', NULL, '1', '1', '35', '3', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('14', '', '2023-03-21 17:28:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('17', '', '2023-03-23 14:43:00', '', '0.00', '0', '0', NULL, '1', '1', '35', '3', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('18', '', '2023-03-23 14:46:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('19', '', '2023-03-24 21:38:00', '', '18000.00', '0', '18000', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('20', '', '2023-03-24 21:38:00', '', '18000.00', '0', '18000', NULL, '1', '1', '35', '3', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('21', '', '2023-03-26 13:58:00', '', '30000.00', '0', '30000', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('22', '', '2023-03-30 15:23:00', '', '24000.00', '0', '24000', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('23', '', '2023-04-01 12:16:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('24', '', '2023-04-01 15:55:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('25', '', '2023-04-02 13:42:00', '', '210000.00', '0', '210000', NULL, '1', '1', '35', '3', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('28', '', '2023-04-03 15:12:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('29', '', '2023-04-06 11:10:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('30', '', '2023-04-06 12:09:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('31', '', '2023-04-06 12:23:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('32', '', '2023-04-06 12:52:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('33', '', '2023-04-08 11:44:00', '', '15492.00', '0', '15492', NULL, '1', '1', '35', '3', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('34', '', '2023-04-08 16:52:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');
INSERT INTO `tec_purchases` (`id`, `reference`, `date`, `note`, `total`, `paid`, `deu`, `attachment`, `supplier_id`, `received`, `created_by`, `store_id`, `purchase_type`, `transfer_id`) VALUES ('35', '', '2023-04-08 17:01:00', '', '0.00', '0', '0', NULL, '2', '1', '35', '1', '1', '0');


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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_registers` (`id`, `date`, `user_id`, `cash_in_hand`, `status`, `total_cash`, `total_cheques`, `total_cc_slips`, `total_cash_submitted`, `total_cheques_submitted`, `total_cc_slips_submitted`, `note`, `closed_at`, `transfer_opened_bills`, `closed_by`, `store_id`) VALUES ('1', '2023-03-12 10:49:52', '43', '0', 'open', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '3');
INSERT INTO `tec_registers` (`id`, `date`, `user_id`, `cash_in_hand`, `status`, `total_cash`, `total_cheques`, `total_cc_slips`, `total_cash_submitted`, `total_cheques_submitted`, `total_cc_slips_submitted`, `note`, `closed_at`, `transfer_opened_bills`, `closed_by`, `store_id`) VALUES ('2', '2023-03-12 16:17:19', '1', '0', 'open', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '0');
INSERT INTO `tec_registers` (`id`, `date`, `user_id`, `cash_in_hand`, `status`, `total_cash`, `total_cheques`, `total_cc_slips`, `total_cash_submitted`, `total_cheques_submitted`, `total_cc_slips_submitted`, `note`, `closed_at`, `transfer_opened_bills`, `closed_by`, `store_id`) VALUES ('3', '2023-03-14 12:04:06', '35', '0', 'open', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '0');
INSERT INTO `tec_registers` (`id`, `date`, `user_id`, `cash_in_hand`, `status`, `total_cash`, `total_cheques`, `total_cc_slips`, `total_cash_submitted`, `total_cheques_submitted`, `total_cc_slips_submitted`, `note`, `closed_at`, `transfer_opened_bills`, `closed_by`, `store_id`) VALUES ('4', '2023-03-17 15:54:49', '42', '0', 'open', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tec_registers` (`id`, `date`, `user_id`, `cash_in_hand`, `status`, `total_cash`, `total_cheques`, `total_cc_slips`, `total_cash_submitted`, `total_cheques_submitted`, `total_cc_slips_submitted`, `note`, `closed_at`, `transfer_opened_bills`, `closed_by`, `store_id`) VALUES ('5', '2023-04-01 15:18:06', '44', '70170', 'open', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tec_registers` (`id`, `date`, `user_id`, `cash_in_hand`, `status`, `total_cash`, `total_cheques`, `total_cc_slips`, `total_cash_submitted`, `total_cheques_submitted`, `total_cc_slips_submitted`, `note`, `closed_at`, `transfer_opened_bills`, `closed_by`, `store_id`) VALUES ('6', '2023-04-01 15:57:10', '45', '0', 'open', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tec_registers` (`id`, `date`, `user_id`, `cash_in_hand`, `status`, `total_cash`, `total_cheques`, `total_cc_slips`, `total_cash_submitted`, `total_cheques_submitted`, `total_cc_slips_submitted`, `note`, `closed_at`, `transfer_opened_bills`, `closed_by`, `store_id`) VALUES ('7', '2023-04-06 16:08:21', '48', '0', 'open', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '1');


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
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('7', '7', '2', '900.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '270000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '150.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('8', '8', '2', '120.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '36000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('9', '9', '2', '120.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '36000.00', '300.00', '0.00', '1', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('10', '9', '3', '60.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '18000.00', '300.00', '0.00', '1', '', NULL, NULL, '1', '3.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('11', '10', '3', '300.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '73500.00', '245.00', '0.00', '1', '', NULL, NULL, '1', '15.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('12', '11', '2', '240.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '72000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '40.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('13', '12', '2', '300.00', '303.00', '303.00', '0', '0.00', '0', '0.00', '90900.00', '303.00', '0.00', '1', '', NULL, NULL, '2', '50.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('14', '13', '2', '180.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '54360.00', '302.00', '0.00', '1', '', NULL, NULL, '2', '30.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('15', '13', '5', '100.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '24700.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('16', '14', '4', '180.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '44460.00', '247.00', '0.00', '1', '', NULL, NULL, '2', '30.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('17', '15', '4', '180.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '44460.00', '247.00', '0.00', '1', '', NULL, NULL, '2', '30.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('18', '16', '2', '150.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '45300.00', '302.00', '0.00', '1', '', NULL, NULL, '2', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('19', '16', '5', '120.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '29640.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '6.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('20', '17', '5', '1000.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '230000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '50.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('21', '18', '7', '500.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '100000.00', '200.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('22', '19', '2', '1020.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '306000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '170.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('23', '19', '4', '870.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '213150.00', '245.00', '0.00', '3', '', NULL, NULL, '2', '145.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('24', '20', '4', '120.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '29400.00', '245.00', '0.00', '3', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('25', '21', '5', '200.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '49000.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('26', '22', '4', '300.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '73500.00', '245.00', '0.00', '3', '', NULL, NULL, '2', '50.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('27', '23', '5', '500.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '122500.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('28', '24', '2', '30.00', '303.00', '303.00', '0', '0.00', '0', '0.00', '9090.00', '303.00', '0.00', '1', '', NULL, NULL, '2', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('29', '24', '3', '20.00', '303.00', '303.00', '0', '0.00', '0', '0.00', '6060.00', '303.00', '0.00', '1', '', NULL, NULL, '1', '1.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('30', '24', '4', '30.00', '248.00', '248.00', '0', '0.00', '0', '0.00', '7440.00', '248.00', '0.00', '1', '', NULL, NULL, '2', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('31', '25', '7', '500.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '100000.00', '200.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('32', '26', '2', '510.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '153000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '85.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('33', '26', '4', '510.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '124950.00', '245.00', '0.00', '3', '', NULL, NULL, '2', '85.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('34', '27', '2', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '0', '0.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('35', '27', '4', '720.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '176400.00', '245.00', '0.00', '3', '', NULL, NULL, '2', '120.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('36', '28', '3', '200.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '60400.00', '302.00', '0.00', '1', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('37', '28', '5', '400.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '98800.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('38', '29', '2', '90.00', '303.00', '303.00', '0', '0.00', '0', '0.00', '27270.00', '303.00', '0.00', '1', '', NULL, NULL, '2', '15.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('39', '30', '2', '60.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '18120.00', '302.00', '0.00', '1', '', NULL, NULL, '2', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('40', '30', '4', '150.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '37050.00', '247.00', '0.00', '1', '', NULL, NULL, '2', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('41', '30', '5', '120.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '29640.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '6.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('42', '31', '2', '60.00', '304.00', '304.00', '0', '0.00', '0', '0.00', '18240.00', '304.00', '0.00', '1', '', NULL, NULL, '2', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('43', '31', '4', '120.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '29640.00', '247.00', '0.00', '1', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('44', '32', '2', '60.00', '303.00', '303.00', '0', '0.00', '0', '0.00', '18180.00', '303.00', '0.00', '1', '', NULL, NULL, '2', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('45', '32', '8', '10.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '2300.00', '230.00', '0.00', '1', '', NULL, NULL, '3', '1.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('46', '33', '7', '300.00', '225.00', '225.00', '0', '0.00', '0', '0.00', '67500.00', '225.00', '0.00', '1', '', NULL, NULL, '1', '15.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('47', '34', '7', '500.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '100000.00', '200.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('50', '37', '2', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '50.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('51', '37', '5', '200.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '49000.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('52', '38', '2', '150.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '45000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('53', '38', '5', '100.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '24500.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('54', '39', '2', '180.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '54000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '30.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('55', '40', '4', '510.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '124950.00', '245.00', '0.00', '3', '', NULL, NULL, '2', '85.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('56', '41', '2', '150.00', '305.00', '305.00', '0', '0.00', '0', '0.00', '45750.00', '305.00', '0.00', '1', '', NULL, NULL, '2', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('57', '42', '7', '200.00', '225.00', '225.00', '0', '0.00', '0', '0.00', '45000.00', '225.00', '0.00', '1', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('58', '43', '7', '500.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '100000.00', '200.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('59', '44', '2', '600.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '180000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '100.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('60', '45', '7', '500.00', '250.00', '250.00', '0', '0.00', '0', '0.00', '125000.00', '250.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('61', '46', '4', '180.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '44460.00', '247.00', '100.00', '1', '', NULL, NULL, '2', '30.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('62', '47', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('63', '48', '7', '200.00', '225.00', '225.00', '0', '0.00', '0', '0.00', '45000.00', '225.00', '0.00', '1', '', NULL, NULL, '3', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('64', '48', '10', '140.00', '220.00', '220.00', '0', '0.00', '0', '0.00', '30800.00', '220.00', '0.00', '1', '', NULL, NULL, '3', '14.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('65', '49', '4', '300.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '74100.00', '247.00', '100.00', '1', '', NULL, NULL, '2', '50.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('66', '49', '7', '400.00', '225.00', '225.00', '0', '0.00', '0', '0.00', '90000.00', '225.00', '0.00', '1', '', NULL, NULL, '1', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('67', '50', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('68', '51', '2', '150.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '45000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('69', '51', '4', '120.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '29400.00', '245.00', '100.00', '3', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('70', '52', '3', '200.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '60000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('71', '53', '3', '100.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '30000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('72', '53', '4', '60.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '14700.00', '245.00', '100.00', '3', '', NULL, NULL, '2', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('73', '53', '5', '100.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '24500.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('74', '54', '2', '120.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '36240.00', '302.00', '0.00', '1', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('75', '54', '3', '40.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '12080.00', '302.00', '0.00', '1', '', NULL, NULL, '1', '2.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('76', '55', '2', '120.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '36240.00', '302.00', '0.00', '1', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('77', '55', '7', '200.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '46000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('78', '56', '4', '240.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '59280.00', '247.00', '100.00', '1', '', NULL, NULL, '2', '40.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('79', '57', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('80', '58', '2', '120.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '36000.00', '300.00', '0.00', '1', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('81', '58', '3', '60.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '18000.00', '300.00', '0.00', '1', '', NULL, NULL, '1', '3.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('82', '59', '7', '200.00', '225.00', '225.00', '0', '0.00', '0', '0.00', '45000.00', '225.00', '0.00', '1', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('83', '59', '8', '250.00', '220.00', '220.00', '0', '0.00', '0', '0.00', '55000.00', '220.00', '0.00', '1', '', NULL, NULL, '3', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('84', '60', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('85', '61', '3', '100.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '24500.00', '245.00', '0.00', '1', '', NULL, NULL, '1', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('86', '62', '3', '900.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '220500.00', '245.00', '0.00', '1', '', NULL, NULL, '1', '45.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('87', '63', '3', '1000.00', '280.00', '280.00', '0', '0.00', '0', '0.00', '280000.00', '280.00', '0.00', '1', '', NULL, NULL, '1', '50.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('88', '64', '3', '100.00', '239.14', '239.14', '0', '0.00', '0', '0.00', '23914.00', '239.14', '0.00', '1', '', NULL, NULL, '1', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('89', '65', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('90', '66', '8', '150.00', '235.00', '235.00', '0', '0.00', '0', '0.00', '35250.00', '235.00', '0.00', '1', '', NULL, NULL, '3', '15.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('91', '67', '3', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, '1', '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('92', '68', '3', '200.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '60400.00', '302.00', '0.00', '1', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('93', '68', '5', '200.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '49400.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('94', '69', '2', '510.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '153000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '85.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('95', '70', '2', '90.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '27000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '15.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('96', '71', '2', '120.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '36000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('97', '72', '3', '200.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '60000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('98', '72', '4', '300.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '73500.00', '245.00', '100.00', '3', '', NULL, NULL, '2', '50.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('99', '73', '3', '100.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '30000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('100', '74', '3', '200.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '60000.00', '300.00', '0.00', '1', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('101', '75', '2', '180.00', '303.00', '303.00', '0', '0.00', '0', '0.00', '54540.00', '303.00', '0.00', '1', '', NULL, NULL, '2', '30.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('102', '75', '4', '180.00', '249.00', '249.00', '0', '0.00', '0', '0.00', '44820.00', '249.00', '90.91', '1', '', NULL, NULL, '2', '30.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('103', '76', '2', '120.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '36000.00', '300.00', '0.00', '1', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('104', '76', '3', '60.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '18000.00', '300.00', '0.00', '1', '', NULL, NULL, '1', '3.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('105', '77', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('106', '78', '7', '200.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '46000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('107', '79', '2', '300.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '90600.00', '302.00', '0.00', '1', '', NULL, NULL, '2', '50.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('108', '79', '4', '540.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '133380.00', '247.00', '69.93', '1', '', NULL, NULL, '2', '90.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('109', '79', '7', '1000.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '230000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '50.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('111', '81', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('112', '82', '7', '500.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '100000.00', '200.00', '0.00', '1', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('113', '83', '2', '150.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '45000.00', '300.00', '0.00', '1', '', NULL, NULL, '2', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('114', '83', '3', '200.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '60000.00', '300.00', '0.00', '1', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('115', '83', '4', '150.00', '250.00', '250.00', '0', '0.00', '0', '0.00', '37500.00', '250.00', '64.55', '1', '', NULL, NULL, '2', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('116', '83', '5', '300.00', '250.00', '250.00', '0', '0.00', '0', '0.00', '75000.00', '250.00', '0.00', '1', '', NULL, NULL, '1', '15.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('117', '84', '2', '510.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '153000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '85.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('118', '84', '4', '510.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '124950.00', '245.00', '64.55', '3', '', NULL, NULL, '2', '85.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('119', '84', '5', '300.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '73500.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '15.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('120', '85', '2', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '50.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('121', '85', '3', '200.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '60000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('122', '85', '4', '180.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '44100.00', '245.00', '64.55', '3', '', NULL, NULL, '2', '30.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('123', '85', '5', '200.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '49000.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('124', '86', '2', '510.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '153000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '85.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('125', '86', '3', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '15.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('126', '86', '4', '510.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '124950.00', '245.00', '64.55', '3', '', NULL, NULL, '2', '85.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('127', '86', '5', '200.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '49000.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('128', '87', '2', '90.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '27000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '15.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('129', '87', '4', '600.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '147000.00', '245.00', '64.55', '3', '', NULL, NULL, '2', '100.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('130', '88', '2', '600.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '180000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '100.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('131', '89', '3', '100.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '30000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '50.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('132', '90', '3', '340.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '102000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '17.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('133', '91', '5', '500.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '122500.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('134', '92', '2', '330.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '99000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '55.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('135', '92', '3', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '15.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('136', '93', '2', '510.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '153000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '85.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('137', '94', '3', '180.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '54000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '9.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('138', '94', '4', '120.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '29400.00', '245.00', '64.55', '3', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('139', '95', '5', '200.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '49000.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('140', '96', '2', '270.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '81000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '45.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('141', '97', '2', '510.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '153000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '85.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('142', '98', '3', '500.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '150000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('143', '98', '5', '500.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '122500.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '25.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('144', '99', '2', '120.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '36000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('145', '99', '4', '120.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '29400.00', '245.00', '64.55', '3', '', NULL, NULL, '2', '20.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('146', '99', '5', '200.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '49000.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '10.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('147', '100', '2', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '50.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('148', '101', '2', '5.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '0.00', '0.00', '0.00', '2', '', NULL, NULL, '0', '0.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('149', '101', '3', '1.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '0.00', '0.00', '0.00', '2', '', NULL, NULL, '0', '0.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('150', '102', '3', '100.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '30200.00', '302.00', '0.00', '1', '', NULL, NULL, '1', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('151', '102', '5', '100.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '24700.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('152', '103', '5', '100.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '24700.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('153', '103', '8', '50.00', '235.00', '235.00', '0', '0.00', '0', '0.00', '11750.00', '235.00', '0.00', '1', '', NULL, NULL, '3', '5.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('155', '105', '3', '20.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '4900.00', '245.00', '0.00', '1', '', NULL, NULL, '1', '1.00');
INSERT INTO `tec_sale_items` (`id`, `sale_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('156', '106', '3', '200.00', '235.00', '235.00', '0', '0.00', '0', '0.00', '47000.00', '235.00', '0.00', '1', '', NULL, NULL, '1', '10.00');


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
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('1', '1', '1', '1', '1.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '200.00', '200.00', '0.00', '3', '', NULL, NULL, '0', '0');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('2', '2', '2', '1', '2.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '400.00', '200.00', '0.00', '3', '', NULL, NULL, '0', '0');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('3', '3', '3', '1', '1.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '200.00', '200.00', '0.00', '3', '', NULL, NULL, '0', '0');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('4', '4', '4', '1', '1.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '200.00', '200.00', '0.00', '3', '', NULL, NULL, '0', '0');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('5', '7', '5', '2', '900.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '270000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '150');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('6', '8', '6', '2', '120.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '36000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('7', '9', '7', '2', '120.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '36000.00', '300.00', '0.00', '1', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('8', '9', '7', '3', '60.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '18000.00', '300.00', '0.00', '1', '', NULL, NULL, '1', '3');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('9', '10', '8', '3', '300.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '73500.00', '245.00', '0.00', '1', '', NULL, NULL, '1', '15');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('10', '11', '9', '2', '240.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '72000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '40');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('11', '12', '10', '2', '300.00', '303.00', '303.00', '0', '0.00', '0', '0.00', '90900.00', '303.00', '0.00', '1', '', NULL, NULL, '2', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('12', '13', '11', '2', '180.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '54360.00', '302.00', '0.00', '1', '', NULL, NULL, '2', '30');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('13', '13', '11', '5', '100.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '24700.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('14', '14', '12', '4', '180.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '44460.00', '247.00', '0.00', '1', '', NULL, NULL, '2', '30');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('15', '15', '13', '4', '180.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '44460.00', '247.00', '0.00', '1', '', NULL, NULL, '2', '30');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('16', '16', '14', '2', '150.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '45300.00', '302.00', '0.00', '1', '', NULL, NULL, '2', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('17', '16', '14', '5', '120.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '29640.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '6');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('18', '17', '15', '5', '1000.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '230000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('19', '18', '16', '7', '500.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '100000.00', '200.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('20', '19', '17', '2', '1020.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '306000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '170');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('21', '19', '17', '4', '870.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '213150.00', '245.00', '0.00', '3', '', NULL, NULL, '2', '145');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('22', '20', '18', '4', '120.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '29400.00', '245.00', '0.00', '3', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('23', '21', '19', '5', '200.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '49000.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('24', '22', '20', '4', '300.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '73500.00', '245.00', '0.00', '3', '', NULL, NULL, '2', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('25', '23', '21', '5', '500.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '122500.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('26', '24', '22', '2', '30.00', '303.00', '303.00', '0', '0.00', '0', '0.00', '9090.00', '303.00', '0.00', '1', '', NULL, NULL, '2', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('27', '24', '22', '3', '20.00', '303.00', '303.00', '0', '0.00', '0', '0.00', '6060.00', '303.00', '0.00', '1', '', NULL, NULL, '1', '1');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('28', '24', '22', '4', '30.00', '248.00', '248.00', '0', '0.00', '0', '0.00', '7440.00', '248.00', '0.00', '1', '', NULL, NULL, '2', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('29', '25', '23', '7', '500.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '100000.00', '200.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('30', '26', '24', '2', '510.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '153000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '85');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('31', '26', '24', '4', '510.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '124950.00', '245.00', '0.00', '3', '', NULL, NULL, '2', '85');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('32', '27', '25', '2', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '0', '0');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('33', '27', '25', '4', '720.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '176400.00', '245.00', '0.00', '3', '', NULL, NULL, '2', '120');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('34', '28', '26', '3', '200.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '60400.00', '302.00', '0.00', '1', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('35', '28', '26', '5', '400.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '98800.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('36', '29', '27', '2', '90.00', '303.00', '303.00', '0', '0.00', '0', '0.00', '27270.00', '303.00', '0.00', '1', '', NULL, NULL, '2', '15');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('37', '30', '28', '2', '60.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '18120.00', '302.00', '0.00', '1', '', NULL, NULL, '2', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('38', '30', '28', '4', '150.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '37050.00', '247.00', '0.00', '1', '', NULL, NULL, '2', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('39', '30', '28', '5', '120.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '29640.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '6');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('40', '31', '29', '2', '60.00', '304.00', '304.00', '0', '0.00', '0', '0.00', '18240.00', '304.00', '0.00', '1', '', NULL, NULL, '2', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('41', '31', '29', '4', '120.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '29640.00', '247.00', '0.00', '1', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('42', '32', '30', '2', '60.00', '303.00', '303.00', '0', '0.00', '0', '0.00', '18180.00', '303.00', '0.00', '1', '', NULL, NULL, '2', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('43', '32', '30', '8', '10.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '2300.00', '230.00', '0.00', '1', '', NULL, NULL, '3', '1');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('44', '33', '31', '7', '300.00', '225.00', '225.00', '0', '0.00', '0', '0.00', '67500.00', '225.00', '0.00', '1', '', NULL, NULL, '1', '15');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('45', '34', '32', '7', '500.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '100000.00', '200.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('46', '35', '33', '2', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('47', '36', '34', '2', '150.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '45000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('48', '37', '35', '2', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('49', '37', '35', '5', '200.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '49000.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('50', '38', '36', '2', '150.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '45000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('51', '38', '36', '5', '100.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '24500.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('52', '39', '37', '2', '180.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '54000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '30');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('53', '40', '38', '4', '510.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '124950.00', '245.00', '0.00', '3', '', NULL, NULL, '2', '85');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('54', '41', '39', '2', '150.00', '305.00', '305.00', '0', '0.00', '0', '0.00', '45750.00', '305.00', '0.00', '1', '', NULL, NULL, '2', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('55', '42', '40', '7', '200.00', '225.00', '225.00', '0', '0.00', '0', '0.00', '45000.00', '225.00', '0.00', '1', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('56', '43', '41', '7', '500.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '100000.00', '200.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('57', '44', '42', '2', '600.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '180000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '100');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('58', '45', '43', '7', '500.00', '250.00', '250.00', '0', '0.00', '0', '0.00', '125000.00', '250.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('59', '46', '44', '4', '180.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '44460.00', '247.00', '100.00', '1', '', NULL, NULL, '2', '30');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('60', '47', '45', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('61', '48', '46', '7', '200.00', '225.00', '225.00', '0', '0.00', '0', '0.00', '45000.00', '225.00', '0.00', '1', '', NULL, NULL, '3', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('62', '48', '46', '10', '140.00', '220.00', '220.00', '0', '0.00', '0', '0.00', '30800.00', '220.00', '0.00', '1', '', NULL, NULL, '3', '14');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('63', '49', '47', '4', '300.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '74100.00', '247.00', '100.00', '1', '', NULL, NULL, '2', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('64', '49', '47', '7', '400.00', '225.00', '225.00', '0', '0.00', '0', '0.00', '90000.00', '225.00', '0.00', '1', '', NULL, NULL, '1', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('65', '50', '48', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('66', '51', '49', '2', '150.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '45000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('67', '51', '49', '4', '120.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '29400.00', '245.00', '100.00', '3', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('68', '52', '50', '3', '200.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '60000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('69', '53', '51', '3', '100.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '30000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('70', '53', '51', '4', '60.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '14700.00', '245.00', '100.00', '3', '', NULL, NULL, '2', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('71', '53', '51', '5', '100.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '24500.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('72', '54', '52', '2', '120.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '36240.00', '302.00', '0.00', '1', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('73', '54', '52', '3', '40.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '12080.00', '302.00', '0.00', '1', '', NULL, NULL, '1', '2');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('74', '55', '53', '2', '120.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '36240.00', '302.00', '0.00', '1', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('75', '55', '53', '7', '200.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '46000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('76', '56', '54', '4', '240.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '59280.00', '247.00', '100.00', '1', '', NULL, NULL, '2', '40');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('77', '57', '55', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('78', '58', '56', '2', '120.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '36000.00', '300.00', '0.00', '1', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('79', '58', '56', '3', '60.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '18000.00', '300.00', '0.00', '1', '', NULL, NULL, '1', '3');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('80', '59', '57', '7', '200.00', '225.00', '225.00', '0', '0.00', '0', '0.00', '45000.00', '225.00', '0.00', '1', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('81', '59', '57', '8', '250.00', '220.00', '220.00', '0', '0.00', '0', '0.00', '55000.00', '220.00', '0.00', '1', '', NULL, NULL, '3', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('82', '60', '58', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('83', '61', '59', '3', '100.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '24500.00', '245.00', '0.00', '1', '', NULL, NULL, '1', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('84', '62', '60', '3', '900.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '220500.00', '245.00', '0.00', '1', '', NULL, NULL, '1', '45');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('85', '63', '61', '3', '1000.00', '280.00', '280.00', '0', '0.00', '0', '0.00', '280000.00', '280.00', '0.00', '1', '', NULL, NULL, '1', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('86', '64', '62', '3', '100.00', '239.14', '239.14', '0', '0.00', '0', '0.00', '23914.00', '239.14', '0.00', '1', '', NULL, NULL, '1', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('87', '65', '63', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('88', '66', '64', '8', '150.00', '235.00', '235.00', '0', '0.00', '0', '0.00', '35250.00', '235.00', '0.00', '1', '', NULL, NULL, '3', '15');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('89', '67', '65', '3', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('90', '68', '66', '3', '200.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '60400.00', '302.00', '0.00', '1', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('91', '68', '66', '5', '200.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '49400.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('92', '69', '67', '2', '510.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '153000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '85');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('93', '70', '68', '2', '90.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '27000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '15');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('94', '71', '69', '2', '120.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '36000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('95', '72', '70', '3', '200.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '60000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('96', '72', '70', '4', '300.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '73500.00', '245.00', '100.00', '3', '', NULL, NULL, '2', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('97', '73', '71', '3', '100.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '30000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('98', '74', '72', '3', '200.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '60000.00', '300.00', '0.00', '1', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('99', '75', '73', '2', '180.00', '303.00', '303.00', '0', '0.00', '0', '0.00', '54540.00', '303.00', '0.00', '1', '', NULL, NULL, '2', '30');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('100', '75', '73', '4', '180.00', '249.00', '249.00', '0', '0.00', '0', '0.00', '44820.00', '249.00', '90.91', '1', '', NULL, NULL, '2', '30');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('101', '76', '74', '2', '120.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '36000.00', '300.00', '0.00', '1', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('102', '76', '74', '3', '60.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '18000.00', '300.00', '0.00', '1', '', NULL, NULL, '1', '3');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('103', '77', '75', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('104', '78', '76', '7', '200.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '46000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('105', '79', '77', '2', '300.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '90600.00', '302.00', '0.00', '1', '', NULL, NULL, '2', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('106', '79', '77', '4', '540.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '133380.00', '247.00', '69.93', '1', '', NULL, NULL, '2', '90');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('107', '79', '77', '7', '1000.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '230000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('108', '80', '78', '7', '500.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '100000.00', '200.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('109', '81', '79', '7', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('110', '82', '80', '7', '500.00', '200.00', '200.00', '0', '0.00', '0', '0.00', '100000.00', '200.00', '0.00', '1', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('111', '83', '81', '2', '150.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '45000.00', '300.00', '0.00', '1', '', NULL, NULL, '2', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('112', '83', '81', '3', '200.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '60000.00', '300.00', '0.00', '1', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('113', '83', '81', '4', '150.00', '250.00', '250.00', '0', '0.00', '0', '0.00', '37500.00', '250.00', '64.55', '1', '', NULL, NULL, '2', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('114', '83', '81', '5', '300.00', '250.00', '250.00', '0', '0.00', '0', '0.00', '75000.00', '250.00', '0.00', '1', '', NULL, NULL, '1', '15');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('115', '84', '82', '2', '510.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '153000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '85');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('116', '84', '82', '4', '510.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '124950.00', '245.00', '64.55', '3', '', NULL, NULL, '2', '85');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('117', '84', '82', '5', '300.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '73500.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '15');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('118', '85', '83', '2', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('119', '85', '83', '3', '200.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '60000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('120', '85', '83', '4', '180.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '44100.00', '245.00', '64.55', '3', '', NULL, NULL, '2', '30');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('121', '85', '83', '5', '200.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '49000.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('122', '86', '84', '2', '510.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '153000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '85');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('123', '86', '84', '3', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '15');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('124', '86', '84', '4', '510.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '124950.00', '245.00', '64.55', '3', '', NULL, NULL, '2', '85');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('125', '86', '84', '5', '200.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '49000.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('126', '87', '85', '2', '90.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '27000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '15');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('127', '87', '85', '4', '600.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '147000.00', '245.00', '64.55', '3', '', NULL, NULL, '2', '100');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('128', '88', '86', '2', '600.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '180000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '100');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('129', '89', '87', '3', '100.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '30000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('130', '90', '88', '3', '340.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '102000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '17');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('131', '91', '89', '5', '500.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '122500.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('132', '92', '90', '2', '330.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '99000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '55');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('133', '92', '90', '3', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '15');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('134', '93', '91', '2', '510.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '153000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '85');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('135', '94', '92', '3', '180.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '54000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '9');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('136', '94', '92', '4', '120.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '29400.00', '245.00', '64.55', '3', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('137', '95', '93', '5', '200.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '49000.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('138', '96', '94', '2', '270.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '81000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '45');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('139', '97', '95', '2', '510.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '153000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '85');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('140', '98', '96', '3', '500.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '150000.00', '300.00', '0.00', '3', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('141', '98', '96', '5', '500.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '122500.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '25');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('142', '99', '97', '2', '120.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '36000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('143', '99', '97', '4', '120.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '29400.00', '245.00', '64.55', '3', '', NULL, NULL, '2', '20');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('144', '99', '97', '5', '200.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '49000.00', '245.00', '0.00', '3', '', NULL, NULL, '1', '10');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('145', '100', '98', '2', '300.00', '300.00', '300.00', '0', '0.00', '0', '0.00', '90000.00', '300.00', '0.00', '3', '', NULL, NULL, '2', '50');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('146', '101', '99', '2', '5.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '0.00', '0.00', '0.00', '2', '', NULL, NULL, '0', '0');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('147', '101', '99', '3', '1.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '0.00', '0.00', '0.00', '2', '', NULL, NULL, '0', '0');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('148', '102', '100', '3', '100.00', '302.00', '302.00', '0', '0.00', '0', '0.00', '30200.00', '302.00', '0.00', '1', '', NULL, NULL, '1', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('149', '102', '100', '5', '100.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '24700.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('150', '103', '101', '5', '100.00', '247.00', '247.00', '0', '0.00', '0', '0.00', '24700.00', '247.00', '0.00', '1', '', NULL, NULL, '1', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('151', '103', '101', '8', '50.00', '235.00', '235.00', '0', '0.00', '0', '0.00', '11750.00', '235.00', '0.00', '1', '', NULL, NULL, '3', '5');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('152', '104', '102', '3', '20.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '4900.00', '245.00', '0.00', '1', '', NULL, NULL, '1', '1');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('153', '105', '103', '3', '20.00', '245.00', '245.00', '0', '0.00', '0', '0.00', '4900.00', '245.00', '0.00', '1', '', NULL, NULL, '1', '1');
INSERT INTO `tec_sale_items_log` (`id`, `sale_id`, `sale_log_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `warranty_year`, `warranty_date`, `return_item_id`, `qnty_type`, `per_type_qnty`) VALUES ('154', '106', '104', '3', '200.00', '235.00', '235.00', '0', '0.00', '0', '0.00', '47000.00', '235.00', '0.00', '1', '', NULL, NULL, '1', '10');


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
  `mf_tr_id` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('7', '2023-03-16 21:53:42', '3', 'MADARIPUR STORE', '270000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '270000.00', '1', '900.00', '0.00', '35', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-16', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('8', '2023-03-16 21:54:50', '4', 'ESHAR UDDIN BROTHER', '36000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '36000.00', '1', '120.00', '0.00', '35', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-16', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('9', '2023-03-18 21:40:02', '20', 'MR DULAL', '54000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '54000.00', '2', '180.00', '54000.00', '35', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'TT', NULL, NULL, '7', '0', '0', '2023-03-18', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('10', '2023-03-18 21:42:45', '24', 'GLOBE BISCUIT', '73500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '73500.00', '1', '300.00', '70000.00', '35', NULL, NULL, NULL, '', 'partial', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-18', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('11', '2023-03-18 21:48:51', '3', 'MADARIPUR STORE', '72000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '72000.00', '1', '240.00', '0.00', '35', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-18', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('12', '2023-03-19 19:13:18', '45', 'NION ENTERPRISE', '90900.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '90900.00', '1', '300.00', '0.00', '42', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('13', '2023-03-19 19:24:34', '62', 'SELIM PERFUMERY  ', '79060.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '79060.00', '2', '280.00', '0.00', '42', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('14', '2023-03-19 19:26:51', '8', 'AL MONIR CHEMICAL', '44460.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '44460.00', '1', '180.00', '44460.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('15', '2023-03-19 19:38:23', '61', 'SATKHIRA PERFUMERY ', '44460.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '44460.00', '1', '180.00', '0.00', '42', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('16', '2023-03-19 19:40:14', '63', 'SELINA PERFUMERY', '74940.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '74940.00', '2', '270.00', '0.00', '42', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('17', '2023-03-19 19:43:06', '23', 'FUWANG FOOD', '230000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '230000.00', '1', '1000.00', '230000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('18', '2023-03-19 19:46:06', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', '15000', '15000.00', '15000.00', '115000.00', '1', '500.00', '115000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('19', '2023-03-19 19:57:42', '3', 'MADARIPUR STORE', '519150.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '519150.00', '2', '1890.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-19', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('20', '2023-03-19 19:58:29', '4', 'ESHAR UDDIN BROTHER', '29400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '29400.00', '1', '120.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-19', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('21', '2023-03-19 20:00:45', '69', 'BARISAL STORE', '49000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '49000.00', '1', '200.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-19', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('22', '2023-03-19 20:01:21', '69', 'BARISAL STORE', '73500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '73500.00', '1', '300.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-19', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('23', '2023-03-19 20:02:08', '70', 'JS CORPORATION', '122500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '122500.00', '1', '500.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-19', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('24', '2023-03-19 20:20:53', '71', 'ALLAHR DAAN', '22590.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '22590.00', '3', '80.00', '22590.00', '35', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'TT', NULL, NULL, '16', '0', '0', '2023-03-19', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('25', '2023-03-19 20:21:56', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', '15%', '15000.00', '15000.00', '115000.00', '1', '500.00', '115000.00', '35', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-19', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('26', '2023-03-20 22:55:19', '72', 'RAMJAN ALI STORE', '277950.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '277950.00', '2', '1020.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('27', '2023-03-20 22:56:25', '3', 'MADARIPUR STORE', '266400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '266400.00', '2', '1020.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('28', '2023-03-20 23:20:15', '22', 'FARID RAXIN', '159200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '159200.00', '2', '600.00', '159200.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'TT', NULL, NULL, '20', '0', '0', '2023-03-21', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('29', '2023-03-20 23:24:03', '12', 'AMJAD SHAHEB', '27270.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '27270.00', '1', '90.00', '27270.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Cheque', NULL, NULL, '21', '0', '0', '2023-03-21', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('30', '2023-03-20 23:26:14', '8', 'AL MONIR CHEMICAL', '84810.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '84810.00', '3', '330.00', '84810.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('31', '2023-03-20 23:30:13', '73', 'NOJOR ALI', '47880.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '47880.00', '2', '180.00', '47880.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'TT', NULL, NULL, '22', '0', '0', '2023-03-21', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('32', '2023-03-20 23:35:23', '44', 'NACHIM PERFUMERY', '20480.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '20480.00', '2', '70.00', '0.00', '42', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('33', '2023-03-20 23:37:01', '62', 'SELIM PERFUMERY  ', '67500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '67500.00', '1', '300.00', '0.00', '42', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('34', '2023-03-20 23:38:12', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', '15%', '15000.00', '15000.00', '115000.00', '1', '500.00', '115000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('37', '2023-03-21 17:22:48', '74', 'DIVINE TRADE LINK', '139000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '139000.00', '2', '500.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('38', '2023-03-21 17:23:51', '4', 'ESHAR UDDIN BROTHER', '69500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '69500.00', '2', '250.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('39', '2023-03-21 17:24:33', '75', 'AL AMIN STORE', '54000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '54000.00', '1', '180.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('40', '2023-03-21 17:25:20', '3', 'MADARIPUR STORE', '124950.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '124950.00', '1', '510.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('41', '2023-03-21 17:32:13', '16', 'BASUDEB DOTTO', '45750.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '45750.00', '1', '150.00', '45750.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'TT', NULL, NULL, '23', '0', '0', '2023-03-21', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('42', '2023-03-21 17:33:50', '27', 'JIHAD STORE', '45000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '45000.00', '1', '200.00', '45000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'TT', NULL, NULL, '24', '0', '0', '2023-03-21', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('43', '2023-03-21 17:34:56', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', '15%', '15000.00', '15000.00', '115000.00', '1', '500.00', '115000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-22', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('44', '2023-03-23 14:45:05', '70', 'JS CORPORATION', '180000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '180000.00', '1', '600.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-22', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('45', '2023-03-24 21:42:11', '17', 'COCOLA FOOD PRODUCTS LTD', '125000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '125000.00', '1', '500.00', '125000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-25', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('46', '2023-03-24 21:43:18', '8', 'AL MONIR CHEMICAL', '44460.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '44460.00', '1', '180.00', '44460.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-25', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('47', '2023-03-24 21:44:38', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '115000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-25', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('48', '2023-03-26 14:04:31', '13', 'ASLAM SHAHEB', '75800.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '75800.00', '2', '340.00', '75800.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-27', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('49', '2023-03-26 14:09:06', '48', 'NURJAHAN PERFUMERY', '164100.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '164100.00', '2', '700.00', '0.00', '42', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-27', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('50', '2023-03-26 14:10:45', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '115000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-27', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('51', '2023-03-26 14:14:33', '4', 'ESHAR UDDIN BROTHER', '74400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '74400.00', '2', '270.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-25', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('52', '2023-03-26 14:16:31', '76', 'HAMID & BROTHERS', '60000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '60000.00', '1', '200.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-27', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('53', '2023-03-26 14:18:02', '75', 'AL AMIN STORE', '69200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '69200.00', '3', '260.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '1', '1', '2023-03-25', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('54', '2023-03-30 15:32:33', '29', 'JUBAER STORE', '48320.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '48320.00', '2', '160.00', '48320.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'TT', NULL, NULL, '33', '0', '0', '2023-03-28', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('55', '2023-03-30 15:34:37', '8', 'AL MONIR CHEMICAL', '82240.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '82240.00', '2', '320.00', '82240.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-28', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('56', '2023-03-30 15:36:16', '62', 'SELIM PERFUMERY  ', '59280.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '59280.00', '1', '240.00', '59280.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'TT', NULL, NULL, '34', '0', '0', '2023-03-28', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('57', '2023-03-30 15:38:00', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '115000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-28', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('58', '2023-03-30 15:40:18', '20', 'MR DULAL', '54000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '54000.00', '2', '180.00', '54000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'TT', NULL, NULL, '35', '0', '0', '2023-03-29', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('59', '2023-03-30 15:44:08', '13', 'ASLAM SHAHEB', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '100000.00', '2', '450.00', '0.00', '42', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-29', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('60', '2023-03-30 15:47:07', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '115000.00', '42', NULL, NULL, NULL, 'PO NUM&colon;- 2023-000230F', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-29', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('61', '2023-03-30 15:50:05', '67', 'TK FOOD PRODUCTS DISTRIBUTION LTD', '24500.00', '0.00', NULL, '0.00', '0.00', '0.00', '15%', '3675.00', '3675.00', '28175.00', '1', '100.00', '28175.00', '42', NULL, NULL, NULL, 'PO NUM &colon;- RMMAR28032023J', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('62', '2023-03-30 15:58:38', '67', 'TK FOOD PRODUCTS DISTRIBUTION LTD', '220500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '220500.00', '1', '900.00', '197511.00', '42', NULL, NULL, NULL, 'PO NUM &colon;- RMMAR28032023J', 'partial', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('63', '2023-03-30 16:09:10', '56', 'RANI FOOD INDUSTRIES LTD', '280000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '280000.00', '1', '1000.00', '0.00', '42', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('64', '2023-03-30 16:11:28', '54', 'PRIME PUSTI LTD', '23914.00', '0.00', '1.10', '1.10', '1.10', '0.00', '3587.10', '3587.10', '3587.10', '27500.00', '1', '100.00', '0.00', '42', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('65', '2023-03-30 16:12:18', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '115000.00', '42', NULL, NULL, NULL, 'PONO&colon;- 2023-000-230F', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('66', '2023-04-01 12:17:08', '49', 'OLYMPIYA BAKERY', '35250.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '35250.00', '1', '150.00', '0.00', '42', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-28', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('67', '2023-04-01 12:30:42', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '115000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', '1', NULL, '0', '0', '0', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('68', '2023-04-01 16:01:45', '8', 'AL MONIR CHEMICAL', '109800.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '109800.00', '2', '400.00', '82760.00', '45', NULL, NULL, NULL, '', 'partial', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-02', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('69', '2023-04-02 13:46:39', '70', 'JS CORPORATION', '153000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '153000.00', '1', '510.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-27', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('70', '2023-04-02 13:48:54', '77', 'AFSHIN ENTERPRISE', '27000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '27000.00', '1', '90.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-28', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('71', '2023-04-02 13:50:24', '69', 'BARISAL STORE', '36000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '36000.00', '1', '120.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-28', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('72', '2023-04-02 13:53:39', '78', 'SELIM & BROTHERS', '133500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '133500.00', '2', '500.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-28', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('73', '2023-04-02 13:54:42', '4', 'ESHAR UDDIN BROTHER', '30000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '30000.00', '1', '100.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-29', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('74', '2023-04-03 15:13:55', '32', 'MAMONI BREAD', '60000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '60000.00', '1', '200.00', '0.00', '42', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-04', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('75', '2023-04-03 15:15:54', '62', 'SELIM PERFUMERY  ', '99360.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '99360.00', '2', '360.00', '99360.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'TT', NULL, NULL, '40', '0', '0', '2023-04-04', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('76', '2023-04-03 15:19:18', '20', 'MR DULAL', '54000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '54000.00', '2', '180.00', '54000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'TT', NULL, NULL, '41', '0', '0', '2023-04-04', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('77', '2023-04-06 11:03:02', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '115000.00', '42', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-04-03', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('78', '2023-04-06 11:38:11', '8', 'AL MONIR CHEMICAL', '46000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '46000.00', '1', '200.00', '0.00', '35', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-05', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('79', '2023-04-06 12:12:38', '64', 'SHAHAJALAL PERFUME', '453980.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '453980.00', '3', '1840.00', '0.00', '35', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-04-05', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('81', '2023-04-06 12:23:59', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '0.00', '35', NULL, NULL, NULL, 'po num&colon;- rfbl po -2023-000466h', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-04', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('82', '2023-04-06 12:30:07', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', '15%', '15000.00', '15000.00', '115000.00', '1', '500.00', '0.00', '35', NULL, NULL, NULL, 'po num&colon;- rfbl po -2023-000466h', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-05', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('83', '2023-04-06 12:57:03', '65', 'SHAHED AND BROTHERS', '217500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '217500.00', '4', '800.00', '0.00', '35', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-04-05', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('84', '2023-04-08 11:48:02', '70', 'JS CORPORATION', '351450.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '351450.00', '3', '1320.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('85', '2023-04-08 11:50:24', '75', 'AL AMIN STORE', '243100.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '243100.00', '4', '880.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('86', '2023-04-08 11:55:18', '79', 'ABED STORE', '416950.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '416950.00', '4', '1520.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('87', '2023-04-08 11:57:04', '72', 'RAMJAN ALI STORE', '174000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '174000.00', '2', '690.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('88', '2023-04-08 11:58:03', '72', 'RAMJAN ALI STORE', '180000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '180000.00', '1', '600.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-02', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('89', '2023-04-08 11:58:58', '4', 'ESHAR UDDIN BROTHER', '30000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '30000.00', '1', '100.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-02', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('90', '2023-04-08 11:59:39', '76', 'HAMID & BROTHERS', '102000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '102000.00', '1', '340.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-02', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('91', '2023-04-08 12:00:36', '70', 'JS CORPORATION', '122500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '122500.00', '1', '500.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-02', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('92', '2023-04-08 12:02:14', '76', 'HAMID & BROTHERS', '189000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '189000.00', '2', '630.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-02', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('93', '2023-04-08 12:03:00', '70', 'JS CORPORATION', '153000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '153000.00', '1', '510.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-03', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('94', '2023-04-08 12:05:15', '77', 'AFSHIN ENTERPRISE', '83400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '83400.00', '2', '300.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-03', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('95', '2023-04-08 12:06:02', '79', 'ABED STORE', '49000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '49000.00', '1', '200.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-04-03', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('96', '2023-04-08 12:07:30', '76', 'HAMID & BROTHERS', '81000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '81000.00', '1', '270.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-04', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('97', '2023-04-08 12:08:20', '77', 'AFSHIN ENTERPRISE', '153000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '153000.00', '1', '510.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-04', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('98', '2023-04-08 12:09:33', '72', 'RAMJAN ALI STORE', '272500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '272500.00', '2', '1000.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-04', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('99', '2023-04-08 12:15:54', '4', 'ESHAR UDDIN BROTHER', '114400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '114400.00', '3', '440.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-06', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('100', '2023-04-08 12:18:11', '70', 'JS CORPORATION', '90000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '90000.00', '1', '300.00', '0.00', '43', NULL, NULL, NULL, '', 'due', '0.00', '3', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-06', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('101', '2023-04-08 16:49:56', '80', 'TEST', '0.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '0.00', '2', '6.00', '0.00', '35', NULL, NULL, NULL, '', 'paid', '0.00', '2', 'sale', NULL, 'Not', 'cash', NULL, NULL, '0', '0', '0', '2023-04-08', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('102', '2023-04-08 16:58:44', '8', 'AL MONIR CHEMICAL', '54900.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '54900.00', '2', '200.00', '0.00', '35', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-09', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('103', '2023-04-08 17:15:39', '18', 'DESHI FOOD', '36450.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '36450.00', '2', '150.00', '36450.00', '35', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'Cash', NULL, NULL, '52', '0', '0', '2023-04-09', '1', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('105', '2023-04-08 17:21:14', '81', 'DEKKO FOOD', '4900.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '4900.00', '1', '20.00', '0.00', '35', NULL, NULL, NULL, '', 'due', '0.00', '1', 'sale', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-09', '3', '1', '0');
INSERT INTO `tec_sales` (`id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `mf_tr_id`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `service_id`, `warranty`, `paid_by`, `return_id`, `invno`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('106', '2023-04-08 17:27:36', '43', 'NABISCO BISCUITS', '47000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '47000.00', '1', '200.00', '47000.00', '35', NULL, NULL, NULL, '', 'paid', '0.00', '1', 'sale', NULL, 'Not', 'cash', NULL, NULL, '56', '0', '0', '2023-04-09', '1', '1', '0');


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
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('1', '1', '2023-03-12 10:56:58', '1', 'test customer', '200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '200.00', '1', '1.00', '200.00', '43', NULL, NULL, '', 'paid', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Cash', NULL, NULL, '1', '0', '0', '2023-03-12', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('2', '2', '2023-03-12 16:17:59', '1', 'test customer', '400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '400.00', '1', '2.00', '400.00', '1', NULL, NULL, '', 'paid', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'cash', NULL, NULL, '2', '0', '0', '2023-03-12', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('3', '3', '2023-03-12 16:20:13', '1', 'test customer', '200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '200.00', '1', '1.00', '200.00', '1', NULL, NULL, '', 'paid', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '3', '0', '0', '2023-03-12', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('4', '4', '2023-03-12 16:20:56', '1', 'test customer', '200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '200.00', '1', '1.00', '200.00', '1', NULL, NULL, '', 'paid', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Cheque', NULL, NULL, '4', '0', '0', '2023-03-12', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('5', '7', '2023-03-16 21:53:42', '3', 'MADARIPUR STORE', '270000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '270000.00', '1', '900.00', '0.00', '35', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-16', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('6', '8', '2023-03-16 21:54:50', '4', 'ESHAR UDDIN BROTHER', '36000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '36000.00', '1', '120.00', '0.00', '35', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-16', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('7', '9', '2023-03-18 21:40:02', '20', 'MR DULAL', '54000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '54000.00', '2', '180.00', '54000.00', '35', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '7', '0', '0', '2023-03-18', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('8', '10', '2023-03-18 21:42:45', '24', 'GLOBE BISCUIT', '73500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '73500.00', '1', '300.00', '0.00', '35', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-18', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('9', '11', '2023-03-18 21:48:51', '3', 'MADARIPUR STORE', '72000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '72000.00', '1', '240.00', '0.00', '35', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-18', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('10', '12', '2023-03-19 19:13:18', '45', 'NION ENTERPRISE', '90900.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '90900.00', '1', '300.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('11', '13', '2023-03-19 19:24:34', '62', 'SELIM PERFUMERY  ', '79060.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '79060.00', '2', '280.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('12', '14', '2023-03-19 19:26:51', '8', 'AL MONIR CHEMICAL', '44460.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '44460.00', '1', '180.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('13', '15', '2023-03-19 19:38:23', '61', 'SATKHIRA PERFUMERY ', '44460.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '44460.00', '1', '180.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('14', '16', '2023-03-19 19:40:14', '63', 'SELINA PERFUMERY', '74940.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '74940.00', '2', '270.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('15', '17', '2023-03-19 19:43:06', '23', 'FUWANG FOOD', '230000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '230000.00', '1', '1000.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('16', '18', '2023-03-19 19:46:06', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', '15000', '15000.00', '15000.00', '115000.00', '1', '500.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('17', '19', '2023-03-19 19:57:42', '3', 'MADARIPUR STORE', '519150.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '519150.00', '2', '1890.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-19', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('18', '20', '2023-03-19 19:58:29', '4', 'ESHAR UDDIN BROTHER', '29400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '29400.00', '1', '120.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-19', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('19', '21', '2023-03-19 20:00:45', '69', 'BARISAL STORE', '49000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '49000.00', '1', '200.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-19', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('20', '22', '2023-03-19 20:01:21', '69', 'BARISAL STORE', '73500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '73500.00', '1', '300.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-19', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('21', '23', '2023-03-19 20:02:08', '70', 'JS CORPORATION', '122500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '122500.00', '1', '500.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-19', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('22', '24', '2023-03-19 20:20:53', '71', 'ALLAHR DAAN', '22590.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '22590.00', '3', '80.00', '22590.00', '35', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '16', '0', '0', '2023-03-19', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('23', '25', '2023-03-19 20:21:56', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', '15%', '15000.00', '15000.00', '115000.00', '1', '500.00', '0.00', '35', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-19', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('24', '26', '2023-03-20 22:55:19', '72', 'RAMJAN ALI STORE', '277950.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '277950.00', '2', '1020.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('25', '27', '2023-03-20 22:56:25', '3', 'MADARIPUR STORE', '266400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '266400.00', '2', '1020.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-20', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('26', '28', '2023-03-20 23:20:15', '22', 'FARID RAXIN', '159200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '159200.00', '2', '600.00', '159200.00', '42', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '20', '0', '0', '2023-03-21', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('27', '29', '2023-03-20 23:24:03', '12', 'AMJAD SHAHEB', '27270.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '27270.00', '1', '90.00', '27270.00', '42', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Cheque', NULL, NULL, '21', '0', '0', '2023-03-21', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('28', '30', '2023-03-20 23:26:14', '8', 'AL MONIR CHEMICAL', '84810.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '84810.00', '3', '330.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('29', '31', '2023-03-20 23:30:13', '73', 'NOJOR ALI', '47880.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '47880.00', '2', '180.00', '47880.00', '42', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '22', '0', '0', '2023-03-21', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('30', '32', '2023-03-20 23:35:23', '44', 'NACHIM PERFUMERY', '20480.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '20480.00', '2', '70.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('31', '33', '2023-03-20 23:37:01', '62', 'SELIM PERFUMERY  ', '67500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '67500.00', '1', '300.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('32', '34', '2023-03-20 23:38:12', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', '15%', '15000.00', '15000.00', '115000.00', '1', '500.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('33', '35', '2023-03-21 17:18:40', '74', 'DIVINE TRADE LINK', '90000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '90000.00', '1', '300.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('34', '36', '2023-03-21 17:20:11', '4', 'ESHAR UDDIN BROTHER', '45000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '45000.00', '1', '150.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('35', '37', '2023-03-21 17:22:48', '74', 'DIVINE TRADE LINK', '139000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '139000.00', '2', '500.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('36', '38', '2023-03-21 17:23:51', '4', 'ESHAR UDDIN BROTHER', '69500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '69500.00', '2', '250.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('37', '39', '2023-03-21 17:24:33', '75', 'AL AMIN STORE', '54000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '54000.00', '1', '180.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('38', '40', '2023-03-21 17:25:20', '3', 'MADARIPUR STORE', '124950.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '124950.00', '1', '510.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-21', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('39', '41', '2023-03-21 17:32:13', '16', 'BASUDEB DOTTO', '45750.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '45750.00', '1', '150.00', '45750.00', '42', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '23', '0', '0', '2023-03-21', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('40', '42', '2023-03-21 17:33:50', '27', 'JIHAD STORE', '45000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '45000.00', '1', '200.00', '45000.00', '42', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '24', '0', '0', '2023-03-21', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('41', '43', '2023-03-21 17:34:56', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', '15%', '15000.00', '15000.00', '115000.00', '1', '500.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-22', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('42', '44', '2023-03-23 14:45:05', '70', 'JS CORPORATION', '180000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '180000.00', '1', '600.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-22', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('43', '45', '2023-03-24 21:42:11', '17', 'COCOLA FOOD PRODUCTS LTD', '125000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '125000.00', '1', '500.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-25', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('44', '46', '2023-03-24 21:43:18', '8', 'AL MONIR CHEMICAL', '44460.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '44460.00', '1', '180.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-25', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('45', '47', '2023-03-24 21:44:38', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-25', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('46', '48', '2023-03-26 14:04:31', '13', 'ASLAM SHAHEB', '75800.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '75800.00', '2', '340.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-27', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('47', '49', '2023-03-26 14:09:06', '48', 'NURJAHAN PERFUMERY', '164100.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '164100.00', '2', '700.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-27', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('48', '50', '2023-03-26 14:10:45', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-27', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('49', '51', '2023-03-26 14:14:33', '4', 'ESHAR UDDIN BROTHER', '74400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '74400.00', '2', '270.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-25', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('50', '52', '2023-03-26 14:16:31', '76', 'HAMID & BROTHERS', '60000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '60000.00', '1', '200.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-27', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('51', '53', '2023-03-26 14:18:02', '75', 'AL AMIN STORE', '69200.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '69200.00', '3', '260.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '1', '1', '2023-03-25', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('52', '54', '2023-03-30 15:32:33', '29', 'JUBAER STORE', '48320.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '48320.00', '2', '160.00', '48320.00', '42', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '33', '0', '0', '2023-03-28', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('53', '55', '2023-03-30 15:34:37', '8', 'AL MONIR CHEMICAL', '82240.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '82240.00', '2', '320.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-28', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('54', '56', '2023-03-30 15:36:16', '62', 'SELIM PERFUMERY  ', '59280.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '59280.00', '1', '240.00', '59280.00', '42', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '34', '0', '0', '2023-03-28', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('55', '57', '2023-03-30 15:38:00', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-28', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('56', '58', '2023-03-30 15:40:18', '20', 'MR DULAL', '54000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '54000.00', '2', '180.00', '54000.00', '42', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '35', '0', '0', '2023-03-29', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('57', '59', '2023-03-30 15:44:08', '13', 'ASLAM SHAHEB', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '100000.00', '2', '450.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-29', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('58', '60', '2023-03-30 15:47:07', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '0.00', '42', NULL, NULL, 'PO NUM&colon;- 2023-000230F', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-29', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('59', '61', '2023-03-30 15:50:05', '67', 'TK FOOD PRODUCTS DISTRIBUTION LTD', '24500.00', '0.00', NULL, '0.00', '0.00', '0.00', '15%', '3675.00', '3675.00', '28175.00', '1', '100.00', '0.00', '42', NULL, NULL, 'PO NUM &colon;- RMMAR28032023J', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('60', '62', '2023-03-30 15:58:38', '67', 'TK FOOD PRODUCTS DISTRIBUTION LTD', '220500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '220500.00', '1', '900.00', '0.00', '42', NULL, NULL, 'PO NUM &colon;- RMMAR28032023J', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('61', '63', '2023-03-30 16:09:10', '56', 'RANI FOOD INDUSTRIES LTD', '280000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '280000.00', '1', '1000.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('62', '64', '2023-03-30 16:11:28', '54', 'PRIME PUSTI LTD', '23914.00', '0.00', '1.10', '1.10', '1.10', '0.00', '3587.10', '3587.10', '3587.10', '27500.00', '1', '100.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('63', '65', '2023-03-30 16:12:18', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '0.00', '42', NULL, NULL, 'PONO&colon;- 2023-000-230F', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('64', '66', '2023-04-01 12:17:08', '49', 'OLYMPIYA BAKERY', '35250.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '35250.00', '1', '150.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-03-28', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('65', '67', '2023-04-01 12:30:42', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('66', '68', '2023-04-01 16:01:45', '8', 'AL MONIR CHEMICAL', '109800.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '109800.00', '2', '400.00', '0.00', '45', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-02', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('67', '69', '2023-04-02 13:46:39', '70', 'JS CORPORATION', '153000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '153000.00', '1', '510.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-27', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('68', '70', '2023-04-02 13:48:54', '77', 'AFSHIN ENTERPRISE', '27000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '27000.00', '1', '90.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-28', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('69', '71', '2023-04-02 13:50:24', '69', 'BARISAL STORE', '36000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '36000.00', '1', '120.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-28', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('70', '72', '2023-04-02 13:53:39', '78', 'SELIM & BROTHERS', '133500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '133500.00', '2', '500.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-28', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('71', '73', '2023-04-02 13:54:42', '4', 'ESHAR UDDIN BROTHER', '30000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '30000.00', '1', '100.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-03-29', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('72', '74', '2023-04-03 15:13:55', '32', 'MAMONI BREAD', '60000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '60000.00', '1', '200.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-04', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('73', '75', '2023-04-03 15:15:54', '62', 'SELIM PERFUMERY  ', '99360.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '99360.00', '2', '360.00', '99360.00', '42', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '40', '0', '0', '2023-04-04', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('74', '76', '2023-04-03 15:19:18', '20', 'MR DULAL', '54000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '54000.00', '2', '180.00', '54000.00', '42', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'TT', NULL, NULL, '41', '0', '0', '2023-04-04', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('75', '77', '2023-04-06 11:03:02', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '0.00', '42', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-04-03', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('76', '78', '2023-04-06 11:38:11', '8', 'AL MONIR CHEMICAL', '46000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '46000.00', '1', '200.00', '0.00', '35', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-05', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('77', '79', '2023-04-06 12:12:38', '64', 'SHAHAJALAL PERFUME', '453980.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '453980.00', '3', '1840.00', '0.00', '35', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-04-05', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('78', '80', '2023-04-06 12:17:27', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', '15%', '15000.00', '15000.00', '115000.00', '1', '500.00', '0.00', '35', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-05', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('79', '81', '2023-04-06 12:23:59', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '115000.00', '1', '500.00', '0.00', '35', NULL, NULL, 'po num&colon;- rfbl po -2023-000466h', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-04', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('80', '82', '2023-04-06 12:30:07', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '100000.00', '0.00', NULL, '0.00', '0.00', '0.00', '15%', '15000.00', '15000.00', '115000.00', '1', '500.00', '0.00', '35', NULL, NULL, 'po num&colon;- rfbl po -2023-000466h', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-05', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('81', '83', '2023-04-06 12:57:03', '65', 'SHAHED AND BROTHERS', '217500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '217500.00', '4', '800.00', '0.00', '35', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-04-05', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('82', '84', '2023-04-08 11:48:02', '70', 'JS CORPORATION', '351450.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '351450.00', '3', '1320.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('83', '85', '2023-04-08 11:50:24', '75', 'AL AMIN STORE', '243100.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '243100.00', '4', '880.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('84', '86', '2023-04-08 11:55:18', '79', 'ABED STORE', '416950.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '416950.00', '4', '1520.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('85', '87', '2023-04-08 11:57:04', '72', 'RAMJAN ALI STORE', '174000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '174000.00', '2', '690.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-01', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('86', '88', '2023-04-08 11:58:03', '72', 'RAMJAN ALI STORE', '180000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '180000.00', '1', '600.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-02', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('87', '89', '2023-04-08 11:58:58', '4', 'ESHAR UDDIN BROTHER', '30000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '30000.00', '1', '100.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-02', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('88', '90', '2023-04-08 11:59:39', '76', 'HAMID & BROTHERS', '102000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '102000.00', '1', '340.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-02', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('89', '91', '2023-04-08 12:00:36', '70', 'JS CORPORATION', '122500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '122500.00', '1', '500.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-02', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('90', '92', '2023-04-08 12:02:14', '76', 'HAMID & BROTHERS', '189000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '189000.00', '2', '630.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-02', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('91', '93', '2023-04-08 12:03:00', '70', 'JS CORPORATION', '153000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '153000.00', '1', '510.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-03', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('92', '94', '2023-04-08 12:05:15', '77', 'AFSHIN ENTERPRISE', '83400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '83400.00', '2', '300.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-03', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('93', '95', '2023-04-08 12:06:02', '79', 'ABED STORE', '49000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '49000.00', '1', '200.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '0', '0', '2023-04-03', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('94', '96', '2023-04-08 12:07:30', '76', 'HAMID & BROTHERS', '81000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '81000.00', '1', '270.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-04', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('95', '97', '2023-04-08 12:08:20', '77', 'AFSHIN ENTERPRISE', '153000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '153000.00', '1', '510.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-04', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('96', '98', '2023-04-08 12:09:33', '72', 'RAMJAN ALI STORE', '272500.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '272500.00', '2', '1000.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-04', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('97', '99', '2023-04-08 12:15:54', '4', 'ESHAR UDDIN BROTHER', '114400.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '114400.00', '3', '440.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-06', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('98', '100', '2023-04-08 12:18:11', '70', 'JS CORPORATION', '90000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '90000.00', '1', '300.00', '0.00', '43', NULL, NULL, '', 'due', '0.00', '3', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-06', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('99', '101', '2023-04-08 16:49:56', '80', 'TEST', '0.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '0.00', '2', '6.00', '0.00', '35', NULL, NULL, '', 'paid', '0.00', '2', 'sale', 'insert', NULL, 'Not', 'cash', NULL, NULL, '0', '0', '0', '2023-04-08', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('100', '102', '2023-04-08 16:58:44', '8', 'AL MONIR CHEMICAL', '54900.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '54900.00', '2', '200.00', '0.00', '35', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-09', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('101', '103', '2023-04-08 17:15:39', '18', 'DESHI FOOD', '36450.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '36450.00', '2', '150.00', '36450.00', '35', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Cash', NULL, NULL, '52', '0', '0', '2023-04-09', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('102', '104', '2023-04-08 17:20:34', '81', 'DEKKO FOOD', '4900.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '4900.00', '1', '20.00', '4900.00', '35', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'cash', NULL, NULL, '53', '0', '0', '2023-04-09', '1', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('103', '105', '2023-04-08 17:21:14', '81', 'DEKKO FOOD', '4900.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '4900.00', '1', '20.00', '0.00', '35', NULL, NULL, '', 'due', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'Credit', NULL, NULL, '0', '30', '1', '2023-04-09', '3', '1', '0');
INSERT INTO `tec_sales_log` (`id`, `sale_id`, `date`, `customer_id`, `customer_name`, `total`, `product_discount`, `order_discount_id`, `order_discount`, `total_discount`, `product_tax`, `order_tax_id`, `order_tax`, `total_tax`, `grand_total`, `total_items`, `total_quantity`, `paid`, `created_by`, `updated_by`, `updated_at`, `note`, `status`, `rounding`, `store_id`, `sales_type`, `type`, `service_id`, `warranty`, `paid_by`, `expenses_id`, `return_id`, `collection_id`, `aging_day`, `aging_status`, `delivery_date`, `payment_status`, `sale_type`, `transfer_id`) VALUES ('104', '106', '2023-04-08 17:27:36', '43', 'NABISCO BISCUITS', '47000.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '47000.00', '1', '200.00', '47000.00', '35', NULL, NULL, '', 'paid', '0.00', '1', 'sale', 'insert', NULL, 'Not', 'cash', NULL, NULL, '56', '0', '0', '2023-04-09', '1', '1', '0');


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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tec_salesreturn` (`sreturn_id`, `date_submit`, `sale_id`, `customer_id`, `customer_name`, `total`, `paid`, `total_items`, `total_quantity`, `created_by`, `status`, `updated_at`, `store_id`) VALUES ('1', '2023-04-01 15:09:28', '67', '58', 'REEDISHA FOOD AND BEVERAGE LTD', '115000.00', '0.00', '1', '500', '35', 'returned', NULL, '1');


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

INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('00jg441ap6ncoula4jp340v85j', '203.95.220.28', '1679890866', '__ci_last_regenerate|i:1679890866;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('02v9j6m0ftct3jq7adbgk1k4nt', '203.95.220.28', '1680598976', '__ci_last_regenerate|i:1680598976;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('07tkt5cceo32s0hmpgh2afiqq6', '203.95.220.28', '1680761265', '__ci_last_regenerate|i:1680761105;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:17:\"teststaff@gdn.com\";username|s:9:\"test-staf\";email|s:17:\"teststaff@gdn.com\";user_id|s:2:\"48\";first_name|s:5:\"Test \";last_name|s:5:\"staff\";created_on|s:23:\"Tue 4 Apr 2023 02:57 PM\";old_last_login|s:10:\"1680760035\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"3\";store_id|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0iqqqgkav4q83bnlebn6cp2lte', '203.95.220.28', '1679392361', '__ci_last_regenerate|i:1679392060;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679390222\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0pum05hfdoankb94qcdn1vk5gf', '185.195.233.248', '1680649585', '__ci_last_regenerate|i:1680649585;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0skgljkknsclge3ceorbm5486g', '205.210.31.172', '1680320080', '__ci_last_regenerate|i:1680320080;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('123tsdpdh46d8sodggelacs601', '203.95.220.28', '1679289611', '__ci_last_regenerate|i:1679289611;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679283333\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1262q1gkrhcqfuthlsrv1vgglp', '52.14.73.113', '1679959006', '__ci_last_regenerate|i:1679959006;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('12tdffaud2i6kc4h7br5m9d65t', '203.95.220.28', '1680584494', '__ci_last_regenerate|i:1680584494;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('17dmbgqgsg8786dmijmgbseloc', '59.153.102.247', '1680512388', '__ci_last_regenerate|i:1680511976;identity|s:25:\"sarwar.golam452@gmail.com\";username|s:6:\"Sar123\";email|s:25:\"sarwar.golam452@gmail.com\";user_id|s:2:\"45\";first_name|s:5:\"GOLAM\";last_name|s:6:\"SARWAR\";created_on|s:23:\"Sat 1 Apr 2023 03:39 PM\";old_last_login|s:10:\"1680497213\";last_ip|s:14:\"59.153.102.247\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}register_id|s:1:\"6\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-04-01 15:57:10\";error|s:65:\"Access Denied! You don\'t have right to access the requested page.\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('17fqv8b4dkfa2m9k55s7ivl0rv', '171.67.70.233', '1679918785', '__ci_last_regenerate|i:1679918785;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('19l9va4sanprotq88j18sk36mn', '169.150.201.10', '1680753189', '__ci_last_regenerate|i:1680753189;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1adft9jhkeulbeevh9apkdavp1', '52.213.203.34', '1680328882', '__ci_last_regenerate|i:1680328882;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1ckmucev1si4kthu7uhhsbtjv1', '192.252.212.53', '1679621674', '__ci_last_regenerate|i:1679621674;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1gkp7l0g3b5trk3fgsdpjg4t0a', '103.20.141.4', '1680782877', '__ci_last_regenerate|i:1680782875;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1hgun2cplrqthi0oq9uo55ecpb', '198.235.24.174', '1680612319', '__ci_last_regenerate|i:1680612319;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1hqufs6po72takj1efn938mmsv', '45.248.151.243', '1680512037', '__ci_last_regenerate|i:1680512037;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680500936\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1l489baf93mlq4dpel5c87frie', '203.95.220.28', '1679294344', '__ci_last_regenerate|i:1679294344;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679289997\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1miqpbcldridoc1453t5bca9j0', '103.213.239.0', '1680719724', '__ci_last_regenerate|i:1680719244;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1680597932\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1ml8aq32tflunsuut6vdr861k8', '103.60.175.140', '1679852503', '__ci_last_regenerate|i:1679850887;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679728493\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1voitg57ptp2l22m5hgocnvr43', '87.236.176.33', '1679848471', '__ci_last_regenerate|i:1679848471;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('22ki8qsbto76b7ea249164d0io', '203.95.220.28', '1678603287', '__ci_last_regenerate|i:1678603170;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678592879\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('24rpp9spnpao1budlq0dnu56c3', '203.95.220.28', '1678701469', '__ci_last_regenerate|i:1678700894;error|s:68:\"<p>You have 3 failed login attempts. Please try after 10 minutes</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2o2jb0n1k3gqqogcp8ikkevetp', '52.14.73.113', '1679959006', '__ci_last_regenerate|i:1679959006;error|N;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2o97s8r6c6civmcnr8q1v8sfeq', '52.14.73.113', '1679959007', '__ci_last_regenerate|i:1679959007;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2qkjv8ab1c3kum08cc6h1ek5cj', '45.79.83.159', '1679587772', '__ci_last_regenerate|i:1679587772;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2u355br5n2q0o27nkdnsjkr7nt', '203.95.220.28', '1678700330', '__ci_last_regenerate|i:1678700323;error|s:37:\"<p>Login Failed, Please try again</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('352anmfkbfeg55rq864080e2d0', '203.95.220.28', '1680593047', '__ci_last_regenerate|i:1680592536;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680592474\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('35mmvhpo6j50noln5c3aqub5gg', '43.250.82.232', '1680781984', '__ci_last_regenerate|i:1680781983;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3607c4paf0hof5nv351ktk1ipj', '59.153.102.237', '1680459726', '__ci_last_regenerate|i:1680459712;identity|s:25:\"sarwar.golam452@gmail.com\";username|s:6:\"Sar123\";email|s:25:\"sarwar.golam452@gmail.com\";user_id|s:2:\"45\";first_name|s:5:\"GOLAM\";last_name|s:6:\"SARWAR\";created_on|s:23:\"Sat 1 Apr 2023 03:39 PM\";old_last_login|s:10:\"1680450357\";last_ip|s:14:\"59.153.102.237\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}error|s:65:\"Access Denied! You don\'t have right to access the requested page.\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3996gtpqb95rl8m3d4can93sgo', '65.154.226.171', '1679591296', '__ci_last_regenerate|i:1679591290;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3cnh768j5diphj92av4hcuq843', '45.248.151.243', '1679233412', '__ci_last_regenerate|i:1679233061;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679232737\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3indv9hf34218i0l7an2i04pn5', '203.95.220.28', '1679976302', '__ci_last_regenerate|i:1679976103;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679817654\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3m167vgiqkg277v6r4s9lav08p', '203.95.220.28', '1679728503', '__ci_last_regenerate|i:1679728489;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679563434\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3mg4432gaujap05qahnev01itg', '45.248.151.243', '1679074344', '__ci_last_regenerate|i:1679074344;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1679068330\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3mkoh59iokaotmj140i1j4o7a7', '34.245.217.67', '1680921301', '__ci_last_regenerate|i:1680921301;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3qlaeabifu75128ssgu0sibbqh', '203.95.220.28', '1679900079', '__ci_last_regenerate|i:1679900065;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679895088\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3s5f953de0002msq28hv176u16', '39.110.218.101', '1679587755', '__ci_last_regenerate|i:1679587755;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3u11rhf64pp773u65dtlcpht76', '59.153.102.247', '1680422139', '__ci_last_regenerate|i:1680421342;identity|s:25:\"sarwar.golam452@gmail.com\";username|s:6:\"Sar123\";email|s:25:\"sarwar.golam452@gmail.com\";user_id|s:2:\"45\";first_name|s:5:\"GOLAM\";last_name|s:6:\"SARWAR\";created_on|s:23:\"Sat 1 Apr 2023 03:39 PM\";old_last_login|s:10:\"1680421292\";last_ip|s:14:\"59.153.102.247\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}register_id|s:1:\"6\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-04-01 15:57:10\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4459nisc4qigcohae8a69jd4hf', '205.210.31.172', '1680320079', '__ci_last_regenerate|i:1680320079;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('44i31n3fba7pen6k8fd42stebl', '45.248.151.243', '1679393771', '__ci_last_regenerate|i:1679393771;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1679386612\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('45auht5l6q1nu2mkfmp64fvcv5', '45.248.151.243', '1679130124', '__ci_last_regenerate|i:1679130123;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4bnqpk44ftgf8kpqflv9qicdo9', '203.95.220.28', '1680512582', '__ci_last_regenerate|i:1680512503;error|s:37:\"<p>Login Failed, Please try again</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4bukh2t2skrfmrbudflpbcmen0', '203.95.220.28', '1680777044', '__ci_last_regenerate|i:1680777044;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4e35ceps18jab3v1fl4ot4gfkb', '203.95.220.28', '1678763164', '__ci_last_regenerate|i:1678763164;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4k1b9bcpom9ttdrku7il3ds5oc', '59.153.102.247', '1680767768', '__ci_last_regenerate|i:1680767752;error|s:37:\"<p>Login Failed, Please try again</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4kejq782kkvu8dhpn0jbbtbtkp', '47.88.94.28', '1679631316', '__ci_last_regenerate|i:1679631316;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4nflhtd9f283opm2ihgcuvvvf7', '169.150.201.10', '1680753189', '__ci_last_regenerate|i:1680753189;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4qs0faj6a92k1tpnknsdo2lc3t', '45.248.151.243', '1679297928', '__ci_last_regenerate|i:1679297928;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4t45v6hrlprhs18vtbubsfd2vg', '159.65.138.217', '1679587770', '__ci_last_regenerate|i:1679587770;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4u627ar8ete5kgfc3j6pudt46j', '167.248.133.36', '1680769707', '__ci_last_regenerate|i:1680769707;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4ujvnsp2i3b2pn32o5ar4pi6k3', '203.95.220.28', '1678943417', '__ci_last_regenerate|i:1678943417;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678884078\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}from_warehouse|s:1:\"2\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4vas7ja3qa6a3fj33q6crfo5it', '45.248.151.243', '1678558672', '__ci_last_regenerate|i:1678558661;error|s:41:\"<p>You can\'t login before 10:00:00 am</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('55epuuadto4dsg9t7296dmjqai', '45.248.151.243', '1678982275', '__ci_last_regenerate|i:1678981557;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1678858042\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"3\";rmspos|i:1;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('55ivofdeefl0v9cut3cj2i8cpc', '45.248.151.243', '1678628894', '__ci_last_regenerate|i:1678628838;identity|s:21:\"abircoleman@gmail.com\";username|s:13:\"staff_rafique\";email|s:21:\"abircoleman@gmail.com\";user_id|s:2:\"43\";first_name|s:10:\"MD RAFIQUL\";last_name|s:5:\"ISLAM\";created_on|s:24:\"Sun 12 Mar 2023 10:43 AM\";old_last_login|s:10:\"1678597265\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"3\";store_id|s:1:\"3\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"1\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 10:49:52\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5mba222paeeutr0c67schpq4ko', '203.95.220.28', '1680760100', '__ci_last_regenerate|i:1680760100;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5md8cpimomh7su7hlaam2nm1sa', '45.248.151.243', '1679389673', '__ci_last_regenerate|i:1679389673;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1679385833\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5t1ei90jeiqcd94f16qn5hrb7j', '203.95.220.28', '1680778536', '__ci_last_regenerate|i:1680778448;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680776919\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('616em6vtc3sced76n1tei74vop', '93.119.227.19', '1680730776', '__ci_last_regenerate|i:1680730776;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6554jvs589l997ka1s6lopgm7i', '160.202.147.6', '1680421275', '__ci_last_regenerate|i:1680421275;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('66mu63p6as5erutttblh3mnics', '159.65.138.217', '1679587770', '__ci_last_regenerate|i:1679587770;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('66np3dlnj46b6m3dubjkjk74l5', '45.248.151.243', '1680172234', '__ci_last_regenerate|i:1680172224;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680171477\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('67q49b428i58sfih9nrbgdsvrv', '52.14.73.113', '1679959007', '__ci_last_regenerate|i:1679959007;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('69md4tnoe5oobie2r3v2fjeh5g', '203.95.220.28', '1679060133', '__ci_last_regenerate|i:1679060088;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679060088\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6a2fpvk48ns2ocfv7ac89h9vce', '52.14.73.113', '1679959007', '__ci_last_regenerate|i:1679959007;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6d3vnrk4gs4arf67j7ji89b50p', '65.154.226.166', '1679288684', '__ci_last_regenerate|i:1679288684;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6e1v0b554e37dk3p2in5of1aph', '45.248.151.243', '1679120957', '__ci_last_regenerate|i:1679120463;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1679077472\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6grhri403opek0fgt8glfpl3mf', '45.248.151.243', '1678597276', '__ci_last_regenerate|i:1678597271;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1678596725\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;message|s:38:\"<p>You are successfully logged in.</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6jaumq93hdn7e9f09468cc8qc5', '45.248.151.243', '1680506323', '__ci_last_regenerate|i:1680506323;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680500834\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;message|s:38:\"<p>You are successfully logged in.</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6lfet3l1fsua0242bp4dpuomke', '203.95.220.28', '1679227990', '__ci_last_regenerate|i:1679227978;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679209735\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6qq1fbo0a3vpidk708tcbqtjf1', '203.95.220.28', '1678687055', '__ci_last_regenerate|i:1678687054;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('704fuhq4d65j4sn5qtenb8hlmn', '202.134.10.136', '1679289404', '__ci_last_regenerate|i:1679289404;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('70fehe57df3im9qfb1j86837js', '203.95.220.28', '1679993847', '__ci_last_regenerate|i:1679993208;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679900069\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"2\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 16:17:19\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('77ht1utemhbtbbnk4qnfmq9m9v', '103.108.229.61', '1680652635', '__ci_last_regenerate|i:1680652635;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7dhn5kte82fq5ecn4adredqeht', '45.248.151.243', '1679077400', '__ci_last_regenerate|i:1679077400;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1679071344\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7fm6i70b1i8ikalob3envc30ia', '179.43.169.181', '1679587953', '__ci_last_regenerate|i:1679587953;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7jpnn1q2fscn3i7kj2mbr01tbg', '203.95.220.28', '1680677367', '__ci_last_regenerate|i:1680677367;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7phrmk9284ha2kgc4td1gppe6c', '171.67.70.233', '1679918785', '__ci_last_regenerate|i:1679918785;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8115a0mfeciq8bmtfi6jlnkau9', '45.248.151.243', '1680768975', '__ci_last_regenerate|i:1680768975;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680760979\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('85q4r8pl8r8qr58ebnuqehq0in', '171.67.70.233', '1679918784', '__ci_last_regenerate|i:1679918784;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('88ek2f7i3aaq5d1mkk6nh63o90', '192.252.212.53', '1679621675', '__ci_last_regenerate|i:1679621675;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8csaj5756hfdqvtm2fb6sa79n2', '45.248.151.243', '1680953375', '__ci_last_regenerate|i:1680952539;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680949507\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8k5cm8on5bump85551n1ql86uu', '162.142.125.226', '1680714714', '__ci_last_regenerate|i:1680714714;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8qnsoo295eoe1prcq7bd5psfrc', '203.95.220.28', '1678592925', '__ci_last_regenerate|i:1678592172;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678591650\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('939jfveq8n3spmqaag3tri0mom', '203.95.220.28', '1680782937', '__ci_last_regenerate|i:1680781950;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680778451\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"2\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 16:17:19\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9746m2ij3tiiup0heds7mclb8k', '195.74.76.198', '1679587736', '__ci_last_regenerate|i:1679587736;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('984gibf20gh8r1v756up6qf6kk', '45.248.151.243', '1678508287', '__ci_last_regenerate|i:1678507725;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678450440\";last_ip|s:14:\"103.87.138.109\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('98i81n66hsdg6kpr9bc8cvt51d', '203.95.220.28', '1679458557', '__ci_last_regenerate|i:1679458557;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679392064\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('98v2upi44hb56ld0q84sr6kon7', '203.95.220.28', '1679292356', '__ci_last_regenerate|i:1679292356;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679288958\";last_ip|s:14:\"202.134.10.136\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9bjtpdjjbu41g9en9vl2gh3v0h', '103.176.152.15', '1680078160', '__ci_last_regenerate|i:1680075992;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679993214\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"2\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 16:17:19\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9e738o07ljqee20r217pji6c17', '45.248.151.243', '1679065190', '__ci_last_regenerate|i:1679065190;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1679061513\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9id4r074v3uh3n6luhq9j6nq4l', '159.65.138.217', '1679587770', '__ci_last_regenerate|i:1679587770;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9ijc80utbs4fui8332fd11m38e', '103.196.232.134', '1680777960', '__ci_last_regenerate|i:1680777960;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9lnuug52fnevj6u1q36t2b9lqo', '59.153.102.247', '1680497244', '__ci_last_regenerate|i:1680497188;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:25:\"sarwar.golam452@gmail.com\";username|s:6:\"Sar123\";email|s:25:\"sarwar.golam452@gmail.com\";user_id|s:2:\"45\";first_name|s:5:\"GOLAM\";last_name|s:6:\"SARWAR\";created_on|s:23:\"Sat 1 Apr 2023 03:39 PM\";old_last_login|s:10:\"1680459715\";last_ip|s:14:\"59.153.102.237\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";error|s:65:\"Access Denied! You don\'t have right to access the requested page.\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9vl6a1ka7p50kg1aq9sl9ludfe', '203.95.220.28', '1678884925', '__ci_last_regenerate|i:1678883783;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678773284\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a1f4jipjklu9nfod1gv3tapi65', '203.95.220.28', '1679392048', '__ci_last_regenerate|i:1679392048;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679376526\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"2\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 16:17:19\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a4iibu9mqn34lqosrfg2puvc4u', '51.81.167.146', '1679593513', '__ci_last_regenerate|i:1679593513;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a5i9vreu04k990n4osg60k6t13', '203.95.220.28', '1680095163', '__ci_last_regenerate|i:1680095159;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a5l8jfd90agh3aa0hq6242e26r', '59.153.102.247', '1680339951', '__ci_last_regenerate|i:1680339951;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ad5jp9ni98kjie3phm720fj37m', '45.248.151.243', '1680764001', '__ci_last_regenerate|i:1680764001;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680757417\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('al6ac0hi3p47a8ohqe5is0orkq', '203.95.220.28', '1679060088', '__ci_last_regenerate|i:1679060088;error|s:37:\"<p>Login Failed, Please try again</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('an7bn0qmkvc9i34kpnjfhtk2j8', '203.95.220.28', '1679289730', '__ci_last_regenerate|i:1679289709;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679289099\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ap6ea6pe9i920ipbgpcgglv0nb', '171.67.70.229', '1679587759', '__ci_last_regenerate|i:1679587759;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b4fibb272i651n7ii5eh1h1m0o', '203.95.220.28', '1679565188', '__ci_last_regenerate|i:1679563428;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679556997\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b6in70619qm68gcm6puq2ru3ks', '205.210.31.170', '1680927693', '__ci_last_regenerate|i:1680927693;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bh29og2j9qhj4pd018tbfggjo0', '203.95.220.28', '1678617810', '__ci_last_regenerate|i:1678617810;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bor4f2ceha4j14dcl03pmncgke', '103.174.214.77', '1679713699', '__ci_last_regenerate|i:1679713699;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bq24tcb6mfl18qslr3um623lg3', '203.95.220.28', '1678684438', '__ci_last_regenerate|i:1678684437;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bqkjqcdcnb0uk90e65brkni9og', '103.213.239.2', '1680975350', '__ci_last_regenerate|i:1680975057;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1680757357\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bs14up00euj0vmtnf3cmrpe8cb', '179.43.169.181', '1679587953', '__ci_last_regenerate|i:1679587953;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c54btelmtgvkala5bvjapgv1sg', '203.95.220.28', '1678621166', '__ci_last_regenerate|i:1678621166;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678616945\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c6qhftd1fpgsqc7gg21ciefj0g', '45.248.151.243', '1679385818', '__ci_last_regenerate|i:1679385818;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1679377093\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('cfhnmiuj5oo9qiif5q5f7fhvec', '203.95.220.28', '1680584494', '__ci_last_regenerate|i:1680584494;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('cpu4onrk58kjb6boenqo3e926t', '133.242.140.127', '1679594886', '__ci_last_regenerate|i:1679594886;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('cqoud94c2rue7ea15fulju3glb', '203.95.220.28', '1678696864', '__ci_last_regenerate|i:1678696164;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d0s4sj7b3jl6ehir0b3v2jecei', '167.248.133.126', '1679386516', '__ci_last_regenerate|i:1679386516;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d8gpvqlmfq8fkrbcj4f1qa35lg', '93.119.227.19', '1680730776', '__ci_last_regenerate|i:1680730776;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('da8mste7esf8rg581huor05fm0', '45.248.151.243', '1680328991', '__ci_last_regenerate|i:1680328991;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1680170904\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dengdsic2a2h81luv8bb1l2sjv', '45.248.151.243', '1679078816', '__ci_last_regenerate|i:1679078805;error|s:41:\"<p>You can\'t login before 10:00:00 am</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dgbc0kqjlaan4cee64dbe1vg1n', '52.14.73.113', '1679959006', '__ci_last_regenerate|i:1679959006;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dhq4epqqfqiru05h6hhi1j1squ', '203.95.220.28', '1680168777', '__ci_last_regenerate|i:1680167963;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680076007\";last_ip|s:14:\"103.176.152.15\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dicu1kmh1bp1lb1nvcd2p613pu', '45.248.151.243', '1680415449', '__ci_last_regenerate|i:1680415449;error|s:37:\"<p>Login Failed, Please try again</p>\";__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680411130\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;message|s:38:\"<p>You are successfully logged in.</p>\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e207id8md1vd89becs47ae12s4', '202.134.10.136', '1679288978', '__ci_last_regenerate|i:1679288978;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e62etpcamlu4jqp92eskm4nag6', '45.248.151.243', '1679820141', '__ci_last_regenerate|i:1679818544;identity|s:21:\"abircoleman@gmail.com\";username|s:13:\"staff_rafique\";email|s:21:\"abircoleman@gmail.com\";user_id|s:2:\"43\";first_name|s:10:\"MD RAFIQUL\";last_name|s:5:\"ISLAM\";created_on|s:24:\"Sun 12 Mar 2023 10:43 AM\";old_last_login|s:10:\"1679818390\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"3\";store_id|s:1:\"3\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"1\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 10:49:52\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e77s4fuh390e5mk5e3d74r4n99', '45.248.151.243', '1680592954', '__ci_last_regenerate|i:1680592954;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('edi646cqf5dr1gdh4fml4t0ps7', '202.134.14.142', '1679306440', '__ci_last_regenerate|i:1679306440;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('eldn7g56kss4skhoocuq5b3dir', '203.95.220.28', '1680602232', '__ci_last_regenerate|i:1680602232;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('emov9mjlk8oo13n86cd73ke7l7', '45.248.151.243', '1679285144', '__ci_last_regenerate|i:1679285114;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679285044\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('enun945qtnfvmakva3hqfqstnu', '203.95.220.28', '1678784559', '__ci_last_regenerate|i:1678783515;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('etn362edculnlhr8rpa3to9bpj', '203.95.220.28', '1678952631', '__ci_last_regenerate|i:1678952631;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678941208\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('eug7bnj2fhkg90bj8togslgdvo', '69.4.89.106', '1680450439', '__ci_last_regenerate|i:1680450439;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f2bg14bl9f0r6p8q78ci9avh2m', '52.213.203.34', '1680328879', '__ci_last_regenerate|i:1680328879;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fgfn7e6touscdo27q60jqg5v01', '203.95.220.28', '1680585050', '__ci_last_regenerate|i:1680582434;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680581232\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;message|s:38:\"<p>You are successfully logged in.</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fhkfdgp5kehtocl00k29aft05s', '45.248.151.243', '1680333188', '__ci_last_regenerate|i:1680332898;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:21:\"golamsarwar@gmail.com\";username|s:21:\"golamsarwar@gmail.com\";email|s:21:\"golamsarwar@gmail.com\";user_id|s:2:\"44\";first_name|s:5:\"GOLAM\";last_name|s:6:\"SARWAR\";created_on|s:23:\"Sat 1 Apr 2023 12:47 PM\";old_last_login|s:10:\"1680332380\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"3\";store_id|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fmv9v3apbr9417b34042j6n1et', '203.95.220.28', '1678679707', '__ci_last_regenerate|i:1678679275;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678679052\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fqf0lbo18edlsg7ovaeb4ftei2', '207.241.231.45', '1680163974', '__ci_last_regenerate|i:1680163974;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fsmv90pg27fobs4raidfmapult', '93.119.227.91', '1679591325', '__ci_last_regenerate|i:1679591325;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fu0i94rjg5qkp63jhqsi47i5j7', '45.248.151.243', '1679673243', '__ci_last_regenerate|i:1679673236;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679672475\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fu2ptm8rueuvq17a93ojl8r6dn', '205.169.39.86', '1679593057', '__ci_last_regenerate|i:1679593056;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('g2qunm676f5apddvucjr905b37', '203.95.220.28', '1680765635', '__ci_last_regenerate|i:1680765635;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680757963\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:4:{s:7:\"message\";s:3:\"old\";s:7:\"csrfkey\";s:3:\"old\";s:9:\"csrfvalue\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}csrfkey|s:8:\"OsW4vdQ3\";csrfvalue|s:20:\"cJl5GbMd3V2qhxv4SHkK\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('gad5bme2dkbscdkvdfatu47ck5', '45.248.151.243', '1679550632', '__ci_last_regenerate|i:1679550586;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1679398267\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('gb5t59phionm1redjbi899c6fi', '203.95.220.28', '1680762908', '__ci_last_regenerate|i:1680762908;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('gcalhhq1qbver904fvlek4omjs', '203.95.220.28', '1678943423', '__ci_last_regenerate|i:1678943423;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('gg5c2o0j6vgn7femco0o74fsd1', '203.95.220.28', '1679900063', '__ci_last_regenerate|i:1679900063;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679890886\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;message|s:38:\"<p>You are successfully logged in.</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('giddq2llurr03ho0gt8rbd1vl8', '203.95.220.28', '1680355832', '__ci_last_regenerate|i:1680355800;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680167971\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('glt8baaneh1b47fj23nr5mdq56', '45.248.151.243', '1679297352', '__ci_last_regenerate|i:1679297352;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('gpoepohf8dg6ueppigosdt5m87', '52.14.73.113', '1679959005', '__ci_last_regenerate|i:1679959005;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('hghes6mf1r4su5d6q50ubj7o40', '47.88.94.28', '1679631317', '__ci_last_regenerate|i:1679631317;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('hjft4bf080930a9tapmiq94naq', '203.95.220.28', '1680599151', '__ci_last_regenerate|i:1680599072;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680598702\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('hk4ttn8l5hmu1k3mtv2nndk4ki', '205.210.31.39', '1680829953', '__ci_last_regenerate|i:1680829953;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('hk6654chafo8ogihrn465hjddr', '167.248.133.188', '1680738754', '__ci_last_regenerate|i:1680738754;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('hlhd42usfssvl2379ejua9amta', '203.95.220.28', '1680768723', '__ci_last_regenerate|i:1680768723;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680761121\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('hnt150h9euso0lqqovj9cvs83r', '203.95.220.28', '1679290623', '__ci_last_regenerate|i:1679289620;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679289325\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('hs34m99vj4l3n13sqk4d9ucqoo', '45.118.245.70', '1679333273', '__ci_last_regenerate|i:1679333273;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('i0lindfadbvkeckv6saulgqgs1', '59.153.102.247', '1680514249', '__ci_last_regenerate|i:1680513624;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680513085\";last_ip|s:14:\"59.153.102.247\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"1\";error|s:11:\"Credit Over\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ii1tlo6e8kn9bu0n1kq9b9me9h', '195.74.76.198', '1679587737', '__ci_last_regenerate|i:1679587737;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ikjqepi1up26m8eomu7cnll0mf', '45.248.151.243', '1679333918', '__ci_last_regenerate|i:1679333918;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ima8k6enj963vba7ggdij72on4', '45.248.151.243', '1679047555', '__ci_last_regenerate|i:1679047029;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679046848\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('iq3ji2pkfb85gu1n9tiq0bi7hj', '203.95.220.28', '1678701600', '__ci_last_regenerate|i:1678701326;error|s:68:\"<p>You have 3 failed login attempts. Please try after 10 minutes</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('j0o7336ekbpjuqbm56ke8nubbp', '203.95.220.28', '1679557003', '__ci_last_regenerate|i:1679556993;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679458567\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('j5dsj16sn5ei514ac7nuqrjcpj', '45.248.151.243', '1678703389', '__ci_last_regenerate|i:1678703389;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('j7roplmlg06n94m45dd2of1bbh', '203.95.220.28', '1680515530', '__ci_last_regenerate|i:1680514232;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680512344\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}message|s:36:\"Role Permission successfully updated\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('j8khppqvisoiqtove3j5occgea', '171.67.70.229', '1679587762', '__ci_last_regenerate|i:1679587762;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('jfaks2mc9tb77ceg8bhbvqbik8', '45.248.151.243', '1680592524', '__ci_last_regenerate|i:1680592524;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1680581134\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('jocbm0d11cknpu85544c6n3c63', '167.248.133.126', '1679386515', '__ci_last_regenerate|i:1679386515;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('jred03prdppr3b2lj96qr54g1r', '59.153.102.247', '1680339942', '__ci_last_regenerate|i:1680339942;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ju6v46f8ah8vv25bbmb39bnel0', '203.95.220.28', '1679459493', '__ci_last_regenerate|i:1679458561;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679455544\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('k4kbh42j450cc298tg9pkmtqqt', '203.95.220.28', '1679294387', '__ci_last_regenerate|i:1679294348;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679290576\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";error|s:19:\"Please Add Quantity\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('k5agm2jq04k087246kq6ckud5b', '171.67.70.229', '1679587762', '__ci_last_regenerate|i:1679587762;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('k71v2jaul1q5fqim030s4pq9mf', '45.248.151.243', '1680760966', '__ci_last_regenerate|i:1680760966;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680757324\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:4:{s:7:\"message\";s:3:\"old\";s:7:\"csrfkey\";s:3:\"old\";s:9:\"csrfvalue\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}csrfkey|s:8:\"rqvUjlfO\";csrfvalue|s:20:\"6QAcjJdLXSOUDkzhFi3r\";register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('k8154ddghptmsj0eftbbq4fb3e', '43.250.82.228', '1679850889', '__ci_last_regenerate|i:1679850889;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ke7hnbj7cvlaevfibbpbp6p27i', '203.95.220.28', '1679390232', '__ci_last_regenerate|i:1679390218;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679388635\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('kgjgdqaosv3g2ccokreu6jc2t2', '45.248.151.243', '1679235732', '__ci_last_regenerate|i:1679235407;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1679234793\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('kkqc10j0geb8jsefhdnvk8c91q', '203.95.220.28', '1680771463', '__ci_last_regenerate|i:1680771392;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"new\";}identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680770872\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;message|s:22:\"There are some problem\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ksm6gheu8j1j5t43gksbsmfl6p', '203.95.220.28', '1679054652', '__ci_last_regenerate|i:1679054287;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678966987\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"2\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 16:17:19\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ktq56jtgc1qqsnl8ijobbi6tfa', '162.142.125.226', '1680714713', '__ci_last_regenerate|i:1680714713;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('kvfqofotvvjo101t4uul58b8qh', '45.248.151.243', '1679561213', '__ci_last_regenerate|i:1679561213;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('l4e2b8pdbqev09k7fo3lb7636d', '198.235.24.41', '1680679944', '__ci_last_regenerate|i:1680679944;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('l5m2a2g8jl02igd0e04lhjm5o8', '203.95.220.28', '1679317299', '__ci_last_regenerate|i:1679317282;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679290057\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('l9n71eqqp9m3a5b6mun2u80195', '203.95.220.28', '1678687069', '__ci_last_regenerate|i:1678687069;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678679277\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}from_warehouse|s:1:\"2\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('lpecqdrgbmluqg7eqe2q83sob4', '45.248.151.243', '1680594197', '__ci_last_regenerate|i:1680593260;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680593161\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('m073m7a5ue8idids6vv6rrtid4', '133.242.174.119', '1679594886', '__ci_last_regenerate|i:1679594886;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('m232m38165mflblrg3p5n7et38', '203.95.220.28', '1678771026', '__ci_last_regenerate|i:1678771023;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678700872\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;message|s:38:\"<p>You are successfully logged in.</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('m2heakl9icpc32r9g1tc0g5fvj', '167.248.133.34', '1679381094', '__ci_last_regenerate|i:1679381094;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('m2mk3k1o45tgmdd3m4e1ng0qvs', '203.95.220.28', '1680425241', '__ci_last_regenerate|i:1680425234;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1680424905\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}error|s:65:\"Access Denied! You don\'t have right to access the requested page.\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('mcn61grvjoohq5vpn66puqulka', '93.119.227.91', '1679591325', '__ci_last_regenerate|i:1679591325;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('md78l2ksporqpvcl65av1lgcvr', '45.248.151.243', '1680777983', '__ci_last_regenerate|i:1680777957;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680777880\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"new\";}message|s:36:\"Role Permission successfully updated\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('mdidr8pie534kt2kghc0l80itb', '167.248.133.36', '1680769708', '__ci_last_regenerate|i:1680769708;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('menr9mh7nqq8nt067r2gjuper2', '203.95.220.28', '1679209960', '__ci_last_regenerate|i:1679209733;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679054383\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('msqjhfe36sotd2ahhgf4v2r566', '203.95.220.28', '1678855011', '__ci_last_regenerate|i:1678855011;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('mvlri86jcg805q33tc76lrpjrl', '203.95.220.28', '1680772451', '__ci_last_regenerate|i:1680772451;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680768745\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"new\";}message|s:36:\"Role Permission successfully updated\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('n61e18mp90r6r717kmsuo4j1tk', '69.4.89.106', '1680450438', '__ci_last_regenerate|i:1680450438;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('n6bmuhp0uphncs6hkseuf42no5', '203.95.220.28', '1678884105', '__ci_last_regenerate|i:1678884071;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678883792\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('niqqg1n27kv7sa1d3vv3pmqvg2', '103.87.138.107', '1680976185', '__ci_last_regenerate|i:1680976185;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('nkptntgufesm10khrder44evev', '203.95.220.28', '1679389256', '__ci_last_regenerate|i:1679389256;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('nnqbhts738lr3u9291uko5rur8', '171.67.70.229', '1679587757', '__ci_last_regenerate|i:1679587757;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ns99aj84p8v2rd801p1cj1572d', '171.67.70.233', '1679918785', '__ci_last_regenerate|i:1679918785;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('nvbjebr05pismpcf2jmc8it2vm', '203.95.220.28', '1680501678', '__ci_last_regenerate|i:1680501368;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680501120\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('o1k06e3njn2kldd8p90oll6un3', '202.134.10.136', '1679288870', '__ci_last_regenerate|i:1679288870;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('o68j8qficplpi6c5kg554es6hr', '203.95.220.28', '1678591766', '__ci_last_regenerate|i:1678591646;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678591378\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('odofovmmi5rjg603vgis584ai0', '59.153.102.247', '1680418795', '__ci_last_regenerate|i:1680418646;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:25:\"sarwar.golam452@gmail.com\";username|s:6:\"Sar123\";email|s:25:\"sarwar.golam452@gmail.com\";user_id|s:2:\"45\";first_name|s:5:\"GOLAM\";last_name|s:6:\"SARWAR\";created_on|s:23:\"Sat 1 Apr 2023 03:39 PM\";old_last_login|s:10:\"1680342635\";last_ip|s:14:\"59.153.102.247\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";register_id|s:1:\"6\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-04-01 15:57:10\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ojmvqaon3mc1jvm8e0ib533q1k', '203.95.220.28', '1680776908', '__ci_last_regenerate|i:1680776908;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680771399\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;register_id|s:1:\"2\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 16:17:19\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ol1kqk87u8ieo11j944rqefvfi', '45.248.151.243', '1678858034', '__ci_last_regenerate|i:1678858034;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('op3l8r4h2igrgs8jtimlh2c6in', '45.248.151.243', '1680420918', '__ci_last_regenerate|i:1680420918;error|s:37:\"<p>Login Failed, Please try again</p>\";__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680411175\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;message|s:38:\"<p>You are successfully logged in.</p>\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('or7h4kl4vqi41g4i0km5mi9f6f', '45.248.151.243', '1680773191', '__ci_last_regenerate|i:1680773191;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680768989\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('otcqsl16hstdnjsnqrebagqsvp', '45.248.151.243', '1680984233', '__ci_last_regenerate|i:1680983902;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680952541\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ouaulro1m9mr7799g0c25b6fl3', '59.153.102.247', '1680343510', '__ci_last_regenerate|i:1680341903;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:25:\"sarwar.golam452@gmail.com\";username|s:6:\"Sar123\";email|s:25:\"sarwar.golam452@gmail.com\";user_id|s:2:\"45\";first_name|s:5:\"GOLAM\";last_name|s:6:\"SARWAR\";created_on|s:23:\"Sat 1 Apr 2023 03:39 PM\";old_last_login|s:10:\"1680342342\";last_ip|s:14:\"59.153.102.247\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";register_id|s:1:\"6\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-04-01 15:57:10\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('p0t6ilnf2h0j0tjavebq2n4kdm', '45.248.151.243', '1680952539', '__ci_last_regenerate|i:1680952539;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680933069\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('p20dri037pru9sk5ifb1tk2klv', '203.95.220.28', '1680584564', '__ci_last_regenerate|i:1680583957;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680582440\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"2\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 16:17:19\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('p6almbm8d7nev0kmgvc78mds54', '203.95.220.28', '1680777729', '__ci_last_regenerate|i:1680777729;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680773017\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('p6eiuk3e0goo271t0m3r9nu8sl', '59.153.102.237', '1680450357', '__ci_last_regenerate|i:1680450350;identity|s:25:\"sarwar.golam452@gmail.com\";username|s:6:\"Sar123\";email|s:25:\"sarwar.golam452@gmail.com\";user_id|s:2:\"45\";first_name|s:5:\"GOLAM\";last_name|s:6:\"SARWAR\";created_on|s:23:\"Sat 1 Apr 2023 03:39 PM\";old_last_login|s:10:\"1680450283\";last_ip|s:14:\"59.153.102.237\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}error|s:65:\"Access Denied! You don\'t have right to access the requested page.\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('pcml3o0g6s6v9q361maljh52au', '203.95.220.28', '1679376552', '__ci_last_regenerate|i:1679376521;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679317284\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('pdvvioa2l18uhud1k8qddisfj9', '203.95.220.28', '1679313267', '__ci_last_regenerate|i:1679313267;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('pijgitoguhh7118lhif0ijlo4p', '203.95.220.28', '1678967128', '__ci_last_regenerate|i:1678966985;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678946173\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}from_warehouse|s:1:\"2\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('po56o6nd2hkkq4g9r22l0kt4jg', '203.95.220.28', '1678616962', '__ci_last_regenerate|i:1678616938;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678616159\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:5:\"error\";s:3:\"new\";}register_id|s:1:\"2\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 16:17:19\";store_id_pos|s:1:\"3\";error|s:11:\"Credit Over\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('po9jitalptvk2lisf56mhqjb1l', '162.142.125.11', '1680752393', '__ci_last_regenerate|i:1680752393;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('qcgkhuf7jquh4nmgjra50bt29n', '203.95.220.28', '1680761090', '__ci_last_regenerate|i:1680761090;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680753747\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('qfdsi713jb9v33dd0i4a2gclm6', '45.248.151.243', '1679068327', '__ci_last_regenerate|i:1679068327;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1679061552\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('qk5l6u2f3pnnbjhok8uecdtmgl', '167.248.133.34', '1679381093', '__ci_last_regenerate|i:1679381093;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('qlhvae1evpk5augucrge366ntn', '203.95.220.28', '1679288383', '__ci_last_regenerate|i:1679288383;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679227985\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('qll6dd9pbblbbl0q9jje6fmea9', '203.95.220.28', '1680760100', '__ci_last_regenerate|i:1680760100;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('qn9b5e2kf3d2j35o7jvtb6f9sg', '65.154.226.166', '1679288685', '__ci_last_regenerate|i:1679288685;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('r286phf02mj7hoff44mhrjpaj0', '203.95.220.28', '1678682954', '__ci_last_regenerate|i:1678682954;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678617824\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('r6t0n03p4f61cicsp2p0mtju1p', '203.95.220.28', '1680592474', '__ci_last_regenerate|i:1680592468;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680583961\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;message|s:38:\"<p>You are successfully logged in.</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('raqq7riehd55is8ld4q07b0oa2', '59.153.102.247', '1680343531', '__ci_last_regenerate|i:1680342882;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1680342489\";last_ip|s:14:\"59.153.102.247\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('rcf6csph9v7m98e79ssrev5f82', '51.81.167.146', '1679593512', '__ci_last_regenerate|i:1679593512;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('rif01es8q4hfrobme28kb1f5bu', '203.95.220.28', '1679197118', '__ci_last_regenerate|i:1679197118;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('rkogd17g1gok9tp398fv67r54g', '202.134.10.136', '1679289404', '__ci_last_regenerate|i:1679288726;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('rooccq6jqqvle1foq2vb2u8ouc', '203.95.220.28', '1679563428', '__ci_last_regenerate|i:1679563428;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('s02ofoe2snitdh7cp8oca3m6cl', '45.248.151.243', '1679300974', '__ci_last_regenerate|i:1679300974;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('s4iq5272uo1jo1qna9q1iubr2b', '203.95.220.28', '1680512532', '__ci_last_regenerate|i:1680512316;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680501375\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('sh8s2m10sej1nqmecl703bb910', '45.248.151.243', '1679296786', '__ci_last_regenerate|i:1679296786;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('si0c0h7vob90kjo1lnani0juuf', '45.248.151.243', '1679296964', '__ci_last_regenerate|i:1679296964;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('si58csrtumv77bhaf2dgavkg4m', '45.79.83.159', '1679587771', '__ci_last_regenerate|i:1679587771;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('sik72tmcg95nbc2jhd0va42jc1', '45.248.151.243', '1679398550', '__ci_last_regenerate|i:1679398295;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679398207\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('skpq5j015kvn0mtep3n9kvnp6a', '203.95.220.28', '1680501891', '__ci_last_regenerate|i:1680501891;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('smgqd9u88f3gg2hca6din28q44', '203.95.220.28', '1679389256', '__ci_last_regenerate|i:1679389256;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('snhgmmo595kdjten7ee637qvr7', '203.95.220.28', '1680758312', '__ci_last_regenerate|i:1680758312;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('sqqj9mum5lmr5e05uubmmh2q4l', '203.95.220.28', '1679292874', '__ci_last_regenerate|i:1679292874;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('stiigatkmv2cs1e71ce1oacdf3', '51.158.118.231', '1678969477', '__ci_last_regenerate|i:1678969477;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('t2ffkrls7q29lh4ih8a2fhfhv8', '52.14.73.113', '1679957742', '__ci_last_regenerate|i:1679957742;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('t5eqp12i5f8ar3f21n0rqcridb', '203.95.220.28', '1678616390', '__ci_last_regenerate|i:1678614976;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678603176\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('tab45jf7hj5ka35d7qa8kmv07t', '45.248.151.243', '1679154694', '__ci_last_regenerate|i:1679154411;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1679153407\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"3\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('teud96mvdlru2cvdgpdua9mptr', '52.14.73.113', '1679959006', '__ci_last_regenerate|i:1679959006;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('tke4k5at45jmihqeq0nh0ctoij', '103.108.229.61', '1680652633', '__ci_last_regenerate|i:1680652633;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('trlagssh56br8se01ue6pnussc', '203.95.220.28', '1680777178', '__ci_last_regenerate|i:1680776956;identity|s:17:\"teststaff@gdn.com\";username|s:9:\"test-staf\";email|s:17:\"teststaff@gdn.com\";user_id|s:2:\"48\";first_name|s:5:\"Test \";last_name|s:5:\"staff\";created_on|s:23:\"Tue 4 Apr 2023 02:57 PM\";old_last_login|s:10:\"1680775559\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"3\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"7\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-04-06 16:08:21\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('tsavh5i6ls3p9m93437n5p2q6b', '45.248.151.243', '1679382671', '__ci_last_regenerate|i:1679382671;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679333619\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('tt8hlg2qeefdpp47mie5bkeff8', '205.169.39.86', '1679593052', '__ci_last_regenerate|i:1679593049;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('tvbk5q01mcmuo7h9m8ldcqs6f6', '103.87.138.109', '1678450447', '__ci_last_regenerate|i:1678450317;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678373092\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('u1rgtcikii2dpip7q0pt2mi1av', '203.95.220.28', '1678942321', '__ci_last_regenerate|i:1678941205;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678939733\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:2:{s:7:\"message\";s:3:\"old\";s:7:\"messgae\";s:3:\"old\";}messgae|s:28:\"Database successfully saved.\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('u4ccqouusnfahnovv00vt8l9d1', '45.248.151.243', '1678860159', '__ci_last_regenerate|i:1678858035;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1678777922\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}from_warehouse|s:1:\"2\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('u5mur258vq9mji34a1l3fhmv8p', '202.134.14.142', '1679303827', '__ci_last_regenerate|i:1679303780;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:21:\"abircoleman@gmail.com\";username|s:13:\"staff_rafique\";email|s:21:\"abircoleman@gmail.com\";user_id|s:2:\"43\";first_name|s:10:\"MD RAFIQUL\";last_name|s:5:\"ISLAM\";created_on|s:24:\"Sun 12 Mar 2023 10:43 AM\";old_last_login|s:10:\"1679234407\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"3\";store_id|s:1:\"3\";register_id|s:1:\"1\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 10:49:52\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('u7cl4qm53d99iqclpk3ls1num5', '59.153.102.247', '1678777449', '__ci_last_regenerate|i:1678777449;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1678773775\";last_ip|s:14:\"59.153.102.247\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"3\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-14 12:04:06\";store_id_pos|s:1:\"1\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('u8kpjj0dovmt9e9u1vju92og8g', '203.95.220.28', '1678773297', '__ci_last_regenerate|i:1678773282;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1678771026\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ub6fjvf4bjulp09j0rhqsco6dq', '45.248.151.243', '1678778227', '__ci_last_regenerate|i:1678778220;identity|s:21:\"abircoleman@gmail.com\";username|s:13:\"staff_rafique\";email|s:21:\"abircoleman@gmail.com\";user_id|s:2:\"43\";first_name|s:10:\"MD RAFIQUL\";last_name|s:5:\"ISLAM\";created_on|s:24:\"Sun 12 Mar 2023 10:43 AM\";old_last_login|s:10:\"1678773906\";last_ip|s:14:\"59.153.102.247\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"3\";store_id|s:1:\"3\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"1\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 10:49:52\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('undk2s051db5emv69qd2jord1s', '87.236.176.96', '1679865466', '__ci_last_regenerate|i:1679865465;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ut9gecu5jnqvut222eogdcs5v2', '203.95.220.28', '1679895038', '__ci_last_regenerate|i:1679895038;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1679850891\";last_ip|s:14:\"103.60.175.140\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('v0nqclrl4fb680git2gg4i3sdd', '203.95.220.28', '1680581287', '__ci_last_regenerate|i:1680581227;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680514243\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('v2bkr8fsqr0au1ln4cj42feg24', '203.95.220.28', '1679390239', '__ci_last_regenerate|i:1679390172;__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679390211\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('v4mo6h2ok8qnioc936l1kdbbei', '45.248.151.243', '1679071342', '__ci_last_regenerate|i:1679071342;identity|s:25:\"abirshahariar97@gmail.com\";username|s:13:\"shahariarabir\";email|s:25:\"abirshahariar97@gmail.com\";user_id|s:2:\"35\";first_name|s:4:\"Abir\";last_name|s:9:\"Shahariar\";created_on|s:23:\"Sun 1 Jan 2023 12:15 PM\";old_last_login|s:10:\"1679065208\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('v77ir1r2hnd8bc56sotok5r207', '203.95.220.28', '1680773168', '__ci_last_regenerate|i:1680773168;identity|s:26:\"info@goldeninfotech.com.bd\";username|s:5:\"admin\";email|s:26:\"info@goldeninfotech.com.bd\";user_id|s:1:\"1\";first_name|s:2:\"it\";last_name|s:5:\"admin\";created_on|s:24:\"Thu 25 Jun 2015 09:59 AM\";old_last_login|s:10:\"1680768453\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"1\";store_id|i:0;__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('v7m90uthpsth5eb1cjnkd14mtv', '203.95.220.28', '1679289620', '__ci_last_regenerate|i:1679289620;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vdsahj262a33e2r3pi6ssuoina', '195.211.77.140', '1679587736', '__ci_last_regenerate|i:1679587736;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ve51n0u6mbq2ugmoim7euae4fn', '202.134.10.136', '1679288795', '__ci_last_regenerate|i:1679288767;identity|s:20:\"arifur7704@gmail.com\";username|s:8:\"arif_man\";email|s:20:\"arifur7704@gmail.com\";user_id|s:2:\"42\";first_name|s:7:\"ARIFUR \";last_name|s:6:\"RAHMAN\";created_on|s:24:\"Sun 12 Mar 2023 12:10 AM\";old_last_login|s:10:\"1679288689\";last_ip|s:14:\"202.134.10.136\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"2\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"4\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-17 15:54:49\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ve86jldnh26f48rtj5i7t9fhcu', '45.248.151.243', '1680934699', '__ci_last_regenerate|i:1680933123;identity|s:21:\"abircoleman@gmail.com\";username|s:13:\"staff_rafique\";email|s:21:\"abircoleman@gmail.com\";user_id|s:2:\"43\";first_name|s:10:\"MD RAFIQUL\";last_name|s:5:\"ISLAM\";created_on|s:24:\"Sun 12 Mar 2023 10:43 AM\";old_last_login|s:10:\"1680932763\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"3\";store_id|s:1:\"3\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"1\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 10:49:52\";rmspos|i:1;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vg45k4aupgohhn3svchl10fa3i', '45.248.151.243', '1680422155', '__ci_last_regenerate|i:1680421932;identity|s:21:\"abircoleman@gmail.com\";username|s:13:\"staff_rafique\";email|s:21:\"abircoleman@gmail.com\";user_id|s:2:\"43\";first_name|s:10:\"MD RAFIQUL\";last_name|s:5:\"ISLAM\";created_on|s:24:\"Sun 12 Mar 2023 10:43 AM\";old_last_login|s:10:\"1680421693\";last_ip|s:14:\"45.248.151.243\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"3\";store_id|s:1:\"3\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"1\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-03-12 10:49:52\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vg9oi9b0cabpe5dqvni7r1qdvn', '162.142.125.11', '1680752391', '__ci_last_regenerate|i:1680752391;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vii9ss05t8fsnj6rlriopthuso', '167.248.133.188', '1680738755', '__ci_last_regenerate|i:1680738755;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vkbffl1opo02gd481i7fbq7rj2', '45.79.83.159', '1679587772', '__ci_last_regenerate|i:1679587772;');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vsb5pgoo7av3dctekh993pousr', '203.95.220.28', '1680777680', '__ci_last_regenerate|i:1680777642;identity|s:17:\"teststaff@gdn.com\";username|s:9:\"test-staf\";email|s:17:\"teststaff@gdn.com\";user_id|s:2:\"48\";first_name|s:5:\"Test \";last_name|s:5:\"staff\";created_on|s:23:\"Tue 4 Apr 2023 02:57 PM\";old_last_login|s:10:\"1680776963\";last_ip|s:13:\"203.95.220.28\";avatar|N;gender|s:4:\"male\";group_id|s:1:\"3\";store_id|s:1:\"1\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}register_id|s:1:\"7\";cash_in_hand|s:1:\"0\";register_open_time|s:19:\"2023-04-06 16:08:21\";');
INSERT INTO `tec_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vtbl3t4u9i9v1d8nkdbu2rnf0c', '198.235.24.24', '1680315215', '__ci_last_regenerate|i:1680315215;');


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

INSERT INTO `tec_settings` (`setting_id`, `logo`, `site_name`, `tel`, `dateformat`, `timeformat`, `default_email`, `language`, `version`, `theme`, `timezone`, `protocol`, `smtp_host`, `smtp_user`, `smtp_pass`, `smtp_port`, `smtp_crypto`, `mmode`, `captcha`, `mailpath`, `currency_prefix`, `default_customer`, `default_tax_rate`, `rows_per_page`, `total_rows`, `header`, `footer`, `warranty`, `bsty`, `display_kb`, `default_category`, `default_discount`, `item_addition`, `barcode_symbology`, `pro_limit`, `decimals`, `thousands_sep`, `decimals_sep`, `focus_add_item`, `add_customer`, `toggle_category_slider`, `cancel_sale`, `suspend_sale`, `print_order`, `print_bill`, `finalize_sale`, `today_sale`, `open_hold_bills`, `close_register`, `java_applet`, `receipt_printer`, `pos_printers`, `cash_drawer_codes`, `char_per_line`, `rounding`, `pin_code`, `stripe`, `stripe_secret_key`, `stripe_publishable_key`, `purchase_code`, `envato_username`, `theme_style`, `after_sale_page`, `overselling`, `multi_store`, `position`, `sarvice_info`, `uniqcode`, `p_count`, `api_key`, `sender_id`, `supplier_sms`, `customer_sms`, `bin_number`, `aging_day`) VALUES ('1', 'icon1.png', 'Jicom', '00000', 'D j M Y', 'h:i A', 'corporate.sharafat@gmail.com', 'english', '4.0.5', 'default', 'Asia/Kuala_Lumpur', 'mail', 'pop.gmail.com', 'noreply@spos.tecdiary.my', '', '25', '', '0', '0', NULL, 'BDT', '1', '0', '50', '30', '<p>JIcom, Room no. 37 (G/F) 145 Airport Road Super Market, Tejgaon, Dhaka<br></p>\r\n', 'Thanks for being with <strong>  JIcom</strong><br>\r\n', '<p><br></p>', '3', '0', '1', '0', '1', NULL, '20', '2', ',', '.', 'ALT+F1', 'ALT+F2', 'ALT+F10', 'ALT+F5', 'ALT+F6', 'ALT+F11', 'ALT+F12', 'ALT+F8', 'Ctrl+F1', 'Ctrl+F2', 'ALT+F7', '0', '', '', '', '42', '1', NULL, '1', 'sk_test_jHf4cEzAYtgcXvgWPCsQAn50', 'pk_test_beat8SWPORb0OVdF2H77A7uG', '9cefb35d-62de-4e01-940e-217f6fe947e5', 'wedothewebs', 'green', NULL, '1', NULL, 'GENERAL MANAGER,Sales manager, Staff', '<p><br></p>', '1854098', '1', 'C20070235fc5d89dc52509.77444942', 'CCT', 'Dear {name} , Tk. {paid_balance}/= has been paid. Remaining Balance - Tk. {remaining_balance}/= Regards, JIcom, Room no. 37 (G/F) 145 Airport Road Super Market, Tejgaon, Dhaka\r\n', 'Dear Valued Customer, Your due Balance Tk. {remaining_balance}/=.You\'re requested to pay the remaining balance ASAP. Regards, JIcom, Room no. 37 (G/F) 145 Airport Road Super Market, Tejgaon, Dhaka\r\n', '123456', '0');


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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_sreturn_items` (`sreturn_item_id`, `sreturn_id`, `product_id`, `quantity`, `unit_price`, `net_unit_price`, `discount`, `item_discount`, `tax`, `item_tax`, `subtotal`, `real_unit_price`, `cost`, `store_id`, `return_amount`, `return_qty`, `sale_item_id`, `sale_id`, `problem`, `sequence_id`) VALUES ('1', '1', '3', '500.00', '230.00', '230.00', '0', '0.00', '0', '0.00', '115000.00', '230.00', '0.00', '1', '0', '500', '91', '67', 'New PO Pending', '');


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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_suppliers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`) VALUES ('1', 'SUPPLIER', '', '', '121', '1223@GMAIL.COM', '3', '0');
INSERT INTO `tec_suppliers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`) VALUES ('2', 'JF', '', '', 'NA', 'NA@GMAIL.COM', '1', '0');
INSERT INTO `tec_suppliers` (`id`, `name`, `cf1`, `cf2`, `phone`, `email`, `store_id`, `opening_blance`) VALUES ('5', 'Test suppliers', '', '', '123456', 'suppliers@jicom.com', '3', '0');


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
  `collected_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`today_collect_id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('1', '2023-03-12 10:56:59', '200', '1', '', '3', 'Pending', 'Cash', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('2', '2023-03-12 16:18:00', '400', '1', '', '3', 'Pending', 'cash', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('3', '2023-03-12 16:20:14', '200', '1', '', '3', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('4', '2023-03-12 16:20:57', '200', '1', '', '3', 'Pending', 'Cheque', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('6', '2023-03-14 12:07:43', '200', '0', '', '3', 'Pending', 'Cash', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('7', '2023-03-18 21:40:03', '54000', '20', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('9', '2023-03-19 19:09:52', '100000', '45', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('10', '2023-03-19 19:21:40', '121860', '62', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('11', '2023-03-19 19:30:02', '50000', '32', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('12', '2023-03-19 19:30:52', '30000', '8', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('13', '2023-03-19 19:31:43', '80000', '63', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('14', '2023-03-19 19:36:43', '50000', '61', '', '1', 'Pending', 'Cheque', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('15', '2023-03-19 19:37:24', '28322', '67', '', '1', 'Pending', 'Cheque', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('16', '2023-03-19 20:20:54', '22590', '71', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('17', '2023-03-20 22:58:13', '50000', '8', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('18', '2023-03-20 22:59:23', '18180', '44', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('19', '2023-03-20 23:00:04', '13195', '30', '', '1', 'Pending', 'Cash', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('20', '2023-03-20 23:20:16', '159200', '22', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('21', '2023-03-20 23:24:04', '27270', '12', '', '1', 'Pending', 'Cheque', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('22', '2023-03-20 23:30:14', '47880', '73', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('23', '2023-03-21 17:32:14', '45750', '16', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('24', '2023-03-21 17:33:51', '45000', '27', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('25', '2023-03-24 21:46:15', '27440', '67', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('26', '2023-03-24 21:47:03', '45000', '8', '', '1', 'Pending', 'Deposit', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('27', '2023-03-24 21:52:09', '50000', '8', '', '1', 'Pending', 'Deposit', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('28', '2023-03-26 14:03:19', '90000', '13', '', '1', 'Pending', 'Deposit', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('29', '2023-03-26 14:08:18', '200000', '48', '', '1', 'Pending', 'Deposit', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('42', '2023-04-06 11:37:04', '100000', '8', '', '1', 'Pending', 'Deposit', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('31', '2023-03-30 15:02:52', '70000', '8', '', '1', 'Pending', 'Deposit', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('32', '2023-03-30 15:03:28', '85800', '13', '', '1', 'Pending', 'Cheque', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('33', '2023-03-30 15:32:34', '48320', '29', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('34', '2023-03-30 15:36:17', '59280', '62', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('35', '2023-03-30 15:40:19', '54000', '20', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('36', '2023-03-30 16:01:20', '39494', '67', '', '1', 'Pending', 'Deposit', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('37', '2023-04-01 11:25:14', '230000', '23', '', '1', 'Pending', 'Cheque', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('38', '2023-04-01 11:32:09', '25000', '8', '', '1', 'Pending', 'Deposit', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('39', '2023-04-01 12:03:11', '70000', '24', '', '1', 'Pending', 'Cheque', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('40', '2023-04-03 15:15:55', '99360', '62', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('41', '2023-04-03 15:19:19', '54000', '20', '', '1', 'Pending', 'TT', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('43', '2023-04-06 11:48:55', '468800', '64', '', '1', 'Pending', 'Deposit', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('45', '2023-04-06 12:22:43', '2664000', '58', '', '1', 'Pending', 'Cheque', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('46', '2023-04-06 12:37:46', '186192', '67', '', '1', 'Pending', 'Cheque', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('47', '2023-04-06 12:41:28', '80000', '38', '', '1', 'Pending', 'Deposit', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('48', '2023-04-06 12:44:11', '222494', '65', '', '1', 'Pending', 'Deposit', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('49', '2023-04-06 12:59:07', '125000', '17', '', '1', 'Pending', 'Cash', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('51', '2023-04-08 17:00:25', '40000', '8', '', '1', 'Pending', 'TT', '35');
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('52', '2023-04-08 17:15:40', '36450', '18', '', '1', 'Pending', 'Cash', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('53', '2023-04-08 17:20:35', '4900', '81', '', '1', 'Pending', 'cash', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('54', '2023-04-08 17:26:46', '47000', '43', '', '1', 'Pending', 'cash', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('55', '2023-04-08 17:26:51', '47000', '43', '', '1', 'Pending', 'cash', NULL);
INSERT INTO `tec_today_collection` (`today_collect_id`, `payment_date`, `payment_amount`, `customer_id`, `payment_note`, `store_id`, `payment_status`, `paid_by`, `collected_by`) VALUES ('56', '2023-04-08 17:27:37', '47000', '43', '', '1', 'Pending', 'cash', NULL);


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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('1', '200', '1', '2023-03-12 16:22:48', '1', NULL, '2', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('2', '200', '1', '2023-03-12 16:22:53', '1', NULL, '1', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('3', '5158563.5', '3', '2023-03-18 12:25:53', '1', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('4', '2158425', '4', '2023-03-18 21:38:30', '1', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('5', '54000', '4', '2023-03-18 21:40:46', '1', NULL, '3', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('6', '2454610.22', '5', '2023-03-18 21:50:53', '1', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('7', '2879319', '6', '2023-03-19 18:56:12', '1', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('8', '100000', '6', '2023-03-19 19:10:59', '1', NULL, '4', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('9', '11358404', '7', '2023-03-19 19:19:55', '1', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('10', '121860', '7', '2023-03-19 19:21:51', '1', NULL, '5', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('11', '50000', '7', '2023-03-19 19:32:00', '1', NULL, '6', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('12', '30000', '7', '2023-03-19 19:32:04', '1', NULL, '7', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('13', '80000', '6', '2023-03-19 19:32:07', '1', NULL, '8', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('14', '28322', '5', '2023-03-19 19:37:34', '1', NULL, '10', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('15', '50000', '5', '2023-03-19 19:37:38', '1', NULL, '9', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('16', '22590', '4', '2023-03-20 14:01:19', '1', NULL, '11', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('17', '50000', '7', '2023-03-20 23:00:18', '1', NULL, '12', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('18', '18180', '7', '2023-03-20 23:00:23', '1', NULL, '13', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('19', '159200', '7', '2023-03-20 23:22:04', '1', NULL, '14', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('20', '27270', '5', '2023-03-20 23:24:16', '1', NULL, '15', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('21', '47880', '7', '2023-03-20 23:30:27', '1', NULL, '16', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('22', '45750', '8', '2023-03-21 17:32:31', '1', NULL, '17', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('23', '45000', '4', '2023-03-21 17:34:04', '1', NULL, '18', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('24', '27440', '5', '2023-03-24 21:46:24', '1', NULL, '19', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('25', '1', '4', '2023-03-28 14:47:28', '1', NULL, '24', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('26', '85800', '5', '2023-03-30 15:03:48', '1', NULL, '26', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('27', '70000', '7', '2023-03-30 15:03:54', '1', NULL, '25', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('28', '48320', '7', '2023-03-30 15:33:02', '1', NULL, '27', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('29', '59280', '7', '2023-03-30 15:36:34', '1', NULL, '28', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('30', '54000', '4', '2023-03-30 15:41:25', '1', NULL, '29', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('31', '39494', '5', '2023-03-30 16:01:27', '1', NULL, '30', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('32', '230000', '5', '2023-04-01 11:25:56', '1', NULL, '31', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('33', '25000', '7', '2023-04-01 11:32:25', '1', NULL, '32', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('34', '70000', '4', '2023-04-01 12:03:29', '1', NULL, '33', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('35', '99360', '7', '2023-04-03 15:16:15', '1', NULL, '34', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('36', '54000', '4', '2023-04-03 15:19:37', '1', NULL, '35', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('37', '100000', '7', '2023-04-06 11:37:18', '1', NULL, '36', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('38', '468800', '7', '2023-04-06 11:49:06', '1', NULL, '37', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('39', '2664000', '5', '2023-04-06 12:16:27', '1', NULL, '38', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('40', '2664000', '5', '2023-04-06 12:22:52', '1', NULL, '39', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('41', '186192', '5', '2023-04-06 12:38:01', '1', NULL, '40', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('42', '80000', '4', '2023-04-06 12:41:34', '1', NULL, '41', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('43', '222494', '4', '2023-04-06 12:44:22', '1', NULL, '42', NULL, NULL, NULL);
INSERT INTO `tec_tranjiction` (`tranjiction_id`, `tran_amount`, `bank_account_id`, `tran_date`, `tran_type`, `pettytobankt`, `pedding_cheque`, `loan_pending_id`, `tran_note`, `store_id`) VALUES ('44', '40000', '7', '2023-04-08 17:00:36', '1', NULL, '43', NULL, NULL, NULL);


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
) ENGINE=InnoDB AUTO_INCREMENT=369 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('52', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-16 13:56:13');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('53', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-16 19:43:07');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('54', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-16 23:46:23');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('55', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-17 17:54:08');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('56', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-17 17:56:35');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('57', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-17 17:57:20');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('58', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-17 19:59:43');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('59', '42', NULL, '203.95.220.28', 'arifur7704@gmail.com', '2023-03-17 21:34:48');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('60', '42', NULL, '203.95.220.28', 'arifur7704@gmail.com', '2023-03-17 21:35:17');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('61', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-17 21:57:09');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('62', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-17 21:58:20');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('63', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-17 21:58:33');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('64', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-17 21:58:59');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('65', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-17 21:59:12');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('66', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-17 23:00:08');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('67', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-17 23:52:10');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('68', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-18 00:42:24');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('69', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-18 01:32:26');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('70', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-18 02:24:32');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('71', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-18 14:19:53');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('72', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-18 14:20:49');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('73', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-18 14:21:07');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('74', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-18 23:25:42');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('75', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-18 23:30:07');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('76', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-18 23:46:53');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('77', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-19 15:08:55');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('78', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-19 19:45:25');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('79', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-19 19:46:14');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('80', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-19 19:50:34');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('81', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-19 19:51:40');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('82', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 19:56:34');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('83', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-19 20:13:05');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('84', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-19 20:40:09');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('85', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-19 20:40:38');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('86', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 20:42:28');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('87', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-19 20:50:58');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('88', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 20:56:34');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('89', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-19 21:04:26');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('90', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 21:08:30');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('91', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-19 21:09:04');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('92', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 21:09:20');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('93', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-19 21:12:20');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('94', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 21:20:53');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('95', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-19 21:22:01');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('96', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 21:28:47');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('97', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-19 21:32:17');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('98', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 21:35:15');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('99', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-19 21:37:46');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('100', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-19 21:45:25');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('101', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 21:46:47');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('102', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-19 21:46:56');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('103', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 21:47:09');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('104', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-19 21:48:55');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('105', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 21:50:08');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('106', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-19 21:55:26');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('107', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 21:58:51');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('108', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-19 22:00:07');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('109', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 22:06:33');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('110', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-19 22:16:05');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('111', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-19 22:16:52');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('112', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-03-20 11:34:32');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('113', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-20 11:35:33');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('114', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-20 11:38:50');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('115', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-20 12:02:32');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('116', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-20 12:04:04');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('117', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-20 12:04:49');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('118', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-20 12:05:19');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('119', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-03-20 12:59:45');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('120', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-20 13:01:33');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('121', '42', NULL, '202.134.10.136', 'Arifur7704@gmail.com', '2023-03-20 13:04:49');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('122', '42', NULL, '202.134.10.136', 'Arifur7704@gmail.com', '2023-03-20 13:06:17');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('123', '42', NULL, '202.134.10.136', 'Arifur7704@gmail.com', '2023-03-20 13:09:18');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('124', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-20 13:11:39');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('125', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-03-20 13:15:25');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('126', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-03-20 13:20:47');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('127', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-20 13:21:57');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('128', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-03-20 13:26:37');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('129', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-20 13:27:37');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('130', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-03-20 13:36:16');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('131', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-03-20 14:39:13');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('132', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-20 16:01:04');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('133', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-20 16:01:39');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('134', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-20 16:02:11');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('135', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-20 16:10:43');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('136', '43', NULL, '202.134.14.142', 'abircoleman@gmail.com', '2023-03-20 17:16:59');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('137', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-20 21:01:24');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('138', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-21 00:51:19');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('139', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 00:52:01');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('140', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-21 00:53:11');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('141', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 00:56:52');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('142', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 01:01:05');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('143', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 01:03:40');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('144', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 01:04:13');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('145', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 01:05:51');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('146', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 01:06:22');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('147', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 01:14:40');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('148', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 01:15:03');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('149', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 01:18:45');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('150', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 01:27:38');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('151', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 01:28:50');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('152', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 01:31:13');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('153', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 01:31:21');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('154', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 01:33:39');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('155', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-21 13:28:46');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('156', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 13:31:15');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('157', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 13:38:13');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('158', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 13:59:43');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('159', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 15:11:17');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('160', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 16:03:53');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('161', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 16:16:52');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('162', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-21 16:50:35');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('163', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 17:08:01');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('164', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-03-21 17:16:51');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('165', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-21 17:17:02');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('166', '42', NULL, '203.95.220.28', 'arifur7704@gmail.com', '2023-03-21 17:17:09');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('167', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-21 17:47:45');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('168', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 18:16:14');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('169', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 18:42:49');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('170', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 18:43:29');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('171', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-21 18:48:12');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('172', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 19:13:51');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('173', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-21 19:17:52');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('174', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 19:21:00');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('175', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-21 19:21:35');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('176', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 19:25:48');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('177', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 19:27:27');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('178', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 19:30:07');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('179', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-21 19:31:07');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('180', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-21 19:31:38');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('181', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-22 11:25:44');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('182', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-22 12:16:07');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('183', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-23 13:49:56');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('184', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-23 15:36:37');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('185', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-23 16:36:19');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('186', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-23 16:44:13');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('187', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-23 16:46:18');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('188', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-23 17:23:54');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('189', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-24 23:32:21');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('190', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-24 23:41:15');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('191', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-24 23:45:08');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('192', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-24 23:54:00');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('193', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-25 15:14:53');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('194', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-26 15:39:25');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('195', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-26 16:00:54');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('196', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-26 16:11:51');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('197', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-26 16:13:10');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('198', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-26 16:15:09');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('199', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-03-26 16:15:47');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('200', '1', NULL, '103.60.175.140', 'info@goldeninfotech.com.bd', '2023-03-27 01:14:51');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('201', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-27 12:21:26');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('202', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-27 13:31:28');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('203', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-27 14:54:29');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('204', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-03-28 12:01:44');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('205', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-28 16:46:54');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('206', '1', NULL, '103.176.152.15', 'info@goldeninfotech.com.bd', '2023-03-29 15:46:47');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('207', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-30 16:58:18');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('208', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-03-30 17:19:31');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('209', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-30 17:29:49');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('210', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-30 17:52:09');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('211', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-30 17:54:34');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('212', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-30 18:03:21');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('213', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-30 18:03:28');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('214', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-03-30 18:08:24');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('215', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-30 18:17:57');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('216', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-03-30 18:30:26');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('217', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-01 13:05:42');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('218', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-04-01 13:12:00');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('219', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-04-01 14:03:13');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('220', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-01 14:15:50');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('221', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-04-01 14:16:21');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('222', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-01 14:43:38');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('223', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-01 14:45:35');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('224', '44', NULL, '45.248.151.243', 'golamsarwar@gmail.com', '2023-04-01 14:59:40');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('225', '44', NULL, '45.248.151.243', 'golamsarwar@gmail.com', '2023-04-01 15:10:12');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('226', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-01 17:06:49');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('227', '44', NULL, '59.153.102.247', 'golamsarwar@gmail.com', '2023-04-01 17:08:49');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('228', '44', NULL, '59.153.102.247', 'golamsarwar@gmail.com', '2023-04-01 17:27:30');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('229', '44', NULL, '59.153.102.247', 'golamsarwar@gmail.com', '2023-04-01 17:29:01');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('230', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-01 17:29:38');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('231', '44', NULL, '59.153.102.247', 'golamsarwar@gmail.com', '2023-04-01 17:33:36');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('232', '42', NULL, '59.153.102.247', 'Arifur7704@gmail.com', '2023-04-01 17:33:53');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('233', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-01 17:35:13');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('234', '44', NULL, '59.153.102.247', 'golamsarwar@gmail.com', '2023-04-01 17:36:47');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('235', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-01 17:38:00');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('236', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-01 17:40:48');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('237', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-01 17:41:09');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('238', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-01 17:42:02');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('239', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-01 17:44:35');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('240', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-01 17:45:19');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('241', '45', NULL, '59.153.102.247', 'sarwar.golam452@gmail.com', '2023-04-01 17:45:42');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('242', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-01 17:48:09');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('243', '45', NULL, '59.153.102.247', 'sarwar.golam452@gmail.com', '2023-04-01 17:50:35');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('244', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-01 17:54:46');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('245', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-01 21:30:05');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('246', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-02 12:47:08');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('247', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-02 12:52:10');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('248', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-02 12:52:55');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('249', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-02 14:05:01');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('250', '45', NULL, '59.153.102.247', 'sarwar.golam452@gmail.com', '2023-04-02 14:58:02');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('251', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-04-02 15:35:29');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('252', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-02 15:40:39');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('253', '45', NULL, '59.153.102.247', 'sarwar.golam452@gmail.com', '2023-04-02 15:41:32');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('254', '45', NULL, '59.153.102.247', 'sarwar.golam452@gmail.com', '2023-04-02 15:42:24');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('255', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-04-02 15:42:25');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('256', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-02 15:42:40');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('257', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-04-02 15:45:15');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('258', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-02 15:47:24');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('259', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-04-02 15:48:13');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('260', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-02 15:51:16');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('261', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-04-02 15:52:15');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('262', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-04-02 16:41:45');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('263', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-02 16:41:58');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('264', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-04-02 16:47:21');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('265', '45', NULL, '59.153.102.237', 'sarwar.golam452@gmail.com', '2023-04-02 23:16:19');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('266', '45', NULL, '59.153.102.237', 'sarwar.golam452@gmail.com', '2023-04-02 23:18:15');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('267', '45', NULL, '59.153.102.237', 'sarwar.golam452@gmail.com', '2023-04-02 23:44:43');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('268', '45', NULL, '59.153.102.237', 'sarwar.golam452@gmail.com', '2023-04-02 23:45:57');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('269', '45', NULL, '59.153.102.237', 'sarwar.golam452@gmail.com', '2023-04-03 02:21:55');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('270', '45', NULL, '59.153.102.247', 'sarwar.golam452@gmail.com', '2023-04-03 12:46:53');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('271', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-03 13:39:34');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('272', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-03 13:47:14');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('273', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-04-03 13:48:35');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('274', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-03 13:48:56');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('275', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-04-03 13:51:40');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('276', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-03 13:52:00');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('277', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-03 13:56:15');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('278', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-04-03 14:01:10');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('279', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-03 15:18:48');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('280', '45', NULL, '59.153.102.247', 'sarwar.golam452@gmail.com', '2023-04-03 16:52:59');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('281', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-03 16:54:20');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('282', '43', NULL, '59.153.102.247', 'abircoleman@gmail.com', '2023-04-03 16:57:52');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('283', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-03 16:59:04');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('284', '43', NULL, '59.153.102.247', 'abircoleman@gmail.com', '2023-04-03 16:59:30');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('285', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-03 16:59:41');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('286', '46', NULL, '59.153.102.247', 'golamsarwar@gmail.com', '2023-04-03 17:02:17');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('287', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-03 17:02:37');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('288', '42', NULL, '59.153.102.247', 'Arifur7704@gmail.com', '2023-04-03 17:05:34');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('289', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-03 17:08:20');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('290', '42', NULL, '59.153.102.247', 'Arifur7704@gmail.com', '2023-04-03 17:10:14');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('291', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-03 17:11:25');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('292', '42', NULL, '59.153.102.247', 'Arifur7704@gmail.com', '2023-04-03 17:12:32');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('293', '35', NULL, '59.153.102.247', 'abirshahariar97@gmail.com', '2023-04-03 17:20:28');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('294', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-04-03 17:30:28');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('295', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-03 17:30:43');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('296', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-04-04 12:05:34');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('297', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-04 12:07:12');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('298', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-04 12:27:20');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('299', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-04 12:52:41');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('300', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-04 13:24:00');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('301', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-04-04 13:24:25');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('302', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-04 15:14:34');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('303', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-04-04 15:15:40');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('304', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-04 15:15:57');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('305', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-04-04 15:18:09');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('306', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-04 15:18:29');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('307', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-04 15:19:49');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('308', '47', NULL, '45.248.151.243', 'golamsarwar@gmail.com', '2023-04-04 15:24:41');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('309', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-04 15:26:01');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('310', '47', NULL, '45.248.151.243', 'golamsarwar@gmail.com', '2023-04-04 15:26:39');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('311', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-04 15:27:43');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('312', '42', NULL, '203.95.220.28', 'Arifur7704@gmail.com', '2023-04-04 16:45:32');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('313', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-04 16:46:11');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('314', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-04 16:56:46');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('315', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-04 16:58:22');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('316', '48', NULL, '203.95.220.28', 'teststaff@gdn.com', '2023-04-04 16:58:52');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('317', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-04 17:04:36');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('318', '42', NULL, '103.213.239.0', 'Arifur7704@gmail.com', '2023-04-06 02:28:07');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('319', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 11:58:36');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('320', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 12:02:27');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('321', '48', NULL, '203.95.220.28', 'teststaff@gdn.com', '2023-04-06 12:42:31');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('322', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-06 13:02:04');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('323', '42', NULL, '45.248.151.243', 'Arifur7704@gmail.com', '2023-04-06 13:02:37');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('324', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-06 13:03:37');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('325', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 13:12:43');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('326', '48', NULL, '203.95.220.28', 'teststaff@gdn.com', '2023-04-06 13:47:15');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('327', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-06 14:02:59');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('328', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 14:05:21');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('329', '48', NULL, '203.95.220.28', 'teststaff@gdn.com', '2023-04-06 14:07:34');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('330', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-06 14:53:23');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('331', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 15:22:25');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('332', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 16:07:33');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('333', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 16:12:25');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('334', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-06 16:16:29');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('335', '48', NULL, '203.95.220.28', 'teststaff@gdn.com', '2023-04-06 16:20:12');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('336', '47', NULL, '45.248.151.243', 'golamsarwar@gmail.com', '2023-04-06 16:21:23');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('337', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-06 16:22:56');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('338', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 16:47:52');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('339', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 16:56:39');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('340', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 17:23:37');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('341', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 17:26:19');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('342', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-06 17:51:46');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('343', '47', NULL, '45.248.151.243', 'golamsarwar@gmail.com', '2023-04-06 17:53:17');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('344', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-06 17:53:33');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('345', '47', NULL, '45.248.151.243', 'golamsarwar@gmail.com', '2023-04-06 17:55:08');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('346', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-06 17:58:09');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('347', '47', NULL, '45.248.151.243', 'golamsarwar@gmail.com', '2023-04-06 17:59:03');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('348', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-06 18:05:58');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('349', '48', NULL, '203.95.220.28', 'teststaff@gdn.com', '2023-04-06 18:05:59');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('350', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 18:09:27');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('351', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-04-06 18:15:20');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('352', '47', NULL, '45.248.151.243', 'golamsarwar@gmail.com', '2023-04-06 18:15:42');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('353', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 18:28:39');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('354', '48', NULL, '203.95.220.28', 'teststaff@gdn.com', '2023-04-06 18:29:23');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('355', '48', NULL, '203.95.220.28', 'teststaff@gdn.com', '2023-04-06 18:40:57');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('356', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-06 18:44:40');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('357', '47', NULL, '45.248.151.243', 'golamsarwar@gmail.com', '2023-04-06 18:45:38');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('358', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-06 18:46:02');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('359', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 18:54:11');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('360', '1', NULL, '203.95.220.28', 'info@goldeninfotech.com.bd', '2023-04-06 19:52:34');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('361', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-08 13:30:50');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('362', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-04-08 13:46:03');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('363', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-08 13:51:09');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('364', '43', NULL, '45.248.151.243', 'abircoleman@gmail.com', '2023-04-08 13:52:50');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('365', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-08 18:25:07');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('366', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-08 19:15:41');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('367', '42', NULL, '103.213.239.2', 'Arifur7704@gmail.com', '2023-04-09 01:31:44');
INSERT INTO `tec_user_logins` (`id`, `user_id`, `company_id`, `ip_address`, `login`, `time`) VALUES ('368', '35', NULL, '45.248.151.243', 'abirshahariar97@gmail.com', '2023-04-09 03:58:24');


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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tec_users` (`id`, `last_ip_address`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `avatar`, `gender`, `group_id`, `store_id`) VALUES ('1', '203.95.220.28', '127.0.0.1', 'admin', '71820aec2f0cbfe7229b8c726871fd8c0f105ae1', NULL, 'info@goldeninfotech.com.bd', NULL, NULL, NULL, NULL, '1435204774', '1680781954', '1', 'it', 'admin', 'Electrolife', '+88018XXXXXXXX', NULL, 'male', '1', '0');
INSERT INTO `tec_users` (`id`, `last_ip_address`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `avatar`, `gender`, `group_id`, `store_id`) VALUES ('35', '45.248.151.243', '103.60.175.142', 'shahariarabir', '504abef6533611de7391df2271c0f15d19fbfb3e', NULL, 'abirshahariar97@gmail.com', NULL, NULL, NULL, NULL, '1672553737', '1680983904', '1', 'Abir', 'Shahariar', NULL, '01781125179', NULL, 'male', '1', '0');
INSERT INTO `tec_users` (`id`, `last_ip_address`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `avatar`, `gender`, `group_id`, `store_id`) VALUES ('42', '103.213.239.2', '45.248.151.243', 'arif_man', '37faefb3d7299eab7bb0a5238772cd0f0e8eeada', NULL, 'arifur7704@gmail.com', NULL, NULL, NULL, NULL, '1678558232', '1680975104', '1', 'ARIFUR ', 'RAHMAN', NULL, '01710535268', NULL, 'male', '2', '1');
INSERT INTO `tec_users` (`id`, `last_ip_address`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `avatar`, `gender`, `group_id`, `store_id`) VALUES ('43', '45.248.151.243', '45.248.151.243', 'staff_rafique', 'a0b3d25dc7d612fc3c232f5bc3b6878a51b58612', NULL, 'abircoleman@gmail.com', NULL, NULL, NULL, NULL, '1678596201', '1680933170', '1', 'MD RAFIQUL', 'ISLAM', NULL, '017777771717', NULL, 'male', '3', '3');
INSERT INTO `tec_users` (`id`, `last_ip_address`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `avatar`, `gender`, `group_id`, `store_id`) VALUES ('47', '45.248.151.243', '45.248.151.243', 'golam', '4eef2f020fa49e5ecfe935babdc579d0833d93af', NULL, 'golamsarwar@gmail.com', NULL, NULL, NULL, NULL, '1680593013', '1680777938', '1', 'GOLAM ', 'SARWAR', NULL, 'NA', NULL, 'male', '3', '1');
INSERT INTO `tec_users` (`id`, `last_ip_address`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `avatar`, `gender`, `group_id`, `store_id`) VALUES ('48', '203.95.220.28', '203.95.220.28', 'test-staf', 'a31fdd1c2aec181cbefb161c783651b6ffe282dd', NULL, 'teststaff@gdn.com', 'f753da34921b5bb16e57135f78e0bebfc9507e0c', NULL, NULL, NULL, '1680598670', '1680777657', '1', 'Test ', 'staff', NULL, '787878', NULL, 'male', '3', '1');


