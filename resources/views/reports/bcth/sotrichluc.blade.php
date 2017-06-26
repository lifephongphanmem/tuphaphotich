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
        <td>
            <b>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</b><br>
        </td>
    </tr>
    <tr>
        <td>
            <b><u>ĐỘC LẬP - TỰ DO - HẠNH PHÚC</u></b>
        </td>
    </tr>
</table>
<table width="96%" border="0" cellspacing="0" cellpadding="4" style="margin:0 auto 20px; text-align: center;">
    <tr>
        <td>
            <img src="{{url('images/quochuy.png')}}" width="100">
        </td>
    </tr>
    <tr>
        <td>
            <b>BỘ TƯ PHÁP</b>
        </td>
    </tr>
</table>

<table width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:100px auto auto; text-align: center;font-size: 35px">
    <tr>
        <td>
            SỔ
        </td>
    </tr>
    <tr>
        <td>
            CẤP BẢN SAO TRÍCH LỤC
        </td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="margin: auto; text-align: center;">
    <tr>
        <td>
            Cơ quan đăng ký hộ tịch: {{$tendv}}
        </td>
    </tr>
</table>
<table width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:50px auto auto; text-align: center;">
    <tr>
        <td>
            Quyển số: ....
        </td>
    </tr>
    <tr>
        <td>
            Mở ngày: ..{{$inputs['ngaytu']}}..
        </td>
    </tr>
    <tr>
        <td>
            Khóa ngày: ..{{$inputs['ngayden']}}..
        </td>
    </tr>
</table>

<p style="page-break-before: always">

<table width="96%" border="1" cellpadding="8" style=" text-align: left; border-collapse: collapse;">
    <thead>
    <tr>
        <th style="text-align: center" width="2%">STT</th>
        <th style="text-align: center" width="10%">Ngày, tháng, năm cấp bản sao Trích lục</th>
        <th style="text-align: center" width="25%%">Họ, chữ đệm, tên, giấy tờ tùy thân của người
            yêu cầu cấp bản sao
            Trích lục
        </th>
        <th style="text-align: center" width="15%">Loại bản sao Trích lục</th>
        <th style="text-align: center" width="25%">Họ, chữ đệm, tên,
            chức vụ của người ký cấp bản sao Trích lục
        </th>
        <th style="text-align: center;width: 5%">Số lượng bản sao</th>

        <th style="text-align: center" >Ghi chú</th>
    </tr>
    </thead>
    <tbody>
    @foreach($model as $key=>$tt)
        <tr>
            <td style="text-align: center">{{$key+1}}</td>
            <td style="text-align: center">{{getDayVn($tt->ngaycap)}}</td>
            <td>{{$tt->hotennyc}}<br>{{$tt->plgiaytonyc}}-{{$tt->sogiaytonyc}}</td>
            <td style="text-align: center">{{$tt->plbstrichluc}}</td>
            <td>{{$tt->nguoiky}}- {{$tt->chucvu}}</td>
            <td style="text-align: center">{{$tt->soluongbs}}</td>
            <td>{{$tt->ghichu}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>