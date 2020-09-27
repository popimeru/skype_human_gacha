@extends('layout')

@section('content')
@if(!is_null($gacha))
    
<h3 class="bg-warning text-center">{{$gacha->name.="ガチャ"}}</h3>
<h5 class="text-right"><a class="text-success" href="/gachacapsule/{{$gacha->id}}">このガチャに自分を入れる</a></h5>
<h5 class="text-right"><a href="/delete/{{$gacha->id}}">このガチャから自分のカプセルを削除する</a></h5>
    @if(!isset($result_capsule))
    <img class="d-block mx-auto" src="{{asset("assets/images/gacha_machine.png")}}">
        <form action="/gachamachine" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$gacha->id}}">  
            <input class="btn-lg mx-auto d-block" type="submit" value="ガチャを回す">
        </form>
    @else
        <p>ガチャ結果</p>
        <p>{{$result_capsule->name}}</p>
        <p>{{$result_capsule->skype_id}}</p>
        <p>{{$result_capsule->comment}}</p>
        <form action="/gachamachine" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$gacha->id}}">  
            <input type="submit" value="もう一度回す">
        </form>
    @endif
@else
<p>存在しないガチャです</p>
@endif
@endsection