/**
 * Created by victor on 16-01-2016.
 */

jQuery(document).ready(function($) {
    // Inside of this function, $() will work as an alias for jQuery()
    // and other libraries also using $ will not be accessible under this shortcut
    $('.flexslider').flexslider({
        animation: "slide"
    });
});