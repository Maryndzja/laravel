@extends('layouts.app')

@section('content')
<div class="container" id="collegeblock">
  <div class="adressblock">
    <h5 >
      <a class="information" href='/for_people'>Інфармацыя для заключэння дамоў<br>
        з пакупнікамі прадукцыі</a>
    </h5>
    <h5>
      <a class="information" href="/food_products">Інфармацыя для заключэння дамоў<br>
        з пастаўшчыкамі харчовых тавараў</a>
    </h5>
    <div class="contactsblock">
      <p class="requisites fs-4">Банкаўскія рэквізіты:</p>
      <p class="telephone fs-5">
        Разліковы рахунак:<br>
        BYХХХХХХХХХХХХХХХХХХХХХХХ<br>
        Код: ХХХХХХХ<br>
        Банк: у ХХХ "ХХХХХХХХХХХХХХ"<br>
        г. ХХХХХХ пр-т ХХХХХХХ,Х
      </p>
    </div>
  </div>  
  <div class="imageforend"></div>
</div>



<div class="promoblockendclients">
  <h3>Мы - каманда прафесіяналаў, аматары хлебапякарскай справы.<br>Давяраючы нам свае спадзяванні, вы не застанецеся
    расчараванымі.</h3>
</div>
<div class="karta">
    <div class="blockkarta">
      <script class="cartago" script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0250121c1b61db9415ac4ca7e8f682752914d2e93a96fdaffca9c0506bdb3be7&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
    <div class="contactsblockfor">
      <p class="requisitesfor fs-4">Адрас:</p>
      <p class="telephone fs-5">
        РБ, ХХХХХХ, ХХХХХХХ вобл.,
        г. ХХХХХ, ул. ХХХХХХХХХ, Х<br>

        тэл. / факс:
        *(*****) *-**-**<br>

        Рэжым працы: <br>
        Панядзелак-пятніца 8:00–17:00; <br>
        абед 13:00–14:00;
        субота, нядзеля-выхадны.
      </p>
    </div>

</div>


@endsection