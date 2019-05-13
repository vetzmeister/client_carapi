<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerCarapi"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerCarapi">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ul-left">
            <li class="nav-item li_left <?php if ($page_id == 'home') {echo 'active';} ?>">
                <a class="nav-link" href="index.php?home">Home</a>
            </li>
            <li class="nav-item li_left <?php if ($page_id == 'showroom') {echo 'active';} ?>">
                <a class="nav-link" href="index.php?showroom">Cars</a>
            </li>
            <li class="nav-item li_left <?php if ($page_id == 'showroom') {echo 'hidden';} ?>">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item li_left <?php if ($page_id == 'showroom') {echo 'hidden';} ?>">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
