<?php
require_once "Volounteer.php";
class Studente extends Persona implements Volounteer
{
 public function __construct(string $name, int $age, string $email, private string $school){
    parent::__construct($name, $age, $email);

}

    public function getSchool(): string
    {
        return $this->school;
    }

    public function setSchool(string $school): void
    {
        $this->school = $school;
    }
    public function studentIntroduction() : string{
     return parent::introduce()." and i attend the school: $this->school";
    }


    public function toDo() :string
    {
        return "my name is $this->name and i'm the one that's here to kill you";
    }
}