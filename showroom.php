<?php 
$page_title = 'Client car API showroom';
$pgDesc = 'Showroom page for the client side of our Car API';
$keyWords = 'showroom page client car api';

$page_id = 'showroom';


$cars = getCarsByModel(2);

foreach ($cars as $value) {
    echo "id: ".$value['id']."<br>";
    echo "price: ".$value['price']."<br>";
    echo "img_url: ".$value['img_url']."<br>";
    echo "description_text: ".$value['description_text']."<br>";
    echo "color_id: ".$value['color_id']."<br>";
    echo "model_id: ".$value['model_id']."<br>";
    echo "series: ".$value['series']."<br><br>";
}
?>
    <section class="row">
        <?php 
            foreach ($cars as $value) :
        ?>
    
        <div class="col-6">
            <img class="card-img-top" src="img/audi/audi3.jpg" alt="Audi Car">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"><?php  ?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="col-6">
            <img class="card-img-top" src="img/audi/audi3.jpg" alt="Audi Car">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </section>