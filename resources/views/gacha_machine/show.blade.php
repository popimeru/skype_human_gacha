@extends('layout')

@section('content')
<h1>{{$gacha->name.="ガチャ"}}</h1>

    @if($capsule == [])
        <form action="/gachamachine" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$gacha->id}}">  
            <input type="submit" value="ガチャを回す">
        </form>
    @else
        <p>ガチャ結果</p>
        <p>{{$capsule->name}}</p>
        <p>{{$capsule->skype_id}}</p>
        <p>{{$capsule->comment}}</p>
        <form action="/gachamachine" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$gacha->id}}">  
            <input type="submit" value="もう一度回す">
        </form>
    @endif
<a href="/">ガチャ一覧ページへ</a>