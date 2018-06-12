<!DOCTYPE html>
<html>
<head>
    <title>In giấy khai sinh bản sao</title>
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
                    <td><b>Độc lập - Tự do - Hạnh phúc</b></td>
                </tr>
                <tr><td><label style="position : relative; top:-20px;left:0px;">_________________________</label></td></tr>
            </table>
        </td>
    </tr>
</table>

<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TỜ KHAI ĐĂNG KÝ KHAI SINH</b></td>
    </tr>
    <tr>
        <td>Kính gửi: @if(session('admin')->level == 'H' && session('admin')->name == "Phòng tư Pháp huyện Đồng Văn")
                {{"Phòng tư Pháp huyện Đồng Văn"}}
            @elseif(session('admin')->level == 'H' && session('admin')->name == "Phòng tư Pháp huyện Yên Minh")
                {{"Phòng Tư Pháp Huyện Yên Minh"}} @else {{$tencq}} @endif</td>
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
        <td colspan="3">Quan hệ với người được khai sinh: {{$model->quanhenk}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Đề nghị cơ quan đăng ký khai sinh cho người dưới đây: </b></td>
    </tr>
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên: </b> <span style="text-transform: uppercase">{{$model->hotenks}}</span></td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhks)}}&nbsp;&nbsp;&nbsp;&nbsp;ghi bằng chữ: {{$model->ngaysinhksbangchu}}</td>
    </tr>
    <tr>
        <td colspan="3">Nơi sinh: {{$model->noisinh}}</td>
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
        <td>Dân tộc: @if($model->hotencha == '')  @else{{$model->dantoccha}} @endif</td>
        <td>Quốc tịch:  @if($model->hotencha == '')  @else{{$model->quoctichcha}} @endif</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$model->diachicha}}</td>
    </tr>
    <tr>
        <td colspan="3">
            <p>
                Tôi cam đoan nội dung đề nghị đăng ký khai sinh trên đây là đúng sự thật, được sự thỏa thuận nhất trí của các bên liên quan
                theo quy định của pháp luật.<br>
                Tôi chịu hoàn toàn trách nhiệm trước pháp luật về nội dung cam đoan của mình.
            </p>
        </td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="30%"></td>
        <td>
            <table>
                <tr>
                    <td><i>Làm tại:
                        @if(session('admin')->level == 'H' && session('admin')->name == 'Phòng Tư Pháp Huyện Yên Minh') {{"Phòng Tư Pháp Huyện Yên Minh"}}
                        @elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn') {{"Phòng Tư Pháp Huyện Đồng Văn"}}
                        @else{{$xa}}@endif, ngày {{date('d',strtotime($model->ngaydangky))}} tháng {{date('m',strtotime($model->ngaydangky))}} năm  {{date('Y',strtotime($model->ngaydangky))}}
                        </i>
                    </td></tr>
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