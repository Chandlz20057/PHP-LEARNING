<?php

function pretty_dump($arg) {
    echo '<pre>';
    print_r($arg);
    echo '</pre>';
}

$ryan = 'Ryan';
$cameron = 'Cameron';
$chloe = 'Chloe';

echo $ryan . '<br />' . $cameron . '<br />' . $chloe . '<br />';

class Person {

    public $name;

    public $age;

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

$mom = new Person;

$mom->name = 'Clair';

pretty_dump($mom);

$mom->age = 39;

pretty_dump($mom);

echo '<br />';

echo $mom->getName();

echo '<br />';

echo $mom->getAge();

echo '<br />';

class Family {

    public $name;

    public $members = [];

    public function __construct($name, $members)
    {
        $this->name = $name;
        $this->members = $members;
    }

    public function getMembers() {
        return $this->members;
    }

    public function add($member) {
        $this->members[] = $member;
    }
}

class FamilyMember {

    public $name;

    public $age;

    public $hairColour;

    public function __construct($name, $age, $hairColour)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hairColour = $hairColour;
    }
}

$family = new Family('Grayston', [
    new FamilyMember('Gracie', 10, 'Brown'),
    new FamilyMember('Cameron', 15, 'Blonde'),
    new FamilyMember('Chloe', 18, 'Blonde'),    
    new FamilyMember('Ryan', 20, 'Brown'),
    new FamilyMember('Elleny', 20, 'Ginger'),    
    new FamilyMember('Marc', 35, 'None'),
    new FamilyMember('Clair', 39, 'Brown'),


]);

$family->add(new FamilyMember('Gracie', 10, 'Brown'));

pretty_dump($family);



