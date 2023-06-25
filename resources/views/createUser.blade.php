<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>Create User</div>
    <form action="{{route('createUser.post')}}" method="POST">
        @csrf
        <div>
            <input type="text" name="name" id="name" value="name"><br>
            <input type="text" name="password" id="password" value="password"><br>
            <input type="text" name="email" id="email" value="email"><br>
            <input type="text" name="phone" id="phone" value="phone"><br>
            <select name="role_id" id="role_id">
                @foreach($roles as $id => $role)
                <option value="{{$role->id}}" id="{{$id}}">{{$role->role}}</option>
                @endforeach
            </select><br>
            <input type="submit"><br>
        </div>
    </form>
</body>

</html>