@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Пакупнікам') }}</div>
                <div class="card-body">
                    <form method='post' action="{{asset('home')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Імя</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="about" class="form-label">Апісанне</label>
                            <textarea name="about" id='about' class="form-control"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <select class="form-select" name="catalog_id">
                            <option value=0>Выбраць са спіса</option>
                            @foreach($catalogs as $catalog)
                            <option value="{{$catalog->id}}">{{$catalog->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Цана</label>
                            <input type="price" class="form-control" id="price" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="picture1" class="form-label">Карціначка</label>
                            <input type="file" class="form-control" id="picture1" name="picture1">
                        </div>
                        <button type="submit" class="btn btn-primary">Пацвердзіць</button>
                    </form>
                    <hr>
                    <table class='table table-bordered table-striped' width=100% >
                        <tr>
                            <th>Карцінка</th>
                            <th>Назва</th>
                            <th>Каталог</th>
                            <th>Цана</th>
                            <th>Апісанне</th>
                            <th>Дзеянне</th>
                        </tr>
                        @foreach($products as $product)
                        <tr>
                            <td>
                                @if($product->picture)
                                    <img src="{{asset('storage/'.$product->picture)}}" width='200px'>
                                @endif
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->catalog->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->about}}</td>
                            <td>
                                <a href="{{asset('home/product/'.$product->id.'/delete')}}">
                                    Выдаліць
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




