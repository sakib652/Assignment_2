<?php

function fibonacci($terms){
    
    $first = 0;
    $second = 1;

    echo "The fibonacci series of (first $terms terms) . \n";

    for($i = 0; $i < $terms; $i++){

        echo $first . " ";

        $next = $first + $second;

        $first = $second;
        $second = $next;
    }

}

fibonacci(15);