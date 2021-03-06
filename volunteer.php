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
    @media screen and (max-width: 481px){
        body{
            height: 4000px;
        } 
        div#textBox{
            margin: 1em 1.2em;
        }
        div.text{
            margin: 0;
            margin-right: 2.3em;
        }
        img#hero_wrapper{
            position: relative;
            top: 0em;
            left: -9.2em;
            width: 91%;
        
        }
        div#wrapper{
            position: relative;
            top: -12em;
        }
        #form{
            margin: 0;
        }
        div#form_title{
            margin-bottom: 1em;
            font-size: 1.6em;
        }
        div#inputContainer{
            width: auto;
            padding: 1em 2em;
        }
        select#chooseLang {
            padding : 2px;
        }
    }
    body{
        margin: 0;
    }
    #hero_wrapper{
        width: 35%;
        position: absolute;
        margin-left: 35%;
    }
    #donateTitle{
        color: blue;
    }
    a{
        color: blue;
        cursor: pointer;    
    }
    #main_title{
        font-size: 2.4em;
        font-weight: 600;
        margin-bottom: 1em;
    }
    .title{
        font-size: 1.8em;
        font-weight: bold;
        margin: 0.5em 0em;
    }
    #textBox{
        margin: 1.2em 13em;
    }
    .text{
        border-bottom: 1px solid #dbdbdb;
    }
    #wrapper{
        background: white;
        position: relative;
        top: 19em;
        padding-top: 1em;
        margin-bottom: 11em;
    }
    form span{
    color: blue; 
    }
    #workTypes label{
        color: #b30ab3;
        font-weight: bold;
    }
    form{
        /* width: */
        display: flex;
        flex-direction: column;
        margin-top: 4em;
    }
    .field{
        margin: 1em 0em;
    }
    .f_title{
        margin-bottom: 0.3em;
        font-weight: bold;
    }
    #workType_text{
        margin-bottom: 0.6em;
    }
    #form_title{
        margin-bottom: 2.2em;
        color: blue;
    }
    .DT{
        display: inline-block;
        margin-right: 3em;
        margin-top: 0.5em;
    }
    #submitButton{
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
    #inputContainer, input, select{
        border-radius: 3px;
        padding: 7px;
        margin: 12px 0px 10px 10px;
        border: 1px solid grey;

    }
    #countryCode{
        width: 10em;
    }
    input[type='text'], input[type='email'], input[type='date'], input[type='tel']{
        width: 16em;
    }
    #required{
        color: red;
        font-size: 0.8em;
    }
</style>
</head>
<body>
    <?php include 'navbar.php';?>
    <img id="hero_wrapper" src="https://ypaprescue.files.wordpress.com/2017/03/img_5209.jpg?w=1230&#038;h=1230&#038;crop=1">
    <div id="wrapper">
        <div id="textBox">
            <div id="main_title">Want to get involved?</div>

            <!--****The url of the "Contact us" is required!!Contact us'll lead to the Contact us page!***-->
            <div class="text">
                <div class="title">Cleaning</div>

                <p>Anyone living locally, please join us at the pound in Yongin City, about 45 minutes outside of Seoul. 
                    You don’t have to have experience, all you need is common sense and a love of animals! 
                    The reward you will feel from helping an animal will be guaranteed to stay with you forever.
                </p>

                <p>Every month we organtize volunteer trips to clean the pound. We rely heavily on volunteers 
                    to make the life of the animals more comfortable.
                </p>

                <p>Additionally, our goal is to spread the word about the dogs and get them adopted!</p>

                <p>When volunteers come see and spend time with the animals they are more likely to share their photos and information. 
                    Please help us find homes for the dogs by telling your friends, family, and coworkers about animals they may be interested in.
                </p> 

                <b>Cleaning sessions usually last between 10am to 1pm.</b>

                <p>See about our latest cleaning session on <a href="https://www.facebook.com/ForBonnies/">FACEBOOK</a>.</p>
            </div>

        
            <div class="text">
                <div class="title">Driving</div>
                <p>YPAP is always seeking drivers to assist with transporting dogs around the Seoul area.</p>
                <p>We need drivers who can help us transport dogs from the pound to foster homes, to the vet, and sometimes to the airport.</p>
                <p>If you have a valid driving license and would be willing to help, please <a href="contactus.php">Contact Us</a>.</p>
            </div>


            <div class="text">
                <div class="title">Administration</div>
                <p>YPAP takes a lot of time and energy to run!</p>

                <p>We are looking for people who can help us process and organize the foster and adoption applications, as well as arranging pound visits, fundraising, or volunteer sessions.</p>

                <p>If you are interested in getting involved in the admin side of YPAP, please <a href="contactus.php">Contact Us.</a></p>
            </div>

            <div class="text">
                <div class="title">Courier</div>
                <p>Couriers are people flying internationally who are willing to check in a dog under their name at the airport.</p>
                <p>The pound will arrange everything and there is <b>no cost</b> to you.</p>
                <p>Usually only <b>DIRECT</b> flights work for sending an animal on a plane due to long flight times and airline regulations.</p>
                <p>If you are not flying direct, please let us know and we can try to arrange a dog to fly IN CABIN with you, under the seat.</p>
                <p>Most commonly we need flights to SFO, LAX, JFK, SEA, ORD, IAD, YVR, YYZ, VIE, MUC.</p>
                <p>If you are flying in the future, please <a href="contactus.php">Contact Us.</a></p>
            </div>

            <div class="text">
                <div class="title">Donate</div>
                <p>Donations made to YPAP go entirely towards helping as many abandoned animals as we can.</p>

                <p>Monetary donations are used to pay for vaccinations, medical treatment, and airfare for freedom flights.</p>

                <p>
                    <b>Bank Transfer Account: KEB Hana Bank 247-910198-85807</b>
                    <a><b>Via Paypal: ypapypap@gmail.com</b></a>
                </p>

                <p>Not just money is needed! You can donate old blankets (without stuffing), towels, dog food, newspapers, and cleaning supplies.</p>

                <p>If you would like to send a care parcel to the pound, please <a href="contactus.php">Contact Us</a> for the address.</p>
            </div>

            <div class="text">
                <div class="title">Other Opportunities</div>
                <p>You may also chose to raise funds for a specific mission or do a general fundraiser in support of the dogs in Korea.</p>

                <p>You can do a simple fundraiser or use an upcoming activity or event. Many YPAP supporters raise funds by:</p>
                <ul>
                    <li>Running a marathon or participating in another sporting event.</li>
                    <li>Selling homemade cookies.</li>
                    <li>“Giving up” their birthday and asking their birthday and asking friends and family to make a donation in lieu of a gift.</li>
                    <li>Establishing a virtual wedding registry with wedding gifts given in the form of donations.</li>
                    <li>Or most often simply telling YPAP’s story and asking friends and family to join in helping the dogs.</li>
                </ul>
            </div>

            <form id="form">
                <div id="inputContainer">
                    <div class="title" id="form_title">
                        Want to participate? <br> Please write a form.
                    </div>
                    <div class="field"><span class="f_title"><div><?php echo $lang[$myLang]['volunteername'];?>: </div> </span> <input id="name" name="name" type="text"><span id="required"> *</span></div>
                    <div class="field"><span class="f_title"><div><?php echo $lang[$myLang]['fosterphone'];?>: </div></span>
                        <!-- country codes (ISO 3166) and Dial codes. -->
                        <select name="phone" id="countryCode">
                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                        	<option data-countryCode="US" value="1" selected>USA (+1)</option>
                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                        	<option data-countryCode="DZ" value="213">Algeria (+213)</option>
                        	<option data-countryCode="AD" value="376">Andorra (+376)</option>
                        	<option data-countryCode="AO" value="244">Angola (+244)</option>
                        	<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                        	<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                        	<option data-countryCode="AR" value="54">Argentina (+54)</option>
                        	<option data-countryCode="AM" value="374">Armenia (+374)</option>
                        	<option data-countryCode="AW" value="297">Aruba (+297)</option>
                        	<option data-countryCode="AU" value="61">Australia (+61)</option>
                        	<option data-countryCode="AT" value="43">Austria (+43)</option>
                        	<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                        	<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                        	<option data-countryCode="BH" value="973">Bahrain (+973)</option>
                        	<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                        	<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                        	<option data-countryCode="BY" value="375">Belarus (+375)</option>
                        	<option data-countryCode="BE" value="32">Belgium (+32)</option>
                        	<option data-countryCode="BZ" value="501">Belize (+501)</option>
                        	<option data-countryCode="BJ" value="229">Benin (+229)</option>
                        	<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                        	<option data-countryCode="BT" value="975">Bhutan (+975)</option>
                        	<option data-countryCode="BO" value="591">Bolivia (+591)</option>
                        	<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                        	<option data-countryCode="BW" value="267">Botswana (+267)</option>
                        	<option data-countryCode="BR" value="55">Brazil (+55)</option>
                        	<option data-countryCode="BN" value="673">Brunei (+673)</option>
                        	<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                        	<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                        	<option data-countryCode="BI" value="257">Burundi (+257)</option>
                        	<option data-countryCode="KH" value="855">Cambodia (+855)</option>
                        	<option data-countryCode="CM" value="237">Cameroon (+237)</option>
                        	<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                        	<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                        	<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                        	<option data-countryCode="CL" value="56">Chile (+56)</option>
                        	<option data-countryCode="CN" value="86">China (+86)</option>
                        	<option data-countryCode="CO" value="57">Colombia (+57)</option>
                        	<option data-countryCode="KM" value="269">Comoros (+269)</option>
                        	<option data-countryCode="CG" value="242">Congo (+242)</option>
                        	<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                        	<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                        	<option data-countryCode="HR" value="385">Croatia (+385)</option>
                        	<option data-countryCode="CU" value="53">Cuba (+53)</option>
                        	<option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                        	<option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                        	<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                        	<option data-countryCode="DK" value="45">Denmark (+45)</option>
                        	<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                        	<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                        	<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                        	<option data-countryCode="EC" value="593">Ecuador (+593)</option>
                        	<option data-countryCode="EG" value="20">Egypt (+20)</option>
                        	<option data-countryCode="SV" value="503">El Salvador (+503)</option>
                        	<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                        	<option data-countryCode="ER" value="291">Eritrea (+291)</option>
                        	<option data-countryCode="EE" value="372">Estonia (+372)</option>
                        	<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                        	<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                        	<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                        	<option data-countryCode="FJ" value="679">Fiji (+679)</option>
                        	<option data-countryCode="FI" value="358">Finland (+358)</option>
                        	<option data-countryCode="FR" value="33">France (+33)</option>
                        	<option data-countryCode="GF" value="594">French Guiana (+594)</option>
                        	<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                        	<option data-countryCode="GA" value="241">Gabon (+241)</option>
                        	<option data-countryCode="GM" value="220">Gambia (+220)</option>
                        	<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                        	<option data-countryCode="DE" value="49">Germany (+49)</option>
                        	<option data-countryCode="GH" value="233">Ghana (+233)</option>
                        	<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                        	<option data-countryCode="GR" value="30">Greece (+30)</option>
                        	<option data-countryCode="GL" value="299">Greenland (+299)</option>
                        	<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                        	<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                        	<option data-countryCode="GU" value="671">Guam (+671)</option>
                        	<option data-countryCode="GT" value="502">Guatemala (+502)</option>
                        	<option data-countryCode="GN" value="224">Guinea (+224)</option>
                        	<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                        	<option data-countryCode="GY" value="592">Guyana (+592)</option>
                        	<option data-countryCode="HT" value="509">Haiti (+509)</option>
                        	<option data-countryCode="HN" value="504">Honduras (+504)</option>
                        	<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                        	<option data-countryCode="HU" value="36">Hungary (+36)</option>
                        	<option data-countryCode="IS" value="354">Iceland (+354)</option>
                        	<option data-countryCode="IN" value="91">India (+91)</option>
                        	<option data-countryCode="ID" value="62">Indonesia (+62)</option>
                        	<option data-countryCode="IR" value="98">Iran (+98)</option>
                        	<option data-countryCode="IQ" value="964">Iraq (+964)</option>
                        	<option data-countryCode="IE" value="353">Ireland (+353)</option>
                        	<option data-countryCode="IL" value="972">Israel (+972)</option>
                        	<option data-countryCode="IT" value="39">Italy (+39)</option>
                        	<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                        	<option data-countryCode="JP" value="81">Japan (+81)</option>
                        	<option data-countryCode="JO" value="962">Jordan (+962)</option>
                        	<option data-countryCode="KE" value="254">Kenya (+254)</option>
                        	<option data-countryCode="KI" value="686">Kiribati (+686)</option>
                        	<option data-countryCode="KP" value="850">Korea North (+850)</option>
                        	<option data-countryCode="KW" value="965">Kuwait (+965)</option>
                        	<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                        	<option data-countryCode="LA" value="856">Laos (+856)</option>
                        	<option data-countryCode="LV" value="371">Latvia (+371)</option>
                        	<option data-countryCode="LB" value="961">Lebanon (+961)</option>
                        	<option data-countryCode="LS" value="266">Lesotho (+266)</option>
                        	<option data-countryCode="LR" value="231">Liberia (+231)</option>
                        	<option data-countryCode="LY" value="218">Libya (+218)</option>
                        	<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                        	<option data-countryCode="LT" value="370">Lithuania (+370)</option>
                        	<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                        	<option data-countryCode="MO" value="853">Macao (+853)</option>
                        	<option data-countryCode="MK" value="389">Macedonia (+389)</option>
                        	<option data-countryCode="MG" value="261">Madagascar (+261)</option>
                        	<option data-countryCode="MW" value="265">Malawi (+265)</option>
                        	<option data-countryCode="MY" value="60">Malaysia (+60)</option>
                        	<option data-countryCode="MV" value="960">Maldives (+960)</option>
                        	<option data-countryCode="ML" value="223">Mali (+223)</option>
                        	<option data-countryCode="MT" value="356">Malta (+356)</option>
                        	<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                        	<option data-countryCode="MQ" value="596">Martinique (+596)</option>
                        	<option data-countryCode="MR" value="222">Mauritania (+222)</option>
                        	<option data-countryCode="YT" value="269">Mayotte (+269)</option>
                        	<option data-countryCode="MX" value="52">Mexico (+52)</option>
                        	<option data-countryCode="FM" value="691">Micronesia (+691)</option>
                        	<option data-countryCode="MD" value="373">Moldova (+373)</option>
                        	<option data-countryCode="MC" value="377">Monaco (+377)</option>
                        	<option data-countryCode="MN" value="976">Mongolia (+976)</option>
                        	<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                        	<option data-countryCode="MA" value="212">Morocco (+212)</option>
                        	<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                        	<option data-countryCode="MN" value="95">Myanmar (+95)</option>
                        	<option data-countryCode="NA" value="264">Namibia (+264)</option>
                        	<option data-countryCode="NR" value="674">Nauru (+674)</option>
                        	<option data-countryCode="NP" value="977">Nepal (+977)</option>
                        	<option data-countryCode="NL" value="31">Netherlands (+31)</option>
                        	<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                        	<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                        	<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                        	<option data-countryCode="NE" value="227">Niger (+227)</option>
                        	<option data-countryCode="NG" value="234">Nigeria (+234)</option>
                        	<option data-countryCode="NU" value="683">Niue (+683)</option>
                        	<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                        	<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                        	<option data-countryCode="NO" value="47">Norway (+47)</option>
                        	<option data-countryCode="OM" value="968">Oman (+968)</option>
                        	<option data-countryCode="PW" value="680">Palau (+680)</option>
                        	<option data-countryCode="PA" value="507">Panama (+507)</option>
                        	<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                        	<option data-countryCode="PY" value="595">Paraguay (+595)</option>
                        	<option data-countryCode="PE" value="51">Peru (+51)</option>
                        	<option data-countryCode="PH" value="63">Philippines (+63)</option>
                        	<option data-countryCode="PL" value="48">Poland (+48)</option>
                        	<option data-countryCode="PT" value="351">Portugal (+351)</option>
                        	<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                        	<option data-countryCode="QA" value="974">Qatar (+974)</option>
                        	<option data-countryCode="RE" value="262">Reunion (+262)</option>
                        	<option data-countryCode="RO" value="40">Romania (+40)</option>
                        	<option data-countryCode="RU" value="7">Russia (+7)</option>
                        	<option data-countryCode="RW" value="250">Rwanda (+250)</option>
                        	<option data-countryCode="SM" value="378">San Marino (+378)</option>
                        	<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                        	<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                        	<option data-countryCode="SN" value="221">Senegal (+221)</option>
                        	<option data-countryCode="CS" value="381">Serbia (+381)</option>
                        	<option data-countryCode="SC" value="248">Seychelles (+248)</option>
                        	<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                        	<option data-countryCode="SG" value="65">Singapore (+65)</option>
                        	<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                        	<option data-countryCode="SI" value="386">Slovenia (+386)</option>
                        	<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                        	<option data-countryCode="SO" value="252">Somalia (+252)</option>
                        	<option data-countryCode="ZA" value="27">South Africa (+27)</option>
                        	<option data-countryCode="ES" value="34">Spain (+34)</option>
                        	<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                        	<option data-countryCode="SH" value="290">St. Helena (+290)</option>
                        	<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                        	<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                        	<option data-countryCode="SD" value="249">Sudan (+249)</option>
                        	<option data-countryCode="SR" value="597">Suriname (+597)</option>
                        	<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                        	<option data-countryCode="CH" value="41">Switzerland (+41)</option>
                        	<option data-countryCode="SI" value="963">Syria (+963)</option>
                        	<option data-countryCode="TW" value="886">Taiwan (+886)</option>
                        	<option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                        	<option data-countryCode="TH" value="66">Thailand (+66)</option>
                        	<option data-countryCode="TG" value="228">Togo (+228)</option>
                        	<option data-countryCode="TO" value="676">Tonga (+676)</option>
                        	<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                        	<option data-countryCode="TN" value="216">Tunisia (+216)</option>
                        	<option data-countryCode="TR" value="90">Turkey (+90)</option>
                        	<option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                        	<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                        	<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                        	<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                        	<option data-countryCode="UG" value="256">Uganda (+256)</option>
                        	<option data-countryCode="GB" value="44">UK (+44)</option>
                        	<option data-countryCode="UA" value="380">Ukraine (+380)</option>
                        	<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                        	<option data-countryCode="UY" value="598">Uruguay (+598)</option>
                        	<option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                        	<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                        	<option data-countryCode="VA" value="379">Vatican City (+379)</option>
                        	<option data-countryCode="VE" value="58">Venezuela (+58)</option>
                        	<option data-countryCode="VN" value="84">Vietnam (+84)</option>
                        	<option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                        	<option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                        	<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                        	<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                        	<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                        	<option data-countryCode="ZM" value="260">Zambia (+260)</option>
                        	<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                        	<!-- </otgroup> -->
                        </select> 
                        <input id="phoneNumber" name="phone" type="tel"><span id="required"> *</span>
                    </div>
                    <div class="field"><span class="f_title"><div><?php echo $lang[$myLang]['volunteeremail'];?>: </div></span> <input id="email" name="email" type="email"><span id="required"> *</span></div>
                    <div class="field">
                        <div class="f_title"><span><div><?php echo $lang[$myLang]['volunteertype'];?>: </div></span></div>
                        <div id="workType_text">Please choose 1 or 2 types of work.</div>
                            <div id="workTypes">
                                <label for="cleaning"><div><?php echo $lang[$myLang]['volunteerclean'];?>: </div></label><input id="cleaning" name="workType" type="checkbox" value="cleaning">
                                <label for="driving"><div><?php echo $lang[$myLang]['volunteerdrive'];?>: </div></label><input id="driving" name="workType" type="checkbox" value="driving">
                                <label for="administration"><div><?php echo $lang[$myLang]['volunteeradmin'];?>: </div></label><input id="administration" name="workType" type="checkbox" value="administration">
                                <label for="courier"><div><?php echo $lang[$myLang]['volunteerflight'];?>: </div></label><input id="courier" name="workType" type="checkbox" value="courier">
                                <label for="donate"><div><?php echo $lang[$myLang]['volunteerdonate'];?>: </div></label><input id="donate" name="workType" type="checkbox" value="donate">
                            </div>
                    </div>
                    <div class="field">
                        <div class="f_title"><span><div><?php echo $lang[$myLang]['volunteeravailability'];?>: </div></span></div>
                        <div id="dateContainer">
                            <div>Please let us know when you can join our activities.</div>
                            <div class="DT"><b><div><?php echo $lang[$myLang]['volunteerstart'];?>: </div></b> <input id="availability_startDT" name="availability" type="date"></div>
                            <div class="DT"><b><div><?php echo $lang[$myLang]['volunteerend'];?>: </div></b> <input id="availability_endDT" name="availability" type="date"></div>
                        </div>
                    </div>
                    <br><br>
                    <input id="submitButton" type="button" value=<?php echo $lang[$myLang]['submitmessage'];?>>
                </div>
            </form>
        </div>

    </div>

    
<script>
    var listOfInputOfWorkTypes = document.querySelectorAll("input[type='checkbox']"); 
    
    for(var i = 0; i < listOfInputOfWorkTypes.length; i++){
        var thisWorkType = listOfInputOfWorkTypes[i];
        thisWorkType.addEventListener("change", countSelectedWorkTypes);
    }
    function countSelectedWorkTypes(){
        var listOfInputOfWorkTypes = document.querySelectorAll("input:checked");
        if(listOfInputOfWorkTypes.length > 2){
            alert("You can't select more than 2 types of work.");
            this.checked = false;
        }
    }
    var startDT = document.getElementById("availability_startDT");
    startDT.addEventListener("change", isValidDTRange);
    var endDT= document.getElementById("availability_endDT");
    endDT.addEventListener("change", isValidDTRange);
    function isValidDTRange(){
        if(this.id === "availability_startDT"){
            var startDTObj = new Date(this.value);
            var todayDTObj = new Date();
            if( startDTObj <= todayDTObj){
                alert("Invaild date.  Please select available dates again.");
            } 
        }else{ 
            var startDT = document.getElementById("availability_startDT").value;
            var endDT = this.value;
            //Visitors'll be forced to insert the start date first. 
            if(startDT === ""){
                alert("Please select the start date first.");
                document.getElementById("availability_endDT").value = "";
            }else{
                var startDTObj = new Date(startDT);
                var endDTObj = new Date(endDT);
                if(startDTObj > endDTObj){
                    alert("Invalid period. Please select available dates again.");
                    this.value = "";
                }
            }
        }
    }
    var phoneInput = document.querySelector("input[name='phone']");
    phoneInput.addEventListener("change", isValidPhoneNum);
    //CHK if it is a valid phone number or not!

    function isValidPhoneNum(){
        var phoneInput = this.value;
        //The recommanded format(placeholder) is "0000 - 0000 - 00000";
        //So, to validate the input, remove all "-" and " " in the input!!
        phoneInput = phoneInput.replace(/[ -]/g, ""); 
        phoneInput = Number(phoneInput);
    
        if(!(Number.isInteger(phoneInput))||phoneInput < 0 ){
            alert("Invalid phone number. Please check the phone number.");
        }
    }
    
    var emailInput = document.getElementById("email");
    emailInput.addEventListener("change", isValidEmail);
    function isValidEmail(){
        if( this.value.indexOf("@") === -1){                    
            alert("Invaild email address. Please insert the correct address.");
        }
    }
    var submitButton = document.getElementById("submitButton");
    submitButton.addEventListener("click", sendForm);
    function sendForm(){
        //Check if there is any empty field.
        var name = document.querySelector("input[name = 'name']").value; 
        var countryCode = document.querySelector("#countryCode").value;
        var leftPhoneNum = document.querySelector("input[name = 'phone']").value; 
        var phoneNumber = "";
        var email = document.querySelector("input[name = 'email']").value; 
        var workTypes = document.querySelectorAll("input[name = 'workType']:checked");
        var workType1 = "";
        var workType2 = "";
        var availabilityDTs = document.querySelectorAll("input[name = 'availability']");
        var availability_startDT = availabilityDTs[0].value;
        var availability_endDT = availabilityDTs[1].value;
        var availability = "";
        
        /*Chage the datas to valid datas!
            workType, availibility => one or two..
            1. workType
                *Only workType1 was provided:
                  workType1=> value 
                  workType2 = ""
        
            2. availibility (* period!! Format: xxxx-xx-xx ~ xxxx-xx-xx )
                i)Only availability_startDT were provided:
                availibility => availability_startDT
        
                ii)Both, availability_startDT, availability_endDT were provided:
                availible => availability_startDT ~ availability_endDT
        */
        //1)Phone number; Country code +  the left phone number(in which  all '-', ' '(space) were removed.)
        leftPhoneNum = leftPhoneNum.replace(/[ -]/g, "");
        var phoneNumber = "+" + countryCode + " " +  leftPhoneNum;

        //2)Work type
        if(workTypes.length === 1){
            workType1 = workTypes[0].value;
            workType2 = "";
        
        }else if(workTypes.length === 2){
            workType1 = workTypes[0].value;
            workType2 = workTypes[1].value;
        }
        //3)Availability
        //If two dates were not chosen or same,
        if(availabilityDTs[0].value === availabilityDTs[1].value){
            availability = availability_startDT;
        }
        //If two dates were chosened, 
        else{
            availability = availability_startDT + "~" + availability_endDT;
        }
    
        //In the case where any of the required fields were not inserted..
        if(name === ""||leftPhoneNum === "" || email === ""){
            alert("Please insert all required datas.");
        }
        //If all required data were required, 
        else{
            var obj = {};
            obj.name = name;
            obj.phone = phoneNumber;
            obj.email = email;
            obj.workType1 = workType1;
            obj.workType2 = workType2;
            obj.availability = availability;
        
            var json = JSON.stringify(obj);
            
            var xhr = new XMLHttpRequest();
            var inputContainer = document.getElementById("inputContainer");
            xhr.onreadystatechange = function () {
                if(xhr.readyState === 4 && xhr.status === 200){
                    var response = xhr.responseText;
                    inputContainer.style = "color: red; height: 16em; display: flex; justify-content: center; align-items: center;";
                    if( response === "OK"){
                        inputContainer.innerHTML = "Thank you for applying! We'll contact you soon.";
                    }else{
                        inputContainer.innerHTML = "ERORR: Failed to store user data. Please try again.";
                    }
                }
            }
            xhr.open("POST", "back/sendvolunteerform.php");
            xhr.send(json);
        }
    }
</script>
</body>
</html>