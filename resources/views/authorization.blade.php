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
        <div>
            <form action="{{route('login.post')}}" method="post">
                @csrf
                <label for="email"></label><input type="email" name="email" id="email" value="{{old('email')}}" request autocomplete="email" autofocus><br><br>
                <label for="password"></label><input type="password" name="password" id="email"><br><br>
                <input type="submit">
            </form>
        </div>
    </div>
</body>

</html>