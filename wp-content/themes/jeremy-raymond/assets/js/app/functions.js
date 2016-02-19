(function( $ ) {
    /*
        param1:         jQuery object array containing the sections to be resized.
        param2:         Boolean determining if min-height should be set.
        Description:    Sets the height of the given sections to the user's browser window's size.
                        If isFirstTime is true, set the min-height to the natural height of the section
                        elements so that the section can never be smaller than its contents even if the
                        screen is made smaller.
     */
    function resizeSections(section, isFirstTime) {
        section.each(function() {
            if(isFirstTime) {
                var minHeight = $(this).css('height');
                $(this).css('min-height', minHeight);
            }
            var heightOfContent = $('.sub-section').outerHeight(true);
            console.log("child: " + heightOfContent);
            if(heightOfContent > window.innerHeight) {
                $(this).css('height', heightOfContent + "px");
                console.log("if");
            } else {
                console.log("else");
                $(this).css('height', window.innerHeight + "px");
            }
        });
    }

    $(document).ready( function($) {
        // get the sections to be resized
        var section = $('.section');
        // call function once on page load and pass true so the min-height is set
        resizeSections(section, true);
        // on every window resize, resize the section. Pass false because the min-height is set in stone.
        $(window).resize( function(){
            resizeSections(section, false);
        });

        // add smoothscroll to all the nav links
        $('.nav-link').smoothScroll({ speed: 1000 });
    });
})( jQuery );

