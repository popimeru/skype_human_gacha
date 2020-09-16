@extends('layout')

@section('content')
<h1>ラインナップ</h1>
<table class="table">
    <tr><th>名前</th><th>SkypeID</th><th>紹介文</th></tr>
    @foreach($capsule_all as $capsule)
    <tr><td>{{$capsule->name}}</td><td>{{$capsule->skype_id}}</td><td>{{$capsule->comment}}</td></tr>
    @endforeach
</table>