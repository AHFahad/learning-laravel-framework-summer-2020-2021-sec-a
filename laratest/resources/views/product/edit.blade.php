<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    <h1>edit product</h1>

    <a href="/product"> back</a>


    <form method="post" action='{{ url('product/'.$product->id) }}' enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>product name: </td>
                <td><input type="text" name="name" value="{{ $product->name }}"></td>
            </tr>
            <tr>
                <td>upload product pic: </td>
                <img src={{url($product->product_pic)}} }}>
                <td><input type="file" name="product_pic"></td>
            </tr>
            <tr>
                <td>details:</td>
                <td><input type="text" name="details" value="{{ $product->details }}"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="create" value="update"></td>
            </tr>
        </table>

    </form>

</body>
</html>
