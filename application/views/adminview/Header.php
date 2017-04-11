<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Management Competition System</title>
  <base href="<?php echo base_url();?>" />
  <base src="<?php echo base_url();?>" />

  <link rel="shortcut icon" href="assets/dashboard/dist/img/ico.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/dashboard/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dashboard/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="assets/dashboard/dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" href="assets/dashboard/plugins/datatables/dataTables.bootstrap.css">

  <link rel="stylesheet" href="assets/time/jquery.countdown.css">

  <!-- This is what you need -->
  <script src="assets/sweatalert/dist/sweetalert.js"></script>
  <link rel="stylesheet" href="assets/sweatalert/dist/sweetalert.css">

  <style>
  #hitmundur { width: 240px; height: 45px; }
  .link{display:inline-block;}
  .tooltip1{
      /*Terserah desainnya bagaimana~*/
      background:#303030;
      padding:20px;
      color:#f0f0f0;
      border-radius:10px;
      -moz-border-radius:10px;
      width:200px;
      text-align:center;

      /*yang ini penting!*/
      position:absolute;
  }

  .tooltip1:before{
      /*wajib!*/
      content:"";
      position:absolute;

      /*ini nih cara buat segitiga tanpa gambar dgn CSS*/
      border:10px solid transparent;
      border-bottom:10px solid #303030;

      /*supaya lokasi segitiganya rapi*/
      top:-20px;
      left:10px;
  }

  .tooltip1{display:none;} /*dalam keadaan biasa tidak tampil*/
  .link:hover .tooltip1{display:block;} /*ketika mouse diarahkan ke a.link, tooltip ditampilkan*/
  .scrool-kanan-bawah {
      overflow: auto;
      max-height: 750px;
      white-space: nowrap;
    }
  </style>
  <script type="text/javascript" src="assets/dashboard/dist/js/jquery-latest.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MC</b>SY</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Management </b>Fest</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/dashboard/dist/img/<?php echo $this->session->userdata("gambar"); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin <?php echo $this->session->userdata("fullname"); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="assets/dashboard/dist/img/<?php echo $this->session->userdata("gambar"); ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata("fullname"); ?>
                  <small>Member since &nbsp; <?php echo $this->session->userdata("membersince"); ?></small>
                </p>
              </li>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('dashboard/admin/profile'); ?>" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-user"> Profile </i></a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('panel/auth/logout'); ?>" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-log-out"> Logout </i></a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dashboard/dist/img/<?php echo $this->session->userdata("gambar"); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin <?php echo $this->session->userdata("nama"); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- Menu Nav-->
        <?php include "MenuNav.php"; ?>
      <!----------->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>

<!--------------CONTENT------------------>
