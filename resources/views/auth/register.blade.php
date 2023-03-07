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
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Register</h1>
                <hr>
                <p>Pengaduan Masyarakat</p>
                <label for="nik">NIK</label>
                <input type="text" placeholder="NIK" name="nik" id="nik" style="height:25px" required>
                <label for="name">Nama</label>
                <input type="text" placeholder="Nama" name="name" id="name" style="height:25px" required>
                <label for="email">Email</label>
                <input type="email" placeholder="Email" name="email" id="email" style="height:25px" required>
                <label for="phone">No. HP</label>
                <input type="text" placeholder="Nomor Hp" name="phone" id="phone" style="height:25px" required>
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="password" id="password" style="height:25px" required autocomplete="new-password">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" placeholder="Masukkan Password" name="password_confirmation" id="password_confirmation" style="height:25px" required>
                <button>Login</button>
            </form>
        </div>
        <div class="left">
            <img src="{{asset('assets/img/logo.png')}}" style="width:90%; height:75%; margin-left:30px;" alt="">
            <p style="font-size: 30px; margin-top:-20px;">Pengaduan Masyarakat</p>
        </div>
    </div>
</body>
</html>
