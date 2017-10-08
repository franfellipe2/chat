<?php
require 'config.php';

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