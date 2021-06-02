<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="" alt="">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{$product->price}}</p>
            <p>
                <a href="{{route('cart')}}" type="submit" class="btn btn-primary" role="button">Add to cart</a>
                <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-default">Read more...</a>
            </p>
        </div>
    </div>
</div>
