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
        <td><b>TỜ KHAI ĐĂNG KÝ VIỆC THAY ĐỔI, CẢI CHÍNH, BỔ SUNG HỘ TỊCH, XÁC ĐỊNH LẠI DÂN TỘC</b></td>
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
        <td colspan="2">Nơi cư trú: {{$model->thuongtrunk}}</td>
    </tr>
    <tr>
        <td colspan="2">Giấy tờ tùy thân: CMND số {{$model->cmndnk}} </td>
    </tr>
    <tr>
        <td colspan="2">Quan hệ với người đề nghị được thay đổi, cải chính, xác định lại dân tộc, bổ xung hộ tịch: {{$model->quanhengntd}}</td>
    </tr>
    <tr>
        <td colspan="2"><b>Đề nghị cơ quan đăng ký việc thay đổi, xác định lại tên cho người có tên dưới đây: </b></td>
    </tr>
    <tr>
        <td>Họ, chữ đệm, tên: <span style="text-transform: uppercase">{{$model->hotenntd}}</span></td>
        <td>Giới tính: {{$model->gioitinhntd}}</td>
    </tr>
    <tr>
        <td colspan="2">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhntd)}}</td>
    </tr>
    <tr>
        <td>Dân tộc: {{$model->dantocntd}}</td>
        <td>Quốc tịch: {{$model->quoctichntd}}</td>
    </tr>
    <tr>
        <td colspan="2">Giấy tờ tùy thân: CMND {{$model->cmndntd}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi cư trú: {{$model->thuongtruntd}}</td>
    </tr>
    <tr>
        <td colspan="2">Đã đăng ký: {{$model->plgiayto}} ngày {{date('d',strtotime($khaisinh->ngaydangky))}} tháng {{date('m',strtotime($khaisinh->ngaydangky))}} năm  {{date('Y',strtotime($khaisinh->ngaydangky))}}. tại số: {{$khaisinh->so}}</td>
    </tr>
    <tr>
        <td colspan="2">Quyển số: {{$khaisinh->quyen}} của {{$tencq}}</td>
    </tr>
    <tr>
        <td colspan="2"><b>Từ: {{$model->thaydoitu}}</b></td>
    </tr>
    <tr>
        <td colspan="2"><b>Thành: {{$model->thaydoithanh}}</b></td>
    </tr>
    <tr>
        <td colspan="2"><b>Lý do: {{$model->lydo}}</b></td>
    </tr>
    <tr>
        <td colspan="2">Tôi cam đoan những nội dung khai trên đây là đúng sự thật và chịu trách nhiệm trước pháp luật về cam đoan của mình.</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="50%">
            <table>
                <tr style="height: 150px">
                    <td><p style="padding-top: 70px">Ý kiến của người được thay đổi họ, tên (nếu
                        người đó từ đủ 9 tuổi trở lên); xác định lại
                        dân tộc (nếu người đó từ đủ 15 tuổi đến dưới
                            18 tuổi)</p>
                    </td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr><td>Làm tại: {{$xa}}, ngày {{date('d',strtotime($model->ngaydk))}} tháng {{date('m',strtotime($model->ngaydk))}} năm  {{date('Y',strtotime($model->ngaydk))}}</td></tr>
                <tr><td><b>Người yêu cầu</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td></tr>
                <tr style="height: 150px">
                    <td>Ý kiến của cha và mẹ(nếu thay dổi họ, chữ đệm, tên cho người dưới 18 tuổi)</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>