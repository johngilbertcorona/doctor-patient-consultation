<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    @if ($message = Session::get('message'))
        <div class="alert alert-success p-1 mb-3">{{ $message }}</div>
    @endif

    <h1>Doctor Login</h1>
    <form action="login" method="post">
        @csrf
        <input type="text" name='username' placeholder="username"><br>
        <input type="password" name='password' placeholder="password" minlength="8"><br>
        <input type="hidden" name="role" value="2"><br>
        <input type="submit">
    </form>
    <br><br><br><br>

    <h1>Patient Login</h1>
    <form action="login" method="post">
        @csrf
        <input type="text" name='username' placeholder="username"><br>
        <input type="password" name='password' placeholder="password"><br>
        <input type="hidden" name="role" value="1"><br>
        <input type="submit">
    </form>


    <br><br><br><br>

    <h1>Administrator Login</h1>
    <form action="login" method="post">
        @csrf
        <input type="text" name='username' placeholder="username"><br>
        <input type="password" name='password' placeholder="password"><br>
        <input type="hidden" name="role" value="0"><br>
        <input type="submit">
    </form>
</body>

</html>
