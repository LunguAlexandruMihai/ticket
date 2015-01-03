<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tickets extends MY_Controller{

  public function __construct(){
    parent::__construct();

    if($this->session->userdata('logged_in') == false)
      redirect('signin');

    $this->load->model('tickets_model');
    $this->load->model('status_model');
    $this->load->model('groups_model');
  }
  public function index(){
    $data = array(
      'main_content'  => 'tickets/ticket_index',
      'title'         => 'Tickets Dashboard',
      'page'          => 'Index page',
      'header'        => 'Tickets Admin Panel',
      'perms'         => $this->groups_model->get_by_id($this->session->userdata('user_id'))[0],
      'user'          => $this->session->userdata('user_email'),
      'tickets'       => $this->tickets_model->get_all()
    );

    $this->load->view('page', $data);
  }
  public function add(){
    $data = array(
      'main_content'  => 'tickets/ticket_add',
      'title'         => 'Tickets Dashboard',
      'page'          => 'Index page',
      'header'        => 'Tickets Admin Panel',
      'perms'         => $this->groups_model->get_by_id($this->session->userdata('user_id'))[0],
      'user'          => $this->session->userdata('user_email'),
      'tickets'       => $this->tickets_model->get_all()
    );

    $this->load->view('page', $data);
  }

  public function edit($id){
    $data = array(
      'main_content'  => 'tickets/ticket_add',
      'title'         => 'Tickets Dashboard',
      'page'          => 'Index page',
      'header'        => 'Tickets Admin Panel',
      'perms'         => $this->groups_model->get_by_id($this->session->userdata('user_id'))[0],
      'user'          => $this->session->userdata('user_email'),
      'ticket'       => $this->tickets_model->get_all()
    );

    $this->load->view('page', $data);
  }
  public function delete($id){}

}