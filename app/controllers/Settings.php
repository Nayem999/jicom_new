<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller {
    function __construct() {
        parent::__construct();
        if(!$this->site->permission('settings'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('settings_model');
        
    }

    function index() { 
        if(!$this->site->route_permission('settings_view')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}
        $this->form_validation->set_rules('site_name', lang('site_name') , 'required');
        $this->form_validation->set_rules('tel', lang('tel') , 'required'); 
        $this->form_validation->set_rules('currency_prefix', lang('currency_code') , 'required|max_length[3]|min_length[3]');
        $this->form_validation->set_rules('default_discount', lang('default_discount') , 'required');
        $this->form_validation->set_rules('tax_rate', lang('default_tax_rate') , 'required');
        $this->form_validation->set_rules('rows_per_page', lang('rows_per_page') , 'required');
        $this->form_validation->set_rules('display_product', lang('display_product') , 'required');
        $this->form_validation->set_rules('pro_limit', lang('pro_limit') , 'required');
        $this->form_validation->set_rules('display_kb', lang('display_kb') , 'required');
        $this->form_validation->set_rules('default_category', lang('default_category') , 'required');
        $this->form_validation->set_rules('default_customer', lang('default_customer') , 'required');
        $this->form_validation->set_rules('dateformat', lang('date_format') , 'required');
        $this->form_validation->set_rules('timeformat', lang('time_format') , 'required');
        $this->form_validation->set_rules('item_addition', lang('item_addition') , 'required');
        if ($this->input->post('protocol') == 'smtp') {
            $this->form_validation->set_rules('smtp_host', lang('smtp_host') , 'required');
            $this->form_validation->set_rules('smtp_user', lang('smtp_user') , 'required');
            $this->form_validation->set_rules('smtp_pass', lang('smtp_pass') , 'required');
            $this->form_validation->set_rules('smtp_port', lang('smtp_port') , 'required');
        }

        if ($this->input->post('stripe')) {
            $this->form_validation->set_rules('stripe_secret_key', lang('stripe_secret_key') , 'required');
            $this->form_validation->set_rules('stripe_publishable_key', lang('stripe_publishable_key') , 'required');
        }

        $this->form_validation->set_rules('bill_header', lang('bill_header'));
        $this->form_validation->set_rules('bill_footer', lang('bill_footer'));

        if ($this->form_validation->run() == true) {
            $data = array(
                'site_name' => DEMO ? 'SimplePOS' : $this->input->post('site_name') ,
                'tel' => $this->input->post('tel') ,
                'currency_prefix' => DEMO ? 'USD' : strtoupper($this->input->post('currency_prefix')) ,
                'default_tax_rate' => $this->input->post('tax_rate') ,
                'default_discount' => $this->input->post('default_discount') ,
                'rows_per_page' => $this->input->post('rows_per_page') ,
                'bsty' => $this->input->post('display_product') ,
                'pro_limit' => $this->input->post('pro_limit') ,
                'position' => $this->input->post('position') ,
                'display_kb' => $this->input->post('display_kb') ,
                'default_category' => $this->input->post('default_category') ,
                'p_count' => $this->input->post('p_count') ,
                'default_customer' => $this->input->post('default_customer') ,
                'barcode_symbology' => $this->input->post('barcode_symbology') ,
                'dateformat' => DEMO ? 'jS F Y' : $this->input->post('dateformat') ,
                'timeformat' => DEMO ? 'h:i A' : $this->input->post('timeformat') ,
                'header' => $this->input->post('bill_header') ,
                'footer' => $this->input->post('bill_footer') ,
                'warranty' => $this->input->post('warranty') ,
                'sarvice_info' => $this->input->post('sarvice_info') ,
                'default_email' => $this->input->post('default_email') ,
                'uniqcode' => $this->input->post('uniqcode') ,
                'protocol' => $this->input->post('protocol') ,
                'smtp_host' => $this->input->post('smtp_host') ,
                'smtp_user' => $this->input->post('smtp_user') ,
                'smtp_port' => $this->input->post('smtp_port') ,
                'smtp_crypto' => $this->input->post('smtp_crypto') ,
                'pin_code' => $this->input->post('pin_code') ? $this->input->post('pin_code') : NULL,
                'bin_number' => $this->input->post('bin_number') ,
                'aging_day' => $this->input->post('aging_day') ,
                'receipt_printer' => $this->input->post('receipt_printer') ,
                'cash_drawer_codes' => $this->input->post('cash_drawer_codes') ,
                'focus_add_item' => $this->input->post('focus_add_item') ,
                'add_customer' => $this->input->post('add_customer') ,
                'toggle_category_slider' => $this->input->post('toggle_category_slider') ,
                'cancel_sale' => $this->input->post('cancel_sale') ,
                'suspend_sale' => $this->input->post('suspend_sale') ,
                'print_order' => $this->input->post('print_order') ,
                'print_bill' => $this->input->post('print_bill') ,
                'finalize_sale' => $this->input->post('finalize_sale') ,
                'today_sale' => $this->input->post('today_sale') ,
                'open_hold_bills' => $this->input->post('open_hold_bills') ,
                'close_register' => $this->input->post('close_register') ,
                'pos_printers' => $this->input->post('pos_printers') ,
                'java_applet' => DEMO ? '0' : $this->input->post('enable_java_applet') ,
                'rounding' => $this->input->post('rounding') ,
                'item_addition' => $this->input->post('item_addition') ,
                'stripe' => $this->input->post('stripe') ,
                'stripe_secret_key' => $this->input->post('stripe_secret_key') ,
                'stripe_publishable_key' => $this->input->post('stripe_publishable_key') ,

                'api_key' => $this->input->post('api_key') ,
                'sender_id' => $this->input->post('sender_id') ,
                'supplier_sms' => $this->input->post('supplier_sms') ,
                'customer_sms' => $this->input->post('customer_sms') ,
            );
            if ($this->input->post('smtp_pass')) {
                // $data['smtp_pass'] = $this->encrypt->encode($this->input->post('smtp_pass'));
                $data['smtp_pass'] = $this->encryption->encrypt($this->input->post('smtp_pass'));
            }

            if (DEMO) {
                $data['site_name'] = 'SimplePOS';
            }
            else {
                if ($_FILES['userfile']['size'] > 0) {
                    $this->load->library('upload');
                    $config['upload_path'] = 'uploads/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '300';
                    $config['max_width'] = '300';
                    $config['max_height'] = '80';
                    $config['overwrite'] = FALSE;
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload()) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('message', $error);
                        redirect('settings');
                    }

                    $photo = $this->upload->file_name;
                }
            }

            if (isset($photo)) {
                $data['logo'] = $photo;
            }
        }

        if ($this->form_validation->run() == true && $this->settings_model->updateSetting($data)) {
            $this->session->set_flashdata('message', lang('setting_updated'));
            redirect('settings');
        }
        else {
            $this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
            $this->data['settings'] = $this->site->getSettings();
            $this->data['customers'] = $this->site->getAllCustomers();
            $this->data['categories'] = $this->site->getAllCategories();
            // $this->data['smtp_pass'] = $this->encrypt->decode($this->data['settings']->smtp_pass);
            $this->data['smtp_pass'] = $this->encryption->decrypt($this->data['settings']->smtp_pass);
            $this->data['page_title'] = lang('settings');
            $bc = array(
                array(
                    'link' => '#',
                    'page' => lang('settings')
                )
            );
            $meta = array(
                'page_title' => lang('settings') ,
                'bc' => $bc
            );
            $this->page_construct('settings/index', $this->data, $meta);
        }
    }

    function updates() {
        if (!$this->loggedIn) {
            redirect('login');
        }
        if (DEMO) {
            $this->session->set_flashdata('error', lang('disabled_in_demo'));
            redirect(isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : 'welcome');
        }
        
        if(!$this->site->route_permission('settings_edit')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}

        $this->form_validation->set_rules('purchase_code', lang("purchase_code") , 'required');
        $this->form_validation->set_rules('envato_username', lang("envato_username") , 'required');
        if ($this->form_validation->run() == true) {
            $this->db->update('settings', array(
                'purchase_code' => $this->input->post('purchase_code', TRUE) ,
                'envato_username' => $this->input->post('envato_username', TRUE)
            ) , array(
                'setting_id' => 1
            ));
            redirect('settings/updates');
        }
        else {
            $fields = array(
                'version' => $this->Settings->version,
                'code' => $this->Settings->purchase_code,
                'username' => $this->Settings->envato_username,
                'site' => base_url()
            );
            $this->load->helper('update');
            $protocol = is_https() ? 'https://' : 'http://';
            $updates = get_remote_contents($protocol . 'tecdiary.com/api/v1/update/', $fields);
            $this->data['updates'] = json_decode($updates);
            $bc = array(
                array(
                    'link' => site_url('settings') ,
                    'page' => lang('settings')
                ) ,
                array(
                    'link' => '#',
                    'page' => lang('updates')
                )
            );
            $meta = array(
                'page_title' => lang('updates') ,
                'bc' => $bc
            );
            $this->page_construct('settings/updates', $this->data, $meta);
        }
    }

    function install_update($file, $m_version, $version) {
        if (!$this->loggedIn) {
            redirect('login');
        }
        if (DEMO) {
            $this->session->set_flashdata('error', lang('disabled_in_demo'));
            redirect(isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : 'welcome');
        }

        $this->load->helper('update');
        save_remote_file($file . '.zip');
        $this->tec->unzip('./files/updates/' . $file . '.zip');
        if ($m_version) {
            $this->load->library('migration');
            if (!$this->migration->latest()) {
                $this->session->set_flashdata('error', $this->migration->error_string());
                redirect("settings/updates");
            }
        }

        $this->db->update('settings', array(
            'version' => $version,
            'update' => 0
        ) , array(
            'setting_id' => 1
        ));
        unlink('./files/updates/' . $file . '.zip');
        $this->session->set_flashdata('success', lang('update_done'));
        redirect("settings/updates");
    }

    function backups() {  
        if (array_key_exists("userfile",$_FILES)){ 
            if ($_FILES['userfile']['size'] > 0) {
                $this->load->library('upload');
                $config['upload_path'] = 'files/backups';
                $config['allowed_types'] = 'txt';
                $config['max_size'] = '50000';

                //  $config['file_name'] = 'db-backup-on-' . date("Y-m-d-H-i-s") ;

                $this->upload->initialize($config);
                if (!$this->upload->do_upload()) {
                    $error = $this->upload->display_errors();
                    $this->upload->set_flashdata('error', $error);
                    redirect("settings/backups");
                } else {
                    $file_name = $this->upload->file_name;
                    $this->session->set_flashdata('message', 'Database file successfully uploaded');
                }
            }
        }

        $this->data['files'] = glob('./files/backups/*.zip', GLOB_BRACE);
        $this->data['dbs'] = glob('./files/backups/*.txt', GLOB_BRACE);
        $bc = array(
            array(
                'link' => site_url('settings') ,
                'page' => lang('settings')
            ) ,
            array(
                'link' => '#',
                'page' => lang('backups')
            )
        );
        $meta = array(
            'page_title' => lang('backups') ,
            'bc' => $bc
        );
        $this->page_construct('settings/backups', $this->data, $meta);
    }

    public function send_email($to, $subject, $message, $from = NULL, $from_name = NULL, $attachment = NULL, $cc = NULL, $bcc = NULL) {
        $this->load->library('email');
        $config['protocol'] = $this->Settings->protocol;
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        if ($this->Settings->protocol == 'smtp') {
            $config['smtp_host'] = $this->Settings->smtp_host;
            $config['smtp_user'] = $this->Settings->smtp_user;
            $config['smtp_pass'] = $this->encrypt->decode($this->Settings->smtp_pass);
            $config['smtp_port'] = $this->Settings->smtp_port;
        } elseif ($this->Settings->protocol == 'sendmail') {
            $config['mailpath'] = $this->Settings->mailpath;
        }
        $this->email->initialize($config);

        if ($from && $from_name) {
            $this->email->from($from, $from_name);
        } elseif($from) {
            $this->email->from($from, $this->Settings->site_name);
        }else {
            $this->email->from($this->Settings->default_email, $this->Settings->site_name);
        }

        $this->email->to($to);
        if ($cc) {
            $this->email->cc($cc);
        }
        if ($bcc) {
            $this->email->bcc($bcc);
        }
        $this->email->subject($subject);
        $this->email->message($message);
        if ($attachment) {
            if(is_array($attachment)) {
                $this->email->attach($attachment['file'], '', $attachment['name'], $attachment['mine']);
            } else {
                $this->email->attach($attachment);
            }
        }

        if ($this->email->send()) {
            //echo $this->email->print_debugger(); die();
            return TRUE;
        } else {
            //echo $this->email->print_debugger(); die();
            return FALSE;
        }
    }

    function backup_database() {
        $this->load->dbutil();
        $prefs = array(
            'format' => 'txt',
            'filename' => 'spos_db_backup.sql'
        );
        $back = $this->dbutil->backup($prefs);
        $backup = & $back;
        $db_name = 'CS-db-backup-on-' . date("Y-m-d-H-i-s") . '.txt';
        $db_name_sql = 'CS-db-backup-on-' . date("Y-m-d-H-i-s") . '.sql';
        $save = './files/backups/' . $db_name;
        $save_sql = './files/backups/' . $db_name_sql;
        $this->load->helper('file');
        write_file($save, $backup);
        write_file($save_sql, $backup);
        $this->session->set_flashdata('messgae', lang('db_saved'));
        /// Send mail 
        $to = 'mdhasan9955@gmail.com';
        $subject = 'Backup database';
        $message = 'Massage tex';
        $from = 'wedothewebs@gmail.com';
        $from_name = 'POS System automatic file backup';
        $cc = 'sayem@wedothewebs.com';
        $realpath = realpath(dirname(__DIR__));
        $realpath = str_ireplace('/app','',$realpath);
        $attachment = $realpath.'/files/backups/'.$db_name; 
        //$this->send_email($to, $subject, $message, $from,$from_name,$attachment,$cc);          
        redirect("settings/backups");
    }

    function backup_files() {
        if (DEMO) {
            $this->session->set_flashdata('error', lang('disabled_in_demo'));
            redirect(isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : 'welcome');
        } 
        
        $name = 'file-backup-' . date("Y-m-d-H-i-s");
        $this->tec->zip("./", './files/backups/', $name);
        $this->session->set_flashdata('messgae', lang('backup_saved'));
        redirect("settings/backups");
        exit();
    }

    function restore_database($dbfile) {
        if (DEMO) {
            $this->session->set_flashdata('error', lang('disabled_in_demo'));
            redirect(isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : 'welcome');
        }

        $file = file_get_contents('./files/backups/' . $dbfile . '.txt');
        $this->db->conn_id->multi_query($file);
        $this->db->conn_id->close();
        redirect('logout');
    }

    function download_database($dbfile) {
        if (DEMO) {
            $this->session->set_flashdata('error', lang('disabled_in_demo'));
            redirect(isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : 'welcome');
        }
        $this->load->library('zip');
        $this->zip->read_file('./files/backups/' . $dbfile . '.txt'); 
        $name = $this->Settings->site_name.'db_backup_' . date('Y_m_d_H_i_s') . '.zip';
        $this->zip->download($name);
        exit();
    }

    function download_backup($zipfile) {
        if (DEMO) {
            $this->session->set_flashdata('error', lang('disabled_in_demo'));
            redirect(isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : 'welcome');
        } 

        $this->load->helper('download');
        force_download('./files/backups/' . $zipfile . '.zip', NULL);
        exit();
    }

    function restore_backup($zipfile) {
        if (DEMO) {
            $this->session->set_flashdata('error', lang('disabled_in_demo'));
            redirect(isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : 'welcome');
        }

        $file = './files/backups/' . $zipfile . '.zip';
        $this->tec->unzip($file, './');
        $this->session->set_flashdata('success', lang('files_restored'));
        redirect("settings/backups");
        exit();
    }

    function delete_database($dbfile) {
        if (DEMO) {
            $this->session->set_flashdata('error', lang('disabled_in_demo'));
            redirect(isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : 'welcome');
        }

        unlink('./files/backups/' . $dbfile . '.txt');
        unlink('./files/backups/' . $dbfile . '.sql');
        $this->session->set_flashdata('messgae', lang('db_deleted'));
        redirect("settings/backups");
    }

    function delete_backup($zipfile) {
        if (DEMO) {
            $this->session->set_flashdata('error', lang('disabled_in_demo'));
            redirect(isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : 'welcome');
        }

        unlink('./files/backups/' . $zipfile . '.zip');
        $this->session->set_flashdata('messgae', lang('backup_deleted'));
        redirect("settings/backups");
    }
}

