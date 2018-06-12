<div id="tab2" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ và tên</label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('hotennk', null, array('id' => 'hotennk','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giới tính<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'gioitinhnk',
                        array(
                        'Nam' => 'Nam',
                        'Nữ' => 'Nữ'
                        ),null,
                        array('id' => 'gioitinhnk', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giấy tờ<span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'loaigiaytonk',
                        array(
                        'Chứng minh nhân dân' => 'Chứng minh nhân dân',
                        'Hộ chiếu' => 'Hộ chiếu',
                        'Thẻ căn cước công dân'=>'Thẻ căn cước công dân'
                        ),null,
                        array('id' => 'loaigiaytonk', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số giấy tờ</label>

                    <div class="col-sm-8">
                        {!!Form::text('sogiaytonk',null, array('id' => 'sogiaytonk','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi cấp <span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noicapgtnk', null, array('id' => 'noicapgtnk','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày cấp</label>
                    <div class="col-sm-8">
                        {!!Form::text('ngaycapgtnk',null, array('id' => 'ngaycapgtnk','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quan hệ<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quanhenk',
                        array(
                        'Ông' => 'Ông',
                        'Bà' => 'Bà',
                        'Bố' => 'Bố',
                        'Mẹ' => 'Mẹ',
                        'Cô' => 'Cô',
                        'Chú' => 'Chú',
                        'Bác' => 'Bác'
                        ),null,
                        array('id' => 'quanhenk', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Địa chỉ</label>
                    <div class="col-sm-8">
                        {!!Form::text('diachink',null, array('id' => 'diachink','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
