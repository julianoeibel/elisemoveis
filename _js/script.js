$('.desksubmenu-catalogo').hover(function() {
    $('.catalogo').toggleClass('active');
});

$('.mobile-catalogo').hover(function() {
    $('.produtos').toggleClass('active');
});

$(window).ready(function() {
        $('.flexslider').flexslider();
        touch: true;
});
$(window).scroll(function() {
    if($(window).scrollTop() > 200) {
        $('.scroll-header').addClass('active');
    } else {
        $('.scroll-header').removeClass('active');
    }
});
var branHeight = $('.branding').height() + 20;

$(window).load(function(){
    $(".icon").css("min-height", branHeight);
});

$(".icon").on("click", function(){
    $(this).toggleClass("active");
    $('.nav-mobile').toggleClass("active");
    $('.overlay').toggleClass("open");
});

function loading() {
$(window).on("load", function(){
    $("#preloader").delay(300).fadeOut("slow");
    $("#loader").fadeOut();
})
};

$('.diamond ul li').hover(function(){
    $(this).children('p').css({"top":"-100%"});
    $(this).children('button').css({"opacity":"1"});
}, function() {
    $(this).children('p').css({"top":"50%"});
    $(this).children('button').css({"opacity":"0"});
});

$('.banner-large').hover(function(){
    $(this).children('p').css({"opacity":"1"});
    $(this).children('p').css({"top":"50%"});
    $(this).children('button').css({"top":"60%"});
}, function() {
    $(this).children('p').css({"opacity":"0"});
    $(this).children('p').css({"top":"40%"});
    $(this).children('button').css({"top":"50%"});
});
$('.banner').hover(function(){
    $(this).children('p').css({"opacity":"1"});
    $(this).children('p').css({"top":"50%"});
    $(this).children('button').css({"top":"60%"});
}, function() {
    $(this).children('p').css({"opacity":"0"});
    $(this).children('p').css({"top":"40%"});
    $(this).children('button').css({"top":"50%"});
});
$('.banner-mini').hover(function(){
    $(this).children('p').css({"opacity":"1"});
    $(this).children('p').css({"top":"50%"});
    $(this).children('button').css({"top":"60%"});
}, function() {
    $(this).children('p').css({"opacity":"0"});
    $(this).children('p').css({"top":"40%"});
    $(this).children('button').css({"top":"50%"});
});


var $target = $('.come-in'),
    animationClass = 'in-view',
    offset = $(window).height() * 3/4;

function animeScroll(){
    var documentTop = $(document).scrollTop();
    $target.each(function(){
        var itemTop = $(this).offset().top;
        if(documentTop > itemTop - offset) {
            $(this).addClass(animationClass);
        } else {
            $(this).removeClass(animationClass);
        }
    })
};

$(document).scroll(function(){
    animeScroll();
});

var accordion = $('.accordion');

accordion.find('dd').hide();
accordion.find('dt').on("click", function(){
$(this).toggleClass('active').next('dd').slideToggle().siblings('dd:visible').slideUp().prev('dt').removeClass('active');
});

$(window).scroll(function(){
    parallax();
})

/*var headerHeight = $('header').height();
var wHeight = $(window).height() - 100;
$('.parallax--bg').css('min-height', wHeight);*/

$(window).ready(function(){
    var wWidth = $(window).width();
    if (wWidth < 425) {
        $('.parallax-one').removeClass('parallax--bg');
        $('.parallax-one').css('background-position','center right');
        $('.inst-text').removeClass('parallax--box');
    }
});

function parallax(){
    var wScroll = $(window).scrollTop();
    $('.parallax--bg').css('background-position','center '+'-'+(wScroll*0.1)+'px');
    $('.parallax--box').css('bottom',+(wScroll*0.05)+'px');
}