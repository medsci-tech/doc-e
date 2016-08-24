@extends('web.main')

@section('title','文章列表')

@section('css')

  <!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/vendor/plugins/font-awesome/css/font-awesome.min.css">

<style>

  @media (max-width: 768px) {

  }

</style>
@endsection

@section('js')

@endsection

@section('content')
  <br>
  <div class="container">
    <div class="row">
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" style="height: 50px;" src="/image/test.jpg" alt="...">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          ...
        </div>
      </div>
    </div>
  </div>

@endsection


