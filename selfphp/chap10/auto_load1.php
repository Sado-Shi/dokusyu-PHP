<?php
ini_set("error_reporting", E_ALL);

$p = new Person('太郎', '山田');
print_r(ini_get_all());
$p->show();
// test
