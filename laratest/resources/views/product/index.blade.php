<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>product index</title>
</head>
<body>
<a href="product/create"> create product</a>


<h3> product List</h3>
	<table border="1">
		<tr>
            <td>ID</td>
			<td>name</td>
			<td>detail</td>
            <td>pic</td>
		</tr>
        @foreach ($product as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['details']}}</td>

                <td><img src="{{ $item['product_pic'] }}"></td>
                <td>
                    <a href="{{ url('product/'.$item->id) }}"> Details</a>
                    <a href="{{ url('product/'.$item->id.'/edit') }}"> Edit</a>
                    <form method="post" action="{{ url('product/'.$item->id) }}" >
                        @csrf
                        @method("DELETE")
                        <button type="submit" > Delete</button>

                    </form>

                </td>
                {{-- <a href="/user/details/{{$user['id']}}"> Details</a> | --}}
            </tr>
        @endforeach
 	</table>
</body>
</html>
