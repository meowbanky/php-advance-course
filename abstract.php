<?php
interface Animal {
    public function makeSound();

    public function eat():string;
  }
  
  class Cat implements Animal {
    public function makeSound() {
      echo " Meow ";
    }
    public function eat():string{
        return "I eat grass";
    }
  }
  
  class Dog implements Animal {
    public function makeSound() {
      echo " Bark ";
    }
    public function eat(): string
    {
        return "I eat meat";
    
    }
  }
  
  class Mouse implements Animal {
    public function makeSound() {
      echo " Squeak ";
    }
    public function eat(): string
    {
        return "eat Squeak";
    }
  }
  
  $cat = new Cat();
  $dog = new Dog();
  $mouse = new Mouse();
  $animals = array($cat, $dog, $mouse);
  
  foreach($animals as $animal) {
    $animal->makeSound();
    "<br>";
    echo $animal->eat()."<br>";
}

?>