// console.log("Functions OK.");

$(document).ready(function () {
    // Enable Popover
    $(function () {
        $('[data-toggle="popover"]').popover()
    })

    // Collapse on click, outside
    $(document).click(function(event) {
        $(event.target).closest(".top-bar").length || $(".top-bar .navbar-collapse.show").length && $(".top-bar .navbar-collapse.show").collapse("hide")
      });
     // End Collapse on click, outside  ----------

    // Megamenu dropdown animation ----------
    $(".dropdown").click(
        function () {
            $(".dropdown-menu", this)
                .not(".in .dropdown-menu")
                .stop(true, true)
                .slideDown("100");
            $(this).toggleClass("open");
        },
        function () {
            $(".dropdown-menu", this)
                .not(".in .dropdown-menu")
                .stop(true, true)
                .slideUp("100");
            $(this).toggleClass("open");
        }
    );
    // End Megamenu dropdown animation ----------


    // Load More ----------
    // Latest Finds
    $(function () {
        $(".latest-finds .post-card").slice(0, 12).show();
        $("body").on('click touchstart', '.latest-finds .load-more-latest', function (e) {
            e.preventDefault();
            $(".latest-finds .post-card:hidden").slice(0, 4).slideDown();
            if ($(".latest-finds .post-card:hidden").length == 0) {
                $(".latest-finds .load-more-latest").css('visibility', 'hidden');
            }
            // $('html,body').animate({
            //     scrollTop: $(this).offset().center
            // }, 1000);
        });
    });
    // Fresh Finds
    $(function () {
        $(".fresh-finds .post-card").slice(0, 12).show();
        $("body").on('click touchstart', '.fresh-finds .load-more-fresh', function (e) {
            e.preventDefault();
            $(".fresh-finds .post-card:hidden").slice(0, 4).slideDown();
            if ($(".fresh-finds .post-card:hidden").length == 0) {
                $(".fresh-finds .load-more-fresh").css('visibility', 'hidden');
            }
            // $('html,body').animate({
            //     scrollTop: $(this).offset().top
            // }, 100);
        });
    });
    // Related Posts   
    $(function () {
        $(".related-post .post-card").slice(0, 8).show();
        $("body").on('click', '.related-post .load-more-related', {
            capture: false,
            passive: false
        }, function (e) {
            e.preventDefault();
            $(".related-post .post-card:hidden").slice(0, 4).slideDown();
            if ($(".related-post .post-card:hidden").length == 0) {
                $(".related-post .load-more-related").css('visibility', 'hidden');
            }
            console.log("related");
            // $('html,body').animate({
            //     scrollTop: $(this).offset().top
            // }, 100);  
        });
    });
    // 
    // Profile Listings
    $(function () {
        $(".profile-listings .post-card").slice(0, 12).show();
        $("body").on('click', '.profile-listings .load-more-listings', {
            capture: false,
            passive: false
        }, function (e) {
            e.preventDefault();
            $(".profile-listings .post-card:hidden").slice(0, 4).slideDown();
            if ($(".profile-listings .post-card:hidden").length == 0) {
                $(".profile-listings .load-more-listings").css('visibility', 'hidden');
            }
            console.log("listings");
            // $('html,body').animate({
            //     scrollTop: $(this).offset().top
            // }, 100);  
        });
    });
    // End Load More ----------


    // Share Buttons ----------
    try {
        var twitterShare = document.querySelector('[data-js="twitter-share"]');
        twitterShare.onclick = function (e) {
            e.preventDefault();
            var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL, 'twitter-popup', 'height=350,width=600');
            if (twitterWindow.focus) {
                twitterWindow.focus();
            }
            return false;
        }

        var facebookShare = document.querySelector('[data-js="facebook-share"]');
        facebookShare.onclick = function (e) {
            e.preventDefault();
            var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
            if (facebookWindow.focus) {
                facebookWindow.focus();
            }

            // console.log(document.URL);
            return false;
        }
    } catch (err) {
        // document.getElementById("demo").innerHTML = err.message;
    }


    // End Share Buttons  ----------

    // For star rating, to be modified
    // var $star_rating = $('.star-rating .fa-star');

    // $star_rating.mouseover(function() {
    //     var rate = parseInt($(this).data('rating'));
    //     $('input.rating-value').val(rate);
    //     $star_rating.each(function() {
    //         if (rate >= parseInt($(this).data('rating'))) {
    //         return $(this).removeClass('checked').addClass('checked');
    //         } else {
    //         return $(this).removeClass('checked');
    //         }
    //     });
    // });


    // Show more safety tips ----------
    var list = $(".safety-tips .list li");
    var numToShow = 5;
    var button = $(".safety-tips .next-tips");
    var numInList = list.length;
    list.hide();
    if (numInList > numToShow) {
        button.show();
    }
    list.slice(0, numToShow).show();

    button.click(function () {
        var showing = list.filter(':visible').length;
        list.slice(showing - 1, showing + numToShow).fadeIn();
        var nowShowing = list.filter(':visible').length;
        if (nowShowing >= numInList) {
            button.hide();
        }
    });
    // End Show more safety tips ----------

    // Message Switcher
    // temporary function to showcase UI
    $('.conversation-list .list-group-item-action').click( function (e) {
        
        //Select the conversation to be displayed
        var convo_selector = '#' + $(this)[0].dataset.conversation;
        
        //Hide current conversation
        $('.conversation.active').removeClass('active');
        $('.list-group-item-action.active').removeClass('active');

        // Show clicked conversation
        $(this).addClass('active')
        $(convo_selector).addClass('active');

        $('.message-between').addClass('visible');

        //scroll to bottom
        $(convo_selector + " ul")[0].scrollTop = $(convo_selector + " ul")[0].scrollHeight;   
    });
    $('.back-btn button').on('click', function(e) {
        e.preventDefault()
        $('.message-between').removeClass("visible")
    })

    // Scroll to bottom on page load
    try {
        var objDiv = $(".messages-list ul");
        objDiv[0].scrollTop = objDiv[0].scrollHeight;
    } catch (err) {
        // document.getElementById("demo").innerHTML = err.message;
    }
    // End Message Switcher

    // Profile Settings 
    var maxLength = 255;
    $('.about-me').keyup(function() {
        var length = $(this).val().length;
        var length = maxLength-length;
        $('#about-me-chars').text(length);
    });
});
