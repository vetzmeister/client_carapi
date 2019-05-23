<?php
include ('partials/_head.php');
include ('partials/_nav.php');

include("service.php");
include("car.php");
 
 
// if(isset($_POST['insert_car'])){ 
    $id="";
    $price = $_POST['price'];
    $img_url = "testing img";
    $description_text = $_POST['description'];  
    $color_id  = "1";  
    $model_id = $_POST['model']; 
    $series = "";
    
     
    // $id="8";
    // $price = "880000";
    // $img_url = "test img";
    // $description_text = "cabriolet cabriolet cabriolet descr";  
    // $color_id = "1";  
    // $model_id="2"; 
    // $series = "";


    $car = new car($id, $price, $img_url, $description_text, $color_id, $model_id, $series);
   $inserted= $car->insertCarToApi();

    if($inserted){
        // echo "<script>alert('The car has been added to the DB.') </script>";  
        var_dump($inserted); 
    }
    else{
        echo "wrong!";
    }
     

    // insert new car.
    // $newCar = new car("0", "666", "test OOP url", "test OOP description", "2", "2", "");
    // // // uncomment it to insert new car.
    // $result = $newCar->insertCarToApi();
    // echo $result;
    // echo "<br><br>";
    


    // }


 