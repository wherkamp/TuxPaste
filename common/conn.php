<?php
/**
 * Created by PhpStorm.
 * User: wyatt
 * Date: 5/9/2018
 * Time: 11:33 AM
 */
$conn = new PDO("mysql:host=$config->host;dbname=$config->db", $config->dbuser, $config->dbpass);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
