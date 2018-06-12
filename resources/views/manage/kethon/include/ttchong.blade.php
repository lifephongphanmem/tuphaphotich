<div id="tab3" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ, chữ đệm, tên chồng</label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('hotenchong', null, array('id' => 'hotenchong','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giấy tờ<span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'loaigiaytochong',
                        array(
                        'CMND' => 'CMND',
                        'Giấy xác nhận TTHN' => 'Giấy xác nhận TTHN',
                        'Hộ chiếu' => 'Hộ chiếu',
                        'Thẻ căn cước công dân'=>'Thẻ căn cước công dân'
                        ),null,
                        array('id' => 'loaigiaytochong', 'class' => 'form-control'))
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
                        {!!Form::text('sogiaytochong',null, array('id' => 'sogiaytochong','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày cấp giấy tờ</label>
                    <div class="col-sm-8">
                        {!!Form::text('ngaycapchong',isset($model->ngaycapchong) ? date('d/m/Y',strtotime($model->ngaycapchong)) : null, array('id' => 'ngaycapchong','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi cấp</label>

                    <div class="col-sm-8">
                        {!!Form::text('noicapchong',null, array('id' => 'noicapchong','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh</label>
                    <div class="col-sm-8">
                        {!!Form::text('ngaysinhchong',isset($model->ngaysinhchong) ? date('d/m/Y',strtotime($model->ngaysinhchong)) : null, array('id' => 'ngaysinhchong','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
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
                        'dantocchong',
                        $dantocs,null,
                        array('id' => 'dantocchong', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quoctichchong',
                        $quoctichs,null,
                        array('id' => 'quoctichchong', 'class' => 'form-control'))
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
                        {!!Form::text('diachichong',null, array('id' => 'diachichong','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số lần kết hôn</label>
                    <div class="col-sm-8">
                        {!!Form::text('lankhchong',null, array('id' => 'lankhchong','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
