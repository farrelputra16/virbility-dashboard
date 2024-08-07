<nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
    <div class="container-fluid">
        <a class="navbar-brand mx-3" href="#">
            <img src="../assets/img/logo-virbility.png" alt="Logo" width="30" height="30">
            Virtual Reality for Disability
        </a>
        <div class="d-flex flex-grow-1 align-items-center">
            <div class="flex-grow-1" style="max-width: 300px;">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bahasa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-user"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/img/user.png" alt="User" width="30" height="30">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('login') }}">Sign In</a></li>
                        <li><a class="dropdown-item" href="{{ route('sign-up') }}">Sign Up</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
