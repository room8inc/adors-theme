<?php
/**
 * アーカイブテンプレート
 *
 * @package ADOR'S
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- ページヘッダー -->
    <section class="page-header bg-gray-50 py-16">
        <div class="container">
            <header class="archive-header">
                <?php
                the_archive_title('<h1 class="text-4xl font-light mb-4">', '</h1>');
                the_archive_description('<div class="archive-description text-gray-600">', '</div>');
                ?>
            </header>
        </div>
    </section>

    <!-- アーカイブコンテンツ -->
    <section class="archive-content py-16">
        <div class="container">
            <?php
            if (have_posts()) :
                ?>
                <div class="archive-posts grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    while (have_posts()) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('archive-item border border-gray-200 rounded hover:shadow-lg transition'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="archive-item-thumbnail overflow-hidden rounded-t">
                                    <a href="<?php echo esc_url(get_permalink()); ?>">
                                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-auto transition-transform hover:scale-105')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <div class="archive-item-content p-6">
                                <header class="archive-item-header mb-4">
                                    <?php the_title('<h2 class="archive-item-title text-xl font-light mb-2"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="hover:text-primary transition">', '</a></h2>'); ?>
                                    <div class="archive-item-meta text-sm text-gray-500">
                                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                            <?php echo esc_html(get_the_date()); ?>
                                        </time>
                                    </div>
                                </header>

                                <div class="archive-item-excerpt text-gray-600 mb-4">
                                    <?php the_excerpt(); ?>
                                </div>

                                <footer class="archive-item-footer">
                                    <a href="<?php echo esc_url(get_permalink()); ?>" class="text-primary hover:underline">
                                        <?php _e('続きを読む', 'adors'); ?>
                                    </a>
                                </footer>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    ?>
                </div>

                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('前へ', 'adors'),
                    'next_text' => __('次へ', 'adors'),
                ));
                ?>
                <?php
            else :
                ?>
                <div class="no-posts text-center py-16">
                    <h2 class="text-2xl font-light mb-4"><?php _e('投稿が見つかりませんでした', 'adors'); ?></h2>
                    <p class="text-gray-600"><?php _e('お探しのコンテンツは見つかりませんでした。', 'adors'); ?></p>
                </div>
                <?php
            endif;
            ?>
        </div>
    </section>
</main>

<?php
get_footer();

