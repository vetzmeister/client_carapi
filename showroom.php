<?php 
$page_title = 'Client car API showroom';
$pgDesc = 'Showroom page for the client side of our Car API';
$keyWords = 'showroom page client car api';

$page_id = 'showroom';
include("service.php");

$brands = getBrands();

$cars = getCars();
?>

<section>
    <div class="container-fluid">
        <?php foreach ( $cars as $value) : ?>
        <div class="row">
            <?php 
                    $url = $value['img_url'];
                    $id = $value['id'];
                ?>
            <div class="bg-cars col-12" style="background-image: url(<?php echo $url; ?>)">
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


<!-- // ................................... -->


<section>
    <div class="container-fluid">
        <?php foreach ( $cars as $car) : ?>
        <div class="row">
            <?php 
                    $url = $car['name']; 
                ?>
            <form action="/action_page.php" class="container">
                <ul>
                    <li><?php echo "name: ".$value['name']."<br>"; ?></li>
                </ul>
                <button type="button" class="btn">Read More</button>
            </form>
        </div>
    </div>
    <br />
    <?php endforeach; ?>
    </div>
</section>