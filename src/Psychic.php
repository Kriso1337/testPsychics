<?php

namespace App;

/**
 * Class Psychic
 *
 * класс логики экстрасенса
 */
class Psychic
{
    public string $name;
    private int $trustLevel = 0;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * метод предположения числа экстрасенсом
     * @return int
     */
    public function guess()
    {
        $result = rand(1, 10);
        $timestamp = time();

        $_SESSION['history'][$timestamp][$this->name] = $result;
        return $timestamp;
    }

    /**
     * геттер уровня доверия
     * @return int
     */
    public function getTrustLevel(): int
    {
        return $this->trustLevel;
    }

    /**
     * увеличение уровня доверия
     */
    public function addTrust()
    {
        if (!empty($_SESSION['trustLevels'][$this->name])) {
            $_SESSION['trustLevels'][$this->name]++;
        } else {
            $_SESSION['trustLevels'][$this->name] = 1;
        }
    }

    /**
     * уменьшение уровня доверия
     */
    public function subtractTrust()
    {
        if (!empty($_SESSION['trustLevels'][$this->name])) {
            $_SESSION['trustLevels'][$this->name]--;
        } else {
            $_SESSION['trustLevels'][$this->name] = -1;
        }
    }
}