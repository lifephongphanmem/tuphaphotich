
<!--Modal Thoại Sổ khai sinh-->
<div id="SoKs-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/sokhaisinh','target'=>'_blank' , 'id' => 'frm_SoKs', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Sổ khai sinh</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Từ ngày</b></label>
                        <div class="col-md-8">
                            {!!Form::text('ngaytu',$som, array('id' => 'ngaytu','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Đến ngày</b></label>
                        <div class="col-md-8">
                            {!!Form::text('ngayden',$eom, array('id' => 'ngayden','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                        </div>
                    </div>
                </div>
                <input type="hidden" name="huyen" id="huyen" value="{{$mahuyen}}">
                <input type="hidden" name="xa" id="xa" value="{{$maxa}}">
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport1()">Đồng ý</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!--Modal Thoại Sổ kết hôn-->
<div id="SoKh-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/sokethon','target'=>'_blank' , 'id' => 'frm_SoKh', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Sổ kết hôn</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Từ ngày</b></label>
                        <div class="col-md-8">
                            {!!Form::text('ngaytu',$som, array('id' => 'ngaytu','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Đến ngày</b></label>
                        <div class="col-md-8">
                            {!!Form::text('ngayden',$eom, array('id' => 'ngayden','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                        </div>
                    </div>
                </div>
                <input type="hidden" name="huyen" id="huyen" value="{{$mahuyen}}">
                <input type="hidden" name="xa" id="xa" value="{{$maxa}}">
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport4()">Đồng ý</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<script>
    function ClickReport1(){
        $('#frm_SoKs').submit();
    }
    function ClickReport4(){
        $('#frm_SoKh').submit();
    }
</script>
