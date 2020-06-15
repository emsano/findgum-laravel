// console.log("Functions OK.");

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


    $(function () { 
        $(".latest-finds .product-card").slice(0, 4).show();
        $("body").on('click touchstart', '.latest-finds .load-more-latest', function (e) {
            e.preventDefault();
            $(".latest-finds .product-card:hidden").slice(0, 4).slideDown();
            if ($(".latest-finds .product-card:hidden").length == 0) {
                $(".latest-finds .load-more-latest").css('visibility', 'hidden');
            }
            // $('html,body').animate({
            //     scrollTop: $(this).offset().center
            // }, 1000);
        });
    }); 
    
    $(function () { 
        $(".fresh-finds .product-card").slice(0, 4).show();
        $("body").on('click touchstart', '.fresh-finds .load-more-fresh', function (e) {
            e.preventDefault();
            $(".fresh-finds .product-card:hidden").slice(0, 4).slideDown();
            if ($(".fresh-finds .product-card:hidden").length == 0) {
                $(".fresh-finds .load-more-fresh").css('visibility', 'hidden');
            }
            // $('html,body').animate({
            //     scrollTop: $(this).offset().top
            // }, 100);
        });
    });
});