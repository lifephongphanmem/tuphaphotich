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
                        <td width="50%"><b>Vào sổ nhận cha mẹ con:</b> {{$model->soso}}</td>
                        <td width="50%"><b>Vào quyển nhận cha mẹ con:</b> {{$model->soquyen}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Họ tên người khai:</b> {{$model->hotennk}}</td>
                        <td width="50%"><b>Ngày sinh người khai:</b>{{getDayVn($model->ngaysinhnk)}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Dân tộc người khai:</b> {{$model->dantocnk}}</td>
                        <td width="50%"><b>Quốc tịch người khai:</b>{{getDayVn($model->quoctichnk)}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Họ tên người nhận:</b> {{$model->hotennn}}</td>
                        <td width="50%"><b>Ngày sinh người nhận:</b>{{getDayVn($model->ngaysinhnn)}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Dân tộc người nhận:</b> {{$model->dantocnn}}</td>
                        <td width="50%"><b>Quốc tịch người nhận:</b> {{$model->quoctichnn}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Người được giám hộ:</b> {{$model->hotenndn}}</td>
                        <td width="50%"><b>Ngày sinh người được giám hộ:</b>{{getDayVn($model->ngaysinhndn)}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Dân tộc người được giám hộ:</b> {{$model->dantocndn}}</td>
                        <td width="50%"><b>Quốc tịch người được giám hộ:</b> {{$model->quoctichndn}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Người ký:</b> {{$model->nguoiky}}</td>
                        <td width="50%"><b>Chức vụ người ký:</b> {{$model->chucvu}}</td>
                    </tr>
                    <tr>
                        <td width="50%"><b>Người thực hiện:</b> {{$model->nguoithuchien}}</td>
                    </tr>
                    </tbody>
                </table>
                <!-- end of table profile -->
            </div>
        </div>
    </div>
</div>

