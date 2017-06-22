<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
</head>
<body style="font-size: 16px; width:99%;">
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr style="vertical-align: top">
        <td style="width: 30%">
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
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td>Số    /TLKS-BS</td>
        <td>………, ngày….…tháng ……năm 20....</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TRÍCH LỤC KHAI SINH</b></td>
    </tr>
    <tr>
        <td><u>(BẢN SAO)</u></td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên: </b> <span style="text-transform: uppercase">{{$model->hotenks}}</span></td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: ..{{getDayVn($model->ngaysinhks)}}..ghi bằng chữ: ..{{$model->ngaysinhksbangchu}}..</td>
    </tr>
    <tr>
        <td>Giới tính: ..{{$model->gioitinhks}}..</td>
        <td>Dân tộc: ..{{$model->dantocks}}..</td>
        <td>Quốc tịch: ..{{$model->quoctichks}}..</td>
    </tr>
    <tr>
        <td colspan="3">Nơi sinh: ..{{$model->noisinh}}..</td>
    </tr>
    <tr>
        <td colspan="3">Quê quán: ..{{$model->quequanks}}..</td>
    </tr>
    <tr>
        <td colspan="3">Số định danh cá nhân: ..{{$model->sodinhdanhcanhan}}..</td>
    </tr>
    <!--Thông tin mẹ-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người mẹ: </b> <span style="text-transform: uppercase">{{$model->hotenme}}</span></td>
    </tr>
    <tr>
        <td>Năm sinh: ..{{date('Y',strtotime($model->ngaysinhme))}}..</td>
        <td>Dân tộc: ..{{$model->dantocme}}..</td>
        <td>Quốc tịch: ..{{$model->quoctichme}}..</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư chú: ..{{$model->diachime}}..</td>
    </tr>
    <!--Thông tin cha-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người cha: </b> <span style="text-transform: uppercase">{{$model->hotencha}}</span></td>
    </tr>
    <tr>
        <td>Năm sinh: ..{{date('Y',strtotime($model->ngaysinhcha))}}..</td>
        <td>Dân tộc: ..{{$model->dantocme}}..</td>
        <td>Quốc tịch: ..{{$model->quoctichme}}..</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư chú: ..{{$model->diachicha}}..</td>
    </tr>
    <!--Thông tin cha-->
    <tr>
        <td colspan="3">Đăng ký khai sinh tại: ..{{$xa}}..</td>
    </tr>
    <tr>
        <td colspan="3">Số:..{{$model->sokhaisinh}}.., ngày ..{{getDayVn($model->ngaydangky)}}..</td>
    </tr>
    <tr>
        <td colspan="3"><b>Ghi chú:</b></td>
    </tr>
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