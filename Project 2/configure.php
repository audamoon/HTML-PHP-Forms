<?php
$errors = validateForm();
$defaults = array(
    'full_name' => '',
    'email' => ''
);
$defaults = defaultsChanging($errors, $defaults); ?>