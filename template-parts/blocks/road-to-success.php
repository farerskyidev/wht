<?php
/*
 * Block Name: Road to success Block
 * Slug:
 * Description:
 * Keywords:
 * Dependency:
 * Align: false
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$title = get_field('title');
$button = get_field('button');

$block_name = 'road-to-success';

// Create id attribute allowing for custom "anchor" value.
$id = ! empty( $block['id'] ) ? $block_name . '-' . $block['id'] : '';
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor']; 
}


$args = array(
    'post_type' => 'events',
    'post_status' => 'publish',
    'posts_per_page' => 6,
    'orderby' => 'DESC'
);
$items_query = new WP_Query($args);

// Create class attribute allowing for custom "className" and "align" values.
$className   = array( $block_name ); 
$className[] = 'section-element'; 
?> 

<div class="<?php echo implode( ' ', $className ); ?>" id="<?php echo esc_attr( $id ); ?>">
    <div class="container--small"> 
        <div class="road-to-success__wrap">
            <?php if (!empty($title)) : ?>  
                <h4 class="road-to-success__title mb-120"><?php echo $title; ?></h4> 
            <?php endif; ?>
        </div>
        <?php if ($items_query->have_posts()) : ?>
            <div class="road-to-success__items mb-120">
                <?php while ($items_query->have_posts()) : $items_query->the_post(); ?>
                    <?php get_template_part('template-parts/elements/single-source'); ?>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
        <?php if ( ! empty( $button ) ) :
                $link_target = $button['target'] ? $button['target'] : '_self'; ?>
                            <div class="cake__button"> 
                <a class="btn btn_primary" href="<?php echo $button['url']; ?>" target="<?php echo $link_target; ?>">
                    <?php echo $button['title']; ?>
                </a>
                </div>  
            <?php endif; ?> 
    </div>
</div>
