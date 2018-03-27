$(function() {
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    $('#location').select2({ width: '100%' });

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
    $('#regen-captcha').on('click', function(e){
        e.preventDefault();

        var anchor = $(this);
        var captcha = anchor.prev('img');

        $.ajax({
            type: "GET",
            url: '/regen_captcha',
        }).done(function( msg ) {
            captcha.attr('src', msg);
        });
    });

    $('#signup_step2').click(function(event){
        event.preventDefault();
        event.stopPropagation();
        var form_valid = true;
        var country = $('#location');
        var password = $('#password');
        var username = $('#username');
        var captcha = $('#captcha');
        var valid_captcha = true;
        var valid_username = true;
        var user_type = $('#user_type');
        if(user_type.val() === ''){
            user_type.next().text('You should choose what you want to do');
            form_valid = false;
        }
        else{
            user_type.next().text('');
        }
        if(country.val() === ''){
            $('#country_error').text('Country is required');
            form_valid = false;
        }
        else{
            country.removeClass('form_error');
            country.next().text('');
        }
        if(password.val() === ''){
            password.addClass('form_error');
            password.next().text('Password is required');
            form_valid = false;
        }
        else{
            password.removeClass('form_error');
            password.next().text('');
        }
        if($('#terms').is(':checked')){
            form_valid = true;
            $('#terms_error').text('');
        }
        else{
            $('#terms_error').text('You should accept our terms');
            form_valid = false;
        }
        if(captcha.val() === ''){
            captcha.addClass('form_error');
            captcha.next().text('Captcha is required');
            form_valid = false;
        }
        console.log(user_type.val());
        if(user_type.val() !== '' && user_type.val() === 'freelancer'){

            if(username.val() !== ''){
                $.ajax({
                    type:'POST',
                    url:'/checkUsername',
                    data: {username : username.val()},
                    headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()},
                    async: false,
                    success:function(data){
                        if(data.success === false){
                            username.addClass('form_error');
                            username.next().text(data.message.username);
                            valid_username = false;
                        }
                        else{
                            username.removeClass('form_error');
                            username.next().text('');
                            valid_username = true;
                        }
                    }
                });
            }
            else{
                username.addClass('form_error');
                username.next().text('Username is required');
                form_valid = false;
            }

        }

        if(form_valid && valid_username){
            $.ajax({
                type:'POST',
                url:'/checkCaptcha',
                data: {captcha : captcha.val()},
                headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()},
                async: false,
                success:function(data){
                    if(data.success === false){
                        captcha.addClass('form_error');
                        captcha.next().text(data.message);
                        valid_captcha = false;
                    }
                    else{
                        captcha.removeClass('form_error');
                        captcha.next().text('');
                        valid_captcha = true;
                    }
                }
            });
            if(valid_captcha){
                $('#signup_form').submit();
            }

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

    $('#signin_user').click(function(event){
        event.preventDefault();
        event.stopPropagation();
        var username = $('#username');
        var password = $('#password');
        var form_valid = true;
        if(username.val() === ''){
            username.addClass('form_error');
            username.next().text('Username is required');
            form_valid = false;
        }
        else{
            username.removeClass('form_error');
            username.next().text('');
        }
        if(password.val() === ''){
            password.addClass('form_error');
            password.next().text('Password is required');
            form_valid = false;
        }
        else{
            password.removeClass('form_error');
            password.next().text('');
        }
        if(form_valid){
            $('#login_form').submit();
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