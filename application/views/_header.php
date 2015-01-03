<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title .'-'. $page;?></title>

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="<?php echo base_url();?>assets/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

  <!-- Timeline CSS -->
  <link href="<?php echo base_url();?>assets/css/plugins/timeline.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?php echo base_url();?>assets/css/sb-admin-2.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="<?php echo base_url();?>assets/css/plugins/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- jQuery Version 1.11.0 -->
  <script src="<?php echo base_url();?>assets/js/jquery-1.11.0.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="<?php echo base_url();?>assets/js/plugins/metisMenu/metisMenu.min.js"></script>


  <!-- Custom Theme JavaScript -->
  <script src="<?php echo base_url();?>assets/js/sb-admin-2.js"></script>


  <script src="<?php echo base_url();?>assets/js/delete_status.js"></script>

  <base url="<?php echo base_url();?>" />
</head>

<body>
<div class="wrapper">
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>admin/index"><?php echo $header;?></a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
      <!-- /.dropdown -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-user fa-fw"></i> Welcome back , <?php echo $user;?>  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
          </li>
          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
          </li>
          <li class="divider"></li>
          <li><a href="<?php echo base_url();?>signout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          </li>
        </ul>
        <!-- /.dropdown-user -->
      </li>
      <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <?php $this->load->view('_sidebar');?>
  </nav>