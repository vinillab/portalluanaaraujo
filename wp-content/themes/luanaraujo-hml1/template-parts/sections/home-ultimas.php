<section class="section_ultimas">
    <div class="heading_section-wrapper">
        <div class="container-heading-wrapper">
            <h2 class="heading-style-h2">Últimas notícias</h2>
        </div>
    </div>
    <div class="padding-global">
        <div class="container-large">
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
                                                 alt="Nenhuma imagem disponível. Imagem ilustrativa."
                                                 class="ultimas_featured_image">
                                            <?php endif; ?>
                                        </div>
                                        <div class="spacer-small"></div>
                                        <h3 class="heading-style-h5"><?php the_title(); ?></h3>
                                        <div class="spacer-xsmall"></div>
                                        <div class="text-size-regular">
                                            <?php echo wp_trim_words(get_the_excerpt(), 30); ?></div>
                                        <div class="spacer-small"></div>
                                        <div class="button-group">
                                            <div class="post_meta-wrapper">
                                                <div class="post_main_category">
                                                    <div><?php echo get_first_category_name(); ?></div>
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
                                            <div class="post_meta-wrapper">
                                                <div class="post_main_category">
                                                    <div><?php echo get_first_category_name(); ?></div>
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
                                endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                                endif;
                                wp_reset_postdata();
                                ?>
            </div>
        </div>
    </div>
</section>