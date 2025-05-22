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
            .w-richtext> :not(div):first-child,
            .w-richtext>div:first-child> :first-child {
                margin-top: 0 !important;
            }

            /* Get rid of bottom margin on last element in any rich text element */
            .w-richtext>:last-child,
            .w-richtext ol li:last-child,
            .w-richtext ul li:last-child {
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
            .container-medium,
            .container-small,
            .container-large {
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
            select {
                -webkit-appearance: none;
            }

            @media screen and (max-width: 991px) {

                .hide,
                .hide-tablet {
                    display: none !important;
                }
            }

            @media screen and (max-width: 767px) {
                .hide-mobile-landscape {
                    display: none !important;
                }
            }

            @media screen and (max-width: 479px) {
                .hide-mobile {
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

            .two-col-post,
            .post_item {
                grid-area: span 1 / span 2 / span 1 / span 2;
            }

            .three-col-post {
                grid-area: span 1 / span 3 / span 1 / span 3;
            }

            .navbar4_main_link::after {
                content: " | ";
                margin: 0 1rem;
                /* Adds space on both sides of the separator */
            }

            .navbar4_main_link:last-child::after {
                content: "";
                /* Removes the separator after the last item */
            }
            </style>
        </div>
        <div class="color-schemes w-embed">
            <style>
            /* Color Schemes Controls*/
            <meta name="relume-color-schemes"content="false"/>.color-scheme-1 {
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
    <div data-animation="default" class="navbar4_component w-nav" data-easing2="ease"
         fs-scrolldisable-element="smart-nav" data-easing="ease-in" data-collapse="all"
         data-w-id="50caee5b-1a48-9cd4-aaa4-381dc22b2599" role="banner" data-no-scroll="1" data-duration="400"
         data-doc-height="1" sym="true">
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
                <a href="<?php echo esc_url(home_url("categoria")); ?>"
                   class="navbar4_main_link w-nav-link">EM&nbsp;ALTA</a>
                <a href="<?php echo esc_url(home_url("categoria")); ?>" class="navbar4_main_link w-nav-link">MUNDO
                    E&nbsp;POlÍTICA</a>
                <a href="<?php echo esc_url(home_url("categoria")); ?>" class="navbar4_main_link w-nav-link">SaÚde e
                    ciência</a>
                <a href="<?php echo esc_url(home_url("categoria")); ?>" class="navbar4_main_link w-nav-link">artigos</a>
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
                                    <p class="text-size-medium">Lorem ipsum dolor sit amet consectetur. Sed pretium nibh
                                        iaculis euismod quam vel diam. In in pellentesque vel eu consequat. Diam quis
                                        pharetra scelerisque aliquet etiam pretium hendrerit nisl. Tristique dolor
                                        accumsan sollicitudin pellentesque vestibulum amet. Tellus a etiam tortor
                                        blandit sed. Velit aenean blandit ultricies at sit pellentesque tellus dolor
                                        vel. Facilisi scelerisque pharetra metus at vulputate nunc vivamus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-huge"></div>
                        <div class="layout3_component">
                            <div class="w-layout-grid layout3_content">
                                <div class="layout3_content-left">
                                    <h2 class="heading-sobre heading-style-h3">Long heading is what you see here in this
                                        feature section</h2>
                                    <div class="spacer-small"></div>
                                    <div class="text-rich-text w-richtext">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <div data-delay="4000" data-animation="slide" class="gallery15_slider w-slider"
                                     data-autoplay="false" data-easing="ease" data-hide-arrows="false"
                                     data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3"
                                     data-duration="500" data-infinite="false">
                                    <div class="gallery15_mask w-slider-mask">
                                        <div class="gallery15_slide w-slide">
                                            <div class="gallery15_image-wrapper"><img loading="lazy"
                                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523"
                                                     alt="" class="gallery15_image"></div>
                                        </div>
                                        <div class="gallery15_slide w-slide">
                                            <div class="gallery15_image-wrapper"><img loading="lazy"
                                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523"
                                                     alt="" class="gallery15_image"></div>
                                        </div>
                                        <div class="gallery15_slide w-slide">
                                            <div class="gallery15_image-wrapper"><img loading="lazy"
                                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523"
                                                     alt="" class="gallery15_image"></div>
                                        </div>
                                    </div>
                                    <div
                                         class="slider-arrow is-centre-previous hide-mobile-landscape w-slider-arrow-left">
                                        <div class="slider-arrow-icon_default w-embed"><svg width="30" height="24"
                                                 viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.25267 10.233C0.80323 10.7017 0.550783 11.3371 0.550783 11.9996C0.550782 12.6622 0.803229 13.2976 1.25267 13.7663L10.3023 23.198C10.7525 23.667 11.3631 23.9305 11.9999 23.9305C12.6366 23.9305 13.2472 23.667 13.6975 23.198C14.1477 22.729 14.4006 22.0929 14.4006 21.4297C14.4006 20.7664 14.1477 20.1303 13.6975 19.6613L8.74387 14.4996L27.1999 14.4997C27.8364 14.4997 28.4468 14.2363 28.8969 13.7674C29.347 13.2986 29.5999 12.6627 29.5999 11.9997C29.5999 11.3366 29.347 10.7007 28.8969 10.2319C28.4468 9.76304 27.8364 9.49965 27.1999 9.49965L8.74387 9.49965L13.6975 4.33965C13.9204 4.10743 14.0972 3.83174 14.2179 3.52833C14.3385 3.22492 14.4006 2.89973 14.4006 2.57132C14.4006 2.24291 14.3385 1.91771 14.2179 1.6143C14.0972 1.31089 13.9204 1.0352 13.6975 0.80298C13.4745 0.570761 13.2099 0.386555 12.9186 0.260878C12.6273 0.1352 12.3151 0.0705145 11.9999 0.0705145C11.6846 0.0705144 11.3724 0.1352 11.0811 0.260877C10.7899 0.386554 10.5252 0.57076 10.3023 0.80298L1.25267 10.233Z"
                                                      fill="#723A30"></path>
                                            </svg></div>
                                    </div>
                                    <div class="slider-arrow is-centre-next hide-mobile-landscape w-slider-arrow-right">
                                        <div class="slider-arrow-icon_default w-embed"><svg width="30" height="24"
                                                 viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M28.7473 13.767C29.1968 13.2983 29.4492 12.6628 29.4492 12.0003C29.4492 11.3378 29.1968 10.7024 28.7473 10.2337L19.6977 0.802002C19.2475 0.333011 18.6369 0.0695337 18.0001 0.0695336C17.3634 0.0695336 16.7528 0.33301 16.3025 0.802002C15.8523 1.27099 15.5994 1.90708 15.5994 2.57033C15.5994 3.23359 15.8523 3.86968 16.3025 4.33867L21.2561 9.50034L2.80013 9.50034C2.16361 9.50034 1.55316 9.76373 1.10307 10.2326C0.652984 10.7014 0.400127 11.3373 0.400127 12.0003C0.400127 12.6634 0.652984 13.2993 1.10307 13.7681C1.55316 14.2369 2.16361 14.5003 2.80013 14.5003L21.2561 14.5003L16.3025 19.6603C16.0796 19.8926 15.9028 20.1682 15.7821 20.4717C15.6615 20.7751 15.5994 21.1003 15.5994 21.4287C15.5994 21.7571 15.6615 22.0823 15.7821 22.3857C15.9028 22.6891 16.0796 22.9648 16.3025 23.197C16.5255 23.4292 16.7901 23.6134 17.0814 23.7391C17.3727 23.8648 17.6849 23.9295 18.0001 23.9295C18.3154 23.9295 18.6276 23.8648 18.9189 23.7391C19.2101 23.6134 19.4748 23.4292 19.6977 23.197L28.7473 13.767Z"
                                                      fill="#723A30"></path>
                                            </svg></div>
                                    </div>
                                    <div class="gallery15_slide-nav w-slider-nav w-slider-nav-invert w-round"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_cta15 text-color-white">
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-section-large">
                        <div class="cta15_component">
                            <div class="w-layout-grid cta15_content">
                                <div class="cta15_content-left">
                                    <h2 class="heading-style-h2">Lorem ipsum dolor sit amet consectetu. Bibendum amet
                                        libero euismod eget.</h2>
                                </div>
                                <div class="cta15_content-right">
                                    <div class="text-rich-text w-richtext">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta15_background-image-wrapper">
                <div class="image-overlay-layer"></div><img loading="lazy"
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523"
                     alt="" class="cta15_background-image">
            </div>
        </section>
        <section class="section_equipe">
            <div class="heading_section-wrapper tx-1">
                <h2 class="heading-style-h2">EQUIPE</h2>
            </div>
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-section-small">
                        <div class="team4_component">
                            <div class="max-width-large"></div>
                            <div class="spacer-xxlarge"></div>
                            <div class="team4_list-wrapper">
                                <div class="w-layout-grid team4_list">
                                    <div class="team4_item">
                                        <div class="team4_image-wrapper"><img loading="lazy"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523"
                                                 alt="" class="team4_image"></div>
                                        <div class="spacer-small"></div>
                                        <div class="team4_title-wrapper">
                                            <div class="text-size-large text-weight-semibold">Nome e sobrenome</div>
                                            <div class="text-size-medium">Cargo</div>
                                        </div>
                                        <div class="spacer-xsmall"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                            enim in eros elementum tristique.</p>
                                        <div class="spacer-small"></div>
                                        <div class="w-layout-grid team4_social">
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="team4_item">
                                        <div class="team4_image-wrapper"><img loading="lazy"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523"
                                                 alt="" class="team4_image"></div>
                                        <div class="spacer-small"></div>
                                        <div class="team4_title-wrapper">
                                            <div class="text-size-large text-weight-semibold">Nome e sobrenome</div>
                                            <div class="text-size-medium">Cargo</div>
                                        </div>
                                        <div class="spacer-xsmall"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                            enim in eros elementum tristique.</p>
                                        <div class="spacer-small"></div>
                                        <div class="w-layout-grid team4_social">
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="team4_item">
                                        <div class="team4_image-wrapper"><img loading="lazy"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523"
                                                 alt="" class="team4_image"></div>
                                        <div class="spacer-small"></div>
                                        <div class="team4_title-wrapper">
                                            <div class="text-size-large text-weight-semibold">Nome e sobrenome</div>
                                            <div class="text-size-medium">Cargo</div>
                                        </div>
                                        <div class="spacer-xsmall"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                            enim in eros elementum tristique.</p>
                                        <div class="spacer-small"></div>
                                        <div class="w-layout-grid team4_social">
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="team4_item">
                                        <div class="team4_image-wrapper"><img loading="lazy"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523"
                                                 alt="" class="team4_image"></div>
                                        <div class="spacer-small"></div>
                                        <div class="team4_title-wrapper">
                                            <div class="text-size-large text-weight-semibold">Nome e sobrenome</div>
                                            <div class="text-size-medium">Cargo</div>
                                        </div>
                                        <div class="spacer-xsmall"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                            enim in eros elementum tristique.</p>
                                        <div class="spacer-small"></div>
                                        <div class="w-layout-grid team4_social">
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="team4_item">
                                        <div class="team4_image-wrapper"><img loading="lazy"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523"
                                                 alt="" class="team4_image"></div>
                                        <div class="spacer-small"></div>
                                        <div class="team4_title-wrapper">
                                            <div class="text-size-large text-weight-semibold">Nome e sobrenome</div>
                                            <div class="text-size-medium">Cargo</div>
                                        </div>
                                        <div class="spacer-xsmall"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                            enim in eros elementum tristique.</p>
                                        <div class="spacer-small"></div>
                                        <div class="w-layout-grid team4_social">
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="team4_item">
                                        <div class="team4_image-wrapper"><img loading="lazy"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523"
                                                 alt="" class="team4_image"></div>
                                        <div class="spacer-small"></div>
                                        <div class="team4_title-wrapper">
                                            <div class="text-size-large text-weight-semibold">Nome e sobrenome</div>
                                            <div class="text-size-medium">Cargo</div>
                                        </div>
                                        <div class="spacer-xsmall"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                            enim in eros elementum tristique.</p>
                                        <div class="spacer-small"></div>
                                        <div class="w-layout-grid team4_social">
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="team4_item">
                                        <div class="team4_image-wrapper"><img loading="lazy"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523"
                                                 alt="" class="team4_image"></div>
                                        <div class="spacer-small"></div>
                                        <div class="team4_title-wrapper">
                                            <div class="text-size-large text-weight-semibold">Nome e sobrenome</div>
                                            <div class="text-size-medium">Cargo</div>
                                        </div>
                                        <div class="spacer-xsmall"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                            enim in eros elementum tristique.</p>
                                        <div class="spacer-small"></div>
                                        <div class="w-layout-grid team4_social">
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="team4_item">
                                        <div class="team4_image-wrapper"><img loading="lazy"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.svg?v=1742321523"
                                                 alt="" class="team4_image"></div>
                                        <div class="spacer-small"></div>
                                        <div class="team4_title-wrapper">
                                            <div class="text-size-large text-weight-semibold">Nome e sobrenome</div>
                                            <div class="text-size-medium">Cargo</div>
                                        </div>
                                        <div class="spacer-xsmall"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                            enim in eros elementum tristique.</p>
                                        <div class="spacer-small"></div>
                                        <div class="w-layout-grid team4_social">
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                            <a href="#" class="social-link w-inline-block">
                                                <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                              fill="CurrentColor"></path>
                                                    </svg></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_contact17">
            <div class="heading_section-wrapper sobre">
                <h2 class="heading-style-h2">ENTRE&nbsp;EM&nbsp;CONTATO</h2>
            </div>
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-section-small">
                        <div class="contact17_component">
                            <div class="w-layout-grid contact17_grid-list">
                                <div class="contact17_item">
                                    <div class="contact17_icon-wrapper">
                                        <div class="icon-embed-medium w-embed"><svg width=" 100%" height=" 100%"
                                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 4H4C2.897 4 2 4.897 2 6V18C2 19.103 2.897 20 4 20H20C21.103 20 22 19.103 22 18V6C22 4.897 21.103 4 20 4ZM20 6V6.511L12 12.734L4 6.512V6H20ZM4 18V9.044L11.386 14.789C11.5611 14.9265 11.7773 15.0013 12 15.0013C12.2227 15.0013 12.4389 14.9265 12.614 14.789L20 9.044L20.002 18H4Z"
                                                      fill="currentColor"></path>
                                            </svg></div>
                                        <h3 class="heading-style-h4">Email</h3>
                                    </div>
                                    <div class="spacer-xsmall"></div>
                                    <p>Se você tiver alguma dúvida ou precisa de mais informações, entre em contato
                                        conosco:</p>
                                    <div class="spacer-small"></div>
                                    <a href="#" class="text-style-link">hello@relume.io</a>
                                </div>
                                <div class="contact17_item">
                                    <div class="contact17_icon-wrapper">
                                        <div class="icon-embed-medium w-embed"><svg width=" 100%" height=" 100%"
                                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.707 12.293C17.6142 12.2 17.504 12.1263 17.3827 12.076C17.2614 12.0257 17.1313 11.9998 17 11.9998C16.8687 11.9998 16.7386 12.0257 16.6173 12.076C16.496 12.1263 16.3858 12.2 16.293 12.293L14.699 13.887C13.96 13.667 12.581 13.167 11.707 12.293C10.833 11.419 10.333 10.04 10.113 9.30096L11.707 7.70696C11.7999 7.61417 11.8737 7.50397 11.924 7.38265C11.9743 7.26134 12.0002 7.13129 12.0002 6.99996C12.0002 6.86862 11.9743 6.73858 11.924 6.61726C11.8737 6.49595 11.7999 6.38575 11.707 6.29296L7.707 2.29296C7.61421 2.20001 7.50401 2.12627 7.38269 2.07596C7.26138 2.02565 7.13133 1.99976 7 1.99976C6.86866 1.99976 6.73862 2.02565 6.6173 2.07596C6.49599 2.12627 6.38579 2.20001 6.293 2.29296L3.581 5.00496C3.201 5.38496 2.987 5.90696 2.995 6.43996C3.018 7.86396 3.395 12.81 7.293 16.708C11.191 20.606 16.137 20.982 17.562 21.006H17.59C18.118 21.006 18.617 20.798 18.995 20.42L21.707 17.708C21.7999 17.6152 21.8737 17.505 21.924 17.3837C21.9743 17.2623 22.0002 17.1323 22.0002 17.001C22.0002 16.8696 21.9743 16.7396 21.924 16.6183C21.8737 16.4969 21.7999 16.3867 21.707 16.294L17.707 12.293ZM17.58 19.005C16.332 18.984 12.062 18.649 8.707 15.293C5.341 11.927 5.015 7.64196 4.995 6.41896L7 4.41396L9.586 6.99996L8.293 8.29296C8.17546 8.41041 8.08904 8.55529 8.04155 8.71453C7.99406 8.87376 7.987 9.04231 8.021 9.20496C8.045 9.31996 8.632 12.047 10.292 13.707C11.952 15.367 14.679 15.954 14.794 15.978C14.9565 16.0129 15.1253 16.0064 15.2846 15.9591C15.444 15.9117 15.5889 15.825 15.706 15.707L17 14.414L19.586 17L17.58 19.005V19.005Z"
                                                      fill="currentColor"></path>
                                            </svg></div>
                                        <h3 class="heading-style-h4">Phone</h3>
                                    </div>
                                    <div class="spacer-xsmall"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim
                                        in ero.</p>
                                    <div class="spacer-small"></div>
                                    <a href="#" class="text-style-link">+1 (555) 000-0000</a>
                                </div>
                                <div class="contact17_item">
                                    <div class="contact17_icon-wrapper">
                                        <div class="icon-embed-medium w-embed"><svg width=" 100%" height=" 100%"
                                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 14C14.206 14 16 12.206 16 10C16 7.794 14.206 6 12 6C9.794 6 8 7.794 8 10C8 12.206 9.794 14 12 14ZM12 8C13.103 8 14 8.897 14 10C14 11.103 13.103 12 12 12C10.897 12 10 11.103 10 10C10 8.897 10.897 8 12 8Z"
                                                      fill="currentColor"></path>
                                                <path d="M11.42 21.814C11.5892 21.9349 11.792 21.9998 12 21.9998C12.208 21.9998 12.4107 21.9349 12.58 21.814C12.884 21.599 20.029 16.44 20 10C20 5.589 16.411 2 12 2C7.589 2 4 5.589 4 9.995C3.971 16.44 11.116 21.599 11.42 21.814ZM12 4C15.309 4 18 6.691 18 10.005C18.021 14.443 13.612 18.428 12 19.735C10.389 18.427 5.979 14.441 6 10C6 6.691 8.691 4 12 4Z"
                                                      fill="currentColor"></path>
                                            </svg></div>
                                        <h3 class="heading-style-h4">Office</h3>
                                    </div>
                                    <div class="spacer-xsmall"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim
                                        in ero.</p>
                                    <div class="spacer-small"></div>
                                    <a href="#" class="text-style-link">123 Sample St, Sydney NSW 2000 AU</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer_component" sym="true">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-vertical padding-xxlarge">
                    <div class="padding-bottom padding-small">
                        <div class="w-layout-grid footer_top-wrapper">
                            <div class="footer_left-wrapper">
                                <a href="#" class="footer1logo-link w-nav-brand"><img loading="lazy"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_luana.png?v=1742321523"
                                         alt="" class="footer_logo"></a>
                                <div class="spacer-small"></div>
                                <div>Lorem ipsum dolor sit amet consectetur. Fusce tincidunt eu nisl volutpat viverra
                                    venenatis. Sit quis sociis vitae sodales elit aenean consectetur vehicula. Tortor
                                    morbi senectus pretium ornare pharetra.</div>
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
                                        <div class="icon-embed-medium w-embed"><svg width="100%" height="100%"
                                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M16 3H8C5.23858 3 3 5.23858 3 8V16C3 18.7614 5.23858 21 8 21H16C18.7614 21 21 18.7614 21 16V8C21 5.23858 18.7614 3 16 3ZM19.25 16C19.2445 17.7926 17.7926 19.2445 16 19.25H8C6.20735 19.2445 4.75549 17.7926 4.75 16V8C4.75549 6.20735 6.20735 4.75549 8 4.75H16C17.7926 4.75549 19.2445 6.20735 19.25 8V16ZM16.75 8.25C17.3023 8.25 17.75 7.80228 17.75 7.25C17.75 6.69772 17.3023 6.25 16.75 6.25C16.1977 6.25 15.75 6.69772 15.75 7.25C15.75 7.80228 16.1977 8.25 16.75 8.25ZM12 7.5C9.51472 7.5 7.5 9.51472 7.5 12C7.5 14.4853 9.51472 16.5 12 16.5C14.4853 16.5 16.5 14.4853 16.5 12C16.5027 10.8057 16.0294 9.65957 15.1849 8.81508C14.3404 7.97059 13.1943 7.49734 12 7.5ZM9.25 12C9.25 13.5188 10.4812 14.75 12 14.75C13.5188 14.75 14.75 13.5188 14.75 12C14.75 10.4812 13.5188 9.25 12 9.25C10.4812 9.25 9.25 10.4812 9.25 12Z"
                                                      fill="CurrentColor"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="footer_social-link w-inline-block">
                                        <div class="icon-embed-medium w-embed"><svg width="100%" height="100%"
                                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22 12.0611C22 6.50451 17.5229 2 12 2C6.47715 2 2 6.50451 2 12.0611C2 17.0828 5.65684 21.2452 10.4375 22V14.9694H7.89844V12.0611H10.4375V9.84452C10.4375 7.32296 11.9305 5.93012 14.2146 5.93012C15.3088 5.93012 16.4531 6.12663 16.4531 6.12663V8.60261H15.1922C13.95 8.60261 13.5625 9.37822 13.5625 10.1739V12.0611H16.3359L15.8926 14.9694H13.5625V22C18.3432 21.2452 22 17.083 22 12.0611Z"
                                                      fill="CurrentColor"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="footer_social-link w-inline-block">
                                        <div class="icon-embed-medium w-embed"><svg width="100%" height="100%"
                                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                      fill="CurrentColor"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="footer_social-link w-inline-block">
                                        <div class="icon-embed-medium w-embed"><svg width="100%" height="100%"
                                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M20.5686 4.77345C21.5163 5.02692 22.2555 5.76903 22.5118 6.71673C23.1821 9.42042 23.1385 14.5321 22.5259 17.278C22.2724 18.2257 21.5303 18.965 20.5826 19.2213C17.9071 19.8831 5.92356 19.8015 3.40294 19.2213C2.45524 18.9678 1.71595 18.2257 1.45966 17.278C0.827391 14.7011 0.871044 9.25144 1.44558 6.73081C1.69905 5.78311 2.44116 5.04382 3.38886 4.78753C6.96561 4.0412 19.2956 4.282 20.5686 4.77345ZM9.86682 8.70227L15.6122 11.9974L9.86682 15.2925V8.70227Z"
                                                      fill="CurrentColor"></path>
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