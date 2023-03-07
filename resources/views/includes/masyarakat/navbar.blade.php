{{--  --}}


<nav class="navbar navbar-expand-lg  navbar-dark position-sticky top-0 z-full shadow-sm" style="background-color: #004AAD">
    <div class="container">
        <nav class="navbar" style="background-color: #004AAD">
            <div class="container-fluid">
              <a class="navbar-brand fw-bold text-white" href="{{ url('user')}}">
                <img src="/assets/img/logo-sangadu-2.png" alt="Logo" width="30" class="d-inline-block align-text-top">
                SANGADU
              </a>
            </div>
        </nav>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active fw-semibold" href="{{ url('/')}}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active fw-semibold" aria-current="page" href="{{ url('user')}}">Laporkan</a>
            </li>
          <li class="nav-item">
            <a class="nav-link active fw-semibold" href="{{ url('user/pengaduan')}}">Riwayat Pengaduan</a>
          </li>
        </ul>
        <form action="{{Route('logout')}}" method="post">
            @csrf
            <button type="submit" class="fw-semibold btn fs-6" style="background-color: #6e8ef0">Logout</button>
        </form>
      </div>
    </div>
</nav>
