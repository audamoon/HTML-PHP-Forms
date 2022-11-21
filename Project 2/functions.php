<?php 
function sanitizeInputData($inputVar){
    $inputVar = strip_tags($inputVar);
    $inputVar = htmlentities ($inputVar);
    return $inputVar;
}

function validateForm() { //Поиск ошибок в форме
    $errors = array();
    $full_name = filter_input(INPUT_POST, 'full_name');
    if ( $full_name !== null or $full_name === '') {
        if ((mb_strlen(filter_input(INPUT_POST,'full_name'),"UTF-8") == 0)) {
            $errors['full_name'] = "Заполните поле";
        } 
    }
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    if ($email === false) {
        $errors['email'] = "E-mail введён некорректно";
    }
    return $errors;
}
function defaultsChanging($errors, $defaults) { //сохранение значений, введённых пользователем
    if (count($errors)) {
        if (isset($_POST['full_name'])) {$defaults['full_name'] = sanitizeInputData($_POST['full_name']); }
        if (isset($_POST['email'])) {$defaults['email'] = sanitizeInputData($_POST['email']); }
    }
    return $defaults;
}
function errorCheck($errors,$inputName) { //проверка конкретной формы
    $successText = "\u{2713}"; //символ галки
    if (isset($errors[$inputName])) {
        $currentInputError = $errors[$inputName];
        echo "<p class='error'> $currentInputError </p>";
    } elseif (isset($_POST['btnSubmit'])) {
        echo "<span class='success'> $successText </span>";
    }
}
?>