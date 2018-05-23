<?php
// **HTML**
// var fosterFormInfo = {
//                 Name: applicantName.value,
//                 PhoneNumber: phoneNumber.value,
//                 Email: emailAddress.value,
//                 Address: homeAddress.value,
//                 StartDate: departureDate.value,
//                 EndDate: endDate.value,
//                 OtherInfo: otherInfo.value,
//             };
//             var fosterAjax = new XMLHttpRequest();
//             fosterAjax.onreadystatechange = function() {
//                 if (fosterAjax.readyState === 4 && fosterAjax.status === 200) {
//                     alert("Thank you. Your application has been submitted.");
//                 }
//             }
//             var outGoingFosterInfo = JSON.stringify(fosterFormInfo);
//             fosterAjax.open("POST", "sendflightform.php");
//             fosterAjax.send(outGoingFosterInfo);

// **DB**
// #Old ver.
// USE dogadoptions;

// CREATE TABLE `fosterform`(
// 	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     `pickupdate` DATETIME NOT NULL DEFAULT NOW(),   => Because the start date'll be forced to be entered, default is no need. 
//                                                        `pickupdate` => `startDate`
//     `dropoffdate` DATETIME NOT NULL,  => `dropoffdate` => `endDate`
//     `name` VARCHAR(64) NOT NULL,
//     `phone` VARCHAR(20) NOT NULL,         
//     `email` VARCHAR(255) NOT NULL,
//     `address` VARCHAR(128) NOT NULL,
//     `preferences` VARCHAR(128) NOT NULL   => Delete! `preferences` column is not needed!
//     `otherInfo VARCHAR(500) NULL   => Added! A new column for the other info input! 
// );

// *New ver. 
// USE dogadoptions;

// CREATE TABLE `fosterform`(
// 	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     `name` VARCHAR(64) NOT NULL,
//     `phone` VARCHAR(20) NOT NULL,         
//     `email` VARCHAR(255) NOT NULL,
//     `address` VARCHAR(128) NOT NULL,
//     `startDate` DATETIME NOT NULL,
//     `endDate` DATETIME NOT NULL,
//     `otherInfo` VARCHAR(500) NULL
// ); 

$json = file_get_contents("php://input");
echo $json. "<-json";
$obj = json_decode($json);
var_dump($obj);
$name = $obj->Name;
$Phone = $obj->PhoneNumber;
$email = $obj->Email;
$address = $obj->Address;
$startDate = $obj->StartDate; 
$endDate = $obj->EndDate;
$otherInfo = $obj->OtherInfo;

if($name !== "" || $phone !== "" || $email !== "" || $address !== "" || $startDate !== "" || $endDate !== ""){
    try{
        $servername = "localhost";
        $dbname = "myDB";
        $username = "root";
        $pw = "";


        $dataCon = new PDO("mysql:host=". $servername. ";dbname=". $dbname. ";", $username, $pw);
        $sql = "INSERT INTO `fosterform` (`name`, `phone`, `email`, `address`, `startDate`, `endDate`, `otherInfo`) VALUES ( :name, :phone, :email, :address, :startDate, :endDate, :otherInfo);";

        $sta =  $dataCon -> prepare($sql);
        $sta -> bindParam(":name", $name);
        $sta -> bindParam(":phone", $phone);
        $sta -> bindParam(":email", $email);
        $sta -> bindParam(":address", $address);
        $sta -> bindParam(":startDate", $startDate);
        $sta -> bindParam(":endDate", $endDate);

        if($var === ""){
            $param = PDO::PARAM_NULL; 
        }else{
            $param = PDO::PARAM_STR;
        }

        $sta -> bindParam(":otherInfo", $otherInfo, $param);

        $sta -> execute();

        $dataCon = null;
        $sta = null;

    }catch(PDOException $e){

    }
}



?>

