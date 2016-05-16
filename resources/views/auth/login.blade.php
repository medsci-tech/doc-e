@extends('layouts.app')

@section('title','登录')

@section('content')

  @if (Auth::guest())
    <div class="login-box">

      <div class="login-logo">
        <a href="#">迈德医学信息库</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">请登录</p>
        <form action="{{url('/login')}}" method="post" role="form">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group has-feedback {{ $errors->has('email')? 'has-error' : '' }}">
            <input type="email" name="email" class="form-control" placeholder="请输入邮箱" value="{{ old('email') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif

          </div>
          <div class="form-group has-feedback {{ $errors->has('password')? 'has-error' : '' }}">
            <input type="password" name="password" class="form-control" placeholder="请输入密码">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> 记住我
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">登&emsp;录</button>
            </div><!-- /.col -->
          </div>
        </form>
        <br>
        <a href="{{url('/password/reset')}}">忘记密码？</a><br>
        <a href="{{url('/register')}}" class="text-center">注册新用户</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

  @else

    <div class="alert alert-info">
      <strong>您已登录</strong> 请不要重复登录！<br><br>
      <ul>

      </ul>
    </div>

  @endif
@endsection
