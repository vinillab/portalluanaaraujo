<?php

$args = [
	"wfPage" => "67d48426a6d9dae6ce6f3a0d",
	"body" => "",
	"head" => "head/front-page",
];

get_header("", $args);

get_template_part("template-parts/content/401");

$args = [
	"footer" => "footer/front-page",
];

get_footer("", $args);
