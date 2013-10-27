<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 *  @author: EASE CMS, Money Land Solutions, Ltd
 *  @file: home.php
 */

class Home extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        
        /* load EASE CMS Addons */
        $this->ease_cms->load_addons();
        
    }
        
    public function index()
    {
        //$this->load->view('../../easecms/themes/default/main/home');
        
    }
}


/* End of file home.php */
/* Location: ./application/controllers/home.php */