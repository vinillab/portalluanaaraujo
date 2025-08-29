<div class="page-wrapper">
    <?php get_template_part("template-parts/common/navbar-internas"); ?>
    <?php get_template_part("template-parts/common/navbar"); ?>
    <?php get_template_part("template-parts/common/global-styles"); ?>

    <main class="main-wrapper">
        <?php get_template_part("template-parts/banners/super_large"); ?>
        <?php get_template_part("template-parts/sections/home-destaque"); ?>

        <?php get_template_part("template-parts/sections/home-ultimas"); ?>
        <?php get_template_part("template-parts/banners/super"); ?>
        <?php get_template_part("template-parts/sections/home-posts-categoria", null, ["category" => "ciencia-e-saude"]); ?>
        <?php get_template_part("template-parts/banners/super"); ?>
        <?php get_template_part("template-parts/sections/home-posts-categoria", null, ["category" => "saude-publica"]); ?>
        <?php get_template_part("template-parts/banners/super"); ?>
        <?php get_template_part("template-parts/sections/home-posts-categoria", null, ["category" => "opiniao"]); ?>
        <?php get_template_part("template-parts/banners/mega"); ?>

    </main>
    <?php get_template_part("template-parts/common/footer"); ?>

</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/navbar-scroll.js"></script>