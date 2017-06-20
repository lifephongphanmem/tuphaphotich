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
                    <td colspan="3"><span style="text-transform: uppercase">{{$tinh}}</span></td>
                </tr>
                <tr>
                    <td colspan="3"><span style="text-transform: uppercase">{{$huyen}}</span></td>
                </tr>
                <tr>
                    <td colspan="3"><span style="text-transform: uppercase">{{$xa}}</span></td>
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
        <td>Số    /TLKH-BS</td>
        <td>………, ngày….…tháng ……năm 20....</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TRÍCH LỤC KẾT HÔN</b></td>
    </tr>
    <tr>
        <td><u>(BẢN SAO)</u></td>
    </tr>
</table>
<table  width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
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
<table width="60%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr><td>Đăng ký kết hôn tại: ..{{$xa}}..</td></tr>
    <tr><td>Số:..{{$model->sokethon}}..,ngày ..{{getDayVn($model->ngaydangky)}}..</td></tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="50%"></td>
        <td>
            <table>
                <tr><td><b>NGƯỜI KÝ TRÍCH LỤC</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên, chức vụ và đóng dấu)</i></td></tr>
                <tr style="height: 100px">
                    <td style="vertical-align: bottom"><b>{{$model->nguoiky}}</b></td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>