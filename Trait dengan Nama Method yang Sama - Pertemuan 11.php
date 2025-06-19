<?php
trait A {
    public function sayHello() {
        echo "Hello from A\n";
    }
}

trait B {
    public function sayHello() {
        echo "Hello from B\n";
    }
}

class MyClass {
    use A, B {
        B::sayHello instead of A;       // pakai sayHello dari B
        A::sayHello as sayHelloFromA;   // alias method dari A
    }
}

$obj = new MyClass();
$obj->sayHello();         // Memanggil versi dari B
$obj->sayHelloFromA();    // Memanggil versi dari A
?>