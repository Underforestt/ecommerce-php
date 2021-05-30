@extends('master')
@section('title', 'product')

@section('content')
    <div class="container">
        <div class="starter-template">
            <h1>Iphone</h1>
            <h2>{{ $product }}</h2>
            <p>Price: <b>700$</b></p>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdujjs_UoYz1DZGiPHZ4TFt_4lncnzmSg48Ala80ImBUqA5WM3b4-oV6Mjgg&usqp=CAc">
            <p>Good choice if you are poor</p>
            <a class="btn btn-success" href="">Add to cart</a>
        </div>
    </div>
@endsection
