<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>

<body>

    @if ($message = Session::get('message'))
        <div class="alert alert-success p-1 mb-3">{{ $message }}</div>
    @endif

    <h1>Register for Doctor</h1>
    <form action="register" method="post">
        @csrf
        <input type="text" name='fname' placeholder="fname"><br>
        <input type="text" name='lname' placeholder="lname"><br>
        <input type="text" name='username' placeholder="username"><br>
        <input type="email" name='email' placeholder="email"><br>
        <input type="password" name='password' placeholder="password" minlength="8"><br>
        <input type="text" name="role" value="2"><br>
        <input type="submit">
    </form>
    <br><br><br><br>

    <h1>Register for Patient</h1>
    <form action="register" method="post">
        @csrf
        <input type="text" name='fname' placeholder="fname"><br>
        <input type="text" name='lname' placeholder="lname"><br>
        <input type="text" name='username' placeholder="username"><br>
        <input type="email" name='email' placeholder="email"><br>
        <input type="password" name='password' placeholder="password"><br>
        <input type="text" name="role" value="1"><br>
        <input type="submit">
    </form>
    </form>
</body>

</html>
