@extends('layout')

@section('content')
    @if(!is_null($gacha))
    <h1>{{$gacha->name.="ガチャ登録画面"}}</h1>
        @if(!isset($message))
        <form action="/gachacapsule" method="POST">
            @csrf
            <input type="hidden" name="gacha_machine_id" value="{{$gacha->id}}">
            名前：<input type="text" name="name" value="{{old('name')}}">
            @error('name')
                {{$message}}
            @enderror
            <br>
            SkypeID：<input type="text" name="skype_id" value="{{old('skype_id')}}">
            @error('skype_id')
                {{$message}}
            @enderror
            <br>
            <p>自己紹介文</p>
            <textarea name="bio" rows="10" cols="60">{{old('bio')}}</textarea>
            @error('bio')
                {{$message}}   
            @enderror
            <br>
            パスワード：<input type="password" name="password" value="{{old('password')}}">
            @error('password')
                {{$message}}   
            @enderror
            <br>
            <input type="submit" value="登録">
        </form>
        @else
        <p>{{$message}}</p>
        @endif
    @else
    <p>存在しないガチャです</p>
    @endif
    <a href="/">ガチャ一覧ページへ</a>
@endsection