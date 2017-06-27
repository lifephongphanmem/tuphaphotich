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
                    <td><b>Vào sổ khai tử:</b>&nbsp;{{$modeltt->so}}</td>
                    <td><b>Vào quyển khai tử:</b>&nbsp;{{$modeltt->quyen}}</td>
                </tr>
                <tr>
                    <td><b>Họ tên người tử:</b>&nbsp;{{$modeltt->hoten}}</td>
                    <td><b>Giới tính:</b>&nbsp;{{$modeltt->gioitinh}}</td>
                </tr>
                <tr>
                    <td><b>Ngày sinh:</b>&nbsp;{{getDayVn($modeltt->ngaysinh)}}</td>
                    <td><b>Nơi sinh:</b>&nbsp;{{$modeltt->noisinh}}</td>
                </tr>
                <tr>
                    <td><b>Dân tộc:</b>&nbsp;{{$modeltt->dantoc}}</td>
                    <td><b>Quốc tịch:</b>&nbsp;{{$modeltt->quoctich}}</td>
                </tr>
                <tr>
                    <td><b>Thường trú:</b>&nbsp;{{$modeltt->thuongtru}}</td>
                    <td><b>CMND:</b>&nbsp;{{$modeltt->cmnd}}</td>
                </tr>
                <tr>
                    <td><b>Giờ tử:</b>&nbsp;{{$modeltt->giotu}}</td>
                    <td><b>Phút tử:</b>&nbsp;{{$modeltt->phuttu}}</td>
                </tr>
                <tr>
                    <td><b>Ngày chết:</b>&nbsp;{{getDayVn($modeltt->ngaychet)}}</td>
                    <td><b>Nơi chết:</b>&nbsp;{{$modeltt->noichet}}</td>
                </tr>
                <tr>
                    <td><b>Nguyên nhân:</b>&nbsp;{{$modeltt->nguyennhan}}</td>
                    <td><b>Giấy báo tử:</b>&nbsp;{{$modeltt->giaybaotu}}</td>
                </tr>
                <tr>
                    <td><b>Đơn vị cấp giấy báo tử:</b>&nbsp;{{$modeltt->donvicapgbt}}</td>
                    <td><b>Ngày cấp giấy báo tử:</b>&nbsp;{{$modeltt->ngaycapgbt}}</td>
                </tr>
                <tr>
                    <td><b>Nơi đăng ký khai tử:</b>&nbsp;{{$modeltt->noidangkykt}}</td>
                    <td><b>Ngày đăng ký khai tử:</b>&nbsp;{{getDayVn($modeltt->ngaydangkykt)}}</td>
                </tr>
                <tr>
                    <td><b>Ghi chú:</b>&nbsp;{{$modeltt->ghichukt}}</td>
                    <td><b>Người thực hiện:</b>&nbsp;{{$modeltt->nguoithuchien}}</td>
                </tr>
                <tr>
                    <td><b>Người ký giấy:</b>&nbsp;{{$modeltt->nguoikygct}}</td>
                    <td><b>Chức vụ:</b>&nbsp;{{$modeltt->chucvu}}</td>
                </tr>
                <tr>
                    <td><b>Họ tên người khai:</b>&nbsp;{{$modeltt->hotennk}}</td>
                    <td><b>Quan hệ:</b>&nbsp;{{$modeltt->quanhe}}</td>
                </tr>
                <tr>
                    <td><b>Phân loại:</b>&nbsp;{{$modeltt->phanloaikt}}</td>
                    <td><b>Tuổi người tử:</b>&nbsp;{{$modeltt->tuoinguoitu}}</td>
                </tr>
                </tbody>
            </table>
            <!-- end of table profile -->
        </div>
    </div>
</div>

