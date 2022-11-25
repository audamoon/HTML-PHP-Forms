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
        $inputNameString = trim(filter_input(INPUT_POST, $inputName));
        if (isset($_POST[$inputName]) and ($inputNameString == null or $inputNameString == "")) {
            $this->errors[$inputName] = "Заполните поле";
        }
    }
    function validateForm() //Поиск ошибок в форме
    {
        $inputNamesArray = array('full_name', 'phone_number', 'message');
        foreach ($inputNamesArray as $inputName) {
            $this->isInputEmpty($inputName);
        }
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($email === false) {
            $this->errors['email'] = "E-mail введён некорректно";
        }
        if (isset($_POST['btnSubmit'])) {
            if (!isset($_POST['personal_data_argeement']) or !isset($_POST['personal_data_policy'])) {
                $this->errors['personal_data'] = "Вы должны подтвердить согласие на обработку персональных данных";
            };
            require 'verifyRecaptcha.php';
            if (isCaptchaVerify() == false) {
                $this->errors['captcha'] = "Вы должны подтвердить, что вы человек, прежде чем отправить форму";
            };
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
        echo "<span class='error'> $currentInputError </span >";
    } elseif (isset($_POST['btnSubmit']) and $inputName !== "personal_data" and $inputName !== "captcha") {
        echo "<span class='success'> $successText </span>";
    }
}
