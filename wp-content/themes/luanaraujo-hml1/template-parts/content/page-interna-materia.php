    <div class="page-wrapper">
        <?php get_template_part("template-parts/common/navbar-internas"); ?>
        <?php get_template_part("template-parts/common/navbar"); ?>
        <?php get_template_part("template-parts/common/global-styles"); ?>

        <main class="main-wrapper interna">
            <?php get_template_part("template-parts/banners/ads-component", null, ["ad_id" => "ad-editoria-topo"]); ?>

            <section class="section_materia-post">
                <div class="blog-post-component">
                    <div class="header-materia-wrapper">
                        <div class="blog-post-header2_title-wrapper">
                            <div class="button-group">
                                <a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"
                                   class="button is-link is-icon w-inline-block">
                                    <div bind="08b14951-fed4-9600-bcaf-db2105e71829" class="icon-embed-xxsmall w-embed">
                                        <svg
                                             width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 13L6 8L11 3" stroke="CurrentColor" stroke-width="1.5"></path>
                                        </svg>
                                    </div>
                                    <div class="text-weight-semibold"><?php echo get_the_category()[0]->name; ?></div>
                                </a>
                            </div>
                            <div class="spacer-medium"></div>
                            <h1 class="heading-style-h2"><?php the_title(); ?></h1>
                            <div class="spacer-xsmall"></div>
                            <div class="text-size-large">
                                <?php
                                $linha_fina = get_field("linha_fina");
                                if (!empty($linha_fina)) {
                                	echo $linha_fina;
                                } else {
                                	the_excerpt();
                                }
                                ?>
                            </div>
                        </div>
                        <div class="spacer-medium"></div>
                        <div class="blog-post-header2_content">
                            <div class="blog-post-header2_content-bottom">
                                <div class="blog-post-header2_author-wrapper">
                                    <div class="blog-post-header2_author">
                                        <div class="text-weight-medium"><?php
                                        $author_id = get_post_field("post_author", get_the_ID());
                                        echo get_the_author_meta("display_name", $author_id);
                                        ?></div>
                                        <div class="text-size-tiny">Publicado em
                                            <?php echo get_the_date("d/m/Y - H:i"); ?>
                                            <?php if (get_the_modified_date() != get_the_date()): ?>- Revisado em
                                            <?php echo get_the_modified_date("d/m/Y - H:i");endif; ?></div>
                                    </div>
                                </div>
                                <?php get_template_part("template-parts/common/share-icons"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="spacer-medium"></div>
                    <div class="image-materia-wrapper">
                        <div class="blog-post-header2_image-wrapper">
                            <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail("large", ["class" => "blog-post-header2_image", "loading" => "eager"]); ?>
                            <?php else: ?>
                            <img loading="lazy"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image-landscape.svg?v=1742321523"
                                 alt="Imagem da notíciam não está disponível." class="blog-post-header2_image">
                            <?php endif; ?>
                        </div>
                        <div class="banner_ad_component">

                            <?php get_template_part("template-parts/banners/ads-component", null, ["ad_id" => "ad-materia-imagem"]); ?>

                        </div>
                    </div>
                </div>

                <div class="content-materia-sidebar">
                    <div class="content-post-content">
                        <div class="text-rich-text w-richtext">
                            <?php the_content(); ?>
                        </div>
                        <div class="spacer-large"></div>
                        <div class="blog-post2-content_content-bottom">
                            <div class="blog-post2-content_tag-list">
                                <?php
                                $post_tags = get_the_tags();
                                if ($post_tags) {
                                	foreach ($post_tags as $tag) {
                                		echo '<a href="' . get_tag_link($tag->term_id) . '" class="blog-post2-content_tag-item w-inline-block">';
                                		echo "<div>" . $tag->name . "</div>";
                                		echo "</a>";
                                	}
                                }
                                ?>
                            </div>
                            <?php get_template_part("template-parts/common/share-icons"); ?>
                        </div>
                        <div class="author-wrapper">
                            <div class="blog-post2-content_author-text">
                                <div class="text-block-2">
                                    <?php echo get_the_author_meta("description", $author_id); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="content-sidebar">
                        <?php get_template_part("template-parts/banners/sidebar-interna"); ?>
                    </div>
                </div>
            </section>

            <section class="section_related">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="padding-section-medium">
                            <div class="margin-bottom margin-xxlarge">
                                <div class="text-align-center">
                                    <div class="max-width-large align-center">
                                        <div class="margin-bottom margin-small">
                                            <h2 class="heading-style-h3">Talvez você goste também de:</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="posts_grid-wrapper">
                                <div class="w-layout-grid post-list">
                                    <?php
                                    // Get current post categories
                                    $categories = get_the_category();

                                    if ($categories) {
                                    	$category_ids = [];
                                    	foreach ($categories as $category) {
                                    		$category_ids[] = $category->term_id;
                                    	}

                                    	// Query related posts
                                    	$related_args = [
                                    		"category__in" => $category_ids,
                                    		"post__not_in" => [get_the_ID()],
                                    		"posts_per_page" => 3,
                                    		"orderby" => "rand",
                                    	];

                                    	$related_query = new WP_Query($related_args);

                                    	if ($related_query->have_posts()) {
                                    		while ($related_query->have_posts()) {
                                    			$related_query->the_post(); ?>
                                    <div class="post_item" sym="true">
                                        <a href="<?php the_permalink(); ?>" class="post_item-link w-inline-block">
                                            <div class="post_image-wrapper">
                                                <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail("medium", ["class" => "post_image", "loading" => "lazy"]); ?>
                                                <?php else: ?>
                                                <img loading="lazy"
                                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image-landscape.svg?v=1742321523"
                                                     alt="" class="post_image">
                                                <?php endif; ?>
                                            </div>
                                            <div class="spacer-xsmall"></div>
                                            <h3 class="heading-style-h5"><?php the_title(); ?></h3>
                                            <div class="spacer-xxsmall"></div>
                                            <div class="text-size-regular"><?php echo get_the_excerpt(); ?></div>
                                            <div class="spacer-small"></div>
                                            <div class="button-group">
                                                <div class="post_meta-wrapper">
                                                    <div class="post_main_category">
                                                        <div><?php echo get_the_category()[0]->name; ?></div>
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
                                    	}
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <?php get_template_part("template-parts/common/footer"); ?>

    </div>