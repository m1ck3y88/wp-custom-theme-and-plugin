(function($) {

    console.log("Hello, from theme.js!");

    var paragraphs = $("p");

    paragraphs.each(function() {

        if( $(this).text() === "NEW - Text from custom footer-splash.php!" ) {

            $(this).css({

                position: "absolute",
                top: "65.5rem",
                right: "1rem"

            });

        }

    });

    $(".wp-image-1024").css("margin-top", "1rem");

})(jQuery);