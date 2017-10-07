<?php
require 'config.php';

$chat = new Chat();

if (!empty($_POST)):
    $lastId = $chat->save();
endif;
?>
<html>
    <head>
        <title>Chat com PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani|Roboto" rel="stylesheet">

        <script type="text/javascript">
            
        </script>
        
    </head>
    <body>
        <div id="content">

            <div id="chat-box">

                <div id="chat">

                    <?php
                    $sql = new sql();
                    $results = $sql->select('SELECT * FROM tb_chat ORDER BY id DESC');

                    if (count($results) > 0):

                        foreach ($results as $msg):
                            ?>                    
                            <div id = "chat-data">

                                <span class = "name"><?php echo $msg['name']; ?> </span>
                                <span class = "msg"><?php echo $msg['msg']; ?></span>
                                <span class = "date"><?php echo formatDate($msg['date']); ?></span>
                                <div class = "clear"></div>

                            </div><!-- /#chat-data -->

                            <?php
                        endforeach;
                    endif;
                    ?>

                </div><!-- /#chat -->

            </div><!-- /#chat-box -->
            <?php
            if ($chat->getError()):
                echo '<div class="error">' . $chat->getError() . '</div>';
            endif;
            ?>
            <form method="post" action="index.php">

                <input type="text" name="name" placeholder="Nome">
                <textarea placeholder="Inserir Mensagem" name="msg"></textarea>
                <input type="submit" value="Enviar" name="send">

            </form>

            <?php
            if (!empty($lastId)):
                echo '<embed loop="false" src="beep.mp3" hidden="true" autoplay="true">';
            endif;
            ?>

        </div><!-- /#content -->

    </body>
</html>