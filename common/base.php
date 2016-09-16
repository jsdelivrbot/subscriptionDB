<?php
/**
 * Created by PhpStorm.
 * User: gd
 * Date: 12.6.2016
 * Time: 02:28
 */

    define(root, dirname(__FILE__));
    // Set the error reporting level
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    // Start a PHP session
    //session_start();

    // Include site constants
    include_once (root . '/../inc/constants.php');
    // Create a database object
    try {
        $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
        $db = new PDO($dsn, DB_USER, DB_PASS);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit;
    }
?>