<?php
/*
 * Block Name: Finance Block
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
$cards = get_field('cards');

$block_name = 'finance';

// Create id attribute allowing for custom "anchor" value.
$id = ! empty( $block['id'] ) ? $block_name . '-' . $block['id'] : '';
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor']; 
}

// Create class attribute allowing for custom "className" and "align" values.
$className   = array( $block_name ); 
$className[] = 'section-element'; 
$className[] = 'deep';
?> 

<div class="<?php echo implode( ' ', $className ); ?>" id="<?php echo esc_attr( $id ); ?>">
    <div class="container--small"> 
        <div class="finance__wrap">
            <?php if (!empty($title)) : ?> 
                <h4 class="finance__title mb-120"><?php echo $title; ?></h4> 
            <?php endif; ?>
        </div>
        <?php if (!empty($cards)) : ?>
            <div class="row finance__cards">
                <?php foreach ($cards as $row): ?> 
                    <div class="col-lg-6 col-md-6 col-sm-12"> 
                        <div class="finance__card"> 
                            <?php $logo = $row['logo']; ?>                    
                            <?php $link = $row['link']; ?>
                            <?php $bg_image = $row['bg_image']; ?>
                            <?php $bg_color = $row['bg_color']; ?>
                            <?php if ($logo && $link && $bg_image && $bg_color): ?>
                                <?php if ( ! empty( $bg_image ) ) : ?>
                                    <img class="finance__card-bg_image" src="<?php echo esc_url($bg_image['url']); ?>" alt="">
                                <?php endif ?>   
                                <?php if ( ! empty( $bg_color ) ) : ?>
                                    <div class="finance__card-bg_color <?php echo ($bg_color); ?>">                   
                                    </div>       
                                <?php endif ?>         
                                    <div class="finance__card-content">
                                        <?php if ( ! empty( $logo ) ) : ?>
                                            <div class="finance__card-logo"> 
                                                <img src="<?php echo esc_url($logo['url']); ?>" alt="">
                                            </div>
                                        <?php endif ?>
                                        <?php if ( ! empty( $link ) ) :
                                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                            <a class="btn btn_secondary" href="<?php echo $link['url']; ?>" target="<?php echo $link_target; ?>">
                                                <?php echo $link['title']; ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                            <?php endif; ?>
                        </div> 
                    </div> 
                <?php endforeach; ?> 
            </div>          
        <?php endif; ?>    
    </div>
</div>
