<?php

namespace App\Http\Controllers;

use App\Districts;
use App\Towns;
use App\Users;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function checkuser(Request $request){
        $input = $request->all();
        $usercheck = $input['username'];

        $model = Users::where('username', $usercheck)
            ->first();
        if (isset($model)) {
            echo 'cancel';
        } else {
            echo 'ok';
        }
    }

    public function checkmahuyen(Request $request){
        $input = $request->all();
        $mahuyencheck = $input['mahuyen'];

        $model = Districts::where('mahuyen', $mahuyencheck)
            ->first();
        if (isset($model)) {
            echo 'cancel';
        } else {
            echo 'ok';
        }
    }

    public function checkmaxa(Request $request){
        $input = $request->all();
        $maxacheck = $input['maxa'];

        $model = Towns::where('maxa', $maxacheck)
            ->first();
        if (isset($model)) {
            echo 'cancel';
        } else {
            echo 'ok';
        }
    }
}
