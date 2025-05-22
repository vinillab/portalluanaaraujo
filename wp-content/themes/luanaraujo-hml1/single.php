<?php

$args = [
	"wfPage" => "67d88b3fd5d49b3a1db94b24",
	"body" => "",
	"head" => "head/front-page",
];

get_header("", $args);

get_template_part("template-parts/content/page-interna-materia");

$args = [
	"footer" => "footer/front-page",
];

get_footer("", $args);