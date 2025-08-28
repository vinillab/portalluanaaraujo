<?php

// Generate data-tag for Umami analytics
$data_tag = "tipo:organica;editoria:geral"; // Default value

// Get primary category
$primary_category = "";
$categories = get_the_category();
if (!empty($categories)) {
	// Use first category as primary
	$primary_category = sanitize_title($categories[0]->name);
}

// Use category directly as editoria
$editoria = $primary_category ? $primary_category : "materia";

// Check ACF image field "materia-post-logo-patrocinador"
$logo_patrocinador = get_field("materia-post-logo-patrocinador");
$tipo = !empty($logo_patrocinador) ? "patrocinada" : "organica";

// Build data-tag value
$data_tag = "tipo:{$tipo};editoria:{$editoria}";

$args = [
	"wfPage" => "67d88b3fd5d49b3a1db94b24",
	"body" => "",
	"head" => "head/front-page",
	"data_tag" => $data_tag,
];

get_header("", $args);

get_template_part("template-parts/content/page-interna-materia");

$args = [
	"footer" => "footer/front-page",
];

get_footer("", $args);