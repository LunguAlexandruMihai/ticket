<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_Model extends CI_Model{

  private $_table = "users";

  public function get_all(){
    return $this->db->get($this->_table)->result();
  }

  public function get_by_id($id){
    return $this->db->get_where($this->_table,array('user_id'=>$id))->result();
  }

  public function get_user_id($email){
    return $this->db->select('user_id')->from($this->_table)->where('user_email',$email)->get()->result();
  }

  public function delete($id){
    $insert = $this->db->delete($this->_table,array('user_id'=>$id));
    return ($insert) ? true : false;
  }

  public function check_user($user_email,$user_pass){
    $query = $this->db->get_where(
      $this->_table,
      array(
        'user_email'    =>  $user_email,
        'user_password' =>  $user_pass
      )
    );

    if($query->num_rows() == 1)
      return true;
    else
      return false;
  }

}
