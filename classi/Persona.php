<?php

class Persona
{
    const favColor = "yellow";


    public function __construct(protected string $name, protected int $age, protected string $email)
    {
        //fa tutto php perchè 8.0 (non c'è sul libro)
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function introduce() :string{
        return "hi, my is name is {$this -> name}, i am  {$this -> age} years old and my email is {$this -> email} and my fav color is: " .self::favColor;
    }

}