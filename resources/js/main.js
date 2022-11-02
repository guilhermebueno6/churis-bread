$(document).ready(function(){
    $('img').lazyload();
});


const logo = $('.logo'),
logoImg = $('.logo img');
var height = $(document).height();


$(window).scroll(function(){
    scrollTop = $(window).scrollTop();
    if(scrollTop >= height){
        logo.css({'position' : 'fixed', 'filter' : 'invert(100%)'});
        logoImg.css('margin-left', '20px');
    }
    if(scrollTop <= height){
        logo.css({'position' : 'relative', 'filter' : 'invert(0%)'});
        logoImg.css('margin-left', '45px');
    }
    console.log('scrollTop: ' + scrollTop);
});

logo.click(function(){
    $("html, body").animate({ scrollTop: 0 }, "smooth");
    return false;
});