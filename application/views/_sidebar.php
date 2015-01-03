<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      <li class="sidebar-search">
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
        </div>
        <!-- /input-group -->
      </li>
      <li>
        <?php if($perms->g_dashboard_view == "yes"):?>
          <a class="active" href="<?php echo base_url();?>">
            <i class="fa fa-dashboard fa-fw"></i>
            <?php echo ucfirst(lang('sidebar_dashboard_text_menu'));?>
          </a>
        <?php endif;?>
        <?php if($perms->g_tickets_view == "yes"):?>
          <a href="<?php echo base_url();?>tickets">
            <i class="fa fa-support"></i>
            <?php echo ucfirst(lang('sidebar_tickets_text_menu'));?>
          </a>
        <?php endif;?>
        <?php if($perms->g_status_view == "yes"):?>
          <a href="<?php echo base_url();?>status">
            <i class="fa fa-tag"></i>
            <?php echo ucfirst(lang('sidebar_status_text_menu'));?>
          </a>
        <?php endif;?>
        <?php if($perms->g_groups_view == "yes"):?>
          <a href="<?php echo base_url();?>groups">
            <i class="fa fa-group"></i>
            <?php echo ucfirst(lang('sidebar_groups_text_menu'));?>
          </a>
        <?php endif;?>
        <?php if($perms->g_users_view == "yes"):?>
          <a href="<?php echo base_url();?>users">
            <i class="fa fa-user"></i>
            <?php echo ucfirst(lang('sidebar_users_text_menu'));?>
          </a>
        <?php endif;?>
      </li>
    </ul>
  </div>
  <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->