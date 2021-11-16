<?php
ini_set("error_reporting", E_ALL);
require_once 'Person.php';

$p = new Person('太郎', '山田');
var_dump($p);
print $p;
