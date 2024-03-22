<?php

class Decorator
{
    public function stateUp(Driver $driver)
    {
        echo $driver->state->stateNext();
        return $this;
    }
    public function stateDown(Driver $driver)
    {
        echo $driver->state->statePrev();
        return $this;
    }
}