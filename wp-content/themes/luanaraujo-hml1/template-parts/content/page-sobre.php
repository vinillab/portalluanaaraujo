<div class="page-wrapper">
    <?php get_template_part("template-parts/common/navbar-internas"); ?>
    <?php get_template_part("template-parts/common/navbar"); ?>
    <?php get_template_part("template-parts/common/global-styles"); ?>

    <main class="main-wrapper">
        <section class="section_layout192">
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-section-large">
                        <div class="layout192_component">
                            <div class="w-layout-grid layout192_content">
                                <div class="layout192_image-wrapper">
                                    <?php if (has_post_thumbnail()) {
                                    	$featured_image_id = get_post_thumbnail_id();
                                    	$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), "full");
                                    	$featured_image_alt = get_post_meta($featured_image_id, "_wp_attachment_image_alt", true);

                                    	// Get different image sizes for responsive images
                                    	$image_500 = wp_get_attachment_image_src($featured_image_id, [500, 500]);
                                    	$image_full = wp_get_attachment_image_src($featured_image_id, "full");

                                    	if ($image_500 && $image_full) {
                                    		echo '<img sizes="(max-width: 528px) 100vw, 528px"';
                                    		echo ' srcset="' . esc_url($image_500[0]) . " 500w, " . esc_url($image_full[0]) . " " . $image_full[1] . 'w"';
                                    		echo ' alt="' . esc_attr($featured_image_alt) . '"';
                                    		echo ' src="' . esc_url($image_full[0]) . '"';
                                    		echo ' loading="lazy" class="layout192_image">';
                                    	} else {
                                    		// Fallback to simple featured image
                                    		the_post_thumbnail("full", ["class" => "layout192_image", "loading" => "lazy"]);
                                    	}
                                    } else {
                                    	// Fallback if no featured image is set
                                    	echo '<img src="' . get_template_directory_uri() . '/assets/images/imagem_la_sobre.png?v=1742321523" alt="" loading="lazy" class="layout192_image">';
                                    } ?>
                                </div>
                                <div id="w-node-_002e24c6-8258-3ce0-b803-8253d572c19c-c2101447"
                                     class="layout192_content-right"><img
                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-la-sobre.png?v=1742321523"
                                         loading="lazy" alt="">
                                    <div class="spacer-small"></div>
                                    <div class="text-rich-text">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php get_template_part("template-parts/common/footer"); ?>

</div>