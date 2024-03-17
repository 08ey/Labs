<?php

abstract class FirmWorker
{
    public string $name, $surname;
    public int $zp, $age;

    /**
     * @param string $name
     * @param string $surname
     * @param int $zp
     * @param int $age
     */
    public function __construct(string $name, string $surname, int $zp, int $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->zp = $zp;
        $this->age = $age;
    }
    abstract function showZp();

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return int
     */
    public function getZp(): int
    {
        return $this->zp;
    }

    /**
     * @param int $zp
     */
    public function setZp(int $zp): void
    {
        $this->zp = $zp;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

}