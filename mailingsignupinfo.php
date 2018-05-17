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
            INSERT INTO `mailinglist`
                (`name`, `email`)
            VALUES
                (:nameofsubscriber, :emailofsubscriber);
            ");
        ////////////////////////////////////////// Bind Params
        $whosubscribed = $receive->whosubscribed;
        $emailwhosubscribed = $receive->emailwhosubscribed;
        
        $stmt->bindParam(':nameofsubscriber', $whosubscribed);
        $stmt->bindParam(':emailofsubscriber', $emailwhosubscribed);
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