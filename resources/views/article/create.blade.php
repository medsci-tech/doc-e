@extends('/layouts/app')

@section('title','新闻信息表')

@section('css')
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/umeditor/themes/default/css/umeditor.css">
@endsection

@section('js')
  <script src="{{asset('vendor')}}/plugins/umeditor/umeditor.config.js"></script>
  <script src="{{asset('vendor')}}/plugins/umeditor/umeditor.js"></script>
  <script type="{{asset('vendor')}}/plugins/umeditor/lang/zh-cn/zh-cn.js"></script>
  <script>
    $(function () {

      var create = UM.getEditor('create', {
        initialFrameWidth: '100%',
        autoHeightEnabled: false,
        scaleEnabled: true

        ,imageUrl: "http://upload.qiniu.com/"            //图片上传提交地址
        ,imagePath:"http://o7bemieu9.bkt.clouddn.com/"   //图片修正地址，引用了fixedImagePath,如有特殊需求，可自行配置

      });
    });
  </script>

  <script src="{{asset('vendor')}}/plugins/vuejs/vue.js"></script>
  <script>
    new Vue({});
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
                <label for="article_title" class="col-sm-2 control-label">新闻标题</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="article_title" placeholder="输入标题">
                </div>
              </div>
              <div class="form-group">
                <label for="content" class="col-sm-2 control-label">新闻内容</label>
                <div class="col-sm-10">
                  <script id="create" name="content" type="text/plain"></script>
                </div>
              </div>
            </div>
            <div class="box-footer">
              <button type="button" class="btn btn-flat btn-default pull-left" data-dismiss="modal">取消</button>
              <button type="submit" class="btn btn-flat btn-primary pull-right">确认添加</button>
            </div>
          </form>

        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div>

  <!-- Modal -->
@endsection



