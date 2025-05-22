<div class="categories-menu">
    <div class="padding-global">
        <div class="container-large">
            <div class="w-layout-grid categorias_grid-list">
                <div class="w-layout-grid categorias_row">
                    <?php
                    $categories = get_categories([
                    	"orderby" => "term_order",
                    	"order" => "ASC",
                    	"hide_empty" => false,
                    ]);

                    $color_classes = ["bg-color-1", "bg-color-2", "bg-color-3", "bg-color-4"];
                    $color_index = 0;

                    foreach ($categories as $category) {
                    	$color_class = $color_classes[$color_index % count($color_classes)]; ?>
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                       class="categoria_card <?php echo esc_attr($color_class); ?> w-inline-block">
                        <div class="categoria_card-content">
                            <div class="categoria_card-content-top">
                                <h3 class="heading-style-h5"><?php echo esc_html($category->name); ?></h3>
                            </div>
                        </div>
                    </a>
                    <?php $color_index++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>