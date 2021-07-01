
function openMenu() {
    $('#side-bar').addClass("shiftSidemenuLeft");
    $('#wrapper').addClass("shiftLeft");
    $('#dontShow').addClass("dontShow");
    $('#HTMLTAG').addClass("HTMLTAGscrollLock");
}
function closeMenu() {
    if ($('#wrapper').hasClass("shiftLeft")) {
        $('#side-bar').removeClass("shiftSidemenuLeft");
        $('#wrapper').removeClass("shiftLeft");
        $('#dontShow').removeClass("dontShow");
        $('.sandwich').removeClass("innerAnimate");
        $('.sandwich').removeClass("beforeAnimate");
        $('.sandwich').removeClass("afterAnimate");
        $('#HTMLTAG').removeClass("HTMLTAGscrollLock");
    }
}

function animateBurger() {
    $('.sandwich').addClass("innerAnimate");
    $('.sandwich').addClass("beforeAnimate");
    $('.sandwich').addClass("afterAnimate");
}



$('#dontShow').click(closeMenu);
$('#burger-MenuBtn').click(openMenu);
$('#burger-MenuBtn').click(animateBurger);
