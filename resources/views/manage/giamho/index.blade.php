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
        function getIdchamdut(id){
            document.getElementById("idchamdut").value=id;
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
                var current_path_url = '/dangkygiamho?';
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
        Danh sách thông tin<small>&nbsp;đăng ký giám hộ</small>
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
                        @if(can('khaisinh','create'))
                        <a href="{{url('dangkygiamho/create')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-plus"></i>&nbsp;Thêm mới</a>
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
                        @if(session('admin')->level == 'T')
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select id="select_huyen" class="form-control">
                                        @foreach ($huyens as $huyen)
                                            <option {{ ($huyen->mahuyen == $mahuyen) ? 'selected' : '' }} value="{{ $huyen->mahuyen }}">{{ $huyen->tenhuyen }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif
                        @if(count($xas) > 0 && (session('admin')->level == 'T' || session('admin')->level == 'H'))
                            <div class="col-md-3">
                                <div class="form-group">
                                    @if(count($xas) > 0)
                                        <select id="select_xa" class="form-control">
                                            <option value="all">--Chọn xã phường--</option>
                                            @foreach ($xas as $xa)
                                                <option {{ ($xa->maxa == $maxa) ? 'selected' : '' }} value="{{ $xa->maxa }}">{{ $xa->tenxa }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>
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
                            <th style="text-align: center">Ngày đăng ký</th>
                            <th style="text-align: center">Phân loại <br>đăng ký</th>
                            <th style="text-align: center" width="15%">Người được <br>giám hộ</th>
                            <th style="text-align: center" width="15%">Người giám hộ<br> thứ nhất</th>
                            <th style="text-align: center" width="15%">Người giám hộ<br>thứ hai</th>
                            <th style="text-align: center">Trạng thái</th>
                            <th style="text-align: center" width="20%">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($model as $key=>$tt)
                            <tr>
                                <td style="text-align: center">{{$key+1}}</td>
                                <td style="text-align: center">{{getDayVn($tt->ngaydangky)}}</td>
                                <td style="text-align: center">{{$tt->phanloainhap}}</td>
                                <td class="active">{{$tt->hotenndgh}}</td>
                                <td class="active">{{$tt->hotenngh1}}</td>
                                <td class="active">{{$tt->hotenngh2}}</td>
                                @if($tt->trangthai == 'Chờ duyệt')
                                    <td align="center"><span class="badge badge-blue">{{$tt->trangthai}}</span>
                                    </td>
                                @elseif($tt->trangthai == 'Duyệt')
                                    <td align="center"><span class="badge badge-warning">Đã duyệt</span>
                                    </td>
                                @endif
                                <td>
                                    <a href="{{url('dangkygiamho/'.$tt->id.'/show')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-eye"></i>&nbsp;Xem chi tiết</a>
                                    <a href="{{url('dangkygiamho/'.$tt->id.'/printstokhai')}}" target="_blank" class="btn btn-default btn-xs mbs"><i class="fa fa-print"></i> Tờ khai</a>

                                        @if(can('dkgiamho','edit'))
                                            <a href="{{url('dangkygiamho/'.$tt->id.'/edit')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-edit"></i>&nbsp;Chỉnh sửa</a>
                                        @endif

                                        @if(can('dkgiamho','delete'))
                                            <button type="button" onclick="getId('{{$tt->id}}')" class="btn btn-default btn-xs mbs" data-target="#delete-modal" data-toggle="modal"><i class="fa fa-trash-o"></i>&nbsp;
                                                Xóa</button>
                                        @endif

                                        @if(can('dkgiamho','approve'))
                                            <button type="button" onclick="getIdDuyet('{{$tt->id}}')" class="btn btn-default btn-xs mbs" data-target="#duyet-modal" data-toggle="modal"><i class="fa fa-check"></i>&nbsp;Duyệt</button>
                                        @endif

                                        <a href="{{url('dangkygiamho/'.$tt->id.'/prints')}}" target="_blank" class="btn btn-default btn-xs mbs"><i class="fa fa-print"></i>&nbsp;In</a>
                                        <a href="{{url('dangkygiamho/'.$tt->id.'/printsbansao')}}" target="_blank" class="btn btn-default btn-xs mbs"><i class="fa fa-print"></i>&nbsp;Bản sao</a>
                                      @if($tt->phanloainhap == "Giám hộ")  <button type="button" onclick="getIdchamdut('{{$tt->id}}')" class="btn btn-default btn-xs mbs" data-target="#chamdut-modal" data-toggle="modal"><i class="fa fa-print"></i>&nbsp;
                                            Chấm dứt</button> @endif

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
                {!! Form::open(['url'=>'dangkygiamho/delete','id' => 'frm_delete'])!!}
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
                {!! Form::open(['url'=>'dangkygiamho/duyet','id' => 'frm_duyet'])!!}
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

    <div class="modal fade" id="chamdut-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['url'=>'dangkygiamho/chamdut','id' => 'frm_chamdut','target'=>'_blank'])!!}
                <div class="row">
                    <div class="col-md-6" {{!(session('admin')->level == 'T') ? 'style=display:none;' : '' }} >
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Quận huyện<span class="require">*</span></label>
                            <div class="col-sm-8 controls">
                                <select name="mahuyen" class="form-control required" autofocus>
                                    @foreach($huyens as $huyen)
                                        <option value="{{$huyen->mahuyen}}" {{ $huyen->mahuyen == $mahuyen ? 'selected' : ''}}>{{$huyen->tenhuyen}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="form-group" style="display:none;">
                            <label class="col-sm-4 control-label">Xã phường<span class="require">*</span></label>
                            <div class="col-sm-8 controls">
                                @if(session('admin')->level == 'H' && session('admin')->name=="Phòng tư Pháp huyện Yên Minh")
                                    <select name="maxa" class="form-control required">
                                        <option value="tpym"></option>
                                    </select>
                                    @elseif(session('admin')->level == 'H' && session('admin')->name=="Phòng tư Pháp huyện Đồng Văn")
                                    <select name="maxa" class="form-control required">
                                        <option value="tpdv"></option>
                                    </select>
                                @else
                                    <select name="maxa" class="form-control required">
                                        @foreach($xas as $xa)
                                            <option value="{{$xa->maxa}}" {{$xa->maxa == $maxa ? 'selected' : ''}}>{{$xa->tenxa}}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Chấm dứt giám hộ</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Ngày chấm dứt<span class="require">*</span></label>
                            <div class="col-sm-8 controls">
                                {!!Form::text('ngaychamdut',isset($model->ngaychamdut) ? date('d/m/Y',strtotime($model->ngaychamdut)) : date('d/m/Y',strtotime(date('Y-m-d'))), array('id' => 'ngaychamdut','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Lý do chấm dứt<span class="require">*</span></label>
                            <div class="col-sm-8 controls">
                                {!!Form::text('lydochamdut', null, array('id' => 'lydochamdut','class' => 'form-control'))!!}
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="idchamdut" id="idchamdut">
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