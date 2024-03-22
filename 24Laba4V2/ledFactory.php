<?php

class ledFactory extends abstractFactory{
    public function createTV(): abstractTV
    {
        return new ledTV();
    }
}