<?php
class Task //Equivalente a Model
{
    private $taskId;
    private $task;
    private $date;

    // Métodos "mágicos" de encapsulamento do PHP
    public function __get($atrib)
    {
        return $this->$atrib;
    }

    public function __set($atrib, $value)
    {
        $this->$atrib = $value;
    }

}

?>