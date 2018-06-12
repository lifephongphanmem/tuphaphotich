<!DOCTYPE html>
<html>
<head>
    <title>In tờ khai</title>
    <link rel="shortcut icon" href="http://tuphaphotich.vn/public/images/LIFESOFT.png" type="image/x-icon">
</head>
<body style="font-size: 16px; width:99%;">
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr style="vertical-align: top">
        <td style="vertical-align: top">
            <table style="text-align: center;width: 100%;vertical-align: top" >
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

<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TỜ KHAI GHI VÀO SỔ HỘ TỊCH VIỆC KHAI SINH</b></td>
    </tr>
    <tr>
        <td>Kính gửi: {{$tencq}}</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người yêu cầu: </b> <span style="text-transform: uppercase">{{$model->hotennk}}</span></td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân: {{$model->loaigiaytonk}} số {{$model->sogiaytonk}} do {{$model->noicapgtnk}} cấp ngày {{getDayVn($model->ngaycapgtnk)}} </td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$model->diachink}}</td>
    </tr>
    <tr>
        <td colspan="3">Quan hệ với người khai sinh: {{$model->quanhenk}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Đề nghị ghi vào sổ hộ tịch việc khai sinh cho người có tên dưới đây: </b></td>
    </tr>
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên: </b> <span style="text-transform: uppercase">{{$model->hotenks}}</span></td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhks)}} ghi bằng chữ: {{$model->ngaysinhksbangchu}}</td>
    </tr>
    <tr>
        <td>Nơi sinh: {{$model->noisinh}}</td>
    </tr>
    <tr>
        <td>Giới tính: {{$model->gioitinhks}}</td>
        <td>Dân tộc: {{$model->dantocks}}</td>
        <td>Quốc tịch: {{$model->quoctichks}}</td>
    </tr>
    <tr>
        <td colspan="3">Quê quán: {{$model->quequanks}}</td>
    </tr>
    <!--Thông tin mẹ-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người mẹ: </b> <span style="text-transform: uppercase">{{$model->hotenme}}</span></td>
    </tr>
    <tr>
        <td>Năm sinh: {{$model->ngaysinhme}}</td>
        <td>Dân tộc: {{$model->dantocme}}</td>
        <td>Quốc tịch: {{$model->quoctichme}}</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$model->diachime}}</td>
    </tr>
    <!--Thông tin cha-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người cha: </b> <span style="text-transform: uppercase">{{$model->hotencha}}</span></td>
    </tr>
    <tr>
        <td>Năm sinh: {{$model->ngaysinhcha}}</td>
        <td>Dân tộc: {{$model->dantoccha}}</td>
        <td>Quốc tịch: {{$model->quoctichcha}}</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$model->diachicha}}</td>
    </tr>
    <tr>
        <td colspan="3">Được đăng ký khai sinh tại: </td>
    </tr>
    <tr>
        <td >Giấy khai sinh số: </td>
        <td >Cấp ngày: </td>
    </tr>
    <tr>
        <td colspan="3">
            <p>
                Tôi cam đoan những nội dung đề nghị đăng ký khai sinh trên đây là đúng sự thật, được sự thỏa thuận nhất trí của các bên liên quan
                theo quy định của pháp luật.<br>
                Tôi chịu hoàn toàn trách nhiệm trước pháp luật về nội dung cam đoan của mình
            </p>
        </td>
    </tr>
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
</html><!DOCTYPE html>
<html>
<head>
    <title>In tờ khai</title>
    <link rel="shortcut icon" href="http://tuphaphotich.vn/public/images/LIFESOFT.png" type="image/x-icon">
</head>
<body style="font-size: 16px; width:99%;">
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr style="vertical-align: top">
        <td style="vertical-align: top">
            <table style="text-align: center;width: 100%;vertical-align: top" >
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

<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TỜ KHAI GHI VÀO SỔ HỘ TỊCH VIỆC KHAI SINH</b></td>
    </tr>
    <tr>
        <td>Kính gửi: {{$tencq}}</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người yêu cầu: </b> <span style="text-transform: uppercase">{{$model->hotennk}}</span></td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân: {{$model->loaigiaytonk}} số {{$model->sogiaytonk}} do {{$model->noicapgtnk}} cấp ngày {{getDayVn($model->ngaycapgtnk)}} </td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$model->diachink}}</td>
    </tr>
    <tr>
        <td colspan="3">Quan hệ với người khai sinh: {{$model->quanhenk}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Đề nghị ghi vào sổ hộ tịch việc khai sinh cho người có tên dưới đây: </b></td>
    </tr>
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên: </b> <span style="text-transform: uppercase">{{$model->hotenks}}</span></td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhks)}} ghi bằng chữ: {{$model->ngaysinhksbangchu}}</td>
    </tr>
    <tr>
        <td>Nơi sinh: {{$model->noisinh}}</td>
    </tr>
    <tr>
        <td>Giới tính: {{$model->gioitinhks}}</td>
        <td>Dân tộc: {{$model->dantocks}}</td>
        <td>Quốc tịch: {{$model->quoctichks}}</td>
    </tr>
    <tr>
        <td colspan="3">Quê quán: {{$model->quequanks}}</td>
    </tr>
    <!--Thông tin mẹ-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người mẹ: </b> <span style="text-transform: uppercase">{{$model->hotenme}}</span></td>
    </tr>
    <tr>
        <td>Năm sinh: {{$model->ngaysinhme}}</td>
        <td>Dân tộc: {{$model->dantocme}}</td>
        <td>Quốc tịch: {{$model->quoctichme}}</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$model->diachime}}</td>
    </tr>
    <!--Thông tin cha-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người cha: </b> <span style="text-transform: uppercase">{{$model->hotencha}}</span></td>
    </tr>
    <tr>
        <td>Năm sinh: {{$model->ngaysinhcha}}</td>
        <td>Dân tộc: {{$model->dantoccha}}</td>
        <td>Quốc tịch: {{$model->quoctichcha}}</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$model->diachicha}}</td>
    </tr>
    <tr>
        <td colspan="3">Được đăng ký khai sinh tại: </td>
    </tr>
    <tr>
        <td >Giấy khai sinh số: </td>
        <td >Cấp ngày: </td>
    </tr>
    <tr>
        <td colspan="3">
            <p>
                Tôi cam đoan những nội dung đề nghị đăng ký khai sinh trên đây là đúng sự thật, được sự thỏa thuận nhất trí của các bên liên quan
                theo quy định của pháp luật.<br>
                Tôi chịu hoàn toàn trách nhiệm trước pháp luật về nội dung cam đoan của mình
            </p>
        </td>
    </tr>
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