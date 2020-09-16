<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GachaMachine;

class GachaMachineController extends Controller
{
    public function index(){
        $gacha_list = GachaMachine::orderBy('created_at','desc')->get();

        return view('gacha_machine.index',['gacha_list' => $gacha_list]);
    }
}
