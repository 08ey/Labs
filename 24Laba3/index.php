<?php
include 'bd.php';
$bd=bd::getInstance();
var_dump($bd->actionQuery('localhost', 'root', '', 'aboba'));