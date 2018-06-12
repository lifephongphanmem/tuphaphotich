@extends('main')

@section('custom-style')
    <link href="{{url('assets/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{ url('vendors/bootstrap-datepicker/css/datepicker.css') }}">
@stop

@section('custom-script')
    <script type="text/javascript" src="{{url('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{url('assets/admin/pages/scripts/form-wizard.js')}}"></script>
    <script src="{{url('js/jquery.inputmask.bundle.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(":input").inputmask();
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            FormWizard.init();
        });
    </script>
@stop

@section('content')
    <h3 class="page-title">
        Thông tin kết hôn<small> thêm mới</small>
    </h3>
    <div class="row">
        {!! Form::open(['url'=>'kethon','method'=>'post' , 'files'=>true, 'id' => 'create_kethon','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <div class="col-md-12">
            <div class="portlet box blue" id="form_wizard_1">
                <div class="portlet-body form" id="form_wizard">
                    <div class="form-body">
                        <ul class="nav nav-pills nav-justified steps">
                            <li><a href="#tab1" data-toggle="tab" class="step">
                                        <span class="badge badge-default">
                                        1 </span>
                                    <p class="description">Thông tin kết hôn</p>
                                </a>
                            </li>
                            <li><a href="#tab2" data-toggle="tab" class="step">
                                    <span class="badge badge-default">
                                        2 </span>
                                    <p class="description">Thông tin vợ</p></a>
                            </li>
                            <li><a href="#tab3" data-toggle="tab" class="step">
                                     <span class="badge badge-default">
                                        3 </span>
                                    <p class="description">Thông tin chồng</p></a>
                            </li>
                        </ul>
                        <div id="bar" class="progress progress-striped" role="progressbar">
                            <div class="progress-bar progress-bar-blue">
                            </div>
                        </div>

                        <div class="tab-content">
                            @include('manage.kethon.include.hoso')
                            @include('manage.kethon.include.ttvo')
                            @include('manage.kethon.include.ttchong')
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-offset-1 col-md-1" style="text-align: left">
                                <button type="button" name="previous" value="Previous" class="btn default button-previous">
                                    <i class="fa fa-arrow-circle-o-left mrx"></i>&nbsp;Trước
                                </button>
                            </div>
                            <div class="col-md-offset-8 col-md-1" style="text-align: right">
                                <button id="btnnext" type="button" name="next" value="Next" class="btn blue button-next">
                                    Tiếp&nbsp;<i class="fa fa-arrow-circle-o-right mlx"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center">
                <a href="{{url('kethon')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
                <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
                <button type="submit" class="btn green" onclick="validateForm1()"><i class="fa fa-check"></i>Hoàn thành</button>
            </div>
            <div id="chameshow"></div>
        </div>
        {!! Form::close() !!}
    </div>
    <script>
        function validateForm(){

            var str = '',strb1='',strb2='',strb3='';
            var ok = true;

            if($('#ngaydangky').val()==''){
                strb1 += ' - Ngày đăng ký\n';
                ok = false;
            }
            if($('#sokethon').val()==''){
                strb1 += ' - Số kết hôn\n';
                ok = false;
            }
            if($('#quyenkethon').val()==''){
                strb1 += '  - Quyển kết hôn\n';
                ok = false;
            }
            if($('#nguoiky').val()==''){
                strb1 += '  - Người ký \n';
                ok = false;
            }
            if($('#chucvunguoiky').val()==''){
                strb1 += '  - Chức vụ người ký \n';
                ok = false;
            }
            if($('#nguoithuchien').val()==''){
                strb1 += '  - Người thực hiện \n';
                ok = false;
            }


            if($('#hotenvo').val()==''){
                strb2 += ' - Họ, chữ đệm, tên vợ\n';
                ok = false;
            }
            if($('#sogiaytovo').val()==''){
                strb2 += '  - Số giấy tờ vợ\n';
                ok = false;
            }

            if($('#diachivo').val()==''){
                strb2 += '  - Địa chỉ vợ \n';
                ok = false;
            }
            if($('#ngaysinhvo').val()==''){
                strb2 += '  - Ngày sinh vợ \n';
                ok = false;
            }

            if($('#hotenchong').val()==''){
                strb3 += ' - Họ, chữ đệm, tên chong\n';
                ok = false;
            }
            if($('#sogiaytochong').val()==''){
                strb3 += '  - Số giấy tờ chong\n';
                ok = false;
            }

            if($('#diachichong').val()==''){
                strb3 += '  - Địa chỉ chồng \n';
                ok = false;
            }
            if($('#ngaysinhchong').val()==''){
                strb3 += '  - Ngày sinh chồng \n';
                ok = false;
            }



            //Kết quả
            if ( ok == false){
                if(strb1!='')
                    str+='Bước 1: Thông tin kết hôn \n '+strb1 ;
                if(strb2!='')
                    str+='Bước 2: Thông tin người vợ \n '+strb2 ;
                if(strb3!='')
                    str+='Bước 3: Thông tin người chồng \n '+strb3 ;

                alert('Thông tin không được để trống \n' + str );
                $("form").submit(function (e) {
                    e.preventDefault();
                });
            }
            else{
                $("form").unbind('submit').submit();
            }

        }
    </script>
@stop