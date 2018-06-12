<div id="tab2" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày đăng ký<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaydangkykt',isset($khaitu->ngaydangkykt) ? date('d/m/Y',strtotime($khaitu->ngaydangkykt)) : date('d/m/Y',strtotime(date('Y-m-d'))), array('id' => 'ngaydangkykt','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ghi chú<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('ghichukt', null, array('id' => 'ghichukt','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ tên người khai<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('hotennk', null, array('id' => 'hotennk','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quan hệ người khai<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('quanhe', null, array('id' => 'quanhe','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Loại giấy tờ<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'loaigiaytonk',
                        array(
                        'CMND' => 'CMND',
                        'Hộ chiếu' => 'Hộ chiếu',
                        'Thẻ căn cước công dân'=>'Thẻ căn cước công dân',
                        'Số hộ khẩu'=>'Số hộ khẩu',
                        'Khác'=>'Khác'
                        ),null,
                        array('id' => 'loaigiaytonk', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số giấy tờ<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('sogiaytonk', null, array('id' => 'sogiaytonk','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi cấp<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noicapnk', null, array('id' => 'noicapnk','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày cấp<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaycapnk',isset($khaitu->ngaycapnk) ? date('d/m/Y',strtotime($khaitu->ngaycapnk)) : NULL, array('id' => 'ngaycapnk','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Thường trú<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('noicutrunk', null, array('id' => 'noicutrunk','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Người thực hiện<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('nguoithuchien', null, array('id' => 'nguoithuchien','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Người ký giấy<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('nguoikygct', null, array('id' => 'nguoikygct','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi đăng ký<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('noidangkykt', null, array('id' => 'noidangkykt','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(":input").inputmask();
    });
</script>