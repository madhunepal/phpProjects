<?php
//php has four loops while, do .. while.. for .. foreach
 //while loop syntax

/*
while (condition is true){
    code will be executed;
}
*/

$pen = 5;

while($pen <= 10){

    echo "the price is : $pen <br>";
    $pen++;
}
// do .. while 
do{
    echo " the price is : $pen <br>";
    $pen++;
} while ($pen <=5);

?>