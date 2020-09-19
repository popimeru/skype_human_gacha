<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GachaMachine;
use App\Models\GachaCapsule;

class GachaMachineController extends Controller
{
    //トップページで、ガチャの一覧を表示する
    public function index(){
        $gacha_list = GachaMachine::orderBy('created_at','desc')->get();

        return view('gacha_machine.index',['gacha_list' => $gacha_list]);
    }

    //トップページからのリンクで、選ばれたガチャの詳細画面を作る
    public function show($id=0){
        if($id==0){
            $gacha = [];
        }else{
            $gacha = GachaMachine::find($id);
            if(is_null($gacha)){
                dump($gacha);
                $gacha = [];
            }
        }
        
        return view('gacha_machine.show')->with(['gacha'=>$gacha]);
    }

    //ガチャの詳細画面で、ガチャを回した時の処理
    public function turn(Request $request){
        $gacha = GachaMachine::find($request->id);
        $result_capsule_id = $gacha->gachaCapsule->random();

        return view('gacha_machine.show',['gacha' => $gacha,'result_capsule_id' => $result_capsule_id]);
    }
}
