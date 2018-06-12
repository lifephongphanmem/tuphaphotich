<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
</head>
<body style="font-size: 16px; width:99%;">
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td style="width: 40%">
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
        <td >
            <table style="text-align: center;width: 100%">
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
        <td>Số {{$model->sokethon}}/TLKH-BS</td>
        <td>@if($xa=="Thị Trấn Yên Minh"){{$xa}}
            @elseif($xa=="tpym") {{"Phòng Tư Pháp Huyện Yên Minh"}}
            @elseif($xa=="tpdv") {{"Phòng Tư Pháp Huyện Đồng Văn"}}
            @else{{$tenxa}}@endif, ngày {{date('d',strtotime($model->ngaydangky))}}.. tháng ..{{date('m',strtotime($model->ngaydangky))}}.. năm ..{{date('Y',strtotime($model->ngaydangky))}}</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TRÍCH LỤC KẾT HÔN</b></td>
    </tr>
    <tr>
        <td>(BẢN SAO)</td>
        <a style="position : relative; top:50px; left:323px">________</a>
    </tr>
</table>
<table  width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td style="width: 50%">
            <table>
                <tr><td><b>Họ, chữ đệm, tên vợ: </b> <br><span style="text-transform: uppercase">{{$model->hotenvo}}</span></td></tr>
                <tr><td>Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhvo)}}</td></tr>
                <tr><td>Dân tộc: {{$model->dantocvo}}</td> </tr>
                <tr><td>Quốc tịch: {{$model->quoctichvo}}</td> </tr>
                <tr><td>Nơi cư trú: {{$model->diachivo}}</td> </tr>
                <tr><td>Giấy tờ tùy thân: {{$model->loaigiaytovo}} số {{$model->sogiaytovo}} cấp ngày {{getDayVn($model->ngaycapvo)}}</td> </tr>
            </table>
        </td>
        <td style="width: 50%">
            <table>
                <tr><td><b>Họ, chữ đệm, tên chồng: </b> <br><span style="text-transform: uppercase">{{$model->hotenchong}}</span></td></tr>
                <tr><td>Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhchong)}}</td></tr>
                <tr><td>Dân tộc: {{$model->dantocchong}}</td></tr>
                <tr><td>Quốc tịch: {{$model->quoctichchong}}</td></tr>
                <tr><td>Nơi cư trú: {{$model->diachichong}}</td></tr>
                <tr><td>Giấy tờ tùy thân: {{$model->loaigiaytochong}} số {{$model->sogiaytochong}} cấp ngày {{getDayVn($model->ngaycapchong)}}</td> </tr>
            </table>
        </td>
    </tr>
</table>
<table width="60%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr><td>Đăng ký kết hôn tại: @if(session('admin')->name=="Phòng tư Pháp huyện Yên Minh")
                {{"Phòng tư Pháp huyện Yên Minh"}}
            @elseif(session('admin')->name=="Phòng tư Pháp huyện Đồng Văn")
                {{"Phòng tư Pháp huyện Đồng Văn"}}
            @else
                {{$xa}}
            @endif</td></tr>
    <tr><td>Số:{{$model->sokethon}},ngày {{getDayVn($model->ngaydangky)}}</td></tr>
    <tr><td><b>Ghi chú:</b> {{$model->ghichu}}</td></tr>
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