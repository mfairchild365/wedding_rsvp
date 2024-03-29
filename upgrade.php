<?php
if (file_exists(dirname(__FILE__).'/config.inc.php')) {
    require_once dirname(__FILE__).'/config.inc.php';
} else {
    require dirname(__FILE__).'/config.sample.php';
}

echo 'Connecting to the database&hellip;';
$db = Wedding_Controller::getDB();
echo 'connected successfully!<br />';
/**
 * 
 * Enter description here ...
 * @param mysqli $db
 * @param string $sql
 * @param string $message
 * @param bool   $fail_ok
 */
function exec_sql($db, $sql, $message, $fail_ok = false)
{
    echo $message.'&hellip;'.PHP_EOL;
    try {
        if ($db->multi_query($sql)) {
            do {
                /* store first result set */
                if ($result = $db->store_result()) {
                    $result->free();
                }
            } while ($db->next_result());
        }
    } catch (Exception $e) {
        if (!$fail_ok) {
            echo 'The query failed:'.$result->errorInfo();
            exit();
        }
    }
    echo 'finished.<br />'.PHP_EOL;
}

exec_sql($db, file_get_contents(dirname(__FILE__).'/data/database.sql'), 'Initializing database structure');