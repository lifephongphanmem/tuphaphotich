<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
</head>
<body style="font-size: 16px; width:99%;">
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: 30px;text-align: center">
    <tr style="vertical-align: top">
        <td style="width: 30%">
            <table style="text-align: center;width: 100%">
                @if($model->level == 'T')
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase"><u>TỈNH {{$tinh}}</u></span></td>
                    </tr>
                @elseif($model->level == 'H')
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">TỈNH {{$tinh}}</span></td>
                    </tr>
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase"><u>{{$huyen}}</u></span></td>
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
        <td>Số ..{{$model->so}}../TLKT-BS</td>
        <td>@if($xa=="Thị Trấn Yên Minh"){{$xa}}
            @elseif($xa=="tpym") {{"Phòng Tư Pháp Huyện Yên Minh"}}
            @elseif($xa=="tpdv") {{"Phòng Tư Pháp Huyện Đồng Văn"}}
            @else{{$tenxa}}@endif, ngày {{date('d',strtotime($model->ngaydangkykt))}} tháng {{date('m',strtotime($model->ngaydangkykt))}} năm  {{date('Y',strtotime($model->ngaydangkykt))}}
        </td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TRÍCH LỤC KHAI TỬ</b></td>
    </tr>
    <tr>
        <td><u>(BẢN SAO)</u></td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên: </b> <span style="text-transform: uppercase">{{$model->hoten}}</span></td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinh)}}</td>
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
        <td colspan="3">Đã chết vào lúc: {{$model->giotu}} giờ {{$model->phuttu}} phút, ngày: {{getDayVn($model->ngaychet)}}</td>
    </tr>
    <tr>
        <td colspan="3">Nơi chết: {{$model->noichet}}</td>
    </tr>
    <tr>
        <td colspan="3">Đã được đăng ký khai tử tại: {{$model->noidangkykt}}</td>
    </tr>
    <tr>
        <td>Số: {{$model->so}} </td>
        <td>Ngày: {{getDayVn($model->ngaydangkykt)}} </td>
    </tr>
    <tr>
        <td colspan="3">Ghi chú: {{$model->ghichukt}}</td>
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
                    <td style="vertical-align: bottom"><b>{{$model->nguoikygct}}</b></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>