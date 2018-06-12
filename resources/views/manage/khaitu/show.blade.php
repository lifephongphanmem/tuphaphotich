@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
    <!-- END THEME STYLES -->
@stop


@section('custom-script')
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <script src="{{url('assets/admin/pages/scripts/table-managed.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            TableManaged.init();
        });
        function getId(id){
            document.getElementById("iddelete").value=id;
        }
        function getIdDuyet(id){
            document.getElementById("idduyet").value=id;
        }
        function ClickDelete(){
            $('#frm_delete').submit();
        }
        function ClickDuyet(){
            $('#frm_duyet').submit();
        }
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box">
                <div class="portlet-title">
                    <h3 class="page-title">
                        Thông tin<small>&nbsp;khai tử</small>
                    </h3>
                </div>
                <div class="portlet-body">
                    <div class="tabbable-line boxless">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1" data-toggle="tab">
                                    Thông tin khai sinh </a>
                            </li>
                            <li>
                                <a href="#tab_2" data-toggle="tab">
                                    Thông tin thay đổi </a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            @include('manage.khaitu.include.khaituprofile')
                            @include('manage.khaitu.include.thaydoiprofile')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center">
        <a href="{{url('khaitu')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
        @if(can('capbansao','create'))
            @if($khaitu->trangthai == 'Duyệt')
                <button type="button" class="btn green" data-target="#trichluc-modal" data-toggle="modal"><i class="fa fa-copy"></i>&nbsp;
                    Trích lục</button>
            @endif
        @endif
    </div>
    <div class="modal fade bs-modal-lg" id="trichluc-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            {!! Form::open(['url'=>'capbansaotrichluc','id' => 'frm_trichluc'])!!}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Cấp bản sao trích lục</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label"><b>Ngày cấp</b><span class="require">*</span></label>
                                {!!Form::text('ngaycap', date('d/m/Y',strtotime(date('Y-m-d'))), array('id' => 'ngaycap','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label"><b>Ghi chú</b><span class="require">*</span></label>
                                {!! Form::select(
                                'ghichu',
                                array(
                                'Từ Sổ đăng ký hộ tịch ' => 'Từ Sổ đăng ký hộ tịch ',
                                'Cơ sở dữ liệu hộ tịch điện tử theo quy trình tin học' => 'Cơ sở dữ liệu hộ tịch điện tử theo quy trình tin học',
                                ),null,
                                array('id' => 'ghichu', 'class' => 'form-control'))
                                !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label"><b>Người ký</b><span class="require">*</span></label>
                                {!!Form::text('nguoiky', null, array('id' => 'nguoiky','class' => 'form-control'))!!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label"><b>Chức vụ</b><span class="require">*</span></label>
                                {!!Form::text('chucvu', null, array('id' => 'chucvu','class' => 'form-control'))!!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label"><b>Người thực hiện</b><span class="require">*</span></label>
                                {!!Form::text('nguoithuchien', null, array('id' => 'nguoithuchien','class' => 'form-control'))!!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label"><b>Số lượng bản sao</b><span class="require">*</span></label>
                                {!!Form::number('soluongbs', null, array('id' => 'soluongbs','class' => 'form-control'))!!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label"><b>Họ, tên người yêu cầu</b><span class="require">*</span></label>
                                {!!Form::text('hotennyc', null, array('id' => 'hotennyc','class' => 'form-control'))!!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label"><b>Giấy tờ</b><span class="require">*</span></label>
                                {!! Form::select(
                                'plgiaytonyc',
                                array(
                                'Chứng minh nhân dân' => 'Chứng minh nhân dân',
                                'Hộ chiếu' => 'Hộ chiếu',
                                'Thẻ căn cước công dân'=>'Thẻ căn cước công dân',
                                'Sổ hộ khẩu'=>'Sổ hộ khẩu'
                                ),null,
                                array('id' => 'plgiaytonyc', 'class' => 'form-control'))
                                !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label"><b>Thông tin giấy tờ</b><span class="require">*</span></label>
                                {!!Form::text('sogiaytonyc',null, array('id' => 'sogiaytonyc','class' => 'form-control required'))!!}
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="quyenhotich" id="quyenhotich" value="{{$khaitu->quyen}}">
                    <input type="hidden" name="sohotich" id="sohotich" value="{{$khaitu->so}}">
                    <input type="hidden" name="plbstrichluc" id="plbstrichluc" value="Khai tử">
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                    <button type="submit"  class="btn btn-primary" onclick="confirmTrichLuc()">Đồng ý</button>
                </div>
            </div>
        {!! Form::close() !!}
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <script>
        function confirmTrichLuc(){
            var ok=true;
            var message='';
            if($('#ngaycap').val()==''){
                message += ' - Ngày cấp\n';
                ok = false;
            }
            if($('#nguoiky').val()==''){
                message += ' - Người ký\n';
                ok = false;
            }
            if($('#chucvu').val()==''){
                message += ' - Chức vụ\n';
                ok = false;
            }
            if($('#nguoithuchien').val()==''){
                message += ' - Người thực hiện\n';
                ok = false;
            }
            if($('#soluongbs').val()==''){
                message += ' - Số lượng bản sao\n';
                ok = false;
            }
            if($('#hotennyc').val()==''){
                message += ' - Họ tên người yêu cầu\n';
                ok = false;
            }
            if($('#sogiaytonyc').val()==''){
                message += ' - Thông tin giấy tờ người yêu cầu\n';
                ok = false;
            }
            if ( ok == false){

                alert('Thông tin không được để trống \n' + message );
                $("form").submit(function (e) {
                    e.preventDefault();
                });
            }
            else{
                $("form").unbind('submit').submit();
                $('#frm_trichluc').submit();
            }
        }
    </script>
@stop