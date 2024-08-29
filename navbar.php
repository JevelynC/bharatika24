<div class="navDesktop">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid py-1 p-md-0 px-md-2">
            <a class="navbar-brand mx-3 text-white" href="#"><img src="assets/img/logo.png" alt="" class="logo-nav"></a>
            <button class="navbar-toggler mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: transparent !important;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-0 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white homeNavbar homeNavbar1" aria-current="page" href="home.php">HOME</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white eventNavbar eventNavbar1" aria-current="page" href="event.php">EVENTS</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white eventsNavbar eventsNavbar1" aria-current="page" href="exhibition.php">EXHIBITION</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white compeNavbar compeNavbar1" aria-current="page" href="competition.php">COMPETITION</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white aboutNavbar aboutNavbar1" aria-current="page" href="about.php">ABOUT</a>
                    </li>
                </ul>
                <?php
                if (!isset($_SESSION['id'])) {
                    echo '<ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item mx-3 mx-lg-0 me-lg-3">
                        <a class="nav-link text-white" aria-current="page" href="login.php"><b>SIGN
                                IN/REGISTER</b></a>
                    </li>
                </ul>';
                } else {
                    echo '
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item mx-3 mx-lg-0 me-lg-3">
                        <a class="nav-link text-white" aria-current="page" href="profile.php"><b>PROFILE</b></a>
                    </li>
                </ul>';
                }
                ?>
            </div>
        </div>
    </nav>
</div>

<div class="mobileDesktop">
    <div class="navbar"></div>
    <div class="logo_container">
        <a href="">
            <img src="assets/img/logo.png" alt="" class="logo-nav">
        </a>

    </div>

    <?php
    if (!isset($_SESSION['id'])) {
        echo '<a href="login.php"><i class="fa-solid fa-user fa-lg logo-user" style="color: var(--cream);"></i></a>';
    } else {
        echo '<a href="profile.php"><i class="fa-solid fa-user fa-lg logo-user" style="color: var(--cream);"></i></a>';
    }
    ?>


    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
        <div class="spinner diagonal part-1"></div>
        <div class="spinner horizontal"></div>
        <div class="spinner diagonal part-2"></div>
    </label>
    <div id="sidebarMenu">
        <ul class="sidebarMenuInner p-3 d-flex flex-column justify-content-center font4">
            <a href="home.php">
                <li class="p-2 mb-5">
                    <h1 class="homeNavbar">HOME</h1>
                </li>
            </a>
            <a href="event.php" class="eventNavbar">
                <li class="p-2 mb-5">
                    <h1>EVENTS</h1>
                </li>
            </a>
            <a href="exhibition.php" class="eventsNavbar">
                <li class="p-2 mb-5">
                    <h1>EXHIBITION</h1>
                </li>
            </a>
            <a href="competition.php" class="compeNavbar">
                <li class="p-2 mb-5">
                    <h1>COMPETITIONS</h1>
                </li>
            </a>
            <a href="about.php" class="aboutNavbar">
                <li class="p-2 mb-5">
                    <h1>ABOUT</h1>
                </li>
            </a>
        </ul>
    </div>
</div>