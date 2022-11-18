<?php 
include "index.php";
if ((strlen(filter_input(INPUT_POST,'full_name')) < 6)) {
    print("ФИО должно содержать больше 5 букв");
} 
else {
    print("Форма отправлена");
}
?>