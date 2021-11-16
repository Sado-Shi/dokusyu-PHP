<?php

trait MyTrait {
  public function hoge() {
    print 'MyTrait!!';
  }
}
class MyParent {
  public function hoge() {
    print 'MyParent!!';
  }
}

class MyChild extends MyParent {
  use MyTrait;


}

$cls = new MyChild();
$cls->hoge();
