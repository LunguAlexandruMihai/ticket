<div id="page-wrapper">
  <?php if($perms->g_groups_view == "no"):?>
    <div class="row">
      <div class="alert alert-danger">
        <?php echo lang('error_groups_view_denied');?>
      </div>
    </div>
  <?php else:?>
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          <?php echo lang('groups_page_header');?>
          <?php if($perms->g_groups_add == "yes"):?>
            <a href="<?php echo base_url();?>groups/add" class="btn btn-success pull-right">
              <i class="fa fa-plus"> <?php echo lang('groups_button_add_text');?></i>
            </a>
          <?php endif;?>
        </h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <div class="row">
      <div class="col-lg-12">
        <?php foreach($groups as $group):?>
          <div class="col-md-6" id="group" data-id="<?php echo $group->g_id;?>">
            <div class="panel panel-default">
              <div class="panel-heading">
                <?php echo $group->g_name;?>
              </div>
              <div class="panel-body" >

                <ul id="groupTab<?php echo $group->g_id;?>" class="nav nav-tabs">
                  <li class="active">
                    <a href="#dashboard<?php echo $group->g_id;?>" data-toggle="tab"><?php echo lang('groups_dashboard_label');?></a>
                  </li>
                  <li><a href="#tickets<?php echo $group->g_id;?>" data-toggle="tab"><?php echo lang('groups_tickets_label');?></a></li>
                  <li><a href="#status<?php echo $group->g_id;?>" data-toggle="tab"><?php echo lang('groups_status_label');?></a></li>
                  <li><a href="#groups<?php echo $group->g_id;?>" data-toggle="tab"><?php echo lang('groups_groups_label');?></a></li>
                  <li><a href="#users<?php echo $group->g_id;?>" data-toggle="tab"><?php echo lang('groups_users_label');?></a></li>
                </ul>
                <div id="groupTabContent" class="tab-content">
                  <div class="tab-pane fade active" id="dashboard<?php echo $group->g_id;?>">
                    <table class="table table-bordered">
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_dashboard_view'));?></td>
                        <td>
                          <?php if($group->g_dashboard_view == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_dashboard_view'));?></td>
                        <td>
                          <?php if($group->g_dashboard_view == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_dashboard_view'));?></td>
                        <td>
                          <?php if($group->g_dashboard_view == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_dashboard_view'));?></td>
                        <td>
                          <?php if($group->g_dashboard_view == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="tickets<?php echo $group->g_id;?>">
                    <table class="table table-bordered">
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_ticket_view'));?></td>
                        <td>
                          <?php if($group->g_tickets_view == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_ticket_add'));?></td>
                        <td>
                          <?php if($group->g_tickets_add == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_ticket_edit'));?></td>
                        <td>
                          <?php if($group->g_tickets_edit == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_ticket_delete'));?></td>
                        <td>
                          <?php if($group->g_tickets_delete == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="groups<?php echo $group->g_id;?>">
                    <table class="table table-bordered">
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_groups_view'));?></td>
                        <td>
                          <?php if($group->g_groups_view == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_groups_add'));?></td>
                        <td>
                          <?php if($group->g_groups_add == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_groups_edit'));?></td>
                        <td>
                          <?php if($group->g_groups_edit == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_groups_delete'));?></td>
                        <td>
                          <?php if($group->g_groups_delete == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="status<?php echo $group->g_id;?>">
                    <table class="table table-bordered">
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_status_view'));?></td>
                        <td>
                          <?php if($group->g_status_view == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_status_add'));?></td>
                        <td>
                          <?php if($group->g_status_add == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_status_edit'));?></td>
                        <td>
                          <?php if($group->g_status_edit == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_status_delete'));?></td>
                        <td>
                          <?php if($group->g_status_delete == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="users<?php echo $group->g_id;?>">
                    <table class="table table-bordered">
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_users_view'));?></td>
                        <td>
                          <?php if($group->g_users_view == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_users_add'));?></td>
                        <td>
                          <?php if($group->g_users_add == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_users_edit'));?></td>
                        <td>
                          <?php if($group->g_users_edit == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                      <tr>
                        <td><?php echo ucfirst(lang('groups_label_can_status_delete'));?></td>
                        <td>
                          <?php if($group->g_users_delete == "yes"):?>
                            <span class="label label-success">
                              <?php echo lang('groups_yes_text');?>
                            </span>
                          <?php else:?>
                            <span class="label label-danger">
                              <?php echo lang('groups_no_text');?>
                            </span>
                          <?php endif;?>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="panel-footer">
                <?php if($perms->g_groups_edit == "yes"):?>
                  <a
                    href="<?php echo base_url();?>groups/edit/<?php echo $group->g_id;?>"
                    class="btn btn-success">
                    <i class="fa fa-pencil"></i>
                    <?php echo lang('groups_button_edit_text');?>
                  </a>
                <?php endif;?>
                <?php if($perms->g_groups_delete == "yes"):?>
                  <a
                    href="<?php echo base_url();?>groups/delete/<?php echo $group->g_id;?>"
                    class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                    <?php echo lang('groups_button_delete_text');?>
                  </a>
                <?php endif;?>
              </div>
            </div>
          </div>
        <?php endforeach;?>

      </div>
      <!-- /.col-lg-8 -->
    </div>
  <?php endif;?>
  <!-- /.row -->
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