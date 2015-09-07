<?php

require_once("../vendor/autoload.php");

// Initialize framework
$f3 = \Base::instance();
$f3->set("CACHE", true);
$f3->set("DEBUG", 0);

// Some settings
$f3->set("domain", "http://" . rtrim($_SERVER["HTTP_HOST"] . str_replace(basename($_SERVER["PHP_SELF"]), "", $_SERVER["PHP_SELF"]), "/") . "/");

// Get modified time to refresh CSS and JS if necessary
$f3->set("css_modified_time", filemtime("css/main.css"), 0);
$f3->set("js_modified_time", filemtime("js/main.js"), 0);

$f3->route("GET /",
	function ($f3)
	{
		$template = new Template;
		echo $template->render("../views/base.tpl");
	}
, 600);

$f3->route("GET /robots.txt",
	function ($f3)
	{
		$template = new Template;
		echo $template->render("../views/robots.tpl", "text/plain");
	}
, 600);

$f3->route("GET /sitemap.xml",
	function ($f3)
	{
		$template = new Template;
		echo $template->render("../views/sitemap.tpl", "application/xml");
	}
, 600);

$f3->run();