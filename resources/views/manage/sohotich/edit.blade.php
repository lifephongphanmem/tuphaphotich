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
        Thông tin công dân<small> thêm mới</small>
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
                    {!! Form::model($model, ['method' => 'PATCH', 'url'=>'congdan/'. $model->id, 'class'=>'horizontal-form','id'=>'edit_congdan']) !!}
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tên gọi khác </label>
                                        {!!Form::text('hotenk', null, array('id' => 'hotenk','class' => 'form-control'))!!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Ngày sinh<span class="require">*</span></label>
                                        {!!Form::text('ngaysinh',date('d/m/Y',  strtotime($model->ngaysinh)), array('id' => 'ngaysinh','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nơi sinh</label>
                                        {!!Form::text('noisinh', null, array('id' => 'noisinh','class' => 'form-control'))!!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Dân tộc<span class="require">*</span></label>
                                        <select name="dantoc" id="dantoc" class="form-control required">
                                            @foreach($dantocs as $dantoc)
                                                <option value="{{$dantoc->dantoc}}">{{$dantoc->dantoc}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Quốc tịch<span class="require">*</span></label>
                                        <select name="quoctich" id="quoctich" class="form-control required">
                                            @foreach($quoctichs as $quoctich)
                                                <option value="{{$quoctich->quoctich}}">{{$quoctich->quoctich}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tôn giáo<span class="require">*</span></label>
                                        {!!Form::text('tongiao', 'Không', array('id' => 'tongiao','class' => 'form-control'))!!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Số CMND/Hộ chiếu</label>
                                        {!!Form::text('socmnd', null , array('id' => 'socmnd','class' => 'form-control'))!!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Thông tin CMND/Hộ chiếu</label>
                                        {!!Form::text('ttcmnd', null , array('id' => 'ttcmnd','class' => 'form-control '))!!}
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Quê quán<span class="require">*</span></label>
                                        {!!Form::text('quequan', null , array('id' => 'username','class' => 'form-control required'))!!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Thường trú<span class="require">*</span></label>
                                        {!!Form::text('thuongtru', null , array('id' => 'username','class' => 'form-control required'))!!}
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tình trạng hôn nhân<span class="require">*</span></label>
                                        {!! Form::select(
                                        'tthonnhan',
                                        $optiontthonnhan,null,
                                        array('id' => 'tthonnhan', 'class' => 'form-control'))
                                        !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- END FORM-->
                </div>
            </div>

            <div style="text-align: center">
                <a href="{{url('congdan')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
                <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
                <button type="submit" class="btn green" onclick="validateForm()"><i class="fa fa-check"></i> Hoàn thành</button>
            </div>
            {!! Form::close() !!}
            <!-- END VALIDATION STATES-->
        </div>
    </div>
    <script type="text/javascript">
        function validateForm(){

            var validator = $("#edit_congdan").validate({
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
                    $('select[name="maxa"]').val('');
                }
            });
        });
    </script>
    @include('includes.script.create-header-scripts')
@stop