<?php
/**
 * Created by PhpStorm.
 * User: lucas genari
 * Date: 28/08/2018
 * Time: 16:51
 */

$dir = "";
if($_SERVER['SERVER_NAME'] == "sitedozero.com.br"){
    $dir = "/";
}else if($_SERVER['SERVER_NAME'] == "localhost"){
    $dir = "/local/projetobase/";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <base href="//<?=$_SERVER['SERVER_NAME'].$dir?> ">
        <title><?= $titulo ?></title>
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
    </head>
    <body style="background-color: #010101">
