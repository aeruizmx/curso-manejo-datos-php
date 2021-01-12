<?php

require __DIR__ . '/vendor/autoload.php';

echo preg_match('/^$[0-9]{6,9}/','12345');
var_dump(App\Validate::password('123456'));