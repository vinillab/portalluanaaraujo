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

function enqueue_navbar_scroll_scripts()
{
	wp_enqueue_style("navbar-scroll", get_template_directory_uri() . "/assets/css/navbar-scroll.css", [], "1.0.0");
	wp_enqueue_script("navbar-scroll", get_template_directory_uri() . "/assets/js/navbar-scroll.js", [], "1.0.0", true);
}
add_action("wp_enqueue_scripts", "enqueue_navbar_scroll_scripts");

// Add featured image column to posts list table
add_filter("manage_posts_columns", "add_featured_image_column");
function add_featured_image_column($columns)
{
	$new = [];
	foreach ($columns as $key => $value) {
		if ($key == "title") {
			// or any other column you want to place it after
			$new["featured_image"] = __("Featured Image");
		}
		$new[$key] = $value;
	}
	return $new;
}

add_action("manage_posts_custom_column", "display_featured_image_column", 10, 2);
function display_featured_image_column($column, $post_id)
{
	switch ($column) {
		case "featured_image":
			if (has_post_thumbnail($post_id)) {
				echo get_the_post_thumbnail($post_id, "thumbnail");
			} else {
				echo "–";
			}
			break;
	}
}

// Add AJAX handlers for load more functionality
add_action("wp_ajax_load_more_posts", "load_more_posts_callback");
add_action("wp_ajax_nopriv_load_more_posts", "load_more_posts_callback");

function load_more_posts_callback()
{
	// Verify nonce for security
	if (!wp_verify_nonce($_POST["nonce"], "load_more_nonce")) {
		wp_die("Security check failed");
	}

	$offset = intval($_POST["offset"]);
	$posts_per_page = 6;

	$args = [
		"posts_per_page" => $posts_per_page,
		"offset" => $offset,
		"orderby" => "date",
		"order" => "DESC",
		"post_status" => "publish",
	];

	// Handle different archive types
	if (isset($_POST["category_id"]) && !empty($_POST["category_id"])) {
		$args["cat"] = intval($_POST["category_id"]);
	} elseif (isset($_POST["tag_id"]) && !empty($_POST["tag_id"])) {
		$args["tag_id"] = intval($_POST["tag_id"]);
	} elseif (isset($_POST["author_id"]) && !empty($_POST["author_id"])) {
		$args["author"] = intval($_POST["author_id"]);
	} elseif (isset($_POST["year"]) && !empty($_POST["year"])) {
		$args["year"] = intval($_POST["year"]);
		if (isset($_POST["month"]) && !empty($_POST["month"])) {
			$args["monthnum"] = intval($_POST["month"]);
		}
		if (isset($_POST["day"]) && !empty($_POST["day"])) {
			$args["day"] = intval($_POST["day"]);
		}
	} elseif (isset($_POST["taxonomy"]) && isset($_POST["term_id"])) {
		$args["tax_query"] = [
			[
				"taxonomy" => sanitize_text_field($_POST["taxonomy"]),
				"field" => "term_id",
				"terms" => intval($_POST["term_id"]),
			],
		];
	}

	$query = new WP_Query($args);
	$response = [];

	if ($query->have_posts()) {
		ob_start();
		while ($query->have_posts()) {
			$query->the_post(); ?>
            <div class="post_item" sym="true">
                <a href="<?php the_permalink(); ?>" class="post_item-link w-inline-block">
                    <div class="post_image-wrapper">
                        <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail("large", ["class" => "post_image", "loading" => "lazy"]); ?>
                        <?php else: ?>
                        <img loading="lazy"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image-landscape.svg?v=1742321523"
                             alt="" class="post_image">
                        <?php endif; ?>
                    </div>
                    <div class="spacer-xsmall"></div>
                    <h3 class="heading-style-h5"><?php the_title(); ?></h3>
                    <div class="spacer-xxsmall"></div>
                    <div class="text-size-regular">
                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?></div>
                    <div class="spacer-small"></div>
                    <div class="button-group">
                        <div class="post_meta-wrapper">
                            <div class="post_main_category">
                                <div><?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                	echo esc_html($categories[0]->name);
                                }
                                ?></div>
                            </div>
                        </div>
                        <div class="button is-link is-icon">
                            <div>Saiba mais</div>
                            <div class="icon-embed-xxsmall w-embed"><svg width="16" height="16"
                                     viewBox="0 0 16 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 3L11 8L6 13" stroke="CurrentColor"
                                          stroke-width="1.5"></path>
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <?php
		}
		wp_reset_postdata();

		$response["html"] = ob_get_clean();
		$response["has_more"] = $query->found_posts > $offset + $posts_per_page;
		$response["success"] = true;
	} else {
		$response["success"] = false;
		$response["message"] = "No more posts found";
	}

	wp_send_json($response);
}

// Enqueue load more scripts
function enqueue_load_more_scripts()
{
	wp_enqueue_script("load-more-posts", get_template_directory_uri() . "/assets/js/load-more-posts.js", ["jquery"], "1.0.0", true);
	wp_localize_script("load-more-posts", "load_more_ajax", [
		"ajax_url" => admin_url("admin-ajax.php"),
		"nonce" => wp_create_nonce("load_more_nonce"),
	]);
}
add_action("wp_enqueue_scripts", "enqueue_load_more_scripts");
