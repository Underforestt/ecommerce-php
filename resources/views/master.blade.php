
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ecommerce shop @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{route('index')}}">All products</a></li>
                <li><a href="{{route('categories')}}">Categories</a></li>
                <li><a href="{{route('cart')}}">Cart</a></li>
                <li><a href="{{route('index')}}">Cancel changes</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>
