<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
</head>
<body style="font-size: 16px; width:99%;">
<div style="text-align: right">
    <span>Số: ..{{$model->so}}..</span>
</div>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:120px auto auto auto">
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="2"><b>Họ và tên cha nuôi: {{$model->hotenchanuoi}}</b></td>
        <td colspan="2"><b>Họ và tên mẹ nuôi: {{$model->hotenmenuoi}}</b></td>
    </tr>
    <tr>
        <td colspan="2">Ngày, tháng, năm sinh: {{$model->ngaysinhchanuoi}}</td>
        <td colspan="2">Ngày, tháng, năm sinh: {{$model->ngaysinhmenuoi}}</td>
    </tr>
    <tr>
        <td>Dân tộc: {{$model->dantocchanuoi}}</td>
        <td>Quốc tịch: {{$model->quoctichchanuoi}}</td>
        <td>Dân tộc: {{$model->dantocmenuoi}}</td>
        <td>Quốc tịch: {{$model->quoctichmenuoi}}</td>
    </tr>
    <tr>
        <td colspan="2">Số Giấy CMND/Hộ chiếu: {{$model->cmndchanuoi}}</td>
        <td colspan="2">Số Giấy CMND/Hộ chiếu: {{$model->cmndmenuoi}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi cấp: {{$model->noicapgtcn}}</td>
        <td colspan="2">Nơi cấp: {{$model->noicapgtmn}}</td>
    </tr>
    <tr>
        <td colspan="2">Ngày, tháng, năm cấp: {{$model->ngaycapgtcn}}</td>
        <td colspan="2">Ngày, tháng, năm cấp: {{$model->ngaycapgtmn}}</td>
    </tr>
    <tr>
        <td colspan="2">Nơi thường trú: {{$model->thuongtrucn}}</td>
        <td colspan="2">Nơi thường trú: {{$model->thuongtrumn}}</td>
    </tr>
    <tr>
        <td colspan="2"><b>Họ và tên con nuôi: {{$model->hotenconnuoi}}</b></td>
        <td colspan="2"><b>Giới tính: {{$model->gioitinhconnuoi}}</b></td>
    </tr>
    <tr>
        <td colspan="4">Ngày, tháng, năm sinh: {{$model->ngaysinhconnuoi}}</td>
    </tr>
    <tr>
        <td colspan="4">Nơi sinh: {{$model->noisinhconnuoi}}</td>
    </tr>
    <tr>
        <td colspan="2">Dân tộc: {{$model->dantocconnuoi}}</td>
        <td colspan="2">Quốc tịch: {{$model->quoctichconnuoi}}</td>
    </tr>
    <tr>
        <td colspan="4">Nơi thường trú: {{$model->thuongtruconnuoi}}</td>
    </tr>
    <tr>
        <td colspan="4">Nơi đăng ký việc nuôi con nuôi: {{$model->noidkconnuoi}}</td>
    </tr>
    <tr>
        <td colspan="4">Ngày, tháng, năm đăng ký: {{$model->ngaythangdk}}</td>
    </tr>
    <tr>
        <td colspan="4">Ghi chú: {{$model->ghichu}}</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;" width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td><i>Vào Sổ đăng ký nuôi con nuôi</i><br>ngày {{$model->ngaythangdk}}<br><b>Người thực hiện</b><br><i>(Ký ghi rõ họ tên)</i></td>
        <td><b>NGƯỜI KÝ GIẤY CHỨNG NHẬN NUÔI CON NUÔI</b><br><i>(Ký, ghi rõ họ tên,chức vụ và đóng dấu)</i></td>
    </tr>
    <tr>
        <td>{{$model->nguoithuchien}}</td>
        <td>{{$model->nguoikygiaycn}}</td>
    </tr>
</table>

</body>
</html>