<?php
include 'lang.php';
if (ISSET($_REQUEST['lang'])) {
    $myLang = $_REQUEST['lang'];
 }
 else{
    $myLang = 'en';
 }
?><style>
        * {outline: 1px solid red}
        body {
            padding: 0px;
            margin: 0px;
            width: 100vw; 
            height: 100vh;
            font-family: sans-serif;
        }
        #navigationbar {
            height: 160px;
            width: 100%;
            margin-bottom: 20px;
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
            line-height: 25px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .menuoptions {
            /* width: 110px; */
            height: 50px;
            text-align: center;
            line-height: 45px;
            display: inline-flex;
            width: 140px;
            align-items: center;
            justify-content: center;
        }

        #chooseLang {
            display: inline-flex;
            border: 1px solid #0e5ba9;
            border-radius: 3px;
            width: 100px;
            height: 30px;
            vertical-align: top;
            font-family: sans-serif;
            font-weight: bold;
            margin-top: 5%;
            margin-right: 20%;
            margin-left: 3%;
        }

        #donatebutton {
            position: absolute;
            right: 5%;
            top: 3%;
            text-align: center;
            width: 201px;
            height: 75px;
            line-height: 75px;
            color: white;
            background-color: #1D4872;
            border-radius: 5px;
            /* outline: 1px solid red; */
        }

        #donationplease {
            outline: 1px solid red;
        }

        a:visited {
            color: #1D4872
        }

        a:link {
            text-decoration: none;
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
                padding: 30px;
                display: none;
                z-index: 10px;
                height:670px;
                width: 100%;
                background-color: white;
            }

            .menuoptions {
                margin-bottom: 20px;
                border-bottom: 1px solid #1D4872;
                width: 300px;
                color: #1D4872;
            }

            #chooseLang {
            display: inline-block;
            border: 1px solid #0e5ba9;
            border-radius: 3px;
            width: 80px;
            height: 30px;
            margin-bottom: 8px;
            font-family: sans-serif;
            font-weight: bold;
            }

            #donatebutton {
                display: none;
            }
        }
    </style>
    <div id="navigationbar"><!--navigation mobile-->
        <a href="homepage.php"><div id="logodiv"><img id="logostyle" src="https://scontent.ficn1-1.fna.fbcdn.net/v/t1.0-1/p200x200/14183908_1770779633197617_2897900196827827557_n.jpg?_nc_cat=0&oh=c13c6f9ed243a5160d34fa95007d071e&oe=5B85E2A6"></div></a>
        <select id="chooseLang"><!--mobile lang. options-->
            <option class="langOptions">Languages</option>
            <option class="langOptions" id="menuenglish">English</option>
            <option class="langOptions" id="menukorean">한국어</option>
            <option class="langOptions" id="menurussian">Русский</option>
            <option class="langOptions" id="menufrench">Français</option>
            <option class="langOptions" id="menuswedish">Svenska</option>
        </select>
        <div id="donatebutton">Please consider donating!<i class="far fa-heart"></i></div>
        <div id="mobilemenubutton"><i class="fas fa-bars"></i></div>
    </div>
    <div id="menudiv"><!--mobile menu options-->
        <a href="aboutus.php?lang=<?php echo($myLang); ?>"><div class="menuoptions"><?php echo $lang[$myLang]['navabout'];?></div></a>
        <a href="ourdogs.php?lang=<?php echo($myLang); ?>"><div class="menuoptions"><?php echo $lang[$myLang]['navdogs'];?></div></a>
        <a href="flightbuddy.php?lang=<?php echo($myLang); ?>"><div class="menuoptions"><?php echo $lang[$myLang]['navflight'];?></div></a>
        <a href="foster.php?lang=<?php echo($myLang); ?>"><div class="menuoptions"><?php echo $lang[$myLang]['navfoster'];?></div></a>
        <a href="volunteer.php?lang=<?php echo($myLang); ?>"><div class="menuoptions"><?php echo $lang[$myLang]['navvolunteer'];?></div></a>
        <a href="donations.php?lang=<?php echo($myLang); ?>"><div class="menuoptions"><?php echo $lang[$myLang]['navdonate'];?></div></a>
        <a href="stories.php?lang=<?php echo($myLang); ?>"><div class="menuoptions"><?php echo $lang[$myLang]['navstories'];?></div></a>
        <a href="contactus.php?lang=<?php echo($myLang); ?>"><div class="menuoptions"><?php echo $lang[$myLang]['navcontact'];?></div></a>
        <a href="newsletters.php?lang=<?php echo($myLang); ?>"><div class="menuoptions"><?php echo $lang[$myLang]['navnewsletter'];?></div></a>
    </div>
    <input type="hidden" id="hiddenlang" name="languagesetting" value="en">
    <script>
        var menuOptions = document.querySelectorAll(".menuoptions");
        var mobileMenu = document.querySelector("#menudiv");
        var mobileMenuButton = document.querySelector("#mobilemenubutton");
        var langOptions = document.querySelector(".langOptions");
        var dropdownElem = document.querySelector("#chooseLang");

        dropdownElem.addEventListener("change", languageSwitch);
        var hiddenLanguage = document.querySelector("#hiddenlang");
        var langToSet = "";

        function languageSwitch() {
            var currentLang = this.value;
            if (currentLang === "English") {
                var langToSet = "en";
            }
            if (currentLang === "한국어") {
                var langToSet = "ko";
            }
            if (currentLang === "Русский") {
                var langToSet = "ru";
            }
            if (currentLang === "Français") {
                var langToSet = "fr";
            }
            if (currentLang === "Svenska") {
                var langToSet = "sv";
            }
            hiddenLanguage.value = langToSet;
            window.location.replace("?lang=" + langToSet);
            // console.log(langToSet);
        };
        for (var i = 0; i < menuOptions.length; i++) {
            var thisThing = menuOptions[i];
            thisThing.addEventListener("mouseover", hoverGrey);
            thisThing.addEventListener("mouseout", backToWhite);
            }
        function backToWhite(){
            this.style.backgroundColor = "white";
        }
        function hoverGrey(){ 
            this.style.backgroundColor = "rgb(208,208,208)";
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