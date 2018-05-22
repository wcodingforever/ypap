<?php

$json = file_get_contents("php://input");
$obj = json_decode($json, true);
$response = "OK";

$name = $obj["name"];
$phone = $obj["phone"];
$email = $obj["email"];
$workType1 = $obj["workType1"];
$workType2 = $obj["workType2"];
$availability = $obj["availability"];

if(( $name !== "")&& ( $phone !== "") && ( $email !== "" )){
    try{

        $servername = 'localhost';
        $dbname = 'myDB';
        $username = 'root';
        $pw = '';

        $dataCon = new PDO('mysql:host='.  $servername. ';dbname=' .$dbname. ';', $username, $pw);

        $sql = "INSERT INTO `volunteers` (`name`, `phone`, `email`, `workType1`, `workType2`, `availability`) 
                    VALUES ( :name , :phone, :email , :workType1, :workType2, :availability);";

        $sta = $dataCon -> prepare($sql);
        $sta -> bindParam(':name', $name);
        $sta -> bindParam(':phone', $phone);
        $sta -> bindParam(':email', $email);
        
        function returnProperPARAM($var){
            if($var === ""){
                $param = PDO::PARAM_NULL; 
            }else{
                $param = PDO::PARAM_STR;
            }
            return $param;
        }

        $param1 = returnProperPARAM($workType1);
        $param2 = returnProperPARAM($workType2);
        $param3 = returnProperPARAM($availability); 
        
        $sta -> bindParam(':workType1', $workType1, $param1);
        $sta -> bindParam(':workType2', $workType2, $param2);
        $sta -> bindParam(':availability', $availability, $param3);
        
        $sta -> execute();
        $dataCon = null;
        $sta = null;

    }catch(PDOException $e){
        $response = "ERORR";
    }
}else{
    $response = "ERORR";
}

echo $response;

?>