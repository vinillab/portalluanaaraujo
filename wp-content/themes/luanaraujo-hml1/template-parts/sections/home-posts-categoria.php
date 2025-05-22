<?php
$category_slug = $args["category"] ?? "";
$category = get_category_by_slug($category_slug);
?>
<section id="blog-header-5" class="section_posts">
    <div class="heading_section-wrapper bg-3">
        <h2 class="heading-style-h2"><?php echo esc_html($category->name); ?></h2>
        <div class="button-heading-section">
            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">VEJA&nbsp;MAIS</a>
            <div class="icon-embed-xxsmall w-embed"><svg width="43" height="35" viewBox="0 0 43 35" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M41.9717 19.767C42.6301 19.1077 43 18.214 43 17.2822C43 16.3504 42.6301 15.4567 41.9717 14.7975L28.7134 1.53214C28.0538 0.872523 27.1591 0.501952 26.2263 0.501952C25.2935 0.501952 24.3988 0.872523 23.7392 1.53214C23.0796 2.19176 22.709 3.0864 22.709 4.01924C22.709 4.95209 23.0796 5.84672 23.7392 6.50634L30.9966 13.7661L3.95727 13.766C3.02472 13.766 2.13037 14.1365 1.47097 14.7959C0.811557 15.4553 0.441101 16.3497 0.441101 17.2822C0.441101 18.2148 0.811557 19.1091 1.47097 19.7685C2.13037 20.4279 3.02472 20.7984 3.95727 20.7984L30.9966 20.7984L23.7392 28.0557C23.4126 28.3824 23.1535 28.7701 22.9768 29.1968C22.8 29.6236 22.709 30.0809 22.709 30.5428C22.709 31.0047 22.8 31.4621 22.9768 31.8889C23.1535 32.3156 23.4126 32.7033 23.7392 33.0299C24.0658 33.3566 24.4536 33.6156 24.8803 33.7924C25.307 33.9692 25.7644 34.0601 26.2263 34.0601C26.6882 34.0601 27.1456 33.9692 27.5723 33.7924C27.999 33.6156 28.3868 33.3566 28.7134 33.0299L41.9717 19.767Z"
                          fill="white"></path>
                </svg></div>
        </div>
    </div>
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-medium">
                <div class="posts_grid-wrapper">
                    <div class="w-layout-grid post-list">
                        <?php
                        $args = [
                        	"category_name" => $category_slug,
                        	"posts_per_page" => 3,
                        	"orderby" => "date",
                        	"order" => "DESC",
                        ];
                        $query = new WP_Query($args);

                        if ($query->have_posts()):
                        	while ($query->have_posts()):
                        		$query->the_post(); ?>
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
                                <div class="text-size-regular"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></div>
                                <div class="spacer-small"></div>
                                <div class="button-group">
                                    <div class="post_meta-wrapper">
                                        <div class="post_main_category">
                                            <div><?php echo esc_html($category->name); ?></div>
                                        </div>
                                    </div>
                                    <div class="button is-link is-icon">
                                        <div>Saiba mais</div>
                                        <div class="icon-embed-xxsmall w-embed"><svg width="16" height="16"
                                                 viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5">
                                                </path>
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
</section>