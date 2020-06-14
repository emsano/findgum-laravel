console.log("Functions OK.");

$(document).ready(function () {
    $(".dropdown").hover(
        function () {
            $(".dropdown-menu", this)
                .not(".in .dropdown-menu")
                .stop(true, true)
                .slideDown("300");
            $(this).toggleClass("open"); 
        },
        function () {
            $(".dropdown-menu", this)
                .not(".in .dropdown-menu")
                .stop(true, true)
                .slideUp("300");
            $(this).toggleClass("open");
        }
    );
});