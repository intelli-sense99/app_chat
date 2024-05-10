$(document).ready(function () {

    $('.msger-chat').animate({
        scrollTop: $('.msger-chat').prop('scrollHeight')
    }, 1500);   

    setInterval(getRequert, 1000);
    function getRequert() {

        let actionUrl = "http://localhost/workspace/JQUERY/chat_app/chat_server/get_chat_server.php";
        $.ajax({
            type: "GET",
            url: actionUrl,

            success: function (data) {
                let response = $.parseJSON(data);
                console.log(response);
                if (response.is_success) {
                    console.log(response.msg);
                    $(".msger-chat").html(response.html);
                    // console.log(response.html);

                } else {
                    $.each(response.error, (key, value) => {
                        console.log(value)
                    });


                }
            }

        });

    }

    let user_message = '';
    $('.input_message_value').change(function () {
        user_message = $(this).val();

    });

    $('#chat_form').submit(function (e) {

        $('.error').html('');

        e.preventDefault();

        let actionUrl = "http://localhost/workspace/JQUERY/chat_app/chat_server/chat_server.php";
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: $(this).serialize(),
            success: function (data) {
                let response = $.parseJSON(data);
                $('.msger-chat').animate({
                    scrollTop: $('.msger-chat').prop('scrollHeight')
                }, 1000);

                if (response.is_success) {


                    console.log(response.msg);
                    $("#chat_form").trigger("reset");

                } else {
                    $.each(response.error, (key, value) => {
                        console.log(value)
                    });


                }
            }

        });

    });
});