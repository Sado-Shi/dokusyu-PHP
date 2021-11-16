<?php
class MyClass
{
  public function __get($name)
  {
    echo "{$name}プロパティは存在しません";
  }
}
