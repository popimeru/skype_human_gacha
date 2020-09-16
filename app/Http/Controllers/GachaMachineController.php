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
    public function show($id=0,$capsule_id = 0){
        if($id==0){
            $gacha = '';
        }else{
            $gacha = GachaMachine::find($id);
        }

        if($capsule_id == 0){
            $capsule = [];
        }else{
            $capsule = GachaCapsule::find($capsule_id);
        }
        return view('gacha_machine.show')->with(['gacha'=>$gacha,'capsule'=>$capsule]);
    }

    //ガチャの詳細画面で、ガチャを回した時の処理
    public function turn(Request $request){
        $result_capsule_id = GachaMachine::find($request->id)->gachaCapsule->random();
        $id = $request->id;
        //$capsule = ['name' => $result_capsule->name,'skype_id'=> $result_capsule->skype_id,'comment'=>$result_capsule->comment];
        //dd($capsule);
        return redirect()->action([get_class($this),'show'],['id'=>$id,'capsule_id' => $result_capsule_id]);
    }
}
