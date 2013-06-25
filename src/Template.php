<?php
class Template {
    private $source;

    public function __construct($source)
    {
       $this->source = $source;
    }

    public function parse()
    {
        return $this->source;
    }
}