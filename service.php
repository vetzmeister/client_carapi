<?php

function getBrands() {
    $url = 'http://wenzhemin.dk/carstore-api/brands';
    $obj = json_decode(file_get_contents($url), true);
    $data = $obj['data'];

    $filtered_data = [];
    for($i = 0; $i < count($data); $i++){
        $item = $data[$i];
        $filtered_data[$i] = array(
            "id" => $item["id"],
            "name" => $item["name"]
        );
    }
    return $filtered_data;
}

function getModelsByBrand($brand_id) {
    $url = 'http://wenzhemin.dk/carstore-api/modelsbybrand/'.$brand_id;
    $obj = json_decode(file_get_contents($url), true);
    $data = $obj['data'];

    $filtered_data = [];
    for($i = 0; $i < count($data); $i++){
        $item = $data[$i];
        $filtered_data[$i] = array(
            "id" => $item["id"],
            "name" => $item["name"],
            "brand_id" => $item["brand_id"]
        );
    }
    return $filtered_data;
}

// get all cars.
function getCars() {
    $url = 'http://wenzhemin.dk/carstore-api/carsview';
    $data = json_decode(file_get_contents($url), true);

    $filtered_data = [];
    for($i = 0; $i < count($data); $i++){
        $item = $data[$i];
        $filtered_data[$i] = array(
            "id" => $item["id"],
            "price" => $item["price"],
            "img_url" => $item["img_url"],
            "description_text" => $item["description_text"],
            "color_name" => $item["color_name"],
            "model_name" => $item["model_name"],
            "series" => $item["series"]
        );
    }
    return $filtered_data;
}

function getCarsByModel($model_id) {
    $url = 'http://wenzhemin.dk/carstore-api/carsbymodelview/'.$model_id;
    $data = json_decode(file_get_contents($url), true);

    $filtered_data = [];
    for($i = 0; $i < count($data); $i++){
        $item = $data[$i];
        $filtered_data[$i] = array(
            "id" => $item["id"],
            "price" => $item["price"],
            "img_url" => $item["img_url"],
            "description_text" => $item["description_text"],
            "color_name" => $item["color_name"],
            "model_name" => $item["model_name"],
            "series" => $item["series"]
        );
    }
    return $filtered_data;
}


// get brand name by car id.
function getBrandNameByCarId($id) {
    $urlCar = 'http://wenzhemin.dk/carstore-api/cars/'.$id;
    $objCar = json_decode(file_get_contents($urlCar), true);
    $dataCar = $objCar['data'];
    $modelId = $dataCar["model_id"];

    $urlModel = 'http://wenzhemin.dk/carstore-api/models/'.$modelId;
    $objModel = json_decode(file_get_contents($urlModel), true);
    $dataModel = $objModel['data'];
    $brandId = $dataModel["brand_id"];

    $urlBrand = 'http://wenzhemin.dk/carstore-api/brands/'.$brandId;
    $objBrand = json_decode(file_get_contents($urlBrand), true);
    $dataBrand = $objBrand['data'];
    $brandName = $dataBrand["name"];
    return $brandName;
}


function filterCarsByColors($cars, $color_name) {
    $filtered_data = [];
    for($i = 0; $i < count($cars); $i++){
        $item = $cars[$i];
        if ($item["color_name"] == $color_name) {
            array_push($filtered_data, $item);
        }
    }
    return $filtered_data;
}




