"use strict";

jQuery(document).ready( function($) {
    $(window).scroll( function() {
        // get how far down the user has scrolled compared to the top of the document
        var scrollTop     = $(window).scrollTop();
        // get how far down the element is from the top of the document
        var elementOffset = $('.aboutme-link').offset().top;
        // get the distance from the element to the top of the user's screen
        var distance      = (elementOffset - scrollTop);
        console.log(distance);
    });
});