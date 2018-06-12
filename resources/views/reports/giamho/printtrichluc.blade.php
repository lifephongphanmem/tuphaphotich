<!DOCTYPE html>
<html>
<head>
    <title>In trích lục khai tử bản sao</title>
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
        <td>Số {{$modeltt->soso}}/TLGH-BS</td>
        <td>@if($xa=="Thị Trấn Yên Minh"){{$xa}}@else{{$tenxa}}@endif, ngày {{date('d',strtotime($model->ngaycap))}} tháng {{date('m',strtotime($model->ngaycap))}} năm  {{date('Y',strtotime($model->ngaycap))}}</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TRÍCH LỤC ĐĂNG KÝ GIÁM HỘ</b></td>
    </tr>
    <tr><td>(BẢN SAO)</td></tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3"><b>Người giám hộ: </b> </td>
    </tr>
    <tr>
        <td colspan="3">Họ chữ đệm tên: {{$modeltt->hotenngh1}}</td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($modeltt->ngaysinhngh1)}}</td>
    </tr>
    <tr>
        <td>Giới tính: {{$modeltt->gioitinhngh1}}</td>
        <td>Dân tộc: {{$modeltt->dantocngh1}}</td>
        <td>Quốc tịch: {{$modeltt->quoctichngh1}}</td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân: {{$modeltt->loaigiaytongh1}} số {{$modeltt->sogiaytongh1}} nơi cấp {{$modeltt->noicapgtngh1}} ngày cấp {{$modeltt->ngaycapgtngh1}}</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$modeltt->tamtrutamvangngh1}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Người được giám hộ: </b> </td>
    </tr>
    <tr>
        <td colspan="3">Họ chữ đệm tên: {{$modeltt->hotenndgh}}</td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($modeltt->ngaysinhndgh)}}</td>
    </tr>
    <tr>
        <td>Giới tính: {{$modeltt->gioitinhndgh}}</td>
        <td>Dân tộc: {{$modeltt->dantocndgh}}</td>
        <td>Quốc tịch: {{$modeltt->quoctichndgh}}</td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân: {{$modeltt->loaigiaytondgh}} số {{$modeltt->sogiaytondgh}} nơi cấp {{$modeltt->noicapgtndgh}} ngày cấp {{$modeltt->ngaycapgtndgh}} </td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$modeltt->tamtrutamvangndgh}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Đã đăng ký giám hộ tại: {{$xa}}</b></td>
    </tr>
    <tr>
        <td colspan="3">số {{$modeltt->soso}} ngày {{getDayVn($modeltt->ngaydangky)}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Ghi chú: {{$modeltt->ghichu}}</b></td>
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