<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <style type="text/css">

        .header tr td {
            padding-top: 0px;
            padding-bottom: 10px;
        }

        table, p {
            width: 98%;
            margin: auto;
        }

        table  {
            text-align: center;
        }

        #table2 {
            font-size:13px;
        }

        td, th {
            padding: 10px;
        }
        p{
            padding: 5px;
        }
        span{
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
</head>
<body>

<table class="header" width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:0 auto 25px; text-align: center;">
    <tbody><tr>
        <td style="text-align: left;width: 30%">
            <p><b>Biểu số: 22a/BTP/CN/TN</b></p>
            <p>Ban hành theo Thông tư số 04/2016/TT-BTP ngày 03/3/2016</p>
            <p><b>Ngày nhận báo cáo (BC): </b></p>
            <p>BC 6 tháng: ngày 06 tháng 6 hàng năm</p>
            <p>BC năm: Ngày 07 tháng 11 hàng năm</p>
            <p>BC năm chính thức: Ngày 20 tháng 01 năm sau</p>
        </td>
        <td style="text-align: center;">
            <p><b>KẾT QUẢ ĐĂNG KÝ NUÔI CON NUÔI TRONG NƯỚC TẠI ỦY BAN NHÂN DÂN (UBND) CẤP XÃ</b></p>
            <p><b>(6 tháng/năm)</b></p>
            <p><b>Kỳ báo cáo: {{$kybaocao}}</b></p>
            <p>(Từ ngày {{getDayVn($ngaytu)}} Đến ngày {{getDayVn($ngayden)}})</p>
        </td>
        <td style="text-align: right;width: 30%">
            <p><b>Đơn vị báo cáo:</b></p>
            <p>{{$tencq}}</p>
            <p><b>Đơn vị nhận báo cáo:</b></p>
            <p>{{$tencq}}</p>
        </td>
    </tr>
    </tbody>
</table>

<table id="table2" cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
    <tr>
        <th rowspan="3">Tổng số</th>
        <th colspan="6">Chia theo độ tuổi của trẻ em được nhận làm con nuôi</th>
        <th colspan="2">Chia theo tình trạng sức khỏe của trẻ em được nhận làm con nuôi</th>
        <th colspan="3">Chia theo nơi cư trú của trẻ em trước khi được nhận làm con nuôi</th>
    </tr>
    <tr>
        <td colspan="2">Dưới 01 tuổi</td>
        <td colspan="2">Từ 01 đến dưới 5 tuổi</td>
        <td colspan="2">Từ 5 tuổi trở lên</td>
        <td rowspan="2">Bình thường</td>
        <td rowspan="2">Trẻ em có nhu cầu đặc biệt</td>
        <td rowspan="2">Cơ sở nuôi dưỡng</td>
        <td rowspan="2">Gia đình</td>
        <td rowspan="2">Nơi khác</td>
    </tr>
    <tr>
        <td>Nam</td>
        <td>Nữ</td>
        <td>Nam</td>
        <td>Nữ</td>
        <td>Nam</td>
        <td>Nữ</td>
    </tr>
    <tr>
        <td>(1)</td>
        <td>(2)</td>
        <td>(3)</td>
        <td>(4)</td>
        <td>(5)</td>
        <td>(6)</td>
        <td>(7)</td>
        <td>(8)</td>
        <td>(9)</td>
        <td>(10)</td>
        <td>(11)</td>
        <td>(12)</td>
    </tr>
    <tr>
        <td>{{$Count1}}</td>
        <td>{{$Count2}}</td>
        <td>{{$Count3}}</td>
        <td>{{$Count4}}</td>
        <td>{{$Count5}}</td>
        <td>{{$Count6}}</td>
        <td>{{$Count7}}</td>
        <td>{{$Count8}}</td>
        <td>{{$Count9}}</td>
        <td>{{$Count10}}</td>
        <td>{{$Count11}}</td>
        <td>{{$Count12}}</td>
    </tr>
</table>
<table class="header" width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:20px auto; text-align: center;">
    <tbody><tr>
        <td style="text-align: center;" width="50%">Người lập biểu</td>
        <td style="text-align: center;" width="50%">
            <p><i>{{$xa}}, {{getDayVn($ngaythangnam)}}</i></p>
            <p><b>TM. ỦY BAN NHÂN DÂN</b></p>
        </td>
    </tr>
    <tr style="font-style: italic">
        <td style="text-align: center;" width="50%">(Ký, ghi rõ, họ tên)</td>
        <td style="text-align: center;" width="50%">(Ký, đóng dấu, ghi rõ họ, tên)</td>
    </tr>
    <tr>
        <td><br><br><br></td>
    </tr>
    </tbody></table>


</body></html>