@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
@stop


@section('custom-script')
    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script src="{{url('js/jquery.inputmask.bundle.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(":input").inputmask();
        });
    </script>
    <script>
        $(function(){

            $('#select_huyen, #select_xa').change(function() {
                var current_path_url = '/reports?';
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


@stop

@section('content')
    <h3 class="page-title">
        Sổ sách báo cáo tổng hợp<small>tư pháp hộ tịch</small>
    </h3>
    <!-- END PAGE HEADER-->

    <!-- BEGIN DASHBOARD STATS -->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box">
                <div class="portlet-body">
                    <div class="row mbm">
                        @if(session('admin')->level == 'T')
                            <div class="col-md-1">
                                <div class="form-control-static"  style="white-space: nowrap;">Quận/huyện</div>
                            </div>
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
                            <div class="col-md-1">
                                <div class="form-control-static"  style="white-space: nowrap;">Xã/phường</div>
                            </div>
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
                    <div class="row">
                        <div class="col-lg-6">
                            <ol>
                                <h4>SỔ SÁCH</h4>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ khai sinh</a></li>
                                <li><a data-target="#SoKt-thoai-confirm" data-toggle="modal">Sổ khai tử</a></li>
                                <li><a data-target="#SoXdTtHn-thoai-confirm" data-toggle="modal">Sổ cấp giấy xác định tình trạng hôn nhân</a></li>
                                <li><a data-target="#SoKh-thoai-confirm" data-toggle="modal">Sổ đăng ký kết hôn</a></li>
                                <li><a data-target="#SoGh-thoai-confirm" data-toggle="modal">Sổ đăng ký giám hộ</a></li>
                                <li><a data-target="#SoChamdutgh-thoai-confirm" data-toggle="modal">Sổ đăng ký chấm dứt giám hộ</a></li>
                                <li><a data-target="#SoNhancmc-thoai-confirm" data-toggle="modal">Sổ nhận cha mẹ con</a></li>
                                <li><a data-target="#SoConnuoi-thoai-confirm" data-toggle="modal">Sổ đăng ký con nuôi</a></li>
                                <li><a data-target="#SoTrichLuc-thoai-confirm" data-toggle="modal">Sổ cấp bản sao trích lục</a></li>
                                <li><a data-target="#SoThayDoi-thoai-confirm" data-toggle="modal">Sổ đăng ký thay đổi, cải chính, xác định lại dân tộc, bổ xung hộ tịch</a></li>
                                <li><a data-target="#-thoai-confirm" data-toggle="modal">Sổ ghi chú ly hôn</a></li>
                            </ol>
                        </div>
                        <div class="col-lg-6">
                            <ol>
                                <h4>BÁO CÁO TỔNG HỢP</h4>
                                <li><a data-target="#BCkhkskt-thoai-confirm" data-toggle="modal">Kết quả đăng ký Khai sinh, Khai tử, Kết hôn (Cấp Xã)</a></li>
                                <li><a data-target="#BCconnuoi-thoai-confirm" data-toggle="modal">Kết quả đăng ký nuôi con nuôi trong nước (Cấp Xã)</a></li>
                                <li><a data-target="#BChotichkhac-thoai-confirm" data-toggle="modal">Kết quả đăng ký các việc Hộ tịch khác (Cấp Xã)</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('reports.bcth.modal-thoai')
@stop