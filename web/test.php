<?php

// echo phpinfo();

class A {
  public function test() {
    echo "Class A is echoing";
  }
}

class B extends A {
  public function test() {
    parent::test();
    echo "Class B is echoing";
  }
}

$a = new A();
$b = new B();
$b->test();
