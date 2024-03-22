<?php

abstract class abstractFactory
{
    abstract function createTV():abstractTV;
    public static function getFactory(){
        switch (config::$factory){
            case 1:
                return new lampFactory1();
            case 2:
                return new lampFactory2();
            case 3:
                return new ledFactory();
        }
        throw new Exception('Bad config');
    }
}