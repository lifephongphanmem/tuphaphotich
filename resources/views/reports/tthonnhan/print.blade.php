<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
</head>
<body style="font-size: 20px; width:99%;">
<table width="95%" border="0" cellspacing="0" cellpadding="0" style="font-size: 18px; margin:30px auto auto auto">
    <tr>
        <td style="text-align: center;text-transform: uppercase"><b>TỈNH {{$tinh}}</b> </td>
        <td style="font-weight: bold; text-align: center">CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM</td>
    </tr>
    <tr>
        <td style="text-align: center;text-transform: uppercase"> <b>{{$huyen}}</b> </td>
        <td style="font-weight: bold; text-align: center">Độc lập - Tự do - Hạnh phúc</td>
    </tr>
    <tr>
        <td style="text-align: center;text-transform: uppercase">
            <b>
            @if($xa=="Thị Trấn Yên Minh"){{$xa}}
            @elseif(session('admin')->name=="Phòng tư Pháp huyện Yên Minh")
                {{"Phòng tư Pháp huyện Yên Minh"}}
            @elseif(session('admin')->name=="Phòng tư Pháp huyện Đồng Văn")
                {{"Phòng tư Pháp huyện Đồng Văn"}}
            @elseif(isset($tentt))
                    UBND {{$tentt}}
            @else UBND XÃ {{$tenxa}} @endif <br>
                <a style="position : relative; top:-18px;">________</a>
            </b>
        </td>
        <td style="text-align: center;">
            <label style="position : relative; top:-28px;">__________________ </label>
        </td>
    </tr>
    <tr>
        <td style="text-align: center">Số: {{$model->soxacnhan}} /UBND- XNTTHN</td>
        <td style="font-style: italic;text-align: center">@if($xa=="Thị Trấn Yên Minh"){{$xa}}
            @elseif(session('admin')->name=="Phòng tư Pháp huyện Yên Minh")
                {{"Phòng tư Pháp huyện Yên Minh"}}
            @elseif(session('admin')->name=="Phòng tư Pháp huyện Đồng Văn")
                {{"Phòng tư Pháp huyện Đồng Văn"}}
            @elseif(isset($tenxa)){{ucwords($tenxa)}},
            @else {{$tenxa}}
            @endif
            ngày  {{date('d',strtotime($model->ngayxn))}} tháng {{date('m',strtotime($model->ngayxn))}} năm {{date('Y',strtotime($model->ngayxn))}} </td>
    </tr>
</table>
<div style="height: 30px">

</div>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style=" margin:auto auto auto auto">
    <tr style="text-align: center; font-weight: bold;">
        <td colspan="2">GIẤY XÁC NHẬN TÌNH TRẠNG HÔN NHÂN</td>
    </tr>
    <tr style="text-align: center;">
        <td style="text-transform: uppercase" colspan="2"><b>ỦY BAN NHÂN DÂN XÃ {{$tenxa}}</b></td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3" style="padding-left: 50px">Xét đề nghị của ông/bà:  <b>{{$model->nguoithuchien}}</b> - Công chức Tư pháp - Hộ tịch xã,<br>
            về việc cấp Giấy xác nhận tình trạng hôn nhân cho: <b>{{$model->hotenxn}}</b></td>
    </tr>
    <tr style="text-align: center;font-weight: bold">
        <td colspan="3">XÁC NHẬN:</td>
    </tr>
    <tr>
        <td colspan="3"> <b>Họ, chữ đệm, tên:</b> <span style="text-transform: uppercase"><b>{{$model->hotenxn}}</b></span></td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinh)}}</td>
    </tr>
    <tr>
        <td width="33%">Giới tính: {{$model->gioitinh}}</td>
        <td width="33%">Dân tộc: {{$model->dantoc}}</td>
        <td width="33%">Quốc tịch: {{$model->quoctich}}</td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân: @if($model->sogiayto != ''){{$model->giayto}} số {{$model->sogiayto}} do {{$model->noicap}} cấp ngày {{$model->ngaycap}} @else @endif</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$model->noicutru}}</td>
    </tr>
    <tr>
        <td colspan="3">Trong thời gian cư trú tại : {{$model->noicutru}} từ ngày {{date('d',strtotime($model->tungay))}} tháng {{date('m',strtotime($model->tungay))}} năm {{date('Y',strtotime($model->tungay))}}, đến ngày {{date('d',strtotime($model->denngay))}} tháng {{date('m',strtotime($model->denngay))}} năm {{date('Y',strtotime($model->denngay))}} </td>
    </tr>
    <!--Thông tin mẹ-->
    <tr>
        <td colspan="3">Tình trạng hôn nhân: {{$model->tthonnhan}}</td>
    </tr>
    <tr>
        <td colspan="3">Giấy này có giá trị sử dụng trong thời hạn 6 tháng, kể từ ngày cấp, được sử dụng để: {{$model->noidungxn}}</td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="50%"></td>
        <td>
            <table>
                <tr><td><b>NGƯỜI KÝ GIẤY XÁC NHẬN</b></td></tr>
                <tr><td><i>(ký, ghi rõ họ tên, chức vụ và đóng dấu)</i></td></tr>
                <tr style="height: 150px">
                    <td style="vertical-align: bottom"><b>{{$model->hotennky}}</b></td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
<style>
    @media print {
        .footer,
        #non-printable {
            display: none !important;
        }
        #printable {
            display: block;
        }
    }
</style>