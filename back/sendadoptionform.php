<?php
    $receiveMsg = file_get_contents("php://input");
    $receive = json_decode($receiveMsg);
    ////////////////////////////////////////////// Server conf
    $servername = 'localhost';
	$username = 'root';
	$password = '';
    $dbname = 'dogadoptions';
    //////////////////////////////////////////////
    try{
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $stmt = $connection->prepare("
            INSERT INTO `adoption`
                (`dogid`, `name`, `email`, `phone`, `address`, `zip`, `submitdate`)
            VALUES
                (:dogtoadopt, :nameoftheadopter, :emailoftheadopter, :phoneoftheadopter, :addressoftheadopter, :zipcodeoftheadopter, now());
            ");
        ////////////////////////////////////////// Bind Params
        $dogtoadoptbind = $receive->dogtoadopt;
        $nameoftheadopterbind = $receive->nameoftheadopter;
        $emailoftheadopterbind = $receive->emailoftheadopter;
        $phoneoftheadopterbind = $receive->phoneoftheadopter;
        $addressoftheadopterbind = $receive->addressoftheadopter;
        $zipcodeoftheadopterbind = $receive->zipcodeoftheadopter;
        
        $stmt->bindParam(':dogtoadopt', $dogtoadoptbind);
        $stmt->bindParam(':nameoftheadopter', $nameoftheadopterbind);
        $stmt->bindParam(':emailoftheadopter', $emailoftheadopterbind);
        $stmt->bindParam(':phoneoftheadopter', $phoneoftheadopterbind);
        $stmt->bindParam(':addressoftheadopter', $addressoftheadopterbind);
        $stmt->bindParam(':zipcodeoftheadopter', $zipcodeoftheadopterbind);
        //////////////////////////////////////////

        $stmt->execute();
        // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // $result = json_encode($result);
        // echo($result);

        $connection = null;
        $stmt = null;
    }
    catch(PDOException $e) {
    }
    
?>