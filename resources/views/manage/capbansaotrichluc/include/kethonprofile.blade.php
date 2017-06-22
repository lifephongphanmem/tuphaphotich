<div class="tab-pane active" id="tab_1">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <!-- table profile -->
                <table class="table table-hover table-striped table-bordered table-advanced tablesorter display">
                    <tbody>
                    <tr>
                        <td width="50%"><b>Quận/huyện:</b>&nbsp;{{$huyen}}</td>
                        <td width="50%"><b>Xã/phường:</b>&nbsp;{{$xa}}</td>
                    </tr>
                    <tr>
                        <td><b>Ngày đăng ký:</b>&nbsp;{{getDayVn($model->ngaydangky)}}</td>
                        <td><b>Loại đăng ký:</b>&nbsp;{{$model->pldangky}}</td>
                    </tr>
                    <tr>
                        <td><b>Số kết hôn:</b>&nbsp;{{$model->sokethon}}</td>
                        <td><b>Quyển kết hôn:</b>&nbsp;{{$model->quyenkethon}}</td>
                    </tr>
                    <tr>
                        <td><b>Người ký:</b>&nbsp;{{$model->nguoiky}}</td>
                        <td><b>Chức vụ người ký:</b>&nbsp;{{$model->chucvu}}</td>
                    </tr>
                    <tr>
                        <td><b>Người thực hiện:</b>&nbsp;{{$model->nguoithuchien}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Ghi chú:</b>&nbsp;{{$model->ghichu}}</td>
                    </tr>
                    <tr>
                        <td><b>Họ, chữ đệm, tên vợ:</b>&nbsp;{{$model->hotenvo}}</td>
                        <td><b>Ngày, tháng, năm sinh:</b>&nbsp;{{getDayVn($model->ngaysinhvo)}}</td>
                    </tr>
                    <tr>
                        <td><b>Dân tộc:</b>&nbsp;{{$model->dantocvo}}</td>
                        <td><b>Quốc tịch:</b>&nbsp;{{$model->quoctichvo}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Địa chỉ:</b>&nbsp;{{$model->diachivo}}</td>
                    </tr>
                    <tr>
                        <td><b>Họ, chữ đệm, tên chồng:</b>&nbsp;{{$model->hotenchong}}</td>
                        <td><b>Ngày, tháng, năm sinh:</b>&nbsp;{{getDayVn($model->ngaysinhchong)}}</td>
                    </tr>
                    <tr>
                        <td><b>Dân tộc:</b>&nbsp;{{$model->dantocchong}}</td>
                        <td><b>Quốc tịch:</b>&nbsp;{{$model->quoctichchong}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Địa chỉ:</b>&nbsp;{{$model->diachichong}}</td>
                    </tr>
                    </tbody>
                </table>
                <!-- end of table profile -->
            </div>
        </div>
    </div>
</div>
