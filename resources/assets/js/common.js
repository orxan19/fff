$( document ).ready(function() {

$('.responsive').slick({
        dots: false,
        infinite: true,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fas fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fas fa-angle-right' aria-hidden='true'></i></button>",
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },

            {
                breakpoint: 568,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {

            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    $("button[id='myBtn']").click(function() {
        this.style.display = "none";
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

    $(".btn-search").click(function(){
        $("form").slideToggle("400");
        $("nav").slideToggle("400");
        $('.overlay').css('display', 'block');
    });

    $('.closeForm').click(function(){
        $("form").slideToggle("400");
        $("nav").slideToggle("400");
        $('.overlay').css('display', 'none');
    });

    $('.overlay').click(function(){
        $("form").slideToggle("400");
        $("nav").slideToggle("400");
        $('.overlay').css('display', 'none');
    });

    $('form').mouseenter(
        function () {
            $(this).css({"background-color":"#302f2f"});
        }
    );

    $('form').mouseout(
        function () {
            $(this).css({"background-color":"#1e1e1e"});
        }
    );

    $('form').submit(function( event ) {
        if($('.searchInput').val() == ''){
            event.preventDefault();
        }
    });


    // var contentHeight = $('.content-scrolling').height();
    // var sidebarHeight = $('.sidebar-scrolling');
    //
    // $(window).scroll(function() {
    //     var pageH = $('.page').height() - $(this).height();
    //     var pageT = this.scrollY - $('.page').offset().top;
    //
    //     $('.sidebar-scrolling').scrollTop(pageT / pageH * ($('.sidebar-scrolling').height() - $(this).height()));
    // });


});

