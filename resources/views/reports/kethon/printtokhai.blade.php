<!DOCTYPE html>
<html>
<head>
    <title>In tờ khai đăng ký kết hôn</title>
    <link rel="shortcut icon" href="http://tuphaphotich.vn/public/images/LIFESOFT.png" type="image/x-icon">
</head>
<body style="font-size: 20px; width:99%;">
<table width="75%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr style="vertical-align: top">
        <td style="vertical-align: top">
            <table border="0" style="text-align: center;width: 100%;vertical-align: top" >
                <tr>
                    <td><b>CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM</b></td>
                </tr>
                <tr>
                    <td><b>Độc lập - Tự do - Hạnh phúc</b></td>
                </tr>
                <tr><td><label style="position : relative; top:-18px;left:0px;">_________________________</label></td></tr>
            </table>
        </td>
    </tr>
</table>
<table width="75%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td style="font-size: 22px"><b>TỜ KHAI ĐĂNG KÝ KẾT HÔN</b></td>
    </tr>
    <tr>
        <td colspan="3">
            Kính gửi: @if(session('admin')->level == 'H' && session('admin')->name == "Phòng tư Pháp huyện Đồng Văn")
                {{"Phòng tư Pháp huyện Đồng Văn"}}
            @elseif(session('admin')->level == 'H' && session('admin')->name == "Phòng tư Pháp huyện Yên Minh")
                {{"Phòng Tư Pháp Huyện Yên Minh"}} @else {{$tencq}} @endif
        </td>
    </tr>
</table>
<div style="height: 50px">

</div>
<table width="95%" border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: left">
    <tr >
        <td style=" border-right: 1px solid black; text-align: center" ><b>Thông tin</b></td>
        <td style=" border-right: 1px solid black; text-align: center" ><b>Bên nữ</b></td>
        <td style=" text-align: center"><b>Bên nam</b></td>
    </tr>
    <tr>
        <td style="width:28%; border-right: 1px solid black; border-top: 1px solid black;" >Họ, chữ đệm, tên</td>
        <td style="width:36%; border-right: 1px solid black; border-top: 1px solid black;text-align: center" >{{$model->hotenvo}}</td>
        <td style="width:36%; border-top: 1px solid black;text-align: center">{{$model->hotenchong}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Ngày, tháng, năm, sinh</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;text-align: center" >{{getDayVn($model->ngaysinhvo)}}</td>
        <td style="width:39%; border-top: 1px solid black;text-align: center">{{getDayVn($model->ngaysinhchong)}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Dân tộc</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;text-align: center" >{{$model->dantocvo}}</td>
        <td style="width:39%; border-top: 1px solid black;text-align: center">{{$model->dantocchong}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Quốc tịch</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;text-align: center" >{{$model->quoctichvo}}</td>
        <td style="width:39%; border-top: 1px solid black;text-align: center">{{$model->quoctichchong}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Nơi cư trú</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;text-align: center" >{{$model->diachivo}}</td>
        <td style="width:39%; border-top: 1px solid black;text-align: center">{{$model->diachichong}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Giấy tờ tùy thân</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;text-align: center" >{{$model->loaigiaytovo}} số: {{$model->sogiaytovo}}</td>
        <td style="width:39%; border-top: 1px solid black;text-align: center">{{$model->loaigiaytochong}} số: {{$model->sogiaytochong}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Kết hôn lần thứ mấy</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;text-align: center" >{{$model->lankhvo}}</td>
        <td style="width:39%; border-top: 1px solid black;text-align: center">{{$model->lankhchong}}</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto">
    <tr>
        <td><p>Chúng tôi cam đoan những lời khai trên đây là đúng sự thật, việc kết hôn của chúng tôi là tự nguyện, không vi phạm quy định của Luật hôn nhân và gia đình Việt Nam.
                Chúng tôi chịu hoàn toàn trách nhiệm trước pháp luật về cam đoan của mình.
                Đề nghị Quý cơ quan đăng ký.
            </p></td>
    </tr>
</table>
<table style="margin:auto; text-align: left;">
    <tr>
        <td width="30%"></td>
        <td >Làm tại: @if(session('admin')->level == 'H' && session('admin')->name == 'Phòng Tư Pháp Huyện Yên Minh') {{"Phòng Tư Pháp Huyện Yên Minh"}}
            @elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn') {{"Phòng Tư Pháp Huyện Đồng Văn"}}
            @else {{$xa}}
            @endif, ngày {{date('d',strtotime($model->ngaydangky))}} tháng {{date('m',strtotime($model->ngaydangky))}} năm  {{date('Y',strtotime($model->ngaydangky))}}</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="30%"></td>
        <td width="30%">
            <table>
                <tr><td><b>Bên nữ</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td></tr>
                <tr style="height: 100px">

                </tr>
            </table>
        </td>
        <td width="30%">
            <table>
                <tr><td><b>Bên nam</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td></tr>
                <tr style="height: 100px">

                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>