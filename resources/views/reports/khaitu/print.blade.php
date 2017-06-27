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
        <td colspan="3"><b>Người có tên dưới đây: </b></td>
    </tr>
    <tr>
        <td>Họ tên: ..{{$model->hoten}}..</td>
        <td>giới tính: {{$model->gioitinh}}</td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinh)}}</td>
    </tr>
    <tr>
        <td>Dân tộc: {{$model->dantoc}}</td>
        <td>Quốc tịch: {{$model->quoctich}}</td>
    </tr>
    <tr>
        <td colspan="3">Nơi thường trú/tạm trú cuối cùng trước khi chết: {{$model->thuongtru}}</td>
    </tr>
    <tr>
        <td colspan="3">Số Giấy CMND/Hộ chiếu: {{$model->cmnd}}</td>
    </tr>
    <tr>
        <td colspan="3">Đã chết vào lúc: {{$model->giotu}} giờ {{$model->phuttu}} phút, ngày: {{getDayVn($model->ngaychet)}}</td>
    </tr>
    <tr>
        <td colspan="3">Nơi chết: {{$model->noichet}}</td>
    </tr>
    <tr>
        <td colspan="3">Nguyên nhân chết: {{$model->nguyennhan}}</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;" width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td><b>Người đi khai tử</b></td>
        <td><b>Cán bộ tư pháp hộ tịch</b></td>
        <td>Ngày: {{getDayVn($model->ngaydangkykt)}} <br><b>TM.ỦY BAN NHÂN DÂN CHỦ TỊCH</b></td>
    </tr>
    <tr>
        <td>{{$model->hotennk}}</td>
        <td>{{$model->nguoithuchien}}</td>
        <td>{{$model->nguoikygct}}</td>
    </tr>
</table>

</body>
</html>