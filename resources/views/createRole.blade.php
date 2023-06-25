    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div>Create new role</div>
        <form method="POST" action="{{route('createRole.post')}}">
            <div>
                @csrf
                <input type="text" name="role" value="call role"><br>
                <input type="submit"><br>
            </div>
        </form>
    </body>

    </html>