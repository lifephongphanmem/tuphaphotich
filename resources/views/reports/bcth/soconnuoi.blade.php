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
            ĐĂNG KÝ ĐĂNG KÝ NUÔI CON NUÔI
        </td>
    </tr>
</table>
<table width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:50px auto auto; text-align: left;">
    <tr>
        <td>
            Cơ quan đăng ký hộ tịch: {{$tencq}}
        </td>
    </tr>
</table>
<table width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:50px auto auto; text-align: center;">
    <tr>
        @foreach($model as $key=>$tt)
            <td>
                Quyển số: {{$tt->quyen}}
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

<table width="96%" border="0" cellspacing="0" cellpadding="8">
    <tr>
        <td style="text-align: left;">
            Số:..{{$tt->so}}.. Quyển..{{$tt->quyen}}..
        </td>

        <td style="text-align: right;">
            Ngày, tháng, năm đăng ký:..{{getDayVn($tt->ngaythangdk)}}..
        </td>
    </tr>
</table>
<table width="96%" border="1" cellpadding="8" style=" text-align: left;">
    <tr>
        <td style="text-align: left; width: 70%">
            <table>
                <tr><td colspan="6"><b>Phần ghi về con nuôi:</b>  </td></tr>
                <tr><td colspan="6">Họ và tên: <span style="text-transform: uppercase">{{$tt->hotenconnuoi}}</span></td></tr>
                <tr>
                    <td colspan="2">Ngày, tháng, năm sinh:  ..{{getDayVn($tt->ngaysinhconnuoi)}}</td>
                    <td colspan="2">Giới tính: ..{{$tt->gioitinhconnuoi}}..</td>
                </tr>
                <tr>
                    <td colspan="2">Dân tộc: ..{{$tt->dantocconnuoi}}..</td>
                    <td colspan="2">Quốc tịch: ..{{$tt->quoctichconnuoi}}..</td>
                </tr>
                <tr><td colspan="6">Nơi thường trú: ..{{$tt->thuongtruconnuoi}}..</td></tr>
                <tr><td colspan="6"><b>Phần ghi về cha, mẹ nuôi:</b></td></tr>
                <tr>
                    <td colspan="6">
                        <table  border="1">
                            <tr>
                                <td style="width: 20%"></td>
                                <td>ÔNG</td>
                                <td>BÀ</td>
                            </tr>
                            <tr>
                                <td  style="width: 20%">Họ và tên</td>
                                <td>{{$tt->hotenchanuoi}}</td>
                                <td>{{$tt->hotenmenuoi}}</td>
                            </tr>
                            <tr>
                                <td  style="width: 20%">Ngày, tháng, năm sinh</td>
                                <td>{{getDayVn($tt->ngaysinhchanuoi)}}</td>
                                <td>{{getDayVn($tt->ngaysinhmenuoi)}}</td>
                            </tr>
                            <tr  style="width: 20%">
                                <td>Dân tộc</td>
                                <td>{{$tt->dantocchanuoi}}</td>
                                <td>{{$tt->dantocmenuoi}}</td>
                            </tr>
                            <tr  style="width: 20%">
                                <td>Quốc tịch</td>
                                <td>{{$tt->quoctichchanuoi}}</td>
                                <td>{{$tt->quoctichmenuoi}}</td>
                            </tr>
                            <tr  style="width: 20%">
                                <td>Nơi thường trú</td>
                                <td>{{$tt->thuongtrucn}}</td>
                                <td>{{$tt->thuongtrumn}}</td>
                            </tr>
                            <tr  style="width: 20%">
                                <td>Số Giấy CMND/Hộ chiếu</td>
                                <td>{{$tt->cmndchanuoi}}</td>
                                <td>{{$tt->cmndmenuoi}}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr><td colspan="6"><b>Phần ghi về bên giao con nuôi:</b></td></tr>
                <tr>
                    <td colspan="6">
                        <table  border="1">
                            <tr>
                                <td style="width: 20%"></td>
                                <td>ÔNG</td>
                                <td>BÀ</td>
                            </tr>
                            <tr>
                                <td  style="width: 20%">Họ và tên</td>
                                <td>{{$tt->hotenchagiao}}</td>
                                <td>{{$tt->hotenmegiao}}</td>
                            </tr>
                            <tr>
                                <td  style="width: 20%">Ngày, tháng, năm sinh</td>
                                <td>{{getDayVn($tt->ngaysinhchagiao)}}</td>
                                <td>{{getDayVn($tt->ngaysinhmegiao)}}</td>
                            </tr>
                            <tr  style="width: 20%">
                                <td>Dân tộc</td>
                                <td>{{$tt->dantocchagiao}}</td>
                                <td>{{$tt->dantocmegiao}}</td>
                            </tr>
                            <tr  style="width: 20%">
                                <td>Quốc tịch</td>
                                <td>{{$tt->quoctichchagiao}}</td>
                                <td>{{$tt->quoctichmegiao}}</td>
                            </tr>
                            <tr  style="width: 20%">
                                <td>Nơi thường trú</td>
                                <td>{{$tt->thuongtrucg}}</td>
                                <td>{{$tt->thuongtrumg}}</td>
                            </tr>
                            <tr  style="width: 20%">
                                <td>Số Giấy CMND/Hộ chiếu</td>
                                <td>{{$tt->cmndchagiao}}</td>
                                <td>{{$tt->cmndmegiao}}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr><td colspan="6">Quan hệ của bên giao với trẻ được nhận làm con nuôi: {{$tt->quanhenguoigiao}}</td></tr>
                <tr><td colspan="6">Tên cơ sở nuôi dưỡng: {{$tt->tencsnuoiduong}}</td></tr>
                <tr><td colspan="6">Họ tên, chức vụ của đại diện cơ sở nuôi dưỡng:  {{$tt->nguoidaidiencsnd}} chức vụ: {{$tt->chucvundd}}</td></tr>
                <tr><td colspan="6">Giấy chứng nhận/Quyết định số: {{$tt->soqd}}  ngày {{date('d',strtotime($tt->ngaythangqd))}} tháng {{date('m',strtotime($tt->ngaythangqd))}} năm  {{date('Y',strtotime($tt  ->ngaythangqd))}}</td></tr>
                <tr><td colspan="6">Họ tên, chức vụ người ký Giấy chứng nhận/Quyết định: {{$tt->soqd}} </td></tr>
                <tr><td colspan="6">Ngày đăng ký: {{getDayVn($tt->ngaythangdk)}} </td></tr>
                <tr><td colspan="6">Nơi đăng ký:  {{$tencq}}</td></tr>
                <tr style="text-align: center">
                    <td colspan="3" style="width: 50%"><b>Chữ ký của người giao con nuôi</b></td>
                    <td colspan="3" style="width: 50%"><b>Chữ ký của người nhận con nuôi</b></td>
                </tr>
                <tr style="height: 100px;text-align: center">
                    <td colspan="3" style="width: 50%;vertical-align: bottom"></td>
                    <td colspan="3" style="width: 50%;vertical-align: bottom"></td>
                </tr>
                <tr style="text-align: center">
                    <td colspan="6"><p style="text-align: center"><b>Người thực hiện</b></p></td>
                </tr>
                <tr style="height: 100px;text-align: center">
                    <td colspan="6" style="width: 50%;vertical-align: bottom"><b>{{$tt->nguoithuchien}}</b></td>
                </tr>
            </table>
        </td>

        <td style="vertical-align: top">
            <p  style="text-align: center"><b>Ghi chú</b></p>
            @foreach($thaydoi as $td)
                @if($tt->masohoso == $td->mahs)
                    <p>- Thay đổi từ {{$td->thaydoitu}} thành {{$td->thaydoithanh}}</p>
                @endif
            @endforeach
        </td>
    </tr>
</table>
<table width="96%" border="0" cellspacing="0" cellpadding="8">
    <tr>
        <td style="text-align: right;">
            Trang số: {{$key+1}}
        </td>
    </tr>
</table>
@endforeach
<p style="page-break-before: always">

</body>
</html>