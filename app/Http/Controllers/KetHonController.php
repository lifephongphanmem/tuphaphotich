<?php

namespace App\Http\Controllers;

use App\Districts;
use App\GeneralConfigs;
use App\ThongTinThayDoi;
use App\KetHon;
use App\Towns;
use Illuminate\Http\Request;
use App\SoHoTich;
use App\toado;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class KetHonController extends Controller
{
    public function index(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $thang = isset($inputs['thang']) ? $inputs['thang'] : date('m');
            $nam = isset($inputs['nam']) ? $inputs['nam'] : date('Y');
            if(session('admin')->level == 'T') {
                $huyendf = Districts::first()->mahuyen;
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : $huyendf;
                $xadf = Towns:: where('mahuyen', $huyen)->first()->maxa;
                if(isset($inputs['maxa'])) {
                    if ($inputs['maxa'] == "all")
                        $xa = $xadf;
                    else
                        $xa = $inputs['maxa'];
                }else {
                    $xa = $xadf;
                }

            }elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Yên Minh'){
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : session('admin')->mahuyen;
                $xa = 'tpym';}
            elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn'){
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : session('admin')->mahuyen;
                $xa = 'tpdv';
            }else{
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : session('admin')->mahuyen;
                $xa = isset($inputs['maxa']) ? $inputs['maxa'] : session('admin')->maxa;
            }

            $huyens = listHuyen();
            $xas = array();
            if($huyen != 'all'){
                $xas = listXa($huyen);
            }

            $model = KetHon::whereMonth('ngaydangky', $thang)
                ->whereYear('ngaydangky', $nam);
            if($huyen != 'all' && $huyen != ''){
                $model = $model->where('mahuyen', $huyen);
            }
            if($xa != 'all' && $xa != ''){
                $model = $model->where('maxa', $xa);
            }else{
                $model = $model->where('maxa', $xa);
            }
            $model = $model->get();

            $count = $model->count();

            return view('manage.kethon.index')
                -> with('huyens', $huyens)
                -> with('xas', $xas)
                -> with('mahuyen', $huyen)
                -> with('maxa', $xa)
                -> with('thang',$thang)
                -> with('nam',$nam)
                -> with('model', $model)
                -> with('pageTitle','Thông tin kết hôn ('.$count.' hồ sơ)');
        }else
            return view('errors.notlogin');
    }

    public function create(){
        if (Session::has('admin')) {
            if (session('admin')->level == 'T') {
                $huyens = Districts::all();
                $huyendf = Districts::first()->mahuyen;
                $xas = Towns::where('mahuyen', $huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            } elseif (session('admin')->level == 'H') {
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen', session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen', $huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            } else {
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen', session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen', $huyendf)
                    ->get();
                $xadf = $xas->where('maxa', session('admin')->maxa)->first()->maxa;
            }

            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();

            return view('manage.kethon.create')
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle', 'Thêm mới thông tin kết hôn');
        }else
            return view('errors.notlogin');
    }

    public function store(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $modelsohotich =  SoHoTich::where('plhotich','Kết hôn')
                ->where('namso',date('Y'))->where('mahuyen',$inputs['mahuyen'])->where('maxa',$inputs['maxa'])->first()->quyenhotich;
            $inputs['quyenkethon'] = (isset($modelsohotich)) ? $modelsohotich : getmatinh().$inputs['mahuyen'].$inputs['maxa'].'KH'.date('Y');
            $inputs['sokethon'] = $this->getSoHoTich($inputs['maxa'],$inputs['mahuyen'],$inputs['quyenkethon'] );
            $inputs['ngaydangky'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydangky'])));
            $inputs['ngaysinhvo'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhvo'])));
            $inputs['ngaysinhchong'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhchong'])));
            $inputs['ngaycapvo'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapvo'])));
            $inputs['ngaycapchong'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapchong'])));
            $inputs['matinh'] = getmatinh();
            $inputs['mahs'] = $inputs['matinh'].$inputs['mahuyen'].$inputs['maxa'].'KH'.getdate()[0];
            $inputs['trangthai'] = 'Chờ duyệt';
            $model = new KetHon();
            $model->create($inputs);

            return redirect('kethon');

        }else
            return view('errors.notlogin');
    }

    public function getSoHoTich($maxa,$mahuyen,$quyen){
        $idmax = KetHon::where('maxa',$maxa)
            ->where('mahuyen',$mahuyen)
            ->where('quyenkethon',$quyen)
            ->max('id');
        if($idmax==null)
            $stt = 1;
        else{
            $model =KetHon::where('id', $idmax)->first();
            $stt = $model->sokethon + 1;
        }
        return $stt;
    }

    public function show($id){
        if (Session::has('admin')) {

            $model = KetHon::find($id);
            if(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Yên Minh')
            {
                $xa = "tpym";
            }
            elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn')
            {
                $xa = "tpdv";
            }
            else
            {
                $xa = Towns::where('maxa',$model->maxa)->first()->tenxa;
            }
            $huyen = Districts::where('mahuyen',$model->mahuyen)->first()->tenhuyen;
            $thongtinthaydoi = ThongTinThayDoi::where('mahs',$model->mahs)->get();
            return view('manage.kethon.show')
                ->with('model',$model)
                ->with('xa',$xa)
                ->with('huyen',$huyen)
                ->with('thongtinthaydoi',$thongtinthaydoi)
                ->with('pageTitle', 'Thông tin kết hôn');
        }else
            return view('errors.notlogin');
    }

    public function edit($id){
        if (Session::has('admin')) {

            $model = KetHon::find($id);
            $huyens = Districts::all();
            $huyendf = $model->mahuyen;
            $xas = Towns::where('mahuyen', $huyendf)
                ->get();
            $xadf = $model->maxa;

            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();

            return view('manage.kethon.edit')
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('model',$model)
                ->with('pageTitle', 'Chỉnh sửa thông tin kết hôn');
        }else
            return view('errors.notlogin');
    }

    public function update(Request $request,$id){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $inputs['ngaydangky'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydangky'])));
            $inputs['ngaysinhvo'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhvo'])));
            $inputs['ngaysinhchong'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhchong'])));
            $inputs['ngaycapvo'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapvo'])));
            $inputs['ngaycapchong'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapchong'])));
            $model = KetHon::find($id);
            $model->update($inputs);

            return redirect('kethon');

        }else
            return view('errors.notlogin');
    }

    public function destroy(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['iddelete'];
            $model = KetHon::find($id);
            $model->delete();
            return redirect('kethon');

        }else
            return view('errors.notlogin');
    }

    public function duyet(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $model = KetHon::find($id);
            $model->trangthai = 'Duyệt';
            $model->save();
            return redirect('kethon');

        } else
            return view('errors.notlogin');
    }

    public function prints($id){
        if (Session::has('admin')) {
            $model = KetHon::find($id);
            $modelxa = Towns::where('maxa',$model->maxa)->first();
            //$toado = toado::where('maxa',$model->maxa)->where('phanloai','Giấy Kết Hôn')->first();
            $huyen=$modelxa->tenhuyen;
            if(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Yên Minh')
            {
                $xa = "tpym";
            }
            elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn')
            {
                $xa = "tpdv";
            }
            else
            {
                $xa = $modelxa->tenxa;
            }

            if(session('admin')->level == 'T'){
                $kttoado = toado::where('level','T')
                    ->where('phanloai','GKH')
                    ->first();
                if(count($kttoado) >0){
                    $toadokh = $kttoado;
                }else{
                    $toadokh = toado::where('phanloai','GKH')
                        ->where('level','DF')
                        ->first();
                }
            }elseif(session('admin')->level == 'H'){
                $kttoado = toado::where('level','H')
                    ->where('phanloai','GKH')
                    ->where('mahuyen',session('admin')->mahuyen)
                    ->first();
                if(count($kttoado) >0){
                    $toadokh = $kttoado;
                }else{
                    $toadokh = toado::where('phanloai','GKH')
                        ->where('level','DF')
                        ->first();
                }
            }else{
                $kttoado = toado::where('level','X')
                    ->where('phanloai','GKH')
                    ->where('mahuyen',session('admin')->mahuyen)
                    ->where('maxa',session('admin')->maxa)
                    ->first();
                if(count($kttoado) >0){
                    $toadokh = $kttoado;
                }else{
                    $toadokh = toado::where('phanloai','GKH')
                        ->where('level','DF')
                        ->first();
                }
            }

                return view('reports.kethon.print')
                    ->with('model',$model)
                    ->with('xa',$xa)
                    ->with('huyen',$huyen)
                    ->with('toadokh',$toadokh)
                    ->with('id',$id)
                    ->with('pageTitle','In giấy kết hôn bản chính');

        }else
            return view('errors.notlogin');
    }

    public function printsbansao($id){
        if (Session::has('admin')) {
            $model = kethon::find($id);
            $modelxa = Towns::where('maxa',$model->maxa)->first();
            $modelhuyen = Districts::where('mahuyen',$model->mahuyen)->first();
            if(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Yên Minh')
            {
                $xa = "tpym";
            }
            elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn')
            {
                $xa = "tpdv";
            }
            else
            {
                $xa = $modelxa->tenxa;
            }
            $tenxa = substr("$xa",8);

            $huyen = $modelhuyen->tenhuyen;
            $tinh = GeneralConfigs::first()->tendv;
            return view('reports.kethon.printtrichluc')
                ->with('model',$model)
                ->with('xa',$xa)
                ->with('tenxa',$tenxa)
                ->with('huyen',$huyen)
                ->with('tinh',$tinh)
                ->with('pageTitle','In giấy kết hôn bản sao');

        }else
            return view('errors.notlogin');
    }

    public function printsgs(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idprintsgs'];
            $model = KetHon::find($id);
            $modelxa = Towns::where('maxa',$model->maxa)->first();
            if(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Yên Minh')
            {
                $xa = "tpym";
            }
            elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn')
            {
                $xa = "tpdv";
            }
            else
            {
                $xa = $modelxa->tenxa;
            }
            $tenxa = substr("$xa",8);
            $modelhuyen = Districts::where('mahuyen',$model->mahuyen)->first();
            $huyen = $modelhuyen->tenhuyen;
            $tinh = GeneralConfigs::first()->tendv;
            if($inputs['plgiaygs']== 'Bản chính'){
                return view('reports.kethon.printtrichlucgsbc')
                    ->with('plgiaygs',$inputs['plgiaygs'])
                    ->with('model',$model)
                    ->with('xa',$xa)
                    ->with('pageTitle','In giấy kết hôn bản chính');
            }else{
                return view('reports.kethon.printtrichlucgsbs')
                    ->with('model',$model)
                    ->with('xa',$xa)
                    ->with('tenxa',$tenxa)
                    ->with('huyen',$huyen)
                    ->with('tinh',$tinh)
                    ->with('pageTitle','In giấy kết hôn bản sao');
            }

        }else
            return view('errors.notlogin');
    }

    public function printstokhai($id){
        if (Session::has('admin')) {
            $model = KetHon::find($id);
            $modelxa = Towns::where('maxa',$model->maxa)->first();
            $modelhuyen = Towns::where('mahuyen',$model->mahuyen)->first();
            if(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Yên Minh')
            {
                $xa = "tpym";
            }
            elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn')
            {
                $xa = "tpdv";
            }
            else
            {
                $xa = $modelxa->tenxa;
            }
            $huyen = $modelhuyen->tenhuyen;
            $tinh = GeneralConfigs::first()->tendv;
            if($xa == "Thị Trấn Yên Minh")
            {
                $tencq = 'Thị trấn Yên Minh , '.$huyen .' , Tỉnh '.$tinh;
            }
            else
            {
                $tencq = $xa.' , '.$huyen .' , Tỉnh '.$tinh;
            }
            if($model->pldangky == "Ghi sổ việc kết hôn tại nước ngoài")
            {
                return view('reports.kethon.printtokhaigs')
                    ->with('model',$model)
                    ->with('xa',$xa)
                    ->with('tencq',$tencq)
                    ->with('pageTitle','In tờ khai');
            }
            else
            {
                return view('reports.kethon.printtokhai')
                    ->with('model',$model)
                    ->with('xa',$xa)
                    ->with('tencq',$tencq)
                    ->with('pageTitle','In tờ khai đăng ký kết hôn');
            }
        }else
            return view('errors.notlogin');
    }
}
