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
        <?php foreach ( $cars + $brands as $value) : ?>
            <div class="row">
                <?php 
                    $url = $value['img_url'];
                    $id = $value['id'];
                ?>
                <div class="bg-cars col-12" style="background-image: url(<?php echo $url; ?>)">
                    <form action="/action_page.php" class="container">
                        <h4><?php echo $value['name']. $value['model_name']; ?></h4>
                        <label for="Specs"><b>Specifications</b></label>
                            <P><?php echo "Price: ".$value['price'].",-"; ?></p>
                            <p><?php echo "Model: ".$value['model_name']; ?></p>
                            <p><?php echo "color_name: ".$value['color_name']; ?></p>
                            <p><?php echo "Description: ".$value['description_text']; ?></p>
                        <button type="button" class="btn rm_btn">Read More</button>
                    </form>
                </div>
            </div>
            <br />
            <?php endforeach; ?>
    </div>
</section>