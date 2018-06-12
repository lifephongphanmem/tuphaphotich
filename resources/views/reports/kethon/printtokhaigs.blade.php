<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
</head>
<body style="font-size: 16px; width:99%;">
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td style="width: 40%">
            <table style="text-align: center;width: 100%">
                <tr>
                    <td colspan="3"><span style="text-transform: uppercase">TỈNH {{$tinh}}</span></td>
                </tr>
                <tr>
                    <td colspan="3"><span style="text-transform: uppercase">{{$huyen}}</span></td>
                </tr>
                <tr>
                    <td colspan="3"><span style="text-transform: uppercase">@if($xa=="Thị Trấn Yên Minh") {{$xa}} @else XÃ {{$tenxa}} @endif</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><hr></td>
                    <td></td>
                </tr>
            </table>
        </td>
        <td >
            <table style="text-align: center;width: 100%">
                <tr>
                    <td><b>CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM</b></td>
                </tr>
                <tr>
                    <td><b><u>Độc lập - Tự do - Hạnh phúc</u></b></td>
                </tr>

            </table>
        </td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td>Số {{$model->sokethon}}/TLKH-BS</td>
        <td>@if($xa=="Thị Trấn Yên Minh") {{$xa}} @else Xã {{$tenxa}} @endif, ngày {{date('d',strtotime($model->ngaycap))}}.. tháng ..{{date('m',strtotime($model->ngaycap))}}.. năm ..{{date('Y',strtotime($model->ngaycap))}}</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TỜ KHAI GHI CHÚ KẾT HÔN</b></td>
    </tr>
    <tr>
        <td><u>(BẢN SAO)</u></td>
    </tr>
</table>
<table  width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td>Họ, chữ đệm, tên người yêu cầu:</td>
    </tr>
    <tr>
        <td>Nơi cư trú:</td>
    </tr>
    <tr>
        <td>Giấy tờ tùy thân:</td>
    </tr>
    <tr>
        <td><b>Đề nghị cơ quan ghi vào sổ việc kết hôn sau đây:</b></td>
    </tr>
    <tr>
        <td style="width: 50%">
            <table>
                <tr><td><b>Họ, chữ đệm, tên vợ: </b> <br><span style="text-transform: uppercase">..{{$model->hotenvo}}..</span></td></tr>
                <tr><td>Ngày, tháng, năm sinh: ..{{getDayVn($model->ngaysinhvo)}}..</td></tr>
                <tr><td>Dân tộc: ..{{$model->dantocvo}}..</td> </tr>
                <tr><td>Quốc tịch: ..{{$model->quoctichvo}}..</td> </tr>
                <tr><td>Nơi cư trú: ..{{$model->diachivo}}..</td> </tr>
                <tr><td>Giấy tờ tùy thân: ..{{$model->loaigiaytovo}}- {{$model->sogiaytovo}}..</td> </tr>
            </table>
        </td>
        <td style="width: 50%">
            <table>
                <tr><td><b>Họ, chữ đệm, tên chồng: </b> <br><span style="text-transform: uppercase">..{{$model->hotenchong}}..</span></td></tr>
                <tr><td>Ngày, tháng, năm sinh: ..{{getDayVn($model->ngaysinhchong)}}..</td></tr>
                <tr><td>Dân tộc: ..{{$model->dantocchong}}..</td></tr>
                <tr><td>Quốc tịch: ..{{$model->quoctichchong}}..</td></tr>
                <tr><td>Nơi cư trú: ..{{$model->diachichong}}..</td></tr>
                <tr><td>Giấy tờ tùy thân: ..{{$model->loaigiaytochong}}- {{$model->sogiaytochong}}..</td> </tr>
            </table>
        </td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr><td>Đã đăng ký kết hôn tại: ..{{$xa}}..</td></tr>
    <tr><td>Số:..{{$model->sokethon}}..,ngày ..{{getDayVn($model->ngaydangky)}}..</td></tr>
    <tr><td><b>Ghi chú:</b> {{$model->ghichu}}</td></tr>
    <tr><td>Trước khi kết hôn lần này chưa từng kết hôn/đã từng kết hôn nhưng hôn nhân đã chấm dứt</td></tr>
    <tr><td>Tài liệu gửi kèm theo Tờ khai:</td></tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="50%"></td>
        <td>
            <table>
                <tr><td>Làm tại: {{$xa}}, ngày {{date('d',strtotime($model->ngaydangky))}} tháng {{date('m',strtotime($model->ngaydangky))}} năm  {{date('Y',strtotime($model->ngaydangky))}}</td></tr>
                <tr><td><b>Người yêu cầu</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td></tr>
                <tr style="height: 100px">

                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>