<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
</head>
<body style="font-size: 16px; width:99%;">
<table width="95%" border="0" cellspacing="0" cellpadding="8" style=" margin:auto auto auto auto">
    <tr>
        <td style="text-align: center"> ......................... </td>
        <td style="font-weight: bold; text-align: center">CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM</td>
    </tr>
    <tr>
        <td style="text-align: center"> {{$huyen}} </td>
        <td style="font-weight: bold; text-align: center">Độc lập - Tự do - Hạnh phúc</td>
    </tr>
    <tr>
        <td style="text-align: center"> {{$model->donvixn}} </td>
        <td></td>
    </tr>
    <tr>
        <td style="text-align: center">Số:..{{$model->soxacnhan}}../UBND- XNTTHN</td>
        <td style="font-style: italic;text-align: center">.............., ngày ..{{date('d',strtotime($model->ngayxn))}}.. tháng ..{{date('m',strtotime($model->ngayxn))}}.. năm ..{{date('Y',strtotime($model->ngayxn))}}.. </td>
    </tr>
    <tr style="text-align: center; font-weight: bold; font-size: 20px">
        <td colspan="2">GIẤY XÁC NHẬN TÌNH TRẠNG HÔN NHÂN</td>
    </tr>
    <tr style="text-align: center; font-weight: bold">
        <td colspan="2">{{$model->donvixn}}</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3" style="padding-left: 50px">Xét đề nghị ông/bà:  ..{{$model->nguoidn}}..</td>
    </tr>
    <tr>
        <td colspan="3">về việc cấp Giấy xác nhận tình trạng hôn nhân cho: ..{{$model->hotenxn}}..</td>
    </tr>
    <tr style="text-align: center;font-weight: bold">
        <td colspan="3">XÁC NHẬN:</td>
    </tr>
    <tr>
        <td colspan="3"> Họ, chữ đệm, tên: <span style="text-transform: uppercase">{{$model->hotenxn}}</span></td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: ..{{getDayVn($model->ngaysinh)}}..</td>
    </tr>
    <tr>
        <td>Giới tính: ..{{$model->gioitinh}}..</td>
        <td>Dân tộc: ..{{$model->dantoc}}..</td>
        <td>Quốc tịch: ..{{$model->quoctich}}..</td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân: ..{{$model->giayto}}..</td>
    </tr>
    <tr>
        <td colspan="3">Trong thời gian cư trú tại : ..{{$model->donvixn}}..</td>
    </tr>
    <tr>
        <td colspan="3"> ..từ ngày..{{date('d',strtotime($model->tungay))}}.. tháng ..{{date('m',strtotime($model->tungay))}}.. năm ..{{date('Y',strtotime($model->tungay))}}.., đến ngày..{{date('d',strtotime($model->denngay))}}.. tháng ..{{date('m',strtotime($model->denngay))}}.. năm ..{{date('Y',strtotime($model->denngay))}}..</td>
    </tr>
    <!--Thông tin mẹ-->
    <tr>
        <td colspan="3">Tình trạng hôn nhân: ..{{$model->tthonnhan}}..</td>
    </tr>
    <tr>
        <td colspan="3">Giấy này có giá trị sử dụng trong thời hạn 6 tháng, kể từ ngày cấp, được sử dụng để: ..{{$model->noidungxn}}..</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="50%"></td>
        <td>
            <table>
                <tr><td><b>NGƯỜI KÝ GIẤY XÁC NHẬN</b></td></tr>
                <tr><td><i>(ký, ghi rõ họ tên, chức vụ và đóng dấu)</i></td></tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>