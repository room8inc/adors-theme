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

<!-- Loading Screen -->
<div id="page-loader" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: white; z-index: 999999; display: flex; align-items: center; justify-content: center; transition: opacity 0.7s ease;">
    <div style="position: relative; text-align: center;">
        <!-- ロゴマーク -->
        <div style="position: relative; display: inline-block;">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-mark.png'); ?>" 
                 alt="Loading..." 
                 style="width: 128px; height: 128px; object-fit: contain; animation: logoFloat 2s ease-in-out infinite;">
            
            <!-- パルスリング -->
            <div style="position: absolute; inset: 0; border: 3px solid #FF6B00; border-radius: 50%; animation: pulse1 2s cubic-bezier(0.4, 0, 0.6, 1) infinite; opacity: 0.3;"></div>
            <div style="position: absolute; inset: 0; border: 3px solid #FF6B00; border-radius: 50%; animation: pulse2 2s cubic-bezier(0.4, 0, 0.6, 1) infinite; opacity: 0.2;"></div>
        </div>
        
        <!-- テキスト -->
        <div style="margin-top: 2rem;">
            <p style="color: #9CA3AF; font-size: 0.875rem; font-weight: 500; letter-spacing: 0.3em; animation: textPulse 1.5s ease-in-out infinite;">LOADING</p>
        </div>
    </div>
</div>

<!-- Opening Animation Screen (トップページ専用) -->
<?php if (is_front_page()) : ?>
<div id="opening-screen" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: white; z-index: 999998; display: flex; align-items: center; justify-content: center; opacity: 0; pointer-events: none;">
    <div style="text-align: center; max-width: 90%; padding: 2rem;">
        <!-- アドーズロゴ -->
        <div id="opening-logo" style="opacity: 0; transform: scale(0.8); transition: opacity 1s ease, transform 1s ease; margin-bottom: 4rem;">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>" 
                 alt="ADOR'S" 
                 style="width: auto; height: 80px; margin: 0 auto;">
        </div>
        
        <!-- キャッチコピー -->
        <div id="opening-catchcopy" style="opacity: 0;">
            <h1 style="font-size: clamp(2rem, 8vw, 5rem); font-weight: 900; color: #1F2937; line-height: 1.2; letter-spacing: -0.02em;">
                <span id="catch-line1" style="display: block; opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease;">
                    違反ゼロと、
                </span>
                <span id="catch-line2" style="display: block; opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease; color: #FF6B00;">
                    無駄ゼロへ。
                </span>
            </h1>
        </div>
    </div>
</div>
<?php endif; ?>

<style>
    @keyframes logoFloat {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    @keyframes pulse1 {
        0%, 100% { transform: scale(1); opacity: 0.3; }
        50% { transform: scale(1.1); opacity: 0.1; }
    }
    
    @keyframes pulse2 {
        0%, 100% { transform: scale(1); opacity: 0.2; }
        50% { transform: scale(1.2); opacity: 0.05; }
    }
    
    @keyframes textPulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }
    
    body.loading {
        overflow: hidden !important;
    }
</style>

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
                    
                    <!-- 無料見積診断ボタン -->
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center px-8 py-3 bg-primary text-white font-bold rounded-sm hover:bg-gray-900 transition-all duration-300">
                        無料見積診断
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
                
                <!-- モバイル用無料見積診断ボタン -->
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block w-full text-center px-4 py-3 bg-primary text-white font-bold rounded-lg hover:bg-primary-600 transition-colors mt-4">
                    無料見積診断
                </a>
            </div>
        </div>
    </header>
