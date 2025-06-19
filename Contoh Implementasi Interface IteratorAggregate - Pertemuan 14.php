<?php
class MyIterator implements Iterator {
    private $items = ["A", "B", "C"];
    private $index = 0;

    public function current() {
        return $this->items[$this->index];
    }

    public function key() {
        return $this->index;
    }

    public function next() {
        ++$this->index;
    }

    public function rewind() {
        $this->index = 0;
    }

    public function valid() {
        return isset($this->items[$this->index]);
    }
}

$iter = new MyIterator();
foreach ($iter as $key => $value) {
    echo "$key: $value\n";
}