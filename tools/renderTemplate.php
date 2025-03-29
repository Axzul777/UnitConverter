<?php
declare(strict_types=1);


function render_template(string $template, array $args = []) : void
{
  $template_path = __DIR__ . "/../templates" . $template . ".php";

  if (!file_exists($template_path)) {
    die("Template not found: {$template}");
  }
  


  // Practical way to pass data and manage as vars
  // for example:
  // args = ["data" = json_decode($json), "title": "UnitConverter"]  
  extract($args, EXTR_PREFIX_SAME, "wddx");
  
  include $template_path;
}
