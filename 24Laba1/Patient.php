<?php

class Patient
{
    public string $surname;
    public string $name;
    public string|null $otchestvo;
    public string $adress;
    public string $cardNumber;
    public string $diagnosis;

    /**
     * @param string $surname
     * @param string $name
     * @param string|null $otchestvo
     * @param string $adress
     * @param string $cardNumber
     * @param string $diagnosis
     */
    public function __construct(string $surname, string $name, ?string $otchestvo, string $adress, string $cardNumber, string $diagnosis)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->otchestvo = $otchestvo;
        $this->adress = $adress;
        $this->cardNumber = $cardNumber;
        $this->diagnosis = $diagnosis;
    }

    protected $string;

    public function showByDiagnosis(string $diagnosis)
    {
        if ($this->diagnosis == $diagnosis) {
            echo $this->surname . " " . $this->name . " " . $this->otchestvo . " " . $this->adress . " " . $this->cardNumber . " " . $this->diagnosis;
        }
        return true;
    }

    public function showByCardNum(int $interval1, int $interval2)
    {
        if ($this->cardNumber >= $interval1 && $this->cardNumber <= $interval2) {
            echo $this->surname . " " . $this->name . " " . $this->otchestvo . " " . $this->adress . " " . $this->cardNumber . " " . $this->diagnosis;
        }
        return true;
    }
}