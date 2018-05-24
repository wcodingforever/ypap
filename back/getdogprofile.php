<?php
    include 'databaseDictionary.php';

    $receiveMsg = file_get_contents("php://input");
    $receive = json_decode($receiveMsg);
    $myLang = $receive->lang;
    ////////////////////////////////////////////// Server conf
    $servername = 'localhost';
	$username = 'root';
    $password = '';
    $dbname = 'dogadoptions';
    // $servername = '192.168.1.112';
    // $username = 'alex';
    // $password = 'deleteme';
    // $dbname = 'dogadoptions';
    if($receive->whattoget !== "" ){
	    $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
        //////////////////////////////////////////////
        if ($receive->whattoget === "sample") {
            try{
	    		$stmt = $connection->prepare("
                    SELECT `id`, `picture`, `name` 
                    FROM `dog` 
                    WHERE `status` = 1
                    ORDER BY `arrivaldate` DESC LIMIT 10;
                    ");

                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                $result = json_encode($result);

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
                    FROM `dog`
                    WHERE `status` = 1
                    ORDER BY `arrivaldate`;
                    ");

                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                for ($i=0; $i < count($result); $i++) { 
                    $breeds = explode(" ", $result[$i]["breed"]);
                    $translate = [];
                    for ($j=0; $j < count($breeds); $j++) { 
                        array_push($translate, $dic[$myLang]["breed"][$breeds[$j]]);
                    }
                    $translate = implode(" ", $translate);

                    if (ISSET($result[$i]["spayed"])) {
                        $spayedTrans = $dic[$myLang]["spayed"][$result[$i]["spayed"]];
                    }
                    else{
                        $spayedTrans = "Unknown";
                    }
                

                    $return[$i] = [
                        "id"          => $result[$i]["id"],
                        "name"        => $result[$i]["name"],
                        "gender"      => $dic[$myLang]["gender"][$result[$i]["gender"]],
                        "age"         => $result[$i]["age"],
                        "spayed"      => $spayedTrans,
                        "weight"      => $result[$i]["weight"],
                        "breed"       => $translate,
                        "arrivaldate" => $result[$i]["arrivaldate"],
                        "notes"       => $result[$i]["notes"],
                        "picture"     => $result[$i]["picture"]
                    ];
                };

                $resultStr = json_encode($return
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
            }
        }
    }

?>