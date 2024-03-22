<?php

class lampFactory1 extends abstractFactory{
    public function createTV( ): abstractTV
    {
        return new lampTV("123x345", 'bad');
    }
}