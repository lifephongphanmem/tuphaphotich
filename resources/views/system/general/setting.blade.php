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
    </script>

@stop

@section('content')

    <h3 class="page-title">
        Cấu hình <small>&nbsp;chức năng của chương trình</small>
    </h3>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            {!! Form::open(['url' => 'setting'])!!}
            <div class="portlet box blue">

                <div class="portlet-body">
                    <div class="portlet-body">
                        <div class="table-toolbar">
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="table-checkbox" width="5%">
                                            <!--input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/-->
                                        </th>
                                        <th>Chức năng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox" {{ (isset($setting->congdan->index) && $setting->congdan->index == 1) ? 'checked' : '' }} value="1" name="roles[congdan][index]"/></td>
                                        <td>Công dân</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" {{ (isset($setting->khaisinh->index) && $setting->khaisinh->index == 1) ? 'checked' : '' }} value="1" name="roles[khaisinh][index]"/></td>
                                        <td>Khai sinh</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" {{ (isset($setting->khaitu->index) && $setting->khaitu->index == 1) ? 'checked' : '' }} value="1" name="roles[khaitu][index]"/></td>
                                        <td>Khai tử</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" {{ (isset($setting->tthonnhan->index) && $setting->tthonnhan->index == 1) ? 'checked' : '' }} value="1" name="roles[tthonnhan][index]"/></td>
                                        <td>Tình trạng hôn nhân</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" {{ (isset($setting->kethon->index) && $setting->kethon->index == 1) ? 'checked' : '' }} value="1" name="roles[kethon][index]"/></td>
                                        <td>Kết hôn</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-3">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="table-checkbox" width="5%">
                                            <!--input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/-->
                                        </th>
                                        <th>Chức năng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox" {{ (isset($setting->dkconnuoi->index) && $setting->dkconnuoi->index == 1) ? 'checked' : '' }} value="1" name="roles[dkconnuoi][index]"/></td>
                                        <td>Đăng ký con nuôi</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" {{ (isset($setting->dkgiamho->index) && $setting->dkgiamho->index == 1) ? 'checked' : '' }} value="1" name="roles[dkgiamho][index]"/></td>
                                        <td>Đăng ký giám hộ</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" {{ (isset($setting->dknhanchamecon->index) && $setting->dknhanchamecon->index == 1) ? 'checked' : '' }} value="1" name="roles[dknhanchamecon][index]"/></td>
                                        <td>Đăng ký nhận cha mẹ con</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" {{ (isset($setting->capbansao->index) && $setting->capbansao->index == 1) ? 'checked' : '' }} value="1" name="roles[capbansao][index]"/></td>
                                        <td>Cấp bản sao</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" {{ (isset($setting->chungthuc->index) && $setting->chungthuc->index == 1) ? 'checked' : '' }} value="1" name="roles[chungthuc][index]"/></td>
                                        <td>Chứng thực</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->

            </div>
        </div>
    </div>
    <div class="row" style="text-align: center">
        <div class="col-md-12">
            <a href="{{url('cau_hinh_he_thong')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
            <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Cập nhật</button>
        </div>
    </div>


        {!! Form::close() !!}

        <!-- BEGIN DASHBOARD STATS -->

        <!-- END DASHBOARD STATS -->
        <div class="clearfix"></div>




    </div
@stop