<?php
require 'config.php';
?>
<html>
    <head>
        <title>Chat com PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani|Roboto" rel="stylesheet">        
        <script src="jquery.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>
    </head>

    <body>
        <div id="content">

            <div id="chat-box">

                <div id="chat">
                    <!-- Local onde vai ser inserido o conteudo do chat -->
                </div><!-- /#chat -->

            </div><!-- /#chat-box -->

            <div class="error"></div>

            <form method="post" action="index.php" id="form">

                <input type="text" name="name" placeholder="Nome">
                <textarea placeholder="Inserir Mensagem" name="msg"></textarea>
                <input type="submit" value="Enviar" name="send">

            </form>

            <div class="audio_sucess"></div>


        </div><!-- /#content -->

    </body>
</html>