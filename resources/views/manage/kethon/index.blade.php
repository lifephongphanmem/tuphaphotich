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
        function getIdDuyet(id){
            document.getElementById("idduyet").value=id;
        }
        function getIdPrints(id){
            document.getElementById("idprints").value=id;
        }
        function getIdPrintsgs(id){
            document.getElementById("idprintsgs").value=id;
        }
        function ClickDelete(){
            $('#frm_delete').submit();
        }
        function ClickDuyet(){
            $('#frm_duyet').submit();
        }
        function ClickPrints(){
            $('#frm_prints').submit();
            $('#prints-modal').modal("hide");
        }
    </script>
    <script>
        $(function(){
            $('#select_thang,#select_nam,#select_huyen, #select_xa').change(function() {
                var current_path_url = '/kethon?';
                var thang = '&thang=' + $('#select_thang').val();
                var nam = '&nam=' + $('#select_nam').val();
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
                var url = current_path_url+thang+nam+mahuyen+maxa;
                window.location.href = url;
            });
        })
    </script>
@stop

@section('content')
    <h3 class="page-title">
        Danh sách thông tin<small>&nbsp;kết hôn</small>
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
                        @if(can('kethon','create'))
                        <a href="{{url('kethon/create')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-plus"></i>&nbsp;Thêm mới</a>
                        @endif
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="row mbm">
                        <div class="col-md-2">
                            <div class="form-group">
                                <select name="select_thang" id="select_thang" class="form-control">
                                    <option value="01" {{$thang == '01' ? 'selected' : ''}}>Tháng 01</option>
                                    <option value="02" {{$thang == '02' ? 'selected' : ''}}>Tháng 02</option>
                                    <option value="03" {{$thang == '03' ? 'selected' : ''}}>Tháng 03</option>
                                    <option value="04" {{$thang == '04' ? 'selected' : ''}}>Tháng 04</option>
                                    <option value="05" {{$thang == '05' ? 'selected' : ''}}>Tháng 05</option>
                                    <option value="06" {{$thang == '06' ? 'selected' : ''}}>Tháng 06</option>
                                    <option value="07" {{$thang == '07' ? 'selected' : ''}}>Tháng 07</option>
                                    <option value="08" {{$thang == '08' ? 'selected' : ''}}>Tháng 08</option>
                                    <option value="09" {{$thang == '09' ? 'selected' : ''}}>Tháng 09</option>
                                    <option value="10" {{$thang == '10' ? 'selected' : ''}}>Tháng 10</option>
                                    <option value="11" {{$thang == '11' ? 'selected' : ''}}>Tháng 11</option>
                                    <option value="12" {{$thang == '12' ? 'selected' : ''}}>Tháng 12</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select name="select_nam" id="select_nam" class="form-control">
                                    @if ($nam_start = intval(date('Y')) - 20 ) @endif
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
                            <th style="text-align: center" width="5%">Ngày đăng ký</th>
                            <th style="text-align: center" width="20%%">Họ và tên vợ</th>
                            <th style="text-align: center" width="5%">Ngày sinh</th>
                            <th style="text-align: center" width="20%%">Họ và tên chồng</th>
                            <th style="text-align: center" width="5%">Ngày sinh</th>
                            <th style="text-align: center">Trạng thái</th>
                            <th style="text-align: center" width="20%">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($model as $key=>$tt)
                            <tr>
                                <td style="text-align: center">{{$key+1}}</td>
                                <td style="text-align: center">{{getDayVn($tt->ngaydangky)}}</td>
                                <td class="active"><b>{{$tt->hotenvo}}</b></td>
                                <td style="text-align: center">{{getDayVn($tt->ngaysinhvo)}}</td>
                                <td class="active"><b>{{$tt->hotenchong}}</b></td>
                                <td style="text-align: center">{{getDayVn($tt->ngaysinhchong)}}</td>
                                @if($tt->trangthai == 'Chờ duyệt')
                                    <td align="center"><span class="badge badge-blue">{{$tt->trangthai}}</span>
                                    </td>
                                @elseif($tt->trangthai == 'Duyệt')
                                    <td align="center"><span class="badge badge-warning">Đã duyệt</span>
                                    </td>
                                @endif
                                <td>
                                    <a href="{{url('kethon/'.$tt->id.'/show')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-eye"></i>&nbsp;Xem chi tiết</a>
                                    <a href="{{url('kethon/'.$tt->id.'/printstokhai')}}" target="_blank" class="btn btn-default btn-xs mbs"><i class="fa fa-print"></i>&nbsp;Tờ khai</a>
                                        @if(can('kethon','edit'))
                                            <a href="{{url('kethon/'.$tt->id.'/edit')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-edit"></i>&nbsp;Chỉnh sửa</a>
                                        @endif
                                    @if($tt->trangthai == 'Chờ duyệt')
                                        @if(can('kethon','delete'))
                                            <button type="button" onclick="getId('{{$tt->id}}')" class="btn btn-default btn-xs mbs" data-target="#delete-modal" data-toggle="modal"><i class="fa fa-trash-o"></i>&nbsp;
                                                Xóa</button>
                                        @endif
                                        @if(can('kethon','approve'))
                                            <button type="button" onclick="getIdDuyet('{{$tt->id}}')" class="btn btn-default btn-xs mbs" data-target="#duyet-modal" data-toggle="modal"><i class="fa fa-check"></i>&nbsp;Duyệt</button>
                                        @endif
                                    @elseif($tt->trangthai == 'Duyệt' && $tt->pldangky != 'Ghi sổ việc kết hôn tại nước ngoài')
                                        <a href="{{url('kethon/'.$tt->id.'/prints')}}" target="_blank" class="btn btn-default btn-xs mbs"><i class="fa fa-print"></i>&nbsp;In</a>
                                        <a href="{{url('kethon/'.$tt->id.'/printsbansao')}}" target="_blank" class="btn btn-default btn-xs mbs"><i class="fa fa-print"></i>&nbsp;Bản sao</a>
                                    @elseif($tt->trangthai == 'Duyệt' && $tt->pldangky == 'Ghi sổ việc kết hôn tại nước ngoài')
                                        <button type="button" onclick="getIdPrintsgs('{{$tt->id}}')" class="btn btn-default btn-xs mbs" data-target="#prints-modalgs" data-toggle="modal"><i class="fa fa-print"></i>&nbsp;
                                            In trích lục ghi sổ</button>
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
    </div>
    <!-- BEGIN DASHBOARD STATS -->
    <!-- END DASHBOARD STATS -->
    <div class="clearfix"></div>
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['url'=>'kethon/delete','id' => 'frm_delete'])!!}
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
    <div class="modal fade" id="duyet-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['url'=>'kethon/duyet','id' => 'frm_duyet'])!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Đồng ý duyệt?</h4>
                </div>
                <input type="hidden" name="idduyet" id="idduyet">
                <div class="modal-footer">
                    <button type="submit" class="btn blue" onclick="ClickDuyet()">Đồng ý</button>
                    <button type="button" class="btn default" data-dismiss="modal">Hủy</button>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="prints-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['url'=>'kethon/prints','id' => 'frm_prints','target'=>'_blank'])!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">In giấy kết hôn</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label"><b>Phân loại in</b></label>
                            <div class="col-md-6 ">
                                {!! Form::select(
                                'plgiay',
                                array(
                                'Bản chính' => 'Bản chính',
                                'Bản sao' => 'Bản sao'
                                ),null,
                                array('id' => 'plgiay', 'class' => 'form-control'))
                                !!}
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="idprints" id="idprints">
                <div class="modal-footer">
                    <button type="submit" class="btn blue" onclick="ClickPrints()" formtarget="_bank">Đồng ý</button>
                    <button type="button" class="btn default" data-dismiss="modal">Hủy</button>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="prints-modalgs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['url'=>'kethon/printsgs','id' => 'frm_printsgs','target'=>'_blank'])!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">In trích lục ghi sổ kết hôn</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label"><b>Phân loại in</b></label>
                            <div class="col-md-6 ">
                                {!! Form::select(
                                'plgiaygs',
                                array(
                                'Bản chính' => 'Bản chính',
                                'Bản sao' => 'Bản sao'
                                ),null,
                                array('id' => 'plgiaygs', 'class' => 'form-control'))
                                !!}
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="idprintsgs" id="idprintsgs">
                <div class="modal-footer">
                    <button type="submit" class="btn blue" onclick="ClickPrints()" formtarget="_bank">Đồng ý</button>
                    <button type="button" class="btn default" data-dismiss="modal">Hủy</button>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @include('includes.e.modal-confirm')
@stop