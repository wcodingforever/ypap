<?php

    $json_nameAndnewMsg = file_get_contents("php://input");
    $asArr_nameAndnewMsg = json_decode($json_nameAndnewMsg, true);
    $name = $asArr_nameAndnewMsg['name'];
    $newMsg = $asArr_nameAndnewMsg['newMsg'];

if($name !== "" || $newMsg !==""){

    $tz = "Asia/Seoul";
    $timestamp = time();
    $t = new DateTime("now", new DateTimeZone ($tz));
    $t -> setTimestamp($timestamp);
    $t = $t -> format("Y-M-D h:i:s");

        // {"name":"Paul", 
        //  "msg":"Hi", 
        //  "time":"12:30:41am"}
    $asArr_newMsg = [
        name=> $name,
        msg=> $newMsg,
        time=> $t
    ];


    /*Write this new Msg to the msgs.json!
    create an assciate array => encode it to a json data.*/
    
    $json_msgs = file_get_contents("msgs.json");
    $arr_msgs = json_decode($json_msgs, true);
    // echo($json_msgs);
    array_push($arr_msgs, $asArr_newMsg);
    $json_allMsgs = json_encode($arr_msgs);
    echo("MSG:" .  $json_allMsgs);
    file_put_contents("msgs.json", $json_allMsgs);

}else{
    $tz = "Asia/Seoul";
    $timestamp = time();
    $t = new DateTime("now", new DateTimeZone ($tz));
    $t -> setTimestamp($timestamp);
    $t = $t -> format("h:i:sa T");

    $error_msg = "ERROR: Failed to write a new msg. " . $t. PHP_EOL;
    file_put_contents("ERROR_MSGs.txt", $error_msg, FILE_APPEND);
}





?>