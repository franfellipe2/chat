<?php

require 'config.php';

$json = null;

if (!empty($_POST)):

    $chat = new Chat();

    $lastId = $chat->save();


    if ($chat->getError()):

        $json['error'] = $chat->getError();

    endif;


    if ($lastId > 0):

        $json['sucess'] = true;

    endif;

endif;

echo json_encode($json);
?>