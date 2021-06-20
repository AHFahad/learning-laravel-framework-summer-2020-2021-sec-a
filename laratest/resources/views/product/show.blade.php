<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
</head>
<body>
    <a href="/product"> back</a>
    <hr>
    <h4> product </h4>
    <label>product name</label>
    <h4>{{$product->name }}</h4>
    <hr>

    <label>product detail</label>
    <h4>{{$product->details }}</h4>
    <hr>

    <label>product pic</label>
    <h4><img src={{url($product->product_pic)}} }}></h4>
    <hr>
</body>
</html>
