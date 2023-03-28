

$('.nav-link:not(opened)').mouseenter(function(){
    if($(this).hasClass('closed'))
    {
        $(this).removeClass('closed');
    }
    $(this).addClass('active');
    
});

$('.nav-link:not(.opened)').mouseleave(function(){
    $(this).addClass('closed');
});