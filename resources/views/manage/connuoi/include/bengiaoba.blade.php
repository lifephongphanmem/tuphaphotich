<div id="tab5" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ tên </label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('hotenmegiao', null, array('id' => 'hotenmegiao','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaysinhmegiao',null, array('id' => 'ngaysinhmegiao','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="rơw">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Dân tộc <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        <select name="dantocmegiao" id="dantocmegiao" class="form-control required">
                            @foreach($dantocs as $dantoc)
                                <option value="{{$dantoc->dantoc}}">{{$dantoc->dantoc}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        <select name="quoctichmegiao" id="quoctichmegiao" class="form-control required">
                            @foreach($quoctichs as $quoctich)
                                <option value="{{$quoctich->quoctich}}">{{$quoctich->quoctich}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số CMND <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('cmndmegiao', null, array('id' => 'cmndmegiao','class' => 'form-control', 'required'=>'required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi cấp <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noicapgtmg', null, array('id' => 'noicapgtmg','class' => 'form-control', 'required'=>'required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày cấp <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaycapgtmg',null, array('id' => 'ngaycapgtmg','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi thường trú </label>
                    <div class="col-sm-8">
                        {!!Form::text('thuongtrumg', null, array('id' => 'thuongtrumg','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

