@extends('layout')

@section('content')
<h1>ガチャ一覧</h1>
<table class="table">
    <tr><th>ガチャ</th><th></th><th></th></tr>
    @foreach($gacha_list as $gacha)
        <tr><td>{{$gacha->name .= "ガチャ"}}</td><td><a href="/gachamachine/{{$gacha->id}}">ガチャを回す</a></td><td><a href="/gachacapsule/{{$gacha->id}}">このガチャに自分を入れる</a></td></tr>
    @endforeach
</table>