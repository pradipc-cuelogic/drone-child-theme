(function($) {
    function windowScrollFunction() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            //console.log(scroll);
            if (scroll > 30) {
                $(".navbar-fixed-top").addClass("nav-scroll");
                setTimeout(function() {
                    $(".navbar-fixed-top").addClass("nav-border");
                }, 100);
            } else {
                $(".navbar-fixed-top").removeClass("nav-border");
                $(".navbar-fixed-top").removeClass("nav-scroll");
            }
        });
    }

    function slidePanel() {
        $('.showFullList').click(function() {
            $(".drawerWrap").addClass('drawerOpen');
            $(".overlayDrawer").show();
            setTimeout(function() {
                $("body").addClass('overHidden');
            }, 298);
        });
        $('.closeIcon').click(function() {
            $(".drawerWrap").removeClass('drawerOpen');
            $(".overlayDrawer").hide();
            setTimeout(function() {
                $("body").removeClass('overHidden');
            }, 298);
        });
        $('.overlayDrawer').click(function() {
            $(".drawerWrap").removeClass('drawerOpen');
            $(".overlayDrawer").hide();
            setTimeout(function() {
                $("body").removeClass('overHidden');
            }, 298);
        });

        $(".scrollContent").mCustomScrollbar();

    }

    $.fn.fadeInScroll = function(options) {

        // VARIABLES ------------------------------------
        var elements = $(this);


        // SETTINGS ------------------------------------
        var settings = $.extend({
            minDistance: 90 * $(window).height() / 100 //Distance between the browser top scroll and the next element
        }, options);


        // MAIN ------------------------------------
        // Add sFade classes
        $(elements).each(function() {
            $(this).css('opacity', '0');
        });

        // Check the position of all the elemnents.
        CheckFades();


        // FUNCTIONS ------------------------------------
        function CheckFades() {

            //Get the top of the browser
            vWindowScrollTop = $(window).scrollTop();

            //Test if the window TopScroll reachs the element TopScroll minus the minimun distance
            $(elements).each(function() {
                if (((vWindowScrollTop + parseInt(settings.minDistance)) >= $(this).offset().top)) {
                    $(this).delay(40).animate({ opacity: 1 });
                }
            });
        }


        // EVENTS ------------------------------------
        $(window).scroll(function() {
            CheckFades();
        });
    };

    $(window).on('beforeunload', function() {
        $(window).scrollTop(0);
    });



    //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
    function autoPlayYouTubeModal() {
        var trigger = $("#home-hero-video");
        trigger.click(function() {
            var theModal = $(this).data("target"),
                videoSRC = $(this).attr("data-theVideo"),
                videoSRCauto = videoSRC + "?autoplay=1&rel=0&showinfo=0";
            $(theModal + ' iframe').attr('src', videoSRCauto);
            $("#homeHeroVideo").on('hidden.bs.modal', function() {
                $(theModal + ' iframe').attr('src', videoSRC);
            });
        });
    }


    function scrollToDiv(){
        $(".scrollToDiv").on("click", function( e ) {
            e.preventDefault();
            $("body, html").animate({ 
              scrollTop: $( $(this).attr('href') ).offset().top 
            }, 800);
      });
    }
    $(document).ready(function() {
        windowScrollFunction();
        slidePanel();
        $("#top-menu.menu").addClass("nav navbar-nav");
        $('.animateIn').fadeInScroll();

        // $('select.focused').click(function () {   
        //     $(this).parent().addClass('inFocus');
        // });
        scrollToDiv();
        $('#commentform').addClass('animate-placeholder');
        $('.animate-placeholder .focused').on('focus', function() {
            tmpval = $(this).val();
            if (tmpval == '') {
                $(this).parent().addClass('empty');
            } else {
                $(this).parent().addClass('not-empty');
            }
        });
        $('.animate-placeholder .focused').on('blur', function() {
            tmpval = $(this).val();
            if (tmpval == '') {
                $(this).parent().removeClass('empty');
            } else {
                $(this).parent().addClass('empty');
            }
        });
        $('.menu-item-has-children').click(function(event) {
            event.stopPropagation();
            $(this).toggleClass('open');
        });
        $(document).click(function() {
            if ($('.menu-item-has-children').hasClass('open')) {
                $('.menu-item-has-children').removeClass('open');
            }
        });

        $('#licenseList').on('shown.bs.modal', function() {
            var wHeight = $(window).height();
            var modalHeight = wHeight;
            if($(window).height() < 768){
                $('#licenseList .mCustomScrollbar').css('height', modalHeight - 120);
            }else{
                $('#licenseList .mCustomScrollbar').css('height', modalHeight - 280);
            }
        });

        autoPlayYouTubeModal();

        $(".covrage-tab ul.tabs li a").on('shown.bs.tab', function(e) {
            $('.covrage-tab .covrage-image .tab-pane').removeClass('animate-img');
            if ($(".covrage-tab .covrage-image .tab-pane").hasClass('active')) {
                setTimeout(function() {
                    $('.covrage-tab .covrage-image .tab-pane.active').addClass('animate-img');
                }, 100);

            }
        });
        $('#site-navigation').on('show.bs.collapse', function() {
            $(this).addClass('navbar-in');
            $('body').css('overflow', 'hidden');
        });
        $('#site-navigation').on('hide.bs.collapse', function() {
            $(this).removeClass('navbar-in');
            $('body').css('overflow', 'auto');
        });

        $(".carousel").swipe({
          swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left') $(this).carousel('next');
            if (direction == 'right') $(this).carousel('prev');
          },
          allowPageScroll:"vertical"
        });
        
        $('.job-apply-btn').click(function() {
            $(this).addClass('disabled-btn');
            $(".job-apply-form").show();
        });
        $('.apply-job .cancel-btn').click(function() {
            $('.job-apply-btn').removeClass('disabled-btn');
            $(".job-apply-form").hide();
        });

    });
function resetForm(){
    $('#commentform').reset();
    validator.resetForm();    
}

function validateForm(){    
    if (validator.form()) {
        $('#commentform').submit();
    }
}

validator = $("#commentform").validate({
        rules: {
            author: "required",         
            email: {
                required: true,
                email: true
            }                        
            // url: {
            //     url: true   
            // },
            // comment: "required"    

        },
        messages: {
            author: "Please enter your name",           
            email: {
                required: "Please enter an email address",
                email: "Please enter a valid email address"
            } 
        }
    });

})(jQuery);