@extends('layouts.app')

@section('content')



    <div class="header">
        <div class="blockforhead">
            <h1 class="logotext">
                <div class="name">Хлебны дом
                    <div class="logo">
                        <div class="pavaha">З павагай да традыцый</div>
                        <div class="line"></div>
                    </div>
                </div>
            </h1>            
        </div>

    </div>

    <div class="vodhuki">
        <div class="mansvoise">
            <div class="cont">
                <div class="contimage">
                    <img src="/css/img/man.jpg" />
                </div>
                <div class="textman">
                    <h4 class="featurette-heading">Мы клапоцімся аб сваіх кліентах,<br>
                        выкарыстоўваючы <strong>натуральныя кампаненты.</strong></h4>
                    <p class="lead">Францішак, пекар 4-га разраду</p>
                </div>
            </div>
            <div class="contwoman">
                <div class="textman">
                    <h4  class="featurette-heading">Кожная булачка мае душу, бо выраблена <br><strong>з любоўю.</strong>
                    </h4>
                    <p class="lead">Ганна, пекар-майстар</p>
                </div>
                <div class="contimage">
                    <img src="/css/img/woman.jpg" />
                </div>
            </div>
        </div>
    </div>



    <div class="block">
        <div class="proposition">
            <div class="blocktext">
                <div class="promo">
                    <h2 class="textpromo">Толькі гэтым месяцам
                        <h3 class="promotext">Зрабі замову – і атрымай 30% зніжку!</h3>
                    </h2>
                </div>
                <div class="forclick">
                    <a href="/catalog/9" class="buttonpromo">
                        <h4>Да галерэі тортаў...</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="promoschool">
        <div class="form">
            <div class="imagetext">
                <h2>Крочым па адметных рэцэптах</h2>
                <p><strong>Хлебны Дом</strong> забяспечвае гандаль
                    рознымі гатункамі
                    хлеба. <br>Беларусы
                    могуць на любы густ
                    знайсці яго ў крамах.
                    <p>
                    </p>
                </p>
                <p>Прапаноўваем разам з <strong>Хлебным домам</strong><br>
                    абраць свой ўлюбёны рэцэпт.
                </p>
                <div class="schoolclick">
                    <a class="textcollege fs-4" href='/college'><strong>Агляд рэцэптаў Пякарскай школы...</strong></a>
                </div>
            </div>
            <div class="imageboy">
                <img src="{{asset('/css/img/child.jpg')}}" />
            </div>
        </div>
    </div>

@endsection
