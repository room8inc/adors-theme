<?php
/**
 * 解決事例アーカイブテンプレート
 *
 * @package ADOR'S
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- ページヘッダー -->
    <section class="page-header bg-primary text-white py-16">
        <div class="container">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">解決事例</h1>
            <p class="text-lg opacity-90">コスト削減実例、法改正対応事例など</p>
        </div>
    </section>

    <!-- カテゴリーフィルター -->
    <?php
    $categories = get_terms(array(
        'taxonomy' => 'works_category',
        'hide_empty' => false,
    ));

    if (!empty($categories) && !is_wp_error($categories)) :
    ?>
    <section class="category-filter bg-gray-50 py-6 border-b border-gray-200">
        <div class="container">
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" 
                   class="px-4 py-2 rounded-full <?php echo is_post_type_archive('works') && !is_tax() ? 'bg-primary text-white' : 'bg-white text-gray-700 hover:bg-gray-100'; ?> transition-colors">
                    すべて
                </a>
                <?php foreach ($categories as $category) : ?>
                    <a href="<?php echo esc_url(get_term_link($category)); ?>" 
                       class="px-4 py-2 rounded-full <?php echo is_tax('works_category', $category->slug) ? 'bg-primary text-white' : 'bg-white text-gray-700 hover:bg-gray-100'; ?> transition-colors">
                        <?php echo esc_html($category->name); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 事例一覧 -->
    <section class="works-archive py-16">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('works-item bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" class="block">
                                    <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover')); ?>
                                </a>
                            <?php endif; ?>
                            <div class="p-6">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'works_category');
                                if ($terms && !is_wp_error($terms)) :
                                ?>
                                    <div class="flex flex-wrap gap-2 mb-3">
                                        <?php foreach ($terms as $term) : ?>
                                            <span class="text-xs bg-primary-100 text-primary px-3 py-1 rounded-full">
                                                <?php echo esc_html($term->name); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <h2 class="text-xl font-bold text-gray-900 mb-3">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <?php if (has_excerpt()) : ?>
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                        <?php echo esc_html(get_the_excerpt()); ?>
                                    </p>
                                <?php endif; ?>
                                <div class="flex items-center justify-between">
                                    <time class="text-sm text-gray-500" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                        <?php echo esc_html(get_the_date('Y.m.d')); ?>
                                    </time>
                                    <a href="<?php the_permalink(); ?>" class="text-primary text-sm font-medium hover:underline">
                                        詳しく見る →
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
                    <p class="text-gray-600 text-lg">解決事例が見つかりませんでした。</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();

