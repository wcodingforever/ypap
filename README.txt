#DatabaseTables
    Dogs: id|name|gender("male", "female")|age(NULL)|spayed|weight|breed(NULL)|arrivaldate(DEFAULT NOW())|notes(NULL/155)|picture(NULL/1000)|status|

    Stories: id|uploaddate|content(1000)|picture(1000)|
    mappingmultiple: id|storyid|dogid|

    flightbuddy: id|name|flightdate|destination|phone|email|

    mailinglist: id|name|email|

    donations: id|name|email|donatetime|amount|

    fosterform: id|pickupdate(NOW())|dropoffdate|name|phone|email|address|preferences|

    volunteerform: id|name|phone|email|worktype(NULL)|preferences(NULL)|availability|

    