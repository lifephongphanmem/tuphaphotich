@extends('main')

@section('custom-style')
    <link type="text/css" rel="stylesheet" href="{{ url('vendors/bootstrap-datepicker/css/datepicker.css') }}">
@stop

@section('custom-script')
    <script type="text/javascript" src="{{url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
    <!--cript src="{{url('assets/admin/pages/scripts/form-validation.js')}}"></script-->
    <script src="{{url('minhtran/jquery.inputmask.bundle.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(":input").inputmask();
        });
    </script>

@stop

@section('content')
    <h3 class="page-title">
        Thông tin khai tử<small> chỉnh sửa</small>
    </h3>
    <!-- END PAGE HEADER-->

    <!-- BEGIN DASHBOARD STATS -->
    <div class="row center">
        <div class="col-md-12 center">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet box blue">
                <!--div class="portlet-title">
                </div-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    {!! Form::model($khaitu,['url'=>'khaitu/'. $khaitu->id,'method' => 'PATCH' ,'class'=>'horizontal-form']) !!}
                    <meta name="csrf-token" content="{{ csrf_token() }}" />
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6" {{!(session('admin')->level == 'T') ? 'style=display:none;' : '' }} >
                                <div class="form-group">
                                    <label class="control-label">Quận huyện<span class="require">*</span></label>
                                    <select name="mahuyen" class="form-control required" autofocus>
                                        @foreach($huyens as $huyen)
                                            <option value="{{$huyen->mahuyen}}" {{ $huyen->mahuyen == $mahuyen ? 'selected' : ''}}>{{$huyen->tenhuyen}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" {{!(session('admin')->level == 'T' || session('admin')->level == 'H') ? 'style=display:none;' : '' }}>
                                <div class="form-group">
                                    <label class="control-label">Xã phường<span class="require">*</span></label>
                                    <select name="maxa" class="form-control required">
                                        @foreach($xas as $xa)
                                            <option value="{{$xa->maxa}}" {{$huyen->maxa == $maxa ? 'selected' : ''}}>{{$xa->tenxa}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Họ tên<span class="require">*</span></label>
                                    {!!Form::text('hoten', null, array('id' => 'hoten','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Giới tính<span class="require">*</span></label>
                                    {!! Form::select(
                                    'gioitinh',
                                    array(
                                    'Nam' => 'Nam',
                                    'Nữ' => 'Nữ',
                                    ),null,
                                    array('id' => 'gioitinh', 'class' => 'form-control'))
                                    !!}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Ngày sinh<span class="require">*</span></label>
                                    {!!Form::text('ngaysinh',date('d/m/Y',  strtotime($khaitu->ngaysinh)), array('id' => 'ngaysinh','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Dân tộc<span class="require">*</span></label>
                                    <div>
                                        {!! Form::select(
                                        'dantocks',
                                        $dantocs,null,
                                        array('id' => 'dantocks', 'class' => 'form-control'))
                                        !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Quốc tịch<span class="require">*</span></label>
                                    <div>
                                        {!! Form::select(
                                        'quoctichks',
                                        $quoctichs,null,
                                        array('id' => 'quoctichks', 'class' => 'form-control'))
                                        !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">CMND/Hộ chiếu/Giấy tờ hợp lệ thay thế<span class="require">*</span></label>
                                    {!!Form::text('cmnd', null, array('id' => 'cmnd','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nơi sinh<span class="require">*</span></label>
                                    {!!Form::text('noisinh', null, array('id' => 'noisinh','class' => 'form-control required'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Đã chết vào lúc</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Giờ<span class="require">*</span></label>
                                    {!!Form::text('giotu', null, array('id' => 'giotu','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Phút<span class="require">*</span></label>
                                    {!!Form::text('phuttu', null, array('id' => 'phuttu','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Ngày<span class="require">*</span></label>
                                    {!!Form::text('ngaychet',date('d/m/Y',  strtotime($khaitu->ngaychet)), array('id' => 'ngaychet','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Nơi chết<span class="require">*</span></label>
                                    {!!Form::text('noichet', null, array('id' => 'noichet','class' => 'form-control required'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nguyên nhân chết<span class="require">*</span></label>
                                    {!!Form::text('nguyennhan', null, array('id' => 'nguyennhan','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Giấy báo tử/Giấy tờ thay thế giấy báo tử<span class="require">*</span></label>
                                    {!!Form::text('giaybaotu', null, array('id' => 'giaybaotu','class' => 'form-control required'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Do<span class="require">*</span></label>
                                    {!!Form::text('donvicapgbt', null, array('id' => 'donvicapgbt','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Cấp ngày<span class="require">*</span></label>
                                    {!!Form::text('ngaycapgbt',date('d/m/Y',  strtotime($khaitu->ngaycapgbt)), array('id' => 'ngaycapgbt','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Phân loại khai tử<span class="require">*</span></label>
                                    {!! Form::select(
                                    'phanloaikt',
                                    array(
                                    'Đúng hạn' => 'Đúng hạn',
                                    'Quá hạn' => 'Quá hạn',
                                    ),null,
                                    array('id' => 'phanloaikt', 'class' => 'form-control'))
                                    !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Nơi đăng ký<span class="require">*</span></label>
                                    {!!Form::text('noidangkykt', null, array('id' => 'noidangkykt','class' => 'form-control required'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Ngày đăng ký<span class="require">*</span></label>
                                    {!!Form::text('ngaydangkykt',date('d/m/Y',  strtotime($khaitu->ngaydangkykt)), array('id' => 'ngaydangkykt','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Ghi chú<span class="require">*</span></label>
                                    {!!Form::text('ghichukt', null, array('id' => 'ghichukt','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Họ tên người khai<span class="require">*</span></label>
                                    {!!Form::text('hotennk', null, array('id' => 'hotennk','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Quan hệ người khai<span class="require">*</span></label>
                                    {!!Form::text('quanhe', null, array('id' => 'quanhe','class' => 'form-control required'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Người thực hiện<span class="require">*</span></label>
                                    {!!Form::text('nguoithuchien', null, array('id' => 'nguoithuchien','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Người ký giấy<span class="require">*</span></label>
                                    {!!Form::text('nguoikygct', null, array('id' => 'nguoikygct','class' => 'form-control required'))!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END FORM-->
            </div>
        </div>

        <div style="text-align: center">
            <a href="{{url('khaitu')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
            <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
            <button type="submit" class="btn green" ><i class="fa fa-check"></i> Cập nhật</button>
        </div>
    {!! Form::close() !!}
    <!-- END VALIDATION STATES-->
    </div>
    </div>
    <script type="text/javascript">
        function validateForm(){

            var validator = $("#create_congdan").validate({
                rules: {
                    ten :"required"
                },
                messages: {
                    ten :"Chưa nhập dữ liệu"
                }
            });
        }
    </script>
    <script>
        jQuery(function($){
            $('select[name="mahuyen"]').change(function(){

                if($(this).val() != 'all'){
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '/getXas',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            mahuyen: $(this).val()
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            if(data.status == 'success')
                                $('select[name="maxa"]').replaceWith(data.message);
                            else
                                $('select[name="maxa"]').val();

                        }
                    });
                } else {
                    $('select[name="maxa"]').val('all');
                }
            });
        });
    </script>
    @include('includes.script.create-header-scripts')
@stop