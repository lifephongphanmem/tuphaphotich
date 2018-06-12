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
        Thông tin sổ hộ tịch<small> chỉnh sửa</small>
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
                    {!! Form::model($model, ['method' => 'PATCH', 'url'=>'sohotich/'. $model->id, 'class'=>'horizontal-form','id'=>'edit_sohotich']) !!}
                        <meta name="csrf-token" content="{{ csrf_token() }}" />

                    <div class="form-body">
                        <div class="col-md-6" style="display:none;">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Xã phường<span class="require">*</span></label>
                                <div class="col-sm-8 controls">
                                    @if(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Yên Minh')
                                        <select name="maxa" class="form-control required">
                                            <option value="tpym"></option>
                                        </select>
                                    @elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn')
                                        <select name="maxa" class="form-control required">
                                            <option value="tpdv"></option>
                                        </select>
                                    @else
                                        <select name="maxa" class="form-control required">
                                            @foreach($xas as $xa)
                                                <option value="{{$xa->maxa}}" {{$xa->maxa == $maxa ? 'selected' : ''}}>{{$xa->tenxa}}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Năm sổ<span class="require">*</span></label>
                                    <select name="namso" id="namso" class="form-control">
                                        @if ($nam_start = intval(date('Y')) - 5 ) @endif
                                        @if ($nam_stop = intval(date('Y')) + 5 ) @endif
                                        @for($i = $nam_start; $i <= $nam_stop; $i++)
                                            <option value="{{$i}}" {{$i == $model->namso ? 'selected' : ''}}>Năm {{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Phân loại sổ hộ tịch</label>
                                    {!! Form::select(
                                    'plhotich',
                                    array(
                                    'Khai sinh' => 'Khai sinh',
                                    'Khai tử' => 'Khai tử',
                                    'Tình trạng hôn nhân' =>'Tình trạng hôn nhân',
                                    'Kết hôn'=>'Kết hôn',
                                    'Con nuôi'=>'Con nuôi',
                                    'Giám hộ'=>'Giám hộ',
                                    'Nhận cha mẹ con'=>'Nhận cha mẹ con',
                                    ),null,
                                    array('id' => 'plhotich', 'class' => 'form-control'))
                                    !!}
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Quyển hộ tịch<span class="require">*</span></label>
                                    {!!Form::text('quyenhotich',null, array('id' => 'quyenhotich','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Số bắt đầu</label>
                                    {!!Form::number('sobatdau', null, array('id' => 'sobatdau','class' => 'form-control required'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Ngày bắt đầu</label>
                                    {!!Form::text('ngaybatdau',date('d/m/Y',strtotime($model->ngaybatdau)), array('id' => 'ngaybatdau','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Ngày kết thúc<span class="require">*</span></label>
                                    {!!Form::text('ngayketthuc',date('d/m/Y',strtotime($model->ngayketthuc)), array('id' => 'ngayketthuc','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM-->
                </div>
            </div>

            <div style="text-align: center">
                <a href="{{url('sohotich')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
                <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
                <button type="submit" class="btn green" onclick="validateForm()"><i class="fa fa-check"></i> Cập nhật</button>
            </div>
            {!! Form::close() !!}
            <!-- END VALIDATION STATES-->
        </div>
    </div>
    <script type="text/javascript">
        function validateForm(){

            var validator = $("#edit_sohotich").validate({
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