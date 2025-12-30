<?php
/**
 * Template part for displaying search results
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow'); ?>>
    <header class="entry-header mb-4">
        <div class="flex items-center gap-3 mb-2">
            <time class="text-sm text-gray-500" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                <?php echo esc_html(get_the_date('Y.m.d')); ?>
            </time>
            <span class="text-xs bg-primary-100 text-primary px-3 py-1 rounded-full">
                <?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name); ?>
            </span>
        </div>
        
        <?php the_title(sprintf('<h2 class="text-2xl font-bold text-gray-900 mb-3"><a href="%s" class="hover:text-primary transition-colors">', esc_url(get_permalink())), '</a></h2>'); ?>
    </header>

    <div class="entry-summary text-gray-600 mb-4">
        <?php the_excerpt(); ?>
    </div>

    <footer class="entry-footer">
        <a href="<?php the_permalink(); ?>" class="text-primary font-medium hover:underline">
            続きを読む →
        </a>
    </footer>
</article>

