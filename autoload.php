<?php
spl_autoload_register(function($nameFile){
    
    if (file_exists('Controller/'.$nameFile.'.php')){
        require 'Controller/'.$nameFile.'.php';
    }elseif (file_exists('Model/'.$nameFile.'.php')){
        require 'Model/'.$nameFile.'.php';
    }elseif (file_exists('Core/'.$nameFile.'.php')){
        require 'Core/'.$nameFile.'.php';
    }

});
?>