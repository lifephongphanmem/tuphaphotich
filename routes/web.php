<?php

Route::get('/', 'HomeController@index');

// <editor-fold defaultstate="collapsed" desc="--Ajax--">
Route::get('/checkmahuyen','AjaxController@checkmahuyen');
Route::get('/checkmaxa','AjaxController@checkmaxa');
Route::get('/checkuser','AjaxController@checkuser');
Route::get('getXas','AjaxController@getXas');
Route::get('ajaxluutoado','AjaxController@luutoado');
// </editor-fold>//End Ajax

// <editor-fold defaultstate="collapsed" desc="--Setting--">
Route::get('cau_hinh_he_thong','GeneralConfigsController@index');
Route::get('cau_hinh_he_thong/create','GeneralConfigsController@create');
Route::post('cau_hinh_he_thong','GeneralConfigsController@store');
Route::get('cau_hinh_he_thong/{id}/edit','GeneralConfigsController@edit');
Route::patch('cau_hinh_he_thong/{id}','GeneralConfigsController@update');
Route::get('/setting','GeneralConfigsController@setting');
Route::post('/setting','GeneralConfigsController@upsetting');

//Users
Route::get('login','UsersController@login');
Route::post('signin','UsersController@signin');
Route::get('/change-password','UsersController@cp');
Route::post('/change-password','UsersController@cpw');
Route::get('/user_setting','UsersController@settinguser');
Route::post('/user_setting','UsersController@settinguserw');
//Route::get('/checkpass','UsersController@checkpass');
//Route::get('/checkuser','UsersController@checkuser');
Route::get('logout','UsersController@logout');
Route::get('users','UsersController@index');
Route::get('users/{id}/edit','UsersController@edit');
Route::patch('users/{id}','UsersController@update');
Route::get('users/{id}/permission','UsersController@permission');
Route::post('users/permission','UsersController@uppermission');
Route::post('users/delete','UsersController@destroy');
Route::get('users/lock/{ids}','UsersController@lockuser');
Route::get('users/unlock/{ids}','UsersController@unlockuser');

Route::get('users/print/pl={pl}','UsersController@prints');
//EndUsers

//Thông tin quận/huyện
Route::resource('districts','DistrictsController');
Route::post('districts/delete','DistrictsController@destroy');
//End Thông tin quận/huyện
//Thông tin xã phường
Route::resource('towns','TownsController');
Route::post('towns/delete','TownsController@destroy');
//End Thông tin xã phường

// </editor-fold>//End Setting

// <editor-fold defaultstate="collapsed" desc="--Reports--">
Route::get('reports','ReportsController@index');
Route::post('reports/sokhaisinh','ReportsController@sokhaisinh');
Route::post('reports/sotthonnhan','ReportsController@sotthonnhan');
Route::post('reports/sokhaitu','ReportsController@sokhaitu');
Route::post('reports/sokethon','ReportsController@sokethon');
Route::post('reports/sogiamho','ReportsController@sogiamho');
Route::post('reports/sochamdutgh','ReportsController@sochamdutgh');
Route::post('reports/sodknhancmc','ReportsController@sodknhancmc');
Route::post('reports/sotrichluc','ReportsController@sotrichluc');
Route::post('reports/soconnuoi','ReportsController@soconnuoi');
Route::post('reports/sothaydoi','ReportsController@sothaydoi');
Route::post('reports/bcksktkh','ReportsController@bcksktkh');
Route::post('reports/bchotichkhac','ReportsController@bchotichkhac');
Route::post('reports/bcconnuoi','ReportsController@bcconnuoi');
// </editor-fold>//End Reports

// <editor-fold defaultstate="collapsed" desc="--Manage--">
Route::resource('congdan','CongDanController');
Route::post('congdan/delete','CongDanController@destroy');

//Khai sinh

Route::resource('khaisinh','KhaiSinhController');
Route::get('khaisinh/{id}/show','KhaiSinhController@show');
Route::post('khaisinh/delete','KhaiSinhController@destroy');
Route::post('khaisinh/duyet','KhaiSinhController@duyet');
Route::get('khaisinh/{id}/prints','KhaiSinhController@prints');
Route::get('khaisinhs/{id}/printss','KhaiSinhController@printss');
Route::get('khaisinh/{id}/printsbansao','KhaiSinhController@printsbansao');
Route::get('khaisinh/{id}/printstokhai','KhaiSinhController@printstokhai');

Route::resource('dangkygiamho','giamhoController');
Route::post('dangkygiamho/delete','giamhoController@destroy');
Route::get('dangkygiamho/{id}/show','giamhoController@show');
Route::post('dangkygiamho/duyet','giamhoController@duyet');
Route::get('dangkygiamho/{id}/prints','giamhoController@prints');
Route::get('dangkygiamho/{id}/printsbansao','giamhoController@printsbansao');
Route::get('dangkygiamho/{id}/printstokhai','giamhoController@printstokhai');
Route::post('dangkygiamho/chamdut','giamhoController@chamdut');

Route::resource('dangkynhanchamecon','chameconController');
Route::post('dangkynhanchamecon/delete','chameconController@destroy');
Route::get('dangkynhanchamecon/{id}/show','chameconController@show');
Route::post('dangkynhanchamecon/duyet','chameconController@duyet');
Route::get('dangkynhanchamecon/{id}/prints','chameconController@prints');
Route::get('dangkynhanchamecon/{id}/printsbansao','chameconController@printsbansao');
Route::get('dangkynhanchamecon/{id}/printstokhai','chameconController@printstokhai');

//End khai sinh

//Khai tử

Route::resource('khaitu','KhaiTuController');
Route::get('khaitu/{id}/show','KhaiTuController@show');
Route::post('khaitu/duyet','KhaiTuController@duyet');
Route::post('khaitu/delete','KhaiTuController@destroy');
Route::get('khaitu/{id}/prints','KhaiTuController@prints');
Route::get('khaitu/{id}/printsbansao','KhaiTuController@printsbansao');
Route::get('khaitu/{id}/printstokhai','KhaiTuController@printstokhai');

//End khai tử

//Con nuôi

Route::resource('dangkyconnuoi','ConNuoiController');
Route::get('dangkyconnuoi/{id}/show','ConNuoiController@show');
Route::post('dangkyconnuoi/duyet','ConNuoiController@duyet');
Route::post('dangkyconnuoi/delete','ConNuoiController@destroy');
Route::get('dangkyconnuoi/{id}/prints','ConNuoiController@prints');
Route::get('dangkyconnuois/{id}/printss','ConNuoiController@printss');
Route::get('dangkyconnuoi/{id}/printsbansao','ConNuoiController@printsbansao');
Route::get('dangkyconnuoi/{id}/printstokhai','ConNuoiController@printstokhai');

//End con nuôi

//Tình trạn hôn nhân

Route::resource('tthonnhan','TTHonNhanController');
Route::get('tthonnhan/{id}/show','TTHonNhanController@show');
Route::post('tthonnhan/delete','TTHonNhanController@destroy');
Route::post('tthonnhan/duyet','TTHonNhanController@duyet');
Route::get('tthonnhan/{id}/prints','TTHonNhanController@prints');
Route::get('tthonnhan/{id}/printstokhai','TTHonNhanController@printstokhai');

// </editor-fold>//End Manage

//Kết hôn
Route::resource('kethon','KetHonController');
Route::get('kethon/{id}/show','KetHonController@show');
Route::post('kethon/delete','KetHonController@destroy');
Route::post('kethon/duyet','KetHonController@duyet');
Route::get('kethon/{id}/prints','KetHonController@prints');
Route::get('kethon/{id}/printsbansao','KetHonController@printsbansao');
Route::get('kethons/{id}/printss','KetHonController@printss');
Route::post('kethon/printsgs','KetHonController@printsgs');
Route::get('kethon/{id}/printstokhai','KetHonController@printstokhai');
//End kết hôn

//Trích lục
Route::resource('capbansaotrichluc','CapBanSaoTrichLucController');
Route::get('capbansaotrichluc/{id}/show','CapBanSaoTrichLucController@show');
Route::post('capbansaotrichluc/delete','CapBanSaoTrichLucController@destroy');
Route::post('capbansaotrichluc/duyet','CapBanSaoTrichLucController@duyet');
Route::get('capbansaotrichluc/{id}/prints','CapBanSaoTrichLucController@prints');
//End Trích lục
//Sổ hộ tịch
Route::resource('sohotich','SoHoTichController');
Route::post('sohotich/delete','SoHoTichController@destroy');
//End Trích lục



//Thay đổi bổ sung
Route::group(['prefix'=>'thaydoibosung'],function (){
    //Khai sinh
    Route::get('kscreate/{id}','ThayDoiBoSungController@kscreate');
    Route::post('luukhaisinhbs/{id}','ThayDoiBoSungController@luukhaisinhbs');
    Route::post('khaisinhbs/duyet','ThayDoiBoSungController@duyetks');
    Route::get('showkhaisinhbs/{id}','ThayDoiBoSungController@showks');
    Route::post('updateksbs/{id}','ThayDoiBoSungController@updateksbs');
    Route::post('ksbs/delete','ThayDoiBoSungController@destroyksbs');
    Route::get('printstokhaitdks/{id}','ThayDoiBoSungController@printstokhaitdks');
    Route::get('printstrichlucksbs/{id}','ThayDoiBoSungController@printstrichlucksbs');
    Route::get('printstrichlucksbc/{id}','ThayDoiBoSungController@printstrichlucksbc');
    //Khai tử
    Route::get('ktcreate/{id}','ThayDoiBoSungController@ktcreate');
    Route::post('luukhaitubs/{id}','ThayDoiBoSungController@luukhaitubs');
    Route::post('khaitubs/duyet','ThayDoiBoSungController@duyetkt');
    Route::get('showkhaitubs/{id}','ThayDoiBoSungController@showkt');
    Route::post('updatektbs/{id}','ThayDoiBoSungController@updatektbs');
    Route::post('ktbs/delete','ThayDoiBoSungController@destroyktbs');
    Route::get('printstokhaitdkt/{id}','ThayDoiBoSungController@printstokhaitdkt');
    Route::get('printstrichlucktbs/{id}','ThayDoiBoSungController@printstrichlucktbs');
    Route::get('printstrichlucktbc/{id}','ThayDoiBoSungController@printstrichlucktbc');
    //Xác nhận tình trạng hôn nhân
    Route::get('tthncreate/{id}','ThayDoiBoSungController@tthncreate');
    Route::post('luutthnbs/{id}','ThayDoiBoSungController@luutthnbs');
    Route::post('tthnbs/duyet','ThayDoiBoSungController@duyettthn');
    Route::get('showtthnbs/{id}','ThayDoiBoSungController@showtthn');
    Route::post('updatetthnbs/{id}','ThayDoiBoSungController@updatetthnbs');
    Route::post('tthnbs/delete','ThayDoiBoSungController@destroytthnbs');
    Route::get('printstokhaitdtthn/{id}','ThayDoiBoSungController@printstokhaitdtthn');
    Route::get('printstrichluctthnbs/{id}','ThayDoiBoSungController@printstrichluctthnbs');
    Route::get('printstrichluctthnbc/{id}','ThayDoiBoSungController@printstrichluctthnbc');
    //Thông tin kết hôn
    Route::get('khcreate/{id}','ThayDoiBoSungController@khcreate');
    Route::post('luukethonbs/{id}','ThayDoiBoSungController@luukethonbs');
    Route::post('kethonbs/duyet','ThayDoiBoSungController@duyetkh');
    Route::get('showkethonbs/{id}','ThayDoiBoSungController@showkh');
    Route::post('updatekhbs/{id}','ThayDoiBoSungController@updatekhbs');
    Route::post('khbs/delete','ThayDoiBoSungController@destroykhbs');
    Route::get('printstokhaitdkh/{id}','ThayDoiBoSungController@printstokhaitdkh');
    Route::get('printstrichluckhbs/{id}','ThayDoiBoSungController@printstrichluckhbs');
    Route::get('printstrichluckhbc/{id}','ThayDoiBoSungController@printstrichluckhbc');
    //Đăng ký con nuôi
    Route::get('cncreate/{id}','ThayDoiBoSungController@cncreate');
    Route::post('luuconnuoibs/{id}','ThayDoiBoSungController@luuconnuoibs');
    Route::post('connuoibs/duyet','ThayDoiBoSungController@duyetcn');
    Route::get('showconnuoibs/{id}','ThayDoiBoSungController@showcn');
    Route::post('updatecnbs/{id}','ThayDoiBoSungController@updatecnbs');
    Route::post('cnbs/delete','ThayDoiBoSungController@destroycnbs');
    Route::get('printstokhaitdcn/{id}','ThayDoiBoSungController@printstokhaitdcn');
    Route::get('printstrichluccnbs/{id}','ThayDoiBoSungController@printstrichluccnbs');
    Route::get('printstrichluccnbc/{id}','ThayDoiBoSungController@printstrichluccnbc');
    //Đăng ký giám hộ
    Route::get('ghcreate/{id}','ThayDoiBoSungController@ghcreate');
    Route::post('luugiamhobs/{id}','ThayDoiBoSungController@luugiamhobs');
    Route::post('giamhobs/duyet','ThayDoiBoSungController@duyetgh');
    Route::get('showgiamhobs/{id}','ThayDoiBoSungController@showgh');
    Route::post('updateghbs/{id}','ThayDoiBoSungController@updateghbs');
    Route::post('ghbs/delete','ThayDoiBoSungController@destroyghbs');
    Route::get('printstokhaitdgh/{id}','ThayDoiBoSungController@printstokhaitdgh');
    Route::get('printstrichlucghbs/{id}','ThayDoiBoSungController@printstrichlucghbs');
    Route::get('printstrichlucghbc/{id}','ThayDoiBoSungController@printstrichlucghbc');
    //Đăng ký nhận cha mẹ con
    Route::get('cmccreate/{id}','ThayDoiBoSungController@cmccreate');
    Route::post('luucmcbs/{id}','ThayDoiBoSungController@luucmcbs');
    Route::post('cmcbs/duyet','ThayDoiBoSungController@duyetcmc');
    Route::get('showcmcbs/{id}','ThayDoiBoSungController@showcmc');
    Route::post('updatecmcbs/{id}','ThayDoiBoSungController@updatecmcbs');
    Route::post('cmcbs/delete','ThayDoiBoSungController@destroycmcbs');
    Route::get('printstokhaitdcmc/{id}','ThayDoiBoSungController@printstokhaitdcmc');
    Route::get('printstrichluccmcbs/{id}','ThayDoiBoSungController@printstrichluccmcbs');
    Route::get('printstrichluccmcbc/{id}','ThayDoiBoSungController@printstrichluccmcbc');

});

// Xem danh sách khai sinh các xã (Đối với Phòng tư pháp)
Route::get('xemdanhsachxa/khaisinh','DanhsachxaController@khaisinh');
Route::get('xemdanhsachxa/khaitu','DanhsachxaController@khaitu');
Route::get('xemdanhsachxa/tthn','DanhsachxaController@tthn');
Route::get('xemdanhsachxa/kethon','DanhsachxaController@kethon');
Route::get('xemdanhsachxa/connuoi','DanhsachxaController@connuoi');
Route::get('xemdanhsachxa/giamho','DanhsachxaController@giamho');
Route::get('xemdanhsachxa/cmc','DanhsachxaController@cmc');
Route::get('xemdanhsachxa/captrichluc','DanhsachxaController@captrichluc');

// toạ độ cũ
Route::get('toadocu',function(){
 $model = \App\ToaDoKH::all();
    return view('manage.convertdl.index')
        ->with('model',$model)
        ->with('pageTitle','Dữ liệu tọa độ KH');
});
Route::get('toadoupdate',function(){
    $model = \App\ToaDoKH::all();
    //dd($model);

    foreach($model as $key=>$tt){
        $key = $key+1;
        $modelnew = new \App\toado();
        if($tt->maxa == '')
            $modelnew->level ='H';
        else
            $modelnew->level ='X';
        $modelnew->maxa =  $tt->maxa;
        $modelnew->mahuyen =  $tt->mahuyen;
        $modelnew->phanloai = $tt->phanloai;
        $modelnew->toado = 'top:'.($tt->toado1 != '' ? $tt->toado1 : 0).'px;left:'.($tt->toado2 != '' ? $tt->toado2 : 0).'px';
        $modelnew->toado1 = 'top:'.($tt->toado3 != '' ? $tt->toado3 : 0).'px;left:'.($tt->toado4 != '' ? $tt->toado4 : 0).'px';
        $modelnew->toado2 = 'top:'.($tt->toado5 != '' ? $tt->toado5 : 0).'px;left:'.($tt->toado6 != '' ? $tt->toado6 : 0).'px';
        $modelnew->toado3 = 'top:'.($tt->toado7 != '' ? $tt->toado7 : 0).'px;left:'.($tt->toado8 != '' ? $tt->toado8 : 0).'px';
        $modelnew->toado4 = 'top:'.($tt->toado9 != '' ? $tt->toado9 : 0).'px;left:'.($tt->toado10 != '' ? $tt->toado10 : 0).'px';
        $modelnew->toado5 = 'top:'.($tt->toado11 != '' ? $tt->toado11 : 0).'px;left:'.($tt->toado12 != '' ? $tt->toado12 : 0).'px';
        $modelnew->toado6 = 'top:'.($tt->toado13 != '' ? $tt->toado13 : 0).'px;left:'.($tt->toado14 != '' ? $tt->toado14 : 0).'px';
        $modelnew->toado7 = 'top:'.($tt->toado15 != '' ? $tt->toado15 : 0).'px;left:'.($tt->toado16 != '' ? $tt->toado16 : 0).'px';
        $modelnew->toado8 = 'top:'.($tt->toado17 != '' ? $tt->toado17 : 0).'px;left:'.($tt->toado18 != '' ? $tt->toado18 : 0).'px';
        $modelnew->toado9 = 'top:'.($tt->toado19 != '' ? $tt->toado19 : 0).'px;left:'.($tt->toado20 != '' ? $tt->toado20 : 0).'px';
        $modelnew->toado10 = 'top:'.($tt->toado21 != '' ? $tt->toado21 : 0).'px;left:'.($tt->toado22 != '' ? $tt->toado22 : 0).'px';
        $modelnew->toado11 = 'top:'.($tt->toado23 != '' ? $tt->toado23 : 0).'px;left:'.($tt->toado24 != '' ? $tt->toado24 : 0).'px';
        $modelnew->toado12 = 'top:'.($tt->toado25 != '' ? $tt->toado25 : 0).'px;left:'.($tt->toado26 != '' ? $tt->toado26 : 0).'px';
        $modelnew->toado13 = 'top:'.($tt->toado27 != '' ? $tt->toado27 : 0).'px;left:'.($tt->toado28 != '' ? $tt->toado28 : 0).'px';
        $modelnew->toado14 = 'top:'.($tt->toado29 != '' ? $tt->toado29 : 0).'px;left:'.($tt->toado30 != '' ? $tt->toado30 : 0).'px';
        $modelnew->toado15 = 'top:'.($tt->toado31 != '' ? $tt->toado31 : 0).'px;left:'.($tt->toado32 != '' ? $tt->toado32 : 0).'px';
        $modelnew->toado16 = 'top:'.($tt->toado33 != '' ? $tt->toado33 : 0).'px;left:'.($tt->toado34 != '' ? $tt->toado34 : 0).'px';
        $modelnew->toado17 = 'top:'.($tt->toado35 != '' ? $tt->toado35 : 0).'px;left:'.($tt->toado36 != '' ? $tt->toado36 : 0).'px';
        $modelnew->toado18 = 'top:'.($tt->toado37 != '' ? $tt->toado37 : 0).'px;left:'.($tt->toado38 != '' ? $tt->toado38 : 0).'px';
        $modelnew->toado19 = 'top:'.($tt->toado39 != '' ? $tt->toado39 : 0).'px;left:'.($tt->toado40 != '' ? $tt->toado40 : 0).'px';
        $modelnew->toado20 = 'top:'.($tt->toado41 != '' ? $tt->toado41 : 0).'px;left:'.($tt->toado42 != '' ? $tt->toado42 : 0).'px';
        $modelnew->toado21 = 'top:'.($tt->toado43 != '' ? $tt->toado43 : 0).'px;left:'.($tt->toado44 != '' ? $tt->toado44 : 0).'px';
        $modelnew->toado22 = 'top:'.($tt->toado45 != '' ? $tt->toado45 : 0).'px;left:'.($tt->toado46 != '' ? $tt->toado46 : 0).'px';
        $modelnew->toado23 = 'top:'.($tt->toado47 != '' ? $tt->toado47 : 0).'px;left:'.($tt->toado48 != '' ? $tt->toado48 : 0).'px';
        $modelnew->toado24 = 'top:'.($tt->toado49 != '' ? $tt->toado49 : 0).'px;left:'.($tt->toado50 != '' ? $tt->toado50 : 0).'px';
        $modelnew->toado25 = 'top:'.($tt->toado51 != '' ? $tt->toado51 : 0).'px;left:'.($tt->toado52 != '' ? $tt->toado52 : 0).'px';
        $modelnew->toado26 = 'top:'.($tt->toado53 != '' ? $tt->toado53 : 0).'px;left:'.($tt->toado54 != '' ? $tt->toado54 : 0).'px';
        $modelnew->toado27 = 'top:'.($tt->toado55 != '' ? $tt->toado55 : 0).'px;left:'.($tt->toado56 != '' ? $tt->toado56 : 0).'px';
        $modelnew->toado28 = 'top:'.($tt->toado57 != '' ? $tt->toado57 : 0).'px;left:'.($tt->toado58 != '' ? $tt->toado58 : 0).'px';
        $modelnew->toado29 = 'top:'.($tt->toado59 != '' ? $tt->toado59 : 0).'px;left:'.($tt->toado60 != '' ? $tt->toado60 : 0).'px';
        $modelnew->toado30 = 'top:'.($tt->toado61 != '' ? $tt->toado61 : 0).'px;left:'.($tt->toado62 != '' ? $tt->toado62 : 0).'px';
        $modelnew->toado31 = 'top:'.($tt->toado63 != '' ? $tt->toado63 : 0).'px;left:'.($tt->toado64 != '' ? $tt->toado64 : 0).'px';
        $modelnew->toado32 = 'top:'.($tt->toado65 != '' ? $tt->toado65 : 0 ).'px;left:'.($tt->toado66 != '' ? $tt->toado66 :0).'px';
        $modelnew->save();
    }

    return redirect('toadomoi');

});

Route::get('toadomoi',function(){
    $model = \App\toado::all();
    return view('manage.convertdl.indexshow')
        ->with('model',$model)
        ->with('pageTitle','Dữ liệu tọa độ moi');
});

//End Thay đổi bổ sung

Route::get('test',function(){
    dd(getDateText('2017-05-05'));
});


