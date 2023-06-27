var token = $('meta[name="csrf-token"]').attr('content');

function regiEmployee() {
    var name = $('.register #name_input').val();
    var email = $('.register #email_input').val();
    var password = $('.register #password_input').val();
    $.ajax({
        type: "POST",
        url: "/register-emp",
        data: {
            name: name,
            email: email,
            password: password,
            _token: token
        },
        success: function(response) {
            console.log(response);
            var url = window.location.href = "/login";
            return url;

        }
    });
}