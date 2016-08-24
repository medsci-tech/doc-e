@extends('web.main')

@section('title','文章列表')

@section('css')

  <!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/vendor/plugins/font-awesome/css/font-awesome.min.css">

<style>
  .container {
    margin: 50px auto;
    padding: 30px 50px;
    border-radius: 5px;
    border: 2px solid #888;
    box-shadow: 5px 5px 10px #666;
  }

  @media (max-width: 768px) {
    .container {
      margin: 0;
      padding: 10px 25px;
      border-radius: 0;
      border: none;
      box-shadow: none;
    }
  }
</style>
@endsection

@section('js')
  <script src="http://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js"></script>
  <script type="text/javascript">
    (function () {
      var option = {
        "auto_play": "0",
        "file_id": "14651978969263309496",
        "app_id": "1252490301",
        "width": 1920,
        "height": 1080
      };
      /*调用播放器进行播放*/
      new qcVideo.Player(
        /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/
        "id_video_container",
        option
      );
    })()
  </script>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">首页</a></li>
        <li class="active">医学教室</li>
      </ol>
    </div>

    <div class="row">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist" style="margin-bottom: 15px;">
        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">分类1</a>
        </li>
        <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">分类2</a></li>
        <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">分类3</a></li>
        <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">分类4</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tab1">

          {{--type1--}}
          <div class="">
            <div class="media">
              <div class="media-body">
                <h4 class="media-heading"> (一) 标题+1张图片（位于标题的右侧）</h4>
                <p>其它：内容</p>
              </div>
              <div class="media-right">
                <a href="#">
                  <img class="media-object" style="height: 200px;" src="/image/test.jpg" alt="...">
                </a>
              </div>
              <hr>
            </div>
          </div>

          {{--type2--}}
          <div class="">
            <div class="media">
              <div class="media-body">
                <h4 class="media-heading"> (二) 标题+1张图片（位于标题的下方）</h4>
                <p>其它：内容</p>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <a href="#">
                    <img class="media-object" style="width: 100%" src="/image/test.jpg" alt="...">
                  </a>
                </div>
              </div>
              <hr>
            </div>
          </div>

          {{--type3--}}
          <div class="">
            <div class="media">
              <div class="media-body">
                <h4 class="media-heading"> (三) 标题+3张图片（位于标题的下方）</h4>
                <p>其它：内容</p>
              </div>
              <div class="row">
                <div class="col-xs-4">
                  <a href="#">
                    <img class="media-object" style="width: 100%" src="/image/test.jpg" alt="...">
                  </a>
                </div>
                <div class="col-xs-4">
                  <a href="#">
                    <img class="media-object" style="width: 100%" src="/image/test.jpg" alt="...">
                  </a>
                </div>
                <div class="col-xs-4">
                  <a href="#">
                    <img class="media-object" style="width: 100%" src="/image/test.jpg" alt="...">
                  </a>
                </div>
              </div>
              <hr>
            </div>
          </div>

          {{--type3--}}
          <div class="">
            <div class="media">
              <div class="media-body">
                <h4 class="media-heading"> (四) 标题+1张视频截图（视频截图，截图中间位置有播放按钮，截图右下角有视频的长度）</h4>
                <p>其它：内容</p>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div id="id_video_container" style="width:100%;"></div>
                </div>
              </div>
              <hr>
            </div>
          </div>

        </div>
        <div role="tabpanel" class="tab-pane" id="tab2">...</div>
        <div role="tabpanel" class="tab-pane" id="tab3">...</div>
        <div role="tabpanel" class="tab-pane" id="tab4">...</div>
      </div>
    </div>


  </div>

@endsection


