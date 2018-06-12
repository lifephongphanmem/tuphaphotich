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
                        <td width="50%"><b>Vào sổ khai sinh:</b>&nbsp;{{$connuoi->so}}</td>
                        <td width="50%"><b>Vào quyển khai sinh:</b>&nbsp;{{$connuoi->quyen}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Họ tên cha nuôi:</b>&nbsp;{{$connuoi->hotenchanuoi}}</td>
                        <td width="50%"><b>Ngày sinh cha nuôi:</b>&nbsp;{{getDayVn($connuoi->ngaysinhchanuoi)}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Dân tộc cha nuôi:</b>&nbsp;{{$connuoi->dantocchanuoi}}</td>
                        <td width="50%"><b>Quốc tịch cha nuôi:</b>&nbsp;{{$connuoi->quoctichchanuoi}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Họ tên mẹ nuôi:</b>&nbsp;{{$connuoi->hotenmenuoi}}</td>
                        <td width="50%"><b>Ngày sinh mẹ nuôi:</b>&nbsp;{{getDayVn($connuoi->ngaysinhmenuoi)}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Dân tộc mẹ nuôi:</b>&nbsp;{{$connuoi->dantocmenuoi}}</td>
                        <td width="50%"><b>Quốc tịch mẹ nuôi:</b>&nbsp;{{$connuoi->quoctichmenuoi}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Họ tên con nuôi:</b>&nbsp;{{$connuoi->hotenconnuoi}}</td>
                        <td width="50%"><b>Giới tính con nuôi:</b>&nbsp;{{$connuoi->gioitinhconnuoi}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Ngày sinh con nuôi:</b>&nbsp;{{getDayVn($connuoi->ngaysinhconnuoi)}}</td>
                        <td width="50%"><b>Nơi sinh con nuôi:</b>&nbsp;{{$connuoi->noisinhconnuoi}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Dân tộc con nuôi:</b>&nbsp;{{$connuoi->dantocconnuoi}}</td>
                        <td width="50%"><b>Quốc tịch con nuôi:</b>&nbsp;{{$connuoi->quoctichconnuoi}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Họ tên cha giao:</b>&nbsp;{{$connuoi->hotenchagiao}}</td>
                        <td width="50%"><b>Ngày sinh cha giao:</b>&nbsp;{{getDayVn($connuoi->ngaysinhchagiao)}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Dân tộc cha giao:</b>&nbsp;{{$connuoi->dantocchagiao}}</td>
                        <td width="50%"><b>Quốc tịch cha giao:</b>&nbsp;{{$connuoi->quoctichchagiao}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Họ tên mẹ giao:</b>&nbsp;{{$connuoi->hotenmegiao}}</td>
                        <td width="50%"><b>Ngày sinh mẹ giao:</b>&nbsp;{{getDayVn($connuoi->ngaysinhmegiao)}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Dân tộc mẹ giao:</b>&nbsp;{{$connuoi->dantocmegiao}}</td>
                        <td width="50%"><b>Quốc tịch mẹ giao:</b>&nbsp;{{$connuoi->quoctichmegiao}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Quan hệ người giao:</b>&nbsp;{{$connuoi->quanhenguoigiao}}</td>
                        <td width="50%"><b>Tên cơ sở nuôi dưỡng:</b>&nbsp;{{$connuoi->tencsnuoiduong}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Người đại diện cơ sở nuôi dưỡng:</b>&nbsp;{{$connuoi->nguoidaidiencsnd}}</td>
                        <td width="50%"><b>Chức vụ người đại diện:</b>&nbsp;{{$connuoi->chucvundd}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Nơi đăng ký con nuôi:</b>&nbsp;{{$connuoi->noidkconnuoi}}</td>
                        <td width="50%"><b>Ngày tháng đăng ký:</b>&nbsp;{{getDayVn($connuoi->ngaythangdk)}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Người thực hiện:</b>&nbsp;{{$connuoi->nguoithuchien}}</td>
                        <td width="50%"><b>Người ký giấy:</b>&nbsp;{{$connuoi->nguoikygiaycn}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Chức vụ người đăng ký:</b>&nbsp;{{$connuoi->chucvunguoidk}}</td>
                        <td width="50%"><b>Ngày tháng quyết định:</b>&nbsp;{{getDayVn($connuoi->ngaythangqd)}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Số quyết định:</b>&nbsp;{{$connuoi->soqd}}</td>
                        <td width="50%"><b>Ghi chú:</b>&nbsp;{{$connuoi->ghichu}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Lý do:</b>&nbsp;{{$connuoi->lydo}}</td>
                        <td width="50%"><b>Tình trạng sức khỏe:</b>&nbsp;{{$connuoi->tinhtrangsk}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Phân loại con nuôi:</b>&nbsp;{{$connuoi->phanloaiconnuoi}}</td>
                        <td width="50%"><b>Tuổi con nuôi:</b>&nbsp;{{$connuoi->tuoiconnuoi}}</td>
                    </tr>
                    </tbody>
                </table>
                <!-- end of table profile -->
            </div>
        </div>
    </div>
</div>
