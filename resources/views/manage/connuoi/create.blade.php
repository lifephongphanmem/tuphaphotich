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
        Thông tin con nuôi<small> thêm mới</small>
    </h3>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue" id="form_wizard_1">
                <div class="portlet-body form" id="form_wizard">
                    {!! Form::open(['url'=>'dangkyconnuoi','method'=>'post' , 'files'=>true, 'id' => '','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                    <div class="form-body">
                        <ul class="nav nav-pills nav-justified steps">
                            <li><a href="#tab1" data-toggle="tab" class="step">
                                        <span class="badge badge-default">
                                        1 </span>
                                    <p class="description">Thông tin con nuôi</p>
                                </a>
                            </li>
                            <li><a href="#tab2" data-toggle="tab" class="step">
                                    <span class="badge badge-default">
                                        2 </span>
                                    <p class="description">Thông tin cha nuôi</p></a>
                            </li>
                            <li><a href="#tab3" data-toggle="tab" class="step">
                                     <span class="badge badge-default">
                                        3 </span>
                                    <p class="description">Thông tin mẹ nuôi</p></a>
                            </li>
                            <li><a href="#tab4" data-toggle="tab" class="step">
                                    <span class="badge badge-default">
                                        4 </span>
                                    <p class="description">Thông tin bên giao - Ông</p></a>
                            </li>
                            <li><a href="#tab5" data-toggle="tab" class="step">
                                     <span class="badge badge-default">
                                        5 </span>
                                    <p class="description">Thông tin bên giao - Bà</p></a>
                            </li>
                            <li><a href="#tab6" data-toggle="tab" class="step">
                                     <span class="badge badge-default">
                                        6 </span>
                                    <p class="description">Thông tin khác</p></a>
                            </li>
                        </ul>

                        <div id="bar" class="progress progress-striped" role="progressbar">
                            <div class="progress-bar progress-bar-blue">
                            </div>
                        </div>

                        <div class="tab-content">
                            @include('manage.connuoi.include.connuoi')
                            @include('manage.connuoi.include.chanuoi')
                            @include('manage.connuoi.include.menuoi')
                            @include('manage.connuoi.include.bengiaoong')
                            @include('manage.connuoi.include.bengiaoba')
                            @include('manage.connuoi.include.khac')
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-offset-1 col-md-1" style="text-align: left">
                                <button type="button" name="previous" value="Previous" class="btn btn-info button-previous mlm">
                                    <i class="fa fa-arrow-circle-o-left mrx"></i>&nbsp;Trước
                                </button>
                            </div>
                            <div class="col-md-offset-8 col-md-1" style="text-align: right">
                                <button id="btnnext" type="button" name="next" value="Next" class="btn btn-info button-next mlm">
                                    &nbsp;Tiếp<i class="fa fa-arrow-circle-o-right mlx"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="text-align: center">
                <a href="{{url('connuoi/danhsach')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
                <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
                <button type="submit" class="btn green" onclick="validateForm1()"><i class="fa fa-check"></i> Hoàn thành</button>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
    <script>
        function validateForm(){

            var str = '',strb1='',strb2='',strb3='',strb4='',strb5='',strb6='';
            var ok = true;
            //thông tin con nuôi
            if($('#hotenconnuoi').val()==''){
                strb1 += ' - Họ tên\n';
                ok = false;
            }
            if($('#ngaysinhconnuoi').val()==''){
                strb1 += ' - Ngày sinh\n';
                ok = false;
            }
            if($('#noisinhconnuoi').val()==''){
                strb1 += '  - Nơi sinh\n';
                ok = false;
            }
            if($('#thuongtruconnuoi').val()==''){
                strb1 += '  - Nơi thường trú\n';
                ok = false;
            }
            if($('#tinhtrangsk').val()==''){
                strb1 += '  - Tình trạng sức khỏe\n';
                ok = false;
            }
            //Thông tin cha nuôi
            if($('#hotenchanuoi').val()==''){
                strb2 += ' - Họ tên \n';
                ok = false;
            }
            if($('#ngaysinhchanuoi').val()==''){
                strb2 += '  - Ngày sinh \n';
                ok = false;
            }
            if($('#cmndchanuoi').val()==''){
                strb2 += '  - Số CMND \n';
                ok = false;
            }
            if($('#noicapgtcn').val()==''){
                strb2 += '  - Nơi cấp \n';
                ok = false;
            }
            if($('#ngaycapgtcn').val()==''){
                strb2 += '  - Ngày cấp \n';
                ok = false;
            }
            if($('#thuongtrucn').val()==''){
                strb2 += '  - Nơi thường trú \n';
                ok = false;
            }
            //Thông tin mẹ nuôi
            if($('#hotenmenuoi').val()==''){
                strb3 += ' - Họ tên \n';
                ok = false;
            }
            if($('#ngaysinhmenuoi').val()==''){
                strb3 += '  - Ngày sinh \n';
                ok = false;
            }
            if($('#cmndmenuoi').val()==''){
                strb3 += '  - Số CMND \n';
                ok = false;
            }
            if($('#noicapgtmn').val()==''){
                strb3 += '  - Nơi cấp \n';
                ok = false;
            }
            if($('#ngaycapgtmn').val()==''){
                strb3 += '  - Ngày cấp \n';
                ok = false;
            }
            if($('#thuongtrumn').val()==''){
                strb3 += '  - Nơi thường trú \n';
                ok = false;
            }
            //Thông tin bên giao - Ông
            if($('#hotenchagiao').val()==''){
                strb4 += ' - Họ tên \n';
                ok = false;
            }
            if($('#ngaysinhchagiao').val()==''){
                strb4 += '  - Ngày sinh \n';
                ok = false;
            }
            if($('#cmndchagiao').val()==''){
                strb4 += '  - Số CMND \n';
                ok = false;
            }
            if($('#noicapgtcg').val()==''){
                strb4 += '  - Nơi cấp \n';
                ok = false;
            }
            if($('#ngaycapgtcg').val()==''){
                strb4 += '  - Ngày cấp \n';
                ok = false;
            }
            if($('#thuongtrucg').val()==''){
                strb4 += '  - Nơi thường trú \n';
                ok = false;
            }
            //Thông tin bên giao - Bà
            if($('#hotenmegiao').val()==''){
                strb5 += ' - Họ tên \n';
                ok = false;
            }
            if($('#ngaysinhmegiao').val()==''){
                strb5 += '  - Ngày sinh \n';
                ok = false;
            }
            if($('#cmndmegiao').val()==''){
                strb5 += '  - Số CMND \n';
                ok = false;
            }
            if($('#noicapgtmg').val()==''){
                strb5 += '  - Nơi cấp \n';
                ok = false;
            }
            if($('#ngaycapgtmg').val()==''){
                strb5 += '  - Ngày cấp \n';
                ok = false;
            }
            if($('#thuongtrumg').val()==''){
                strb5 += '  - Nơi thường trú \n';
                ok = false;
            }

            //Thông tin khác
            if($('#soqd').val()==''){
                strb6 += ' - Số QĐ \n';
                ok = false;
            }
            if($('#ngaythangqd').val()==''){
                strb6 += '  - Ngày QĐ \n';
                ok = false;
            }
            if($('#noidkconnuoi').val()==''){
                strb6 += '  - Nơi đăng ký \n';
                ok = false;
            }
            if($('#tencsnuoiduong').val()==''){
                strb6 += '  - Cơ sở nuôi dưỡng \n';
                ok = false;
            }
            if($('#nguoidaidiencsnd').val()==''){
                strb6 += '  - Người đại diện \n';
                ok = false;
            }
            if($('#chucvundd').val()==''){
                strb6 += '  - Chức vụ \n';
                ok = false;
            }
            if($('#ngaythangdk').val()==''){
                strb6 += '  - Ngày đăng ký \n';
                ok = false;
            }
            if($('#lydo').val()==''){
                strb6 += '  - Lý do \n';
                ok = false;
            }

            //Kết quả
            if ( ok == false){
                if(strb1!='')
                    str+='Bước 1: Thông tin con nuôi \n '+strb1 ;
                if(strb2!='')
                    str+='Bước 2: Thông tin cha nuôi \n '+strb2 ;
                if(strb3!='')
                    str+='Bước 3: Thông tin mẹ nuôi \n '+strb3 ;
                if(strb4!='')
                    str+='Bước 4: Thông tin bên giao ông \n '+strb4 ;
                if(strb5!='')
                    str+='Bước 5: Thông tin bên giao bà \n '+strb5 ;
                if(strb6!='')
                    str+='Bước 6: Thông tin khác \n '+strb6 ;

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