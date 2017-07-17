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
        Thông tin khai tử<small> thêm mới</small>
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
                    {!! Form::open(['url'=>'khaitu','id' => 'create_khaitu', 'class'=>'horizontal-form']) !!}
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
                                    {!!Form::text('ngaysinh',null, array('id' => 'ngaysinh','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
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
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Số giấy tờ<span class="require">*</span></label>
                                    <div>
                                        {!! Form::select(
                                        'loaigiayto',
                                        array(
                                        'Chứng minh nhân dân' => 'Chứng minh nhân dân',
                                        'Hộ chiếu' => 'Hộ chiếu',
                                        'Thẻ căn cước công dân'=>'Thẻ căn cước công dân'
                                        ),null,
                                        array('id' => 'loaigiayto', 'class' => 'form-control'))
                                        !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Số giấy tờ<span class="require">*</span></label>
                                    {!!Form::text('sogiayto', null, array('id' => 'sogiayto','class' => 'form-control required'))!!}
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
                                    {!!Form::text('ngaychet',null, array('id' => 'ngaychet','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Giấy báo tử/Giấy tờ thay thế<span class="require">*</span></label>
                                    {!!Form::text('giaybaotu', null, array('id' => 'giaybaotu','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Phân loại đăng ký<span class="require">*</span></label>
                                    {!! Form::select(
                                    'phanloaidk',
                                    array(
                                    'Đăng ký mới' => 'Đăng ký mới',
                                    'Đăng ký lại' => 'Đăng ký lại',
                                    ),null,
                                    array('id' => 'phanloaidk', 'class' => 'form-control'))
                                    !!}
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
                                    {!!Form::text('ngaycapgbt',null, array('id' => 'ngaycapgbt','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
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
                                    <label class="control-label">Phân loại tuổi<span class="require">*</span></label>
                                    {!! Form::select(
                                    'phanloaituoi',
                                    array(
                                    'Dưới 1 tuổi' => 'Dưới 1 tuổi',
                                    'Từ 1 tuổi đến dưới 5 tuổi' => 'Từ 1 tuổi đến dưới 5 tuổi',
                                    'Từ 5 tuổi trở lên' => 'Từ 5 tuổi trở lên',
                                    ),null,
                                    array('id' => 'phanloaituoi', 'class' => 'form-control'))
                                    !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Ngày đăng ký<span class="require">*</span></label>
                                    {!!Form::text('ngaydangkykt',null, array('id' => 'ngaydangkykt','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nơi đăng ký<span class="require">*</span></label>
                                    {!!Form::text('noidangkykt', null, array('id' => 'noidangkykt','class' => 'form-control required'))!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END FORM-->
            </div>
        </div>

        <div style="text-align: center">
            <a href="{{url('khaitu/danhsach')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
            <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
            <button type="submit" onclick="validateForm()" class="btn green" ><i class="fa fa-check"></i> Hoàn thành</button>
        </div>
    {!! Form::close() !!}
    <!-- END VALIDATION STATES-->
    </div>
    </div>
    <script type="text/javascript">
        function validateForm(){

            var validator = $("#create_khaitu").validate({
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