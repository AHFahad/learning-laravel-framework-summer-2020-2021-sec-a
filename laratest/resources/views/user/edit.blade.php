<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
     
    <a href='/home'> Back </a> |
    <a href='/logout'> logout</a> 
    
    <h3> User Details update</h3>
    <form method="post">
	<table border="1">
		<tr>
            <td>ID</td>
			<td><input value="{{$user['id']}}" name='id'></td>
        </tr>
        <tr>
			<td>Name</td>
            <td><input value="{{$user['username']}}" name='uname'></td>
        </tr>
        <tr>
            <td>Password</td>
			<td><input value="{{$user['password']}}" name='password'></td>
        </tr>
        <tr>
			<td>Email</td>
            <td><input value="{{$user['email']}}" name='email'></td>
        </tr>
        <tr>
            <td>Type</td>
            <td><input value="{{$user['type']}}" name='type'></td>
		</tr>
        <tr>
			<td></td>
			<td><input type="submit" name="Submit" value="submit" ></td>
		</tr>

 	</table>
    </form>
</body>
</html>