<?php
/**
 * Created by PhpStorm.
 * User: wyatt
 * Date: 5/9/2018
 * Time: 11:35 AM
 */
$configJson = json_decode(file_get_contents(ROOT . "/common/config.json"));
if ($configJson->{'debug'} == "true") {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
include 'common/config.php';
$config = new config();
include 'common/conn.php';
define('ROOT', $config->baseURl);

