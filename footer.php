<?php
/**
 * Footer template.
 *
 * @package lex
 * @since 1.0.0
 *
 */


$footer_socials = get_field('footer_socials', 'option'); 
$footer_logo = get_field('footer_logo', 'option');
$footer_title = get_field('footer_title', 'option'); 
$copyright = get_field('copyright', 'option');  
$footer_icon_up = get_field('footer_icon_up', 'option');  
?>
</div>
    <footer class="footer">
        <div class="container">
            <div class="footer__wrap">
                <?php if ($footer_logo): ?>
                    <div>
                        <a href="<?php echo home_url('/'); ?>" class="eco-footer__logo">
                            <img src="<?php echo esc_url($footer_logo['url']); ?>" alt="image"> 
                        </a>
                    </div>
                <?php endif ?>

                <?php if (!empty($footer_title)) : ?>
                    <h4 class="footer__title"><?php echo $footer_title; ?></h4>
                <?php endif; ?>

          
                
               
                <div class="footer__menus">
                        <?php wp_nav_menu(
                            array(
                                'container' => '',
                                'menu_class' => 'footer__menu',
                                'menu' => 'footer-menu-1',
                                // 'theme_location' => 'footer-menu',
                                'depth' => 1,    
                            )
                            
                        ); ?>
                    <?php wp_nav_menu(
                        array(
                            'container' => '',
                            'menu_class' => 'footer__menu',
                            'menu' => 'footer-menu-2',
                            // 'theme_location' => 'footer-menu',
                            'depth' => 1,
                        )
                    ); ?>
                    <?php wp_nav_menu(
                        array(
                            'container' => '',
                            'menu_class' => 'footer__menu', 
                            'menu' => 'footer-menu-3',
                            // 'theme_location' => 'footer-menu', 
                            'depth' => 1,
                        )
                    ); ?>
                    <?php wp_nav_menu(
                        array(
                            'container' => '',
                            'menu_class' => 'footer__menu',
                            'menu' => 'footer-menu-4',
                            // 'theme_location' => 'footer-menu',
                            'depth' => 1,



                        )
                    ); ?>
                </div>

                <?php if (!empty($footer_socials)) : ?>
                    <ul class="social">
                        <?php foreach ($footer_socials as $row): ?>
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

                <?php if (!empty($copyright)) : ?>
                    <div class="footer__copyright">
                        <?php echo wpautop( $copyright ); ?>
                    </div>
                <?php endif; ?>

            </div>

            <?php if ($footer_icon_up): ?> 
                <div class="footer__icon_up mt-120">  
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo esc_url($footer_icon_up['url']); ?>" alt="image"> 
                    </a>
                </div>
            <?php endif ?>

        </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
	</body>
</html>
