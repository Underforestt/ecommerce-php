<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="" alt="">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{$product->price}}</p>
            <p>
                <form action="{{ route('cart-add', $product->id) }}" method="post">
                <button type="submit" class="btn btn-primary">Add to cart</button>
                <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-default">Read more...</a>
                @csrf
                </form>
            </p>
        </div>
    </div>
</div>
