$(function() {
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    $('#location').select2();

    $('#password').on('input', function () {

        var number = /([0-9])/;
        var alphabets = /([a-zA-Z])/;
        var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;

        if($(this).val().length < 6) {
            if($(this).val().length == 0){
                $('#password-strength-status').removeClass();
            }
            else{
                $('#password-strength-status').removeClass();
                $('#password-strength-status').addClass('weak-password');
            }
        }
        else {
            if($(this).val().match(number) && $(this).val().match(alphabets) && $(this).val().match(special_characters)) {
                $('#password-strength-status').removeClass();
                $('#password-strength-status').addClass('strong-password');
            } else {
                $('#password-strength-status').removeClass();
                $('#password-strength-status').addClass('medium-password');
            }
        }
    });
    $('#first_name,#last_name').keypress(function () {
       $(this).removeClass('form_error');
       $(this).next().text('');
    });
    $('#signup_step2').click(function(event){
        event.preventDefault();
        event.stopPropagation();
        var form_valid = true;
        var country = $('#location');
        var password = $('#password');
        var user_type = $('#user_type');
        if(user_type.val() === ''){
            user_type.next().text('You should choose what you want to do');
        }
        if(country.val() === ''){
            $('#country_error').text('Country is required');
            form_valid = false;
        }
        if(password.val() === ''){
            password.next().text('Password is required');
            form_valid = false;
        }
        if($('#terms').is(':checked')){
            form_valid = true;
        }
        else{
            $('#terms_error').text('You should accept our terms');
            form_valid = false;
        }
        if(form_valid){
           $('#signup_form').submit();
        }
    });
    $('#refresh_img i').on('click', function(e)
    {
        $('#captcha_img').attr("src","/get_captcha?rnd=" + Math.random());
    });
    $('.user_type').click(function(){
        var type = $(this).data('type');
        $('.user_type').removeClass('active_type');
        $(this).addClass('active_type');
        $('#user_type').val(type);
        if(type === 'freelancer'){
            $('#freelancer_fields').show();
        }
        else{
            $('#freelancer_fields').hide();
        }

    });
    $('#signup_step1').click(function(event){
        event.preventDefault();
        event.stopPropagation();
        var first_name = $('#first_name');
        var last_name = $('#last_name');
        var email = $('#email');
        var valid_field = true;
        var valid_email = true;
        if(first_name.val() === ''){
            first_name.addClass('form_error');
            first_name.next().text('First name is required');
            valid_field = false;
        }
        else{
            first_name.removeClass('form_error');
            first_name.next().text('');
        }
        if(last_name.val() === ''){
            last_name.addClass('form_error');
            last_name.next().text('Last name is required');
            valid_field = false;
        }
        else{
            last_name.removeClass('form_error');
            last_name.next().text('');
        }

        if(email.val() !== ''){
            $.ajax({
                type:'POST',
                url:'/checkEmail',
                data: {email : email.val()},
                headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()},
                async: false,
                success:function(data){
                    if(data.success === false){
                        email.addClass('form_error');
                        email.next().text(data.message.email);
                        valid_email = false;
                    }
                    else{
                        email.removeClass('form_error');
                        email.next().text('');
                        valid_email = true;
                    }
                }
            });
        }
        else{
            email.addClass('form_error');
            email.next().text('Email is required');
            valid_field = false;
        }
        if(valid_field && valid_email){
            $('#form_step1').hide();
            $('#user_email').text(email.val());
            $('#form_step2').show();
        }

    });

});