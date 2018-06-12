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
                        <td><b>Vào sổ khai tử:</b>&nbsp;{{$khaitu->so}}</td>
                        <td><b>Vào quyển khai tử:</b>&nbsp;{{$khaitu->quyen}}</td>
                    </tr>
                    <tr>
                        <td><b>Họ tên người tử:</b>&nbsp;{{$khaitu->hoten}}</td>
                        <td><b>Giới tính:</b>&nbsp;{{$khaitu->gioitinh}}</td>
                    </tr>
                    <tr>
                        <td><b>Ngày sinh:</b>&nbsp;{{getDayvn($khaitu->ngaysinh)}}</td>
                        <td><b>Nơi sinh:</b>&nbsp;{{$khaitu->noisinh}}</td>
                    </tr>
                    <tr>
                        <td><b>Dân tộc:</b>&nbsp;{{$khaitu->dantoc}}</td>
                        <td><b>Quốc tịch:</b>&nbsp;{{$khaitu->quoctich}}</td>
                    </tr>
                    <tr>
                        <td><b>Thường trú:</b>&nbsp;{{$khaitu->thuongtru}}</td>
                        <td><b>Loại giấy tờ:</b>&nbsp;{{$khaitu->loaigiayto}}</td>
                    </tr>
                    <tr>
                        <td><b>Giờ tử:</b>&nbsp;{{$khaitu->giotu}}</td>
                        <td><b>Phút tử:</b>&nbsp;{{$khaitu->phuttu}}</td>
                    </tr>
                    <tr>
                        <td><b>Ngày chết:</b>&nbsp;{{getDayvn($khaitu->ngaychet)}}</td>
                        <td><b>Nơi chết:</b>&nbsp;{{$khaitu->noichet}}</td>
                    </tr>
                    <tr>
                        <td><b>Nguyên nhân:</b>&nbsp;{{$khaitu->nguyennhan}}</td>
                        <td><b>Giấy báo tử:</b>&nbsp;{{$khaitu->giaybaotu}}</td>
                    </tr>
                    <tr>
                        <td><b>Đơn vị cấp giấy báo tử:</b>&nbsp;{{$khaitu->donvicapgbt}}</td>
                        <td><b>Ngày cấp giấy báo tử:</b>&nbsp;{{getDayvn($khaitu->ngaycapgbt)}}</td>
                    </tr>
                    <tr>
                        <td><b>Nơi đăng ký khai tử:</b>&nbsp;{{$khaitu->noidangkykt}}</td>
                        <td><b>Ngày đăng ký khai tử:</b>&nbsp;{{getDayvn($khaitu->ngaydangkykt)}}</td>
                    </tr>
                    <tr>
                        <td><b>Ghi chú:</b>&nbsp;{{$khaitu->ghichukt}}</td>
                        <td><b>Người thực hiện:</b>&nbsp;{{$khaitu->nguoithuchien}}</td>
                    </tr>
                    <tr>
                        <td><b>Người ký giấy:</b>&nbsp;{{$khaitu->nguoikygct}}</td>
                        <td><b>Phân loại:</b>&nbsp;{{$khaitu->phanloaikt}}</td>
                    </tr>
                    <tr>
                        <td><b>Họ tên người khai:</b>&nbsp;{{$khaitu->hotennk}}</td>
                        <td><b>Quan hệ:</b>&nbsp;{{$khaitu->quanhe}}</td>
                    </tr>
                    </tbody>
                </table>
                <!-- end of table profile -->
            </div>
        </div>
    </div>
</div>