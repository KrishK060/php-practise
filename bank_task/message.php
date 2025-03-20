<?php

namespace Bank_task;

trait message {
    public function log($message){
        echo "[log] " . $message . "<br>";
    }
}
?>
