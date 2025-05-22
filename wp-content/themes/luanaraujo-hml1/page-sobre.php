<?php

$args = [
	"wfPage" => "67d98406a754b200c2101447",
	"body" => "",
	"head" => "head/front-page",
];

get_header("", $args);

get_template_part("template-parts/content/page-sobre");

$args = [
	"footer" => "footer/front-page",
];

get_footer("", $args);
