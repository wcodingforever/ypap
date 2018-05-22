<?php
    $receiveMsg = file_get_contents("php://input");
    $receive = json_decode($receiveMsg);
    ////////////////////////////////////////////// Server conf
    $servername = 'localhost';
	$username = 'root';
    $password = '';
    $dbname = 'dogadoptions';
    // $servername = '192.168.1.112';
    // $username = 'alex';
    // $password = 'deleteme';
    // $dbname = 'dogadoptions';
	$connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    //////////////////////////////////////////////
    if ($receive->whattoget === "sample") {
        try{
			$stmt = $connection->prepare("
                SELECT `id`, `picture`, `name` 
                FROM `dogs` 
                WHERE `status` = 1
                ORDER BY `arrivaldate` DESC LIMIT 10;
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
			$stmt = $connection->prepare("
                SELECT `id`, `name`, `gender`, `age`, `spayed`, `weight`, `breed`, `arrivaldate`, `notes`, `picture`
                FROM `dogs`
                WHERE `status` = 1
                ORDER BY `arrivaldate`;
                ");

            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $resultStr = json_encode($result
                // Need these options to get around odd characters in the data. (latin1 vs utf8)
                // , JSON_PARTIAL_OUTPUT_ON_ERROR
            );

            if ($resultStr === FALSE) {
                switch (json_last_error()) {
                    case JSON_ERROR_NONE:
                        echo ' - No errors';
                    break;
                    case JSON_ERROR_DEPTH:
                        echo ' - Maximum stack depth exceeded';
                    break;
                    case JSON_ERROR_STATE_MISMATCH:
                        echo ' - Underflow or the modes mismatch';
                    break;
                    case JSON_ERROR_CTRL_CHAR:
                        echo ' - Unexpected control character found';
                    break;
                    case JSON_ERROR_SYNTAX:
                        echo ' - Syntax error, malformed JSON';
                    break;
                    case JSON_ERROR_UTF8:
                        echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
                    break;
                    default:
                        echo ' - Unknown error';
                    break;
                }
            }
            else echo($resultStr);

            $connection = null;
            $stmt = null;
        }
        catch(PDOException $e) {
            echo($e);
        }
    }
    else echo ("CAN'T READ INPUT!");
?>