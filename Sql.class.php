<?php

class sql {

    /** @var PDO */
    static $conn;

    public function conect() {

        try {


            if (self::$conn == null) {

                $dsn = 'mysql:host=' . HOST_NAME . ';dbname=' . HOST_DBNAME;
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                self::$conn = new PDO($dsn, HOST_USER, HOST_PASS, $options);
            }
        } catch (PDOException $e) {

            echo '<p>Erro' . $e->getCode() . ': ' . $e->getMessage() . '<samll>' . $e->getFile() . '</samll>' . $e->getLine();

            die;
        }

        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$conn;
    }
    
    

}
