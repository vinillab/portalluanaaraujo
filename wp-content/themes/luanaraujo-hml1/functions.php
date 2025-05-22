<?php

function udesly_theme_utils_get_term_id_by_slug($slug, $type)
{
	$term = get_term_by("slug", $slug, $type);

	if ($term) {
		return $term->term_id;
	}
	return 0;
}

function udesly_theme_utils_get_post_id_by_slug($slug, $type)
{
	$post = get_page_by_path($slug, OBJECT, $type);

	if ($post) {
		return $post->ID;
	}
	return 0;
}

function udesly_luanaraujo_hml1_setup()
{
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support("html5", ["comment-form", "comment-list", "gallery", "caption", "style", "script", "navigation-widgets"]);

	add_theme_support("woocommerce");

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	$logo_width = 300;
	$logo_height = 100;

	add_theme_support("custom-logo", [
		"height" => $logo_height,
		"width" => $logo_width,
		"flex-width" => true,
		"flex-height" => true,
		"unlink-homepage-logo" => true,
	]);

	add_theme_support("title-tag");

	add_theme_support("menus");

	// Add theme support for selective refresh for widgets.
	add_theme_support("customize-selective-refresh-widgets");

	// Add support for Block Styles.
	add_theme_support("wp-block-styles");

	// Add support for full and wide align images.
	add_theme_support("align-wide");

	// Add support for editor styles.
	add_theme_support("editor-styles");

	// Add support for responsive embedded content.
	add_theme_support("responsive-embeds");

	add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "udesly_luanaraujo_hml1_setup");

function define_post_types_for_luanaraujo_hml1()
{
	if (!function_exists("udesly_define_post_type")) {
		return;
	}
}

add_action("init", "define_post_types_for_luanaraujo_hml1");

function udesly_theme_set_images_items_lightbox_script($id, $field, $type)
{
	$images = udesly_get_custom_post_field($id, $field, $type);

	$items_to_json = [];

	foreach ($images as $imageItem) {
		$image = $imageItem["image"];
		$items_to_json[] = [
			"type" => "image",
			"url" => $image->src,
			"caption" => $image->caption,
		];
	}

	echo json_encode($items_to_json);
}

function get_first_category_name()
{
	$categories = get_the_category();
	if (!empty($categories)) {
		$color_classes = ["bg-color-1", "bg-color-2", "bg-color-3", "bg-color-4"];
		$color_index = $categories[0]->term_id % count($color_classes);
		$color_class = $color_classes[$color_index];
		return '<span class="' . esc_attr($color_class) . '">' . esc_html($categories[0]->name) . "</span>";
	}
	return "";
}