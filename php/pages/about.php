<?php

require_once("php/page.php");
require_once("php/comments.php");
require_once("php/statistics.php");
require_once("php/general.php");

class AboutPage extends Page {
  public function getMain() {
    $value = "";

    $value .= "<h2>About</h2>";
    $value .= "<p>This is a draft version of the Automorphic project. The software has been shamelessly copied from the Stacks project.</p>";
    $value .= "<hr>";

    $value .= "<h2><a href='" . href("acknowledgements") . "'>Acknowledgements</a></h2>";
    $value .= "<p>We have a page <a href='" . href("acknowledgements") . "'>acknowledging support</a>.";

    $value .= "<h2>The Automorphic project and its website.</h2>";
//(automorphic) The Stacks project has a separate repository for ``tools''. Do we need that?
    $value .= "<p>There are currently three open source repositories tracking development for the Automorphic project and its website:</p>";
    $value .= "<ol>";
    $value .= "<li>The LaTeX files making up the Automorphic project itself can be found <a href='https://github.com/automorphic-project/automorphic-project'>here</a>.";
    $value .= "<li>The website has a <a href='https://github.com/automorphic-project/automorphic-website/'> separate repository</a>, based on the <a href='https://github.com/stacks/stacks-website'>Stacks project website</a> which is currently maintained by <a href='http://pbelmans.wordpress.com/'>Pieter Belmans</a>.";
    $value .= "<li>As for the Stacks Project, there is a <a href='https://github.com/automorphic-project/automorphic-tools'>third repository</a> containing tools and infrastructure used by both the project and the website.";
    $value .= "</ol>";
    $value .= "<p>If you have any questions, please do not hesitate to send an email to <a href='mailto:automorphic.project@gmail.com'>automorphic.project@gmail.com</a>.";

    $value .= "<h2><a href='" . href("api") . "'>API</a></h2>";
    $value .= "<p>You can query the Automorphic project through an <a href='" . href("api") . "'><abbr title='Application Programming Interface'>API</abbr></a>.";

    return $value;
  }
  public function getSidebar() {
    $value = "";

    $value .= getRecentChanges();
    $value .= getRecentBlogposts();
    $value .= getCommentsSidebar($this->db);
    $value .= getStatisticsSidebar($this->db);

    return $value;
  }
  public function getTitle() {
    return " &mdash; About";
  }
}

?>
