<?php

namespace App\Http\Controllers;

use App\DanToc;
use App\Districts;
use App\KhaiTu;
use App\QuocTich;
use App\Towns;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class KhaiTuController extends Controller
{
    protected function listHuyen() {
        return Districts::all();
    }

    protected function listXa($huyen){
        return Towns::where('mahuyen',$huyen)->get();
    }

    public function index(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
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

            }elseif(session('admin')->level == 'H'){
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : session('admin')->mahuyen;
                $xadf = Towns:: where('mahuyen', $huyen)->first()->maxa;
                $xa = isset($inputs['maxa']) ? $inputs['maxa'] : $xadf;
            }else{
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : session('admin')->mahuyen;
                $xa = isset($inputs['maxa']) ? $inputs['maxa'] : session('admin')->maxa;
            }

            $huyens = $this->listHuyen();
            $xas = array();
            if($huyen != 'all'){
                $xas = $this->listXa($huyen);
            }

            $model = new KhaiTu();
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

            return view('manage.khaitu.index')
                -> with('huyens', $huyens)
                -> with('xas', $xas)
                -> with('mahuyen', $huyen)
                -> with('maxa', $xa)
                -> with('model', $model)
                -> with('pageTitle','Thông tin khai tử ('.$count.' hồ sơ)');
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

            $dantocs = DanToc::all();
            $quoctichs = QuocTich::all();

            return view('manage.khaitu.create')
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle', 'Thêm mới thông tin khai tử');
        }else
            return view('errors.notlogin');
    }

    public function store(Request $request)
    {
        $khaitu = new KhaiTu();
        $khaitu->sosokt = $request->sosokt;
        $khaitu->mahuyen = $request->mahuyen;
        $khaitu->maxa = $request->maxa;
        $khaitu->quyenso = $request->quyenso;
        $khaitu->hoten = $request->hoten;
        $khaitu->gioitinh = $request->gioitinh;
        $khaitu->ngaysinh = $request->ngaysinh;
        $khaitu->dantoc = $request->dantoc;
        $khaitu->quoctich = $request->quoctich;
        $khaitu->cmnd = $request->cmnd;
        $khaitu->noisinh = $request->noisinh;
        $khaitu->giotu = $request->giotu;
        $khaitu->phuttu = $request->phuttu;
        $khaitu->ngaychet = $request->ngaychet;
        $khaitu->noichet = $request->noichet;
        $khaitu->nguyennhan = $request->nguyennhan;
        $khaitu->giaybaotu = $request->giaybaotu;
        $khaitu->donvicapgbt = $request->donvicapgbt;
        $khaitu->ngaycapgbt = $request->ngaycapgbt;
        $khaitu->phanloaikt = $request->phanloaikt;
        $khaitu->noidangkykt = $request->noidangkykt;
        $khaitu->ngaydangkykt = $request->ngaydangkykt;
        $khaitu->ghichukt = $request->ghichukt;
        $khaitu->hotennk = $request->hotennk;
        $khaitu->quanhe = $request->quanhe;
        $khaitu->nguoithuchien = $request->nguoithuchien;
        $khaitu->nguoikygct = $request->nguoikygct;
        $khaitu->save();
        return redirect('khaitu/danhsach');
    }

    public function edit ($id)
    {
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
            $khaitu = KhaiTu::find($id);
            $dantocs = DanToc::all();
            $quoctichs = QuocTich::all();

            return view('manage.khaitu.edit')
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('khaitu',$khaitu)
                ->with('pageTitle', 'Sửa thông tin khai tử');
        }else
            return view('errors.notlogin');
    }

    public function update(Request $request, $id)
    {
        $khaitu = KhaiTu::find($id);
        $khaitu->sosokt = $request->sosokt;
        $khaitu->mahuyen = $request->mahuyen;
        $khaitu->maxa = $request->maxa;
        $khaitu->quyenso = $request->quyenso;
        $khaitu->hoten = $request->hoten;
        $khaitu->gioitinh = $request->gioitinh;
        $khaitu->ngaysinh = $request->ngaysinh;
        $khaitu->dantoc = $request->dantoc;
        $khaitu->quoctich = $request->quoctich;
        $khaitu->cmnd = $request->cmnd;
        $khaitu->noisinh = $request->noisinh;
        $khaitu->giotu = $request->giotu;
        $khaitu->phuttu = $request->phuttu;
        $khaitu->ngaychet = $request->ngaychet;
        $khaitu->noichet = $request->noichet;
        $khaitu->nguyennhan = $request->nguyennhan;
        $khaitu->giaybaotu = $request->giaybaotu;
        $khaitu->donvicapgbt = $request->donvicapgbt;
        $khaitu->ngaycapgbt = $request->ngaycapgbt;
        $khaitu->phanloaikt = $request->phanloaikt;
        $khaitu->noidangkykt = $request->noidangkykt;
        $khaitu->ngaydangkykt = $request->ngaydangkykt;
        $khaitu->ghichukt = $request->ghichukt;
        $khaitu->hotennk = $request->hotennk;
        $khaitu->quanhe = $request->quanhe;
        $khaitu->nguoithuchien = $request->nguoithuchien;
        $khaitu->nguoikygct = $request->nguoikygct;
        $khaitu->save();
        return redirect('khaitu/'.$id.'/edit');
    }

    public function delete(Request $request)
    {
        $khaitu = KhaiTu::where('id',$request->iddelete);
        $khaitu->delete();
        return redirect('khaitu/danhsach');
    }
}
