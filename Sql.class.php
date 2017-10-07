<?php

class sql {

    /** @var PDO */
    static $conn;

    public function __construct() {

        try {


            if (self::$conn == null) {

                $dsn = 'mysql:host=' . HOST_NAME . ';dbname=' . HOST_DBNAME;
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];
                self::$conn = new PDO($dsn, HOST_USER, HOST_PASS, $options);
            }
        } catch (PDOException $e) {

            echo '<p>Erro' . $e->getCode() . ': ' . $e->getMessage() . '<samll>' . $e->getFile() . '</samll>' . $e->getLine();

            die;
        }

        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$conn;
    }

    private function setParams($statement, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this->bindParam($statement, $key, $value);
        }
    }

    private function bindParam($statement, $key, $value) {

        if (is_int($value)):
            $statement->bindParam($key, $value, \PDO::PARAM_INT);
        else:
            $statement->bindParam($key, $value);
        endif;
    }

    /**
     * Executa uma instrucao sql, ex: INSERT INTO...
     * 
     * @param string $rawQuery passar aqui a sua instrução sql
     * @param array $params passe aqui os bindParams
     */
    public function query($rawQuery, $params = array()) {

        $stmt = self::$conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();
    }

    /**
     * Retorna os dados de uma instrução sql, ex: SELECT * FROM...
     * 
     * @param string $rawQuery passar aqui a sua instrução sql
     * @param array $params passe aqui os bindParams
     * @return array
     */
    public function select($rawQuery, $params = array()): array {

        $stmt = self::$conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();


        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}
