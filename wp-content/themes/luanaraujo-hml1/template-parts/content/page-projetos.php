
  <div class="page-wrapper">
    <div class="global-styles" sym="true">
      <div class="style-overrides w-embed">
        <style>
/* Ensure all elements inherit the color from its parent */
a,
.w-input,
.w-select,
.w-tab-link,
.w-nav-link,
.w-nav-brand,
.w-dropdown-btn,
.w-dropdown-toggle,
.w-slider-arrow-left,
.w-slider-arrow-right,
.w-dropdown-link {
  color: inherit;
  text-decoration: inherit;
  font-size: inherit;
}
/* Focus state style for keyboard navigation for the focusable elements */
*[tabindex]:focus-visible,
  input[type="file"]:focus-visible {
   outline: 0.125rem solid #4d65ff;
   outline-offset: 0.125rem;
}
/* Get rid of top margin on first element in any rich text element */
.w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
  margin-top: 0 !important;
}
/* Get rid of bottom margin on last element in any rich text element */
.w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
	margin-bottom: 0 !important;
}
/* Prevent all click and hover interaction with an element */
.pointer-events-off {
	pointer-events: none;
}
/* Enables all click and hover interaction with an element */
.pointer-events-on {
  pointer-events: auto;
}
/* Create a class of .div-square which maintains a 1:1 dimension of a div */
.div-square::after {
	content: "";
	display: block;
	padding-bottom: 100%;
}
/* Make sure containers never lose their center alignment */
.container-medium,.container-small, .container-large {
	margin-right: auto !important;
  margin-left: auto !important;
}
/* Apply "..." after 3 lines of text */
.text-style-3lines {
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 3;
	-webkit-box-orient: vertical;
}
/* Apply "..." after 2 lines of text */
.text-style-2lines {
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
}
/* Adds inline flex display */
.display-inlineflex {
  display: inline-flex;
}
/* These classes are never overwritten */
.hide {
  display: none !important;
}
/* Remove default Webflow chevron from form select */
select{
  -webkit-appearance:none;
}
@media screen and (max-width: 991px) {
    .hide, .hide-tablet {
        display: none !important;
    }
}
  @media screen and (max-width: 767px) {
    .hide-mobile-landscape{
      display: none !important;
    }
}
  @media screen and (max-width: 479px) {
    .hide-mobile{
      display: none !important;
    }
}
.margin-0 {
  margin: 0rem !important;
}
.padding-0 {
  padding: 0rem !important;
}
.spacing-clean {
padding: 0rem !important;
margin: 0rem !important;
}
.margin-top {
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-top {
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-right {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-right {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-bottom {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-bottom {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
.margin-left {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-left {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-horizontal {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-horizontal {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-vertical {
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-vertical {
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
/* Apply "..." at 100% width */
.truncate-width { 
		width: 100%; 
    white-space: nowrap; 
    overflow: hidden; 
    text-overflow: ellipsis; 
}
/* Removes native scrollbar */
.no-scrollbar {
    -ms-overflow-style: none;
    overflow: -moz-scrollbars-none; 
}
.no-scrollbar::-webkit-scrollbar {
    display: none;
}
.two-col-post, .post_item {
grid-area: span 1 / span 2 / span 1 / span 2;
}
.three-col-post {
grid-area: span 1 / span 3 / span 1 / span 3;
}
.navbar4_main_link::after {
    content: " | ";
    margin: 0 1rem; /* Adds space on both sides of the separator */
}
.navbar4_main_link:last-child::after {
    content: ""; /* Removes the separator after the last item */
}
</style>
      </div>
      <div class="color-schemes w-embed">
        <style>
/* Color Schemes Controls*/
<meta name="relume-color-schemes" content="false"/>
  .color-scheme-1 {
/*All sections should point to Color Scheme 1*/
  }
  .color-scheme-2 {
    --color-scheme-1--text: var(--color-scheme-2--text);
    --color-scheme-1--background: var(--color-scheme-2--background);
    --color-scheme-1--foreground: var(--color-scheme-2--foreground);
    --color-scheme-1--border: var(--color-scheme-2--border);
    --color-scheme-1--accent: var(--color-scheme-2--accent);
  }
  .color-scheme-3 {
    --color-scheme-1--text: var(--color-scheme-3--text);
    --color-scheme-1--background: var(--color-scheme-3--background);
    --color-scheme-1--foreground: var(--color-scheme-3--foreground);
    --color-scheme-1--border: var(--color-scheme-3--border);
    --color-scheme-1--accent: var(--color-scheme-3--accent);
  }
  .color-scheme-4 {
    --color-scheme-1--text: var(--color-scheme-4--text);
    --color-scheme-1--background: var(--color-scheme-4--background);
    --color-scheme-1--foreground: var(--color-scheme-4--foreground);
    --color-scheme-1--border: var(--color-scheme-4--border);
    --color-scheme-1--accent: var(--color-scheme-4--accent);
  }
  .color-scheme-5 {
    --color-scheme-1--text: var(--color-scheme-5--text);
    --color-scheme-1--background: var(--color-scheme-5--background);
    --color-scheme-1--foreground: var(--color-scheme-5--foreground);
    --color-scheme-1--border: var(--color-scheme-5--border);
    --color-scheme-1--accent: var(--color-scheme-5--accent);
  }
  .color-scheme-6 {
    --color-scheme-1--text: var(--color-scheme-6--text);
    --color-scheme-1--background: var(--color-scheme-6--background);
    --color-scheme-1--foreground: var(--color-scheme-6--foreground);
    --color-scheme-1--border: var(--color-scheme-6--border);
    --color-scheme-1--accent: var(--color-scheme-6--accent);
  }
  .color-scheme-7 {
    --color-scheme-1--text: var(--color-scheme-7--text);
    --color-scheme-1--background: var(--color-scheme-7--background);
    --color-scheme-1--foreground: var(--color-scheme-7--foreground);
    --color-scheme-1--border: var(--color-scheme-7--border);
    --color-scheme-1--accent: var(--color-scheme-7--accent);
  }
  .color-scheme-8 {
    --color-scheme-1--text: var(--color-scheme-8--text);
    --color-scheme-1--background: var(--color-scheme-8--background);
    --color-scheme-1--foreground: var(--color-scheme-8--foreground);
    --color-scheme-1--border: var(--color-scheme-8--border);
    --color-scheme-1--accent: var(--color-scheme-8--accent);
  }
  .color-scheme-9 {
    --color-scheme-1--text: var(--color-scheme-9--text);
    --color-scheme-1--background: var(--color-scheme-9--background);
    --color-scheme-1--foreground: var(--color-scheme-9--foreground);
    --color-scheme-1--border: var(--color-scheme-9--border);
    --color-scheme-1--accent: var(--color-scheme-9--accent);
  }
  .color-scheme-10 {
    --color-scheme-1--text: var(--color-scheme-10--text);
    --color-scheme-1--background: var(--color-scheme-10--background);
    --color-scheme-1--foreground: var(--color-scheme-10--foreground);
    --color-scheme-1--border: var(--color-scheme-10--border);
    --color-scheme-1--accent: var(--color-scheme-10--accent);
  }
/* Inherit slider dot colors */
.w-slider-dot {
  background-color: var(--color-scheme-1--text);
  opacity: 0.20;
}
.w-slider-dot.w-active {
  background-color: var(--color-scheme-1--text);
  opacity: 1;
}
/* Override .w-slider-nav-invert styles */
.w-slider-nav-invert .w-slider-dot {
  background-color: var(--color-scheme-1--text) !important;
  opacity: 0.20 !important;
}
.w-slider-nav-invert .w-slider-dot.w-active {
  background-color: var(--color-scheme-1--text) !important;
  opacity: 1 !important;
}
</style>
      </div>
    </div>
    <div data-animation="default" class="navbar4_component w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav" data-easing="ease-in" data-collapse="all" data-w-id="50caee5b-1a48-9cd4-aaa4-381dc22b2599" role="banner" data-no-scroll="1" data-duration="400" data-doc-height="1" sym="true">
      <div class="navbar4_container">
        <div class="navbar4_wrapper">
          <nav role="navigation" class="navbar4_menu w-nav-menu">
            <div class="w-layout-grid header_menu-wrapper">
              <div id="w-node-_50caee5b-1a48-9cd4-aaa4-381dc22b259e-c22b2599" class="header_link-column">
                <div class="text-weight-xbold">Início</div>
              </div>
              <div id="w-node-_50caee5b-1a48-9cd4-aaa4-381dc22b25a1-c22b2599" class="header_link-column">
                <div class="text-weight-xbold">Categorias</div>
                <div class="spacer-xsmall"></div>
                <div class="header_link-list">
                  <a href="#" class="header_link-item">Últimas notícias</a>
                  <a href="#" class="header_link-item">Em alta</a>
                  <a href="#" class="header_link-item">Mundo</a>
                  <a href="#" class="header_link-item">Saúde e Ciência</a>
                  <a href="#" class="header_link-item">Artigos de opinião</a>
                </div>
              </div>
              <div id="w-node-_50caee5b-1a48-9cd4-aaa4-381dc22b25b0-c22b2599" class="header_link-column">
                <div class="text-weight-xbold">PROJETOS</div>
                <div class="spacer-xsmall"></div>
                <div class="header_link-list">
                  <a href="#" class="header_link-item">Web Stories</a>
                  <a href="#" class="header_link-item">Vídeos</a>
                </div>
              </div>
              <div id="w-node-_50caee5b-1a48-9cd4-aaa4-381dc22b25b9-c22b2599" class="header_link-column">
                <div class="text-weight-xbold">SOBRE</div>
                <div class="spacer-xsmall"></div>
                <div class="header_link-list">
                  <a href="#" class="header_link-item">Luana Araújo</a>
                  <a href="#" class="header_link-item">Equipe</a>
                  <a href="#" class="header_link-item">Contato</a>
                </div>
              </div>
              <div id="w-node-_50caee5b-1a48-9cd4-aaa4-381dc22b25c4-c22b2599" class="header_link-column">
                <div class="text-weight-xbold">NEWSLETTER</div>
                <div class="spacer-xsmall"></div>
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
          <a href="<?php echo esc_url(home_url("categoria")); ?>" class="navbar4_main_link w-nav-link">ÚLTIMAS</a>
          <a href="<?php echo esc_url(home_url("categoria")); ?>" class="navbar4_main_link w-nav-link">EM&nbsp;ALTA</a>
          <a href="<?php echo esc_url(home_url("categoria")); ?>" class="navbar4_main_link w-nav-link">MUNDO E&nbsp;POlÍTICA</a>
          <a href="<?php echo esc_url(home_url("categoria")); ?>" class="navbar4_main_link w-nav-link">SaÚde e ciência</a>
          <a href="<?php echo esc_url(home_url("categoria")); ?>" class="navbar4_main_link w-nav-link">artigos</a>
        </div>
        <div class="navbar4_button-wrapper">
          <div class="navbar4_search_text">PESQUISAR</div>
          <div class="icon-embed-xsmall w-embed"><svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M36.3999 32.4004L26.0929 22.0934C27.9983 19.1974 28.7615 15.6975 28.2347 12.2712C27.7078 8.84486 25.9284 5.7359 23.2409 3.54622C20.5534 1.35654 17.1491 0.241911 13.687 0.418137C10.2249 0.594364 6.95128 2.04891 4.50004 4.50016C2.04879 6.95141 0.594242 10.225 0.418015 13.6871C0.241789 17.1492 1.35642 20.5536 3.5461 23.241C5.73578 25.9285 8.84474 27.7079 12.2711 28.2348C15.6974 28.7617 19.1973 27.9985 22.0932 26.093L32.4003 36.4L36.3999 32.4004ZM4.4029 14.4021C4.4029 8.8886 8.88848 4.40302 14.402 4.40302C19.9154 4.40302 24.401 8.8886 24.401 14.4021C24.401 19.9156 19.9154 24.4011 14.402 24.4011C8.88848 24.4011 4.4029 19.9156 4.4029 14.4021Z" fill="currentcolor"></path>
            </svg></div>
        </div>
      </div>
    </div>
    <main class="main-wrapper projetos">
      <section class="section_projetos-hero">
        <div class="heading_section-wrapper tx-1">
          <h2 class="heading-style-h2">Projetos</h2>
        </div>
        <div class="padding-global">
          <div class="container-large">
            <div class="padding-section-small">
              <div class="margin-bottom margin-small">
                <div blocks-name="max-width-large" blocks-slot-children="ST232" class="max-width-large">
                  <h3 blocks-non-deletable="true" blocks-name="heading" blocks-slot-item-canonical="EL2" class="heading-style-h2">Web Stories</h3>
                </div>
              </div>
              <div class="featured_component">
                <div class="w-layout-grid featured-podcast_content">
                  <a id="w-node-_677c4f38-ab86-0d4d-26ef-89750b6de6b5-541f29fc" href="<?php echo esc_url(home_url("interna-materia")); ?>" class="layout192_image-wrapper w-inline-block"><img sizes="(max-width: 1000px) 100vw, 1000px" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/depositphotos_405502886_xl-copia-1000x563-p-500.jpg?v=1742321523 500w, <?php echo get_template_directory_uri(); ?>/assets/images/depositphotos_405502886_xl-copia-1000x563-p-800.jpg?v=1742321523 800w, <?php echo get_template_directory_uri(); ?>/assets/images/depositphotos_405502886_xl-copia-1000x563.jpg?v=1742321523 1000w" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/depositphotos_405502886_xl-copia-1000x563.jpg?v=1742321523" loading="lazy" class="layout192_image"></a>
                  <div id="w-node-_677c4f38-ab86-0d4d-26ef-89750b6de6b7-541f29fc" class="featured_content-right">
                    <div class="featured_meta-wrapper">
                      <div class="text-style-tagline">Categoria</div>
                    </div>
                    <div class="featured_content-wrapper">
                      <a href="<?php echo esc_url(home_url("interna-materia")); ?>" class="heading-style-h4">Lorem ipsum dolor sit amet consectetur. Tincidunt sapien pulvinar euismod vestibulum massa ac faucibus massa .</a>
                      <div class="spacer-small"></div>
                      <p class="text-size-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>
                    </div>
                    <div class="button-group align-0right">
                      <a href="<?php echo esc_url(home_url("interna-materia")); ?>" class="button is-link is-icon w-inline-block">
                        <div>Saiba mais</div>
                        <div class="icon-embed-xxsmall w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path>
                          </svg></div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="spacer-large"></div>
              <div class="layout521_component">
                <div class="w-layout-grid layout521_grid-list">
                  <div id="w-node-a71cee18-ddb4-18d0-ed13-ec386d5d26bc-541f29fc" class="w-layout-grid layout521_row">
                    <div class="layout521_card text-color-white">
                      <div class="layout521_background-image-wrapper">
                        <div class="image-overlay-layer"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523" alt="" class="layout521_background-image">
                      </div>
                      <div class="layout521_card-content">
                        <div class="layout521_card-content-top">
                          <div class="spacer-xsmall"></div>
                          <h3 class="heading-style-h5">Medium length section heading goes here</h3>
                          <div class="spacer-xxsmall"></div>
                        </div>
                      </div>
                    </div>
                    <div class="layout521_card text-color-white">
                      <div class="layout521_background-image-wrapper">
                        <div class="image-overlay-layer"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523" alt="" class="layout521_background-image">
                      </div>
                      <div class="layout521_card-content">
                        <div class="layout521_card-content-top">
                          <div class="spacer-xsmall"></div>
                          <h3 class="heading-style-h5">Medium length section heading goes here</h3>
                          <div class="spacer-xxsmall"></div>
                        </div>
                      </div>
                    </div>
                    <div class="layout521_card text-color-white">
                      <div class="layout521_background-image-wrapper">
                        <div class="image-overlay-layer"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523" alt="" class="layout521_background-image">
                      </div>
                      <div class="layout521_card-content">
                        <div class="layout521_card-content-top">
                          <div class="spacer-xsmall"></div>
                          <h3 class="heading-style-h5">Medium length section heading goes here</h3>
                          <div class="spacer-xxsmall"></div>
                        </div>
                      </div>
                    </div>
                    <div class="layout521_card text-color-white">
                      <div class="layout521_background-image-wrapper">
                        <div class="image-overlay-layer"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523" alt="" class="layout521_background-image">
                      </div>
                      <div class="layout521_card-content">
                        <div class="layout521_card-content-top">
                          <div class="spacer-xsmall"></div>
                          <h3 class="heading-style-h5">Medium length section heading goes here</h3>
                          <div class="spacer-xxsmall"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <header id="blog-header-5" class="section_podcast">
        <div class="padding-global">
          <div class="container-large">
            <div class="padding-section-medium">
              <div class="margin-bottom margin-small">
                <div blocks-name="max-width-large" blocks-slot-children="ST232" class="max-width-large">
                  <h3 blocks-non-deletable="true" blocks-name="heading" blocks-slot-item-canonical="EL2" class="heading-style-h2">Podcast</h3>
                </div>
              </div>
              <div class="podcast_featured-posts">
                <div class="blog10_main-post">
                  <div class="blog10_main-list-wrapper">
                    <div class="blog10_main-list">
                      <div class="post_item">
                        <a href="<?php echo esc_url(home_url("interna-materia")); ?>" class="post_item-link w-inline-block">
                          <div class="post_image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image-landscape.svg?v=1742321523" alt="" class="ultimas_featured_image"></div>
                          <div class="spacer-xsmall"></div>
                          <h3 class="heading-style-h5">Lorem ipsum dolor sit amet EP. 01 - Sapien pulvinar euismod.</h3>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="blog10_featured-posts">
                  <div class="blog10_featured-list-wrapper">
                    <div class="podcast_fetured-list">
                      <div blocks-name="blog26_featured-item" class="blog26_featured-item" sym="true">
                        <a href="#" class="blog26_featured-item-link w-inline-block">
                          <div class="blog26_image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image-landscape.svg?v=1742321523" alt="" class="blog26_mini-image"></div>
                          <div blocks-name="blog26_featured-item-content" blocks-slot-children="ST232" class="blog26_featured-item-content">
                            <div class="margin-bottom margin-xsmall">
                              <div blocks-slot-children="ST232" blocks-name="blog26_meta-wrapper-2" class="blog26_meta-wrapper">
                                <div blocks-name="tag-2" class="tag">
                                  <div>Category</div>
                                </div>
                              </div>
                            </div>
                            <div class="margin-bottom margin-xxsmall">
                              <h3 blocks-non-deletable="true" blocks-name="heading-style-h5-5" blocks-slot-item-canonical="EL127" class="heading-style-h6">Lorem ipsum dolor sit amet EP. 01 - Sapien pulvinar euismod.</h3>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div blocks-name="blog26_featured-item" class="blog26_featured-item" sym="true">
                        <a href="#" class="blog26_featured-item-link w-inline-block">
                          <div class="blog26_image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image-landscape.svg?v=1742321523" alt="" class="blog26_mini-image"></div>
                          <div blocks-name="blog26_featured-item-content" blocks-slot-children="ST232" class="blog26_featured-item-content">
                            <div class="margin-bottom margin-xsmall">
                              <div blocks-slot-children="ST232" blocks-name="blog26_meta-wrapper-2" class="blog26_meta-wrapper">
                                <div blocks-name="tag-2" class="tag">
                                  <div>Category</div>
                                </div>
                              </div>
                            </div>
                            <div class="margin-bottom margin-xxsmall">
                              <h3 blocks-non-deletable="true" blocks-name="heading-style-h5-5" blocks-slot-item-canonical="EL127" class="heading-style-h6">Lorem ipsum dolor sit amet EP. 01 - Sapien pulvinar euismod.</h3>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div blocks-name="blog26_featured-item" class="blog26_featured-item" sym="true">
                        <a href="#" class="blog26_featured-item-link w-inline-block">
                          <div class="blog26_image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image-landscape.svg?v=1742321523" alt="" class="blog26_mini-image"></div>
                          <div blocks-name="blog26_featured-item-content" blocks-slot-children="ST232" class="blog26_featured-item-content">
                            <div class="margin-bottom margin-xsmall">
                              <div blocks-slot-children="ST232" blocks-name="blog26_meta-wrapper-2" class="blog26_meta-wrapper">
                                <div blocks-name="tag-2" class="tag">
                                  <div>Category</div>
                                </div>
                              </div>
                            </div>
                            <div class="margin-bottom margin-xxsmall">
                              <h3 blocks-non-deletable="true" blocks-name="heading-style-h5-5" blocks-slot-item-canonical="EL127" class="heading-style-h6">Lorem ipsum dolor sit amet EP. 01 - Sapien pulvinar euismod.</h3>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div blocks-name="blog26_featured-item" class="blog26_featured-item" sym="true">
                        <a href="#" class="blog26_featured-item-link w-inline-block">
                          <div class="blog26_image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image-landscape.svg?v=1742321523" alt="" class="blog26_mini-image"></div>
                          <div blocks-name="blog26_featured-item-content" blocks-slot-children="ST232" class="blog26_featured-item-content">
                            <div class="margin-bottom margin-xsmall">
                              <div blocks-slot-children="ST232" blocks-name="blog26_meta-wrapper-2" class="blog26_meta-wrapper">
                                <div blocks-name="tag-2" class="tag">
                                  <div>Category</div>
                                </div>
                              </div>
                            </div>
                            <div class="margin-bottom margin-xxsmall">
                              <h3 blocks-non-deletable="true" blocks-name="heading-style-h5-5" blocks-slot-item-canonical="EL127" class="heading-style-h6">Lorem ipsum dolor sit amet EP. 01 - Sapien pulvinar euismod.</h3>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    </main>
    <footer class="footer_component" sym="true">
      <div class="padding-global">
        <div class="container-large">
          <div class="padding-vertical padding-xxlarge">
            <div class="padding-bottom padding-small">
              <div class="w-layout-grid footer_top-wrapper">
                <div class="footer_left-wrapper">
                  <a href="#" class="footer1logo-link w-nav-brand"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_luana.png?v=1742321523" alt="" class="footer_logo"></a>
                  <div class="spacer-small"></div>
                  <div>Lorem ipsum dolor sit amet consectetur. Fusce tincidunt eu nisl volutpat viverra venenatis. Sit quis sociis vitae sodales elit aenean consectetur vehicula. Tortor morbi senectus pretium ornare pharetra.</div>
                </div>
                <div class="w-layout-grid footer_menu-wrapper">
                  <div class="footer_link-column">
                    <div class="text-weight-semibold">Início</div>
                  </div>
                  <div class="footer_link-column">
                    <div class="text-weight-semibold">Categorias</div>
                    <div class="spacer-xsmall"></div>
                    <div class="footer1_link-list">
                      <a href="#" class="footer_link">Saúde e Ciência</a>
                      <a href="#" class="footer_link">Mundo</a>
                      <a href="#" class="footer_link">Artigos de Opinião</a>
                      <a href="#" class="footer_link">Link Four</a>
                      <a href="#" class="footer_link">Link Five</a>
                    </div>
                  </div>
                  <div class="footer_link-column">
                    <div class="text-weight-semibold">Projetos</div>
                    <div class="spacer-xsmall"></div>
                    <div class="footer1_link-list">
                      <a href="#" class="footer_link">Web Stories</a>
                      <a href="#" class="footer_link">podcast</a>
                    </div>
                  </div>
                  <div class="footer_link-column">
                    <div class="text-weight-semibold">Sobre</div>
                    <div class="spacer-xsmall"></div>
                    <div class="footer1_link-list">
                      <a href="#" class="footer_link">Luana araújo</a>
                      <a href="#" class="footer_link">equipe</a>
                      <a href="#" class="footer_link">Link Nine</a>
                    </div>
                  </div>
                </div>
                <div class="footer_social-wrapper">
                  <div class="footer_social_list">
                    <a href="#" class="footer_social-link w-inline-block">
                      <div class="icon-embed-medium w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M16 3H8C5.23858 3 3 5.23858 3 8V16C3 18.7614 5.23858 21 8 21H16C18.7614 21 21 18.7614 21 16V8C21 5.23858 18.7614 3 16 3ZM19.25 16C19.2445 17.7926 17.7926 19.2445 16 19.25H8C6.20735 19.2445 4.75549 17.7926 4.75 16V8C4.75549 6.20735 6.20735 4.75549 8 4.75H16C17.7926 4.75549 19.2445 6.20735 19.25 8V16ZM16.75 8.25C17.3023 8.25 17.75 7.80228 17.75 7.25C17.75 6.69772 17.3023 6.25 16.75 6.25C16.1977 6.25 15.75 6.69772 15.75 7.25C15.75 7.80228 16.1977 8.25 16.75 8.25ZM12 7.5C9.51472 7.5 7.5 9.51472 7.5 12C7.5 14.4853 9.51472 16.5 12 16.5C14.4853 16.5 16.5 14.4853 16.5 12C16.5027 10.8057 16.0294 9.65957 15.1849 8.81508C14.3404 7.97059 13.1943 7.49734 12 7.5ZM9.25 12C9.25 13.5188 10.4812 14.75 12 14.75C13.5188 14.75 14.75 13.5188 14.75 12C14.75 10.4812 13.5188 9.25 12 9.25C10.4812 9.25 9.25 10.4812 9.25 12Z" fill="CurrentColor"></path>
                        </svg></div>
                    </a>
                    <a href="#" class="footer_social-link w-inline-block">
                      <div class="icon-embed-medium w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M22 12.0611C22 6.50451 17.5229 2 12 2C6.47715 2 2 6.50451 2 12.0611C2 17.0828 5.65684 21.2452 10.4375 22V14.9694H7.89844V12.0611H10.4375V9.84452C10.4375 7.32296 11.9305 5.93012 14.2146 5.93012C15.3088 5.93012 16.4531 6.12663 16.4531 6.12663V8.60261H15.1922C13.95 8.60261 13.5625 9.37822 13.5625 10.1739V12.0611H16.3359L15.8926 14.9694H13.5625V22C18.3432 21.2452 22 17.083 22 12.0611Z" fill="CurrentColor"></path>
                        </svg></div>
                    </a>
                    <a href="#" class="footer_social-link w-inline-block">
                      <div class="icon-embed-medium w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z" fill="CurrentColor"></path>
                        </svg></div>
                    </a>
                    <a href="#" class="footer_social-link w-inline-block">
                      <div class="icon-embed-medium w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5686 4.77345C21.5163 5.02692 22.2555 5.76903 22.5118 6.71673C23.1821 9.42042 23.1385 14.5321 22.5259 17.278C22.2724 18.2257 21.5303 18.965 20.5826 19.2213C17.9071 19.8831 5.92356 19.8015 3.40294 19.2213C2.45524 18.9678 1.71595 18.2257 1.45966 17.278C0.827391 14.7011 0.871044 9.25144 1.44558 6.73081C1.69905 5.78311 2.44116 5.04382 3.38886 4.78753C6.96561 4.0412 19.2956 4.282 20.5686 4.77345ZM9.86682 8.70227L15.6122 11.9974L9.86682 15.2925V8.70227Z" fill="CurrentColor"></path>
                        </svg></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="divider-horizontal"></div>
            <div class="padding-top padding-medium">
              <div class="footer1_bottom-wrapper">
                <div class="footer1_credit-text">© 2025 Luana Araujo. Todos os direitos reservados.</div>
                <div class="w-layout-grid footer1_legal-list">
                  <a href="#" class="footer_legal-link">Política de privacidade</a>
                  <a href="#" class="footer_legal-link">Termos de serviço</a>
                  <a href="#" class="footer_legal-link">Cookies Settings</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  
  