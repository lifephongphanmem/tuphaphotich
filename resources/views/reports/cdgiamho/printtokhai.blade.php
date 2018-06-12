<!DOCTYPE html>
<html>
<head>
    <title>In giấy đăng ký chấm dứt giám hộ</title>
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
        <td><b>TỜ KHAI ĐĂNG KÝ CHẤM DỨT GIÁM HỘ</b></td>
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
        <td><b>Họ, chữ đệm, tên người yêu cầu: {{$model->hotennk}}</b> <span style="text-transform: uppercase"></span></td>
        <td>Giới tính: {{$model->gioitinhnk}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi cư trú: {{$model->diachink}}</td>
    </tr>
    <tr>
        <td colspan="2">Giấy tờ tùy thân: {{$model->loaigiaytonk}} số {{$model->sogiaytonk}} </td>
    </tr>
    <tr>
        <td colspan="2"><b>Đề nghị cơ quan chấm dứt việc giám hộ giữa: </b></td>
    </tr>
    <tr>
        <td colspan="2"><b>Người giám hộ: </b></td>
    </tr>
    <tr>
        <td colspan="2">Họ, chữ đệm, tên: {{$model->hotenngh1}}</td>
    </tr>
    <tr>
        <td >Giới tính: {{$model->gioitinhngh1}}</td>
        <td >Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhngh1)}}</td>
    </tr>
    <tr>
        <td >Dân tộc: {{$model->dantocngh1}}</td>
        <td >Quốc tịch: {{$model->quoctichngh1}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi cư trú: {{$model->tamtrutamvangngh1}}</td>
    </tr>
    <tr>
        <td colspan="2">Giấy tờ tùy thân: {{$model->loaigiaytongh1}} số {{$model->sogiaytongh1}} </td>
    </tr>
    <tr>
        <td colspan="2"><b>Người được giám hộ: </b></td>
    </tr>
    <tr>
        <td colspan="2">Họ, chữ đệm, tên: {{$model->hotenndgh}}</td>
    </tr>
    <tr>
        <td >Giới tính: {{$model->gioitinhndgh}}</td>
        <td >Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhndgh)}}</td>
    </tr>
    <tr>
        <td >Dân tộc: {{$model->dantocndgh}}</td>
        <td >Quốc tịch: {{$model->quoctichndgh}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi cư trú: {{$model->tamtrutamvangndgh}}</td>
    </tr>
    <tr>
        <td colspan="2">Giấy khai sinh/Giấy tờ tùy thân: {{$model->loaigiaytondgh}} số {{$model->sogiaytondgh}} </td>
    </tr>
    <tr>
        <td colspan="2">Đã đăng ký giám hộ tại quyển số: ... số ...</td>
    </tr>
    <tr>
        <td colspan="2">Ngày ... tháng ... năm ... của ...</td>
    </tr>
    <tr>
        <td colspan="2"><b>Lý do chấm dứt việc giám hộ: ...</b></td>
    </tr>
    <tr>
        <td colspan="2">
            <p>Tôi cam đoan những nội dung khai trên đây là đúng sự thật và chịu trách nhiệm trước pháp luật về cam đoan của mình.</p>
        </td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="50%"></td>
        <td>
            <table>
                <tr><td>Làm tại: @if(session('admin')->level == 'H' && session('admin')->name == 'Phòng Tư Pháp Huyện Yên Minh') {{"Phòng Tư Pháp Huyện Yên Minh"}}
                        @elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn') {{"Phòng Tư Pháp Huyện Đồng Văn"}}
                        @else
                            {{$xa}}
                        @endif, ngày {{date('d',strtotime($model->ngaychamdut))}} tháng {{date('m',strtotime($model->ngaychamdut))}} năm  {{date('Y',strtotime($model->ngaychamdut))}}</td></tr>
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