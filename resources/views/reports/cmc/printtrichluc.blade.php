<!DOCTYPE html>
<html>
<head>
    <title>In trích lục đăng ký nhận cha mẹ con (Bản sao)</title>
    <link rel="shortcut icon" href="http://hotich.dev/images/LIFESOFT.png" type="image/x-icon">
</head>
<body style="font-size: 16px; width:99%;">
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr style="vertical-align: top">
        <td style="width: 30%">
            <table style="text-align: center;width: 100%">
                @if($model->level == 'T')
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">TỈNH {{$tinh}}</span></td>
                    </tr>
                @elseif($model->level == 'H')
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">TỈNH {{$tinh}}</span></td>
                    </tr>
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">{{$huyen}}</span></td>
                    </tr>
                @else
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">TỈNH {{$tinh}}</span></td>
                    </tr>
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">{{$huyen}}</span></td>
                    </tr>
                    <tr>
                        @if($xa=="Thị Trấn Yên Minh")
                            <td colspan="3"><span style="text-transform: uppercase"><u>{{$xa}}</u></span></td>
                        @else
                            <td colspan="3"><span style="text-transform: uppercase"><u>XÃ {{$tenxa}}</u></span></td>
                        @endif
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
        <td>Số {{$modeltt->soso}}/TLCMC-BS</td>
        <td> @if($xa=="Thị Trấn Yên Minh"){{$xa}}@else{{$tenxa}}@endif, ngày {{date('d',strtotime($model->ngaycap))}} tháng {{date('m',strtotime($model->ngaycap))}} năm  {{date('Y',strtotime($model->ngaycap))}} </td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TRÍCH LỤC ĐĂNG KÝ NHẬN ...</b></td>
    </tr>
    <tr>
        <td>(BẢN SAO)</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3"><b>Xác nhận đăng ký việc nhận ……… giữa: </b> </td>
    </tr>
    <tr>
        <td colspan="3">Họ chữ đệm tên: {{$modeltt->hotennn}}</td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($modeltt->ngaysinhnn)}}</td>
    </tr>
    <tr>
        <td>Giới tính: {{$modeltt->gioitinhnn}}</td>
        <td>Dân tộc: {{$modeltt->dantocnn}}</td>
        <td>Quốc tịch: {{$modeltt->quoctichnn}}</td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân: {{$modeltt->loaigiaytonn}} số {{$modeltt->sogiaytonn}} nơi cấp {{$modeltt->noicapgtnn}} ngày cấp {{$model->ngaycapgtnn}}</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$modeltt->tamtrutamvangnn}} </td>
    </tr>
    <tr>
        <td colspan="3"><b>Và</b></td>
    </tr>
    <tr>
        <td colspan="3">Họ chữ đệm tên con: {{$modeltt->hotenndn}}</td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($modeltt->ngaysinhndn)}}</td>
    </tr>
    <tr>
        <td>Giới tính: {{$modeltt->gioitinhndn}}</td>
        <td>Dân tộc: {{$modeltt->dantocndn}}</td>
        <td>Quốc tịch: {{$modeltt->quoctichndn}}</td>
    </tr>
    <tr>
        <td colspan="3">Giấy khai sinh/Giấy tờ tùy thân: {{$modeltt->loaigiaytondn}}</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$modeltt->tamtrutamvangndn}}</td>
    </tr>
    <tr>
        <td colspan="3">Đã đăng ký nhận: ... tại {{$xa}}</td>
    </tr>
    <tr>
        <td colspan="3">... số ... ngày ...</td>
    </tr>
    <tr>
        <td><b>Ghi chú:</b></td>
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
                    <td style="vertical-align: bottom"><b></b></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>