<?php
$import= file_get_contents('lang.php');
$myLang = $_REQUEST['lang'];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADoption form</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


<style>
 @media screen and (min-width:481px) {
    body{
        font-family: Verdana;
    }
    #intro{
        display: inline-block;
        padding-top: 10px;
        margin: 1% 0% 2% 3%;
        color: #0e5ba9;
        font-size: 20px;
        font-weight: normal;
        line-height: 18px;
        height: 28px;
        width: 70%;
    }
    .requiredSymbol{
        color: red;
        font-size: 100%;
    }
    .text_field_form{
        display: block;
        font-size: 100%;
        color: grey;
        margin-left: 2%;
        padding: 1% 0% 0% 0%;
    }
    #intro_text{
        width: 100%;
        margin: 2% 0% 4% 2%;
        font-family: Verdana;
        font-style: italic;
        color: grey;
        font-size: 13px;
    }
    input {
        display: block;
        padding: 7px;
        margin: 12px 0px 10px 25px;
        border: 1px solid grey;
        border-radius: 3px;
        width: 370px;
    }
 
    #submitButton{
        color: white;
        font-weight: bold;
        background-color: #0e5ba9;
        width: 150px;
        height: 50px;
        margin-left: 9%;
        cursor:pointer;
    }
    #dogName{
        border: 2px solid #0e5ba9;
    }
    #dogId{
        display:none;
    }
    #box_form_field_name_surname{
        border-top: 0.8px rgba(0, 0, 0, 0.2) solid;
        padding-top: 20px;
        width: 40%;
    }
    #box_form_field_dogName{
        padding-bottom: 20px;
    }
    #name, #surname{
        width: 370px;
    }
    #nameTextField, #emailTextField, #phoneTextField {
	    margin-left: 25px;
    }
}
@media screen and (max-width:481px) {
    body{
        font-family: Verdana;
    }
    #intro{
        display: inline-block;
        padding-top: 10px;
        margin: 1% 0% 2% 3%;
        color: #0e5ba9;
        font-size: 20px;
        font-weight: normal;
        line-height: 18px;
        height: 28px;
        width: 70%;
    }
    .requiredSymbol{
        color: red;
        font-size: 100%;
        margin-left: 2%;
    }
    .text_field_form{
        display: block;
        font-size: 100%;
        color: grey;
        margin-left: 2%;
    }
    #intro_text{
        width: 100%;
        margin: 5% 0% 7% 4%;
        font-family: Verdana;
        font-style: italic;
        color: grey;
        font-size: 12px;
    }
    input {
        display: block;
        padding: 5px;
        margin: 8px 0px 8px 5px;
        border: 1px solid grey;
        border-radius: 3px;
        width: 92%;
    }
    #submitButton{
        color: white;
        font-weight: bold;
        background-color: #0e5ba9;
        width: 100px;
        height: 50px;
        margin: auto;
    }
    #dogName{
        border: 2px solid #0e5ba9;
    }
    #dogId{
        display:none;
    }
    #box_form_field_name_surname{
        border-top: 0.8px rgba(0, 0, 0, 0.2) solid;
        padding-top: 20px;
    }
    #box_form_field_dogName{
        padding-bottom: 20px;
    }
}
</style>
</head>

<body>

<html>
    <body>
        <div id="form_container">
            <div id="intro_form_container">
                    <h3 id="intro">You made your decision to adopt one of your dog? <br><br>
                        Please complete the form bellow. We'll contact you back soon.</h3>
                    <p id="intro_text">(Only the field mark with the symbol <span class="requiredSymbol">*</span> are required)</p>
            </div><!-- end intro_form_container -->
                <div id="fields_form_box"><!-- generic box all field form center area -->
    
                    <div id="form_field_dogName_line">
                        <div id="box_form_field_dogName" class="form_fields">
                            <span class="text_field_form"><div><?php echo $lang[$myLang]['adoptdogname'];?>:</div>
                                <span class="requiredSymbol">*</span>
                            </span>
                            <input type="text" name="dogName" class="form_input" id="dogName" value="<?php $_GET['name'] ?>"><!-- required --> 
                            <input type="text" name="dogId" class="form_input" id="dogId" value="<?php $_GET['id'] ?>">
                        </div><!-- box_form_field_dogName --> 
                    </div><!-- end form_field_dogName_line --> 
                    
                    <div id="form_field_name_surname_line">
                        <div id="box_form_field_name_surname" class="form_fields">
                            <span class="text_field_form" id="nameTextField"><div><?php echo $lang[$myLang]['adoptname'];?>:</div>
                                <span class="requiredSymbol">*</span>
                            </span>
                            <input type="text" name="name" class="form_input" id="name"><!-- required --> 
                            
                            <!-- <span class="text_field_form">Surname
                                <span class="requiredSymbol">*</span>
                            </span>
                            <input type="text" name="surname" class="form_input" id="surname"><!-- required --> 
                        <!-- </div>box_form_field_name_surname 
                    </div>end form_field_name_surname_line  -->
                
                    <div id="form_field_phone_line">
                        <div class="form_fields">
                            <span class="text_field_form" id="phoneTextField"><div><?php echo $lang[$myLang]['adoptphone'];?>:</div></span>
                            <input type="tel" name="phone" class="form_input" id="phone"><!-- optionnal --> 
                        </div><!-- end phone --> 
                    </div><!-- end form_field_phone_line -->    

                    <di id="form_field_mail_line">
                        <div class="form_fields">
                            <span class="text_field_form" id="emailTextField"><div><?php echo $lang[$myLang]['adoptemail'];?>:</div>
                                <span class="requiredSymbol">*</span>
                            </span>
                            <input type="email" name="email" class="form_input" id="email"><!--optionnal --> 
                        </div><!-- end email -->
                    </div><!-- form_field_mail_line -->    

                    <di id="form_field_adress_line">
                        <div class="form_fields">
                            <span class="text_field_form"><div><?php echo $lang[$myLang]['adoptaddress'];?>:</div>
                                <span class="requiredSymbol">*</span>
                            </span>
                            <input type="text" name="adress" class="form_input" id="adress"><!-- required --> 
                        </div><!-- end adress -->
                    </div><!-- form_field_adress_line -->    

                    <di id="form_field_zipcode_line">
                        <div class="form_fields">
                            <span class="text_field_form"><div><?php echo $lang[$myLang]['adoptzip'];?>:</div>
                                <span class="requiredSymbol">*</span>
                            </span>
                            <input type="text" name="zipcode" class="form_input" id="zipCode"><!-- required --> 
                        </div><!-- end adress -->
                    </div><!-- form_field_adress_line -->    

                    <!-- <di id="form_field_country_line">
                        <div class="form_fields">
                            <span class="text_field_form">Country
                                <span class="requiredSymbol">*</span>
                            </span>
                            <input type="text" name="Country" class="form_input" id="country"><!-- required --> 
                        </div><!-- end adress -->
                    </div><!-- form_field_adress_line -->

                </div><!-- fields_form_box -->        
                <input type="button" value="<div><?php echo $lang[$myLang]['submitmessage'];?>: + response[i].submitmessage + </div>" id="submitButton" onclick="fieldsVerification()">
        </div><!-- from container -->


<!-- sendadoptionform.php DB:adoption
        receive: dogtoadopt, nameoftheadopter, emailoftheadopter, phoneoftheadopter, addressoftheadopter, zipcodeoftheadopter
            value: TBD
                return: (nothing)
                    #TODO All checking for the right info by JS
                    no useless requests for DB -->

</body>

<script>
    function fieldsVerification() {
    
    var dogIdElem = document.querySelector("#dogId");
    var userNameElem = document.querySelector("#name");
    // var userSurnameElem = document.querySelector("#surname");
    var userPhoneElem = document.querySelector("#phone"); //optionnal
    var userEmailElem = document.querySelector("#email");
    var userAdressElem = document.querySelector("#adress");
    var userZipCodeElem = document.querySelector("#zipCode");
    // var userCountryElem = document.querySelector("#country");
        var dogId = dogIdElem.value;
        var userName = userNameElem.value;
        // var userSurname = userSurnameElem.values;
        var userPhone = userPhoneElem.value;
        var userEmail = userEmailElem.value;
        var userAdress = userAdressElem.value;
        var userZipCode = userZipCodeElem.value;
        // var userCountry = userCountryElem.value;
        if  ((dogName === "") && (dogName.length >= 1) ||
            (userName === "") && (userName.length >= 1) ||
            // (userSurname === "") && (userSurname.length >= 1) ||
            (userEmail === "") && (userEmail.length > 8) ||
            (userAdress === "") && (userAdress.length >= 3) ||
            (userZipCode === "") && (userZipCode.length >= 2)) {
            // (userCountry === "") && (userCountry.length >= 3)) { 
                alert("Please complete all required fields.");
                
                } else if(!isNaN(userName) ) { 
                    alert("Please insert only letter as name.");
                
                // } else if (!isNaN(userSurname) ) {
                //     alert("Please insert only letter as surname");
                    
                } else if (userPhone !== "" && userPhone < 20) { 
                    alert("Please insert a number that is less than 20 characters.");
                            
                } else if (userEmail.indexOf("@") === -1 || userEmail.indexOf(".") === -1) { /* true */
                    alert("Please check the format of your email adress");
                // } else if (userCountry !== "" && !isNaN(userCountry) ) { 
                //     alert("Please insert only letter as country.");
        } else {
            sendInfo();
            alert("Thank you!");
          }
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "sendadoptionform.php");
        
        var adoptInfoForm = {
                            nameoftheadopter: userName
                                // , "XXX": "userSurname"
                            , phoneoftheadopter: userPhone
                            , emailoftheadopter: userEmail
                            , addressoftheadopter: userAdress
                            , zipcodeoftheadopter: userZipCode
                            // , "XXX": "userCountry"
                            , dogtoadopt: dogId
                            }; 
        var forSend = JSON.stringify(adoptInfoForm);
        xhttp.send(forSend);
};
</script>


<noscript>
    alert("Your browser does not support JavaScript!");
</noscript>

</html>