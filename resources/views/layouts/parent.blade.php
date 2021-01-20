<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{$sharedGrade[0]->grade}}</title>
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
  <link rel="stylesheet" href="{{ asset('dist/grid.css') }}">
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css') }}">


  <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">

  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

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
        <!-- Navbar Right Menu -->
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
            <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('/parent/students')}}"><i class="fa fa-link"></i> <span>Students</span></a></li>
              <li><a href="{{url('/parent/reset-password')}}"><i class="fa fa-link"></i> <span>change password</span></a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-megaphone"></i> <span>Course Video</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              @foreach($sharedGrade as $grade)
              <li><a href="{{url('/parent/course-video/'. $grade->id)}}"><i class="fa fa-book"></i> <span>{{$grade->grade}}</span></a></li>
               @endforeach
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