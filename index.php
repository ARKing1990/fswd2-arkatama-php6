<?php
class Animal {
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . ".";
    }
}

class Cat extends Animal {
    public $jenis="kucing";
    public function __construct($nama) {
        $this->nama = $nama;
    }
    public function getInfo() {
        return parent::getInfo() . " Kucing adalah hewan yang suka bermain dan bersih.";
    }
}

class Dog extends Animal {
    public $jenis="anjing";
    public function __construct($nama) {
        $this->nama = $nama;
    }
    public function getInfo() {
        return parent::getInfo() . " Anjing adalah hewan yang setia dan cerdas.";
    }
}
$animal = new Animal("Harimau", "karnivora");
echo $animal->getInfo() . "<br>";
$cat = new Cat("Kitty");
echo $cat->getInfo() . "<br>";
$dog = new Dog("Buddy");
echo $dog->getInfo() . "<br>";
?>