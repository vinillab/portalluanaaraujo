 <div data-animation="default" class="navbar_component w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav"
      data-easing="ease" data-collapse="medium" data-w-id="2afd9c1c-f011-b900-48dd-80bf4054e1fa" role="banner"
      data-duration="400" sym="true">
     <div class="navbar_container">
         <a href="<?php echo esc_url(home_url("")); ?>" aria-current="page" class="navbar_logo-link w-nav-brand"><img
                  loading="lazy"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_luana.png?v=1742321523" alt=""
                  class="navbar2_logo"></a>
         <nav role="navigation" id="w-node-_2afd9c1c-f011-b900-48dd-80bf4054e1fe-4054e1fa"
              class="navbar_menu is-page-height-tablet w-nav-menu">

             <?php
             // Add individual category menu items
             $categories = get_categories([
             	"orderby" => "term_order",
             	"order" => "ASC",
             	"hide_empty" => false,
             ]);

             foreach ($categories as $category) {
             	echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="navbar_link w-nav-link">' . esc_html($category->name) . "</a>";
             }
             ?>
             <a href="<?php echo esc_url(home_url("bio")); ?>" class="navbar_link w-nav-link">BIO</a>
         </nav>
         <div id="w-node-_2afd9c1c-f011-b900-48dd-80bf4054e211-4054e1fa" class="navbar_button-wrapper">
             <a href="#" id="search-icon" class="button is-link is-icon w-inline-block">
                 <div>PESQUISAR</div>
                 <div class="icon-embed-xsmall w-embed"><svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                         <path d="M36.3999 32.4004L26.0929 22.0934C27.9983 19.1974 28.7615 15.6975 28.2347 12.2712C27.7078 8.84486 25.9284 5.7359 23.2409 3.54622C20.5534 1.35654 17.1491 0.241911 13.687 0.418137C10.2249 0.594364 6.95128 2.04891 4.50004 4.50016C2.04879 6.95141 0.594242 10.225 0.418015 13.6871C0.241789 17.1492 1.35642 20.5536 3.5461 23.241C5.73578 25.9285 8.84474 27.7079 12.2711 28.2348C15.6974 28.7617 19.1973 27.9985 22.0932 26.093L32.4003 36.4L36.3999 32.4004ZM4.4029 14.4021C4.4029 8.8886 8.88848 4.40302 14.402 4.40302C19.9154 4.40302 24.401 8.8886 24.401 14.4021C24.401 19.9156 19.9154 24.4011 14.402 24.4011C8.88848 24.4011 4.4029 19.9156 4.4029 14.4021Z"
                               fill="#4D4D4D"></path>
                     </svg></div>
             </a>
             <div class="navbar_menu-button w-nav-button">
                 <div class="menu-icon2">
                     <div class="menu-icon2_line-top"></div>
                     <div class="menu-icon2_line-middle">
                         <div class="menu-icon2_line-middle-inner"></div>
                     </div>
                     <div class="menu-icon2_line-bottom"></div>
                 </div>
             </div>
         </div>
     </div>
 </div>