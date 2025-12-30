<?php
/**
 * ADOR'S テーマの機能定義
 *
 * @package ADOR'S
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * テーマのセットアップ
 */
function adors_setup() {
    // テーマの翻訳サポート
    load_theme_textdomain('adors', get_template_directory() . '/languages');

    // 自動フィードリンクのサポート
    add_theme_support('automatic-feed-links');

    // タイトルタグのサポート
    add_theme_support('title-tag');

    // 投稿とページのアイキャッチ画像のサポート
    add_theme_support('post-thumbnails');

    // HTML5マークアップのサポート
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // カスタムロゴのサポート
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // ナビゲーションメニューの登録
    register_nav_menus(array(
        'primary' => __('プライマリーメニュー', 'adors'),
        'footer'  => __('フッターメニュー', 'adors'),
    ));
}
add_action('after_setup_theme', 'adors_setup');

/**
 * スタイルシートとスクリプトの読み込み
 */
function adors_enqueue_scripts() {
    // メインスタイルシート
    wp_enqueue_style(
        'adors-style',
        get_template_directory_uri() . '/dist/assets/css/style.css',
        array(),
        time() // 開発中は常に最新を読み込む
    );

    // メインJavaScript
    wp_enqueue_script(
        'adors-main',
        get_template_directory_uri() . '/dist/assets/js/main.js',
        array(),
        time(), // 開発中は常に最新を読み込む
        true
    );

    // コメント返信スクリプト（シングルページで必要に応じて）
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'adors_enqueue_scripts');

/**
 * ウィジェットエリアの登録
 */
function adors_widgets_init() {
    register_sidebar(array(
        'name'          => __('サイドバー', 'adors'),
        'id'            => 'sidebar-1',
        'description'   => __('サイドバーに表示されるウィジェットエリア', 'adors'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('フッター1', 'adors'),
        'id'            => 'footer-1',
        'description'   => __('フッター1列目に表示されるウィジェットエリア', 'adors'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('フッター2', 'adors'),
        'id'            => 'footer-2',
        'description'   => __('フッター2列目に表示されるウィジェットエリア', 'adors'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'adors_widgets_init');

/**
 * カスタム投稿タイプの登録
 */
function adors_register_post_types() {
    // Works（制作実績）
    register_post_type('works', array(
        'labels' => array(
            'name'               => '制作実績',
            'singular_name'      => '制作実績',
            'add_new'            => '新規追加',
            'add_new_item'       => '新しい制作実績を追加',
            'edit_item'          => '制作実績を編集',
            'new_item'           => '新しい制作実績',
            'view_item'          => '制作実績を表示',
            'search_items'       => '制作実績を検索',
            'not_found'          => '制作実績が見つかりませんでした',
            'not_found_in_trash' => 'ゴミ箱に制作実績はありません',
            'all_items'          => 'すべての制作実績',
            'menu_name'          => '制作実績',
        ),
        'public'       => true,
        'has_archive'  => true,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-portfolio',
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite'      => array('slug' => 'works'),
    ));

    // News（お知らせ）
    register_post_type('news', array(
        'labels' => array(
            'name'               => 'お知らせ',
            'singular_name'      => 'お知らせ',
            'add_new'            => '新規追加',
            'add_new_item'       => '新しいお知らせを追加',
            'edit_item'          => 'お知らせを編集',
            'new_item'           => '新しいお知らせ',
            'view_item'          => 'お知らせを表示',
            'search_items'       => 'お知らせを検索',
            'not_found'          => 'お知らせが見つかりませんでした',
            'not_found_in_trash' => 'ゴミ箱にお知らせはありません',
            'all_items'          => 'すべてのお知らせ',
            'menu_name'          => 'お知らせ',
        ),
        'public'       => true,
        'has_archive'  => true,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-megaphone',
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'      => array('slug' => 'news'),
    ));
}
add_action('init', 'adors_register_post_types');

/**
 * カスタムタクソノミーの登録
 */
function adors_register_taxonomies() {
    // Worksのカテゴリー
    register_taxonomy('works_category', 'works', array(
        'labels' => array(
            'name'          => '実績カテゴリー',
            'singular_name' => '実績カテゴリー',
            'search_items'  => 'カテゴリーを検索',
            'all_items'     => 'すべてのカテゴリー',
            'edit_item'     => 'カテゴリーを編集',
            'update_item'   => 'カテゴリーを更新',
            'add_new_item'  => '新しいカテゴリーを追加',
            'new_item_name' => '新しいカテゴリー名',
            'menu_name'     => 'カテゴリー',
        ),
        'hierarchical'      => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'works-category'),
    ));

    // Newsのカテゴリー
    register_taxonomy('news_category', 'news', array(
        'labels' => array(
            'name'          => 'お知らせカテゴリー',
            'singular_name' => 'お知らせカテゴリー',
            'search_items'  => 'カテゴリーを検索',
            'all_items'     => 'すべてのカテゴリー',
            'edit_item'     => 'カテゴリーを編集',
            'update_item'   => 'カテゴリーを更新',
            'add_new_item'  => '新しいカテゴリーを追加',
            'new_item_name' => '新しいカテゴリー名',
            'menu_name'     => 'カテゴリー',
        ),
        'hierarchical'      => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'news-category'),
    ));
}
add_action('init', 'adors_register_taxonomies');

