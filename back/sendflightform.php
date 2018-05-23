<?php
    $receiveMsg = file_get_contents("php://input");
    $receive = json_decode($receiveMsg);
    ////////////////////////////////////////////// Server conf
    $servername = 'localhost';
	$username = 'root';
	$password = '';
    $dbname = 'dogadoptions';
    //////////////////////////////////////////////
    $nameofthebuddybind = $receive->nameofthebuddy;
    $emailofthebuddybind = $receive->emailofthebuddy;
    $phoneofthebuddybind = $receive->phoneofthebuddy;
    $flightdateofthebuddybind = $receive->flightdateofthebuddy;
    $destinationofthebuddybind = $receive->destinationofthebuddy;

    $response = "OK";

    if($nameofthebuddybind !== "" ||$emailofthebuddybind !== "" || $phoneofthebuddybind !== "" || $flightdateofthebuddybind !== "" ||
    $destinationofthebuddybind !== ""){
        try{
            $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $stmt = $connection->prepare("
                INSERT INTO `flightbuddy`
                    (`name`, `email`, `phone`, `flightdate`, `destination`)
                VALUES
                    (:nameofthebuddy, :emailofthebuddy, :phoneofthebuddy, :flightdateofthebuddy, :destinationofthebuddy);
                ");
            ////////////////////////////////////////// Bind Params


            $stmt->bindParam(':nameofthebuddy', $nameofthebuddybind);
            $stmt->bindParam(':emailofthebuddy', $emailofthebuddybind);
            $stmt->bindParam(':phoneofthebuddy', $phoneofthebuddybind);
            $stmt->bindParam(':flightdateofthebuddy', $flightdateofthebuddybind);
            $stmt->bindParam(':destinationofthebuddy', $destinationofthebuddybind);
            //////////////////////////////////////////
            $stmt->execute();
            // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // $result = json_encode($result);
            // echo($result);
            $connection = null;
            $stmt = null;
        }
        catch(PDOException $e) {
            $response = "ERROR";
        }
    }else{
        $response = "ERROR";
    }
    echo $response;

?>