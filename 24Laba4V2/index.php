<?php
require_once 'abstractFactory.php';
require_once 'abstractTV.php';
require_once 'lampFactory1.php';
require_once 'lampFactory2.php';
require_once 'ledTV.php';
require_once 'lampTV.php';
require_once 'ledFactory.php';
require_once 'config.php';
$prod=abstractFactory::getFactory()->createTV();
echo($prod->getDisplay().'<br>'.$prod->maxResolution().'<br>'.$prod->imageQuality());
