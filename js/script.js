$(document).ready(function(){
    
    //mouse over menu items in header
    $('#header_services_a, #header_about_a, #header_contact_a').hover(
        function(){
        $(this).css('color','red');
        },
        function(){
        $(this).css('color','black');
    });
    
    //slow scrolling when clicking on menu items in header
    $('#header_services_a').click(
        function(event){
            event.preventDefault();
            $.scrollTo('#services', 1000);    
        }
    );
    
    $('#header_about_a').click(
        function(event){
            event.preventDefault();
            $.scrollTo('#about', 1000);    
        }
    );
    
    $('#header_contact_a').click(
        function(event){
            event.preventDefault();
            $.scrollTo('#contact', 1000);    
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
});
    