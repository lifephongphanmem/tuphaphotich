<!DOCTYPE html>
<html>
<head>
    <title>In giấy khai sinh bản sao</title>
    <link rel="shortcut icon" href="http://tuphaphotich.vn/public/images/LIFESOFT.png" type="image/x-icon">
</head>
<body style="font-size: 17px; width:99%;">
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr style="vertical-align: top">
        <td style="vertical-align: top">
            <table style="text-align: center;width: 100%;vertical-align: top" >
                <tr>
                    <td><b>CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM</b></td>
                </tr>
                <tr>
                    <td><b>Độc lập - Tự do - Hạnh phúc</b></td>
                </tr>
                <tr><td><label style="position : relative; top:-22px;left:0px;">_________________________</label></td></tr>
            </table>
        </td>
    </tr>
</table>

<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td style="font-size: 20px"><b>TỜ KHAI CẤP GIẤY XÁC NHẬN TÌNH TRẠNG HÔN NHÂN</b></td>
    </tr>
    <tr>
        <td>Kính gửi: @if(session('admin')->level == 'H' && session('admin')->name == "Phòng tư Pháp huyện Đồng Văn")
                {{"Phòng tư Pháp huyện Đồng Văn"}}
            @elseif(session('admin')->level == 'H' && session('admin')->name == "Phòng tư Pháp huyện Yên Minh")
                {{"Phòng Tư Pháp Huyện Yên Minh"}} @else {{$tencq}} @endif</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="2"><b>Họ, chữ đệm, tên người khai: </b> <span style="text-transform: uppercase">{{$model->nguoidn}}</span></td>
    </tr>
    <tr>
        <td >Dân tộc: {{$model->dantocnk}}</td>
        <td >Quốc tịch: {{$model->quoctichnk}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi cư trú: {{$model->noicutrunk}} </td>
    </tr>
    <tr>
        <td colspan="2">Quan hệ với người được cấp Giấy xác nhận tình trạng hôn nhân: {{$model->quanhe}}</td>
    </tr>
    <tr>
        <td colspan="2"><b>Đề nghị cấp Giấy xác nhận tình trạng hôn nhân cho người có tên dưới đây: </b></td>
    </tr>
    <tr>
        <td>Họ, chữ đệm, tên: <span style="text-transform: uppercase">{{$model->hotenxn}}</span></td>
        <td>Giới tính: {{$model->gioitinh}}</td>
    </tr>
    <tr>
        <td colspan="2">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinh)}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi sinh: {{$model->noisinh}}</td>
    </tr>
    <tr>
        <td>Dân tộc: {{$model->dantoc}}</td>
        <td>Quốc tịch: {{$model->quoctich}}</td>
    </tr>
    <tr>
        <td colspan="2">Số Giấy CMND/Hộ chiếu/Giấy tờ hợp lệ thay thế: {{$model->giayto}} số {{$model->sogiayto}} do {{$model->noicap}} cấp ngày {{$model->ngaycap}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi cư trú: {{$model->noicutru}}</td>
    </tr>
    <tr>
        <td colspan="2">Nghề nghiệp: {{$model->nghenghiep}}</td>
    </tr>
    <tr>
        <td colspan="2">Trong thời gian cư trú tại {{$model->noicutru}} từ ngày {{getDayVn($model->tungay)}} đến ngày {{getDayVn($model->denngay)}} </td>
    </tr>
    <tr>
        <td colspan="2">Tình trạng hôn nhân: {{$model->tthonnhan}}</td>
    </tr>
    <tr>
        <td colspan="2">Mục đích sử dụng Giấy xác nhận tình trạng hôn nhân: {{$model->noidungxn}}</td>
    </tr>
    <tr>
        <td colspan="2">Tôi cam đoan những nội dung khai trên đây là đúng sự thật và chịu trách nhiệm trước pháp luật về cam đoan của mình</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="40%"></td>
        <td>
            <table>
                <tr>
                    <td>
                        <i>
                            Làm tại: @if(session('admin')->level == 'H' && session('admin')->name == 'Phòng Tư Pháp Huyện Yên Minh') {{"Phòng Tư Pháp Huyện Yên Minh"}}
                            @elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn') {{"Phòng Tư Pháp Huyện Đồng Văn"}}
                            @else {{$xa}}
                            @endif, ngày {{date('d',strtotime($model->ngayxn))}} tháng {{date('m',strtotime($model->ngayxn))}} năm  {{date('Y',strtotime($model->ngayxn))}}
                        </i>
                    </td>
                </tr>
                <tr><td><b>Người yêu cầu</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td></tr>
                <tr style="height: 100px">
                    <td style="vertical-align: bottom"><b></b></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>