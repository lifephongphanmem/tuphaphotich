<?php

namespace App\Http\Controllers;

use App\Districts;
use App\KetHon;
use App\Towns;
use Illuminate\Http\Request;

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

            }elseif(session('admin')->level == 'H'){
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : session('admin')->mahuyen;
                $xadf = Towns:: where('mahuyen', $huyen)->first()->maxa;
                $xa = isset($inputs['maxa']) ? $inputs['maxa'] : $xadf;
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
            $inputs['ngaydangky'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydangky'])));
            $inputs['ngaysinhvo'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhvo'])));
            $inputs['ngaysinhchong'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhchong'])));
            $inputs['matinh'] = getmatinh();
            $inputs['mahs'] = $inputs['matinh'].$inputs['mahuyen'].$inputs['maxa'].'KH'.getdate()[0];
            $inputs['trangthai'] = 'Chờ duyệt';
            $model = new KetHon();
            $model->create($inputs);

            return redirect('kethon');

        }else
            return view('errors.notlogin');
    }

    public function show($id){
        if (Session::has('admin')) {

            $model = KetHon::find($id);
            $xa = Towns::where('maxa',$model->maxa)->first()->tenxa;
            $huyen = Districts::where('mahuyen',$model->mahuyen)->first()->tenhuyen;

            return view('manage.kethon.show')
                ->with('model',$model)
                ->with('xa',$xa)
                ->with('huyen',$huyen)
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

    public function prints(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idprints'];
            $model = KetHon::find($id);
            $xa = Towns::where('maxa',$model->maxa)->first()->tenxa;
            if($inputs['plgiay']== 'Bản chính'){
                return view('reports.kethon.print')
                    ->with('plgiay',$inputs['plgiay'])
                    ->with('model',$model)
                    ->with('xa',$xa)
                    ->with('pageTitle','In giấy kết hôn bản chính');
            }else{

            }

        }else
            return view('errors.notlogin');
    }
}
