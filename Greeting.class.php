<?php
class HelloWorld
{
    private $message = array(0x48, 0x65, 0x6c, 0x6c, 0x6f, 0x2c, 0x20, 0x77, 0x6f, 0x72, 0x6c, 0x64, 0x21);
    
    public function __construct() {
        foreach($this->message as $value){
            echo chr($value);
        }
    }
}

new HelloWorld();
