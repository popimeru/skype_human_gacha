<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GachaMachine;
use App\Models\GachaCapsule;

class GachaCapsuleController extends Controller
{
    //ガチャのカプセル登録画面
    public function regist($machine_id = 0){
        return view('gacha_capsule.regist',['machine_id' => $machine_id]);
    }

    public function create(Request $request){
        $data =new GachaCapsule;
        $form = $request->all();
        unset($form['_token']);
        $data->fill($form)->save();
        return redirect('/');
    }
}
