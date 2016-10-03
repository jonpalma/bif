$(window).scroll(function () {
    if ($(window).scrollTop() >= '5' && !$('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').addClass('navbar-fixed-top');
    } else if ($(window).scrollTop() < '5' && $('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').removeClass('navbar-fixed-top');
    }
});

/*
	RELOAD VIDEO SOURCE ON HIDDEN MODAL
*/
$("#video-modal").on('hidden.bs.modal', function (e) {
    $("#video-modal iframe").attr("src", $("#video-modal iframe").attr("src"));
});

/* 
	PAGE LOAD WITH HASH OFFSET 
*/
(function($, window) {
    $navbar_height = $('.navbar').height();
    var adjustAnchor= function() {
        var $anchor = $(':target'),
            fixedElementHeight = $navbar_height;
        if ($anchor.length > 0) {
            $('html, body')
                .stop()
                .animate({
                scrollTop: $anchor.offset().top - fixedElementHeight
            }, 800);
        }
    };
    $(window).on('hashchange load', function() {
        adjustAnchor();
    });
})(jQuery, window)

// Collapse accordion every time dropdown is shown
$('.dropdown-accordion').on('show.bs.dropdown', function (event) {
    var accordion = $(this).find($(this).data('accordion'));
    accordion.find('.panel-collapse.in').collapse('hide');
});

// Prevent dropdown to be closed when we click on an accordion link
$('.dropdown-accordion').on('click', 'a[data-toggle="collapse"]', function (event) {
    event.preventDefault();
    event.stopPropagation();
    $($(this).data('parent')).find('.panel-collapse.in').collapse('hide');
    $($(this).attr('href')).collapse('show');
})

$('.panel-collapse').click(function(event) {
    event.preventDefault();
    event.stopPropagation();
});