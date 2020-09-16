@extends('layout')

@section('content')
<h1>ガチャ一覧</h1>
<table class="table">
    <tr><th>ガチャ</th></tr>
    @foreach($gacha_list as $gacha)
    <tr><td>{{$gacha->name}}</td></tr>
    @endforeach
</table>