<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KP-SPAMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('dist/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('dist/css/skins/_all-skins.min.css') ?>">

  <link rel="stylesheet" href="<?= base_url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- temp -->


    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>KP-SPAMS</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell"></i>
                <span class="label label-warning"></span>
              </a>
              <ul class="dropdown-menu">
          
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                   
                  </ul>
                </li>
                
              </ul>
            </li>
        
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('image/user.png'); ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= $this->session->userdata('ses_nama'); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url('image/user.png'); ?>" class="img-circle" alt="User Image">

                  <p>
                    <?= $this->session->userdata('ses_nama'); ?>
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url() . 'login/logout' ?>" class="btn btn-default btn-flat">Logout</a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </nav>
    </header>

