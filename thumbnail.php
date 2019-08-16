<?php
	$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    list($url, $width, $height) = $thumbnail; // Assign variables as if they were an array
?>

<!--- Display an image link in the required place  -->
<?php echo $url; ?> 