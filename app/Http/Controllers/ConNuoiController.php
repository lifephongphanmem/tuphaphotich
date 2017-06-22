<?php

namespace App\Http\Controllers;

use App\DanToc;
use App\Districts;
use App\ConNuoi;
use App\QuocTich;
use App\Towns;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ConNuoiController extends Controller
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

            $model = new ConNuoi();
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

            return view('manage.connuoi.index')
                -> with('huyens', $huyens)
                -> with('xas', $xas)
                -> with('mahuyen', $huyen)
                -> with('maxa', $xa)
                -> with('model', $model)
                -> with('pageTitle','Thông tin đăng ký con nuôi ('.$count.' hồ sơ)');
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

            return view('manage.connuoi.create')
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle', 'Thêm mới thông tin con nuôi');
        }else
            return view('errors.notlogin');
    }
    public function store(Request $request)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $connuoi = new ConNuoi();
            $inputs['trangthai']= "Chờ duyệt";
            $connuoi->create($inputs);
            return redirect('dangkyconnuoi');

        }else
            return view('errors.notlogin');
    }

    public function show($id){
        if (Session::has('admin')) {

            $connuoi = ConNuoi::find($id);
            $xa = Towns::where('maxa',$connuoi->maxa)->first()->tenxa;
            $huyen = Districts::where('mahuyen',$connuoi->mahuyen)->first()->tenhuyen;

            return view('manage.connuoi.show')
                ->with('connuoi',$connuoi)
                ->with('xa',$xa)
                ->with('huyen',$huyen)
                ->with('pageTitle', 'Thông tin đăng ký con nuôi');
        }else
            return view('errors.notlogin');
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
            $connuoi = ConNuoi::find($id);
            $dantocs = DanToc::all();
            $quoctichs = QuocTich::all();

            return view('manage.connuoi.edit')
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('connuoi',$connuoi)
                ->with('pageTitle', 'Sửa thông tin khai tử');
        }else
            return view('errors.notlogin');
    }
    public function update(Request $request, $id)
    {
        $connuoi = ConNuoi::find($id);
        $connuoi->hotenconnuoi = $request->hotenconnuoi;
        $connuoi->gioitinhconnuoi = $request->gioitinhconnuoi;
        $connuoi->ngaysinhconnuoi = $request->ngaysinhconnuoi;
        $connuoi->dantocconnuoi = $request->dantocconnuoi;
        $connuoi->quoctichconnuoi = $request->quoctichconnuoi;
        $connuoi->noisinhconnuoi = $request->noisinhconnuoi;
        $connuoi->thuongtruconnuoi = $request->thuongtruconnuoi;
        $connuoi->tinhtrangsk = $request->tinhtrangsk;
        $connuoi->hotenchanuoi = $request->hotenchanuoi;
        $connuoi->ngaysinhchanuoi = $request->ngaysinhchanuoi;
        $connuoi->dantocchanuoi = $request->dantocchanuoi;
        $connuoi->quoctichchanuoi = $request->quoctichchanuoi;
        $connuoi->cmndchanuoi = $request->cmndchanuoi;
        $connuoi->noicapgtcn = $request->noicapgtcn;
        $connuoi->ngaycapgtcn = $request->ngaycapgtcn;
        $connuoi->thuongtrucn = $request->thuongtrucn;
        $connuoi->hotenmenuoi = $request->hotenmenuoi;
        $connuoi->ngaysinhmenuoi = $request->ngaysinhmenuoi;
        $connuoi->dantocmenuoi = $request->dantocmenuoi;
        $connuoi->quoctichmenuoi = $request->quoctichmenuoi;
        $connuoi->cmndmenuoi = $request->cmndmenuoi;
        $connuoi->noicapgtmn = $request->noicapgtmn;
        $connuoi->ngaycapgtmn = $request->ngaycapgtmn;
        $connuoi->thuongtrumn = $request->thuongtrumn;
        $connuoi->hotenchagiao = $request->hotenchagiao;
        $connuoi->ngaysinhchagiao = $request->ngaysinhchagiao;
        $connuoi->dantocchagiao = $request->dantocchagiao;
        $connuoi->quoctichchagiao = $request->quoctichchagiao;
        $connuoi->cmndchagiao = $request->cmndchagiao;
        $connuoi->noicapgtcg = $request->noicapgtcg;
        $connuoi->ngaycapgtcg = $request->ngaycapgtcg;
        $connuoi->thuongtrucg = $request->thuongtrucg;
        $connuoi->hotenmegiao = $request->hotenmegiao;
        $connuoi->ngaysinhmegiao = $request->ngaysinhmegiao;
        $connuoi->dantocmegiao = $request->dantocmegiao;
        $connuoi->quoctichmegiao = $request->quoctichmegiao;
        $connuoi->cmndmegiao = $request->cmndmegiao;
        $connuoi->noicapgtmg = $request->noicapgtmg;
        $connuoi->ngaycapgtmg = $request->ngaycapgtmg;
        $connuoi->thuongtrumg = $request->thuongtrumg;
        $connuoi->soqd = $request->soqd;
        $connuoi->ngaythangqd = $request->ngaythangqd;
        $connuoi->noidkconnuoi = $request->noidkconnuoi;
        $connuoi->tencsnuoiduong = $request->tencsnuoiduong;
        $connuoi->nguoidaidiencsnd = $request->nguoidaidiencsnd;
        $connuoi->chucvundd = $request->chucvundd;
        $connuoi->soso = $request->soso;
        $connuoi->quyen = $request->quyen;
        $connuoi->phanloaiconnuoi = $request->phanloaiconnuoi;
        $connuoi->ngaythangdk = $request->ngaythangdk;
        $connuoi->lydo = $request->lydo;
        $connuoi->quanhenguoigiao = $request->quanhenguoigiao;
        $connuoi->ghichu = $request->ghichu;
        $connuoi->nguoithuchien = $request->nguoithuchien;
        $connuoi->nguoikygiaycn = $request->nguoikygiaycn;
        $connuoi->save();
        return redirect('dangkyconnuoi/'.$id.'/edit');
    }
    public function destroy(Request $request)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['iddelete'];
            $connuoi = ConNuoi::find($id);
            $connuoi->delete();
            return redirect('dangkyconnuoi');

        }else
            return view('errors.notlogin');
    }

    public function duyet(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $connuoi = ConNuoi::find($id);
            $connuoi->trangthai = 'Duyệt';
            $connuoi->save();
            return redirect('dangkyconnuoi');

        }else
            return view('errors.notlogin');
    }

    public function prints(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idprints'];
            $connuoi = ConNuoi::find($id);
            $xa = Towns::where('maxa',$connuoi->maxa)->first()->tenxa;
            if($inputs['plgiayks']== 'Bản chính'){
                return view('reports.dangkyconnuoi.print')
                    ->with('plgiayks',$inputs['plgiayks'])
                    ->with('connuoi',$connuoi)
                    ->with('xa',$xa)
                    ->with('pageTitle','In giấy đăng ký con nuôi bản chính');
            }else{

            }

        }else
            return view('errors.notlogin');
    }
}
