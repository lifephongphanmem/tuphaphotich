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
            var x18 = $("#flying18").position();var x19 = $("#flying19").position();var x20 = $("#flying20").position();
           /* var xa1  = '&xa1=' + x.top ;
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
            var url = current_path_url;
            window.location.href = url+xa1+xa2+xa3+xa4+xa5+xa6+xa7+xa8+xa9+xa10+xa11+xa12+xa13+xa14+xa15+xa16+xa17+xa18+xa19+xa20+xa21+xa22+xa23+xa24+xa25+xa26
                +xa27+xa28+xa29+xa30+xa31+xa32+xa33+xa34+xa35+xa36+xa37+xa38+xa39+xa40+xa41+xa42;
        });*/
            $.ajax({
                type: 'GET',
                url: '/ajaxluutoado',
                data: {
                    _token: CSRF_TOKEN,
                    toado: 'top:' + x.top + 'px;left:' + x.left + 'px',
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
                    phanloai: 'GKH'
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
    #flying,#flying1 ,#flying2, #flying3, #flying4,#flying5,#flying6,#flying7,#flying8,#flying9,#flying10,
    #flying11,#flying12,#flying13,#flying14,#flying15,#flying16,#flying17,#flying18,#flying19,#flying20 {  position: absolute;  }
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
<body style="font-size: 17px; width:99%;">
<table width="96%" border="0" cellspacing="0" cellpadding="4" style="margin:0 auto 5px; text-align: center;">
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
            <img class="noPrint" src="{{url('images/quochuy.png')}}" width="80">
        </td>
        <td>
            <p style="text-align:left"><span class="noPrint">Số:</span> <label style="{{$toadokh->toado}}" id="flying">lock</label></p>
        </td>
        <td style="font-size:29px;vertical-align: bottom"><label style="{{$toadokh->toado18}}" id="flying18"><b>{{$model->sokethon}}</b></label></td>
    </tr>
    <tr>
    </tr>
</table>
<table width="96%" border="0" cellspacing="0" cellpadding="8" style="margin: auto auto; text-align: center;font-size: 25px">
    <tr>
        <td>
            <b class="noPrint">GIẤY CHỨNG NHẬN KẾT HÔN</b>
        </td>
    </tr>
</table>
<table  width="80%" border="0" cellspacing="0" cellpadding="8" style="font-size:25px;border-collapse: collapse; margin:20px auto 0px">
    <tr>
        <td style="width: 50%">
            <table width="100%" border="0" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin:0 auto 25px">
                <tr>
                    <td>
                        <b style="visibility: hidden;">Họ, chữ đệm, tên vợ: </b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b style="visibility: hidden">x</b>
                        <label style="{{$toadokh->toado1}}"  id="flying1">
                            <span  style="text-transform: uppercase">{{$model->hotenvo}}</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <span style="visibility: hidden;" class="noPrint">Ngày, tháng, năm sinh:</span>
                        <label style="{{$toadokh->toado2}}"  id="flying2">{{getDayVn($model->ngaysinhvo)}}</label>
                    </td>
                </tr>
                <tr><td><span style="visibility: hidden;">Dân tộc:</span>  <label style="{{$toadokh->toado3}}" id="flying3">{{$model->dantocvo}}</label></td> </tr>
                <tr><td><span style="visibility: hidden;">Quốc tịch:</span> <label style="{{$toadokh->toado4}}"  id="flying4">{{$model->quoctichvo}}</label></td> </tr>
                <tr><td><span style="visibility: hidden;">Nơi cư trú:</span> <label style="{{$toadokh->toado5}}" id="flying5"><p style="line-height: 160%;width: 300px;word-wrap: break-word;">{{$model->diachivo}}</p></label></td> </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td><span style="visibility: hidden;">Giấy tờ tùy thân:</span>
                        <label style="{{$toadokh->toado6}}" id="flying6">@if($model->sogiaytovo =='') @else{{$model->loaigiaytovo}} số {{$model->sogiaytovo}} do @endif</label></td> </tr>
                        <label style="{{$toadokh->toado20}}" id="flying20">@if($model->sogiaytovo =='') @else {{$model->noicapvo}} cấp ngày {{getDayVn($model->ngaycapvo)}} @endif</label></td> </tr>
            </table>
        </td>
        <td style="width: 50%">
            <table width="100%" border="0" cellspacing="0" cellpadding="8" style="font-size:25px;;border-collapse: collapse; margin:0 auto 25px">
                <tr>
                    <td>
                        <b style="visibility: hidden;">Họ, chữ đệm, tên chồng: </b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b style="visibility: hidden">x</b><label style="{{$toadokh->toado7}}" id="flying7" ><span style="text-transform: uppercase">{{$model->hotenchong}}</span></label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr><td><span style="visibility: hidden;">Ngày, tháng, năm sinh:</span> <label style="{{$toadokh->toado8}}" id="flying8">{{getDayVn($model->ngaysinhchong)}}</label></td></tr>
                <tr><td><span style="visibility: hidden;">Dân tộc:</span> <label style="{{$toadokh->toado9}}" id="flying9">{{$model->dantocchong}}</label></td></tr>
                <tr><td><span style="visibility: hidden;">Quốc tịch:</span> <label style="{{$toadokh->toado10}}" id="flying10">{{$model->quoctichchong}}</label> </td></tr>
                <tr><td><span style="visibility: hidden;">Nơi cư trú:</span> <label style="{{$toadokh->toado11}}" id="flying11">{{$model->diachichong}}</label></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td><span style="visibility: hidden;">Giấy tờ tùy thân:</span>
                        <label style="{{$toadokh->toado12}}" id="flying12">@if($model->sogiaytochong =="" ) @else {{$model->loaigiaytochong}} số {{$model->sogiaytochong}} do @endif</label>
                        <label style="{{$toadokh->toado19}}" id="flying19">@if($model->sogiaytochong =="" ) @else {{$model->noicapchong}} cấp ngày {{getDayVn($model->ngaycapchong)}} @endif</label>
                    </td></tr>
            </table>
        </td>
    </tr>
</table>
<table width="60%" border="0" cellspacing="0" cellpadding="8" style="font-size:25px;;border-collapse: collapse; margin:20px auto">
    <tr><td><span style="visibility: hidden;">Nơi đăng ký kết hôn: </span>
            <label style="{{$toadokh->toado13}}" id="flying13">
                @if(session('admin')->name=="Phòng tư Pháp huyện Yên Minh")
                    {{"Phòng tư Pháp huyện Yên Minh"}}
                @elseif(session('admin')->name=="Phòng tư Pháp huyện Đồng Văn")
                    {{"Phòng tư Pháp huyện Đồng Văn"}}
                @else
                    {{$xa}}, {{$huyen}}, Tỉnh Hà Giang
                @endif
            </label></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td><span style="visibility: hidden;">Ngày tháng đăng ký:</span> <label style="{{$toadokh->toado14}}" id="flying14">{{getDayVn($model->ngaydangky)}}</label></td></tr>
</table>
<table border="0" width="95%" style="font-size:25px;margin:auto; text-align: center;" cellspacing="0" cellpadding="8">
    <tr>
        <td width="50%">
            <table style="margin:auto; text-align: center;">
                <tr><td><b style="visibility: hidden;">Vợ</b></td></tr>
                <tr><td><i style="visibility: hidden;">(Ký, ghi rõ họ, chữ đệm, tên)</i></td></tr>
            </table>
        </td>
        <td width="50%">
            <table style="margin:auto; text-align: center;">
                <tr><td><b style="visibility: hidden;">Chồng</b></td></tr>
                <tr><td><i style="visibility: hidden;">(Ký, ghi rõ họ, chữ đệm, tên)</i></td></tr>
            </table>
        </td>
    </tr>
    <tr style="height: 100px">
        <td>
            <label style="{{$toadokh->toado15}}" id="flying15"><b>{{$model->hotenvo}}</b></label>
        </td>
        <td>
            <label style="{{$toadokh->toado16}}" id="flying16"><b>{{$model->hotenchong}}</b></label>
        </td>
    </tr>
    <tr>
        <td width="40%"></td>
        <td>
            <table style="font-size:29px;;margin:auto; text-align: center;">
                <tr><td><b style="visibility: hidden;">NGƯỜI KÝ GIẤY CHỨNG NHẬN KẾT HÔN</b></td></tr>
                <tr><td><i style="visibility: hidden;">(Ký, ghi rõ họ, chữ đệm, tên, chức vụ và đóng dấu)</i></td></tr>
            </table>
        </td>
    </tr>
    <tr style="height: 100px;text-align: center">
        <td style="width: 40%;vertical-align: bottom"><b></b></td>
        <td style=";vertical-align: bottom"><label style="{{$toadokh->toado17}}" id="flying17"><b>{{$model->nguoiky}}</b></label></td>
    </tr>
</table>
</body>
</html>