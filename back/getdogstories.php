<?php
    $receiveMsg = file_get_contents("php://input");
    $receive = json_decode($receiveMsg);
    ////////////////////////////////////////////// Server conf
    $servername = 'localhost';
	$username = 'root';
	$password = '';
    $dbname = 'dogadoptions';

    //////////////////////////////////////////////
    if($receive->initialrequest !== ""){
        if ($receive->initialrequest === "yes") {
            try{
                $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $stmt = $connection->prepare("
                    SELECT `id`, `content`, `picture`
                    FROM `story`
                    ORDER BY `uploaddate` DESC LIMIT 5;
                    ");

                // SELECT stories.id, `content`, `picture`
                // FROM `stories` 
                // INNER JOIN `mappingmultiple` ON stories.id = mappingmultiple.storyid;

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
        elseif ($receive->initialrequest > 0){
            try{
                $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $stmt = $connection->prepare("
                    SELECT `id`, `content`, `picture`, `uploaddate`
                    FROM `story`
                    ORDER BY `uploaddate` DESC LIMIT :downfrom, :downto;
                    ");
                ////////////////////////////////////////// Bind Params
                $downdrombind = $receive->initialrequest;
                $downtobind = $downdrombind + 5;

                $stmt->bindParam(':downfrom', $downdrombind);
                $stmt->bindParam(':downto', $downtobind);
                //////////////////////////////////////////
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
    }
    
?>