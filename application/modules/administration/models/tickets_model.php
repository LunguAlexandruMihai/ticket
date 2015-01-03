<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Tickets_Model extends CI_Model{

  public function get_all(){
    return $this->db->get('tickets')->result();
  }
  public function get_by_id(){}
  public function edit_ticket($id){}
  public function delete_ticket($id){}
  public function add(){}
}