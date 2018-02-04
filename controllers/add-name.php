<?php

$app['database']->insert('users',[
    'username' => $_POST['name']
]);

header('Location: /');