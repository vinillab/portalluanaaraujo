    <div class="page-wrapper">
        <?php get_template_part("template-parts/common/navbar-internas"); ?>
        <?php get_template_part("template-parts/common/navbar"); ?>
        <?php get_template_part("template-parts/common/global-styles"); ?>

        <main class="main-wrapper">
            <?php get_template_part("template-parts/banners/ads-component", null, ["ad_id" => "ad-home-topo"]); ?>
            <?php get_template_part("template-parts/sections/home-destaque"); ?>

            <?php get_template_part("template-parts/sections/home-ultimas"); ?>
            <?php get_template_part("template-parts/banners/ads-component", null, ["ad_id" => "ad-home-ultimas"]); ?>

            <?php get_template_part("template-parts/sections/home-posts-categoria", null, ["category" => "ciencia-e-saude", "bg_class" => "bg-1"]); ?>
            <?php get_template_part("template-parts/banners/ads-component", null, ["ad_id" => "ad-home-editoria-ciencia-e-saude"]); ?>

            <?php get_template_part("template-parts/sections/home-posts-categoria", null, ["category" => "saude-publica", "bg_class" => "bg-2"]); ?>
            <?php get_template_part("template-parts/banners/ads-component", null, ["ad_id" => "ad-home-editoria-saude-publica"]); ?>

            <?php get_template_part("template-parts/sections/home-posts-categoria", null, ["category" => "saude-da-mulher", "bg_class" => "bg-3"]); ?>
            <?php get_template_part("template-parts/banners/ads-component", null, ["ad_id" => "ad-home-editoria-saude-da-mulher"]); ?>

            <?php get_template_part("template-parts/sections/home-posts-categoria", null, ["category" => "vacinas", "bg_class" => "bg-4"]); ?>
            <?php get_template_part("template-parts/banners/ads-component", null, ["ad_id" => "ad-home-editoria-vacinas"]); ?>

            <?php get_template_part("template-parts/sections/home-posts-categoria", null, ["category" => "meio-ambiente", "bg_class" => "bg-1"]); ?>
            <?php get_template_part("template-parts/banners/ads-component", null, ["ad_id" => "ad-home-editoria-meio-ambiente"]); ?>

            <?php get_template_part("template-parts/sections/home-posts-categoria", null, ["category" => "bem-estar", "bg_class" => "bg-2"]); ?>
            <?php get_template_part("template-parts/banners/ads-component", null, ["ad_id" => "ad-home-editoria-bem-estar"]); ?>

            <?php get_template_part("template-parts/sections/home-posts-categoria", null, ["category" => "opiniao", "bg_class" => "bg-3"]); ?>
            <?php get_template_part("template-parts/banners/ads-component", null, ["ad_id" => "ad-home-editoria-opiniao"]); ?>
        </main>
        <?php get_template_part("template-parts/common/footer"); ?>

    </div>