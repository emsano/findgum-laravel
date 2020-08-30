// console.log("Functions OK.");

jQuery(document).ready(function () {
    /*! Image Uploader - v1.0.0 - 15/07/2019
     * Copyright (c) 2019 Christian Bayer; Licensed MIT */
    function imgUP() {
        $.fn.imageUploader = function (options) {
            let defaults = {
                preloaded: [],
                imagesInputName: 'images',
                preloadedInputName: 'preloaded',
                label: 'Drag & Drop files here or click to browse'
            };
            let plugin = this;
            plugin.settings = {};
            plugin.init = function () {
                plugin.settings = $.extend(plugin.settings, defaults, options);
                plugin.each(function (i, wrapper) {
                    let $container = createContainer();
                    $(wrapper).append($container);
                    $container.on("dragover", fileDragHover.bind($container));
                    $container.on("dragleave", fileDragHover.bind($container));
                    $container.on("drop", fileSelectHandler.bind($container));
                    if (plugin.settings.preloaded.length) {
                        $container.addClass('has-files');
                        let $uploadedContainer = $container.find('.uploaded');
                        for (let i = 0; i < plugin.settings.preloaded.length; i++) {
                            $uploadedContainer.append(createImg(plugin.settings.preloaded[i].src, plugin.settings.preloaded[i].id, !0));
                        }
                    }
                });
            };
            let dataTransfer = new DataTransfer();
            let createContainer = function () {
                let $container = $('<div>', {
                        class: 'image-uploader'
                    }),
                    $input = $('<input>', {
                        type: 'file',
                        id: plugin.settings.imagesInputName + '-' + random(),
                        name: plugin.settings.imagesInputName + '[]',
                        multiple: ''
                    }).appendTo($container),
                    $uploadedContainer = $('<div>', {
                        class: 'uploaded'
                    }).appendTo($container),
                    $textContainer = $('<div>', {
                        class: 'upload-text'
                    }).appendTo($container),
                    $i = $('<i>', {
                        class: 'mdi mdi-cloud-upload',
                        text: ''
                    }).appendTo($textContainer),
                    $span = $('<span>', {
                        text: plugin.settings.label
                    }).appendTo($textContainer);
                $container.on('click', function (e) {
                    prevent(e);
                    $input.trigger('click');
                });
                $input.on("click", function (e) {
                    e.stopPropagation();
                });
                $input.on('change', fileSelectHandler.bind($container));
                return $container;
            };
            let prevent = function (e) {
                e.preventDefault();
                e.stopPropagation();
            };
            let createImg = function (src, id) {
                let $container = $('<div>', {
                        class: 'uploaded-image'
                    }),
                    $img = $('<img>', {
                        src: src
                    }).appendTo($container),
                    $button = $('<button>', {
                        class: 'delete-image'
                    }).appendTo($container),
                    $i = $('<i>', {
                        class: 'mdi mdi-close-circle-outline',
                        text: ''
                    }).appendTo($button);
                if (plugin.settings.preloaded.length) {
                    $container.attr('data-preloaded', !0);
                    let $preloaded = $('<input>', {
                        type: 'hidden',
                        name: plugin.settings.preloadedInputName + '[]',
                        value: id
                    }).appendTo($container);
                } else {
                    $container.attr('data-index', id);
                }
                $container.on("click", function (e) {
                    prevent(e)
                });
                $button.on("click", function (e) {
                    prevent(e);
                    if ($container.data('index')) {
                        let index = parseInt($container.data('index'));
                        $container.find('.uploaded-image[data-index]').each(function (i, cont) {
                            if (i > index) {
                                $(cont).attr('data-index', i - 1);
                            }
                        });
                        dataTransfer.items.remove(index)
                    }
                    $container.remove();
                    if (!$container.find('.uploaded-image').length) {
                        $container.removeClass('has-files');
                    }
                });
                return $container;
            };
            let fileDragHover = function (e) {
                prevent(e);
                if (e.type === "dragover") {
                    $(this).addClass('drag-over');
                } else {
                    $(this).removeClass('drag-over');
                }
            };
            let fileSelectHandler = function (e) {
                prevent(e);
                let $container = $(this);
                $container.removeClass('drag-over');
                let files = e.target.files || e.originalEvent.dataTransfer.files;
                setPreview($container, files);
            };
            let setPreview = function ($container, files) {
                $container.addClass('has-files');
                let $uploadedContainer = $container.find('.uploaded'),
                    $input = $container.find('input[type="file"]');
                $(files).each(function (i, file) {
                    dataTransfer.items.add(file);
                    $uploadedContainer.append(createImg(URL.createObjectURL(file), dataTransfer.items.length - 1));
                });
                $input.prop('files', dataTransfer.files);
            };
            let random = function () {
                return Date.now() + Math.floor((Math.random() * 100) + 1);
            };
            this.init();
            return this;
        };
    }
    imgUP();


    (function ($) {
    //     $.fn.imageUploader = function (options) {
    //         let defaults = {
    //             preloaded: [],
    //             imagesInputName: 'images',
    //             preloadedInputName: 'preloaded',
    //             label: 'Drag & Drop files here or click to browse'
    //         };
    //         let plugin = this;
    //         plugin.settings = {};
    //         plugin.init = function () {
    //             plugin.settings = $.extend(plugin.settings, defaults, options);
    //             plugin.each(function (i, wrapper) {
    //                 let $container = createContainer();
    //                 $(wrapper).append($container);
    //                 $container.on("dragover", fileDragHover.bind($container));
    //                 $container.on("dragleave", fileDragHover.bind($container));
    //                 $container.on("drop", fileSelectHandler.bind($container));
    //                 if (plugin.settings.preloaded.length) {
    //                     $container.addClass('has-files');
    //                     let $uploadedContainer = $container.find('.uploaded');
    //                     for (let i = 0; i < plugin.settings.preloaded.length; i++) {
    //                         $uploadedContainer.append(createImg(plugin.settings.preloaded[i].src, plugin.settings.preloaded[i].id, !0));
    //                     }
    //                 }
    //             });
    //         };
    //         let dataTransfer = new DataTransfer();
    //         let createContainer = function () {
    //             let $container = $('<div>', {
    //                     class: 'image-uploader'
    //                 }),
    //                 $input = $('<input>', {
    //                     type: 'file',
    //                     id: plugin.settings.imagesInputName + '-' + random(),
    //                     name: plugin.settings.imagesInputName + '[]',
    //                     multiple: ''
    //                 }).appendTo($container),
    //                 $uploadedContainer = $('<div>', {
    //                     class: 'uploaded'
    //                 }).appendTo($container),
    //                 $textContainer = $('<div>', {
    //                     class: 'upload-text'
    //                 }).appendTo($container),
    //                 $i = $('<i>', {
    //                     class: 'mdi mdi-cloud-upload',
    //                     text: ''
    //                 }).appendTo($textContainer),
    //                 $span = $('<span>', {
    //                     text: plugin.settings.label
    //                 }).appendTo($textContainer);
    //             $container.on('click', function (e) {
    //                 prevent(e);
    //                 $input.trigger('click');
    //             });
    //             $input.on("click", function (e) {
    //                 e.stopPropagation();
    //             });
    //             $input.on('change', fileSelectHandler.bind($container));
    //             return $container;
    //         };
    //         let prevent = function (e) {
    //             e.preventDefault();
    //             e.stopPropagation();
    //         };
    //         let createImg = function (src, id) {
    //             let $container = $('<div>', {
    //                     class: 'uploaded-image'
    //                 }),
    //                 $img = $('<img>', {
    //                     src: src
    //                 }).appendTo($container),
    //                 $button = $('<button>', {
    //                     class: 'delete-image'
    //                 }).appendTo($container),
    //                 $i = $('<i>', {
    //                     class: 'mdi mdi-close-circle-outline',
    //                     text: ''
    //                 }).appendTo($button);
    //             if (plugin.settings.preloaded.length) {
    //                 $container.attr('data-preloaded', !0);
    //                 let $preloaded = $('<input>', {
    //                     type: 'hidden',
    //                     name: plugin.settings.preloadedInputName + '[]',
    //                     value: id
    //                 }).appendTo($container);
    //             } else {
    //                 $container.attr('data-index', id);
    //             }
    //             $container.on("click", function (e) {
    //                 prevent(e)
    //             });
    //             $button.on("click", function (e) {
    //                 prevent(e);
    //                 if ($container.data('index')) {
    //                     let index = parseInt($container.data('index'));
    //                     $container.find('.uploaded-image[data-index]').each(function (i, cont) {
    //                         if (i > index) {
    //                             $(cont).attr('data-index', i - 1);
    //                         }
    //                     });
    //                     dataTransfer.items.remove(index)
    //                 }
    //                 $container.remove();
    //                 if (!$container.find('.uploaded-image').length) {
    //                     $container.removeClass('has-files');
    //                 }
    //             });
    //             return $container;
    //         };
    //         let fileDragHover = function (e) {
    //             prevent(e);
    //             if (e.type === "dragover") {
    //                 $(this).addClass('drag-over');
    //             } else {
    //                 $(this).removeClass('drag-over');
    //             }
    //         };
    //         let fileSelectHandler = function (e) {
    //             prevent(e);
    //             let $container = $(this);
    //             $container.removeClass('drag-over');
    //             let files = e.target.files || e.originalEvent.dataTransfer.files;
    //             setPreview($container, files);
    //         };
    //         let setPreview = function ($container, files) {
    //             $container.addClass('has-files');
    //             let $uploadedContainer = $container.find('.uploaded'),
    //                 $input = $container.find('input[type="file"]');
    //             $(files).each(function (i, file) {
    //                 dataTransfer.items.add(file);
    //                 $uploadedContainer.append(createImg(URL.createObjectURL(file), dataTransfer.items.length - 1));
    //             });
    //             $input.prop('files', dataTransfer.files);
    //         };
    //         let random = function () {
    //             return Date.now() + Math.floor((Math.random() * 100) + 1);
    //         };
    //         this.init();
    //         return this;
    //     };
    }(jQuery));
});

// geodata.solutions
window.addEventListener('load', function () {
    console.log('geodata.solutions');
    function ajaxCall() {
        this.send = function (data, url, method, success, type) {
            type = type || 'json';
            var successRes = function (data) {
                success(data);
            }
            var errorRes = function (e) {
                console.log(e);
            }
            jQuery.ajax({
                url: url,
                type: method,
                data: data,
                success: successRes,
                error: errorRes,
                dataType: type,
                timeout: 60000
            });
        }
    }

    function locationInfo() {
        var rootUrl = "//geodata.solutions/api/api.php";
        var username = 'demo';
        var ordering = 'name';
        var addParams = '';
        if (jQuery("#gds_appid").length > 0) {
            addParams += '&appid=' + jQuery("#gds_appid").val();
        }
        if (jQuery("#gds_hash").length > 0) {
            addParams += '&hash=' + jQuery("#gds_hash").val();
        }
        var call = new ajaxCall();
        this.confCity = function (id) {
            var url = rootUrl + '?type=confCity&countryId=' + jQuery('#countryId').val() + '&stateId=' + jQuery('#stateId option:selected').attr('stateid') + '&cityId=' + id;
            var method = "post";
            var data = {};
            call.send(data, url, method, function (data) {
                if (data) {} else {}
            });
        };
        this.getCities = function (id) {
            jQuery(".cities option:gt(0)").remove();
            var stateClasses = jQuery('#cityId').attr('class');
            var cC = stateClasses.split(" ");
            cC.shift();
            var addClasses = '';
            if (cC.length > 0) {
                acC = cC.join();
                addClasses = '&addClasses=' + encodeURIComponent(acC);
            }
            var url = rootUrl + '?type=getCities&countryId=' + jQuery('#countryId').val() + '&stateId=' + id + addParams + addClasses;
            var method = "post";
            var data = {};
            jQuery('.cities').find("option:eq(0)").html("Please wait..");
            call.send(data, url, method, function (data) {
                jQuery('.cities').find("option:eq(0)").html("Select City");
                if (data.tp == 1) {
                    if (data.hits > 1000) {
                        // console.log('Daily geodata.solutions request limit exceeded:' + data.hits + ' of 1000');
                    } else {
                        // console.log('Daily geodata.solutions request count:' + data.hits + ' of 1000')
                    }
                    var listlen = Object.keys(data['result']).length;
                    if (listlen > 0) {
                        jQuery.each(data['result'], function (key, val) {
                            var option = jQuery('<option />');
                            option.attr('value', val).text(val);
                            jQuery('.cities').append(option);
                        });
                    } else {
                        var usestate = jQuery('#stateId option:selected').val();
                        var option = jQuery('<option />');
                        option.attr('value', usestate).text(usestate);
                        option.attr('selected', 'selected');
                        jQuery('.cities').append(option);
                    }
                    jQuery(".cities").prop("disabled", false);
                } else {
                    alert(data.msg);
                }
            });
        };
        this.getStates = function (id) {
            jQuery(".states option:gt(0)").remove();
            jQuery(".cities option:gt(0)").remove();
            var stateClasses = jQuery('#stateId').attr('class');
            // console.log(stateClasses);
            var cC = stateClasses.split(" ");
            cC.shift();
            var addClasses = '';
            if (cC.length > 0) {
                acC = cC.join();
                addClasses = '&addClasses=' + encodeURIComponent(acC);
            }
            var url = rootUrl + '?type=getStates&countryId=' + id + addParams + addClasses;
            var method = "post";
            var data = {};
            jQuery('.states').find("option:eq(0)").html("Please wait..");
            call.send(data, url, method, function (data) {
                jQuery('.states').find("option:eq(0)").html("Select Region");
                if (data.tp == 1) {
                    if (data.hits > 1000) {
                        // console.log('Daily geodata.solutions request limit exceeded: ' + data.hits + ' of 1000.');
                    } else {
                        // console.log('Daily geodata.solutions request count:' + data.hits + ' of 1000')
                    }
                    jQuery.each(data['result'], function (key, val) {
                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        option.attr('stateid', key);
                        jQuery('.states').append(option);
                    });
                    jQuery(".states").prop("disabled", false);
                } else {
                    alert(data.msg);
                }
            });
        };
    }
    jQuery(function () {
        var loc = new locationInfo();
        var coid = jQuery("#countryId").val();
        loc.getStates(coid);
        jQuery(".states").on("change", function (ev) {
            var stateId = jQuery("option:selected", this).attr('stateid');
            if (stateId != '') {
                loc.getCities(stateId);
            } else {
                jQuery(".cities option:gt(0)").remove();
            }
        });
        jQuery(".cities").on("change", function (ev) {
            var cityId = jQuery("option:selected", this).val();
            if (cityId != '') {
                loc.confCity(cityId);
            }
        });
    });
});

//-----------------------------------------------
$(document).ready(function () {

    // Jpreview
    (function ( $ ) {

        $.fn.jPreview = function() {
            var jPreview = this;

            jPreview.preview = function(selector){
                var container = $(selector).data('jpreview-container');

                $(selector).change(function(){
                    $(container).empty();
                    $.each(selector.files, function(index, file){
                        var imageData = jPreview.readImageData(file, function(data){
                            jPreview.addPreviewImage(container, data);
                        });
                    });
                });
            }

            jPreview.readImageData = function(file, successCallback){
                var reader = new FileReader();
                reader.onload = function(event){
                    successCallback(event.target.result);
                }
                reader.readAsDataURL(file);
            }

            jPreview.addPreviewImage = function(container, imageDataUrl){
                $(container).append('<div class="jpreview-image" style="background-image: url('+ imageDataUrl +')"></div>');
            }

            var selectors = $(this);
            return $.each(selectors, function(index, selector){
                jPreview.preview(selector);
            });

        };

    }( jQuery ));

    $('.demo').jPreview();

    // Enable Popover
    $(function () {
        $('[data-toggle="popover"]').popover()
    })

    // Collapse on click, outside
    $(document).click(function (event) {
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
        $(".related-post .post-card").slice(0, 16).show();
        $("body").on('click', '.related-post .load-more-related', {
            capture: false,
            passive: false
        }, function (e) {
            e.preventDefault();
            $(".related-post .post-card:hidden").slice(0, 8).slideDown();
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
    // $(function () {
    //     $(".profile-listings .post-card").slice(0, 12).show();
    //     $("body").on('click', '.profile-listings .load-more-listings', {
    //         capture: false,
    //         passive: false
    //     }, function (e) {
    //         e.preventDefault();
    //         $(".profile-listings .post-card:hidden").slice(0, 4).slideDown();
    //         if ($(".profile-listings .post-card:hidden").length == 0) {
    //             $(".profile-listings .load-more-listings").css('visibility', 'hidden');
    //         }
    //         console.log("listings");
    //         // $('html,body').animate({
    //         //     scrollTop: $(this).offset().top
    //         // }, 100);
    //     });
    // });
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
    var numToShow = 10;
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
    $('.conversation-list .list-group-item-action').click(function (e) {

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
    $('.back-btn button').on('click', function (e) {
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
    $('.about-me').keyup(function () {
        var length = $(this).val().length;
        var length = maxLength - length;
        $('#about-me-chars').text(length);
    });

    // Simple WYSIWYG
    $('#editControls a').click(function (e) {
        e.preventDefault();
        switch ($(this).data('role')) {
            case 'h1':
            case 'h2':
            case 'h3':
            case 'p':
                document.execCommand('formatBlock', false, $(this).data('role'));
                break;
            default:
                document.execCommand($(this).data('role'), false, null);
                break;
        }

        var textval = $("#editor").html();
        $("#editorCopy").val(textval);
    });

    $("#editor").keyup(function () {
        var value = $(this).html();
        $("#editorCopy").val(value);
    }).keyup();

    $('#checkIt').click(function (e) {
        e.preventDefault();
        alert($("#editorCopy").val());
    });

    var content_id = 'editor';
    max = 1000;
    //binding keyup/down events on the contenteditable div
    $('#' + content_id).keyup(function (e) {
        check_charcount(content_id, max, e);
    });
    $('#' + content_id).keydown(function (e) {
        check_charcount(content_id, max, e);
    });

    function check_charcount(content_id, max, e) {
        if (e.which != 8 && $('#' + content_id).text().length > max) {
            // $('#'+content_id).text($('#'+content_id).text().substring(0, max));
            e.preventDefault();
            alert('Max Characters Inputed.')

        }
    }

    // Post Item Image Upload on Edit
    // To be edited
    var url1 = 'http://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png';
    $("#item-img-upload").fileinput({
        uploadExtraData: {
            _token: "{{csrf_token()}}"
        },

        // Temporary urls, TODO by backend devs
        uploadUrl: "upload-images",
        deleteUrl: "delete-images",

        initialPreview: [url1],
        initialPreviewAsData: true,
        overwriteInitial: false,
        allowedFileTypes: ['image'],
        maxFileCount: 10,
        maxTotalFileCount: 10,
        multiple: true,
        dragDrop: true,
        showPreview: true,
        showDelete: true,
        filePlural: true,
        initialPreviewShowDelete: true,
        showRemove: true,
        fileActionSettings: {
            initialPreviewShowDelete: true,
            showRemove: true
        }
    });

    // Post free ad initialization
    $('.input-images').imageUploader();
    // Post free ad category dropdown
    // $(function () {
        $("select.dependent").each(function (i, sel) {
            var original = $(this).clone(),
                dependent = $("<select class='form-control' id='sub-categ-select'></select>").attr({
                    name: this.name
                }).insertAfter(this);
            this.name = "categories_" + this.name;

            $("optgroup", this).replaceWith(function () {
                return "<option>" + this.label + "</option>"
            });
            $("option:first", this).prop("selected", true)
            $(this).removeAttr("multiple").on("change", function () {
                var cat = $(this).val();
                dependent.html(original.children("[label='" + cat + "']").html());
            }).change();
        });
    // });
});
