<?php

class Chat extends sql {

    private $error;
    private $data;

    public function save() {

        if (in_array('', $_POST)):
            $this->error = 'Preencha todos os campos';
            return false;
        endif;

        $result = $this->query('INSERT INTO tb_chat (name, msg) VALUES (:name, :msg)', [
            ':name' => $_POST['name'],
            ':msg' => $_POST['msg']
        ]);

        return parent::$conn->lastInsertId();
    }

    public function getError() {
        return $this->error;
    }

}
