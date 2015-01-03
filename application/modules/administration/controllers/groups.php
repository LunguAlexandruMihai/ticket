<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Groups extends MY_Controller{

  public function __construct(){
    parent::__construct();

    if($this->session->userdata('logged_in') != true)
      redirect('');

    $this->load->model('groups_model');
  }

  public function index(){
    $data = array(
      'main_content'  => 'groups/groups_index',
      'title'         => 'Tickets Dashboard',
      'page'          => 'Groups page',
      'header'        => 'Tickets Admin Panel',
      'perms'         => $this->groups_model->get_by_id($this->session->userdata('user_id'))[0],
      'user'          => $this->session->userdata('user_email'),
      'groups'        => $this->groups_model->get_all()
    );

    $this->load->view('page',$data);
  }

  public function add()
  {
    $data = array(
      'main_content'  => 'groups/groups_add',
      'title'         => 'Tickets Dashboard',
      'page'          => 'Groups add page',
      'header'        => 'Tickets Admin Panel',
      'perms'         => $this->groups_model->get_by_id($this->session->userdata('user_id'))[0],
      'user'          => $this->session->userdata('user_email'),
      'groups'        => $this->groups_model->get_all()
    );

    if ($this->form_validation->run('groups') !== FALSE) {
      $insert_data = array(
        'g_name'            => $this->input->post('g_name'),
        'g_dashboard_view'  => $this->input->post('g_dashboard_view'),
        'g_tickets_view'    => $this->input->post('g_tickets_view'),
        'g_tickets_add'     => $this->input->post('g_tickets_add'),
        'g_tickets_edit'    => $this->input->post('g_tickets_edit'),
        'g_tickets_delete'  => $this->input->post('g_tickets_delete'),
        'g_groups_view'     => $this->input->post('g_groups_view'),
        'g_groups_add'      => $this->input->post('g_groups_add'),
        'g_groups_edit'     => $this->input->post('g_groups_edit'),
        'g_groups_delete'   => $this->input->post('g_groups_delete'),
        'g_status_view'     => $this->input->post('g_status_view'),
        'g_status_add'      => $this->input->post('g_status_add'),
        'g_status_edit'     => $this->input->post('g_status_edit'),
        'g_status_delete'   => $this->input->post('g_status_delete'),
        'g_users_view'      => $this->input->post('g_users_view'),
        'g_users_add'       => $this->input->post('g_users_add'),
        'g_users_edit'      => $this->input->post('g_users_edit'),
        'g_users_delete'    => $this->input->post('g_users_delete')
      );
      if ($this->groups_model->insert($insert_data)) {
        $data['group_add_success_msg'] = true;
        $this->load->view('page', $data);
      } else {
        $data['error_group_add_error_msg'] = true;
        $this->load->view('page', $data);
      }
    } else {
      $this->load->view('page', $data);
    }
  }

  public function edit($id){
    $data = array(
      'main_content'  => 'groups/groups_edit',
      'title'         => 'Tickets Dashboard',
      'page'          => 'Group edit page',
      'header'        => 'Tickets Admin Panel',
      'perms'         => $this->groups_model->get_by_id($this->session->userdata('user_id'))[0],
      'user'          => $this->session->userdata('user_email'),
      'group'         => $this->groups_model->get_by_id($id)[0]
    );

    if ($this->form_validation->run('groups') !== FALSE) {
      //die($data['group']->g_name ." : ".$this->input->post('g_name'));

      $update_data = array(
        'g_dashboard_view'  => $this->input->post('g_dashboard_view'),
        'g_tickets_view'    => $this->input->post('g_tickets_view'),
        'g_tickets_add'     => $this->input->post('g_tickets_add'),
        'g_tickets_edit'    => $this->input->post('g_tickets_edit'),
        'g_tickets_delete'  => $this->input->post('g_tickets_delete'),
        'g_groups_view'     => $this->input->post('g_groups_view'),
        'g_groups_add'      => $this->input->post('g_groups_add'),
        'g_groups_edit'     => $this->input->post('g_groups_edit'),
        'g_groups_delete'   => $this->input->post('g_groups_delete'),
        'g_status_view'     => $this->input->post('g_status_view'),
        'g_status_add'      => $this->input->post('g_status_add'),
        'g_status_edit'     => $this->input->post('g_status_edit'),
        'g_status_delete'   => $this->input->post('g_status_delete'),
        'g_users_view'      => $this->input->post('g_users_view'),
        'g_users_add'       => $this->input->post('g_users_add'),
        'g_users_edit'      => $this->input->post('g_users_edit'),
        'g_users_delete'    => $this->input->post('g_users_delete')
      );

      if($this->input->post('g_name') != $data['group']->g_name)
        $update_data['g_name'] = $this->input->post('g_name');

      if ($this->groups_model->update($id,$update_data)) {
        $data['group_edit_success_msg'] = true;
        $this->load->view('page', $data);
      } else {
        $data['error_group_edit_error_msg'] = true;
        $this->load->view('page', $data);
      }
    } else {
      $this->load->view('page', $data);
    }
  }
}