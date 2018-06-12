<!DOCTYPE html>
<html>
<head>
    <title>In tờ khai</title>
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
                    <td><b><u>Độc lập - Tự do - Hạnh phúc</u></b></td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TỜ KHAI GHI VÀO SỔ HỘ TỊCH VIỆC KHAI TỬ</b></td>
    </tr>
    <tr>
        <td>Kính gửi: {{$tencq}}</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="2"><b>Họ, chữ đệm, tên người yêu cầu: </b> <span style="text-transform: uppercase">{{$model->hotennk}}</span></td>
    </tr>
    <tr>
        <td colspan="2">Nơi cư trú: {{$model->noicutrunk}}</td>
    </tr>
    <tr>
        <td colspan="2">Giấy tờ tùy thân: CMND số {{$model->sogiaytonk}} do CA {{$model->noicapnk}} cấp ngày {{getDayVn($model->ngaycapnk)}} </td>
    </tr>
    <tr>
        <td colspan="2">Quan hệ với người đã chết: {{$model->	quanhe}}</td>
    </tr>
    <tr>
        <td colspan="2"><b>Đề nghị cơ quan đăng ký khai tử cho người có tên dưới đây: </b></td>
    </tr>
    <tr>
        <td>Họ, chữ đệm, tên: <span style="text-transform: uppercase">{{$model->hoten}}</span></td>
        <td>Giới tính: {{$model->gioitinh}}</td>
    </tr>
    <tr>
        <td colspan="2">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinh)}}</td>
    </tr>
    <tr>
        <td>Dân tộc: {{$model->dantoc}}</td>
        <td>Quốc tịch: {{$model->quoctich}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi cư trú cuối cùng: {{$model->thuongtru}}</td>
    </tr>
    <tr>
        <td colspan="2">Giấy tờ tùy thân: {{$model->loaigiayto}} số: {{$model->sogiayto}}</td>
    </tr>
    <tr>
        <td colspan="2">Đã chết vào lúc {{$model->giotu}} giờ {{$model->phuttu}} phút, ngày {{getDayVn($model->ngaychet)}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi chết: {{$model->noichet}}</td>
    </tr>
    <tr>
        <td colspan="2">Nguyên nhân chết: {{$model->nguyennhan}}</td>
    </tr>
    <tr>
        <td colspan="2">Theo</td>
    </tr>
    <tr>
        <td colspan="2">số ... do ... cấp ngày ... tháng ... năm ...</td>
    </tr>
    <tr>
        <td colspan="2">Tài liệu gửi kèm theo tờ khai: ....</td>
    </tr>
    <tr>
        <td colspan="2">Tôi cam đoan những nội dung khai trên đây là đúng sự thật và chịu trách nhiệm trước pháp luật về cam đoan của mình</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="50%"></td>
        <td>
            <table>
                <tr><td>Làm tại: {{$xa}}, ngày {{date('d',strtotime($model->ngaydangkykt))}} tháng {{date('m',strtotime($model->ngaydangkykt))}} năm  {{date('Y',strtotime($model->ngaydangkykt))}}</td></tr>
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