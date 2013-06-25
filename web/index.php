<?php
require_once __DIR__ . '/../vendor/autoload.php';

$templateHtml =<<<END_HTML
<div>{my_var}</div>
{loop items}
   <div>{%index%}. {name}</div>
{end loop}
END_HTML;

$template = new Template($templateHtml);

echo $template->parse();