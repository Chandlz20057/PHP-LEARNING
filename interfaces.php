<?php

interface Payment {
    //function def
    function listorders();
    function addorder();
    function removeorder();

}

class contactless implements Payment {

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

class card implements Payment {
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

class cash implements Payment {
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
$database = new contactless();
foreach ($database->listorders() as $order){
    //listing orders code
}
    
$database = new card();
foreach ($database->listorders() as $order){
    //listing orders code
}
    
foreach ($database->listorders() as $order){
    //listing orders code
}


?>