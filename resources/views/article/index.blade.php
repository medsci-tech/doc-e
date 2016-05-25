@extends('/layouts/app')

@section('title','新闻信息表')

@section('css')
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/umeditor/themes/default/css/umeditor.css">
@endsection

@section('js')
  <script src="{{asset('vendor')}}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{asset('vendor')}}/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script src="{{asset('vendor')}}/plugins/umeditor/umeditor.config.js"></script>
  <script src="{{asset('vendor')}}/plugins/umeditor/umeditor.js"></script>
  <script type="{{asset('vendor')}}/plugins/umeditor/lang/zh-cn/zh-cn.js"></script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "oLanguage": {
          "sLengthMenu": "每页显示 _MENU_ 条记录",
          "sZeroRecords": "抱歉， 没有找到",
          "sInfo": "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
          "sInfoEmpty": "没有数据",
          "sInfoFiltered": "(从 _MAX_ 条数据中检索)",
          "oPaginate": {
            "sFirst": "首页",
            "sPrevious": "前一页",
            "sNext": "后一页",
            "sLast": "尾页"
          }
        },
        "bStateSave": true
      });
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
      });

      var create = UM.getEditor('create', {
        initialFrameWidth: '100%',
        autoHeightEnabled: false,
        scaleEnabled: true
      });
      var edit = UM.getEditor('edit');
    });


    $(function () {
      $('#example1_filter').prepend(
        "<div class='inline'>" +
        "<a href='{{ url('test/article/create') }}' class='btn btn-flat btn-success'>添加</a>" + "&nbsp;" +
        "<button class='btn btn-flat btn-warning' disabled>编辑</button>" + "&nbsp;" +
        "<button class='btn btn-flat btn-danger' disabled>删除</button>" + "&nbsp;" +
        "</div>"
      );
    });
  </script>

  <script src="{{asset('vendor')}}/plugins/vuejs/vue.js"></script>
  <script>
    new Vue({});
  </script>

@endsection

@section('content-header')
  <h1>
    文章列表
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
    <li>新闻信息表</li>
    <li class="active">文章列表</li>
  </ol>
@endsection

@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
              <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-hover dataTable" role="grid"
                       aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 179px;">Rendering engine
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending" style="width: 222px;">Browser
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Platform(s): activate to sort column ascending" style="width: 195px;">Platform(s)
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Engine version: activate to sort column ascending"
                        style="width: 153px;">Engine version
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">CSS grade
                    </th>
                  </tr>
                  </thead>
                  <tbody>


                  <tr role="row" class="odd">
                    <td class="sorting_1">Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr role="row" class="even">
                    <td class="sorting_1">Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="sorting_1">Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr role="row" class="even">
                    <td class="sorting_1">Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    <td>A</td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="sorting_1">Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr role="row" class="even">
                    <td class="sorting_1">Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="sorting_1">Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr role="row" class="even">
                    <td class="sorting_1">Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="sorting_1">Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr role="row" class="even">
                    <td class="sorting_1">Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1</td>
                    <td>A</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th rowspan="1" colspan="1">Rendering engine</th>
                    <th rowspan="1" colspan="1">Browser</th>
                    <th rowspan="1" colspan="1">Platform(s)</th>
                    <th rowspan="1" colspan="1">Engine version</th>
                    <th rowspan="1" colspan="1">CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div>

  <!-- Modal -->
@endsection
