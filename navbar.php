<?php
$import= file_get_contents('lang.php');
$myLang = $_REQUEST['lang'];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <style>
        /* * {outline: 1px solid red} */
        body {
            padding: 0px;
            margin: 0px;
            width: 100vw; 
            height: 100vh;
        }
        #navigationbar {
            height: 160px;
            width: 100%;
        }
        #logodiv{
            background-color: #1D4872;
            display: inline-flex;
            align-items: center;
            justify-content: space-around;
            width: 150px;
            height: 150px;
            border-radius: 100px;
            margin-left: 20px;
            margin-top: 10px;
        }
        #logostyle {
            height: 100px;
            width: 100px;
            border-radius: 20px;
        }
        #mobilemenubutton {
            display: none;
        }
        #menudiv {
            width: 100%;
            height: 50px;
            display: inline-flex;
            align-items: center;
            justify-content: space-around;
            font-size: 20px;
            display: block;
        }
        .menuoptions {
            width:110px;
            height: 100%;
            text-align: center;
            line-height: 45px;
            display: inline-flex;
            width: 150px;
            align-items: center;
            justify-content: center;
        }
        @media screen and (max-width: 481px) {
            #navigationbar {
                height: 85px;
                width: 100%;
                font-size: 1.5em;
                display: inline-flex;
                align-items: center;
                justify-content: space-between;
            }
            #logodiv {
                height: 80px;
                width: 80px;
                font-size: 1.5em;
                display: inline-flex;
                align-items: center;
                justify-content: space-around;
                background-color: #1D4872;
                border-radius: 40px;
                margin-left: 10px;
                margin-top: 5px;
            }
            #logostyle {
                width: 55px;
                height: 55px; 
                margin: auto;
            }
            #mobilemenubutton{
                font-size: 45px;
                margin-right: 10px;
                display: block;
                
            }
            #menudiv{
                font-size: 1.5em;
                margin: 30px;
                display: none;
            }
            .menuoptions {
                margin-bottom: 20px;
                border-bottom: 1px solid #1D4872;
                width: 300px;
            }
        }
    </style>
</head>
<body>
    <div id="navigationbar"><!--navigation mobile-->
        <div id="logodiv"><img id="logostyle" src="https://scontent.ficn1-1.fna.fbcdn.net/v/t1.0-1/p200x200/14183908_1770779633197617_2897900196827827557_n.jpg?_nc_cat=0&oh=c13c6f9ed243a5160d34fa95007d071e&oe=5B85E2A6"></div>
        <div id="mobilemenubutton"><i class="fas fa-bars"></i></div>
    </div>
    <div id="menudiv"><!--mobile menu options-->
        <div class="menuoptions"><div><?php echo $lang[$myLang]['navabout'];?>: + response[i].navabout + </div></div>
        <div class="menuoptions"><div><?php echo $lang[$myLang]['navflight'];?>: + response[i].navflight + </div></div>
        <div class="menuoptions"><div><?php echo $lang[$myLang]['navfoster'];?>: + response[i].navfoster + </div></div>
        <div class="menuoptions"><div><?php echo $lang[$myLang]['navvolunteer'];?>: + response[i].navvolunteer + </div></div>
        <div class="menuoptions"><div><?php echo $lang[$myLang]['navdonate'];?>: + response[i].navdonate + </div></div>
        <div class="menuoptions"><div><?php echo $lang[$myLang]['navstories'];?>: + response[i].navstories + </div></div>
        <div class="menuoptions"><div><?php echo $lang[$myLang]['navcontact'];?>: + response[i].navcontact + </div></div>
        <div class="menuoptions"><div><?php echo $lang[$myLang]['navnewsletter'];?>: + response[i].navnewsletter + </div></div>
    </div>

    <script>
        var menuOptions = document.querySelectorAll(".menuoptions");
        var mobileMenu = document.querySelector("#menudiv");
        var mobileMenuButton = document.querySelector("#mobilemenubutton");
        for (var i = 0; i < menuOptions.length; i++) {
            var thisThing = menuOptions[i];
            thisThing.addEventListener("mouseover", hoverBlue);
            thisThing.addEventListener("mouseout", backToGrey);
            }
        function backToGrey(){
            this.style.backgroundColor = "white";
        }
        function hoverBlue(){ 
            this.style.backgroundColor = "#99E8F9";
        }
        mobileMenuButton.addEventListener("click", function(){
            if (mobileMenu.style.display === "block"){
                mobileMenu.style.display = "none"
            }
            else {
                mobileMenu.style.display = "block"
            }
        });
    </script>
    
</body>
</html>