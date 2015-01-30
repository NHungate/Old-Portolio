var setSectionHeight = function () {
    var windowHeight = $(window).height();
    $('.intro').height(windowHeight);
};

var toggleState = false;

setSectionHeight();
$(window).resize(setSectionHeight);

$("nav a, .slideout-menu-icon, .logo").click(function (event) {
    event.preventDefault();
    console.log(event);
    if (event.currentTarget.className === "slideout-menu-icon") {
        $('.slideout-menu').slideToggle('fast');
        if (toggleState === true) {
            toggleState = false;
        } else {
            toggleState = true;
        }
    }

    if (event.currentTarget.className === "logo") {
        $('html, body').animate({
            scrollTop: $("#intro").offset().top
        }, 400);
        if (toggleState === true) {
            $('.slideout-menu').slideToggle('fast');
            toggleState = false;
    }
    } else if (event.currentTarget.className !== "slideout-menu-icon") {
        $('html, body').animate({
            scrollTop: $(event.currentTarget.hash).offset().top
        }, 400);
        if (toggleState === true) {
            $('.slideout-menu').slideToggle('fast');
            toggleState = false;
        }
    }
});
