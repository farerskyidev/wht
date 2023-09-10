<?php
/*
 * Block Name: Join Us Block
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


$icon = get_field('icon');
$title = get_field('title');
$button = get_field('button');
$description = get_field('description');



$block_name = 'join-us';

// Create id attribute allowing for custom "anchor" value.
$id = ! empty( $block['id'] ) ? $block_name . '-' . $block['id'] : '';
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className   = array( $block_name ); 
$className[] = 'section-element'; 
?> 

<div class="<?php echo implode( ' ', $className ); ?>" id="<?php echo esc_attr( $id ); ?>">
    <div class="container"> 
        <div class="join-us__wrap">
            <?php if ($icon): ?>
                <img class="join-us__icon" src="<?php echo esc_url($icon['url']); ?>" alt="image">  
            <?php endif ?>
            <?php if (!empty($title)) : ?> 
                <h4 class="mb-60"><?php echo $title; ?></h4> 
            <?php endif; ?>
            <?php if ( ! empty( $button ) ) :
                $link_target = $button['target'] ? $button['target'] : '_self'; ?>
                <div class="join-us__button"> 
                    <a class="btn btn_secondary" href="<?php echo $button['url']; ?>" target="<?php echo $link_target; ?>">
                        <?php echo $button['title']; ?>
                        <img class="icon" src="<?php echo V_TEMP_URL . '/assets/img/external_link.svg'; ?>" alt="">  
                    </a>
                </div>  
            <?php endif; ?> 
            <?php if (!empty($description)) : ?> 
                <p class="join-us__description" ><?php echo $description; ?></p>  
            <?php endif; ?>
        </div>
    </div>
</div>
