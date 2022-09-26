@extends('layouts.app')

@section('content')

<div class="card-body" id="titlemenu">
  <a href="{{asset('catalog/'.$catalog->id)}}" class="card-title fs-4">{{$catalog->name}}</a>
</div>
<div class="linemenu"></div>

<div class="contentPositions">
  <div class="loaf">
    <aside>
      <nav class="nav flex-column">
        <a id="linksmenu" class="nav-link text-white fs-6" href="/catalog/6">Хлябы</a>
        <a id="linksmenu" class="nav-link text-white fs-6" href="/catalog/7">Булкі</a>
        <a id="linksmenu" class="nav-link text-white fs-6" href="/catalog/8">Пернікі</a>
        <a id="linksmenu" class="nav-link text-white fs-6" href="/catalog/9">Торты</a>
        <a id="linksmenu" class="nav-link text-white fs-6" href="/catalog/10">Сушкі</a>
      </nav>
    </aside>
  </div>

  <div class="positionsProduct">
    <div class="proposeProduct">
      @foreach($catalog->products as $product)
      <div  class="card" style="width: 20rem;">
        <a  class="d-flex justify-content-center fs-5" id="catalogname" href="{{asset('product/'.$product->id)}}">{{$product->name}}</a>
        @if($product->picture)
        <div>
        <a class="d-flex justify-content-center"  href="{{asset('product/'.$product->id)}}">
          <img id="catalogimage" src="{{asset('storage/'.$product->picture)}}">
        </a>          
        </div>
        @endif
      </div>
      @endforeach
    </div>
  </div>
</div>



@endsection