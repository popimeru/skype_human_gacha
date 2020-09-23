@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <!-- タイトルロゴの配置（中央に）-->
        <img class="d-block mx-auto" src="assets/images/human_gacha_skype3.png">
    </div>
    <!-- カードの個数カウンター -->
    @php
        $counter = 0;
    @endphp
    <!-- ガチャ機のリストのループ -->
    @foreach($gacha_list as $gacha)
    @php
        $counter++;
    @endphp
    <!-- カウンターが２で割り切れなかったら、行divの配置 -->
    @if($counter % 2 != 0)
        <div class="row">
    @endif
    <!-- グリッドの指定と、カードの配置 -->
    <div class="col-md-6">
        <div class="card mb-4 shadow-sm">
            <div class = "card-header bg-info"> <font style = "vertical-align：inherit;">{{$gacha->name .= "ガチャ"}}<font style = "vertical-align：inherit;"></font></font></div>
            <div class="card-body">
              <p class="card-text">{{$gacha->description}}</p>
            <a class="text-dark bg-primary btn btn-success btn-lg" href="/gachamachine/{{$gacha->id}}" role="button"> <font style = "vertical-align：inherit;"> <font style = "vertical-align：inherit;">このガチャを回す</font></font></a>
            </div>
        </div>
    </div>
    <!-- カウンターが２で割り切れなかったら、コンティニュー -->
    @if($counter % 2 != 0)
        <!-- カウンターが２で割り切れなくて、ガチャ機のループが最後だったら、列div配置して、行div閉じて、ループを抜ける -->
        @if($gacha == $gacha_list->last())
            <div class="col-md-6">
            </div>
            </div>
            @break
        @endif
        @continue
    <!-- カウンターが２で割り切れたら、行divを閉じる -->
    @else
        </div>
    @endif
    @endforeach
    {{$gacha_list->links()}}
</div>
