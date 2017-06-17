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
                    <div class="row">
                        <div class="col-lg-12">
                            <ol>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ khai sinh</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ khai tử</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ cấp giấy xác định tình trạng hôn nhân</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ kết hôn</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ đăng ký giám hộ</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ đăng ký chấm dứt giám hộ</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ nhận cha mẹ con</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ cấp bản sao trích lục</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ đăng ký thay đổi, cải chính, xác định lại dân tộc, bổ xung hộ tịch</a></li>
                                <li><a data-target="#SoKs-thoai-confirm" data-toggle="modal">Sổ ghi chú ly hôn</a></li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('reports.bcth.modal-thoai')
@stop