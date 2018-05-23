<?php

try{
    $json_productName = file_get_contents("php://input");
    $assArr = json_decode($json_productName, true);
    $product_name = $assArr['productName'];

    $dataConn = new PDO('mysql:host=localhost;dbname=mydb;', 'root', '');
    $sql = "SELECT `name`, `make`, `description`, `price per unit`, `img_url` FROM `product` WHERE `name` = :productName"; 
    $sta = $dataConn -> prepare($sql);
    $sta -> execute([":productName" => $product_name]);

    $assArrOfResults = $sta -> fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($assArrOfResults[0]); 
    // var_dump($assArrOfResults);
    echo $json;
}catch(PDOException $e){
    echo "ERROR: Fail to send data.";
}


?>