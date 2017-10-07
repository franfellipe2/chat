<html>
    <head>
        <title>Chat com PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="content">

            <div id="chat-box">

                <div id="chat">

                    <div id="chat-data">

                        <span>Nome:</span>
                        <span>Texto da mensagem</span>
                        <span>Hora de envio</span>

                    </div><!-- /#chat-data -->

                </div><!-- /#chat -->

            </div><!-- /#chat-box -->

            <form method="post" action="index.php">
                
                <input type="text" name="name" placeholder="Nome">
                <textarea placeholder="Inserir Mensagem" name="mensage"></textarea>
                <input type="submit" value="Enviar" name="send">

            </form>

        </div><!-- /#content -->
        
    </body>
</html>