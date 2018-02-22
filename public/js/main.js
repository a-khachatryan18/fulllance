$(function(){
    // Check the initial Poistion of the Sticky Header
    var stickyHeaderTop = $('#stickyheader').offset().top;

    $(window).scroll(function(){
        if( $(window).scrollTop() > stickyHeaderTop ) {
            $('#stickyheader').addClass('fixed_header');
        } else {
            $('#stickyheader').removeClass('fixed_header');
        }
    });
});