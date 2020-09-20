<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCapsuleRequest;

use App\Models\GachaMachine;
use App\Models\GachaCapsule;


class GachaCapsuleController extends Controller
{
    //ガチャのカプセル登録画面
    public function regist($machine_id = 0){
        $gacha = GachaMachine::find($machine_id);

        return view('gacha_capsule.regist',['gacha' => $gacha]);
    }

    //カプセル登録
    public function create(CreateCapsuleRequest $request){
        $gacha = GachaMachine::find($request->gacha_machine_id);

        //指定したガチャ機に同じSkypeIDがないかチェック
        $duplicate = GachaCapsule::where('gacha_machine_id',$request->gacha_machine_id)->where('skype_id',$request->skype_id)->first();
        if(!is_null($duplicate)){
            return view('gacha_capsule.regist',['gacha' => $gacha, 'error_flag' =>TRUE ,'message' => 'そのSkypeIDは既に登録されています']);
        }
        $data =new GachaCapsule;
        $form = $request->all();
        unset($form['_token']);
        $data->fill($form)->save();
        return view('gacha_capsule.regist',['gacha' => $gacha, 'error_flag' =>FALSE, 'message' => '登録完了しました']);
    }
}
