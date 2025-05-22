
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
    <div class="main-wrapper">
      <div class="padding-global">
        <div class="container-large">
          <div class="rl-styleguide_nav">
            <a href="#typography" class="rl-styleguide_nav-link w-inline-block">
              <div>Typography</div>
            </a>
            <a href="#colors" class="rl-styleguide_nav-link w-inline-block">
              <div>Colors</div>
            </a>
            <a href="#UI-elements" class="rl-styleguide_nav-link w-inline-block">
              <div>UI Elements</div>
            </a>
            <a href="#radius" class="rl-styleguide_nav-link w-inline-block">
              <div>Radius</div>
            </a>
            <a href="#effects" class="rl-styleguide_nav-link w-inline-block">
              <div>Effects</div>
            </a>
            <a href="#structure-classes" class="rl-styleguide_nav-link w-inline-block">
              <div>Structure Classes</div>
            </a>
          </div>
          <div class="rl-styleguide_elements">
            <div class="rl-styleguide_header">
              <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86205-ce6f3a0f" class="rl-styleguide_heading-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg?v=1742321523" loading="lazy" id="w-node-_336be75c-ab2b-838b-5642-972b6cc86207-ce6f3a0f" alt=""></div>
              <div class="button-group">
                <a href="https://www.finsweet.com/client-first/docs/intro" target="_blank" class="button is-secondary is-small is-icon w-inline-block">
                  <div>Relume Resources</div>
                  <div class="icon-embed-xsmall w-embed"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 15.8333V11.25C17.5 11.0199 17.3135 10.8333 17.0833 10.8333H16.25C16.0199 10.8333 15.8333 11.0199 15.8333 11.25V15.8333H4.16667V4.16667H8.75C8.98012 4.16667 9.16667 3.98012 9.16667 3.75V2.91667C9.16667 2.68655 8.98012 2.5 8.75 2.5H4.16667C3.24619 2.5 2.5 3.24619 2.5 4.16667V15.8333C2.5 16.7538 3.24619 17.5 4.16667 17.5H15.8333C16.7538 17.5 17.5 16.7538 17.5 15.8333ZM17.0917 2.69167L17.3167 2.91667V2.90833C17.4299 3.02132 17.4955 3.17342 17.5 3.33333V8.75C17.5 8.98012 17.3135 9.16667 17.0833 9.16667H16.25C16.0199 9.16667 15.8333 8.98012 15.8333 8.75V5.35L8.8 12.375C8.72176 12.4539 8.61527 12.4982 8.50417 12.4982C8.39307 12.4982 8.28657 12.4539 8.20833 12.375L7.625 11.7917C7.54612 11.7134 7.50175 11.6069 7.50175 11.4958C7.50175 11.3847 7.54612 11.2782 7.625 11.2L14.6583 4.16667H11.25C11.0199 4.16667 10.8333 3.98012 10.8333 3.75V2.91667C10.8333 2.68655 11.0199 2.5 11.25 2.5H16.6667C16.8278 2.50668 16.98 2.57535 17.0917 2.69167Z" fill="currentColor"></path>
                    </svg></div>
                </a>
                <a href="https://www.finsweet.com/client-first/docs/intro" target="_blank" class="button is-secondary is-small is-icon w-inline-block">
                  <div>Client-First v2.1</div>
                  <div class="icon-embed-xsmall w-embed"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 15.8333V11.25C17.5 11.0199 17.3135 10.8333 17.0833 10.8333H16.25C16.0199 10.8333 15.8333 11.0199 15.8333 11.25V15.8333H4.16667V4.16667H8.75C8.98012 4.16667 9.16667 3.98012 9.16667 3.75V2.91667C9.16667 2.68655 8.98012 2.5 8.75 2.5H4.16667C3.24619 2.5 2.5 3.24619 2.5 4.16667V15.8333C2.5 16.7538 3.24619 17.5 4.16667 17.5H15.8333C16.7538 17.5 17.5 16.7538 17.5 15.8333ZM17.0917 2.69167L17.3167 2.91667V2.90833C17.4299 3.02132 17.4955 3.17342 17.5 3.33333V8.75C17.5 8.98012 17.3135 9.16667 17.0833 9.16667H16.25C16.0199 9.16667 15.8333 8.98012 15.8333 8.75V5.35L8.8 12.375C8.72176 12.4539 8.61527 12.4982 8.50417 12.4982C8.39307 12.4982 8.28657 12.4539 8.20833 12.375L7.625 11.7917C7.54612 11.7134 7.50175 11.6069 7.50175 11.4958C7.50175 11.3847 7.54612 11.2782 7.625 11.2L14.6583 4.16667H11.25C11.0199 4.16667 10.8333 3.98012 10.8333 3.75V2.91667C10.8333 2.68655 11.0199 2.5 11.25 2.5H16.6667C16.8278 2.50668 16.98 2.57535 17.0917 2.69167Z" fill="currentColor"></path>
                    </svg></div>
                </a>
              </div>
            </div>
            <div id="typography" class="rl-styleguide_typography">
              <div class="rl-styleguide_heading">Typography</div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">HTML&nbsp;Headings Tags<br><span class="rl-styleguide_subheading-small">HTML tags define default Heading styles.</span><br></div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8621b-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8621c-ce6f3a0f" class="rl-styleguide_label is-html-tag">All H1 Headings</div>
                  <h1>Heading 1</h1>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86220-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86221-ce6f3a0f" class="rl-styleguide_label is-html-tag">All H2 Headings</div>
                  <h2>Heading 2</h2>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86225-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86226-ce6f3a0f" class="rl-styleguide_label is-html-tag">All H3 Headings</div>
                  <h3>Heading 3</h3>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8622a-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8622b-ce6f3a0f" class="rl-styleguide_label is-html-tag">All H4 Headings</div>
                  <h4>Heading 4</h4>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8622f-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86230-ce6f3a0f" class="rl-styleguide_label is-html-tag">All H5 Headings</div>
                  <h5>Heading 5</h5>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86234-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86235-ce6f3a0f" class="rl-styleguide_label is-html-tag">All H6 Headings</div>
                  <h6>Heading 6</h6>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Heading Classes<br><span class="rl-styleguide_subheading-small">Heading classes when typography style doesn't match the default HTML tag.</span></div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8623f-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86240-ce6f3a0f" class="rl-styleguide_label">heading-style-h1</div>
                  <h2 class="heading-style-h1">Heading-style-h1</h2>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86244-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86245-ce6f3a0f" class="rl-styleguide_label">heading-style-h2</div>
                  <h2 class="heading-style-h2">Heading-style-h2</h2>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86249-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8624a-ce6f3a0f" class="rl-styleguide_label">heading-style-h3</div>
                  <h2 class="heading-style-h3">Heading-style-h3</h2>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8624e-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8624f-ce6f3a0f" class="rl-styleguide_label">heading-style-h4</div>
                  <h2 class="heading-style-h4">Heading-style-h4</h2>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86253-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86254-ce6f3a0f" class="rl-styleguide_label">heading-style-h5</div>
                  <h2 class="heading-style-h5">Heading-style-h5</h2>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86258-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86259-ce6f3a0f" class="rl-styleguide_label">heading-style-h6</div>
                  <h2 class="heading-style-h6">Heading-style-h6</h2>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Other HTML Tags<br><span class="rl-styleguide_subheading-small">HTML tags define default text styles.</span></div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86263-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86264-ce6f3a0f" class="rl-styleguide_label is-html-tag">All Paragraphs</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86268-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86269-ce6f3a0f" class="rl-styleguide_label is-html-tag">All Links</div>
                  <a href="#">All Links</a>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8626d-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8626e-ce6f3a0f" class="rl-styleguide_label is-html-tag">All Block Quotes</div>
                  <blockquote>Block Quote</blockquote>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86272-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86273-ce6f3a0f" class="rl-styleguide_label is-html-tag">All Unordered Lists</div>
                  <ul role="list" class="w-list-unstyled">
                    <li>
                      <p>No bullet list</p>
                    </li>
                    <li>
                      <p>No bullet list</p>
                    </li>
                  </ul>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8627c-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8627d-ce6f3a0f" class="rl-styleguide_label is-html-tag">All Unordered Lists</div>
                  <ul role="list">
                    <li>
                      <p>No bullet list</p>
                    </li>
                    <li>
                      <p>No bullet list</p>
                    </li>
                  </ul>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86286-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86287-ce6f3a0f" class="rl-styleguide_label is-html-tag">All Ordered Lists</div>
                  <ol role="list">
                    <li>
                      <p>No bullet list</p>
                    </li>
                    <li>
                      <p>No bullet list</p>
                    </li>
                    <li>
                      <p>No bullet list</p>
                    </li>
                  </ol>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Text Sizes<br><span class="rl-styleguide_subheading-small">Text sizes classes when typography size doesn't match the default HTML tag.</span></div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86299-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8629a-ce6f3a0f" class="rl-styleguide_label">text-size-large</div>
                  <p class="text-size-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8629e-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8629f-ce6f3a0f" class="rl-styleguide_label">text-size-medium</div>
                  <p class="text-size-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862a3-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862a4-ce6f3a0f" class="rl-styleguide_label">text-size-regular</div>
                  <p class="text-size-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862a8-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862a9-ce6f3a0f" class="rl-styleguide_label">text-size-small</div>
                  <p class="text-size-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862ad-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862ae-ce6f3a0f" class="rl-styleguide_label">text-size-tiny</div>
                  <p class="text-size-tiny">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Text Weights<br><span class="rl-styleguide_subheading-small">Text weight classes when typography weight doesn't match the default HTML tag.</span></div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862b8-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862b9-ce6f3a0f" class="rl-styleguide_label">text-weight-xbold</div>
                  <div class="text-weight-xbold">text-weight-xbold (800)</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862bd-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862be-ce6f3a0f" class="rl-styleguide_label">text-weight-bold</div>
                  <div class="text-weight-bold">text-weight-bold (700)</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862c2-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862c3-ce6f3a0f" class="rl-styleguide_label">text-weight-semibold</div>
                  <div class="text-weight-semibold">text-weight-semibold (600)</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862c7-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862c8-ce6f3a0f" class="rl-styleguide_label">text-weight-medium</div>
                  <div class="text-weight-medium">text-weight-medium (500)</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862cc-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862cd-ce6f3a0f" class="rl-styleguide_label">text-weight-normal</div>
                  <div class="text-weight-normal">text-weight-normal (400)</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862d1-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862d2-ce6f3a0f" class="rl-styleguide_label">text-weight-light</div>
                  <div class="text-weight-light">text-weight-light (300)</div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Text Styles<br><span class="rl-styleguide_subheading-small">Text style classes when typography style doesn't match the default HTML tag.</span><br></div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862dd-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862de-ce6f3a0f" class="rl-styleguide_label">text-style-italic</div>
                  <div class="text-style-italic">text-style-italic</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862e2-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862e3-ce6f3a0f" class="rl-styleguide_label">text-style-strikethrough</div>
                  <div class="text-style-strikethrough">text-style-strikethrough</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862e7-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862e8-ce6f3a0f" class="rl-styleguide_label">text-style-allcaps</div>
                  <div class="text-style-allcaps">text-style-allcaps</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862ec-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862ed-ce6f3a0f" class="rl-styleguide_label">text-style-nowrap</div>
                  <div class="text-style-nowrap">text-style-nowrap</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862f1-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862f2-ce6f3a0f" class="rl-styleguide_label">text-style-quote</div>
                  <div class="text-style-quote">text-style-quote</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862f6-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862f7-ce6f3a0f" class="rl-styleguide_label">text-style-link</div>
                  <div class="text-style-link">text-style-link</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862fb-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc862fc-ce6f3a0f" class="rl-styleguide_label">text-style-2lines</div>
                  <div class="text-style-2lines">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86300-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86301-ce6f3a0f" class="rl-styleguide_label">text-style-3lines</div>
                  <div class="text-style-3lines">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86305-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86306-ce6f3a0f" class="rl-styleguide_label">text-style-muted</div>
                  <div class="text-style-muted">text-style-muted</div>
                </div>
                <div id="w-node-aceb9adc-ab11-ae9c-832d-ba0cb63794ca-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-aceb9adc-ab11-ae9c-832d-ba0cb63794cb-ce6f3a0f" class="rl-styleguide_label">text-style-tagline</div>
                  <div class="text-style-tagline">text-style-tagline</div>
                </div>
                <div id="w-node-a01e4585-6913-dc47-ad7c-9500af9e534b-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row hide">
                  <div id="w-node-a01e4585-6913-dc47-ad7c-9500af9e534c-ce6f3a0f" class="rl-styleguide_label">text-color-white</div>
                  <div class="background-color-black">
                    <div class="text-color-white">text-color-white</div>
                  </div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Text Alignment<br><span class="rl-styleguide_subheading-small">Text alignment classes when typography alignment doesn't match the default HTML tag.</span></div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86310-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86311-ce6f3a0f" class="rl-styleguide_label">text-align-left</div>
                  <div class="text-align-left">text-align-left</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86315-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86316-ce6f3a0f" class="rl-styleguide_label">text-align-center</div>
                  <div class="text-align-center">text-align-center</div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8631a-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8631b-ce6f3a0f" class="rl-styleguide_label">text-align-right</div>
                  <div class="text-align-right">text-align-right</div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Rich Text</div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86322-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86323-ce6f3a0f" class="rl-styleguide_label">text-rich-text</div>
                  <div class="text-rich-text w-richtext">
                    <h1>Heading 1</h1>
                    <h2>Heading 2</h2>
                    <h3>Heading 3</h3>
                    <h4>Heading 4</h4>
                    <h5>Heading 5</h5>
                    <h6>Heading 6</h6>
                    <blockquote>This is a block quote</blockquote>
                    <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
                    <p>
                      <a href="https://relume.io">This is a link inside of a rich text</a>
                    </p>
                    <ul role="list">
                      <li>List item</li>
                      <li>List item</li>
                      <li>List item</li>
                    </ul>
                    <ol start="" role="list">
                      <li>List item</li>
                      <li>List item</li>
                      <li>List item</li>
                    </ol>
                    <figure class="w-richtext-align-normal w-richtext-figure-type-image">
                      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.png?v=1742321523" loading="lazy" alt=""></div>
                      <figcaption>Caption goes here</figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
            <div id="colors" class="rl-styleguide_colors">
              <div class="rl-styleguide_heading">Colors</div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Color Schemes<br><span class="rl-styleguide_subheading-small">Manage your colors easily with global color schemes simply adding the color scheme class to the section you want it applied to.</span></div>
                <div id="w-node-f850239f-5feb-931e-45b8-7b579b43a164-ce6f3a0f" class="w-layout-grid rl-styleguide_scheme-list">
                  <div class="rl-styleguide_scheme">
                    <div class="margin-bottom margin-xsmall">
                      <div class="rl-styleguide_label">color-scheme-1</div>
                    </div>
                    <div class="rl-styleguide_scheme-card">
                      <div class="color-scheme-1">
                        <div class="rl-styleguide_scheme-wrapper">
                          <div class="margin-bottom margin-xsmall">
                            <h5>Scheme 1</h5>
                          </div>
                          <div class="rl-styleguide_scheme-foreground">
                            <div class="rl-styleguide-accent">
                              <div class="icon-embed-xsmall w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                                </svg></div>
                            </div>
                            <p class="text-size-regular">Text color</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="UI-elements" class="rl-styleguide_ui-elements">
              <div class="rl-styleguide_heading">UI Elements</div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Buttons</div>
                <div class="w-layout-grid rl-styleguide_button-list">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863dd-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863de-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863df-ce6f3a0f" class="rl-styleguide_label">button</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863e1-ce6f3a0f" class="button-group">
                      <a href="#" class="button w-button">Button</a>
                    </div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863e4-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863e5-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863e6-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-small</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863ea-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-small w-button">Button</a>
                    </div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863ed-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863ee-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863ef-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-secondary</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863f3-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-secondary w-button">Button</a>
                    </div>
                  </div>
                  <div class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863f7-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863f8-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-secondary</div>
                      <div class="rl-styleguide_label">is-small</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863fe-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-secondary is-small w-button">Button</a>
                    </div>
                  </div>
                  <div class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86402-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86403-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-link</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86407-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-link w-button">Button</a>
                    </div>
                  </div>
                </div>
                <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8640a-ce6f3a0f">To use on a dark background, simple use the add-on class <span class="rl-styleguide_label">is-alternate</span></div>
                <div class="w-layout-grid rl-styleguide_button-list background-color-black">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8640f-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86410-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86411-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-alternate</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86415-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-alternate w-button">Button</a>
                    </div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86418-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86419-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8641a-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-alternate</div>
                      <div class="rl-styleguide_label">is-small</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86420-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-alternate is-small w-button">Button</a>
                    </div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86423-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86424-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86425-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-secondary</div>
                      <div class="rl-styleguide_label">is-alternate</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8642b-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-secondary is-alternate w-button">Button</a>
                    </div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8642e-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8642f-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86430-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-secondary</div>
                      <div class="rl-styleguide_label">is-small</div>
                      <div class="rl-styleguide_label">is-alternate</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86438-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-secondary is-small is-alternate w-button">Button</a>
                    </div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8643b-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8643c-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8643d-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-link</div>
                      <div class="rl-styleguide_label">is-alternate</div>
                    </div>
                    <a href="#" class="button is-link is-alternate w-button">Button</a>
                  </div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Buttons With Icons</div>
                <div class="w-layout-grid rl-styleguide_button-list">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86449-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8644a-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8644b-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-icon</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8644f-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-icon w-inline-block">
                        <div>Button</div>
                        <div class="icon-embed-xsmall w-embed"><svg width="currentWidth" height="currentHeight" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                          </svg></div>
                      </a>
                    </div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86454-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86455-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86456-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-small</div>
                      <div class="rl-styleguide_label">is-icon</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8645c-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-small is-icon w-inline-block">
                        <div>Button</div>
                        <div class="icon-embed-xsmall w-embed"><svg width="currentWidth" height="currentHeight" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                          </svg></div>
                      </a>
                    </div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86461-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86462-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86463-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-secondary</div>
                      <div class="rl-styleguide_label">is-icon</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86469-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-secondary is-icon w-inline-block">
                        <div>Button</div>
                        <div class="icon-embed-xsmall w-embed"><svg width="currentWidth" height="currentHeight" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                          </svg></div>
                      </a>
                    </div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8646e-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8646f-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86470-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-secondary</div>
                      <div class="rl-styleguide_label">is-small</div>
                      <div class="rl-styleguide_label">is-icon</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86478-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-secondary is-small is-icon w-inline-block">
                        <div>Button</div>
                        <div class="icon-embed-xsmall w-embed"><svg width="currentWidth" height="currentHeight" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                          </svg></div>
                      </a>
                    </div>
                  </div>
                  <div class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8647e-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8647f-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-link</div>
                      <div class="rl-styleguide_label">is-icon</div>
                    </div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86485-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-link is-icon w-inline-block">
                        <div>Button</div>
                        <div class="icon-embed-xsmall w-embed"><svg width="currentWidth" height="currentHeight" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                          </svg></div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="w-layout-grid rl-styleguide_button-list background-color-black">
                  <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f17-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f18-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f19-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-icon</div>
                      <div class="rl-styleguide_label">is-alternate</div>
                    </div>
                    <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f1d-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-icon is-alternate w-inline-block">
                        <div>Button</div>
                        <div class="icon-embed-xsmall w-embed"><svg width="currentWidth" height="currentHeight" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                          </svg></div>
                      </a>
                    </div>
                  </div>
                  <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f22-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f23-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f24-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-small</div>
                      <div class="rl-styleguide_label">is-icon</div>
                      <div class="rl-styleguide_label">is-alternate</div>
                    </div>
                    <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f2a-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-small is-icon is-alternate w-inline-block">
                        <div>Button</div>
                        <div class="icon-embed-xsmall w-embed"><svg width="currentWidth" height="currentHeight" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                          </svg></div>
                      </a>
                    </div>
                  </div>
                  <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f2f-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f30-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f31-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-secondary</div>
                      <div class="rl-styleguide_label">is-icon</div>
                      <div class="rl-styleguide_label">is-alternate</div>
                    </div>
                    <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f37-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-secondary is-icon is-alternate w-inline-block">
                        <div>Button</div>
                        <div class="icon-embed-xsmall w-embed"><svg width="currentWidth" height="currentHeight" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                          </svg></div>
                      </a>
                    </div>
                  </div>
                  <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f3c-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f3d-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f3e-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-secondary</div>
                      <div class="rl-styleguide_label">is-small</div>
                      <div class="rl-styleguide_label">is-icon</div>
                      <div class="rl-styleguide_label">is-alternate</div>
                    </div>
                    <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f46-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-secondary is-small is-icon is-alternate w-inline-block">
                        <div>Button</div>
                        <div class="icon-embed-xsmall w-embed"><svg width="currentWidth" height="currentHeight" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                          </svg></div>
                      </a>
                    </div>
                  </div>
                  <div class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f4c-ce6f3a0f" class="class-label-row">
                      <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f4d-ce6f3a0f" class="rl-styleguide_label">button</div>
                      <div class="rl-styleguide_label">is-link</div>
                      <div class="rl-styleguide_label">is-icon</div>
                      <div class="rl-styleguide_label">is-alternate</div>
                    </div>
                    <div id="w-node-_3266fde1-3acf-73c3-0dbd-a11049606f53-ce6f3a0f" class="button-group">
                      <a href="#" class="button is-link is-icon is-alternate w-inline-block">
                        <div>Button</div>
                        <div class="icon-embed-xsmall w-embed"><svg width="currentWidth" height="currentHeight" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                          </svg></div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Other UI&nbsp;Elements</div>
                <div class="w-layout-grid rl-styleguide_button-list">
                  <div id="w-node-d37b2579-9d18-04c9-4090-52481ef792d1-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                    <div id="w-node-d37b2579-9d18-04c9-4090-52481ef792d2-ce6f3a0f" class="class-label-row">
                      <div id="w-node-d37b2579-9d18-04c9-4090-52481ef792d3-ce6f3a0f" class="rl-styleguide_label">tab-link</div>
                    </div>
                    <div class="tabs-menu">
                      <a href="<?php echo esc_url(home_url("style-guide")); ?>" aria-current="page" class="tab-link w-inline-block">
                        <div>Monthly</div>
                      </a>
                      <a href="#" class="tab-link w-inline-block">
                        <div>Yearly</div>
                      </a>
                    </div>
                  </div>
                  <div id="w-node-d37b2579-9d18-04c9-4090-52481ef792dc-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                    <div id="w-node-d37b2579-9d18-04c9-4090-52481ef792dd-ce6f3a0f" class="class-label-row">
                      <div id="w-node-d37b2579-9d18-04c9-4090-52481ef792de-ce6f3a0f" class="rl-styleguide_label">category-filter-link</div>
                    </div>
                    <div class="category-filter-menu">
                      <a href="<?php echo esc_url(home_url("style-guide")); ?>" aria-current="page" class="category-filter-link w-inline-block">
                        <div>View all</div>
                      </a>
                      <a href="#" class="category-filter-link w-inline-block">
                        <div>Category one</div>
                      </a>
                    </div>
                  </div>
                  <div id="w-node-d37b2579-9d18-04c9-4090-52481ef792e7-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                    <div id="w-node-d37b2579-9d18-04c9-4090-52481ef792e8-ce6f3a0f" class="class-label-row">
                      <div id="w-node-d37b2579-9d18-04c9-4090-52481ef792e9-ce6f3a0f" class="rl-styleguide_label">slider-arrow</div>
                    </div>
                    <a href="#" class="slider-arrow w-inline-block">
                      <div class="slider-arrow-icon_default w-embed"><svg width="100%" height="100%" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12.6893 7.25L6.96967 1.53033L8.03033 0.469666L15.5607 8L8.03033 15.5303L6.96967 14.4697L12.6893 8.75H0.5V7.25H12.6893Z" fill="currentColor"></path>
                        </svg></div>
                    </a>
                  </div>
                  <div class="hidden-ui-elements">
                    <div class="category-filter-menu is-center">
                      <a href="#" class="category-filter-link w-inline-block">
                        <div>View all</div>
                      </a>
                      <a href="#" class="category-filter-link w-inline-block">
                        <div>Category one</div>
                      </a>
                    </div>
                    <div class="slider-arrow is-bottom-previous">
                      <div class="slider-arrow-icon w-embed"><svg width="100%" height="100%" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3.31066 8.75001L9.03033 14.4697L7.96967 15.5303L0.439339 8.00001L7.96967 0.469676L9.03033 1.53034L3.31066 7.25001L15.5 7.25L15.5 8.75L3.31066 8.75001Z" fill="currentColor"></path>
                        </svg></div>
                    </div>
                    <div class="slider-arrow is-bottom-next">
                      <div class="slider-arrow-icon_default w-embed"><svg width="100%" height="100%" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12.6893 7.25L6.96967 1.53033L8.03033 0.469666L15.5607 8L8.03033 15.5303L6.96967 14.4697L12.6893 8.75H0.5V7.25H12.6893Z" fill="currentColor"></path>
                        </svg></div>
                    </div>
                    <div class="slider-arrow is-centre-previous">
                      <div class="slider-arrow-icon w-embed"><svg width="100%" height="100%" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3.31066 8.75001L9.03033 14.4697L7.96967 15.5303L0.439339 8.00001L7.96967 0.469676L9.03033 1.53034L3.31066 7.25001L15.5 7.25L15.5 8.75L3.31066 8.75001Z" fill="currentColor"></path>
                        </svg></div>
                    </div>
                    <div class="slider-arrow is-centre-next">
                      <div class="slider-arrow-icon_default w-embed"><svg width="100%" height="100%" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12.6893 7.25L6.96967 1.53033L8.03033 0.469666L15.5607 8L8.03033 15.5303L6.96967 14.4697L12.6893 8.75H0.5V7.25H12.6893Z" fill="currentColor"></path>
                        </svg></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Tags<br><span class="rl-styleguide_subheading-small">Linkable labels that categorize or highlight information on cards, products and posts</span></div>
                <div class="w-layout-grid rl-styleguide_button-list">
                  <div id="w-node-_4a155e2a-eb56-5e64-2ca9-d86b21d2d284-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_4a155e2a-eb56-5e64-2ca9-d86b21d2d285-ce6f3a0f" class="class-label-row">
                      <div class="rl-styleguide_label">tag</div>
                    </div>
                    <div class="post_main_category">Tag</div>
                  </div>
                  <div id="w-node-a9020bef-146e-1178-2cc2-7b5aa4506421-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-a9020bef-146e-1178-2cc2-7b5aa4506422-ce6f3a0f" class="class-label-row">
                      <div class="rl-styleguide_label">tag</div>
                      <div class="rl-styleguide_label">is-text</div>
                    </div>
                    <div class="post_main_category is-text">Tag</div>
                  </div>
                </div>
                <div class="w-layout-grid rl-styleguide_button-list background-color-black">
                  <div id="w-node-_0c03b128-114e-b839-dd05-3a93ee2fd443-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_0c03b128-114e-b839-dd05-3a93ee2fd444-ce6f3a0f" class="class-label-row">
                      <div class="rl-styleguide_label">tag</div>
                      <div class="rl-styleguide_label">is-alternate</div>
                    </div>
                    <div class="post_main_category is-alternate">Tag</div>
                  </div>
                  <div id="w-node-_0c03b128-114e-b839-dd05-3a93ee2fd44a-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row is-button-row">
                    <div id="w-node-_0c03b128-114e-b839-dd05-3a93ee2fd44b-ce6f3a0f" class="class-label-row">
                      <div class="rl-styleguide_label">tag</div>
                      <div class="rl-styleguide_label">is-text</div>
                      <div class="rl-styleguide_label">is-alternate</div>
                    </div>
                    <div class="post_main_category is-text is-alternate">Tag</div>
                  </div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Form Elements</div>
                <div class="rl-styleguide_form-wrapper">
                  <div class="form_component w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form_form" data-wf-page-id="67d48426a6d9dae6ce6f3a0f" data-wf-element-id="336be75c-ab2b-838b-5642-972b6cc8648e" data-ajax-action="contact"><label for="contact[email]">Email</label><input type="email" name="contact[email]" class="w-input" required="">
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8648f-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                        <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86490-ce6f3a0f" class="class-label-column">
                          <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86491-ce6f3a0f" class="class-label-row">
                            <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86492-ce6f3a0f" class="rl-styleguide_label">form_field-label</div>
                          </div>
                          <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86494-ce6f3a0f" class="class-label-row">
                            <div class="rl-styleguide_label">form_input</div>
                          </div>
                        </div>
                        <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc86497-ce6f3a0f" class="form_field-wrapper"><label for="node" class="form_field-label">.form_field-label</label><input class="form_input w-input" maxlength="256" name="contact[field]" data-name="" placeholder=".form_input" type="text" id="node"></div>
                      </div>
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8649b-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                        <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8649c-ce6f3a0f" class="class-label-column">
                          <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc8649d-ce6f3a0f" class="class-label-row">
                            <div class="rl-styleguide_label">form_input</div>
                            <div class="rl-styleguide_label">is-text-area</div>
                          </div>
                        </div>
                        <div class="form_field-wrapper"><label for="field-3" class="form_field-label">.form_field-label</label></div>
                      </div>
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864a6-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                        <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864a7-ce6f3a0f" class="class-label-column">
                          <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864a8-ce6f3a0f" class="class-label-row">
                            <div class="rl-styleguide_label">form_input</div>
                            <div class="rl-styleguide_label">is-select-input</div>
                          </div>
                        </div>
                        <div class="form_field-wrapper"><label for="field-4" class="form_field-label">.form_field-label</label></div>
                      </div>
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864b1-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                        <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864b2-ce6f3a0f" class="class-label-column">
                          <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864b3-ce6f3a0f" class="class-label-row">
                            <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864b4-ce6f3a0f" class="rl-styleguide_label">form_checkbox</div>
                          </div>
                        </div><label class="w-checkbox form_checkbox">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom form_checkbox-icon"></div><input type="checkbox" id="checkbox-2" name="contact[checkbox-]" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="form_checkbox-label w-form-label" for="checkbox-2">Checkbox</span>
                        </label>
                      </div>
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864ba-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                        <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864bb-ce6f3a0f" class="class-label-column">
                          <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864bc-ce6f3a0f" class="class-label-row">
                            <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864bd-ce6f3a0f" class="rl-styleguide_label">form_radio</div>
                          </div>
                        </div><label id="w-node-da163454-3d7f-a6d2-8037-3b46b9c50abd-ce6f3a0f" class="form_radio w-radio">
                          <div class="w-form-formradioinput w-form-formradioinput--inputType-custom form_radio-icon w-radio-input"></div><input type="radio" data-name="Radio 2" id="radio-2" name="contact[radio-]" style="opacity:0;position:absolute;z-index:-1" value="Radio 2"><span class="form_radio-label w-form-label" for="radio-2">Radio</span>
                        </label>
                      </div>
                      <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864c3-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                        <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864c4-ce6f3a0f" class="class-label-column">
                          <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864c5-ce6f3a0f" class="class-label-row">
                            <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc864c6-ce6f3a0f" class="rl-styleguide_label">button</div>
                          </div>
                        </div><input type="submit" data-wait="Please wait..." id="w-node-_336be75c-ab2b-838b-5642-972b6cc864c8-ce6f3a0f" class="button w-button" value="Submit">
                      </div>
                    <?php udesly_honeypot_field() ?></form>
                    <div class="form_message-success-wrapper w-form-done">
                      <div class="form_message-success">
                        <div>Thank you! Your submission has been received!</div>
                      </div>
                    </div>
                    <div class="form_message-error-wrapper w-form-fail">
                      <div class="form_message-error">
                        <div>Oops! Something went wrong while submitting the form.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="w-node-efe47a2c-71a3-58fc-52e2-5719cef52200-ce6f3a0f">To use Forms on a dark background, simply use the add-on class <span class="rl-styleguide_label">is-alternate</span></div>
                <div class="rl-styleguide_form-wrapper background-color-black">
                  <div class="form_component w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form_form" data-wf-page-id="67d48426a6d9dae6ce6f3a0f" data-wf-element-id="4992825b-ed2c-cb01-ffba-02b107e55802" data-ajax-action="contact"><label for="contact[email]">Email</label><input type="email" name="contact[email]" class="w-input" required="">
                      <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55803-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                        <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55804-ce6f3a0f" class="class-label-column">
                          <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55805-ce6f3a0f" class="class-label-row">
                            <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55806-ce6f3a0f" class="rl-styleguide_label">form_field-label</div>
                          </div>
                          <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55808-ce6f3a0f" class="class-label-row">
                            <div class="rl-styleguide_label">form_input</div>
                          </div>
                        </div>
                        <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e5580b-ce6f3a0f" class="form_field-wrapper"><label for="node" class="form_field-label is-alternate">.form_field-label</label><input class="form_input is-alternate w-input" maxlength="256" name="contact[field]" data-name="" placeholder=".form_input" type="text" id="node"></div>
                      </div>
                      <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e5580f-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                        <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55810-ce6f3a0f" class="class-label-column">
                          <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55811-ce6f3a0f" class="class-label-row">
                            <div class="rl-styleguide_label">form_input</div>
                            <div class="rl-styleguide_label">is-text-area</div>
                          </div>
                        </div>
                        <div class="form_field-wrapper"><label for="Field-5" class="form_field-label is-alternate">.form_field-label</label></div>
                      </div>
                      <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e5581a-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                        <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e5581b-ce6f3a0f" class="class-label-column">
                          <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e5581c-ce6f3a0f" class="class-label-row">
                            <div class="rl-styleguide_label">form_input</div>
                            <div class="rl-styleguide_label">is-select-input</div>
                          </div>
                        </div>
                        <div class="form_field-wrapper"><label for="field-4" class="form_field-label is-alternate">.form_field-label</label></div>
                      </div>
                      <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55825-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                        <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55826-ce6f3a0f" class="class-label-column">
                          <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55827-ce6f3a0f" class="class-label-row">
                            <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55828-ce6f3a0f" class="rl-styleguide_label">form_checkbox</div>
                          </div>
                        </div><label class="w-checkbox form_checkbox is-alternate">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom form_checkbox-icon is-alternate"></div><input type="checkbox" name="contact[checkbox]" id="Checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"><span class="form_checkbox-label w-form-label" for="Checkbox">Checkbox</span>
                        </label>
                      </div>
                      <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e5582e-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                        <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e5582f-ce6f3a0f" class="class-label-column">
                          <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55830-ce6f3a0f" class="class-label-row">
                            <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55831-ce6f3a0f" class="rl-styleguide_label">form_radio</div>
                          </div>
                        </div><label id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55833-ce6f3a0f" class="form_radio is-alternate w-radio">
                          <div class="w-form-formradioinput w-form-formradioinput--inputType-custom form_radio-icon is-alternate w-radio-input"></div><input type="radio" name="contact[radio]" id="Radio-3" data-name="Radio" style="opacity:0;position:absolute;z-index:-1" value="Radio"><span class="form_radio-label w-form-label" for="Radio-3">Radio</span>
                        </label>
                      </div>
                      <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55837-ce6f3a0f" class="w-layout-grid rl-styleguide_item-row">
                        <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55838-ce6f3a0f" class="class-label-column">
                          <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e55839-ce6f3a0f" class="class-label-row">
                            <div id="w-node-_4992825b-ed2c-cb01-ffba-02b107e5583a-ce6f3a0f" class="rl-styleguide_label">button</div>
                          </div>
                        </div><input type="submit" data-wait="Please wait..." id="w-node-_4992825b-ed2c-cb01-ffba-02b107e5583c-ce6f3a0f" class="button is-alternate w-button" value="Submit">
                      </div>
                    <?php udesly_honeypot_field() ?></form>
                    <div class="form_message-success-wrapper w-form-done">
                      <div class="form_message-success">
                        <div>Thank you! Your submission has been received!</div>
                      </div>
                    </div>
                    <div class="form_message-error-wrapper w-form-fail">
                      <div class="form_message-error">
                        <div>Oops! Something went wrong while submitting the form.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Icons (Image)</div>
                <div class="rl-styleguide_icons-list">
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-height-xxsmall</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-height-xxsmall">
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-height-xsmall</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-height-xsmall">
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-height-small</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/6294195f2d0c46815fb2259c_icon.svg" loading="lazy" alt="" class="icon-height-small">
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-height-medium</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-height-medium">
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-height-large</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-height-large">
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-height-xlarge</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-height-xlarge">
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-height-custom1</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-height-custom1">
                  </div>
                </div>
                <div class="rl-styleguide_icons-list">
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-1x1-xxsmall</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-1x1-xxsmall">
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-1x1-xsmall</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-1x1-xsmall">
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-1x1-small</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-1x1-small">
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-1x1-medium</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-1x1-medium">
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-1x1-large</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-1x1-large">
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-1x1-xlarge</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-1x1-xlarge">
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-1x1-custom1</p><img src="https://uploads-ssl.webflow.com/624380709031623bfe4aee60/624380709031626fc14aee84_icon.svg" loading="lazy" alt="" class="icon-1x1-custom1">
                  </div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Icons (HTML Embed)<br><span class="rl-styleguide_subheading-small">HTML embed icons enable you to control icon color on hover.</span><br></div>
                <div class="rl-styleguide_icons-list">
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-embed-xxsmall</p>
                    <div class="icon-embed-xxsmall w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-embed-xsmall</p>
                    <div class="icon-embed-xsmall w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-embed-small</p>
                    <div class="icon-embed-small w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-embed-medium</p>
                    <div class="icon-embed-medium w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-embed-large</p>
                    <div class="icon-embed-large w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-embed-xlarge</p>
                    <div class="icon-embed-xlarge w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                  <div class="rl-styleguide_item">
                    <p class="rl-styleguide_label">icon-embed-custom1</p>
                    <div class="icon-embed-custom1 w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="radius" class="rl-styleguide_borders">
              <div class="rl-styleguide_heading">Radius</div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Large<br>‍<span class="rl-styleguide_subheading-small">Large radius is applied to elements which are 1 or 2 columns in width.</span></div>
                <div class="w-layout-grid rl-styleguide_radius-large-list">
                  <div class="rl-styleguide_radius-large"></div>
                  <div class="rl-styleguide_radius-large"></div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Medium<br>‍<span class="rl-styleguide_subheading-small">Medium radius is applied to elements which are between 2 and 3 columns in width.</span></div>
                <div class="w-layout-grid rl-styleguide_radius-medium-list">
                  <div class="rl-styleguide_radius-medium"></div>
                  <div class="rl-styleguide_radius-medium"></div>
                  <div class="rl-styleguide_radius-medium"></div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Small<br>‍<span class="rl-styleguide_subheading-small">Small radius is applied to elements which are smaller than 4 columns in width.</span></div>
                <div class="w-layout-grid rl-styleguide_radius-small-list">
                  <div class="rl-styleguide_radius-small"></div>
                  <div class="rl-styleguide_radius-small"></div>
                  <div class="rl-styleguide_radius-small"></div>
                  <div class="rl-styleguide_radius-small"></div>
                  <div class="rl-styleguide_radius-small"></div>
                  <div class="rl-styleguide_radius-small"></div>
                </div>
              </div>
            </div>
            <div id="effects" class="rl-styleguide_effects">
              <div class="rl-styleguide_heading">Effects</div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Box Shadows<br>‍<span class="rl-styleguide_subheading-small">Shadows allow you to add depth and realism to designs by positioning elements on a z-axis.</span></div>
                <div class="w-layout-grid rl-styleguide_shadows-list">
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863ba-ce6f3a0f" class="shadow-xxsmall">
                    <div class="rl-styleguide_label">shadow-xxsmall</div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863bd-ce6f3a0f" class="rl-styleguide_empty-space"></div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863be-ce6f3a0f" class="shadow-xsmall">
                    <div class="rl-styleguide_label">shadow-xsmall</div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863c1-ce6f3a0f" class="rl-styleguide_empty-space"></div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863c2-ce6f3a0f" class="shadow-small">
                    <div class="rl-styleguide_label">shadow-small</div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863c5-ce6f3a0f" class="rl-styleguide_empty-space"></div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863c6-ce6f3a0f" class="shadow-medium">
                    <div class="rl-styleguide_label">shadow-medium</div>
                    <div class="rl-styleguide_empty-space"></div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863ca-ce6f3a0f" class="shadow-large">
                    <div class="rl-styleguide_label">shadow-large</div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863cd-ce6f3a0f" class="rl-styleguide_empty-space"></div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863ce-ce6f3a0f" class="shadow-xlarge">
                    <div class="rl-styleguide_label">shadow-xlarge</div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863d1-ce6f3a0f" class="rl-styleguide_empty-space"></div>
                  </div>
                  <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863d2-ce6f3a0f" class="shadow-xxlarge">
                    <div class="rl-styleguide_label">shadow-xxlarge</div>
                    <div id="w-node-_336be75c-ab2b-838b-5642-972b6cc863d5-ce6f3a0f" class="rl-styleguide_empty-space"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="rl-styleguide_classes">
            <div id="structure-classes" class="rl-styleguide_structure">
              <div class="rl-styleguide_heading">Structure Classes</div>
              <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369290-ce6f3a0f" class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading is-text-small"><span>Defined and flexible core structure we can use on all or most pages.</span></div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369294-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369295-ce6f3a0f" class="rl-styleguide_label">page-wrapper</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369297-ce6f3a0f" class="page-wrapper">
                    <div class="rl-styleguide_empty-box pointer-events-off"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369299-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936929a-ce6f3a0f" class="rl-styleguide_label">main-wrapper</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936929c-ce6f3a0f" class="main-wrapper">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936929e-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936929f-ce6f3a0f" class="rl-styleguide_label">container-small</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692a1-ce6f3a0f" class="container-small">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692a3-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692a4-ce6f3a0f" class="rl-styleguide_label">container-medium</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692a6-ce6f3a0f" class="container-medium">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692a8-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692a9-ce6f3a0f" class="rl-styleguide_label">container-large</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692ab-ce6f3a0f" class="container-large">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692ad-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692ae-ce6f3a0f" class="rl-styleguide_label">padding-global</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692b0-ce6f3a0f" class="padding-global">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692b2-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692b3-ce6f3a0f" class="rl-styleguide_label">padding-section-small</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692b5-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692b6-ce6f3a0f" class="padding-section-small">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692b8-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692b9-ce6f3a0f" class="rl-styleguide_label">padding-section-medium</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692bb-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692bc-ce6f3a0f" class="padding-section-medium">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692be-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692bf-ce6f3a0f" class="rl-styleguide_label">padding-section-large</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692c1-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692c2-ce6f3a0f" class="padding-section-large">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692c4-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692c5-ce6f3a0f" class="rl-styleguide_label">button-group</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692c7-ce6f3a0f" class="button-group">
                    <div class="rl-styleguide_empty-box"></div>
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rl-styleguide_max-width">
              <div class="rl-styleguide_heading">Max Widths</div>
              <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692cd-ce6f3a0f" class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading is-text-small">Use the max-width CSS property to contain inner content to a maximum width.</div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692d1-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692d2-ce6f3a0f" class="rl-styleguide_label">max-width-full</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692d4-ce6f3a0f" class="max-width-full">
                    <div class="rl-styleguide_empty-box pointer-events-off"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692d6-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692d7-ce6f3a0f" class="rl-styleguide_label">max-width-full-tablet</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692d9-ce6f3a0f" class="max-width-full-tablet">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692db-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692dc-ce6f3a0f" class="rl-styleguide_label">max-width-full-mobile-landscape</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692de-ce6f3a0f" class="max-width-full-mobile-landscape">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692e0-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692e1-ce6f3a0f" class="rl-styleguide_label">max-width-full-mobile-portrait</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692e3-ce6f3a0f" class="max-width-full-mobile-portrait">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692e5-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692e6-ce6f3a0f" class="rl-styleguide_label">max-width-xxlarge</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692e8-ce6f3a0f" class="max-width-xxlarge">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692ea-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692eb-ce6f3a0f" class="rl-styleguide_label">max-width-xlarge</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692ed-ce6f3a0f" class="max-width-xlarge">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692ef-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692f0-ce6f3a0f" class="rl-styleguide_label">max-width-large</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692f2-ce6f3a0f" class="max-width-large">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692f4-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692f5-ce6f3a0f" class="rl-styleguide_label">max-width-medium</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692f7-ce6f3a0f" class="max-width-medium">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692f9-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692fa-ce6f3a0f" class="rl-styleguide_label">max-width-small</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692fc-ce6f3a0f" class="max-width-small">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692fe-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593692ff-ce6f3a0f" class="rl-styleguide_label">max-width-xsmall</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369301-ce6f3a0f" class="max-width-xsmall">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369303-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369304-ce6f3a0f" class="rl-styleguide_label">max-width-xxsmall</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369306-ce6f3a0f" class="max-width-xxsmall">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rl-styleguide_paddings">
              <div class="rl-styleguide_heading">Paddings</div>
              <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936930b-ce6f3a0f" class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Direction Classes</div>
                <div class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936930f-ce6f3a0f" class="rl-styleguide_label">padding-bottom</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369311-ce6f3a0f" class="padding-bottom">
                    <div class="rl-styleguide_empty-box pointer-events-off"></div>
                  </div>
                </div>
                <div class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369314-ce6f3a0f" class="rl-styleguide_label">padding-top</div>
                  <div class="padding-top">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369319-ce6f3a0f" class="rl-styleguide_label">padding-vertical</div>
                  <div class="padding-vertical">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936931e-ce6f3a0f" class="rl-styleguide_label">padding-horizontal</div>
                  <div class="padding-horizontal">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369323-ce6f3a0f" class="rl-styleguide_label">padding-left</div>
                  <div class="padding-left">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369328-ce6f3a0f" class="rl-styleguide_label">padding-right</div>
                  <div class="padding-right">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Size Classes</div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936932f-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369330-ce6f3a0f" class="rl-styleguide_label">padding-0</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369332-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369333-ce6f3a0f" class="padding-0">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369335-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369336-ce6f3a0f" class="rl-styleguide_label">padding-tiny</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369338-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369339-ce6f3a0f" class="padding-tiny">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936933b-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936933c-ce6f3a0f" class="rl-styleguide_label">padding-xxsmall</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936933e-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936933f-ce6f3a0f" class="padding-xxsmall">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369341-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369342-ce6f3a0f" class="rl-styleguide_label">padding-xsmall</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369344-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369345-ce6f3a0f" class="padding-xsmall">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369347-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369348-ce6f3a0f" class="rl-styleguide_label">padding-small</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936934a-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936934b-ce6f3a0f" class="padding-small">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936934d-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936934e-ce6f3a0f" class="rl-styleguide_label">padding-medium</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369350-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369351-ce6f3a0f" class="padding-medium">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369353-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369354-ce6f3a0f" class="rl-styleguide_label">padding-large</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369356-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369357-ce6f3a0f" class="padding-large">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369359-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936935a-ce6f3a0f" class="rl-styleguide_label">padding-xlarge</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936935c-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936935d-ce6f3a0f" class="padding-xlarge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936935f-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369360-ce6f3a0f" class="rl-styleguide_label">padding-xxlarge</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369362-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369363-ce6f3a0f" class="padding-xxlarge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369365-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369366-ce6f3a0f" class="rl-styleguide_label">padding-huge</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369368-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369369-ce6f3a0f" class="padding-huge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936936b-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936936c-ce6f3a0f" class="rl-styleguide_label">padding-xhuge</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936936e-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936936f-ce6f3a0f" class="padding-xhuge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369371-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369372-ce6f3a0f" class="rl-styleguide_label">padding-xxhuge</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369374-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369375-ce6f3a0f" class="padding-xxhuge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369377-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369378-ce6f3a0f" class="rl-styleguide_label">padding-custom1</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936937a-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936937b-ce6f3a0f" class="padding-custom1">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936937d-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936937e-ce6f3a0f" class="rl-styleguide_label">padding-custom2</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369380-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369381-ce6f3a0f" class="padding-custom2">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369383-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369384-ce6f3a0f" class="rl-styleguide_label">padding-custom3</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369386-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369387-ce6f3a0f" class="padding-custom3">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rl-styleguide_margins">
              <div class="rl-styleguide_heading">Margins</div>
              <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936938c-ce6f3a0f" class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Direction Classes</div>
                <div class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369390-ce6f3a0f" class="rl-styleguide_label">margin-bottom</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369392-ce6f3a0f" class="margin-bottom">
                    <div class="rl-styleguide_empty-box pointer-events-off"></div>
                  </div>
                </div>
                <div class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369395-ce6f3a0f" class="rl-styleguide_label">margin-top</div>
                  <div class="margin-top">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936939a-ce6f3a0f" class="rl-styleguide_label">margin-vertical</div>
                  <div class="margin-vertical">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936939f-ce6f3a0f" class="rl-styleguide_label">margin-horizontal</div>
                  <div class="margin-horizontal">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693a4-ce6f3a0f" class="rl-styleguide_label">margin-left</div>
                  <div class="margin-left">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693a9-ce6f3a0f" class="rl-styleguide_label">margin-right</div>
                  <div class="margin-right">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
              </div>
              <div class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Size Classes</div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693b0-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693b1-ce6f3a0f" class="rl-styleguide_label">margin-0</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693b3-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693b4-ce6f3a0f" class="margin-0">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693b6-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693b7-ce6f3a0f" class="rl-styleguide_label">margin-tiny</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693b9-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693ba-ce6f3a0f" class="margin-tiny">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693bc-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693bd-ce6f3a0f" class="rl-styleguide_label">margin-xxsmall</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693bf-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693c0-ce6f3a0f" class="margin-xxsmall">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693c2-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693c3-ce6f3a0f" class="rl-styleguide_label">margin-xsmall</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693c5-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693c6-ce6f3a0f" class="margin-xsmall">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693c8-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693c9-ce6f3a0f" class="rl-styleguide_label">margin-small</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693cb-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693cc-ce6f3a0f" class="margin-small">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693ce-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693cf-ce6f3a0f" class="rl-styleguide_label">margin-medium</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693d1-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693d2-ce6f3a0f" class="margin-medium">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693d4-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693d5-ce6f3a0f" class="rl-styleguide_label">margin-large</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693d7-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693d8-ce6f3a0f" class="margin-large">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693da-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693db-ce6f3a0f" class="rl-styleguide_label">margin-xlarge</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693dd-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693de-ce6f3a0f" class="margin-xlarge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693e0-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693e1-ce6f3a0f" class="rl-styleguide_label">margin-xxlarge</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693e3-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693e4-ce6f3a0f" class="margin-xxlarge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693e6-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693e7-ce6f3a0f" class="rl-styleguide_label">margin-huge</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693e9-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693ea-ce6f3a0f" class="margin-huge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693ec-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693ed-ce6f3a0f" class="rl-styleguide_label">margin-xhuge</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693ef-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693f0-ce6f3a0f" class="margin-xhuge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693f2-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693f3-ce6f3a0f" class="rl-styleguide_label">margin-xxhuge</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693f5-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693f6-ce6f3a0f" class="margin-xxhuge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693f8-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693f9-ce6f3a0f" class="rl-styleguide_label">margin-custom1</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693fb-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693fc-ce6f3a0f" class="margin-custom1">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693fe-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593693ff-ce6f3a0f" class="rl-styleguide_label">margin-custom2</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369401-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369402-ce6f3a0f" class="margin-custom2">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369404-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369405-ce6f3a0f" class="rl-styleguide_label">margin-custom3</div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369407-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369408-ce6f3a0f" class="margin-custom3">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rl-styleguide_spacers">
              <div class="rl-styleguide_heading">Spacers</div>
              <div id="w-node-aba73718-5f03-827e-9e0b-61449dc1d37c-ce6f3a0f" class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading">Unified spacer system for the project.</div>
                <div id="w-node-_1a6e4211-c1a3-edfa-99df-59c05fb448f8-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_1a6e4211-c1a3-edfa-99df-59c05fb448f9-ce6f3a0f" class="rl-styleguide_label">spacer-tiny</div>
                  <div id="w-node-_1a6e4211-c1a3-edfa-99df-59c05fb448fb-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_1a6e4211-c1a3-edfa-99df-59c05fb448fc-ce6f3a0f" class="spacer-tiny">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_16994295-7a31-57da-1001-8ec0ea846a1e-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_16994295-7a31-57da-1001-8ec0ea846a1f-ce6f3a0f" class="rl-styleguide_label">spacer-xxsmall</div>
                  <div id="w-node-_16994295-7a31-57da-1001-8ec0ea846a21-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_16994295-7a31-57da-1001-8ec0ea846a22-ce6f3a0f" class="spacer-xxsmall">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_8f691932-76bb-1979-3d19-a80adf0a25f2-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_8f691932-76bb-1979-3d19-a80adf0a25f3-ce6f3a0f" class="rl-styleguide_label">spacer-xsmall</div>
                  <div id="w-node-_8f691932-76bb-1979-3d19-a80adf0a25f5-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_8f691932-76bb-1979-3d19-a80adf0a25f6-ce6f3a0f" class="spacer-xsmall">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-f28919c2-e180-d075-d1c2-81b601b8a964-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-f28919c2-e180-d075-d1c2-81b601b8a965-ce6f3a0f" class="rl-styleguide_label">spacer-small</div>
                  <div id="w-node-f28919c2-e180-d075-d1c2-81b601b8a967-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-f28919c2-e180-d075-d1c2-81b601b8a968-ce6f3a0f" class="spacer-small">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-b2bd7b9e-a5b1-0617-1861-ecb60c9b53b3-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-b2bd7b9e-a5b1-0617-1861-ecb60c9b53b4-ce6f3a0f" class="rl-styleguide_label">spacer-medium</div>
                  <div id="w-node-b2bd7b9e-a5b1-0617-1861-ecb60c9b53b6-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-b2bd7b9e-a5b1-0617-1861-ecb60c9b53b7-ce6f3a0f" class="spacer-medium">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-ee961e8d-845a-edc3-3307-509470022457-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-ee961e8d-845a-edc3-3307-509470022458-ce6f3a0f" class="rl-styleguide_label">spacer-large</div>
                  <div id="w-node-ee961e8d-845a-edc3-3307-50947002245a-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-ee961e8d-845a-edc3-3307-50947002245b-ce6f3a0f" class="spacer-large">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_588dd3e3-4aa6-cc42-1280-2d37cff319e1-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_588dd3e3-4aa6-cc42-1280-2d37cff319e2-ce6f3a0f" class="rl-styleguide_label">spacer-xlarge</div>
                  <div id="w-node-_588dd3e3-4aa6-cc42-1280-2d37cff319e4-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_588dd3e3-4aa6-cc42-1280-2d37cff319e5-ce6f3a0f" class="spacer-xlarge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_626bd165-37fe-b21e-713f-accb16c57414-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_626bd165-37fe-b21e-713f-accb16c57415-ce6f3a0f" class="rl-styleguide_label">spacer-xxlarge</div>
                  <div id="w-node-_626bd165-37fe-b21e-713f-accb16c57417-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_626bd165-37fe-b21e-713f-accb16c57418-ce6f3a0f" class="spacer-xxlarge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_8198cc96-510b-d5a9-b63d-22b6607f5f40-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_8198cc96-510b-d5a9-b63d-22b6607f5f41-ce6f3a0f" class="rl-styleguide_label">spacer-huge</div>
                  <div id="w-node-_8198cc96-510b-d5a9-b63d-22b6607f5f43-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_8198cc96-510b-d5a9-b63d-22b6607f5f44-ce6f3a0f" class="spacer-huge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_2a26aaa0-f27b-d541-a441-687d55aa9ee5-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_2a26aaa0-f27b-d541-a441-687d55aa9ee6-ce6f3a0f" class="rl-styleguide_label">spacer-xhuge</div>
                  <div id="w-node-_2a26aaa0-f27b-d541-a441-687d55aa9ee8-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_2a26aaa0-f27b-d541-a441-687d55aa9ee9-ce6f3a0f" class="spacer-xhuge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
                <div id="w-node-_2abe4c27-4e03-1a95-b21e-aef8fb82fe33-ce6f3a0f" class="w-layout-grid rl-styleguide_item is-stretch">
                  <div id="w-node-_2abe4c27-4e03-1a95-b21e-aef8fb82fe34-ce6f3a0f" class="rl-styleguide_label">spacer-xxhuge</div>
                  <div id="w-node-_2abe4c27-4e03-1a95-b21e-aef8fb82fe36-ce6f3a0f" class="rl-styleguide_spacing">
                    <div id="w-node-_2abe4c27-4e03-1a95-b21e-aef8fb82fe37-ce6f3a0f" class="spacer-xxhuge">
                      <div class="rl-styleguide_empty-box"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rl-styleguide_spacing-all">
              <div class="rl-styleguide_spacing-sizes">
                <div class="padding-0"></div>
                <div class="padding-tiny"></div>
                <div class="padding-xxsmall"></div>
                <div class="padding-xsmall"></div>
                <div class="padding-small"></div>
                <div class="padding-medium"></div>
                <div class="padding-large"></div>
                <div class="padding-xlarge"></div>
                <div class="padding-xxlarge"></div>
                <div class="padding-huge"></div>
                <div class="padding-xhuge"></div>
                <div class="padding-xxhuge"></div>
                <div class="padding-custom1"></div>
                <div class="padding-custom2"></div>
                <div class="padding-custom3"></div>
                <div class="margin-0"></div>
                <div class="margin-tiny"></div>
                <div class="margin-xxsmall"></div>
                <div class="margin-xsmall"></div>
                <div class="margin-small"></div>
                <div class="margin-medium"></div>
                <div class="margin-large"></div>
                <div class="margin-xlarge"></div>
                <div class="margin-xxlarge"></div>
                <div class="margin-huge"></div>
                <div class="margin-xhuge"></div>
                <div class="margin-xxhuge"></div>
                <div class="margin-custom1"></div>
                <div class="margin-custom2"></div>
                <div class="margin-custom3"></div>
              </div>
              <div class="rl-styleguide_spacing-directions">
                <div class="stylesystem_padding-top">
                  <div class="padding-top"></div>
                  <div class="padding-top padding-0"></div>
                  <div class="padding-top padding-tiny"></div>
                  <div class="padding-top padding-xxsmall"></div>
                  <div class="padding-top padding-xsmall"></div>
                  <div class="padding-top padding-small"></div>
                  <div class="padding-top padding-medium"></div>
                  <div class="padding-top padding-large"></div>
                  <div class="padding-top padding-xlarge"></div>
                  <div class="padding-top padding-xxlarge"></div>
                  <div class="padding-top padding-huge"></div>
                  <div class="padding-top padding-xhuge"></div>
                  <div class="padding-top padding-xxhuge"></div>
                  <div class="padding-top padding-custom1"></div>
                  <div class="padding-top padding-custom2"></div>
                  <div class="padding-top padding-custom3"></div>
                </div>
                <div class="stylesystem_padding-bottom">
                  <div class="padding-bottom"></div>
                  <div class="padding-bottom padding-0"></div>
                  <div class="padding-bottom padding-tiny"></div>
                  <div class="padding-bottom padding-xxsmall"></div>
                  <div class="padding-bottom padding-xsmall"></div>
                  <div class="padding-bottom padding-small"></div>
                  <div class="padding-bottom padding-medium"></div>
                  <div class="padding-bottom padding-large"></div>
                  <div class="padding-bottom padding-xlarge"></div>
                  <div class="padding-bottom padding-xxlarge"></div>
                  <div class="padding-bottom padding-huge"></div>
                  <div class="padding-bottom padding-xhuge"></div>
                  <div class="padding-bottom padding-xxhuge"></div>
                  <div class="padding-bottom padding-custom1"></div>
                  <div class="padding-bottom padding-custom2"></div>
                  <div class="padding-bottom padding-custom3"></div>
                </div>
                <div class="stylesystem_padding-left">
                  <div class="padding-left"></div>
                  <div class="padding-left padding-0"></div>
                  <div class="padding-left padding-tiny"></div>
                  <div class="padding-left padding-xxsmall"></div>
                  <div class="padding-left padding-xsmall"></div>
                  <div class="padding-left padding-small"></div>
                  <div class="padding-left padding-medium"></div>
                  <div class="padding-left padding-large"></div>
                  <div class="padding-left padding-xlarge"></div>
                  <div class="padding-left padding-xxlarge"></div>
                  <div class="padding-left padding-huge"></div>
                  <div class="padding-left padding-xhuge"></div>
                  <div class="padding-left padding-xxhuge"></div>
                  <div class="padding-left padding-custom1"></div>
                  <div class="padding-left padding-custom2"></div>
                  <div class="padding-left padding-custom3"></div>
                </div>
                <div class="stylesystem_padding-right">
                  <div class="padding-right"></div>
                  <div class="padding-right padding-0"></div>
                  <div class="padding-right padding-tiny"></div>
                  <div class="padding-right padding-xxsmall"></div>
                  <div class="padding-right padding-xsmall"></div>
                  <div class="padding-right padding-small"></div>
                  <div class="padding-right padding-medium"></div>
                  <div class="padding-right padding-large"></div>
                  <div class="padding-right padding-xlarge"></div>
                  <div class="padding-right padding-xxlarge"></div>
                  <div class="padding-right padding-huge"></div>
                  <div class="padding-right padding-xhuge"></div>
                  <div class="padding-right padding-xxhuge"></div>
                  <div class="padding-right padding-custom1"></div>
                  <div class="padding-right padding-custom2"></div>
                  <div class="padding-right padding-custom3"></div>
                </div>
                <div class="stylesystem_padding-vertical">
                  <div class="padding-vertical"></div>
                  <div class="padding-vertical padding-0"></div>
                  <div class="padding-vertical padding-tiny"></div>
                  <div class="padding-vertical padding-xxsmall"></div>
                  <div class="padding-vertical padding-xsmall"></div>
                  <div class="padding-vertical padding-small"></div>
                  <div class="padding-vertical padding-medium"></div>
                  <div class="padding-vertical padding-large"></div>
                  <div class="padding-vertical padding-xlarge"></div>
                  <div class="padding-vertical padding-xxlarge"></div>
                  <div class="padding-vertical padding-huge"></div>
                  <div class="padding-vertical padding-xhuge"></div>
                  <div class="padding-vertical padding-xxhuge"></div>
                  <div class="padding-vertical padding-custom1"></div>
                  <div class="padding-vertical padding-custom2"></div>
                  <div class="padding-vertical padding-custom3"></div>
                </div>
                <div class="stylesystem_padding-horizontal">
                  <div class="padding-horizontal"></div>
                  <div class="padding-horizontal padding-0"></div>
                  <div class="padding-horizontal padding-tiny"></div>
                  <div class="padding-horizontal padding-xxsmall"></div>
                  <div class="padding-horizontal padding-xsmall"></div>
                  <div class="padding-horizontal padding-small"></div>
                  <div class="padding-horizontal padding-medium"></div>
                  <div class="padding-horizontal padding-large"></div>
                  <div class="padding-horizontal padding-xlarge"></div>
                  <div class="padding-horizontal padding-xxlarge"></div>
                  <div class="padding-horizontal padding-huge"></div>
                  <div class="padding-horizontal padding-xhuge"></div>
                  <div class="padding-horizontal padding-xxhuge"></div>
                  <div class="padding-horizontal padding-custom1"></div>
                  <div class="padding-horizontal padding-custom2"></div>
                  <div class="padding-horizontal padding-custom3"></div>
                </div>
                <div class="stylesystem_margin-top">
                  <div class="margin-top"></div>
                  <div class="margin-top margin-0"></div>
                  <div class="margin-top margin-tiny"></div>
                  <div class="margin-top margin-xxsmall"></div>
                  <div class="margin-top margin-xsmall"></div>
                  <div class="margin-top margin-small"></div>
                  <div class="margin-top margin-medium"></div>
                  <div class="margin-top margin-large"></div>
                  <div class="margin-top margin-xlarge"></div>
                  <div class="margin-top margin-xxlarge"></div>
                  <div class="margin-top margin-huge"></div>
                  <div class="margin-top margin-xhuge"></div>
                  <div class="margin-top margin-xxhuge"></div>
                  <div class="margin-top margin-custom1"></div>
                  <div class="margin-top margin-custom2"></div>
                  <div class="margin-top margin-custom3"></div>
                </div>
                <div class="stylesystem_margin-bottom">
                  <div class="margin-bottom"></div>
                  <div class="margin-bottom margin-0"></div>
                  <div class="margin-bottom margin-tiny"></div>
                  <div class="margin-bottom margin-xxsmall"></div>
                  <div class="margin-bottom margin-xsmall"></div>
                  <div class="margin-bottom margin-small"></div>
                  <div class="margin-bottom margin-medium"></div>
                  <div class="margin-bottom margin-large"></div>
                  <div class="margin-bottom margin-xlarge"></div>
                  <div class="margin-bottom margin-xxlarge"></div>
                  <div class="margin-bottom margin-huge"></div>
                  <div class="margin-bottom margin-xhuge"></div>
                  <div class="margin-bottom margin-xxhuge"></div>
                  <div class="margin-bottom margin-custom1"></div>
                  <div class="margin-bottom margin-custom2"></div>
                  <div class="margin-bottom margin-custom3"></div>
                </div>
                <div class="stylesystem_margin-left">
                  <div class="margin-left"></div>
                  <div class="margin-left margin-0"></div>
                  <div class="margin-left margin-tiny"></div>
                  <div class="margin-left margin-xxsmall"></div>
                  <div class="margin-left margin-xsmall"></div>
                  <div class="margin-left margin-small"></div>
                  <div class="margin-left margin-medium"></div>
                  <div class="margin-left margin-large"></div>
                  <div class="margin-left margin-xlarge"></div>
                  <div class="margin-left margin-xxlarge"></div>
                  <div class="margin-left margin-huge"></div>
                  <div class="margin-left margin-xhuge"></div>
                  <div class="margin-left margin-xxhuge"></div>
                  <div class="margin-left margin-custom1"></div>
                  <div class="margin-left margin-custom2"></div>
                  <div class="margin-left margin-custom3"></div>
                </div>
                <div class="stylesystem_margin-right">
                  <div class="margin-right"></div>
                  <div class="margin-right margin-0"></div>
                  <div class="margin-right margin-tiny"></div>
                  <div class="margin-right margin-xxsmall"></div>
                  <div class="margin-right margin-xsmall"></div>
                  <div class="margin-right margin-small"></div>
                  <div class="margin-right margin-medium"></div>
                  <div class="margin-right margin-large"></div>
                  <div class="margin-right margin-xlarge"></div>
                  <div class="margin-right margin-xxlarge"></div>
                  <div class="margin-right margin-huge"></div>
                  <div class="margin-right margin-xhuge"></div>
                  <div class="margin-right margin-xxhuge"></div>
                  <div class="margin-right margin-custom1"></div>
                  <div class="margin-right margin-custom2"></div>
                  <div class="margin-right margin-custom3"></div>
                </div>
                <div class="stylesystem_margin-vertical">
                  <div class="margin-vertical"></div>
                  <div class="margin-vertical margin-0"></div>
                  <div class="margin-vertical margin-tiny"></div>
                  <div class="margin-vertical margin-xxsmall"></div>
                  <div class="margin-vertical margin-xsmall"></div>
                  <div class="margin-vertical margin-small"></div>
                  <div class="margin-vertical margin-medium"></div>
                  <div class="margin-vertical margin-large"></div>
                  <div class="margin-vertical margin-xlarge"></div>
                  <div class="margin-vertical margin-xxlarge"></div>
                  <div class="margin-vertical margin-huge"></div>
                  <div class="margin-vertical margin-xhuge"></div>
                  <div class="margin-vertical margin-xxhuge"></div>
                  <div class="margin-vertical margin-custom1"></div>
                  <div class="margin-vertical margin-custom2"></div>
                  <div class="margin-vertical margin-custom3"></div>
                </div>
                <div class="stylesystem_margin-horizontal">
                  <div class="margin-horizontal"></div>
                  <div class="margin-horizontal margin-0"></div>
                  <div class="margin-horizontal margin-tiny"></div>
                  <div class="margin-horizontal margin-xxsmall"></div>
                  <div class="margin-horizontal margin-xsmall"></div>
                  <div class="margin-horizontal margin-small"></div>
                  <div class="margin-horizontal margin-medium"></div>
                  <div class="margin-horizontal margin-large"></div>
                  <div class="margin-horizontal margin-xlarge"></div>
                  <div class="margin-horizontal margin-xxlarge"></div>
                  <div class="margin-horizontal margin-huge"></div>
                  <div class="margin-horizontal margin-xhuge"></div>
                  <div class="margin-horizontal margin-xxhuge"></div>
                  <div class="margin-horizontal margin-custom1"></div>
                  <div class="margin-horizontal margin-custom2"></div>
                  <div class="margin-horizontal margin-custom3"></div>
                </div>
              </div>
            </div>
            <div class="rl-styleguide_utility-classes">
              <div class="rl-styleguide_heading">Utility Classes</div>
              <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593694fa-ce6f3a0f" class="w-layout-grid rl-styleguide_list">
                <div class="rl-styleguide_subheading"><span class="rl-styleguide_subheading-small">Useful utility classes we like to use in most of our projects to build faster.</span></div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593694fe-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a3593694ff-ce6f3a0f" class="rl-styleguide_label">hide</div>
                  <div class="hide">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369503-ce6f3a0f">This element is hidden</div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369505-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369506-ce6f3a0f" class="rl-styleguide_label">hide-tablet</div>
                  <div class="hide-tablet">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936950a-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936950b-ce6f3a0f" class="rl-styleguide_label">hide-mobile-portrait</div>
                  <div class="hide-mobile-portrait">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936950f-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369510-ce6f3a0f" class="rl-styleguide_label">hide-mobile-landscape</div>
                  <div class="hide-mobile-landscape">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369514-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369515-ce6f3a0f" class="rl-styleguide_label">overflow-visible</div>
                  <div class="overflow-visible">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369519-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936951a-ce6f3a0f" class="rl-styleguide_label">overflow-hidden</div>
                  <div class="overflow-hidden">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936951e-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936951f-ce6f3a0f" class="rl-styleguide_label">overflow-auto</div>
                  <div class="overflow-auto">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369523-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369524-ce6f3a0f" class="rl-styleguide_label">overflow-scroll</div>
                  <div class="overflow-scroll">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369528-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369529-ce6f3a0f" class="rl-styleguide_label">pointer-events-auto</div>
                  <div class="pointer-events-auto">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936952d-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936952e-ce6f3a0f" class="rl-styleguide_label">pointer-events-none</div>
                  <div class="pointer-events-none">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369532-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369533-ce6f3a0f" class="rl-styleguide_label">layer</div>
                  <div class="layer hide"></div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936953a-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936953b-ce6f3a0f" class="rl-styleguide_label">spacing-clean</div>
                  <div class="spacing-clean">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936953f-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369540-ce6f3a0f" class="rl-styleguide_label">align-center</div>
                  <div class="align-center">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369544-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369545-ce6f3a0f" class="rl-styleguide_label">z-index-1</div>
                  <div class="z-index-1">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369549-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936954a-ce6f3a0f" class="rl-styleguide_label">z-index-2</div>
                  <div class="z-index-2">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936954e-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a35936954f-ce6f3a0f" class="rl-styleguide_label">display-inlineflex</div>
                  <div class="display-inlineflex">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369553-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_9a3cb5be-cc97-b70e-6a89-31a359369554-ce6f3a0f" class="rl-styleguide_label">margin-top-auto</div>
                  <div class="margin-top-auto">
                    <div class="rl-styleguide_empty-box"></div>
                  </div>
                </div>
                <div id="w-node-de8106d9-b098-80e3-076c-80f3a0fa5e54-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-de8106d9-b098-80e3-076c-80f3a0fa5e55-ce6f3a0f" class="rl-styleguide_label">aspect-ratio-square</div>
                  <div class="aspect-ratio-square">
                    <div class="rl-styleguide_ratio-bg"></div>
                  </div>
                </div>
                <div id="w-node-_680345d6-d141-aefc-5e81-01faad69a792-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_680345d6-d141-aefc-5e81-01faad69a793-ce6f3a0f" class="rl-styleguide_label">aspect-ratio-portrait</div>
                  <div class="aspect-ratio-portrait">
                    <div class="rl-styleguide_ratio-bg"></div>
                  </div>
                </div>
                <div id="w-node-dc962921-5c74-5687-77a4-c1371012b297-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-dc962921-5c74-5687-77a4-c1371012b298-ce6f3a0f" class="rl-styleguide_label">aspect-ratio-landscape</div>
                  <div class="aspect-ratio-landscape">
                    <div class="rl-styleguide_ratio-bg"></div>
                  </div>
                </div>
                <div id="w-node-bbf5f4a2-0660-a8f8-7799-a71df583db57-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-bbf5f4a2-0660-a8f8-7799-a71df583db58-ce6f3a0f" class="rl-styleguide_label">aspect-ratio-widescreen</div>
                  <div class="aspect-ratio-widescreen">
                    <div class="rl-styleguide_ratio-bg"></div>
                  </div>
                </div>
                <div id="w-node-_723dac19-3a6b-8f5e-89ce-53b9006ba92c-ce6f3a0f" class="w-layout-grid rl-styleguide_item">
                  <div id="w-node-_723dac19-3a6b-8f5e-89ce-53b9006ba92d-ce6f3a0f" class="rl-styleguide_label">inherit-color</div>
                  <div class="inherit-color">
                    <div class="rl-styleguide_color-spacer"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  