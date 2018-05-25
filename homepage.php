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
    <title>YPAP - Giving Dogs a Second Chance</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Lora:700" rel="stylesheet">
<style>

    /* * {outline: 1px solid red} */

    * {box-sizing:border-box}
    

    body{
        margin: 0px;
        padding:0px;
        height: 100vh;
        width: 100vw;

    }

    #slideshowdesktop {
        max-width: 900px;
        height: 400px;
        position: relative;
        margin: auto;
    }

    .allslides {
        height:400px;
    }

    .imgstyle {
        width: 100%;
        height:100%;
    }

    #aboutusarea, #slideshowmobile,  .seemorebutton, .menudiv, .donateArea, .seemoretext {
        display:none;
    }

    #mydots {
        text-align: center;
        height: 80px;
    }

    .dotstyle {
        display: inline-block;
        cursor: pointer;
        height: 15px;
        width: 15px;
        background-color: lightgray;
        border-radius: 50%;
        margin: 10px 4px;

    }

    #next, #previous {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        font-size: 30px;
    }

    #next {
        right: 0;
    }

    .slidertext {
        position: absolute;
        top: 50%;
        left: 30%;
        width: 500px;
        font-size: 1.3em;
        color: #1D4872;
        font-family: 'Lora', serif;
    }

    .slidertext:hover {
        cursor:default;
    }

    #bottommenuwrapper {
        height: 250px;
        align-items: center;
        display: inline-flex;
        width: 100%;
        justify-content: space-around;

    }

    .bottommenu {
        height: 200px;
        width: 210px;
        border:1px solid black;
    }

    .active, .dotstyle:hover {
        background-color: #717171;
    }

    #previous:hover, #next:hover {
    background-color: rgba(0,0,0,0.8);
    }

    .mobileonly {
        display: none;
    }

    #scrollbutton {
        color: white;
    }




@media screen and (max-width:481px) {


    #aboutusarea{

    text-align: center;
    line-height: 25px;
    font-size: 18px;
    display: block;
    }

    #slideshowmobile{
        height:300px;
        width: 100%;
        position: relative;
        overflow: hidden;
        display: block;
    }


    .donateArea{
        font-size: large;
        position: fixed;
        bottom: 0px;
        width: 100%;
        color: white;
        background-color: #0e5ba9;
        font-family: sans-serif;
        font-weight: bolder;
        font-variant-caps: unicase;
        text-align: center;
        border-radius: 7px;
        line-height: 40px;
        text-shadow: 2px 3px 10px #000;
        display:block;
    }

    .donateArea > a {
        color: white;
        text-decoration: none; 
    }

    .donateArea > a:visited {
        color: white;
        text-decoration: none; 
    }

    .menudiv {
        display: inline-flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        height: 90px;
        font-size: 1.3em;
    }

    .seemorebutton {
        width: 35px;
        height: 35px;
        margin-right: 15px;
        text-align: center;
        padding-top: 5px;
        display: block;
    }

    .seemoretext {
        padding: 5%;
        font-family: sans-serif;
        line-height: 130%;
    }

    .imgstyle {
        max-width: 100%;
    }

    #mydots, #slideshowdesktop, #bottommenuwrapper {
        display:none;
    }

    .menuoptions {
        margin-left: 10px;
    }

    #scrollbutton {
        position: fixed;
        display: none; 
        bottom: 20px; 
        right: 30px; 
        z-index: 10;
        height:30px;
        width:30px;
        background-color: rgba(0,0,0,0.8);
        border-radius: 5px;
        color: white;
        text-align: center;
        padding-top: 5px;
    }

    .mobileonly {
        display: block;
    }

    #previous, #next {
        /* display:block; */
        color:black;
    }
    #previous:hover, #next:hover {
    background-color: white;
    }

}

</style>

</head>
<body>
    <?php include 'navbar.php';?>
    <div>
        <div id="slideshowdesktop"><!--desktop-->
            <div class="allslides" id="firstpage">
                <img class="imgstyle" src="https://scontent.ficn1-1.fna.fbcdn.net/v/t1.0-9/26229511_2021356694806575_3366688819793774633_n.jpg?_nc_cat=0&oh=407b9e40f48f3e1c2aa22ec931f9d56f&oe=5B8B48CA">
                <div class="slidertext">Can you give a dog a forever home?
                    YPAP sends dogs to new homes every week!</div>
            </div>

            <div class="allslides" id="secondpage" >
                <img  class="imgstyle"  src="https://ypaprescue.files.wordpress.com/2017/03/img_5209.jpg?w=660&h=480&crop=1">
                <div class="slidertext">The Yongin Animal Protection Association has given these animals a second chance. Now we, the international rescue community, are joining them to help find families for the unwanted and abandoned dogs of Korea.</div>
            </div>

            <div class="allslides" id="thirdpage">
                <img class="imgstyle" src="https://scontent.ficn1-1.fna.fbcdn.net/v/t1.0-9/27867916_2040843862857858_2627467305295489260_n.jpg?_nc_cat=0&oh=1d180199deec192e42d50a8a8063fb12&oe=5B94418B">
                <div class="slidertext">Flying from Korea to Canada, the U.S., or Europe?<br>
                    We have a number of rescued animals that have been adopted and are waiting to get to their forever homes.</div>
            </div>
        </div>

        <div class="mobileonly">
            <div id="aboutusarea">
                <div id="abouttextstyle">YPAP is made up of people like you, all with a common goal of helping neglected and abandoned dogs.
                </div>
                <div>
                The Yongin Animal Protection Association has given these animals a second chance. <br>Now we, the international rescue community, are joining them to help find families for the unwanted and abandoned dogs of Korea.
                </div>
            </div>
    
            <div id="slideshowmobile"><!--mobile-->
                <div class="allslides ">
                    <img>
                    <div class="dogprofile"></div>
                </div>
    
                <div class="allslides">
                    <img>
                    <div class="dogprofile"></div>
                </div>
    
                <div class="allslides">
                    <img>
                    <div class="dogprofile"></div>
                </div>
            </div>  
        </div>
        <div id="buttondiv">
            <div id="previous"><i class="fas fa-angle-left"></i></div><!--navbutton-->
            <div id="next"><i class="fas fa-angle-right"></i></div><!--navbutton-->
        </div>
        <div id="mydots"><!--dots-->
            <div class="dotstyle" id="firstdot"></div>
            <div class="dotstyle" id="seconddot"></div>
            <div class="dotstyle" id="thirddot"></div>
        </div>
    </div>

    <div>
        <div class="menudiv"><!--mobile-->
            <div class="menuoptions">Flight buddy</div>
            <div class="seemorebutton" id="flightplus"><i class="fas fa-plus"></i></div>
        </div>

        <div class="seemoretext" id="flighttext">Are you booked to fly from Korea to Canada, the U.S., or Europe?
            We have a number of rescued animals that have been adopted and are waiting to get to their forever homes.
            Can you help us get them there by being a flight volunteer?
            We organize everything and there is no cost for you.
            <a href="">Read more</a>
        </div>

        <div class="menudiv">
            <div class="menuoptions">Foster</div>
            <div class="seemorebutton" id="fosterplus"><i class="fas fa-plus"></i></div>
        </div>

        <div class="seemoretext" id="fostertext" >Fostering is temporarily caring for a dog as if it were your own. Fosters are people who have time and love to give, but can’t commit to a dog forever.
            <a href="">Read more</a>
        </div>

        <div class="menudiv">
            <div class="menuoptions">Volunteer</div>
            <div class="seemorebutton" id="volunteerplus"><i class="fas fa-plus"></i></div>
        </div>

        <div class="seemoretext" id="volunteertext">Want to get involved? Cleaning Anyone living locally, please join us at the pound in Yongin City, about 45 minutes outside of Seoul. You don’t have to have experience, all you need is common sense and a love of animals!
            <a href="">Read more</a>
        </div>

        <div class="menudiv">
            <div class="menuoptions">Adoption</div>
            <div class="seemorebutton" id="adoptionplus"><i class="fas fa-plus"></i></div>
        </div>

        <div class="seemoretext" id="adoptiontext">YPAP selects a limited number of dogs each month to check their suitability for adoption.
            <a href="">Read more</a>
        </div>

        <div id="scrollbutton"><i class="fas fa-angle-up"></i></div><!--scrollup button-->

        <div class="menudiv"></div><!--make space for donate button at the bottom-->

        <div class="donateArea">
            <a href="">Donate <i class="far fa-heart"></i></a></div>
    </div>

    <div id="bottommenuwrapper"><!--desktop-->
        <div class="bottommenu"></div>
        <div class="bottommenu"></div>
        <div class="bottommenu"></div>
    </div>
    
    <script>

        var plusButton = document.querySelectorAll(".seemorebutton");
        var textInfo = document.querySelectorAll(".seemoretext");
        var mySlides = document.querySelectorAll(".allslides");
        var myDots = document.querySelectorAll(".dotstyle");
        var nextButton = document.querySelector("#next");
        var previousButton = document.querySelector("#previous");
        var scrollToTop = document.querySelector("#scrollbutton");
        var desktopSlider = document.querySelector("#slideshowdesktop");
        var mobileSlider = document.querySelector("#slideshowmobile");
        var dogProfile = document.querySelectorAll(".dogprofile");
        var mySlidesDesktop = desktopSlider.querySelectorAll(".allslides"); 
        var mySlidesMobile = mobileSlider.querySelectorAll(".allslides"); 
        var dogImgs = mobileSlider.querySelectorAll("img"); 
        

        function hidePage() {
            for (var i = 0; i < mySlides.length; i++) {
                var thisSlide = mySlides[i];
                thisSlide.style.display = "none";
            } 
        }

        hidePage();
        mySlides[0].style.display = "block";


        var slideIndex = 0;
        showSlides();
        

        function showSlides() {
            var width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
            if(width > 481){
                mySlides = mySlidesDesktop;
            }
            else if (width < 481){
                mySlides = mySlidesMobile;
            }
            for (var i = 0; i < mySlides.length; i++) {
                var thisSlide = mySlides[i]
                thisSlide.style.display = "none"; 
            }
            slideIndex++;
            if (slideIndex > mySlides.length) {slideIndex = 1} 
            mySlides[slideIndex-1].style.display = "block";
        };


        //for timeouts
        var myTime;
        function myFunction() {
            myTime = setInterval(function (){
                for (var i = 0; i < mySlides.length; i++) {
                    var thisSlide = mySlides[i]
                    thisSlide.style.display = "none"; 
                }
                slideIndex++;
                if (slideIndex > mySlides.length) {slideIndex = 1} 
                mySlides[slideIndex-1].style.display = "block";
                console.log("changed"); 
            }, 3000);
        }
        

        function myStopFunction() {
            clearInterval(myTime);
        }



        //make automatic slider

        function autoSlider(){
            for (var i = 0; i < mySlides.length; i++) {
                var thisSlide = mySlides[i]
                thisSlide.style.display = "none"; 
            }
            slideIndex++;
            if (slideIndex > mySlides.length) {slideIndex = 1} 
            mySlides[slideIndex-1].style.display = "block";
            // setTimeout(autoSlider, 1000);
            myFunction();
             console.log("changed"); 
        }
        autoSlider();


        //buttons for next and previous slider
        nextButton.addEventListener("click", function(){
            console.log("clicked next");
            showSlides();
            slideIndex + 1;
            clearInterval(myTime);
            setTimeout(myFunction, 5000);
            

        });

        previousButton.addEventListener("click", function(){
            console.log("clicked prev");
            showSlides();
            slideIndex - 1;
            clearInterval(myTime);
            setTimeout(myFunction, 5000);
            
        });


        //to choose the wanted page of slide by clicking the dots
        // thisDot.classname = thisDot.className.replace(" active", ""); ??
        

        for (var i = 0; i < myDots.length; i++){
            thisDot = myDots[i];

            thisDot.addEventListener("click", function(){
                console.log("click", this);
                var dotPosition = this.id.indexOf("dot"); 
                var myId = this.id.substring(0, dotPosition); 
                var myPage = document.querySelector("#" + myId + "page");

                if(myPage.style.display === "none") {
                    hidePage();
                    myPage.style.display = "block";
                    // 
                    // clearTimeout(autoSlider, 0);
                }

                myStopFunction();
            });
        }


        //hide the see more text

        function hideText() {
            for (var i = 0; i < textInfo.length; i++) {
                thisText = textInfo[i];
                thisText.style.display = "none";
            } 
        }

        hideText();

        //find what menu and show more text
        for (var i =0; i < plusButton.length; i++){
            thisPlus = plusButton[i];

            thisPlus.addEventListener("click", function(){
                console.log("click", this);
                var plusPosition = this.id.indexOf("plus"); 
                var myId = this.id.substring(0, plusPosition); 
                var myText = document.querySelector("#" + myId + "text");

                if(myText.style.display === "none") {
                    // hideText() do we want this?
                    myText.style.display = "block";
                    }
                    else {
                        myText.style.display = "none";
                    }

            });
        }


        //scrollup button for mobile
        window.onscroll = function() {scrollUpFunction()};

        function scrollUpFunction(){
            if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTop.style.display = "block";
            }
            else {
                scrollToTop.style.display = "none";
            }
        };


        scrollToTop.addEventListener("click", function(){
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });    
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200){
                    var thisDogInfo = JSON.parse(xhr.responseText);
                    for (var i = 0; i < thisDogInfo.length; i++) {

                        mySlidesMobile = '<div class="allslides" <img src=' + 
                        thisDogInfo[i].picture + '><div class="dogprofile">' +
                        thisDogInfo[i].id + " " + thisDogInfo[i].name + '</div></div>';
                    }
                }
            }
            xhr.open("POST", "back/getdogprofile.php");
            var forSend = {
                whattoget: "sample"
            }
            forSend = JSON.stringify(forSend);
            xhr.send(forSend);

    </script>
</body>
</html>