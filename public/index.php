<?php

require_once("../vendor/autoload.php");

// Initialize framework
$f3 = \Base::instance();
$f3->set("CACHE", true);
$f3->set("DEBUG", 0);

$f3->set("domain", "http://" . rtrim($_SERVER["HTTP_HOST"] . str_replace(basename($_SERVER["PHP_SELF"]), "", $_SERVER["PHP_SELF"]), "/") . "/");

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