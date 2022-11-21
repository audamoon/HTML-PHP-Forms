<?php
function sanitizeInputData($inputVar)
{
    $inputVar = strip_tags($inputVar);
    $inputVar = htmlentities($inputVar);
    return $inputVar;
}
class ErrorsClass
{
    public $errors = array();
    function isInputEmpty($inputName) //Проверка, пуста ли форма
    {
        $inputNameString = filter_input(INPUT_POST, $inputName);
        if ($inputNameString !== null or $inputNameString === '') {
            if ((mb_strlen(filter_input(INPUT_POST, $inputName), "UTF-8") == 0)) {
                $this->errors[$inputName] = "Заполните поле";
            }
        }
    }
    function validateForm() //Поиск ошибок в форме
    {
        $this->isInputEmpty('full_name');
        $this->isInputEmpty('phone_number');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($email === false) {
            $this->errors['email'] = "E-mail введён некорректно";
        }
    }
}
function saveUserInput($inputName)
{
    if (isset($_POST[$inputName])) {
        return sanitizeInputData($_POST[$inputName]);
    }
}
function defaultsChanging($errorsObject, $defaults)
{ //сохранение значений, введённых пользователем
    if (count($errorsObject->errors)) {
        foreach ($defaults as $inputName => $value) {
            $defaults[$inputName] = saveUserInput($inputName);
        }
    }
    return $defaults;
}
function errorCheck($errorsObject, $inputName)
{ //проверка конкретной формы
    $successText = "\u{2713}"; //символ галки
    if (isset($errorsObject->errors[$inputName])) {
        $currentInputError = $errorsObject->errors[$inputName];
        echo "<p class='error'> $currentInputError </p>";
    } elseif (isset($_POST['btnSubmit'])) {
        echo "<span class='success'> $successText </span>";
    }
}
