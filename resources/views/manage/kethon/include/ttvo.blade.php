<div id="tab2" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ, chữ đêm, tên vợ</label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('hotenvo', null, array('id' => 'hotenvo','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giấy tờ<span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'loaigiaytovo',
                        array(
                        'CMND' => 'CMND',
                        'Giấy xác nhận TTHN' => 'Giấy xác nhận TTHN',
                        'Hộ chiếu' => 'Hộ chiếu',
                        'Thẻ căn cước công dân'=>'Thẻ căn cước công dân'
                        ),null,
                        array('id' => 'loaigiaytovo', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số giấy tờ</label>

                    <div class="col-sm-8">
                        {!!Form::text('sogiaytovo',null, array('id' => 'sogiaytovo','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày cấp giấy tờ</label>
                    <div class="col-sm-8">
                        {!!Form::text('ngaycapvo',isset($model->ngaycapvo) ? date('d/m/Y',strtotime($model->ngaycapvo)) : null, array('id' => 'ngaycapvo','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi cấp</label>

                    <div class="col-sm-8">
                        {!!Form::text('noicapvo',null, array('id' => 'noicapvo','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh</label>
                    <div class="col-sm-8">
                        {!!Form::text('ngaysinhvo',isset($model->ngaysinhvo) ? date('d/m/Y',strtotime($model->ngaysinhvo)) : null, array('id' => 'ngaysinhvo','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
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
                        'dantocvo',
                        $dantocs,null,
                        array('id' => 'dantocvo', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quoctichvo',
                        $quoctichs,null,
                        array('id' => 'quoctichvo', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Địa chỉ</label>
                    <div class="col-sm-8">
                        {!!Form::text('diachivo',null, array('id' => 'diachivo','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số lần kết hôn</label>
                    <div class="col-sm-8">
                        {!!Form::text('lankhvo',null, array('id' => 'lankhvo','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
