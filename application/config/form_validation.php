<?php

$config = array(
  'signin' => array(
    array(
      'field' => 'email',
      'label' => 'Email',
      'rules' => 'required|trim|valid_email|xss_clean'
    ),
    array(
      'field' => 'password',
      'label' => 'Password',
      'rules' => 'required|trim|md5|xss_clean'
    ),
  ),
  'status' => array(
    array(
      'field' => 's_name',
      'label' => 'Name',
      'rules' => 'required|min_length[2]|max_length[15]|trim|xss_clean|is_unique[status.s_name]'
    ),
    array(
      'field' => 's_label',
      'label' => 'Status',
      'rules' => 'callback_status_label'
    )
  ),
  'groups' => array(
    array(
      'field' => 'g_name',
      'label' => '',
      'rules' => 'required|min_length[2]|max_length[20]|trim|xss_clean'
    )
  )
);