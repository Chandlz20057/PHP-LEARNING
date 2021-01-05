<?php
$CarOptions= array(
'Audi',
'Lambo',
'Volkswagen',
'Mustang'
);
    $Cars = array('Volkswagen','Audi','Lambo','Mustang');
    if(!empty($_POST['car']) && is_array($_POST['car'])){
    foreach($_POST['car'] as $Car){
    if(in_array($Car,$CarOptions)){
    $Car[]=$Car;
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
