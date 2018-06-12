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

<table width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:100px auto auto; text-align: center;font-size: 35px;font-weight: bold">
    <tr>
        <td>
            SỔ
        </td>
    </tr>
    <tr>
        <td>
            CẤP GIẤY XÁC NHẬN
        </td>
    </tr>
    <tr>
        <td>
            TÌNH TRẠNG HÔN NHÂN
        </td>
    </tr>
</table>
<table width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:150px auto auto; text-align: left;">
    <tr>
        <td>
            Cơ quan đăng ký hộ tịch: {{$tencq}}
        </td>
    </tr>
</table>
<table width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:150px auto auto; text-align: center;">
    <tr>
        <td>
            Quyển số: ....................
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

@foreach($model as $key=>$tt)
    <p style="page-break-before: always">
<table width="96%" border="0" cellspacing="0" cellpadding="8">
    <tr>
        <td style="text-align: left;">
            Số:..{{$tt->soxacnhan}}..
        </td>

        <td style="text-align: right;">
            Ngày, tháng, năm cấp:..{{getDayVn($tt->ngayxn)}}..
        </td>
    </tr>
</table>
<table width="96%" border="1" cellpadding="8" style=" text-align: left;">
    <tr>
        <td style="text-align: left; width: 70%">
            <table>
                <tr><td colspan="6"><b>Phần ghi về người được cấp Giấy xác nhận tình trạng hôn nhân:</b>  </td></tr>
                <tr><td colspan="6">Họ, chữ đệm, tên: <span style="text-transform: uppercase">{{$tt->hotenxn}}</span></td></tr>
                <tr><td colspan="6">Ngày, tháng, năm sinh: ..{{getDayVn($tt->ngaysinh)}}..</td></tr>
                <tr>
                    <td colspan="2">Giới tính: ..{{$tt->gioitinh}}..</td>
                    <td colspan="2">Dân tộc: ..{{$tt->dantoc}}..</td>
                    <td colspan="2">Quốc tịch: ..{{$tt->quoctich}}..</td>
                </tr>
                <tr><td colspan="6">Nơi cư trú: ..{{$tt->noicutru}}..</td></tr>
                <tr><td colspan="6">Giấy tờ tùy thân: ..{{$tt->giayto}}..</td></tr>
                <tr><td colspan="6">Trong thời gian cư trú tại: ..{{$tt->noicutru}}..</td></tr>
                <tr><td colspan="6">từ ngày..{{date('d',strtotime($tt->tungay))}}.. tháng ..{{date('m',strtotime($tt->tungay))}}.. năm ..{{date('Y',strtotime($tt->tungay))}}.., đến ngày..{{date('d',strtotime($tt->denngay))}}.. tháng ..{{date('m',strtotime($tt->denngay))}}.. năm ..{{date('Y',strtotime($tt->denngay))}}..</td></tr>
                <tr><td colspan="6">Tình trạng hôn nhân: ..{{$tt->tthonnhan}}..</td></tr>
                <tr><td colspan="6">Mục đích sử dụng: ..{{$tt->noidungxn}}..</td></tr>
                <tr><td colspan="6"><b>Phần ghi về người đề nghị cấp xác nhận tình trạng hôn nhân: </b></td></tr>
                <tr><td colspan="6">Họ, chữ đệm, tên: ..{{$tt->nguoidn}}..</td></tr>
                <tr><td colspan="6">Quan hệ với người được cấp Giấy xác nhận tình trạng hôn nhân: ..{{$tt->quanhe}}..</td></tr>
                <tr><td colspan="6"><b>Họ, chữ đệm, tên, chức vụ người ký Giấy xác nhận tình trạng hôn nhân: {{$tt->hotennk}} - {{$tt->chucvunk}}</b></td></tr>
                <tr style="text-align: center">
                    <td colspan="6" style="width: 50%;text-align: center"><b>Người thực hiện</b></td>
                </tr>
                <tr style="text-align: center">
                    <td colspan="6" style="width: 50%;text-align: center">(Ký, ghi rõ họ, chữ đệm, tên) </td>
                </tr>
                <tr style="height: 100px;text-align: center">
                    <td colspan="6" style="width: 50%;vertical-align: bottom"><b>{{$tt->hotennk}}</b></td>
                </tr>
            </table>
        </td>

        <td style="vertical-align: top">
            <table style="padding-top: 2px; text-align: left;" cellpadding="4">
                <tr>
                    <td>Để ĐKKH trong nước:</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->phanloai == 'ĐKKH trong nước' ? 'X' : ''}}</span></td>
                </tr>
                <tr>
                    <td>Để ĐKKH ở nước ngoài:</td>
                <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->phanloai == 'ĐKKH nước ngoài' ? 'X' : ''}}</span></td>
                </tr>
                <tr>
                    <td>Mục đích khác:</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->phanloai == 'Khác' ? 'X' : ''}}</span></td>
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

@endforeach

</body>
</html>