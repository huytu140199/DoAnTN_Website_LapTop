$(document).ready(function () {
    var siteLink = $(".sitebar_link .sitebar-icon").toArray();
    var siteChild = $(".sitebar_child").toArray();

    siteLink.map((e, i) => {
        $(e).click(() => {
            if ($(e).parent().hasClass("show")) {
                $(e).parent().removeClass("show");
                $($(".sitebar_link i")[i])
                    .addClass("fa-chevron-right")
                    .removeClass("fa-chevron-down");
                return;
            }
            $(siteLink).parent().removeClass("show");
            $($(".sitebar_link i"))
                .removeClass("fa-chevron-down")
                .addClass("fa-chevron-right");
            $(e).parent().addClass("show");
            $($(".sitebar_link i")[i])
                .addClass("fa-chevron-down")
                .removeClass("fa-chevron-right");
        });
    });

    siteChild.map((e) => {
        $(e).click(() => {
            $(e).parent().removeClass("show").addClass("hidden");
            console.log($(e).parent());
        });
    });
});

// swiper

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
var swiper = new Swiper(".mySwiperLayout", {

    spaceBetween: 20,
    slidesPerGroup: 4,
    loop: false,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1680: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 4,
        },
        900: {
            slidesPerView: 3,
        },
        800: {
            slidesPerView: 2,
        },
        600: {
            slidesPerView: 1,
        },
    },
});

// popup
function showPopUpBanner() {
    $('.popUpBannerBox').fadeIn("2000");
}
setTimeout(showPopUpBanner, 900); //time popup

$('.popUpBannerBox').click(function (e) {
    if (!$(e.target).is('.popUpBannerContent, .popUpBannerContent *')) {
        $('.popUpBannerBox').fadeOut("2000");
        return false;
    }
});
$('.closeButton').click(function () {
    $('.popUpBannerBox').fadeOut("2000");
    return false;
});
document.getElementById("sudovn-btn-icon-container").addEventListener("click", function () {
    document.getElementById("sudovn-btn-social").classList.remove("b24-widget-button-hide"), document
        .getElementById("sudovn-btn-social").classList.add("b24-widget-button-show"), document
            .getElementById("sudovn-btn-shadow").classList.remove("b24-widget-button-hide"), document
                .getElementById("sudovn-btn-shadow").classList.add("b24-widget-button-show"), document
                    .getElementById("sudovn-btn-wrapper").classList.add("b24-widget-button-bottom")
}), document.getElementById("sudovn-btn-close").addEventListener("click", function () {
    document.getElementById("sudovn-btn-social").classList.remove("b24-widget-button-show"), document
        .getElementById("sudovn-btn-social").classList.add("b24-widget-button-hide"), document
            .getElementById("sudovn-btn-shadow").classList.remove("b24-widget-button-show"), document
                .getElementById("sudovn-btn-shadow").classList.add("b24-widget-button-hide"), document
                    .getElementById("sudovn-btn-wrapper").classList.remove("b24-widget-button-bottom")
});

var offset = 500;
// thời gian di trượt 0.75s ( 1000 = 1s )
var duration = 500;
$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > offset)
            $('#top-up').fadeIn(duration);
        else
            $('#top-up').fadeOut(duration);
    });
    $('#top-up').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, duration);
    });
});
