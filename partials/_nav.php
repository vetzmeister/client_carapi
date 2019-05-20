<?php
session_start();

    if(empty($_SESSION["username"])) 
    { 
?>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerCarapi"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerCarapi">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ul-left">
            <li class="nav-item li_left">
                <a class="nav-link" href="index.php?home">Home</a>
            </li>
            <li class="nav-item li_left">
                <a class="nav-link" href="index.php?showroom">Cars</a>
            </li>
            <li class="nav-item li_left">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item li_left ">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>


<?php 
    } 
    else {  
?>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerCarapi"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerCarapi">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ul-left">
            <li class="nav-item li_left">
                <a class="nav-link" href="index.php?home">Home</a>
            </li>
            <li class="nav-item li_left">
                <a class="nav-link" href="index.php?showroom">Cars</a>
            </li>
            <li class="nav-item li_left">
                <p class="nav-link">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. You are logged
                    in.</p>
            </li>
            <li class="nav-item li_left">
                <p class="nav-link"><a href="logout.php" class="btn logout">Sign Out</a></p>
            </li>
        </ul>
    </div>

</nav>


<?php } ?>

<style>
.logout {

    padding: 2px 4px;
}
</style>