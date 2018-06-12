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
                        <td><b>Vào sổ giám hộ:</b> {{$model->soso}}</td>
                        <td><b>Vào quyển giám hộ:</b> {{$model->soquyen}}</td>
                    </tr>
                    <tr>
                        <td><b>Họ tên người khai:</b> {{$model->hotennk}}</td>
                        <td><b>Giới tính người khai:</b> {{$model->gioitinhnk}}</td>
                    </tr>
                    <tr>
                        <td><b>Quan hệ người khai:</b> {{$model->quanhenk}}</td>
                        <td><b>Địa chỉ người khai:</b> {{$model->diachink}}</td>
                    </tr>
                    <tr>
                        <td><b>Họ tên người gh thứ nhất:</b> {{$model->hotenngh1}}</td>
                        <td><b>Giới tính người gh thứ nhất:</b> {{$model->gioitinhngh1}}</td>
                    </tr>
                    <tr>
                        <td><b>Ngày sinh người gh thứ nhất:</b> {{getDayVn($model->ngaysinhngh1)}}</td>
                        <td><b>Dân tộc ngời gh thứ nhất:</b> {{$model->dantocngh1}}</td>
                    </tr>

                    <tr>
                        <td><b>Quốc tịch người gh thứ nhất:</b> {{$model->quoctichngh1}}</td>
                        <td><b>Địa chỉ người gh thứ nhất:</b> {{$model->tamtrutamvangngh1}}</td>
                    </tr>
                    <tr>
                        <td><b>Họ tên người gh thứ hai:</b> {{$model->hotenngh2}}</td>
                        <td><b>Giới tính người gh thứ hai:</b> {{$model->gioitinhngh2}}</td>
                    </tr>
                    <tr>
                        <td><b>Ngày sinh người gh thứ hai:</b> {{getDayVn($model->ngaysinhngh2)}}</td>
                        <td><b>Dân tộc ngời gh thứ hai:</b> {{$model->dantocngh2}}</td>
                    </tr>

                    <tr>
                        <td><b>Quốc tịch người gh thứ hai:</b> {{$model->quoctichngh2}}</td>
                        <td><b>Địa chỉ người gh thứ hai:</b> {{$model->tamtrutamvangngh2}}</td>
                    </tr>
                    <tr>
                        <td><b>Họ tên người được gh:</b> {{$model->hotenndgh}}</td>
                        <td><b>Giới tính người được gh:</b> {{$model->gioitinhndgh}}</td>
                    </tr>
                    <tr>
                        <td><b>Ngày sinh người được gh:</b> {{getDayVn($model->ngaysinhndgh)}}</td>
                        <td><b>Dân tộc người được gh:</b> {{$model->dantocndgh}}</td>
                    </tr>
                    <tr>
                        <td><b>Quốc tịch người được gh:</b> {{$model->quoctichndgh}}</td>
                        <td><b>Địa chỉ người được gh:</b> {{$model->tamtrutamvangndgh}}</td>
                    </tr>
                    </tbody>
                </table>
                <!-- end of table profile -->
            </div>
        </div>
    </div>
</div>
