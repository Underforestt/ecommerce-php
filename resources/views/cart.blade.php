@extends('master')

@section('title', 'Cart')

@section('content')

    @foreach($order->products as $product)
        <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <a href="{{ route('product', [$product->category->code, $product->code]) }}">{{ $product->name }}</a>
                </td>
                <td><span class="badge">1</span>
                    <div class="btn-group">
                        <a href="" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-minus"></span></a>
                        <form action="{{route('cart-add', $product)}}" method="post">
                        <button  type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span></button>
                        @csrf
                        </form>

                    </div>
                </td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->price }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>



@endsection
