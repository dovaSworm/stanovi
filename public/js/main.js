function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}
var navbar = $("#navbar");
var ww = $(window).width();
var wh = $(window).height();
getYear();
var isMobile;
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    isMobile = true;
}
// toggler button
$(".toggler").click(function () {
    $(".nav-links").toggleClass("active");
    $(".link-h").click(function () {
        $(".nav-links").removeClass("active");
        $(".toggler").removeClass("hide");
    });
    $(".toggler").toggleClass("hide");
});
function navbarAnima() {
    if (wh / 2 < window.scrollY) {
        navbar.addClass('show');
    } else {
        navbar.removeClass('show');
    }
}
if (isMobile) {
    navbar.addClass('show');
} else {
    $(window).on('scroll', () => {
        navbarAnima();
    });
}
