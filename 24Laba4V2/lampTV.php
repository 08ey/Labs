<?php

class lampTV extends abstractTV
{

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