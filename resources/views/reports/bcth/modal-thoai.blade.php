
<!--Modal Thoại Sổ khai sinh Rp1-->
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

<!--Modal Thoại Sổ khai tử Rp2-->
<div id="SoKt-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/sokhaitu','target'=>'_blank' , 'id' => 'frm_SoKt', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Sổ khai tử</h4>
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
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport2()">Đồng ý</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!--Modal Thoại Sổ xác định tình trạng hôn nhân RP3-->
<div id="SoXdTtHn-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/sotthonnhan','target'=>'_blank' , 'id' => 'frm_SoXdTtHn', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Sổ cấp giấy xác nhận tình trạng hôn nhân</h4>
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
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport3()">Đồng ý</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!--Modal Thoại Sổ kết hôn Rp4-->
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
<!--Modal Thoại Sổ cấp bản sao Rp8-->
<div id="SoTrichLuc-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/sotrichluc','target'=>'_blank' , 'id' => 'frm_SoTrichLuc', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Sổ trích lục</h4>
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
                    <div class="form-group">
                        <label class="col-md-12 "><b>Ghi chú: Sổ cấp bản sao trích lục chỉ in tại đơn vị không chọn được đơn vị để in</b></label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport8()">Đồng ý</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>



<script>
    function ClickReport1(){
        $('#frm_SoKs').submit();
    }
    function ClickReport2(){
        $('#frm_SoKt').submit();
    }
    function ClickReport4(){
        $('#frm_SoKh').submit();
    }
    function ClickReport3(){
        $('#frm_SoXdTtHn').submit();
    }
    function ClickReport8(){
        $('#frm_SoTrichLuc').submit();
    }

</script>
