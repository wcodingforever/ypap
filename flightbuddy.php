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
        #flightbuddyimage {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #theflightbuddypic {
            max-width: 90%;
            max-height: 90%;
            margin: 10px;
        }
        #text {
            display: inline-block;
            padding: 10px;
        }
        #pleasenote {
            margin: 10px;
        }
        .inputwrapper {
            margin: 15px;
        }
        #submitbuttonwrapper {
            margin: 20px;
        }
        input, textarea {
            border-radius: 3px;
            padding: 7px;
            margin: 12px 0px 10px 10px;
            border: 1px solid grey;
        }

        #submitbutton {
            color: white;
            font-weight: bold;
            background-color: #1D4872;
            color: white;
            width: 150px;
            height: 50px;
            border: 1px solid grey;
            margin: auto;
            border-radius: 3px;
            padding: 7px;
        }
        @media screen and (min-width: 481px) {
            input, textarea {
                outline: none;
            }
            #theflightbuddypic {
                max-width: 40%;
                max-height: 40%;
                margin: 10px;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php';?>
    <div id="everythingwrapper">
        <div id="flightbuddyimage"><img id="theflightbuddypic" src="https://ypaprescue.files.wordpress.com/2017/03/slide3-e1489734714235.jpg"></div>
        <!-- Below is the text taken straight from the YPAP page. -->
        <div id="text">
            <h2>Become a Flight Buddy!</h2>
            Couriers are people flying internationally who are willing to check in a dog under their name at the airport.
            <br>
            <br>
            The pound will arrange everything and there is no cost to you.
            <br>
            <br>
            Usually only DIRECT flights work for sending an animal on a plane due to long flight times and airline regulations.
            <br>
            <br>
            If you are not flying direct, please let us know and we can try to arrange a dog to fly IN CABIN with you, under the seat.
            <br>
            <br>
            Most commonly we need flights to SFO, LAX, JFK, SEA, ORD, IAD, YVR, YYZ, VIE, MUC.
        </div>
    </div>
    <div id="bottomwrapper">
        <div id="pleasenote">Please note that all fields are mandatory!</div>
        <!-- Below are the divs for entering applicant information! Inside each wrapper div is a line of text describing the input field, and the textbox.-->
        <div class="inputwrapper" id="flightdatewrapper">
            <div class="fielddesc"><?php echo $lang[$myLang]['flightdate'];?>: </div>
            <input type="date" id="flightdate">
        </div>
        <div class="inputwrapper" id="destinationwrapper">
            <div class="fielddesc"><?php echo $lang[$myLang]['destination'];?>: </div>
            <input type="text" id="destination">
        </div>
        <div class="inputwrapper" id="namewrapper">
            <div class="fielddesc"><?php echo $lang[$myLang]['travelername'];?>: </div>
            <input type="text" id="name">
        </div>
        <div class="inputwrapper" id="phonenumwrapper">
            <div class="fielddesc"><?php echo $lang[$myLang]['travelerphone'];?>: </div>
            <input type="text" id="phonenum">
        </div>
        <div class="inputwrapper" id="emailwrapper">
            <div class="fielddesc"><?php echo $lang[$myLang]['traveleremail'];?>: </div>
            <input type="text" id="email">
        </div>
        <div id="submitbuttonwrapper"><input id="submitbutton" type="button" value="<?php echo $lang[$myLang]['submitmessage'];?>"></div>
    </div>

    <script>
        //The variables pointing towards each input field.
        var departureDate = document.querySelector("#flightdate");
        var destinationCity = document.querySelector("#destination");
        var travelerName = document.querySelector("#name");
        var phoneNumber = document.querySelector("#phonenum");
        var emailAddress = document.querySelector("#email");
        //The variable for the submit button.
        var submitButton = document.querySelector("#submitbutton");
        //This forces the calendar to only accept start dates of tomorrow or later!
        function getDate () {
            var todayDate = new Date();
            var ddGotten = todayDate.getDate();
            var mmGotten = todayDate.getMonth()+1;
            var yyyyGotten = todayDate.getFullYear();
            var dateOffset = ddGotten + 1;
            if(dateOffset<10){
                    dateOffset= "0"+dateOffset;
                }
                if(mmGotten<10){
                    mmGotten="0"+mmGotten;
                }
            todayDate = yyyyGotten+'-'+mmGotten+'-'+dateOffset;
            departureDate.setAttribute("min", todayDate);
        }
        getDate();
        //Add event listener to the button, making sure it can only submit when all fields have been filled out
        submitButton.addEventListener("click", function() {
            //Below checks that all fields have been filled out.
            if (departureDate.value === "" || destinationCity.value === "" || travelerName.value === "" || phoneNumber.value === ""|| emailAddress === "") {
                alert("Please make sure to fill out all the fields.");
            }
            else {
                //Below makes sure that the email address has an @ in it.
                var emailInput = emailAddress.value;
                var validEmailCheck = emailInput.indexOf("@")
                if (validEmailCheck < 0) {
                    alert("Please enter a valid email address.");
                }
                //Below makes sure that the info entered in the phone number section is a number.
                var phoneNumberInput = phoneNumber.value;
                if (phoneNumberInput.length > 20) {
                    alert("Phone number must be under 20 characters!");
                }
                else submitInformation(); //This calls the function that submits the entered information to the php!
            }
        })
        //Below is only called when the submit button is clicked and all the conditions are met!
        function submitInformation() {
            //Below is the package of all the information in the fields.
            var flightBuddyFormInfo = {
                flightdateofthebuddy: departureDate.value,
                destinationofthebuddy: destinationCity.value,
                nameofthebuddy: travelerName.value,
                phoneofthebuddy: phoneNumber.value,
                emailofthebuddy: emailAddress.value
            };
            var flightBuddyAjax = new XMLHttpRequest();
            flightBuddyAjax.onreadystatechange = function() {
                if (flightBuddyAjax.readyState === 4 && flightBuddyAjax.status === 200) {
                    
                    if (flightBuddyAjax.responseText === "ERROR") {
                        alert("There was an error. Your application has not been submitted.");
                    }
                    else if(flightBuddyAjax.responseText === "OK"){
                        alert("Thank you. Your application has been submitted.");
                        location.reload();
                    }
                }
            }
            var outGoingFlightBuddyInfo = JSON.stringify(flightBuddyFormInfo);
            flightBuddyAjax.open("POST", "back/sendflightform.php");
            flightBuddyAjax.send(outGoingFlightBuddyInfo);
        }
    </script>
</body>
</html>