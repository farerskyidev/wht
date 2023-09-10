<?php
/**
 * Header template.
 *
 * @package lex
 * @since 1.0.0
 *
 */
// $contact_button = get_field('contact_button', 'option');
// if( $contact_button ):
//     $contact_button_url = $contact_button['url'];
//     $contact_button_title = $contact_button['title'];
// endif;

// $meeting_button = get_field('meeting_button', 'option');
// if( $meeting_button ):
//     $meeting_button_url = $meeting_button['url'];
//     $meeting_button_title = $meeting_button['title'];
// endif;



$header_button = get_field('header_button', 'option');  
$header_link = get_field('header_link', 'option');  
// ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"> -->
	<?php wp_head(); ?>
</head>

<!-- <?php
// acf/main-page-header-block
$first_block_name = '';
$content = get_the_content();
if (has_blocks($content)) {
    $blocks = parse_blocks($content);
    foreach ($blocks as $block) {
        if (!empty($block['blockName'])) {
            if (!empty($block['blockName'])) $first_block_name = $block['blockName'];
            break;
        }
    }
}

$mainWrapperClass = ['main-wrapper'];
if($first_block_name !== 'acf/main-page-header-block') $mainWrapperClass[] = 'main-wrapper_padding-top';



$header_logo = get_field('header_logo', 'option');   
?> -->





<body <?php body_class(); ?>>

    <header class="header">
            <div class="container">
                <div class="header__wrap">
                    <div class="header__logo-btn"> 
                        <?php if ($header_logo): ?>
                            <a href="<?php echo home_url('/'); ?>" class="header__logo">
                                <svg src="<?php echo esc_url($header_logo['url']); ?>" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.0936 19.7641C38.0936 8.84947 29.2554 0.000244141 18.3534 0.000244141C11.99 0.000244141 6.33583 3.01947 2.7254 7.70101C2.86217 7.75717 2.9997 7.81101 3.13416 7.87871L5.43995 9.03255C8.58399 5.21947 13.2601 2.95947 18.3534 2.95947C27.6089 2.95947 35.1386 10.4972 35.1386 19.7641C35.1386 29.031 27.6089 36.5702 18.3534 36.5702C13.2586 36.5702 8.58399 34.3087 5.43995 30.4972L3.1357 31.651C2.9997 31.7187 2.86217 31.7726 2.7254 31.8272C6.33429 36.5087 11.9885 39.5279 18.3534 39.5279C29.2554 39.5279 38.0936 30.6787 38.0936 19.7641Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.4581 20.6732C18.9576 20.4224 19.2073 20.0947 19.2073 19.764C19.2073 19.4371 18.9576 19.1078 18.4581 18.8571L1.81205 10.5247C0.815514 10.0255 0.000305176 10.5301 0.000305176 11.6471V27.8832C0.000305176 28.9994 0.815514 29.504 1.81205 29.0055L18.4581 20.6732Z" fill="white"/>
                                </svg>
                                
                            </a>
                        <?php endif ?>
                        <button class="header__burger"> 
                            <span></span> 
                            <span></span> 
                            <span></span> 
                        </button> 
                    </div>
                    <div class="header__container">
                        <?php wp_nav_menu(
                                array(
                                    'container' => '',
                                    'menu_class' => 'header__menu',
                                    'menu' => 'header-menu',
                                    'depth' => 1,
                                )
                            ); ?>
                        <div class="header__buttons">
                            <?php if ($header_link): ?>                      
                                <a target="_blank" href="<?php echo esc_url($header_link); ?>">

                                <svg width="55" height="16" viewBox="0 0 55 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.579794 16.0003C0.25944 16.0003 0.000305176 15.7414 0.000305176 15.422V0.883254C0.000305176 0.564287 0.25944 0.304932 0.579794 0.304932H6.37561C7.8413 0.304932 8.99656 0.740493 9.80884 1.60047C10.6129 2.45146 11.0199 3.61151 11.0199 5.04888C11.0199 6.48702 10.6126 7.64738 9.80915 8.49807C8.99687 9.35773 7.8413 9.79345 6.37561 9.79345C6.05526 9.79345 5.79643 9.53425 5.79643 9.21513C5.79643 8.89538 6.05526 8.63634 6.37561 8.63634C7.52637 8.63634 8.37399 8.33131 8.96696 7.70343C9.56907 7.06596 9.86215 6.19794 9.86215 5.04888C9.86215 3.90075 9.56907 3.03257 8.96665 2.39479C8.37306 1.76692 7.52606 1.46189 6.37561 1.46189H1.15835V15.422C1.15835 15.7414 0.899373 16.0003 0.579794 16.0003Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M54.0714 16.0003H46.1283C45.8085 16.0003 45.5491 15.7414 45.5491 15.422V0.883254C45.5491 0.564287 45.8085 0.304932 46.1283 0.304932C46.4481 0.304932 46.7074 0.564287 46.7074 0.883254V14.8435H54.0714C54.3914 14.8435 54.6506 15.1024 54.6506 15.422C54.6506 15.7414 54.3914 16.0003 54.0714 16.0003Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M39.6943 2.36995C38.5373 1.00025 36.932 0.305176 34.9229 0.305176C33.5891 0.305176 32.4366 0.626776 31.4979 1.26038C31.412 1.3186 30.7202 1.82832 30.3928 2.23307C28.4338 4.44696 24.6756 13.2035 23.2699 14.129C22.5118 14.6285 21.5737 14.8945 20.465 14.8945C18.7738 14.8945 17.4896 14.3473 16.539 13.2223C15.5788 12.0841 15.0919 10.3785 15.0919 8.15271C15.0919 7.02456 15.22 6.02414 15.4731 5.1781C15.7203 4.35127 16.0801 3.64845 16.5431 3.08887C17.0011 2.53346 17.5452 2.12484 18.2062 1.84087C18.8678 1.55503 19.6279 1.41072 20.465 1.41072C21.5779 1.41072 22.5151 1.64995 23.2499 2.12236C23.9943 2.60143 24.5656 3.30007 24.9959 4.25697C25.0852 4.45439 25.2836 4.58275 25.5015 4.58275C25.5798 4.58275 25.6562 4.56603 25.7281 4.53382C26.0058 4.40918 26.1301 4.08107 26.0055 3.80298C25.4919 2.66182 24.7661 1.78358 23.8486 1.19287C22.9333 0.604169 21.7944 0.305176 20.465 0.305176C19.4763 0.305176 18.5686 0.479989 17.7678 0.824814C16.9552 1.17506 16.256 1.70012 15.6897 2.38497C15.1322 3.05898 14.7025 3.89248 14.4126 4.86192C14.129 5.8117 13.9852 6.91834 13.9852 8.15271C13.9852 10.6456 14.56 12.5918 15.6934 13.9352C16.8503 15.305 18.4559 15.9999 20.465 15.9999C21.7986 15.9999 22.915 15.6212 23.8897 15.0449C25.6057 14.0304 30.0006 3.6452 32.1178 2.17609C32.6865 1.78141 33.814 1.41072 34.9229 1.41072C36.6139 1.41072 37.8981 1.95777 38.8488 3.08283C39.8089 4.2212 40.2959 5.9269 40.2959 8.15271C40.2959 9.28071 40.1679 10.2813 39.9146 11.1272C39.6674 11.954 39.3077 12.6568 38.8446 13.2164C38.3865 13.7718 37.8426 14.1804 37.1815 14.4644C36.52 14.7501 35.7597 14.8945 34.9229 14.8945C33.8098 14.8945 32.8726 14.6553 32.1378 14.1827C31.3934 13.7037 30.8223 13.0052 30.3917 12.0483C30.3025 11.8507 30.1042 11.7225 29.8863 11.7225C29.8081 11.7225 29.7317 11.7392 29.6596 11.7714C29.382 11.8961 29.2574 12.2243 29.3823 12.5023C29.8958 13.6436 30.6216 14.5215 31.5393 15.1122C32.4546 15.7011 33.5934 15.9999 34.9229 15.9999C35.9114 15.9999 36.819 15.8251 37.6198 15.4805C38.4325 15.1302 39.1318 14.6053 39.6978 13.9203C40.2556 13.2461 40.6854 12.4128 40.9752 11.4433C41.2588 10.4936 41.4023 9.38693 41.4023 8.15271C41.4023 5.6595 40.8277 3.71349 39.6943 2.36995Z" fill="white"/>
                                </svg>
                                    <!-- <img src="<?php echo V_TEMP_URL . '/assets/img/pool.svg'; ?>" alt=""> -->
                                </a>     
                            <?php endif ?>
                            <?php if ($header_button): ?>
                                <a target="_blank" href="<?php echo esc_url($header_button); ?>">
                                    <?php esc_html_e('Pool by Cake', V_PREFIX);?> 
                                </a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <div class="<?php echo esc_attr(trim(implode(' ', $mainWrapperClass))) ?>">
