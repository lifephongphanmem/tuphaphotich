<div id="tab2" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ tên </label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('hotenchanuoi', null, array('id' => 'hotenchanuoi','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaysinhchanuoi',isset($connuoi->ngaysinhchanuoi) ? date('d/m/Y',strtotime($connuoi->ngaysinhchanuoi)) : null, array('id' => 'ngaysinhchanuoi','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi sinh </label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noisinhcn', null, array('id' => 'noisinhcn','class' => 'form-control'))!!}
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
                        'dantocchanuoi',
                        $dantocs,null,
                        array('id' => 'dantocchanuoi', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quoctichchanuoi',
                        $quoctichs,null,
                        array('id' => 'quoctichchanuoi', 'class' => 'form-control'))
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
                        {!!Form::text('cmndchanuoi', null, array('id' => 'cmndchanuoi','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi cấp</label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noicapgtcn', null, array('id' => 'noicapgtcn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày cấp <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaycapgtcn',isset($connuoi->ngaysinhchanuoi) ? date('d/m/Y',strtotime($connuoi->ngaysinhchanuoi)) : null, array('id' => 'ngaycapgtcn','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi thường trú </label>
                    <div class="col-sm-8">
                        {!!Form::text('thuongtrucn', null, array('id' => 'thuongtrucn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nghề nghiệp </label>
                    <div class="col-sm-8">
                        {!!Form::text('nghenghiepcn', null, array('id' => 'nghenghiepcn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Điện thoại/fax/email </label>
                    <div class="col-sm-8">
                        {!!Form::text('dtcn', null, array('id' => 'dtcn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>