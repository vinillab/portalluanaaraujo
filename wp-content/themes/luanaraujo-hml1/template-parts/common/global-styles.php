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

           .navbar4_main_link::after,
           .navbar_link::after {
               content: " | ";
               margin: 0 .85rem;
               /* Adds space on both sides of the separator */
           }

           .navbar4_main_link:last-child::after,
           .navbar_link:last-child::after {
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