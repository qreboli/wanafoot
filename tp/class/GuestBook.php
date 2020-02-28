<?php
require_once 'Message.php';

class GuestBook {

    private $file;

    public function __construct(string $file)
    {
        $directory = dirname($file);
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }
        if (file_exists($file)) {
            touch($file);
        }
        $this->file = $file;
    }

    public function addMessage(Message $message) :void
    {
        file_put_contents($this->file, $message, FILE_APPEND);
    }

}