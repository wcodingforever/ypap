<?php
try{

    $dataConn = new PDO('mysql:host=localhost;dbname=mydb;', 'root', '');
    $sql = "SELECT `name`, `qt` FROM `order_items`
                LEFT JOIN `product`
                    ON `order_items`.`product_id` = `product`.`id`
                ORDER BY `qt` DESC LIMIT 3;";

    $statement = $dataConn-> prepare($sql);

    $statement -> execute();
    $arrOfResults = $statement->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($arrOfResults);

    $json = json_encode($arrOfResults);
    echo $json;

    $statement = NULL;
    $dataConn = NULL;

}catch(PDOException $e){

}

?>