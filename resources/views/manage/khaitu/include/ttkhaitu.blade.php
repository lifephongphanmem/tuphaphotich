<div id="tab3" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
                <div class="form-group">
                    <div class="col-sm-8 controls">
                        <label class="col-sm-4 control-label"><b>Đã chết vào lúc</b></label>
                    </div>
                </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giờ<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('giotu', null, array('id' => 'giotu','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phút<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('phuttu', null, array('id' => 'phuttu','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaychet',isset($khaitu->ngaychet) ? date('d/m/Y',strtotime($khaitu->ngaychet)) : date('d/m/Y',strtotime(date('Y-m-d'))), array('id' => 'ngaychet','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi chết<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('noichet', null, array('id' => 'noichet','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nguyên nhân chết<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('nguyennhan', null, array('id' => 'nguyennhan','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giấy báo tử/Giấy tờ thay thế<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('giaybaotu', null, array('id' => 'giaybaotu','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phân loại đăng ký<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!! Form::select(
                    'phanloaidk',
                    array(
                    'Đăng ký mới' => 'Đăng ký mới',
                    'Đăng ký lại' => 'Đăng ký lại',
                    'Ghi sổ việc khai tử tại nước ngoài' => 'Ghi sổ việc khai tử tại nước ngoài',
                    ),null,
                    array('id' => 'phanloaidk', 'class' => 'form-control'))
                    !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Do<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('donvicapgbt', null, array('id' => 'donvicapgbt','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Cấp ngày<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaycapgbt',isset($khaitu->ngaycapgbt) ? date('d/m/Y',strtotime($khaitu->ngaycapgbt)) : NULL, array('id' => 'ngaycapgbt','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phân loại khai tử<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
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
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phân loại tuổi<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
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
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(":input").inputmask();
    });
</script>