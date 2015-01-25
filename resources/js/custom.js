function setSplashHeight (target) {
    var windowHeight = $(windowtarget).height() - $(".header").height();
    $(target).height(windowHeight);
}

setSplashHeight(".intro");
setSplashHeight("section");
$(window).resize(setSplashHeight(".intro"));
$(window).resize(setSplashHeight("section"));
