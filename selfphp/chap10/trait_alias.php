<?php
ini_set("error_reporting", E_ALL);
trait MyTrait1 {
  public function hoge() {
    print 'MyTrait1';
  }
}

trait MyTrait2 {
  public function hoge() {
    print 'MyTrait2';
  }
}


// class MyClass {
//   use MyTrait1, MyTrait2;
// }


class MyClass {
  use MyTrait1, MyTrait2 {
    MyTrait1::hoge insteadOf MyTrait2;
    MyTrait2::hoge as foo;
  }
}
$cls = new MyClass();
$cls->hoge();
print '<br />';
$cls->foo();
