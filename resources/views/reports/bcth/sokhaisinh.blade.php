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
            ĐĂNG KÝ KHAI SINH
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
            Ngày, tháng, năm đăng ký:..{{getDayVn($tt->ngaydangky)}}..
        </td>
    </tr>
</table>
<table width="96%" border="1" cellpadding="8" style=" text-align: left;">
    <tr>
        <td style="text-align: left; width: 70%">
            <table>
                <tr><td colspan="6"><b>Người được đăng ký khai sinh</b>  </td></tr>
                <tr><td colspan="6">Họ, chữ đệm, tên: <span style="text-transform: uppercase">{{$tt->hotenks}}</span></td></tr>
                <tr><td colspan="6">Ngày, tháng, năm sinh:  ..{{getDayVn($tt->ngaysinhks)}} ghi bằng chữ: ..{{getDateText($tt->ngaysinhks)}}..</td></tr>
                <tr>
                    <td colspan="2">Giới tính: ..{{$tt->gioitinhks}}..</td>
                    <td colspan="2">Dân tộc: ..{{$tt->dantocks}}..</td>
                    <td colspan="2">Quốc tịch: ..{{$tt->quoctichks}}..</td>
                </tr>
                <tr><td colspan="6">Nơi sinh: ..{{$tt->noisinh}}..</td></tr>
                <tr><td colspan="6">Quê quán: ..{{$tt->quequanks}}..</td></tr>
                <tr><td colspan="6">Số định danh cá nhân: ..{{$tt->sodinhdanhcanhan}}</td></tr>
                <tr><td colspan="6"><b>Họ, chữ đệm, tên mẹ: </b><span style="text-transform: uppercase">{{$tt->hotenme}}</span></td></tr>
                <tr>
                    <td colspan="2">Năm sinh: ..{{$tt->ngaysinhme}}..</td>
                    <td colspan="2">Dân tộc: ..{{$tt->dantocme}}..</td>
                    <td colspan="2">Quốc tịch: ..{{$tt->quoctichme}}..</td>
                </tr>
                <tr><td colspan="3">Nơi cư trú: ..{{$tt->diachime}}..</td></tr>
                <tr><td colspan="6"><b>Họ, chữ đệm, tên cha: </b><span style="text-transform: uppercase">{{$tt->hotencha}}</span></td></tr>
                <tr>
                    <td colspan="2">Năm sinh: ..{{$tt->ngaysinhcha}}..</td>
                    <td colspan="2">Dân tộc: ..{{$tt->dantoccha}}..</td>
                    <td colspan="2">Quốc tịch: ..{{$tt->quoctichcha}}..</td>
                </tr>
                <tr><td colspan="6">Nơi cư trú:..{{$tt->diachicha}}..</td> </tr>
                <tr><td colspan="6"><b>Họ, chữ đệm, tên người đi khai sinh:</b> <span style="text-transform: uppercase">{{$tt->hotennk}}</span></td></tr>
                <tr><td colspan="6">Giấy tờ tùy thân: ..{{$tt->loaigiaytonk}}- {{$tt->sogiaytonk}}- ngày cấp {{getDayVn($tt->ngaycapgtnk)}}- nơi cấp {{$tt->noicapgtnk}}..</td></tr>
                <tr><td colspan="6"><b>Họ, chữ đệm, tên, chức vụ người ký Giấy khai sinh/Trích lục ghi vào sổ hộ tịch việc khai sinh: {{$tt->nguoiky}} - {{$tt->chucvu}}</b></td></tr>
                <tr style="text-align: center">
                    <td colspan="3" style="width: 50%"><b>Người đi khai sinh</b></td>
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
                    <td>Đúng hạn</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->dunghanquahan == 'Đúng hạn' ? 'X' : ''}}</span></td>
                </tr>
                <tr>
                    <td>Quá hạn</td>
                <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->dunghanquahan == 'Quá hạn' ? 'X' : ''}}</span></td>
                </tr>
                <tr>
                    <td>Đăng ký lại</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->pldangky == 'Đăng ký lại' ? 'X' : ''}}</span></td>
                </tr>
                <tr>
                    <td>Trẻ chưa xác định được cha mẹ</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->plkhaisinh == 'Khai sinh trẻ chưa xác định cha mẹ' ? 'X' : ''}}</span></td>
                </tr>
                <tr>
                    <td>Trẻ bị bỏ rơi</td>
                    <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$tt->plkhaisinh == 'Khai sinh trẻ bị bỏ rơi' ? 'X' : ''}}</span></td>
                </tr>
                <tr>
                    <td>Ghi vào sổ hộ tịch việc khai sinh</td>
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
@endforeach
<p style="page-break-before: always">

</body>
</html>