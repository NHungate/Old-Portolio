var setSectionHeight = function () {
    if ($(window).height() >= 500) {
        var windowHeight = $(window).height() - $(".header").height();
        $("section").height(windowHeight);
    } else {
        $("section").height(500);
    }
};

setSectionHeight();
$(window).resize(setSectionHeight);
