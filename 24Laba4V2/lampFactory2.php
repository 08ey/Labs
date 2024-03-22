<?php

class lampFactory2 extends abstractFactory{
    public function createTV(): abstractTV
    {
        return new lampTV('567x890','a bit better');
    }
}