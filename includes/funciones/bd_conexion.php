<?php
    define('GDLWEBCAMP_HOST', 'localhost');
    define('GDLWEBCAMP_DB_USUARIO', 'root');
    define('GDLWEBCAMP_DB_PASSWORD', '123456');
    define('GDLWEBCAMP_DB_DATABASE', 'gdlwebcamp2');

    $conn = new mysqli(GDLWEBCAMP_HOST, GDLWEBCAMP_DB_USUARIO, GDLWEBCAMP_DB_PASSWORD, GDLWEBCAMP_DB_DATABASE);

    if($conn->connect_error) {
      echo $conn->connect_error;
    }
