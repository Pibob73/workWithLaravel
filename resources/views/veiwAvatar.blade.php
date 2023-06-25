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
        <table>
            <tr>
                <th>avatar</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>role</th>
                <th>install avatar</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td><img src="{{$user->id . '/' . $user->id . '.png'}}" width="100" height="100"></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->role->role}}</td>
                <td><a href="{{$user->id . '/' . $user->id . '.png'}}" download>install</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>