<?php
/**
 * フッターテンプレート
 *
 * @package ADOR'S
 */
?>

    <footer id="colophon" class="site-footer bg-gray-900 text-white mt-auto">
        <div class="container py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <!-- 会社情報 -->
                <div>
                    <h3 class="text-xl font-bold mb-6">ADOR'S</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        消防法・危険物関係法令のプロフェッショナルが、<br>
                        あなたのビジネスを守り、成長させます。
                    </p>
                </div>

                <!-- サービス -->
                <div>
                    <h3 class="text-lg font-bold mb-6">サービス</h3>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="<?php echo esc_url(home_url('/service#fire-consulting')); ?>" class="text-gray-400 hover:text-primary transition-colors">
                                消防法コンサルティング
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/service#hazardous-consulting')); ?>" class="text-gray-400 hover:text-primary transition-colors">
                                危険物施設コンサルティング
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/service#fire-consultation')); ?>" class="text-gray-400 hover:text-primary transition-colors">
                                消防協議支援
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/service#document-support')); ?>" class="text-gray-400 hover:text-primary transition-colors">
                                消防関係書類作成支援
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- 会社案内 -->
                <div>
                    <h3 class="text-lg font-bold mb-6">会社案内</h3>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="<?php echo esc_url(home_url('/concept')); ?>" class="text-gray-400 hover:text-primary transition-colors">
                                コンセプト
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/company')); ?>" class="text-gray-400 hover:text-primary transition-colors">
                                会社概要
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/works')); ?>" class="text-gray-400 hover:text-primary transition-colors">
                                解決事例
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/news')); ?>" class="text-gray-400 hover:text-primary transition-colors">
                                お知らせ
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- お問い合わせ -->
                <div>
                    <h3 class="text-lg font-bold mb-6">お問い合わせ</h3>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="text-gray-400 hover:text-primary transition-colors">
                                お問い合わせフォーム
                            </a>
                        </li>
                        <li class="text-gray-400">
                            <span class="block mb-1">TEL 052-414-7217</span>
                            <span class="block mb-1">FAX 052-414-7038</span>
                            <span class="block text-xs">受付時間: 平日 9:00-18:00</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- コピーライト -->
            <div class="pt-8 border-t border-gray-800">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-gray-400 text-sm">
                        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
                    </p>
                    <?php
                    if (has_nav_menu('footer')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_id'        => 'footer-menu',
                            'menu_class'     => 'flex flex-wrap gap-6 text-sm',
                            'container'      => false,
                            'depth'          => 1,
                            'walker'         => new class extends Walker_Nav_Menu {
                                function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
                                    $output .= '<li>';
                                    $output .= '<a href="' . esc_attr($item->url) . '" class="text-gray-400 hover:text-primary transition-colors">';
                                    $output .= esc_html($item->title);
                                    $output .= '</a>';
                                }
                            },
                        ));
                    }
                    ?>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
