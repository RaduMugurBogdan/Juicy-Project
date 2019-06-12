<?php 
    session_start();

    // 1 1 1 2 1 2 3 4 

    // foreach($_SESSION['cart'] as $itemId){
    //     echo $itemId;
    // }

    $vals = array_count_values($_SESSION['cart']);
echo 'No. of NON Duplicate Items: '.count($vals).'<br><br>';
print_r($vals);
foreach($vals as $key => $val) {
    echo $key.$vals[$key]; // $key -> id item from db, $vals[$key] -> nr de apariti
} 



    
?>