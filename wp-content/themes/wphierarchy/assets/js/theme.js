(function($) {

    var paragraphs = $("p");

    paragraphs.each(function() {

        if( $(this).text() === "NEW - Text from custom footer-splash.php!" ) {

            $(this).css({

                position: "absolute",
                top: "65rem",
                right: "1rem"

            });

        }

    });

})(jQuery);