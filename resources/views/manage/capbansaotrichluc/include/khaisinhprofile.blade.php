<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <!-- table profile -->
            <table class="table table-hover table-striped table-bordered table-advanced tablesorter display">
                <tbody>
                <tr>
                    <td><b>Ngày cấp:</b>&nbsp;{{getDayVn($model->ngaycap)}}</td>
                    <td><b>Ghi chú:</b>&nbsp;{{$model->ghichu}}</td>
                </tr>
                <tr>
                    <td><b>Quyển trích lục:</b>&nbsp;{{$model->quyenhotich}}</td>
                    <td><b>Số trích lục:</b>&nbsp;{{$model->sohotich}}</td>
                </tr>
                <tr>
                    <td><b>Người ký:</b>&nbsp;{{$model->nguoiky}}</td>
                    <td><b>Chức vụ:</b>&nbsp;{{$model->chucvu}}</td>
                </tr>

                <tr>
                    <td><b>Ngày đăng ký:</b>&nbsp;{{getDayVn($modeltt->ngaydangky)}}</td>
                    <td><b>Đăng ký khai sinh:</b>&nbsp;{{$modeltt->dunghanquahan}}</td>
                </tr>
                <tr>
                    <td><b>Vào quyển khai sinh:</b>&nbsp;{{$modeltt->quyen}}</td>
                    <td><b>Số khai sinh:</b>&nbsp;{{$modeltt->so}}</td>
                </tr>
                <tr>
                    <td><b>Số giấy chứng sinh:</b>&nbsp;{{$modeltt->sochungsinh}}</td>
                    <td><b>Họ và tên:</b>&nbsp;<span style="color: blue;text-transform: uppercase">{{$modeltt->hotenks}}</span></td>
                </tr>
                <tr>
                    <td><b>Giới tính:</b>&nbsp;{{$modeltt->gioitinhks}}</td>
                    <td><b>Ngày sinh:</b>&nbsp;{{getDayVn($modeltt->ngaysinhks)}}</td>
                </tr>
                <tr>
                    <td><b>Dân tộc:</b>&nbsp;{{$modeltt->dantocks}}</td>
                    <td><b>Quốc tịch:</b>&nbsp;{{$modeltt->quoctichks}}</td>
                </tr>
                <tr>
                    <td><b>Nơi sinh:</b>&nbsp;{{$modeltt->noisinh}}</td>
                    <td><b>Quê quán:</b>&nbsp;{{$modeltt->quequanks}}</td>
                </tr>
                <tr>
                    <td><b>Họ tên mẹ:</b>&nbsp;{{$modeltt->hotenme}}</td>
                    <td><b>Năm sinh:</b>&nbsp;{{date('Y',strtotime($modeltt->ngaysinhme))}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Địa chỉ:</b>&nbsp;{{$modeltt->diachime}}</td>
                </tr>

                <tr>
                    <td><b>Họ tên cha:</b>&nbsp;{{$modeltt->hotencha}}</td>
                    <td><b>Năm sinh:</b>&nbsp;{{date('Y',strtotime($modeltt->ngaysinhcha))}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Địa chỉ:</b>&nbsp;{{$modeltt->diachicha}}</td>
                </tr>
                <tr>
                    <td><b>Họ tên người khai:</b>&nbsp;{{$modeltt->hotennk}}</td>
                    <td><b>Quan hệ với người khai sinh</b>&nbsp;{{$modeltt->quanhenk}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Địa chỉ:</b>&nbsp;{{$modeltt->diachink}}</td>
                </tr>

                </tbody>
            </table>
            <!-- end of table profile -->
        </div>
    </div>
</div>

