@extends('layouts.app')

<!-- Main Content -->
@section('content')
    <div class="login-logo">
        <a href="#">迈德医学信息库</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <form action="{{url('/password/email')}}" method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="请输入邮箱">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">发送邮件</button>
                </div><!-- /.col -->
            </div>
        </form>

    </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
@endsection
