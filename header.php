<?php
/**
 * ヘッダーテンプレート
 *
 * @package ADOR'S
 */

// 開発環境でのキャッシュ無効化
if (defined('WP_DEBUG') && WP_DEBUG) {
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site min-h-screen flex flex-col">
    <!-- ヘッダー -->
    <header id="masthead" class="site-header bg-white border-b-2 border-primary/10 sticky top-0 z-50 shadow-sm">
        <div class="container">
            <div class="flex items-center justify-between h-20">
                <!-- ロゴ -->
                <div class="site-branding flex-shrink-0">
                    <?php
                    $logo_id = get_theme_mod('custom_logo');
                    if ($logo_id) {
                        $logo_url = wp_get_attachment_image_url($logo_id, 'full');
                        ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center" rel="home">
                            <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto">
                        </a>
                        <?php
                    } else {
                        // ロゴ画像がない場合はSVGロゴを使用
                        $svg_logo = get_template_directory() . '/assets/images/logo.svg';
                        if (file_exists($svg_logo)) {
                            ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center" rel="home">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto">
                            </a>
                            <?php
                        } else {
                            // SVGもない場合はPNGロゴ
                            ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center" rel="home">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto">
                            </a>
                            <?php
                        }
                    }
                    ?>
                </div>

                <!-- デスクトップナビゲーション -->
                <nav id="site-navigation" class="main-navigation hidden lg:flex items-center space-x-8">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'flex items-center space-x-8',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'walker'         => new class extends Walker_Nav_Menu {
                            function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
                                $classes = empty($item->classes) ? array() : (array) $item->classes;
                                $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
                                
                                $output .= '<li class="' . esc_attr($class_names) . '">';
                                
                                $attributes = '';
                                $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
                                $attributes .= ' class="text-gray-700 hover:text-primary font-medium transition-colors duration-200"';
                                
                                $item_output = '<a' . $attributes . '>';
                                $item_output .= apply_filters('the_title', $item->title, $item->ID);
                                $item_output .= '</a>';
                                
                                $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
                            }
                        },
                    ));
                    ?>
                    
                    <!-- お問い合わせボタン -->
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center px-8 py-3 bg-primary text-white font-bold rounded-sm hover:bg-gray-900 transition-all duration-300">
                        お問い合わせ
                    </a>
                </nav>

                <!-- モバイルメニューボタン -->
                <button id="mobile-menu-button" class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-primary hover:bg-gray-100 focus:outline-none transition-colors" aria-expanded="false">
                    <span class="sr-only">メニューを開く</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- モバイルメニュー -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-200 bg-white">
            <div class="container py-4 space-y-2">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'mobile-primary-menu',
                    'menu_class'     => 'space-y-2',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'walker'         => new class extends Walker_Nav_Menu {
                        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
                            $classes = empty($item->classes) ? array() : (array) $item->classes;
                            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
                            
                            $output .= '<li class="' . esc_attr($class_names) . '">';
                            
                            $attributes = '';
                            $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
                            $attributes .= ' class="block px-4 py-3 rounded-lg text-gray-700 hover:text-primary hover:bg-gray-50 transition-colors font-medium"';
                            
                            $item_output = '<a' . $attributes . '>';
                            $item_output .= apply_filters('the_title', $item->title, $item->ID);
                            $item_output .= '</a>';
                            
                            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
                        }
                    },
                ));
                ?>
                
                <!-- モバイル用お問い合わせボタン -->
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block w-full text-center px-4 py-3 bg-primary text-white font-bold rounded-lg hover:bg-primary-600 transition-colors mt-4">
                    お問い合わせ
                </a>
            </div>
        </div>
    </header>
