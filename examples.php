<?php

include("service.php");
include("car.php");

print_r(getBrands());
echo "<br><br>";
print_r(getModelsByBrand(2));
echo "<br><br>";
print_r(getCarsByModel(2));
echo "<br><br>";

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

$carsWithModel2 = getCarsByModel(2);
print_r($carsWithModel2);
echo "<br><br>";

$carsWithColor2 = filterCarsByColors($carsWithModel2, 1);
print_r($carsWithColor2);
echo "<br><br>";

$newCar = new car("0", "666", "test OOP url", "test OOP description", "2", "2", "");
$result = $newCar->insertCarToApi();
echo $result;
echo "<br><br>";


// the way we take name of one brand by its id
// assume need the name for the brand the id of that is 1.
$brand_id = 1;
echo getBrandName($brand_id);
echo "<br><br>";

// the way we take name of one model by its id
// assume need the name for the model the id of that is 2.
$model_id = 2;
echo getModelName($model_id);
echo "<br><br>";

// the way we take name of one color by its id
// assume need the name for the color the id of that is 3.
$color_id = 1;
echo getColorName($color_id);
echo "<br><br>";



