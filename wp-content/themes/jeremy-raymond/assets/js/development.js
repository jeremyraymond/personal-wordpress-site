(function( $ ) {
    function resizeSections(section, isFirstTime) {
        section.each(function() {
            if(isFirstTime) {
                var minHeight = $(this).css('height');
                $(this).css('min-height', minHeight);
            }
            $(this).css('height', window.innerHeight + "px");
        });
    }

    $(document).ready( function($) {
        var isFirstTime = true;
        // resizing of sections to match user's browser window height
        var section = $('.section');
        resizeSections(section, isFirstTime);
        isFirstTime = false;
        $(window).resize( function(){
            resizeSections(section, isFirstTime);
        });

        // add smoothscroll to all the links
    });
})( jQuery );

