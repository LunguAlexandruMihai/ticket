<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller{

  public function __construct(){
    parent::__construct();

    if($this->session->userdata('logged_in') == true)
      redirect('');

    $this->load->model('auth_model');
  }

  public function signin(){
    $data_header = array('title'=>'Ticket Login');

    if($this->form_validation->run('signin') !== FALSE){
      if($this->auth_model->check_user(
        $this->input->post('email'),
        $this->input->post('password'))
      ){
        $this->session->set_userdata(
          array(
            'user_id'     => $this->auth_model->get_user_id($this->input->post('email'))[0]->user_id,
            'user_email'  => $this->input->post('email'),
            'logged_in'   => true
          )
        );
        redirect('');
      }else{
        $this->load->view('_header',$data_header);
        $this->load->view('signin',array('sign_in_error'=>'<b>Username/Password</b> combination is incorrect'));
        $this->load->view('_footer');
      }
    }else {
      $this->load->view('_header', $data_header);
      $this->load->view('signin');
      $this->load->view('_footer');
    }

  }


  public function signout(){
    $this->session->sess_destroy();
    redirect('signin');
  }
}