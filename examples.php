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