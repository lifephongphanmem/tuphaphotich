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
            ĐĂNG KÝ KHAI TỬ
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
    @foreach($khaitu as $key=>$kt)
    <tr>
        <td>
            Quyển số: {{$kt->quyen}}
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
                Số:..{{$kt->so}}.. Quyển..{{$kt->quyen}}..
            </td>

            <td style="text-align: right;">
                Ngày, tháng, năm đăng ký:..{{$kt->ngaydangkykt}}..
            </td>
        </tr>
    </table>
    <table width="96%" border="1" cellpadding="8" style=" text-align: left;">
        <tr>
            <td style="text-align: left; width: 70%">
                <table>
                    <tr><td colspan="6"><b>Phần ghi về người được khai tử</b></td></tr>
                    <tr><td colspan="6">Họ, chữ đệm, tên: <span style="text-transform: uppercase">{{$kt->hoten}}</span></td></tr>
                    <tr><td colspan="6">Ngày, tháng, năm sinh:  {{getDayVn($kt->ngaysinh)}}</td></tr>
                    <tr>
                        <td colspan="2">Giới tính: ..{{$kt->gioitinh}}..</td>
                        <td colspan="2">Dân tộc: ..{{$kt->dantoc}}..</td>
                        <td colspan="2">Quốc tịch: ..{{$kt->quoctich}}..</td>
                    </tr>
                    <tr><td colspan="6">Giấy tờ tùy thân: ..{{$kt->cmnd}}..</td></tr>
                    <tr>
                        <td colspan="2">Đã chết vào lúc:..{{$kt->ngaychet}}..</td>
                        <td colspan="2">{{$kt->giotu}} giờ</td>
                        <td colspan="2">{{$kt->phuttu}} phút</td>
                    </tr>
                    <tr><td colspan="6">Nơi chết: {{$kt->noichet}}</td></tr>
                    <tr><td colspan="6">Nguyên nhân chết: {{$kt->nguyennhan}}</td></tr>
                    <tr><td colspan="6">Giấy báo tử/giấy tờ thay thế Giấy báo tử số: {{$kt->giaybaotu}}</td></tr>
                    <tr>
                        <td colspan="2">Do: {{$kt->donvicapgbt}}</td>
                        <td colspan="2">Cấp ngày: {{$kt->ngaycapgbt}}</td>
                    </tr>
                    <tr><td colspan="6"><b>Người đi đăng ký khải tử</b></td></tr>
                    <tr><td colspan="6">Họ, chữ đệm, tên: {{$kt->hotennk}}</td></tr>
                    <tr><td colspan="6">Giấy tờ tùy thân: {{$kt->giaytonk}}</td></tr>
                    <tr><td colspan="6"><b>Họ, chữ đệm, tên, chức vụ người ký Trích lục khai tử: {{$kt->nguoikygct}} - {{$kt->chucvu}}</b></td></tr>
                    <tr style="text-align: center">
                        <td colspan="3" style="width: 50%"><b>Người đi khai tử</b></td>
                        <td colspan="3" style="width: 50%"><b>Người thực hiện</b></td>
                    </tr>
                    <tr style="height: 100px;text-align: center">
                        <td colspan="3" style="width: 50%;vertical-align: bottom"><b>{{$kt->hotennk}}</b></td>
                        <td colspan="3" style="width: 50%;vertical-align: bottom"><b>{{$kt->nguoithuchien}}</b></td>
                    </tr>
                </table>
            </td>

            <td style="vertical-align: top">
                <table style="padding-top: 2px; text-align: left;" cellpadding="4">
                    <tr>
                        <td>Đúng hạn</td>
                        <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$kt->phanloaikt == 'Đúng hạn' ? 'X' : ''}}</span></td>
                    </tr>
                    <tr>
                        <td>Quá hạn</td>
                        <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$kt->phanloaikt == 'Quá hạn' ? 'X' : ''}}</span></td>
                    </tr>
                    <tr>
                        <td>Đăng ký lại</td>
                        <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$kt->phanloaidk == 'Đăng ký lại' ? 'X' : ''}}</span></td>
                    </tr>
                    <tr>
                        <td>Trẻ dưới 01 tuổi</td>
                        <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$kt->phanloaituoi == 'Dưới 1 tuổi' ? 'X' : ''}}</span></td>
                    </tr>
                    <tr>
                        <td>Trẻ từ 01 tuổi đến dưới 5 tuổi</td>
                        <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center">{{$kt->phanloaituoi == 'Từ 1 tuổi đến dưới 5 tuổi' ? 'X' : ''}}</span></td>
                    </tr>
                    <tr>
                        <td>Ghi vào sổ hộ tịch việc khai tử</td>
                        <td><span  style="width: 16px; height: 16px; display: inline-block; border: 1px solid #ccc; border-radius: 2px; text-align:center"></span></td>
                    </tr>
                    <tr>
                        <p  style="text-align: center"><b>Ghi chú</b></p>
                        @foreach($thaydoi as $td)
                            @if($kt->masohoso == $td->mahs)
                                <p>- Thay đổi từ {{$td->thaydoitu}} thành {{$td->thaydoithanh}}</p>
                            @endif
                        @endforeach
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