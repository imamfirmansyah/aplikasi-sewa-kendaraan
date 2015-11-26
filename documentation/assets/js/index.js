(function($){
"use strict";

/* === SETTING === */
var themeApp = {
    theme_navigation:function(){
        $('.hidden a').click(function(e){
            e.preventDefault();
            $('#theme-navigation-list').slideToggle();
        });
    },

    // --- 29-10-2014, 01:35 am
    // imam firmansyah add this function
    theme_scroll:function() {
    	$('#theme-navigation-list').find("a").click(function(e) {
            e.preventDefault();
            var target = $(this).attr("href");

            $('html,body').animate({
               scrollTop: $(target).offset().top
            },1000);
    	});

    },

    theme_init:function(){
        themeApp.theme_navigation();
        themeApp.theme_scroll();
    }
}

/* === INITIALING === */
$(document).ready(function(){
    themeApp.theme_init();
});

}(jQuery));