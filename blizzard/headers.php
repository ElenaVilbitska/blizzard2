<?php

function isAdmin(){
    return isset($_SERVER['PHP_AUTH_USER'])
    && ($_SERVER['PHP_AUTH_USER'] == 'admin')
    && ($_SERVER['PHP_AUTH_PW'] == '12345');
}

function isModer(){
    return isset($_SERVER['PHP_AUTH_USER'])
    && ($_SERVER['PHP_AUTH_USER'] == 'moderator')
    && ($_SERVER['PHP_AUTH_PW'] == 'qwerty');
}

function isUser(){
    return isset($_SERVER['PHP_AUTH_USER'])
    && ($_SERVER['PHP_AUTH_USER'] == 'user')
    && ($_SERVER['PHP_AUTH_PW'] == '54321');
}

header('Content-Type: text/html; charset=utf-8');
header('Cache-control: public; max-age=0');
header('Expires: Sat, 26 July 2000 05:00:00 GMT');

//if (!isset($_SERVER['PHP_AUTH_USER'])
//    || ($_SERVER['PHP_AUTH_USER'] != 'admin')
//    || ($_SERVER['PHP_AUTH_PW'] != '12345')
//) {
//    header ('WWW-Authenticate: Basic realm="SHOW task"');
//    header ('HTTP/1.0 401 Unauthorized');
//    exit(-1);
//}

if (isAdmin()) {
    foreach ($_SERVER as $key => $value) {
        echo "$key = $value <br>";
    }
}
elseif (isUser()){
    echo "Hello! " . $_SERVER['PHP_AUTH_USER'];
}
elseif ( !isAdmin() && !isModer() && !isUser() && !isset($_COOKIE['userName'])) {
    header ('WWW-Authenticate: Basic realm="SHOW task"');
    header ('HTTP/1.0 401 Unauthorized');
    exit(-1);
}

if (!isUser() && !isAdmin() && !isModer()) {
    header('WWW-Authenticate: Basic realm="SHOW task"');
    header('HTTP/1.0 401 Unauthorized');
    setcookie('notLogin',1);
    exit(-1);
}
echo "Hello! " . $_SERVER['PHP_AUTH_USER'] . '<br> значение в куке = ' . ($_COOKIE['userName'] ? $_COOKIE['userName'] : 'no cookie') . '<br>';
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <span>поверка кодировки</span>
</body>
</html>