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
    <a href="/gachacapsule/{{$gacha->id}}">このガチャに自分を入れる</a>
<a href="/">ガチャ一覧ページへ</a>

<!--
<div class = "rounded-pill card text-center text-dark bg-info mb-3" style = "max-width：20rem;">
    <div class = "card-header"> <font style = "vertical-align：inherit;">{{$gacha->name .= "ガチャ"}}<font style = "vertical-align：inherit;"></font></font></div>
    <div class = "card-body">
        <p class = "card-text text-white"> <font style = "vertical-align：inherit;"> <font style = "vertical-align：inherit;">{{$gacha->description}}</font></font></p>
        <a class="text-warning bg-danger btn btn-success btn-lg" href="/gachamachine/{{$gacha->id}}" role="button"> <font style = "vertical-align：inherit;"> <font style = "vertical-align：inherit;">このガチャを回す</font></font></a>
    </div>
</div>
-->