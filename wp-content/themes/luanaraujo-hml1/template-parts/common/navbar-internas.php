  <div data-animation="default" class="navbar4_component w-nav" data-easing2="ease"
       fs-scrolldisable-element="smart-nav" data-easing="ease-in" data-collapse="all"
       data-w-id="50caee5b-1a48-9cd4-aaa4-381dc22b2599" role="banner" data-no-scroll="1" data-duration="400"
       data-doc-height="1" sym="true">
      <div class="navbar4_container">
          <div class="navbar4_wrapper">
              <nav role="navigation" class="navbar4_menu w-nav-menu">
                  <div class="w-layout-grid header_menu-wrapper">
                      <div class="header_link-column">
                          <div class="text-weight-xbold">Editorias</div>
                          <div class="spacer-xsmall"></div>
                          <div class="header_link-list">
                              <?php
                              $categories = get_categories([
                              	"orderby" => "name",
                              	"order" => "ASC",
                              	"hide_empty" => 0,
                              ]);

                              foreach ($categories as $category) {
                              	echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="header_link-item">' . esc_html($category->name) . "</a>";
                              }
                              ?>
                          </div>
                      </div>

                      <div class="header_link-column">
                          <div class="text-weight-xbold">BIO</div>
                          <div class="spacer-xsmall"></div>
                          <div class="header_link-list">
                              <a href="<?php echo esc_url(home_url("bio")); ?>" class="header_link-item">Luana
                                  Araújo</a>
                          </div>
                      </div>

                  </div>
              </nav>
              <div class="navbar4_menu-button w-nav-button">
                  <div class="menu-icon4">
                      <div class="menu-icon4_wrapper">
                          <div class="menu-icon4_line-top"></div>
                          <div class="menu-icon4_line-middle">
                              <div class="menu-icon4_line-middle-top"></div>
                              <div class="menu-icon4_line-middle-base"></div>
                          </div>
                          <div class="menu-icon4_line-bottom"></div>
                      </div>
                  </div>
              </div>
              <div class="navbar4_menu_text">MENU</div>
          </div>
          <div class="navbar4_links-wrapper">
              <a href="<?php echo esc_url(home_url("")); ?>" class="navbar4_main_link w-nav-link">InÍCIO</a>

              <?php
              $categories = get_categories([
              	"orderby" => "name",
              	"order" => "ASC",
              	"hide_empty" => 1,
              ]);

              foreach ($categories as $category) {
              	echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="navbar4_main_link w-nav-link">' . esc_html($category->name) . "</a>";
              }
              ?>

          </div>
          <div class="navbar4_button-wrapper">
              <div class="navbar4_search_text">PESQUISAR</div>
              <div class="icon-embed-xsmall w-embed"><svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                       xmlns="http://www.w3.org/2000/svg">
                      <path d="M36.3999 32.4004L26.0929 22.0934C27.9983 19.1974 28.7615 15.6975 28.2347 12.2712C27.7078 8.84486 25.9284 5.7359 23.2409 3.54622C20.5534 1.35654 17.1491 0.241911 13.687 0.418137C10.2249 0.594364 6.95128 2.04891 4.50004 4.50016C2.04879 6.95141 0.594242 10.225 0.418015 13.6871C0.241789 17.1492 1.35642 20.5536 3.5461 23.241C5.73578 25.9285 8.84474 27.7079 12.2711 28.2348C15.6974 28.7617 19.1973 27.9985 22.0932 26.093L32.4003 36.4L36.3999 32.4004ZM4.4029 14.4021C4.4029 8.8886 8.88848 4.40302 14.402 4.40302C19.9154 4.40302 24.401 8.8886 24.401 14.4021C24.401 19.9156 19.9154 24.4011 14.402 24.4011C8.88848 24.4011 4.4029 19.9156 4.4029 14.4021Z"
                            fill="currentcolor"></path>
                  </svg></div>
          </div>
      </div>
  </div>