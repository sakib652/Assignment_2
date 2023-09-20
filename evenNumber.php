
<?php

//for loop
function printEvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . "\n";
        }
    }
}

printEvenNumbers(2, 20, 2);

?>


<?php

//whie loop

function printEvenNumberss($start, $end, $step){

    while($start<=$end){
        if($start % 2 == 0) {
            echo $start . "\n";
        }

        $start += $step;
    }
}

printEvenNumberss(2, 20, 2);

?>

<?php

//do while loop

function printEvenNumbersss($start, $end, $step){
    do{
        if($start %2 == 0){
            echo $start. "\n";
        }

        $start += $step;
    } while ($start<=$end);
}

printEvenNumbersss(2, 20, 2);

?>


