<?php
/*
 * Block Name: Form Block
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

// $logo = get_field('logo');
// $hero_socials = get_field('hero_socials');
$title = get_field('title');
$description = get_field('description');
$socials = get_field('socials');
$email_form = get_field('email_form');

$block_name = 'form';

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
        <div class="form__wrap">
            <div class="mb-120">
                <?php if (!empty($title)) : ?> 
                    <h4 class="mb-60"><?php echo $title; ?></h4>
                <?php endif; ?>
                <?php if (!empty($email_form)) : ?> 
                    <div class=""> 
                        <?php echo do_shortcode('[gravityform id="' . $email_form['id'] . '" ajax="true" title="false" description="false"]'); ?> 
                    </div> 
                <?php endif; ?>
            </div>
            <div>
                <?php if (!empty($description)) : ?> 
                    <h5 class="form__description mb-60"><?php echo $description; ?></h5>
                <?php endif; ?>
                <?php if (!empty($socials)) : ?>
                    <ul class="social-second">
                        <?php foreach ($socials as $row): ?>
                            <?php $icon = $row['icon']; ?>
                            <?php $link = $row['link']; ?>
                            <?php if ($icon && $link): ?>
                                <li>
                                    <a target="_blank" href="<?php echo esc_url($link); ?>">
                                        <img class="social-second__icon" src="<?php echo esc_url($icon['url']); ?>" alt="">
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?> 
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
