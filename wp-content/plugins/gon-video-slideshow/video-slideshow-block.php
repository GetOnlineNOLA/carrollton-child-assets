<?php 

/**
 * Video Slideshow Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview False during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


// Create id attribute allowing for custom "anchor" value.
$id = 'video-slideshow-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'video-slideshow-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$id = get_field('select_slideshow') ?: false;


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

<?php if($id):

echo do_shortcode('[gon-video-slideshow post_id="'.$id.'""]');

endif; ?>

</div>


