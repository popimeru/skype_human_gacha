@extends('layout')

@section('content')
    <div class="row">
    <!-- ガチャ機のリストのループ -->
    @foreach($gacha_list as $gacha)
        <!-- グリッドの指定と、カードの配置 -->
        <div class="col-md-6">
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-info"> <font style="vertical-align：inherit;">{{$gacha->name .= "ガチャ"}}<font style = "vertical-align：inherit;"></font></font></div>
                <div class="card-body">
                <p class="card-text">{{$gacha->description}}</p>
                <a class="text-dark bg-primary btn btn-success btn-lg" href="/gachamachine/{{$gacha->id}}" role="button"> <font style = "vertical-align：inherit;"> <font style = "vertical-align：inherit;">このガチャを回す</font></font></a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    {{$gacha_list->links()}}
@endsection