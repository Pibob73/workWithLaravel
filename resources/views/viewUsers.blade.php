<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="{{route('getUsers')}}" method="POST">
            @csrf
            <input type="text" name="search" id="search">
            <input type="submit">
        </form>
    </div><br><br>
    <div>
        <table>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>role</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->role->role}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>