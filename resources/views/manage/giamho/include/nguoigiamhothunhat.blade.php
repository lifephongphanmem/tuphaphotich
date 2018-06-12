<div id="tab3" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ và tên</label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('hotenngh1', null, array('id' => 'hotenngh1','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giới tính<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'gioitinhngh1',
                        array(
                        'Nam' => 'Nam',
                        'Nữ' => 'Nữ'
                        ),null,
                        array('id' => 'gioitinhngh1', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giấy tờ<span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'loaigiaytongh1',
                        array(
                        'Chứng minh nhân dân' => 'Chứng minh nhân dân',
                        'Hộ chiếu' => 'Hộ chiếu',
                        'Thẻ căn cước công dân'=>'Thẻ căn cước công dân'
                        ),null,
                        array('id' => 'loaigiaytongh1', 'class' => 'form-control'))
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
                        {!!Form::text('sogiaytongh1',null, array('id' => 'sogiaytongh1','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh</label>
                    <div class="col-sm-8">
                        {!!Form::text('ngaysinhngh1',isset($model->ngaysinhngh1) ? date('d/m/Y',strtotime($model->ngaysinhngh1)) : null, array('id' => 'ngaysinhngh1','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
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
                        'dantocngh1',
                        $dantocs,null,
                        array('id' => 'dantocngh1', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quoctichngh1',
                        $quoctichs,null,
                        array('id' => 'quoctichngh1', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Địa chỉ</label>
                    <div class="col-sm-10">
                        {!!Form::text('tamtrutamvangngh1',null, array('id' => 'tamtrutamvangngh1','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
