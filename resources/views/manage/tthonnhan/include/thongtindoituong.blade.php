<div id="tab2" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <label class="control-label col-sm-4">Người xác nhận<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('hotenxn', null, array('id' => 'hotenxn','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-4">Ngày sinh<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaysinh',isset($model->ngaysinh) ? date('d/m/Y',strtotime($model->ngaysinh)) : date('d/m/Y',strtotime(date('Y-m-d'))), array('id' => 'ngaysinh','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label col-sm-2">Nơi sinh<span class="require">*</span></label>
                    <div class="col-sm-10 controls">
                        {!!Form::text('noisinh', null, array('id' => 'noisinh','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-4">Giới tính<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
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
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Dân tộc</label>
                    <div class="col-sm-8">
                        {!! Form::select(
                        'dantoc',
                        $dantocs,null,
                        array('id' => 'dantoc', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quoctich',
                        $quoctichs,null,
                        array('id' => 'quoctich', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-4">Tôn giáo<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('tongiao', 'Không', array('id' => 'tongiao','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giấy tờ<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'giayto',
                        array(
                        'CMND' => 'CMND',
                        'Hộ chiếu' => 'Hộ chiếu',
                        'Thẻ căn cước công dân'=>'Thẻ căn cước công dân',
                        'Sổ hộ khẩu' => 'Sổ hộ khẩu'
                        ),null,
                        array('id' => 'giayto', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-4">Số giấy tờ<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('sogiayto', null , array('id' => 'sogiayto','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-4">Nơi cấp<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noicap', null , array('id' => 'noicap','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-4">Ngày cấp<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaycap',null, array('id' => 'ngaycap','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-4">Nghề nghiệp<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('nghenghiep', null , array('id' => 'nghenghiep','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-4">Nơi cư trú<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noicutru', null , array('id' => 'noicutru','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
