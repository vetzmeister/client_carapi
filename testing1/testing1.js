$('.btn_navi').click(function() {
    // animate content
    $('.page__style').addClass('animate_content');
    $('.page__description').fadeOut(100).delay(1800).fadeIn();

    setTimeout(function() {
        $('.page__style').removeClass('animate_content');
    }, 3200);

    //remove fadeIn class after 1500ms
    setTimeout(function() {
        $('.page__style').removeClass('fadeIn');
    }, 1500);

});

// on click show page after 1500ms
$('.home_link').click(function() {
    setTimeout(function() {
        $('.home').addClass('fadeIn');
    }, 1500);
});

$('.ferrari_link').click(function() {
    setTimeout(function() {
        $('.ferrari').addClass('fadeIn');
    }, 1500);
});

$('.mercedes_link').click(function() {
    setTimeout(function() {
        $('.mercedes').addClass('fadeIn');
    }, 1500);
});

$('.about_link').click(function() {
    setTimeout(function() {
        $('.about').addClass('fadeIn');
    }, 1500);
});

$('.audi_link').click(function() {
    setTimeout(function() {
        $('.audi').addClass('fadeIn');
    }, 1500);
});