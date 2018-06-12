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
                        <td><b>Đăng ký khai sinh:</b>&nbsp;{{$model->dunghanquahan}}</td>
                    </tr>
                    <tr>
                        <td><b>Vào quyển khai sinh:</b>&nbsp;{{$model->quyen}}</td>
                        <td><b>Số khai sinh:</b>&nbsp;{{$model->so}}</td>
                    </tr>
                    <tr>
                        <td><b>Người ký:</b>&nbsp;{{$model->nguoiky}}</td>
                        <td><b>Chức vụ người ký:</b>&nbsp;{{$model->chucvu}}</td>
                    </tr>
                    <tr>
                        <td><b>Người thực hiện:</b>&nbsp;{{$model->nguoithuchien}}</td>
                        <td><b>Nơi đăng ký khám chữa bệnh:&nbsp;{{$model->noikcbbd}}</b></td>
                    </tr>
                    <tr>
                        <td><b>Số giấy chứng sinh:</b>&nbsp;{{$model->sochungsinh}}</td>
                        <td><b>Họ và tên:</b>&nbsp;<span style="color: blue;text-transform: uppercase">{{$model->hotenks}}</span></td>
                    </tr>
                    <tr>
                        <td><b>Giới tính:</b>&nbsp;{{$model->gioitinhks}}</td>
                        <td><b>Ngày sinh:</b>&nbsp;{{getDayVn($model->ngaysinhks)}}</td>
                    </tr>
                    <tr>
                        <td><b>Dân tộc:</b>&nbsp;{{$model->dantocks}}</td>
                        <td><b>Quốc tịch:</b>&nbsp;{{$model->quoctichks}}</td>
                    </tr>
                    <tr>
                        <td><b>Nơi sinh:</b>&nbsp;{{$model->noisinh}}</td>
                        <td><b>Quê quán:</b>&nbsp;{{$model->quequanks}}</td>
                    </tr>
                    <tr>
                        <td><b>Họ tên mẹ:</b>&nbsp;{{$model->hotenme}}</td>
                        <td><b>Năm sinh:</b>{{$model->ngaysinhme}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Địa chỉ:</b>&nbsp;{{$model->diachime}}</td>
                    </tr>

                    <tr>
                        <td><b>Họ tên cha:</b>&nbsp;{{$model->hotencha}}</td>
                        <td><b>Năm sinh:</b>{{$model->ngaysinhcha}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Địa chỉ:</b>&nbsp;{{$model->diachicha}}</td>
                    </tr>
                    <tr>
                        <td><b>Họ tên người khai:</b>&nbsp;{{$model->hotennk}}</td>
                        <td><b>Quan hệ với người khai sinh</b>&nbsp;{{$model->quanhenk}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Địa chỉ:</b>&nbsp;{{$model->diachink}}</td>
                    </tr>

                    </tbody>
                </table>
                <!-- end of table profile -->
            </div>
        </div>
    </div>
</div>

