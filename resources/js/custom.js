function setSplashHeight () {
    var windowHeight = $(window).height() - $(".header").height();
    $(".splash").height(windowHeight);
}

setSplashHeight();
$(window).resize(setSplashHeight);
