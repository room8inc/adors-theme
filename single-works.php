<?php
/**
 * 解決事例詳細テンプレート
 *
 * @package ADOR'S
 */

get_header();
?>

<main id="main" class="site-main">
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <!-- ページヘッダー -->
            <section class="page-header bg-primary text-white py-16">
                <div class="container">
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'works_category');
                    if ($terms && !is_wp_error($terms)) :
                    ?>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($terms as $term) : ?>
                                <span class="text-sm bg-white bg-opacity-20 px-3 py-1 rounded-full">
                                    <?php echo esc_html($term->name); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4"><?php the_title(); ?></h1>
                    <time class="text-lg opacity-90" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                        <?php echo esc_html(get_the_date('Y年m月d日')); ?>
                    </time>
                </div>
            </section>

            <!-- メインコンテンツ -->
            <section class="entry-content py-16">
                <div class="container max-w-4xl">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail mb-8 rounded-lg overflow-hidden">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="prose prose-lg max-w-none">
                        <?php
                        the_content();

                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('ページ:', 'adors'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                </div>
            </section>

            <!-- 前後の投稿ナビゲーション -->
            <section class="border-t border-gray-200">
                <div class="container max-w-5xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 divide-y md:divide-y-0 md:divide-x divide-gray-200 border-b border-gray-200">
                        <?php
                        $prev_post = get_previous_post();
                        if ($prev_post) :
                        ?>
                            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="group block p-8 md:p-12 hover:bg-gray-50 transition-colors">
                                <span class="block text-xs font-bold text-gray-400 tracking-widest uppercase mb-2 group-hover:text-primary transition-colors">PREV</span>
                                <span class="block text-lg font-bold text-gray-900 group-hover:text-gray-600 transition-colors line-clamp-2">
                                    <?php echo get_the_title($prev_post->ID); ?>
                                </span>
                            </a>
                        <?php else : ?>
                            <div class="hidden md:block"></div>
                        <?php endif; ?>

                        <?php
                        $next_post = get_next_post();
                        if ($next_post) :
                        ?>
                            <a href="<?php echo get_permalink($next_post->ID); ?>" class="group block p-8 md:p-12 text-right hover:bg-gray-50 transition-colors">
                                <span class="block text-xs font-bold text-gray-400 tracking-widest uppercase mb-2 group-hover:text-primary transition-colors">NEXT</span>
                                <span class="block text-lg font-bold text-gray-900 group-hover:text-gray-600 transition-colors line-clamp-2">
                                    <?php echo get_the_title($next_post->ID); ?>
                                </span>
                            </a>
                        <?php else : ?>
                            <div class="hidden md:block"></div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            
            <div class="text-center py-16">
                <a href="<?php echo esc_url(home_url('/works')); ?>" class="inline-flex items-center text-gray-900 font-bold tracking-widest text-sm hover:text-primary transition-colors uppercase border-b border-gray-900 hover:border-primary pb-1">
                    Back to Works
                </a>
            </div>

            <!-- 関連事例 -->
            <?php
            $related_works = new WP_Query(array(
                'post_type'      => 'works',
                'posts_per_page' => 3,
                'post__not_in'   => array(get_the_ID()),
                'orderby'        => 'rand',
            ));

            if ($related_works->have_posts()) :
            ?>
            <section class="related-works bg-white py-16">
                <div class="container">
                    <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-900 mb-12">
                        関連する解決事例
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <?php while ($related_works->have_posts()) : $related_works->the_post(); ?>
                            <article class="works-item bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="block">
                                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover')); ?>
                                    </a>
                                <?php endif; ?>
                                <div class="p-6">
                                    <h3 class="text-lg font-bold text-gray-900 mb-3">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <a href="<?php the_permalink(); ?>" class="text-primary text-sm font-medium hover:underline">
                                        詳しく見る →
                                    </a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </article>
    <?php endwhile; ?>
</main>

<?php
get_footer();



