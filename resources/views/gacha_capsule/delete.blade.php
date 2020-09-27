@extends('layout')

@section('content')
    @if(isset($message))
    <p>{{$message}}</p>
    @else
    <form action="/delete" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$id}}">
        SkypeID:<input type="text" name="skype_id">
        <br>
        パスワード:<input type="text" name="password">
        <br>
        <input type="submit" value="削除">
    </form>
        @if(isset($error_message))
            <p>{{$error_message}}</p>
        @endif
    @endif
@endsection