<?php

function render_template(string $path, $data = [], $debug = false): void
{
  if (!file_exists($path)) {
    die("File not found");
  } elseif ($debug) {
    echo "<br> Rendering {$path} successfully";
  }

  extract($data, EXTR_PREFIX_SAME, "wddx");

  include_once $path;
}
