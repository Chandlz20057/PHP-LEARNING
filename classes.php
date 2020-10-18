<?php

function pretty_dump($arg) {
    echo '<pre>';
    print_r($arg);
    echo '</pre>';
}


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



