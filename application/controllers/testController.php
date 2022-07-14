<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class testController extends CI_Controller {
        public function __construct() {
            parent::__construct();
            // Loading url untuk load file dan url
            $this->load->helper('url');
        }

        // Index untuk client side denngan route ke folder views
        public function index()
	{
        // Awalan
		$this->load->view('testing');
	}
    }
?>