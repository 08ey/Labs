<?php

class Driver
{
    public State $state ;

    /**
     * @param $state
     */
    public function __construct(state $state)
    {
        $this->state = $state;
    }


}