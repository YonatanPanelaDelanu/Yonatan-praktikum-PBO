<?php
class BaseClass {
    public function baseMethod() {
        echo "Base method";
    }
}

class Logger {
    public function log($msg) {
        echo "Log: $msg";
    }
}

// ❌ ERROR: PHP tidak mendukung pewarisan dari dua class secara langsung
class FileManager extends BaseClass, Logger {
    // ...
}
?>