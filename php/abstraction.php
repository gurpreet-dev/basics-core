<?php

abstract class Animal { 
 
    public abstract function getAnimalType(); 
  }
   
  class Cow extends Animal {
     public function getAnimalType() { 
          return  "Cow";
     } 	
  }
   
  class Zebra extends Animal {
     public function getAnimalType() {
        return "Zebra";
     }
  }
   
  $cow = new Cow();
  echo $cow->getAnimalType().'<br>';


/***************************/


abstract class AbstractClass
{
    // abtract method defined
    abstract protected function name();
    abstract protected function age();
    abstract protected function profession($sex);
    // In abstract Class we can also define common method also.
    public function getName(){
     return $this->name();
    }
}

class ManClass extends AbstractClass
{
    protected function name() {
        return "Faysal Ahmed";
    }

    public function age() {
        return 35;
    }

    public function profession($sex){
     switch ($sex) {
      case 'male':
       $profession = "Engineer";
       break;
      case 'female':
       $profession = "Doctor";
       break;
      default:
       $profession = "Teacher";
       break;
     }
     return $profession;
    }
}

$manClass = new ManClass();
$manName = $manClass->getName();
$manAge = $manClass->age();
$manProfession = $manClass->profession("male");
echo "{$manName} is a {$manAge} years old & an {$manProfession}</br>";