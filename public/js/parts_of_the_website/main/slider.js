$("main .slider").slick({
    arrows: false,
    dots: true,
});

$("main .left").click(function () {
    $("main .slider").slick("slickPrev");
});

$("main .right").click(function () {
    $("main .slider").slick("slickNext");
});
