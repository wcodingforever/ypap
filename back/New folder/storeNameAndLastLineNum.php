<?php

$json_nameAndLastLineNum = file_get_contents("php://input"); 
$asArr_nameAndLastLineNum = json_decode($json_nameAndLastLineNum, true);
$name = $asArr_nameAndLastLineNum['name'];
$lastLineNum = $asArr_nameAndLastLineNum['lastLineNum'];

if(isset($asArr_nameAndLastLineNum['name']) && isset($asArr_nameAndLastLineNum['lastLineNum'])){

    $json_nameAndLastLineNumDatas = file_get_contents("nameAndLastLineNum.json");
    $asArr_nameAndLastLineNumDatas = json_decode($json_nameAndLastLineNumDatas);
    $asArr_nameAndLastLineNumDatas[$name] = $lastLineNum;

    $new_json_nameAndLastLineNumDatas = json_encode($asArr_nameAndLastLineNumDatas);
    file_put_contents("nameAndLastLineNum.json");

}
else{
    $tz = "Asia/Seoul";
    $timestamp = time();
    $t = new DateTime("now", new DateTimeZone ($tz));
    $t -> setTimestamp($timestamp);
    $t = $t -> format("h:i:sa T");
    $error_msg = "ERROR: failed to store an user name and the line number of the line which the user read last." . $t. PHP_EOL;        
    file_put_contents("ERROR_MSGs.txt", $error_msg, FILE_APPEND);
}
?>
