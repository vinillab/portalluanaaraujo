<div class="page-wrapper">
    <?php get_template_part("template-parts/common/navbar-internas"); ?>
    <?php get_template_part("template-parts/common/global-styles"); ?>

    <main class="main-wrapper">
        <section class="section_layout192">
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-section-large">
                        <div class="layout192_component">
                            <div class="w-layout-grid layout192_content">
                                <div class="layout192_image-wrapper"><img sizes="(max-width: 528px) 100vw, 528px"
                                         srcset="<?php echo get_template_directory_uri(); ?>/assets/images/imagem_la_sobre-p-500.png?v=1742321523 500w, <?php echo get_template_directory_uri(); ?>/assets/images/imagem_la_sobre.png?v=1742321523 528w"
                                         alt=""
                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/imagem_la_sobre.png?v=1742321523"
                                         loading="lazy" class="layout192_image"></div>
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