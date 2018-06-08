$( document ).ready(function() {

$('.responsive').slick({
        dots: false,
        infinite: true,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fas fa-angle-double-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fas fa-angle-double-right' aria-hidden='true'></i></button>",
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 2,
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



});

