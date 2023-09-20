<?php

for($i = 1; $i <= 50; $i = $i +1){

    if (in_array($i, [5, 15, 25, 35, 45])) {
        continue;
    }

    echo $i . " ";
}

?>

<?php

for($i= 1; $i<=50; $i= $i+1){
    if($i % 5 == 0){
        continue;
    }

    echo $i . " ";
}


?>

