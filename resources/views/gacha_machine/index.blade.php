@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="offset-md-4">
        </div>
        <div class="col-md-4">
            <h1 class="text-info">人間ガチャ<small>@Skype</small></h1>
        </div>
        <div class="offset-md-4">
        </div>
    </div>
    @php
        $counter = 2;
    @endphp
    @foreach($gacha_list as $gacha)
    @if($counter % 2 == 0)
        <div class="row">
    @endif
    <div class="col-md-6">
        <div class = "rounded-pill card text-center text-white bg-info mb-3" style = "max-width：20rem;">
            <div class = "card-header"> <font style = "vertical-align：inherit;">{{$gacha->name .= "ガチャ"}}<font style = "vertical-align：inherit;"></font></font></div>
            <div class = "card-body">
                <p class = "card-text text-dark"> <font style = "vertical-align：inherit;"> <font style = "vertical-align：inherit;">{{$gacha->description}}</font></font></p>
                <a class="text-warning bg-danger btn btn-success btn-lg" href="/gachamachine/{{$gacha->id}}" role="button"> <font style = "vertical-align：inherit;"> <font style = "vertical-align：inherit;">このガチャを回す</font></font></a>
            </div>
        </div>
    </div>
    @php
        $counter++;
    @endphp
    @if($counter % 2 == 1)
        @continue
    @else
        </div>
    @endif
    @endforeach
</div>
