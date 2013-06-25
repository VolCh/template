<?php
require_once __DIR__ . '/../vendor/autoload.php';

class TemplateTest extends PHPUnit_Framework_TestCase
{
    public function testTextOutput()
    {
        $source = 'template';
        $template = new Template($source);

        $result = $template->parse();

        $this->assertEquals('template', $result);
    }
}
