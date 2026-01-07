<?php
function get_content_for_uol()
{
	global $post;

	// Clean any previous output buffers
	while (ob_get_level()) {
		ob_end_clean();
	}

	// Send headers only if not already sent
	if (!headers_sent()) {
		header("Content-Type: application/xml; charset=ISO-8859-1");
		header("Cache-Control: no-cache, must-revalidate");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
	}

	// Output XML declaration first (must be the very first thing)
	echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
echo "<documents>\n";

    $args = ["posts_per_page" => 10, "post_type" => "post", "post_status" => "publish"];

    query_posts($args);

    while (have_posts()) {
    the_post();

    $autor = get_the_author();
    $resumo = get_the_excerpt();
    if ($resumo != "") {
    $desc = $resumo;
    } else {
    $conteudo = get_the_content();
    $conteudo = apply_filters("the_content", $conteudo);
    $conteudo = str_replace("]]>", "]]&gt;", $conteudo);
    $the_content = explode("\n", $conteudo);
    $desc = $the_content[0];
    }
    $pub_date = get_the_date("d/m/Y H:i:s");
    $mod_date = get_the_modified_date("d/m/Y H:i:s");

    // Garantir que a data de atualização seja sempre igual ou posterior à data de criação
    $pub_timestamp = strtotime(get_the_date("Y-m-d H:i:s"));
    $mod_timestamp = strtotime(get_the_modified_date("Y-m-d H:i:s"));

    if ($mod_timestamp < $pub_timestamp) {
      $mod_date=$pub_date; // Usar a data de criação se a modificação for anterior
      }

      $permalink=get_permalink($post->ID);
        $slug = explode("/", $permalink);

        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $attached_file = wp_get_attachment($thumbnail_id);
        $attached_file_src = $attached_file["src"];

        $attached_file_alt = $attached_file["alt"];
        $attached_file_caption = $attached_file["caption"];
        $attached_file_description = $attached_file["description"];

        if (empty($attached_file_description)) {
        $attached_file_description = "&nbsp;";
        }
        if (empty($attached_file_caption)) {
        $attached_file_caption = "&nbsp;";
        }

        echo " <document id=\"Drauzio-" . $post->ID . "\">\n";
            echo " <content id=\"autor\">
                <![CDATA[" .
			utf8_decode($autor) .
			"]]>
            </content>\n";
            echo " <content id=\"titulo\">
                <![CDATA[" .
			utf8_decode(ajusta_especiais(get_the_title($post->ID))) .
			"]]>
            </content>\n";
            echo " <content id=\"criacao\">" . $pub_date . ".000</content>\n";
            echo " <content id=\"atualizacao\">" . $mod_date . ".000</content>\n";
            echo " <content id=\"link\">" . $permalink . "</content>\n";
            echo " <content id=\"texto\">
                <![CDATA[" .
			utf8_decode($desc) .
			"]]>
            </content>\n";
            echo " <content id=\"slug\">" . $slug[3] . "</content>\n";
            echo " <content id=\"imagem\">" . utf8_decode($attached_file_src) . "</content>\n";
            echo " <content id=\"imagem-credito\">
                <![CDATA[" .
			$attached_file_description .
			"]]>
            </content>\n";
            echo " <content id=\"imagem-legenda\">
                <![CDATA[" .
			utf8_decode($attached_file_caption) .
			"]]>
            </content>\n";
            echo " </document>\n";
        }
        wp_reset_query();
        echo "</documents>";
die();
}
add_action("wp_ajax_get_content_for_uol", "get_content_for_uol");
add_action("wp_ajax_nopriv_get_content_for_uol", "get_content_for_uol");

function ajusta_especiais($string)
{
$de = ["“", "”", "€"];
$para = ["\"", "\"", "&#8364;"];
return str_replace($de, $para, $string);
}

function wp_get_attachment($attachment_id)
{
$attachment = get_post($attachment_id);
return [
"alt" => get_post_meta($attachment->ID, "_wp_attachment_image_alt", true),
"caption" => $attachment->post_excerpt,
"description" => $attachment->post_content,
"href" => get_permalink($attachment->ID),
"src" => $attachment->guid,
"title" => $attachment->post_title,
];
}