@extends('layouts.app')

@section('title','Welcome')

@section('content-header')
@endsection

@section('content')
  <div class="error-page">
    <h1 class="text-primary text-center">欢迎来到迈德医学信息库！</h1>

    <div class="text-center">
      <h3 class="text-success">请点击左边菜单选择功能</h3>
      {{--<form class="search-form">--}}
      {{--<div class="input-group">--}}
      {{--<input type="text" name="search" class="form-control" placeholder="Search">--}}

      {{--<div class="input-group-btn">--}}
      {{--<button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>--}}
      {{--</button>--}}
      {{--</div>--}}
      {{--</div><!-- /.input-group -->--}}
      {{--</form>--}}
    </div><!-- /.error-content -->
  </div><!-- /.error-page -->
@endsection