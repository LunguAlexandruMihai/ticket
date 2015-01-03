<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="panel panel-red">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-support fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge"><?php echo $total_tickets;?></div>
              <div>
                <?php echo ($total_tickets == 1)
                  ? lang('dashboard_panel_ticket_text')
                  : lang('dashboard_panel_tickets_text');
                ?>!
              </div>
            </div>
          </div>
        </div>
        <a href="#">
          <div class="panel-footer">
            <a href="<?php echo base_url();?>tickets" >
              <span class="pull-left"><?php echo lang('dashboard_view_details');?></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            </a>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-tag fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge"><?php echo $total_status;?></div>
              <div><?php echo ($total_status == 1)
                  ? lang('dashboard_panel_status_text')
                  : lang('dashboard_panel_statuses_text');
                ?>!</div>
            </div>
          </div>
        </div>
        <a href="#">
          <div class="panel-footer">
            <a href="<?php echo base_url();?>status" >
              <span class="pull-left"><?php echo lang('dashboard_view_details');?></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            </a>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="panel panel-green">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-user fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge"><?php echo $total_users;?></div>
              <div><?php echo ($total_users == 1)
                  ? lang('dashboard_panel_user_text')
                  : lang('dashboard_panel_users_text');
                ?>!
              </div>
            </div>
          </div>
        </div>
        <a href="#">
          <div class="panel-footer">
            <a href="<?php echo base_url();?>users" >
              <span class="pull-left"><?php echo lang('dashboard_view_details');?></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            </a>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="panel panel-yellow">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-users fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge"><?php echo $total_groups;?></div>
              <div><?php echo ($total_groups == 1)
                  ? lang('dashboard_panel_group_text')
                  : lang('dashboard_panel_groups_text');
                ?>!
              </div>
            </div>
          </div>
        </div>
        <a href="#">
          <div class="panel-footer">
            <a href="<?php echo base_url();?>groups" >
              <span class="pull-left"><?php echo lang('dashboard_view_details');?></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            </a>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /#page-wrapper -->