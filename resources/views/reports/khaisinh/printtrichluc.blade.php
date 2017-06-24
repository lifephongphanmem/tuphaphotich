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
                @if($model->level == 'T')
                <tr>
                    <td colspan="3"><span style="text-transform: uppercase">{{$tinh}}</span></td>
                </tr>
                @elseif($model->level == 'H')
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">{{$tinh}}</span></td>
                    </tr>
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">{{$huyen}}</span></td>
                    </tr>
                @else
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">{{$tinh}}</span></td>
                    </tr>
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">{{$huyen}}</span></td>
                    </tr>
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">{{$xa}}</span></td>
                    </tr>
                @endif

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
        <td>Số ..{{$model->sohotich}}../TLKS-BS</td>
        <td>………, ngày..{{date('d',strtotime($model->ngaynhap))}}..tháng..{{date('m',strtotime($model->ngaynhap))}}..năm ..{{date('Y',strtotime($model->ngaynhap))}}..</td>
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
        <td colspan="3"><b>Họ, chữ đệm, tên: </b> <span style="text-transform: uppercase">{{$modeltt->hotenks}}</span></td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: ..{{getDayVn($modeltt->ngaysinhks)}}..ghi bằng chữ: ..{{$modeltt->ngaysinhksbangchu}}..</td>
    </tr>
    <tr>
        <td>Giới tính: ..{{$modeltt->gioitinhks}}..</td>
        <td>Dân tộc: ..{{$modeltt->dantocks}}..</td>
        <td>Quốc tịch: ..{{$modeltt->quoctichks}}..</td>
    </tr>
    <tr>
        <td colspan="3">Nơi sinh: ..{{$modeltt->noisinh}}..</td>
    </tr>
    <tr>
        <td colspan="3">Quê quán: ..{{$modeltt->quequanks}}..</td>
    </tr>
    <tr>
        <td colspan="3">Số định danh cá nhân: ..{{$modeltt->sodinhdanhcanhan}}..</td>
    </tr>
    <!--Thông tin mẹ-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người mẹ: </b> <span style="text-transform: uppercase">{{$modeltt->hotenme}}</span></td>
    </tr>
    <tr>
        <td>Năm sinh: ..{{date('Y',strtotime($modeltt->ngaysinhme))}}..</td>
        <td>Dân tộc: ..{{$modeltt->dantocme}}..</td>
        <td>Quốc tịch: ..{{$modeltt->quoctichme}}..</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư chú: ..{{$modeltt->diachime}}..</td>
    </tr>
    <!--Thông tin cha-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người cha: </b> <span style="text-transform: uppercase">{{$modeltt->hotencha}}</span></td>
    </tr>
    <tr>
        <td>Năm sinh: ..{{date('Y',strtotime($modeltt->ngaysinhcha))}}..</td>
        <td>Dân tộc: ..{{$modeltt->dantocme}}..</td>
        <td>Quốc tịch: ..{{$modeltt->quoctichme}}..</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư chú: ..{{$modeltt->diachicha}}..</td>
    </tr>
    <!--Thông tin cha-->
    <tr>
        <td colspan="3">Đăng ký khai sinh tại: ..{{$noidkks}}..</td>
    </tr>
    <tr>
        <td colspan="3">Số:..{{$modeltt->so}}.., ngày ..{{getDayVn($modeltt->ngaydangky)}}..</td>
    </tr>
    <tr>
        <td colspan="3"><b>Ghi chú:</b>..{{$model->ghichu}}..</td>
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