<?php
$CarOptions=[
'Audi',
'Lambo',
'Volkswagen',
'Mustang'
];
    $Cars = [];
    if(!empty($_POST['cars']) && is_array($_POST['cars'])){
    foreach($_POST['cars'] as $Car){
    if(in_array($Car,$CarOptions)){
    $Cars[]=$Car;
    }
    }
    }
    var_dump($Cars);
    ?>
    <form action=””method=”post”>
    <label>
    Audi
    <input type=”checkbox” name=”cars[]” value=''>
    <label>
    <label>
    Lambo
    <input type=”checkbox” name=”cars[]” value=''>
    </label>
    <label>
    Volkswagen
    <input type=”checkbox” name=”cars[]” value=''>
    </label>
    <label>
    Mustang
    <input type=”checkbox” name=”cars[]” value=''>
    </label>


    <form action="lol.php" method="GET">
    <input type="submit" name="submit" value="SUBMIT">
    <?php 
    if  (isset( $_GET['submit'] )) {
        echo 'DO YOU LIKE CAR?';
    }
    ?>

    </form>
