<?php
/**
 * Search form template
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="sr-only" for="s"><?php _e('検索:', 'adors'); ?></label>
    <div class="flex gap-2">
        <input 
            type="search" 
            class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary" 
            placeholder="<?php echo esc_attr_x('検索...', 'placeholder', 'adors'); ?>" 
            value="<?php echo get_search_query(); ?>" 
            name="s" 
            id="s"
        />
        <button 
            type="submit" 
            class="px-6 py-2 bg-primary text-white rounded-md hover:bg-primary-700 transition-colors"
        >
            <?php echo esc_html_x('検索', 'submit button', 'adors'); ?>
        </button>
    </div>
</form>

