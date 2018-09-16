<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function index(){
    //Access for Admin
      if($this->session->userdata('level')==='1'){
          $data['title'] ='dashboard';
          $this->load->view('header');
          $this->load->view('dashboard/dashboard', $data);
      }else{
          echo "Access Denied";
      }

  }

  function employee(){
    //Access for employee
    if($this->session->userdata('level')==='2'){
      $data['title'] ='dashboard';
      $this->load->view('header');
      $this->load->view('dashboard/dashboard', $data);
    }else{
        echo "Access Denied";
    }
  }

  function student(){
    //access for student
    if($this->session->userdata('level')==='3'){
      $data['title'] ='dashboard';
      $this->load->view('header');
      $this->load->view('dashboard/dashboard', $data);
    }else{
        echo "Access Denied";
    }
  }

}
