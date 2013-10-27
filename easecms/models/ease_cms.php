<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 *  @author: EASE CMS, Money Land Solutions, Ltd
 *  @file: ease_cms.php
 */

class Ease_cms extends CI_Model {
        
    function __construct()
    {
        parent::__construct();
    }
    
    function load_addons()
    {
        $dir = './add-ons/';
        $addon_path = '../../add-ons/';
        
        $exclude_files = array("config.php","index.html",".htaccess","setup","data","views");

        $root = array_diff(scandir($dir, 1), array('..', '.'));
        foreach ($root as $folder){

            $files = array_diff(scandir($dir . $folder, 1), array('..', '.'));
               
            foreach ($files as $file)
            { 
                if (!in_array($file,$exclude_files)) 
                {
                    $clean_file = basename($file, ".php");
                    $this->load->model($addon_path . $folder . '/' . $clean_file);
                }
            }
        }
    }
    
    function addon_template($addon_name,$template_name,$data)
    {
        $path = '../../add-ons/' . $addon_name . '/views/' . $template_name;
        return $this->load->view($path, $data);
    }
}