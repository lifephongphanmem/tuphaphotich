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
                    <label class="control-label col-sm-4">Dân tộc<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        <select  name="dantoc" id="dantoc" class="form-control ">
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
                    <label class="control-label col-sm-4">Quốc tịch<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        <select name="quoctich" id="quoctich" class="form-control ">
                            @foreach($quoctichs as $quoctich)
                                <option value="{{$quoctich->quoctich}}">{{$quoctich->quoctich}}</option>
                            @endforeach
                        </select>
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
                    <label class="control-label col-sm-4">Giấy tờ tùy thân<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('giayto', null , array('id' => 'giayto','class' => 'form-control required'))!!}
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
