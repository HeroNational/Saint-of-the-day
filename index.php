<?php
    
    //Calling to the Saint class
    require_once("./Saint.php");

    //In static context

    if(isset($_GET['month']) && isset($_GET['day'])){
        
        echo Saint::getSaint($_GET['day'],$_GET['month']);
        
        var_dump(Saint::getSaintStringMonth($_GET['day'],$_GET['month']));

    }else{

        var_dump(Saint::getSaint());
        
        var_dump(Saint::getSaintStringMonth());

    }


    //With intanciation
    $day= new Saint();
    var_dump($day->getSaint());
?>