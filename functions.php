<?php
//создание субмассива
function createSubArray($stringArray) {
    list($address, $addressNumber, $link) = $stringArray;
    return compact('address', 'addressNumber', 'link');
}
//создание основного массива
function createGeneralArray ($fileWithAddresses) {
    $generalArray = array();
    while (! feof($fileWithAddresses)) {
        $fileLine = fgets($fileWithAddresses); //взятие строки
        $stringArray = preg_split("/_/",$fileLine); //разбитие строки
        $subArray = createSubArray($stringArray);
        $generalArray[] = $subArray; 
        }
    return $generalArray;
}
//Нахождение уникальных групп для select
function findOptGroups ($generalArray) {
    $addressesArray = array();
    foreach ($generalArray as $subArray) {
        if (! in_array($subArray['address'],$addressesArray)) {
            $addressesArray[] = $subArray['address'];
        }
    }
    return $addressesArray;
}

function echoToHTML ($fDataArray, $selectGroups) {
    foreach ($selectGroups as $group) {
        print "<optgroup label=\"{$group}\">\n";
        for ($counter = 0; $counter < count($fDataArray);$counter++) {
                $address = $fDataArray[$counter]['address'];
                $addressNumber = $fDataArray[$counter]['addressNumber'];
                    if ($address == $group) {
                    print "<option value=\"{$counter}\">{$addressNumber}</option>\n";
                    }
       }
    }
}
?>