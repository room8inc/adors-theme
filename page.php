<?php
/**
 * 固定ページテンプレート
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
            <section class="page-header bg-gray-50 py-16">
                <div class="container">
                    <h1 class="entry-title text-4xl font-light">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </section>

            <!-- コンテンツ -->
            <section class="entry-content py-16">
                <div class="container max-w-4xl">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="page-thumbnail mb-8">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto rounded')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="prose prose-lg max-w-none">
                        <?php
                        the_content();

                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . __('Pages:', 'adors'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                </div>
            </section>
        </article>
        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();

