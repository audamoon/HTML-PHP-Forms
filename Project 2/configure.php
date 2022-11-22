<?php
$errorsObject = new errorsClass; //создаем объект с ошибками
$errorsObject->validateForm(); //проверяем форму на ошибки
$defaults = array(
    'full_name' => '',
    'email' => '',
    'phone_number' => '',
    'message' => '',
);
$defaults = defaultsChanging($errorsObject, $defaults); //заполняем значения введённые пользователем
?>