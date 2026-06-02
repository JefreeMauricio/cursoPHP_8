<?php

$users= User::findBy(['email' => 'jefreego@gmail.com']);

dd(password_verify('secret',$users[0]->password));
require 'Views/about.view.php';

?>