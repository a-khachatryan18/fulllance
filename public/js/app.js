$(function() {
    $('.edit_setting').click(function () {
       $(this).parent().parent().find('section .display_settings').hide();
       $(this).parent().parent().find('section .edit_settings').removeClass('hidden');
    });

    $('#edit_password').click(function () {
        $(this).hide();
        $('#save_password').removeClass('hidden');
        $('#cancel_password').removeClass('hidden');
        $('.hasPassword').hide();
        $('.editPassword').removeClass('hidden');
    });

    $('#cancel_password').click(function () {
        $(this).addClass('hidden');
        $('#save_password').addClass('hidden');
        $('#edit_password').show();
        $('.hasPassword').show();
        $('.editPassword').addClass('hidden');
    });
    $('#edit_security').click(function () {
        $(this).hide();
        $('#save_security').removeClass('hidden');
        $('#cancel_security').removeClass('hidden');
        $('.hasSecurity').hide();
        $('.editSecurity').removeClass('hidden');
    });

    $('#cancel_security').click(function () {
        $(this).addClass('hidden');
        $('#save_security').addClass('hidden');
        $('#edit_security').show();
        $('.hasSecurity').show();
        $('.editSecurity').addClass('hidden');
    });

    $('#edit_tax').click(function () {
        $(this).hide();
        $('#save_tax').removeClass('hidden');
        $('#cancel_tax').removeClass('hidden');
        $('.display_tax_info').hide();
        $('.edit_tax_info').removeClass('hidden');
    });
    $('#cancel_tax').click(function () {
        $(this).addClass('hidden');
        $('#save_tax').addClass('hidden');
        $('#edit_tax').show();
        $('.display_tax_info').show();
        $('.edit_tax_info').addClass('hidden');
    });
    $('#us_person').click(function () {
        $('.w-nine').removeClass('hidden');
        $('.w-eight').addClass('hidden');
        $('.w-nine-info').removeClass('hidden');
        $('.w-eight-info').addClass('hidden');
        $('.w-nine-items').removeClass('hidden');
        $('.w-eight-items').addClass('hidden');
    });
    $('#not_us_person').click(function () {
        $('.w-eight').removeClass('hidden');
        $('.w-nine').addClass('hidden');
        $('.w-eight-info').removeClass('hidden');
        $('.w-nine-info').addClass('hidden');
        $('.w-eight-items').removeClass('hidden');
        $('.w-nine-items').addClass('hidden');
    });

    $('#question').change(function () {
        var question = $(this).val();
        if(question === 'other'){
            $('#custom_question').removeClass('hidden');
        }
        else{
            $('#custom_question').addClass('hidden');
        }
    });

    $('#federal_tax').change(function () {
       var tax = $(this).val();
       if(tax === '7'){
           $('#other_tax').removeAttr('disabled');
       }
       else{
           $('#other_tax').attr('disabled', 'disabled');
       }
    });

    $('#billing_modal .method_type').click(function () {
        $('#billing_modal .method_content').addClass('hidden');
        $(this).next().removeClass('hidden');
    })
    
    
});