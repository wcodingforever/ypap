<?php
try{
    $dataConn = new PDO('mysql:host=localhost;dbname=mydb;', 'root', '');
    $sql = "SELECT `name`, `qt`
                    FROM `product`
                    LEFT JOIN `order_items`
                        ON `product`.`id` = `order_items`.`product_id`
                    ORDER BY `qt`;";
    $sta = $dataConn -> prepare($sql);
    $sta -> execute();

    $assArrOfResults = $sta -> fetchAll(PDO::FETCH_ASSOC);
    // var_dump( $assArrOfResults);
    $json = json_encode($assArrOfResults); 
    // var_dump($assArrOfResults);
    echo $json;
}catch(PDOException $e){
    echo "ERROR: Fail to send data.";
}

?>