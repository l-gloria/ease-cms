<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Example_addon extends CI_Model {

        function __construct()
        {
            parent::__construct();
            $this->index();
        }

        function index()
        {
            $this->addon();
        }
        
        function addon()
        {
            require('data/config.php');
            
            $data["addon_view"] = $this->hello_world();
            $this->ease_cms->addon_template($addon,$view,$data);
        }
        
        function hello_world()
        {
            $hello = "Hello World! This is my first Add-on.";
            return $hello;
        }
    }