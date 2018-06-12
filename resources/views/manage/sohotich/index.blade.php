@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
    <!-- END THEME STYLES -->
@stop


@section('custom-script')
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <script src="{{url('assets/admin/pages/scripts/table-managed.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            TableManaged.init();
        });
        function getId(id){
            document.getElementById("iddelete").value=id;
        }

        function ClickDelete(){
            $('#frm_delete').submit();
        }
    </script>
@stop

@section('content')
    <h3 class="page-title">
        Danh mục<small>&nbsp;sổ hộ tịch</small>
    </h3>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box">

                <div class="portlet-title">
                    <div class="caption">
                    </div>
                    <div class="actions">
                        <a href="{{url('sohotich/create')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-plus"></i>&nbsp;Thêm mới</a>
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="row mbm">
                        <div class="col-md-1">
                            <div class="form-control-static" style="white-space: nowrap;">Năm sổ</div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select name="select_nam" id="select_nam" class="form-control">
                                    @if ($nam_start = intval(date('Y')) - 5 ) @endif
                                    @if ($nam_stop = intval(date('Y')) + 5 ) @endif
                                    @for($i = $nam_start; $i <= $nam_stop; $i++)
                                        <option value="{{$i}}" {{$i == $nam ? 'selected' : ''}}>Năm {{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">

                        </div>
                    <table class="table table-striped table-bordered table-hover" id="sample_3">
                        <thead>
                        <tr>
                            <th style="text-align: center" width="2%">STT</th>
                            <th style="text-align: center" width="20%">Phân loại sổ hộ tịch</th>
                            <th style="text-align: center" width="20%">Tên quyển hộ tịch</th>
                            <th style="text-align: center" width="5%">Số bắt đầu</th>
                            <th style="text-align: center" width="5%">Số kết thúc</th>
                            <th style="text-align: center">Ngày bắt đầu</th>
                            <th style="text-align: center">Ngày kết thúc</th>
                            <th style="text-align: center" width="15%">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($model as $key=>$tt)
                            <tr>

                                <td style="text-align: center">{{$key+1}}</td>
                                <td class="active">{{$tt->plhotich}}</td>
                                <td class="active">{{$tt->quyenhotich}}</td>
                                <td style="text-align: center">{{$tt->sobatdau}}</td>
                                <td style="text-align: center">{{$tt->soketthuc}}</td>
                                <td style="text-align: center">{{getDayVn($tt->ngaybatdau)}}</td>
                                <td style="text-align: center">{{getDayVn($tt->ngayketthuc)}}</td>
                                <td>
                                    <a href="{{url('sohotich/'.$tt->id.'/edit')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-edit"></i>&nbsp;Chỉnh sửa</a>
                                    <button type="button" onclick="getId('{{$tt->id}}')" class="btn btn-default btn-xs mbs" data-target="#delete-modal" data-toggle="modal"><i class="fa fa-trash-o"></i>&nbsp;
                                        Xóa</button>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>

    <!-- BEGIN DASHBOARD STATS -->

    <!-- END DASHBOARD STATS -->
    <div class="clearfix"></div>
        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    {!! Form::open(['url'=>'sohotich/delete','id' => 'frm_delete'])!!}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Đồng ý xóa?</h4>
                    </div>
                    <input type="hidden" name="iddelete" id="iddelete">
                    <div class="modal-footer">
                        <button type="submit" class="btn blue" onclick="ClickDelete()">Đồng ý</button>
                        <button type="button" class="btn default" data-dismiss="modal">Hủy</button>
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>

    <script>
        $(function(){

            $('#select_nam,#select_huyen, #select_xa').change(function() {
                var current_path_url = '/sohotich?';
                var nam = '&nam='+$('#select_nam').val();
                if($(this).attr('id') == 'select_huyen'){
                    $('#select_xa').val('all');
                }
                var maxa = '';
                if($('#select_xa').length > 0 ){
                    var maxa = '&maxa='+$('#select_xa').val();
                }
                var mahuyen = '';
                if($('#select_huyen').length > 0 ){
                    var mahuyen = '&mahuyen='+$('#select_huyen').val();
                }
                var url = current_path_url+nam+mahuyen+maxa;
                window.location.href = url;
            });
        })


    </script>


    @include('includes.e.modal-confirm')


@stop