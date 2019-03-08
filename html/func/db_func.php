<?php
function db_connect($host, $user, $pass, $db)
{
    $dsn = 'mysql:dbname='.DB.';host='.DB_HOST.';charset=utf8';
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    return $pdo;
}
function db_prepare($pdo, $sql)
{
    $stm = $pdo -> prepare($sql);
    return $stm;
}
function db_execute($stm, $itemCode)
{
    $stm ->execute($itemCode);
}
