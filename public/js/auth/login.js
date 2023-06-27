var token = $('meta[name="csrf-token"]').attr('content');


function logEmployee(){
    var email = $('#email_input').val();
    var password = $('#password_input').val();
    $.ajax({
        type: "POST",
        url: "/login-emp",
        data: {
            email:email,
            password:password,
            _token: token
        },
        success: function (response) {
            $('input[type="text"],textarea').val('');
            $('input[type="password"],textarea').val('');
            var url =  window.location.href = "/";
            return url;
        }
    });

}