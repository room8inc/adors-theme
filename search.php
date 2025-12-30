<?php
/**
 * The template for displaying search results pages
 */

get_header();
?>

<main id="primary" class="site-main py-16">
    <div class="container">
        <header class="page-header mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">
                <?php
                printf(
                    esc_html__('検索結果: %s', 'adors'),
                    '<span class="text-primary">' . get_search_query() . '</span>'
                );
                ?>
            </h1>
        </header>

        <?php if (have_posts()) : ?>

            <div class="space-y-8">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', 'search');
                endwhile;
                ?>
            </div>

            <?php
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('← 前へ', 'adors'),
                'next_text' => __('次へ →', 'adors'),
                'class'     => 'mt-12',
            ));
            ?>

        <?php else : ?>

            <div class="bg-gray-50 rounded-lg p-8 text-center">
                <p class="text-gray-600 mb-6">
                    <?php esc_html_e('お探しのページは見つかりませんでした。別のキーワードで検索してみてください。', 'adors'); ?>
                </p>
                <?php get_search_form(); ?>
            </div>

        <?php endif; ?>
    </div>
</main>

<?php
get_footer();

