<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tampilan murid </title>
</head>
<body>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <h1>murid</h1>
</body>
</html>