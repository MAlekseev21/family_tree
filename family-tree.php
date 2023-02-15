<?php
class Person{
	

    private $name;
	
    private $lastname;
	
    private $age;
	
    private $mother;
	
    private $father;
	
	
    public function __construct($name, $lastname, $age, $mother, $father){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
    }
	
	
    public function getLastname(){
        return $this->lastname;
    }

	
    public function getAge(){
        return $this->age;
    }
	
    public function getMother(){
        return $this->mother;
    }
	
    public function getFather(){
        return $this->father;
    }
	
	public function getName(){
        return $this->name;
    }

    public function info(){
        $result = "Имя:" . $this->name;
        $result = "Фамилия:" . $this->lastname;
        $result = "Возраст:" . $this->age;
        if ($this->getMother() != null){
            $result = "Имя матери:" . $this->getMother()->getName();
            if ($this->getMother()->getFather() != null){
            }
        }
        $result = "Имя дедушки по маминой линии:" . $this->getMother()->getFather()->getName();
        if ($this->getFather() != null) {
            $result = " Имя отца:" . $this->getFather()->getName();
            if ($this->getFather()->getFather() != null) {
                $result = "Имя дедушки по папиной линии:" . $this->getFather()->getFather()->getName();
        
            return $result;
            }
        }
        

        {
        }
    }
}


	
		$Person7 = new Person ("Николай", "Алексеев", 71, null, null);
        $Person6 = new Person ("Лариса", "Алексеева", 72, null, null);
        $Person5 = new Person("Михаил", "Бурый", 70, null, null);
        $Person4 = new Person("Надежда", "Бурая", 82, null, null);

		$mother = new Person("Наталья", "Лысо-Иванова", 49, $Person4, $Person5);
		$dad = new Person("Максим", "Алексеев", 50, $Person6, $Person7);
		$men = new Person ("Алексей","Иванов",25,$mother,$dad);

		$Person7 = new Person ("Николай", "Алексеев", 71, null, null);
        $Person6 = new Person ("Лариса", "Алексеева", 72, null, null);
        $Person5 = new Person("Михаил", "Бурый", 70, null, null);
        $Person4 = new Person("Надежда", "Бурая", 82, null, null);
        $Person3 = new Person("Алексей", "Алексеев", 42, $Person7, $Person6);
        $Person2 = new Person("Наталья", "Лысо-Иванова", 49, $Person5, $Person4);
        $Person1 = new Person("Максим", "Алексеев", 16, $Person3, $Person2);

        echo $men->info();
