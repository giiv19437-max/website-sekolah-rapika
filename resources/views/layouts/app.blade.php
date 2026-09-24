<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
    @yield('title', 'SMKN 1 Cijati')
</title>

{{-- FONT --}}
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
>

{{-- BOOTSTRAP --}}
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>

{{-- ICON --}}
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>

@stack('styles')

<style>

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: #f5f7fa;
        color: #172033;
    }

    a {
        text-decoration: none;
    }


    /* =========================================
       NAVBAR
    ========================================= */

    .navbar-school {
        width: 100%;
        height: 75px;

        position: sticky;
        top: 0;

        z-index: 9999;

        background: #ffffff;

        border-bottom: 1px solid #e5e7eb;

        box-shadow: 0 3px 15px rgba(0, 0, 0, .06);
    }


    .navbar-container {
        width: 92%;
        max-width: 1200px;

        height: 100%;

        margin: auto;

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 30px;
    }


    /* =========================================
       LOGO
    ========================================= */

    .navbar-logo {
        display: flex;

        align-items: center;

        gap: 12px;

        flex-shrink: 0;
    }

    .navbar-logo img {
        width: 48px;
        height: 48px;

        object-fit: cover;

        border-radius: 10px;

        border: 2px solid #e8edf3;
    }

    .logo-text {
        line-height: 1.2;
    }

    .logo-text small {
        display: block;

        font-size: 9px;

        color: #8a94a6;

        letter-spacing: .5px;
    }

    .logo-text strong {
        display: block;

        font-size: 15px;

        font-weight: 800;

        color: #10213d;
    }


    /* =========================================
       MENU
    ========================================= */

    .nav-menu {
        display: flex;

        align-items: center;

        justify-content: flex-end;

        gap: 5px;

        flex: 1;
    }

    .nav-menu a {
        display: flex;

        align-items: center;

        gap: 6px;

        padding: 10px 12px;

        border-radius: 9px;

        color: #566275;

        font-size: 13px;

        font-weight: 600;

        transition: .25s ease;
    }

    .nav-menu a:hover {
        color: #0875c1;

        background: #edf7ff;
    }

    .nav-menu a.active {
        color: #ffffff;

        background: linear-gradient(
            135deg,
            #075d98,
            #0c8bd1
        );

        box-shadow: 0 5px 15px rgba(8, 117, 193, .20);
    }

    .nav-menu i {
        font-size: 14px;
    }


    /* =========================================
       CONTENT
    ========================================= */

    .page-content {
        width: 100%;
        min-height: calc(100vh - 75px);
    }


    /* =========================================
       FOOTER
    ========================================= */

    .footer {
        background: #071a30;

        color: white;

        padding: 50px 20px 25px;
    }

    .footer-container {
        width: 92%;
        max-width: 1200px;

        margin: auto;
    }

    .footer-grid {
        display: grid;

        grid-template-columns: 1.5fr 1fr 1fr;

        gap: 50px;
    }

    .footer h3 {
        font-size: 18px;

        font-weight: 800;

        margin-bottom: 15px;
    }

    .footer h4 {
        font-size: 15px;

        margin-bottom: 15px;

        font-weight: 700;
    }

    .footer p,
    .footer a,
    .footer span {
        color: rgba(255,255,255,.60);

        font-size: 13px;

        line-height: 1.8;
    }

    .footer a {
        display: block;

        margin-bottom: 7px;
    }

    .footer a:hover {
        color: white;
    }

    .footer-bottom {
        margin-top: 35px;

        padding-top: 20px;

        border-top: 1px solid rgba(255,255,255,.10);

        display: flex;

        justify-content: space-between;

        align-items: center;
    }


    /* =========================================
       MOBILE BUTTON
    ========================================= */

    .menu-button {
        display: none;

        width: 42px;
        height: 42px;

        border: none;

        border-radius: 9px;

        background: #edf7ff;

        color: #0875c1;

        font-size: 21px;
    }


    /* =========================================
       TABLET
    ========================================= */

    @media (max-width: 1000px) {

        .nav-menu a {
            padding: 9px 8px;

            font-size: 11px;
        }

        .nav-menu {
            gap: 2px;
        }

    }


    /* =========================================
       HP
    ========================================= */

    @media (max-width: 800px) {

        .navbar-container {
            width: 94%;
        }

        .menu-button {
            display: flex;

            align-items: center;

            justify-content: center;
        }

        .nav-menu {
            display: none;

            position: absolute;

            top: 75px;

            left: 0;

            width: 100%;

            background: white;

            padding: 15px;

            flex-direction: column;

            align-items: stretch;

            box-shadow: 0 10px 20px rgba(0,0,0,.10);
        }

        .nav-menu.show {
            display: flex;
        }

        .nav-menu a {
            width: 100%;

            justify-content: flex-start;

            padding: 12px 15px;

            font-size: 13px;
        }

        .footer-grid {
            grid-template-columns: 1fr 1fr;
        }

    }


    @media (max-width: 600px) {

        .navbar-logo img {
            width: 42px;
            height: 42px;
        }

        .logo-text strong {
            font-size: 13px;
        }

        .logo-text small {
            font-size: 8px;
        }

        .footer-grid {
            grid-template-columns: 1fr;
        }

        .footer-bottom {
            flex-direction: column;

            text-align: center;

            gap: 10px;
        }

    }

</style>

</head>

<body>

{{-- =========================================
     NAVBAR
========================================= --}}

<nav class="navbar-school">

    <div class="navbar-container">


        {{-- LOGO --}}

        <a
            href="{{ route('beranda') }}"
            class="navbar-logo"
        >

            <img
                src="{{ asset('images/logo.jpg') }}"
                alt="Logo SMKN 1 Cijati"
            >

            <div class="logo-text">

                <small>
                    WEBSITE RESMI
                </small>

                <strong>
                    SMKN 1 CIJATI
                </strong>

            </div>

        </a>


        {{-- BUTTON MOBILE --}}

        <button
            class="menu-button"
            type="button"
            onclick="toggleMenu()"
        >

            <i class="bi bi-list"></i>

        </button>


        {{-- MENU --}}

        <div
            class="nav-menu"
            id="navMenu"
        >

            <a
                href="{{ route('beranda') }}"
                class="{{ request()->routeIs('beranda') ? 'active' : '' }}"
            >
                <i class="bi bi-house-door"></i>
                Beranda
            </a>


            <a
                href="{{ route('profil') }}"
                class="{{ request()->routeIs('profil') ? 'active' : '' }}"
            >
                <i class="bi bi-building"></i>
                Profil
            </a>


            <a
                href="{{ route('jurusan') }}"
                class="{{ request()->routeIs('jurusan') ? 'active' : '' }}"
            >
                <i class="bi bi-mortarboard"></i>
                Jurusan
            </a>


            <a
                href="{{ route('ekstrakurikuler') }}"
                class="{{ request()->routeIs('ekstrakurikuler') ? 'active' : '' }}"
            >
                <i class="bi bi-trophy"></i>
                Ekskul
            </a>


            <a
                href="{{ route('galeri') }}"
                class="{{ request()->routeIs('galeri') ? 'active' : '' }}"
            >
                <i class="bi bi-images"></i>
                Galeri
            </a>


            <a
                href="{{ route('informasi') }}"
                class="{{ request()->routeIs('informasi') ? 'active' : '' }}"
            >
                <i class="bi bi-newspaper"></i>
                Informasi
            </a>


            <a
                href="{{ route('kontak') }}"
                class="{{ request()->routeIs('kontak') ? 'active' : '' }}"
            >
                <i class="bi bi-telephone"></i>
                Kontak
            </a>

        </div>

    </div>

</nav>


{{-- =========================================
     CONTENT
========================================= --}}

<main class="page-content">

    @yield('content')

</main>


{{-- =========================================
     FOOTER
========================================= --}}

<footer class="footer">

    <div class="footer-container">

        <div class="footer-grid">


            <div>

                <h3>
                    SMKN 1 CIJATI
                </h3>

                <p>
                    Website resmi SMKN 1 Cijati yang menyediakan
                    informasi sekolah, jurusan, kegiatan,
                    galeri dan informasi lainnya.
                </p>

            </div>


            <div>

                <h4>
                    Menu
                </h4>

                <a href="{{ route('beranda') }}">
                    Beranda
                </a>

                <a href="{{ route('profil') }}">
                    Profil
                </a>

                <a href="{{ route('jurusan') }}">
                    Jurusan
                </a>

                <a href="{{ route('ekstrakurikuler') }}">
                    Ekskul
                </a>

                <a href="{{ route('galeri') }}">
                    Galeri
                </a>

                <a href="{{ route('informasi') }}">
                    Informasi
                </a>

                <a href="{{ route('kontak') }}">
                    Kontak
                </a>

            </div>


            <div>

                <h4>
                    Alamat Sekolah
                </h4>

                <span>
                    Jl. Raya Cijati,
                    Kecamatan Cijati,
                    Kabupaten Cianjur,
                    Jawa Barat
                </span>

            </div>

        </div>


        <div class="footer-bottom">

            <p>
                © {{ date('Y') }} SMKN 1 Cijati
            </p>

            <div>
                <i class="bi bi-facebook me-2"></i>
                <i class="bi bi-instagram me-2"></i>
                <i class="bi bi-youtube"></i>
            </div>

        </div>

    </div>

</footer>


{{-- BOOTSTRAP JS --}}

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


{{-- MENU MOBILE --}}

<script>

    function toggleMenu() {

        const menu = document.getElementById('navMenu');

        menu.classList.toggle('show');

    }
<a href="{{ route('beranda') }}" class="navbar-brand d-flex align-items-center">
    <img src="{{ asset('images/logo.jpg') }}"
         alt="Logo SMKN 1 Cijati"
         width="50"
         height="50"
         class="rounded-circle me-2">

    <span>SMKN 1 Cijati</span>
</a>
</script>


@stack('scripts')


</body>

</html>
