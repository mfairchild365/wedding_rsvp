<?php
if (file_exists(dirname(__FILE__) . '/config.inc.php')) {
    require_once dirname(__FILE__) . '/config.inc.php';
} else {
    require dirname(__FILE__) . '/config.sample.php';
}

session_start();

$app = new \Wedding_Controller($_GET);

echo $app->render();
