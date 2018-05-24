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
    <title>Document</title>
    <style>
        /* * {
            outline: 1px solid red;
        } */ 
        body {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
        }
        #text {
            display: inline-block;
            padding: 10px;
        }
        #imgwrapper {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #fosterimage {
            max-width: 90%;
            max-height: 90%;
            margin: 10px;
        }
        #pleasenote {
            margin: 10px;
        }
        .inputwrapper {
            margin: 15px;
        }
        #otherinfo {
            width: 85%;
        }
        input, textarea {
            outline: 1px solid black;
        }
        .requiredfield {
            color: red;
        }
        #imgwrapper {
            display: flex;
            justify-content: center;
        }
        #submitbuttonwrapper {
            margin: 20px;
        }
        @media screen and (min-width: 481px) {
            #otherinfo {
                width: 400px;
            }
            input, textarea {
                outline: none;
            }
            #fosterimage {
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
        <div id="imgwrapper"><img id="fosterimage" src="https://ypaprescue.files.wordpress.com/2018/05/kakaotalk_20180507_153251433-e1525766428832.jpg?w=330&h=240&crop=1"></div>
        <!-- Below is the text taken straight from the YPAP page. -->
        <div id="text">
            <div id="rundown">Fostering is temporarily caring for a dog as if it were your own. Fosters are people who have time and love to give, but can’t commit to a dog forever.
            <br>
            <br>
            1. YPAP needs fosters to house dogs before they fly internationally.
            <br>
            In this case, a specific dog has been adopted outside of Korea, but due to health and safety regulations, must live outside the pound for 1-4 months. It is expensive to board a dog for this time so you can volunteer your home.
            <br>
            <br>
            2. YPAP also needs fosters to house dogs until they find adoption.
            <br>
            Getting the dog out of a cage is extremely important for their mental and physical health. They are happier and friendlier when they meet potential adopters.
            <br>
            In this case, the animal does not necessarily have a set time with you. Fostering could be for a week or could be for months.
            <br>
            Your main job is caring for the dog, but we also hope you help the pound by promoting the adoption of the animal. Take pictures together, talk with your friends and family, chat with people when you go on walks, put on an “Adopt Me” bandana and sit at a cafe or bar together – whatever you can think of to get them noticed! The most important thing is to SHARE.
            <br>
            <br>
            Fosters must fill out an application that covers basic questions you need to consider before taking in a dog.
            <br>
            <br>
            Dogs will be vaccinated and spayed/neutered before they come to your home. We should be able to take care of all the vetting and driving and leave things as simple as possible for you.
            <br>
            <br>
            If you are willing to take on more than just housing the dog (if you can drive, do vet visits, administer medication at home) please let us know as this can help immensely!</div>
        </div>
    </div>
    <div id="bottomwrapper">
        <div id="pleasenote">Please note that all fields marked with a <span class="requiredfield">*</span> are mandatory!</div>
        <!-- Below are the divs for entering applicant information! Inside each wrapper div is a line of text describing the input field, and the textbox.-->
        <div class="inputwrapper" id="namewrapper">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['fostername'];?>: </div> <span class="requiredfield">*</span></div>
            <input type="text" id="name">
        </div>
        <div class="inputwrapper" id="phonenumwrapper">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['fosterphone'];?>: </div> <span class="requiredfield">*</span></div>
            <input type="text" id="phonenum">
        </div>
        <div class="inputwrapper" id="emailwrapper">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['fosteremail'];?>: </div> <span class="requiredfield">*</span></div>
            <input type="text" id="email">
        </div>
        <div class="inputwrapper" id="addresswrapper">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['fosteraddress'];?>: </div> <span class="requiredfield">*</span></div>
            <input type="text" id="address">
        </div>
        <div class="inputwrapper" id="startdatewrapper">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['fosterstartdate'];?>: </div> <span class="requiredfield">*</span></div>
            <input type="date" id="startdate">
        </div>
        <div class="inputwrapper" id="enddatewrapper">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['fosterenddate'];?>: </div> <span class="requiredfield">*</span></div>
            <input type="date" id="enddate">
        </div>
        <div class="inputwrapper" id="otherinfowrapper">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['fosterother'];?>: </div></div>
            <textarea name="otherinfo" id="otherinfo" rows="5"></textarea>
        </div>
        <div id="submitbuttonwrapper"><input id="submitbutton" type="button" value="<?php echo $lang[$myLang]['submitmessage'];?>: "></div>
    </div>
    <script>
        //The variables pointing towards each input field.
        var applicantName = document.querySelector("#name");
        var phoneNumber = document.querySelector("#phonenum");
        var emailAddress = document.querySelector("#email");
        var homeAddress = document.querySelector("#address");
        var startDate = document.querySelector("#startdate");
        var endDate = document.querySelector("#enddate");
        var otherInfo = document.querySelector("#otherinfo");
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
                    dateOffset= "0"+dateOffset
                }
                if(mmGotten<10){
                    mmGotten="0"+mmGotten
                }
            todayDate = yyyyGotten+'-'+mmGotten+'-'+dateOffset;
            startdate.setAttribute("min", todayDate);
        }
        getDate();
        //This forces the calendar to only accept end dates of more than one week after today!
        function getEndDate () {
            var todayDate = new Date();
            var ddGotten = todayDate.getDate();
            var mmGotten = todayDate.getMonth()+1;
            var yyyyGotten = todayDate.getFullYear();
            var dateOffset = ddGotten + 8;
            if(dateOffset<10){
                    dateOffset= "0"+dateOffset
                }
                if(mmGotten<10){
                    mmGotten="0"+mmGotten
                }
            todayDate = yyyyGotten+'-'+mmGotten+'-'+dateOffset;
            enddate.setAttribute("min", todayDate);
        }
        getEndDate();
        
        //Add event listener to the button, making sure it can only submit when all fields have been filled out
        submitButton.addEventListener("click", function() {
            if (applicantName.value === ""|| phoneNumber.value === "" || emailAddress.value === ""|| homeAddress.value === "" || startDate.value === "" || endDate.value === "") {
                alert("Please make sure to fill out all the fields!")
            }
            else {
                //Below makes sure that the email address has an @ in it.
                var emailInput = emailAddress.value;
                var validEmailCheck = emailInput.indexOf("@");
                if (validEmailCheck < 0) {
                    alert("Please enter a valid email address.");
                }
                //Below makes sure that the info entered in the phone number section is a number.
                var phoneNumberInputString = phoneNumber.value;
                var phoneNumberInput = parseInt(phoneNumberInputString);
                if ((phoneNumberInput / 1) !== phoneNumberInput) {
                    alert("Please enter a valid phone number.")
                }
                else submitInformation(); //This calls the function that submits the entered information to the php!
            }
        })
        //Below is only called when the submit button is clicked and all the conditions are met!
        function submitInformation() {
            //Below is the package of all the information in the fields.
            var fosterFormInfo = {
                Name: applicantName.value,
                PhoneNumber: phoneNumber.value,
                Email: emailAddress.value,
                Address: homeAddress.value,
                StartDate: startDate.value,
                EndDate: endDate.value,
                OtherInfo: otherInfo.value,
            };
            console.log(fosterFormInfo);
            var fosterAjax = new XMLHttpRequest();
            fosterAjax.onreadystatechange = function() {
                if (fosterAjax.readyState === 4 && fosterAjax.status === 200) {
                    alert("Thank you. Your application has been submitted.");
                }
            }
            var outGoingFosterInfo = JSON.stringify(fosterFormInfo);
            fosterAjax.open("POST", "sendfosterform.php");
            fosterAjax.send(outGoingFosterInfo);
        }
    </script>
</body>
</html>