<?php $materia_de_destaque_home = get_field("materia_de_destaque_home"); ?>
<?php if ($materia_de_destaque_home): ?>
<?php $post = $materia_de_destaque_home; ?>
<?php setup_postdata($post); ?>
<section class="section_hero">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-small">
                <div class="featured_component">
                    <div class="w-layout-grid featured-post_content">
                        <a id="w-node-_677c4f38-ab86-0d4d-26ef-89750b6de6b5-ce6f3a09"
                           href="<?php the_permalink(); ?>"
                           class="layout192_image-wrapper w-inline-block">

                            <?php if (has_post_thumbnail()) {
                            	the_post_thumbnail("full", [
                            		"class" => "home_destaque_image",
                            		"loading" => "lazy",
                            	]);
                            } ?>
                        </a>
                        <div id="w-node-_677c4f38-ab86-0d4d-26ef-89750b6de6b7-ce6f3a09" class="featured_content-right">
                            <div class="featured_meta-wrapper">
                                <div class="text-style-tagline"><?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                	echo esc_html($categories[0]->name);
                                }
                                ?></div>
                            </div>
                            <div class="featured_content-wrapper">
                                <a href="<?php the_permalink(); ?>"
                                   class="heading-style-h4"><?php the_title(); ?></a>
                                <div class="spacer-small"></div>
                                <p class="text-size-medium"><?php the_excerpt(); ?></p>
                            </div>
                            <div class="button-group align-0right">
                                <a href="<?php the_permalink(); ?>"
                                   class="button is-link is-icon w-inline-block">
                                    <div>Saiba mais</div>
                                    <div class="icon-embed-xxsmall w-embed"><svg width="16" height="16"
                                             viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path>
                                        </svg></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
