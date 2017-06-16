<div id="tab1" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6" {{!(session('admin')->level == 'T') ? 'style=display:none;' : '' }} >
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quận huyện<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        <select name="mahuyen" class="form-control required" autofocus>
                            @foreach($huyens as $huyen)
                                <option value="{{$huyen->mahuyen}}" {{ $huyen->mahuyen == $mahuyen ? 'selected' : ''}}>{{$huyen->tenhuyen}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6" {{!(session('admin')->level == 'T' || session('admin')->level == 'H') ? 'style=display:none;' : '' }}>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Xã phường<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        <select name="maxa" class="form-control required">
                            @foreach($xas as $xa)
                                <option value="{{$xa->maxa}}" {{$huyen->maxa == $maxa ? 'selected' : ''}}>{{$xa->tenxa}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ tên </label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('hotenconnuoi', null, array('id' => 'hotenconnuoi','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giới tính</label>
                    <div class="col-sm-8">
                        {!! Form::select(
                        'gioitinhconnuoi',
                        array(
                        'Nam' => 'Nam',
                        'Nữ' => 'Nữ'
                        ),null,
                        array('id' => 'gioitinhconnuoi', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="rơw">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        <input type="date" name="ngaysinhconnuoi" id="ngaysinhconnuoi" class="form-control" required="required" value="{{!isset($connuoi)?'':$connuoi->ngaysinhconnuoi}}"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Dân tộc <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        <select name="dantocconnuoi" id="dantocconnuoi" class="form-control required">
                            @foreach($dantocs as $dantoc)
                                <option value="{{$dantoc->dantoc}}">{{$dantoc->dantoc}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        <select name="quoctichconnuoi" id="quoctichconnuoi" class="form-control required">
                            @foreach($quoctichs as $quoctich)
                                <option value="{{$quoctich->quoctich}}">{{$quoctich->quoctich}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi sinh <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noisinhconnuoi', null, array('id' => 'noisinhconnuoi','class' => 'form-control', 'required'=>'required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi thường trú </label>
                    <div class="col-sm-8">
                        {!!Form::text('thuongtruconnuoi', null, array('id' => 'thuongtruconnuoi','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Tình trạng sức khỏe </label>

                    <div class="col-sm-8">
                        {!!Form::text('tinhtrangsk', null, array('id' => 'tinhtrangsk','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

