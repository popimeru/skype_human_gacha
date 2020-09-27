<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GachaMachine;
use App\Models\GachaCapsule;

class GachaMachineController extends Controller
{
    //トップページで、ガチャの一覧を表示する
    public function index(){
        $gacha_list = GachaMachine::orderBy('updated_at','desc')->simplePaginate(10);

        return view('gacha_machine.index',['gacha_list' => $gacha_list]);
    }

    //ガチャ機検索した時の処理
    public function search(Request $request){
        $gacha_list = GachaMachine::where('name','like','%' . $request['query'] . '%')->simplePaginate(10);
        return view('gacha_machine.index',['gacha_list' => $gacha_list]);
    }

    //トップページからのリンクで、選ばれたガチャの詳細画面を作る
    public function show($id=0){
        $gacha = GachaMachine::find($id);
        return view('gacha_machine.show',['gacha'=>$gacha]);
    }

    //ガチャの詳細画面で、ガチャを回した時の処理
    public function turn(Request $request){
        $gacha = GachaMachine::find($request->id);
        $result_capsule = $gacha->gachaCapsule->random();

        return view('gacha_machine.show',['gacha' => $gacha,'result_capsule' => $result_capsule]);
    }
}
