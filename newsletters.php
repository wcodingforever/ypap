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
    <title>YPAP - Giving Dogs a Second Chance</title>
    <style>
        /* * {
            outline: 1px solid red;
        } */
        body {
            margin: 0px; 
            padding: 0px;
            font-family: sans-serif;
        }
        #newsletterimage {
            display: flex; 
            justify-content: center;
            align-items: center;
        }
        #subscribeimg {
            max-width: 90%;
            max-height: 90%;
            margin: 10px;
        }
        #text {
            display: inline-block;
            padding: 10px;
        }
        .inputwrapper {
            margin: 15px;
        }
        input, textarea {
            outline: 1px solid black;
        }

        #submitbuttonwrapper {
            margin: 20px;
        }

        #signupbutton {
            background-color: #1D4872;
            color: white;
        }
        @media screen and (min-width: 481px) {
            #subscribeimg {
                max-width: 40%;
                max-height: 40%;
                margin: 10px;
            }
            input, textarea {
                outline: none;
            }
        }
    </style>
</head> 
<body>
    <?php include 'navbar.php';?>
    <div id="everythingwrapper">
        <div id="newsletterimage"><img id="subscribeimg" src="https://i.pinimg.com/originals/94/82/8c/94828c92162ce22515b7807e81356416.jpg"></div>
        <div id="text">
            Want to stay up-to-date with everything that's happening at the Yongin Pound? Subscribe to our newsletter and get regular updates on volunteer opportunities and news about our cuddly friends!
        </div>
    </div>
    <div id="bottomwrapper">
        <div class="inputwrapper" id="namewrapper">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['newslettername'];?>:</div></div>
            <input type="text" id="name">
        </div>
        <div class="inputwrapper" id="emailwrapper">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['newsletteremail'];?>: </div></div>
            <input type="text" id="email">
        </div>
        <div id="submitbuttonwrapper"><input id="signupbutton" type="button" value="<?php echo $lang[$myLang]['submitmessage'];?>"></div>
    </div>
    <script>
        //The variables pointing towards each input field.
        var signUpName = document.querySelector("#name");
        var signUpEmail = document.querySelector("#email");
        //The variable for the sign up button.
        var signUpButton = document.querySelector("#signupbutton");
        signUpButton.addEventListener("click", function() {
            //Below checks that all fields have been filled out.
            if (signUpName.value === "" || signUpEmail.value === "") {
                alert("Please make sure to fill out all the fields.")
            }
            else {
                var emailInput = signUpEmail.value;
                var validEmailCheck = emailInput.indexOf("@");
                if (validEmailCheck < 0) {
                    alert("Please enter a valid email address.");
                }
                else signUpNewsLetter(); //This calls the function that submits the user's information!
            }
        })
        //Below is only called when the sign up button is clicked and all the conditions are met!
        function signUpNewsLetter() {
            //Below is the package of all the information in the fields.
            var newsLetterSignUpInfo = {
                whosubscribed: signUpName.value,
                emailwhosubscribed: signUpEmail.value
            };
            var newsLetterAjax = new XMLHttpRequest();
            newsLetterAjax.onreadystatechange = function() {
                if (newsLetterAjax.readyState === 4 && newsLetterAjax.status === 200) {
                    alert("Thank you. You have been signed up for our regular newsletter.");
                }
            }
            var outGoingNewsLetterInfo = JSON.stringify(newsLetterSignUpInfo);
            newsLetterAjax.open("POST", "mailingsignupinfo.php");
            newsLetterAjax.send(outGoingNewsLetterInfo);
        }
    </script>
</body>
</html>