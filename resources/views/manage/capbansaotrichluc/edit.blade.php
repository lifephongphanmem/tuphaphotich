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
    <script src="{{url('minhtran/jquery.inputmask.bundle.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(":input").inputmask();
        });
    </script>

@stop

@section('content')
    <h3 class="page-title">
        Thông tin cấp bản sao trích lục<small> chỉnh sửa</small>
    </h3>
    <div class="row center">
        <div class="col-md-12 center">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet box blue">
                <!--div class="portlet-title">
                </div-->
                <div class="portlet-body form">
                <!-- BEGIN FORM-->
                {!! Form::model($model, ['method' => 'PATCH', 'url'=>'capbansaotrichluc/'. $model->id, 'class'=>'horizontal-form','id'=>'edit_capbansaotrichluc']) !!}
                <meta name="csrf-token" content="{{ csrf_token() }}" />

                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Ngày cấp<span class="require">*</span></label>
                                {!!Form::text('ngaycap',date('d/m/Y',  strtotime($model->ngaycap)), array('id' => 'ngaycap','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Ghi chú</label>
                                {!! Form::select(
                                'ghichu',
                                array(
                                'Từ Sổ đăng ký hộ tịch ' => 'Từ Sổ đăng ký hộ tịch ',
                                'Cơ sở dữ liệu hộ tịch điện tử theo quy trình tin học' => 'Cơ sở dữ liệu hộ tịch điện tử theo quy trình tin học',
                                ),null,
                                array('id' => 'ghichu', 'class' => 'form-control required'))
                                !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Người ký<span class="require">*</span></label>
                                {!!Form::text('nguoiky', null, array('id' => 'nguoiky','class' => 'form-control required'))!!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Chức vụ<span class="require">*</span></label>
                                {!!Form::text('chucvu', null, array('id' => 'chucvu','class' => 'form-control required'))!!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Người thực hiện<span class="require">*</span></label>
                                {!!Form::text('nguoithuchien', null, array('id' => 'nguoithuchien','class' => 'form-control required'))!!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Số lượng bản sao<span class="require">*</span></label>
                                {!!Form::number('soluongbs', null, array('id' => 'soluongbs','class' => 'form-control required'))!!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Họ tên người yêu cầu</label>
                                {!!Form::text('hotennyc', null, array('id' => 'hotennyc','class' => 'form-control required'))!!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Giấy tờ</label>
                                    {!! Form::select(
                                    'plgiaytonyc',
                                    array(
                                    'Chứng minh nhân dân' => 'Chứng minh nhân dân',
                                    'Hộ chiếu' => 'Hộ chiếu',
                                    'Thẻ căn cước công dân'=>'Thẻ căn cước công dân'
                                    ),null,
                                    array('id' => 'plgiaytonyc', 'class' => 'form-control required'))
                                    !!}
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Thông tin giấy tờ<span class="require">*</span></label>
                                {!!Form::text('sogiaytonyc',null, array('id' => 'sogiaytonyc','class' => 'form-control required'))!!}
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END FORM-->
            </div>
        </div>

        <div style="text-align: center">
            <a href="{{url('capbansaotrichluc')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
            <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
            <button type="submit" class="btn green" onclick="validateForm()"><i class="fa fa-check"></i> Hoàn thành</button>
        </div>
        {!! Form::close() !!}
        </div>
    </div>
    <script type="text/javascript">
        function validateForm(){

            var validator = $("#edit_capbansaotrichluc").validate({
                rules: {
                    ten :"required"
                },
                messages: {
                    ten :"Chưa nhập dữ liệu"
                }
            });
        }
    </script>
@stop