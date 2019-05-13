<?php
/**
 * Created by PhpStorm.
 * User: wenzhemin
 * Date: 5/9/2019
 * Time: 1:05 PM
 */

class car
{
    private $id;
    private $price;
    private $img_url;
    private $description_text;
    private $color_id;
    private $model_id;
    private $series;

    public function __construct($id, $price, $img_url, $description_text, $color_id, $model_id, $series)
    {
        $this->id = $id;
        $this->price = $price;
        $this->img_url = $img_url;
        $this->description_text = $description_text;
        $this->color_id = $color_id;
        $this->model_id = $model_id;
        $this->series = $series;
    }

    public function insertCarToApi()
    {
        //API URL
        $url = 'http://wenzhemin.dk/carstore-api/cars';

        //create a new cURL resource
        $ch = curl_init($url);

        //setup request to send json via POST
        $data = array(
            'price' => $this->price,
            'img_url' => $this->img_url,
            'description_text' => $this->description_text,
            'color_id' => $this->color_id,
            'model_id' => $this->model_id,
            'series' => $this->series,
        );
        $payload = json_encode($data);

        //attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute the POST request
        $result = curl_exec($ch);

        //close cURL resource
        curl_close($ch);

        return $result;
    }


}