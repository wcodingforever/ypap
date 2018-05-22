<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- TITLE FOR DONATE -->
    <title>Donate!</title>
    <style>
        /* *{
            outline: 1px solid blue;
        } */
        input{
            width: 350px;
            height: 40px;
        }
        body {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
        }
        img {
            max-width: 100%;
            max-height: 100%;
        }
        #everythingwrapper {
            display: flex;
            justify-content: center;
        }
        #paypaldonate img{
            cursor: pointer;
        }
        @media screen and (max-width: 481px){
        }
    </style>
</head>
<body>
    <div id="everythingwrapper">
        <div id="flightbuddyimage"><img src="https://ypaprescue.files.wordpress.com/2017/03/slide3-e1489734714235.jpg"></div>
        <!-- Below is the text taken straight from the YPAP page. -->
        <div id="text">
            The most effective way you can make a difference in the lives of these dogs is by sponsoring one. You can eliminate one or more animal’s pain and suffering today through a monthly sponsorship. You can make a direct, personal, and positive impact by sponsoring a dog today.
        </div>
    </div>
    <div>
        <div class="inputwrapper" id="donationnamediv">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['donationname'];?>: + response[i].donationname + </div></div>
            <input type="text" placeholder="Leave the field empty if you want to donate anonymously">
        </div>
        <div class="inputwrapper" id="donationemaildiv">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['donationemail'];?>: + response[i].donationemail + </div></div>
            <input type="text" placeholder="Leave the field empty if you want to donate anonymously">
        </div>
        <div class="inputwrapper" id="donationamountdiv">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['donationamount'];?>: + response[i].donationamount + </div></div>
            <input type="text" placeholder="1.00">
        </div>
        <div class="inputwrapper" id="donationcurrencydiv">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['donationcurrency'];?>: + response[i].donationcurrency + </div></div>
            <select id="donationcurrency">
                <option>USD</option>
                <option>KRW</option>
                <option>EUR</option>
            </select>
        </div>
        <div id="donatebuttonwrapper"><button><div><?php echo $lang[$myLang]['donatebutton'];?>: + response[i].donatebutton + </div></button></div>
        <div id="paypaldonate">Or donate with a PayPal<br>
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EP3GTQ4M9YPZU"><img src="https://i2.wp.com/deadlaugh.com/wp-content/uploads/2017/03/PayPal-Donate-Button-High-Quality-PNG.png"></a>
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
                    alert("If not anonynously fill out both name and email");
                }
            }
        });
        
    </script>
</body>
</html>