$(document).ready(function(){
    
    //mouse over menu items in header
    $('#header_aboutus_a, #header_openinghours_a, #header_location_a, #header_requestappointment_a, #header_payment_a').hover(
        function(){
        $(this).css('color','red');
        },
        function(){
        $(this).css('color','black');
    });
    
    //slow scrolling when clicking on menu items in header
    $('#header_aboutus_a').click(
        function(event){
            event.preventDefault();
            $.scrollTo('#aboutus', 1000);    
        }
    );
    
    $('#header_openinghours_a').click(
        function(event){
            event.preventDefault();
            $.scrollTo('#openinghours', 1000);    
        }
    );
    
    $('#header_location_a').click(
        function(event){
            event.preventDefault();
            $.scrollTo('#location', 1000);    
        }
    );
    
    $('#header_requestappointment_a').click(
        function(event){
            event.preventDefault();
            $.scrollTo('#requestappointment', 1000);    
        }
    );
    
    $('#header_payment_a').click(
        function(event){
            event.preventDefault();
            $.scrollTo('#payment', 1000);    
        }
    );
    
    $('#appointment_a').click(
        function(event){
            event.preventDefault();
            $.scrollTo('#requestappointment', 1000);    
        }
    );
    
    //back to top
    
    // hide #back-top first
    $("#back_top").hide();
    
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back_top').fadeIn();
            } else {
                $('#back_top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#back_top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
    
    $('#Fader').easyFader({
        slideDur: 3500,
        fadeDur: 1200
    });
});
    