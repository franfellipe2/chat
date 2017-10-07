<?php

// ===================================================
// BANCO DE DADOS
// ===================================================
define('HOST_NAME', 'localhost');
define('HOST_DBNAME', 'chat');
define('HOST_USER', 'root');
define('HOST_PASS', '');

// ===================================================
// AUTO LOAD
// ===================================================
function __autoload($class) {
    
   if(file_exists($class.'.class.php')):       
       require_once $class.'.class.php';
   else:
       echo "Não foi possível incluir a class $class.class.php";
   endif;
}

// ===================================================
// ARQUIVOS NECESSÁRIOS
// ===================================================
require 'functions.php';