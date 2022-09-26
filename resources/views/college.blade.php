@extends('layouts.app')

@section('content')

<div class="intro">
    <div class="videoreceipe">
        <video autoplay muted loop id="myVideo">
        <source src="{{asset('/css/img/videobread.mp4')}}" type="video/mp4">
        Your browser does not support HTML5 video.
        </video>
    </div>    
</div>
<div class="promoblockend">
  <h3> Даўнія рэцэпты дайшлі да нас, і сёння<br> Хлебны дом радуе асаблівым смакам сваёй прадукцыі</h3>
</div>


<div class="blockreceipe">
    <div class="receipeblock">
        <div class="receipetext d-flex justify-content-flex-start flex-wrap">
            <h4 class="receipehead"><a href="/receipe"><strong>Ваўкавыскі хлеб</strong></a></h4>
            <h4 class="receipehead"><a href="/breadfood"><strong>Мотальскі пачастунак</strong></a></h4>
            <h4 class="receipehead"><a href="/breadfood"><strong>Рэцэпт з Глыбоччыны</strong></a></h4>
            <h4 class="receipehead"><a href="/receipe"><strong>Смаргонскі ласунак</strong></a></h4>
            <h4 class="receipehead"><a href="/breadfood"><strong>Вілейская булка</strong></a></h4>
            <h4 class="receipehead"><a href="/breadfood"><strong>Палескія аладкі</strong></a></h4>
        </div>
    </div>    
</div>




@endsection
