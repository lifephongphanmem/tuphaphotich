<div id="tab3" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-4">Từ ngày<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('tungay',isset($model->tungay) ? date('d/m/Y',strtotime($model->tungay)) : date('d/m/Y',strtotime(date('Y-m-d'))), array('id' => 'tungay','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-4">Đến ngày<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('denngay',isset($model->denngay) ? date('d/m/Y',strtotime($model->denngay)) : date('d/m/Y',strtotime(date('Y-m-d'))), array('id' => 'denngay','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <label class="control-label col-sm-4">Tình trạng hôn nhân<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                    {!!Form::text('tthonnhan', null , array('id' => 'tthonnhan','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group">
                    <label class="control-label col-sm-4">Nội dung xác nhận<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                          {!!Form::text('noidungxn', null , array('id' => 'noidungxn','class' => 'form-control required'))!!}
                     </div>
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Người ký<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('hotennky', null, array('id' => 'hotennky','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Chức vụ người ký<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('chucvunky', null, array('id' => 'chucvunky','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Người thực hiện<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('nguoithuchien', null, array('id' => 'nguoithuchien','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>