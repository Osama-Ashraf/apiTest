<?php
    defined('DS')? null: define('DS',DIRECTORY_SEPARATOR);
    defined('SITE_ROOT')? null: define('SITE_ROOT',DS.'wamp64'.DS.'www'.DS.'apiTest');
    
    defined('INC_PATH')? NULL : define('INC_PATH' , SITE_ROOT.DS.'includes');
    defined('CORE_PATH')? NULL : define('CORE_PATH' , SITE_ROOT.DS.'core');

    //load config file
    require_once(INC_PATH.DS."config.php");


    //core classes
    require_once(CORE_PATH.DS."post.php");
?>