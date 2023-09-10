<?php
/*
 * Block Name: Cake Block
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
$description = get_field('description');
$about_cake = get_field('about_cake');
$members = get_field('members');
$button = get_field('button');

$block_name = 'cake';

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
    <div class="container--small"> 
        <div class="cake__wrap">
            <div class="cake__text mb-120"> 
                <?php if (!empty($title)) : ?> 
                    <h2 class="cake__title mb-60"><?php echo $title; ?></h2> 
                <?php endif; ?>
                <?php if (!empty($description)) : ?> 
                    <h4 class="cake__description" ><?php echo $description; ?></h4>  
                <?php endif; ?>
            </div>
            <?php if (!empty($about_cake)) : ?>           
                <div class="row cake__about_cake mb-120">
                    <?php foreach ($about_cake as $row): ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 cake__about_cake-item">
                            <?php $icon = $row['icon']; ?>
                            <?php $text = $row['text']; ?>
                            <?php if ($icon && $text): ?>
                                <?php if ( ! empty( $icon ) ) : ?>
                                    <img class="cake__about_cake-image" src="<?php echo esc_url($icon['url']); ?>" alt="">
                                <?php endif ?>
                                <?php if ( ! empty( $text ) ) : ?>
                                    <p><span class="cake__about_cake-description" ><?php echo $text; ?></span></p>
                                <?php endif ?>                          
                            <?php endif; ?>
                        </div> 
                    <?php endforeach; ?> 
                </div>        
            <?php endif; ?>
            <?php if (!empty($members)) : ?>
                <div class="row cake__members mb-120"> 
                    <?php foreach ($members as $row): ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 cake__members-item">
                            <?php $photo = $row['photo']; ?>
                            <?php $profesion = $row['profesion']; ?>
                            <?php $link = $row['link']; ?>
                            <?php if ($icon && $profesion && $link): ?>
                                <?php if ( ! empty( $photo ) ) : ?>
                                    <img class="cake__members-image" src="<?php echo esc_url($photo['url']); ?>" alt="">
                                <?php endif ?>
                                <?php if ( ! empty( $profesion ) ) : ?>
                                    <p><?php echo $profesion; ?></p> 
                                <?php endif ?>                 
                                <?php if ( ! empty( $link ) ) :
                                    $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                    <a class="" href="<?php echo $link['url']; ?>" target="<?php echo $link_target; ?>">
                                        <?php echo $link['title']; ?>
                                        <img class="icon" src="<?php echo V_TEMP_URL . '/assets/img/facebook_dark.svg'; ?>" alt=""> 
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div> 
                    <?php endforeach; ?> 
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
</div>
