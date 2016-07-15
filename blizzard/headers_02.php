<?php

function isUser(){
    
    $psw = array (
        'admin' => '12345',
        'moderator' => 'qwerty',
        'user' => '',
    );
    
    if (
        !isset($_SERVER['PHP_AUTH_USER'])
        || !isset($psw[$_SERVER['PHP_AUTH_USER']])
        || ($psw[$_SERVER['PHP_AUTH_USER']] != $_SERVER['PHP_AUTH_PW'])
    ) {
        return false;
    }

    if (!isset($_COOKIE['userName'])) {
        setcookie('userName', $_SERVER['PHP_AUTH_USER'], time() + 5);
    }

    // setcookie('userName', $_SERVER['PHP_AUTH_USER'], time() + 60);
    $firstLogin  = $_COOKIE['notLogin'];
    
    setcookie('notLogin',0);

    return ($firstLogin || isset($_COOKIE['userName']));
}

//header('Content-Type: text/html; charset=utf-8');
//header('Cache-control: public; max-age=0');
//header('Expires: Sat, 26 July 2000 05:00:00 GMT');

if (!isUser() && !isset($_COOKIE['userName'])) {
    header('WWW-Authenticate: Basic realm="SHOW task"');
    header('HTTP/1.0 401 Unauthorized');
    setcookie('notLogin',1);
    exit(-1);
}

//echo '<br>Hello! ' . $_SERVER['PHP_AUTH_USER'] . '<br> значение в куке = ' . ($_COOKIE['userName'] ? $_COOKIE['userName'] : 'no cookie') . '<br>';
//
//foreach ($_SERVER as $key => $value) {
//    echo "$key = $value <br>";
//}

?>
<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--</head>-->
<!--<body>-->
<!--<span>поверка кодировки</span>-->
<!---->
<!--</body>-->
<!--</html>-->