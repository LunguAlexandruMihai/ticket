<div id="page-wrapper">
  <?php if($perms->g_status_view == "no"):?>
    <div class="row">
      <div class="alert alert-danger">
        <?php echo lang('error_status_view_denied');?>
      </div>
    </div>
  <?php else:?>
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"><?php echo ucfirst(lang('status_page_header'));?></h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <div class="row">
      <div class="col-md-6">
        <?php if(empty($status)):?>
          <div class="alert alert-danger">
            <?php echo lang('error_status_empty');?>
          </div>
        <?php else:?>
          <div class="panel panel-primary">
          <div class="panel-heading"><?php echo ucfirst(lang('status_panel_header'));?></div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                <th>#</th>
                <th>Name</th>
                <th>Label</th>
                <th></th>
                </thead>
                <tbody>
                <?php $i=1;foreach($status as $s):?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $s->s_name;?></td>
                    <td><?php echo $this->status_model->get_status_from_id_to_html($s->s_id);?></td>
                    <td>
                      <a
                        href="<?php echo base_url();?>admin/status/edit/<?php echo $s->s_id;?>"
                        class="btn btn-success">
                        <i class="fa fa-pencil"></i> Edit
                      </a>
                      <a
                        id                          = "deleteStatus"
                        href                        = "#"
                        class                       = "btn btn-danger"
                        data-delete-modal-header    = "<?php //echo sprintf(lang('status_modal_delete_header'),$s->s_label,$s->s_name);?>"
                        data-delete-modal-body      = "<?php //echo preg_replace(array('%label%','%name%'),array($s->s_label,$s->s_name),lang('status_modal_delete_body'));?>"
                        data-delete-button-text     = "<?php echo ucfirst(lang('status_delete_button_text'));?>"
                        data-close-button-text      = "<?php echo ucfirst(lang('status_close_button_text'));?>"
                        data-toggle                 = "modal"
                        data-target                 = "#deleteModal">
                        <i class="fa fa-trash"></i>
                        <?php echo ucfirst(lang('status_delete_button_text'));?>
                      </a>
                    </td>
                  </tr>
                  <?php $i++;endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <?php endif;?>
      </div>

      <div class="col-md-6">

      </div>

    </div>
  <?php endif;?>
  <!-- /.row -->
</div>

<!-- /#deleteModal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="deleteModalLabel"></h4>
      </div>
      <div class="modal-body" id="deleteModalBody">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="" id="deleteButton" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>