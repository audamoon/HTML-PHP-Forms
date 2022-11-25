<?php

function isCaptchaVerify()
{   
    $response = $_POST['g-recaptcha-response'];
    $secretkey = '6LdT8TMjAAAAAN-jJsmRktnhplDDMg1nnwNlRtD8';
    $url = 'https://www.google.com/recaptcha/api/siteverify';

    $parameters = array(
        'secret' => $secretkey,
        'response' => $response
    );
    $parametrs_string = http_build_query($parameters);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametrs_string);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    $result_array = json_decode($result, true);

    return $result_array['success'];
}
