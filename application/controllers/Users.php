<?php

    class Users extends CI_Controller{
        public function index(){
            $this->load->view('Users/header');
            $this->load->view('Users/login');
        }
    }

?>