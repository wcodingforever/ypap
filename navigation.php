<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <style>

    @media screen and (min-width: 481px) {
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
            display: flex;
            justify-content: space-between;
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

        .menuoptions:hover {
            cursor: pointer;
        }

        #chooseLang {
            display: inline-flex;
            border: 1px solid #0e5ba9;
            border-radius: 3px;
            width: 80px;
            height: 30px;
            vertical-align: top;
            font-family: sans-serif;
            font-weight: bold;
            margin-top: 3%;
            margin-right: 20%;
        }

        #donatebutton {
            position: absolute;
            right: 5%;
            top: 3%;
            text-align: center;
            width: 200px;
            height: 75px;
            line-height: 75px;
            /* outline: 1px solid red; */
        }

        #donatebutton:hover {
            cursor: pointer;
        }
}

/* Mobile version */
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
            height: 510px;
            width: 100%;
            font-size: 1.5em;
            padding: 30px;
            display: none;
            z-index: 10px;
        }

        .menuoptions {
            margin-bottom: 20px;
            border-bottom: 1px solid #1D4872;
            width: 300px;
        }

        #chooseLang {
            display: inline-block;
            border: 1px solid #0e5ba9;
            border-radius: 3px;
            width: 80px;
            height: 30px;
            margin-left: 100px;
            margin-bottom: 8px;
            font-family: sans-serif;
            font-weight: bold;
        }

        #donatebutton {
            display: none;
        }
}
    </style>
</head>
<body>
    <div id="navigationbar"><!--navigation mobile-->
        <div id="logodiv"><img id="logostyle" src="https://scontent.ficn1-1.fna.fbcdn.net/v/t1.0-1/p200x200/14183908_1770779633197617_2897900196827827557_n.jpg?_nc_cat=0&oh=c13c6f9ed243a5160d34fa95007d071e&oe=5B85E2A6"></div>
        <select id="chooseLang"><!--mobile lang. options-->
            <option class="langOptions" id="menuenglish">English</option>
            <option class="langOptions" id="menukorean">한국어</option>
            <option class="langOptions" id="menurussian">Русский</option>
            <option class="langOptions" id="menufrench">Français</option>
            <option class="langOptions" id="menuswedish">Svenska</option>
        </select>
        <div id="donatebutton">Please consider donating!</div>
        
        <div id="mobilemenubutton"><i class="fas fa-bars"></i></div>
    </div>

    <div id="menudiv"><!--mobile menu options-->
        <div class="menuoptions"><div><a href="aboutus.html"><?php echo $lang[$myLang]['navabout'];?>: + response[i].navabout + </a></div></div>
        <div class="menuoptions"><div><a href="flightbuddy.html"><?php echo $lang[$myLang]['navflight'];?>: + response[i].navflight + </a></div></div>
        <div class="menuoptions"><div><a href="foster.php"><?php echo $lang[$myLang]['navfoster'];?>: + response[i].navfoster + </a></div></div>
        <div class="menuoptions"><div><a href="volunteer.php"><?php echo $lang[$myLang]['navvolunteer'];?>: + response[i].navvolunteer + </a></div></div>
        <div class="menuoptions"><div><a href="donations.php"><?php echo $lang[$myLang]['navdonate'];?>: + response[i].navdonate + </a></div></div>
        <div class="menuoptions"><div><a href="stories.html"><?php echo $lang[$myLang]['navstories'];?>: + response[i].navstories + </a></div></div>
        <div class="menuoptions"><div><a href="contactus.php"><?php echo $lang[$myLang]['navcontact'];?>: + response[i].navcontact + </a></div></div>
        <div class="menuoptions"><div><a href="newsletters.php"><?php echo $lang[$myLang]['navnewsletter'];?>: + response[i].navnewsletter + </a></div></div>
    </div>

    <script>
        var menuOptions = document.querySelectorAll(".menuoptions");
        var mobileMenu = document.querySelector("#menudiv");
        var mobileMenuButton = document.querySelector("#mobilemenubutton");
        var menuEnglishElem = document.querySelector("#menuenglish");
        var menuKoreanElem = document.querySelector("#menukorean");
        var menuRussianElem = document.querySelector("#menurussian");
        var menuFrenchElem = document.querySelector("#menufrench");
        var menuSwedishElem = document.querySelector("#menuswedish");

        // menuEnglishElem.addEventListener("Click");
        // menuKoreanElem.addEventListener("Click");
        // menuRussianElem.addEventListener("Click");
        // menuFrenchElem.addEventListener("Click");
        // menuSwedishElem.addEventListener("Click");


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
                mobileMenu.style.display = "none";


            }
            else {
                mobileMenu.style.display = "block";
            }
        });
    </script>
    
</body>
</html>