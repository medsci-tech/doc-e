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
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback{{ $errors->has('name')? 'has-error' : '' }}">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="请输入姓名">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                           <strong>{{ $errors->first('name') }}</strong>
                         </span>
                    @endif
                </div>
                <div class="form-group has-feedback{{ $errors->has('email')? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="请输入邮箱">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback{{ $errors->has('password')? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control" placeholder="请输入密码">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback{{ $errors->has('password_confirmation')? 'has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="确认密码">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    {{--<div class="col-xs-8">--}}
                        {{--<div class="checkbox icheck">--}}
                            {{--<label>--}}
                                {{--<input type="checkbox"> 我同意 <a href="#">注册协议</a>--}}
                            {{--</label>--}}
                        {{--</div>--}}
                    {{--</div><!-- /.col -->--}}
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">注&emsp;册</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <br>

            <a href="{{url('/login')}}" class="text-center">我已经注册过，点击登录</a>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->
@endsection
