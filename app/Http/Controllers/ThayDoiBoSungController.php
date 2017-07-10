<?php

namespace App\Http\Controllers;

use App\DanToc;
use App\Districts;
use App\GeneralConfigs;
use App\KetHon;
use App\KhaiSinh;
use App\KhaiTu;
use App\SoHoTich;
use App\ThongTinThayDoi;
use App\Towns;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ThayDoiBoSungController extends Controller
{
    //Khai sinh
    public function kscreate($id)
    {
        if (Session::has('admin')) {
            if(session('admin')->level == 'T'){
                $huyens = Districts::all();
                $huyendf = Districts::first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }elseif(session('admin')->level =='H'){
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }else{
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->where('maxa',session('admin')->maxa)->first()->maxa;
            }

            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.khaisinh.include.thaydoi')
                ->with('huyens',$huyens)
                ->with('mahuyen',$huyendf)
                ->with('xas',$xas)
                ->with('maxa',$xadf)
                ->with('mahs',$id)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle','Thêm mới thông tin thay đổi');
        }else
            return view('errors.notlogin');
    }

    public function luukhaisinhbs(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $modelsohotich =  SoHoTich::where('plhotich','Thay đổi bổ xung')
                ->where('namso',date('Y'))->first()->quyenhotich;
            $inputs['quyentd'] = (isset($modelsohotich)) ? $modelsohotich : getmatinh().$inputs['mahuyen'].$inputs['maxa'].'KS'.date('Y');

            $inputs['sotd'] = $this->getSothaydoiKS($inputs['maxa'],$inputs['mahuyen'],$inputs['quyentd'] );
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $inputs['plgiayto'] = "Khai sinh";
            $inputs['trangthai'] = "Chờ duyệt";
            $model = new ThongTinThayDoi();
            $model->create($inputs);
            return redirect('khaisinh');
        }else
            return view('errors.notlogin');
    }

    public function getSothaydoiKS($maxa,$mahuyen,$quyentd){
        $idmax = ThongTinThayDoi::where('maxa',$maxa)
            ->where('mahuyen',$mahuyen)
            ->where('quyentd',$quyentd)
            ->max('id');
        if($idmax==null)
            $stt = 1;
        else{
            $model =ThongTinThayDoi::where('id', $idmax)->first();
            $stt = $model->sotd + 1;
        }
        return $stt;
    }

    public function duyetks(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $model = ThongTinThayDoi::find($id);
            $model->trangthai = 'Duyệt';
            $model->save();
            return redirect('khaisinh');

        }else
            return view('errors.notlogin');
    }

    public function showks($id)
    {
        if (Session::has('admin')) {

            $model = ThongTinThayDoi::find($id);
            $xas = Towns::where('maxa',$model->maxa)->first()->tenxa;
            $huyens = Districts::where('mahuyen',$model->mahuyen)->first()->tenhuyen;
            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.khaisinh.include.showthaydoi')
                ->with('mahs',$id)
                ->with('xas',$xas)
                ->with('huyens',$huyens)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('model', $model)
                ->with('pageTitle','Thêm mới thông tin thay đổi');

        }else
            return view('errors.notlogin');
    }

    public function updateksbs(Request $request,$id)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model = ThongTinThayDoi::find($id);
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $model->update($inputs);
            return redirect('khaisinh');

        }else
            return view('errors.notlogin');
    }

   //Khai tử

    public function ktcreate($id)
    {
        if (Session::has('admin')) {
            if(session('admin')->level == 'T'){
                $huyens = Districts::all();
                $huyendf = Districts::first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }elseif(session('admin')->level =='H'){
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }else{
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->where('maxa',session('admin')->maxa)->first()->maxa;
            }

            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.khaitu.include.thaydoi')
                ->with('huyens',$huyens)
                ->with('mahuyen',$huyendf)
                ->with('xas',$xas)
                ->with('maxa',$xadf)
                ->with('mahs',$id)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle','Thêm mới thông tin thay đổi');
        }else
            return view('errors.notlogin');
    }

    public function luukhaitubs(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $modelsohotich =  SoHoTich::where('plhotich','Thay đổi bổ xung')
                ->where('namso',date('Y'))->first()->quyenhotich;
            $inputs['quyentd'] = (isset($modelsohotich)) ? $modelsohotich : getmatinh().$inputs['mahuyen'].$inputs['maxa'].'KS'.date('Y');

            $inputs['sotd'] = $this->getSothaydoiKT($inputs['maxa'],$inputs['mahuyen'],$inputs['quyentd'] );
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $inputs['plgiayto'] = "Khai tử";
            $inputs['trangthai'] = "Chờ duyệt";
            $model = new ThongTinThayDoi();
            $model->create($inputs);
            return redirect('khaitu');
        }else
            return view('errors.notlogin');
    }

    public function getSothaydoiKT($maxa,$mahuyen,$quyentd){
        $idmax = ThongTinThayDoi::where('maxa',$maxa)
            ->where('mahuyen',$mahuyen)
            ->where('quyentd',$quyentd)
            ->max('id');
        if($idmax==null)
            $stt = 1;
        else{
            $model =ThongTinThayDoi::where('id', $idmax)->first();
            $stt = $model->sotd + 1;
        }
        return $stt;
    }

    public function duyetkt(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $model = ThongTinThayDoi::find($id);
            $model->trangthai = 'Duyệt';
            $model->save();
            return redirect('khaitu');

        }else
            return view('errors.notlogin');
    }

    public function showkt($id)
    {
        if (Session::has('admin')) {

            $model = ThongTinThayDoi::find($id);
            $xas = Towns::where('maxa',$model->maxa)->first()->tenxa;
            $huyens = Districts::where('mahuyen',$model->mahuyen)->first()->tenhuyen;
            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.khaitu.include.showthaydoi')
                ->with('mahs',$id)
                ->with('xas',$xas)
                ->with('huyens',$huyens)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('model', $model)
                ->with('pageTitle','Thêm mới thông tin thay đổi');

        }else
            return view('errors.notlogin');
    }

    public function updatektbs(Request $request,$id)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model = ThongTinThayDoi::find($id);
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $model->update($inputs);
            return redirect('khaitu');

        }else
            return view('errors.notlogin');
    }

    //Xác nhận tình trạng hôn nhân

    public function tthncreate($id)
    {
        if (Session::has('admin')) {
            if(session('admin')->level == 'T'){
                $huyens = Districts::all();
                $huyendf = Districts::first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }elseif(session('admin')->level =='H'){
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }else{
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->where('maxa',session('admin')->maxa)->first()->maxa;
            }

            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.tthonnhan.include.thaydoi')
                ->with('huyens',$huyens)
                ->with('mahuyen',$huyendf)
                ->with('xas',$xas)
                ->with('maxa',$xadf)
                ->with('mahs',$id)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle','Thêm mới thông tin thay đổi');
        }else
            return view('errors.notlogin');
    }

    public function luutthnbs(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $modelsohotich =  SoHoTich::where('plhotich','Thay đổi bổ xung')
                ->where('namso',date('Y'))->first()->quyenhotich;
            $inputs['quyentd'] = (isset($modelsohotich)) ? $modelsohotich : getmatinh().$inputs['mahuyen'].$inputs['maxa'].'KS'.date('Y');

            $inputs['sotd'] = $this->getSothaydoiTTHN($inputs['maxa'],$inputs['mahuyen'],$inputs['quyentd'] );
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $inputs['plgiayto'] = "Tình trạng hôn nhân";
            $inputs['trangthai'] = "Chờ duyệt";
            $model = new ThongTinThayDoi();
            $model->create($inputs);
            return redirect('tthonnhan');
        }else
            return view('errors.notlogin');
    }

    public function getSothaydoiTTHN($maxa,$mahuyen,$quyentd){
        $idmax = ThongTinThayDoi::where('maxa',$maxa)
            ->where('mahuyen',$mahuyen)
            ->where('quyentd',$quyentd)
            ->max('id');
        if($idmax==null)
            $stt = 1;
        else{
            $model =ThongTinThayDoi::where('id', $idmax)->first();
            $stt = $model->sotd + 1;
        }
        return $stt;
    }

    public function duyettthn(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $model = ThongTinThayDoi::find($id);
            $model->trangthai = 'Duyệt';
            $model->save();
            return redirect('tthonnhan');

        }else
            return view('errors.notlogin');
    }

    public function showtthn($id)
    {
        if (Session::has('admin')) {

            $model = ThongTinThayDoi::find($id);
            $xas = Towns::where('maxa',$model->maxa)->first()->tenxa;
            $huyens = Districts::where('mahuyen',$model->mahuyen)->first()->tenhuyen;
            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.tthonnhan.include.showthaydoi')
                ->with('mahs',$id)
                ->with('xas',$xas)
                ->with('huyens',$huyens)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('model', $model)
                ->with('pageTitle','Thêm mới thông tin thay đổi');

        }else
            return view('errors.notlogin');
    }

    public function updatetthnbs(Request $request,$id)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model = ThongTinThayDoi::find($id);
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $model->update($inputs);
            return redirect('tthonnhan');

        }else
            return view('errors.notlogin');
    }

    //Thông tin kết hôn

    public function khcreate($id)
    {
        if (Session::has('admin')) {
            if(session('admin')->level == 'T'){
                $huyens = Districts::all();
                $huyendf = Districts::first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }elseif(session('admin')->level =='H'){
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }else{
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->where('maxa',session('admin')->maxa)->first()->maxa;
            }

            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.kethon.include.thaydoi')
                ->with('huyens',$huyens)
                ->with('mahuyen',$huyendf)
                ->with('xas',$xas)
                ->with('maxa',$xadf)
                ->with('mahs',$id)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle','Thêm mới thông tin thay đổi');
        }else
            return view('errors.notlogin');
    }

    public function luukethonbs(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $modelsohotich =  SoHoTich::where('plhotich','Thay đổi bổ xung')
                ->where('namso',date('Y'))->first()->quyenhotich;
            $inputs['quyentd'] = (isset($modelsohotich)) ? $modelsohotich : getmatinh().$inputs['mahuyen'].$inputs['maxa'].'KS'.date('Y');

            $inputs['sotd'] = $this->getSothaydoiKH($inputs['maxa'],$inputs['mahuyen'],$inputs['quyentd'] );
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $inputs['plgiayto'] = "Kết hôn";
            $inputs['trangthai'] = "Chờ duyệt";
            $model = new ThongTinThayDoi();
            $model->create($inputs);
            return redirect('kethon');
        }else
            return view('errors.notlogin');
    }

    public function getSothaydoiKH($maxa,$mahuyen,$quyentd){
        $idmax = ThongTinThayDoi::where('maxa',$maxa)
            ->where('mahuyen',$mahuyen)
            ->where('quyentd',$quyentd)
            ->max('id');
        if($idmax==null)
            $stt = 1;
        else{
            $model =ThongTinThayDoi::where('id', $idmax)->first();
            $stt = $model->sotd + 1;
        }
        return $stt;
    }

    public function duyetkh(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $model = ThongTinThayDoi::find($id);
            $model->trangthai = 'Duyệt';
            $model->save();
            return redirect('kethon');

        }else
            return view('errors.notlogin');
    }

    public function showkh($id)
    {
        if (Session::has('admin')) {

            $model = ThongTinThayDoi::find($id);
            $xas = Towns::where('maxa',$model->maxa)->first()->tenxa;
            $huyens = Districts::where('mahuyen',$model->mahuyen)->first()->tenhuyen;
            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.kethon.include.showthaydoi')
                ->with('mahs',$id)
                ->with('xas',$xas)
                ->with('huyens',$huyens)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('model', $model)
                ->with('pageTitle','Thêm mới thông tin thay đổi');

        }else
            return view('errors.notlogin');
    }

    public function updatekhbs(Request $request,$id)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model = ThongTinThayDoi::find($id);
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $model->update($inputs);
            return redirect('kethon');

        }else
            return view('errors.notlogin');
    }

    //Đăng ký con nuôi

    public function cncreate($id)
    {
        if (Session::has('admin')) {
            if(session('admin')->level == 'T'){
                $huyens = Districts::all();
                $huyendf = Districts::first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }elseif(session('admin')->level =='H'){
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }else{
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->where('maxa',session('admin')->maxa)->first()->maxa;
            }

            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.connuoi.include.thaydoi')
                ->with('huyens',$huyens)
                ->with('mahuyen',$huyendf)
                ->with('xas',$xas)
                ->with('maxa',$xadf)
                ->with('mahs',$id)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle','Thêm mới thông tin thay đổi');
        }else
            return view('errors.notlogin');
    }

    public function luuconnuoibs(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $modelsohotich =  SoHoTich::where('plhotich','Thay đổi bổ xung')
                ->where('namso',date('Y'))->first()->quyenhotich;
            $inputs['quyentd'] = (isset($modelsohotich)) ? $modelsohotich : getmatinh().$inputs['mahuyen'].$inputs['maxa'].'KS'.date('Y');

            $inputs['sotd'] = $this->getSothaydoiCN($inputs['maxa'],$inputs['mahuyen'],$inputs['quyentd'] );
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $inputs['plgiayto'] = "Con nuôi";
            $inputs['trangthai'] = "Chờ duyệt";
            $model = new ThongTinThayDoi();
            $model->create($inputs);
            return redirect('connuoi');
        }else
            return view('errors.notlogin');
    }

    public function getSothaydoiCN($maxa,$mahuyen,$quyentd){
        $idmax = ThongTinThayDoi::where('maxa',$maxa)
            ->where('mahuyen',$mahuyen)
            ->where('quyentd',$quyentd)
            ->max('id');
        if($idmax==null)
            $stt = 1;
        else{
            $model =ThongTinThayDoi::where('id', $idmax)->first();
            $stt = $model->sotd + 1;
        }
        return $stt;
    }

    public function duyetcn(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $model = ThongTinThayDoi::find($id);
            $model->trangthai = 'Duyệt';
            $model->save();
            return redirect('connuoi');

        }else
            return view('errors.notlogin');
    }

    public function showcn($id)
    {
        if (Session::has('admin')) {

            $model = ThongTinThayDoi::find($id);
            $xas = Towns::where('maxa',$model->maxa)->first()->tenxa;
            $huyens = Districts::where('mahuyen',$model->mahuyen)->first()->tenhuyen;
            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.connuoi.include.showthaydoi')
                ->with('mahs',$id)
                ->with('xas',$xas)
                ->with('huyens',$huyens)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('model', $model)
                ->with('pageTitle','Thêm mới thông tin thay đổi');

        }else
            return view('errors.notlogin');
    }

    public function updatecnbs(Request $request,$id)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model = ThongTinThayDoi::find($id);
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $model->update($inputs);
            return redirect('connuoi');

        }else
            return view('errors.notlogin');
    }

    //Đăng ký giám hộ

    public function ghcreate($id)
    {
        if (Session::has('admin')) {
            if(session('admin')->level == 'T'){
                $huyens = Districts::all();
                $huyendf = Districts::first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }elseif(session('admin')->level =='H'){
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }else{
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->where('maxa',session('admin')->maxa)->first()->maxa;
            }

            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.giamho.include.thaydoi')
                ->with('huyens',$huyens)
                ->with('mahuyen',$huyendf)
                ->with('xas',$xas)
                ->with('maxa',$xadf)
                ->with('mahs',$id)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle','Thêm mới thông tin thay đổi');
        }else
            return view('errors.notlogin');
    }

    public function luugiamhobs(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $modelsohotich =  SoHoTich::where('plhotich','Thay đổi bổ xung')
                ->where('namso',date('Y'))->first()->quyenhotich;
            $inputs['quyentd'] = (isset($modelsohotich)) ? $modelsohotich : getmatinh().$inputs['mahuyen'].$inputs['maxa'].'KS'.date('Y');

            $inputs['sotd'] = $this->getSothaydoiGH($inputs['maxa'],$inputs['mahuyen'],$inputs['quyentd'] );
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $inputs['plgiayto'] = "Giám hộ";
            $inputs['trangthai'] = "Chờ duyệt";
            $model = new ThongTinThayDoi();
            $model->create($inputs);
            return redirect('giamho');
        }else
            return view('errors.notlogin');
    }

    public function getSothaydoiGH($maxa,$mahuyen,$quyentd){
        $idmax = ThongTinThayDoi::where('maxa',$maxa)
            ->where('mahuyen',$mahuyen)
            ->where('quyentd',$quyentd)
            ->max('id');
        if($idmax==null)
            $stt = 1;
        else{
            $model =ThongTinThayDoi::where('id', $idmax)->first();
            $stt = $model->sotd + 1;
        }
        return $stt;
    }

    public function duyetgh(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $model = ThongTinThayDoi::find($id);
            $model->trangthai = 'Duyệt';
            $model->save();
            return redirect('giamho');

        }else
            return view('errors.notlogin');
    }

    public function showgh($id)
    {
        if (Session::has('admin')) {

            $model = ThongTinThayDoi::find($id);
            $xas = Towns::where('maxa',$model->maxa)->first()->tenxa;
            $huyens = Districts::where('mahuyen',$model->mahuyen)->first()->tenhuyen;
            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.giamho.include.showthaydoi')
                ->with('mahs',$id)
                ->with('xas',$xas)
                ->with('huyens',$huyens)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('model', $model)
                ->with('pageTitle','Thêm mới thông tin thay đổi');

        }else
            return view('errors.notlogin');
    }

    public function updateghbs(Request $request,$id)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model = ThongTinThayDoi::find($id);
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $model->update($inputs);
            return redirect('giamho');

        }else
            return view('errors.notlogin');
    }

    //Đăng ký nhận cha mẹ con

    public function cmccreate($id)
    {
        if (Session::has('admin')) {
            if(session('admin')->level == 'T'){
                $huyens = Districts::all();
                $huyendf = Districts::first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }elseif(session('admin')->level =='H'){
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }else{
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->where('maxa',session('admin')->maxa)->first()->maxa;
            }

            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.chamecon.include.thaydoi')
                ->with('huyens',$huyens)
                ->with('mahuyen',$huyendf)
                ->with('xas',$xas)
                ->with('maxa',$xadf)
                ->with('mahs',$id)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle','Thêm mới thông tin thay đổi');
        }else
            return view('errors.notlogin');
    }

    public function luucmcbs(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $modelsohotich =  SoHoTich::where('plhotich','Thay đổi bổ xung')
                ->where('namso',date('Y'))->first()->quyenhotich;
            $inputs['quyentd'] = (isset($modelsohotich)) ? $modelsohotich : getmatinh().$inputs['mahuyen'].$inputs['maxa'].'KS'.date('Y');

            $inputs['sotd'] = $this->getSothaydoiCMC($inputs['maxa'],$inputs['mahuyen'],$inputs['quyentd'] );
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $inputs['plgiayto'] = "Cha mẹ con";
            $inputs['trangthai'] = "Chờ duyệt";
            $model = new ThongTinThayDoi();
            $model->create($inputs);
            return redirect('chamecon');
        }else
            return view('errors.notlogin');
    }

    public function getSothaydoiCMC($maxa,$mahuyen,$quyentd){
        $idmax = ThongTinThayDoi::where('maxa',$maxa)
            ->where('mahuyen',$mahuyen)
            ->where('quyentd',$quyentd)
            ->max('id');
        if($idmax==null)
            $stt = 1;
        else{
            $model =ThongTinThayDoi::where('id', $idmax)->first();
            $stt = $model->sotd + 1;
        }
        return $stt;
    }

    public function duyetcmc(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $model = ThongTinThayDoi::find($id);
            $model->trangthai = 'Duyệt';
            $model->save();
            return redirect('chamecon');

        }else
            return view('errors.notlogin');
    }

    public function showcmc($id)
    {
        if (Session::has('admin')) {

            $model = ThongTinThayDoi::find($id);
            $xas = Towns::where('maxa',$model->maxa)->first()->tenxa;
            $huyens = Districts::where('mahuyen',$model->mahuyen)->first()->tenhuyen;
            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();
            return view('manage.chamecon.include.showthaydoi')
                ->with('mahs',$id)
                ->with('xas',$xas)
                ->with('huyens',$huyens)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('model', $model)
                ->with('pageTitle','Thêm mới thông tin thay đổi');

        }else
            return view('errors.notlogin');
    }

    public function updatecmcbs(Request $request,$id)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model = ThongTinThayDoi::find($id);
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['ngaysinhntd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhntd'])));
            $model->update($inputs);
            return redirect('chamecon');

        }else
            return view('errors.notlogin');
    }
}
