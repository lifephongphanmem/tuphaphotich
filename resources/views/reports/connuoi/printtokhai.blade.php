<!DOCTYPE html>
<html>
<head>
    <title>In tờ khai đăng ký nuôi con nuôi</title>
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
        <td><div style=" border-style: solid;border-width: 1px;"></div></td>
        <td><b>TỜ KHAI ĐĂNG KÝ VIỆC NUÔI CON NUÔI THỰC TẾ</b></td>
        <td><div style=" border-style: solid;border-width: 1px;"></div></td>
    </tr>
    <tr>
        <td colspan="3"><b>Kính gửi: @if(session('admin')->level == 'H' && session('admin')->name == "Phòng tư Pháp huyện Đồng Văn")
                {{"Phòng tư Pháp huyện Đồng Văn"}}
            @elseif(session('admin')->level == 'H' && session('admin')->name == "Phòng tư Pháp huyện Yên Minh")
                    {{"Phòng Tư Pháp Huyện Yên Minh"}} @else {{$tencq}} @endif</b></td>
    </tr>
</table>

<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto">
    <tr>
        <td><p><b>Chúng tôi/Tôi là:</b></p></td>
    </tr>
</table>
<table width="95%" border="1" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: left">
    <tr >
        <td style=" border-right: 1px solid black;" ><b></b></td>
        <td style=" border-right: 1px solid black;" ><b>Ông</b></td>
        <td><b>Bà</b></td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Họ và tên</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;" >{{$model->hotenchanuoi}}</td>
        <td style="width:39%; border-top: 1px solid black;" >{{$model->hotenmenuoi}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Ngày, tháng, năm, sinh</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;" >{{getDayVn($model->ngaysinhchanuoi)}}</td>
        <td style="width:39%; border-top: 1px solid black;" >{{getDayVn($model->ngaysinhmenuoi)}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Nơi sinh</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;" >{{$model->noisinhcn}}</td>
        <td style="width:39%; border-top: 1px solid black;" >{{$model->noisinhmn}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Dân tộc</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;" >{{$model->dantocchanuoi}}</td>
        <td style="width:39%; border-top: 1px solid black;" >{{$model->dantocmenuoi}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Quốc tịch</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;" >{{$model->quoctichchanuoi}}</td>
        <td style="width:39%; border-top: 1px solid black;" >{{$model->quoctichmenuoi}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Nghề nghiệp</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;" >{{$model->nghenghiepcn}}</td>
        <td style="width:39%; border-top: 1px solid black;" >{{$model->nghenghiepmn}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Nơi thường trú</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;" >{{$model->thuongtrucn}}</td>
        <td style="width:39%; border-top: 1px solid black;" >{{$model->thuongtrumn}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Số Giấy CMND/Hộ chiếu</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;" >{{$model->cmndchanuoi}}</td>
        <td style="width:39%; border-top: 1px solid black;" >{{$model->cmndmenuoi   }}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Nơi cấp</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;" >{{$model->noicapgtcn}}</td>
        <td style="width:39%; border-top: 1px solid black;" >{{$model->noicapgtmn}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Ngày, tháng, năm cấp</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;" >{{getDayVn($model->ngaycapgtcn)}}</td>
        <td style="width:39%; border-top: 1px solid black;" >{{getDayVn($model->ngaycapgtmn)}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Địa chỉ liên hệ</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;" >{{$model->thuongtrucn}}</td>
        <td style="width:39%; border-top: 1px solid black;" >{{$model->thuongtrumn}}</td>
    </tr>
    <tr>
        <td style="width:22%; border-right: 1px solid black; border-top: 1px solid black;" >Điện thoại/fax/email</td>
        <td style="width:39%; border-right: 1px solid black; border-top: 1px solid black;" >{{$model->dtcn}}</td>
        <td style="width:39%; border-top: 1px solid black;" >{{$model->dtmn}}</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto">
    <tr>
        <td colspan="2"><p><b>Chúng tôi/Tôi đã chăm sóc, nuôi dưỡng người có tên dưới đây như con đẻ của mình: </b></p></td>
    </tr>
    <tr>
        <td>Họ và tên: {{$model->hotenconnuoi}}</td>
        <td>Giới tính: {{$model->gioitinhconnuoi}}</td>
    </tr>
    <tr><td colspan="2">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhconnuoi)}}</td></tr>
    <tr><td colspan="2">Nơi sinh: {{$model->noisinhconnuoi}}</td></tr>
    <tr>
        <td>Dân tộc: {{$model->dantocconnuoi}}</td>
        <td>Quốc tịch: {{$model->quoctichconnuoi}}</td>
    </tr>
    <tr><td colspan="2">Nơi cư trú: {{$model->thuongtruconnuoi}}</td></tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto">
    <tr>
        <td>
            <p>
                Việc chăm sóc, nuôi dưỡng được thực hiện từ ngày ..........tháng......... năm.............  . Cho đến nay, quan hệ chăm sóc, nuôi dưỡng vẫn đang tồn tại. Nay chúng tôi/tôi có nguyện vọng đăng ký nuôi con nuôi thực tế.
                Chúng tôi/tôi cam đoan những nội dung khai trên đây là đúng sự thật và chịu trách nhiệm trước pháp luật về lời khai của mình. Đề nghị cơ quan có thẩm quyền đăng ký nuôi con nuôi thực tế cho chúng tôi theo quy định của pháp luật.
            </p>
        </td>
    </tr>
</table>
<table style="margin:auto; text-align: left;">
    <tr>
        <td width="45%"></td>
        <td >{{$xa}}, ngày {{date('d',strtotime($model->ngaythangdk))}} tháng {{date('m',strtotime($model->ngaythangdk))}} năm  {{date('Y',strtotime($model->ngaythangdk))}}</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="30%"></td>
        <td width="30%">
            <table>
                <tr><td><b>ÔNG</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td></tr>
                <tr style="height: 100px">

                </tr>
            </table>
        </td>
        <td width="30%">
            <table>
                <tr><td><b>BÀ</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên)</i></td></tr>
                <tr style="height: 100px">

                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="30%"></td>
        <td width="30%"></td>
        <td width="30%">
            <table>
                <tr><td><b>NGƯỜI ĐƯỢC NHẬN LÀM CON NUÔI TỪ 9 TUỔI TRỞ LÊN</b></td></tr>
                <tr><td><i>(Ký/điểm chỉ, ghi rõ họ tên)</i></td></tr>
                <tr style="height: 100px">

                </tr>
            </table>
        </td>
    </tr>
</table>
<p style="page-break-before: always">
<table width="95%" border="1" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: left">
    <tr>
        <td style="text-align:center"><b>NGƯỜI LÀM CHỨNG THỨ NHẤT</b></td>
        <td style="text-align:center"><b>NGƯỜI LÀM CHỨNG THỨ HAI</b></td>
    </tr>
    <tr>
        <td style="text-align:center">
            <p>
                Tôi tên là...............................sinh năm ............... Số CMND........................, cư trú tại..................
                ............................................................................Tôi
                xin làm chứng có biết về việc Ông....................... và
                Bà......................... nuôi trẻ em có tên............................., sinh
                ngày ...................... từ năm ......... đến nay là hoàn
                toàn đúng sự thật và xin chịu trách nhiệm về việc
                làm chứng của mình.
            </p>
            <p>..............., ngày......tháng.....năm.....</p>
            <p>(Ký, ghi rõ họ tên)</p>
            <p style="height: 100px"></p>
        </td>
        <td style="text-align:center">
            <p>
                Tôi tên là...............................sinh năm ............... Số CMND........................, cư trú tại..................
                ............................................................................Tôi
                xin làm chứng có biết về việc Ông....................... và
                Bà......................... nuôi trẻ em có tên............................., sinh
                ngày ...................... từ năm ......... đến nay là hoàn
                toàn đúng sự thật và xin chịu trách nhiệm về việc
                làm chứng của mình.
            </p>
            <p>..............., ngày......tháng.....năm.....</p>
            <p>(Ký, ghi rõ họ tên)</p>
            <p style="height: 100px"></p>
        </td>
    </tr>
</table>
</body>
</html>