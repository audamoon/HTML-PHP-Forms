<html>
    <head>
    <?php
        require_once("functions.php");
        $fTxt = fopen("listOfAddresses.txt", "r");
        $fDataArray = createGeneralArray($fTxt);
        $index = $_POST["addresses"];
        echo "<meta http-equiv=\"refresh\" content = \"0; URL={$fDataArray[$index]['link']}\" />";
    ?>
    </head> 
</html>








