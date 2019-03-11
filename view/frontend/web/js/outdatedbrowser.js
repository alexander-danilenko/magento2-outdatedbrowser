require(["jquery"], function ($) {
    $(document).ready(function () {
        // If is IE - show outdated message.
        if(!!navigator.userAgent.match(/Trident/g) || !!navigator.userAgent.match(/MSIE/g)) {
            $('#outdated-browser').show();
        }
    });
});
