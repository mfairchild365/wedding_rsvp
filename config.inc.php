<?php
function autoload($class)
{
    $file = str_replace(array('_', '\\'), '/', $class).'.php';
    if ($fullpath = stream_resolve_include_path($file)) {
        include $fullpath;
        return true;
    }
    return false;
}
    
spl_autoload_register("autoload");

set_include_path(
    implode(PATH_SEPARATOR, array(get_include_path())).PATH_SEPARATOR
    .dirname(__FILE__) . '/src'.PATH_SEPARATOR
    .dirname(__FILE__).'/lib/php/Epoch/src'.PATH_SEPARATOR
);

//Session life in seconds.
ini_set("session.gc_maxlifetime", 7200); 

ini_set('display_errors', true);

error_reporting(E_ALL);

Wedding_Controller::$cacheRoutes = false;

Wedding_Controller::$url = 'http://localhost/wedding/';

Wedding_Controller::$applicationDir = dirname(__FILE__);

Wedding_Controller::$customNamespace = 'Wedding';

Wedding_Controller::$email = "mfairchild365@gmail.com";


Wedding_Controller::setDbSettings(array(
    'host'     => 'localhost',
    'user'     => 'mfairchi',
    'password' => '123123',
    'dbname'   => 'wedding'
));
