$(function(){
    var stickyHeaderTop = $('#stickyheader').offset().top;

    $(window).scroll(function(){
        if( $(window).scrollTop() > stickyHeaderTop ) {
            $('#stickyheader').addClass('fixed_header');
        } else {
            $('#stickyheader').removeClass('fixed_header');
        }
        if($(this).scrollTop() > 100){
            $('#move_to_top').show();
        }
        else{
            $('#move_to_top').hide();
        }
    });
    $('#move_to_top').click(function() {
        $("html, body").animate({ scrollTop: 0 }, "fast");
    });
    $('.hiw_menu a').click(function () {
        $('.hiw_menu a').parent().removeClass('active');
        $(this).parent().addClass('active');
    });

    $('.faq_menu').click(function () {
        var href = $(this).attr('href');
        $('.faq_item').removeClass('active');
        $(href).addClass('active');
        $('.faq_menu').parent().removeClass('active');
        $(this).parent().addClass('active');
    });
    $('.accordion .item').click(function () {
        $(this).toggleClass('active_item');
        $(this).find('.content').toggle();
    })

});