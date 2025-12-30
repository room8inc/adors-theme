<?php
/**
 * お知らせ詳細テンプレート
 *
 * @package ADOR'S
 */

// デバッグ: このテンプレートが使われていることを確認
if (defined('WP_DEBUG') && WP_DEBUG) {
    echo '<!-- テンプレート: single-news.php が読み込まれています -->';
}

get_header();
?>

<main id="main" class="site-main">
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <!-- ページヘッダー -->
            <section class="relative bg-gray-50 py-20 md:py-32 border-b border-gray-100">
                <div class="container max-w-4xl">
                    <div class="flex flex-col md:flex-row md:items-center gap-6 mb-8">
                        <time class="text-sm font-bold text-gray-500 tracking-widest uppercase" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                            <?php echo esc_html(get_the_date('Y.m.d')); ?>
                        </time>
                        <?php
                        // カテゴリー表示
                        $categories = get_the_terms(get_the_ID(), 'news_category');
                        if ($categories && !is_wp_error($categories)) {
                            foreach ($categories as $category) {
                                echo '<span class="inline-block bg-white border border-gray-200 px-3 py-1 text-xs font-bold text-gray-600 rounded-sm">' . esc_html($category->name) . '</span>';
                            }
                        }
                        ?>
                    </div>
                    
                    <h1 class="text-3xl md:text-5xl font-black text-gray-900 leading-tight tracking-tight mb-0">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </section>

            <!-- コンテンツ -->
            <section class="py-20 bg-white">
                <div class="container max-w-3xl">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail mb-16 rounded-sm overflow-hidden shadow-sm">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="prose prose-sm max-w-none font-sans text-black
                        prose-headings:font-bold prose-headings:text-black prose-headings:tracking-tight 
                        prose-h2:text-2xl prose-h2:mt-14 prose-h2:mb-6 prose-h2:pb-3 prose-h2:border-b-2 prose-h2:border-gray-200
                        prose-h3:text-xl prose-h3:mt-10 prose-h3:mb-4 prose-h3:pl-4 prose-h3:border-l-4 prose-h3:border-primary
                        prose-h4:text-lg prose-h4:mt-8 prose-h4:mb-3 prose-h4:font-semibold
                        prose-p:text-sm prose-p:text-black prose-p:leading-[1.8] prose-p:tracking-[0.05em] prose-p:mb-6
                        prose-a:text-primary prose-a:no-underline hover:prose-a:underline 
                        prose-strong:text-black prose-strong:font-bold
                        prose-li:text-sm prose-li:leading-[1.8] prose-li:tracking-[0.05em] prose-li:text-black prose-li:mb-2
                        prose-ul:my-6 prose-ol:my-6">
                        <?php
                        the_content();

                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . __('Pages:', 'adors'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>

                    <?php
                    $tags = get_the_tags();
                    if (!empty($tags)) {
                        ?>
                        <div class="mt-16 pt-8 border-t border-gray-100">
                            <div class="flex flex-wrap gap-2">
                                <span class="text-sm font-bold text-gray-400 mr-2 py-1">TAGS:</span>
                                <?php
                                foreach ($tags as $tag) {
                                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="inline-block px-3 py-1 bg-gray-50 text-gray-600 text-sm font-medium rounded-sm hover:bg-primary hover:text-white transition-colors duration-300">' . esc_html($tag->name) . '</a>';
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    
                    <!-- シェアボタン（簡易版） -->
                    <div class="mt-12 flex items-center justify-end gap-4">
                        <span class="text-sm font-bold text-gray-400">SHARE:</span>
                        <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-900 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-900 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036c-2.148 0-2.971.956-2.971 3.594v.417h3.392l-.637 3.667h-2.755v7.98h-4.843Z"/></svg>
                        </a>
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
                <a href="<?php echo esc_url(home_url('/news')); ?>" class="inline-flex items-center text-gray-900 font-bold tracking-widest text-sm hover:text-primary transition-colors uppercase border-b border-gray-900 hover:border-primary pb-1">
                    Back to News
                </a>
            </div>
        </article>
        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
