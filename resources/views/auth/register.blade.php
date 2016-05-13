@extends('layouts.app')

@section('title','注册')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{url('/home')}}">迈德医学信息库</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">注册新用户</p>
            <form action="{{url('/register')}}" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="请输入姓名">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="请输入邮箱">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="请输入密码">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="确认密码">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> 我同意 <a href="#">注册协议</a>
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <br>

            <a href="{{url('/login')}}" class="text-center">我已经注册过，点击登录</a>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->
@endsection
