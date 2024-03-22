<?php

class State
{
    public array $states = ['stop<br>', 'giving license<br>', 'showing extinguisher<br>', 'offering a bribe<br>', 'leaving<br>'];
    public int $state = 0;
    public function stateNext()
    {
        if ($this->state < 4) {
            return $this->states[$this->state++];
        }
        else{
            return $this->states[$this->state = 5];
        }
    }

    public function statePrev()
    {
        if ($this->state > 0) {
            return $this->states[$this->state--];
        } else {
            return $this->states[$this->state = 0];
        }
    }

}