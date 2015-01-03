<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Groups_Model extends CI_Model{

  private $_table = 'groups';

  public function get_all(){
    return $this->db->get($this->_table)->result();
  }

  public function get_all_names(){
    return $this->db->select("g_name")->from($this->_table)->get()->result();
  }

  public function get_by_id($id){
    return $this->db->select("*")->from($this->_table)->where('g_id',$id)->get()->result();
  }

  public function insert($data){
    return $this->db->insert($this->_table,$data);
  }

  public function update($id,$data){
    return $this->db->update($this->_table,$data,array('g_id'=>$id));
  }
}