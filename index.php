<!DOCTYPE html>
<html>
    <head>
        <title>The Hague Dental Care</title>
        
        <link rel='stylesheet' type='text/css' href='css/stylesheet.css'/>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

        <script type="text/javascript" src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
        <script type="text/javascript" src="js/slideshow.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/popup.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Stalemate' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
        
        <link rel="icon" type="image/gif" href="images/Check.gif">
        
    </head>
    
    <body>
    
    <!-- Language settings
    =====================================================-->
    <?php
        // Obtain the desired language
        $language = "en_US";
        if(isset($_GET['language'])) $language = $_GET['language'];
        putenv("LANG=$language"); 
        setlocale(LC_ALL, $language);

        // Set the text domain as 'messages'
        $domain = 'messages';
        bindtextdomain($domain, getcwd()."/locale"); 
        textdomain($domain);
    ?>
    <!-- Back to Top
    =====================================================-->
    
    <div id="back_top">
        <div id="back_top_content">
            <div id="back_top_container"><a href="#top"><span></span><?php echo gettext("Back to Top")?></a></div>
        </div>
    </div>
    
    <!-- Appointment Popup (opens when menu option is clicked or appointment button is clicked)
    =====================================================-->
    
    <div id="toPopup">
        <div class="close"></div>
        <div class="popup_content">
            <span><?php echo gettext("Coming soon...")?></span> <?php echo gettext("Make your appointment online!")?><br><br>
            <?php echo gettext("For the time being, please call 070-2000193 to make an appointment.")?><br><br>
            <?php echo gettext("Please bring with you to your first appointment a valid identity card, and in case you have any medical limitations, a letter from your family doctor.")?>  
        </div>
    </div>

    <div id="mapsPopup">
        <div class="close"></div>
        <div id="map_canvas"></div>
    </div>

    <div id="backgroundPopup"></div>
    
    <!-- Header 
    =====================================================-->
    
        <div id="header">
        
        <div id="header_content">
        
            <!-- <span id="header_logo"><img src="images/Tooth.gif">The Hague Dentist</span> -->
            
            <span id="header_location" class="container"><a id="header_location_a" href="#location"><?php echo gettext("Location")?></a></span>
            
            <span class="separator">|</span>
            
            <span id="header_openinghours" class="container"><a id="header_openinghours_a" href="#openinghours"><?php echo gettext("Opening Hours")?></a></span>
            
            <span class="separator">|</span>
            
            <span id="header_requestappointment" class="container"><a class="topopup" id="header_requestappointment_a" href="#requestappointment"><?php echo gettext("Make an Appointment")?></a></span>
            
            <span class="separator">|</span>
                
            <span id="header_aboutus" class="container"><a id="header_aboutus_a" href="#aboutus"><?php echo gettext("About Us")?></a></span>
                
            <span class="separator">|</span>
            
            <span id="header_payment" class="container"><a id="header_payment_a" href="#payment"><?php echo gettext("Payment and Billing")?></a></span>
            
            <span class="separator">|</span>
             
            <span id="header_english" class="container"><a id="header_english_a" href="index.php?language=en_US">EN</a></span>
            
            <span id="header_dutch" class="container"><a id="header_dutch_a" href="index.php?language=nl_NL">NL</a></span>
            
        </div>
        
        </div>
        
        <div id="topsection">
    
    <!-- Left Block on top (title, reasons and appointment button) 
    =====================================================-->
        
        <div id="leftblock">
        
            <div id="title">
        
                <div id="title_main">The Hague Dental Care</div>
            
                <div id="title_address">
                Muzenplein 91, 2511GD, <?php echo gettext("The Hague")?><br>
                Tel: 070-2000193
                </div>
        
            </div>
        
            <div id="reasons">
            
                <div id="reason_1"><img src="images/check.gif"> <?php echo gettext("Flexible working hours")?></div>
            
                <div id="reason_2"><img src="images/check.gif"> <?php echo gettext("Great location")?></div>
            
                <div id="reason_3"><img src="images/check.gif"> <?php echo gettext("Personal treatment")?></div>
            
                <div id="reason_4"><img src="images/check.gif"> <?php echo gettext("Serene environment")?></div>
            
            </div>
        
            <div id="appointment">
            
                <div id="appointment_content"><a href="#" id="appointment_a" class="topopup"><?php echo gettext("Make an Appointment")?></a></div>

            </div>
        
        </div>
        

    <!-- Right block on top (slide show)
    ====================================-->
    
        <div id="rightblock">
        
            <div id="Fader" class="fader">
                <img class="slide" src="images/pics-homepage1.jpg">
                <img class="slide" src="images/pics-homepage2.jpg">
                <img class="slide" src="images/pics-homepage3.jpg">
                <div class="fader_controls">
                </div>
            </div>
            
        </div>
        
        </div>
        

    
        
        
    <!-- Opening Hours and Location
    ====================================-->
    
        
        <div class="separator"></div>
        
        <div id="openinghourslocation">
        
            <div id="location">
                <div id="location_title"><!-- <a class="mapspopup" href="#"><img id="location_content_img" src="images/googlemaps.png"></a>--> <?php echo gettext("Location")?></div>
        
                <div id="location_content">
                Muzenplein 91, 2511GD, <?php echo gettext("The Hague")?><br><br>
                <b><?php echo gettext("By public transport")?></b><br>
                <?php echo gettext("3 minutes walk from The Hague Central Station")?><br>
                <?php echo gettext("Tram lines: 3, 4, 9, 15, 16, 17 (The Hague Cantral Station)")?><br><br>
                <b><?php echo gettext("Car parking")?></b><br>
                Q-Park, Zwarteweg 40, 2511VS, <?php echo gettext("The Hague")?><br>
                Q-Park, Fluwelen Burgwal 46, 2511CJ, <?php echo gettext("The Hague")?><br>
                </div>
            
            </div>
            
            <div id="openinghours">
        
                <div id="openinghours_title"><?php echo gettext("Opening Hours")?></div>
        
                <div id="openinghours_content">
                
                    <div id="openinghours_days">
                    <?php echo gettext("Monday")?><br>
                    <?php echo gettext("Tuesday")?><br>
                    <?php echo gettext("Wednesday")?><br>
                    <?php echo gettext("Thursday")?><br>
                    <?php echo gettext("Friday")?><br>
                    <?php echo gettext("Saturday")?><br>
                    <?php echo gettext("Sunday")?><br>
                    </div>
                    
                    <div id="openinghours_hours">
                    7:00-9:00, 16:00-20:30<br>
                    7:00-9:00, 16:00-20:30<br>
                    7:00-9:00, 16:00-20:30<br>
                    7:00-9:00, 16:00-20:30<br>
                    7:00-9:00<br>
                    10:00-14:30<br>
                    <?php echo gettext("closed")?><br>
                    </div>
                    
                </div>
        
            </div>
        
        </div>
    

<!-- About Us
    ====================================-->
    
        <div class="separator"></div>
        
        <div id="aboutus">
        
            <img id="aboutus_pic" src="images/pic-aboutus.jpg">
            
            <div id="aboutus_title"><?php echo gettext("About Us")?></div>
        
            <div id="aboutus_content">
            <b>Dr. Daniel Finkelman</b><br>
            <?php echo gettext("Dental Medical Doctor")?><br>
            <?php echo gettext("B.Sc. Psychology")?><br><br>
            <?php echo gettext("Dr. Daniel Finkelman has extensive experience in diverse fields of dentistry, including rehabilitation, pediatric dentistry and endodontistry (root canals). Dr. Finkelman specializes in treating patients with dental anxiety, both children and adults.")?> <br><br>
            <?php echo gettext("We provide state of the art family dentistry with emphasis on prevention, aesthetics and comfort.")?> <br><br>
            <?php echo gettext("We strongly believe that dentistry can and should be pain free, and each patient's needs, concerns and demands should be addressed. ")?>
            </div>
        
        </div>
        
        
    <!-- Payment and Billing
    ====================================-->
    
        <div class="separator"></div>
        
        <div id="payment">
        
            <div id="payment_title"><?php echo gettext("Payment and Billing")?></div>
        
            <div id="payment_content">
            <?php echo gettext("In The Netherlands, the government determines the rate of dental treatments in ")?><a target=_blank href="http://www.tandarts.nl/tarieven-verzekering/rekeningen/wat_kost_een_behandeling"><?php echo gettext("uniform codes")?></a><?php echo gettext(" (aka UPT). All dentists working in the Netherlands are obliged to adhere to these codes.")?> <br><br>
            <?php echo gettext("We will issue an invoice for you immediately at the end of every appointment. You will have the choice of either paying at our clinic by cash, debit or credit card, or at a later stage (up to 14 days after the appointment) via bank transfer.")?> 
            </div>
            
        </div>
        
    <!-- Footer
    ====================================-->
    
        <div id="footer">
            <div id="footer_credits"><?php echo gettext("Website created by")?> Misha Veldhoen & Ori Yudilevich</div>
        </div>
    
    </body>
</html>