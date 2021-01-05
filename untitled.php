<?php
$CarOptions= array(
'Audi',
'Lambo',
'Volkswagen',
'Mustang'
);
    $Car = array();
    If(!empty($_POST['car']) && is_array($_POST['car'])){
    Foreach($_POST['car'] as $Car){
    If(in_array($Car,$CarOptions)){
    $Car[]=$Car;
    }
    }
    }
    Var_dump($Car);
    ?>
    <form action=””method=”post”>
    <label>
    Audi
    <input type=”checkbox” name=”vegetables[]” value=''>
    <label>
    <label>
    Lambo
    <input type=”checkbox” name=”vegetables[]” value=''>
    </label>
    <label>
    Volkswagen
    <input type=”checkbox” name=”vegetables[]” value=''>
    </label>
    <label>
    Mustang
    <input type=”checkbox” name=”vegetables[]” value=''>
    </label>


    <form action="lol.php" method="GET">
    <input type="submit" name="submit" value="SUBMIT">
    <?php 
    if  (isset( $_GET['submit'] )) {
        echo 'DO YOU LIKE CAR?';
    }
    ?>

    </form>
