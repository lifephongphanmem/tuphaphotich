<!DOCTYPE html>
<html>
<head>
    <title>In trích lục khai tử bản chính</title>
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
                            <td colspan="3"><span style="text-transform: uppercase">UBND XÃ {{$tenxa}}</span></td>
                            <a style="position : relative; top:68px;">__________</a>
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
                    <td><b>Độc lập - Tự do - Hạnh phúc</b></td>
                    <a style="position : relative; top:48px;">________________________</a>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td>Số {{$model->so}}/TLKT-BS</td>
        <td>@if($xa=="Thị Trấn Yên Minh"){{$xa}}
            @elseif($xa=="tpym") {{"Phòng Tư Pháp Huyện Yên Minh"}}
            @elseif($xa=="tpdv") {{"Phòng Tư Pháp Huyện Đồng Văn"}}
            @else{{$tenxa}}@endif, ngày {{date('d',strtotime($model->ngaydangkykt))}} tháng {{date('m',strtotime($model->ngaydangkykt))}} năm  {{date('Y',strtotime($model->ngaydangkykt))}}
        </td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: 20px;text-align: center">
    <tr>
        <td><b>TRÍCH LỤC KHAI TỬ</b></td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên: </b> <span style="text-transform: uppercase">{{$model->hoten}}</span></td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh:{{getDayVn($model->ngaysinh)}}</td>
    </tr>
    <tr>
        <td>Giới tính: {{$model->gioitinh}}</td>
        <td>Dân tộc: {{$model->dantoc}}</td>
        <td>Quốc tịch: {{$model->quoctich}}</td>
    </tr>
    <tr>
        <td colspan="3">Sổ định danh cá nhân:</td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân: {{$model->loaigiayto}} số {{$model->sogiayto}}</td>
    </tr>
    <tr>
        <td colspan="3">
            <p>Đã chết vào lúc:{{$model->giotu}} giờ {{$model->phuttu}} phút, ngày: {{getDayVn($model->ngaychet)}} ghi bằng chữ:</p>
            <p> @if($model->giotu < 10){{convert_number_to_words(str_replace('0','',$model->giotu))}} giờ
                @else {{convert_number_to_words($model->giotu)}} giờ @endif
                @if($model->phuttu < 10 && 0 < $model->phuttu){{convert_number_to_words(str_replace('0','',$model->phuttu))}} phút,
                @elseif($model->phuttu > 10) {{convert_number_to_words($model->phuttu)}}  phút,@elseif($model->phuttu == 0) không phút
                @elseif($model->phuttu == 10) mười phút, @endif
                {{getDateText($model->ngaychet)}}</p>
        </td>
    </tr>
    <tr>
        <td colspan="3">Nơi chết: {{$model->noichet}}</td>
    </tr>
    <tr>
        <td colspan="3">Nguyên nhân chết: {{$model->nguyennhan}}</td>
    </tr>
    <tr>
        <td colspan="3">Giấy báo tử/Giấy tờ hợp lệ thay thế Giấy báo tử số: {{$model->giaybaotu}} do {{$model->donvicapgbt}}, cấp ngày {{getDayVn($model->ngaycapgbt)}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người đi khai tử:{{$model->hotennk}}</b></td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân:{{$model->loaigiaytonk}} số {{$model->sogiaytonk}}, do {{$model->noicapnk}} cấp ngày {{getDayVn($model->ngaycapnk)}}</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="50%"></td>
        <td>
            <table>
                <tr><td><b>NGƯỜI KÝ TRÍCH LỤC</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên, chức vụ và đóng dấu)</i></td></tr>
                <tr style="height: 150px">
                    <td style="vertical-align: bottom"><b>{{$model->nguoikygct}}</b></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>