<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status_Model extends CI_Model{

  private $_table = 'status';

  public function get_all(){
    return $this->db->get($this->_table)->result();
  }
  public function insert($data){
    return $this->db->insert($this->_table,$data);
  }
  public function get_by($id){
    return $this->db->get_where($this->_table,array('s_id'=>$id))->result();
  }
  public function edit($id){}
  public function delete($id){
    return ($this->db->delete($this->_table,array('s_id'=>$id))) ? true : false;
  }

  public function get_status_from_id_to_html($id){
    $result = $this->db->get_where($this->_table,array('s_id'=>$id))->result();
    $html = '';
    foreach($result as $status){
      $html .= '<span class="label label-'.$status->s_label.'">'.$status->s_name.'</span>';
    }

    return $html;
  }
}