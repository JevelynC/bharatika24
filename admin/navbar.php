<style>
    :root {
        --cream: #faf6e6;
        --black: #181914;
        --green: #a4ce39;
        --magenta: #781442;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--black);
    }

    #logNavbar {
        transition: 0.1s ease-in-out;
    }

    #logNavbar:hover {
        background-color: var(--black);
        border-radius: 15px;
    }

    .navbar {
        font-weight: 600;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3)
    }

    body {
        height: 100vh;
    }

    .judul {
        color: var(--cream);
    }

    ::-webkit-scrollbar {
        width: 12px;
    }

    ::-webkit-scrollbar-thumb {
        background: var(--black);
        background: var(--green);
        border-radius: 12px;
    }

    ::-webkit-scrollbar-track {
        background-color: var(--black);
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(90deg, #a4ce39 0%, #781442 100%);">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="index.php">
            <img src="https://bharatikafest.petra.ac.id/2024/main/assets/img/logo.png" alt="" height="35" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item mx-0 mx-lg-3">
                    <a class="nav-link homeNavbar" aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item mx-0 mx-lg-3">
                    <a class="nav-link daftarNavbar" href="daftar.php"><i class="fas fa-user-check"></i> Pendaftaran Lomba</a>
                </li>
                <li class="nav-item mx-0 mx-lg-3">
                    <a class="nav-link karyaNavbar" href="karya.php"><i class="fas fa-tasks"></i> Pengumpulan Karya</a>
                </li>
                <li class="nav-item mx-0">
                    <a class="nav-link " id="logNavbar" href="logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>