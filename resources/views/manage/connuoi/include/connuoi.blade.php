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
            <div class="col-md-6" >
                <div class="form-group" style="display:none;">
                    <label class="col-sm-4 control-label">Xã phường<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        @if(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Yên Minh')
                            <select name="maxa" class="form-control required">
                                <option value="tpym"></option>
                            </select>
                        @elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn')
                            <select name="maxa" class="form-control required">
                                <option value="tpdv"></option>
                            </select>
                        @else
                            <select name="maxa" class="form-control required">
                                @foreach($xas as $xa)
                                    <option value="{{$xa->maxa}}" {{$xa->maxa == $maxa ? 'selected' : ''}}>{{$xa->tenxa}}</option>
                                @endforeach
                            </select>
                        @endif
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
                        {!!Form::text('ngaysinhconnuoi',isset($connuoi->ngaysinhconnuoi) ? date('d/m/Y',strtotime($connuoi->ngaysinhconnuoi)) : null, array('id' => 'ngaysinhconnuoi','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Dân tộc <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'dantocconnuoi',
                        $dantocs,null,
                        array('id' => 'dantocconnuoi', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quoctichconnuoi',
                        $quoctichs,null,
                        array('id' => 'quoctichconnuoi', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Độ tuổi <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                            {!! Form::select(
                            'tuoiconnuoi',
                            array(
                            'Dưới 01 tuổi' => 'Dưới 01 tuổi',
                            'Từ 01 đến dưới 5 tuổi' => 'Từ 01 đến dưới 5 tuổi',
                            'Từ 5 tuổi trở lên' => 'Từ 5 tuổi trở lên'
                            ),null,
                            array('id' => 'tuoiconnuoi', 'class' => 'form-control'))
                            !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi sinh </label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noisinhconnuoi', null, array('id' => 'noisinhconnuoi','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi thường trú </label>
                    <div class="col-sm-8">
                        <div>
                            {!! Form::select(
                            'thuongtruconnuoi',
                            array(
                            'Cơ sở nuôi dưỡng' => 'Cơ sở nuôi dưỡng',
                            'Gia đình' => 'Gia đình',
                            'Nơi khác' => 'Nơi khác'
                            ),null,
                            array('id' => 'thuongtruconnuoi', 'class' => 'form-control'))
                            !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Tình trạng sức khỏe </label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'tinhtrangsk',
                        array(
                        'Bình thường' => 'Bình thường',
                        'Trẻ em có nhu cầu đặc biệt' => 'Trẻ em có nhu cầu đặc biệt'
                        ),null,
                        array('id' => 'tinhtrangsk', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>