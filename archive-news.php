<?php
/**
 * お知らせアーカイブテンプレート
 *
 * @package ADOR'S
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- ページヘッダー -->
    <section class="page-header bg-primary text-white py-16">
        <div class="container">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">お知らせ</h1>
            <p class="text-lg opacity-90">新着情報・お知らせ一覧</p>
        </div>
    </section>

    <!-- お知らせ一覧 -->
    <section class="news-archive py-16">
        <div class="container max-w-4xl">
            <?php if (have_posts()) : ?>
                <div class="space-y-6">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('news-item bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow'); ?>>
                            <div class="flex flex-col md:flex-row md:items-start gap-4">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="flex-shrink-0">
                                        <a href="<?php the_permalink(); ?>" class="block">
                                            <?php the_post_thumbnail('thumbnail', array('class' => 'w-full md:w-32 h-32 object-cover rounded-lg')); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="flex-1">
                                    <div class="flex flex-wrap items-center gap-3 mb-3">
                                        <time class="text-sm text-gray-500" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                            <?php echo esc_html(get_the_date('Y.m.d')); ?>
                                        </time>
                                        <span class="text-xs bg-primary-100 text-primary px-3 py-1 rounded-full">
                                            <?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name); ?>
                                        </span>
                                    </div>
                                    <h2 class="text-xl font-bold text-gray-900 mb-3">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    <?php if (has_excerpt()) : ?>
                                        <p class="text-gray-600 mb-4 line-clamp-2">
                                            <?php echo esc_html(get_the_excerpt()); ?>
                                        </p>
                                    <?php endif; ?>
                                    <a href="<?php the_permalink(); ?>" class="text-primary text-sm font-medium hover:underline">
                                        続きを読む →
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- ページネーション -->
                <div class="pagination mt-12">
                    <?php
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => __('&laquo; 前へ', 'adors'),
                        'next_text' => __('次へ &raquo;', 'adors'),
                    ));
                    ?>
                </div>
            <?php else : ?>
                <div class="text-center py-16">
                    <p class="text-gray-600 text-lg">お知らせが見つかりませんでした。</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();

