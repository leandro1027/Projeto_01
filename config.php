<?php
 //definir o dominio
    define('INCLUDE_PATH', 'http://localhost/Projeto_01/');

    //carregando a classe: 'Email'
    $autoload = function($class){
        include('assets/Classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);
?>