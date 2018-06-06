$( document ).ready(function() {
    $('.drop').on('click', function () {
        $('.dropdown-content').toggleClass('transform-scale');
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

