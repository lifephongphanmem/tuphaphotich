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
                    {!! Form::model($connuoi,['url'=>'dangkyconnuoi/'.$connuoi->id,'method' => 'PATCH' ,'class'=>'horizontal-form']) !!}
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
                <a href="{{url('dangkyconnuoi')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
                <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
                <button type="submit" class="btn green" onclick="validateForm()"><i class="fa fa-check"></i> Hoàn thành</button>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@stop