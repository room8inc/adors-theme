<?php
/**
 * The template for displaying comments
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area mt-12">
    <?php if (have_comments()) : ?>
        <h2 class="text-2xl font-bold text-gray-900 mb-6">
            <?php
            $comment_count = get_comments_number();
            if ('1' === $comment_count) {
                printf(
                    esc_html__('1件のコメント', 'adors')
                );
            } else {
                printf(
                    esc_html(_n('%1$s件のコメント', '%1$s件のコメント', $comment_count, 'adors')),
                    number_format_i18n($comment_count)
                );
            }
            ?>
        </h2>

        <ol class="comment-list space-y-6">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
            ));
            ?>
        </ol>

        <?php
        the_comments_navigation();
        ?>

    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments text-gray-600">
            <?php esc_html_e('コメントは受け付けていません。', 'adors'); ?>
        </p>
    <?php endif; ?>

    <?php
    comment_form(array(
        'class_form'           => 'space-y-4',
        'class_submit'         => 'px-6 py-3 bg-primary text-white rounded-md hover:bg-primary-700 transition-colors cursor-pointer',
        'title_reply'          => __('コメントを残す', 'adors'),
        'title_reply_to'       => __('%s への返信', 'adors'),
        'cancel_reply_link'    => __('返信をキャンセル', 'adors'),
        'label_submit'         => __('送信', 'adors'),
        'comment_field'        => '<p class="comment-form-comment"><label for="comment" class="block text-sm font-medium text-gray-700 mb-2">' . _x('コメント', 'noun', 'adors') . '</label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required" class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary"></textarea></p>',
    ));
    ?>
</div>

