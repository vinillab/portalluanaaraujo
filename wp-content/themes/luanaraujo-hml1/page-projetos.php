<?php

$args = [
	"wfPage" => "67d9b2a9dbffaafe541f29fc",
	"body" => "",
	"head" => "head/front-page",
];

get_header("", $args);

get_template_part("template-parts/content/page-projetos");

$args = [
	"footer" => "footer/front-page",
];

get_footer("", $args);
