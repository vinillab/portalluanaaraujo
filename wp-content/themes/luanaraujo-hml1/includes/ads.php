<?php

/**
 * UOL Ads - pushAds integration
 *
 * Usage: dfp_tag(['id' => 'ad-home-topo']);
 * This function ECHOs the markup; don't echo its return.
 */
if (!function_exists("dfp_tag")) {
	function dfp_tag($args)
	{
		if (empty($args["id"])) {
			return;
		}
		$tag_id = esc_attr($args["id"]);
		?>
<div id="<?php echo $tag_id; ?>"></div>
<script>
window.pushAds = window.pushAds || [];
window.pushAds.push("<?php echo $tag_id; ?>");
</script>
<?php
	}
}

// ads entre paragrafos single.php
//add_filter("the_content", "ads_single_paragraphs");

function ads_single_paragraphs($content)
{
	if (is_singular("post")) {
		// Define the interval for inserting ads after the first ad (e.g., every 3 paragraphs)
		$ad_interval = 4;

		// Pass the ad_interval to the function
		return prefix_insert_ads_with_amp($content, $ad_interval);
	}

	return $content;
}

function prefix_insert_ads_with_amp($content, $ad_interval = 4)
{
	global $post;
	$closing_p = "</p>";
	$paragraphs = explode($closing_p, $content);

	if ($post) {
		// Generate the permalink and originURL
		$permalink = get_permalink($post);
		$escaped_permalink = esc_url($permalink);

		// Process the originURL by removing scheme, special characters, and replacing with spaces
		$originURL = preg_replace("/https?:\/\//", "", $permalink); // Remove scheme
		$originURL = preg_replace("/[^\w\s]/", " ", $originURL); // Remove special characters and replace with space
		$originURL = preg_replace("/\s+/", " ", $originURL); // Remove extra spaces
		$originURL = trim($originURL); // Trim leading/trailing spaces
	}

	// Counter for unique ad IDs
	$ad_count = 1;

	// Ad code template with placeholders for unique ID
	$ad_template = "<div class='spacer-small'></div>
        <div id='banner-300x250-ad{ad_count}' class='ads_text'>
            <script>window.uolads.push({ id: 'banner-300x250-ad{ad_count}' });</script></div>
            <div class='anuncio-amp'>
                <amp-ad width='300' height='250' 
                    type='doubleclick' 
                    data-lazy-fetch='true' 
                    data-loading-strategy='1'
                    data-enable-refresh='30'
                    data-slot='/8804/parceiros/drauzio_varella' 
                    json='{\"targeting\":{\"keyword\":[\"amp\"],\"campaignuol\":[\"1\"],\"expble\":[\"1\"],\"native\":[\"0\"],\"pos\":[\"middle\"],\"origin\":\"{{$originURL}}\"}}' 
                    rtc-config='{ 
                        \"urls\": [
                            \"https://udr.uol.com.br?tag=publicidade&fmt=amprtc\",
                            \"https://page-context.uol.com.br/api/get-amp-page-context?url={{$escaped_permalink}}\"
                        ], 
                        \"vendors\": {
                            \"aps\": {
                                \"PUB_ID\": \"600\",
                                \"PUB_UUID\": \"0e1ab0a1-d93f-4bdc-b304-e76a53464e72\",
                                \"PARAMS\": {\"amp\": \"1\"}
                            },
                            \"prebidappnexuspsp\": {\"PLACEMENT_ID\": \"29132677\"}
                        }, 
                        \"timeoutMillis\": 1000}'>
                </amp-ad>
            </div>
        <div class='spacer-small'></div>";

	// Insert div with id 'uolpd-video-inarticle' between second and third paragraph
	if (isset($paragraphs[1])) {
		$paragraphs[1] .= "<div id='uolpd-video-inarticle'></div>";
	}

	// Loop to insert ads after every n-th paragraph starting after the new div (from paragraph 3 onwards)
	$total_paragraphs = count($paragraphs);
	$start_position = 4; // Start from the third paragraph (index 2)

	for ($i = $start_position + $ad_interval; $i < $total_paragraphs; $i += $ad_interval) {
		if (isset($paragraphs[$i])) {
			$paragraphs[$i] .= str_replace("{ad_count}", $ad_count++, $ad_template);
		}
	}

	// Rebuild the content
	return implode($closing_p, $paragraphs);
}