@extends('master')

@section('title', 'All categories')
@section('content')

    <div class="container">
        <div class="starter-template">
            @foreach($categories as $category)
                <div class="panel">
                    <a href="{{route('category', $category->code)}}">
                        <img src="https://miro.medium.com/max/2560/1*goGPwn50r5CuNC_dlXnU9A.jpeg" alt="">
                        <h2>{{$category->name}}</h2>
                    </a>
                    <p>
                        {{$category->description}}
                    </p>
                </div>
            @endforeach
@endsection
