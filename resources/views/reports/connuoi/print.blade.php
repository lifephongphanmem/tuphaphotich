<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<style>
    @media print {
        .noPrint {
            visibility: hidden;
        }
    }
</style>
<script>
    $(document).ready(function(){
        $("#luutoado").click(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var x = $("#flying").position();var x1 = $("#flying1").position();var x2 = $("#flying2").position();
            var x3 = $("#flying3").position();var x4 = $("#flying4").position();var x5 = $("#flying5").position();
            var x6 = $("#flying6").position();var x7 = $("#flying7").position();var x8 = $("#flying8").position();
            var x9 = $("#flying9").position();var x10 = $("#flying10").position();var x11 = $("#flying11").position();
            var x12 = $("#flying12").position();var x13 = $("#flying13").position();var x14 = $("#flying14").position();
            var x15 = $("#flying15").position();var x16 = $("#flying16").position();var x17 = $("#flying17").position();
            var x18 = $("#flying18").position(); var x19 = $("#flying19").position();var x20 = $("#flying20").position();
            var x21 = $("#flying21").position();var x22 = $("#flying22").position();var x23 = $("#flying23").position();
            var x24 = $("#flying24").position();var x25 = $("#flying25").position();var x26 = $("#flying26").position();
            var x27 = $("#flying27").position();var x28 = $("#flying28").position();var x29 = $("#flying29").position();
            var x30 = $("#flying30").position(); var x31 = $("#flying31").position(); var x32 = $("#flying32").position();

            /*var xa1  = '&xa1=' + x.top ;
            var xa2  = '&xa2=' + x.left ;
            var xa3  = '&xa3=' + x1.top ;
            var xa4  = '&xa4=' + x1.left ;
            var xa5  = '&xa5=' + x2.top ;
            var xa6  = '&xa6=' + x2.left ;
            var xa7  = '&xa7=' + x3.top ;
            var xa8  = '&xa8=' + x3.left ;
            var xa9  = '&xa9=' + x4.top ;
            var xa10  = '&xa10=' + x4.left ;
            var xa11  = '&xa11=' + x5.top ;
            var xa12  = '&xa12=' + x5.left ;
            var xa13  = '&xa13=' + x6.top ;
            var xa14  = '&xa14=' + x6.left ;
            var xa15  = '&xa15=' + x7.top ;
            var xa16  = '&xa16=' + x7.left ;
            var xa17  = '&xa17=' + x8.top ;
            var xa18  = '&xa18=' + x8.left ;
            var xa19  = '&xa19=' + x9.top ;
            var xa20  = '&xa20=' + x9.left ;
            var xa21  = '&xa21=' + x10.top ;
            var xa22  = '&xa22=' + x10.left ;
            var xa23  = '&xa23=' + x11.top ;
            var xa24  = '&xa24=' + x11.left ;
            var xa25  = '&xa25=' + x12.top ;
            var xa26  = '&xa26=' + x12.left ;
            var xa27  = '&xa27=' + x13.top ;
            var xa28  = '&xa28=' + x13.left ;
            var xa29  = '&xa29=' + x14.top ;
            var xa30  = '&xa30=' + x14.left ;
            var xa31  = '&xa31=' + x15.top ;
            var xa32  = '&xa32=' + x15.left ;
            var xa33  = '&xa33=' + x16.top ;
            var xa34  = '&xa34=' + x16.left ;
            var xa35  = '&xa35=' + x17.top ;
            var xa36  = '&xa36=' + x17.left ;
            var xa37  = '&xa37=' + x18.top ;
            var xa38  = '&xa38=' + x18.left ;
            var xa39  = '&xa39=' + x19.top ;
            var xa40  = '&xa40=' + x19.left ;
            var xa41  = '&xa41=' + x20.top ;
            var xa42  = '&xa42=' + x20.left ;
            var xa43  = '&xa43=' + x21.top ;
            var xa44  = '&xa44=' + x21.left ;
            var xa45  = '&xa45=' + x22.top ;
            var xa46  = '&xa46=' + x22.left ;
            var xa47  = '&xa47=' + x23.top ;
            var xa48  = '&xa48=' + x23.left ;
            var xa49  = '&xa49=' + x24.top ;
            var xa50  = '&xa50=' + x24.left ;
            var xa51  = '&xa51=' + x25.top ;
            var xa52  = '&xa52=' + x25.left ;
            var xa53  = '&xa53=' + x26.top ;
            var xa54  = '&xa54=' + x26.left ;
            var xa55  = '&xa55=' + x27.top ;
            var xa56  = '&xa56=' + x27.left ;
            var xa57  = '&xa57=' + x28.top ;
            var xa58  = '&xa58=' + x28.left ;
            var xa59  = '&xa59=' + x29.top ;
            var xa60  = '&xa60=' + x29.left ;
            var xa61  = '&xa61=' + x30.top ;
            var xa62  = '&xa62=' + x30.left ;
            var xa63  = '&xa63=' + x31.top ;
            var xa64  = '&xa64=' + x31.left ;
            var xa65  = '&xa65=' + x32.top ;
            var xa66  = '&xa66=' + x32.left ;
            var url = current_path_url;
            window.location.href = url+xa1+xa2+xa3+xa4+xa5+xa6+xa7+xa8+xa9+xa10+xa11+xa12+xa13+xa14+xa15+xa16+xa17+xa18+xa19+xa20+xa21+xa22+xa23+xa24+xa25+xa26
                +xa27+xa28+xa29+xa30+xa31+xa32+xa33+xa34+xa35+xa36+xa37+xa38+xa39+xa40+xa41+xa42+xa43+xa44+xa45+xa46+xa47+xa48+xa49+xa50+xa51+xa52+xa53+xa54+xa55+xa56+xa57+xa58+xa59+xa60+xa61+xa62+xa63+xa64+xa65+xa66;
        });*/
            $.ajax({
                type: 'GET',
                url: '/ajaxluutoado',
                data: {
                    _token: CSRF_TOKEN,
                    toado:'top:'+x.top+'px;left:'+x.left+'px',
                    toado1:'top:'+x1.top+'px;left:'+x1.left+'px',
                    toado2:'top:'+x2.top+'px;left:'+x2.left+'px',
                    toado3:'top:'+x3.top+'px;left:'+x3.left+'px',
                    toado4:'top:'+x4.top+'px;left:'+x4.left+'px',
                    toado5:'top:'+x5.top+'px;left:'+x5.left+'px',
                    toado6:'top:'+x6.top+'px;left:'+x6.left+'px',
                    toado7:'top:'+x7.top+'px;left:'+x7.left+'px',
                    toado8:'top:'+x8.top+'px;left:'+x8.left+'px',
                    toado9:'top:'+x9.top+'px;left:'+x9.left+'px',
                    toado10:'top:'+x10.top+'px;left:'+x10.left+'px',
                    toado11:'top:'+x11.top+'px;left:'+x11.left+'px',
                    toado12:'top:'+x12.top+'px;left:'+x12.left+'px',
                    toado13:'top:'+x13.top+'px;left:'+x13.left+'px',
                    toado14:'top:'+x14.top+'px;left:'+x14.left+'px',
                    toado15:'top:'+x15.top+'px;left:'+x15.left+'px',
                    toado16:'top:'+x16.top+'px;left:'+x16.left+'px',
                    toado17:'top:'+x17.top+'px;left:'+x17.left+'px',
                    toado18:'top:'+x18.top+'px;left:'+x18.left+'px',
                    toado19:'top:'+x19.top+'px;left:'+x19.left+'px',
                    toado20:'top:'+x20.top+'px;left:'+x20.left+'px',
                    toado21:'top:'+x21.top+'px;left:'+x21.left+'px',
                    toado22:'top:'+x22.top+'px;left:'+x22.left+'px',
                    toado23:'top:'+x23.top+'px;left:'+x23.left+'px',
                    toado24:'top:'+x24.top+'px;left:'+x24.left+'px',
                    toado25:'top:'+x25.top+'px;left:'+x25.left+'px',
                    toado26:'top:'+x26.top+'px;left:'+x26.left+'px',
                    toado27:'top:'+x27.top+'px;left:'+x27.left+'px',
                    toado28:'top:'+x28.top+'px;left:'+x28.left+'px',
                    toado29:'top:'+x29.top+'px;left:'+x29.left+'px',
                    toado30:'top:'+x30.top+'px;left:'+x30.left+'px',
                    toado31:'top:'+x31.top+'px;left:'+x31.left+'px',
                    toado32:'top:'+x32.top+'px;left:'+x32.left+'px',
                    phanloai:'GCNCN'
                },

                success: function (respond) {
                        location.reload();
                }
            });
        });
    });
</script>
<button class="noPrint" id="luutoado">Lưu tọa độ</button>
<style>
    #flying, #flying1 ,#flying2, #flying3, #flying4,#flying5,#flying6,#flying7,#flying8,#flying9,#flying10,
    #flying11,#flying12,#flying13,#flying14,#flying15,#flying16,#flying17,#flying18,#flying19,#flying20,
    #flying21,#flying22,#flying23,#flying24,#flying25,#flying26,#flying27,#flying28,#flying29,#flying30,#flying31,#flying32 {  position: absolute;  }
</style>

<script>
    function byId(e){return document.getElementById(e);}

    window.addEventListener('load', myInitFunc, false);

    function myInitFunc()
    {
        byId('flying').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying1').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying2').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying3').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying4').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying5').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying6').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying7').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying8').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying9').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying10').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying11').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying12').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying13').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying14').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying15').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying16').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying17').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying18').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying19').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying20').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying21').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying22').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying23').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying24').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying25').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying26').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying27').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying28').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying29').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying30').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying31').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying32').addEventListener('mousedown', onImgMouseDown, false);
    }

    function onImgMouseDown(e)
    {
        e = e || event;
        var mElem = this;
        var initMx = e.pageX;
        var initMy = e.pageY;
        var initElemX = this.offsetLeft;
        var initElemY = this.offsetTop;

        var dx = initMx - initElemX;
        var dy = initMy - initElemY;

        document.onmousemove = function(e)
        {
            e = e || event;
            mElem.style.left = e.pageX-dx+'px';
            mElem.style.top = e.pageY-dy+'px';
        }
        this.onmouseup = function()
        {
            document.onmousemove = null;
        }


        this.ondragstart = function() { return false; }

    }
</script>
<body style="font-size: 16px; width:99%;">

<table width="96%" border="0" cellspacing="0" cellpadding="4" style="margin:0 auto 20px; text-align: center;">
    <tr>
        <td style="width:26%"></td>
        <td>
            <b  class="noPrint">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</b><br>
        </td>
        <td>
            <i style="visibility: hidden;">Mẫu TP/CN-2011/CN.01.a</i>
        </td>
    </tr>
    <tr>
        <td style="width:26%"></td>
        <td>
            <p class="noPrint" style="margin-top:-5px;"><b><u>ĐỘC LẬP - TỰ DO - HẠNH PHÚC</u></b></p>
            <img class="noPrint" src="{{url('images/quochuy.png')}}" width="100">
        </td>
        <td>
            <p style="text-align:left"><span class="noPrint">Số:</span> <label class="noPrint" style="{{$toadocn->toado}}" id="flying">lock:</label></p>
            <p style="text-align:left"><span class="noPrint">Số:</span> <label class="noPrint" style="{{$toadocn->toado30}}" id="flying30">quyển</label></p>
        </td>
        <td> <label style="{{$toadocn->toado31}}" id="flying31">{{$model->so}}</label></td>
        <td> <label style="{{$toadocn->toado32}}" id="flying32">{{$model->quyen}}</label></td>

    </tr>
    <tr>
    </tr>
</table>

<table width="96%" border="0" cellspacing="0" cellpadding="8" style="margin: auto auto; text-align: center;font-size: 25px">
    <tr>
        <td>
            <b class="noPrint">GIẤY CHỨNG NHẬN NUÔI CON NUÔI</b>
        </td>
    </tr>
</table>
<table width="95%" border="0" cellspacing="0" cellpadding="8" style="font-size:25px;border-collapse: collapse; margin:60px auto">
    <tr>
        <td colspan="2"><span class="noPrint"><b style="visibility: hidden;">Họ và tên cha nuôi:</b></span> <b>
                <span style="{{$toadocn->toado1}}"  id="flying1">{{$model->hotenchanuoi}}</span></b>
        </td>
        <td colspan="2"><span class="noPrint"><b style="visibility: hidden;">Họ và tên mẹ nuôi:</b></span><b>
                <span style="{{$toadocn->toado2}}"  id="flying2">{{$model->hotenmenuoi}}</span></b>
        </td>
    </tr>
    <tr>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint">Ngày, tháng, năm sinh:</span>
            <span style="{{$toadocn->toado3}}"  id="flying3">{{getDayVn($model->ngaysinhchanuoi)}}</span>
        </td>
        <td colspan="2"><span style="visibility: hidden;"  class="noPrint">Ngày, tháng, năm sinh:</span>
            <span style="{{$toadocn->toado4}}"  id="flying4">{{getDayVn($model->ngaysinhmenuoi)}}</span>
        </td>
    </tr>
    <tr>
        <td><span style="visibility: hidden;" class="noPrint">Dân tộc:</span>
            <span style="{{$toadocn->toado5}}"  id="flying5">{{$model->dantocchanuoi}}</span>
        </td>
        <td><span style="visibility: hidden;" class="noPrint">Quốc tịch:</span>
            <span style="{{$toadocn->toado6}}"  id="flying6">{{$model->quoctichchanuoi}}</span>
        </td>
        <td><span style="visibility: hidden;" class="noPrint">Dân tộc:</span>
            <span style="{{$toadocn->toado7}}"  id="flying7">{{$model->dantocmenuoi}}</span>
        </td>
        <td><span style="visibility: hidden;" class="noPrint">Quốc tịch:</span>
            <span style="{{$toadocn->toado8}}"  id="flying8">{{$model->quoctichmenuoi}}</span>
        </td>
    </tr>
    <tr>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint">Số Giấy CMND/Hộ chiếu:</span>
            <span style="{{$toadocn->toado9}}"  id="flying9">{{$model->cmndchanuoi}}</span>
        </td>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint">Số Giấy CMND/Hộ chiếu:</span>
            <span style="{{$toadocn->toado10}}"  id="flying10">{{$model->cmndmenuoi}}</span>
        </td>
    </tr>
    <tr>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint">Nơi cấp:</span>
            <span style="{{$toadocn->toado11}}"  id="flying11">{{$model->noicapgtcn}}</span>
        </td>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint">Nơi cấp:</span>
            <span style="{{$toadocn->toado12}}"  id="flying12">{{$model->noicapgtmn}}</span>
        </td>
    </tr>
    <tr>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint">Ngày, tháng, năm cấp:</span>
            <span style="{{$toadocn->toado13}}"  id="flying13">{{getDayVn($model->ngaycapgtcn)}}</span>
        </td>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint">Ngày, tháng, năm cấp:</span>
            <span style="{{$toadocn->toado14}}"  id="flying14">{{getDayVn($model->ngaycapgtmn)}}</span>
        </td>
    </tr>
    <tr>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint">Nơi thường trú:</span>
            <span style="{{$toadocn->toado15}}"  id="flying15"><p style="line-height: 160%;width: 300px;word-wrap: break-word;">{{$model->thuongtrucn}}</p></span>
        </td>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint">Nơi thường trú:</span>
            <span style="{{$toadocn->toado16}}"  id="flying16"><p style="line-height: 160%;width: 300px;word-wrap: break-word;">{{$model->thuongtrumn}}</p></span>
        </td>
    </tr>
    <tr>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint"><b>Họ và tên con nuôi:</b></span><b>
                <span style="{{$toadocn->toado17}}"  id="flying17">{{$model->hotenconnuoi}}</span></b>
        </td>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint">Giới tính:</span><b>
                <span style="{{$toadocn->toado18}}"  id="flying18">{{$model->gioitinhconnuoi}}</span></b>
        </td>
    </tr>
    <tr>
        <td colspan="4"><span style="visibility: hidden;" class="noPrint">Ngày, tháng, năm sinh:</span>
            <span style="{{$toadocn->toado19}}"  id="flying19">{{getDayVn($model->ngaysinhconnuoi)}}</span>
        </td>
    </tr>
    <tr>
        <td colspan="4"><span style="visibility: hidden;" class="noPrint">Nơi sinh:</span>
            <span style="{{$toadocn->toado20}}"  id="flying20">{{$model->noisinhconnuoi}}</span>
        </td>
    </tr>
    <tr>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint">Dân tộc:</span>
            <span style="{{$toadocn->toado21}}"  id="flying21">{{$model->dantocconnuoi}}</span>
        </td>
        <td colspan="2"><span style="visibility: hidden;" class="noPrint">Quốc tịch:</span>
            <span style="{{$toadocn->toado22}}"  id="flying22">{{$model->quoctichconnuoi}}</span>
        </td>
    </tr>
    <tr>
        <td colspan="4"><span style="visibility: hidden;" class="noPrint">Nơi thường trú:</span>
            <span style="{{$toadocn->toado23}}"  id="flying23">{{$model->thuongtruconnuoi}}</span>
        </td>
    </tr>
    <tr>
        <td colspan="4"><span style="visibility: hidden;" class="noPrint">Nơi đăng ký việc nuôi con nuôi:</span>
            <span style="{{$toadocn->toado24}}"  id="flying24">{{$model->noidkconnuoi}}</span>
        </td>
    </tr>
    <tr>
        <td colspan="4"><span style="visibility: hidden;" class="noPrint">Ngày, tháng, năm đăng ký:</span>
            <span style="{{$toadocn->toado25}}"  id="flying25">{{getDayVn($model->ngaythangdk)}}</span>
        </td>
    </tr>
    <tr>
        <td colspan="4"><span style="visibility: hidden;" class="noPrint">Ghi chú:</span>
            <span style="{{$toadocn->toado26}}"  id="flying26">{{$model->ghichu}}</span>
        </td>
    </tr>
</table>
<table  width="95%" border="0" cellspacing="0" cellpadding="8" style="font-size:25px;border-collapse: collapse; margin:20px auto">
    <tr>
        <td><i style="visibility: hidden;" class="noPrint">Vào Sổ đăng ký nuôi con nuôi</i><br>
             <span style="{{$toadocn->toado27}}"  id="flying27">{{date('d',strtotime($model->ngaythangdk))}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{date('m',strtotime($model->ngaythangdk))}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{date('Y',strtotime($model->ngaythangdk))}}</span><br><b style="visibility: hidden;">Người thực hiện</b><br><i style="visibility: hidden;">(Ký ghi rõ họ tên)</i></td>
        <td><b style="visibility: hidden;"  class="noPrint">NGƯỜI KÝ GIẤY CHỨNG NHẬN NUÔI CON NUÔI</b><br><i style="visibility: hidden;">(Ký, ghi rõ họ tên,chức vụ và đóng dấu)</i></td>
    </tr>
    <tr>
        <td><span style="{{$toadocn->toado28}}"  id="flying28">{{$model->nguoithuchien}}</span></td>
        <td><span style="{{$toadocn->toado29}}"  id="flying29">{{$model->nguoikygiaycn}}</span></td>
    </tr>
</table>

</body>
</html>