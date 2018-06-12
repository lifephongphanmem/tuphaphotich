<div id="tab3" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số giấy chứng sinh</label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('sochungsinh', null, array('id' => 'sochungsinh','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số định danh cá nhân</label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('sodinhdanhcanhan', null, array('id' => 'sodinhdanhcanhan','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ và tên</label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('hotenks', null, array('id' => 'hotenks','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giới tính<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'gioitinhks',
                        array(
                        'Nam' => 'Nam',
                        'Nữ' => 'Nữ'
                        ),null,
                        array('id' => 'gioitinhks', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh</label>
                    <div class="col-sm-8">
                        {!!Form::text('ngaysinhks',isset($model->ngaysinhks) ? date('d/m/Y',strtotime($model->ngaysinhks)) : date('d/m/Y',strtotime(date('Y-m-d'))), array('id' => 'ngaysinhks','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Dân tộc</label>
                    <div class="col-sm-8">
                        {!! Form::select(
                        'dantocks',
                        $dantocs,null,
                        array('id' => 'dantocks', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quoctichks',
                        $quoctichs,null,
                        array('id' => 'quoctichks', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phân loại nơi sinh<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'plnoisinh',
                        array(
                        'Sinh trong nước' => 'Sinh trong nước',
                        'Sinh nước ngoài' => 'Sinh nước ngoài'
                        ),null,
                        array('id' => 'plnoisinh', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi sinh <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noisinh', null, array('id' => 'noisinh','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Quê quán<span class="require">*</span></label>
                    <div class="col-sm-10 controls">
                        {!!Form::text('quequanks', null, array('id' => 'quequanks','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
