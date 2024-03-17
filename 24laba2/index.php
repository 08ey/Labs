<?php
include "FirmWorker.php";
include "Manager.php";
include "Admin.php";
include "Programmer.php";
$manager1=new Manager('ab','ba',1000,27);
$Admin1=new Admin("cd","dc",200,20);
$Programmer1 = new Programmer("ef","fe", 100,36);
$ar=[$manager1,$Admin1,$Programmer1];
foreach ($ar as $item) {
    echo " ".$item->showZP()." ";
}
