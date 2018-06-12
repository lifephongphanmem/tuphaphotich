<!DOCTYPE html>
<html>
<head>
    <title>In trích lục</title>
    <link rel="shortcut icon" href="http://hotich.dev/images/LIFESOFT.png" type="image/x-icon">
</head>
<body style="font-size: 16px; width:99%;">
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr style="vertical-align: top">
        <td style="width: 30%">
            <table style="text-align: center;width: 100%">
                @if($model->level == 'T')
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">TỈNH {{$tinh}}</span></td>
                    </tr>
                @elseif($model->level == 'H')
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">TỈNH {{$tinh}}</span></td>
                    </tr>
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">{{$huyen}}</span></td>
                    </tr>
                @else
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">TỈNH {{$tinh}}</span></td>
                    </tr>
                    <tr>
                        <td colspan="3"><span style="text-transform: uppercase">{{$huyen}}</span></td>
                    </tr>
                    <tr>
                        @if($xa=="Thị Trấn Yên Minh")
                            <td colspan="3"><span style="text-transform: uppercase"><u>{{$xa}}</u></span></td>
                        @else
                            <td colspan="3"><span style="text-transform: uppercase"><u>XÃ {{$tenxa}}</u></span></td>
                        @endif
                    </tr>
                @endif

            </table>
        </td>
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
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td>Số {{$model->sotd}}/TLGCHT-BS</td>
        <td>@if($xa=="Thị Trấn Yên Minh"){{$xa}}@else{{$tenxa}}@endif, ngày {{date('d',strtotime($model->ngaydk))}} tháng {{date('m',strtotime($model->ngaydk))}} năm  {{date('Y',strtotime($model->ngaydk))}}</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="4" style="border-collapse: collapse; margin: auto;text-align: center">
    <tr>
        <td><b>TRÍCH LỤC GHI CHÚ THAY ĐỔI HỘ TỊCH</b></td>
    </tr>
    <tr>
        <td>(BẢN SAO)</td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:20px auto">
    <tr>
        <td colspan="3"><b>Họ chữ đệm tên:</b>{{$model->hotenntd}}</td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm sinh: {{getDayVn($model->ngaysinhntd)}}</td>
    </tr>
    <tr>
        <td>Giới tính: {{$model->gioitinhntd}}</td>
        <td>Dân tộc: {{$model->dantocntd}}</td>
        <td>Quốc tịch: {{$model->quoctichntd}}</td>
    </tr>
    <tr>
        <td colspan="3">Giấy tờ tùy thân: CMND số {{$model->cmndntd}}</td>
    </tr>
    <tr>
        <td colspan="3">Nơi cư trú: {{$model->thuongtruntd}}</td>
    </tr>
    <tr>
        <td colspan="3">Đã thực hiện việc ghi chú: {{$model->noidungtd}} </td>
    </tr>
    <tr>
        <td colspan="3">Trong Sổ đăng ký thay đổi, cải chính, bổ xung hộ tịch, xác định lại dân tộc số: {{$model->sotd}} Quyển số: {{$model->quyentd}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Nội dung ghi chú: {{$model->noidungtd}}</b></td>
    </tr>
    <tr>
        <td colspan="3">Theo Giấy @if($modeltt->phanloainhap == "Giám hộ") đăng ký giám hộ số {{$modeltt->soso}} @elseif($modeltt->phanloainhap == "Chấm dứt giám hộ") đăng ký chấm dứt giám hộ số {{$modeltt->socd}} @endif  do {{$xa}} cấp ngày {{getDayVn($modeltt->ngaydangky)}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Nơi ghi chú: {{$tencq}}</b></td>
    </tr>
    <tr>
        <td colspan="3">Ngày, tháng, năm ghi chú: {{getDayVn($model->ngaydk)}}</td>
    </tr>
    <tr>
        <td colspan="3"><b>Ghi chú: Từ: {{$model->thaydoitu}} thành {{$model->thaydoithanh}} </b></td>
    </tr>
</table>
<table style="margin:auto; text-align: center;">
    <tr>
        <td width="50%"></td>
        <td>
            <table>
                <tr><td><b>NGƯỜI KÝ TRÍCH LỤC</b></td></tr>
                <tr><td><i>(Ký, ghi rõ họ, chữ đệm, tên, chức vụ và đóng dấu)</i></td></tr>
                <tr style="height: 100px">
                    <td style="vertical-align: bottom"><b>{{$model->nguoikygiay}}</b></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>