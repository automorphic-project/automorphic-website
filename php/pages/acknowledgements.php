<?php

require_once("php/page.php");
require_once("php/general.php");

class AcknowledgementsPage extends Page {
  public function getMain() {
    global $config;
    $output = "";

    $output .= "<h2>Acknowledgements</h2>";
    $output .= "<p>The website underlying the Automorphic Project has been shamelessly copied from the Stacks Project. We are very grateful to Johan de Jong and Pieter Belmans for allowing us to use their work, and Pieter Belmans for constant support.";
//What you see here is the current status of the file <a href='https://github.com/automorphic-project/automorphic-project/tree/master/documentation'><var>documentation/support</var></a> in the project. The intent is to list support from institutions that have made the Stacks project possible. If you have participated in the Stacks project and wish to acknowledge support, please contact <a href='mailto:automorphic.project@gmail.com'>automorphic.project@gmail.com</a> and we will add it here.";
//    $file = file_get_contents($config["project"] . "/documentation/support");
//    $items = explode("\n\n\n", $file);
//    $output .= "<ol>";
//    foreach ($items as $item) {
//      $item = str_replace('<em>', '_', $item);
//      $item = str_replace('</em>', '_', $item);
//      $item = str_replace('<p>', '', $item);
//      $item = str_replace('</p>', '', $item);
//      $output .= "<li>" . $item;
  //  }
    $output .= "</ol>";

    $output .= "<h2>Open-source software</h2>";
    $output .= "<p>The Stacks project is built using open-source: LaTeX, Python, PHP, ...";
    $output .= "<p>Besides these usual suspects, the website also uses several libraries. These are";
    $output .= "<ul>";
    $output .= "<li><a href='http://d3js.org/'>D3.js</a>";
    $output .= "<li><a href='http://jquery.com'>JQuery</a>";
    $output .= "<li><a href='http://mathjax.org'>MathJax</a>";
    $output .= "<li><a href='https://github.com/sonoisa/XyJax'>XyJax</a>";
    $output .= "<li><a href='http://epiceditor.com'>EpicEditor</a>";
    $output .= "<li><a href='http://jquery.com'>JQuery</a>";
    $output .= "<li><a href='https://github.com/jzaefferer/jquery-treeview'>jquery-treeview</a>";
    $output .= "<li><a href='http://simplepie.org'>SimplePie</a>";
    $output .= "<li><a href='https://github.com/drdrang/php-markdown-extra-math'>php-markdown-extra-math</a>";
    $output .= "</ul>";

    return $output;
  }
  public function getSidebar() {
    $output = "";

    $output .= "<h2>Supporting institutions for the Automorphic Project</h2>";
    $output .= "<div style='text-align: center'>";
    $output .= "<a href='http://ncas.newark.rutgers.edu'><img style='margin-bottom: 30px' src='" . href("images/logos/RU-NCAS.gif") . "'></a>";
    $output .= "<a href='http://nsf.gov'><img width='180' src='" . href("images/logos/nsf.gif") . "'></a>";
    $output .= "</div>";
    $output .= "<h2>Supporting institutions for the Stacks Project</h2>";
    $output .= "<div style='text-align: center'>";
    $output .= "<a href='http://simonsfoundation.org'><img style='margin-bottom: 30px; margin-top: 10px' width='180' src='" . href("images/logos/simons.png") . "'></a>";
    $output .= "<a href='http://columbia.edu'><img style='margin-bottom: 30px' src='" . href("images/logos/columbia.jpg") . "'></a>";
    $output .= "<a href='http://nsf.gov'><img width='180' src='" . href("images/logos/nsf.gif") . "'></a>";
    $output .= "</div>";
    
    return $output;
  }
  public function getTitle() {
    return " &mdash; Acknowledgements";
  }
}

?>


