<?php
include 'lang.php';
if (ISSET($_REQUEST['lang'])) {
    $myLang = $_REQUEST['lang'];
 }
 else{
    $myLang = 'en';
 }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Our Dogs</title>
    <style>
@media screen and (min-width: 481px) { 
    .body {
        display: flex; 
        align-items: center;
        margin: 0px;
    }
    .dogPicture {
        height: 45vh;
        width: 20vw;
        text-align:center;
        border: #cccccc solid 2px;
        padding: 10px;
        min-width: 90%;
        }
    .dogProfile {
        display:flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        margin-top: 10%;
    }
    .dogProfDiv {
        padding-left: 1%;
        padding-right: 2%;
        height: 80vh;
    }
    .myModal {
        display: none;
        position: fixed;
        z-index: 0;
        padding-top: 10px;
        text-align: center;
        margin-left: 20%;
        left: 0;
        margin-top: 5%;
        top: 0;
        width: 53%;
        height: 87%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(192, 192, 192, 0.966);
    }
    .modalDogPicture {
        height: 45vh;
        width: 20vw;
        text-align: center;
        border: #cccccc solid 2px;
        padding: 10px;
        min-width: 65%;
    }
    .dogName {
        text-align: left;
        color: #00337f;
        font-family: Lato,sans-serif;
        font-size: 240%;
        font-weight: bold;
    }
    .dogNameModal {
        text-align: left;
        margin-left: 30%;
        color: #00337f;
        font-family: Lato,sans-serif;
        font-size: 240%;
        font-weight: bold;
    }
    .dogInfo {
        margin-left: 0%;
        padding-top: 2%;
        text-align: left;
        font-family: Lato,sans-serif;
    }
    .dogInfoOne {
        margin-left: 6%;
        margin-right: 1%;
        padding-top: 2%;
        text-align: left;
        font-family: Lato,sans-serif;
        display: block;
    } 
    .dogInfoTwo {
        margin-left: 6%;
        text-align: left;
        font-family: Lato,sans-serif;
        display: block;
    }
    .notesDiv {
        text-align: left;
        padding-top: 2%;
        margin-left: 6%;
    }
    .infoButton {
        margin-top: 3%;
        margin-bottom: 10%;
        color: white;
        background-color: #7ea83f;
        width: 90%;
        height: 9vh;
        font-size: 150%;
        font-family: Lato,sans-serif;
        margin-bottom: 20%;
    }
    .adoptButton {
        margin-top: -5.5%;
        float: right;
        margin-right: 29%;
        height: 7%;
        width: 22%;
        font-size: 175%;
        font-weight: bold;
        border-radius: 5%;
        background-color: #7ea83f;
        color: white;
        border-color: #7ea83f;
        border-radius: 3%;
    } 
    .close {
        color: #000000;
        float: right;
        font-size: 28px;
        font-weight: bold;
        margin-right: 3%;
        font-size: 45px;
    }
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    /* Default */
    .desktopLayout{
        display: block;
    }
    .mobileLayout {
        display: none;
    }   
}
/* Phone portrait */
@media only screen and (max-width: 481px){
    .body {
        display: flex;
        text-align: center;
        align-items: center;
        margin: 0px;
        width: 85vw;
    }
    .mobileLayout{
        display: block;
    }
    .desktopLayout{
        display: none;
    }
    .dogProfile {
        margin-right: 5%;
        margin-top: 30%;
        text-align: center;
        height: 65vh;
        width: 95vw;
    }
    .dogProfDiv {
        margin-right: 5%;
        margin-top: 30%;
        text-align: center;
        height: 65vh;
        width: 95vw;
    }
    .dogPicture {
        width: 100vw;
        text-align:center;
    }
    .dogPictureDiv {
        overflow:hidden;
    }
    .dogName {
        text-align: left;
        margin-left: 2%;
        color: #00337f;
        font-family: Lato,sans-serif;
        font-size: 160%;
        font-weight: bold;
    }
    .dogNameModal {
        text-align: left;
        margin-left: 30%;
        color: #00337f;
        font-family: Lato,sans-serif;
        font-size: 240%;
        font-weight: bold;
    }
    .dogInfo {
        margin-left: 2%;
        padding-top: 2%;
        text-align: left;
        font-family: Lato,sans-serif;
        font-size: 106%;
    }
    .dogInfoOne {
        margin-left: 4%;
        margin-right: 8%;
        padding-top: 2%;
        text-align: left;
        font-family: Lato,sans-serif;
        display: inline-block;
    }
    .dogInfoTwo {
        padding-top: 2%;
        text-align: left;
        font-family: Lato,sans-serif;
        display:inline-block;
    }
    .notesDiv {
        text-align: left;
        margin-left: 4%;
    }
    .infoButton {
        margin-top: 3%;
        margin-bottom: 10%;
        color: white;
        background-color: #7ea83f;
        width: 99%;
        height: 9vh;
        font-size: 108%;
        font-family: Lato,sans-serif;
        margin-bottom: 20%;
    }
    .popupInfoDiv {
        display: flex;
    }
    /* .additionalInfo {
        background:rgba(128, 128, 128, 0.856);
    } */
    .myModal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 0; /* Sit on top */
        padding-bottom: 23%; /* Location of the box */
        left: 0;
        top: 0;
        width: 100vw; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(192, 192, 192, 0.966); /* Black w/ opacity */
        max-height: calc(100vh - 80px);
        overflow-y: auto;
    }
    .modalDogPicture {
        width: 100vw;
        text-align:center;
    }
    /* The Close Button */
    .close {
        color: #000000;
        float: right;
        font-size: 28px;
        font-weight: bold;
        margin-right: 2%;
        font-size: 45px;
        display:block;
    }
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    .adoptButton {
        margin-top: -10%;
        float: right;
        margin-right: 6%;
        height: 5%;
        width: 32%;
        font-size: 110%;
        font-weight: bold;
        border-radius: 5%;
        background-color: #7ea83f;
        color: white;
        border-color: #7ea83f;
    }
}
</style>
</head>
<body>
    <?php include 'navbar.php';?>
    <div class = "dogProfile">
    
    </div>
    <script>
        // function loadInfo() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    var response = xhttp.responseText;
                    response = JSON.parse(response);   
                    console.log(response); 
                
                    for (var i=0; i<response.length; i++) {
                        var dogProfile = document.querySelector(".dogProfile");
                        dogProfile.innerHTML += "<div class = 'dogProfDiv'>" +
                        "<div class = 'dogPictureDiv'>" +           
                            "<img class = 'dogPicture' src='" + response[i].picture + "'>" +
                        "</div>" + 
                        "<div class = 'dogName'>" + response[i].name + "</div>" +
                        "<div class = 'dogInfo'>" +
                                "<div><?php echo $lang[$myLang]['gender'];?>:" + response[i].gender + "</div>" +
                                "<div><?php echo $lang[$myLang]['breed'];?>:" + response[i].breed + "</div>" +
                                "<div><?php echo $lang[$myLang]['age'];?>:" + response[i].age + "</div>" +
                                "<button class = 'infoButton'><?php echo $lang[$myLang]['learnmore'];?></button><br>" +

                                "<div class='myModal'>"+
                                        "<span class='close'>&times;</span>" +
                                        "<div>" +
                                            "<img class = 'modalDogPicture' src='" + response[i].picture + "'>" +
                                        "</div>" +
                                        "<div class = 'dogNameModal'>"  + response[i].name + "</div>" +
                                        "<form action='adoption.php?name=" + response[i].name + "&" + "id=" + response[i].id + "'>" +
                                            "<input class = 'adoptButton' type='submit' value='<?php echo $lang[$myLang]['adopt'];?>' />" +
                                        "</form>" +
                                    "<div class='popupInfoDiv'>" +
                                        "<div class = 'dogInfoOne'>" +
                                            "<div><?php echo $lang[$myLang]['gender'];?>:" + response[i].gender + "</div><br>" +
                                            "<div><?php echo $lang[$myLang]['breed'];?>:" + response[i].breed + "</div><br>" +
                                            "<div><?php echo $lang[$myLang]['age'];?>:" + response[i].age + "</div><br>" + 
                                            "<div><?php echo $lang[$myLang]['weight'];?>:" + response[i].weight + "</div><br>" +
                                        "</div>" +
                                        "<div class = 'dogInfoTwo'>" +
                                            "<div><?php echo $lang[$myLang]['arrivaldate'];?>:" + response[i].arrivaldate + "</div><br>" +
                                            "<div>ID:" + response[i].id + "</div><br>" +
                                            "<div><?php echo $lang[$myLang]['spayed'];?>:" + response[i].spayed + "</div>" +
                                        "</div>" +
                                    "</div>" +
                                    "<div class='notesDiv'><?php echo $lang[$myLang]['notes'];?>: " + response[i].notes + "</div>" +
                                "</div>" + 
                            "</div>";
                    };
                    var infoButtonArr = document.querySelectorAll(".infoButton");
                    for (var i = 0; i<infoButtonArr.length; i++) {
                        infoButtonArr[i].addEventListener("click", infoButtonSelect);
                    }
                    function infoButtonSelect() {
                    var currentModal = this.parentElement.querySelector(".myModal");
                    currentModal.style.display = "block";
                    }
                    
                    $(".close").on("click", function(e) {
                        var className = e.target.className;
                        if (className === "close") {
                        $(this).closest(".myModal").hide();
                        }
                    });
                    
                    var adoptButton = document.querySelector(".adoptButton");
                    adoptButton.addEventListener('click', function() {
                            // NEED TO GET PROPER HTML ADDRESS//
                        window.location.replace("adoptionform.html");
                    });
                        // adoptButton.onclick = function() {
                        //     // NEED TO GET PROPER HTML ADDRESS//
                        // window.location.replace("adoptionform.html");
                        // };
                    }
                };
            var currentLang = <?php $myLang ?>;
            xhttp.open("POST", "getdogprofile.php");
                var messageObj = {
                    whattoget: "all",
                    lang: currentLang 
                }
            var forSend = JSON.stringify(messageObj);
            xhttp.send(forSend);  
    </script>
</body>
</html>
