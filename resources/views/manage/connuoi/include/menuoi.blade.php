<div id="tab3" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ tên </label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('hotenmenuoi', null, array('id' => '','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaysinhmenuoi',isset($connuoi->ngaysinhmenuoi) ? date('d/m/Y',strtotime($connuoi->ngaysinhmenuoi)) : null, array('id' => 'ngaysinhmenuoi','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi sinh </label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noisinhmn', null, array('id' => 'noisinhmn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="rơw">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Dân tộc <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'dantocmenuoi',
                        $dantocs,null,
                        array('id' => 'dantocmenuoi', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quoctichmenuoi',
                        $quoctichs,null,
                        array('id' => 'quoctichmenuoi', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số CMND</label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('cmndmenuoi', null, array('id' => 'cmndmenuoi','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi cấp</label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noicapgtmn', null, array('id' => 'noicapgtmn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày cấp <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaycapgtmn',isset($connuoi->ngaycapgtmn) ? date('d/m/Y',strtotime($connuoi->ngaycapgtmn)) : null, array('id' => 'ngaycapgtmn','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi thường trú </label>
                    <div class="col-sm-8">
                        {!!Form::text('thuongtrumn', null, array('id' => 'thuongtrumn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nghề nghiệp </label>
                    <div class="col-sm-8">
                        {!!Form::text('nghenghiepmn', null, array('id' => 'nghenghiepmn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Điện thoại/fax/email </label>
                    <div class="col-sm-8">
                        {!!Form::text('dtmn', null, array('id' => 'dtmn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>