<?php

const FOLDER = "aula07";

if (isset($_GET['controller']) && isset($_GET['acao'])) {
    $controller = $_GET['controller'];
    $metodo = $_GET['acao'];
    $controller .= 'Controller';



    require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/controller/' . $controller . '.php';

    $objeto = new $controller();
    $objeto->$metodo();
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/home.php';
}
