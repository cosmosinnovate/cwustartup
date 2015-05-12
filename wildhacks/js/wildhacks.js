
$(window).scroll(function (event) {
    
    var scrollDown = $('.scroll-down img, .scroll-down span');
    var scroll = $(window).scrollTop();
    console.log(scroll);
    if(scroll > 10){
        scrollDown.fadeOut(500);
    }else{
        scrollDown.fadeIn(200);
    }
});