<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>医学信息库 | @yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('vendor')}}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('vendor')}}/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/iCheck/square/blue.css">

  <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

  <style>
    body {
      font-family: "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
    }
  </style>

  @yield('css')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

@if (Auth::guest())
  <body class="hold-transition login-page">

  <section class="content-header">

    @yield('content-header')

  </section>

  <!-- Main content -->
  <section class="content">

    @yield('content')

  </section><!-- /.content -->

  <!-- jQuery 2.1.4 -->
  <script src="{{asset('vendor')}}/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="{{asset('vendor')}}/bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="{{asset('vendor')}}/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
  <!-- csrf-token -->
  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>
  @yield('js')
  </body>
@else
  <body class="hold-transition skin-blue sidebar-mini fixed">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="{{url('/')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">迈德</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">医学信息库</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{url('vendor')}}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{url('vendor')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">个人信息</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{url('/logout')}}" class="btn btn-default btn-flat">登&emsp;出</a>
                  </div>
                </li>
              </ul>
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
            <img src="{{url('vendor')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <ul class="sidebar-menu">
          <li class="header">资源管理</li>
          <li class="active treeview">
            <a href="{{url('/test/news')}}">
              <i class="fa fa-dashboard"></i> <span>新闻信息表</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">

        @yield('content-header')

      </section>

      <!-- Main content -->
      <section class="content">

        @yield('content')

      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 0.0.1
      </div>
      <strong>Copyright &copy; 2011-2016 <a href="#">迈德同信（武汉）科技股份有限公司</a>.</strong> All rights
      reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.4 -->
  <script src="{{asset('vendor')}}/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="{{asset('vendor')}}/bootstrap/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="{{asset('vendor')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('vendor')}}/dist/js/app.min.js"></script>
  <!-- csrf-token -->
  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>
  @yield('js')
  </body>
@endif
</html>