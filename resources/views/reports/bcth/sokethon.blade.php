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
            ĐĂNG KÝ KẾT HÔN
        </td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="margin: auto; text-align: center;">
    <tr>
        <td>
            Cơ quan đăng ký hộ tịch: {{$tencq}}
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
@foreach($model as $key=>$tt)
<table width="96%" border="0" cellspacing="0" cellpadding="8">
    <tr>
        <td style="text-align: left;">
            Số:..{{$tt->sokethon}}.. Quyển..{{$tt->quyenkethon}}..
        </td>

        <td style="text-align: right;">
            Ngày, tháng, năm đăng ký:..{{getDayVn($tt->ngaydangky)}}..
        </td>
    </tr>
</table>
<table width="96%" border="1" cellpadding="8" style=" text-align: left;">
    <tr>
        <td style="text-align: left; width: 70%;vertical-align: top">
            <table>
                <tr>
                    <td colspan="2"><b>Họ, chữ đệm, tên người vợ: </b><span style="text-transform: uppercase">..{{$tt->hotenvo}}..</span> </td>
                </tr>
                <tr>
                    <td colspan="2">Ngày, tháng, năm sinh: ..{{getDayVn($tt->ngaysinhvo)}}..</td>
                </tr>
                <tr>
                    <td width="50%">Dân tộc: ..{{$tt->dantocvo}}..</td>
                    <td>Quốc tịch: ..{{$tt->quoctichvo}}..</td>
                </tr>
                <tr>
                    <td colspan="2">Nơi cư trú: ..{{$tt->diachivo}}..</td>
                </tr>
                <tr>
                    <td colspan="2">Giấy tờ tùy thân: ..{{$tt->loaigiaytovo}}- {{$tt->sogiaytovo}}..</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Họ, chữ đệm, tên người chồng: </b><span style="text-transform: uppercase">{{$tt->hotenchong}}</span> </td>
                </tr>
                <tr>
                    <td colspan="2">Ngày, tháng, năm sinh: ..{{getDayVn($tt->ngaysinhchong)}}..</td>
                </tr>
                <tr>
                    <td width="50%">Dân tộc:..{{$tt->dantocchong}}..</td>
                    <td>Quốc tịch: ..{{$tt->quoctichvo}}..</td>
                </tr>
                <tr>
                    <td colspan="2">Nơi cư trú: ..{{$tt->diachichong}}..</td>
                </tr>
                <tr>
                    <td colspan="2">Giấy tờ tùy thân: ..{{$tt->loaigiaytochong}}- {{$tt->sogiaytochong}}..</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Ngày, tháng, năm xác nhận quan hệ hôn nhân: </b>..{{getDayVn($tt->ngaydangky)}}.. </td>
                </tr>
                <tr>
                    <td colspan="2"><b>Họ, chữ đệm, tên, chức vụ của người ký Giấy chứng nhận kết hôn/ /Trích lục ghi chú kết hôn: : </b>
                    ..{{$tt->nguoiky}}- {{$tt->chucvu}}..</td>
                </tr>
                <tr style="text-align: center">
                    <td width="50%"><b>Vợ</b></td>
                    <td><b>Chồng</b></td>
                </tr>
                <tr style="text-align: center">
                    <td width="50%"><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td>
                    <td><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td>
                </tr>
                <tr style="text-align: center;height: 100px">
                    <td style="text-align: center;vertical-align: bottom; width: 50%">{{$tt->hotenvo}}</td>
                    <td style="text-align: center;vertical-align: bottom; width: 50%">{{$tt->hotenchong}}</td>
                </tr>
                <tr style="text-align: center">
                    <td colspan="2"><b>Người thực hiện</b></td>
                </tr>
                <tr style="text-align: center">
                    <td colspan="2"><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td>
                </tr>
                <tr style="text-align: center;height: 100px">
                    <td colspan="2" style="text-align: center;vertical-align: bottom;">{{$tt->nguoithuchien}}</td>
                </tr>
            </table>
        </td>

        <td style="vertical-align: top">
            <table style="padding-top: 2px; text-align: left;" cellpadding="4">
                <tr>
                    <td>Kết hôn lần đầu</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->pldangky == 'Đăng ký lần đầu' ? 'X' : ''}}</span></td>
                </tr>
                </tr>
                <tr>
                    <td>Đăng ký lại</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->pldangky == 'Đăng ký lại' ? 'X' : ''}}</span></td>
                </tr>
                <tr>
                    <td>Ghi chú kết hôn</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center"></span></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p  style="text-align: center"><b>Ghi chú</b></p>
                        @foreach($thaydoi as $td)
                            @if($tt->mahs == $td->mahs)
                                <p>- Thay đổi từ {{$td->thaydoitu}} thành {{$td->thaydoithanh}}</p>
                            @endif
                        @endforeach
                    </td>
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
<p style="page-break-before: always">
@endforeach


</body>
</html>