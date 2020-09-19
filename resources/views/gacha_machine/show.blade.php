@extends('layout')

@section('content')
@if($gacha != [])
    
<h1>{{$gacha->name.="ガチャ"}}</h1>

    @if(!isset($result_capsule_id))
        <form action="/gachamachine" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$gacha->id}}">  
            <input type="submit" value="ガチャを回す">
        </form>
    @else
        <p>ガチャ結果</p>
        <p>{{$result_capsule_id->name}}</p>
        <p>{{$result_capsule_id->skype_id}}</p>
        <p>{{$result_capsule_id->comment}}</p>
        <form action="/gachamachine" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$gacha->id}}">  
            <input type="submit" value="もう一度回す">
        </form>
    @endif
@else
<p>存在しないガチャです</p>
@endif
<a href="/">ガチャ一覧ページへ</a>