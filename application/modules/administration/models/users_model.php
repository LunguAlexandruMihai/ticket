<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Users_Model extends CI_Model{

  private $_table = 'users';

  public function get_all(){
    return $this->db->get($this->_table)->result();
  }
}