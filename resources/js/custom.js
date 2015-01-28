var setSectionHeight = function () {
    if ($(window).height() >= 675) {
        var windowHeight = $(window).height() - $(".header").height();
        $("section").height(windowHeight);
    } else {
        $("section").height(675);
    }
};

setSectionHeight();
$(window).resize(setSectionHeight);

$("nav a, .logo").click(function (event) {
    event.preventDefault();
    if (event.currentTarget.className === "logo") {
        $('html, body').animate({
            scrollTop: $("#intro").offset().top
        }, 400);
    } else {
        $('html, body').animate({
            scrollTop: $(event.currentTarget.hash).offset().top
        }, 400);
    }
});
