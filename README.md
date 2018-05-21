     /\_____/\
     |  o o  |
    __\__^__/__
   (__/     \__)
    _|   .   |_
   (__\_____/__)


# Database Setup
    Navigate your terminal (or Windows command prompt) to the back/sql folder. Then type:

    `mysql -u<user> -p < createDb.sql`
    `mysql -u<user> -p dogadoptions < dogadoptions-tables.sql`
    `mysql -u<user> -p dogadoptions < dogadoptions-data.sql`

# DatabaseTables
    dogs: id|name|gender("male", "female")|age|spayed|weight|breed(NULL)|arrivaldate(DEFAULT NOW())|notes(NULL/1000)|picture(NULL/1000)|status|
        -age is varchar ('Adult', 'puppy', 10, etc.)
        -when there are no information it returns 'null'
    
    stories: id|uploaddate|content(2000)|picture(1000)|
    mappingmultiple: id|storyid|dogid|

    flightbuddy: id|name|flightdate|destination|phone|email|

    mailinglist: id|name|email|

    donations: id|name|email|donatetime|amount|

    fosterform: id|pickupdate(NOW())|dropoffdate|name|phone|email|address|preferences|

    volunteerform: id|name|phone|email|worktype(NULL)|preferences(NULL)|availability|

    adoption: id|dogid|name|email|phone|address|zip|submittime|

    sqldata: sample Data added for dogs and stories


# php API
    #TODO adjust db nulls/datatypes

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
        #ask Ilya about initial request
        receive: initialrequest
            value: yes
                return: id, content, picture, uploaddate (LIFO)LIM5
        receive: initialrequest
            value: (number)
                return: id, content, picture, uploaddate (LIFO)LIM((number,number+5)
        READ console for mistakes
    
    donorinfo.php DB:donations
        receive: namewhodonated, emailwhodonated, howmuhdonated, currency
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

    sendadoptionform.php DB:adoption
        receive: dogtoadopt, nameoftheadopter, emailoftheadopter, phoneoftheadopter, addressoftheadopter, zipcodeoftheadopter
            value: TBD
                return: (nothing)
                    #TODO All checking for the right info by JS
                    no useless requests for DB


# Front end: 
    #Standarts:
        - @media screen and (max-width: 481px) inside modible version
        - 

    donations.html
        #TODO Title adjust

        