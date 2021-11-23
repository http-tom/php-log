<?php
namespace HttpTom\Log;

class Log {

    private $entries = [];
    private $realtime = false;
    private $function = 'echo';

    public function __construct() {}

    public function setOutputMode($realtime, $function = 'echo') {
        $this->realtime = $realtime;
        $this->function = $function;
    }

    public function add($entry)
    {
        $this->entries[] = $entry;

        if($this->realtime === true)
        {
            eval("{$this->function}('".addslashes($entry)."');");
        }
    }

    public function appendPrev($entry) {
        $this->entries[count($this->entries)-1] .= $entry;

        if($this->realtime === true)
        {
            eval("{$this->function}('".addslashes($entry)."');");
        }
    }

    public function dump() 
    {
        foreach($this->entries as $entry)
        {
            print_r($entry).PHP_EOL;
        }
    }

}