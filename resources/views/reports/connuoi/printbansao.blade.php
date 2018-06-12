<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
    <style type="text/css">
        body {
            font: normal 14px/16px time, serif;
        }

        table, p {
            width: 98%;
            margin: auto;
        }

        td, th {
            padding: 5px;
        }
        p{
            padding: 5px;
        }
        span{
            text-transform: uppercase;
            font-weight: bold;

        }

    </style>
</head>

<body style="font:normal 15px Times, serif;">


<table width="96%" border="0" cellspacing="0" cellpadding="4" style="margin:0 auto 20px; text-align: center;">
    <tr>
        <td style="width:26%"></td>
        <td>
            <b>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</b><br>
        </td>
        <td>
            <i>Mẫu TP/CN-2011/CN.01.a</i>
        </td>
    </tr>
    <tr>
        <td style="width:26%"></td>
        <td>
            <p style="margin-top:-35px;"><b><u>ĐỘC LẬP - TỰ DO - HẠNH PHÚC</u></b></p>
        </td>
        <td>
            <p style="text-align:left">Số: {{$model->so}}</p>
            <p  style="text-align:left">Quyển số: {{$model->quyen}}</p>
        </td>
    </tr>
    <tr>
    </tr>
</table>
<table width="96%" border="0" cellspacing="0" cellpadding="4" style="margin:0 auto 20px; text-align: center;">
    <tr>
        <td>
            <img src="{{url('images/quochuy.png')}}" width="100">
        </td>
    </tr>
</table>

<table width="96%" border="0" cellspacing="0" cellpadding="8" style="margin: auto auto; text-align: center;font-size: 25px">
    <tr>
        <td>
            <b>GIẤY CHỨNG NHẬN NUÔI CON NUÔI</b>
        </td>
    </tr>
    <tr>
        <td>
            (BẢN SAO)
        </td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="2"><b>Họ và tên cha nuôi: {{$model->hotenchanuoi}}</b></td>
        <td colspan="2"><b>Họ và tên mẹ nuôi: {{$model->hotenmenuoi}}</b></td>
    </tr>
    <tr>
        <td colspan="2">Ngày, tháng, năm sinh:{{getDayVn($model->ngaysinhchanuoi)}}</td>
        <td colspan="2">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhmenuoi	)}}</td>
    </tr>
    <tr>
        <td>Dân tộc: {{$model->dantocchanuoi}}</td>
        <td>Quốc tịch: {{$model->quoctichchanuoi}}</td>
        <td>Dân tộc: {{$model->dantocmenuoi}}</td>
        <td>Quốc tịch: {{$model->quoctichmenuoi}}</td>
    </tr>
    <tr>
        <td colspan="2">Số Giấy CMND/Hộ chiếu: {{$model->cmndchanuoi}}</td>
        <td colspan="2">Số Giấy CMND/Hộ chiếu: {{$model->cmndmenuoi}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi cấp: {{$model->noicapgtcn}}</td>
        <td colspan="2">Nơi cấp: {{$model->noicapgtmn}}</td>
    </tr>
    <tr>
        <td colspan="2">Ngày, tháng, năm cấp: {{getDayVn($model->ngaycapgtcn)}}</td>
        <td colspan="2">Ngày, tháng, năm cấp: {{getDayVn($model->ngaycapgtmn)}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi thường trú: {{$model->thuongtrucn}}</td>
        <td colspan="2">Nơi thường trú: {{$model->thuongtrumn}}</td>
    </tr>
    <tr>
        <td colspan="2"><b>Họ và tên con nuôi: {{$model->hotenconnuoi}}</b></td>
        <td colspan="2"><b>Giới tính: {{$model->gioitinhconnuoi}}</b></td>
    </tr>
    <tr>
        <td colspan="4">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhconnuoi)}}</td>
    </tr>
    <tr>
        <td colspan="4">Nơi sinh: {{$model->noisinhconnuoi}}</td>
    </tr>
    <tr>
        <td colspan="2">Dân tộc: {{$model->dantocconnuoi}}</td>
        <td colspan="2">Quốc tịch: {{$model->quoctichconnuoi}}</td>
    </tr>
    <tr>
        <td colspan="4">Nơi thường trú: {{$model->thuongtruconnuoi}}</td>
    </tr>
    <tr>
        <td colspan="4">Nơi đăng ký việc nuôi con nuôi: {{$model->noidkconnuoi}}</td>
    </tr>
    <tr>
        <td colspan="4">Ngày, tháng, năm đăng ký: {{getDayVn($model->ngaythangdk)}}</td>
    </tr>
    <tr>
        <td colspan="4">Ghi chú: {{$model->ghichu}}</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;" width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td><i>Vào Sổ đăng ký nuôi con nuôi</i><br>ngày {{getDayVn($model->ngaythangdk)}}<br><b>Người thực hiện</b><br><i>(Ký ghi rõ họ tên)</i></td>
        <td><b>NGƯỜI KÝ GIẤY CHỨNG NHẬN NUÔI CON NUÔI</b><br><i>(Ký, ghi rõ họ tên,chức vụ và đóng dấu)</i></td>
    </tr>
    <tr>
        <td>{{$model->nguoithuchien}}</td>
        <td>{{$model->nguoikygiaycn}}</td>
    </tr>
</table>
</body>
</html>