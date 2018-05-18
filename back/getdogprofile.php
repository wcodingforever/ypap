<?php
    $receiveMsg = file_get_contents("php://input");
    $receive = json_decode($receiveMsg);
    ////////////////////////////////////////////// Server conf
    $servername = 'localhost';
	$username = 'root';
	$password = '';
    $dbname = 'dogadoptions';
    //////////////////////////////////////////////
    if ($receive->whattoget === "sample") {
        try{
			$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$stmt = $connection->prepare("
                SELECT `id`, `picture`, `name` 
                FROM `dogs` 
                WHERE `status` = 1
                ORDER BY `arrivaldate` DESC LIMIT 15;
                ");

            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $result = json_encode($result);
            echo($result);

            $connection = null;
            $stmt = null;
        }
        catch(PDOException $e) {
        }
    }
    elseif ($receive->whattoget === "all") {
        try{
			$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$stmt = $connection->prepare("
                SELECT `id`, `name`, `gender`, `age`, `spayed`, `weight`, `breed`, `arrivaldate`, `notes`, `picture`
                FROM `dogs`
                WHERE `status` = 1
                ORDER BY `arrivaldate`;
                ");

            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $result = json_encode($result);
            echo($result);

            $connection = null;
            $stmt = null;
        }
        catch(PDOException $e) {
        }
    }
?>