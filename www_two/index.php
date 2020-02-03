
THIS IS TWO


<?php

echo " - i am TWO";

?>

<br/><br/>


<?php

$strJsonFileContents = file_get_contents("test.json");
$jayson = json_decode($strJsonFileContents, true);

echo $jayson;
var_dump($jayson);

?>