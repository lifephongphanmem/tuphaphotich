<div id="tab6" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số QĐ </label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('soqd', null, array('id' => 'soqd','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày QĐ <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaythangqd',null, array('id' => 'ngaythangqd','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="rơw">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi đăng ký <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noidkconnuoi', null, array('id' => 'noidkconnuoi','class' => 'form-control', 'required'=>'required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Cơ sở nuôi dưỡng <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('tencsnuoiduong', null, array('id' => 'tencsnuoiduong','class' => 'form-control', 'required'=>'required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Người đại diện <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('nguoidaidiencsnd', null, array('id' => 'nguoidaidiencsnd','class' => 'form-control', 'required'=>'required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Chức vụ <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('chucvundd', null, array('id' => 'chucvundd','class' => 'form-control', 'required'=>'required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số sổ </label>
                    <div class="col-sm-8">
                        {!!Form::text('soso', null, array('id' => 'soso','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quyển số </label>
                    <div class="col-sm-8">
                        {!!Form::text('quyen', null, array('id' => 'quyen','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phân loại </label>
                    <div class="col-sm-8">
                        {!!Form::text('phanloaiconnuoi', null, array('id' => 'phanloaiconnuoi','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày đăng ký <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaythangdk',null, array('id' => 'ngaythangdk','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Lý do </label>
                    <div class="col-sm-8">
                        {!!Form::text('lydo', null, array('id' => 'lydo','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quan hệ với BG </label>
                    <div class="col-sm-8">
                        {!!Form::text('quanhenguoigiao', null, array('id' => 'quanhenguoigiao','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ghi chú </label>
                    <div class="col-sm-8">
                        {!!Form::text('ghichu', null, array('id' => 'ghichu','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Người thực hiện </label>
                    <div class="col-sm-8">
                        {!!Form::text('nguoithuchien', null, array('id' => 'nguoithuchien','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Người ký giấy </label>
                    <div class="col-sm-8">
                        {!!Form::text('nguoikygiaycn', null, array('id' => 'nguoikygiaycn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

