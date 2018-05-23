<?php

$json_name = file_get_contents('php://input');
$asArr_name = json_decode($json_name, true);
$userName = $asArr_name['name'];

if($userName !== ""){

    //Figuring out if it's the first log-in of this user!
    //{ "name" : "lastLineNum" }
    $json_lastLogOutData = file_get_contents("nameAndLastLineNum.json");
    $json_lastLogOutData = trim($json_lastLogOutData);
    $asArr_lastLogOutData = json_decode($json_lastLogOutData, true); 
    
    //Get all last msgs from the msgs.json
    $json_msgs = file_get_contents("msgs.json");
    $asArr_msgs = json_decode($json_msgs, true);

    // $lastLineNum = "0";
    if(isset($asArr_lastLogOutData[$userName])){
        $lastLineNum = "";
        $lastLineNum = $asArr_lastLogOutData[$userName];
    
//         /*Send the json data of all msgs plus the information on by where the user read. 
//           by adding '@' to the array for the data of the msg 
//             [
//                 {"name":"Yeni", 
//                  "msg":"Hello", 
//                  "time":"12:30:40am",
//                  "lastLine": "Y"
//                 },
//                 {"name":"Paul", 
//                 "msg":"Hi", 
//                 "time":"12:30:41am"}
//                     ...
//             ]
//                 */
        foreach($asArr_msgs as $lineNum => $data){
            if($lineNum == $lastLineNum){
                $asArr_msgs[$lineNum]["lastLine"] =  "Y";
                echo "line num: ".$lineNum;
                // echo "AFTER + @" . $asArr_msgs[$lineNum][2]. $asArr_msgs[$lineNum][3] ;
            }
            break;
        }

        // print_r($asArr_msgs);
        $new_json_msgs = json_encode($asArr_msgs);

        // echo $new_json_msgs;
        // echo "THe last line of the this user was stored.";
    }
    else {
        echo $json_msgs;
        // echo "THe last line of the this user was not stored.";
    }        // print_r($lastLogOutDataArr);
}
else{
    $tz = "Asia/Seoul";
    $timestamp = time();
    $dt = new DateTime("now", new DateTimeZone ($tz));
    $dt -> setTimestamp($timestamp);
    $dtStr = $dt -> format("h:i:sa T");

    $error_msg = "ERROR: failed to get msgs. " .  $dtStr . PHP_EOL;        
    file_put_contents("ERROR_MSGs.txt", $error_msg, FILE_APPEND);
}




?>