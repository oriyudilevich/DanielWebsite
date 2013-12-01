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
        // I18N support information here
        $language = 'nl';
        putenv("LANG=$language"); 
        setlocale(LC_ALL, $language);

        // Set the text domain as 'messages'
        $domain = 'messages';
        bindtextdomain($domain, "/Users/mishaveldhoen/Dropbox/Projects/DanielWebsite/locale"); 
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
            <span>Coming soon...</span> Make your appointment online!<br><br>
            For the time being, please call 070-2000193 to make an appointment.<br><br>
            Please bring with you to your first appointment a valid identity card, and in case you have any medical limitations, a letter from your family doctor.  
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
            
            <!-- <span class="separator">|</span>
             
            <span id="header_english">EN</span>
            
            <span id="header_dutch" class="container"><a id="header_dutch_a" href="dutch.html">NL</a></span> -->
            
        </div>
        
        </div>
        
        <div id="topsection">
    
    <!-- Left Block on top (title, reasons and appointment button) 
    =====================================================-->
        
        <div id="leftblock">
        
            <div id="title">
        
                <div id="title_main">The Hague Dental Care</div>
            
                <div id="title_address">
                Muzenplein 91, 2511GD, The Hague<br>
                Tel: 070-2000193
                </div>
        
            </div>
        
            <div id="reasons">
            
                <div id="reason_1"><img src="images/check.gif"> Flexible working hours</div>
            
                <div id="reason_2"><img src="images/check.gif"> Great location</div>
            
                <div id="reason_3"><img src="images/check.gif"> Personal treatment</div>
            
                <div id="reason_4"><img src="images/check.gif"> Serene environment</div>
            
            </div>
        
            <div id="appointment">
            
                <div id="appointment_content"><a href="#" id="appointment_a" class="topopup">Make an Appointment</a></div>

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
                <div id="location_title"><!-- <a class="mapspopup" href="#"><img id="location_content_img" src="images/googlemaps.png"></a>--> Location</div>
        
                <div id="location_content">
                Muzenplein 91, 2511GD, The Hague<br><br>
                <b>By public transport</b><br>
                3 minutes walk from The Hague Central Station<br>
                Tram lines: 3, 4, 9, 15, 16, 17 (The Hague Cantral Station)<br><br>
                <b>Car parking</b><br>
                Q-Park, Zwarteweg 40, 2511VS, Den Haag<br>
                Q-Park, Fluwelen Burgwal 46, 2511CJ, Den Haag<br>
                </div>
            
            </div>
            
            <div id="openinghours">
        
                <div id="openinghours_title">Opening Hours</div>
        
                <div id="openinghours_content">
                
                    <div id="openinghours_days">
                    Monday<br>
                    Tuesday<br>
                    Wednesday<br>
                    Thursday<br>
                    Friday<br>
                    Saturday<br>
                    Sunday<br>
                    </div>
                    
                    <div id="openinghours_hours">
                    7:00-9:00, 16:00-20:30<br>
                    7:00-9:00, 16:00-20:30<br>
                    7:00-9:00, 16:00-20:30<br>
                    7:00-9:00, 16:00-20:30<br>
                    7:00-9:00<br>
                    10:00-14:30<br>
                    closed<br>
                    </div>
                    
                </div>
        
            </div>
        
        </div>
    

<!-- About Us
    ====================================-->
    
        <div class="separator"></div>
        
        <div id="aboutus">
        
            <img id="aboutus_pic" src="images/pic-aboutus.jpg">
            
            <div id="aboutus_title">About Us</div>
        
            <div id="aboutus_content">
            <b>Dr. Daniel Finkelman</b><br>
            Dental Medical Doctor<br>
            B.Sc. Psychology <br><br>
            Dr. Daniel Finkelman has extensive experience in diverse fields of dentistry, including rehabilitation, pediatric dentistry and endodontistry (root canals). Dr. Finkelman specializes in treating patients with dental anxiety, both children and adults. <br><br>
            We provide state of the art family dentistry with emphasis on prevention, aesthetics and comfort. <br><br>
            We strongly believe that dentistry can and should be pain free, and each patient's needs, concerns and demands should be addressed. 
            </div>
        
        </div>
        
        
    <!-- Payment and Billing
    ====================================-->
    
        <div class="separator"></div>
        
        <div id="payment">
        
            <div id="payment_title">Payment and Billing</div>
        
            <div id="payment_content">
            In The Netherlands, the government determines the rate of dental treatments in <a target=_blank href="http://www.tandarts.nl/tarieven-verzekering/rekeningen/wat_kost_een_behandeling">uniform codes</a>  (aka UPT). All dentists working in the Netherlands are obliged to adhere to these codes. <br><br>
            We will issue an invoice for you immediately at the end of every appointment. You will have the choice of either paying at our clinic by cash, debit or credit card, or at a later stage (up to 14 days after the appointment) via bank transfer. 
            </div>
            
        </div>
        
    <!-- Footer
    ====================================-->
    
        <div id="footer">
            <div id="footer_credits">Website created by Misha Veldhoen & Ori Yudilevich</div>
        </div>
    
    </body>
</html>