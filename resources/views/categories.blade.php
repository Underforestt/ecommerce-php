<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/starter-template.css">
</head>
<body>
    <div class="container">
        <div class="starter-template">
            @foreach($categories as $category)
                <div class="panel">
                    <a href="/{{$category->code}}">
                        <img src="https://miro.medium.com/max/2560/1*goGPwn50r5CuNC_dlXnU9A.jpeg" alt="">
                        <h2>{{$category->name}}</h2>
                    </a>
                    <p>
                        {{$category->description}}
                    </p>
                </div>
            @endforeach
</body>
</html>
