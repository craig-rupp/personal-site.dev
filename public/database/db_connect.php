<?php

const DB_HOST = '127.0.0.1';
const DB_NAME = 'personal_site';
const DB_USER = 'craig_user';
const DB_PASS = 'cazorla19!';

$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . "", DB_USER, DB_PASS);
// var_dump($dbc);
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>