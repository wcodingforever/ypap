<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        .storytextwrapper {
            display: inline-block;
            padding: 10px;
        }
        .storytitle {
            font-size: 1.2em;
            font-weight: bold;
        }
        .storydate {
            font-size: 0.6em;
            font-weight: lighter;
            margin: 0 0 0 10px;
        }
        .storyimagewrapper {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .storyimage {
            max-width: 90%;
            max-height: 90%;
            margin: 10px;
        }
        .divider {
            width: 100vw;
            border: 1px solid rgb(190, 190, 190);
        }
        #showmore {
            padding: 10px 20px 10px 20px;
            border: 1px solid grey;
            float: right;
            margin: 10px 30px 10px 0;
            border-radius: 5px;
            background-color: lightblue;
            font-size: 1em;
        }
        @media screen and (min-width: 481px) {
            .storyimage {
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
        <!-- <div class="storytextwrapper">
            <div class="storyimagewrapper"><img class="storyimage" src ="https://ypaprescue.files.wordpress.com/2017/03/slide3-e1489734714235.jpg"></div>
            <div class="storytitle">Title here<span class="storydate">Date here</span></div>
            This spam is spam a spam long spam body spam of spam text spam serving spam as spam the spam venerable spam placeholder spam for spam the spam stories spam of spam the spam dogs! Trying spam to spam pad spam this spam out spam as spam much spam as spam possible spam to spam get spam a spam good spam feel spam for spam the spam look spam of spam the spam page. By spam spamming spam the spam page spam with spam spam spam like spam the spam spam spam spouting spam spammers spam of spam yore, spam back spam in spam the spam days spam when spam spam spam was just spam a spam word spam for spam the spam tinned spam meat spam.
        </div>
        <div class="divider"></div> -->
    </div>
    <input type="button" id="showmore" value="Older entries">
    <script>
        var thePageBody = document.querySelector("#everythingwrapper"); //Selects the body of the page, which will be populated with new stories
        var showMoreButtonElem = document.querySelector("#showmore"); //Selects the 'show more' button
        function getStoriesInitial() {
            var storyGetter = new XMLHttpRequest();
            storyGetter.onreadystatechange = function () {
                if (storyGetter.readyState === 4 && storyGetter.status === 200) {
                    var entryStr = storyGetter.responseText;
                    var gottenStories = JSON.parse(entryStr);
                    for (var i = 0; i < gottenStories.length; i++) {
                        var thisStory = gottenStories[i];
                        thePageBody.innerHTML += "<div class='storytextwrapper' 'beaconforstorygetnum'><div class='storyimagewrapper'><img class='storyimage' src ='" + thisStory.picture + "'></div><div class='storytitle'>" + thisStory.id + "<span class='storydate'>" + thisStory.date + "</span></div>" + thisStory.content + "</div><div class='divider'></div>"
                        //This adds the picture, id, date, and content from the backend!
                    };
                };
            };
            storyGetter.open("POST", "getdogstories.php");
            var forSend = {
                initialrequest: "yes"
            };
            forSend = JSON.stringify(forSend);
            storyGetter.send(forSend);
        }
        getStoriesInitial(initialrequest.yes);
        //The js will get stories from the back end and put them up in the body, starting with the most recent entries
        function getStoriesAgain() {
            var beaconWords = document.querySelectorAll(".beaconforstorygetnum");
            var numForSend = beaconWords.length;
            var storyGetterAgain = new XMLHttpRequest();
            storyGetterAgain.onreadystatechange = function () {
                if (storyGetterAgain.readyState === 4 && storyGetterAgain.status === 200) {
                    var entryStr = storyGetterAgain.responseText;
                    var gottenStories = JSON.parse(entryStr);
                    for (var i = 0; i < gottenStories.length; i++) {
                        var thisStory = gottenStories[i];
                        thePageBody.innerHTML += "<div class='storytextwrapper' 'beaconforstorygetnum'><div class='storyimagewrapper'><img class='storyimage' src ='" + thisStory.picture + "'></div><div class='storytitle'>" + thisStory.id + "<span class='storydate'>" + thisStory.date + "</span></div>" + thisStory.content + "</div><div class='divider'></div>"
                        //This adds the picture, id, date, and content from the backend!
                    };
                };
            };
            storyGetterAgain.open("POST", "getdogstories.php");
            var forSend = {
                initialrequest: numForSend
            };
            storyGetterAgain.send(forSend);
        }
        showMoreButtonElem.addEventListener("click", getStoriesAgain(initialrequest.numForSend));
        //This button sends yet more requests to the back. The number being sent is the number of stories already on the page.
    </script>
</body>
</html>