<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('createLogin.post')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo" id="photo"><br><br>
        <h3>Name</h3><input type="text" name="name" id="name"><br><br>
        <h3>Email</h3><input type="email" name="email" id="email"><br><br>
        <h3>Pass</h3><input type="password" name="password" id="password"><br><br>
        <h3>Phone</h3><input type="text" name="phone" id="phone"><br><br>
        <select name="role_id" id="role_id">
            @foreach($roles as $id => $role)
            <option value="{{$role->id}}" id="{{$id}}">{{$role->role}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="send">
    </form>
</body>

</html>