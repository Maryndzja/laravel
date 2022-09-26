@extends('layouts.app')

@section('content')


<div class="card-body" id="titlemenu">
    <div class="card-header"><a href="{{asset('catalog/'.$product->catalog_id)}}"> {{$product->catalog->name}}</a> / {{$product->name}}</div>
</div>
<div class="linemenu"></div>
<div class="container">
    <div class="proposecontainer">
        <div class="proposeProductfor">
            <div class="card-img-top">
                @if($product->picture)
                <div class="productimage">
                    <img src="{{asset('storage/'.$product->picture)}}">
                    @endif
                </div>
            </div>
            <div class="abhortka fs-5" id="">
                <div class="textabout">{!!$product->about!!}
                </div>
                <div class="textprice"><strong>
                    {!!$product->price!!}</strong>
                </div>
            </div>
        </div>
        <div class="order">
            <p class="fs-5">Заказ ажыццяўляецца па тэлефоне: <br>8029-ххх-хх-хх</p>
        </div>        
    </div>
</div>



    @endsection