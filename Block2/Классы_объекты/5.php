<?php

declare(strict_types = 1);

trait Loggable {
    public function log(string $message): void {
        echo "[LOG]: $message";
    }
}

?>