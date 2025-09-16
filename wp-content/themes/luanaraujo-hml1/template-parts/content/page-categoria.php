<div class="page-wrapper">
    <?php get_template_part("template-parts/common/navbar-internas"); ?>
    <?php get_template_part("template-parts/common/global-styles"); ?>

    <main class="main-wrapper">

        <?php get_template_part("template-parts/banners/ads-component", null, ["ad_id" => "ad-editoria-topo"]); ?>
        <header class="section_destaques_interna">

            <div class="padding-global">
                <div class="container-large">
                    <div class="heading_section-wrapper tx-1 container-large">
                        <div class="margin-bottom margin-tiny">
                            <div blocks-slot-children="ST232" blocks-name="blog-post-header3_breadcrumb"
                                 class="breadcrumb_component">
                                <a blocks-name="breadcrumb-link" href="#" class="breadcrumb-link w-inline-block">
                                    <div>InICIO</div>
                                </a>
                            </div>
                        </div>
                        <h2 class="heading-style-h2"><?php single_cat_title(); ?></h2>
                    </div>
                    <div class="padding-section-small">
                        <div class="blog10_featured-blog">
                            <div class="blog10_main-post">
                                <div class="blog10_main-list-wrapper">
                                    <div class="blog10_main-list">
                                        <?php
                                        $args = [
                                        	"posts_per_page" => 4,
                                        	"orderby" => "date",
                                        	"order" => "DESC",
                                        	"post_status" => "publish",
                                        	"cat" => get_query_var("cat"),
                                        ];
                                        $latest_posts = new WP_Query($args);

                                        if ($latest_posts->have_posts()):
                                        	// First post (featured)
                                        	$latest_posts->the_post(); ?>
                                        <div class="post_item">
                                            <a href="<?php the_permalink(); ?>" class="post_item-link w-inline-block">
                                                <div class="post_image-wrapper">
                                                    <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail("large", ["class" => "ultimas_featured_image", "loading" => "lazy"]); ?>
                                                    <?php else: ?>
                                                    <img loading="lazy"
                                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image-landscape.svg?v=1742321523"
                                                         alt="" class="ultimas_featured_image">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="spacer-small"></div>
                                                <h3 class="heading-style-h5"><?php the_title(); ?></h3>
                                                <div class="spacer-xsmall"></div>
                                                <div class="text-size-regular">
                                                    <?php echo wp_trim_words(get_the_excerpt(), 30); ?></div>
                                                <div class="spacer-small"></div>
                                                <div class="button-group">

                                                    <div class="button is-link is-icon">
                                                        <div>Saiba mais</div>
                                                        <div class="icon-embed-xxsmall w-embed"><svg width="16"
                                                                 height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 3L11 8L6 13" stroke="CurrentColor"
                                                                      stroke-width="1.5"></path>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-divider"></div>
                            <div class="blog10_featured-posts">
                                <div class="blog10_featured-list-wrapper">
                                    <div class="blog10_featured-list">
                                        <?php // Remaining 4 posts


                                        while ($latest_posts->have_posts()):
                                        	$latest_posts->the_post(); ?>
                                        <div class="post_item" sym="true">
                                            <a href="<?php the_permalink(); ?>" class="post_item-link w-inline-block">
                                                <div class="spacer-xsmall"></div>
                                                <h3 class="heading-style-h5"><?php the_title(); ?></h3>
                                                <div class="spacer-xxsmall"></div>
                                                <div class="text-size-regular">
                                                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?></div>
                                                <div class="spacer-small"></div>
                                                <div class="button-group">

                                                    <div class="button is-link is-icon">
                                                        <div>Saiba mais</div>
                                                        <div class="icon-embed-xxsmall w-embed"><svg width="16"
                                                                 height="16"
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
                                        endwhile;
                                        wp_reset_postdata();

                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php
        // Get total posts count for this category
        $total_posts = get_posts([
        	"cat" => get_query_var("cat"),
        	"posts_per_page" => -1,
        	"post_status" => "publish",
        ]);

        // Only show entire section if we have more than 4 posts
        if (count($total_posts) > 4): ?>
        <section class="section_posts">
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-section-medium">
                        <div class="posts_grid-wrapper">
                            <div class="w-layout-grid post-list">
                                <?php
                                // Get posts excluding the first 5
                                $args = [
                                	"posts_per_page" => 6,
                                	"offset" => 4,
                                	"orderby" => "date",
                                	"order" => "DESC",
                                	"post_status" => "publish",
                                	"cat" => get_query_var("cat"),
                                ];
                                $more_posts = new WP_Query($args);

                                if ($more_posts->have_posts()):
                                	while ($more_posts->have_posts()):
                                		$more_posts->the_post(); ?>
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
                                	endwhile;
                                	wp_reset_postdata();
                                endif;
                                ?>
                            </div>
                        </div>
                        <?php if (count($total_posts) > 10):// Only show load more if we have more than 10 posts (4 featured + 6 in grid)
                        	 ?>
                        <div class="margin-top margin-xxlarge">
                            <div class="button-group is-center">
                                <a href="#"
                                   class="button load-more w-button"
                                   data-category-id="<?php echo get_query_var("cat"); ?>">VER&nbsp;MAIS</a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;
        ?>

    </main>

    <?php get_template_part("template-parts/common/footer"); ?>
</div>