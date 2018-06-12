<!DOCTYPE html>
<html>
<head>
    <title>In trích lục đăng ký chấm dứt giám hộ</title>
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
                        @elseif($xa=="tpym")
                            <td colspan="3"><span style="text-transform: uppercase"><u>Phòng Tư Pháp Huyện Yên Minh</u></span></td>
                        @elseif($xa=="tpdv")
                            <td colspan="3"><span style="text-transform: uppercase"><u>Phòng Tư Pháp Huyện Đồng Văn</u></span></td>
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
        <td>Số .../TLCDGH</td>
        <td>@if($xa=="Thị Trấn Yên Minh"){{$xa}}@else{{$tenxa}}@endif, ngày {{date('d',strtotime($model->ngaychamdut))}} tháng {{date('m',strtotime($model->ngaychamdut))}} năm  {{date('Y',strtotime($model->ngaychamdut))}} </td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TRÍCH LỤC ĐĂNG KÝ CHẤM DỨT GIÁM HỘ</b></td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3"><b>Người giám hộ: </b> </td>
    </tr>
    <tr>
        <td colspan="3">Họ chữ đệm tên: {{$model->hotenngh1}}</td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhngh1)}}</td>
    </tr>
    <tr>
        <td>Giới tính: {{$model->gioitinhngh1}}</td>
        <td>Dân tộc: {{$model->dantocngh1}}</td>
        <td>Quốc tịch: {{$model->quoctichngh1}}</td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân: {{$model->loaigiaytongh1}}, số {{$model->sogiaytongh1}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Người được giám hộ: </b> </td>
    </tr>
    <tr>
        <td colspan="3">Họ chữ đệm tên: {{$model->hotenndgh}}</td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhndgh)}}</td>
    </tr>
    <tr>
        <td>Giới tính: {{$model->gioitinhndgh}}</td>
        <td>Dân tộc: {{$model->dantocndgh}}</td>
        <td>Quốc tịch: {{$model->quoctichndgh}}</td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân: {{$model->loaigiaytondgh}}, số {{$model->sogiaytondgh}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Đăng ký giám hộ tại :</b> {{$xa}}</td>
    </tr>
    <tr>
        <td colspan="3">... số {{$model->soso}} ngày {{getDayVn($model->ngaydangky)}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Đã chấm dứt giám hộ.</b></td>
    </tr>
    <tr>
        <td colspan="3"><b>Lý do chấm dứt :</b> {{$model->lydochamdut}}</td>
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