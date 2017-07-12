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
        Thông tin thay đổi<small> thêm mới</small>
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
                    {!! Form::model($model,['method' => 'post', 'url'=>'thaydoibosung/updatetthnbs/'.$model->id, 'id' => 'update_thaydoibosung', 'class'=>'horizontal-form']) !!}
                    <meta name="csrf-token" content="{{ csrf_token() }}" />

                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Họ tên người khai</label>
                                    {!!Form::text('hotennk', null, array('id' => 'hotennk','class' => 'form-control'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nơi thường trú/Tạm trú</label>
                                    {!!Form::text('thuongtrunk', null, array('id' => 'thuongtrunk','class' => 'form-control'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">CMND/Giấy tờ hợp lệ</label>
                                    {!!Form::text('cmndnk', null, array('id' => 'cmndnk','class' => 'form-control'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quan hệ<span class="require">*</span></label>
                                    <div>
                                        {!! Form::select(
                                        'quanhengntd',
                                        array(
                                        'Ông' => 'Ông',
                                        'Bà' => 'Bà',
                                        'Bố' => 'Bố',
                                        'Mẹ' => 'Mẹ',
                                        'Cô' => 'Cô',
                                        'Chú' => 'Chú',
                                        'Bác' => 'Bác'
                                        ),null,
                                        array('id' => 'quanhenk', 'class' => 'form-control'))
                                        !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Họ tên người được thay đổi</label>
                                    {!!Form::text('hotenntd', null, array('id' => 'hotenntd','class' => 'form-control'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Ngày tháng năm sinh<span class="require">*</span></label>
                                    {!!Form::text('ngaysinhntd',null, array('id' => 'ngaysinhntd','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Giới tính<span class="require">*</span></label>
                                    {!! Form::select(
                                    'gioitinhntd',
                                    array(
                                    'Nam' => 'Nam',
                                    'Nữ' => 'Nữ',
                                    ),null,
                                    array('id' => 'gioitinhntd', 'class' => 'form-control'))
                                    !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Dân tộc<span class="require">*</span></label>
                                    <div>
                                        {!! Form::select(
                                        'dantocntd',
                                        $dantocs,null,
                                        array('id' => 'dantocks', 'class' => 'form-control'))
                                        !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Quốc tịch<span class="require">*</span></label>
                                    <div>
                                        {!! Form::select(
                                        'quoctichntd',
                                        $quoctichs,null,
                                        array('id' => 'quoctichntd', 'class' => 'form-control'))
                                        !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Số giấy CMND/Giấy tờ hợp lệ thay thế</label>
                                    {!!Form::text('cmndntd', null, array('id' => 'cmndntd','class' => 'form-control'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nơi cư trú</label>
                                    {!!Form::text('quoctichntd', null, array('id' => 'quoctichntd','class' => 'form-control'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Phân loại thay đổi<span class="require">*</span></label>
                                    {!! Form::select(
                                    'plthaydoi',
                                    array(
                                    'Thay đổi hộ tịch' => 'Thay đổi hộ tịch',
                                    'Cải chính hộ tịch' => 'Cải chính hộ tịch',
                                    'Bổ sung hộ tịch' => 'Bổ sung hộ tịch',
                                    'Xác định lại dân tộc' => 'Xác định lại dân tộc',
                                    ),null,
                                    array('id' => 'plthaydoi', 'class' => 'form-control'))
                                    !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nội dung thay đổi</label>
                                    {!!Form::text('noidungtd', null, array('id' => 'noidungtd','class' => 'form-control'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Thay đổi từ</label>
                                    {!!Form::text('thaydoitu', null, array('id' => 'thaydoitu','class' => 'form-control'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Thay đổi thành</label>
                                    {!!Form::text('thaydoithanh', null, array('id' => 'thaydoithanh','class' => 'form-control'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Lý do</label>
                                    {!!Form::text('lydo', null, array('id' => 'lydo','class' => 'form-control'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Căn cứ</label>
                                    {!!Form::text('cancu', null, array('id' => 'cancu','class' => 'form-control'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Ngày đăng ký<span class="require">*</span></label>
                                    {!!Form::text('ngaydk',null, array('id' => 'ngaydk','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Người ký giấy<span class="require">*</span></label>
                                    {!!Form::text('nguoikygiay', null, array('id' => 'nguoikygiay','class' => 'form-control'))!!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Người thực hiện<span class="require">*</span></label>
                                    {!!Form::text('nguoithuchien',null, array('id' => 'nguoithuchien','class' => 'form-control'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nơi thực hiện thay đổi<span class="require">*</span></label>
                                    {!!Form::text('noithaydoi',null, array('id' => 'noithaydoi','class' => 'form-control'))!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM-->
                </div>
            </div>

            <div style="text-align: center">
                <a href="{{url('tthonnhan')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
                <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
                <button type="submit" class="btn green" onclick="validateForm()"><i class="fa fa-check"></i> Hoàn thành</button>
            </div>
        {!! Form::close() !!}
        <!-- END VALIDATION STATES-->
        </div>
    </div>
    <script type="text/javascript">
        function validateForm(){

            var validator = $("#update_thaydoibosung").validate({
                rules: {
                    ten :"required"
                },
                messages: {
                    ten :"Chưa nhập dữ liệu"
                }
            });
        }
    </script>
    @include('includes.script.create-header-scripts')
@stop