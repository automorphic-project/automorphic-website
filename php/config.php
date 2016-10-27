<?php
  // some configuration which should not be hidden in the code
  // only non-specific configuration should be used here (use config.ini for specific configuration)
  $config = array(
    "jQuery" => "https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js",
    "D3" => "http://d3js.org/d3.v3.min.js",
    "blog" => "url of blog in php/config.php",
    "blog feed" => "url of blog feed",
    "GitHub feed" => "https://github.com/automorphic-project/automorphic-project/commits/master.atom",
    "SimplePie cache" => $_SERVER["DOCUMENT_ROOT"] . "/php/cache",
  );
?>
