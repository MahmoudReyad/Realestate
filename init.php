<?php
define('APP_PATH' , dirname(realpath(__FILE__)));
define('DS' , DIRECTORY_SEPARATOR);
define('PS' , PATH_SEPARATOR);
define('MYCLASSES' , APP_PATH.DS.'Classes');
$paths = get_include_path().PS.MYCLASSES;
set_include_path($paths);
function __autoload($classname){
    include strtolower($classname).'.class.php';
}