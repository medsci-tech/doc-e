@extends('/layouts/app')

@section('title','新闻信息表')

@section('css')
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/umeditor/themes/default/css/umeditor.css">
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
  <style>
    .bootstrap-tagsinput {
      display: block;
      border-radius: 0;
      box-shadow: none;
    }
    .label {
      border-radius: 0;
    }
  </style>
@endsection

@section('js')
  <script src="{{asset('vendor')}}/plugins/umeditor/umeditor.config.js"></script>
  <script src="{{asset('vendor')}}/plugins/umeditor/umeditor.js"></script>
  <script src="{{asset('vendor')}}/plugins/umeditor/lang/zh-cn/zh-cn.js"></script>
  <script src="{{asset('vendor')}}/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
  <script>
    $(function () {
      var create = UM.getEditor('create', {
        initialFrameWidth: '100%',
        autoHeightEnabled: false,
        scaleEnabled: true

        , imageUrl: "http://upload.qiniu.com/"
        , imagePath: "http://o7bemieu9.bkt.clouddn.com/"

      });
    });
  </script>

  {{--<script src="{{asset('vendor')}}/plugins/vuejs/vue.js"></script>--}}
  <script>
    $('#upload_thumb').click(function () {
      $('#thumbnail_file').click();
    });
    $('#thumbnail_file').change(function () {

      var xhr = new XMLHttpRequest();
      xhr.open("post", 'http://upload.qiniu.com/' + "?type=ajax", true);
      xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
      var fd = new FormData();
      $.ajax({
        type: "get",
        url: "http://localhost/upload/upload-token",
        async: false,
        success: function (data) {
          fd.append('token', data);
          fd.append('file', $('#thumbnail_file').get(0).files[0]);
        },
        error: function () {
          alert('服务器异常！');
        }
      });
      xhr.send(fd);
      xhr.addEventListener('load', function (e) {
        var json = eval('(' + e.target.response + ')');
        var url = 'http://o7bemieu9.bkt.clouddn.com/' + json.key;
        $('#thumbnail').attr('src', url);
        $('#thumbnail_url').val(url);
      });
    })
  </script>

@endsection

@section('content-header')
  <h1>
    添加文章
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
    <li>新闻信息表</li>
    <li class="active">添加文章</li>
  </ol>
@endsection

@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
        </div><!-- /.box-header -->
        <div class="box-body">
          <form class="form-horizontal" action="{{ url('/login') }}" method="post" role="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="box-body">
              <div class="form-group">
                <label for="title" class="col-sm-2 control-label">新闻标题</label>
                <div class="col-sm-10">
                  <input required type="text" class="form-control" name="title" placeholder="输入标题">
                </div>
              </div>
              <div class="form-group">
                <label for="abstract" class="col-sm-2 control-label">新闻简介</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="abstract" placeholder="输入简介">
                </div>
              </div>
              <div class="form-group">
                <label for="content" class="col-sm-2 control-label">新闻内容</label>
                <div class="col-sm-10">
                  <script id="create" name="content" type="text/plain"></script>
                </div>
              </div>
              <div class="form-group">
                <label for="thumbnail_url" class="col-sm-2 control-label">缩略图</label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button type="button" id="upload_thumb" class="btn btn-flat"><i class="fa fa-cloud-upload"></i>&nbsp;点击上传图片
                      </button>
                    </span>
                    <input type="url" class="form-control" readonly id="thumbnail_url" name="thumbnail_url"
                           placeholder="图片地址">
                  </div>
                  <div>
                    <img class="img-responsive" id="thumbnail">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="keyword" class="col-sm-2 control-label">关键词</label>
                <div class="col-sm-10">
                  <input data-role="tagsinput" type="text" class="form-control" name="keyword" placeholder="请输入关键词">
                </div>
              </div>
              <div class="form-group">
                <label for="tag" class="col-sm-2 control-label">标签</label>
                <div class="col-sm-10">
                  <input data-role="tagsinput" type="text" class="form-control" name="tag" placeholder="请输入标签">
                </div>
              </div>
            </div>
            <div class="box-footer">
              <button type="button" class="btn btn-flat btn-default pull-left" data-dismiss="modal">取消</button>
              <button type="submit" class="btn btn-flat btn-primary pull-right">确认添加</button>
            </div>
          </form>

          <div hidden>
            <input type="file" id="thumbnail_file">
          </div>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div>

  <!-- Modal -->
@endsection



