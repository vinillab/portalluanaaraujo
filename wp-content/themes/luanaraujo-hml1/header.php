<?php
// Exit if accessed directly
defined("ABSPATH") || exit(); ?>
<!DOCTYPE html>
<?php $args = wp_parse_args($args, [
	"wfPage" => "67d48426a6d9dae6ce6f3a09",
	"head" => "head/front-page",
	"tracking" => "head/tracking",
	"body" => "",
]); ?>
<html data-wf-page="<?php echo $args["wfPage"]; ?>" data-wf-site="67d48425a6d9dae6ce6f39c9"
      <?php language_attributes(); ?>>

<head><?php
get_template_part("template-parts/" . $args["head"]);
get_template_part("template-parts/" . $args["tracking"]);
wp_enqueue_script("jquery");
wp_head();
?></head>

<body <?php body_class($args["body"]); ?>>
    <?php wp_body_open(); ?>