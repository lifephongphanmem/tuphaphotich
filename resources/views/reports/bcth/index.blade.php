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
                        <div class="col-lg-12">
                            <ol>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ khai sinh</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ khai tử</a></li>
                                <li><a data-target="#SoXNHN" data-toggle="modal">Sổ cấp giấy xác định tình trạng hôn nhân</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ kết hôn</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ đăng ký giám hộ</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ đăng ký chấm dứt giám hộ</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ nhận cha mẹ con</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ cấp bản sao trích lục</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ đăng ký thay đổi, cải chính, xác định lại dân tộc, bổ xung hộ tịch</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ ghi chú ly hôn</a></li>
                                <li><a data-target="#SoKt-thoai-confirm" data-toggle="modal">Sổ khai tử</a></li>
                                <li><a data-target="#SoXdtthn-thoai-confirm" data-toggle="modal">Sổ cấp giấy xác định tình trạng hôn nhân</a></li>
                                <li><a data-target="#SoKh-thoai-confirm" data-toggle="modal" onclick="getMa()">Sổ đăng ký kết hôn</a></li>
                                <li><a data-target="#SoGh-thoai-confirm" data-toggle="modal">Sổ đăng ký giám hộ</a></li>
                                <li><a data-target="#SoCdgh-thoai-confirm" data-toggle="modal">Sổ đăng ký chấm dứt giám hộ</a></li>
                                <li><a data-target="#SoCmc-thoai-confirm" data-toggle="modal">Sổ nhận cha mẹ con</a></li>
                                <li><a data-target="#SoTl-thoai-confirm" data-toggle="modal">Sổ cấp bản sao trích lục</a></li>
                                <li><a data-target="#SoTd-thoai-confirm" data-toggle="modal">Sổ đăng ký thay đổi, cải chính, xác định lại dân tộc, bổ xung hộ tịch</a></li>
                                <li><a data-target="#SoLh-thoai-confirm" data-toggle="modal">Sổ ghi chú ly hôn</a></li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('reports.bcth.modal-thoai')
    @include('reports.tthonnhan.modal-thoai')
@stop