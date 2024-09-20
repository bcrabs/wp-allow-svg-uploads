<?php
// Allow SVG Uploads to WP Media Library
function allow_svgimg_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
  
add_filter('upload_mimes', 'allow_svgimg_types');
?>
