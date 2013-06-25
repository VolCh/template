<?php
class Template {
    private $source;
    private $vars = [];

    public function __construct($source)
    {
       $this->source = $source;
    }

    public function parse()
    {
        $pattern = '#{([a-zA-Z][\da-zAZ_]*)}#'; // one ASCII letter and any digits, letters and underscores in brackets

        $result = preg_replace_callback($pattern, function($matches) {
            $var_name = $matches[1];

            return $this->vars[$var_name];
        }, $this->source);

        return $result;
    }

    public function assign($var_name, $value)
    {
        $this->vars[$var_name] = $value;
    }
}