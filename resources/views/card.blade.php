<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="" alt="">
        <div class="caption">
            <h3>Iphone</h3>
            <p>500$</p>
            <p>
                <a href="{{route('cart')}}" type="submit" class="btn btn-primary" role="button">Add to cart</a>
                @isset($category)
                {{$category->name}}
                @endisset
                <a href="" class="btn btn-default">Read more...</a>
            </p>
        </div>
    </div>
</div>
