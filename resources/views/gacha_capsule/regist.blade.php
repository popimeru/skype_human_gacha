@extends('layout')

@section('content')
    @if($machine_id != 0)
    <form action="/gachacapsule" method="POST">
        @csrf
        <input type="hidden" name="gacha_machine_id" value="{{$machine_id}}">
        名前：<input type="text" name="name" required>
        <br>
        SkypeID：<input type="text" name="skype_id" required>
        <br>
        <p>自己紹介文</p>
        <textarea name="comment" rows="10" cols="60"></textarea>
        <input type="submit" value="登録">
    </form>
    @endif
