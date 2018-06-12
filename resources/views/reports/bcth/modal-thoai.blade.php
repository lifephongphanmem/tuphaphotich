
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
<!--Modal Thoại giám hộ Rp5-->
<div id="SoGh-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/sogiamho','target'=>'_blank' , 'id' => 'frm_SoGh', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Sổ đăng ký giám hộ</h4>
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
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport5()">Đồng ý</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!--Modal Thoại chấm dứt giám hộ Rp6-->
<div id="SoChamdutgh-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/sochamdutgh','target'=>'_blank' , 'id' => 'frm_SoChamdutgh', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Sổ chấm dứt giám hộ</h4>
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
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport6()">Đồng ý</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!--Modal Thoại sổ nhận cha mẹ con Rp7-->
<div id="SoNhancmc-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/sodknhancmc','target'=>'_blank' , 'id' => 'frm_SoNhancmc', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Sổ nhận đăng ký nhận cha mẹ con</h4>
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
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport7()">Đồng ý</button>
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

<!--Modal Thoại Sổ đăng ký thay đổi, cải chính, xác định lại dân tộc, bổ xung hộ tịch  Rp9-->
<div id="SoThayDoi-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/sothaydoi','target'=>'_blank' , 'id' => 'frm_SoThayDoi', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Sổ đăng ký thay đổi, cải chính, xác định lại dân tộc, bổ xung hộ tịch</h4>
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
                    <input type="hidden" name="huyen" id="huyen" value="{{$mahuyen}}">
                    <input type="hidden" name="xa" id="xa" value="{{$maxa}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport9()">Đồng ý</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!--Modal Thoại Kết quả đăng ký Khai sinh, Khai tử, Kết hôn (Cấp Xã)  Rp10-->
<div id="BCkhkskt-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/bcksktkh','target'=>'_blank' , 'id' => 'frm_BCksktkh', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Kết quả đăng ký Khai sinh, Khai tử, Kết hôn (Cấp Xã)</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Từ ngày</b></label>
                        <div class="col-md-8">
                            {!!Form::text('ngaytu',null, array('id' => 'ngaytu','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Đến ngày</b></label>
                        <div class="col-md-8">
                            {!!Form::text('ngayden',null, array('id' => 'ngayden','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Chọn năm</b></label>
                        <div class="col-md-8">
                            <select  class="form-control" name="nam">
                                <option selected value="">---</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Kỳ báo cáo</b></label>
                        <div class="col-md-8">
                            {!! Form::select(
                               'kybaocao',
                                array(
                                ''=>'---',
                                'Báo cáo 6 tháng đầu năm' => 'Báo cáo 6 tháng đầu năm',
                                'Báo cáo năm' => 'Báo cáo năm',
                                'Báo cáo năm chính thức' => 'Báo cáo năm chính thức',
                                 ),null,
                                 array('id' => 'kybaocao', 'class' => 'form-control'))
                            !!}
                        </div>
                    </div>
                    <input type="hidden" name="huyen" id="huyen" value="{{$mahuyen}}">
                    <input type="hidden" name="xa" id="xa" value="{{$maxa}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport10()">Đồng ý</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!--Modal Thoại Kết quả đăng ký các việc Hộ tịch khác (Cấp Xã)  Rp11-->
<div id="BChotichkhac-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/bchotichkhac','target'=>'_blank' , 'id' => 'frm_BChotichkhac', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Kết quả đăng ký các việc Hộ tịch khác (Cấp Xã)</h4>
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
                    <input type="hidden" name="huyen" id="huyen" value="{{$mahuyen}}">
                    <input type="hidden" name="xa" id="xa" value="{{$maxa}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport11()">Đồng ý</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!--Modal Thoại Kết quả đăng ký nuôi con nuôi trong nước (Cấp Xã)  Rp12-->
<div id="BCconnuoi-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/bcconnuoi','target'=>'_blank' , 'id' => 'frm_BCconnuoi', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Kết quả đăng ký nuôi con nuôi trong nước (Cấp Xã)</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Từ ngày</b></label>
                        <div class="col-md-8">
                            {!!Form::text('ngaytu',null, array('id' => 'ngaytu','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Đến ngày</b></label>
                        <div class="col-md-8">
                            {!!Form::text('ngayden',null, array('id' => 'ngayden','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Chọn năm</b></label>
                        <div class="col-md-8">
                            <select  class="form-control" name="nam">
                                <option selected value="">---</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Kỳ báo cáo</b></label>
                        <div class="col-md-8">
                            {!! Form::select(
                               'kybaocao',
                                array(
                                ''=>'---',
                                'Báo cáo 6 tháng đầu năm' => 'Báo cáo 6 tháng đầu năm',
                                'Báo cáo năm' => 'Báo cáo năm',
                                'Báo cáo năm chính thức' => 'Báo cáo năm chính thức',
                                 ),null,
                                 array('id' => 'kybaocao', 'class' => 'form-control'))
                            !!}
                        </div>
                    </div>
                    <input type="hidden" name="huyen" id="huyen" value="{{$mahuyen}}">
                    <input type="hidden" name="xa" id="xa" value="{{$maxa}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport12()">Đồng ý</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!--Modal Thoại con nuôi Rp13-->
<div id="SoConnuoi-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/soconnuoi','target'=>'_blank' , 'id' => 'frm_SoConnuoi', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Sổ đăng ký nuôi con nuôi</h4>
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
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickReport13()">Đồng ý</button>
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
    function ClickReport3(){
        $('#frm_SoXdTtHn').submit();
    }
    function ClickReport4(){
        $('#frm_SoKh').submit();
    }
    function ClickReport5(){
        $('#frm_SoGh').submit();
    }
    function ClickReport6(){
        $('#frm_SoChamdutgh').submit();
    }
    function ClickReport7(){
        $('#frm_SoNhancmc').submit();
    }
    function ClickReport8(){
        $('#frm_SoTrichLuc').submit();
    }
    function ClickReport9(){
        $('#frm_SoThayDoi').submit();
    }
    function ClickReport10(){
        $('#frm_BCksktkh').submit();
    }
    function ClickReport11(){
        $('#frm_BChotichkhac').submit();
    }
    function ClickReport12(){
        $('#frm_BCconnuoi').submit();
    }
    function ClickReport13(){
        $('#frm_SoConnuoi').submit();
    }
</script>
