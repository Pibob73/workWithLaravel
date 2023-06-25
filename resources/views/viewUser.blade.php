<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <img src="{{$user[0]['id'] . '/' . $user[0]['id'] . '.png'}}" width="100" height="100"><br><br>
    <h3>{{$user[0]['name']}}</h3><br><br>
    <h3>{{$user[0]['email']}}</h3><br><br>
    <h3>{{$user[0]['phone']}}</h3><br><br>
    <form action="{{route('viewUser.post', $user[0]['name'])}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo" id="photo"><br><br>
        <input type="submit" value="change photo"><br>
    </form>
</body>

</html>