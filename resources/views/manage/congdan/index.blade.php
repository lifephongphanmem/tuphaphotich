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
        Danh sách thông tin<small>&nbsp;công dân</small>
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
                        @if(can('congdan','create'))
                        <a href="{{url('congdan/create')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-plus"></i>&nbsp;Thêm mới</a>
                        @endif
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="row mbm">
                        @if(session('admin')->level == 'T')
                            <div class="col-md-1">
                                <div class="form-control-static" style="white-space: nowrap;">Quận/Huyện</div>
                            </div>
                            <div class="col-md-3">
                                <select id="select_huyen" class="form-control">
                                    @foreach ($huyens as $huyen)
                                        <option {{ ($huyen->mahuyen == $mahuyen) ? 'selected' : '' }} value="{{ $huyen->mahuyen }}">{{ $huyen->tenhuyen }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        @if(count($xas) > 0 && (session('admin')->level == 'T' || session('admin')->level == 'H'))
                            <div class="col-md-1">
                                <div class="form-control-static" style="white-space: nowrap;">Xã/Phường</div>
                            </div>
                            <div class="col-md-3">
                                @if(count($xas) > 0)
                                    <select id="select_xa" class="form-control">
                                        <option value="all">--Chọn xã phường--</option>
                                        @foreach ($xas as $xa)
                                            <option {{ ($xa->maxa == $maxa) ? 'selected' : '' }} value="{{ $xa->maxa }}">{{ $xa->tenxa }}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                        @endif
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">

                        </div>
                    <table class="table table-striped table-bordered table-hover" id="sample_3">
                        <thead>
                        <tr>
                            <th style="text-align: center" width="2%">STT</th>
                            <th width="10%" style="text-align: center">Ảnh</th>
                            <th style="text-align: center" width="15%">Họ và tên</th>
                            <th style="text-align: center" width="5%">Ngày sinh</th>
                            <th style="text-align: center" width="5%">Giới tính</th>
                            <th style="text-align: center">Quê quán</th>
                            <th style="text-align: center">Địa chỉ thường trú</th>
                            <th style="text-align: center">Trạng thái</th>
                            <th style="text-align: center" width="15%">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($model as $key=>$tt)
                            <tr>
                                <td style="text-align: center">{{$key+1}}</td>
                                <td align="center" style="vertical-align: middle">
                                    <img src="{{ url('images/avatar/no-image.png')}}" width="96">
                                </td>
                                <td class="active"><b>{{$tt->hoten}}</b><br>Mã quản lý: {{$tt->macongdan}}</td>
                                <td style="text-align: center">{{getDayVn($tt->ngaysinh)}}</td>
                                <td style="text-align: center">{{$tt->gioitinh}}</td>
                                <td>{{$tt->quequan}}</td>
                                <td>{{$tt->thuongtru}}</td>
                                <td>{{$tt->trangthai}}</td>
                                <td>
                                    @if(can('congdan','edit'))
                                    <a href="{{url('congdan/'.$tt->id.'/edit')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-edit"></i>&nbsp;Chỉnh sửa</a>
                                    @endif
                                    @if(can('congdan','delete'))
                                    <button type="button" onclick="getId('{{$tt->id}}')" class="btn btn-default btn-xs mbs" data-target="#delete-modal" data-toggle="modal"><i class="fa fa-trash-o"></i>&nbsp;
                                        Xóa</button>
                                    @endif
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
                    {!! Form::open(['url'=>'congdan/delete','id' => 'frm_delete'])!!}
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

            $('#select_huyen, #select_xa').change(function() {
                var current_path_url = '/congdan?';
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
                var url = current_path_url+mahuyen+maxa;
                window.location.href = url;
            });
        })


    </script>


    @include('includes.e.modal-confirm')


@stop