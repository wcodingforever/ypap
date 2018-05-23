<?php
if(isset($_REQUEST['name'])){
    if($_REQUEST['name']===""){
        $name_file = fopen("userNames.txt", 'r');
        $name = fread($name_file, filesize("userNames.txt"));
        // $name = $_REQUEST["name"];
        fclose($name_file);
    
    }
    else{
        $name = $_REQUEST["name"];    
        $name_file = fopen("userNames.txt", 'w');
        // echo $name;
        fwrite($name_file, $name);
        fclose($name_file);
    }
}

if(isset($_REQUEST['msg'])){
    $newMsg = $_REQUEST["msg"] . "\n" ;
    $msg_file = fopen("msgs.txt", 'a');
    fwrite($msg_file, $newMsg);
    // fclose($msg_file);
    // $msg_file = fopen("msgs.txt", 'r');
    $msgContents = file_get_contents("msgs.txt");
    $msgsArr = explode("\n", $msgContents);
    fclose($msg_file);

    // echo "New msg: ". $newMsg;
    // echo "\n" . "All msgs:" .$msgContents;

}
// if($_REQUEST['reset'] === true){

//     $msg_file = fopen("msgs.txt", 'w');
//     fwrite($msg_file, "");
//     fclose($msg_file);
//     echo "RESET";
    
// }
// echo "Value is 'true'? Value:" . $_REQUEST['reset'];
if(isset($_REQUEST['reset'])){

    $msg_file = fopen("msgs.txt", 'w');
    fwrite($msg_file, "");
    fclose($msg_file);
    echo "RESET";
    echo "Value is 'true'? Value:" . $_REQUEST['reset'];
    
} 

?>
<!DOCTYPE>
<html>
<head>
    <style>
    body{
        padding:0px;
        margin: 0px;
        background: black;
    }
    #backgroundIMG{
        width: 100%;
        opacity: 0.3;
        z-index: -1;
    }
    #formContainer{
        position: absolute;
        top: 50px;
        left: 400px;
    }
    #msgBox{
        background: #ffffff2b;
        overflow-y: scroll;
        margin: 6px 0px 6px;
        width: 450px;
        height: 440px;
    }
    #msgInput{
        width: 445px;
        height: 62px;
    }
    #logIn_Container{
        background: black;
        color: white;
        padding: 20px;
        font-size: 14px;
        padding: 15px 17px 20px 17px;
        width: 417px;
    }
    #logIn_icon{
        display: inline-block;
        background: #0460af;
        color: black;
        width: 75px;
        text-align: center;
        height: 27px;
        font-size: 18px;
        position: absolute;
        top: 14px;
        left: 357px;
        cursor: pointer;
    }
    #name{
        height: 16px;
        margin: 0 5px 0 5px;
    }
    #logIn_letters{
        color: white;
        font-size: 13px;
        margin-right: 7px;
        position: relative;
        top: -2px;
    }
    #sendButton{
        width: 50px;
        height: 33px;
        background: #0460af;
        color: white;
        border-radius: 7px;
        border: 1px solid;
        position: absolute;
        top: 517px;
        left: 368px;
        padding: 10px 3px 2px 16px;
        cursor: pointer;
    }
    </style>
</head>
<body>


</body>
</html>