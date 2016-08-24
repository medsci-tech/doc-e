@extends('web.main')

@section('title','首页')

@section('css')

  <!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/vendor/plugins/font-awesome/css/font-awesome.min.css">

<style>
  .navbar-brand img {
    max-height: 39px;
  }

  .navbar-toggle {
    background-color: #eee;
  }

  .navbar-toggle .icon-bar {
    background-color: #fff;
  }

  h1 {
    margin-top: 15px;
  }

  h4 {
    margin: 0px;
  }

  .nav li {
    margin-top: 15px;
  }

  .col-sm-4 button {
    height: 100px;
    margin-top: 15px;
    margin-bottom: 15px;
  }

  a:focus, a:hover {
    color: #23527c;
    text-decoration: none;
  }

  .container {
    margin-top: 50px;
    padding: 20px 50px;
    border-radius: 5px;
    border: 2px solid #888;
    box-shadow: 5px 5px 10px #666;
  }

  @media (max-width: 768px) {
    .container {
      margin-top: 0;
      padding: 0 15px;
      border-radius: 0;
      border: none;
      box-shadow: none;
    }

    .nav li {
      margin-top: 0;
    }

    .navbar-collapse{
      background-color: #eee;
    }
  }

</style>
@endsection

@section('js')

@endsection

@section('content')


  <div class="container">
    <nav class="navbar row">
      <div class="navbar-header" style="">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#navbar-collapse-1" aria-expanded="false" style="margin-top: 15px;">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="/image/test.jpg" alt="">
        </a>
        <h4 class="hidden-sm hidden-md hidden-lg" style="padding-top: 20px">健康监护教育一体机</h4>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <div class="navbar-left hidden-xs">
          <h1>健康监护教育一体机</h1>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><h4>注册</h4></a></li>
          <li><a href="#"><h4>登录</h4></a></li>
        </ul>
      </div>
    </nav>
    <div class="row text-center">
      <br>
      <div class="col-sm-4 col-xs-6">
        <button class="btn btn-primary btn-block btn-lg">健康
          <wbr>
          监测
        </button>
      </div>
      <div class="col-sm-4 col-xs-6">
        <button class="btn btn-primary btn-block btn-lg">健康
          <wbr>
          生活
        </button>
      </div>
      <div class="col-sm-4 col-xs-6">
        <button class="btn btn-primary btn-block btn-lg">医学
          <wbr>
          教室
        </button>
      </div>
    </div>
    <div class="row">
      <br><br><br><br><br>
      <div class="col-xs-12 text-right">
        <a href="#">
          <img style="height: 20px;" src="/image/test.jpg" alt="">
          <span>设置</span>
        </a>
      </div>
      <br><br>
    </div>
  </div>

@endsection


