<?php

$args = [
	"wfPage" => "67d8880d6399507b6b7c15e6",
	"body" => "",
	"head" => "head/front-page",
];

get_header("", $args);

get_template_part("template-parts/content/page-categoria");

$args = [
	"footer" => "footer/front-page",
];

get_footer("", $args);