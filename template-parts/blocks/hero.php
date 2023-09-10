<?php
/*
 * Block Name: Hero Block
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

$logo = get_field('logo');
$hero_socials = get_field('hero_socials');
$text = get_field('text');

$block_name = 'hero';

// Create id attribute allowing for custom "anchor" value.
$id = ! empty( $block['id'] ) ? $block_name . '-' . $block['id'] : '';
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className   = array( $block_name ); 
$className[] = ''; 
?>

<div class="<?php echo implode( ' ', $className ); ?>" id="<?php echo esc_attr( $id ); ?>">
    <div class="container">
        <div class="hero__wrap">
            <div></div>
            <?php if ($logo): ?>
                <div class="hero__logo">
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="image"> 
                </div>
            <?php endif ?>
            <div class="hero__bottom"> 
                <?php if (!empty($text)) : ?>
                    <p class="hero__text"><?php echo $text; ?></p>
                <?php endif; ?>
                    <a href="#"><img class="down" src="<?php echo V_TEMP_URL . '/assets/img/arrow_down.svg'; ?>" alt=""></a>
                <?php if (!empty($hero_socials)) : ?>
                    <ul class="social"> 
                        <?php foreach ($hero_socials as $row): ?> 
                            <?php $icon = $row['icon']; ?>
                            <?php $link = $row['link']; ?>
                            <?php if ($icon && $link): ?>
                                <li>
                                    <a target="_blank" href="<?php echo esc_url($link); ?>">
                                        <img class="social__icon" src="<?php echo esc_url($icon['url']); ?>" alt="">
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
