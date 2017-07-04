<?php

namespace App\Http\Controllers;

use App\CongDan;
use App\DanToc;
use App\Districts;
use App\GeneralConfigs;
use App\KhaiSinh;
use App\QuocTich;
use App\SoHoTich;
use App\ThongTinThayDoi;
use App\Towns;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class KhaiSinhController extends Controller
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

            $model = KhaiSinh::whereMonth('ngaydangky', $thang)
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

            return view('manage.khaisinh.index')
                -> with('huyens', $huyens)
                -> with('xas', $xas)
                -> with('mahuyen', $huyen)
                -> with('maxa', $xa)
                -> with('thang',$thang)
                -> with('nam',$nam)
                -> with('model', $model)
                -> with('pageTitle','Thông tin khai sinh ('.$count.' hồ sơ)');
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

            return view('manage.khaisinh.create')
                ->with('action','create')
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle', 'Thêm mới thông tin khai sinh');
        }else
            return view('errors.notlogin');
    }

    public function store(Request $request){
        if (Session::has('admin')) {

            $inputs = $request->all();
            $modelsohotich =  SoHoTich::where('plhotich','Khai sinh')
                ->where('namso',date('Y'))->first()->quyenhotich;
            $inputs['quyen'] = (isset($modelsohotich)) ? $modelsohotich : getmatinh().$inputs['mahuyen'].$inputs['maxa'].'KS'.date('Y');

            $inputs['so'] = $this->getSoHoTich($inputs['maxa'],$inputs['mahuyen'],$inputs['quyen'] );

            $inputs['ngaydangky'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydangky'])));
            $inputs['ngaysinhks'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhks'])));
            $inputs['matinh'] = getmatinh();
            $inputs['ngaycapgtnk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapgtnk'])));
            $inputs['ngaysinhme'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhme'])));
            $inputs['ngaysinhcha'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhcha'])));
            $inputs['trangthai'] = 'Chờ duyệt';
            $model = new KhaiSinh();
            $model->create($inputs);

            return redirect('khaisinh');

        }else
            return view('errors.notlogin');
    }

    public function getSoHoTich($maxa,$mahuyen,$quyen){
        $idmax = KhaiSinh::where('maxa',$maxa)
            ->where('mahuyen',$mahuyen)
            ->where('quyen',$quyen)
            ->max('id');
        if($idmax==null)
            $stt = 1;
        else{
            $model =KhaiSinh::where('id', $idmax)->first();
            $stt = $model->so + 1;
        }
        return $stt;
    }

    public function show($id){
        if (Session::has('admin')) {

            $model = KhaiSinh::find($id);
            $xa = Towns::where('maxa',$model->maxa)->first()->tenxa;
            $huyen = Districts::where('mahuyen',$model->mahuyen)->first()->tenhuyen;
            $thongtinthaydoi = ThongTinThayDoi::where('mahs',$model->mahs)->get();

            return view('manage.khaisinh.show')
                ->with('model',$model)
                ->with('xa',$xa)
                ->with('huyen',$huyen)
                ->with('thongtinthaydoi',$thongtinthaydoi)
                ->with('pageTitle', 'Thông tin khai sinh');
        }else
            return view('errors.notlogin');
    }

    public function edit($id){
        if (Session::has('admin')) {

            $model = KhaiSinh::find($id);
            $huyens = Districts::all();
            $huyendf = $model->mahuyen;
            $xas = Towns::where('mahuyen', $huyendf)
                ->get();
            $xadf = $model->maxa;

            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();

            return view('manage.khaisinh.edit')
                ->with('action','edit')
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('model',$model)
                ->with('pageTitle', 'Chỉnh sửa thông tin khai sinh');
        }else
            return view('errors.notlogin');
    }

    public function update(Request $request,$id){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $inputs['ngaydangky'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydangky'])));
            $inputs['ngaysinhks'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhks'])));
            $inputs['ngaycapgtnk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapgtnk'])));
            $inputs['ngaysinhme'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhme'])));
            $inputs['ngaysinhcha'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhcha'])));
            $model = KhaiSinh::find($id);
            $model->update($inputs);
            return redirect('khaisinh');

        }else
            return view('errors.notlogin');
    }

    public function destroy(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['iddelete'];
            $model = KhaiSinh::find($id);
            $model->delete();
            return redirect('khaisinh');

        }else
            return view('errors.notlogin');
    }

    public function duyet(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $model = KhaiSinh::find($id);
            $model->trangthai = 'Duyệt';
            $model->save();
            return redirect('khaisinh');

        }else
            return view('errors.notlogin');
    }

    public function prints($id){
        if (Session::has('admin')) {
            $model = KhaiSinh::find($id);
            $modelxa = Towns::where('maxa',$model->maxa)->first();
            $xa = $modelxa->tenxa;
            return view('reports.khaisinh.print')
                ->with('model',$model)
                ->with('xa',$xa)
                ->with('pageTitle','In giấy khai sinh bản chính');

        }else
            return view('errors.notlogin');
    }
}
