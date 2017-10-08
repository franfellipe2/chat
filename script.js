$(function () {


    //Carregamento das mensagens 
    setInterval(function () {

        $.ajax({
            url: 'chat.php',
            dataType: 'html',
            success: function (response) {
                $('#chat').html(response);
            }

        });

    }, 1000);

    //Cadastra mensagem
    $('#form').submit(function () {

        var form = $(this);
        var data = $(this).serialize();

        $.ajax({
            url: 'chat_save.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                $('.error').html('');
            },
            success: function (response) {

                console.log(response);

                if (response.error) {

                    $('.error').html(response.error);

                }

                if (response.sucess) {

                    $('.audio_sucess').html('<embed loop="false" src="beep.mp3" hidden="true" autoplay="true">');

                }
            }
        });

        return false;

    });

});