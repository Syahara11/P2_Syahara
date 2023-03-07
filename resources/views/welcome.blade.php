<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sangadu</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style-landing.css">
    <link rel="icon" href="/assets/img/logo-sangadu-2.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="title">
                <img src="/assets/img/logo-sangadu-2.png" style="width: 80px; height:60px; margin-left:10px;" alt="" srcset="">
                <h1 style="margin-top:15px"><a href="/">SANGADU</a></h1>
            </div>
            <ul>
                <li ><a class="active" href="/">Home</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#service">Pelayanan</a></li>
                <li><a href="{{url('login')}}">Masuk</a></li>
                <li><a href="{{url('register')}}">Daftar</a></li>
            </ul>
        </div>
    </header>

    <!-- banner -->
    <section class="banner">
        <h2>SELAMAT DATANG DI PENGADUAN MASYARAKAT</h2>
    </section>

    <!-- about -->
    <section id="about">
        <div class="about">
            <h3>TENTANG</h3>
            <div class="konten">
                <div class="kiri">
                    <h4 style="color:#004AAD">SANGADU</h4><br>
                    <p><strong>SANGADU</strong> adalah kepanjangan dari <strong>Sa</strong>kali <strong>Ngadu</strong>, yang dimaksud sakali ngadu disini adalah masyarakat hanya bisa melaporkan keluhannya dengan sekali kirim. Tidak bisa di edit kembali dan hanya bisa dihapus. Jadi, teliti lah dalam membuat laporan!<br></p>
                    <h4 style="color:#004AAD;margin-top:20px">TUJUAN SANGADU</h4><br>
                    <p>- Memberikan informasi atau laporan yang jelas dimana saja dan kapan saja.<br>- Mempermudah masyarakat untuk berkomunikasi dengan pihak yang berwenang walaupun dengan jarak jauh.</p>
                </div>
                <div class="kanan">
                   <h4 style="color:#004AAD">SANGADU</h4><br>
                    <p>Membuat Sangadu merupakan salah satu cara kami untuk melayani masyarakat. Dengan hadirnya sistem pelaporan pengaduan online ini, diharapkan setiap keluhan atau aduan masyarakat bisa di terima dan di tindaklanjuti oleh pihak terkait.<br> Ayo sampaikan keluhan anda disini! kami akan memprosesnya dengan cepat, aman, dan nyaman.</p>
                </div>
            </div>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</strong>, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> -->
        </div>
    </section>

    <!-- Service -->
    <section class="service" id="service">
        <div class="service" >
            <h3>PELAYANAN</h3>
            <p style="text-align: center; margin-top: -30px; margin-bottom: 30px">Berikut adalah alur pengaduan pada website <Strong>SANGADU</strong></p>
            <div class="box">
                <div class="col-4">
                    <div class="icon"><i class="fa-solid fa-edit"></i></div>
                    <h4>KIRIM LAPORAN</h4>
                    <p>Tulis keluhan anda dengan singkat namun jelas.</p>
                </div>
            </div>
            <div class="box">
                <div class="col-4">
                    <div class="icon"><i class="fa-solid fa-arrows-rotate"></i></div>
                    <h4>PROSES VERIFIKASI</h4>
                    <p>Tunggu sampai laporan anda di verifikasi untuk di proses lebih lanjut atau di tolak.</p>
                </div>
            </div>
            <div class="box">
                <div class="col-4">
                    <div class="icon"><i class="fa-solid fa-user-clock"></i></div>
                    <h4>TINDAK LANJUT</h4>
                    <p>Laporan anda sedang dalam proses dan akan di tindak lanjut oleh petugas.</p>
                </div>
            </div>
            <div class="box">
                <div class="col-4">
                    <div class="icon"><i class="fa-solid fa-clipboard-check"></i></div>
                    <h4>SELESAI</h4>
                    <p>Laporan pengaduan telah selesai di proses dan sudah di tanggapi.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="footer">
        <div class="">
            <small> © 2023 | By
                <a href="" class="text-primary" target="_blank">SANGADU</a></small>
        </div>
    </footer>

</body>
</html>
