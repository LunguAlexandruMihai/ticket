<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status extends MY_Controller{

  public function __construct(){
    parent::__construct();

    if($this->session->userdata('logged_in') == false)
      redirect('signin');

    $this->load->model('status_model');
    $this->load->model('groups_model');
  }

  public function index(){
    $data = array(
      'main_content'  => 'status/status_index',
      'title'         => 'Tickets Dashboard',
      'page'          => lang('status_page_header'),
      'header'        => 'Tickets Admin Panel',
      'perms'         => $this->groups_model->get_by_id($this->session->userdata('user_id'))[0],
      'user'          => $this->session->userdata('user_email'),
      'status'        => $this->status_model->get_all()
    );

    $this->load->view('page',$data);
  }

  public function status_label($str){

    if($str == 0){
      $this->form_validation->set_message('p_label', 'You must choose a color label for priority!');
      return false;
    }else{
      return true;
    }

  }
}