
here I am


<?php

echo " - i am here";

?>


<br/><br/><br/>

Get JSON from other docker - 
<?php echo $_ENV['JSONSRC']; ?>:

<?php


$strJsonFileContents = file_get_contents($_ENV['JSONSRC'] . "/test.json");
$jayson = json_decode($strJsonFileContents, true);

echo $jayson;
var_dump($jayson);


?>