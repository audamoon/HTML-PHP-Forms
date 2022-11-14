<?php

require_once("functions.php");

$fTxt = fopen("listOfAddresses.txt", "r");
$fDataArray = createGeneralArray($fTxt);
//$selectGroups = findOptGroups($fDataArray);
echoToHTML($fDataArray);

?>