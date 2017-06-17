<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
</head>
<body style="font-size: 16px; width:99%;">
<div style="text-align: right">
    <span>Số: ..{{$model->sokhaisinh}}..</span>
</div>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:120px auto auto auto">
</table>
<div style="text-align: center">
<span><b style="text-transform: uppercase">({{$plgiayks}})</b></span>
</div>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên: </b> <span style="text-transform: uppercase">{{$model->hotenks}}</span></td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: ..{{getDayVn($model->ngaysinhks)}}..ngày sinh bằng chữ: ..{{$model->ngaysinhksbangchu}}..</td>
    </tr>
    <tr>
        <td>Giới tính: ..{{$model->gioitinhks}}..</td>
        <td>Dân tộc: ..{{$model->dantocks}}..</td>
        <td>Quốc tịch: ..{{$model->quoctichks}}..</td>
    </tr>
    <tr>
        <td colspan="3">Nơi sinh: ..{{$model->noisinh}}..</td>
    </tr>
    <tr>
        <td colspan="3">Quê quán: ..{{$model->quequanks}}..</td>
    </tr>
    <tr>
        <td colspan="3">Số định danh cá nhân: ..{{$model->sodinhdanhcanhan}}..</td>
    </tr>
    <!--Thông tin mẹ-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người mẹ: </b> <span style="text-transform: uppercase">{{$model->hotenme}}</span></td>
    </tr>
    <tr>
        <td>Năm sinh: ..{{date('Y',strtotime($model->ngaysinhme))}}..</td>
        <td>Dân tộc: ..{{$model->dantocme}}..</td>
        <td>Quốc tịch: ..{{$model->quoctichme}}..</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư chú: ..{{$model->diachime}}..</td>
    </tr>
    <!--Thông tin cha-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người cha: </b> <span style="text-transform: uppercase">{{$model->hotencha}}</span></td>
    </tr>
    <tr>
        <td>Năm sinh: ..{{date('Y',strtotime($model->ngaysinhcha))}}..</td>
        <td>Dân tộc: ..{{$model->dantocme}}..</td>
        <td>Quốc tịch: ..{{$model->quoctichme}}..</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư chú: ..{{$model->diachicha}}..</td>
    </tr>
    <!--Thông tin cha-->
    <tr>
        <td colspan="3"><b>Họ, chữ đệm, tên người đi khai sinh: </b> <span style="text-transform: uppercase">{{$model->hotennk}}</span></td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân: ..{{$model->loaigiaytonk}}- {{$model->sogiaytonk}}- ngày cấp {{getDayVn($model->ngaycapgtnk)}}- nơi cấp {{$model->noicapgtnk}}..</td>
    </tr>
    <tr>
        <td colspan="3"><b>Nơi đăng ký khai sinh:</b> ..{{$xa}}..</td>
    </tr>
    <tr>
        <td colspan="3"><b>Ngày, tháng, năm đăng ký:</b> ..{{getDayVn($model->ngaydangky)}}..</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="50%"></td>
        <td>
            <table>
                <tr><td><b>NGƯỜI KÝ GIẤY KHAI SINH</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên, chức vụ và đóng dấu)</i></td></tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>