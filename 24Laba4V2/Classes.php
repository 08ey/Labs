<?php

interface abstractFactory
{
    public function createTV():abstractTV;
}
interface abstractTV{
    public function imageQuality():string;
    public function maxResolution():string;
    public function getDisplay():string;
}
class lampTV implements abstractTV{
    public string $res,$quality;
    /**
     * @param string $res
     * @param string $quality
     */
    public function __construct(string $res, string $quality )
    {
        $this->res = $res;
        $this->quality = $quality;
    }
    public function imageQuality():string{
        return $this->quality.' image';
    }
    public function maxResolution(): string
    {
        return 'Resolution is '.$this->res;
        // TODO: Implement maxResolution() method.
    }
    public function getDisplay(): string
    {
        return "TV with lamp display";
        // TODO: Implement getDisplay() method.
    }

}
class ledTV implements abstractTV{
    public function imageQuality(): string
    {
        return 'Good image';
        // TODO: Implement imageQuality() method.
    }
    public function maxResolution(): string
    {
        return 'Max resolution is 2560x1440';
        // TODO: Implement maxResolution() method.
    }
    public function getDisplay(): string
    {
        return 'TV with LED display';
        // TODO: Implement getDisplay() method.
    }
}
class lampFactory1 implements abstractFactory{
    public function createTV( ): abstractTV
    {
        return new lampTV("123x345", 'bad');
    }
}
class lampFactory2 implements abstractFactory{
    public function createTV(): abstractTV
    {
        return new lampTV('567x890','a bit better');
    }
}
class ledFactory implements abstractFactory{
    public function createTV(): abstractTV
    {
        return new ledTV();
    }
}
function clCo(abstractFactory $factory){
    $product=$factory->createTV();
    echo $product->imageQuality()."<br>".$product->maxResolution().'<br>'.$product->getDisplay()."<br>";
}