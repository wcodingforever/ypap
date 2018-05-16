#DatabaseTables
    dogs: id|name|gender("male", "female")|age(NULL)|spayed|weight|breed(NULL)|arrivaldate(DEFAULT NOW())|notes(NULL/155)|picture(NULL/1000)|status|

    stories: id|uploaddate|content(1000)|picture(1000)|
    mappingmultiple: id|storyid|dogid|

    flightbuddy: id|name|flightdate|destination|phone|email|

    mailinglist: id|name|email|

    donations: id|name|email|donatetime|amount|

    fosterform: id|pickupdate(NOW())|dropoffdate|name|phone|email|address|preferences|

    volunteerform: id|name|phone|email|worktype(NULL)|preferences(NULL)|availability|

    --------------------------------------------
#php API
    #TODO adjust db nulls/datatypes
    #TODO bridge with frontend(var)/db
    #TODO sendadoptionform.php?

    getdogprofile.php DB:dogs
        receive: whattoget
            value: sample
                return: .id, .picture, .name (LIFO)LIM15
        receive: whattoget
            value: all
                return: .id, .name, .gender, .age, 
                    .spayed, .weight, .breed, 
                    .arrivaldate, .notes, .picture, (FIFO)

    getdogstories.php DB:stories
        receive: initialrequest
            value: yes
                return: id, content, picture (LIFO)LIM5
        receive: initialrequest
            value: (any)
                return: id, content, picture (LIFO)LIM(5,15)
    
    donorinfo.php DB:donations
        receive: namewhodonated, emailwhodonated, howmuhdonated
            value: TBD
                return: (nothing)
                    #TODO All checking for the right info by JS
                    no useless requests for DB
    
    mailingsignupinfo.php DB:mailinglist
        receive: whosubscribed, emailwhosubscribed
            value: TBD 
                return: (nothing)
                    #TODO All checking for the right info by JS
                    no useless requests for DB

    sendadoptionform.php DB:

    