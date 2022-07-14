<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {
        public function __construct() {
            parent::__construct();
            // Loading url untuk load file dan url
            $this->load->helper('url');
        }

        // Index untuk client side denngan route ke folder views
        public function index()
	{
        $data['title']       = 'My bootstrap template';
		// $data['view'] = $this->load->view('home', $data, true);
        // $this->load->view('_layout_index', $data);
        // Awalan
		$this->load->view('templates/header', $data);
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
	}
    }
?>