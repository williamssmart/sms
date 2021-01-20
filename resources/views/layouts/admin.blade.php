<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css') }}">

  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('../../plugins/iCheck/flat/blue.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">


  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css') }}">

  <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">


  <!-- Google Font -->
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{asset(Auth::user()->passport)}}" class="img-circle" alt="User Image" style="max-height:50px">
          </div>
          <div class="pull-left info">
            <p>
              {{Auth::user()->firstname . ' '. Auth::user()->lastname}}
            </p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Dashboard</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="treeview">
            <a href="{{url('/admin/students')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('/admin')}}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
              <li><a href="{{url('/admin/students')}}"><i class="fa fa-link"></i> <span>Students</span></a></li>
              <li><a href="{{url('/admin/reset-password')}}"><i class="fa fa-link"></i> <span>change password</span></a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-envelope-o"></i> <span>Messaging</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('/admin/message')}}"><i class="fa fa-link"></i> <span>Inbox</span></a></li>
              <li><a href="{{url('/admin/outbox/')}}"><i class="fa fa-link"></i> <span>Sent Messages</span></a></li>
              <li><a href="{{url('/admin/message/create')}}"><i class="fa fa-link"></i> <span>Compose</span></a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-megaphone"></i> <span>Newslatters</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-link"></i> <span>Add User</span></a></li>
              <li><a href="{{url('/admin/create-news')}}"><i class="fa fa-link"></i> <span>Compose</span></a></li>
              <li><a href="{{url('/admin/news-inbox')}}"><i class="fa fa-link"></i> <span>Inbox</span></a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-user"></i> <span>User Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('/admin/register-student')}}"><i class="fa fa-link"></i> <span>Add Student</span></a></li>
              <li><a href="{{url('/admin/add-user')}}"><i class="fa fa-link"></i> <span>Add User</span></a></li>
              <li><a href="{{url('/admin/users')}}  "><i class="fa fa-link"></i> <span>List Users</span></a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-cog"></i> <span>Settings</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('admin/session-setting')}}"><i class="fa fa-link"></i> <span>Session And Year</span></a></li>
              <li><a href="{{url('admin/class-management')}}"><i class="fa fa-link"></i> <span>Teacher/Class Management</span></a></li>
              <li><a href="{{url('admin/tution-setting')}}"><i class="fa fa-link"></i> <span>Manage Tution</span></a></li>
            </ul>
          </li>

          <li>
            <a  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> <span>LogOut</span></a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf

              </form>
              </ul>
              <!-- /.sidebar-menu -->
              </section>
              <!-- /.sidebar -->
              </aside>

              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
              <h1>
              Page Header
              <small>Optional description</small>
              </h1>
              <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
              <li class="active">Here</li>
              </ol>
              </section>

              <!-- Main content -->
              <section class="content container-fluid">
              @yield('content')
              <!--------------------------
              | Your Page Content Here |
              -------------------------->

              </section>
              <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

              <!-- Main Footer -->
              <footer class="main-footer">
              <!-- To the right -->
              <div class="pull-right hidden-xs">
              Anything you want
              </div>
              <!-- Default to the left -->
              <strong>Copyright &copy; 2020 <a href="#">Company</a>.</strong> All rights reserved.
              </footer>

              <!-- Control Sidebar -->
              <aside class="control-sidebar control-sidebar-dark">
              <!-- Create the tabs -->
              <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
              <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
              <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
              <!-- Home tab content -->
              <div class="tab-pane active" id="control-sidebar-home-tab">
              <h3 class="control-sidebar-heading">Recent Activity</h3>
              <ul class="control-sidebar-menu">
              <li>
              <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
              </div>
              </a>
              </li>
              </ul>
              <!-- /.control-sidebar-menu -->

              <h3 class="control-sidebar-heading">Tasks Progress</h3>
              <ul class="control-sidebar-menu">
              <li>
              <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="pull-right-container">
              <span class="label label-danger pull-right">70%</span>
              </span>
              </h4>

              <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
              </a>
              </li>
              </ul>
              <!-- /.control-sidebar-menu -->

              </div>
              <!-- /.tab-pane -->
              <!-- Stats tab content -->
              <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
              <!-- /.tab-pane -->
              <!-- Settings tab content -->
              <div class="tab-pane" id="control-sidebar-settings-tab">
              <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>

              <div class="form-group">
              <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
              Some information about this general settings option
              </p>
              </div>
              <!-- /.form-group -->
              </form>
              </div>
              <!-- /.tab-pane -->
              </div>
              </aside>
              <!-- /.control-sidebar -->
              <!-- Add the sidebar's background. This div must be placed
              immediately after the control sidebar -->
              <div class="control-sidebar-bg"></div>
              </div>
              <!-- ./wrapper -->

              <!-- REQUIRED JS SCRIPTS -->

              <!-- jQuery 3 -->
              <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
              <!-- Bootstrap 3.3.7 -->
              <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.j')}}"></script>
              <!-- AdminLTE App -->
              <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
              <!-- iCheck -->
              <script src="{{asset('../../plugins/iCheck/icheck.min.js')}}"></script>
              <!-- Bootstrap WYSIHTML5 -->
              <script src="{{asset('../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
              <!-- Page Script -->
              <script>
              $(function () {
              //Add text editor
              $("#compose-textarea").wysihtml5();
              });
              </script>

              <!-- Optionally, you can add Slimscroll and FastClick plugins.
              Both of these plugins are recommended to enhance the
              user experience. -->
              </body>
              </html>