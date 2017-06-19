<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
</head>
<body style="font-size: 16px; width:99%;">
<div style="text-align: right">
    <span>Số: ..{{$model->sokethon}}..</span>
</div>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:120px auto auto auto">
</table>
<table  width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td style="width: 50%">
            <table>
                <tr><td><b>Họ, chữ đệm, tên vợ: </b> <span style="text-transform: uppercase">..{{$model->hotenvo}}..</span></td></tr>
                <tr><td>Ngày, tháng, năm sinh: ..{{getDayVn($model->ngaysinhvo)}}..</td></tr>
                <tr><td>Dân tộc: ..{{$model->dantocvo}}..</td> </tr>
                <tr><td>Quốc tịch: ..{{$model->quoctichvo}}..</td> </tr>
                <tr><td>Nơi cư trú: ..{{$model->diachivo}}..</td> </tr>
                <tr><td>Giấy tờ tùy thân: ..{{$model->loaigiaytovo}}- {{$model->sogiaytovo}}..</td> </tr>
            </table>
        </td>
        <td style="width: 50%">
            <table>
                <tr><td><b>Họ, chữ đệm, tên chồng: </b> <span style="text-transform: uppercase">..{{$model->hotenchong}}..</span></td></tr>
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
    <tr><td>Nơi đăng ký kết hôn: ..{{$xa}}..</td></tr>
    <tr><td>Ngày tháng đăng ký: ..{{getDayVn($model->ngaydangky)}}..</td></tr>
</table>
<table  width="95%" style="margin:auto; text-align: center;" cellspacing="0" cellpadding="8">
    <tr>
        <td width="50%">
            <table style="margin:auto; text-align: center;">
                <tr><td><b>Vợ</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td></tr>
            </table>
        </td>
        <td width="50%">
            <table style="margin:auto; text-align: center;">
                <tr><td><b>Chồng</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td></tr>
            </table>
        </td>
    </tr>
    <tr style="height: 100px">
        <td style="vertical-align: bottom"><b>{{$model->hotenvo}}</b></td>
        <td style="vertical-align: bottom"><b>{{$model->hotenchong}}</b></td>
    </tr>
</table>
<table  width="95%" style="margin:auto; text-align: center;">
    <tr>
        <td width="40%"></td>
        <td>
            <table style="margin:auto; text-align: center;">
                <tr><td><b>NGƯỜI KÝ GIẤY CHỨNG NHẬN KẾT HÔN</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên, chức vụ và đóng dấu)</i></td></tr>
            </table>
        </td>
    </tr>
    <tr style="height: 100px;text-align: center">
        <td style="width: 40%;vertical-align: bottom"><b></b></td>
        <td style=";vertical-align: bottom"><b>{{$model->nguoiky}}</b></td>
    </tr>
</table>

</body>
</html>