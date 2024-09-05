<?php
function generate_toc($content) {
// Generate the TOC as before
$toc = '';
$matches = array();
$regex = '/<h([1-6])>(.*?)<\/h\1>/i';

if (preg_match_all($regex, $content, $matches)) {
$toc .= '<div id="toc"><h2>فهرست مطالب</h2><ul>';
		foreach ($matches[2] as $key => $heading) {
		$anchor = sanitize_title($heading);
		$toc .= '<li><a href="#' . $anchor . '">' . $heading . '</a></li>';
		$content = str_replace($matches[0][$key], '<h' . $matches[1][$key] . ' id="' . $anchor . '">' . $heading . '</h' . $matches[1][$key] . '>', $content);
		}
		$toc .= '</ul></div>';
}

// Split the content at the first paragraph
$paragraphs = explode('</p>', $content);
if (isset($paragraphs[1])) {
$paragraphs[0] .= '</p>'; // Add the closing tag back to the first paragraph
$content = $paragraphs[0] . $toc . implode('</p>', array_slice($paragraphs, 1));
} else {
// If no paragraphs are found, append TOC at the beginning
$content = $toc . $content;
}

return $content;
}

add_filter('the_content', 'generate_toc');
