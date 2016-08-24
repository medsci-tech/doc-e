<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>健康监护教育一体机 | @yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @yield('css')

  <style>
    body {
      font-family: "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
    }
  </style>




<body>

@yield('content')

<!-- jQuery 2.1.4 -->
<script src="{{asset('vendor')}}/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('vendor')}}/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="{{asset('vendor')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- Vue -->
<script src="{{asset('vendor')}}/plugins/vuejs/vue.js"></script>


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
</html>