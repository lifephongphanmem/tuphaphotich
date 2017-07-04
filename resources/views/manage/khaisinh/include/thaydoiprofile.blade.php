<div class="tab-pane" id="tab_2">
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box">
                <div class="portlet-title">
                    <div class="caption">
                    </div>
                    <div class="actions">
                        <a href="{{url('thaydoibosung/kscreate/'.$model->mahs)}}" class="btn btn-default btn-xs mbs"><i class="fa fa-plus"></i>&nbsp;Thêm mới</a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_3">
                            <thead>
                            <tr>
                                <th style="text-align: center" width="2%">STT</th>
                                <th style="text-align: center">Ngày thay đổi</th>
                                <th style="text-align: center">Người thay đổi</th>
                                <th style="text-align: center">Nội dung thay đổi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($thongtinthaydoi as $key=>$tttd)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$tttd->ngaydk}}</td>
                                    <td>{{$tttd->hotenntd}}</td>
                                    <td>{{$tttd->noidungtd}}</td>
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