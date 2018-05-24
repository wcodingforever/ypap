<?php
    $receiveMsg = file_get_contents("php://input");
    $receive = json_decode($receiveMsg);
    ////////////////////////////////////////////// Server conf
    $servername = 'localhost';
	$username = 'root';
	$password = '';
    $dbname = 'dogadoptions';
    $reponse = "OK";

    $hero = $receive->namewhodonated;
    $heroemail = $receive->emailwhodonated;
    $howmuchhero = $receive->howmuhdonated;
    $currency = $receive->currency;
    //////////////////////////////////////////////
    if($hero !== "" || $heroemail !== "" || $howmuchhero !== "" ||  $currency !== ""){
        try{
            $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $stmt = $connection->prepare("
                INSERT INTO `donation`
                    (`name`, `email`, `donatetime`, `amount`, `currency`)
                VALUES
                    (:NameWhodonated, :emailWhoDonated, now(), :HowMuchDonated, :cur);
                ");
            ////////////////////////////////////////// Bind Params

            $stmt->bindParam(':NameWhodonated', $hero);
            $stmt->bindParam(':emailWhoDonated', $heroemail);
            $stmt->bindParam(':HowMuchDonated', $howmuchhero);
            $stmt->bindParam(':cur', $currency);
            //////////////////////////////////////////

            $stmt->execute();
            // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // $result = json_encode($result);
            // echo($result);

            $connection = null;
            $stmt = null;
        }
        catch(PDOException $e) {
            $reponse = "ERROR";
        }
    }else{
        $reponse = "ERROR";
    }
    
    echo $reponse;

    
?>