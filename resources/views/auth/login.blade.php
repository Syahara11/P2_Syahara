<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sangadu</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style-login.css">
    <link rel="icon" href="/assets/img/logo-sangadu-2.png">
</head>
<body>
    <div class="container">
        <div class="login" style="margin-right: 10px">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Login</h1>
                <hr>
                <p>Pengaduan Masyarakat</p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" style="height:25px" :value="old('email')" required autofocus>
                <label for="password">Password</label>
                <input type="password" placeholder="Password" style="height:25px" id="password" name="password" :value="old('password')" required>
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="left">
            <img src="{{asset('assets/img/logo.png')}}" style="width:65%; height:80%; margin-left:70px;" alt="">
            <p style="font-size: 30px; margin-top:-20px;">Pengaduan Masyarakat</p>
        </div>
    </div>
</body>
</html>
