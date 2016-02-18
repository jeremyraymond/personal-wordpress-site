(function( $ ) {
    function resizeSections(section) {
        section.each(function() {
            $(this).css('height', window.innerHeight + "px");
        });
    }

    $(document).ready( function($) {
        var section = $('.section');
        resizeSections(section);
        $(window).resize( function(){
            resizeSections(section);
        });
    });
})( jQuery );

