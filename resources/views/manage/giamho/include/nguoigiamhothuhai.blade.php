<div id="tab4" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ và tên</label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('hotenngh2', null, array('id' => 'hotenngh2','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giới tính<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'gioitinhngh2',
                        array(
                        'Nam' => 'Nam',
                        'Nữ' => 'Nữ'
                        ),null,
                        array('id' => 'gioitinhngh2', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giấy tờ<span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'loaigiaytongh2',
                        array(
                        'Chứng minh nhân dân' => 'Chứng minh nhân dân',
                        'Hộ chiếu' => 'Hộ chiếu',
                        'Thẻ căn cước công dân'=>'Thẻ căn cước công dân'
                        ),null,
                        array('id' => 'loaigiaytongh2', 'class' => 'form-control'))
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
                        {!!Form::text('sogiaytongh2',null, array('id' => 'sogiaytongh2','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh</label>
                    <div class="col-sm-8">
                        {!!Form::text('ngaysinhngh2',isset($model->ngaysinhngh2) ? date('d/m/Y',strtotime($model->ngaysinhngh2)) : null, array('id' => 'ngaysinhngh2','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
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
                        'dantocngh2',
                        $dantocs,null,
                        array('id' => 'dantocngh2', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quoctichngh2',
                        $quoctichs,null,
                        array('id' => 'quoctichngh2', 'class' => 'form-control'))
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
                        {!!Form::text('tamtrutamvangngh2',null, array('id' => 'tamtrutamvangngh2','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
