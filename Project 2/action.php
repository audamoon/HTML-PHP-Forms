<?php 

function validateForm() {
    $errors = array();
    if ((mb_strlen(filter_input(INPUT_POST,'full_name'),"UTF-8") < 6)) {
        $errors['full_name'] = "ФИО должно содержать больше 5 букв";
    }
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    if ($email === false) {
        $errors['email'] = "E-mail введён некорректно";
    }
    return $errors;
}
function defaultsChanging($errors, $defaults) {
    if (count($errors)) {
        if (isset($_POST['full_name'])) {$defaults['full_name'] = $_POST['full_name']; }
        if (isset($_POST['email'])) {$defaults['email'] = $_POST['email']; }
    }
    return $defaults;
}

$defaults=array('full_name' => '',
'email' => '');
$errors = validateForm();
$defaults = defaultsChanging($errors,$defaults);
?>