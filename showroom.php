<?php 
$page_title = 'Client car API showroom';
$pgDesc = 'Showroom page for the client side of our Car API';
$keyWords = 'showroom page client car api';

$page_id = 'showroom';
include("service.php");

$brands = getBrands();

// foreach ($carsbymodel as $value) {
//     echo "id: ".$value['id']."<br>";
//     echo "price: ".$value['price']."<br>";
//     echo "img_url: ".$value['img_url']."<br>";
//     echo "description_text: ".$value['description_text']."<br>";
//     echo "color_id: ".$value['color_id']."<br>";
//     echo "model_id: ".$value['model_id']."<br>";
//     echo "series: ".$value['series']."<br><br>";
// }

// foreach ($brands as $value) {
//     echo "id: ".$value['id']."<br>";
//     echo "name: ".$value['name']."<br>";
// }


$cars = getCarsByModel(2);

// foreach ($cars as $value) {
//     echo "id: ".$value['id']."<br>";
//     echo "price: ".$value['price']."<br>";
//     echo "img_url: ".$value['img_url']."<br>";
//     echo "description_text: ".$value['description_text']."<br>";
//     echo "color_id: ".$value['color_id']."<br>";
//     echo "model_id: ".$value['model_id']."<br>";
//     echo "series: ".$value['series']."<br><br>";
// }
?>

<!-- <section>
    <div class="container-fluid">
        <div class="row">
            <div class="bg-img2 col-12"
                <?php
                // $carsbymodel = getCarsByModel(2);
                // foreach ($carsbymodel as $value) {
                //     echo "id: ".$value['id']."<br>";
                //     $id = $value['id'];
                //     $url = $value['img_url'];
                //     echo "<img src=\"$url\" alt=\"$id\"> ";
                // }

                ?>
                >
                <img src="img/audi/audi1.jpg">
                <form action="/action_page.php" class="container">
                    <h4>Audi RS6 Avant</h4>

                    <label for="Specs"><b>Specifications</b></label>
                    <ul>
                        <li>HK: 450 </li>
                        <li>NM: 800</li>
                        <li>Km/L: 4.5</li>
                        <li>Km: 3000</li>
                    </ul>

                    <button type="button" class="btn">Read More</button>
                </form>
            </div>
        </div>
    </div>
</section> -->

<section>
    <div class="container-fluid">
        <?php foreach ( $cars as $value) : ?>
            <div class="row">
                <div class="bg-img1 col-12">
                    <?php 
                    $id = $value['id'];
                    $url = $value['img_url'];
                    // echo "<img class=\"bg-img1\" src=\"$url\" alt=\"$id\"> ";?>
                    <form action="/action_page.php" class="container">
                        <h4>Audi RS6 Avant</h4>
                        <label for="Specs"><b>Specifications</b></label>
                        <ul>
                            <li><?php echo "ID: ".$value['id']."<br>"; ?></li>
                            <li><?php echo "Price: ".$value['price']."<br>"; ?></li>
                            <li><?php echo "Series: ".$value['series']."<br><br>"; ?></li>
                            <li><?php echo "Description: ".$value['description_text']."<br>"; ?></li>
                        </ul>                
                        <button type="button" class="btn">Read More</button>
                    </form>
                </div>
            </div>
            <br />
            <?php endforeach; ?>
    </div>
</section>

<!-- IMAGE TEST -->
<!-- <section>
    <div class="container-fluid">
        <div class="row">
            <div class="bg-img2 col-12">
                <form action="/action_page.php" class="container">
                    <h4>Audi RS6 Avant</h4>

                    <label for="Specs"><b>Specifications</b></label>
                    <ul>
                        <li>HK: 450 </li>
                        <li>NM: 800</li>
                        <li>Km/L: 4.5</li>
                        <li>Km: 3000</li>
                    </ul>

                    <button type="button" class="btn">Read More</button>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="row">   
    <div class="col-6">
        <img class="card-img-top" src="img/audi/audi3.jpg" alt="Audi Car">
    </div>    
    <div class="col-2">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>     
</section>

<section class="row">
        <div class="col-6">
            <img class="card-img-top" src="img/audi/audi3.jpg" alt="Audi Car">
        </div>   

        <div class="col-2">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
</section> -->