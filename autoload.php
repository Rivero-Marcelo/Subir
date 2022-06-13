<?php 

    spl_autoload_register(function ($clase){        
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/Parcial/Modelos/$clase.class.php"))
            require $_SERVER['DOCUMENT_ROOT'] . "/Parcial/Modelos/$clase.class.php";    

            

    
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/Parcial/Controladores/$clase.class.php"))
            require $_SERVER['DOCUMENT_ROOT'] . "/Parcial/Controladores/$clase.class.php";

            
        
    });

    //require_once "config.php";

    


