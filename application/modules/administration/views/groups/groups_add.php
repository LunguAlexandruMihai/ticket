<div id="page-wrapper">
  <?php if($perms->g_groups_add == "no"):?>
    <div class="row">
      <div class="alert alert-danger">
        <?php echo lang('error_groups_add_denied');?>
      </div>
    </div>
  <?php else:?>
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          <?php echo lang('groups_page_add_header');?>
          <a href="<?php echo base_url();?>groups" class="btn btn-info pull-right">
            <i class="fa fa-hand-o-left"></i>
            <?php echo lang('groups_button_back_text');?>
          </a>
        </h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-users fa-fw"></i>
            <?php echo lang('groups_page_sub_header');?>
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="col-md-6" id="group">
                  <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                  <?php if(isset($group_add_success_msg) && $group_add_success_msg == true):?>
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <?php echo lang('group_add_success_msg');?>
                    </div>
                  <?php endif;?>
                  <?php if(isset($error_group_error_success_msg) && $error_group_error_success_msg == true):?>
                    <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <?php echo lang('error_group_add_error_msg');?>
                    </div>
                  <?php endif;?>
                  <?php echo form_open('groups/add',array('role'=>'form','autocomplete'=>'off'));?>
                    <div class="panel panel-default">
                    <div class="panel-heading">
                      <?php echo form_input(
                        array(
                          'name'        =>  'g_name',
                          'class'       =>  'form-control',
                          'placeholder' => lang('group_name_placeholder'),
                          'autofocus'
                        )
                      );
                      ?>
                    </div>
                    <div class="panel-body" >
                      <ul id="groupTab" class="nav nav-tabs">
                        <li class="active">
                          <a href="#dashboard" data-toggle="tab"><?php echo lang('groups_dashboard_label');?></a>
                        </li>
                        <li><a href="#tickets" data-toggle="tab"><?php echo lang('groups_tickets_label');?></a></li>
                        <li><a href="#status" data-toggle="tab"><?php echo lang('groups_status_label');?></a></li>
                        <li><a href="#groups" data-toggle="tab"><?php echo lang('groups_groups_label');?></a></li>
                        <li><a href="#users" data-toggle="tab"><?php echo lang('groups_users_label');?></a></li>
                      </ul>
                      <div id="groupTabContent" class="tab-content">
                        <div class="tab-pane fade active" id="dashboard">
                          <table class="table table-bordered">
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_dashboard_view'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_dashboard_view',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <div class="tab-pane fade" id="tickets">
                          <table class="table table-bordered">
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_ticket_view'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_tickets_view',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_ticket_add'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_tickets_add',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_ticket_edit'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_tickets_edit',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_ticket_delete'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_tickets_delete',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <div class="tab-pane fade" id="groups">
                          <table class="table table-bordered">
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_groups_view'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_groups_view',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_groups_add'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_groups_add',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_groups_edit'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_groups_edit',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_groups_delete'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_groups_delete',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <div class="tab-pane fade" id="status">
                          <table class="table table-bordered">
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_status_view'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_status_view',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_status_add'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_status_add',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_status_edit'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_status_edit',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_status_delete'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_status_add',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <div class="tab-pane fade" id="users">
                          <table class="table table-bordered">
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_users_view'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_users_view',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_users_add'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_users_add',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_users_edit'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_users_edit',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo ucfirst(lang('groups_label_can_status_delete'));?></td>
                              <td>
                                <?php echo form_dropdown(
                                  'g_users_delete',
                                  array(
                                    'yes'=> lang('groups_yes_text'),
                                    'no' => lang('groups_no_text')
                                  ),
                                  'no',
                                  'class="form-control"'
                                );?>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="panel-footer">
                      <?php echo form_button(
                        array(
                          'type'    => 'submit',
                          'class'   => 'btn btn-success',
                          'content' => '<i class="fa fa-plus"></i> '.lang('groups_button_add_text')
                        )
                       );
                      ?>
                    </div>
                  </div>
                  <?php echo form_close();?>
                </div>
              </div>
              <!-- /.col-lg-4 (nested) -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
      </div>
      <!-- /.col-lg-8 -->
    </div>
    <!-- /.row -->
  <?php endif;?>
</div>


<div class="modal fade bs-example-modal-lg" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="editModal">Modal title</h4>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" name="email" id="edit_email_sub" placeholder="Email" value=""/>
      </div>
      <div class="modal-footer">'+
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>