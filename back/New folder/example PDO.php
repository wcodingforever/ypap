<?php
try{
    $dataConn = new PDO('mysql:host=localhost;dbame=carrace; charset=utf8mb4', 'root', '');

    $statement = $dataConn-> prepare("SELECT `model`, `make`, `year` FROM `car` where `make` = :myMake;");

    //1) $statement->bindParam(":myMake", "kia");
    // $statement -> execute();

    //2) **Binding while executing!!****
    // $statement -> execute([":myMake"=> "kia"]);


    $statement = $dataConn-> prepare(
        "SELECT `model`, `make`, `year` 
        FROM `car` 
        where `make` = :myMake
            AND `model` = :myModel
            AND `wheels` >:myWheels
            ;");

    $statement-> execute();
    $arrOfResults = $statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($arrOfResults);

    $statement = NULL;
    $dataConn = NULL;

}catch(PDOException $e){

}






?>