<div id="tab4" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ tên </label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('hotenchagiao', null, array('id' => 'hotenchagiao','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaysinhchagiao',isset($connuoi->ngaysinhchagiao) ? date('d/m/Y',strtotime($connuoi->ngaysinhchagiao)) : null, array('id' => 'ngaysinhchagiao','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
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
                        'dantocchagiao',
                        $dantocs,null,
                        array('id' => 'dantocchagiao', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quoctichchagiao',
                        $quoctichs,null,
                        array('id' => 'quoctichchagiao', 'class' => 'form-control'))
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
                        {!!Form::text('cmndchagiao', null, array('id' => 'cmndchagiao','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi cấp</label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noicapgtcg', null, array('id' => 'noicapgtcg','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày cấp <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaycapgtcg',isset($connuoi->ngaycapgtcg) ? date('d/m/Y',strtotime($connuoi->ngaycapgtcg)) : null, array('id' => 'ngaycapgtcg','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi thường trú </label>
                    <div class="col-sm-8">
                        {!!Form::text('thuongtrucg', null, array('id' => 'thuongtrucg','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>