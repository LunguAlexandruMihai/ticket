<?php

class Dashboard extends MY_Controller{

  public function __construct(){
    parent::__construct();

    if($this->session->userdata('logged_in') != true)
      redirect('signin');

    $this->load->model('groups_model');
    $this->load->model('status_model');
    $this->load->model('tickets_model');
    $this->load->model('users_model');

  }

  public function index(){

    $data = array(
      'main_content'  => 'dashboard/dashboard_index',
      'title'         => 'Tickets Dashboard',
      'page'          => 'Index page',
      'header'        => 'Tickets Admin Panel',
      'perms'         => $this->groups_model->get_by_id($this->session->userdata('user_id'))[0],
      'user'          => $this->session->userdata('user_email'),
      'total_groups'  => count($this->groups_model->get_all()),
      'total_tickets' => count($this->tickets_model->get_all()),
      'total_users'   => count($this->users_model->get_all()),
      'total_status'  => count($this->status_model->get_all())
    );

    $this->load->view('page',$data);
  }


}