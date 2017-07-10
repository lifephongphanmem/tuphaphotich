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
            ĐĂNG KÝ THAY ĐỔI, CẢI CHÍNH, BỔ XUNG HỘ TỊCH, XÁC ĐỊNH LẠI DÂN TỘC
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
                Quyển số:
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
            Số:..{{$tt->sotd}}.. Quyển..{{$tt->quyentd}}..
        </td>

        <td style="text-align: right;">
            Ngày, tháng, năm đăng ký:..{{getDayVn($tt->ngaydk)}}..
        </td>
    </tr>
</table>
<table width="96%" border="1" cellpadding="8" style=" text-align: left;">
    <tr>
        <td style="text-align: left; width: 70%">
            <table>
                <tr><td colspan="6"><b>Phần ghi về người được thay đổi, cải chính, bổ sung hộ tịch, xác định lại dân tộc:</b>  </td></tr>
                <tr><td colspan="6">Họ, chữ đệm, tên: <span style="text-transform: uppercase">{{$tt->hotenntd}}</span></td></tr>
                <tr><td colspan="6">Ngày, tháng, năm sinh:  ..{{getDayVn($tt->ngaysinhntd)}}</td></tr>
                <tr>
                    <td colspan="2">Giới tính: ..{{$tt->gioitinhntd}}..</td>
                    <td colspan="2">Dân tộc: ..{{$tt->dantocntd}}..</td>
                    <td colspan="2">Quốc tịch: ..{{$tt->quoctichntd}}..</td>
                </tr>
                <tr><td colspan="6">Giấy tờ tùy thân: ..{{$tt->cmndntd}}..</td></tr>
                <tr><td colspan="6">Nơi cư trú: ..{{$tt->thuongtruntd}}..</td></tr>
                <tr><td colspan="6"><b>Phần ghi nội dung thay đổi, cải chính, bổ sung hộ tịch, xác định lại dân tộc: </b></td></tr>
                <tr>
                    <td colspan="2">Tên giấy tờ hộ tịch: ..{{$tt->plgiayto}}..</td>
                </tr>
                <tr>
                    <td colspan="2">Số: ....</td>
                    <td colspan="2">Ngày cấp: ....</td>
                    <td colspan="2">Nơi cấp: ....</td>
                </tr>
                <tr><td colspan="2">Nội dung: Được thay đổi từ {{$tt->thaydoitu}} thành {{$tt->thaydoithanh}} </td></tr>
                <tr><td colspan="6"><b>Họ, chữ đệm, tên người đi đăng ký hộ tịch: </b> <span style="text-transform: uppercase">{{$tt->hotennk}}</span></td></tr>
                <tr><td colspan="6">Giấy tờ tùy thân: ..{{$tt->cmndnk}}..</td></tr>
                <tr><td colspan="6"><b>Họ, chữ đệm, tên, chức vụ người ký Trích lục:  {{$tt->nguoikygiay}} - {{$tt->chucvunguoikygiay}}</b></td></tr>
                <tr style="text-align: center">
                    <td colspan="3" style="width: 50%"><b>Người đi đăng ký</b></td>
                    <td colspan="3" style="width: 50%"><b>Người thực hiện</b></td>
                </tr>
                <tr style="height: 100px;text-align: center">
                    <td colspan="3" style="width: 50%;vertical-align: bottom"><b>{{$tt->hotennk}}</b></td>
                    <td colspan="3" style="width: 50%;vertical-align: bottom"><b>{{$tt->nguoithuchien}}</b></td>
                </tr>
            </table>
        </td>

        <td style="vertical-align: top">
            <table style="padding-top: 2px; text-align: left;" cellpadding="4">
                <tr>
                    <td>Thay đổi hộ tịch</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->plthaydoi == 'Thay đổi hộ tịch' ? 'X' : ''}}</span></td>
                </tr>
                <tr>
                    <td>Cải chính hộ tịch</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->plthaydoi == 'Cải chính hộ tịch' ? 'X' : ''}}</span></td>
                </tr>
                <tr>
                    <td>Bổ xung hộ tịch</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->plthaydoi == 'Bổ xung hộ tịch' ? 'X' : ''}}</span></td>
                </tr>
                <tr>
                    <td>Xác định lại dân tộc</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->plthaydoi == 'Xác định lại dân tộc' ? 'X' : ''}}</span></td>
                </tr>
                <tr>
                    <td>
                        Ghi vào sổ hộ tịch việc thay đổi hộ tịch:
                    </td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center"></span></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center"><b>Ghi chú</b></td>
                </tr>
            </table>
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