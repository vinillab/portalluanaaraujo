<div class="page-wrapper">
    <?php get_template_part("template-parts/common/navbar-internas"); ?>
    <?php get_template_part("template-parts/common/navbar"); ?>
    <?php get_template_part("template-parts/common/global-styles"); ?>

    <main class="main-wrapper">
        <section class="section_search-form">
            <div class="padding-global">
                <div class="container-medium">
                    <div class="padding-section-large">
                        <div class="text-align-center">
                            <div class="margin-bottom margin-small">
                                <div class="breadcrumb_component" style="justify-content: center;">
                                    <a href="<?php echo home_url(); ?>" class="breadcrumb-link w-inline-block">
                                        <div>INÍCIO</div>
                                    </a>
                                </div>
                            </div>
                            <h1 class="heading-style-h2">Buscar no Portal</h1>
                            <div class="spacer-medium"></div>
                            
                            <div class="search-form-wrapper" style="max-width: 600px; margin: 0 auto;">
                                <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url("/")); ?>" style="display: flex; gap: 1rem; align-items: stretch;">
                                    <input 
                                        type="search" 
                                        class="search-field" 
                                        placeholder="Digite sua busca..." 
                                        value="<?php echo get_search_query(); ?>" 
                                        name="s" 
                                        style="flex: 1; padding: 1rem 1.5rem; font-size: 1.125rem; border: 2px solid #e0e0e0; border-radius: 4px; font-family: inherit;"
                                        required
                                    />
                                    <button 
                                        type="submit" 
                                        class="button w-button" 
                                        style="padding: 1rem 2rem; white-space: nowrap;"
                                    >
                                        Buscar
                                    </button>
                                </form>
                            </div>
                            
                            <div class="spacer-medium"></div>
                            <p class="text-size-regular" style="color: #666;">
                                Digite palavras-chave para encontrar artigos, notícias e conteúdos no portal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_template_part("template-parts/common/footer"); ?>
</div>

