<?php

include("service.php");
include("car.php");

// the way we get all brands.
$brands = getBrands();

// print all brands.
print_r($brands);
echo "<br><br>";

// get models by brand id.
$models = getModelsByBrand(2);
print_r($models);
echo "<br><br>";

// get cars by model id.
$carsByModel2 = getCarsByModel(2);
print_r($carsByModel2);
echo "<br><br>";

// the way we print each item of array.
foreach ($carsByModel2 as $value) {
    echo "id: ".$value['id']."<br>";
    echo "price: ".$value['price']."<br>";
    echo "img_url: ".$value['img_url']."<br>";
    echo "description_text: ".$value['description_text']."<br>";
    echo "color_name: ".$value['color_name']."<br>";
    echo "model_name: ".$value['model_name']."<br>";
    echo "series: ".$value['series']."<br><br>";
}


// get all cars.
$allCars = getCars();

// get black cars
$color = "Black";
$blackCars = filterCarsByColors($allCars, $color);
print_r($blackCars);
echo "<br><br>";

// insert new car.
$newCar = new car("0", "666", "test OOP url", "test OOP description", "2", "2", "");
// // uncomment it to insert new car.
// $result = $newCar->insertCarToApi();
// echo $result;
echo "<br><br>";


// example for get all cars
$cars = getCars();

// print all cars
print_r($cars);
echo "<br><br>";

// print each field of cars.
foreach ($cars as $value) {
    echo "id: ".$value['id']."<br>";
    echo "price: ".$value['price']."<br>";
    echo "img_url: ".$value['img_url']."<br>";
    echo "description_text: ".$value['description_text']."<br>";
    echo "color_name: ".$value['color_name']."<br>";
    echo "model_name: ".$value['model_name']."<br>";
    echo "series: ".$value['series']."<br><br>";
}

// the way we take the brand name with car id.
$brandName = getBrandNameByCarId(4);
echo $brandName;
echo "<br><br>";


