<div class="tab-pane" id="tab_2">
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box">
                <div class="portlet-title">
                    <div class="caption">
                    </div>
                    <div class="actions">
                        <a href="{{url('thaydoibosung/khcreate/'.$model->mahs)}}" class="btn btn-default btn-xs mbs"><i class="fa fa-plus"></i>&nbsp;Thêm mới</a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_3">
                            <thead>
                            <tr>
                                <th style="text-align: center">STT</th>
                                <th style="text-align: center">Ngày thay đổi</th>
                                <th style="text-align: center">Người thay đổi</th>
                                <th style="text-align: center">Nội dung thay đổi</th>
                                <th style="text-align: center">Trạng thái</th>
                                <th style="text-align: center">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($thongtinthaydoi as $key=>$tttd)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$tttd->ngaydk}}</td>
                                    <td>{{$tttd->hotenntd}}</td>
                                    <td>{{$tttd->noidungtd}}</td>
                                    @if($tttd->trangthai == 'Chờ duyệt')
                                        <td align="center"><span class="badge badge-blue">{{$tttd->trangthai}}</span>
                                        </td>
                                    @elseif($tttd->trangthai == 'Duyệt')
                                        <td align="center"><span class="badge badge-warning">Đã duyệt</span>
                                        </td>
                                    @endif
                                    <td>
                                        <a>&nbsp;</a>
                                        <a href="{{url('thaydoibosung/printstokhaitdkh/'.$tttd->id)}}" target="_blank" class="btn btn-default btn-xs mbs"><i class="fa fa-print"></i>&nbsp;Tờ khai</a>
                                        @if($tttd->trangthai == 'Chờ duyệt')
                                            <a href="{{url('thaydoibosung/showkethonbs/'.$tttd->id)}}" class="btn btn-default btn-xs mbs"><i class="fa fa-edit"></i>&nbsp;Chỉnh sửa</a>
                                            <button type="button" onclick="getId('{{$tttd->id}}')" class="btn btn-default btn-xs mbs" data-target="#delete-modal" data-toggle="modal"><i class="fa fa-trash-o"></i>&nbsp;
                                                Xóa</button>
                                            <button type="button" onclick="getIdDuyet('{{$tttd->id}}')" class="btn btn-default btn-xs mbs" data-target="#duyet-modal" data-toggle="modal"><i class="fa fa-check"></i>&nbsp;Duyệt</button>
                                        @else
                                            <a href="{{url('thaydoibosung/printstrichluckhbs/'.$tttd->id)}}" target="_blank" class="btn btn-default btn-xs mbs"><i class="fa fa-print"></i>Bản sao</a>
                                            <a href="{{url('thaydoibosung/printstrichluckhbc/'.$tttd->id)}}" target="_blank" class="btn btn-default btn-xs mbs"><i class="fa fa-print"></i>Bản chính</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="duyet-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(['url'=>'thaydoibosung/kethonbs/duyet','id' => 'frm_duyet'])!!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Đồng ý duyệt?</h4>
            </div>
            <input type="hidden" name="idduyet" id="idduyet">
            <div class="modal-footer">
                <button type="submit" class="btn blue" onclick="ClickDuyet()">Đồng ý</button>
                <button type="button" class="btn default" data-dismiss="modal">Hủy</button>
            </div>
            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(['url'=>'thaydoibosung/khbs/delete','id' => 'frm_delete'])!!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Đồng ý xóa?</h4>
            </div>
            <input type="hidden" name="iddelete" id="iddelete">
            <div class="modal-footer">
                <button type="submit" class="btn blue" onclick="ClickDelete()">Đồng ý</button>
                <button type="button" class="btn default" data-dismiss="modal">Hủy</button>
            </div>
            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
