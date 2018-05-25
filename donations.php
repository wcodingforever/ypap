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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- TITLE FOR DONATE -->
    <title>YPAP - Giving Dogs a Second Chance</title>
    <style>
        /* *{
            outline: 1px solid blue;
        } */
        input, select{
            width: 90vw;
            border-radius: 3px;
            padding: 7px;
            margin: 12px 0px 10px 10px;
            border: 1px solid grey;
        }
        body {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
        }

        #donationimage {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #thedonationpic {
            max-width: 90%;
            max-height: 90%;
            margin: 10px;
        }

        #paypaldonate img{
            cursor: pointer;
            max-width: 90%;
        }
        button {
            color: white;
            font-weight: bold;
            background-color: #1D4872;
            color: white;
            width: 150px;
            height: 50px;
            border: 1px solid grey;
            margin: 20px;
            border-radius: 3px;
            padding: 7px;
        }

        #flightbuddyimage {
            text-align: center;
        }
        @media screen and (min-width: 481px){
            #thedonationpic{
                max-width: 40%;
                margin: 10px;
            }
            input, select{
                width: 350px;
                border-radius: 3px;
                padding: 2px;
                margin: 12px 0px 10px 10px;
                border: 1px solid grey;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php';?>
    <div id="everythingwrapper">
        <div id="donationimage"><img id ="thedonationpic" src="https://ypaprescue.files.wordpress.com/2017/03/slide3-e1489734714235.jpg"></div>
        <!-- Below is the text taken straight from the YPAP page. -->
        <div id="text">
            The most effective way you can make a difference in the lives of these dogs is by sponsoring one. You can eliminate one or more animal’s pain and suffering today through a monthly sponsorship. You can make a direct, personal, and positive impact by sponsoring a dog today.
        </div>
    </div>
    <div>
        <div class="inputwrapper" id="donationnamediv">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['donationname'];?>: </div></div>
            <input type="text" placeholder="Leave the field empty if you want to donate anonymously">
        </div>
        <div class="inputwrapper" id="donationemaildiv">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['donationemail'];?>: </div></div>
            <input type="text" placeholder="Leave the field empty if you want to donate anonymously">
        </div>
        <div class="inputwrapper" id="donationamountdiv">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['donationamount'];?>: </div></div>
            <input type="text" placeholder="1.00">
        </div>
        <div class="inputwrapper" id="donationcurrencydiv">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['donationcurrency'];?>: </div></div>
            <select id="donationcurrency">
                <option>USD</option>
                <option>KRW</option>
                <option>EUR</option>
            </select>
        </div>
        <div id="donatebuttonwrapper"><button><div><?php echo $lang[$myLang]['donatebutton'];?></div></button></div>
        <div id="paypaldonate">Or donate with PayPal<br>

            <img src="https://i2.wp.com/deadlaugh.com/wp-content/uploads/2017/03/PayPal-Donate-Button-High-Quality-PNG.png">
        </div>
    </div>
    <script>
        var nameElem      = document.querySelector("#donationnamediv");
        var emailElem     = document.querySelector("#donationemaildiv");
        var amountElem    = document.querySelector("#donationamountdiv");
        var currencyElem  = document.querySelector("#donationcurrencydiv");
        var donateButton  = document.querySelector("#donatebuttonwrapper").querySelector("button");
        var nameValue     = nameElem.querySelector("input");
        var emailValue    = emailElem.querySelector("input");
        var amountValue   = amountElem.querySelector("input");
        var currencyValue = currencyElem.querySelector("select");
        
        donateButton.addEventListener("click", function() {
            if ( amountValue.value === "") {
                alert("Fill out the donation amount!.");
            }
            else {
                if (nameValue.value==="" && emailValue.value==="") {
                    var fromwho = "anonymous";
                    var forSend = {
                        namewhodonated: "anonymous",
                        emailwhodonated: "anonymous",
                        howmuhdonated: amountValue.value,
                        currency: currencyValue.value,
                    };
                    var donateAjax = new XMLHttpRequest();
                    donateAjax.onreadystatechange = function() {
                        if (donateAjax.readyState === 4 && donateAjax.status === 200) {
                            alert("Thank you. Your application has been submitted.");
                        }
                    }
                    var forSend = JSON.stringify(forSend);
                    donateAjax.open("POST", "back/donorinfo.php");
                    donateAjax.send(forSend);
                        
                }
                else if (nameValue.value!=="" && emailValue.value!==""){
                    var forSend = {
                        namewhodonated: nameValue.value,
                        emailwhodonated: emailValue.value,
                        howmuhdonated: amountValue.value,
                        currency: currencyValue.value,
                    };
                    var donateAjax = new XMLHttpRequest();
                    donateAjax.onreadystatechange = function() {
                        if (donateAjax.readyState === 4 && donateAjax.status === 200) {
                            alert("Thank you. Your application has been submitted.");
                        }
                    }
                    var forSend = JSON.stringify(forSend);
                    donateAjax.open("POST", "back/donorinfo.php");
                    donateAjax.send(forSend);
                }
                
                else{
                    alert("If not anonymously fill out both name and email");
                }
            }
        });
        
    </script>
</body>
</html>