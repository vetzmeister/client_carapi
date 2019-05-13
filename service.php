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

function getCarsByModel($model_id) {
    $url = 'http://wenzhemin.dk/carstore-api/carsbymodel/'.$model_id;
    $obj = json_decode(file_get_contents($url), true);
    $data = $obj['data'];

    $filtered_data = [];
    for($i = 0; $i < count($data); $i++){
        $item = $data[$i];
        $filtered_data[$i] = array(
            "id" => $item["id"],
            "price" => $item["price"],
            "img_url" => $item["img_url"],
            "description_text" => $item["description_text"],
            "color_id" => $item["color_id"],
            "model_id" => $item["model_id"],
            "series" => $item["series"]
        );
    }
    return $filtered_data;
}

function filterCarsByColors($cars, $color_id) {
    $filtered_data = [];
    for($i = 0; $i < count($cars); $i++){
        $item = $cars[$i];
        if ($item["color_id"] == $color_id) {
            array_push($filtered_data, $item);
        }
    }
    return $filtered_data;
}







