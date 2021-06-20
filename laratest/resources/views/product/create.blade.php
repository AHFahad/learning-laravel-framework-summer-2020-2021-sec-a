<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <h1>create product</h1>

    <a href="/product"> back</a>


    <form method="post" action='{{ url('product') }}' enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>product name: </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>upload product pic: </td>
                <td><input type="file" name="product_pic"></td>
            </tr>
            <tr>
                <td>details:</td>
                <td><input type="text" name="details"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="create" value="Create"></td>
            </tr>
        </table>

    </form>

</body>
</html>
