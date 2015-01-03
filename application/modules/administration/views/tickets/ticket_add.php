<div id="page-wrapper">
  <?php if($perms->g_tickets_add == "no"):?>
    <div class="row">
      <div class="alert alert-danger">
        <?php echo lang('error_ticket_add_denied');?>
      </div>
    </div>
  <?php else:?>
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          <?php echo lang('ticket_page_header');?>
          <a href="<?php echo base_url();?>ticket/add" class="btn btn-success pull-right">
            <i class="fa fa-plus"></i>
            <?php echo lang('ticket_button_add_text');?>
          </a>
        </h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-support fa-fw"></i>
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <?php if(empty($tickets)):?>
                  <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <?php echo lang('error_tickets_empty');?>
                  </div>
                <?php else:?>
                  <div class="table-responsive">
                    <table class="table table-hover ">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th><?php echo lang('ticket_label_title');?></th>
                        <th><?php echo lang('ticket_label_status');?></th>
                        <th><?php echo lang('ticket_label_content');?></th>
                        <th><?php echo lang('ticket_label_created_at');?></th>
                        <th><?php echo lang('ticket_label_by');?></th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $i=1;foreach($tickets as $ticket):?>
                        <td>
                          <?php echo $i;?>
                        </td>
                        <td>
                          <?php echo $ticket->t_title;?>
                        </td>
                        <td>
                          <?php echo $this->status_model->get_status_from_id_to_html($ticket->t_status);?>
                        </td>
                        <td>

                        </td>
                        <td>
                          <?php echo $ticket->t_created_at;?>
                        </td>
                        <td>
                          <?php echo $ticket->t_created_by;?>
                        </td>
                        <td>
                          <a href="#" class="btn btn-default">
                            <i class="fa fa-eye"></i>
                            <?php echo lang('ticket_button_view_text');?>
                          </a>
                          <?php if($perms->g_tickets_edit == "yes"):?>
                            <a href="#" class="btn btn-success">
                              <i class="fa fa-pencil"></i>
                              <?php echo lang("ticket_button_edit_text");?>
                            </a>
                          <?php endif;?>
                          <?php if($perms->g_tickets_delete == "yes"):?>
                            <a href="#" class="btn btn-danger">
                              <i class="fa fa-trash"></i>
                              <?php echo lang("ticket_button_delete_text");?>
                            </a>
                          <?php endif;?>
                        </td>
                        <?php $i++;endforeach;?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                <?php endif;?>
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