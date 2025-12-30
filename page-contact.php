<?php
/**
 * お問い合わせページテンプレート
 *
 * @package ADOR'S
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- ページヘッダー -->
    <section class="page-header bg-primary text-white py-16">
        <div class="container">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">お問い合わせ</h1>
            <p class="text-lg opacity-90">概算見積もり・スポット相談・顧問契約など、お気軽にお問い合わせください</p>
        </div>
    </section>

    <!-- 段階的CTA -->
    <section class="py-16 bg-gray-50">
        <div class="container">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    まずは、お気軽に情報収集から
                </h2>
                <p class="text-gray-600 text-lg">
                    いきなりお問い合わせは不安...という方も、まずは資料ダウンロードや簡単な診断から始められます。
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- ライト：資料ダウンロード -->
                <div class="bg-white rounded-lg p-8 border-2 border-gray-200 hover:border-primary transition-all">
                    <div class="text-center mb-4">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-full mb-4">
                            <span class="text-3xl">📄</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">資料ダウンロード</h3>
                        <p class="text-sm text-gray-500 mb-4">気軽に情報収集</p>
                    </div>
                    <ul class="text-sm text-gray-700 space-y-2 mb-6">
                        <li>✓ 危険物取扱施設のリスクチェックリスト</li>
                        <li>✓ コスト削減事例集</li>
                        <li>✓ サービス資料</li>
                    </ul>
                    <a href="#download" class="block text-center bg-gray-100 text-gray-900 py-3 px-6 font-bold hover:bg-gray-200 transition-colors rounded">
                        資料をダウンロード
                    </a>
                </div>

                <!-- ミディアム：無料診断 -->
                <div class="bg-white rounded-lg p-8 border-2 border-primary hover:shadow-lg transition-all relative">
                    <div class="absolute top-0 right-0 bg-primary text-white text-xs font-bold px-3 py-1 uppercase">Popular</div>
                    <div class="text-center mb-4">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-primary/10 rounded-full mb-4">
                            <span class="text-3xl">✓</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">無料診断</h3>
                        <p class="text-sm text-gray-500 mb-4">現状を把握</p>
                    </div>
                    <ul class="text-sm text-gray-700 space-y-2 mb-6">
                        <li>✓ 建物内火災リスク診断</li>
                        <li>✓ 法令適合性チェック</li>
                        <li>✓ コスト削減可能性診断</li>
                    </ul>
                    <a href="#diagnosis" class="block text-center bg-primary text-white py-3 px-6 font-bold hover:bg-primary/90 transition-colors rounded">
                        無料診断を申し込む
                    </a>
                </div>

                <!-- ヘビー：お問い合わせ -->
                <div class="bg-white rounded-lg p-8 border-2 border-gray-200 hover:border-primary transition-all">
                    <div class="text-center mb-4">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-full mb-4">
                            <span class="text-3xl">💬</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">お問い合わせ</h3>
                        <p class="text-sm text-gray-500 mb-4">具体的な相談</p>
                    </div>
                    <ul class="text-sm text-gray-700 space-y-2 mb-6">
                        <li>✓ 概算見積もり依頼</li>
                        <li>✓ スポット相談</li>
                        <li>✓ 顧問契約の相談</li>
                    </ul>
                    <a href="#contact-form" class="block text-center bg-gray-100 text-gray-900 py-3 px-6 font-bold hover:bg-gray-200 transition-colors rounded">
                        お問い合わせフォームへ
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- お問い合わせフォーム -->
    <section id="contact-form" class="contact-form-section py-16 lg:py-24">
        <div class="container max-w-4xl">
            <div class="bg-white rounded-lg shadow-sm p-8 lg:p-12">
                <?php
                // Contact Form 7が有効な場合
                if (shortcode_exists('contact-form-7')) {
                    echo do_shortcode('[contact-form-7 id="275eb36" title="お問い合わせ"]');
                } else {
                    // デフォルトのお問い合わせフォーム
                    ?>
                    <form method="post" action="" class="contact-form space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                お名前 <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                メールアドレス <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                電話番号
                            </label>
                            <input type="tel" id="phone" name="phone"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                        </div>

                        <div>
                            <label for="inquiry_type" class="block text-sm font-medium text-gray-700 mb-2">
                                お問い合わせ種別 <span class="text-red-500">*</span>
                            </label>
                            <select id="inquiry_type" name="inquiry_type" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                                <option value="">選択してください</option>
                                <option value="estimate">概算見積もり依頼</option>
                                <option value="consultation">スポット相談</option>
                                <option value="contract">顧問契約の相談</option>
                                <option value="diagnosis">リスク診断</option>
                                <option value="filing">届出作成</option>
                                <option value="app">スマメ（アプリ）について</option>
                                <option value="other">その他</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                お問い合わせ内容 <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" name="message" rows="6" required
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"></textarea>
                        </div>

                        <div class="flex items-start">
                            <input type="checkbox" id="privacy" name="privacy" required
                                   class="mt-1 mr-3 h-4 w-4 text-primary border-gray-300 rounded focus:ring-primary">
                            <label for="privacy" class="text-sm text-gray-600">
                                <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="text-primary hover:underline">プライバシーポリシー</a>に同意します
                                <span class="text-red-500">*</span>
                            </label>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary w-full py-4 text-lg">
                                送信する
                            </button>
                        </div>
                    </form>

                    <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                        <p class="text-sm text-blue-800">
                            <strong>※注意:</strong> このフォームはデモ用です。実際の送信機能を利用するには、Contact Form 7プラグインのインストールと設定が必要です。
                        </p>
                    </div>
                    <?php
                }
                ?>
            </div>

            <!-- 連絡先情報 -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-sm p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">お電話でのお問い合わせ</h3>
                    <p class="text-gray-600 mb-2">営業時間: 平日 9:00 - 18:00</p>
                    <p class="text-2xl font-bold text-primary">0120-XXX-XXX</p>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">対応エリア</h3>
                    <p class="text-gray-600">
                        愛知県・岐阜県・三重県を中心に、全国対応可能です。<br>
                        まずはお気軽にお問い合わせください。
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();

