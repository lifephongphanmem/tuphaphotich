<div id="tab4" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ và tên</label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('hotenndn', null, array('id' => 'hotenndn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giấy tờ<span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'loaigiaytondn',
                        array(
                        'Chứng minh nhân dân' => 'Chứng minh nhân dân',
                        'Hộ chiếu' => 'Hộ chiếu',
                        'Thẻ căn cước công dân'=>'Thẻ căn cước công dân'
                        ),null,
                        array('id' => 'loaigiaytondn', 'class' => 'form-control'))
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
                        {!!Form::text('sogiaytondn',null, array('id' => 'sogiaytondn','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh</label>
                    <div class="col-sm-8">
                        {!!Form::text('ngaysinhndn',isset($model->ngaysinhndn) ? date('d/m/Y',strtotime($model->ngaysinhndn)) : null, array('id' => 'ngaysinhndn','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
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
                        'dantocndn',
                        $dantocs,null,
                        array('id' => 'dantocndn', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quoctichndn',
                        $quoctichs,null,
                        array('id' => 'quoctichndn', 'class' => 'form-control'))
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
                        {!!Form::text('tamtrutamvangndn',null, array('id' => 'tamtrutamvangndn','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
