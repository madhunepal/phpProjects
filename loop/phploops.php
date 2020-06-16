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

<?php 
// for loop
/* syntax
for init counter; test counter; increment counter) {
    code will be executed for itiration;
}
*/
for ($a = 0; $a <= 5; $a++){
    echo "the number is : $a <br>";
}

?>
<?php
// foreach loop 
/*
foreach ($array as $value) {
  code to be executed;
}
*/
$colors = array("green", "red", "blue", "yellow", "pink");

foreach($colors as $value){

    echo "$value <br>";
}

?>