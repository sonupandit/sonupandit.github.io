$(document).ready(function () {

    if (localStorage.getItem("scroll-pos") != null) {
        //$(window).scrollTop(localStorage.getItem("scroll-pos"));
        $("html,body").animate({scrollTop: localStorage.getItem("scroll-pos")},1000);
    }

    $(window).on("scroll", function() {
        localStorage.setItem("scroll-pos", $(window).scrollTop());
    });

});