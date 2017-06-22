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
                        <td><b>Nơi xác nhận:</b>&nbsp;{{$model->donvixn}}</td>
                        <td><b>Ngày xác nhận:</b>&nbsp;{{getDayVn($model->ngayxn)}}</td>
                    </tr>
                    <tr>
                        <td><b>Người đề nghị:</b>&nbsp;{{$model->nguoidn}}</td>
                        <td><b>Người được xác nhận:</b>&nbsp;{{$model->hotenxn}}</td>
                    </tr>
                    <tr>
                        <td><b>Ngày sinh:</b>&nbsp;{{getDayVn($model->ngaysinh)}}</td>
                        <td><b>Giới tính:</b>&nbsp;{{$model->gioitinh}}</td>
                    </tr>
                    <tr>
                        <td><b>Dân tộc:</b>&nbsp;{{$model->dantoc}}</td>
                        <td><b>Quốc tịch:&nbsp;{{$model->quoctich}}</b></td>
                    </tr>
                    <tr>
                        <td><b>Giấy tờ:</b>&nbsp;{{$model->giayto}}</td>
                        <td><b>Nơi cư trú:</b>&nbsp;{{$model->noicutru}}</td>
                    </tr>
                    <tr>
                        <td><b>Từ ngày:</b>&nbsp;{{getDayVn($model->tungay)}}</td>
                        <td><b>Đến ngày:</b>&nbsp;{{getDayVn($model->denngay)}}</td>
                    </tr>
                    <tr>
                        <td><b>Tình trạng hôn nhân:</b>&nbsp;{{$model->tthonnhan}}</td>
                        <td><b>Nội dung xác nhận:</b>&nbsp;{{$model->noidungxn}}</td>
                    </tr>

                    </tbody>
                </table>
                <!-- end of table profile -->
            </div>
        </div>
    </div>
</div>
