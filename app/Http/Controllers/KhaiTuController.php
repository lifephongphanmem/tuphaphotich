<?php

namespace App\Http\Controllers;

use App\DanToc;
use App\Districts;
use App\KhaiTu;
use App\QuocTich;
use App\Towns;
use App\GeneralConfigs;
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
        if (Session::has('admin')) {
            $inputs = $request->all();
            $khaitu = new KhaiTu();
            $inputs['trangthai'] = 'Chờ duyệt';
            $inputs['ngaydangkykt'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydangkykt'])));
            $khaitu->create($inputs);
            return redirect('khaitu');
        }
        else
            return view('errors.notlogin');
    }

    public function show($id){
        if (Session::has('admin')) {
            $khaitu = KhaiTu::find($id);
            $xa = Towns::where('maxa',$khaitu->maxa)->first()->tenxa;
            $huyen = Districts::where('mahuyen',$khaitu->mahuyen)->first()->tenhuyen;

            return view('manage.khaitu.show')
                ->with('khaitu',$khaitu)
                ->with('xa',$xa)
                ->with('huyen',$huyen)
                ->with('pageTitle', 'Thông tin khai tử');
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
        if (Session::has('admin')) {
            $inputs = $request->all();
            $inputs['ngaydangkykt'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydangkykt'])));
            $khaitu = KhaiTu::find($id);
            $khaitu->update($inputs);
            return redirect('khaitu');

        }else
            return view('errors.notlogin');
    }

    public function destroy(Request $request)
    {
        if (Session::has('admin')) {
            $khaitu = KhaiTu::where('id', $request->iddelete);
            $khaitu->delete();
            return redirect('khaitu');
        }
        else
            return view('errors.notlogin');
    }

    public function duyet(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $khaitu = KhaiTu::find($id);
            $khaitu->trangthai = 'Duyệt';
            $khaitu->save();
            return redirect('khaitu');

        }else
            return view('errors.notlogin');
    }

    public function prints(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idprints'];
            $khaitu = KhaiTu::find($id);
            $xa = Towns::where('maxa',$khaitu->maxa)->first()->tenxa;
            if($inputs['plgiayks']== 'Bản chính'){
                return view('reports.khaitu.print')
                    ->with('plgiayks',$inputs['plgiayks'])
                    ->with('khaitu',$khaitu)
                    ->with('xa',$xa)
                    ->with('pageTitle','In giấy khai tử bản chính');
            }else{

            }

        }else
            return view('errors.notlogin');
    }
}
