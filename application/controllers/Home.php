<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
 public function index(){
    $this->load->view('v_header');
    $this->load->view('v_home');
    }

 public function menu(){
    $this->load->view('v_header');
    $this->load->view('v_menu.php');
    }
}