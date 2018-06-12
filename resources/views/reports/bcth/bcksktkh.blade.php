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
            <p><b>Biểu số 13a/BTP/HTQTCT/HT</b></p>
            <p>Ban hành theo Thông tư số 04/2016/TT-BTP ngày 03/3/2016</p>
            <p><b>Ngày nhận báo cáo (BC): </b></p>
            <p>BC 6 tháng: ngày 06 tháng 6 hàng năm</p>
            <p>BC năm: Ngày 07 tháng 11 hàng năm</p>
            <p>BC năm chính thức: Ngày 20 tháng 01 năm sau</p>
        </td>
        <td style="text-align: center;">
            <p><b>KẾT QUẢ ĐĂNG KÝ KHAI SINH, KHAI TỬ, KẾT HÔN TẠI ỦY BAN NHÂN DÂN (UBND) CẤP XÃ </b></p>
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
    <tbody>
    <tr>
        <th colspan="10">ĐĂNG KÝ KHAI SINH(Trường hợp)</th>
        <th colspan="7">ĐĂNG KÝ KHAI TỬ(Trường hợp)</th>
        <th colspan="5">ĐĂNG KÝ KẾT HÔN</th>
    </tr>
    <tr>
        <td colspan="9">Đăng ký mới</td>
        <td rowspan="5">Đăng ký lại</td>
        <td colspan="6">Đăng ký mới</td>
        <td rowspan="5">Đăng ký lại</td>
        <td colspan="4">Đăng ký mới</td>
        <td rowspan="5">Đăng ký lại</td>
    </tr>
    <tr>
        <td rowspan="4">Tổng số</td>
        <td colspan="2">Chia theo dân tộc</td>
        <td colspan="2">Chia theo giới tính</td>
        <td colspan="4">Chia theo thời điểm đăng ký</td>
        <td rowspan="4">Tổng số</td>
        <td colspan="3">Chia theo độ tuổi</td>
        <td colspan="2">Chia theo thời điểm đăng ký</td>
        <td rowspan="4">Tổng số(Cặp)</td>
        <td rowspan="4">Trong đó: Kết hôn lần đầu(Cặp)</td>
        <td colspan="2">Tuổi kết hôn trung bình lần đầu (Tuổi)</td>
    </tr>
    <tr>
        <td rowspan="3">Dân tộc Kinh</td>
        <td rowspan="3">Dân tộc khác</td>
        <td rowspan="3">Nam</td>
        <td rowspan="3">Nữ</td>
        <td rowspan="3">Đúng hạn</td>
        <td colspan="3">Quá hạn</td>
        <td rowspan="3">Dưới 1 tuổi</td>
        <td rowspan="3">Từ 1 tuổi đến dưới 5 tuổi</td>
        <td rowspan="3">Từ 5 tuổi trở lên</td>
        <td rowspan="3">Đúng hạn</td>
        <td rowspan="3">Quá hạn</td>
        <td rowspan="3">Nam</td>
        <td rowspan="3">Nữ</td>
    </tr>
    <tr>
        <td rowspan="2">Tổng số</td>
        <td colspan="2">Trong đó</td>
    </tr>
    <tr>
        <td>Số trẻ em được sinh ra trong năm báo cáo</td>
        <td>Dưới 5 tuổi</td>
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
        <td>(13)</td>
        <td>(14)</td>
        <td>(15)</td>
        <td>(16)</td>
        <td>(17)</td>
        <td>(18)</td>
        <td>(19)</td>
        <td>(20)</td>
        <td>(21)</td>
        <td>(22)</td>
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
            <td>{{$Count13}}</td>
            <td>{{$Count14}}</td>
            <td>{{$Count15}}</td>
            <td>{{$Count16}}</td>
            <td>{{$Count17}}</td>
            <td>{{$Count18}}</td>
            <td>{{$Count19}}</td>
            <td>{{$tuoichong}}</td>
            <td>{{$tuoivo}}</td>
            <td>{{$Count22}}</td>

    </tr>
    </tbody>
</table>
<table class="header" width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:20px auto; text-align: center;">
    <tbody>
        <tr>
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
    </tbody>
</table>


</body></html>