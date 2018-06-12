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
                            <td colspan="3"><span style="text-transform: uppercase">UBND XÃ {{$tenxa}}</span></td>
                            <a style="position : relative; top:70px;">__________</a>
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
        <td>Số: {{$model->so}}/TLKS-BS</td>
        <td>@if($xa=="Thị Trấn Yên Minh"){{$xa}}
            @elseif($xa=="tpym") {{"Phòng Tư Pháp Huyện Yên Minh"}}
            @elseif($xa=="tpdv") {{"Phòng Tư Pháp Huyện Đồng Văn"}}
            @else{{$tenxa}}@endif, ngày {{date('d',strtotime($model->ngaydangky))}} tháng {{date('m',strtotime($model->ngaydangky))}} năm  {{date('Y',strtotime($model->ngaydangky))}}
        </td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TRÍCH LỤC KHAI SINH</b></td>
    </tr>
    <tr>
        <td>(BẢN SAO)</td>
        <a style="position : relative; top:52px; left:323px">________</a>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên: </b> <span style="text-transform: uppercase"><b>{{$model->hotenks}}</b></span></td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhks)}} ghi bằng chữ: {{$model->ngaysinhksbangchu}}</td>
    </tr>
    <tr>
        <td>Giới tính:<a  style="position : relative; left: 50px;">{{$model->gioitinhks}}</a></td>
        <td>Dân tộc: <a  style="position : relative; left: 50px;">{{$model->dantocks}}</a></td>
        <td>Quốc tịch: <a style="position : relative; left: 50px;">{{$model->quoctichks}}</a></td>
    </tr>
    <tr>
        <td colspan="3">Nơi sinh: {{$model->noisinh}}</td>
    </tr>
    <tr>
        <td colspan="3">Quê quán: {{$model->quequanks}}</td>
    </tr>
    <tr>
        <td colspan="3">Số định danh cá nhân: {{$model->sodinhdanhcanhan}}</td>
    </tr>
    <!--Thông tin mẹ-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người mẹ: </b> <span style="text-transform: uppercase"><b>{{$model->hotenme}}</b></span></td>
    </tr>
    <tr>
        <td>Năm sinh: <a  style="position : relative; left: 50px;">{{$model->ngaysinhme}}</a></td>
        <td>Dân tộc: <a  style="position : relative; left: 50px;">{{$model->dantocme}}</a></td>
        <td>Quốc tịch: <a  style="position : relative; left: 50px;">{{$model->quoctichme}}</a></td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$model->diachime}}</td>
    </tr>
    <!--Thông tin cha-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người cha: </b> <span style="text-transform: uppercase"><b>{{$model->hotencha}}</b></span></td>
    </tr>
    <tr>
        <td>Năm sinh: <a  style="position : relative; left: 50px;">{{$model->ngaysinhcha}}</a></td>
        <td>Dân tộc: <a  style="position : relative; left: 50px;">{{$model->dantoccha}}</a></td>
        <td>Quốc tịch: <a  style="position : relative; left: 50px;">{{$model->quoctichcha}}</a></td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$model->diachicha}}</td>
    </tr>
    <!--Thông tin cha-->
    <tr>
        <td colspan="3">Đăng ký khai sinh tại:  @if($xa=="Thị Trấn Yên Minh")
                {{$xa}}
            @elseif($xa=="tpym")
                Phòng Tư Pháp Huyện Yên Minh
            @elseif($xa=="tpdv")
                Phòng Tư Pháp Huyện Đồng Văn
            @else
                UBND xã {{$tenxa}}
        @endif
    </tr>
    <tr>
        <td colspan="3">Số {{$model->so}}, ngày {{getDayVn($model->ngaydangky)}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Ghi chú:</b>{{$model->ghichu}}</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="50%"></td>
        <td>
            <table>
                <tr><td><b>NGƯỜI KÝ TRÍCH LỤC</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên, chức vụ, đóng dấu)</i></td></tr>
                <tr style="height: 130px">
                    <td style="vertical-align: bottom"><b>{{$model->nguoiky}}</b></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>