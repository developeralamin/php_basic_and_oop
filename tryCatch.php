<?php

function division($dividen, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("Divission by zero");
    }
    return $dividen / $divisor;
}


try {
    echo division(5, 0);
} catch (Exception $e) {
    echo $e->getLine();
    echo "Unable to divied";
}
