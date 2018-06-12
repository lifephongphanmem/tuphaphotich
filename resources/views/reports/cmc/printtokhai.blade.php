<!DOCTYPE html>
<html>
<head>
    <title>In tờ khai đăng ký nhận cha mẹ con</title>
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
        <td><b>TỜ KHAI ĐĂNG KÝ NHẬN CHA MẸ CON</b></td>
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
        <td colspan="2">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhnk)}}
    <tr>
        <td>Dân tộc: {{$model->dantocnk}}</td>
        <td>Quốc tịch: {{$model->quoctichnk}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi cư trú: {{$model->noicutrunk}}</td>
    </tr>
    <tr>
        <td colspan="2">Giấy tờ tùy thân: {{$model->loaigiaytonk}} số: {{$model->sogiaytonk}}</td>
    </tr>
    <tr>
        <td colspan="2">Quan hệ với người nhận cha/mẹ/con: {{$model->quanhenk}}</td>
    </tr>
    <tr>
        <td colspan="2"><b>Đề nghị Quý cơ quan công nhận người có tên dưới đây: </b> <span style="text-transform: uppercase"></span></td>
    </tr>
    <tr>
        <td colspan="2">Họ, chữ đệm, tên: <span style="text-transform: uppercase">{{$model->hotennn}}</span></td>
    </tr>
    <tr>
        <td colspan="2">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhnn)}}</td>
    </tr>
    <tr>
        <td>Dân tộc: {{$model->dantocnn}}</td>
        <td>Quốc tịch: {{$model->quoctichnn}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi cư trú: {{$model->tamtrutamvangnn}}</td>
    </tr>
    <tr>
        <td colspan="2">Giấy tờ tùy thân: {{$model->loaigiaytonn}} số {{$model->sogiaytonn}}</td>
    </tr>
    <tr>
        <td colspan="2"><b>Là ... của người có tên dưới đây: </b></td>
    </tr>
    <tr>
        <td colspan="2">Họ, chữ đệm, tên: {{$model->hotenndn}}</td>
    </tr>
    <tr>
        <td colspan="2">Ngày, tháng, năm, sinh: {{getDayVn($model->ngaysinhndn)}}</td>
    </tr>
    <tr>
        <td>Dân tộc: {{$model->dantocndn}}</td>
        <td>Quốc tịch: {{$model->quoctichndn}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi cư trú: {{$model->tamtrutamvangndn}}</td>
    </tr>
    <tr>
        <td colspan="2">Giấy tờ tùy thân: {{$model->loaigiaytondn}} số {{$model->sogiaytondn}}</td>
    </tr>
    <tr>
        <td colspan="2">Tôi cam đoan việc nhận ... nói trên là đúng sự thật, tự nguyện, không có tranh chấp và chịu trách nhiệm trước pháp luật về cam đoan của mình.
            Kính đề nghị Quý cơ quan đăng ký.
        </td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="50%"></td>
        <td>
            <table>
                <tr><td>Làm tại {{$xa}}, ngày {{date('d',strtotime($model->ngaydangky))}} tháng {{date('m',strtotime($model->ngaydangky))}} năm  {{date('Y',strtotime($model->ngaydangky))}}</td></tr>
                <tr><td><b>Người yêu cầu</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td></tr>
                <tr style="height: 50px">

                </tr>
            </table>
        </td>
    </tr>
</table>
<p style="page-break-before: always">
<table width="95%" border="1" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td width="50%"><b>Ý kiến của người hiện đang là mẹ hoặc cha (2)</b><p style="height: 100px"></p></td>
        <td><b>Ý kiến của người được nhận là cha, mẹ, con (3)</b><p style="height: 100px"></p></td>
    </tr>
</table>
</body>
</html>