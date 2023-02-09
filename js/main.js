function init(){ 
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        },2000, 'easeInOutExpo'); //i think this is where you adjust the anchor
        event.preventDefault();
    });
});
$(function(){
    $(".typed").typed({
        strings: ["a developer.", "a programmer.","an analyst.","an automator.","an engineer.","an initiator."],
        typeSpeed: 5,
        loop: true,
        showCursor: true,
        backDelay: 1000,
    });
});

} //end init()