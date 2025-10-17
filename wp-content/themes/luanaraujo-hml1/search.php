<?php
/**
 * The template for displaying search results
 */

$args = [
	"wfPage" => "67d48426a6d9dae6ce6f3a09",
	"body" => "",
	"head" => "head/front-page",
];

get_header("", $args);
?>

<div class="page-wrapper">
    <?php get_template_part("template-parts/common/navbar-internas"); ?>
    <?php get_template_part("template-parts/common/navbar"); ?>
    <?php get_template_part("template-parts/common/global-styles"); ?>

    <main class="main-wrapper">
        
        <header class="section_destaques_interna">
            <div class="padding-global">
                <div class="container-large">
                    <div class="heading_section-wrapper tx-1 container-large">
                        <div class="margin-bottom margin-tiny">
                            <div class="breadcrumb_component">
                                <a href="<?php echo home_url(); ?>" class="breadcrumb-link w-inline-block">
                                    <div>INÍCIO</div>
                                </a>
                            </div>
                        </div>
                        <h1 class="heading-style-h2">
                            <?php /* translators: %s: search query */
                            printf(esc_html__("Resultados da busca por: %s", "luanaraujo-hml1"), "<span>" . get_search_query() . "</span>"); ?>
                        </h1>
                        
                        <div class="spacer-small"></div>
                        
                        <!-- Search Form -->
                        <div class="search-form-wrapper" style="max-width: 600px;">
                            <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url("/")); ?>" style="display: flex; gap: 1rem; align-items: stretch;">
                                <input 
                                    type="search" 
                                    class="search-field" 
                                    placeholder="Digite sua busca..." 
                                    value="<?php echo get_search_query(); ?>" 
                                    name="s" 
                                    style="flex: 1; padding: 0.75rem 1rem; font-size: 1rem; border: 2px solid #e0e0e0; border-radius: 4px; font-family: inherit;"
                                    required
                                />
                                <button 
                                    type="submit" 
                                    class="button w-button" 
                                    style="padding: 0.75rem 1.5rem; white-space: nowrap;"
                                >
                                    Buscar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php if (have_posts()): ?>
        <section class="section_posts">
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-section-medium">
                        <div class="posts_grid-wrapper">
                            <div class="w-layout-grid post-list">
                                <?php while (have_posts()):
                                	the_post(); ?>
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
                                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                        </div>
                                        <div class="spacer-small"></div>
                                        <div class="button-group">
                                            <div class="post_meta-wrapper">
                                                <div class="post_main_category">
                                                    <div>
                                                        <?php
                                                        $categories = get_the_category();
                                                        if (!empty($categories)) {
                                                        	echo esc_html($categories[0]->name);
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button is-link is-icon">
                                                <div>Saiba mais</div>
                                                <div class="icon-embed-xxsmall w-embed">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                endwhile; ?>
                            </div>
                        </div>
                        
                        <?php
                        // Pagination
                        $pagination_args = [
                        	"mid_size" => 2,
                        	"prev_text" => "← Anterior",
                        	"next_text" => "Próxima →",
                        	"type" => "list",
                        ];
                        $pagination = paginate_links($pagination_args);

                        if ($pagination): ?>
                        <div class="margin-top margin-xxlarge">
                            <div class="button-group is-center">
                                <?php echo $pagination; ?>
                            </div>
                        </div>
                        <?php endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <?php else: ?>
        <section class="section_posts">
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-section-medium">
                        <div class="text-align-center">
                            <h3 class="heading-style-h4">Nenhum resultado encontrado</h3>
                            <div class="spacer-small"></div>
                            <p class="text-size-regular">
                                Desculpe, não encontramos nenhum conteúdo correspondente à sua busca. 
                                Tente usar palavras-chave diferentes ou mais gerais.
                            </p>
                            <div class="spacer-medium"></div>
                            <a href="<?php echo home_url(); ?>" class="button w-button">Voltar à página inicial</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

    </main>

    <?php get_template_part("template-parts/common/footer"); ?>
</div>

<?php
$args = [
	"footer" => "footer/front-page",
];

get_footer("", $args);

