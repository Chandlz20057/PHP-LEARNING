<?php

interface Database {
    //function def
    function listorders();
    function addorder();
    function removeorder();

}

class mysqldatabase implements Database {

    public function listorders(){
        //Listing orders

    }
    public function addorder(){
        //adding orders 
    }
    public function removeorder(){
        //removing orders
    }
}

class Oracledatabase implements Database {

    public function listorders(){
        //Listing orders

    }
    public function addorder(){
        //adding orders 
    }
    public function removeorder(){
        //removing orders
    }
}

$database = new mysqldatabase();
foreach ($database->$listorders () as $order){
    //listing orders code
}
    
$database = new Oracledatabase();
foreach ($database->$listorders () as $order){
    //listing orders code
}



?>