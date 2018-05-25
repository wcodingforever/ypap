<?php
$json = file_get_contents("php://input");
$obj = json_decode($json);
$response = "OK";

$name = $obj->Name;
$phone = $obj->PhoneNumber;
$email = $obj->Email;
$address = $obj->Address;
$startDate = $obj->StartDate;
$endDate = $obj->EndDate;
$otherInfo = $obj->OtherInfo;

if($name !== "" || $phone !== "" || $email !== "" || $address !== "" || $startDate !== "" || $endDate !== ""){
    try{
        $servername = "localhost";
        $dbname = "dogadoptions";
        $username = "root";
        $pw = "";


        $dataCon = new PDO("mysql:host=". $servername. ";dbname=". $dbname. ";", $username, $pw);
        $sql = "INSERT INTO `fosterform` 
                    (`name`, `phone`, `email`, `address`, `startDate`, `endDate`, `otherInfo`) 
                VALUES 
                    ( :name, :phone, :email, :address, :startDate, :endDate, :otherInfo);";

        $sta =  $dataCon -> prepare($sql);
        $sta -> bindParam(":name", $name);
        $sta -> bindParam(":phone", $phone);
        $sta -> bindParam(":email", $email);
        $sta -> bindParam(":address", $address);
        $sta -> bindParam(":startDate", $startDate);
        $sta -> bindParam(":endDate", $endDate);
        $sta -> bindParam(":otherInfo", $otherInfo);

        $sta -> execute();

        $dataCon = null;
        $sta = null;

    }catch(PDOException $e){
        $response = "ERROR";
    }
}else{
    $response = "ERROR";
}

echo $response;


?>

