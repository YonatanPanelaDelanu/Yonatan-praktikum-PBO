<?php
class BaseClass {
    public function baseMethod() {
        echo "Base method\n";
    }
}

class Logger {
    public function log($msg) {
        echo "Log: $msg \n";
    }
}

trait LoggerTrait {
    public function log($msg) {
        echo "Log: $msg\n";
    }
}

class FileManager extends BaseClass {
    use LoggerTrait;

    public function save() {
        $this->log("Saving file...");
    }
}

// Pemanggilan:
$file = new FileManager();
$file->baseMethod();  // dari BaseClass
$file->save();        // dari LoggerTrait
?>