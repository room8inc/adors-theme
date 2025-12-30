<?php
/**
 * メインテンプレートファイル
 *
 * このファイルは、他のテンプレートファイルが存在しない場合のフォールバックとして使用されます。
 *
 * @package ADOR'S
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title">
                            <?php
                            if (is_singular()) {
                                the_title();
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                <?php
                            }
                            ?>
                        </h1>
                        <?php if (!is_page()) : ?>
                            <div class="entry-meta">
                                <span class="posted-on">
                                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                        <?php echo esc_html(get_the_date()); ?>
                                    </time>
                                </span>
                            </div>
                        <?php endif; ?>
                    </header>

                    <div class="entry-content">
                        <?php
                        if (is_singular()) {
                            the_content();
                        } else {
                            the_excerpt();
                        }
                        ?>
                    </div>

                    <?php if (!is_singular()) : ?>
                        <footer class="entry-footer">
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                                <?php _e('続きを読む', 'adors'); ?>
                            </a>
                        </footer>
                    <?php endif; ?>
                </article>
                <?php
            endwhile;

            // ページネーション
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('前へ', 'adors'),
                'next_text' => __('次へ', 'adors'),
            ));
        else :
            ?>
            <div class="no-results">
                <h1 class="entry-title"><?php _e('コンテンツが見つかりませんでした', 'adors'); ?></h1>
                <p><?php _e('お探しのコンテンツは見つかりませんでした。', 'adors'); ?></p>
            </div>
            <?php
        endif;
        ?>
    </div>
</main>

<?php
get_footer();

