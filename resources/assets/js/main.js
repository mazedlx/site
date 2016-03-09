$('.scrollTo').click(function(e) {
    e.preventDefault();
    var that = $(this);
    $.scrollTo($('div'+that.attr('href')), 1000, {
        easing: 'swing'
    });
});

$('.portfolioLink').click(function(e) {
    e.preventDefault();
    var that = $(this);
    window.open(that.attr('href'));
});
