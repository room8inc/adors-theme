<?php
/**
 * 404エラーページテンプレート
 *
 * @package ADOR'S
 */

get_header();
?>

<main id="main" class="site-main">
    <section class="error-404 py-24">
        <div class="container">
            <div class="text-center max-w-2xl mx-auto">
                <header class="page-header mb-8">
                    <h1 class="text-6xl font-light mb-4 text-gray-400">404</h1>
                    <h2 class="text-3xl font-light mb-4"><?php _e('ページが見つかりませんでした', 'adors'); ?></h2>
                </header>

                <div class="page-content">
                    <p class="text-gray-600 mb-8 text-lg">
                        <?php _e('お探しのページは見つかりませんでした。URLをご確認いただくか、トップページからお探しください。', 'adors'); ?>
                    </p>

                    <div class="error-404-actions">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block px-8 py-3 bg-primary text-white rounded hover:bg-primary-dark transition">
                            <?php _e('トップページに戻る', 'adors'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();

