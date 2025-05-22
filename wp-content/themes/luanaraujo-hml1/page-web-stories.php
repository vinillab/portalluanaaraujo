<?php

$args = [
	"wfPage" => "67d97495ee766b777ef1d3cb",
	"body" => "",
	"head" => "head/front-page",
];

get_header("", $args);

get_template_part("template-parts/content/page-web-stories");

$args = [
	"footer" => "footer/front-page",
];

get_footer("", $args);
