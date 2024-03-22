<?php
require_once 'State.php';
require_once 'Decorator.php';
require_once 'Object.php';
$obj=new Driver(new State());
$dec=new Decorator();
$dec->stateUp($obj)->stateUp($obj)->stateUp($obj);
