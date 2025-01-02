
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}
var navbar = $("#navbar");
var ww = $(window).width();
var wh = $(window).height();
getYear();
console.log('Građevinsko preduzeće TERMOMETAL izgradnja stanova u Novom Sadu'.length);
var isMobile;
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    isMobile = true;
}

// toggler button
$(".toggler").click(function () {
    $(".nav-links").toggleClass("active");
    $(".nav-link").click(function () {
        $(".nav-links").removeClass("active");
        $(".toggler").removeClass("hide");
    });
    $(".toggler").toggleClass("hide");
});
var myCarousel = document.querySelector('#carouselExampleIndicators');
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 2000,
    wrap: false
});
// console.log('dodao', $("img.img-stan")[0]);
// function skiniClass() {
//     $(".img-stan").each(function () {

//         console.log('leaeve', $(this).hasClass('img-stan'));
//         // $(this).on('mouseleve', () => {
//         // $(".img-stan", this).on('mouseleave', () => {
//         $(this)[0].removeClass("img-actv");
//         // if($(this).cla)
//         // });
//         // })
//     });
// };

// })

// $('#usluges').on('change', () => {
//     $(".srvtxt").each(function () {
//         if ($("select option:selected").val() === $(this).attr("id"))
//             $(this).css("display", "block");
//         else
//             $(this).css("display", "none");
//     })

// })
// $("#hero .ml-auto>img").css("opacity", "1");
// var windowHeight = (window.innerHeight * 5) / 10;
// var oblast = document.getElementById("oblast");
// var about = document.getElementById("about");


// function dodajAnimu() {
//     var oblastP = oblast.getBoundingClientRect().top;
//     var positionA = about.getBoundingClientRect().top;
//     if (wh >= oblastP) {
//         oblast.getElementsByTagName("h2")[0].classList.add("anima-up-down");
//         oblast.getElementsByTagName("img")[0].classList.add("small-in");
//         oblast.getElementsByClassName("row")[0].classList.add("anima-left");
//     }
//     if (wh >= positionA) {
//         about.getElementsByClassName("row")[0].classList.add("anima-left");
//         about.getElementsByTagName("img")[0].classList.add("small-in");
//         about.getElementsByTagName("h2")[0].classList.add("anima-up-down");
//     }
// }
function navbarAnima() {
    if (wh / 2 < window.scrollY) {
        navbar.addClass('show');
    } else {
        navbar.removeClass('show');
    }
}

$(window).on('scroll', () => {
    navbarAnima();
    // dodajAnimu();
});
if (isMobile) {
    if (wh < window.scrollY) {
        navbar.addClass('show');
    }
}